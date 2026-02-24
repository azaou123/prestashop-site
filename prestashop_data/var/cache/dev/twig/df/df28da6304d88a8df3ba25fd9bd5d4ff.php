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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig */
class __TwigTemplate_a2a18375101fd9ca3a667053fa4ebb53 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'reply_to_customer_form_rest' => [$this, 'block_reply_to_customer_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig"));

        // line 25
        echo "
";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["replyToCustomerThreadForm"]) || array_key_exists("replyToCustomerThreadForm", $context) ? $context["replyToCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "replyToCustomerThreadForm" does not exist.', 26, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_threads_reply", ["customerThreadId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 27, $this->source); })()), "customerThreadId", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27)])]);
        // line 28
        echo "
  <div class=\"card\" data-role=\"employee-answer\">
    <h3 class=\"card-header\">
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your answer to", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "

      ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 33, $this->source); })()), "customerInformation", [], "any", false, false, false, 33), "firstName", [], "any", false, false, false, 33)) {
            // line 34
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 34, $this->source); })()), "customerInformation", [], "any", false, false, false, 34), "firstName", [], "any", false, false, false, 34), "html", null, true);
            echo "
        ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 35, $this->source); })()), "customerInformation", [], "any", false, false, false, 35), "lastName", [], "any", false, false, false, 35), "html", null, true);
            echo "
      ";
        } else {
            // line 37
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 37, $this->source); })()), "customerInformation", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true);
            echo "
      ";
        }
        // line 39
        echo "    </h3>

    <div class=\"card-body\">
      <div class=\"media\">
        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["employeeAvatarUrl"]) || array_key_exists("employeeAvatarUrl", $context) ? $context["employeeAvatarUrl"] : (function () { throw new RuntimeError('Variable "employeeAvatarUrl" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\" class=\"mr-3 rounded-circle thread-message-employee-image\">
        <div class=\"media-body\">
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["replyToCustomerThreadForm"]) || array_key_exists("replyToCustomerThreadForm", $context) ? $context["replyToCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "replyToCustomerThreadForm" does not exist.', 45, $this->source); })()), "reply_message", [], "any", false, false, false, 45), 'widget', ["attr" => ["rows" => 5]]);
        echo "
        </div>
      </div>

      <div class=\"d-none\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["replyToCustomerThreadForm"]) || array_key_exists("replyToCustomerThreadForm", $context) ? $context["replyToCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "replyToCustomerThreadForm" does not exist.', 50, $this->source); })()), "_token", [], "any", false, false, false, 50), 'widget');
        echo "
      </div>

      ";
        // line 53
        $this->displayBlock('reply_to_customer_form_rest', $context, $blocks);
        // line 56
        echo "    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["replyToCustomerThreadForm"]) || array_key_exists("replyToCustomerThreadForm", $context) ? $context["replyToCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "replyToCustomerThreadForm" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 53
    public function block_reply_to_customer_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reply_to_customer_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "reply_to_customer_form_rest"));

        // line 54
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["replyToCustomerThreadForm"]) || array_key_exists("replyToCustomerThreadForm", $context) ? $context["replyToCustomerThreadForm"] : (function () { throw new RuntimeError('Variable "replyToCustomerThreadForm" does not exist.', 54, $this->source); })()), 'rest');
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 54,  130 => 53,  118 => 64,  111 => 60,  105 => 56,  103 => 53,  97 => 50,  89 => 45,  84 => 43,  78 => 39,  72 => 37,  67 => 35,  62 => 34,  60 => 33,  55 => 31,  50 => 28,  48 => 27,  47 => 26,  44 => 25,);
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

{{ form_start(replyToCustomerThreadForm, {
  'action': path('admin_customer_threads_reply', {'customerThreadId': customerThreadView.customerThreadId.value})
}) }}
  <div class=\"card\" data-role=\"employee-answer\">
    <h3 class=\"card-header\">
      {{ 'Your answer to'|trans({}, 'Admin.Orderscustomers.Feature') }}

      {% if customerThreadView.customerInformation.firstName %}
        {{ customerThreadView.customerInformation.firstName }}
        {{ customerThreadView.customerInformation.lastName }}
      {% else %}
        {{ customerThreadView.customerInformation.email }}
      {% endif %}
    </h3>

    <div class=\"card-body\">
      <div class=\"media\">
        <img src=\"{{ employeeAvatarUrl }}\" class=\"mr-3 rounded-circle thread-message-employee-image\">
        <div class=\"media-body\">
          {{ form_widget(replyToCustomerThreadForm.reply_message, {'attr': {'rows': 5}}) }}
        </div>
      </div>

      <div class=\"d-none\">
        {{ form_widget(replyToCustomerThreadForm._token) }}
      </div>

      {% block reply_to_customer_form_rest %}
        {{ form_rest(replyToCustomerThreadForm) }}
      {% endblock %}
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Send'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{{ form_end(replyToCustomerThreadForm) }}
", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/your_answer.html.twig");
    }
}
