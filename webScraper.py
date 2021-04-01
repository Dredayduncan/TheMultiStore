# Import the necessary libraries
from selenium import webdriver
import csv
from bs4 import BeautifulSoup

# Access the url
# browser.get(url)

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
            imageSRC = item.find('span', 's-image').get('src')
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


if __name__ == '__main__':
    print(getAmazonResultDetails('led strips'))

