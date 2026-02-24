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

/* @PrestaShop/Admin/Sell/Order/Cart/view.html.twig */
class __TwigTemplate_4c0192efd3a547c0d38e96df50683b46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'cart_kpis' => [$this, 'block_cart_kpis'],
            'cart_order_information' => [$this, 'block_cart_order_information'],
            'cart_customer_information' => [$this, 'block_cart_customer_information'],
            'cart_summary' => [$this, 'block_cart_summary'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "  ";
        $this->displayBlock('cart_kpis', $context, $blocks);
        // line 35
        echo "
  <div class=\"row\">
    <div class=\"col-md-6\">
      ";
        // line 38
        $this->displayBlock('cart_order_information', $context, $blocks);
        // line 41
        echo "    </div>
    <div class=\"col-md-6\">
      ";
        // line 43
        $this->displayBlock('cart_customer_information', $context, $blocks);
        // line 46
        echo "    </div>
  </div>

  ";
        // line 49
        $this->displayBlock('cart_summary', $context, $blocks);
        // line 52
        echo "
  ";
        // line 53
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 53, $this->source); })()), "cartSummary", [], "any", false, false, false, 53), "cart_link", [], "any", false, false, false, 53))) {
            // line 54
            echo "    <div class=\"card\" data-role=\"customer-information\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">mail</i>
        ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Share this cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </h3>
      <div class=\"card-body\">
        <p>";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thanks to this link, your customer can open the cart, check its contents and validate the order, if it suits them.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</p>
        <div class=\"card bg-light p-2 mb-0\">
        ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 62, $this->source); })()), "cartSummary", [], "any", false, false, false, 62), "cart_link", [], "any", false, false, false, 62), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 67
        echo "  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_cart_kpis($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_kpis"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_kpis"));

        // line 30
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:renderKpiRow", ["kpiRow" =>         // line 32
(isset($context["cartKpi"]) || array_key_exists("cartKpi", $context) ? $context["cartKpi"] : (function () { throw new RuntimeError('Variable "cartKpi" does not exist.', 32, $this->source); })())]));
        // line 33
        echo "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_cart_order_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_order_information"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_order_information"));

        // line 39
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 39)->display($context);
        // line 40
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 43
    public function block_cart_customer_information($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_customer_information"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_customer_information"));

        // line 44
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 44)->display($context);
        // line 45
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_cart_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_summary"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cart_summary"));

        // line 50
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", 50)->display($context);
        // line 51
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 51,  216 => 50,  206 => 49,  196 => 45,  193 => 44,  183 => 43,  173 => 40,  170 => 39,  160 => 38,  149 => 33,  147 => 32,  145 => 30,  135 => 29,  124 => 67,  116 => 62,  111 => 60,  105 => 57,  100 => 54,  98 => 53,  95 => 52,  93 => 49,  88 => 46,  86 => 43,  82 => 41,  80 => 38,  75 => 35,  72 => 29,  62 => 28,  39 => 26,);
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

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {% block cart_kpis %}
    {{ render(controller(
      'PrestaShopBundle:Admin\\\\Common:renderKpiRow',
      { 'kpiRow': cartKpi }
    )) }}
  {% endblock %}

  <div class=\"row\">
    <div class=\"col-md-6\">
      {% block cart_order_information %}
        {% include '@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/order_information.html.twig' %}
      {% endblock %}
    </div>
    <div class=\"col-md-6\">
      {% block cart_customer_information %}
        {% include '@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig' %}
      {% endblock %}
    </div>
  </div>

  {% block cart_summary %}
    {% include '@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig' %}
  {% endblock %}

  {% if cartView.cartSummary.cart_link is not empty %}
    <div class=\"card\" data-role=\"customer-information\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">mail</i>
        {{ 'Share this cart'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p>{{ 'Thanks to this link, your customer can open the cart, check its contents and validate the order, if it suits them.'|trans({}, 'Admin.Orderscustomers.Feature') }}</p>
        <div class=\"card bg-light p-2 mb-0\">
        {{ cartView.cartSummary.cart_link }}
        </div>
      </div>
    </div>
  {% endif %}
  
{% endblock %}
", "@PrestaShop/Admin/Sell/Order/Cart/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/view.html.twig");
    }
}
