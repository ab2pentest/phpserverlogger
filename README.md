# PHP Server Logger.

## What this logger is doing ?

This logger captures and records various information about incoming:  

- HTTP requests `POST`,`GET`,`PUT` ...
- All headers values.
- Local & Remote Server values.

## How to install it ?

**Important: This logger only functions on PHP servers and requires a PHP installation to operate.**

1) First modify this value in the `logger.php` file

- The constant `LOG_DIRECTORY` specifies the directory where the logs are saved, and it should exists on the server.

```PHP
define("LOG_DIRECTORY","CHANGETHIS");
```

2) Upload the updated `logger.php` and `.htaccess` files to your web server.

3) Insert the following line at the beginning of your `index.php` file:

```php
include("logger.php");
```

Congratulations, everything is now configured!

## Purpose

This tool is a powerful asset for blue team defense strategies, as it offers comprehensive information on incoming HTTP requests.
