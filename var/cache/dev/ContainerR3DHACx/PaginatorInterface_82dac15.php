<?php

namespace ContainerR3DHACx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder35cce = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0c17d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf7132 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        if ($this->valueHolder35cce === $returnValue = $this->valueHolder35cce->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer0c17d = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder35cce) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder35cce = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, '__get', ['name' => $name], $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        if (isset(self::$publicPropertiesf7132[$name])) {
            return $this->valueHolder35cce->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35cce;

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

        $targetObject = $this->valueHolder35cce;
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
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35cce;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder35cce;
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
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, '__isset', array('name' => $name), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35cce;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder35cce;
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
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, '__unset', array('name' => $name), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder35cce;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder35cce;
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
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, '__clone', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        $this->valueHolder35cce = clone $this->valueHolder35cce;
    }

    public function __sleep()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, '__sleep', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return array('valueHolder35cce');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0c17d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0c17d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'initializeProxy', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder35cce;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder35cce;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
