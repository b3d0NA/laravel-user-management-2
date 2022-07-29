# from importlib import reload

from flask import Flask, jsonify, render_template, request
from flask_cors import CORS
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.by import By

from scraper import (getInitialCategories, getScrapedJson, getSubCategories,
                     getSubSubCategories, initilizeScraper, startScraping)

# creating a Flask app
app = Flask(__name__)
app.config["TEMPLATES_AUTO_RELOAD"] = True
CORS(app, resources={r"/*": {"origins": "*"}})


options = webdriver.ChromeOptions()
# options.binary_location = os.environ.get("GOOGLE_CHROME_BIN")
# options.add_argument("--window-size=1920,1080")
# options.add_argument("--start-maximized")
# options.add_argument('--headless')
# options.add_argument('--no-sandbox')
# options.add_argument('--disable-dev-shm-usage')
# options.add_argument('--disable-features=VizDisplayCompositor')
# options.add_argument('--disable-browser-side-navigation')
# options.add_argument('--remote-debugging-port=9222')
# options.add_argument("disable-infobars")
# service = Service(os.environ.get("CHROMEDRIVER_PATH"))
service = Service("/mnt/5470100A49D7EDC7/Projects/Python/chromedriver")
driver = ""
session_id = ""
# reload(startScraping)
# reload(initilizeScraper)
# reload(getScrapedJson)
@app.route('/', methods = ['GET'])
def home():
    # global driver
    # global session_id
    initilizeScraper()
    # driver = webdriver.Chrome(service=service, options=options)
    # driver.session_id = session_id
    # driver.maximize_window()
    results = getInitialCategories()
    categories = [result.text for result in results]
    return render_template("index.html", categories=categories)
  
@app.route('/getSubCats/<index>', methods = ['GET'])
def getSubCats(index):
    sub_cats = getSubCategories(int(index))
    sub_cats = [result.find_element(By.TAG_NAME, "a").text for result in sub_cats]
    response = jsonify({'sub_categories': sub_cats})
    return response

@app.route('/getSubSubCats/<sub_index>/<index>', methods = ['GET'])
def getSubSubCats(sub_index, index):
    sub_sub_cats = getSubSubCategories(int(sub_index), int(index))
    sub_sub_cats = [result.text for result in sub_sub_cats]
    response = jsonify({'sub_sub_categories': sub_sub_cats})
    return response


@app.route('/startScrape', methods = ['POST'])
def startScrape():
    redirect_index = request.json["last_index"]
    page_limit = request.json["page_limit"]
    data_json = startScraping(int(redirect_index), page_limit)
    response = jsonify({'sub_sub_categories': data_json})
    return response

@app.route('/getJson', methods = ['POST'])
def getJson():
    data_json = getScrapedJson(request.json["name"])
    response = jsonify({"data": data_json})
    return response

if __name__ == '__main__':
    app.run(debug = True)
