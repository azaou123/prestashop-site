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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig */
class __TwigTemplate_7ab16e08d782425f1eab1b14018023ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig"));

        // line 25
        echo "
<div class=\"row mt-4\">
  <div class=\"col\">
    <div class=\"media\">
      ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 29, $this->source); })()), "customerInformation", [], "any", false, false, false, 29), "customerId", [], "any", false, false, false, 29)) {
            // line 30
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_view", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 30, $this->source); })()), "customerInformation", [], "any", false, false, false, 30), "customerId", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">
          <i class=\"material-icons thread-customer-icon\">
            person
          </i>
        </a>
      ";
        } else {
            // line 36
            echo "        <i class=\"material-icons thread-customer-icon\">
          person
        </i>
      ";
        }
        // line 40
        echo "
      <div class=\"media-body\">
        <h2 class=\"mt-0 mb-0\">
          ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 43, $this->source); })()), "customerInformation", [], "any", false, false, false, 43), "firstName", [], "any", false, false, false, 43)) {
            // line 44
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_view", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 44, $this->source); })()), "customerInformation", [], "any", false, false, false, 44), "customerId", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">
              ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 45, $this->source); })()), "customerInformation", [], "any", false, false, false, 45), "firstName", [], "any", false, false, false, 45), "html", null, true);
            echo "
              ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 46, $this->source); })()), "customerInformation", [], "any", false, false, false, 46), "lastName", [], "any", false, false, false, 46), "html", null, true);
            echo "
              <small class=\"text-muted\">(";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 47, $this->source); })()), "customerInformation", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
            echo ")</small>
            </a>
          ";
        } else {
            // line 50
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 50, $this->source); })()), "customerInformation", [], "any", false, false, false, 50), "email", [], "any", false, false, false, 50), "html", null, true);
            echo "
          ";
        }
        // line 52
        echo "        </h2>
        <p>
          ";
        // line 54
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 54, $this->source); })()), "contactName", [], "any", false, false, false, 54))) {
            // line 55
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
            <span class=\"badge badge-primary rounded\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 56, $this->source); })()), "contactName", [], "any", false, false, false, 56), "html", null, true);
            echo "</span>
          ";
        }
        // line 58
        echo "        </p>
      </div>

    </div>
  </div>
  <div class=\"col\">
    ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 64, $this->source); })()), "customerInformation", [], "any", false, false, false, 64), "validatedOrdersCount", [], "any", false, false, false, 64)) {
            // line 65
            echo "      ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1]%count%[/1] order(s) validated for a total amount of [2]%total%[/2]", ["%count%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 66
(isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 66, $this->source); })()), "customerInformation", [], "any", false, false, false, 66), "validatedOrdersCount", [], "any", false, false, false, 66), "%total%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 67
(isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 67, $this->source); })()), "customerInformation", [], "any", false, false, false, 67), "validatedOrdersAmount", [], "any", false, false, false, 67), "[1]" => "<span class=\"badge badge-primary rounded\">", "[/1]" => "</span>", "[2]" => "<span class=\"badge badge-success rounded\">", "[/2]" => "</span>"], "Admin.Orderscustomers.Feature");
            // line 72
            echo "
    ";
        } else {
            // line 74
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No order validated for the moment. By default, an order is considered validated when its payment is accepted.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
    ";
        }
        // line 76
        echo "
    <p class=\"text-muted\">
      ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer since: %s", ["%s" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 79
(isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 79, $this->source); })()), "customerInformation", [], "any", false, false, false, 79), "customerSinceDate", [], "any", false, false, false, 79)], "Admin.Orderscustomers.Feature"), "html", null, true);
        // line 81
        echo "
    </p>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 81,  145 => 79,  144 => 78,  140 => 76,  134 => 74,  130 => 72,  128 => 67,  127 => 66,  125 => 65,  123 => 64,  115 => 58,  110 => 56,  105 => 55,  103 => 54,  99 => 52,  93 => 50,  87 => 47,  83 => 46,  79 => 45,  74 => 44,  72 => 43,  67 => 40,  61 => 36,  51 => 30,  49 => 29,  43 => 25,);
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

<div class=\"row mt-4\">
  <div class=\"col\">
    <div class=\"media\">
      {% if customerThreadView.customerInformation.customerId %}
        <a href=\"{{ path('admin_customers_view', {'customerId': customerThreadView.customerInformation.customerId}) }}\">
          <i class=\"material-icons thread-customer-icon\">
            person
          </i>
        </a>
      {% else %}
        <i class=\"material-icons thread-customer-icon\">
          person
        </i>
      {% endif %}

      <div class=\"media-body\">
        <h2 class=\"mt-0 mb-0\">
          {% if customerThreadView.customerInformation.firstName %}
            <a href=\"{{ path('admin_customers_view', {'customerId': customerThreadView.customerInformation.customerId}) }}\">
              {{ customerThreadView.customerInformation.firstName }}
              {{ customerThreadView.customerInformation.lastName }}
              <small class=\"text-muted\">({{ customerThreadView.customerInformation.email }})</small>
            </a>
          {% else %}
            {{ customerThreadView.customerInformation.email }}
          {% endif %}
        </h2>
        <p>
          {% if customerThreadView.contactName is not empty %}
            {{ 'To:'|trans({}, 'Admin.Orderscustomers.Feature') }}
            <span class=\"badge badge-primary rounded\">{{ customerThreadView.contactName }}</span>
          {% endif %}
        </p>
      </div>

    </div>
  </div>
  <div class=\"col\">
    {% if customerThreadView.customerInformation.validatedOrdersCount %}
      {{ '[1]%count%[/1] order(s) validated for a total amount of [2]%total%[/2]'|trans({
        '%count%': customerThreadView.customerInformation.validatedOrdersCount,
        '%total%': customerThreadView.customerInformation.validatedOrdersAmount,
        '[1]': '<span class=\"badge badge-primary rounded\">',
        '[/1]': '</span>',
        '[2]': '<span class=\"badge badge-success rounded\">',
        '[/2]': '</span>'
      }, 'Admin.Orderscustomers.Feature')|raw }}
    {% else %}
      {{ 'No order validated for the moment. By default, an order is considered validated when its payment is accepted.'|trans({}, 'Admin.Orderscustomers.Feature') }}
    {% endif %}

    <p class=\"text-muted\">
      {{ 'Customer since: %s'|trans(
        {'%s': customerThreadView.customerInformation.customerSinceDate},
        'Admin.Orderscustomers.Feature'
      ) }}
    </p>
  </div>
</div>
", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/customer_information.html.twig");
    }
}
