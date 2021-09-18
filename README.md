# Please Read

database = use phpmyadmin via xampp
server = php spark serve
require internet connection

## Database

### Use manual query

CREATE TABLE users(
user_id INT PRIMARY KEY AUTO_INCREMENT,
user_name VARCHAR(100),
user_email VARCHAR(100),
user_password VARCHAR(200),
user_picture VARCHAR(255),
user_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB;

OR

### import sql file

file location

ci4\app\Database/ci4.sql

## important

there is my email :)
