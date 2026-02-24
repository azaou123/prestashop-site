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

/* @Modules/psgdpr/controllers/front/FrontAjaxGdpr.php */
class __TwigTemplate_e4400feb2683d6a4be532777dfe94bc7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/controllers/front/FrontAjaxGdpr.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/controllers/front/FrontAjaxGdpr.php"));

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
class psgdprFrontAjaxGdprModuleFrontController extends FrontController
{
    /**
     * Store if the client consented or not to GDPR on a specific module for statistic purpose only
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function display()
    {
        if (Tools::getValue('action') !== 'AddLog') {
            \$this->ajaxDie();
        }

        \$id_customer = (int) Tools::getValue('id_customer');
        \$customer_token = Tools::getValue('customer_token');

        \$id_module = (int) Tools::getValue('id_module');

        \$id_guest = (int) Tools::getValue('id_guest');
        \$guest_token = Tools::getValue('guest_token');

        \$customer = Context::getContext()->customer;

        if (\$customer->isLogged() === true) {
            \$token = sha1(\$customer->secure_key);
            if (!isset(\$customer_token) || \$customer_token == \$token) {
                GDPRLog::addLog(\$id_customer, 'consent', \$id_module);
            }
        } else {
            \$token = sha1('psgdpr' . Context::getContext()->cart->id_guest . \$_SERVER['REMOTE_ADDR'] . date('Y-m-d'));
            if (!isset(\$guest_token) || \$guest_token == \$token) {
                GDPRLog::addLog(\$id_customer, 'consent', \$id_module, \$id_guest);
            }
        }

        \$this->ajaxDie();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/controllers/front/FrontAjaxGdpr.php";
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
class psgdprFrontAjaxGdprModuleFrontController extends FrontController
{
    /**
     * Store if the client consented or not to GDPR on a specific module for statistic purpose only
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException
     */
    public function display()
    {
        if (Tools::getValue('action') !== 'AddLog') {
            \$this->ajaxDie();
        }

        \$id_customer = (int) Tools::getValue('id_customer');
        \$customer_token = Tools::getValue('customer_token');

        \$id_module = (int) Tools::getValue('id_module');

        \$id_guest = (int) Tools::getValue('id_guest');
        \$guest_token = Tools::getValue('guest_token');

        \$customer = Context::getContext()->customer;

        if (\$customer->isLogged() === true) {
            \$token = sha1(\$customer->secure_key);
            if (!isset(\$customer_token) || \$customer_token == \$token) {
                GDPRLog::addLog(\$id_customer, 'consent', \$id_module);
            }
        } else {
            \$token = sha1('psgdpr' . Context::getContext()->cart->id_guest . \$_SERVER['REMOTE_ADDR'] . date('Y-m-d'));
            if (!isset(\$guest_token) || \$guest_token == \$token) {
                GDPRLog::addLog(\$id_customer, 'consent', \$id_module, \$id_guest);
            }
        }

        \$this->ajaxDie();
    }
}
", "@Modules/psgdpr/controllers/front/FrontAjaxGdpr.php", "/var/www/html/modules/psgdpr/controllers/front/FrontAjaxGdpr.php");
    }
}
