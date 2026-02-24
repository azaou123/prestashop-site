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

/* @PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig */
class __TwigTemplate_3a0bb6aa605af76a5aa6d1757457a60f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_form_rest' => [$this, 'block_meta_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
  <div class=\"card\">
    <div class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta tags", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
    </div>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 35, $this->source); })()), 'errors');
        echo "

        ";
        // line 37
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 37, $this->source); })()), "page_name", [], "any", false, false, false, 37), ["attr" => ["class" => "js-meta-page-name", "data-toggle" => "select2", "data-minimumResultsForSearch" => "7"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page name", [], "Admin.Shopparameters.Feature"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name of the related page.", [], "Admin.Shopparameters.Help")]], 37, $context, $this->getSourceContext());
        // line 46
        echo "

        ";
        // line 48
        ob_start();
        // line 49
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title of this page.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 50
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . "  <>={}"), "html", null, true);
        echo "
        ";
        $context["pageTitleHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
        ";
        // line 53
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 53, $this->source); })()), "page_title", [], "any", false, false, false, 53), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page title", [], "Admin.Shopparameters.Feature"), "help" =>         // line 55
(isset($context["pageTitleHelpLabel"]) || array_key_exists("pageTitleHelpLabel", $context) ? $context["pageTitleHelpLabel"] : (function () { throw new RuntimeError('Variable "pageTitleHelpLabel" does not exist.', 55, $this->source); })())]], 53, $context, $this->getSourceContext());
        // line 56
        echo "

        ";
        // line 58
        ob_start();
        // line 59
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A short description of your shop.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 60
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaDescriptionHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 62
        echo "
        ";
        // line 63
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 63, $this->source); })()), "meta_description", [], "any", false, false, false, 63), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description", [], "Admin.Global"), "help" =>         // line 65
(isset($context["metaDescriptionHelpLabel"]) || array_key_exists("metaDescriptionHelpLabel", $context) ? $context["metaDescriptionHelpLabel"] : (function () { throw new RuntimeError('Variable "metaDescriptionHelpLabel" does not exist.', 65, $this->source); })())]], 63, $context, $this->getSourceContext());
        // line 66
        echo "

        ";
        // line 68
        ob_start();
        // line 69
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of keywords for search engines.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 71
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Shopparameters.Help") . " <>={}"), "html", null, true);
        echo "
        ";
        $context["metaKeywordsHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        echo "
        ";
        // line 74
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 74, $this->source); })()), "meta_keywords", [], "any", false, false, false, 74), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 76
(isset($context["metaKeywordsHelpLabel"]) || array_key_exists("metaKeywordsHelpLabel", $context) ? $context["metaKeywordsHelpLabel"] : (function () { throw new RuntimeError('Variable "metaKeywordsHelpLabel" does not exist.', 76, $this->source); })())]], 74, $context, $this->getSourceContext());
        // line 77
        echo "

        ";
        // line 79
        ob_start();
        // line 80
        echo "          ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For instance, \"contacts\" for http://example.com/shop/contacts to redirect to http://example.com/shop/contact-form.php", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
          ";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Only letters and hyphens are allowed.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        $context["rewriteUrlHelpLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 83
        echo "
        ";
        // line 84
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 84, $this->source); })()), "url_rewrite", [], "any", false, false, false, 84), ["attr" => ["class" => "js-url-rewrite"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rewritten URL", [], "Admin.Shopparameters.Feature"), "help" =>         // line 86
(isset($context["rewriteUrlHelpLabel"]) || array_key_exists("rewriteUrlHelpLabel", $context) ? $context["rewriteUrlHelpLabel"] : (function () { throw new RuntimeError('Variable "rewriteUrlHelpLabel" does not exist.', 86, $this->source); })())]], 84, $context, $this->getSourceContext());
        // line 87
        echo "

        ";
        // line 89
        $this->displayBlock('meta_form_rest', $context, $blocks);
        // line 92
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_metas_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 105
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 105, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 89
    public function block_meta_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "meta_form_rest"));

        // line 90
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["metaForm"]) || array_key_exists("metaForm", $context) ? $context["metaForm"] : (function () { throw new RuntimeError('Variable "metaForm" does not exist.', 90, $this->source); })()), 'rest');
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 90,  206 => 89,  194 => 105,  187 => 101,  180 => 97,  176 => 96,  170 => 92,  168 => 89,  164 => 87,  162 => 86,  161 => 84,  158 => 83,  153 => 81,  148 => 80,  146 => 79,  142 => 77,  140 => 76,  139 => 74,  136 => 73,  131 => 71,  127 => 70,  122 => 69,  120 => 68,  116 => 66,  114 => 65,  113 => 63,  110 => 62,  105 => 60,  100 => 59,  98 => 58,  94 => 56,  92 => 55,  91 => 53,  88 => 52,  83 => 50,  78 => 49,  76 => 48,  72 => 46,  70 => 37,  65 => 35,  58 => 31,  52 => 28,  49 => 27,  47 => 26,  44 => 25,);
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

{{ form_start(metaForm) }}
  <div class=\"card\">
    <div class=\"card-header\">
      {{ 'Meta tags'|trans({}, 'Admin.Shopparameters.Feature') }}
    </div>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        {{ form_errors(metaForm) }}

        {{ ps.form_group_row(metaForm.page_name, {
          'attr': {
            'class': 'js-meta-page-name',
            'data-toggle': 'select2',
            'data-minimumResultsForSearch': '7'
          }
        }, {
          'label': 'Page name'|trans({}, 'Admin.Shopparameters.Feature'),
          'help': 'Name of the related page.'|trans({}, 'Admin.Shopparameters.Help')
        }) }}

        {% set pageTitleHelpLabel %}
          {{ 'Title of this page.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Invalid characters:'|trans({}, 'Admin.Shopparameters.Help') ~ '  <>={}'}}
        {% endset %}

        {{ ps.form_group_row(metaForm.page_title, {}, {
          'label': 'Page title'|trans({}, 'Admin.Shopparameters.Feature'),
          'help': pageTitleHelpLabel
        }) }}

        {% set metaDescriptionHelpLabel %}
          {{ 'A short description of your shop.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Invalid characters:'|trans({}, 'Admin.Shopparameters.Help') ~ ' <>={}' }}
        {% endset %}

        {{ ps.form_group_row(metaForm.meta_description, {}, {
          'label': 'Meta description'|trans({}, 'Admin.Global'),
          'help': metaDescriptionHelpLabel
        }) }}

        {% set metaKeywordsHelpLabel %}
          {{ 'List of keywords for search engines.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'To add tags, click in the field, write something, and then press the \"Enter\" key.'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Invalid characters:'|trans({}, 'Admin.Shopparameters.Help') ~ ' <>={}' }}
        {% endset %}

        {{ ps.form_group_row(metaForm.meta_keywords, {}, {
          'label': 'Meta keywords'|trans({}, 'Admin.Global'),
          'help': metaKeywordsHelpLabel
        }) }}

        {% set rewriteUrlHelpLabel %}
          {{ 'For instance, \"contacts\" for http://example.com/shop/contacts to redirect to http://example.com/shop/contact-form.php'|trans({}, 'Admin.Shopparameters.Help') }}
          {{ 'Only letters and hyphens are allowed.'|trans({}, 'Admin.Shopparameters.Help') }}
        {% endset %}

        {{ ps.form_group_row(metaForm.url_rewrite, {'attr': {'class': 'js-url-rewrite'}}, {
          'label': 'Rewritten URL'|trans({}, 'Admin.Shopparameters.Feature'),
          'help': rewriteUrlHelpLabel
        }) }}

        {% block meta_form_rest %}
          {{ form_rest(metaForm) }}
        {% endblock %}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-inline-flex\">
        <a href=\"{{ path('admin_metas_index') }}\" class=\"btn btn-outline-secondary\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
      </div>
      <div class=\"d-inline-flex float-right\">
        <button class=\"btn btn-primary\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{{ form_end(metaForm) }}
", "@PrestaShop/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/TrafficSeo/Meta/Blocks/form.html.twig");
    }
}
