KG-startup

Auto Installation
1. run "php setup.php" in terminal.
2. Enter "root" as the password.

Manual Installation
1. extract "KG-startup.tar.gz" with "tar -xzvf (file name)" command
2. run "composer create-project laravel/laravel api"
3. copy all files and folders in "Backend" into "api" and delete "backend" folder.
4. make DB with "mysqladmin -h localhost -u root -p create kgstartup_test_db"
5. Enter "root" as the password.
6. go to "api"folder and run "php artisan migrate --seed".
7. run "php artisan serve".
8. in another termilan, go to the "front" folder and run "npm start" command.

