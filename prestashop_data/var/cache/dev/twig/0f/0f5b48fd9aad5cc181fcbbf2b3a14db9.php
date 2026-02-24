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

/* @Modules/ps_facetedsearch/ps_facetedsearch-price-indexer.php */
class __TwigTemplate_29decdbcb7585697e11962acb47623d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/ps_facetedsearch-price-indexer.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/ps_facetedsearch-price-indexer.php"));

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

/*
 * This standalone endpoint is deprecated, it should not be used anymore and should be removed along with the
 * htaccess file that still allows it to work despite the security policy from the core forbidding this kind
 * of file to be executed.
 */
@trigger_error('This endpoint has been deprecated and will be removed in the next major version for this module, you should rely on Ps_FacetedSearchCronModuleFrontController instead.', E_USER_DEPRECATED);

require_once __DIR__ . '/../../config/config.inc.php';
require_once __DIR__ . '/ps_facetedsearch.php';

if (substr(Tools::hash('ps_facetedsearch/index'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('ps_facetedsearch')) {
    exit('Bad token');
}

Shop::setContext(Shop::CONTEXT_ALL);

\$module = new Ps_Facetedsearch();
if (Tools::getValue('full')) {
    echo \$module->fullPricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax'), true);
} else {
    echo \$module->pricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax'));
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/ps_facetedsearch-price-indexer.php";
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

/*
 * This standalone endpoint is deprecated, it should not be used anymore and should be removed along with the
 * htaccess file that still allows it to work despite the security policy from the core forbidding this kind
 * of file to be executed.
 */
@trigger_error('This endpoint has been deprecated and will be removed in the next major version for this module, you should rely on Ps_FacetedSearchCronModuleFrontController instead.', E_USER_DEPRECATED);

require_once __DIR__ . '/../../config/config.inc.php';
require_once __DIR__ . '/ps_facetedsearch.php';

if (substr(Tools::hash('ps_facetedsearch/index'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('ps_facetedsearch')) {
    exit('Bad token');
}

Shop::setContext(Shop::CONTEXT_ALL);

\$module = new Ps_Facetedsearch();
if (Tools::getValue('full')) {
    echo \$module->fullPricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax'), true);
} else {
    echo \$module->pricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax'));
}
", "@Modules/ps_facetedsearch/ps_facetedsearch-price-indexer.php", "/var/www/html/modules/ps_facetedsearch/ps_facetedsearch-price-indexer.php");
    }
}
