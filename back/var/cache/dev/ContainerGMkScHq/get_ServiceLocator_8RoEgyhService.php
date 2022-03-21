<?php

namespace ContainerGMkScHq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8RoEgyhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8RoEgyh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8RoEgyh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\LassoController::addData' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\QuestionController::getRandomQuestion' => ['privates', '.service_locator.FZRaRIj', 'get_ServiceLocator_FZRaRIjService', true],
            'App\\Controller\\QuestionController::getRanking' => ['privates', '.service_locator.9wplPMA', 'get_ServiceLocator_9wplPMAService', true],
            'App\\Controller\\QuestionController::updateRanking' => ['privates', '.service_locator.9wplPMA', 'get_ServiceLocator_9wplPMAService', true],
            'App\\Controller\\RegistrationController::login' => ['privates', '.service_locator.xyPGiYF', 'get_ServiceLocator_XyPGiYFService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.EAbzJKI', 'get_ServiceLocator_EAbzJKIService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\LassoController:addData' => ['privates', '.service_locator.uCSWYWR', 'get_ServiceLocator_UCSWYWRService', true],
            'App\\Controller\\QuestionController:getRandomQuestion' => ['privates', '.service_locator.FZRaRIj', 'get_ServiceLocator_FZRaRIjService', true],
            'App\\Controller\\QuestionController:getRanking' => ['privates', '.service_locator.9wplPMA', 'get_ServiceLocator_9wplPMAService', true],
            'App\\Controller\\QuestionController:updateRanking' => ['privates', '.service_locator.9wplPMA', 'get_ServiceLocator_9wplPMAService', true],
            'App\\Controller\\RegistrationController:login' => ['privates', '.service_locator.xyPGiYF', 'get_ServiceLocator_XyPGiYFService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.EAbzJKI', 'get_ServiceLocator_EAbzJKIService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\LassoController::addData' => '?',
            'App\\Controller\\QuestionController::getRandomQuestion' => '?',
            'App\\Controller\\QuestionController::getRanking' => '?',
            'App\\Controller\\QuestionController::updateRanking' => '?',
            'App\\Controller\\RegistrationController::login' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\LassoController:addData' => '?',
            'App\\Controller\\QuestionController:getRandomQuestion' => '?',
            'App\\Controller\\QuestionController:getRanking' => '?',
            'App\\Controller\\QuestionController:updateRanking' => '?',
            'App\\Controller\\RegistrationController:login' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}