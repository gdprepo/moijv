<?php

namespace ContainerCrL0E9v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCacheWarmerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache_warmer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerAggregate.php';

        return $container->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['cache_pool_clearer.cache_warmer'] ?? $container->load('getCachePoolClearer_CacheWarmerService'));
            yield 1 => ($container->privates['validator.mapping.cache_warmer'] ?? $container->load('getValidator_Mapping_CacheWarmerService'));
            yield 2 => ($container->privates['translation.warmer'] ?? $container->load('getTranslation_WarmerService'));
            yield 3 => ($container->privates['router.cache_warmer'] ?? $container->load('getRouter_CacheWarmerService'));
            yield 4 => ($container->privates['annotations.cache_warmer'] ?? $container->load('getAnnotations_CacheWarmerService'));
            yield 5 => ($container->privates['twig.template_cache_warmer'] ?? $container->load('getTwig_TemplateCacheWarmerService'));
            yield 6 => ($container->privates['doctrine.orm.proxy_cache_warmer'] ?? $container->load('getDoctrine_Orm_ProxyCacheWarmerService'));
            yield 7 => ($container->privates['Vich\\UploaderBundle\\Metadata\\CacheWarmer'] ?? $container->load('getCacheWarmer2Service'));
        }, 8), true, ($container->targetDir.''.'/App_KernelDevDebugContainerDeprecations.log'));
    }
}
