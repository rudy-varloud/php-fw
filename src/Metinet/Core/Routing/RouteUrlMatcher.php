<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Core\Routing;

use Metinet\Core\Http\Request;

class RouteUrlMatcher implements UrlMatcher
{
    private $routes = [];

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function match(Request $request): callable
    {
        foreach ($this->routes as $route) {
            if ($request->getPath() === $route->getPath()
                && \in_array($request->getMethod(), $route->getHttpMethod(), true)) {

                return $route->getAction();
            }
        }

        throw new RouteNotFound($request->getMethod(), $request->getPath());
    }
}
