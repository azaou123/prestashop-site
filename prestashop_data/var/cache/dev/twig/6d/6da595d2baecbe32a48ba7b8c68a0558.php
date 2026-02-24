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

/* @PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig */
class __TwigTemplate_93814b6068ccf2d7c12239f065199882 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_return_state_form' => [$this, 'block_order_return_state_form'],
            'order_return_state_form_reset' => [$this, 'block_order_return_state_form_reset'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('order_return_state_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_order_return_state_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderReturnStateForm"]) || array_key_exists("orderReturnStateForm", $context) ? $context["orderReturnStateForm"] : (function () { throw new RuntimeError('Variable "orderReturnStateForm" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Return statuses", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["orderReturnStateForm"]) || array_key_exists("orderReturnStateForm", $context) ? $context["orderReturnStateForm"] : (function () { throw new RuntimeError('Variable "orderReturnStateForm" does not exist.', 37, $this->source); })()), 'errors');
        echo "

          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderReturnStateForm"]) || array_key_exists("orderReturnStateForm", $context) ? $context["orderReturnStateForm"] : (function () { throw new RuntimeError('Variable "orderReturnStateForm" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status name", [], "Admin.Shopparameters.Feature"), "help" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order's return status name.", [], "Admin.Shopparameters.Help") . " ") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters: numbers and", [], "Admin.Shopparameters.Help")) . " !<>,;?=+()@#\"{}_\$%:")]], 39, $context, $this->getSourceContext());
        // line 45
        echo "

          ";
        // line 47
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["orderReturnStateForm"]) || array_key_exists("orderReturnStateForm", $context) ? $context["orderReturnStateForm"] : (function () { throw new RuntimeError('Variable "orderReturnStateForm" does not exist.', 47, $this->source); })()), "color", [], "any", false, false, false, 47), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Color", [], "Admin.Shopparameters.Feature"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status will be highlighted in this color. HTML colors only.", [], "Admin.Shopparameters.Help") . " \"lightblue\", \"#CC6600\")")]], 47, $context, $this->getSourceContext());
        // line 50
        echo "

          ";
        // line 52
        $this->displayBlock('order_return_state_form_reset', $context, $blocks);
        // line 55
        echo "        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension']->getPathWithBackUrl("admin_order_states"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right\">
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["orderReturnStateForm"]) || array_key_exists("orderReturnStateForm", $context) ? $context["orderReturnStateForm"] : (function () { throw new RuntimeError('Variable "orderReturnStateForm" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_order_return_state_form_reset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form_reset"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_return_state_form_reset"));

        // line 53
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["orderReturnStateForm"]) || array_key_exists("orderReturnStateForm", $context) ? $context["orderReturnStateForm"] : (function () { throw new RuntimeError('Variable "orderReturnStateForm" does not exist.', 53, $this->source); })()), 'rest');
        echo "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 53,  140 => 52,  128 => 66,  121 => 62,  115 => 59,  111 => 58,  106 => 55,  104 => 52,  100 => 50,  98 => 47,  94 => 45,  92 => 39,  87 => 37,  80 => 33,  72 => 29,  53 => 28,  50 => 27,  48 => 26,  45 => 25,);
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

{% block order_return_state_form %}
  {{ form_start(orderReturnStateForm) }}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        {{ 'Return statuses'|trans({}, 'Admin.Shopparameters.Feature') }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {{ form_errors(orderReturnStateForm) }}

          {{ ps.form_group_row(orderReturnStateForm.name, {}, {
            'label': 'Status name'|trans({}, 'Admin.Shopparameters.Feature'),
            'help': 'Order\\'s return status name.'|trans({}, 'Admin.Shopparameters.Help')
                    ~ ' '
                    ~ 'Invalid characters: numbers and'|trans({}, 'Admin.Shopparameters.Help')
                    ~ ' !<>,;?=+()@#\"{}_\$%:'
          }) }}

          {{ ps.form_group_row(orderReturnStateForm.color, {}, {
            'label': 'Color'|trans({}, 'Admin.Shopparameters.Feature'),
            'help': 'Status will be highlighted in this color. HTML colors only.'|trans({}, 'Admin.Shopparameters.Help') ~ ' \"lightblue\", \"#CC6600\")'
          }) }}

          {% block order_return_state_form_reset %}
            {{ form_rest(orderReturnStateForm) }}
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
  {{ form_end(orderReturnStateForm) }}
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/OrderReturnStates/Blocks/form.html.twig");
    }
}
