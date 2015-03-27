<?php

namespace Wpa18\Application;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;


class Application {

    private $request;
    private $routes;

    public function __construct() {
        $this->request = Request::createFromGlobals();
   			
    }

    public function run() {
        $routes = include DD . "/app/routes.php";
        $context = new RequestContext();
        $context->fromRequest($this->request);
        $matcher = new UrlMatcher($routes, $context);
        try {
            $this->request->attributes->add($matcher->match($this->request->getPathInfo()));
            $controller_resolver = new ControllerResolver();

            $controller = $controller_resolver->getController($this->request);
            $arguments = $controller_resolver->getArguments($this->request, $controller);
            $res = call_user_func_array($controller, $arguments);
            $response = new Response($res, 200);
        } catch(ResourceNotFoundException $e) {
            $response = new Response("Not Found, Idiot!", 404);
        } catch(\Exception $e) {
            $response = new Response("Server Error", 500);
        }

        $response->send();



    }



}

?>