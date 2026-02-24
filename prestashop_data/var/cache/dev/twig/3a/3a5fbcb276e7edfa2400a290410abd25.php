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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig */
class __TwigTemplate_cbd0ecf0e73e7f41975a26ee2903f0c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 26, $this->source); })()), "virtual", [], "any", false, false, false, 26)) {
            // line 27
            echo "  ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 27, $this->source); })()), "returns", [], "any", false, false, false, 27), "orderReturns", [], "any", false, false, false, 27))) {
                // line 28
                echo "    <table class=\"table\" data-role=\"merchandise-returns-grid-table\">
      <thead>
      <tr>
        <th>";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
        <th>";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Global"), "html", null, true);
                echo "</th>
        <th>";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
        <th>";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
      </tr>
      </thead>
      <tbody>
      ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 38, $this->source); })()), "returns", [], "any", false, false, false, 38), "orderReturns", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["return"]) {
                    // line 39
                    echo "        <tr>
          <td data-role=\"merchandise-return-date\">";
                    // line 40
                    echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->dateFormatFull(twig_get_attribute($this->env, $this->source, $context["return"], "date", [], "any", false, false, false, 40)), "html", null, true);
                    echo "</td>
          <td data-role=\"merchandise-return-type\">";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["return"], "type", [], "any", false, false, false, 41), "html", null, true);
                    echo "</td>
          <td data-role=\"merchandise-return-state\">";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["return"], "stateName", [], "any", false, false, false, 42), "html", null, true);
                    echo "</td>
          <td data-role=\"merchandise-return-id\">
            <a class=\"d-print-none\" href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminReturn", true, ["id_order_return" => twig_get_attribute($this->env, $this->source, $context["return"], "idOrderReturn", [], "any", false, false, false, 44), "updateorder_return" => "", "back" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "request", [], "any", false, false, false, 44), "uri", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\">
                ";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["return"], "orderReturnNumber", [], "any", false, false, false, 45), "html", null, true);
                    echo "
            </a>
          </td>
        </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['return'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      </tbody>
    </table>
  ";
            } else {
                // line 53
                echo "    <p class=\"text-center mb-0\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No merchandise returned yet", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
  ";
            }
            // line 55
            echo "
  ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 56, $this->source); })()), "shipping", [], "any", false, false, false, 56), "carrierModuleInfo", [], "any", false, false, false, 56)) {
                // line 57
                echo "    ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 57, $this->source); })()), "shipping", [], "any", false, false, false, 57), "carrierModuleInfo", [], "any", false, false, false, 57);
                echo "
  ";
            }
        } else {
            // line 60
            echo "  <p class=\"text-center mb-0\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Merchandise returns are not applicable for virtual orders", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 60,  126 => 57,  124 => 56,  121 => 55,  115 => 53,  110 => 50,  99 => 45,  95 => 44,  90 => 42,  86 => 41,  82 => 40,  79 => 39,  75 => 38,  68 => 34,  64 => 33,  60 => 32,  56 => 31,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% if not orderForViewing.virtual %}
  {% if orderForViewing.returns.orderReturns is not empty %}
    <table class=\"table\" data-role=\"merchandise-returns-grid-table\">
      <thead>
      <tr>
        <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Type'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Number'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
      </tr>
      </thead>
      <tbody>
      {% for return in orderForViewing.returns.orderReturns %}
        <tr>
          <td data-role=\"merchandise-return-date\">{{ return.date|date_format_full }}</td>
          <td data-role=\"merchandise-return-type\">{{ return.type }}</td>
          <td data-role=\"merchandise-return-state\">{{ return.stateName }}</td>
          <td data-role=\"merchandise-return-id\">
            <a class=\"d-print-none\" href=\"{{ getAdminLink('AdminReturn', true, {'id_order_return': return.idOrderReturn, updateorder_return : '', 'back': app.request.uri}) }}\">
                {{ return.orderReturnNumber }}
            </a>
          </td>
        </tr>
      {% endfor %}
      </tbody>
    </table>
  {% else %}
    <p class=\"text-center mb-0\">{{ 'No merchandise returned yet'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
  {% endif %}

  {% if orderForViewing.shipping.carrierModuleInfo %}
    {{ orderForViewing.shipping.carrierModuleInfo|raw }}
  {% endif %}
{% else %}
  <p class=\"text-center mb-0\">{{ 'Merchandise returns are not applicable for virtual orders'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
{% endif %}
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/merchandise_returns.html.twig");
    }
}
