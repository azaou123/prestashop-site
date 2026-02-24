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

/* @Modules/ps_googleanalytics/classes/Hook/HookActionCarrierProcess.php */
class __TwigTemplate_032ee394c27c35a23cdf3e7eb0483f7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookActionCarrierProcess.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Hook/HookActionCarrierProcess.php"));

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
use PrestaShop\\Module\\Ps_Googleanalytics\\Repository\\CarrierRepository;
use Ps_Googleanalytics;

class HookActionCarrierProcess implements HookInterface
{
    private \$module;
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
        if (isset(\$this->params['cart']->id_carrier)) {
            \$carrierRepository = new CarrierRepository();

            // Load carrier name
            \$carrierName = (string) \$carrierRepository->findByCarrierId((int) \$this->params['cart']->id_carrier);

            // Check if we actually have some name
            if (empty(\$carrierName)) {
                return;
            }

            // Prepare and render the event
            \$eventData = [
                'currency' => \$this->context->currency->iso_code,
                'value' => (float) \$this->context->cart->getSummaryDetails()['total_price'],
                'shipping_tier' => \$carrierName,
            ];
            \$jsCode = \$this->module->getTools()->renderEvent(
                'add_shipping_info',
                \$eventData
            );

            // Store it into our repository so we can flush it on next page load
            \$this->module->getDataHandler()->persistData(\$jsCode);
        }
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
        return "@Modules/ps_googleanalytics/classes/Hook/HookActionCarrierProcess.php";
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
use PrestaShop\\Module\\Ps_Googleanalytics\\Repository\\CarrierRepository;
use Ps_Googleanalytics;

class HookActionCarrierProcess implements HookInterface
{
    private \$module;
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
        if (isset(\$this->params['cart']->id_carrier)) {
            \$carrierRepository = new CarrierRepository();

            // Load carrier name
            \$carrierName = (string) \$carrierRepository->findByCarrierId((int) \$this->params['cart']->id_carrier);

            // Check if we actually have some name
            if (empty(\$carrierName)) {
                return;
            }

            // Prepare and render the event
            \$eventData = [
                'currency' => \$this->context->currency->iso_code,
                'value' => (float) \$this->context->cart->getSummaryDetails()['total_price'],
                'shipping_tier' => \$carrierName,
            ];
            \$jsCode = \$this->module->getTools()->renderEvent(
                'add_shipping_info',
                \$eventData
            );

            // Store it into our repository so we can flush it on next page load
            \$this->module->getDataHandler()->persistData(\$jsCode);
        }
    }

    /**
     * @param array \$params
     */
    public function setParams(\$params)
    {
        \$this->params = \$params;
    }
}
", "@Modules/ps_googleanalytics/classes/Hook/HookActionCarrierProcess.php", "/var/www/html/modules/ps_googleanalytics/classes/Hook/HookActionCarrierProcess.php");
    }
}
