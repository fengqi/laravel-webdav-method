<?php namespace fengqi\LaravelWebdavMethod;

use Illuminate\Support\ServiceProvider;

/**
 * Extension for the Laravel 4 router have webdav method
 *
 * @author  fengqi <lyf362345@gmail.com>
 * @link    https://github.com/fengqi/laravel-webdav-method
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 */
class WebdavMethodServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return Router
     */
    public function register()
    {
        $this->app['router'] = $this->app->share(function ($app)
        {
            $router = new Router($app['events'], $app);
            return $router;
        });
    }
}
