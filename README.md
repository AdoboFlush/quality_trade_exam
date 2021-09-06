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

#####

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

#####

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

## How would I implement the featured products

If I'm going to use this product table, I will create a new table named "featured" with fields like id, product_id, created_at, updated_at. From that table, I can add the featured products by creating a new record to it with the foreign key of product_id. The product_id will be the id field of the product which I can use to link what product from the products table will be displayed as featured. For the sql query, we can join the tables so that we can only display the products that is also on the featured table.