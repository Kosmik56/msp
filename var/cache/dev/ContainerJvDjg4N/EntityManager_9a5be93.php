<?php

namespace ContainerJvDjg4N;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1a127 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer55e60 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3fa7b = [
        
    ];

    public function getConnection()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getConnection', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getMetadataFactory', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getExpressionBuilder', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'beginTransaction', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getCache', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getCache();
    }

    public function transactional($func)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'transactional', array('func' => $func), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'wrapInTransaction', array('func' => $func), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'commit', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->commit();
    }

    public function rollback()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'rollback', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getClassMetadata', array('className' => $className), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'createQuery', array('dql' => $dql), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'createNamedQuery', array('name' => $name), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'createQueryBuilder', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'flush', array('entity' => $entity), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'clear', array('entityName' => $entityName), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->clear($entityName);
    }

    public function close()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'close', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->close();
    }

    public function persist($entity)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'persist', array('entity' => $entity), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'remove', array('entity' => $entity), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'refresh', array('entity' => $entity), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'detach', array('entity' => $entity), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'merge', array('entity' => $entity), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getRepository', array('entityName' => $entityName), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'contains', array('entity' => $entity), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getEventManager', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getConfiguration', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'isOpen', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getUnitOfWork', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getProxyFactory', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'initializeObject', array('obj' => $obj), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'getFilters', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'isFiltersStateClean', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'hasFilters', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return $this->valueHolder1a127->hasFilters();
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

        $instance->initializer55e60 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1a127) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1a127 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1a127->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, '__get', ['name' => $name], $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        if (isset(self::$publicProperties3fa7b[$name])) {
            return $this->valueHolder1a127->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a127;

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

        $targetObject = $this->valueHolder1a127;
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
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a127;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1a127;
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
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, '__isset', array('name' => $name), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a127;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1a127;
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
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, '__unset', array('name' => $name), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1a127;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1a127;
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
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, '__clone', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        $this->valueHolder1a127 = clone $this->valueHolder1a127;
    }

    public function __sleep()
    {
        $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, '__sleep', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;

        return array('valueHolder1a127');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer55e60 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer55e60;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer55e60 && ($this->initializer55e60->__invoke($valueHolder1a127, $this, 'initializeProxy', array(), $this->initializer55e60) || 1) && $this->valueHolder1a127 = $valueHolder1a127;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1a127;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1a127;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
