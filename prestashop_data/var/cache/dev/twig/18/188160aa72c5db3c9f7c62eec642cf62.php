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

/* @PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig */
class __TwigTemplate_4133dddbf26a853cd25c4d0d5441d568 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'catalog_price_rule_form_rest' => [$this, 'block_catalog_price_rule_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig", 26)->unwrap();
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 28, $this->source); })()), "reduction", [], "any", false, false, false, 28), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"], true);
        // line 29
        echo "
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 31, $this->source); })()), 'errors');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog price rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global")]], 39, $context, $this->getSourceContext());
        // line 41
        echo "

      ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["catalogPriceRuleForm"] ?? null), "id_shop", [], "any", true, true, false, 43)) {
            // line 44
            echo "        ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 44, $this->source); })()), "id_shop", [], "any", false, false, false, 44), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global")]], 44, $context, $this->getSourceContext());
            // line 46
            echo "
      ";
        }
        // line 48
        echo "
      ";
        // line 49
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 49, $this->source); })()), "id_currency", [], "any", false, false, false, 49), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global")]], 49, $context, $this->getSourceContext());
        // line 51
        echo "

      ";
        // line 53
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 53, $this->source); })()), "id_country", [], "any", false, false, false, 53), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global")]], 53, $context, $this->getSourceContext());
        // line 55
        echo "

      ";
        // line 57
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 57, $this->source); })()), "id_group", [], "any", false, false, false, 57), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global")]], 57, $context, $this->getSourceContext());
        // line 59
        echo "

      ";
        // line 61
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 61, $this->source); })()), "from_quantity", [], "any", false, false, false, 61), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From quantity", [], "Admin.Catalog.Feature")]], 61, $context, $this->getSourceContext());
        // line 63
        echo "

      ";
        // line 65
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 65, $this->source); })()), "price", [], "any", false, false, false, 65), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price (tax excl.)", [], "Admin.Catalog.Feature")]], 65, $context, $this->getSourceContext());
        // line 67
        echo "

      ";
        // line 69
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 69, $this->source); })()), "leave_initial_price", [], "any", false, false, false, 69), [], ["label" => ""]], 69, $context, $this->getSourceContext());
        echo "

      ";
        // line 71
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 71, $this->source); })()), "date_range", [], "any", false, false, false, 71), "from", [], "any", false, false, false, 71), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global")]], 71, $context, $this->getSourceContext());
        // line 73
        echo "

      ";
        // line 75
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 75, $this->source); })()), "date_range", [], "any", false, false, false, 75), "to", [], "any", false, false, false, 75), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global")]], 75, $context, $this->getSourceContext());
        // line 77
        echo "

      ";
        // line 79
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 79, $this->source); })()), "reduction", [], "any", false, false, false, 79), ["attr" => ["class" => "js-reduction-type-source"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reduction", [], "Admin.Catalog.Feature")]], 79, $context, $this->getSourceContext());
        // line 81
        echo "

      ";
        // line 83
        $this->displayBlock('catalog_price_rule_form_rest', $context, $blocks);
        // line 86
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_catalog_price_rules_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_catalog_price_rule_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_price_rule_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_price_rule_form_rest"));

        // line 84
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["catalogPriceRuleForm"]) || array_key_exists("catalogPriceRuleForm", $context) ? $context["catalogPriceRuleForm"] : (function () { throw new RuntimeError('Variable "catalogPriceRuleForm" does not exist.', 84, $this->source); })()), 'rest');
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 84,  179 => 83,  167 => 97,  160 => 93,  154 => 90,  150 => 89,  145 => 86,  143 => 83,  139 => 81,  137 => 79,  133 => 77,  131 => 75,  127 => 73,  125 => 71,  120 => 69,  116 => 67,  114 => 65,  110 => 63,  108 => 61,  104 => 59,  102 => 57,  98 => 55,  96 => 53,  92 => 51,  90 => 49,  87 => 48,  83 => 46,  80 => 44,  78 => 43,  74 => 41,  72 => 39,  65 => 35,  58 => 31,  54 => 30,  51 => 29,  49 => 28,  47 => 26,  44 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}
{# Apply ui kit theme only on reduction type for now, but it should be used for the whole form #}
{% form_theme catalogPriceRuleForm.reduction '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{{ form_start(catalogPriceRuleForm) }}
{{ form_errors(catalogPriceRuleForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">attach_money</i>
    {{ 'Catalog price rules'|trans({}, 'Admin.Catalog.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      {{ ps.form_group_row(catalogPriceRuleForm.name, {}, {
        'label': 'Name'|trans({}, 'Admin.Global'),
      }) }}

      {% if catalogPriceRuleForm.id_shop is defined %}
        {{ ps.form_group_row(catalogPriceRuleForm.id_shop, {}, {
          'label': 'Store'|trans({}, 'Admin.Global')
        }) }}
      {% endif %}

      {{ ps.form_group_row(catalogPriceRuleForm.id_currency, {}, {
        'label': 'Currency'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.id_country, {}, {
        'label': 'Country'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.id_group, {}, {
        'label': 'Group'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.from_quantity, {}, {
        'label': 'From quantity'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.price, {}, {
        'label': 'Price (tax excl.)'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.leave_initial_price, {}, {'label': ''}) }}

      {{ ps.form_group_row(catalogPriceRuleForm.date_range.from, {}, {
        'label': 'From'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.date_range.to, {}, {
        'label': 'To'|trans({}, 'Admin.Global'),
      }) }}

      {{ ps.form_group_row(catalogPriceRuleForm.reduction, {'attr': {'class': 'js-reduction-type-source'}}, {
        'label': 'Reduction'|trans({}, 'Admin.Catalog.Feature'),
      }) }}

      {% block catalog_price_rule_form_rest %}
        {{ form_rest(catalogPriceRuleForm) }}
      {% endblock %}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_catalog_price_rules_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(catalogPriceRuleForm) }}
", "@PrestaShop/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/CatalogPriceRule/Blocks/form.html.twig");
    }
}
