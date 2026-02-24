<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Module\ModuleRepository|null wrapped object, if the proxy is initialized
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

    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getList', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getList();
    }

    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getInstalledModules', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getInstalledModules();
    }

    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getMustBeConfiguredModules', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getMustBeConfiguredModules();
    }

    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getUpgradableModules', array(), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getUpgradableModules();
    }

    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getModule($moduleName);
    }

    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->getModulePath($moduleName);
    }

    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'setActionUrls', array('collection' => $collection), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->setActionUrls($collection);
    }

    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        return $this->valueHolder499b7->clearCache($moduleName, $allShops);
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

        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);

        $instance->initializerfb1a3 = $initializer;

        return $instance;
    }

    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;

        if (! $this->valueHolder499b7) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder499b7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);

        }

        $this->valueHolder499b7->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }

    public function & __get($name)
    {
        $this->initializerfb1a3 && ($this->initializerfb1a3->__invoke($valueHolder499b7, $this, '__get', ['name' => $name], $this->initializerfb1a3) || 1) && $this->valueHolder499b7 = $valueHolder499b7;

        if (isset(self::$publicProperties2be9d[$name])) {
            return $this->valueHolder499b7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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

        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');

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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
