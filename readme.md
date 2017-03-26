# Cacheman

A small plugin that will provide you with a Webhook to clear the Cache created by the HTML Cache plugin.

### Requirements

Requires [HTML Cache](https://github.com/craftapi/htmlcache)

### Setup

Install the plugin

Go to /cacheman

Your cache is cleared

### Tips

Cacheman will get cached which stops it from running.

This is why Cacheman will always add a random query string to the URL to ensure it's read as a unique request.

If you are using cURL to break the cache, you will have to BYO random query string.
