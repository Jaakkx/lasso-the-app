<?php

namespace ContainerGMkScHq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XyPGiYFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xyPGiYF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xyPGiYF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'csrfTokenManager' => ['services', '.container.private.security.csrf.token_manager', 'get_Container_Private_Security_Csrf_TokenManagerService', true],
            'hasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'csrfTokenManager' => '?',
            'hasher' => '?',
            'serializer' => '?',
        ]);
    }
}
