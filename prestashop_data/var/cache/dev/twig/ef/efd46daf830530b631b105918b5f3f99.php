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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig */
class __TwigTemplate_a4ca96383fdc03ede49c8723fd545fd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'combination_item_row' => [$this, 'block_combination_item_row'],
            'combination_list_row' => [$this, 'block_combination_list_row'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_combination_item_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_item_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_item_row"));

        // line 28
        echo "<tr id=\"combination-list-row-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "\" class=\"combination combination-list-row\">
    ";
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "children", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "      <td>
        ";
            // line 33
            echo "        ";
            if ((null === (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "          ";
                $context["widgetAttr"] = ["value" => twig_get_attribute($this->env, $this->source, (isset($context["placeholder_data"]) || array_key_exists("placeholder_data", $context) ? $context["placeholder_data"] : (function () { throw new RuntimeError('Variable "placeholder_data" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), [], "array", false, false, false, 34), "label" => false];
                // line 35
                echo "        ";
            } else {
                // line 36
                echo "          ";
                $context["widgetAttr"] = ["label" => false];
                // line 37
                echo "        ";
            }
            // line 38
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', (isset($context["widgetAttr"]) || array_key_exists("widgetAttr", $context) ? $context["widgetAttr"] : (function () { throw new RuntimeError('Variable "widgetAttr" does not exist.', 38, $this->source); })()));
            echo "
        ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            echo "
      </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  </tr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_combination_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_list_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_list_row"));

        // line 46
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig", 46)->unwrap();
        // line 47
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 47, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 47, $this->source); })()), 'row'), "data-prototype-name" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47)]);
        // line 48
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 48, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 48)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 48), "")) : ("")) . " combinations-table grid-table table grid-ordering-column"))]);
        // line 49
        echo "<table ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 51
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "_token", [], "any", false, false, false, 51)) {
            // line 52
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "_token", [], "any", false, false, false, 52), 'widget');
            echo "
    ";
        }
        // line 54
        echo "    <thead class=\"thead-default\">
    <tr class=\"column-headers\">
      <th scope=\"col\" id=\"combination-bulk-cell\">
        <div class=\"dropdown\" id=\"bulk-all-selection-dropdown\">
          <button
            id=\"bulk-all-selection-dropdown-button\"
            type=\"button\"
            class=\"md-checkbox dropdown-toggle\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            <label for=\"bulk-all-preview\" data-label=\"(%combinations_number% / %total_combinations%)\"><span></span></label>
            <input type=\"checkbox\" id=\"bulk-all-preview\" class=\"bulk-select-all\">
            <i class=\"md-checkbox-control\"></i>
          </button>

          <div class=\"dropdown-menu\">
            <label
              class=\"md-checkbox dropdown-item\"
              for=\"bulk-select-all-in-page\"
              data-label=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select results on this page (%combinations_number%)", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <span></span>
              <input type=\"checkbox\" id=\"bulk-select-all-in-page\" class=\"bulk-select-all\">
              <i class=\"md-checkbox-control\"></i>
            </label>

            <label
              class=\"md-checkbox dropdown-item\"
              for=\"bulk-select-all\"
              data-label=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all results (%combinations_number%)", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <span></span>
              <input type=\"checkbox\" id=\"bulk-select-all\" class=\"bulk-select-all\">
              <i class=\"md-checkbox-control\"></i>
            </label>
          </div>
        </div>
      </th>

      ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 95, $this->source); })()), "children", [], "any", false, false, false, 95));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 96
            echo "        ";
            // line 97
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 97), "name", [], "any", false, false, false, 97) != "is_selected")) {
                // line 98
                echo "          <th scope=\"col\" class=\"combination-column-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 98), "name", [], "any", false, false, false, 98), "html", null, true);
                echo "\">
            ";
                // line 99
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 99), "attr", [], "any", false, true, false, 99), "data-order-by", [], "array", true, true, false, 99)) {
                    // line 100
                    echo "              ";
                    echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 100), "label", [], "any", false, false, false, 100), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 100), "attr", [], "any", false, false, false, 100), "data-order-by", [], "array", false, false, false, 100)], 100, $context, $this->getSourceContext());
                    echo "
            ";
                } else {
                    // line 102
                    echo "              ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 102), "label", [], "any", false, false, false, 102), "html", null, true);
                    echo "
            ";
                }
                // line 104
                echo "          </th>
        ";
            }
            // line 106
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "    </tr>
    </thead>
    <tbody>";
        // line 110
        $this->displayBlock("form_rows", $context, $blocks);
        // line 111
        echo "</tbody>
  </table>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 111,  242 => 110,  238 => 107,  232 => 106,  228 => 104,  222 => 102,  216 => 100,  214 => 99,  209 => 98,  206 => 97,  204 => 96,  200 => 95,  187 => 85,  174 => 75,  151 => 54,  145 => 52,  142 => 51,  137 => 49,  135 => 48,  133 => 47,  131 => 46,  121 => 45,  111 => 42,  102 => 39,  97 => 38,  94 => 37,  91 => 36,  88 => 35,  85 => 34,  82 => 33,  79 => 31,  74 => 30,  69 => 28,  59 => 27,  36 => 25,);
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
{% extends '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{%- block combination_item_row -%}
  <tr id=\"combination-list-row-{{ form.vars.name }}\" class=\"combination combination-list-row\">
    {# Special case to keep both inputs in the same cell #}
    {% for child in form.children %}
      <td>
        {# When value is null we are displaying the prototype #}
        {% if value is null %}
          {% set widgetAttr = {value: placeholder_data[child.vars.name], label: false} %}
        {% else %}
          {% set widgetAttr = {label: false} %}
        {% endif %}
        {{ form_widget(child, widgetAttr) }}
        {{ form_errors(child) }}
      </td>
    {% endfor %}
  </tr>
{%- endblock -%}

{%- block combination_list_row -%}
  {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
  {%- set attr = attr|merge({'data-prototype': form_row(prototype), 'data-prototype-name': prototype.vars.name }) -%}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' combinations-table grid-table table grid-ordering-column')|trim }) -%}
  <table {{ block('widget_attributes') }}>
    {# Early render of the _token so that it is not included in the tbody which will be emptied by the JS #}
    {% if form._token %}
      {{ form_widget(form._token) }}
    {% endif %}
    <thead class=\"thead-default\">
    <tr class=\"column-headers\">
      <th scope=\"col\" id=\"combination-bulk-cell\">
        <div class=\"dropdown\" id=\"bulk-all-selection-dropdown\">
          <button
            id=\"bulk-all-selection-dropdown-button\"
            type=\"button\"
            class=\"md-checkbox dropdown-toggle\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            <label for=\"bulk-all-preview\" data-label=\"(%combinations_number% / %total_combinations%)\"><span></span></label>
            <input type=\"checkbox\" id=\"bulk-all-preview\" class=\"bulk-select-all\">
            <i class=\"md-checkbox-control\"></i>
          </button>

          <div class=\"dropdown-menu\">
            <label
              class=\"md-checkbox dropdown-item\"
              for=\"bulk-select-all-in-page\"
              data-label=\"{{'Select results on this page (%combinations_number%)'|trans({}, 'Admin.Actions')}}\"
            >
              <span></span>
              <input type=\"checkbox\" id=\"bulk-select-all-in-page\" class=\"bulk-select-all\">
              <i class=\"md-checkbox-control\"></i>
            </label>

            <label
              class=\"md-checkbox dropdown-item\"
              for=\"bulk-select-all\"
              data-label=\"{{'Select all results (%combinations_number%)'|trans({}, 'Admin.Actions')}}\"
            >
              <span></span>
              <input type=\"checkbox\" id=\"bulk-select-all\" class=\"bulk-select-all\">
              <i class=\"md-checkbox-control\"></i>
            </label>
          </div>
        </div>
      </th>

      {% for child in prototype.children %}
        {# Exception: is_selected header has already been rendered manually #}
        {% if child.vars.name != 'is_selected' %}
          <th scope=\"col\" class=\"combination-column-{{ child.vars.name }}\">
            {% if child.vars.attr['data-order-by'] is defined %}
              {{ ps.sortable_column_header(child.vars.label, child.vars.attr['data-order-by']) }}
            {% else %}
              {{ child.vars.label }}
            {% endif %}
          </th>
        {% endif %}
      {% endfor %}
    </tr>
    </thead>
    <tbody>
    {{- block('form_rows') -}}
    </tbody>
  </table>
{%- endblock -%}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/combination_listing.html.twig");
    }
}
