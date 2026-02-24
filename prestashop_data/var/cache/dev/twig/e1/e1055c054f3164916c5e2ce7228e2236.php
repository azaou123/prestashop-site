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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig */
class __TwigTemplate_fe37cf9f336beff2ebb2cb3daffc2a31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig"));

        // line 25
        echo "
<div class=\"card\" data-role=\"customer-information\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer information", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 31, $this->source); })()), "customerInformation", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31)) {
            // line 32
            echo "      <p class=\"mb-0\">
        ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer ID:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 34, $this->source); })()), "customerInformation", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
            echo "
      </p>

      <p class=\"mb-0\">
        ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name:", [], "Admin.Global"), "html", null, true);
            echo "
        ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 39, $this->source); })()), "customerInformation", [], "any", false, false, false, 39), "gender", [], "any", false, false, false, 39)) {
                // line 40
                echo "          ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 40, $this->source); })()), "customerInformation", [], "any", false, false, false, 40), "gender", [], "any", false, false, false, 40), "html", null, true);
                echo "
        ";
            }
            // line 42
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 42, $this->source); })()), "customerInformation", [], "any", false, false, false, 42), "first_name", [], "any", false, false, false, 42), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 42, $this->source); })()), "customerInformation", [], "any", false, false, false, 42), "last_name", [], "any", false, false, false, 42), "html", null, true);
            echo "
      </p>

      <p class=\"mb-0\">
        ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email:", [], "Admin.Global"), "html", null, true);
            echo "
        ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 47, $this->source); })()), "customerInformation", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
            echo "
      </p>

      <p class=\"mb-0\">
        ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Account creation date:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 52, $this->source); })()), "customerInformation", [], "any", false, false, false, 52), "registration_date", [], "any", false, false, false, 52), "html", null, true);
            echo "
      </p>

      <p class=\"mb-0\">
        ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Number of orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 57, $this->source); })()), "customerInformation", [], "any", false, false, false, 57), "valid_orders_count", [], "any", false, false, false, 57), "html", null, true);
            echo "
      </p>

      <p>
        ";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Amount spent:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 62, $this->source); })()), "customerInformation", [], "any", false, false, false, 62), "total_spent_since_registration", [], "any", false, false, false, 62), "html", null, true);
            echo "
      </p>

      <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_view", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 65, $this->source); })()), "customerInformation", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">
        <i class=\"material-icons\">remove_red_eye</i>
        ";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View customer", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </a>
      <a href=\"mailto:";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 69, $this->source); })()), "customerInformation", [], "any", false, false, false, 69), "email", [], "any", false, false, false, 69), "html", null, true);
            echo "\" class=\"btn btn-secondary\">
        <i class=\"material-icons\">mail</i>
        ";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Write an email", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </a>

    ";
        } else {
            // line 75
            echo "      <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No customer information available yet.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</h2>
    ";
        }
        // line 77
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 77,  157 => 75,  150 => 71,  145 => 69,  140 => 67,  135 => 65,  129 => 62,  125 => 61,  118 => 57,  114 => 56,  107 => 52,  103 => 51,  96 => 47,  92 => 46,  82 => 42,  76 => 40,  74 => 39,  70 => 38,  63 => 34,  59 => 33,  56 => 32,  54 => 31,  48 => 28,  43 => 25,);
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

<div class=\"card\" data-role=\"customer-information\">
  <h3 class=\"card-header\">
    {{ 'Customer information'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    {% if cartView.customerInformation.id %}
      <p class=\"mb-0\">
        {{ 'Customer ID:'|trans({}, 'Admin.Orderscustomers.Feature') }}
        {{ cartView.customerInformation.id }}
      </p>

      <p class=\"mb-0\">
        {{ 'Name:'|trans({}, 'Admin.Global') }}
        {% if cartView.customerInformation.gender %}
          {{ cartView.customerInformation.gender }}
        {% endif %}
        {{ cartView.customerInformation.first_name }} {{ cartView.customerInformation.last_name }}
      </p>

      <p class=\"mb-0\">
        {{ 'Email:'|trans({}, 'Admin.Global') }}
        {{ cartView.customerInformation.email }}
      </p>

      <p class=\"mb-0\">
        {{ 'Account creation date:'|trans({}, 'Admin.Orderscustomers.Feature') }}
        {{ cartView.customerInformation.registration_date }}
      </p>

      <p class=\"mb-0\">
        {{ 'Number of orders:'|trans({}, 'Admin.Orderscustomers.Feature') }}
        {{ cartView.customerInformation.valid_orders_count }}
      </p>

      <p>
        {{ 'Amount spent:'|trans({}, 'Admin.Orderscustomers.Feature') }}
        {{ cartView.customerInformation.total_spent_since_registration }}
      </p>

      <a href=\"{{ path('admin_customers_view', {'customerId': cartView.customerInformation.id }) }}\" class=\"btn btn-primary\">
        <i class=\"material-icons\">remove_red_eye</i>
        {{ 'View customer'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </a>
      <a href=\"mailto:{{ cartView.customerInformation.email }}\" class=\"btn btn-secondary\">
        <i class=\"material-icons\">mail</i>
        {{ 'Write an email'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </a>

    {% else %}
      <p class=\"mb-0\">{{ 'No customer information available yet.'|trans({}, 'Admin.Orderscustomers.Feature') }}</h2>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/customer_information.html.twig");
    }
}
