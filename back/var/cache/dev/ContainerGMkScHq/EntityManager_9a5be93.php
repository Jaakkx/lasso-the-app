<?php

namespace ContainerGMkScHq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd16fe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf9c3d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2f6fa = [
        
    ];

    public function getConnection()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getConnection', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getMetadataFactory', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getExpressionBuilder', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'beginTransaction', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getCache', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'transactional', array('func' => $func), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'commit', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->commit();
    }

    public function rollback()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'rollback', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getClassMetadata', array('className' => $className), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'createQuery', array('dql' => $dql), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'createNamedQuery', array('name' => $name), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'createQueryBuilder', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'flush', array('entity' => $entity), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'clear', array('entityName' => $entityName), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->clear($entityName);
    }

    public function close()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'close', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->close();
    }

    public function persist($entity)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'persist', array('entity' => $entity), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'remove', array('entity' => $entity), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'refresh', array('entity' => $entity), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'detach', array('entity' => $entity), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'merge', array('entity' => $entity), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'contains', array('entity' => $entity), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getEventManager', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getConfiguration', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'isOpen', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getUnitOfWork', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getProxyFactory', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'initializeObject', array('obj' => $obj), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'getFilters', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'isFiltersStateClean', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'hasFilters', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return $this->valueHolderd16fe->hasFilters();
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

        $instance->initializerf9c3d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd16fe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd16fe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd16fe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, '__get', ['name' => $name], $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        if (isset(self::$publicProperties2f6fa[$name])) {
            return $this->valueHolderd16fe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd16fe;

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

        $targetObject = $this->valueHolderd16fe;
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
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd16fe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd16fe;
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
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, '__isset', array('name' => $name), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd16fe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd16fe;
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
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, '__unset', array('name' => $name), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd16fe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd16fe;
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
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, '__clone', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        $this->valueHolderd16fe = clone $this->valueHolderd16fe;
    }

    public function __sleep()
    {
        $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, '__sleep', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;

        return array('valueHolderd16fe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf9c3d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf9c3d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf9c3d && ($this->initializerf9c3d->__invoke($valueHolderd16fe, $this, 'initializeProxy', array(), $this->initializerf9c3d) || 1) && $this->valueHolderd16fe = $valueHolderd16fe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd16fe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd16fe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
