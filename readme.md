Installing this app:

1) Pull in the project from github to your htdocs:

    a) Go to C:\xampp\htdocs
    b) Right-click and press Git bash here
    c) Write-in this command:
        git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY

2) Go to .env file and add the name of the database you want to connect with

3) Open the project and run npm install and composer update

4) Run php artisan migrate:fresh --seed

5) Make sure XAMPP is running, and then run the command php artisan serve, and the website will run
