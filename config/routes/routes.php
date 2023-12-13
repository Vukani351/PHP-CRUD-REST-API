<?php
// config/routes.php
use App\Controller\BlogController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes): void {
    $routes->add('blog_list', '/blog')
        // the controller value has the format [controller_class, method_name]
        ->controller([BlogController::class, 'list'])
        ->methods(['GET', 'HEAD'])

        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the 'method_name' part:
        // ->controller(BlogController::class)
    ;
    
    $routes->add('app_lucky_number', '/lucky/number/{max}')
        // the controller value has the format [controller_class, method_name]
        ->controller([LuckyController::class, 'list'])
        // ->methods(['PUT'])

        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the 'method_name' part:
        // ->controller(BlogController::class)
    ;
};