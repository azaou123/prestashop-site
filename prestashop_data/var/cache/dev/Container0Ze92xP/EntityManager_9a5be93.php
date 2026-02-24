<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder499b7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfb1a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2be9d = [
        
    ];

    public function getConnection()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getConnection', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getMetadataFactory', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getExpressionBuilder', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'beginTransaction', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getCache', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'transactional', array('func' => $func), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'commit', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->commit();
    }

    public function rollback()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'rollback', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getClassMetadata', array('className' => $className), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'createQuery', array('dql' => $dql), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'createNamedQuery', array('name' => $name), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'createQueryBuilder', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'flush', array('entity' => $entity), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'clear', array('entityName' => $entityName), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->clear($entityName);
    }

    public function close()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'close', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->close();
    }

    public function persist($entity)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'persist', array('entity' => $entity), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'remove', array('entity' => $entity), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'refresh', array('entity' => $entity), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'detach', array('entity' => $entity), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'merge', array('entity' => $entity), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'contains', array('entity' => $entity), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getEventManager', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getConfiguration', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'isOpen', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getUnitOfWork', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getProxyFactory', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'initializeObject', array('obj' => $obj), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getFilters', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'isFiltersStateClean', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'hasFilters', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->hasFilters();
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

        $instance->initializerfb1a3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder499b7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder499b7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder499b7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, '__get', ['name' => $name], $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        if (isset(self::$publicProperties2be9d[$name])) {
            return $this->valueHolder499b7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder499b7;

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

        $targetObject = $this->valueHolder499b7;
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
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder499b7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder499b7;
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
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, '__isset', array('name' => $name), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder499b7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder499b7;
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
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, '__unset', array('name' => $name), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder499b7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder499b7;
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
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, '__clone', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        $this->valueHolder499b7 = clone $this->valueHolder499b7;
    }

    public function __sleep()
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, '__sleep', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return array('valueHolder499b7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfb1a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfb1a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'initializeProxy', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder499b7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder499b7;
    }
}
