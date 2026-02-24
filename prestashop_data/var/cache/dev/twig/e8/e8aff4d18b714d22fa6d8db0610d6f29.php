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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig */
class __TwigTemplate_2ba1ee7aa7a970ab95ae8f84bd8b3be1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'combination_images_choice_widget' => [$this, 'block_combination_images_choice_widget'],
            'combination_manager_widget' => [$this, 'block_combination_manager_widget'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_combination_images_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_images_choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_images_choice_widget"));

        // line 28
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 28), "")) : ("")) . " combination-images-selector"))]);
        // line 29
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 31
            echo "      <label class=\"combination-image-choice";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 31), "checked", [], "any", false, false, false, 31)) {
                echo " selected";
            }
            echo "\">
        <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 32), "attr", [], "any", false, false, false, 32), "data-image-url", [], "array", false, false, false, 32), "html", null, true);
            echo "\" />";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,             // line 34
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 34), "")) : ("")), "translation_domain" =>             // line 35
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 35, $this->source); })())]);
            // line 37
            echo "</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_combination_manager_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_manager_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combination_manager_widget"));

        // line 43
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 45
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/loading_state.html.twig");
        echo "

    ";
        // line 48
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig");
        echo "

    ";
        // line 51
        echo "    <div id=\"product_combinations_generator\"
         data-is-multi-store-active=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["isMultiStoreActive"]) || array_key_exists("isMultiStoreActive", $context) ? $context["isMultiStoreActive"] : (function () { throw new RuntimeError('Variable "isMultiStoreActive" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "\"
         data-translations=\"";
        // line 53
        echo twig_escape_filter($this->env, json_encode(["generator.open" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open combinations generator", [], "Admin.Catalog.Feature"), "generator.success" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Successfully generated {combinationsNb} combinations.", [], "Admin.Catalog.Feature"), "generator.action" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations|Generate combination|Generate {combinationsNb} combinations", [], "Admin.Catalog.Feature"), "generator.select-all" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all values ({valuesNb})", [], "Admin.Catalog.Feature"), "search.placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for attributes...", [], "Admin.Catalog.Feature"), "modal.title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations", [], "Admin.Catalog.Feature"), "modal.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "label.apply-to-all-shops" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations for all stores", [], "Admin.Global")]), "html", null, true);
        // line 62
        echo "\"
    ></div>

    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Sell\\Catalog\\Product\\Combination:paginatedList", ["productId" =>         // line 66
(isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 66, $this->source); })())]));
        // line 67
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 67,  153 => 66,  152 => 65,  147 => 62,  145 => 53,  141 => 52,  138 => 51,  132 => 48,  126 => 45,  121 => 43,  111 => 42,  100 => 39,  93 => 37,  91 => 35,  90 => 34,  89 => 33,  86 => 32,  79 => 31,  75 => 30,  71 => 29,  69 => 28,  59 => 27,  36 => 25,);
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
{% extends '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{% block combination_images_choice_widget %}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' combination-images-selector')|trim }) -%}
  <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
      <label class=\"combination-image-choice{% if child.vars.checked %} selected{% endif %}\">
        <img src=\"{{ child.vars.attr['data-image-url'] }}\" />
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(''),
          translation_domain: choice_translation_domain,
        }) -}}
      </label>
    {% endfor -%}
  </div>
{% endblock %}

{%- block combination_manager_widget -%}
  <div {{ block('widget_attributes') }}>
    {# Preloader for first page load #}
    {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Combination/loading_state.html.twig') }}

    {# Empty state when product has no combinations #}
    {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig') }}

    {# Combination generator in a modal #}
    <div id=\"product_combinations_generator\"
         data-is-multi-store-active=\"{{ isMultiStoreActive }}\"
         data-translations=\"{{ {
           'generator.open': 'Open combinations generator'|trans({}, 'Admin.Catalog.Feature'),
           'generator.success': 'Successfully generated {combinationsNb} combinations.'|trans({}, 'Admin.Catalog.Feature'),
           'generator.action': 'Generate combinations|Generate combination|Generate {combinationsNb} combinations'|trans({}, 'Admin.Catalog.Feature'),
           'generator.select-all': 'Select all values ({valuesNb})'|trans({}, 'Admin.Catalog.Feature'),
           'search.placeholder': 'Search for attributes...'|trans({}, 'Admin.Catalog.Feature'),
           'modal.title': 'Generate combinations'|trans({}, 'Admin.Catalog.Feature'),
           'modal.close': 'Cancel'|trans({}, 'Admin.Actions'),
           'label.apply-to-all-shops': 'Generate combinations for all stores'|trans({}, 'Admin.Global'),
         }|json_encode }}\"
    ></div>

    {{ render(controller('PrestaShopBundle:Admin\\\\Sell\\\\Catalog\\\\Product\\\\Combination:paginatedList', {
      'productId': productId,
    })) }}
  </div>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/FormTheme/combination.html.twig");
    }
}
