<?php

namespace ContainerACsoxZo;
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/CartService.php';

class CartService_9dde17f extends \Eccube\Service\CartService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Eccube\Service\CartService|null wrapped object, if the proxy is initialized
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

    public function getCarts($empty_delete = false)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getCarts', array('empty_delete' => $empty_delete), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getCarts($empty_delete);
    }

    public function getPersistedCarts()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getPersistedCarts', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getPersistedCarts();
    }

    public function getSessionCarts()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getSessionCarts', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getSessionCarts();
    }

    public function mergeFromPersistedCart()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'mergeFromPersistedCart', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->mergeFromPersistedCart();
    }

    public function getCart()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getCart', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getCart();
    }

    public function addProduct($ProductClass, $quantity = 1)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'addProduct', array('ProductClass' => $ProductClass, 'quantity' => $quantity), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->addProduct($ProductClass, $quantity);
    }

    public function removeProduct($ProductClass)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'removeProduct', array('ProductClass' => $ProductClass), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->removeProduct($ProductClass);
    }

    public function save()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'save', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->save();
    }

    public function setPreOrderId($pre_order_id)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'setPreOrderId', array('pre_order_id' => $pre_order_id), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->setPreOrderId($pre_order_id);
    }

    public function getPreOrderId()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'getPreOrderId', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->getPreOrderId();
    }

    public function clear()
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'clear', array(), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->clear();
    }

    public function setCartItemComparator($cartItemComparator)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'setCartItemComparator', array('cartItemComparator' => $cartItemComparator), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->setCartItemComparator($cartItemComparator);
    }

    public function setPrimary($cartKey)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, 'setPrimary', array('cartKey' => $cartKey), $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        return $this->valueHolder6fc09->setPrimary($cartKey);
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

        unset($instance->carts, $instance->session, $instance->entityManager, $instance->cart, $instance->productClassRepository, $instance->cartRepository, $instance->cartItemComparator, $instance->cartItemAllocator, $instance->orderRepository, $instance->tokenStorage, $instance->authorizationChecker);

        $instance->initializer7914e = $initializer;

        return $instance;
    }

    public function __construct(\Symfony\Component\HttpFoundation\Session\SessionInterface $session, \Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\ProductClassRepository $productClassRepository, \Eccube\Repository\CartRepository $cartRepository, \Eccube\Service\Cart\CartItemComparator $cartItemComparator, \Eccube\Service\Cart\CartItemAllocator $cartItemAllocator, \Eccube\Repository\OrderRepository $orderRepository, \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface $tokenStorage, \Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface $authorizationChecker)
    {
        static $reflection;

        if (! $this->valueHolder6fc09) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\CartService');
            $this->valueHolder6fc09 = $reflection->newInstanceWithoutConstructor();
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);

        }

        $this->valueHolder6fc09->__construct($session, $entityManager, $productClassRepository, $cartRepository, $cartItemComparator, $cartItemAllocator, $orderRepository, $tokenStorage, $authorizationChecker);
    }

    public function & __get($name)
    {
        $this->initializer7914e && ($this->initializer7914e->__invoke($valueHolder6fc09, $this, '__get', ['name' => $name], $this->initializer7914e) || 1) && $this->valueHolder6fc09 = $valueHolder6fc09;

        if (isset(self::$publicProperties25653[$name])) {
            return $this->valueHolder6fc09->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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

        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\CartService');

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
        unset($this->carts, $this->session, $this->entityManager, $this->cart, $this->productClassRepository, $this->cartRepository, $this->cartItemComparator, $this->cartItemAllocator, $this->orderRepository, $this->tokenStorage, $this->authorizationChecker);
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

if (!\class_exists('CartService_9dde17f', false)) {
    \class_alias(__NAMESPACE__.'\\CartService_9dde17f', 'CartService_9dde17f', false);
}
