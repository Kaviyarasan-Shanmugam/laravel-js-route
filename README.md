<p align="center">
  <img src="https://raw.githubusercontent.com/antony382/roles-and-permission/master/public/images/logo.png" style="width: 15% !important;max-width: 20% !important;">
</p>

ProcessDrive Laravel Route Using With JS File 
=============================================



[![Latest Stable Version](http://poser.pugx.org/process-drive/laravel-js-route/v)](https://packagist.org/packages/process-drive/laravel-js-route) [![Total Downloads](http://poser.pugx.org/process-drive/laravel-js-route/downloads)](https://packagist.org/packages/process-drive/laravel-js-route) [![Latest Unstable Version](http://poser.pugx.org/process-drive/laravel-js-route/v/unstable)](https://packagist.org/packages/process-drive/laravel-js-route) [![License](http://poser.pugx.org/process-drive/laravel-js-route/license)](https://packagist.org/packages/process-drive/laravel-js-route) [![PHP Version Require](http://poser.pugx.org/process-drive/laravel-js-route/require/php)](https://packagist.org/packages/process-drive/laravel-js-route)


This library is used for laravel route method is use for javascript file  


Installation
============

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).



run

```
composer require process-drive/laravel-js-route
                 (or)
composer require process-drive/laravel-js-route:1.0.0
```

After Installation
==================

To set service provider to config/app.php file

```
 'providers' => [
        ProcessDrive\LaravelJsRoute\RouteServiceProvider::class,
    ]
```


To set view file in your appliction. you will set below code in common blade file
 
```
@include("LaravelJsRoute::JSRoute")
                 (or)
{{ view('LaravelJsRoute::DefineRoute') }}
```

How it use
==========

In javascript file you can use like this

Route :
```
route(laravel route name here)

route(users.index)

```

Route with Params:
```
route(laravel route name here, laravel route parameter here like object)

route(users.edit, {userid: 1})

```



License
=======

MIT
