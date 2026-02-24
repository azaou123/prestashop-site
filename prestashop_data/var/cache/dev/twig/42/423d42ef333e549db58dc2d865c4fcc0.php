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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig */
class __TwigTemplate_fc5c6623acc4906c0e3fd809507f0403 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'request_sql_view_block' => [$this, 'block_request_sql_view_block'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "  ";
        $this->displayBlock('request_sql_view_block', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_request_sql_view_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "request_sql_view_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "request_sql_view_block"));

        // line 31
        echo "    <div class=\"card\">
      <div class=\"card-header\">
        <h3 id=\"card-title\">
          <i class=\"material-icons\">list</i>
          ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query result", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          (";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sqlRequestResult"]) || array_key_exists("sqlRequestResult", $context) ? $context["sqlRequestResult"] : (function () { throw new RuntimeError('Variable "sqlRequestResult" does not exist.', 36, $this->source); })()), "rows", [], "any", false, false, false, 36)), "html", null, true);
        echo ")
        </h3>
      </div>
      <div class=\"card-body\">
        ";
        // line 40
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["sqlRequestResult"]) || array_key_exists("sqlRequestResult", $context) ? $context["sqlRequestResult"] : (function () { throw new RuntimeError('Variable "sqlRequestResult" does not exist.', 40, $this->source); })()), "rows", [], "any", false, false, false, 40))) {
            // line 41
            echo "          <div class=\"table-responsive\">
            <table id=\"grid-table\" class=\"table\">
              <thead>
                <tr>
                  ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sqlRequestResult"]) || array_key_exists("sqlRequestResult", $context) ? $context["sqlRequestResult"] : (function () { throw new RuntimeError('Variable "sqlRequestResult" does not exist.', 45, $this->source); })()), "columns", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 46
                echo "                    <th class=\"column-";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "-head\">";
                echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                echo "</th>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                </tr>
              </thead>
              <tbody>
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sqlRequestResult"]) || array_key_exists("sqlRequestResult", $context) ? $context["sqlRequestResult"] : (function () { throw new RuntimeError('Variable "sqlRequestResult" does not exist.', 51, $this->source); })()), "rows", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 52
                echo "                  <tr>
                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sqlRequestResult"]) || array_key_exists("sqlRequestResult", $context) ? $context["sqlRequestResult"] : (function () { throw new RuntimeError('Variable "sqlRequestResult" does not exist.', 53, $this->source); })()), "columns", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 54
                    echo "                      ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["requestSqlView"] ?? null), "attributes", [], "any", false, true, false, 54), $context["column"], [], "array", true, true, false, 54)) {
                        // line 55
                        echo "                        <td class=\"grid-";
                        echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                        echo "-value\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requestSqlView"]) || array_key_exists("requestSqlView", $context) ? $context["requestSqlView"] : (function () { throw new RuntimeError('Variable "requestSqlView" does not exist.', 55, $this->source); })()), "attributes", [], "any", false, false, false, 55), $context["column"], [], "array", false, false, false, 55), "html", null, true);
                        echo "</td>
                      ";
                    } else {
                        // line 57
                        echo "                        <td class=\"grid-";
                        echo twig_escape_filter($this->env, $context["column"], "html", null, true);
                        echo "-value\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], $context["column"], [], "array", false, false, false, 57), "html", null, true);
                        echo "</td>
                      ";
                    }
                    // line 59
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "              </tbody>
            </table>
          </div>
        ";
        } else {
            // line 66
            echo "          <div class=\"alert alert-warning\">
            <p class=\"alert-text\">
              ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This SQL query has no result.", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "
            </p>
          </div>
        ";
        }
        // line 72
        echo "      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 72,  187 => 68,  183 => 66,  177 => 62,  170 => 60,  164 => 59,  156 => 57,  148 => 55,  145 => 54,  141 => 53,  138 => 52,  134 => 51,  129 => 48,  118 => 46,  114 => 45,  108 => 41,  106 => 40,  99 => 36,  95 => 35,  89 => 31,  69 => 30,  59 => 29,  36 => 26,);
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

{% block content %}
  {% block request_sql_view_block %}
    <div class=\"card\">
      <div class=\"card-header\">
        <h3 id=\"card-title\">
          <i class=\"material-icons\">list</i>
          {{ 'SQL query result'|trans }}
          ({{ sqlRequestResult.rows|length }})
        </h3>
      </div>
      <div class=\"card-body\">
        {% if sqlRequestResult.rows is not empty %}
          <div class=\"table-responsive\">
            <table id=\"grid-table\" class=\"table\">
              <thead>
                <tr>
                  {% for column in sqlRequestResult.columns %}
                    <th class=\"column-{{ column }}-head\">{{ column }}</th>
                  {% endfor %}
                </tr>
              </thead>
              <tbody>
                {% for row in sqlRequestResult.rows %}
                  <tr>
                    {% for column in sqlRequestResult.columns %}
                      {% if requestSqlView.attributes[column] is defined %}
                        <td class=\"grid-{{ column }}-value\">{{ requestSqlView.attributes[column] }}</td>
                      {% else %}
                        <td class=\"grid-{{ column }}-value\">{{ row[column] }}</td>
                      {% endif %}
                    {% endfor %}
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        {% else %}
          <div class=\"alert alert-warning\">
            <p class=\"alert-text\">
              {{ 'This SQL query has no result.'|trans({}, 'Admin.Advparameters.Notification') }}
            </p>
          </div>
        {% endif %}
      </div>
    </div>
  {% endblock %}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/view.html.twig");
    }
}
