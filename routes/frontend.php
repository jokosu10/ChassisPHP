<?PHP

use Symfony\Component\HttpFoundation\Response;

return [
/*
 * These are the routes for your frontend
 * This file contains your application
 * frontend, public-facing routes
 */
    ['GET', '/', ['Http\Controllers\HomeController', 'index']],

    ['GET', '/new', function () {
        echo 'This is a test page!';
    }],

    ['GET', '/test', function () {
        echo 'This is Roger\'s test page';
    }],

    ['GET', '/name/{name}', function ($name) {
        return new Response('Well, hello ' . $name .'!');
    }],

    ['GET', '/errors/404', function () {
        return new Response('Dude - there aint no setch page<br>That\'s a 404');
    }],

];
