 <?php

use App\Controllers\AdminController;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;

function definedRoute($url){
    $router = new RouteCollector();
   
    $router->get('test-layout', function(){
        return view('layout');
    });
    $router->get('/', [HomeController::class, 'index']);
    $router->get('/product/detail/{id}', [ProductController::class , "detail"]);
    $router->get('/admin', [AdminController::class , "index"]);

    $router->get('/admin/category', [AdminController::class , "category"]);
    $router->get('/admin/category/add', [AdminController::class , "categoryAdd"]);
    $router->post('/admin/category/add', [AdminController::class , "categorySaveAdd"]);

    $router->get('/admin/category/edit/{id}', [AdminController::class , "categoryEdit"]);
    $router->post('/admin/category/edit/{id}', [AdminController::class , "categorySaveEdit"]);

    $router->get('/admin/category/remove/{id}', [AdminController::class , "categoryRemove"]);

    $router->get('/admin/product', [AdminController::class , "product"]);
    $router->get('/admin/product/add', [AdminController::class , "productAdd"]);
    $router->post('/admin/product/add', [AdminController::class , "productSaveAdd"]);

    $router->get('/admin/product/edit/{id}', [AdminController::class , "productEdit"]);
    $router->post('/admin/product/edit/{id}', [AdminController::class , "productSaveEdit"]);

    $router->get('/admin/product/remove/{id}', [AdminController::class , "productRemove"]);

    $router->get('/sendEmail', [HomeController::class , "formEmail"]);
    $router->post('/sendEmail', [HomeController::class , "sendEmail"]);



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    // Print out the value returned from the dispatched function
    echo $response;


}
