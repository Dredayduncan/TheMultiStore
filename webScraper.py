# Import the necessary libraries
from selenium import webdriver
import csv
from bs4 import BeautifulSoup

# Access the url
# browser.get(url)

'''
    Retrieve results from Amazon
'''
# Get the  url by inserting the search text into the website's url
def getAmazonurl(searchTerm):
    # Generate url from search term
    template = 'https://www.amazon.com/s?k={}&ref=nb_sb_noss_2'
    searchTerm = searchTerm.replace(' ', '+')

    return template.format(searchTerm)


# Get the results of the search
def getAmazonResults(searchTerm):

    # Define the browser we will be using
    browser = webdriver.Firefox()

    url = getAmazonurl(searchTerm)

    # Access the search url
    browser.get(url)

    # Extract the data
    soup = BeautifulSoup(browser.page_source, 'html.parser')

    # Fetch results of the search using a component of the website's html
    results = soup.find_all('div', {'data-component-type': 's-search-result'})

    return results

# Get specific details from each result
def getAmazonResultDetails(searchTerm):

    # Get search results
    items = getAmazonResults(searchTerm)

    # A list to store the results
    res = []

    # Loop through the search results to get the needed data
    for item in items:

        try:
            # Get the item name
            name = item.find('span', 'a-size-base-plus').text
        except AttributeError:
            name = ''

        try:
            # Get the item image
            imageSRC = item.find('img', 's-image').get('src')
        except AttributeError:
            imageSRC = ''

        try:
            # Get the item link
            atag = item.h2.a
            link = 'https://www.amazon.com' + atag.get('href')
        except AttributeError:
            link = ''

        try:
            # Get item price using the html element containing the price
            priceTag = item.find('span', 'a-price')
            price = priceTag.find('span', 'a-offscreen').text
        except AttributeError:
            price = ''

        try:
            # Get the reviews
            rating = item.i.text
        except AttributeError:
            rating = ''

        # Append each result to the list
        res.append([name, imageSRC, link, price, rating])

    return res


'''
    Retrieve Results from Jumia 
'''
# Get the  url by inserting the search text into the website's url
def getJumiaurl(searchTerm):
    # Generate url from search term
    template = 'https://www.jumia.com.gh/catalog/?q={}'
    searchTerm = searchTerm.replace(' ', '+')

    return template.format(searchTerm)


# Get the results of the search
def getJumiaResults(searchTerm):

    # Define the browser we will be using
    browser = webdriver.Firefox()

    url = getJumiaurl(searchTerm)

    # Access the search url
    browser.get(url)

    # Extract the data
    soup = BeautifulSoup(browser.page_source, 'html.parser')

    # Fetch results of the search using a component of the website's html
    results = soup.find_all('a', 'core')

    return results

# Get specific details from each result
def getJumiaResultDetails(searchTerm):

    # Get search results
    items = getJumiaResults(searchTerm)

    # A list to store the results
    res = []

    # Loop through the search results to get the needed data
    for item in items:

        try:
            # Get the item name
            name = item.find('div', 'info').h3.text
        except AttributeError:
            name = ''

        try:
            # Get the item image
            imageSRC = item.find('div', 'img-c').img.get('data-src')
        except AttributeError:
            imageSRC = ''

        try:
            # Get the item link
            link = 'https://www.jumia.com.gh' + items.get('href')
        except AttributeError:
            link = ''

        try:
            # Get item price using the html element containing the price
            price = item.find('div', 'prc').text
        except AttributeError:
            price = ''

        try:
            # Get the reviews
            rating = ''
        except AttributeError:
            rating = ''

        # Append each result to the list
        res.append([name, imageSRC, link, price, rating])

    return res

'''
    Retrieve Results from Tonaton 
'''
# Get the  url by inserting the search text into the website's url
def getTonatonurl(searchTerm):
    # Generate url from search term
    template = 'https://tonaton.com/en/ads/ghana?sort=relevance&buy_now=0&urgent=0&query={}'
    searchTerm = searchTerm.replace(' ', '+')

    return template.format(searchTerm)


# Get the results of the search
def getTonatonResults(searchTerm):

    # Define the browser we will be using
    browser = webdriver.Firefox()

    url = getTonatonurl(searchTerm)

    # Access the search url
    browser.get(url)

    # Extract the data
    soup = BeautifulSoup(browser.page_source, 'html.parser')

    # Fetch results of the search using a component of the website's html
    results = soup.find_all('a', 'card-link--3ssYv gtm-ad-item')

    return results

# Get specific details from each result
def getTonatonResultDetails(searchTerm):

    # Get search results
    items = getTonatonResults(searchTerm)

    # A list to store the results
    res = []

    # Loop through the search results to get the needed data
    for item in items:

        try:
            # Get the item name
            name = item.find('h2', 'heading--2eONR heading-2--1OnX8 title--3yncE block--3v-Ow').text
        except AttributeError:
            name = ''

        try:
            # Get the item image
            imageSRC = item.find('img', 'normal-ad--1TyjD').get('src')
        except AttributeError:
            imageSRC = ''

        try:
            # Get the item link
            link = 'https://tonaton.com' + item.get('href')
        except AttributeError:
            link = ''

        try:
            # Get item price using the html element containing the price
            price = item.find('span').text
        except AttributeError:
            price = ''

        try:
            # Get the reviews
            rating = ''
        except AttributeError:
            rating = ''

        # Append each result to the list
        res.append([name, imageSRC, link,  price])

    return res


if __name__ == '__main__':
    print(getAmazonResultDetails('led strips'))
    print(getJumiaResultDetails('led strips'))
    print(getTonatonResultDetails('led strips'))


if __name__ == '__main__':
    print(getJumiaResultDetails('led strips'))

