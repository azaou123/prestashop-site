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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig */
class __TwigTemplate_25c3e1bc3383f0525de6af84c61ee0e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_state_form' => [$this, 'block_order_state_form'],
            'order_state_form_reset' => [$this, 'block_order_state_form_reset'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('order_state_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_order_state_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_state_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_state_form"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order status", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 37, $this->source); })()), 'errors');
        echo "

          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status name", [], "Admin.Shopparameters.Feature"), "help" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order status (e.g. 'Pending').", [], "Admin.Shopparameters.Help") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters: numbers and", [], "Admin.Shopparameters.Help")) . " !<>,;?=+()@#\"{}_\$%:")]], 39, $context, $this->getSourceContext());
        // line 45
        echo "

          ";
        // line 47
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 47, $this->source); })()), "color", [], "any", false, false, false, 47), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Color", [], "Admin.Shopparameters.Feature"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")")]], 47, $context, $this->getSourceContext());
        // line 50
        echo "

          ";
        // line 52
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 52, $this->source); })()), "loggable", [], "any", false, false, false, 52), [], ["label" => ""]], 52, $context, $this->getSourceContext());
        echo "

          ";
        // line 54
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 54, $this->source); })()), "invoice", [], "any", false, false, false, 54), [], ["label" => ""]], 54, $context, $this->getSourceContext());
        echo "

          ";
        // line 56
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 56, $this->source); })()), "hidden", [], "any", false, false, false, 56), [], ["label" => ""]], 56, $context, $this->getSourceContext());
        echo "

          ";
        // line 58
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 58, $this->source); })()), "send_email", [], "any", false, false, false, 58), [], ["label" => ""]], 58, $context, $this->getSourceContext());
        echo "

          ";
        // line 60
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 60, $this->source); })()), "pdf_invoice", [], "any", false, false, false, 60), [], ["label" => ""]], 60, $context, $this->getSourceContext());
        echo "

          ";
        // line 62
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 62, $this->source); })()), "pdf_delivery", [], "any", false, false, false, 62), [], ["label" => ""]], 62, $context, $this->getSourceContext());
        echo "

          ";
        // line 64
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 64, $this->source); })()), "shipped", [], "any", false, false, false, 64), [], ["label" => ""]], 64, $context, $this->getSourceContext());
        echo "

          ";
        // line 66
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 66, $this->source); })()), "paid", [], "any", false, false, false, 66), [], ["label" => ""]], 66, $context, $this->getSourceContext());
        echo "

          ";
        // line 68
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 68, $this->source); })()), "delivery", [], "any", false, false, false, 68), [], ["label" => ""]], 68, $context, $this->getSourceContext());
        echo "

          ";
        // line 70
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 70, $this->source); })()), "template", [], "any", false, false, false, 70), ["options_extra" => ["data-preview" =>         // line 72
(isset($context["templatesPreviewUrl"]) || array_key_exists("templatesPreviewUrl", $context) ? $context["templatesPreviewUrl"] : (function () { throw new RuntimeError('Variable "templatesPreviewUrl" does not exist.', 72, $this->source); })())], "button" => ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview", [], "Admin.Actions"), "icon" => "visibility", "class" => "btn btn-primary", "id" => "order_state_template_preview"]], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email template", [], "Admin.Shopparameters.Feature"), "hint" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")"), "class" => "order_state_template_select"]], 70, $context, $this->getSourceContext());
        // line 85
        echo "

          ";
        // line 87
        $this->displayBlock('order_state_form_reset', $context, $blocks);
        // line 90
        echo "        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension']->getPathWithBackUrl("admin_order_states"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 87
    public function block_order_state_form_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_state_form_reset"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_state_form_reset"));

        // line 88
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["orderStateForm"]) || array_key_exists("orderStateForm", $context) ? $context["orderStateForm"] : (function () { throw new RuntimeError('Variable "orderStateForm" does not exist.', 88, $this->source); })()), 'rest');
        echo "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  192 => 87,  180 => 101,  173 => 97,  167 => 94,  163 => 93,  158 => 90,  156 => 87,  152 => 85,  150 => 72,  149 => 70,  144 => 68,  139 => 66,  134 => 64,  129 => 62,  124 => 60,  119 => 58,  114 => 56,  109 => 54,  104 => 52,  100 => 50,  98 => 47,  94 => 45,  92 => 39,  87 => 37,  80 => 33,  72 => 29,  53 => 28,  50 => 27,  48 => 26,  45 => 25,);
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

{% block order_state_form %}
  {{ form_start(orderStateForm) }}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        {{ 'Order status'|trans({}, 'Admin.Shopparameters.Feature') }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {{ form_errors(orderStateForm) }}

          {{ ps.form_group_row(orderStateForm.name, {}, {
            'label': 'Status name'|trans({}, 'Admin.Shopparameters.Feature'),
            'help': 'Order status (e.g. \\'Pending\\').'|trans({}, 'Admin.Shopparameters.Help')
                    ~ ' '
                    ~ 'Invalid characters: numbers and'|trans({}, 'Admin.Shopparameters.Help')
                    ~ ' !<>,;?=+()@#\"{}_\$%:'
          }) }}

          {{ ps.form_group_row(orderStateForm.color, {}, {
            'label': 'Color'|trans({}, 'Admin.Shopparameters.Feature'),
            'help': 'Status will be highlighted in this color. HTML colors only.'|trans({}, 'Admin.Shopparameters.Help') ~ ' \"lightblue\", \"#CC6600\")'
          }) }}

          {{ ps.form_group_row(orderStateForm.loggable, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.invoice, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.hidden, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.send_email, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.pdf_invoice, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.pdf_delivery, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.shipped, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.paid, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.delivery, {}, {'label': ''}) }}

          {{ ps.form_group_row(orderStateForm.template, {
              'options_extra': {
                'data-preview': templatesPreviewUrl
              },
              'button': {
                'label': 'Preview'|trans({}, 'Admin.Actions'),
                'icon': 'visibility',
                'class': 'btn btn-primary',
                'id': 'order_state_template_preview'
              }
            },
            {
              'label': 'Email template'|trans({}, 'Admin.Shopparameters.Feature'),
              'hint': 'Status will be highlighted in this color. HTML colors only.'|trans({}, 'Admin.Shopparameters.Help') ~ ' \"lightblue\", \"#CC6600\")',
              'class': 'order_state_template_select'
            }) }}

          {% block order_state_form_reset %}
            {{ form_rest(orderStateForm) }}
          {% endblock %}
        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"{{ pathWithBackUrl('admin_order_states') }}\" class=\"btn btn-outline-secondary\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
        <button class=\"btn btn-primary float-right\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  {{ form_end(orderStateForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderStates/Blocks/form.html.twig");
    }
}
