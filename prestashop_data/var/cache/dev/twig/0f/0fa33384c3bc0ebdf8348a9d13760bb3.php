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

/* @Modules/blockreassurance/upgrade/upgrade-4.0.0.php */
class __TwigTemplate_e03dbe1abb3a9b45ed5760f494d76939 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/upgrade/upgrade-4.0.0.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/upgrade/upgrade-4.0.0.php"));

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

/**
 * @param blockreassurance \$module
 *
 * @return bool|string
 *
 * @throws PrestaShopDatabaseException
 * @throws PrestaShopException
 */
function upgrade_module_4_0_0(\$module)
{
    \$tab = new Tab();
    \$tab->active = true;
    \$tab->class_name = 'AdminBlockListing';
    foreach (Language::getLanguages(true) as \$lang) {
        \$tab->name[\$lang['id_lang']] = 'blockreassurance';
    }

    \$tab->id_parent = -1;
    \$tab->module = 'blockreassurance';
    \$tab->add();

    /*
     ** Select the reassurance_lang table values
     ** ps_reassurance_lang => id_reassurance, id_lang, text
     */
    \$sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'reassurance_lang`';
    \$reassurance_langs = Db::getInstance()->ExecuteS(\$sql);

    /*
     ** Select the reassurance table values
     ** ps_reassurance => id_reassurance, id_shop, filename
     */
    \$sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'reassurance`';
    \$reassurances = Db::getInstance()->ExecuteS(\$sql);

    \$sql = [];

    \$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psreassurance` (
            `id_psreassurance` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `icon` varchar(255) NULL,
            `custom_icon` varchar(255) NULL,
            `status` int(10) unsigned NOT NULL,
            `position` int(10) unsigned NOT NULL,
            `id_shop` int(10) unsigned NOT NULL,
            `type_link` int(10) unsigned NULL,
            `id_cms` int(10) unsigned NULL,
            `date_add` datetime NOT NULL,
            `date_upd` datetime NULL,
            PRIMARY KEY (`id_psreassurance`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

    \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psreassurance_lang` (
        `id_psreassurance` int(10) unsigned NOT NULL,
        `id_lang` int(10) unsigned NOT NULL,
        `id_shop` int(10) unsigned NOT NULL,
        `title` varchar(255) NOT NULL,
        `description` varchar(255) NOT NULL,
        `link` varchar(255) NOT NULL,
        PRIMARY KEY (`id_psreassurance`,`id_shop`,`id_lang`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

    /*
     ** First we make a verification that the new tables are empty
     */
    \$sql[] = 'TRUNCATE TABLE `' . _DB_PREFIX_ . 'psreassurance`';
    \$sql[] = 'TRUNCATE TABLE `' . _DB_PREFIX_ . 'psreassurance_lang`';

    /* This path : /modules/blockreassurance/img/\".\$reassurance['file_name']
     ** is used with the real path in the module
     **
     ** We do the INSERT INTO to get the old module values
     */
    if (!empty(\$reassurances)) {
        foreach (\$reassurances as \$reassurance) {
            \$sql[] = 'INSERT INTO ' . _DB_PREFIX_ . 'psreassurance (id_psreassurance, icon, custom_icon, status, position, id_shop, type_link, id_cms, date_add)
                VALUES (' . \$reassurance['id_reassurance'] . \", '\" . \$module->old_path_img . \$reassurance['file_name'] . \"', null, 1, \" . \$reassurance['id_reassurance'] . ', ' . \$reassurance['id_shop'] . ', null, null, now())';
        }
    }

    if (!empty(\$reassurance_langs)) {
        foreach (\$reassurance_langs as \$reassurance_lang) {
            \$sql[] = 'INSERT INTO ' . _DB_PREFIX_ . 'psreassurance_lang (id_psreassurance, id_lang, id_shop, title, description, link)
            VALUES (' . \$reassurance_lang['id_reassurance'] . ', ' . \$reassurance_lang['id_lang'] . \", 1, '\" . \$reassurance_lang['text'] . \"', '', '')\";
        }
    }

    /*
     ** Here we execute the SQL
     */
    foreach (\$sql as \$query) {
        if (Db::getInstance()->execute(\$query) == false) {
            return Db::getInstance()->getMsgError();
        }
    }

    /*
     ** Verification if the hooks are already registered
     */
    \$result = true;
    foreach ([
                 'displayAfterBodyOpeningTag',
                 'displayNavFullWidth',
                 'displayFooterAfter',
                 'displayFooterBefore',
                 'displayReassurance',
                 'actionFrontControllerSetMedia',
             ] as \$hookName) {
        if (!\$module->isRegisteredInHook(\$hookName)) {
            \$result &= \$module->registerHook(\$hookName);
        }
    }

    /*
    ** We set the new configuration values
    */
    Configuration::updateValue('PSR_HOOK_HEADER', '0');
    Configuration::updateValue('PSR_HOOK_FOOTER', '0');
    Configuration::updateValue('PSR_HOOK_PRODUCT', '1');
    Configuration::updateValue('PSR_HOOK_CHECKOUT', '1');
    Configuration::updateValue('PSR_ICON_COLOR', '#F19D76');
    Configuration::updateValue('PSR_TEXT_COLOR', '#000000');

    unset(\$module);

    return \$result;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/upgrade/upgrade-4.0.0.php";
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

/**
 * @param blockreassurance \$module
 *
 * @return bool|string
 *
 * @throws PrestaShopDatabaseException
 * @throws PrestaShopException
 */
function upgrade_module_4_0_0(\$module)
{
    \$tab = new Tab();
    \$tab->active = true;
    \$tab->class_name = 'AdminBlockListing';
    foreach (Language::getLanguages(true) as \$lang) {
        \$tab->name[\$lang['id_lang']] = 'blockreassurance';
    }

    \$tab->id_parent = -1;
    \$tab->module = 'blockreassurance';
    \$tab->add();

    /*
     ** Select the reassurance_lang table values
     ** ps_reassurance_lang => id_reassurance, id_lang, text
     */
    \$sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'reassurance_lang`';
    \$reassurance_langs = Db::getInstance()->ExecuteS(\$sql);

    /*
     ** Select the reassurance table values
     ** ps_reassurance => id_reassurance, id_shop, filename
     */
    \$sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'reassurance`';
    \$reassurances = Db::getInstance()->ExecuteS(\$sql);

    \$sql = [];

    \$sql[] = ' CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psreassurance` (
            `id_psreassurance` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `icon` varchar(255) NULL,
            `custom_icon` varchar(255) NULL,
            `status` int(10) unsigned NOT NULL,
            `position` int(10) unsigned NOT NULL,
            `id_shop` int(10) unsigned NOT NULL,
            `type_link` int(10) unsigned NULL,
            `id_cms` int(10) unsigned NULL,
            `date_add` datetime NOT NULL,
            `date_upd` datetime NULL,
            PRIMARY KEY (`id_psreassurance`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

    \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'psreassurance_lang` (
        `id_psreassurance` int(10) unsigned NOT NULL,
        `id_lang` int(10) unsigned NOT NULL,
        `id_shop` int(10) unsigned NOT NULL,
        `title` varchar(255) NOT NULL,
        `description` varchar(255) NOT NULL,
        `link` varchar(255) NOT NULL,
        PRIMARY KEY (`id_psreassurance`,`id_shop`,`id_lang`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;';

    /*
     ** First we make a verification that the new tables are empty
     */
    \$sql[] = 'TRUNCATE TABLE `' . _DB_PREFIX_ . 'psreassurance`';
    \$sql[] = 'TRUNCATE TABLE `' . _DB_PREFIX_ . 'psreassurance_lang`';

    /* This path : /modules/blockreassurance/img/\".\$reassurance['file_name']
     ** is used with the real path in the module
     **
     ** We do the INSERT INTO to get the old module values
     */
    if (!empty(\$reassurances)) {
        foreach (\$reassurances as \$reassurance) {
            \$sql[] = 'INSERT INTO ' . _DB_PREFIX_ . 'psreassurance (id_psreassurance, icon, custom_icon, status, position, id_shop, type_link, id_cms, date_add)
                VALUES (' . \$reassurance['id_reassurance'] . \", '\" . \$module->old_path_img . \$reassurance['file_name'] . \"', null, 1, \" . \$reassurance['id_reassurance'] . ', ' . \$reassurance['id_shop'] . ', null, null, now())';
        }
    }

    if (!empty(\$reassurance_langs)) {
        foreach (\$reassurance_langs as \$reassurance_lang) {
            \$sql[] = 'INSERT INTO ' . _DB_PREFIX_ . 'psreassurance_lang (id_psreassurance, id_lang, id_shop, title, description, link)
            VALUES (' . \$reassurance_lang['id_reassurance'] . ', ' . \$reassurance_lang['id_lang'] . \", 1, '\" . \$reassurance_lang['text'] . \"', '', '')\";
        }
    }

    /*
     ** Here we execute the SQL
     */
    foreach (\$sql as \$query) {
        if (Db::getInstance()->execute(\$query) == false) {
            return Db::getInstance()->getMsgError();
        }
    }

    /*
     ** Verification if the hooks are already registered
     */
    \$result = true;
    foreach ([
                 'displayAfterBodyOpeningTag',
                 'displayNavFullWidth',
                 'displayFooterAfter',
                 'displayFooterBefore',
                 'displayReassurance',
                 'actionFrontControllerSetMedia',
             ] as \$hookName) {
        if (!\$module->isRegisteredInHook(\$hookName)) {
            \$result &= \$module->registerHook(\$hookName);
        }
    }

    /*
    ** We set the new configuration values
    */
    Configuration::updateValue('PSR_HOOK_HEADER', '0');
    Configuration::updateValue('PSR_HOOK_FOOTER', '0');
    Configuration::updateValue('PSR_HOOK_PRODUCT', '1');
    Configuration::updateValue('PSR_HOOK_CHECKOUT', '1');
    Configuration::updateValue('PSR_ICON_COLOR', '#F19D76');
    Configuration::updateValue('PSR_TEXT_COLOR', '#000000');

    unset(\$module);

    return \$result;
}
", "@Modules/blockreassurance/upgrade/upgrade-4.0.0.php", "/var/www/html/modules/blockreassurance/upgrade/upgrade-4.0.0.php");
    }
}
