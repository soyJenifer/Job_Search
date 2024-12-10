
# 🔛 Welcome to our Job_Search! 👽

I decided to create a website in Laravel to manage locally my job offers with their offer, description, date, and status of the offer.


## Screenshots

![Captura de pantalla 2024-12-10 153038](https://github.com/user-attachments/assets/f0d2e8f4-687d-4a39-8b71-10239aab11a3)



## ▶️💻 Installation
- Clone repository
```
git clone https://github.com/soyJenifer/Job_Search.git
```

- Install Composer dependencies

```
composer install
```
- Install Nodejs dependencies

```
npm install
```
- Duplicate .env.example file and rename to .env
- In this new .env, you uncomment the DB connection lines which are these:
 
In DB_CONNECTION will come mysqlite, change it to the bd you use (in this case MySQL)

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=insideout_db
DB_USERNAME=root
DB_PASSWORD=
```
 - Generate an App Key with this command 
```
php artisan key:generate 
```
- Execute migrations  
```
php artisan migrate:fresh
php artisan migrate:fresh --seed
```
- How to run the Laravel server  
```
php artisan serve
```

- If you want to run all this in development environment run the following command  
```
npm run dev
```

    
## API Reference offers

#### Get all items

Method: GET
URL: /offers
Code: 200 OK

#### Get a specific offer

Method: GET
URL: /offers/{id}
Code: 200 OK

### Create a new offer

Method: POST
URL: /offers
Code: 200 OK

### Remove an offer

Method: DELETE
URL: /offers/{id}
Code: 200 OK

### Updating an existing offer

Method: PUT
URL: /offers/{id}
Code: 200 OK

### Api Reference Feedback
- This API allows you to manage news related to specific offers. Available operations include listing, creating, displaying, updating and deleting news items.

### List News of an Offer

Method: GET
Path: /offers/{offerId}/news

### Create a New Notice for an Offer
Método: POST
Ruta: /offers/{offerId}/news

### Show a Specific News

Method: GET
Path: /offers/{offerId}/news/{newsID}

### Update a Specific News Item

Method: PUT
Path: /offers/{offerId}/news/{newsID}

### Delete a Specific News Item

Method: DELETE
Path: /offers/{offerId}/news/{newsId}



### Common Errors

400 Bad Request: The request could not be processed due to invalid data.
404 Not Found: The offer with the specified ID was not found.
500 Internal Server Error: A server error occurred.

### Additional Notes

Be sure to properly handle errors and validations in the FeedbackController.
Consider implementing authentication and authorisation if necessary to protect these routes.


## 🏃‍♂️🧪 Running Tests

To run tests, run the following command

```bash
  php artisan test

```
## Diagrams Made

![Captura_de_pantalla_2024-12-10_132314](https://github.com/user-attachments/assets/48bf86cf-03a6-4375-909f-e5984e32132a)


## Contributing

https://draculatheme.com/


## 🛠 Tech Stack
- Languages: Html, Css, Blade
- Framework: Laravel
- Server: Xampp, Apache, Nodejs
- Database: Mysql
- Others: Composer
