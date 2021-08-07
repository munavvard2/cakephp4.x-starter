#Imarat
    (A starter For CakePHP 4.x with user auth setup )

## Requirements
    Composer
    1. Download [Composer] https://getcomposer.org/doc/00-intro.md or update `composer self-update`.

## Installation
    1) Download / Clone This repo.
    2) Run
```bash
composer install
```

    3) Run Migrations
```bash

bin/cake migrations migrate

bin/cake migrations seed
```

login
username : admin
password : 1234567

[comment]: <> (# CakePHP Application Skeleton)

[comment]: <> (![Build Status]&#40;https://github.com/cakephp/app/actions/workflows/ci.yml/badge.svg?branch=master&#41;)

[comment]: <> ([![Total Downloads]&#40;https://img.shields.io/packagist/dt/cakephp/app.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/cakephp/app&#41;)

[comment]: <> ([![PHPStan]&#40;https://img.shields.io/badge/PHPStan-level%207-brightgreen.svg?style=flat-square&#41;]&#40;https://github.com/phpstan/phpstan&#41;)

[comment]: <> (A skeleton for creating applications with [CakePHP]&#40;https://cakephp.org&#41; 4.x.)

[comment]: <> (The framework source code can be found here: [cakephp/cakephp]&#40;https://github.com/cakephp/cakephp&#41;.)

[comment]: <> (## Installation)

[comment]: <> (1. Download [Composer]&#40;https://getcomposer.org/doc/00-intro.md&#41; or update `composer self-update`.)

[comment]: <> (2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.)

[comment]: <> (If Composer is installed globally, run)

[comment]: <> (```bash)

[comment]: <> (composer create-project --prefer-dist cakephp/app)

[comment]: <> (```)

[comment]: <> (In case you want to use a custom app dir name &#40;e.g. `/myapp/`&#41;:)

[comment]: <> (```bash)

[comment]: <> (composer create-project --prefer-dist cakephp/app myapp)

[comment]: <> (```)

[comment]: <> (You can now either use your machine's webserver to view the default home page, or start)

[comment]: <> (up the built-in webserver with:)

[comment]: <> (```bash)

[comment]: <> (bin/cake server -p 8765)

[comment]: <> (```)

[comment]: <> (Then visit `http://localhost:8765` to see the welcome page.)

[comment]: <> (## Update)

[comment]: <> (Since this skeleton is a starting point for your application and various files)

[comment]: <> (would have been modified as per your needs, there isn't a way to provide)

[comment]: <> (automated upgrades, so you have to do any updates manually.)

[comment]: <> (## Configuration)

[comment]: <> (Read and edit the environment specific `config/app_local.php` and setup the )

[comment]: <> (`'Datasources'` and any other configuration relevant for your application.)

[comment]: <> (Other environment agnostic settings can be changed in `config/app.php`.)

[comment]: <> (## Layout)

[comment]: <> (The app skeleton uses [Milligram]&#40;https://milligram.io/&#41; &#40;v1.3&#41; minimalist CSS)

[comment]: <> (framework by default. You can, however, replace it with any other library or)

[comment]: <> (custom styles.)
