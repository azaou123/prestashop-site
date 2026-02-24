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

/* @Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php */
class __TwigTemplate_184e5f2521d1d658f34a9e83799609a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php"));

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

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper;

use Configuration;
use Context;
use Currency;
use Shop;

class OrderWrapper
{
    private \$context;

    public function __construct(Context \$context)
    {
        \$this->context = \$context;
    }

    /**
     * Return a detailed transaction for Google Analytics
     */
    public function wrapOrder(\$order)
    {
        // Prepare currency information
        \$currency = new Currency((int) \$order->id_currency);

        return [
            'transaction_id' => (int) \$order->id,
            'affiliation' => Shop::isFeatureActive() ? \$this->context->shop->name : Configuration::get('PS_SHOP_NAME'),
            'value' => (float) \$order->total_paid,
            'shipping' => (float) \$order->total_shipping,
            'tax' => (float) \$order->total_paid_tax_incl - \$order->total_paid_tax_excl,
            'customer' => (int) \$order->id_customer,
            'currency' => \$currency->iso_code,
            'payment_type' => (string) \$order->payment,
        ];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php";
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

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Wrapper;

use Configuration;
use Context;
use Currency;
use Shop;

class OrderWrapper
{
    private \$context;

    public function __construct(Context \$context)
    {
        \$this->context = \$context;
    }

    /**
     * Return a detailed transaction for Google Analytics
     */
    public function wrapOrder(\$order)
    {
        // Prepare currency information
        \$currency = new Currency((int) \$order->id_currency);

        return [
            'transaction_id' => (int) \$order->id,
            'affiliation' => Shop::isFeatureActive() ? \$this->context->shop->name : Configuration::get('PS_SHOP_NAME'),
            'value' => (float) \$order->total_paid,
            'shipping' => (float) \$order->total_shipping,
            'tax' => (float) \$order->total_paid_tax_incl - \$order->total_paid_tax_excl,
            'customer' => (int) \$order->id_customer,
            'currency' => \$currency->iso_code,
            'payment_type' => (string) \$order->payment,
        ];
    }
}
", "@Modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php", "/var/www/html/modules/ps_googleanalytics/classes/Wrapper/OrderWrapper.php");
    }
}
