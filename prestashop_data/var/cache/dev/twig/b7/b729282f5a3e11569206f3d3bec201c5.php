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

/* @Modules/blockwishlist/src/Grid/Definition/BaseStatisticsGridDefinitionFactory.php */
class __TwigTemplate_9ae639a9b2e5cf3b74a1abb75390a250 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/src/Grid/Definition/BaseStatisticsGridDefinitionFactory.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/src/Grid/Definition/BaseStatisticsGridDefinitionFactory.php"));

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

namespace PrestaShop\\Module\\BlockWishList\\Grid\\Definition;

use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\ColumnCollection;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\Common\\ImageColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\Common\\LinkColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\Common\\PositionColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\DataColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Definition\\Factory\\AbstractGridDefinitionFactory;

class BaseStatisticsGridDefinitionFactory extends AbstractGridDefinitionFactory
{
    protected function getId()
    {
        return 'statistics';
    }

    protected function getName()
    {
        return \$this->trans('Statistics', [], 'Admin.Advparameters.Feature');
    }

    protected function getColumns()
    {
        return (new ColumnCollection())
                ->add((new PositionColumn('position'))
                ->setName(\$this->trans('Product', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'id_field' => 'position',
                    'position_field' => 'position',
                    'update_route' => '',
                ])
            )
            ->add((new ImageColumn('image'))
                ->setOptions([
                    'src_field' => 'image_small_url',
                ])
            )
            ->add((new LinkColumn('name'))
                ->setOptions([
                    'field' => 'name',
                    'route' => 'admin_product_form',
                    'route_param_name' => 'id',
                    'route_param_field' => 'id_product',
                ])
            )
            ->add((new DataColumn('reference'))
                ->setName(\$this->trans('Reference', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'reference',
                ])
            )
            ->add((new DataColumn('combination'))
                ->setName(\$this->trans('Combination', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'combination',
                ])
            )
            ->add((new DataColumn('category_name'))
                ->setName(\$this->trans('Category', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'category_name',
                ])
            )
            ->add((new DataColumn('price'))
                ->setName(\$this->trans('Price (tax excl.)', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'price',
                ])
            )
            ->add((new DataColumn('quantity'))
                ->setName(\$this->trans('Available Qty', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'quantity',
                ])
            )
            ->add((new DataColumn('conversionRate'))
                ->setName(\$this->trans('Conversion rate', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'conversionRate',
                ])
            )
        ;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/src/Grid/Definition/BaseStatisticsGridDefinitionFactory.php";
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

namespace PrestaShop\\Module\\BlockWishList\\Grid\\Definition;

use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\ColumnCollection;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\Common\\ImageColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\Common\\LinkColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\Common\\PositionColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Column\\Type\\DataColumn;
use PrestaShop\\PrestaShop\\Core\\Grid\\Definition\\Factory\\AbstractGridDefinitionFactory;

class BaseStatisticsGridDefinitionFactory extends AbstractGridDefinitionFactory
{
    protected function getId()
    {
        return 'statistics';
    }

    protected function getName()
    {
        return \$this->trans('Statistics', [], 'Admin.Advparameters.Feature');
    }

    protected function getColumns()
    {
        return (new ColumnCollection())
                ->add((new PositionColumn('position'))
                ->setName(\$this->trans('Product', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'id_field' => 'position',
                    'position_field' => 'position',
                    'update_route' => '',
                ])
            )
            ->add((new ImageColumn('image'))
                ->setOptions([
                    'src_field' => 'image_small_url',
                ])
            )
            ->add((new LinkColumn('name'))
                ->setOptions([
                    'field' => 'name',
                    'route' => 'admin_product_form',
                    'route_param_name' => 'id',
                    'route_param_field' => 'id_product',
                ])
            )
            ->add((new DataColumn('reference'))
                ->setName(\$this->trans('Reference', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'reference',
                ])
            )
            ->add((new DataColumn('combination'))
                ->setName(\$this->trans('Combination', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'combination',
                ])
            )
            ->add((new DataColumn('category_name'))
                ->setName(\$this->trans('Category', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'category_name',
                ])
            )
            ->add((new DataColumn('price'))
                ->setName(\$this->trans('Price (tax excl.)', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'price',
                ])
            )
            ->add((new DataColumn('quantity'))
                ->setName(\$this->trans('Available Qty', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'quantity',
                ])
            )
            ->add((new DataColumn('conversionRate'))
                ->setName(\$this->trans('Conversion rate', [], 'Modules.Blockwishlist.Admin'))
                ->setOptions([
                    'field' => 'conversionRate',
                ])
            )
        ;
    }
}
", "@Modules/blockwishlist/src/Grid/Definition/BaseStatisticsGridDefinitionFactory.php", "/var/www/html/modules/blockwishlist/src/Grid/Definition/BaseStatisticsGridDefinitionFactory.php");
    }
}
