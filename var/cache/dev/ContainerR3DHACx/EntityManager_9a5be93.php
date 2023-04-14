<?php

namespace ContainerR3DHACx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getConnection', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getMetadataFactory', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getExpressionBuilder', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'beginTransaction', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getCache', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'transactional', array('func' => $func), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->transactional($func);
    }

    public function commit()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'commit', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->commit();
    }

    public function rollback()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'rollback', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getClassMetadata', array('className' => $className), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'createQuery', array('dql' => $dql), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'createNamedQuery', array('name' => $name), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'createQueryBuilder', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'flush', array('entity' => $entity), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'clear', array('entityName' => $entityName), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->clear($entityName);
    }

    public function close()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'close', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->close();
    }

    public function persist($entity)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'persist', array('entity' => $entity), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'remove', array('entity' => $entity), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'refresh', array('entity' => $entity), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'detach', array('entity' => $entity), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'merge', array('entity' => $entity), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'contains', array('entity' => $entity), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getEventManager', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getConfiguration', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'isOpen', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getUnitOfWork', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getProxyFactory', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'initializeObject', array('obj' => $obj), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'getFilters', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'isFiltersStateClean', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, 'hasFilters', array(), $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        return $this->valueHolder35cce->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0c17d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder35cce) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder35cce = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder35cce->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0c17d && ($this->initializer0c17d->__invoke($valueHolder35cce, $this, '__get', ['name' => $name], $this->initializer0c17d) || 1) && $this->valueHolder35cce = $valueHolder35cce;

        if (isset(self::$publicPropertiesf7132[$name])) {
            return $this->valueHolder35cce->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
