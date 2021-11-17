## How to launch our Project

**Vacinolib** is a _laravel_ project so right after cloning please follow the method below to launch it in the best way :
`"Don't worry about a thing, 'Cause ...`
1. - [ ] Access to your project repo with the terminal : `cd vacinolib`.
2. - [ ] Install the project's dependencies : `composer install`.
3. - [ ] Install _NPM_ dependencies : `npm install`.
     If your npm version is to old don't forget to run `npm update` after installing the latest version and before launch it.
4. - [ ] Create your own environment by running : `cp .env.example .env`.
5. - [ ] Open this new data sheet for editing it : `open .env`.
6. - [ ] Run your database system in a new console window : `mysql -u root -p`
7. - [ ] Create a vacinolib database : `CREATE DATABASE vacinolib;`
8. - [ ] In the _.env_ file, change your DB information : `DB_USERNAME= ` _root_ , `DB_PASSWORD= ` _password_.
9. - [ ] Generate your encryption key : `php artisan key:generate`.
10. - [ ] Finally now : `... every little thing gonna be all right.`

## Made With

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
