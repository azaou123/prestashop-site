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

/* @Modules/gsitemap/gsitemap-cron.php */
class __TwigTemplate_45c892233f8c6edea881cb5ab5ca2e82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/gsitemap/gsitemap-cron.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/gsitemap/gsitemap-cron.php"));

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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

/*
 * This file can be called using a cron to generate Google sitemap files automatically.
 * This file should no longer be used and will be removed in 5.0.0 version of this module.
 * Please update your cron tasks to use the new URL available in module settings.
 */
trigger_error('This file should no longer be used and will be removed in 5.0.0 version of this module. Please update your cron tasks to use the new URL available in module settings.', E_USER_NOTICE);

include dirname(__FILE__) . '/../../config/config.inc.php';

/* Check security token */
if (!Tools::isPHPCLI()) {
    include dirname(__FILE__) . '/../../init.php';

    if (Tools::substr(Tools::hash('gsitemap/cron'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('gsitemap')) {
        exit('Bad token');
    }
}

/** @var Gsitemap \$gsitemap */
\$gsitemap = Module::getInstanceByName('gsitemap');

/* Check if the module is enabled */
if (\$gsitemap->active) {
    /* Check if the requested shop exists */
    \$shops = Db::getInstance()->ExecuteS('SELECT id_shop FROM `' . _DB_PREFIX_ . 'shop`');
    \$list_id_shop = [];
    foreach (\$shops as \$shop) {
        \$list_id_shop[] = (int) \$shop['id_shop'];
    }

    \$id_shop = (Tools::getIsset('id_shop') && in_array(Tools::getValue('id_shop'), \$list_id_shop)) ? (int) Tools::getValue('id_shop') : (int) Configuration::get('PS_SHOP_DEFAULT');
    \$gsitemap->cron = true;

    /* for the main run initiat the sitemap's files name stored in the database */
    if (!Tools::getIsset('continue')) {
        \$gsitemap->emptySitemap((int) \$id_shop);
    }

    /* Create the Google sitemap's files */
    \$gsitemap->createSitemap((int) \$id_shop);
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/gsitemap/gsitemap-cron.php";
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

/*
 * This file can be called using a cron to generate Google sitemap files automatically.
 * This file should no longer be used and will be removed in 5.0.0 version of this module.
 * Please update your cron tasks to use the new URL available in module settings.
 */
trigger_error('This file should no longer be used and will be removed in 5.0.0 version of this module. Please update your cron tasks to use the new URL available in module settings.', E_USER_NOTICE);

include dirname(__FILE__) . '/../../config/config.inc.php';

/* Check security token */
if (!Tools::isPHPCLI()) {
    include dirname(__FILE__) . '/../../init.php';

    if (Tools::substr(Tools::hash('gsitemap/cron'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('gsitemap')) {
        exit('Bad token');
    }
}

/** @var Gsitemap \$gsitemap */
\$gsitemap = Module::getInstanceByName('gsitemap');

/* Check if the module is enabled */
if (\$gsitemap->active) {
    /* Check if the requested shop exists */
    \$shops = Db::getInstance()->ExecuteS('SELECT id_shop FROM `' . _DB_PREFIX_ . 'shop`');
    \$list_id_shop = [];
    foreach (\$shops as \$shop) {
        \$list_id_shop[] = (int) \$shop['id_shop'];
    }

    \$id_shop = (Tools::getIsset('id_shop') && in_array(Tools::getValue('id_shop'), \$list_id_shop)) ? (int) Tools::getValue('id_shop') : (int) Configuration::get('PS_SHOP_DEFAULT');
    \$gsitemap->cron = true;

    /* for the main run initiat the sitemap's files name stored in the database */
    if (!Tools::getIsset('continue')) {
        \$gsitemap->emptySitemap((int) \$id_shop);
    }

    /* Create the Google sitemap's files */
    \$gsitemap->createSitemap((int) \$id_shop);
}
", "@Modules/gsitemap/gsitemap-cron.php", "/var/www/html/modules/gsitemap/gsitemap-cron.php");
    }
}
