# Booklist

[![PHP Version](https://img.shields.io/badge/PHP-8.1.9-purple.svg)](https://www.php.net)
[![Laravel Version](https://img.shields.io/badge/Laravel-10.48.14-red.svg)](https://laravel.com/)
![GitHub Repo Size](https://img.shields.io/github/repo-size/underdogbytes/booklist)

<img src="booklist.png" alt="banner" />

## Summary

[PREVIEW](#Preview) &diams; [ABOUT](#About) &diams; [GET STARTED](#Get-started) &diams; [PROJECT DEVELOPMENT STATUS](#Project-development-status) &diams;

## Preview

__Figma:__
<a href="https://www.figma.com/design/M5TEV0H8k5hXhBF2rj7fBF/Booklist?node-id=0-1&t=ZZgeXkFGLQfoOQl3-1">click here</a>

## About

This is an application for book lovers, which you can CRUD a book list, inspired by Skoob website.
The main rules are:

- CRUD of book
- Create a book list with the registered books


# Get started

### Before start
  
You must have the following to run the project locally:

- <a href="https://www.apachefriends.org/index.html">Xampp</a> (or similar)

### Locally project setup

Clone the project and enter its folder using:

```sh
git clone https://github.com/underdogbytes/booklist.git
cd booklist/
```

Then install the required packages with:
```sh
composer install
```

Next, create your `.env` file and run this:
```sh
php artisan key:generate
```

Start your Xampp/Whatever-are-you-using and then run the migrations:
```sh
php artisan migrate
```

Now start the proeject:
```sh
php artisan serve
```
  
# Project development status
__Last update:__ 26/06/2024

I'm refactoring this project, so features aren't working anymore. Come back later :)

  
[PREVIEW](#Preview) &diams; [ABOUT](#About) &diams; [GET STARTED](#Get-started) &diams; [PROJECT DEVELOPMENT STATUS](#Project-development-status) &diams; [BACK TO TOP](#Project-name-here)
