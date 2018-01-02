# Trip (Passport)

API "Trip" built in Laravel 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them:

The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.

However, if you are not using Homestead, you will need to make sure your server meets the following requirements:

```
PHP >= 7.0.0
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension

```
 
  

### Installing Laravel

A step by step series of examples that tell you have to get a development env running:
```
1-Install the composer from the root of the project.
2-Duplicate .env.exapmle to .env and register the DB info.
3-Run: php artisan migrate to create the tables.
4-Run: php artisan db:seed. 
5-Run: php artisan passport:install.

```

 
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command. This command will start a development server at http://localhost:8000:

```
5-php artisan serve 
```
 
 

## Running the tests

In order to test our API, we  use Vue js as a front end :


```
The URLs:
http://localhost:8080/
 
```
### Front end project link
https://github.com/saeid78/Front-Trip


 
### The Gaurd (Password):

When developing an api, one of the most important of its requirments is to apply the authentication . Laravel provides gaurd out of the box.
For real applications we should use Password which was released  afther Laravel version  5.3. that we are going to use.

 
 
## Built With

* [Laravel](https://laravel.com/docs/5.5/) - The web framework used
* [Composer](https://getcomposer.org/) - Dependency Management
 

 
