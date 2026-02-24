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

/* @PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig */
class __TwigTemplate_a47c69113b010165350bf52bbd3ba2dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig", 26);
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "  <script type=\"text/javascript\">
    ";
        // line 34
        echo "
    // legacy behavior
    if (typeof window.parent.setupCustomer !== \"undefined\") {
      \$('#customer', window.parent.document).val('";
        // line 37
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["customerEmail"]) || array_key_exists("customerEmail", $context) ? $context["customerEmail"] : (function () { throw new RuntimeError('Variable "customerEmail" does not exist.', 37, $this->source); })()), "js"), "html", null, true);
        echo "');
      window.parent.setupCustomer(";
        // line 38
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["customerId"]) || array_key_exists("customerId", $context) ? $context["customerId"] : (function () { throw new RuntimeError('Variable "customerId" does not exist.', 38, $this->source); })()), "js"), "html", null, true);
        echo ");
    }
    // symfony behavior
    if (typeof window.parent.order_create !== \"undefined\") {
      \$('#customer-search-input', window.parent.document).val('";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["customerEmail"]) || array_key_exists("customerEmail", $context) ? $context["customerEmail"] : (function () { throw new RuntimeError('Variable "customerEmail" does not exist.', 42, $this->source); })()), "js"), "html", null, true);
        echo "');
      window.parent.order_create.searchCustomerByString('";
        // line 43
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["customerEmail"]) || array_key_exists("customerEmail", $context) ? $context["customerEmail"] : (function () { throw new RuntimeError('Variable "customerEmail" does not exist.', 43, $this->source); })()), "js"), "html", null, true);
        echo "');
    }

    window.parent.\$.fancybox.close();
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  106 => 42,  99 => 38,  95 => 37,  90 => 34,  87 => 32,  77 => 31,  59 => 28,  36 => 26,);
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
{% endblock %}

{% block javascripts %}
  <script type=\"text/javascript\">
    {# Script dedicated to close \"Create a customer\" fancybox used in Add an Order #}

    // legacy behavior
    if (typeof window.parent.setupCustomer !== \"undefined\") {
      \$('#customer', window.parent.document).val('{{ customerEmail|e('js') }}');
      window.parent.setupCustomer({{ customerId|e('js') }});
    }
    // symfony behavior
    if (typeof window.parent.order_create !== \"undefined\") {
      \$('#customer-search-input', window.parent.document).val('{{ customerEmail|e('js') }}');
      window.parent.order_create.searchCustomerByString('{{ customerEmail|e('js') }}');
    }

    window.parent.\$.fancybox.close();
  </script>
{% endblock %}
", "@PrestaShop/Admin/Sell/Customer/modal_create_success.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/modal_create_success.html.twig");
    }
}
