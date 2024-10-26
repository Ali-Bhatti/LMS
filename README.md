# LMS
This is a Learning Management System, based on open source LMS.

## Required Softwares
1. XAMP ([download link](https://filehippo.com/download_xampp/))
2. Composer ([download link](https://getcomposer.org/))  
    _During its installation, set the PHP env variable_
3. VS Code to run the project ([download link](https://code.visualstudio.com/download))

    OR you can watch this [video](https://youtu.be/2qgS_MCvDfk?si=9uiNxQYFnkHYkZj6)

## Errors while setting up
Common Issues Found:
* git not found and **unzip/zip not found**  
    * Enable the zip extension in the php.ini file.  
    * You can find the php.ini file from the XAMPP config button near Apache. The full path is `xampp\php\php.ini`.  
    * Open php.ini and search for `"; extension=zip"` then remove ";" before this string.

## Local Setup
1. Download or clone the project from this repository.
2. Open the project in VS Code.
3. Open the terminal in VS Code (or any terminal) and run `composer global require laravel/installer` to install Laravel globally.
4. Access the env files from here:  
   - [env file for local](https://drive.google.com/file/d/1OL7x-_uv0xmjMVXdfovIgQE7_-zvTdyG/view?usp=sharing)  
   - [env file for prod](https://drive.google.com/file/d/113ouePBZBAu9BoJQaLF7keNVamG4783F/view?usp=sharing)
5. Run `composer install` to install all the required packages.
6. Run `php artisan key:generate` to generate the application key.
7. Open **PHPMyAdmin**.
8. Download the DB DUMP from this [link](https://drive.google.com/file/d/1a3YdKhdpM_6zd-EcKzAerGYnDuWsIbGb/view?usp=sharing).
9. Import the DB DUMP into your local DB using **PHPMyAdmin**.
10. Run `php artisan serve` to start the server.
11. Open your browser and navigate to `http://localhost:8000` to access the application.
12. You can log in with the following credentials:
    ```
    login: admin@gmail.com
    password: 123456
    ```
