<?php

namespace ContainerC8gPO2H;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera9553 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85eaa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties60e7e = [
        
    ];

    public function getConnection()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getConnection', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getMetadataFactory', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getExpressionBuilder', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'beginTransaction', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getCache', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'transactional', array('func' => $func), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'wrapInTransaction', array('func' => $func), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'commit', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->commit();
    }

    public function rollback()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'rollback', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getClassMetadata', array('className' => $className), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'createQuery', array('dql' => $dql), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'createNamedQuery', array('name' => $name), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'createQueryBuilder', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'flush', array('entity' => $entity), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'clear', array('entityName' => $entityName), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->clear($entityName);
    }

    public function close()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'close', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->close();
    }

    public function persist($entity)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'persist', array('entity' => $entity), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'remove', array('entity' => $entity), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'detach', array('entity' => $entity), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'merge', array('entity' => $entity), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'contains', array('entity' => $entity), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getEventManager', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getConfiguration', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'isOpen', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getUnitOfWork', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getProxyFactory', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'initializeObject', array('obj' => $obj), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'getFilters', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'isFiltersStateClean', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'hasFilters', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return $this->valueHoldera9553->hasFilters();
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

        $instance->initializer85eaa = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHoldera9553) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera9553 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera9553->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, '__get', ['name' => $name], $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        if (isset(self::$publicProperties60e7e[$name])) {
            return $this->valueHoldera9553->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9553;

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

        $targetObject = $this->valueHoldera9553;
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
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9553;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera9553;
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
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, '__isset', array('name' => $name), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9553;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera9553;
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
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, '__unset', array('name' => $name), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera9553;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera9553;
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
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, '__clone', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        $this->valueHoldera9553 = clone $this->valueHoldera9553;
    }

    public function __sleep()
    {
        $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, '__sleep', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;

        return array('valueHoldera9553');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer85eaa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer85eaa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85eaa && ($this->initializer85eaa->__invoke($valueHoldera9553, $this, 'initializeProxy', array(), $this->initializer85eaa) || 1) && $this->valueHoldera9553 = $valueHoldera9553;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera9553;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera9553;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
