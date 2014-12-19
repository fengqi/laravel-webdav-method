laravel-webdav-method
=====================

Extension for the Laravel 4 router have webdav method.

# Installation
Require this package with composer:
```
composer require fengqi/laravel-webdav-method
```
After updating composer, add the ServiceProvider to the providers array in app/config/app.php
```
'fengqi\LaravelWebdavMethod\WebDavMethodServiceProvider'
```

# Useage example
    Route::propfind('/example', 'PropController@index');
    Route::propfind('/example', function()
    {
        // anything...
    });

    Route::copy();
    Route::move();
    Route::mkcol();
    Route::proppatch();
    Route::lock();
    Route::unlock();
