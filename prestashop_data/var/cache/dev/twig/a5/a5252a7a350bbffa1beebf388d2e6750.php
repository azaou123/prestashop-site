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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig */
class __TwigTemplate_a33e299b2696723b7dd91c92f20e86ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 27
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig"));

        // line 26
        $context["legacyBaseLayout"] = "light_display_layout.tpl";
        // line 27
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig", 27);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . (isset($context["rtl_suffix"]) || array_key_exists("rtl_suffix", $context) ? $context["rtl_suffix"] : (function () { throw new RuntimeError('Variable "rtl_suffix" does not exist.', 31, $this->source); })())) . ".css")), "html", null, true);
        echo "\" type=\"text/css\"
        media=\"all\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 36
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(        // line 37
(isset($context["bulkCombinationForm"]) || array_key_exists("bulkCombinationForm", $context) ? $context["bulkCombinationForm"] : (function () { throw new RuntimeError('Variable "bulkCombinationForm" does not exist.', 37, $this->source); })()), 'form_start', ["attr" => ["class" => ("combination-page " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
($context["bulkCombinationForm"] ?? null), "vars", [], "any", false, true, false, 39), "attr", [], "any", false, true, false, 39), "class", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["bulkCombinationForm"] ?? null), "vars", [], "any", false, true, false, 39), "attr", [], "any", false, true, false, 39), "class", [], "any", false, false, false, 39), "")) : (""))), "data-bulk-chunk-size" => 10, "data-progress-title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Editing %total% combinations", [], "Admin.Catalog.Feature"), "data-progress-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Editing %done%/%total% combinations", [], "Admin.Catalog.Feature"), "data-close-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Catalog.Feature"), "data-stop-processing" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop processing", [], "Admin.Catalog.Feature"), "data-errors-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_count% errors occurred. You can download the logs for future reference.", [], "Admin.Catalog.Feature"), "data-back-to-processing" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to processing", [], "Admin.Catalog.Feature"), "data-download-error-log" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download error log", [], "Admin.Catalog.Feature"), "data-view-error-log" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View %error_count% error logs", [], "Admin.Catalog.Feature"), "data-view-error-title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error log", [], "Admin.Catalog.Feature")]]);
        // line 51
        echo "
  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["bulkCombinationForm"]) || array_key_exists("bulkCombinationForm", $context) ? $context["bulkCombinationForm"] : (function () { throw new RuntimeError('Variable "bulkCombinationForm" does not exist.', 52, $this->source); })()), 'row');
        echo "
  ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["bulkCombinationForm"]) || array_key_exists("bulkCombinationForm", $context) ? $context["bulkCombinationForm"] : (function () { throw new RuntimeError('Variable "bulkCombinationForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/combination_bulk.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 59,  135 => 57,  125 => 56,  113 => 53,  109 => 52,  106 => 51,  104 => 39,  103 => 37,  101 => 36,  91 => 35,  78 => 31,  73 => 30,  63 => 29,  52 => 27,  50 => 26,  37 => 27,);
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

{% set legacyBaseLayout = 'light_display_layout.tpl' %}
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\"
        media=\"all\">
{% endblock %}

{% block content %}
  {{ form_start(
    bulkCombinationForm,
    {'attr': {
      'class': 'combination-page ' ~ bulkCombinationForm.vars.attr.class|default(''),
      'data-bulk-chunk-size': 10,
      'data-progress-title': 'Editing %total% combinations'|trans({}, 'Admin.Catalog.Feature'),
      'data-progress-message': 'Editing %done%/%total% combinations'|trans({}, 'Admin.Catalog.Feature'),
      'data-close-label': 'Close'|trans({}, 'Admin.Catalog.Feature'),
      'data-stop-processing': 'Stop processing'|trans({}, 'Admin.Catalog.Feature'),
      'data-errors-message': '%error_count% errors occurred. You can download the logs for future reference.'|trans({}, 'Admin.Catalog.Feature'),
      'data-back-to-processing': 'Back to processing'|trans({}, 'Admin.Catalog.Feature'),
      'data-download-error-log': 'Download error log'|trans({}, 'Admin.Catalog.Feature'),
      'data-view-error-log': 'View %error_count% error logs'|trans({}, 'Admin.Catalog.Feature'),
      'data-view-error-title': 'Error log'|trans({}, 'Admin.Catalog.Feature'),
    }}
  )}}
  {{ form_row(bulkCombinationForm) }}
  {{ form_end(bulkCombinationForm) }}
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/combination_bulk.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/bulk.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/bulk.html.twig");
    }
}
