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

/* @Modules/psgdpr/sql/install.php */
class __TwigTemplate_5e381586be3e161a16129da9e91519f1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/sql/install.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/sql/install.php"));

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
\$sql = [];

\$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psgdpr_consent` (
        `id_gdpr_consent` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `id_module` int(10) unsigned NOT NULL,
        `active` int(10) NOT NULL,
        `error` int(10),
        `error_message` text,
        `date_add` datetime NOT NULL,
        `date_upd` datetime NOT NULL,
        PRIMARY KEY (`id_gdpr_consent`, `id_module`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

\$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psgdpr_consent_lang` (
        `id_gdpr_consent` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `id_lang` int(10) unsigned NOT NULL,
        `message` text,
        `id_shop` int(10) unsigned NOT NULL,
        PRIMARY KEY (`id_gdpr_consent`, `id_lang`, `id_shop`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

\$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psgdpr_log` (
        `id_gdpr_log` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `id_customer` int(10) unsigned NULL,
        `id_guest` int(10) unsigned NULL,
        `client_name` varchar(250),
        `id_module` int(10) unsigned NOT NULL,
        `request_type` int(10) NOT NULL,
        `date_add` datetime NOT NULL,
        `date_upd` datetime NOT NULL,
        PRIMARY KEY (`id_gdpr_log`),
        INDEX (`id_customer`),
        INDEX `idx_id_customer` ( `id_customer`, `id_guest`, `client_name`, `id_module`, `date_add`, `date_upd`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

foreach (\$sql as \$query) {
    if (Db::getInstance()->execute(\$query) == false) {
        return false;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/sql/install.php";
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
\$sql = [];

\$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psgdpr_consent` (
        `id_gdpr_consent` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `id_module` int(10) unsigned NOT NULL,
        `active` int(10) NOT NULL,
        `error` int(10),
        `error_message` text,
        `date_add` datetime NOT NULL,
        `date_upd` datetime NOT NULL,
        PRIMARY KEY (`id_gdpr_consent`, `id_module`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

\$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psgdpr_consent_lang` (
        `id_gdpr_consent` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `id_lang` int(10) unsigned NOT NULL,
        `message` text,
        `id_shop` int(10) unsigned NOT NULL,
        PRIMARY KEY (`id_gdpr_consent`, `id_lang`, `id_shop`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

\$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psgdpr_log` (
        `id_gdpr_log` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `id_customer` int(10) unsigned NULL,
        `id_guest` int(10) unsigned NULL,
        `client_name` varchar(250),
        `id_module` int(10) unsigned NOT NULL,
        `request_type` int(10) NOT NULL,
        `date_add` datetime NOT NULL,
        `date_upd` datetime NOT NULL,
        PRIMARY KEY (`id_gdpr_log`),
        INDEX (`id_customer`),
        INDEX `idx_id_customer` ( `id_customer`, `id_guest`, `client_name`, `id_module`, `date_add`, `date_upd`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

foreach (\$sql as \$query) {
    if (Db::getInstance()->execute(\$query) == false) {
        return false;
    }
}
", "@Modules/psgdpr/sql/install.php", "/var/www/html/modules/psgdpr/sql/install.php");
    }
}
