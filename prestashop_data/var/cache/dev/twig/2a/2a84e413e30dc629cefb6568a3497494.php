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

/* @Modules/ps_facetedsearch/src/HookDispatcher.php */
class __TwigTemplate_bea280c18330516b597096ecab1f36a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/HookDispatcher.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/HookDispatcher.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch;

use Ps_Facetedsearch;

/**
 * Class works with Hook\\AbstractHook instances in order to reduce ps_facetedsearch.php size.
 *
 * The dispatch method is called from the __call method in the module class.
 */
class HookDispatcher
{
    const CLASSES = [
        Hook\\Attribute::class,
        Hook\\AttributeGroup::class,
        Hook\\Category::class,
        Hook\\Configuration::class,
        Hook\\Design::class,
        Hook\\Feature::class,
        Hook\\FeatureValue::class,
        Hook\\Product::class,
        Hook\\ProductSearch::class,
        Hook\\SpecificPrice::class,
    ];

    /**
     * List of available hooks
     *
     * @var string[]
     */
    private \$availableHooks = [];

    /**
     * Hook classes
     *
     * @var Hook\\AbstractHook[]
     */
    private \$hooks = [];

    /**
     * Module
     *
     * @var Ps_Facetedsearch
     */
    private \$module;

    /**
     * Init hooks
     *
     * @param Ps_Facetedsearch \$module
     */
    public function __construct(Ps_Facetedsearch \$module)
    {
        \$this->module = \$module;

        foreach (self::CLASSES as \$hookClass) {
            \$hook = new \$hookClass(\$this->module);
            \$this->availableHooks = array_merge(\$this->availableHooks, \$hook->getAvailableHooks());
            \$this->hooks[] = \$hook;
        }
    }

    /**
     * Get available hooks
     *
     * @return string[]
     */
    public function getAvailableHooks()
    {
        return \$this->availableHooks;
    }

    /**
     * Find hook and dispatch it
     *
     * @param string \$hookName
     * @param array \$params
     *
     * @return mixed
     */
    public function dispatch(\$hookName, array \$params = [])
    {
        \$hookName = preg_replace('~^hook~', '', \$hookName);

        foreach (\$this->hooks as \$hook) {
            if (method_exists(\$hook, \$hookName)) {
                return call_user_func([\$hook, \$hookName], \$params);
            }
        }

        // No hook found, render it as a widget
        return \$this->module->renderWidget(\$hookName, \$params);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/HookDispatcher.php";
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch;

use Ps_Facetedsearch;

/**
 * Class works with Hook\\AbstractHook instances in order to reduce ps_facetedsearch.php size.
 *
 * The dispatch method is called from the __call method in the module class.
 */
class HookDispatcher
{
    const CLASSES = [
        Hook\\Attribute::class,
        Hook\\AttributeGroup::class,
        Hook\\Category::class,
        Hook\\Configuration::class,
        Hook\\Design::class,
        Hook\\Feature::class,
        Hook\\FeatureValue::class,
        Hook\\Product::class,
        Hook\\ProductSearch::class,
        Hook\\SpecificPrice::class,
    ];

    /**
     * List of available hooks
     *
     * @var string[]
     */
    private \$availableHooks = [];

    /**
     * Hook classes
     *
     * @var Hook\\AbstractHook[]
     */
    private \$hooks = [];

    /**
     * Module
     *
     * @var Ps_Facetedsearch
     */
    private \$module;

    /**
     * Init hooks
     *
     * @param Ps_Facetedsearch \$module
     */
    public function __construct(Ps_Facetedsearch \$module)
    {
        \$this->module = \$module;

        foreach (self::CLASSES as \$hookClass) {
            \$hook = new \$hookClass(\$this->module);
            \$this->availableHooks = array_merge(\$this->availableHooks, \$hook->getAvailableHooks());
            \$this->hooks[] = \$hook;
        }
    }

    /**
     * Get available hooks
     *
     * @return string[]
     */
    public function getAvailableHooks()
    {
        return \$this->availableHooks;
    }

    /**
     * Find hook and dispatch it
     *
     * @param string \$hookName
     * @param array \$params
     *
     * @return mixed
     */
    public function dispatch(\$hookName, array \$params = [])
    {
        \$hookName = preg_replace('~^hook~', '', \$hookName);

        foreach (\$this->hooks as \$hook) {
            if (method_exists(\$hook, \$hookName)) {
                return call_user_func([\$hook, \$hookName], \$params);
            }
        }

        // No hook found, render it as a widget
        return \$this->module->renderWidget(\$hookName, \$params);
    }
}
", "@Modules/ps_facetedsearch/src/HookDispatcher.php", "/var/www/html/modules/ps_facetedsearch/src/HookDispatcher.php");
    }
}
