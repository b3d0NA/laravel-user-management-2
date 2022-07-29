import json
import os
import re
import threading
import time
from os import path

import requests
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
JSON_FILE_NAME = "products"
sub_sub_cat_names = ''
page_number = 0
options = webdriver.ChromeOptions()
# options.binary_location = os.environ.get("GOOGLE_CHROME_BIN")
options.add_argument("--window-size=1920,1080")
options.add_argument("--start-maximized")
options.add_argument('--headless')
options.add_argument('--no-sandbox')
options.add_argument('--disable-dev-shm-usage')
options.add_argument('--disable-features=VizDisplayCompositor')
options.add_argument('--disable-browser-side-navigation')
options.add_argument('--remote-debugging-port=9222')
options.add_argument("disable-infobars")
# service = Service(os.environ.get("CHROMEDRIVER_PATH"))
service = Service("/mnt/5470100A49D7EDC7/Projects/Python/chromedriver")
driver = ""

def initilizeScraper():
    global page_number
    global sub_sub_cat_names
    global driver
    page_number = 0
    sub_sub_cat_names = ""
    driver = webdriver.Chrome(service=service, options=options)
    driver.maximize_window()


def scrollUntillBottom(driver):
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

def scrapeProduct(driver, cat_name):
    global productObj
    product_id = re.findall("(\d+)[^\d]+html", driver.current_url)[0]
    driver.find_element(By.TAG_NAME, "body").send_keys(Keys.PAGE_DOWN)
    try:
        product_name = WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, "product-title-text"))).text
    except:
        product_name = ""

    
    product_images = driver.find_elements(By.CLASS_NAME, "images-view-item")
    try:
        product_price = driver.find_element(By.CLASS_NAME, "product-price-value").text
    except:
        product_price = driver.find_element(By.CLASS_NAME, "uniform-banner-box-price").text

    try:
        product_description = WebDriverWait(driver, 5).until(EC.presence_of_element_located((By.ID, "product-description")))
        product_description = driver.execute_script("return arguments[0].innerHTML;", product_description)
    except:
        product_description = ""
    print(colored(f"[{product_id}] => {product_name} ==> {product_price} =======> Done", "green"))

    filename = JSON_FILE_NAME+"-"+cat_name+".json"
    newJsonbj = {
                "id": product_id,
                "name": product_name,
                "images": [image.find_element(By.TAG_NAME, "img").get_attribute("src").replace("_50x50.jpg_.webp", "") for image in product_images],
                "price": product_price,
                "description": product_description
            }
    if not os.path.exists(filename):
        f = open(filename, "w")
        towrite = []
        towrite.append(newJsonbj)
        json.dump(towrite, f, indent=4, separators=(',',': '))
    else:
        with open(filename, "r") as obj:
            data = json.load(obj)
            
            data.append(newJsonbj)
            resp = requests.post('https://hilibi.com/ali/index.php', json=data)
            with open(filename, 'w') as json_file:
                json.dump(data, json_file, 
                                indent=4,  
                                separators=(',',': '))
            return newJsonbj
def getInitialCategories():
    
    driver.get(base_url)

    # Removing coupon
    try:
        coupon_elem = WebDriverWait(driver, 5).until(EC.presence_of_element_located((By.CLASS_NAME, 'poplayer-content')))
        coupon_elem.find_element(By.CLASS_NAME, "btn-close").click()
    except:
        pass
    return WebDriverWait(driver, 5).until(EC.presence_of_all_elements_located((By.CLASS_NAME, 'cate-name')))

def getSubCategories(index):
    categories_name = WebDriverWait(driver, 5).until(EC.presence_of_all_elements_located((By.CLASS_NAME, 'cate-name')))
    category_input = index
    category_hover = ActionChains(driver).move_to_element(categories_name[category_input])
    category_hover.perform()

    time.sleep(2)
    categories_parent_elem = driver.find_elements(By.CLASS_NAME, "cl-item")

    return categories_parent_elem[category_input].find_elements(By.CLASS_NAME, "sub-cate-items")

def getSubSubCategories(sub_index, index):
    global sub_sub_cat_names
    categories_parent_elem = driver.find_elements(By.CLASS_NAME, "cl-item")
    sub_categories_elem = categories_parent_elem[sub_index].find_elements(By.CLASS_NAME, "sub-cate-items")

    sub_sub_cat_names = sub_categories_elem[index].find_elements(By.TAG_NAME, "a")[1:]
    return sub_sub_cat_names

def startRealScraping(redi_index, page_limit):
    page_limit_splitted = page_limit.split("-")
    page_limit_min = int(page_limit_splitted[0])
    page_limit_max = int(page_limit_splitted[1])
    if page_limit_min != 1:
        cat_page_link = sub_sub_cat_names[redi_index].get_attribute("href")+"?page="+str(page_limit_min)
        page_limit_min+=1
        page_limit_max=page_limit_max+2
    else:
        cat_page_link = sub_sub_cat_names[redi_index].get_attribute("href")
    cat_page_name = sub_sub_cat_names[redi_index].text
    driver.get(cat_page_link)


    scrollUntillBottom(driver)

    for page_number in range(page_limit_min, page_limit_max):
        print(colored("Current Page ===> "+str(page_number-1), "blue"))
        try:
            products_link = WebDriverWait(driver, 10).until(EC.presence_of_all_elements_located((By.CLASS_NAME, '_2f4Ho')))
        except:
            continue
        for product_link in products_link:
            try:
                product_link = product_link.get_attribute("href")
            except:
                continue
            driver.execute_script(f'''window.open("{product_link}","_blank");''')
            driver.switch_to.window(driver.window_handles[-1])
            print("\n")
            product_json = scrapeProduct(driver, cat_page_name)
            driver.close()
            driver.switch_to.window(driver.window_handles[0])
        page_input =  WebDriverWait(driver, 20).until(EC.element_to_be_clickable((By.CLASS_NAME, ".next-large > input")))
        page_input.click()
        page_input.send_keys(Keys.CONTROL + "a")
        page_input.send_keys(Keys.DELETE)
        page_input.send_keys(page_number)
        time.sleep(1)
        driver.find_element(By.CLASS_NAME, "jump-btn").click()
        time.sleep(5)
        

        
    driver.close()


def startScraping(redi_index, page_limit):
    t1 = threading.Thread(target=startRealScraping, args=(redi_index, page_limit))
    t1.start()
    return "Started scraping"

def getScrapedJson(name):
    filename = JSON_FILE_NAME+"-"+name+".json"
    if os.path.exists(filename):
        f = open(filename, "r")
        return json.loads(f.read())
    else:
        return ""


