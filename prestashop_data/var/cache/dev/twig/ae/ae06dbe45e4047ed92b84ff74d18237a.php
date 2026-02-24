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

/* @PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig */
class __TwigTemplate_2d94510614be8b21697bf4f0efd85e86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importDataConfigurationForm"]) || array_key_exists("importDataConfigurationForm", $context) ? $context["importDataConfigurationForm"] : (function () { throw new RuntimeError('Variable "importDataConfigurationForm" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "import-data-configuration-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">list</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Match your data", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">

      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please match each column of your source file to one of the destination columns.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </p>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Load a data matching configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importDataConfigurationForm"]) || array_key_exists("importDataConfigurationForm", $context) ? $context["importDataConfigurationForm"] : (function () { throw new RuntimeError('Variable "importDataConfigurationForm" does not exist.', 50, $this->source); })()), "matches", [], "any", false, false, false, 50), 'widget');
        echo "
            </div>
            <div class=\"col\">
              <button class=\"btn btn-outline-primary js-load-import-match\" data-url=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_data_configuration_get");
        echo "\">
                <i class=\"material-icons\">settings</i>
                ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Load", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
              <button class=\"btn btn-outline-primary js-delete-import-match\" data-url=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_data_configuration_delete");
        echo "\">
                <i class=\"material-icons\">delete</i>
                ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save your data matching configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importDataConfigurationForm"]) || array_key_exists("importDataConfigurationForm", $context) ? $context["importDataConfigurationForm"] : (function () { throw new RuntimeError('Variable "importDataConfigurationForm" does not exist.', 72, $this->source); })()), "match_name", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "js-import-match-input", "type" => "button"]]);
        echo "
            </div>
            <div class=\"col\">
              <button class=\"btn btn-outline-primary js-save-import-match\" data-url=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_data_configuration_create");
        echo "\">
                <i class=\"material-icons\">save</i>
                ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rows to skip", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importDataConfigurationForm"]) || array_key_exists("importDataConfigurationForm", $context) ? $context["importDataConfigurationForm"] : (function () { throw new RuntimeError('Variable "importDataConfigurationForm" does not exist.', 88, $this->source); })()), "skip", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "col-md-4 js-rows-skip", "min" => 0]]);
        echo "
          <small class=\"form-text\">";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Indicate how many of the first rows of your file should be skipped when importing the data. For instance set it to 1 if the first row of your file contains headers.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</small>
        </div>
      </div>

      <div class=\"alert alert-warning js-validation-error js-duplicate-columns-warning d-none\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Two columns cannot have the same type of values", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        </p>
      </div>
      <div class=\"alert alert-warning js-validation-error js-missing-column-warning d-none\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This column must be set:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          <span class=\"js-missing-column\">&nbsp;</span>
        </p>
      </div>

      <table class=\"table table-bordered js-import-data-table\" data-required-fields=\"";
        // line 105
        echo twig_escape_filter($this->env, json_encode((isset($context["requiredFields"]) || array_key_exists("requiredFields", $context) ? $context["requiredFields"] : (function () { throw new RuntimeError('Variable "requiredFields" does not exist.', 105, $this->source); })())), "html", null, true);
        echo "\">
        <thead>
          <tr>
            ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["importDataConfigurationForm"]) || array_key_exists("importDataConfigurationForm", $context) ? $context["importDataConfigurationForm"] : (function () { throw new RuntimeError('Variable "importDataConfigurationForm" does not exist.', 108, $this->source); })()), "type_value", [], "any", false, false, false, 108));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["importEntityField"]) {
            // line 109
            echo "              <th class=\"js-entity-field ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 109) > (isset($context["maxVisibleColumns"]) || array_key_exists("maxVisibleColumns", $context) ? $context["maxVisibleColumns"] : (function () { throw new RuntimeError('Variable "maxVisibleColumns" does not exist.', 109, $this->source); })()))) {
                echo " d-none";
            }
            echo "\">
                ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["importEntityField"], 'errors');
            echo "
                ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["importEntityField"], 'widget');
            echo "
              </th>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['importEntityField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "          </tr>
        </thead>
        <tbody>
          ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dataRowCollection"]) || array_key_exists("dataRowCollection", $context) ? $context["dataRowCollection"] : (function () { throw new RuntimeError('Variable "dataRowCollection" does not exist.', 117, $this->source); })()), "rows", [], "any", false, false, false, 117));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 118
            echo "            <tr>
              ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 120
                echo "                <td ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 120) > (isset($context["maxVisibleColumns"]) || array_key_exists("maxVisibleColumns", $context) ? $context["maxVisibleColumns"] : (function () { throw new RuntimeError('Variable "maxVisibleColumns" does not exist.', 120, $this->source); })()))) {
                    echo " class=\"d-none\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cell"], "value", [], "any", false, false, false, 120), "html", null, true);
                echo "</td>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            echo "            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </tbody>
      </table>

      <div class=\"row\">
        <div class=\"col text-left\">
          <button class=\"btn btn-outline-primary js-import-previous-page d-none\" type=\"button\">
            <i class=\"material-icons rtl-flip\">arrow_back</i>
          </button>
        </div>
        <div class=\"col text-right\">
          <button class=\"btn btn-outline-primary js-import-next-page";
        // line 134
        if ( !(isset($context["showPagingArrows"]) || array_key_exists("showPagingArrows", $context) ? $context["showPagingArrows"] : (function () { throw new RuntimeError('Variable "showPagingArrows" does not exist.', 134, $this->source); })())) {
            echo " d-none";
        }
        echo "\" type=\"button\">
            <i class=\"material-icons rtl-flip\">arrow_forward</i>
          </button>
        </div>
      </div>
      ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["importDataConfigurationForm"]) || array_key_exists("importDataConfigurationForm", $context) ? $context["importDataConfigurationForm"] : (function () { throw new RuntimeError('Variable "importDataConfigurationForm" does not exist.', 139, $this->source); })()), 'rest');
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-between\">
      <a class=\"btn btn-outline-secondary js-import-process-button\" href=\"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import");
        echo "\" data-import_url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_process");
        echo "\">
        <i class=\"material-icons\">cancel</i>
        ";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary js-process-import\">
        <i class=\"material-icons\">check</i>
        ";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        // line 155
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importDataConfigurationForm"]) || array_key_exists("importDataConfigurationForm", $context) ? $context["importDataConfigurationForm"] : (function () { throw new RuntimeError('Variable "importDataConfigurationForm" does not exist.', 155, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 155,  332 => 150,  325 => 146,  318 => 144,  310 => 139,  300 => 134,  288 => 124,  281 => 122,  260 => 120,  243 => 119,  240 => 118,  236 => 117,  231 => 114,  214 => 111,  210 => 110,  203 => 109,  186 => 108,  180 => 105,  172 => 100,  164 => 95,  155 => 89,  151 => 88,  145 => 85,  134 => 77,  129 => 75,  123 => 72,  115 => 67,  104 => 59,  99 => 57,  94 => 55,  89 => 53,  83 => 50,  75 => 45,  66 => 39,  56 => 32,  49 => 28,  46 => 27,  43 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Feature' %}

{{ form_start(importDataConfigurationForm, {attr: {class: 'import-data-configuration-form'}}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">list</i>
    {{ 'Match your data'|trans }}
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">

      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'Please match each column of your source file to one of the destination columns.'|trans }}
        </p>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Load a data matching configuration'|trans }}
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              {{ form_widget(importDataConfigurationForm.matches) }}
            </div>
            <div class=\"col\">
              <button class=\"btn btn-outline-primary js-load-import-match\" data-url=\"{{ path('admin_import_data_configuration_get') }}\">
                <i class=\"material-icons\">settings</i>
                {{ 'Load'|trans({}, 'Admin.Actions') }}
              </button>
              <button class=\"btn btn-outline-primary js-delete-import-match\" data-url=\"{{ path('admin_import_data_configuration_delete') }}\">
                <i class=\"material-icons\">delete</i>
                {{ 'Delete'|trans({}, 'Admin.Actions') }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Save your data matching configuration'|trans }}
        </label>
        <div class=\"col-sm\">
          <div class=\"form-row\">
            <div class=\"col\">
              {{ form_widget(importDataConfigurationForm.match_name, {'attr': {'class': 'js-import-match-input', 'type': 'button'}}) }}
            </div>
            <div class=\"col\">
              <button class=\"btn btn-outline-primary js-save-import-match\" data-url=\"{{ path('admin_import_data_configuration_create') }}\">
                <i class=\"material-icons\">save</i>
                {{ 'Save'|trans({}, 'Admin.Actions') }}
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Rows to skip'|trans }}
        </label>
        <div class=\"col-sm\">
          {{ form_widget(importDataConfigurationForm.skip, {'attr': {'class': 'col-md-4 js-rows-skip', 'min': 0}}) }}
          <small class=\"form-text\">{{ 'Indicate how many of the first rows of your file should be skipped when importing the data. For instance set it to 1 if the first row of your file contains headers.'|trans }}</small>
        </div>
      </div>

      <div class=\"alert alert-warning js-validation-error js-duplicate-columns-warning d-none\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'Two columns cannot have the same type of values'|trans({}, 'Admin.Advparameters.Feature') }}
        </p>
      </div>
      <div class=\"alert alert-warning js-validation-error js-missing-column-warning d-none\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'This column must be set:'|trans({}, 'Admin.Advparameters.Feature') }}
          <span class=\"js-missing-column\">&nbsp;</span>
        </p>
      </div>

      <table class=\"table table-bordered js-import-data-table\" data-required-fields=\"{{ requiredFields|json_encode }}\">
        <thead>
          <tr>
            {% for importEntityField in importDataConfigurationForm.type_value %}
              <th class=\"js-entity-field {% if loop.index > maxVisibleColumns %} d-none{% endif %}\">
                {{ form_errors(importEntityField) }}
                {{ form_widget(importEntityField) }}
              </th>
            {% endfor %}
          </tr>
        </thead>
        <tbody>
          {% for row in dataRowCollection.rows %}
            <tr>
              {% for cell in row %}
                <td {% if loop.index > maxVisibleColumns %} class=\"d-none\" {% endif %}>{{ cell.value }}</td>
              {% endfor %}
            </tr>
          {% endfor %}
        </tbody>
      </table>

      <div class=\"row\">
        <div class=\"col text-left\">
          <button class=\"btn btn-outline-primary js-import-previous-page d-none\" type=\"button\">
            <i class=\"material-icons rtl-flip\">arrow_back</i>
          </button>
        </div>
        <div class=\"col text-right\">
          <button class=\"btn btn-outline-primary js-import-next-page{% if not showPagingArrows %} d-none{% endif %}\" type=\"button\">
            <i class=\"material-icons rtl-flip\">arrow_forward</i>
          </button>
        </div>
      </div>
      {{ form_rest(importDataConfigurationForm) }}
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-between\">
      <a class=\"btn btn-outline-secondary js-import-process-button\" href=\"{{ path('admin_import') }}\" data-import_url=\"{{ path('admin_import_process') }}\">
        <i class=\"material-icons\">cancel</i>
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
      <button class=\"btn btn-primary js-process-import\">
        <i class=\"material-icons\">check</i>
        {{ 'Import'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  </div>
</div>
{{ form_end(importDataConfigurationForm) }}
", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_data_configuration.html.twig");
    }
}
