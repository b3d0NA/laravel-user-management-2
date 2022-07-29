var sub_cat_index;
var sub_sub_cat_index;
$(document).ready(function () {
	$("#category").on("change", function () {
		sub_cat_index = this.selectedIndex - 1;
		$.ajax({
			url: "/getSubCats/" + sub_cat_index,
			type: "GET",
			xhrFields: {
				withCredentials: true,
			},
			crossDomain: true,
			contentType: "application/json",
			success: function (res) {
				addSubCategorySelect(res.sub_categories);
			},
			error: function (err) {
				console.error(err);
			},
		});
	});

	$(document).on({
		ajaxSend: function (event, jqxhr, settings) {
			if (settings.url !== "/getJson") {
				$("#overlay").fadeIn(300);
			}
		},
		ajaxStop: function () {
			setTimeout(function () {
				$("#overlay").fadeOut(300);
			}, 500);
		},
	});
});

function addSubCategorySelect(cats) {
	let cat_s = $('<select id="subCats" name="subCats" class="form-select"/>');
	$(cat_s).append(
		'<option value="" disabled selected>Select a sub category from this list</option>'
	);
	cats.map((item) => {
		$("<option />", { value: item, text: item }).appendTo(cat_s);
	});
	$("#form").append(cat_s);
	$(cat_s).on("change", function () {
		sub_sub_cat_index = this.selectedIndex - 1;
		$.ajax({
			url: `/getSubSubCats/${sub_cat_index}/${sub_sub_cat_index}`,
			type: "GET",
			xhrFields: {
				withCredentials: true,
			},
			crossDomain: true,
			contentType: "application/json",
			success: function (res) {
				addSubSubCategorySelect(res.sub_sub_categories);
			},
			error: function (err) {
				console.error(err);
			},
		});
	});
}

function addSubSubCategorySelect(cats) {
	let sub_cat_s = $(
		'<select id="subSubCats" name="subSubCats" class="form-select"/>'
	);
	$(sub_cat_s).append(
		'<option value="" disabled selected>Select a sub-sub category from this list</option>'
	);
	cats.map((item) => {
		$("<option />", { value: item, text: item }).appendTo(sub_cat_s);
	});
	$("#form").append(sub_cat_s);
	let page_limit_input = $(
		'<input id="pageLimit" name="pageLimit" class="form-control" placeholder="Enter page limit to scrape (ex. 2-5)"/>'
	);
	$("#form").append(page_limit_input);
	let submit_btn = $(
		'<button id="submit" name="submit" type="button" class="btn btn-primary">Submit</button>'
	);
	$("#form").append(submit_btn);

	$(submit_btn).click(function () {
		this.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
		<span class="visually-hidden">Loading...</span>`;
		let sub_sub_cat_index = $(sub_cat_s).prop("selectedIndex") - 1;
		let page_limit = $(page_limit_input).val();

		const formData = {
			last_index: sub_sub_cat_index,
			page_limit: page_limit,
		};

		$.ajax({
			url: `/startScrape`,
			type: "POST",
			xhrFields: {
				withCredentials: true,
			},
			crossDomain: true,
			contentType: "application/json",
			data: JSON.stringify(formData),
			dataType: "json",
			success: function (res) {
				startGettingJson();
			},
			error: function (err) {
				console.error(err);
			},
		});
	});
}

function startGettingJson() {
	sub_sub_cat_name = $("#subSubCats").val();
	const formData = {
		name: sub_sub_cat_name,
	};
	setInterval(function () {
		$.ajax({
			url: `/getJson`,
			type: "POST",
			xhrFields: {
				withCredentials: true,
			},
			data: JSON.stringify(formData),
			crossDomain: true,
			contentType: "application/json",
			success: function (res) {
				designJson(res.data);
			},
			error: function (err) {
				console.error(err);
			},
		});
	}, 5000);
}

function designJson(data) {
	$("#category").fadeOut(3000);
	$("#subCats").fadeOut(3000);
	$("#subSubCats").fadeOut(3000);
	$("#pageLimit").fadeOut(3000);
	$("#jsonTable").html("");
	let table = $('<table class="table table-striped"></table>');
	let thead = $("<thead></thead>");
	let theadTr = $("<tr></tr>");

	let theadTrTh = $(`
		<th scope="col">#</th>
		<th scope="col">ID</th>
		<th scope="col">Name</th>
		<th scope="col">Price</th>
	`);
	$(table).append(thead);
	$(thead).append(theadTr);
	$(theadTr).append(theadTrTh);
	$("#jsonTable").append(table);
	if (data) {
		let tbody = $(`<tbody></tbody>`).appendTo(table);
		data.map(function (item, index) {
			$(tbody).append(`
				<tr>
					<th scope="row">${index + 1}</th>
					<td>${item.id}</td>
					<td>${item.name}</td>
					<td>${item.price}</td>
				</tr>
			`);
		});
	}
}
