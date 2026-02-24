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

/* @PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig */
class __TwigTemplate_bc1b6e278f6ca74fe79978df3148483c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'monitoring_showcase_card' => [$this, 'block_monitoring_showcase_card'],
            'empty_categories_listing' => [$this, 'block_empty_categories_listing'],
            'no_qty_product_with_combinations_listing' => [$this, 'block_no_qty_product_with_combinations_listing'],
            'no_qty_product_without_combinations_listing' => [$this, 'block_no_qty_product_without_combinations_listing'],
            'disabled_product_listing' => [$this, 'block_disabled_product_listing'],
            'product_without_image_listing' => [$this, 'block_product_without_image_listing'],
            'product_without_description_listing' => [$this, 'block_product_without_description_listing'],
            'product_without_price_listing' => [$this, 'block_product_without_price_listing'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "  ";
        $this->displayBlock('monitoring_showcase_card', $context, $blocks);
        // line 32
        echo "
  ";
        // line 33
        $this->displayBlock('empty_categories_listing', $context, $blocks);
        // line 56
        echo "
  ";
        // line 57
        $this->displayBlock('no_qty_product_with_combinations_listing', $context, $blocks);
        // line 60
        echo "
  ";
        // line 61
        $this->displayBlock('no_qty_product_without_combinations_listing', $context, $blocks);
        // line 64
        echo "
  ";
        // line 65
        $this->displayBlock('disabled_product_listing', $context, $blocks);
        // line 68
        echo "
  ";
        // line 69
        $this->displayBlock('product_without_image_listing', $context, $blocks);
        // line 72
        echo "
  ";
        // line 73
        $this->displayBlock('product_without_description_listing', $context, $blocks);
        // line 76
        echo "
  ";
        // line 77
        $this->displayBlock('product_without_price_listing', $context, $blocks);
        // line 80
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_monitoring_showcase_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monitoring_showcase_card"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monitoring_showcase_card"));

        // line 30
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Monitoring/Blocks/showcase_card.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 30)->display($context);
        // line 31
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_empty_categories_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_categories_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "empty_categories_listing"));

        // line 34
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 34, "274129123")->display(twig_array_merge($context, ["grid" => (isset($context["emptyCategoryGrid"]) || array_key_exists("emptyCategoryGrid", $context) ? $context["emptyCategoryGrid"] : (function () { throw new RuntimeError('Variable "emptyCategoryGrid" does not exist.', 34, $this->source); })())]));
        // line 55
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_no_qty_product_with_combinations_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_qty_product_with_combinations_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_qty_product_with_combinations_listing"));

        // line 58
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 58)->display(twig_array_merge($context, ["grid" => (isset($context["noQtyProductWithCombinationGrid"]) || array_key_exists("noQtyProductWithCombinationGrid", $context) ? $context["noQtyProductWithCombinationGrid"] : (function () { throw new RuntimeError('Variable "noQtyProductWithCombinationGrid" does not exist.', 58, $this->source); })())]));
        // line 59
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_no_qty_product_without_combinations_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_qty_product_without_combinations_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "no_qty_product_without_combinations_listing"));

        // line 62
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 62)->display(twig_array_merge($context, ["grid" => (isset($context["noQtyProductWithoutCombinationGrid"]) || array_key_exists("noQtyProductWithoutCombinationGrid", $context) ? $context["noQtyProductWithoutCombinationGrid"] : (function () { throw new RuntimeError('Variable "noQtyProductWithoutCombinationGrid" does not exist.', 62, $this->source); })())]));
        // line 63
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_disabled_product_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "disabled_product_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "disabled_product_listing"));

        // line 66
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 66)->display(twig_array_merge($context, ["grid" => (isset($context["disabledProductGrid"]) || array_key_exists("disabledProductGrid", $context) ? $context["disabledProductGrid"] : (function () { throw new RuntimeError('Variable "disabledProductGrid" does not exist.', 66, $this->source); })())]));
        // line 67
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_product_without_image_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_without_image_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_without_image_listing"));

        // line 70
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 70)->display(twig_array_merge($context, ["grid" => (isset($context["productWithoutImageGrid"]) || array_key_exists("productWithoutImageGrid", $context) ? $context["productWithoutImageGrid"] : (function () { throw new RuntimeError('Variable "productWithoutImageGrid" does not exist.', 70, $this->source); })())]));
        // line 71
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_product_without_description_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_without_description_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_without_description_listing"));

        // line 74
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 74)->display(twig_array_merge($context, ["grid" => (isset($context["productWithoutDescriptionGrid"]) || array_key_exists("productWithoutDescriptionGrid", $context) ? $context["productWithoutDescriptionGrid"] : (function () { throw new RuntimeError('Variable "productWithoutDescriptionGrid" does not exist.', 74, $this->source); })())]));
        // line 75
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_product_without_price_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_without_price_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_without_price_listing"));

        // line 78
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 78)->display(twig_array_merge($context, ["grid" => (isset($context["productWithoutPriceGrid"]) || array_key_exists("productWithoutPriceGrid", $context) ? $context["productWithoutPriceGrid"] : (function () { throw new RuntimeError('Variable "productWithoutPriceGrid" does not exist.', 78, $this->source); })())]));
        // line 79
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/monitoring.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 87,  326 => 86,  320 => 84,  310 => 83,  300 => 79,  297 => 78,  287 => 77,  277 => 75,  274 => 74,  264 => 73,  254 => 71,  251 => 70,  241 => 69,  231 => 67,  228 => 66,  218 => 65,  208 => 63,  205 => 62,  195 => 61,  185 => 59,  182 => 58,  172 => 57,  162 => 55,  159 => 34,  149 => 33,  139 => 31,  136 => 30,  126 => 29,  115 => 80,  113 => 77,  110 => 76,  108 => 73,  105 => 72,  103 => 69,  100 => 68,  98 => 65,  95 => 64,  93 => 61,  90 => 60,  88 => 57,  85 => 56,  83 => 33,  80 => 32,  77 => 29,  67 => 28,  44 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {% block monitoring_showcase_card %}
    {% include '@PrestaShop/Admin/Sell/Catalog/Monitoring/Blocks/showcase_card.html.twig' %}
  {% endblock %}

  {% block empty_categories_listing %}
    {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': emptyCategoryGrid} %}

      {% block grid_panel_body %}
        <div class=\"card-body\">
          <div class=\"alert alert-info\">
            <div class=\"alert-text\">
              {{ 'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.'|trans({}, 'Admin.Catalog.Help') }}
            </div>
          </div>
          {% block grid_view_block %}
            {{ include('@PrestaShop/Admin/Common/Grid/grid.html.twig', {'grid': emptyCategoryGrid }) }}
          {% endblock %}
        </div>
      {% endblock %}

      {% block grid_panel_extra_content %}
        {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig'
              with {'deleteCategoriesForm': deleteCategoryForm }
            %}
      {% endblock %}
    {% endembed %}
  {% endblock %}

  {% block no_qty_product_with_combinations_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': noQtyProductWithCombinationGrid} %}
  {% endblock %}

  {% block no_qty_product_without_combinations_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': noQtyProductWithoutCombinationGrid} %}
  {% endblock %}

  {% block disabled_product_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': disabledProductGrid} %}
  {% endblock %}

  {% block product_without_image_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': productWithoutImageGrid} %}
  {% endblock %}

  {% block product_without_description_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': productWithoutDescriptionGrid} %}
  {% endblock %}

  {% block product_without_price_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': productWithoutPriceGrid} %}
  {% endblock %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/monitoring.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Monitoring/index.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig */
class __TwigTemplate_bc1b6e278f6ca74fe79978df3148483c___274129123 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'grid_panel_body' => [$this, 'block_grid_panel_body'],
            'grid_view_block' => [$this, 'block_grid_view_block'],
            'grid_panel_extra_content' => [$this, 'block_grid_panel_extra_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_grid_panel_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_panel_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_panel_body"));

        // line 37
        echo "        <div class=\"card-body\">
          <div class=\"alert alert-info\">
            <div class=\"alert-text\">
              ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
            </div>
          </div>
          ";
        // line 43
        $this->displayBlock('grid_view_block', $context, $blocks);
        // line 46
        echo "        </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_grid_view_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_view_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_view_block"));

        // line 44
        echo "            ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid.html.twig", ["grid" => (isset($context["emptyCategoryGrid"]) || array_key_exists("emptyCategoryGrid", $context) ? $context["emptyCategoryGrid"] : (function () { throw new RuntimeError('Variable "emptyCategoryGrid" does not exist.', 44, $this->source); })())]);
        echo "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_grid_panel_extra_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_panel_extra_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_panel_extra_content"));

        // line 50
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", 50)->display(twig_array_merge($context, ["deleteCategoriesForm" =>         // line 51
(isset($context["deleteCategoryForm"]) || array_key_exists("deleteCategoryForm", $context) ? $context["deleteCategoryForm"] : (function () { throw new RuntimeError('Variable "deleteCategoryForm" does not exist.', 51, $this->source); })())]));
        // line 53
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 53,  565 => 51,  563 => 50,  553 => 49,  540 => 44,  530 => 43,  519 => 46,  517 => 43,  511 => 40,  506 => 37,  496 => 36,  473 => 34,  330 => 87,  326 => 86,  320 => 84,  310 => 83,  300 => 79,  297 => 78,  287 => 77,  277 => 75,  274 => 74,  264 => 73,  254 => 71,  251 => 70,  241 => 69,  231 => 67,  228 => 66,  218 => 65,  208 => 63,  205 => 62,  195 => 61,  185 => 59,  182 => 58,  172 => 57,  162 => 55,  159 => 34,  149 => 33,  139 => 31,  136 => 30,  126 => 29,  115 => 80,  113 => 77,  110 => 76,  108 => 73,  105 => 72,  103 => 69,  100 => 68,  98 => 65,  95 => 64,  93 => 61,  90 => 60,  88 => 57,  85 => 56,  83 => 33,  80 => 32,  77 => 29,  67 => 28,  44 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {% block monitoring_showcase_card %}
    {% include '@PrestaShop/Admin/Sell/Catalog/Monitoring/Blocks/showcase_card.html.twig' %}
  {% endblock %}

  {% block empty_categories_listing %}
    {% embed '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': emptyCategoryGrid} %}

      {% block grid_panel_body %}
        <div class=\"card-body\">
          <div class=\"alert alert-info\">
            <div class=\"alert-text\">
              {{ 'An empty category is a category that has no product directly associated to it. An empty category may however contain products through its subcategories.'|trans({}, 'Admin.Catalog.Help') }}
            </div>
          </div>
          {% block grid_view_block %}
            {{ include('@PrestaShop/Admin/Common/Grid/grid.html.twig', {'grid': emptyCategoryGrid }) }}
          {% endblock %}
        </div>
      {% endblock %}

      {% block grid_panel_extra_content %}
        {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig'
              with {'deleteCategoriesForm': deleteCategoryForm }
            %}
      {% endblock %}
    {% endembed %}
  {% endblock %}

  {% block no_qty_product_with_combinations_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': noQtyProductWithCombinationGrid} %}
  {% endblock %}

  {% block no_qty_product_without_combinations_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': noQtyProductWithoutCombinationGrid} %}
  {% endblock %}

  {% block disabled_product_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': disabledProductGrid} %}
  {% endblock %}

  {% block product_without_image_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': productWithoutImageGrid} %}
  {% endblock %}

  {% block product_without_description_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': productWithoutDescriptionGrid} %}
  {% endblock %}

  {% block product_without_price_listing %}
    {% include '@PrestaShop/Admin/Common/Grid/grid_panel.html.twig' with {'grid': productWithoutPriceGrid} %}
  {% endblock %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/monitoring.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Monitoring/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Monitoring/index.html.twig");
    }
}
