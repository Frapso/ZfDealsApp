<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Helloworld;

use Zend\Router\Http\Literal;

return [
    'view_manager' =>  [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
    'router' => [
        'routes' => [
            'sayhello' => [
                'type' => Literal::class,
                    'options' => [
                        'route' => '/sayhello',
                        'defaults' => [
                            'controller' => 'Helloworld\Controller\Index',
                            'action' => 'index',
                        ],
                    ],
                ],
            ],
        ],
        'controllers' => [
            'invokables' => [
                'Helloworld\Controller\Index' => 'Helloworld\Controller\IndexController',
            ],
        ],
    
];
