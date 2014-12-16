laravel-webdav-method
=====================

Extension for the Laravel 4 router have webdav method.

>Full WebDav support in Nginx you need to turn on standard Nginx WebDav module as well as 
>this module for missing methods.
>Nginx WebDav missiing methods support: [nginx-dav-ext-module] (https://github.com/arut/nginx-dav-ext-module)

# Useage example
    Route::propfind('/example', 'PropController');
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
