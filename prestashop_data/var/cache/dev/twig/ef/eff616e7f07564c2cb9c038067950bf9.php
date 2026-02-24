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

/* @PrestaShop/Admin/Sell/Address/Blocks/form.html.twig */
class __TwigTemplate_96ba69e1516b7156315df86800f61620 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'customer_information' => [$this, 'block_customer_information'],
            'address_form_widget' => [$this, 'block_address_form_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig", 28)->unwrap();
        // line 29
        echo "
";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 30, $this->source); })()), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Addresses", [], "Admin.Navigation.Menu"), "html", null, true);
        echo "
  </div>

  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 39, $this->source); })()), 'errors');
        echo "

      ";
        // line 41
        $this->displayBlock('customer_information', $context, $blocks);
        // line 59
        echo "      ";
        $this->displayBlock('address_form_widget', $context, $blocks);
        // line 62
        echo "    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
        ";
        // line 69
        echo "        ";
        if ((array_key_exists("displayInIframe", $context) && ((isset($context["displayInIframe"]) || array_key_exists("displayInIframe", $context) ? $context["displayInIframe"] : (function () { throw new RuntimeError('Variable "displayInIframe" does not exist.', 69, $this->source); })()) == true))) {
            // line 70
            echo "          <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
        ";
        } else {
            // line 72
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("cancelPath", $context)) ? (_twig_default_filter((isset($context["cancelPath"]) || array_key_exists("cancelPath", $context) ? $context["cancelPath"] : (function () { throw new RuntimeError('Variable "cancelPath" does not exist.', 72, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_addresses_index"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_addresses_index"))), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
        ";
        }
        // line 74
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\" id=\"save-button\">";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>
</div>
";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 41
    public function block_customer_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_information"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "customer_information"));

        // line 42
        echo "        ";
        if ( !(null === (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 42, $this->source); })()))) {
            // line 43
            echo "          ";
            if (twig_get_attribute($this->env, $this->source, ($context["addressForm"] ?? null), "id_customer", [], "any", true, true, false, 43)) {
                // line 44
                echo "            ";
                echo twig_call_macro($macros["ps"], "macro_form_widget_with_error", [twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 44, $this->source); })()), "id_customer", [], "any", false, false, false, 44)], 44, $context, $this->getSourceContext());
                echo "
          ";
            }
            // line 46
            echo "          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
            echo "
            </label>
            <div class=\"col-sm\">
              <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_view", ["customerId" => (isset($context["customerId"]) || array_key_exists("customerId", $context) ? $context["customerId"] : (function () { throw new RuntimeError('Variable "customerId" does not exist.', 51, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">remove_red_eye</i>
                ";
            // line 53
            echo twig_escape_filter($this->env, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 53, $this->source); })()), "html", null, true);
            echo "
              </a>
            </div>
          </div>
        ";
        }
        // line 58
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_address_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "address_form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "address_form_widget"));

        // line 60
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 60, $this->source); })()), 'widget');
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 60,  185 => 59,  175 => 58,  167 => 53,  162 => 51,  156 => 48,  152 => 46,  146 => 44,  143 => 43,  140 => 42,  130 => 41,  118 => 82,  111 => 78,  103 => 74,  97 => 72,  93 => 70,  90 => 69,  83 => 62,  80 => 59,  78 => 41,  73 => 39,  65 => 34,  58 => 30,  55 => 29,  53 => 28,  50 => 27,  48 => 26,  45 => 25,);
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

{% form_theme addressForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{{ form_start(addressForm) }}
<div class=\"card\">
  <div class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    {{ 'Addresses'|trans({}, 'Admin.Navigation.Menu') }}
  </div>

  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      {{ form_errors(addressForm) }}

      {% block customer_information %}
        {% if customerInformation is not null %}
          {% if addressForm.id_customer is defined %}
            {{ ps.form_widget_with_error(addressForm.id_customer) }}
          {% endif %}
          <div class=\"form-group row\">
            <label class=\"form-control-label\">
              {{ 'Customer'|trans({}, 'Admin.Global') }}
            </label>
            <div class=\"col-sm\">
              <a href=\"{{ path('admin_customers_view', {'customerId': customerId}) }}\" class=\"btn btn-outline-secondary\">
                <i class=\"material-icons\">remove_red_eye</i>
                {{ customerInformation }}
              </a>
            </div>
          </div>
        {% endif %}
      {% endblock %}
      {% block address_form_widget %}
        {{ form_widget(addressForm) }}
      {% endblock %}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
        {#  Form appears not only in address controller but in order creation page as well. This if is needed in order
        to correctly close form when it's a popup instead of redirecting to addresses page. #}
        {% if (displayInIframe is defined and displayInIframe == true) %}
          <a href=\"javascript:window.parent.\$.fancybox.close();\" class=\"btn btn-outline-secondary\">
        {% else %}
          <a href=\"{{ cancelPath|default(path('admin_addresses_index')) }}\" class=\"btn btn-outline-secondary\">
        {% endif %}
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>
  </div>
</div>
{{ form_end(addressForm) }}
", "@PrestaShop/Admin/Sell/Address/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Address/Blocks/form.html.twig");
    }
}
