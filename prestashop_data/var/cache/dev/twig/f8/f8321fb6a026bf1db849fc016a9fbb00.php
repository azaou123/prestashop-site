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

/* @Modules/ps_mainmenu/ps_menutoplinks.class.php */
class __TwigTemplate_b0b908ad6f56917f93cf6c61a6411a8c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mainmenu/ps_menutoplinks.class.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mainmenu/ps_menutoplinks.class.php"));

        // line 1
        echo "<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class Ps_MenuTopLinks
{
    public static function gets(\$id_lang, \$id_linksmenutop = null, \$id_shop = 0)
    {
        \$sql = 'SELECT l.id_linksmenutop, l.new_window, s.name, ll.link, ll.label
\t\t\t\tFROM ' . _DB_PREFIX_ . 'linksmenutop l
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'linksmenutop_lang ll ON (l.id_linksmenutop = ll.id_linksmenutop AND ll.id_lang = ' . (int) \$id_lang . ' AND ll.id_shop=' . (int) \$id_shop . ')
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'shop s ON l.id_shop = s.id_shop
\t\t\t\tWHERE 1 ' . ((!is_null(\$id_linksmenutop)) ? ' AND l.id_linksmenutop = \"' . (int) \$id_linksmenutop . '\"' : '') . '
\t\t\t\tAND l.id_shop IN (0, ' . (int) \$id_shop . ')';

        return Db::getInstance()->executeS(\$sql);
    }

    public static function get(\$id_linksmenutop, \$id_lang, \$id_shop)
    {
        return self::gets(\$id_lang, \$id_linksmenutop, \$id_shop);
    }

    public static function getLinkLang(\$id_linksmenutop, \$id_shop)
    {
        \$ret = Db::getInstance()->executeS('
\t\t\tSELECT l.id_linksmenutop, l.new_window, ll.link, ll.label, ll.id_lang
\t\t\tFROM ' . _DB_PREFIX_ . 'linksmenutop l
\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'linksmenutop_lang ll ON (l.id_linksmenutop = ll.id_linksmenutop AND ll.id_shop=' . (int) \$id_shop . ')
\t\t\tWHERE 1
\t\t\t' . ((!is_null(\$id_linksmenutop)) ? ' AND l.id_linksmenutop = \"' . (int) \$id_linksmenutop . '\"' : '') . '
\t\t\tAND l.id_shop IN (0, ' . (int) \$id_shop . ')
\t\t');

        \$link = [];
        \$label = [];
        \$new_window = false;

        foreach (\$ret as \$line) {
            \$link[\$line['id_lang']] = Tools::safeOutput(\$line['link']);
            \$label[\$line['id_lang']] = Tools::safeOutput(\$line['label']);
            \$new_window = (bool) \$line['new_window'];
        }

        return ['link' => \$link, 'label' => \$label, 'new_window' => \$new_window];
    }

    public static function add(\$link, \$label, \$newWindow = 0, \$id_shop = 0)
    {
        if (!is_array(\$label)) {
            return false;
        }
        if (!is_array(\$link)) {
            return false;
        }

        Db::getInstance()->insert(
            'linksmenutop',
            [
                'new_window' => (int) \$newWindow,
                'id_shop' => (int) \$id_shop,
            ]
        );
        \$id_linksmenutop = Db::getInstance()->Insert_ID();

        \$result = true;

        foreach (\$label as \$id_lang => \$label) {
            \$result &= Db::getInstance()->insert(
                'linksmenutop_lang',
                [
                    'id_linksmenutop' => (int) \$id_linksmenutop,
                    'id_lang' => (int) \$id_lang,
                    'id_shop' => (int) \$id_shop,
                    'label' => pSQL(\$label),
                    'link' => pSQL(\$link[\$id_lang]),
                ]
            );
        }

        return \$result;
    }

    public static function update(\$link, \$labels, \$newWindow = 0, \$id_shop = 0, \$id_link = 0)
    {
        if (!is_array(\$labels)) {
            return false;
        }
        if (!is_array(\$link)) {
            return false;
        }

        Db::getInstance()->update(
            'linksmenutop',
            [
                'new_window' => (int) \$newWindow,
                'id_shop' => (int) \$id_shop,
            ],
            'id_linksmenutop = ' . (int) \$id_link
        );

        foreach (\$labels as \$id_lang => \$label) {
            Db::getInstance()->update(
                'linksmenutop_lang',
                [
                    'id_shop' => (int) \$id_shop,
                    'label' => pSQL(\$label),
                    'link' => pSQL(\$link[\$id_lang]),
                ],
                'id_linksmenutop = ' . (int) \$id_link . ' AND id_lang = ' . (int) \$id_lang
            );
        }
    }

    public static function remove(\$id_linksmenutop, \$id_shop)
    {
        \$result = true;
        \$result &= Db::getInstance()->delete('linksmenutop', 'id_linksmenutop = ' . (int) \$id_linksmenutop . ' AND id_shop = ' . (int) \$id_shop);
        \$result &= Db::getInstance()->delete('linksmenutop_lang', 'id_linksmenutop = ' . (int) \$id_linksmenutop);

        return \$result;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mainmenu/ps_menutoplinks.class.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class Ps_MenuTopLinks
{
    public static function gets(\$id_lang, \$id_linksmenutop = null, \$id_shop = 0)
    {
        \$sql = 'SELECT l.id_linksmenutop, l.new_window, s.name, ll.link, ll.label
\t\t\t\tFROM ' . _DB_PREFIX_ . 'linksmenutop l
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'linksmenutop_lang ll ON (l.id_linksmenutop = ll.id_linksmenutop AND ll.id_lang = ' . (int) \$id_lang . ' AND ll.id_shop=' . (int) \$id_shop . ')
\t\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'shop s ON l.id_shop = s.id_shop
\t\t\t\tWHERE 1 ' . ((!is_null(\$id_linksmenutop)) ? ' AND l.id_linksmenutop = \"' . (int) \$id_linksmenutop . '\"' : '') . '
\t\t\t\tAND l.id_shop IN (0, ' . (int) \$id_shop . ')';

        return Db::getInstance()->executeS(\$sql);
    }

    public static function get(\$id_linksmenutop, \$id_lang, \$id_shop)
    {
        return self::gets(\$id_lang, \$id_linksmenutop, \$id_shop);
    }

    public static function getLinkLang(\$id_linksmenutop, \$id_shop)
    {
        \$ret = Db::getInstance()->executeS('
\t\t\tSELECT l.id_linksmenutop, l.new_window, ll.link, ll.label, ll.id_lang
\t\t\tFROM ' . _DB_PREFIX_ . 'linksmenutop l
\t\t\tLEFT JOIN ' . _DB_PREFIX_ . 'linksmenutop_lang ll ON (l.id_linksmenutop = ll.id_linksmenutop AND ll.id_shop=' . (int) \$id_shop . ')
\t\t\tWHERE 1
\t\t\t' . ((!is_null(\$id_linksmenutop)) ? ' AND l.id_linksmenutop = \"' . (int) \$id_linksmenutop . '\"' : '') . '
\t\t\tAND l.id_shop IN (0, ' . (int) \$id_shop . ')
\t\t');

        \$link = [];
        \$label = [];
        \$new_window = false;

        foreach (\$ret as \$line) {
            \$link[\$line['id_lang']] = Tools::safeOutput(\$line['link']);
            \$label[\$line['id_lang']] = Tools::safeOutput(\$line['label']);
            \$new_window = (bool) \$line['new_window'];
        }

        return ['link' => \$link, 'label' => \$label, 'new_window' => \$new_window];
    }

    public static function add(\$link, \$label, \$newWindow = 0, \$id_shop = 0)
    {
        if (!is_array(\$label)) {
            return false;
        }
        if (!is_array(\$link)) {
            return false;
        }

        Db::getInstance()->insert(
            'linksmenutop',
            [
                'new_window' => (int) \$newWindow,
                'id_shop' => (int) \$id_shop,
            ]
        );
        \$id_linksmenutop = Db::getInstance()->Insert_ID();

        \$result = true;

        foreach (\$label as \$id_lang => \$label) {
            \$result &= Db::getInstance()->insert(
                'linksmenutop_lang',
                [
                    'id_linksmenutop' => (int) \$id_linksmenutop,
                    'id_lang' => (int) \$id_lang,
                    'id_shop' => (int) \$id_shop,
                    'label' => pSQL(\$label),
                    'link' => pSQL(\$link[\$id_lang]),
                ]
            );
        }

        return \$result;
    }

    public static function update(\$link, \$labels, \$newWindow = 0, \$id_shop = 0, \$id_link = 0)
    {
        if (!is_array(\$labels)) {
            return false;
        }
        if (!is_array(\$link)) {
            return false;
        }

        Db::getInstance()->update(
            'linksmenutop',
            [
                'new_window' => (int) \$newWindow,
                'id_shop' => (int) \$id_shop,
            ],
            'id_linksmenutop = ' . (int) \$id_link
        );

        foreach (\$labels as \$id_lang => \$label) {
            Db::getInstance()->update(
                'linksmenutop_lang',
                [
                    'id_shop' => (int) \$id_shop,
                    'label' => pSQL(\$label),
                    'link' => pSQL(\$link[\$id_lang]),
                ],
                'id_linksmenutop = ' . (int) \$id_link . ' AND id_lang = ' . (int) \$id_lang
            );
        }
    }

    public static function remove(\$id_linksmenutop, \$id_shop)
    {
        \$result = true;
        \$result &= Db::getInstance()->delete('linksmenutop', 'id_linksmenutop = ' . (int) \$id_linksmenutop . ' AND id_shop = ' . (int) \$id_shop);
        \$result &= Db::getInstance()->delete('linksmenutop_lang', 'id_linksmenutop = ' . (int) \$id_linksmenutop);

        return \$result;
    }
}
", "@Modules/ps_mainmenu/ps_menutoplinks.class.php", "/var/www/html/modules/ps_mainmenu/ps_menutoplinks.class.php");
    }
}
