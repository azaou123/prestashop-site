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

/* @Modules/ps_imageslider/Ps_HomeSlide.php */
class __TwigTemplate_2c915ed535815509b14667642ff928a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_imageslider/Ps_HomeSlide.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_imageslider/Ps_HomeSlide.php"));

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
class Ps_HomeSlide extends ObjectModel
{
    public \$title;
    public \$description;
    public \$url;
    public \$legend;
    public \$image;
    public \$active;
    public \$position;
    public \$id_shop;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'homeslider_slides',
        'primary' => 'id_homeslider_slides',
        'multilang' => true,
        'fields' => [
            'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true],
            'position' => ['type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true],

            // Lang fields
            'description' => ['type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 4000],
            'title' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255],
            'legend' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255],
            'url' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isUrl', 'size' => 255],
            'image' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255],
        ],
    ];

    public function add(\$autodate = true, \$null_values = false)
    {
        \$context = Context::getContext();
        \$id_shop = \$context->shop->id;

        \$res = parent::add(\$autodate, \$null_values);
        \$res &= Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'homeslider` (`id_shop`, `id_homeslider_slides`)
\t\t\tVALUES(' . (int) \$id_shop . ', ' . (int) \$this->id . ')'
        );

        return \$res;
    }

    public function delete()
    {
        \$res = true;

        \$images = \$this->image;
        foreach (\$images as \$image) {
            if (preg_match('/sample/', \$image) === 0) {
                if (\$image && file_exists(__DIR__ . '/images/' . \$image)) {
                    \$res &= @unlink(__DIR__ . '/images/' . \$image);
                }
            }
        }

        \$res &= \$this->reOrderPositions();

        \$res &= Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'homeslider`
\t\t\tWHERE `id_homeslider_slides` = ' . (int) \$this->id
        );

        \$res &= parent::delete();

        return \$res;
    }

    public function reOrderPositions()
    {
        \$id_slide = \$this->id;
        \$context = Context::getContext();
        \$id_shop = \$context->shop->id;

        \$max = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT MAX(hss.`position`) as position
\t\t\tFROM `' . _DB_PREFIX_ . 'homeslider_slides` hss, `' . _DB_PREFIX_ . 'homeslider` hs
\t\t\tWHERE hss.`id_homeslider_slides` = hs.`id_homeslider_slides` AND hs.`id_shop` = ' . (int) \$id_shop
        );

        if ((int) \$max == (int) \$id_slide) {
            return true;
        }

        \$rows = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT hss.`position` as position, hss.`id_homeslider_slides` as id_slide
\t\t\tFROM `' . _DB_PREFIX_ . 'homeslider_slides` hss
\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'homeslider` hs ON (hss.`id_homeslider_slides` = hs.`id_homeslider_slides`)
\t\t\tWHERE hs.`id_shop` = ' . (int) \$id_shop . ' AND hss.`position` > ' . (int) \$this->position
        );

        foreach (\$rows as \$row) {
            \$current_slide = new Ps_HomeSlide(\$row['id_slide']);
            --\$current_slide->position;
            \$current_slide->update();
            unset(\$current_slide);
        }

        return true;
    }

    public static function getAssociatedIdsShop(\$id_slide)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT hs.`id_shop`
\t\t\tFROM `' . _DB_PREFIX_ . 'homeslider` hs
\t\t\tWHERE hs.`id_homeslider_slides` = ' . (int) \$id_slide
        );

        if (!is_array(\$result)) {
            return false;
        }

        \$return = [];

        foreach (\$result as \$id_shop) {
            \$return[] = (int) \$id_shop['id_shop'];
        }

        return \$return;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_imageslider/Ps_HomeSlide.php";
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
class Ps_HomeSlide extends ObjectModel
{
    public \$title;
    public \$description;
    public \$url;
    public \$legend;
    public \$image;
    public \$active;
    public \$position;
    public \$id_shop;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'homeslider_slides',
        'primary' => 'id_homeslider_slides',
        'multilang' => true,
        'fields' => [
            'active' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true],
            'position' => ['type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true],

            // Lang fields
            'description' => ['type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 4000],
            'title' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255],
            'legend' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255],
            'url' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isUrl', 'size' => 255],
            'image' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'size' => 255],
        ],
    ];

    public function add(\$autodate = true, \$null_values = false)
    {
        \$context = Context::getContext();
        \$id_shop = \$context->shop->id;

        \$res = parent::add(\$autodate, \$null_values);
        \$res &= Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'homeslider` (`id_shop`, `id_homeslider_slides`)
\t\t\tVALUES(' . (int) \$id_shop . ', ' . (int) \$this->id . ')'
        );

        return \$res;
    }

    public function delete()
    {
        \$res = true;

        \$images = \$this->image;
        foreach (\$images as \$image) {
            if (preg_match('/sample/', \$image) === 0) {
                if (\$image && file_exists(__DIR__ . '/images/' . \$image)) {
                    \$res &= @unlink(__DIR__ . '/images/' . \$image);
                }
            }
        }

        \$res &= \$this->reOrderPositions();

        \$res &= Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'homeslider`
\t\t\tWHERE `id_homeslider_slides` = ' . (int) \$this->id
        );

        \$res &= parent::delete();

        return \$res;
    }

    public function reOrderPositions()
    {
        \$id_slide = \$this->id;
        \$context = Context::getContext();
        \$id_shop = \$context->shop->id;

        \$max = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT MAX(hss.`position`) as position
\t\t\tFROM `' . _DB_PREFIX_ . 'homeslider_slides` hss, `' . _DB_PREFIX_ . 'homeslider` hs
\t\t\tWHERE hss.`id_homeslider_slides` = hs.`id_homeslider_slides` AND hs.`id_shop` = ' . (int) \$id_shop
        );

        if ((int) \$max == (int) \$id_slide) {
            return true;
        }

        \$rows = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT hss.`position` as position, hss.`id_homeslider_slides` as id_slide
\t\t\tFROM `' . _DB_PREFIX_ . 'homeslider_slides` hss
\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'homeslider` hs ON (hss.`id_homeslider_slides` = hs.`id_homeslider_slides`)
\t\t\tWHERE hs.`id_shop` = ' . (int) \$id_shop . ' AND hss.`position` > ' . (int) \$this->position
        );

        foreach (\$rows as \$row) {
            \$current_slide = new Ps_HomeSlide(\$row['id_slide']);
            --\$current_slide->position;
            \$current_slide->update();
            unset(\$current_slide);
        }

        return true;
    }

    public static function getAssociatedIdsShop(\$id_slide)
    {
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT hs.`id_shop`
\t\t\tFROM `' . _DB_PREFIX_ . 'homeslider` hs
\t\t\tWHERE hs.`id_homeslider_slides` = ' . (int) \$id_slide
        );

        if (!is_array(\$result)) {
            return false;
        }

        \$return = [];

        foreach (\$result as \$id_shop) {
            \$return[] = (int) \$id_shop['id_shop'];
        }

        return \$return;
    }
}
", "@Modules/ps_imageslider/Ps_HomeSlide.php", "/var/www/html/modules/ps_imageslider/Ps_HomeSlide.php");
    }
}
