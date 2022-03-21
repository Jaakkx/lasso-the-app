<?php

namespace ContainerIxLskuz;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder187eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer44321 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties552af = [
        
    ];

    public function getConnection()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getConnection', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getMetadataFactory', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getExpressionBuilder', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'beginTransaction', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getCache', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'transactional', array('func' => $func), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'wrapInTransaction', array('func' => $func), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'commit', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->commit();
    }

    public function rollback()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'rollback', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'createQuery', array('dql' => $dql), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'createQueryBuilder', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'flush', array('entity' => $entity), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'clear', array('entityName' => $entityName), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'close', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->close();
    }

    public function persist($entity)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'persist', array('entity' => $entity), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'remove', array('entity' => $entity), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'refresh', array('entity' => $entity), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'detach', array('entity' => $entity), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'merge', array('entity' => $entity), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'contains', array('entity' => $entity), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getEventManager', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getConfiguration', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'isOpen', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getUnitOfWork', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getProxyFactory', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'getFilters', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'isFiltersStateClean', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'hasFilters', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return $this->valueHolder187eb->hasFilters();
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

        $instance->initializer44321 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder187eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder187eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder187eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, '__get', ['name' => $name], $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        if (isset(self::$publicProperties552af[$name])) {
            return $this->valueHolder187eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder187eb;

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

        $targetObject = $this->valueHolder187eb;
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
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder187eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder187eb;
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
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, '__isset', array('name' => $name), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder187eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder187eb;
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
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, '__unset', array('name' => $name), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder187eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder187eb;
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
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, '__clone', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        $this->valueHolder187eb = clone $this->valueHolder187eb;
    }

    public function __sleep()
    {
        $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, '__sleep', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;

        return array('valueHolder187eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer44321 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer44321;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer44321 && ($this->initializer44321->__invoke($valueHolder187eb, $this, 'initializeProxy', array(), $this->initializer44321) || 1) && $this->valueHolder187eb = $valueHolder187eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder187eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder187eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
