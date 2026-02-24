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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig */
class __TwigTemplate_d26123a6e666aeabab3008cf87606893 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'webservice_list_notifications' => [$this, 'block_webservice_list_notifications'],
            'webservice_api_status' => [$this, 'block_webservice_api_status'],
            'webservice_configuration_form_rest' => [$this, 'block_webservice_configuration_form_rest'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig"));

        // line 29
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice", [], "Admin.Navigation.Menu");
        // line 30
        $context["enableSidebar"] = true;
        // line 31
        $context["layoutHeaderToolbarBtn"] = ["add" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_webservice_keys_create"), "desc" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new webservice key", [], "Admin.Advparameters.Feature"), "icon" => "add_circle_outline"]];
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "
  ";
        // line 41
        $this->displayBlock('webservice_list_notifications', $context, $blocks);
        // line 50
        echo "
  ";
        // line 51
        $this->displayBlock('webservice_api_status', $context, $blocks);
        // line 80
        echo "
  ";
        // line 81
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 81, $this->source); })())]);
        echo "

  ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["webserviceConfigurationForm"]) || array_key_exists("webserviceConfigurationForm", $context) ? $context["webserviceConfigurationForm"] : (function () { throw new RuntimeError('Variable "webserviceConfigurationForm" does not exist.', 83, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_webservice_save_settings"), "attr" => ["class" => "form", "id" => "configuration_form"]]);
        echo "

  ";
        // line 85
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig");
        echo "

  ";
        // line 87
        $this->displayBlock('webservice_configuration_form_rest', $context, $blocks);
        // line 90
        echo "
  ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["webserviceConfigurationForm"]) || array_key_exists("webserviceConfigurationForm", $context) ? $context["webserviceConfigurationForm"] : (function () { throw new RuntimeError('Variable "webserviceConfigurationForm" does not exist.', 91, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_webservice_list_notifications($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_list_notifications"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_list_notifications"));

        // line 42
        echo "    ";
        if ( !twig_test_empty((isset($context["configurationWarnings"]) || array_key_exists("configurationWarnings", $context) ? $context["configurationWarnings"] : (function () { throw new RuntimeError('Variable "configurationWarnings" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "      <div class=\"alert alert-warning\" role=\"alert\">
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["configurationWarnings"]) || array_key_exists("configurationWarnings", $context) ? $context["configurationWarnings"] : (function () { throw new RuntimeError('Variable "configurationWarnings" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 45
                echo "          <p class=\"alert-text\">";
                echo twig_escape_filter($this->env, $context["warning"], "html", null, true);
                echo "</p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "      </div>
    ";
        }
        // line 49
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_webservice_api_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_api_status"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_api_status"));

        // line 52
        echo "    ";
        $context["devdocUrl"] = "https://devdocs.prestashop.com/8/webservice/";
        // line 53
        echo "
    ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 54, $this->source); })()), "isEnabled", [], "any", false, false, false, 54) == true)) {
            // line 55
            echo "      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">info_outline</i> ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice status", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
        </h3>
        <div class=\"card-body\">
          <p>
            ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Webservice is enabled. Main entry point is", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 62, $this->source); })()), "endpoint", [], "any", false, false, false, 62), "html", null, true);
            echo "\" target=\"_blank\">
              ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 63, $this->source); })()), "endpoint", [], "any", false, false, false, 63), "html", null, true);
            echo "
            </a>
          </p>
          ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, (isset($context["webserviceStatus"]) || array_key_exists("webserviceStatus", $context) ? $context["webserviceStatus"] : (function () { throw new RuntimeError('Variable "webserviceStatus" does not exist.', 66, $this->source); })()), "isFunctional", [], "any", false, false, false, 66) == false)) {
                // line 67
                echo "            <p>
              ";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It seems that the webservice endpoint is not functional. If you are using httpd/apache2, you need to enable URL rewriting on your server.", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
            </p>
          ";
            }
            // line 71
            echo "          <p>
            ";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read the [1]developer documentation[/1].", ["[1]" => (("<a href=\"" .             // line 73
(isset($context["devdocUrl"]) || array_key_exists("devdocUrl", $context) ? $context["devdocUrl"] : (function () { throw new RuntimeError('Variable "devdocUrl" does not exist.', 73, $this->source); })())) . "\" target=\"_blank\">"), "[/1]" => "</a>"], "Admin.Advparameters.Feature");
            // line 74
            echo "
          </p>
        </div>
      </div>
    ";
        }
        // line 79
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_webservice_configuration_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_configuration_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "webservice_configuration_form_rest"));

        // line 88
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["webserviceConfigurationForm"]) || array_key_exists("webserviceConfigurationForm", $context) ? $context["webserviceConfigurationForm"] : (function () { throw new RuntimeError('Variable "webserviceConfigurationForm" does not exist.', 88, $this->source); })()), 'rest');
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/webservice.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 99,  284 => 98,  278 => 96,  268 => 95,  255 => 88,  245 => 87,  235 => 79,  228 => 74,  226 => 73,  225 => 72,  222 => 71,  216 => 68,  213 => 67,  211 => 66,  205 => 63,  201 => 62,  197 => 61,  190 => 57,  186 => 55,  184 => 54,  181 => 53,  178 => 52,  168 => 51,  158 => 49,  154 => 47,  145 => 45,  141 => 44,  138 => 43,  135 => 42,  125 => 41,  112 => 91,  109 => 90,  107 => 87,  102 => 85,  97 => 83,  92 => 81,  89 => 80,  87 => 51,  84 => 50,  82 => 41,  79 => 40,  69 => 39,  58 => 26,  56 => 31,  54 => 30,  52 => 29,  39 => 26,);
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
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% set layoutTitle = 'Webservice'|trans({}, 'Admin.Navigation.Menu') %}
{% set enableSidebar = true %}
{% set layoutHeaderToolbarBtn = {
  'add': {
    'href': path('admin_webservice_keys_create'),
    'desc': 'Add new webservice key'|trans({}, 'Admin.Advparameters.Feature'),
    'icon': 'add_circle_outline'
  }
} %}

{% block content %}

  {% block webservice_list_notifications %}
    {% if configurationWarnings is not empty  %}
      <div class=\"alert alert-warning\" role=\"alert\">
        {% for warning in configurationWarnings %}
          <p class=\"alert-text\">{{ warning }}</p>
        {% endfor %}
      </div>
    {% endif %}
  {% endblock %}

  {% block webservice_api_status %}
    {% set devdocUrl = 'https://devdocs.prestashop.com/8/webservice/' %}

    {% if webserviceStatus.isEnabled == true %}
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">info_outline</i> {{ 'Webservice status'|trans }}
        </h3>
        <div class=\"card-body\">
          <p>
            {{ 'Webservice is enabled. Main entry point is' |trans }}
            <a href=\"{{ webserviceStatus.endpoint }}\" target=\"_blank\">
              {{ webserviceStatus.endpoint }}
            </a>
          </p>
          {% if webserviceStatus.isFunctional == false %}
            <p>
              {{ 'It seems that the webservice endpoint is not functional. If you are using httpd/apache2, you need to enable URL rewriting on your server.'|trans }}
            </p>
          {% endif %}
          <p>
            {{ \"Read the [1]developer documentation[/1].\"|trans({
              '[1]': '<a href=\"'~devdocUrl~'\" target=\"_blank\">', '[/1]': \"</a>\"
            }, 'Admin.Advparameters.Feature')|raw }}
          </p>
        </div>
      </div>
    {% endif %}
  {% endblock %}

  {{ include('@PrestaShop/Admin/Common/Grid/grid_panel.html.twig', {'grid': grid }) }}

  {{ form_start(webserviceConfigurationForm, {'action': path('admin_webservice_save_settings') ,'attr' : {'class': 'form', 'id': 'configuration_form'} }) }}

  {{ include('@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/webservice_settings.html.twig') }}

  {% block webservice_configuration_form_rest %}
    {{ form_rest(webserviceConfigurationForm) }}
  {% endblock %}

  {{ form_end(webserviceConfigurationForm) }}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/webservice.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Webservice/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Webservice/index.html.twig");
    }
}
