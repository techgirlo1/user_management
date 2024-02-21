Composer which is the Node Package Manager for Laravel was installed,followed by istalling laravel with command composer create-project laravel/laravel projectname,cd projectname,php artrisan serve was use to run the server.A database was created using mysql database with the name user_management and it was added to .env db_DATABASE.LARAVEL passport authentication was installed using command composer require laravel/passport,php artisan migrate was done to migrate the tables to the database,php artisan passport::install command was ran to install and configure laravel passport,I was provided with client_id, Access_client_secret,public and private Oauth key which was added to .env file.User table contain appropriate field such as Name,Email,Password and also the Role which can be User or Admin,User Model,UserController and AuthController was created.

Admin middleware was created to secure and authorize if the authenticated User is an Admin.The AdminMiddleware was added to HTTP/Kernel.php.Approriate route was also created in routes/api.php.


END POINTS
http://127.0.0.1:8000/api/register  //POST METHOD
http://127.0.0.1:8000/api/login  //POST METHOD
http://127.0.0.1:8000/api/logout //POST METHOD
http://127.0.0.1:8000/api/users  //GET METHOD
http://127.0.0.1:8000/api/user/{id}  //GET METHOD
http://127.0.0.1:8000/api/user/{id}  //PUT METHOD
http://127.0.0.1:8000/api/user/{id}  //DELETE METHOD


Each End point was tested using postman.After the user Registered and Login an access token will be created which is then added to the header KEY: 'Authorization' VALUE: Bearer with the token generated, KEY: 'ACCEPT' VALUE 'application/json' which is then use to carry out all other task like retrieving all users,Retrieving a Particular User,Updating Users,Deleting Users which can only be done by admin and also to Logout Users.
