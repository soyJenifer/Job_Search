<div align="center">
    
# Welcome to my project Job Search! 👽

#### I decided to create a website in Laravel to manage locally my job offers with their offer, description, date, and status.
</div>

![Proyecto Job Search](https://github.com/user-attachments/assets/d365740b-2225-4553-9a09-98a5aa5c0ff3)

>[!IMPORTANT]
>To learn how to install and also to know how I did this project, it's very important that you read every part of this readme. Thank you for your patience and have a good read.
>
---

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

![Project Diagrams](https://github.com/user-attachments/assets/c042059f-431d-4c9c-a141-f96f08e0c808)
***

If you want to contact me here's my gmail: jenifermoyano2006@gmail.com
>[!NOTE]
>Please understand that i'm still learning, not everything will look or be perfect. Thank you for the attention.
***

## 🛠 Languages and tools I used in this project

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=896696&color=896696'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='html5' src='https://img.shields.io/badge/html-100000?style=for-the-badge&logo=html5&logoColor=white&labelColor=FF8400&color=FF8400'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='css3' src='https://img.shields.io/badge/css-100000?style=for-the-badge&logo=css3&logoColor=white&labelColor=079FB0&color=079FB0'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='mysql' src='https://img.shields.io/badge/mysql-100000?style=for-the-badge&logo=mysql&logoColor=white&labelColor=1C662F&color=1C662F'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=git&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='canva' src='https://img.shields.io/badge/canva-100000?style=for-the-badge&logo=canva&logoColor=white&labelColor=A700FB&color=A700FB'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FF8800&color=FF8800'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
***

## Thanks for reading!
Thanks for reading this readme!
Have a good day or night! 🕴️
