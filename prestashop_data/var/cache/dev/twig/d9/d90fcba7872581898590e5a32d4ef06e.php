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

/* @Modules/ps_googleanalytics/classes/Hook/HookActionCartUpdateQuantityBefore.php */
class __TwigTemplate_c80ee2007d1cfc8e4125240e99d2d30d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookActionCartUpdateQuantityBefore.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookActionCartUpdateQuantityBefore.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
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
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Hooks;

use Context;
use PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper\\ProductWrapper;
use Product;
use Ps_Googleanalytics;

class HookActionCartUpdateQuantityBefore implements HookInterface
{
    private \$module;

    /**
     * @var Context
     */
    private \$context;
    private \$params;

    public function __construct(Ps_Googleanalytics \$module, Context \$context)
    {
        \$this->module = \$module;
        \$this->context = \$context;
    }

    /**
     * run
     *
     * @return void
     */
    public function run()
    {
        /*
         * The hook passes a legacy Product object to add, but no attribute information.
         * But thankfully, we can use id_product_attribute for this.
         *
         * Other info is fairly standard:
         *
         * Add to cart from product page + up from cart page
         * \$this->params['operator'] == up
         * \$this->params['quantity'] to determine quantity
         *
         * Down from cart page
         * \$this->params['operator'] == down
         * \$this->params['quantity'] to determine quantity
         */

        // Format product and standardize ID
        \$product = (array) \$this->params['product'];
        \$product['id_product'] = \$product['id'];
        // Add information about attribute
        if (!empty(\$this->params['id_product_attribute'])) {
            \$product['id_product_attribute'] = (int) \$this->params['id_product_attribute'];
        }

        // Get some basic information
        \$product = Product::getProductProperties(\$this->context->language->id, \$product);

        // Add information about quantity difference
        \$product['quantity'] = (int) \$this->params['quantity'];

        // Prepare it and format it for our purpose
        \$productWrapper = new ProductWrapper(\$this->context);
        \$item = \$productWrapper->prepareItemFromProduct(\$product, true);

        // Prepare and render event
        \$eventData = [
            'currency' => \$this->context->currency->iso_code,
            'value' => \$item['price'] * \$item['quantity'],
            'items' => [\$item],
        ];
        \$jsCode = \$this->module->getTools()->renderEvent(
            \$this->params['operator'] == 'up' ? 'add_to_cart' : 'remove_from_cart',
            \$eventData
        );

        // Store this event
        \$this->module->getDataHandler()->persistData(\$jsCode);
    }

    /**
     * @param array \$params
     */
    public function setParams(\$params)
    {
        \$this->params = \$params;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Hook/HookActionCartUpdateQuantityBefore.php";
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
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Hooks;

use Context;
use PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper\\ProductWrapper;
use Product;
use Ps_Googleanalytics;

class HookActionCartUpdateQuantityBefore implements HookInterface
{
    private \$module;

    /**
     * @var Context
     */
    private \$context;
    private \$params;

    public function __construct(Ps_Googleanalytics \$module, Context \$context)
    {
        \$this->module = \$module;
        \$this->context = \$context;
    }

    /**
     * run
     *
     * @return void
     */
    public function run()
    {
        /*
         * The hook passes a legacy Product object to add, but no attribute information.
         * But thankfully, we can use id_product_attribute for this.
         *
         * Other info is fairly standard:
         *
         * Add to cart from product page + up from cart page
         * \$this->params['operator'] == up
         * \$this->params['quantity'] to determine quantity
         *
         * Down from cart page
         * \$this->params['operator'] == down
         * \$this->params['quantity'] to determine quantity
         */

        // Format product and standardize ID
        \$product = (array) \$this->params['product'];
        \$product['id_product'] = \$product['id'];
        // Add information about attribute
        if (!empty(\$this->params['id_product_attribute'])) {
            \$product['id_product_attribute'] = (int) \$this->params['id_product_attribute'];
        }

        // Get some basic information
        \$product = Product::getProductProperties(\$this->context->language->id, \$product);

        // Add information about quantity difference
        \$product['quantity'] = (int) \$this->params['quantity'];

        // Prepare it and format it for our purpose
        \$productWrapper = new ProductWrapper(\$this->context);
        \$item = \$productWrapper->prepareItemFromProduct(\$product, true);

        // Prepare and render event
        \$eventData = [
            'currency' => \$this->context->currency->iso_code,
            'value' => \$item['price'] * \$item['quantity'],
            'items' => [\$item],
        ];
        \$jsCode = \$this->module->getTools()->renderEvent(
            \$this->params['operator'] == 'up' ? 'add_to_cart' : 'remove_from_cart',
            \$eventData
        );

        // Store this event
        \$this->module->getDataHandler()->persistData(\$jsCode);
    }

    /**
     * @param array \$params
     */
    public function setParams(\$params)
    {
        \$this->params = \$params;
    }
}
", "@Modules/ps_googleanalytics/classes/Hook/HookActionCartUpdateQuantityBefore.php", "/var/www/html/modules/ps_googleanalytics/classes/Hook/HookActionCartUpdateQuantityBefore.php");
    }
}
