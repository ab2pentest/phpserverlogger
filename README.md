# PHP Server Logger (For Educational Purpose).

Disclaimer
---
`phpserverlogger` is developed with the intension of using this tool only for educational purpose.


# What the logger is doing ?

This logger saves all information about coming http requests which includes:  
- All type of requests `POST`,`GET`,`PUT` ...
- All headers values.
- LOCAL & REMOTE Server values.

# How to use ?

**Important: This works only in PHP Servers, required to have an installed php version.**

1) First modify the values in the `logger.php` file

```PHP
define("LOG_DIRECTORY","CHANGETHIS");
define("LOG_SEPARATOR","CHANGETHIS\n");
```

- The value of `LOG_DIRECTORY` for the directory on where the logs should be saved.
- The value of `LOG_SEPARATOR` is for seperating each new request in my case I like to use `-------------\n`.

2) Upload the new `logger.php` & `.htaccess` files to your WebServer
3) In your `index.php` file put this line in the beggining of the file:

```php
include("logger.php");
```

Congrats now everything is set :D

---
This version is only beta and the code was so silly probably has many issues, so any suggestion will be welcomed.
