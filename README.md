<img src="https://i.imgur.com/ZQ0vByD.png">

## Simple Laravel Blog

This is an example of a simple blog application using Laravel framework. We have created it as an example for Lecture 8 in Internet Programming module at IUT 2020.

## How to setup on your computer

Go through following steps:

1) Run `git clone https://github.com/iuthub/ip2020_lecture8_blog.git` on your `htdocs` folder (or anywhere preferred).
2) Go to this project's folder on your terminal, and run `composer install`
3) Rename `.env.example` file in this folder to `.env`. You can do it directly from your terminal:
	- For Windows, run `ren .env.example .env`
	- For Linux/Mac, run `mv .env.example .env`
4) After that, generate a new app key, run `php artisan key:generate`
5) Finally, run `php artisan serve`

Note, that in order set up this blog on your PC, you must have latest versions of PHP and Composer (http://getcomposer.org/) installed on your computer and they must be accessible from your terminal. You have to add paths to these tools into your PATH environment variable to make them accessible from your terminal.