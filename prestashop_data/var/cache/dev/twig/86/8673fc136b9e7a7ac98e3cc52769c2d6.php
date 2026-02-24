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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig */
class __TwigTemplate_66f404b63042b2c87ca2dd892e713609 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cart_summary_form_rest' => [$this, 'block_cart_summary_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", 26)->unwrap();
        // line 27
        echo "
<div class=\"card d-none\" id=\"summary-block\">
  <h3 class=\"card-header\">
    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Summary", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-success d-none\" id=\"js-summary-success-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"alert alert-danger d-none\" id=\"js-summary-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"row\">
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total products", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-products\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total vouchers (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-discounts\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total shipping (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-shipping\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total taxes", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-taxes\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total (Tax excl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <strong class=\"js-total-without-tax\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total (Tax incl.)", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</strong>
            </p>
            <span class=\"js-total-with-tax badge rounded badge-dark\"></span>
          </div>
        </div>
      </div>
    </div>

    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["summaryForm"]) || array_key_exists("summaryForm", $context) ? $context["summaryForm"] : (function () { throw new RuntimeError('Variable "summaryForm" does not exist.', 82, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_place")]);
        echo "
    <div class=\"mt-4 row\">
      <div class=\"col-lg-11\">

        <div id=\"js-order-message-wrap\">
          ";
        // line 87
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["summaryForm"]) || array_key_exists("summaryForm", $context) ? $context["summaryForm"] : (function () { throw new RuntimeError('Variable "summaryForm" does not exist.', 87, $this->source); })()), "order_message", [], "any", false, false, false, 87), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order message", [], "Admin.Orderscustomers.Feature")]], 87, $context, $this->getSourceContext());
        // line 89
        echo "
        </div>

        ";
        // line 92
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["summaryForm"]) || array_key_exists("summaryForm", $context) ? $context["summaryForm"] : (function () { throw new RuntimeError('Variable "summaryForm" does not exist.', 92, $this->source); })()), "payment_module", [], "any", false, false, false, 92), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global")]], 92, $context, $this->getSourceContext());
        // line 94
        echo "

        ";
        // line 96
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["summaryForm"]) || array_key_exists("summaryForm", $context) ? $context["summaryForm"] : (function () { throw new RuntimeError('Variable "summaryForm" does not exist.', 96, $this->source); })()), "order_state", [], "any", false, false, false, 96), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order status", [], "Admin.Orderscustomers.Feature")]], 96, $context, $this->getSourceContext());
        // line 98
        echo "

        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["summaryForm"]) || array_key_exists("summaryForm", $context) ? $context["summaryForm"] : (function () { throw new RuntimeError('Variable "summaryForm" does not exist.', 100, $this->source); })()), "cart_id", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "js-place-order-cart-id"]]);
        echo "

        ";
        // line 102
        $this->displayBlock('cart_summary_form_rest', $context, $blocks);
        // line 105
        echo "
        <div class=\"form-group row mt-2 mb-2\">
          <div class=\"col offset-sm-4\">
            <button class=\"btn btn-primary my-1\" type=\"submit\" id=\"create-order-button\">
              ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </button>

            <div class=\"btn-group\">
              <button
                class=\"btn btn-outline-primary dropdown-toggle my-1\"
                type=\"button\"
                id=\"dropdown-menu-actions\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
              >
                ";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More actions", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
              </button>

              <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-menu-actions\">
                <button type=\"button\" class=\"dropdown-item\" id=\"js-send-process-order-email-btn\">
                  ";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send pre-filled order to the customer by email", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </button>
                <a class=\"dropdown-item\" id=\"js-process-order-link\" target=\"_blank\">
                  ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Proceed to checkout in the front office", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </a>

                ";
        // line 132
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminOrderCreateExtraButtons");
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 139
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["summaryForm"]) || array_key_exists("summaryForm", $context) ? $context["summaryForm"] : (function () { throw new RuntimeError('Variable "summaryForm" does not exist.', 139, $this->source); })()), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 102
    public function block_cart_summary_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_summary_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_summary_form_rest"));

        // line 103
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["summaryForm"]) || array_key_exists("summaryForm", $context) ? $context["summaryForm"] : (function () { throw new RuntimeError('Variable "summaryForm" does not exist.', 103, $this->source); })()), 'rest');
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 103,  227 => 102,  212 => 139,  202 => 132,  196 => 129,  190 => 126,  182 => 121,  167 => 109,  161 => 105,  159 => 102,  154 => 100,  150 => 98,  148 => 96,  144 => 94,  142 => 92,  137 => 89,  135 => 87,  127 => 82,  116 => 74,  107 => 68,  98 => 62,  89 => 56,  80 => 50,  71 => 44,  54 => 30,  49 => 27,  47 => 26,  44 => 25,);
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

<div class=\"card d-none\" id=\"summary-block\">
  <h3 class=\"card-header\">
    {{ 'Summary'|trans({}, 'Admin.Global') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"alert alert-success d-none\" id=\"js-summary-success-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"alert alert-danger d-none\" id=\"js-summary-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"row\">
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>{{ 'Total products'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <strong class=\"js-total-products\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>{{ 'Total vouchers (Tax excl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <strong class=\"js-total-discounts\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-xl-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>{{ 'Total shipping (Tax excl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <strong class=\"js-total-shipping\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>{{ 'Total taxes'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <strong class=\"js-total-taxes\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>{{ 'Total (Tax excl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <strong class=\"js-total-without-tax\"></strong>
          </div>
          <div class=\"col-6 col-md-4 col-xl-2 mb-2 mb-md-0 text-center\">
            <p class=\"mb-0 text-muted\">
              <strong>{{ 'Total (Tax incl.)'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
            </p>
            <span class=\"js-total-with-tax badge rounded badge-dark\"></span>
          </div>
        </div>
      </div>
    </div>

    {{ form_start(summaryForm, {'action': path('admin_orders_place')}) }}
    <div class=\"mt-4 row\">
      <div class=\"col-lg-11\">

        <div id=\"js-order-message-wrap\">
          {{ ps.form_group_row(summaryForm.order_message, {}, {
            'label': 'Order message'|trans({}, 'Admin.Orderscustomers.Feature'),
          }) }}
        </div>

        {{ ps.form_group_row(summaryForm.payment_module, {}, {
          'label': 'Payment'|trans({}, 'Admin.Global'),
        }) }}

        {{ ps.form_group_row(summaryForm.order_state, {}, {
          'label': 'Order status'|trans({}, 'Admin.Orderscustomers.Feature'),
        }) }}

        {{ form_row(summaryForm.cart_id, {'attr': {'class': 'js-place-order-cart-id'}}) }}

        {% block cart_summary_form_rest %}
          {{ form_rest(summaryForm) }}
        {% endblock %}

        <div class=\"form-group row mt-2 mb-2\">
          <div class=\"col offset-sm-4\">
            <button class=\"btn btn-primary my-1\" type=\"submit\" id=\"create-order-button\">
              {{ 'Create order'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </button>

            <div class=\"btn-group\">
              <button
                class=\"btn btn-outline-primary dropdown-toggle my-1\"
                type=\"button\"
                id=\"dropdown-menu-actions\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
              >
                {{ 'More actions'|trans({}, 'Admin.Orderscustomers.Feature') }}
              </button>

              <div class=\"dropdown-menu\" aria-labelledby=\"dropdown-menu-actions\">
                <button type=\"button\" class=\"dropdown-item\" id=\"js-send-process-order-email-btn\">
                  {{ 'Send pre-filled order to the customer by email'|trans({}, 'Admin.Orderscustomers.Feature') }}
                </button>
                <a class=\"dropdown-item\" id=\"js-process-order-link\" target=\"_blank\">
                  {{ 'Proceed to checkout in the front office'|trans({}, 'Admin.Orderscustomers.Feature') }}
                </a>

                {{ renderhook('displayAdminOrderCreateExtraButtons') }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{ form_end(summaryForm) }}

  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/summary.html.twig");
    }
}
