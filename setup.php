<?php 
//Extracting KG-startup.tar.gz file
$path = 'KG-startup.tar.gz';
system("gunzip -c $path | tar xf -");

//Downloading Laravel into api folder
echo shell_exec("composer create-project laravel/laravel api");

//Moving backend files into api
echo shell_exec("cp -a backend/. api/");

echo shell_exec("rm -rf backend");
echo shell_exec("rm -r KG-startup.tar.gz");
echo shell_exec("rm -r setup.php");

//making Database
echo shell_exec("mysqladmin -h localhost -u root -p create kgstartup_test_db");

//Migration
chdir('api');
echo getcwd() . "\n";
echo shell_exec("composer dump-autoload");
echo shell_exec("php artisan migrate --seed");


chdir('../front');
echo getcwd() . "\n";
//
//run front
echo shell_exec("npm start");

echo shell_exec("gnome-terminal --tab");
//echo ("x-terminal-emulator");
//chdir('../api');
//echo shell_exec("php artisan serve");


?>
