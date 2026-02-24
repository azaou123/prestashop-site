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

/* @Modules/ps_linklist/upgrade/upgrade-5.0.0.php */
class __TwigTemplate_7954c6ad16292df94e5b9a5805298c11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/upgrade/upgrade-5.0.0.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/upgrade/upgrade-5.0.0.php"));

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
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_5_0_0()
{
    \$result = true;
    \$result &= Db::getInstance()->execute('ALTER TABLE `' . _DB_PREFIX_ . 'link_block_shop`  ADD COLUMN `position` int(10) unsigned NOT NULL DEFAULT 0');
    // Delete blockcms data that are not used in previous version of this module
    \$result &= Db::getInstance()->execute('DELETE FROM `' . _DB_PREFIX_ . 'link_block_shop`');

    foreach (Shop::getShops(true, null, true) as \$shopId) {
        \$result &= Db::getInstance()->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block_shop` (`id_link_block`, `position`, `id_shop`)
            SELECT `id_link_block`, `position`, ' . \$shopId . ' FROM `' . _DB_PREFIX_ . 'link_block`
            '
        );
    }

    return (bool) \$result;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/upgrade/upgrade-5.0.0.php";
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
if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_5_0_0()
{
    \$result = true;
    \$result &= Db::getInstance()->execute('ALTER TABLE `' . _DB_PREFIX_ . 'link_block_shop`  ADD COLUMN `position` int(10) unsigned NOT NULL DEFAULT 0');
    // Delete blockcms data that are not used in previous version of this module
    \$result &= Db::getInstance()->execute('DELETE FROM `' . _DB_PREFIX_ . 'link_block_shop`');

    foreach (Shop::getShops(true, null, true) as \$shopId) {
        \$result &= Db::getInstance()->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block_shop` (`id_link_block`, `position`, `id_shop`)
            SELECT `id_link_block`, `position`, ' . \$shopId . ' FROM `' . _DB_PREFIX_ . 'link_block`
            '
        );
    }

    return (bool) \$result;
}
", "@Modules/ps_linklist/upgrade/upgrade-5.0.0.php", "/var/www/html/modules/ps_linklist/upgrade/upgrade-5.0.0.php");
    }
}
