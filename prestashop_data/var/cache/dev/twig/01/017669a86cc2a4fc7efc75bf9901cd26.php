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

/* @PrestaShop/Admin/Sell/Customer/view.html.twig */
class __TwigTemplate_8e1e6999fab01558e954ecdd50897e4d extends Template
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
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/view.html.twig"));

        // line 26
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Information about customer %name%", ["%name%" => ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 26, $this->source); })()), "personalInformation", [], "any", false, false, false, 26), "firstName", [], "any", false, false, false, 26), 0, 1) . ". ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 26, $this->source); })()), "personalInformation", [], "any", false, false, false, 26), "lastName", [], "any", false, false, false, 26))], "Admin.Orderscustomers.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "  <div class=\"row\">
    <div class=\"col\">
      ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 34)->display($context);
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 35)->display($context);
        // line 36
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 36)->display($context);
        // line 37
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/viewed_products.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 37)->display($context);
        // line 38
        echo "    </div>

    <div class=\"col\">
      ";
        // line 41
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 41)->display($context);
        // line 42
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 42)->display($context);
        // line 43
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 43)->display($context);
        // line 44
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 44)->display($context);
        // line 45
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 45)->display($context);
        // line 46
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 46)->display($context);
        // line 47
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 47)->display($context);
        // line 48
        echo "    </div>
  </div>

  <div class=\"row\">
    ";
        // line 52
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminCustomers", ["id_customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 52, $this->source); })()), "customerId", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52)]);
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 59
        $this->loadTemplate("@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig", "@PrestaShop/Admin/Sell/Customer/view.html.twig", 59)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  144 => 57,  134 => 56,  121 => 52,  115 => 48,  112 => 47,  109 => 46,  106 => 45,  103 => 44,  100 => 43,  97 => 42,  95 => 41,  90 => 38,  87 => 37,  84 => 36,  81 => 35,  78 => 34,  76 => 33,  72 => 31,  62 => 30,  51 => 28,  49 => 26,  36 => 28,);
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

{% set layoutTitle = 'Information about customer %name%'|trans({'%name%': customerInformation.personalInformation.firstName[0:1] ~ '. ' ~ customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') %}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  <div class=\"row\">
    <div class=\"col\">
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/bought_products.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/viewed_products.html.twig' %}
    </div>

    <div class=\"col\">
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/private_note.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/messages.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/discounts.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/last_connections.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig' %}
      {% include '@PrestaShop/Admin/Sell/Customer/Blocks/View/addresses.html.twig' %}
    </div>
  </div>

  <div class=\"row\">
    {{ renderhook('displayAdminCustomers', {'id_customer': customerInformation.customerId.value}) }}
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  {% include '@PrestaShop/Admin/Sell/Customer/Blocks/javascript.html.twig' %}
{% endblock %}
", "@PrestaShop/Admin/Sell/Customer/view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/view.html.twig");
    }
}
