A simple file upload and adat extraction using laravel
=======================
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-green.svg)](https://GitHub.com/hoalzein/p4n-html.js/graphs/commit-activity)
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>

### 1. Requirements

- `PHP 8 and offcourse Laravel 8`
- `Apache Tika 1.15 or greater`

### 2. Configurations

After downloading a fresh version of laravel 8 and ensuring your php environment is set accordingly, overwrite the contents in your project with the contents of this project directory.

Configure your database comnnections and credentials in your .env file located in your project folder.

Open your terminal within the project directory, then run this command to perform database migration:

```bash
php artisan migrate
```

Install Apache Tika package using composer by running the following command on the terminal:

```bash
composer require vaites/php-apache-tika
```
Manually download the apache tika jar file from https://www.apache.org/dyn/closer.cgi/tika/tika-server-1.26.jar and move it to your project directory.

### 3. Usage

Assuming your project is located at http://localhost/projectdir, navigate to:

```bash
http://localhost/projectdir/public
```
As shown, navigate through your computer to select a compatible file for uploading by clicking the "Browse" button.
