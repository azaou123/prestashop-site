<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Modules/ps_linklist/src/Core/Grid/LinkBlockGridFactory.php */
class __TwigTemplate_11c6379ac1637ca8221277004d10693b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Core/Grid/LinkBlockGridFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Core/Grid/LinkBlockGridFactory.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\\Module\\LinkList\\Core\\Grid;

use PrestaShop\\Module\\LinkList\\Core\\Grid\\Definition\\Factory\\LinkBlockDefinitionFactory;
use PrestaShop\\Module\\LinkList\\Core\\Search\\Filters\\LinkBlockFilters;
use PrestaShop\\PrestaShop\\Adapter\\Shop\\Context;
use PrestaShop\\PrestaShop\\Core\\Grid\\Data\\Factory\\GridDataFactoryInterface;
use PrestaShop\\PrestaShop\\Core\\Grid\\Filter\\GridFilterFormFactoryInterface;
use PrestaShop\\PrestaShop\\Core\\Grid\\GridFactory;
use PrestaShop\\PrestaShop\\Core\\Grid\\GridInterface;
use PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcherInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Class LinkBlockGridFactory.
 */
final class LinkBlockGridFactory
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var HookDispatcherInterface
     */
    private \$hookDispatcher;

    /**
     * @var GridDataFactoryInterface
     */
    private \$dataFactory;

    /**
     * @var GridFilterFormFactoryInterface
     */
    private \$filterFormFactory;

    /**
     * @var Context
     */
    private \$shopContext;

    /**
     * HookGridFactory constructor.
     *
     * @param TranslatorInterface \$translator
     * @param HookDispatcherInterface \$hookDispatcher
     * @param GridDataFactoryInterface \$dataFactory
     * @param GridFilterFormFactoryInterface \$filterFormFactory
     * @param Context \$shopContext
     */
    public function __construct(
        TranslatorInterface \$translator,
        GridDataFactoryInterface \$dataFactory,
        HookDispatcherInterface \$hookDispatcher,
        GridFilterFormFactoryInterface \$filterFormFactory,
        Context \$shopContext
    ) {
        \$this->translator = \$translator;
        \$this->hookDispatcher = \$hookDispatcher;
        \$this->dataFactory = \$dataFactory;
        \$this->filterFormFactory = \$filterFormFactory;
        \$this->shopContext = \$shopContext;
    }

    /**
     * @param array \$hooks
     * @param array \$filtersParams
     *
     * @return GridInterface[]
     */
    public function getGrids(array \$hooks, array \$filtersParams)
    {
        \$grids = [];
        foreach (\$hooks as \$hook) {
            \$hookParams = \$filtersParams;
            \$hookParams['filters']['id_hook'] = \$hook['id_hook'];
            \$hookParams['filters']['id_shop'] = \$this->shopContext->getContextListShopID();

            \$filters = new LinkBlockFilters(\$hookParams);

            \$gridFactory = \$this->buildGridFactoryByHook(\$hook);
            \$grids[] = \$gridFactory->getGrid(\$filters);
        }

        return \$grids;
    }

    /**
     * Each definition depends on the hook, therefore each factory also
     * depends on the hook.
     *
     * @param array \$hook
     *
     * @return GridFactory
     */
    private function buildGridFactoryByHook(array \$hook)
    {
        \$definitionFactory = new LinkBlockDefinitionFactory(\$hook, \$this->shopContext, \$this->hookDispatcher);
        \$definitionFactory->setTranslator(\$this->translator);

        return new GridFactory(
            \$definitionFactory,
            \$this->dataFactory,
            \$this->filterFormFactory,
            \$this->hookDispatcher
        );
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Core/Grid/LinkBlockGridFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\\Module\\LinkList\\Core\\Grid;

use PrestaShop\\Module\\LinkList\\Core\\Grid\\Definition\\Factory\\LinkBlockDefinitionFactory;
use PrestaShop\\Module\\LinkList\\Core\\Search\\Filters\\LinkBlockFilters;
use PrestaShop\\PrestaShop\\Adapter\\Shop\\Context;
use PrestaShop\\PrestaShop\\Core\\Grid\\Data\\Factory\\GridDataFactoryInterface;
use PrestaShop\\PrestaShop\\Core\\Grid\\Filter\\GridFilterFormFactoryInterface;
use PrestaShop\\PrestaShop\\Core\\Grid\\GridFactory;
use PrestaShop\\PrestaShop\\Core\\Grid\\GridInterface;
use PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcherInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Class LinkBlockGridFactory.
 */
final class LinkBlockGridFactory
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var HookDispatcherInterface
     */
    private \$hookDispatcher;

    /**
     * @var GridDataFactoryInterface
     */
    private \$dataFactory;

    /**
     * @var GridFilterFormFactoryInterface
     */
    private \$filterFormFactory;

    /**
     * @var Context
     */
    private \$shopContext;

    /**
     * HookGridFactory constructor.
     *
     * @param TranslatorInterface \$translator
     * @param HookDispatcherInterface \$hookDispatcher
     * @param GridDataFactoryInterface \$dataFactory
     * @param GridFilterFormFactoryInterface \$filterFormFactory
     * @param Context \$shopContext
     */
    public function __construct(
        TranslatorInterface \$translator,
        GridDataFactoryInterface \$dataFactory,
        HookDispatcherInterface \$hookDispatcher,
        GridFilterFormFactoryInterface \$filterFormFactory,
        Context \$shopContext
    ) {
        \$this->translator = \$translator;
        \$this->hookDispatcher = \$hookDispatcher;
        \$this->dataFactory = \$dataFactory;
        \$this->filterFormFactory = \$filterFormFactory;
        \$this->shopContext = \$shopContext;
    }

    /**
     * @param array \$hooks
     * @param array \$filtersParams
     *
     * @return GridInterface[]
     */
    public function getGrids(array \$hooks, array \$filtersParams)
    {
        \$grids = [];
        foreach (\$hooks as \$hook) {
            \$hookParams = \$filtersParams;
            \$hookParams['filters']['id_hook'] = \$hook['id_hook'];
            \$hookParams['filters']['id_shop'] = \$this->shopContext->getContextListShopID();

            \$filters = new LinkBlockFilters(\$hookParams);

            \$gridFactory = \$this->buildGridFactoryByHook(\$hook);
            \$grids[] = \$gridFactory->getGrid(\$filters);
        }

        return \$grids;
    }

    /**
     * Each definition depends on the hook, therefore each factory also
     * depends on the hook.
     *
     * @param array \$hook
     *
     * @return GridFactory
     */
    private function buildGridFactoryByHook(array \$hook)
    {
        \$definitionFactory = new LinkBlockDefinitionFactory(\$hook, \$this->shopContext, \$this->hookDispatcher);
        \$definitionFactory->setTranslator(\$this->translator);

        return new GridFactory(
            \$definitionFactory,
            \$this->dataFactory,
            \$this->filterFormFactory,
            \$this->hookDispatcher
        );
    }
}
", "@Modules/ps_linklist/src/Core/Grid/LinkBlockGridFactory.php", "/var/www/html/modules/ps_linklist/src/Core/Grid/LinkBlockGridFactory.php");
    }
}
