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

/* @PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig */
class __TwigTemplate_655ceb069a3719bff20577d90259224d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adaptThemeToRtlLanguagesForm"]) || array_key_exists("adaptThemeToRtlLanguagesForm", $context) ? $context["adaptThemeToRtlLanguagesForm"] : (function () { throw new RuntimeError('Variable "adaptThemeToRtlLanguagesForm" does not exist.', 28, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_themes_adapt_to_rtl_languages")]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adaptation to Right-to-Left languages", [], "Admin.Design.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Be careful! Please check your theme in an RTL language before generating the RTL stylesheet: your theme could be already adapted to RTL.
Once you enable the \"%generate_rtl_label%\" option, any RTL-specific file that you might have added to your theme might be deleted by the created stylesheet.", ["%generate_rtl_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate RTL stylesheet", [], "Admin.Design.Feature")], "Admin.Design.Help"), "html", null, true);
        echo "
        </p>
      </div>

      ";
        // line 41
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["adaptThemeToRtlLanguagesForm"]) || array_key_exists("adaptThemeToRtlLanguagesForm", $context) ? $context["adaptThemeToRtlLanguagesForm"] : (function () { throw new RuntimeError('Variable "adaptThemeToRtlLanguagesForm" does not exist.', 41, $this->source); })()), "theme_to_adapt", [], "any", false, false, false, 41), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Theme to adapt", [], "Admin.Design.Feature")]], 41, $context, $this->getSourceContext());
        // line 43
        echo "

      ";
        // line 45
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["adaptThemeToRtlLanguagesForm"]) || array_key_exists("adaptThemeToRtlLanguagesForm", $context) ? $context["adaptThemeToRtlLanguagesForm"] : (function () { throw new RuntimeError('Variable "adaptThemeToRtlLanguagesForm" does not exist.', 45, $this->source); })()), "generate_rtl_css", [], "any", false, false, false, 45), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate RTL stylesheet", [], "Admin.Design.Feature")]], 45, $context, $this->getSourceContext());
        // line 47
        echo "
    </div>
  </div>

  ";
        // line 51
        if (((isset($context["isMultiShopFeatureUsed"]) || array_key_exists("isMultiShopFeatureUsed", $context) ? $context["isMultiShopFeatureUsed"] : (function () { throw new RuntimeError('Variable "isMultiShopFeatureUsed" does not exist.', 51, $this->source); })()) && (isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "    <hr>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
            // line 55
            echo twig_call_macro($macros["ps"], "macro_multistore_switch", [(isset($context["shopLogosForm"]) || array_key_exists("shopLogosForm", $context) ? $context["shopLogosForm"] : (function () { throw new RuntimeError('Variable "shopLogosForm" does not exist.', 55, $this->source); })()), ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Multistore", [], "Admin.Global")]], 55, $context, $this->getSourceContext());
            // line 57
            echo "
      </div>
    </div>
  ";
        }
        // line 61
        echo "  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["adaptThemeToRtlLanguagesForm"]) || array_key_exists("adaptThemeToRtlLanguagesForm", $context) ? $context["adaptThemeToRtlLanguagesForm"] : (function () { throw new RuntimeError('Variable "adaptThemeToRtlLanguagesForm" does not exist.', 69, $this->source); })()), 'rest');
        echo "
";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["adaptThemeToRtlLanguagesForm"]) || array_key_exists("adaptThemeToRtlLanguagesForm", $context) ? $context["adaptThemeToRtlLanguagesForm"] : (function () { throw new RuntimeError('Variable "adaptThemeToRtlLanguagesForm" does not exist.', 70, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 70,  116 => 69,  108 => 64,  103 => 61,  97 => 57,  95 => 55,  90 => 52,  88 => 51,  82 => 47,  80 => 45,  76 => 43,  74 => 41,  66 => 37,  57 => 31,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{{ form_start(adaptThemeToRtlLanguagesForm, {'action': path('admin_themes_adapt_to_rtl_languages')}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Adaptation to Right-to-Left languages'|trans({}, 'Admin.Design.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\">
        <p class=\"alert-text\">
          {{ 'Be careful! Please check your theme in an RTL language before generating the RTL stylesheet: your theme could be already adapted to RTL.\\nOnce you enable the \"%generate_rtl_label%\" option, any RTL-specific file that you might have added to your theme might be deleted by the created stylesheet.'|trans({'%generate_rtl_label%': 'Generate RTL stylesheet'|trans({}, 'Admin.Design.Feature')}, 'Admin.Design.Help') }}
        </p>
      </div>

      {{ ps.form_group_row(adaptThemeToRtlLanguagesForm.theme_to_adapt, {}, {
        'label': 'Theme to adapt'|trans({}, 'Admin.Design.Feature')
      }) }}

      {{ ps.form_group_row(adaptThemeToRtlLanguagesForm.generate_rtl_css, {}, {
        'label': 'Generate RTL stylesheet'|trans({}, 'Admin.Design.Feature')
      }) }}
    </div>
  </div>

  {% if isMultiShopFeatureUsed and isSingleShopContext %}
    <hr>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        {{ ps.multistore_switch(shopLogosForm, {
          'label': 'Multistore'|trans({}, 'Admin.Global'),
        }) }}
      </div>
    </div>
  {% endif %}
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\">
        {{ 'Save'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  </div>
</div>
{{ form_rest(adaptThemeToRtlLanguagesForm) }}
{{ form_end(adaptThemeToRtlLanguagesForm) }}
", "@PrestaShop/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Theme/Blocks/rtl_configuration.html.twig");
    }
}
