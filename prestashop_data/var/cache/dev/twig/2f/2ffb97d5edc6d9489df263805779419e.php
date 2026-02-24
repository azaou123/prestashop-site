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

/* @PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig */
class __TwigTemplate_0b16f1bd0e9c11ac82a664d8ac222cd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"row\">
  <div class=\"col-md-4\">
    <div class=\"card\">
      <h3 class=\"card-header\">
          ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of MySQL Tables", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-group\">
          <select class=\"form-control js-db-tables-select\"
                  title=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of MySQL Tables", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\"
                  size=\"10\"
          >
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dbTableNames"]) || array_key_exists("dbTableNames", $context) ? $context["dbTableNames"] : (function () { throw new RuntimeError('Variable "dbTableNames" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tableName"]) {
            // line 41
            echo "              <option value=\"";
            echo twig_escape_filter($this->env, $context["tableName"], "html", null, true);
            echo "\"
                      data-table-columns-url=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sql_requests_table_columns", ["mySqlTableName" => $context["tableName"]]), "html", null, true);
            echo "\"
              >
                ";
            // line 44
            echo twig_escape_filter($this->env, $context["tableName"], "html", null, true);
            echo "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tableName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </select>
        </div>

        <button type=\"button\"
                class=\"btn btn-sm btn-outline-secondary js-add-db-table-to-query-btn\"
                data-choose-table-message=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please choose a table.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\"
        >
          <i class=\"material-icons\">add_circle</i> ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add table name to SQL query", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
  <div class=\"col-md-8\">
    <div class=\"card\">
      <h3 class=\"card-header\">
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of attributes for this MySQL table", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <table class=\"table js-table-columns d-none\" data-action-btn=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add attribute to SQL query", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "\">
          <thead>
            <tr>
              <th>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attribute", [], "Admin.Global"), "html", null, true);
        echo "</th>
              <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Global"), "html", null, true);
        echo "</th>
              <th class=\"text-center\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Action", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <div class=\"alert alert-warning js-table-alert\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please choose a MySQL table", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</p>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 77,  133 => 70,  129 => 69,  125 => 68,  119 => 65,  113 => 62,  102 => 54,  97 => 52,  90 => 47,  81 => 44,  76 => 42,  71 => 41,  67 => 40,  61 => 37,  53 => 32,  46 => 27,  43 => 25,);
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

{% trans_default_domain \"Admin.Advparameters.Feature\" %}

<div class=\"row\">
  <div class=\"col-md-4\">
    <div class=\"card\">
      <h3 class=\"card-header\">
          {{ 'List of MySQL Tables'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-group\">
          <select class=\"form-control js-db-tables-select\"
                  title=\"{{ 'List of MySQL Tables'|trans }}\"
                  size=\"10\"
          >
            {% for tableName in dbTableNames %}
              <option value=\"{{ tableName }}\"
                      data-table-columns-url=\"{{ path('admin_sql_requests_table_columns', {'mySqlTableName': tableName}) }}\"
              >
                {{ tableName }}
              </option>
            {% endfor %}
          </select>
        </div>

        <button type=\"button\"
                class=\"btn btn-sm btn-outline-secondary js-add-db-table-to-query-btn\"
                data-choose-table-message=\"{{ 'Please choose a table.'|trans }}\"
        >
          <i class=\"material-icons\">add_circle</i> {{ 'Add table name to SQL query'|trans }}
        </button>
      </div>
    </div>
  </div>
  <div class=\"col-md-8\">
    <div class=\"card\">
      <h3 class=\"card-header\">
          {{ 'List of attributes for this MySQL table'|trans }}
      </h3>
      <div class=\"card-body\">
        <table class=\"table js-table-columns d-none\" data-action-btn=\"{{ 'Add attribute to SQL query'|trans }}\">
          <thead>
            <tr>
              <th>{{ 'Attribute'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Type'|trans({}, 'Admin.Global') }}</th>
              <th class=\"text-center\">{{ 'Action'|trans }}</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
        <div class=\"alert alert-warning js-table-alert\" role=\"alert\">
          <p class=\"alert-text\">{{ 'Please choose a MySQL table'|trans({}, 'Admin.Advparameters.Notification') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/RequestSql/Blocks/db_tables_panel.html.twig");
    }
}
