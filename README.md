<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# How to Run App
### Environment
> - PHP 8.1.12 (cli)
> - Composer version 2.5.4
> - Laravel Framework 10.5.1

### Step by Step Run this App
- Make file `.env` using command `cp .env.example .env`
- Change Configuration in `.env`
- Run command 
```sh
composer install
```
- Run command 
```sh 
php artisan key:generate
```
- Run server using Command 
```sh 
php artisan serve
```
- Open in Browser 
```sh 
http://127.0.0.1:8000/task
```

### NOTE
The code in [resources\views\task.blade.php](https://github.com/achmadnurulfauzie/task_php/blob/master/resources/views/task.blade.php)
