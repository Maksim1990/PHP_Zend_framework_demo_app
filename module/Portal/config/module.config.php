<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Portal;

use Portal\Service\CurrencyConverter;
use Portal\Service\Factory\CurrencyConverterFactory;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [


    'router' => [
        'routes' => [
            'home' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
            'portal' => [
                'type' => Segment::class,
                'options' => [
                    'route' => '/portal[/:action]',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action' => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            \Portal\Controller\IndexController::class => \Portal\Controller\ControllerFactory::class,
        ],
        'aliases' => [
            'Portal\Controller\Index' => \Portal\Controller\IndexController::class,
        ],
    ],
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'portal/index/index' => __DIR__ . '/../view/portal/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
//    'service_manager' => [
//        'factories' => [
//            // Register CurrencyConverter service.
//            CurrencyConverter::class => CurrencyConverterFactory::class
//        ],
//        'aliases' => [
//            // Register an alias for the CurrencyConverter service.
//            'CurConv' => CurrencyConverter::class
//        ]
//    ],

];
