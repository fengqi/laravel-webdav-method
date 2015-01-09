<?php namespace fengqi\LaravelWebdavMethod;

use Illuminate\Routing\Router as IlluminateRouter;

/**
 * Extension for the Laravel 4 router have webdav method
 *
 * @author  fengqi <lyf362345@gmail.com>
 * @link    https://github.com/fengqi/laravel-webdav-method
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 */
class Router extends IlluminateRouter
{
    /**
     * Extensions of the verbs supported by the router.
     *
     *
     * @link http://www.webdav.org/specs/rfc4918.html#http.methods.for.distributed.authoring
     * @var array
     */
    public static $extVerbs = array('COPY', 'MOVE', 'MKCOL', 'PROPFIND', 'PROPPATCH', 'LOCK', 'UNLOCK', 'REPORT');

    /**
     * Register a new route responding to all verbs.
     *
     * @param string $uri
     * @param array|callable|string $action
     * @return \Illuminate\Routing\Route
     */
    public function any($uri, $action)
    {
        return $this->addRoute(array_merge(self::$verbs, self::$extVerbs), $uri, $action);
    }

    /**
     * Register a new COPY route with the router.
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function copy($uri, $action)
    {
        return $this->addRoute('COPY', $uri, $action);
    }

    /**
     * Register a new MOVE route with the router.
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function move($uri, $action)
    {
        return $this->addRoute('MOVE', $uri, $action);
    }

    /**
     * Register a new MKCOL route with the router.
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function mkcol($uri, $action)
    {
        return $this->addRoute('MKCOL', $uri, $action);
    }

    /**
     * Register a new route responding to webdav verbs
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function propfind($uri, $action)
    {
        return $this->addRoute('PROPFIND', $uri, $action);
    }

    /**
     * Register a new PROPATCH route with the router.
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function proppatch($uri, $action)
    {
        return $this->addRoute('PROPPATCH', $uri, $action);
    }

    /**
     * Register a new LOCK route with the router.
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function lock($uri, $action)
    {
        return $this->addRoute('LOCK', $uri, $action);
    }

    /**
     * Register a new UNLOCK route with the router.
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function unlock($uri, $action)
    {
        return $this->addRoute('UNLOCK', $uri, $action);
    }

    /**
     * Register a new REPORT route with the router.
     *
     * @param $uri
     * @param $action
     * @return \Illuminate\Routing\Route
     */
    public function report($uri, $action)
    {
        return $this->addRoute('REPORT', $uri, $action);
    }
}
