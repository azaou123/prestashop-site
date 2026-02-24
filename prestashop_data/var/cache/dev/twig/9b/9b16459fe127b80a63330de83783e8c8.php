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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/FormTheme/employee_options.html.twig */
class __TwigTemplate_db4f896f36c9029115fd05882c51313d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'employee_options_row' => [$this, 'block_employee_options_row'],
            'form_alert' => [$this, 'block_form_alert'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/FormTheme/employee_options.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/FormTheme/employee_options.html.twig"));

        // line 25
        echo "
";
        // line 27
        $this->displayBlock('employee_options_row', $context, $blocks);
        // line 70
        $this->displayBlock('form_alert', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_employee_options_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_options_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "employee_options_row"));

        // line 28
        ob_start();
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        if (array_key_exists("label_tag_name", $context)) {
            // line 31
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'label');
            echo "
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/FormTheme/employee_options.html.twig", 34)->unwrap();
        // line 35
        echo "    ";
        $context["disabledField"] = false;
        // line 36
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 36), "attr", [], "any", false, true, false, 36), "disabled", [], "any", true, true, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "attr", [], "any", false, false, false, 36), "disabled", [], "any", false, false, false, 36))) {
            // line 37
            echo "      ";
            $context["disabledField"] = true;
            // line 38
            echo "    ";
        }
        // line 39
        echo "
    <div class=\"";
        // line 40
        $this->displayBlock("form_row_class", $context, $blocks);
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 40, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 40, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 40, $this->source); })()))) {
            echo " has-error";
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "visible", [], "any", true, true, false, 40) &&  !twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), "visible", [], "any", false, false, false, 40))) {
            echo " d-none";
        }
        echo "\">
      ";
        // line 41
        $context["multistoreCheckboxName"] = ((isset($context["multistore_field_prefix"]) || array_key_exists("multistore_field_prefix", $context) ? $context["multistore_field_prefix"] : (function () { throw new RuntimeError('Variable "multistore_field_prefix" does not exist.', 41, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41));
        // line 42
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 42), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 42, $this->source); })()), [], "any", true, true, false, 42)) {
            // line 43
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "parent", [], "any", false, false, false, 43), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 43, $this->source); })()), [], "any", false, false, false, 43), 'errors');
            echo "
        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "parent", [], "any", false, false, false, 44), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 44, $this->source); })()), [], "any", false, false, false, 44), 'widget');
            echo "
      ";
        }
        // line 46
        echo "
      ";
        // line 47
        if ( !array_key_exists("label_tag_name", $context)) {
            // line 48
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'label');
            echo "
      ";
        }
        // line 50
        echo "      <div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        if ((isset($context["disabledField"]) || array_key_exists("disabledField", $context) ? $context["disabledField"] : (function () { throw new RuntimeError('Variable "disabledField" does not exist.', 50, $this->source); })())) {
            echo " disabled";
        }
        echo "\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'widget');
        echo "
        ";
        // line 53
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'errors', ["attr" => ["fieldError" => true]]);
        // line 54
        $this->displayBlock("form_alert", $context, $blocks);
        // line 55
        echo "</div>
      ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), [], "any", true, true, false, 56) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "parent", [], "any", false, false, false, 56), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "vars", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "multistore_dropdown", [], "any", false, false, false, 56) != false))) {
            // line 57
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "parent", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "multistore_dropdown", [], "any", false, false, false, 57);
            echo "
      ";
        }
        // line 60
        $this->displayBlock("form_external_link", $context, $blocks);
        // line 61
        echo "</div>
  ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo twig_spaceless($___internal_parse_1_);
        // line 63
        echo "
  ";
        // line 64
        if ((isset($context["column_breaker"]) || array_key_exists("column_breaker", $context) ? $context["column_breaker"] : (function () { throw new RuntimeError('Variable "column_breaker" does not exist.', 64, $this->source); })())) {
            // line 65
            echo "    <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_form_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        // line 71
        if (array_key_exists("alert_message", $context)) {
            // line 72
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["alert_type"]) || array_key_exists("alert_type", $context) ? $context["alert_type"] : (function () { throw new RuntimeError('Variable "alert_type" does not exist.', 72, $this->source); })()), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo " mt-1\" role=\"alert\">
      ";
            // line 73
            if (array_key_exists("alert_title", $context)) {
                // line 74
                echo "        <p class=\"alert-text\">
          ";
                // line 75
                echo (isset($context["alert_title"]) || array_key_exists("alert_title", $context) ? $context["alert_title"] : (function () { throw new RuntimeError('Variable "alert_title" does not exist.', 75, $this->source); })());
                echo "
        </p>
      ";
            } else {
                // line 78
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 78, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 79
                    echo "          <p class=\"alert-text\">
            ";
                    // line 80
                    echo $context["message"];
                    echo "
          </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "      ";
            }
            // line 84
            echo "
      ";
            // line 85
            if (array_key_exists("alert_title", $context)) {
                // line 86
                echo "        <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
                echo "\" style=\"\">
          ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 87, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 88
                    echo "            <p>
              ";
                    // line 89
                    echo $context["message"];
                    echo "
            </p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "        </div>
        <div class=\"read-more-container\">
          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
        </div>
      ";
            }
            // line 99
            echo "    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/FormTheme/employee_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  285 => 99,  278 => 95,  274 => 94,  270 => 92,  261 => 89,  258 => 88,  254 => 87,  249 => 86,  247 => 85,  244 => 84,  241 => 83,  232 => 80,  229 => 79,  224 => 78,  218 => 75,  215 => 74,  213 => 73,  205 => 72,  203 => 71,  193 => 70,  181 => 65,  179 => 64,  176 => 63,  174 => 28,  170 => 61,  168 => 60,  162 => 57,  160 => 56,  157 => 55,  155 => 54,  152 => 53,  148 => 51,  140 => 50,  134 => 48,  132 => 47,  129 => 46,  124 => 44,  119 => 43,  116 => 42,  114 => 41,  103 => 40,  100 => 39,  97 => 38,  94 => 37,  91 => 36,  88 => 35,  86 => 34,  83 => 33,  77 => 31,  74 => 30,  72 => 29,  70 => 28,  60 => 27,  50 => 70,  48 => 27,  45 => 25,);
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

{# Extend form_row template to move the form_alert behind the label #}
{%- block employee_options_row -%}
  {% apply spaceless %}
    {# In horizontal theme when using a title for label it needs to be outside of the row div #}
    {% if label_tag_name is defined %}
      {{ form_label(form) }}
    {% endif %}

    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% set disabledField = false %}
    {% if form.vars.attr.disabled is defined and form.vars.attr.disabled %}
      {% set disabledField = true %}
    {% endif %}

    <div class=\"{{ block('form_row_class') }}{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if (attr.visible is defined and not attr.visible) %} d-none{% endif %}\">
      {% set multistoreCheckboxName = multistore_field_prefix ~ form.vars.name %}
      {% if attribute(form.parent, multistoreCheckboxName) is defined %}
        {{ form_errors(attribute(form.parent, multistoreCheckboxName)) }}
        {{ form_widget(attribute(form.parent, multistoreCheckboxName)) }}
      {% endif %}

      {% if label_tag_name is not defined %}
        {{ form_label(form) }}
      {% endif %}
      <div class=\"{{ block('form_group_class') }}{% if disabledField %} disabled{% endif %}\">
        {{ form_widget(form) }}
        {#  #}
        {{ form_errors(form, {'attr': {'fieldError': true}}) }}
        {{- block('form_alert') -}}
      </div>
      {% if attribute(form.parent, form.vars.name) is defined and attribute(form.parent, form.vars.name).vars.multistore_dropdown != false %}
        {{ attribute(form.parent, form.vars.name).vars.multistore_dropdown | raw }}
      {% endif %}

      {{- block('form_external_link') -}}
    </div>
  {% endapply %}

  {% if column_breaker %}
    <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock employee_options_row -%}

{# Override form_alert template to add a class #}
{%- block form_alert -%}
  {% if alert_message is defined %}
    <div class=\"alert alert-{{ alert_type }}{% if alert_title is defined %} expandable-alert{% endif %} mt-1\" role=\"alert\">
      {% if alert_title is defined %}
        <p class=\"alert-text\">
          {{ alert_title|raw }}
        </p>
      {% else %}
        {% for message in alert_message %}
          <p class=\"alert-text\">
            {{ message|raw }}
          </p>
        {% endfor %}
      {% endif %}

      {% if alert_title is defined %}
        <div class=\"alert-more collapse\" id=\"expandable_{{form.vars.id}}\" style=\"\">
          {% for message in alert_message %}
            <p>
              {{ message|raw }}
            </p>
          {% endfor %}
        </div>
        <div class=\"read-more-container\">
          <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_{{form.vars.id}}\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            {{ 'Read more'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      {% endif %}
    </div>
  {% endif %}
{%- endblock form_alert -%}

", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/FormTheme/employee_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/FormTheme/employee_options.html.twig");
    }
}
