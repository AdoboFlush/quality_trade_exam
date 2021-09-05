# ALBERT BELGERA - iThinkWeb Backend developer Coding Test Answers

# How to setup

- download/clone the repository from this link: https://github.com/AdoboFlush/quality_trade_exam
- move the project folder to your web server environment. Since I am using xampp, I placed it to Drive C > xampp > htdocs.
- open the command line or terminal then go to the project directory
- run "composer update" to install all its dependencies.
- run "php artisan migrate --path database\migrations\2021_03_01_041441_create_products_table.php" to create the table
- run "php artisan db:seed" to insert dummy records for testing
- run "php artisan serve" to start the development server

# How to use the API

## View Product List
Method : GET
http://127.0.0.1:8000/api/products/view?page=<page_number>&limit=<limit_of_records>

### Sample Raw Request:

GET /api/products/view?page=1&limit=5 HTTP/1.1
User-Agent: PostmanRuntime/7.28.4
Accept: */*
Postman-Token: ba162ce6-e172-4870-9bd7-aad0e7cb145c
Host: 127.0.0.1:8000
Accept-Encoding: gzip, deflate, br
Connection: keep-alive
 
### Sample Response:
{"status":"success","message":[{"id":1,"name":"Espresso","price":"100.00","description":"It is a hot Coffee","created_at":"2021-09-05T11:50:01.000000Z","updated_at":"2021-09-05T11:50:01.000000Z"},{"id":2,"name":"Iced Americano","price":"120.50","description":"It is a cold Coffee","created_at":"2021-09-05T11:50:01.000000Z","updated_at":"2021-09-05T11:50:01.000000Z"},{"id":3,"name":"Mocha Milktea","price":"200.25","description":"It is not a Coffee.","created_at":"2021-09-05T11:50:01.000000Z","updated_at":"2021-09-05T11:50:01.000000Z"},{"id":4,"name":"Mango Cheese Cake","price":"120.25","description":"It is not a Coffee.","created_at":"2021-09-05T11:50:01.000000Z","updated_at":"2021-09-05T11:50:01.000000Z"},{"id":5,"name":"Americano","price":"300.25","description":"It is a Coffee.","created_at":"2021-09-05T11:50:01.000000Z","updated_at":"2021-09-05T11:50:01.000000Z"}]}

==============================================================================

## View Single Product
Method : GET
http://127.0.0.1:8000/api/products/view?id=<product_id>

### Sample Raw Request:

GET /api/products/view?id=5 HTTP/1.1
User-Agent: PostmanRuntime/7.28.4
Accept: */*
Postman-Token: f2b324d4-85cb-4da0-829f-eebb927e6b0b
Host: 127.0.0.1:8000
Accept-Encoding: gzip, deflate, br
Connection: keep-alive
 
### Sample Response:
{"status":"success","message":{"id":5,"name":"Americano","price":"300.25","description":"It is a Coffee.","created_at":"2021-09-05T11:50:01.000000Z","updated_at":"2021-09-05T11:50:01.000000Z"}}

==============================================================================

## Add New Product
Method : POST
http://127.0.0.1:8000/api/products/add

### Post Request Payload Format:
Content-Disposition: form-data; name="payload"
{"name":"<product_name>", "price":"<product_price>", "description":"<product_description>"}

### Sample Raw Request:

POST /api/products/add HTTP/1.1
User-Agent: PostmanRuntime/7.28.4
Accept: application/json
Postman-Token: 2828d717-47df-48b7-be11-bf937ab6a307
Host: 127.0.0.1:8000
Accept-Encoding: gzip, deflate, br
Connection: keep-alive
Content-Type: multipart/form-data; boundary=--------------------------703980861191072939000439
Content-Length: 244
 
----------------------------703980861191072939000439
Content-Disposition: form-data; name="payload"
{"name":"Taro Cheese Cake", "price":"150.50", "description":"Cold Milk Tea Drink"}
----------------------------703980861191072939000439--
 
### Sample Response: 
{"status":"success","message":34}


==============================================================================

# iThinkWeb Backend developer coding test

## Task
You're tasked to create a simple REST web service application for an e-commerce app using Laravel.

You need to develop APIs for creating and viewing a single product. There should also be an API for viewing a list of the products.

A product needs to have the following information:

- Product name
- Product description
- Product price
- Created at
- Updated at

## Requirements
- The product name should have a maximum of 255 characters, and the product price should be numeric that accepts up to two decimal places.
- The created at and updated at fields should be in timestamp format.
- The view products list API needs to be paginated.
- You are required to use MySQL for the database storage in this test.
- You are free to use any library or component just as long as it can be installed using Composer.
- Don't forget to provide instructions on how to set the application up.

## Optional (for bonus points)
- Cache the view single product API. You are free to use any cache driver
- Create automated tests for the APIs
- Say for example, we need a feature where we can display featured products. How would you go about implementing this feature? (You don't need to write code for this, just describe how would you implement it)
