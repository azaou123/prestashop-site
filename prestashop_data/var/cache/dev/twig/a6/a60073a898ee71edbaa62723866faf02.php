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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/shop_list.html.twig */
class __TwigTemplate_74c56f107c0e296aca7346739a33747b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/shop_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/shop_list.html.twig"));

        // line 25
        echo "
";
        // line 27
        $context["shopsIds"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "ids_field", [], "any", false, false, false, 27), [], "array", false, false, false, 27);
        // line 28
        $context["shops"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 28, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "field", [], "any", false, false, false, 28), [], "array", false, false, false, 28);
        // line 29
        $context["productId"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "product_id_field", [], "any", false, false, false, 29), [], "array", false, false, false, 29);
        // line 30
        $context["allShops"] = twig_join_filter((isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 30, $this->source); })()), ", ");
        // line 31
        echo "
";
        // line 32
        $context["routeParams"] = ["productId" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 32, $this->source); })())];
        // line 33
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), "shop_group_id", [], "any", false, false, false, 33))) {
            // line 34
            echo "  ";
            $context["routeParams"] = twig_array_merge((isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 34, $this->source); })()), ["shopGroupId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "shop_group_id", [], "any", false, false, false, 34)]);
        }
        // line 36
        echo "
<span class=\"product-shop-list\" title=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["allShops"]) || array_key_exists("allShops", $context) ? $context["allShops"] : (function () { throw new RuntimeError('Variable "allShops" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" data-shop-ids=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["shopsIds"]) || array_key_exists("shopsIds", $context) ? $context["shopsIds"] : (function () { throw new RuntimeError('Variable "shopsIds" does not exist.', 37, $this->source); })()), ","), "html", null, true);
        echo "\">
  <div class=\"product-shop-list-names\">
    ";
        // line 39
        $context["firstShop"] = twig_get_attribute($this->env, $this->source, (isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 39, $this->source); })()), 0, [], "array", false, false, false, 39);
        // line 40
        echo "    <strong>";
        echo twig_escape_filter($this->env, (isset($context["firstShop"]) || array_key_exists("firstShop", $context) ? $context["firstShop"] : (function () { throw new RuntimeError('Variable "firstShop" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</strong>";
        // line 41
        if ((twig_length_filter($this->env, (isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 41, $this->source); })())) > 1)) {
            // line 42
            echo ",
      ";
            // line 43
            $context["otherShops"] = twig_join_filter(twig_slice($this->env, (isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 43, $this->source); })()), 1, twig_length_filter($this->env, (isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 43, $this->source); })()))), ", ");
            // line 44
            echo "      ";
            // line 45
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 45, $this->source); })()), "options", [], "any", false, false, false, 45), "max_displayed_characters", [], "any", false, false, false, 45) > 0) && (twig_length_filter($this->env, (isset($context["allShops"]) || array_key_exists("allShops", $context) ? $context["allShops"] : (function () { throw new RuntimeError('Variable "allShops" does not exist.', 45, $this->source); })())) > twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 45, $this->source); })()), "options", [], "any", false, false, false, 45), "max_displayed_characters", [], "any", false, false, false, 45)))) {
                // line 46
                echo "        ";
                echo twig_escape_filter($this->env, twig_slice($this->env, (isset($context["otherShops"]) || array_key_exists("otherShops", $context) ? $context["otherShops"] : (function () { throw new RuntimeError('Variable "otherShops" does not exist.', 46, $this->source); })()), 0, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 46, $this->source); })()), "options", [], "any", false, false, false, 46), "max_displayed_characters", [], "any", false, false, false, 46) - twig_length_filter($this->env, (isset($context["firstShop"]) || array_key_exists("firstShop", $context) ? $context["firstShop"] : (function () { throw new RuntimeError('Variable "firstShop" does not exist.', 46, $this->source); })())))), "html", null, true);
                echo "&mldr;
      ";
            } else {
                // line 48
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["otherShops"]) || array_key_exists("otherShops", $context) ? $context["otherShops"] : (function () { throw new RuntimeError('Variable "otherShops" does not exist.', 48, $this->source); })()), "html", null, true);
                echo "
      ";
            }
        }
        // line 51
        echo "</div>";
        // line 52
        if ((twig_length_filter($this->env, (isset($context["shops"]) || array_key_exists("shops", $context) ? $context["shops"] : (function () { throw new RuntimeError('Variable "shops" does not exist.', 52, $this->source); })())) > 1)) {
            // line 53
            echo "<div
      class=\"product-shop-details-toggle\"
      data-product-id=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\"
      data-shop-previews-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_grid_shop_previews", (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 56, $this->source); })())), "html", null, true);
            echo "\"
    >
    </div>
  ";
        }
        // line 60
        echo "</span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/shop_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 60,  118 => 56,  114 => 55,  110 => 53,  108 => 52,  106 => 51,  99 => 48,  93 => 46,  90 => 45,  88 => 44,  86 => 43,  83 => 42,  81 => 41,  77 => 40,  75 => 39,  68 => 37,  65 => 36,  61 => 34,  59 => 33,  57 => 32,  54 => 31,  52 => 30,  50 => 29,  48 => 28,  46 => 27,  43 => 25,);
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

{# The first shop is always displayed entirely and in bold #}
{% set shopsIds = record[column.options.ids_field] %}
{% set shops = record[column.options.field] %}
{% set productId = record[column.options.product_id_field] %}
{% set allShops = shops|join(', ') %}

{% set routeParams = {productId: productId} %}
{% if column.options.shop_group_id is not null %}
  {% set routeParams = routeParams|merge({shopGroupId: column.options.shop_group_id}) %}
{% endif %}

<span class=\"product-shop-list\" title=\"{{ allShops }}\" data-shop-ids=\"{{ shopsIds|join(',') }}\">
  <div class=\"product-shop-list-names\">
    {% set firstShop = shops[0] %}
    <strong>{{ firstShop }}</strong>
    {%- if shops|length > 1 -%}
      ,
      {% set otherShops = shops|slice(1, shops|length)|join(', ') %}
      {# if max_displayed_characters is set and is lower that the whole text length the rest of the shops are truncated #}
      {% if column.options.max_displayed_characters > 0 and allShops|length > column.options.max_displayed_characters %}
        {{ otherShops|slice(0, column.options.max_displayed_characters - firstShop|length) }}&mldr;
      {% else %}
        {{ otherShops }}
      {% endif %}
    {%- endif -%}
  </div>
  {%- if shops|length > 1 -%}
    <div
      class=\"product-shop-details-toggle\"
      data-product-id=\"{{ productId }}\"
      data-shop-previews-url=\"{{ path('admin_products_grid_shop_previews', routeParams) }}\"
    >
    </div>
  {% endif %}
</span>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/shop_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/shop_list.html.twig");
    }
}
