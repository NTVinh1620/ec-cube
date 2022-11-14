<?php

namespace ContainerACsoxZo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactTypeService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Form\Type\Front\ContactType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Front\ContactType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Form/Type/Front/ContactType.php';

        return $container->privates['Eccube\\Form\\Type\\Front\\ContactType'] = new \Eccube\Form\Type\Front\ContactType(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}