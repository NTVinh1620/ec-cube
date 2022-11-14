<?php

namespace ContainerACsoxZo;
include_once \dirname(__DIR__, 4).'/vendor/psr/log/Psr/Log/AbstractLogger.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Log/Logger.php';

class Logger_fadf7f2 extends \Eccube\Log\Logger implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Log\Logger|null wrapped object, if the proxy is initialized
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

    public function log($level, $message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'log', array('level' => $level, 'message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->log($level, $message, $context);
    }

    public function emergency($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'emergency', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->emergency($message, $context);
    }

    public function alert($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'alert', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->alert($message, $context);
    }

    public function critical($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'critical', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->critical($message, $context);
    }

    public function error($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'error', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->error($message, $context);
    }

    public function warning($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'warning', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->warning($message, $context);
    }

    public function notice($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'notice', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->notice($message, $context);
    }

    public function info($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'info', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->info($message, $context);
    }

    public function debug($message, array $context = [])
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'debug', array('message' => $message, 'context' => $context), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->debug($message, $context);
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

        unset($instance->context, $instance->logger, $instance->frontLogger, $instance->adminLogger);

        $instance->initializer7914e = $initializer;

        return $instance;
    }

    public function __construct(\Eccube\Request\Context $context, \Psr\Log\LoggerInterface $logger, \Psr\Log\LoggerInterface $frontLogger, \Psr\Log\LoggerInterface $adminLogger)
    {
        static $reflection;

        if (! $this->valueHolder6fc09) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Log\\Logger');
            $this->valueHolder6fc09 = $reflection->newInstanceWithoutConstructor();
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);

        }

        $this->valueHolder6fc09->__construct($context, $logger, $frontLogger, $adminLogger);
    }

    public function & __get($name)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__get', ['name' => $name], $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        if (isset(self::$publicProperties25653[$name])) {
            return $this->valueHolder6fc09->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Log\\Logger');

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
        unset($this->context, $this->logger, $this->frontLogger, $this->adminLogger);
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

if (!\class_exists('Logger_fadf7f2', false)) {
    \class_alias(__NAMESPACE__.'\\Logger_fadf7f2', 'Logger_fadf7f2', false);
}
