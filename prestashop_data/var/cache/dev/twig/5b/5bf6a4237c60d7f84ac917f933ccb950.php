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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig */
class __TwigTemplate_8c68d528802e0bed130f4e14157e6bb7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-body\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 28, $this->source); })()), "actions", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 29
            echo "      <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customer_threads_view_update_status", ["customerThreadId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 30
(isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 30, $this->source); })()), "customerThreadId", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30)]), "html", null, true);
            // line 31
            echo "\" method=\"post\" class=\"d-inline\">
        <input type=\"hidden\" name=\"newStatus\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "value", [], "any", false, false, false, 32), "html", null, true);
            echo "\"/>
        <button class=\"btn btn-outline-secondary\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 33), "html", null, true);
            echo "</button>
      </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
    <button class=\"btn btn-outline-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#forwardThreadModal\">
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Forward this discussion to another employee", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </button>

    ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig", 41)->display($context);
        // line 42
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 42,  82 => 41,  76 => 38,  72 => 36,  63 => 33,  59 => 32,  56 => 31,  54 => 30,  52 => 29,  48 => 28,  43 => 25,);
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

<div class=\"card\">
  <div class=\"card-body\">
    {% for action in customerThreadView.actions %}
      <form action=\"{{ path('admin_customer_threads_view_update_status', {
        'customerThreadId': customerThreadView.customerThreadId.value
      }) }}\" method=\"post\" class=\"d-inline\">
        <input type=\"hidden\" name=\"newStatus\" value=\"{{ action.value }}\"/>
        <button class=\"btn btn-outline-secondary\">{{ action.label }}</button>
      </form>
    {% endfor %}

    <button class=\"btn btn-outline-secondary\" type=\"button\" data-toggle=\"modal\" data-target=\"#forwardThreadModal\">
      {{ 'Forward this discussion to another employee'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </button>

    {% include '@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/forward_thread_modal.html.twig' %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_actions.html.twig");
    }
}
