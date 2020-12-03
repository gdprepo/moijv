<?php

namespace ContainerD0OYVNN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SKIJTvoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sKIJTvo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sKIJTvo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoriesBdd' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
            'game' => ['privates', '.errored..service_locator.sKIJTvo.App\\Entity\\Game', NULL, 'Cannot autowire service ".service_locator.sKIJTvo": it references class "App\\Entity\\Game" but no such service exists.'],
        ], [
            'categoriesBdd' => 'App\\Repository\\CategoryRepository',
            'game' => 'App\\Entity\\Game',
        ]);
    }
}
