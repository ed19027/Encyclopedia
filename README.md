## Encyclopedia of animals of Latvia
This project is developed by Edvards Dergačevs for educational purpose. All data was taken from latvijasdaba.lv

#### VERSIONS

WAMP server - 3.2.0  
Apache - 2.4.41  
PHP - 7.4.0  
MySQL - 8.0.18

#### INSTALLATION

To run this project localy instal WAMP or XAMPP server (download at www.wampserver.com). In installation select MySQL to be installed. 
Also you need to install COMPOSER (https://getcomposer.org). Via composer install LARAVEL framework, set it up and create new project in wamp64/www directory (https://laravel.com/docs/4.2/quick).

#### When instalation is done :
Download this project form GitHub, unzip, open folder and move all containing folders in YOURS created laravel project folder (replace all files).

Using WAMP or XAMPP server in PhpMyAdmin create new database (provide name 'encyclopedia' and select 'utf8_general_ci' unicode)

#### Change in .env file:
```
    APP_NAME='Latvijas dzīvnieku enciklopēdija'
    DB_DATABASE=encyclopedia
```

#### Open comand prompt cd to project folder and execute comands:
```bash
    php artisan migrate
    php artisan db:seed
```
#### Now you you can access web pabe localy in your browser with url:
```url
    localhost/%your_folder_name%/public
```

#### Also in 'UI images' folder you can see the screenshots from user interface

