<?php

namespace ContainerACsoxZo;
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/SystemService.php';

class SystemService_f79b835 extends \Eccube\Service\SystemService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Service\SystemService|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6fc09 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7914e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25653 = [
        
    ];

    public function getDbversion()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getDbversion', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getDbversion();
    }

    public function canSetMemoryLimit($memory)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'canSetMemoryLimit', array('memory' => $memory), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->canSetMemoryLimit($memory);
    }

    public function getMemoryLimit()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getMemoryLimit', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getMemoryLimit();
    }

    public function switchMaintenance($isEnable = false, $mode = 'auto_maintenance', bool $force = false)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'switchMaintenance', array('isEnable' => $isEnable, 'mode' => $mode, 'force' => $force), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->switchMaintenance($isEnable, $mode, $force);
    }

    public function getMaintenanceToken() : ?string
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getMaintenanceToken', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getMaintenanceToken();
    }

    public function disableMaintenanceEvent(\Symfony\Component\HttpKernel\Event\TerminateEvent $event)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'disableMaintenanceEvent', array('event' => $event), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->disableMaintenanceEvent($event);
    }

    public function enableMaintenance($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'enableMaintenance', array('mode' => $mode, 'force' => $force), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        $this->valueHolder6fc09->enableMaintenance($mode, $force);
return;
    }

    public function disableMaintenance($mode = 'auto_maintenance')
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'disableMaintenance', array('mode' => $mode), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->disableMaintenance($mode);
    }

    public function disableMaintenanceNow($mode = 'auto_maintenance', bool $force = false) : void
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'disableMaintenanceNow', array('mode' => $mode, 'force' => $force), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        $this->valueHolder6fc09->disableMaintenanceNow($mode, $force);
return;
    }

    public function isMaintenanceMode()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'isMaintenanceMode', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->isMaintenanceMode();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        unset($instance->entityManager, $instance->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $instance, 'Eccube\\Service\\SystemService')->__invoke($instance);

        $instance->initializer7914e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Symfony\Component\DependencyInjection\ContainerInterface $container)
    {
        static $reflection;

        if (! $this->valueHolder6fc09) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\SystemService');
            $this->valueHolder6fc09 = $reflection->newInstanceWithoutConstructor();
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);

        }

        $this->valueHolder6fc09->__construct($entityManager, $container);
    }

    public function & __get($name)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__get', ['name' => $name], $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        if (isset(self::$publicProperties25653[$name])) {
            return $this->valueHolder6fc09->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fc09;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6fc09;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fc09;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6fc09;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__isset', array('name' => $name), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fc09;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6fc09;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__unset', array('name' => $name), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\SystemService');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6fc09;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6fc09;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__clone', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        $this->valueHolder6fc09 = clone $this->valueHolder6fc09;
    }

    public function __sleep()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__sleep', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return array('valueHolder6fc09');
    }

    public function __wakeup()
    {
        unset($this->entityManager, $this->container);

        \Closure::bind(function (\Eccube\Service\SystemService $instance) {
            unset($instance->disableMaintenanceAfterResponse, $instance->maintenanceMode);
        }, $this, 'Eccube\\Service\\SystemService')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7914e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7914e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'initializeProxy', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6fc09;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6fc09;
    }
}

if (!\class_exists('SystemService_f79b835', false)) {
    \class_alias(__NAMESPACE__.'\\SystemService_f79b835', 'SystemService_f79b835', false);
}
