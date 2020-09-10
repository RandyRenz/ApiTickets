# API Tickets

This API is created using PHP Laravel 7.27.0. 
It has Tickets and Users.

####
Clone the project via git clone or download the zip file.

##### .env
Copy contents of .env.example file to .env file. Create a database and connect your database in .env file.

##### Run Migration
run the following command to create migrations in the databbase.
###### `php artisan migrate`

##### Database Seeding
finally run the following command to seed the database with dummy content.
###### `php artisan migrate --seed`

### API EndPoints
*Post GET All `http://apitickets.test:8888/tickets`
*Post POST Create `http://apitickets.test:8888/tickets/create`


