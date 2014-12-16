<?php namespace fengqi\LaravelWebdavMethod;

use Illuminate\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;

/**
 * #description
 *
 * @author  fengqi <lyf362345@gmail.com>
 * @version $Id: $
 */
class WebdavMethodServiceProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        // todo
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['router'] = $this->app->share(function ($app)
        {
            $router = new Router($app['events'], $app);

            // todo do anything

            return $router;
        });
    }
}
