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

/* @Modules/blockwishlist/src/Database/Install.php */
class __TwigTemplate_29e96c8de7f46a5e98a626d58a97de99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/src/Database/Install.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/src/Database/Install.php"));

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

namespace PrestaShop\\Module\\BlockWishList\\Database;

use BlockWishList;
use Configuration;
use Db;
use Language;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Tab;

class Install
{
    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    public function run()
    {
        return \$this->installTables()
            && \$this->installConfiguration()
            && \$this->installTabs();
    }

    public function installTables()
    {
        \$sql = [];

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'wishlist` (
          `id_wishlist` int(10) unsigned NOT NULL auto_increment,
          `id_customer` int(10) unsigned NOT NULL,
          `id_shop` int(10) unsigned default 1,
          `id_shop_group` int(10) unsigned default 1,
          `token` varchar(64) NOT NULL,
          `name` varchar(64) NOT NULL,
          `counter` int(10) unsigned NULL,
          `date_add` datetime NOT NULL,
          `date_upd` datetime NOT NULL,
          `default` int(10) unsigned default 0,
          PRIMARY KEY  (`id_wishlist`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'wishlist_product` (
          `id_wishlist_product` int(10) NOT NULL auto_increment,
          `id_wishlist` int(10) unsigned NOT NULL,
          `id_product` int(10) unsigned NOT NULL,
          `id_product_attribute` int(10) unsigned NOT NULL,
          `quantity` int(10) unsigned NOT NULL,
          `priority` int(10) unsigned NOT NULL,
          PRIMARY KEY  (`id_wishlist_product`)
        ) ENGINE=' . _MYSQL_ENGINE_ . '  DEFAULT CHARSET=utf8;';

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'wishlist_product_cart` (
          `id_wishlist_product` int(10) unsigned NOT NULL,
          `id_cart` int(10) unsigned NOT NULL,
          `quantity` int(10) unsigned NOT NULL,
          `date_add` datetime NOT NULL
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'blockwishlist_statistics` (
            `id_statistics` int(10) unsigned NOT NULL auto_increment,
            `id_cart` int(10) unsigned default NULL,
            `id_product` int(10) unsigned NOT NULL,
            `id_product_attribute` int(10) unsigned NOT NULL,
            `date_add` datetime NOT NULL,
            `id_shop` int(10) unsigned default 1,
            PRIMARY KEY  (`id_statistics`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        \$result = true;

        foreach (\$sql as \$query) {
            \$result = \$result && Db::getInstance()->execute(\$query);
        }

        return \$result;
    }

    public function installConfiguration()
    {
        \$pageName = \$defaultName = \$createButtonLabel = [];

        foreach (Language::getLanguages() as \$lang) {
            \$pageName[\$lang['id_lang']] = \$this->translator->trans('My wishlists', [], 'Modules.Blockwishlist.Admin', \$lang['locale']);
            \$defaultName[\$lang['id_lang']] = \$this->translator->trans('My wishlist', [], 'Modules.Blockwishlist.Admin', \$lang['locale']);
            \$createButtonLabel[\$lang['id_lang']] = \$this->translator->trans('Create new list', [], 'Modules.Blockwishlist.Admin', \$lang['locale']);
        }

        return Configuration::updateValue('blockwishlist_WishlistPageName', \$pageName)
            && Configuration::updateValue('blockwishlist_WishlistDefaultTitle', \$defaultName)
            && Configuration::updateValue('blockwishlist_CreateButtonLabel', \$createButtonLabel);
    }

    public function installTabs()
    {
        \$installTabCompleted = true;

        foreach (BlockWishList::MODULE_ADMIN_CONTROLLERS as \$controller) {
            if (Tab::getIdFromClassName(\$controller['class_name'])) {
                continue;
            }

            \$tab = new Tab();
            \$tab->class_name = \$controller['class_name'];
            \$tab->active = \$controller['visible'];
            foreach (Language::getLanguages() as \$lang) {
                \$tab->name[\$lang['id_lang']] = \$this->translator->trans(\$controller['name'], [], 'Modules.BlockWishList.Admin', \$lang['locale']);
            }
            \$tab->id_parent = Tab::getIdFromClassName(\$controller['parent_class_name']);
            \$tab->module = 'blockwishlist';
            \$installTabCompleted = \$installTabCompleted && \$tab->add();
        }

        return \$installTabCompleted;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/src/Database/Install.php";
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

namespace PrestaShop\\Module\\BlockWishList\\Database;

use BlockWishList;
use Configuration;
use Db;
use Language;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Tab;

class Install
{
    /**
     * @var TranslatorInterface
     */
    protected \$translator;

    public function __construct(TranslatorInterface \$translator)
    {
        \$this->translator = \$translator;
    }

    public function run()
    {
        return \$this->installTables()
            && \$this->installConfiguration()
            && \$this->installTabs();
    }

    public function installTables()
    {
        \$sql = [];

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'wishlist` (
          `id_wishlist` int(10) unsigned NOT NULL auto_increment,
          `id_customer` int(10) unsigned NOT NULL,
          `id_shop` int(10) unsigned default 1,
          `id_shop_group` int(10) unsigned default 1,
          `token` varchar(64) NOT NULL,
          `name` varchar(64) NOT NULL,
          `counter` int(10) unsigned NULL,
          `date_add` datetime NOT NULL,
          `date_upd` datetime NOT NULL,
          `default` int(10) unsigned default 0,
          PRIMARY KEY  (`id_wishlist`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'wishlist_product` (
          `id_wishlist_product` int(10) NOT NULL auto_increment,
          `id_wishlist` int(10) unsigned NOT NULL,
          `id_product` int(10) unsigned NOT NULL,
          `id_product_attribute` int(10) unsigned NOT NULL,
          `quantity` int(10) unsigned NOT NULL,
          `priority` int(10) unsigned NOT NULL,
          PRIMARY KEY  (`id_wishlist_product`)
        ) ENGINE=' . _MYSQL_ENGINE_ . '  DEFAULT CHARSET=utf8;';

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'wishlist_product_cart` (
          `id_wishlist_product` int(10) unsigned NOT NULL,
          `id_cart` int(10) unsigned NOT NULL,
          `quantity` int(10) unsigned NOT NULL,
          `date_add` datetime NOT NULL
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        \$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'blockwishlist_statistics` (
            `id_statistics` int(10) unsigned NOT NULL auto_increment,
            `id_cart` int(10) unsigned default NULL,
            `id_product` int(10) unsigned NOT NULL,
            `id_product_attribute` int(10) unsigned NOT NULL,
            `date_add` datetime NOT NULL,
            `id_shop` int(10) unsigned default 1,
            PRIMARY KEY  (`id_statistics`)
        ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

        \$result = true;

        foreach (\$sql as \$query) {
            \$result = \$result && Db::getInstance()->execute(\$query);
        }

        return \$result;
    }

    public function installConfiguration()
    {
        \$pageName = \$defaultName = \$createButtonLabel = [];

        foreach (Language::getLanguages() as \$lang) {
            \$pageName[\$lang['id_lang']] = \$this->translator->trans('My wishlists', [], 'Modules.Blockwishlist.Admin', \$lang['locale']);
            \$defaultName[\$lang['id_lang']] = \$this->translator->trans('My wishlist', [], 'Modules.Blockwishlist.Admin', \$lang['locale']);
            \$createButtonLabel[\$lang['id_lang']] = \$this->translator->trans('Create new list', [], 'Modules.Blockwishlist.Admin', \$lang['locale']);
        }

        return Configuration::updateValue('blockwishlist_WishlistPageName', \$pageName)
            && Configuration::updateValue('blockwishlist_WishlistDefaultTitle', \$defaultName)
            && Configuration::updateValue('blockwishlist_CreateButtonLabel', \$createButtonLabel);
    }

    public function installTabs()
    {
        \$installTabCompleted = true;

        foreach (BlockWishList::MODULE_ADMIN_CONTROLLERS as \$controller) {
            if (Tab::getIdFromClassName(\$controller['class_name'])) {
                continue;
            }

            \$tab = new Tab();
            \$tab->class_name = \$controller['class_name'];
            \$tab->active = \$controller['visible'];
            foreach (Language::getLanguages() as \$lang) {
                \$tab->name[\$lang['id_lang']] = \$this->translator->trans(\$controller['name'], [], 'Modules.BlockWishList.Admin', \$lang['locale']);
            }
            \$tab->id_parent = Tab::getIdFromClassName(\$controller['parent_class_name']);
            \$tab->module = 'blockwishlist';
            \$installTabCompleted = \$installTabCompleted && \$tab->add();
        }

        return \$installTabCompleted;
    }
}
", "@Modules/blockwishlist/src/Database/Install.php", "/var/www/html/modules/blockwishlist/src/Database/Install.php");
    }
}
