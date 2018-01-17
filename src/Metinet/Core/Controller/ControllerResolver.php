<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Core\Controller;

use Metinet\Core\Http\Request;
use Metinet\Core\Routing\UrlMatcher;

class ControllerResolver
{
    private $urlMatcher;

    public function __construct(UrlMatcher $matcher)
    {
        $this->urlMatcher = $matcher;
    }

    public function resolve(Request $request): callable
    {
        $action = $this->urlMatcher->match($request);

        [$controller, $method] = explode('::', $action);
        $controller = strtr($controller, ':', '\\');

        if (!class_exists($controller)) {

            throw UnableToResolveController::controllerNotFound($controller);
        }

        $controllerInstance = new $controller();

        if (!method_exists($controllerInstance, $method)) {

            throw UnableToResolveController::actionNotFoundInController($method, $controller);
        }

        return [$controllerInstance, $method];
    }
}
