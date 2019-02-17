# laravel-tasks-app
A simple app where you can create projects and set tasks for each project created with Laravel

In order to see and test this project, you have to: 
 * download / clone the repository
 * open the terminal in the source folder
 * run **composer install** so that all the dependencies can be installed
 * open your .env file and set the database settings such as (host, username, password)
 * after saving the .env file, run in the terminal **php artisan migrate**
 * in order for the project to run, type in the terminal **php artisan serve** 
 
In this project you can create multiple Projects page, and for each project you can create specific tasks which will be by default not completed, and after one of them is done, can be marked as completed and will be displayed as <strike>a striked text</strike> 
