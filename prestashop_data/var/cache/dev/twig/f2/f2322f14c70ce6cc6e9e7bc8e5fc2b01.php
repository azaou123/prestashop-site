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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig */
class __TwigTemplate_b76faa77d92371624454a63b1a2aad57 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'import_form' => [$this, 'block_import_form'],
            'import_file_history_block' => [$this, 'block_import_file_history_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig"));

        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 27, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('import_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_import_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_form"));

        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["data-file-upload-url" => (isset($context["importFileUploadUrl"]) || array_key_exists("importFileUploadUrl", $context) ? $context["importFileUploadUrl"] : (function () { throw new RuntimeError('Variable "importFileUploadUrl" does not exist.', 30, $this->source); })()), "data-delete-confirm-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this entity:", [], "Admin.Advparameters.Notification"), "class" => "js-import-form"]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can read information on import at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://docs.prestashop-project.org/v.8-documentation/user-guide/configuring-shop/advanced-parameters/import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://docs.prestashop-project.org/v.8-documentation/user-guide/configuring-shop/advanced-parameters/import", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </a>
        </p>
        <p class=\"alert-text\">
          ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more about the CSV format at:", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("https://en.wikipedia.org/wiki/Comma-separated_values", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
          </a>
        </p>
      </div>

      <hr>

      <div class=\"form-group\">
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 55, $this->source); })()), "entity", [], "any", false, false, false, 55), 'row');
        echo "
      </div>

      <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
        <ul>
          <li>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that the Category import does not support having two categories with the same name.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
          <li>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that you can have several products with the same reference.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
        </ul>
      </div>

      <hr>

      <div class=\"form-group hidden-xs-up\">
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 68, $this->source); })()), "csv", [], "any", false, false, false, 68), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 69, $this->source); })()), "csv", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "js-import-file-input"]]);
        echo "
      </div>

      <div class=\"form-group js-file-upload-form-group\">
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 73, $this->source); })()), "file", [], "any", false, false, false, 73), 'label');
        echo "
        <div class=\"row\">
          <div class=\"col\">
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 76, $this->source); })()), "file", [], "any", false, false, false, 76), 'errors');
        echo "
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 77, $this->source); })()), "file", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "js-import-file", "data-max-file-upload-size" => (isset($context["maxFileUploadSize"]) || array_key_exists("maxFileUploadSize", $context) ? $context["maxFileUploadSize"] : (function () { throw new RuntimeError('Variable "maxFileUploadSize" does not exist.', 77, $this->source); })())]]);
        echo "
          </div>
          <div class=\"col\">
            <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
            <button type=\"button\"
                    class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                    ";
        // line 83
        if (twig_test_empty((isset($context["importFileNames"]) || array_key_exists("importFileNames", $context) ? $context["importFileNames"] : (function () { throw new RuntimeError('Variable "importFileNames" does not exist.', 83, $this->source); })()))) {
            echo "disabled";
        }
        // line 84
        echo "            >
              <span class=\"badge badge-primary js-files-history-number\">";
        // line 85
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["importFileNames"]) || array_key_exists("importFileNames", $context) ? $context["importFileNames"] : (function () { throw new RuntimeError('Variable "importFileNames" does not exist.', 85, $this->source); })())), "html", null, true);
        echo "</span>
              ";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose from history / FTP", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </button>
          </div>
        </div>
        <small class=\"form-text\">";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
        <small class=\"form-text\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Only UTF-8 and ISO 8859-1 encodings are allowed", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
        <small class=\"form-text\">";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can also upload your file via FTP to the following directory: %s .", ["%s" => (isset($context["importDirectory"]) || array_key_exists("importDirectory", $context) ? $context["importDirectory"] : (function () { throw new RuntimeError('Variable "importDirectory" does not exist.', 92, $this->source); })())], "Admin.Advparameters.Help"), "html", null, true);
        echo "</small>
      </div>

      <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
        <p class=\"alert-text\">
          <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
        </p>
      </div>

      <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
        <button type=\"button\"
                class=\"close btn btn-outline-secondary js-change-import-file-btn\"
                aria-label=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change", [], "Admin.Actions"), "html", null, true);
        echo "\"
        >
          <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
        </button>
        <p class=\"alert-text js-import-file\"></p>
      </div>

      ";
        // line 111
        $this->displayBlock('import_file_history_block', $context, $blocks);
        // line 114
        echo "
      <hr>
      ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 116, $this->source); })()), "iso_lang", [], "any", false, false, false, 116), 'row');
        echo "
      ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 117, $this->source); })()), "separator", [], "any", false, false, false, 117), 'row');
        echo "
      ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 118, $this->source); })()), "multiple_value_separator", [], "any", false, false, false, 118), 'row');
        echo "
      <hr>
      ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 120, $this->source); })()), "submitImportFile", [], "any", false, false, false, 120), 'label');
        echo "

      ";
        // line 123
        echo "      ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 123, $this->source); })()), "submitImportFile", [], "any", false, false, false, 123), "setRendered", [], "any", false, false, false, 123);
        // line 124
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 124, $this->source); })()), 'widget');
        echo "
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 129, $this->source); })()), "submitImportFile", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
        echo "\">
        ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 130, $this->source); })()), "submitImportFile", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "label", [], "any", false, false, false, 130), "html", null, true);
        echo "
        <i class=\"material-icons rtl-flip\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
";
        // line 136
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["importForm"]) || array_key_exists("importForm", $context) ? $context["importForm"] : (function () { throw new RuntimeError('Variable "importForm" does not exist.', 136, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 111
    public function block_import_file_history_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_file_history_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "import_file_history_block"));

        // line 112
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", 112)->display($context);
        // line 113
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 113,  298 => 112,  288 => 111,  276 => 136,  267 => 130,  263 => 129,  254 => 124,  251 => 123,  246 => 120,  241 => 118,  237 => 117,  233 => 116,  229 => 114,  227 => 111,  217 => 104,  202 => 92,  198 => 91,  194 => 90,  187 => 86,  183 => 85,  180 => 84,  176 => 83,  170 => 80,  164 => 77,  160 => 76,  154 => 73,  147 => 69,  143 => 68,  133 => 61,  129 => 60,  121 => 55,  110 => 47,  106 => 46,  102 => 45,  95 => 41,  91 => 40,  87 => 39,  78 => 33,  72 => 30,  53 => 29,  50 => 28,  48 => 27,  45 => 25,);
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
{% form_theme importForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block import_form %}
{{ form_start(importForm, {'attr': { 'data-file-upload-url': importFileUploadUrl, 'data-delete-confirm-message': ('Are you sure you want to delete this entity:'|trans({}, 'Admin.Advparameters.Notification')), 'class': 'js-import-form' }}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">import_export</i> {{ 'Import'|trans({}, 'Admin.Actions') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'You can read information on import at:'|trans({}, 'Admin.Advparameters.Help') }}
          <a href=\"{{ 'https://docs.prestashop-project.org/v.8-documentation/user-guide/configuring-shop/advanced-parameters/import'|trans({}, 'Admin.Advparameters.Help') }}\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            {{ 'https://docs.prestashop-project.org/v.8-documentation/user-guide/configuring-shop/advanced-parameters/import'|trans({}, 'Admin.Advparameters.Help') }}
          </a>
        </p>
        <p class=\"alert-text\">
          {{ 'Read more about the CSV format at:'|trans({}, 'Admin.Advparameters.Help') }}
          <a href=\"{{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            {{ 'https://en.wikipedia.org/wiki/Comma-separated_values'|trans({}, 'Admin.Advparameters.Help') }}
          </a>
        </p>
      </div>

      <hr>

      <div class=\"form-group\">
        {{ form_row(importForm.entity) }}
      </div>

      <div class=\"alert alert-warning js-entity-alert\" role=\"alert\">
        <ul>
          <li>{{ 'Note that the Category import does not support having two categories with the same name.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
          <li>{{ 'Note that you can have several products with the same reference.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
        </ul>
      </div>

      <hr>

      <div class=\"form-group hidden-xs-up\">
        {{ form_errors(importForm.csv) }}
        {{ form_widget(importForm.csv, {'attr': {'class': 'js-import-file-input'}}) }}
      </div>

      <div class=\"form-group js-file-upload-form-group\">
        {{ form_label(importForm.file) }}
        <div class=\"row\">
          <div class=\"col\">
            {{ form_errors(importForm.file) }}
            {{ form_widget(importForm.file, {'attr': {'class': 'js-import-file', 'data-max-file-upload-size': maxFileUploadSize }}) }}
          </div>
          <div class=\"col\">
            <span>{{ 'or'|trans({}, 'Admin.Global') }}</span>
            <button type=\"button\"
                    class=\"btn btn-outline-primary btn-sm js-from-files-history-btn\"
                    {% if importFileNames is empty %}disabled{% endif %}
            >
              <span class=\"badge badge-primary js-files-history-number\">{{ importFileNames|length }}</span>
              {{ 'Choose from history / FTP'|trans({}, 'Admin.Advparameters.Feature') }}
            </button>
          </div>
        </div>
        <small class=\"form-text\">{{ 'Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots'|trans({}, 'Admin.Advparameters.Help') }}</small>
        <small class=\"form-text\">{{ 'Only UTF-8 and ISO 8859-1 encodings are allowed'|trans({}, 'Admin.Advparameters.Help') }}</small>
        <small class=\"form-text\">{{ 'You can also upload your file via FTP to the following directory: %s .'|trans({'%s': importDirectory}, 'Admin.Advparameters.Help') }}</small>
      </div>

      <div class=\"alert alert-danger d-none js-import-file-error\" role=\"alert\">
        <p class=\"alert-text\">
          <strong class=\"js-file-data\"></strong>: <span class=\"js-error-message\"></span>
        </p>
      </div>

      <div class=\"alert alert-success d-none js-import-file-alert\" role=\"alert\">
        <button type=\"button\"
                class=\"close btn btn-outline-secondary js-change-import-file-btn\"
                aria-label=\"{{ 'Change'|trans({}, 'Admin.Actions') }}\"
        >
          <span aria-hidden=\"true\"><i class=\"material-icons\">edit</i></span>
        </button>
        <p class=\"alert-text js-import-file\"></p>
      </div>

      {% block import_file_history_block %}
        {% include '@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig' %}
      {% endblock %}

      <hr>
      {{ form_row(importForm.iso_lang) }}
      {{ form_row(importForm.separator) }}
      {{ form_row(importForm.multiple_value_separator) }}
      <hr>
      {{ form_label(importForm.submitImportFile) }}

      {# This is done so importForm.submitImportFile is not rendered, as it's defined via plain HTML instead #}
      {% do importForm.submitImportFile.setRendered %}
      {{ form_widget(importForm) }}
    </div>
  </div>
  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" name=\"{{ importForm.submitImportFile.vars.name }}\">
        {{ importForm.submitImportFile.vars.label }}
        <i class=\"material-icons rtl-flip\">navigate_next</i>
      </button>
    </div>
  </div>
</div>
{{ form_end(importForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_panel.html.twig");
    }
}
