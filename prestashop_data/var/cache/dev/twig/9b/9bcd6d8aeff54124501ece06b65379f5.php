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

/* @PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig */
class __TwigTemplate_c446388558e25537e2ef00fbf6737ce8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["id" => "currency_form", "data-reference-url" => twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_currencies_get_reference_data", ["currencyIsoCode" => "CURRENCY_ISO_CODE"]), ["/CURRENCY_ISO_CODE" => "{/id}"]), "data-languages" => json_encode(        // line 33
(isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 33, $this->source); })())), "data-translations" => json_encode(["step.symbol" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1. Enter symbol", [], "Admin.International.Feature"), "step.format" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("2. Choose format", [], "Admin.International.Feature"), "modal.title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize symbol and format", [], "Admin.International.Feature"), "modal.apply" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply", [], "Admin.Actions"), "modal.cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "modal.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "list.language" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global"), "list.example" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Example", [], "Admin.Global"), "list.edit" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit symbol / format", [], "Admin.International.Feature"), "list.reset" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "list.reset.success" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your symbol and format customizations have been successfully reset for this language.", [], "Admin.Notifications.Success"), "list.example.format" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("{price}", [], "Admin.International.Feature"), "modal.restore.title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to restore default settings?", [], "Admin.International.Feature"), "modal.restore.apply" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore", [], "Admin.Actions"), "modal.restore.cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "modal.restore.body" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restoring your currency's default settings will delete all the customizations you made before. Parameters will look just the same as when the currency is freshly imported.", [], "Admin.International.Feature")])]]);
        // line 53
        echo "

    <div class=\"card card-currency\">
      <div class=\"card-header\">
        ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currencies", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 61, $this->source); })()), 'errors');
        echo "

          ";
        // line 63
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "vars", [], "any", false, true, false, 63), "data", [], "any", false, true, false, 63), "id", [], "any", true, true, false, 63)) {
            // line 64
            echo "
            ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 65, $this->source); })()), "selected_iso_code", [], "any", false, false, false, 65), 'row');
            echo "
            <div class=\"form-group row type-checkbox \">
              <label for=\"currency_unofficial\" class=\"form-control-label \">
                ";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
            echo "
              </label>
              ";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 70, $this->source); })()), "unofficial", [], "any", false, false, false, 70), 'widget');
            echo "
            </div>
          ";
        }
        // line 73
        echo "
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 74, $this->source); })()), "names", [], "any", false, false, false, 74), 'row');
        echo "

          ";
        // line 76
        $context["symbolsClass"] = ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 76, $this->source); })()), "symbols", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "errors", [], "any", false, false, false, 76))) ? ("") : ("d-none"));
        // line 77
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 77, $this->source); })()), "symbols", [], "any", false, false, false, 77), 'row', ["row_attr" => ["class" => (isset($context["symbolsClass"]) || array_key_exists("symbolsClass", $context) ? $context["symbolsClass"] : (function () { throw new RuntimeError('Variable "symbolsClass" does not exist.', 77, $this->source); })())]]);
        echo "
          ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 78, $this->source); })()), 'widget');
        echo "
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"card-footer-left\">
          <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_currencies_index");
        echo "\" class=\"btn btn-outline-secondary\">
            ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </a>

          ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currencyForm"] ?? null), "vars", [], "any", false, true, false, 88), "data", [], "any", false, true, false, 88), "id", [], "any", true, true, false, 88) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "data", [], "any", false, false, false, 88), "unofficial", [], "any", false, false, false, 88))) {
            // line 89
            echo "            <button type=\"button\" id=\"currency_reset_default_settings\" class=\"btn btn-outline-primary card-currency-reset\">
              <i class=\"material-icons\">refresh</i>
              ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Restore default settings", [], "Admin.International.Feature"), "html", null, true);
            echo "
            </button>
          ";
        }
        // line 94
        echo "        </div>

        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-button\">";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["currencyForm"]) || array_key_exists("currencyForm", $context) ? $context["currencyForm"] : (function () { throw new RuntimeError('Variable "currencyForm" does not exist.', 99, $this->source); })()), 'form_end');
        echo "

  ";
        // line 101
        if ((array_key_exists("languageDataError", $context) && (isset($context["languageDataError"]) || array_key_exists("languageDataError", $context) ? $context["languageDataError"] : (function () { throw new RuntimeError('Variable "languageDataError" does not exist.', 101, $this->source); })()))) {
            // line 102
            echo "    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"alert alert-danger\">
          ";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Could not display symbol and format customization:", [], "Admin.International.Notification"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["languageDataError"]) || array_key_exists("languageDataError", $context) ? $context["languageDataError"] : (function () { throw new RuntimeError('Variable "languageDataError" does not exist.', 105, $this->source); })()), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        } else {
            // line 110
            echo "    <!-- Modal -->
    <div class=\"modal fade\" id=\"currency_loading_data_modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-backdrop=\"static\">
      <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading currency data", [], "Admin.International.Feature"), "html", null, true);
            echo "</h5>
          </div>
          <div class=\"modal-body\">
            ";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please wait while currency data is being loaded", [], "Admin.International.Feature"), "html", null, true);
            echo "
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary spinner\">";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
            echo "</button>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 121,  206 => 118,  200 => 115,  193 => 110,  183 => 105,  178 => 102,  176 => 101,  171 => 99,  165 => 96,  161 => 94,  155 => 91,  151 => 89,  149 => 88,  143 => 85,  139 => 84,  130 => 78,  125 => 77,  123 => 76,  118 => 74,  115 => 73,  109 => 70,  104 => 68,  98 => 65,  95 => 64,  93 => 63,  88 => 61,  81 => 57,  75 => 53,  73 => 33,  71 => 29,  52 => 28,  49 => 27,  47 => 26,  44 => 25,);
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

{% form_theme currencyForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block form %}
  {{ form_start(currencyForm, {
    'attr': {
      'id': 'currency_form',
      'data-reference-url': path('admin_currencies_get_reference_data', {'currencyIsoCode': 'CURRENCY_ISO_CODE'})|replace({'/CURRENCY_ISO_CODE': '{/id}'}),
      'data-languages': languages|json_encode,
      'data-translations': {
        'step.symbol': '1. Enter symbol'|trans({}, 'Admin.International.Feature'),
        'step.format': '2. Choose format'|trans({}, 'Admin.International.Feature'),
        'modal.title': 'Customize symbol and format'|trans({}, 'Admin.International.Feature'),
        'modal.apply': 'Apply'|trans({}, 'Admin.Actions'),
        'modal.cancel': 'Cancel'|trans({}, 'Admin.Actions'),
        'modal.close': 'Close'|trans({}, 'Admin.Actions'),
        'list.language': 'Language'|trans({}, 'Admin.Global'),
        'list.example': 'Example'|trans({}, 'Admin.Global'),
        'list.edit': 'Edit symbol / format'|trans({}, 'Admin.International.Feature'),
        'list.reset': 'Reset'|trans({}, 'Admin.Actions'),
        'list.reset.success': 'Your symbol and format customizations have been successfully reset for this language.'|trans({}, 'Admin.Notifications.Success'),
        'list.example.format': '{price}'|trans({}, 'Admin.International.Feature'),
        'modal.restore.title': 'Are you sure you want to restore default settings?'|trans({}, 'Admin.International.Feature'),
        'modal.restore.apply': 'Restore'|trans({}, 'Admin.Actions'),
        'modal.restore.cancel': 'Cancel'|trans({}, 'Admin.Actions'),
        'modal.restore.body': 'Restoring your currency\\'s default settings will delete all the customizations you made before. Parameters will look just the same as when the currency is freshly imported.'|trans({}, 'Admin.International.Feature')
      }|json_encode
    }
    }) }}

    <div class=\"card card-currency\">
      <div class=\"card-header\">
        {{ 'Currencies'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {{ form_errors(currencyForm) }}

          {% if not currencyForm.vars.data.id is defined %}

            {{ form_row(currencyForm.selected_iso_code) }}
            <div class=\"form-group row type-checkbox \">
              <label for=\"currency_unofficial\" class=\"form-control-label \">
                {{ 'or'|trans({}, 'Admin.Global') }}
              </label>
              {{ form_widget(currencyForm.unofficial) }}
            </div>
          {% endif %}

          {{ form_row(currencyForm.names) }}

          {% set symbolsClass = currencyForm.symbols.vars.errors|length ? '' : 'd-none' %}
          {{ form_row(currencyForm.symbols, {'row_attr': {'class': symbolsClass}}) }}
          {{ form_widget(currencyForm) }}
        </div>
      </div>

      <div class=\"card-footer\">
        <div class=\"card-footer-left\">
          <a href=\"{{ path('admin_currencies_index') }}\" class=\"btn btn-outline-secondary\">
            {{ 'Cancel'|trans({}, 'Admin.Actions') }}
          </a>

          {% if currencyForm.vars.data.id is defined and not currencyForm.vars.data.unofficial %}
            <button type=\"button\" id=\"currency_reset_default_settings\" class=\"btn btn-outline-primary card-currency-reset\">
              <i class=\"material-icons\">refresh</i>
              {{ 'Restore default settings'|trans({}, 'Admin.International.Feature') }}
            </button>
          {% endif %}
        </div>

        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  {{ form_end(currencyForm) }}

  {% if languageDataError is defined and languageDataError %}
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"alert alert-danger\">
          {{ 'Could not display symbol and format customization:'|trans({}, 'Admin.International.Notification') }} {{ languageDataError }}
        </div>
      </div>
    </div>
  {% else %}
    <!-- Modal -->
    <div class=\"modal fade\" id=\"currency_loading_data_modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-backdrop=\"static\">
      <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">{{ 'Loading currency data'|trans({}, 'Admin.International.Feature') }}</h5>
          </div>
          <div class=\"modal-body\">
            {{ 'Please wait while currency data is being loaded'|trans({}, 'Admin.International.Feature') }}
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-secondary spinner\">{{ 'Close'|trans({}, 'Admin.Actions') }}</button>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Currency/Blocks/form.html.twig");
    }
}
