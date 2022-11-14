<?php

namespace ContainerACsoxZo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStockReduceProcessorService extends Eccube_KernelDevDebugContainer
{
    /**
     * Gets the private 'Eccube\Service\PurchaseFlow\Processor\StockReduceProcessor' shared autowired service.
     *
     * @return \Eccube\Service\PurchaseFlow\Processor\StockReduceProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/PurchaseProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/AbstractPurchaseProcessor.php';
        include_once \dirname(__DIR__, 4).'/src/Eccube/Service/PurchaseFlow/Processor/StockReduceProcessor.php';

        return $container->privates['Eccube\\Service\\PurchaseFlow\\Processor\\StockReduceProcessor'] = new \Eccube\Service\PurchaseFlow\Processor\StockReduceProcessor(($container->privates['Eccube\\Repository\\ProductStockRepository'] ?? $container->load('getProductStockRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}