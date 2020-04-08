<img src="https://i.imgur.com/ZQ0vByD.png">

## Laravel Blog: Authentication and Authorization

In this Lecture 10 example, we integrate Laravel's authentication and authorization mechanisms into our blog application that we developed in Lecture 9.

## Youtube Video:

- https://youtu.be/Zi8hOCu7d-4


## How to setup on your computer

Go through following steps:

1) Run `git clone https://github.com/iuthub/iuthub-ip2020_lecture9_blog` on your `htdocs` folder (or anywhere preferred).
2) Switch to `auth2` branch: `git checkout auth2`
3) Go to this project's folder on your terminal, and run `composer install`
4) Rename `.env.example` file in this folder to `.env`. You can do it directly from your terminal:
	- For Windows, run `ren .env.example .env`
	- For Linux/Mac, run `mv .env.example .env`
5) After that, generate a new app key, run `php artisan key:generate`
6) Open `.env` file and set up your database connection settings. Modify below variables according to the settings of your environment.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1 
DB_PORT=3306
DB_DATABASE=laravel_blog
DB_USERNAME=root
DB_PASSWORD=
```

7) Set your mail server in (mailtrap.io)[http://mailtrap.io]. Copy your mailtrap username and password and configure the mail server settings in `.env` file.
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=[your_mailtrap_username]
MAIL_PASSWORD=[your_mailtrap_pwd]
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=no-reply@myblog.uz
MAIL_FROM_NAME="${APP_NAME}"	
```

8) Run `php artisan migrate:refresh --seed`
9) Finally, run `php artisan serve`

Note, that in order set up this blog on your PC, you must have latest versions of PHP and Composer (http://getcomposer.org/) installed on your computer and they must be accessible from your terminal. You have to add paths to these tools into your PATH environment variable to make them accessible from your terminal.