<?php

namespace ContainerACsoxZo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCustomerProviderService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Security\Core\User\CustomerProvider' shared autowired service.
     *
     * @return \Eccube\Security\Core\User\CustomerProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/User/UserProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Security/Core/User/CustomerProvider.php';

        return $container->privates['Eccube\\Security\\Core\\User\\CustomerProvider'] = new \Eccube\Security\Core\User\CustomerProvider(($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')));
    }
}