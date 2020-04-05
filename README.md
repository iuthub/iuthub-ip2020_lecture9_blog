<img src="https://i.imgur.com/ZQ0vByD.png">

## Laravel Blog With Database

In this Lecture 9 example, we connect [Laravel blog](https://github.com/iuthub/iuthub-ip2020_lecture8_blog) that we developed in Lecture 8 to database using Laravel's Eloquent models, Migration tools and Relationships.

## Youtube Video:

- https://youtu.be/Zi8hOCu7d-4


## How to setup on your computer

Go through following steps:

1) Run `git clone https://github.com/iuthub/iuthub-ip2020_lecture9_blog` on your `htdocs` folder (or anywhere preferred).
2) Go to this project's folder on your terminal, and run `composer install`
3) Rename `.env.example` file in this folder to `.env`. You can do it directly from your terminal:
	- For Windows, run `ren .env.example .env`
	- For Linux/Mac, run `mv .env.example .env`
4) After that, generate a new app key, run `php artisan key:generate`
5) Open `.env` file and set up your database connection settings. Modify below variables according to the settings of your environment.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 
DB_PORT=3306
DB_DATABASE=laravel_blog
DB_USERNAME=root
DB_PASSWORD=
```
6) Run `php artisan migrate --seed`
5) Finally, run `php artisan serve`

Note, that in order set up this blog on your PC, you must have latest versions of PHP and Composer (http://getcomposer.org/) installed on your computer and they must be accessible from your terminal. You have to add paths to these tools into your PATH environment variable to make them accessible from your terminal.