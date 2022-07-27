import json
import os
import re
import time
from os import path

from click import option
from selenium import webdriver
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait
from termcolor import colored

base_url = "https://www.aliexpress.com/"
SCROLL_PAUSE_TIME = 4
JSON_FILE_NAME = "products.json"

def scrollUntillBottom(driver):
    productObj = []
    last_height = driver.execute_script("return document.body.scrollHeight")

    while True:
        # Scroll down to bottom
        driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")

        driver.find_element(By.TAG_NAME, "body").send_keys(Keys.PAGE_UP)

        # Wait to load page
        time.sleep(SCROLL_PAUSE_TIME)

        driver.find_element(By.TAG_NAME, "body").send_keys(Keys.PAGE_DOWN)


        # Calculate new scroll height and compare with last scroll height
        new_height = driver.execute_script("return document.body.scrollHeight")
        if new_height == last_height:
            break
        last_height = new_height

def scrapeProduct(driver):
    product_id = re.findall("(\d+)[^\d]+html", driver.current_url)[0]
    driver.find_element(By.TAG_NAME, "body").send_keys(Keys.PAGE_DOWN)
    product_name = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "product-title-text"))).text
    product_images = driver.find_elements(By.CLASS_NAME, "images-view-item")
    try:
        product_price = driver.find_element(By.CLASS_NAME, "product-price-value").text
    except:
        product_price = driver.find_element(By.CLASS_NAME, "uniform-banner-box-price").text
    product_description = driver.find_element(By.ID, "product-description").text
    print(colored(f"[{product_id}] => {product_name} ==> {product_price} =======> Done", "green"))

    if path.isfile(JSON_FILE_NAME) is False:
        with open(JSON_FILE_NAME, "w") as fp:
            fp.write("[]")

    with open(JSON_FILE_NAME) as fp:
        productObj = json.load(fp)
    productObj.append({
        "id": product_id,
        "name": product_name,
        "images": [image.find_element(By.TAG_NAME, "img").get_attribute("src") for image in product_images],
        "price": product_price,
        "description": product_description
    })
    with open(JSON_FILE_NAME, 'w') as json_file:
        json.dump(productObj, json_file, 
                        indent=4,  
                        separators=(',',': '))

options = webdriver.ChromeOptions()
options.binary_location = os.environ.get("GOOGLE_CHROME_BIN")
options.add_argument("--window-size=1920,1080")
options.add_argument("--start-maximized")
options.add_argument('--headless')
options.add_argument('--no-sandbox')
options.add_argument('--disable-dev-sh-usage')
service = Service(os.environ.get("CHROMEDRIVER_PATH"))
driver = webdriver.Chrome(service=service, options=options)
driver.maximize_window()
driver.get(base_url)

# Removing coupon
try:
    coupon_elem = WebDriverWait(driver, 5).until(EC.presence_of_element_located((By.CLASS_NAME, 'poplayer-content')))
    coupon_elem.find_element(By.CLASS_NAME, "btn-close").click()
except:
    pass


categories_name = WebDriverWait(driver, 5).until(EC.presence_of_all_elements_located((By.CLASS_NAME, 'cate-name')))


for i,item in enumerate(categories_name):
    print(f"[{i}] "+item.text)
print("\n")
category_input = int(input("[+] Enter the number which category you want to choose (ex: 3): "))
category_hover = ActionChains(driver).move_to_element(categories_name[category_input])
category_hover.perform()

time.sleep(2)
categories_parent_elem = driver.find_elements(By.CLASS_NAME, "cl-item")

sub_categories_elem = categories_parent_elem[category_input].find_elements(By.CLASS_NAME, "sub-cate-items")
for i,sub_cat_elem in enumerate(sub_categories_elem):
    sub_cat_name = sub_cat_elem.find_element(By.TAG_NAME, "a").text
    print(f"[{i}] "+sub_cat_name)
print("\n")
sub_category_input = int(input("[+] Enter the number which sub category you want to choose (ex: 2): "))

sub_sub_cat_names = sub_categories_elem[sub_category_input].find_elements(By.TAG_NAME, "a")[1:]

for i,sub_sub_cat_name in enumerate(sub_sub_cat_names):
    print(f"[{i}] "+sub_sub_cat_name.text)

print("\n")
sub_sub_category_input = int(input("[+] Enter the number which sub-sub category you want to choose (ex: 2): "))
page_limit = input("[+] Enter your page limit you want to scrape (ex: 1-8): ")
page_limit_splitted = page_limit.split("-")
page_limit_min = int(page_limit_splitted[0])
page_limit_max = int(page_limit_splitted[1])

if page_limit_min != 1:
    cat_page_link = sub_sub_cat_names[sub_sub_category_input].get_attribute("href")+"page="+str(page_limit_min)
    page_limit_min+=1
    page_limit_max+=2
else:
    cat_page_link = sub_sub_cat_names[sub_sub_category_input].get_attribute("href")
driver.get(cat_page_link)


scrollUntillBottom(driver)




for page_number in range(page_limit_min, page_limit_max):
    products_link = WebDriverWait(driver, 10).until(EC.presence_of_all_elements_located((By.CLASS_NAME, '_2f4Ho')))
    for product_link in products_link:
        product_link = product_link.get_attribute("href")
        driver.execute_script(f'''window.open("{product_link}","_blank");''')
        driver.switch_to.window(driver.window_handles[-1])
        print("\n")
        product_json = scrapeProduct(driver)
        driver.close()
        driver.switch_to.window(driver.window_handles[0])
    page_input_parent =  WebDriverWait(driver, 5).until(EC.presence_of_all_elements_located((By.CLASS_NAME, "next-input")))[2]
    page_input = page_input_parent.find_element(By.TAG_NAME, "input")
    page_input.click()
    page_input.send_keys(Keys.CONTROL + "a")
    page_input.send_keys(Keys.DELETE)
    page_input.send_keys(page_number)
    time.sleep(1)
    driver.find_element(By.CLASS_NAME, "jump-btn").click()
    time.sleep(3)
    
driver.close()


