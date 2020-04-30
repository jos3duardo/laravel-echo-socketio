<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel
```json
composer require laravel/ui

php artisan ui vue --auth
```
Laravel Mix

```bash
npm i
```

Running Mix
```bash
npm run dev

```
create a model

```bash
php artisan make:model Models/Message -a

php artisan migrate
```
Pusher Channels
```bash
composer require pusher/pusher-php-server "~4.0"
```

Socket.IO
```bash
npm install --save socket.io-client
```
.env
```bash
BROADCAST_DRIVER=pusher
ECHO_HOST=localhost
ECHO_PORT=6001
ECHO_SCHEME=http
```

config/broadcasting.php
```json
  'options' => [
    'host' => env('ECHO_HOST', 'localhost'),
    'port' => env('ECHO_PORT', 6001),
    'scheme' => env('ECHO_SCHEME', 'http')
  ],
```
Installing Laravel Echo
```bash
npm install -g laravel-echo-server
```


```bash
laravel-echo-server init
```

```bash
database/laravel-echo-server.sqlite
```
generate appId
```bash
laravel-echo-server client:add realtime-laravel

```
start a laravel-echo server
```bash
laravel-echo-server start
```

stop a laravel-echo server
```bash
laravel-echo-server stop
```

npm rum watch
