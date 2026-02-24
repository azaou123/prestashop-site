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

/* @PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig */
class __TwigTemplate_fd97ffaa7d8d2154d1213b28d28f5553 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'stable_feature_flag_form' => [$this, 'block_stable_feature_flag_form'],
            'beta_feature_flag_form' => [$this, 'block_beta_feature_flag_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", 28)->display($context);
        // line 29
        echo "
  ";
        // line 31
        echo "  ";
        if ((isset($context["stableFeatureFlagsForm"]) || array_key_exists("stableFeatureFlagsForm", $context) ? $context["stableFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "stableFeatureFlagsForm" does not exist.', 31, $this->source); })())) {
            // line 32
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["stableFeatureFlagsForm"]) || array_key_exists("stableFeatureFlagsForm", $context) ? $context["stableFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "stableFeatureFlagsForm" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
            echo "
    ";
            // line 33
            $this->displayBlock('stable_feature_flag_form', $context, $blocks);
            // line 55
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["stableFeatureFlagsForm"]) || array_key_exists("stableFeatureFlagsForm", $context) ? $context["stableFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "stableFeatureFlagsForm" does not exist.', 55, $this->source); })()), 'form_end');
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 59
        echo "  ";
        if ((isset($context["betaFeatureFlagsForm"]) || array_key_exists("betaFeatureFlagsForm", $context) ? $context["betaFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "betaFeatureFlagsForm" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["betaFeatureFlagsForm"]) || array_key_exists("betaFeatureFlagsForm", $context) ? $context["betaFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "betaFeatureFlagsForm" does not exist.', 60, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
            echo "
    ";
            // line 61
            $this->displayBlock('beta_feature_flag_form', $context, $blocks);
            // line 93
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["betaFeatureFlagsForm"]) || array_key_exists("betaFeatureFlagsForm", $context) ? $context["betaFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "betaFeatureFlagsForm" does not exist.', 93, $this->source); })()), 'form_end');
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_stable_feature_flag_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stable_feature_flag_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stable_feature_flag_form"));

        // line 34
        echo "      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div class=\"alert alert-info alert-experimental\" role=\"alert\">
              ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New features are available. Feel free to try them out!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
            </div>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["stableFeatureFlagsForm"]) || array_key_exists("stableFeatureFlagsForm", $context) ? $context["stableFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "stableFeatureFlagsForm" does not exist.', 45, $this->source); })()), "feature_flags", [], "any", false, false, false, 45), 'widget');
        echo "
          </div>
        </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["stableFeatureFlagsForm"]) || array_key_exists("stableFeatureFlagsForm", $context) ? $context["stableFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "stableFeatureFlagsForm" does not exist.', 50, $this->source); })()), "submit", [], "any", false, false, false, 50), 'widget');
        echo "
            </div>
          </div>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_beta_feature_flag_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beta_feature_flag_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "beta_feature_flag_form"));

        // line 62
        echo "      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Experimental features", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div class=\"alert medium-alert alert-warning\" role=\"alert\">
              ";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Testing a feature before its official release can be exciting. However, you must be aware of the potential risks of such experiments:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
              <ul>
                <li>";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Experimental features are still under development. Enabling them could therefore have unintended consequences and cause data loss.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
                <li>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In any case, you should never experiment in production.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
              </ul>
            </div>
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["betaFeatureFlagsForm"]) || array_key_exists("betaFeatureFlagsForm", $context) ? $context["betaFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "betaFeatureFlagsForm" does not exist.', 77, $this->source); })()), "feature_flags", [], "any", false, false, false, 77), 'widget');
        echo "
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            ";
        // line 82
        $context["widgetVars"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["betaFeatureFlagsForm"]) || array_key_exists("betaFeatureFlagsForm", $context) ? $context["betaFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "betaFeatureFlagsForm" does not exist.', 82, $this->source); })()), "submit", [], "any", false, false, false, 82), "vars", [], "any", false, false, false, 82), ["attr" => ["data-modal-title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to enable this experimental feature?", [], "Admin.Advparameters.Notification"), "data-modal-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to enable a feature that is not stable yet. This should only be done in a test environment or in full knowledge of the potential risks.", [], "Admin.Advparameters.Notification"), "data-modal-apply" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable", [], "Admin.Actions"), "data-modal-cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions")]]);
        // line 88
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["betaFeatureFlagsForm"]) || array_key_exists("betaFeatureFlagsForm", $context) ? $context["betaFeatureFlagsForm"] : (function () { throw new RuntimeError('Variable "betaFeatureFlagsForm" does not exist.', 88, $this->source); })()), "submit", [], "any", false, false, false, 88), 'widget', (isset($context["widgetVars"]) || array_key_exists("widgetVars", $context) ? $context["widgetVars"] : (function () { throw new RuntimeError('Variable "widgetVars" does not exist.', 88, $this->source); })()));
        echo "
          </div>
        </div>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/feature_flag.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 100,  247 => 98,  237 => 97,  221 => 88,  219 => 82,  211 => 77,  205 => 74,  201 => 73,  196 => 71,  187 => 65,  182 => 62,  172 => 61,  157 => 50,  149 => 45,  144 => 43,  135 => 37,  130 => 34,  120 => 33,  106 => 93,  104 => 61,  99 => 60,  96 => 59,  93 => 57,  87 => 55,  85 => 33,  80 => 32,  77 => 31,  74 => 29,  71 => 28,  61 => 27,  38 => 25,);
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
  {% include '@PrestaShop/Admin/Common/multistore-infotip.html.twig' %}

  {# Stable feature flags form #}
  {% if stableFeatureFlagsForm %}
    {{ form_start(stableFeatureFlagsForm, {attr : {class: 'form'} }) }}
    {% block stable_feature_flag_form %}
      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          {{ 'New features'|trans({}, 'Admin.Advparameters.Feature') }}
        </h3>

        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div class=\"alert alert-info alert-experimental\" role=\"alert\">
              {{ 'New features are available. Feel free to try them out!'|trans({}, 'Admin.Advparameters.Notification') }}
            </div>
            {{ form_widget(stableFeatureFlagsForm.feature_flags) }}
          </div>
        </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              {{ form_widget(stableFeatureFlagsForm.submit) }}
            </div>
          </div>
      </div>
    {% endblock %}
    {{ form_end(stableFeatureFlagsForm) }}
  {% endif %}

  {# Beta feature flags form #}
  {% if betaFeatureFlagsForm %}
    {{ form_start(betaFeatureFlagsForm, {attr : {class: 'form'} }) }}
    {% block beta_feature_flag_form %}
      <div class=\"card\" id=\"configuration_fieldset_general\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">settings</i>
          {{ 'Experimental features'|trans({}, 'Admin.Advparameters.Feature') }}
        </h3>

        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div class=\"alert medium-alert alert-warning\" role=\"alert\">
              {{ 'Testing a feature before its official release can be exciting. However, you must be aware of the potential risks of such experiments:'|trans({}, 'Admin.Advparameters.Notification') }}
              <ul>
                <li>{{ 'Experimental features are still under development. Enabling them could therefore have unintended consequences and cause data loss.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
                <li>{{ 'In any case, you should never experiment in production.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
              </ul>
            </div>
            {{ form_widget(betaFeatureFlagsForm.feature_flags) }}
          </div>
        </div>
        <div class=\"card-footer\">
          <div class=\"d-flex justify-content-end\">
            {% set widgetVars = betaFeatureFlagsForm.submit.vars|merge({'attr': {
              'data-modal-title': 'Are you sure you want to enable this experimental feature?'|trans({}, 'Admin.Advparameters.Notification'),
              'data-modal-message': 'You are about to enable a feature that is not stable yet. This should only be done in a test environment or in full knowledge of the potential risks.'|trans({}, 'Admin.Advparameters.Notification'),
              'data-modal-apply': 'Enable'|trans({}, 'Admin.Actions'),
              'data-modal-cancel': 'Cancel'|trans({}, 'Admin.Actions'),
            }}) %}
            {{ form_widget(betaFeatureFlagsForm.submit, widgetVars) }}
          </div>
        </div>
      </div>
    {% endblock %}
    {{ form_end(betaFeatureFlagsForm) }}
  {% endif %}
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/feature_flag.bundle.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/FeatureFlag/index.html.twig");
    }
}
