<?php

namespace ContainerACsoxZo;
include_once \dirname(__DIR__, 4).'/src/Eccube/Repository/PluginRepository.php';

class PluginRepository_c4546a6 extends \Eccube\Repository\PluginRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Repository\PluginRepository|null wrapped object, if the proxy is initialized
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

    public function findAllEnabled()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'findAllEnabled', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->findAllEnabled();
    }

    public function findByCode($code)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'findByCode', array('code' => $code), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->findByCode($code);
    }

    public function delete($entity)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'delete', array('entity' => $entity), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->delete($entity);
    }

    public function save($entity)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'save', array('entity' => $entity), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->save($entity);
    }

    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->createQueryBuilder($alias, $indexBy);
    }

    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->createResultSetMappingBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'clear', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->clear();
    }

    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'findAll', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->findAll();
    }

    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->findOneBy($criteria, $orderBy);
    }

    public function count(array $criteria)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'count', array('criteria' => $criteria), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->count($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getClassName', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'matching', array('criteria' => $criteria), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->matching($criteria);
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

        unset($instance->eccubeConfig, $instance->_entityName, $instance->_em, $instance->_class);

        $instance->initializer7914e = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\Persistence\ManagerRegistry $registry)
    {
        static $reflection;

        if (! $this->valueHolder6fc09) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Repository\\PluginRepository');
            $this->valueHolder6fc09 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);

        }

        $this->valueHolder6fc09->__construct($registry);
    }

    public function & __get($name)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__get', ['name' => $name], $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        if (isset(self::$publicProperties25653[$name])) {
            return $this->valueHolder6fc09->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Repository\\PluginRepository');

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
        unset($this->eccubeConfig, $this->_entityName, $this->_em, $this->_class);
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

if (!\class_exists('PluginRepository_c4546a6', false)) {
    \class_alias(__NAMESPACE__.'\\PluginRepository_c4546a6', 'PluginRepository_c4546a6', false);
}
