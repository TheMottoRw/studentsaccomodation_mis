### Student accomodation reservation and allocation management 

This project is for helping college student reserve school accomodation hostels before the arrive to their college

 - Pre-requisiste
    - You should have Xampp installed with PHP 5.6 or above
    - MySQL Server should be running

1. Copy project folder to your htdocs
2. Import mysql database
    - cd C:\xampp\mysql\bin
    - mysql -u root -p
    - CREATE DATABASE saccomodationmis;
    - exit;
    - mysqldump -u -root -p -d saccomodationmis < C:/xampp/htdocs/accomodationmis/application/database/saccomodationmis.sql
    - change database user connection to yours
3. Set right database configuration to your application by editing
    - C:/xampp/htdocs/accomodationmis/application/config/database.php

4. Now projet setup done,you can access it via browser by localhost/accomodationmis/index.php/v 
    - Administrator credential
        - Username 0787274716
        - Password 12345
