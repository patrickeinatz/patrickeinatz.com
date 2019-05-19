<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\BasicPageController::index'], null, null, null, false, false, null]],
            '/data' => [[['_route' => 'data', '_controller' => 'App\\Controller\\BasicPageController::data'], null, null, null, false, false, null]],
            '/archive' => [[['_route' => 'archive', '_controller' => 'App\\Controller\\BasicPageController::archive'], null, null, null, false, false, null]],
            '/lgn' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        ];
        $this->regexpList = [
            0 => '{^(?'
                    .'|/news/([^/]++)(*:21)'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            21 => [[['_route' => 'news', '_controller' => 'App\\Controller\\NewsController::news'], ['slug'], null, null, false, true, null]],
        ];
    }
}
