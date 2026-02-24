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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig */
class __TwigTemplate_d043574a0cd63979725b777eeafb1119 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'forward_customer_thread_form_rest' => [$this, 'block_forward_customer_thread_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig"));

        // line 25
        echo "<div class=\"modal fade\"
     id=\"forwardThreadModal\"
     tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"forwardThreadModalLabel\"
     aria-hidden=\"true\"
>
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forwardCustomerThreadForm"]) || array_key_exists("forwardCustomerThreadForm", $context) ? $context["forwardCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "forwardCustomerThreadForm" does not exist.', 33, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_threads_forward", ["customerThreadId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
(isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 35, $this->source); })()), "customerThreadId", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35)]), "attr" => ["class" => "form-horizontal"]]);
        // line 38
        echo "
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"forwardThreadModalLabel\">
            ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward this discussion", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </h5>
          <button type=\"button\"
                  class=\"close\"
                  data-dismiss=\"modal\"
                  aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\"
          >
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward this discussion to an employee:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forwardCustomerThreadForm"]) || array_key_exists("forwardCustomerThreadForm", $context) ? $context["forwardCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "forwardCustomerThreadForm" does not exist.', 58, $this->source); })()), "employee_id", [], "any", false, false, false, 58), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row d-none\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forwardCustomerThreadForm"]) || array_key_exists("forwardCustomerThreadForm", $context) ? $context["forwardCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "forwardCustomerThreadForm" does not exist.', 67, $this->source); })()), "someone_else_email", [], "any", false, false, false, 67), 'widget');
        echo "
            </div>
          </div>

          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Comment:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
            </label>
            <div class=\"col-sm\">
              ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forwardCustomerThreadForm"]) || array_key_exists("forwardCustomerThreadForm", $context) ? $context["forwardCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "forwardCustomerThreadForm" does not exist.', 76, $this->source); })()), "comment", [], "any", false, false, false, 76), 'widget', ["attr" => ["placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can add a comment here.", [], "Admin.Orderscustomers.Help")]]);
        // line 78
        echo "
            </div>
          </div>

          <div class=\"d-none\">
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forwardCustomerThreadForm"]) || array_key_exists("forwardCustomerThreadForm", $context) ? $context["forwardCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "forwardCustomerThreadForm" does not exist.', 83, $this->source); })()), "_token", [], "any", false, false, false, 83), 'widget');
        echo "
          </div>

          ";
        // line 86
        $this->displayBlock('forward_customer_thread_form_rest', $context, $blocks);
        // line 89
        echo "        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    ";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["forwardCustomerThreadForm"]) || array_key_exists("forwardCustomerThreadForm", $context) ? $context["forwardCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "forwardCustomerThreadForm" does not exist.', 99, $this->source); })()), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 86
    public function block_forward_customer_thread_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "forward_customer_thread_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "forward_customer_thread_form_rest"));

        // line 87
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["forwardCustomerThreadForm"]) || array_key_exists("forwardCustomerThreadForm", $context) ? $context["forwardCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "forwardCustomerThreadForm" does not exist.', 87, $this->source); })()), 'rest');
        echo "
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 87,  167 => 86,  153 => 99,  146 => 95,  140 => 92,  135 => 89,  133 => 86,  127 => 83,  120 => 78,  118 => 76,  112 => 73,  103 => 67,  97 => 64,  88 => 58,  82 => 55,  71 => 47,  63 => 42,  57 => 38,  55 => 35,  54 => 33,  44 => 25,);
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
<div class=\"modal fade\"
     id=\"forwardThreadModal\"
     tabindex=\"-1\"
     role=\"dialog\"
     aria-labelledby=\"forwardThreadModalLabel\"
     aria-hidden=\"true\"
>
  <div class=\"modal-dialog\" role=\"document\">
    {{ form_start(forwardCustomerThreadForm, {
      'action': path('admin_customer_threads_forward', {
        'customerThreadId': customerThreadView.customerThreadId.value
      }),
      'attr': {'class': 'form-horizontal'}
    }) }}
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"forwardThreadModalLabel\">
            {{ 'Forward this discussion'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </h5>
          <button type=\"button\"
                  class=\"close\"
                  data-dismiss=\"modal\"
                  aria-label=\"{{ 'Close'|trans({}, 'Admin.Actions') }}\"
          >
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              {{ 'Forward this discussion to an employee:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </label>
            <div class=\"col-sm\">
              {{ form_widget(forwardCustomerThreadForm.employee_id) }}
            </div>
          </div>

          <div class=\"form-group row d-none\">
            <label for=\"customer_email\" class=\"form-control-label\">
              {{ 'Email'|trans({}, 'Admin.Global') }}
            </label>
            <div class=\"col-sm\">
              {{ form_widget(forwardCustomerThreadForm.someone_else_email) }}
            </div>
          </div>

          <div class=\"form-group row\">
            <label for=\"customer_email\" class=\"form-control-label\">
              {{ 'Comment:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            </label>
            <div class=\"col-sm\">
              {{ form_widget(forwardCustomerThreadForm.comment, {
                'attr': {'placeholder': 'You can add a comment here.'|trans({}, 'Admin.Orderscustomers.Help')}
              }) }}
            </div>
          </div>

          <div class=\"d-none\">
            {{ form_widget(forwardCustomerThreadForm._token) }}
          </div>

          {% block forward_customer_thread_form_rest %}
            {{ form_rest(forwardCustomerThreadForm) }}
          {% endblock %}
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
            {{ 'Close'|trans({}, 'Admin.Actions') }}
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            {{ 'Forward'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </button>
        </div>
      </div>
    {{ form_end(forwardCustomerThreadForm) }}
  </div>
</div>
", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig");
    }
}
