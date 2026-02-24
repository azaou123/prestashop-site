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

/* @Modules/ps_customtext/classes/MigrateData.php */
class __TwigTemplate_002231c17d385f083aa1027404c2a44f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_customtext/classes/MigrateData.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_customtext/classes/MigrateData.php"));

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

/**
 * Database may change between two version of the module, or between the 1.6 and 1.7 modules.
 * This class allow the data to be kept during upgrades and migrations.
 */
class MigrateData
{
    /**
     * @var array
     */
    private \$loadedData = [];

    /**
     * This methods retrieves data from older database models
     * - ps_customtext < v3.0.0
     * - blockcmsinfo (1.6 equivalent module)
     *
     * @return array
     */
    public function retrieveOldData()
    {
        \$this->loadedData = [];
        \$texts = Db::getInstance()->executeS('SELECT i.`id_shop`, il.`id_lang`, il.`text` FROM `' . _DB_PREFIX_ . 'info` i
            INNER JOIN `' . _DB_PREFIX_ . 'info_lang` il ON il.`id_info` = i.`id_info`'
        );

        if (is_array(\$texts) && !empty(\$texts)) {
            foreach (\$texts as \$text) {
                \$this->loadedData[(int) \$text['id_shop']][(int) \$text['id_lang']] = \$text['text'];
            }
        }

        return \$this->loadedData;
    }

    /**
     * Import the old CustomText data in the new structure
     *
     * @return bool
     */
    public function insertData()
    {
        if (empty(\$this->loadedData)) {
            return true;
        }

        \$return = true;
        \$shopsIds = Shop::getShops(true, null, true);
        \$customTexts = array_intersect_key(\$this->loadedData, \$shopsIds);

        \$info = new CustomText();
        \$info->text = reset(\$customTexts);
        \$return &= \$info->add();

        if (count(\$customTexts) > 1) {
            foreach (\$customTexts as \$key => \$text) {
                Shop::setContext(Shop::CONTEXT_SHOP, (int) \$key);
                \$info->text = \$text;
                \$return &= \$info->save();
            }
        }

        return (bool) \$return;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_customtext/classes/MigrateData.php";
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

/**
 * Database may change between two version of the module, or between the 1.6 and 1.7 modules.
 * This class allow the data to be kept during upgrades and migrations.
 */
class MigrateData
{
    /**
     * @var array
     */
    private \$loadedData = [];

    /**
     * This methods retrieves data from older database models
     * - ps_customtext < v3.0.0
     * - blockcmsinfo (1.6 equivalent module)
     *
     * @return array
     */
    public function retrieveOldData()
    {
        \$this->loadedData = [];
        \$texts = Db::getInstance()->executeS('SELECT i.`id_shop`, il.`id_lang`, il.`text` FROM `' . _DB_PREFIX_ . 'info` i
            INNER JOIN `' . _DB_PREFIX_ . 'info_lang` il ON il.`id_info` = i.`id_info`'
        );

        if (is_array(\$texts) && !empty(\$texts)) {
            foreach (\$texts as \$text) {
                \$this->loadedData[(int) \$text['id_shop']][(int) \$text['id_lang']] = \$text['text'];
            }
        }

        return \$this->loadedData;
    }

    /**
     * Import the old CustomText data in the new structure
     *
     * @return bool
     */
    public function insertData()
    {
        if (empty(\$this->loadedData)) {
            return true;
        }

        \$return = true;
        \$shopsIds = Shop::getShops(true, null, true);
        \$customTexts = array_intersect_key(\$this->loadedData, \$shopsIds);

        \$info = new CustomText();
        \$info->text = reset(\$customTexts);
        \$return &= \$info->add();

        if (count(\$customTexts) > 1) {
            foreach (\$customTexts as \$key => \$text) {
                Shop::setContext(Shop::CONTEXT_SHOP, (int) \$key);
                \$info->text = \$text;
                \$return &= \$info->save();
            }
        }

        return (bool) \$return;
    }
}
", "@Modules/ps_customtext/classes/MigrateData.php", "/var/www/html/modules/ps_customtext/classes/MigrateData.php");
    }
}
