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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig */
class __TwigTemplate_9cfc39f64d6670ed5a0f4a5be5cdd616 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig"));

        // line 25
        echo "
<div class=\"customer-carts-card card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_cart</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 30, $this->source); })()), "cartsInformation", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 33, $this->source); })()), "cartsInformation", [], "any", false, false, false, 33))) {
            // line 34
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th class=\"text-right\">";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 45, $this->source); })()), "cartsInformation", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
                // line 46
                echo "          ";
                $context["cartViewUrl"] = $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCarts", true, ["id_cart" => twig_get_attribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 46), "viewcart" => 1]);
                // line 47
                echo "
          <tr class=\"customer-cart\">
            <td class=\"customer-cart-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 49
                echo twig_escape_filter($this->env, (isset($context["cartViewUrl"]) || array_key_exists("cartViewUrl", $context) ? $context["cartViewUrl"] : (function () { throw new RuntimeError('Variable "cartViewUrl" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cartId", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["cartViewUrl"]) || array_key_exists("cartViewUrl", $context) ? $context["cartViewUrl"] : (function () { throw new RuntimeError('Variable "cartViewUrl" does not exist.', 50, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cartCreationDate", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-carrier js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 51
                echo twig_escape_filter($this->env, (isset($context["cartViewUrl"]) || array_key_exists("cartViewUrl", $context) ? $context["cartViewUrl"] : (function () { throw new RuntimeError('Variable "cartViewUrl" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "carrierName", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["cartViewUrl"]) || array_key_exists("cartViewUrl", $context) ? $context["cartViewUrl"] : (function () { throw new RuntimeError('Variable "cartViewUrl" does not exist.', 52, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "cartTotal", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
            <td class=\"customer-cart-actions text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, (isset($context["cartViewUrl"]) || array_key_exists("cartViewUrl", $context) ? $context["cartViewUrl"] : (function () { throw new RuntimeError('Variable "cartViewUrl" does not exist.', 56, $this->source); })()), "html", null, true);
                echo "\"
                     class=\"btn tooltip-link dropdown-item grid-view-row-link\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions"), "html", null, true);
                echo "\"
                  >
                    <i class=\"material-icons\">zoom_in</i>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 72
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No cart is available", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 76
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 76,  157 => 73,  154 => 72,  149 => 69,  134 => 60,  127 => 56,  118 => 52,  112 => 51,  106 => 50,  100 => 49,  96 => 47,  93 => 46,  89 => 45,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 37,  61 => 34,  59 => 33,  53 => 30,  49 => 29,  43 => 25,);
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

<div class=\"customer-carts-card card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_cart</i>
    {{ 'Carts'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.cartsInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
    {% if customerInformation.cartsInformation is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Carrier'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Total'|trans({}, 'Admin.Global') }}</th>
            <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
        {% for cart in customerInformation.cartsInformation %}
          {% set cartViewUrl = getAdminLink('AdminCarts', true, {'id_cart': cart.cartId, 'viewcart': 1}) %}

          <tr class=\"customer-cart\">
            <td class=\"customer-cart-id js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.cartId }}</td>
            <td class=\"customer-cart-date js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.cartCreationDate }}</td>
            <td class=\"customer-cart-carrier js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.carrierName }}</td>
            <td class=\"customer-cart-total js-linkable-item cursor-pointer\" data-linkable-href=\"{{ cartViewUrl }}\">{{ cart.cartTotal }}</td>
            <td class=\"customer-cart-actions text-right\">
              <div class=\"btn-group-action\">
                <div class=\"btn-group\">
                  <a href=\"{{ cartViewUrl }}\"
                     class=\"btn tooltip-link dropdown-item grid-view-row-link\"
                     data-toggle=\"pstooltip\"
                     data-placement=\"top\"
                     data-original-title=\"{{ 'View'|trans({}, 'Admin.Actions') }}\"
                  >
                    <i class=\"material-icons\">zoom_in</i>
                  </a>
                </div>
              </div>
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ 'No cart is available'|trans({}, 'Admin.Orderscustomers.Notification') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/carts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/carts.html.twig");
    }
}
