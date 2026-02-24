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

/* @PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig */
class __TwigTemplate_4fa3cea1f965c9099ec092d8e5058688 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig"));

        // line 25
        echo "
<div class=\"card\" data-role=\"products-card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewableSupplier"]) || array_key_exists("viewableSupplier", $context) ? $context["viewableSupplier"] : (function () { throw new RuntimeError('Variable "viewableSupplier" does not exist.', 29, $this->source); })()), "supplierProducts", [], "any", false, false, false, 29)), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["viewableSupplier"]) || array_key_exists("viewableSupplier", $context) ? $context["viewableSupplier"] : (function () { throw new RuntimeError('Variable "viewableSupplier" does not exist.', 32, $this->source); })()), "supplierProducts", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 33
            echo "      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
        </div>
        <div class=\"card-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Supplier reference", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Wholesale price", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
            echo "</th>
                <th>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("EAN-13", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                ";
            // line 47
            if (( !(isset($context["isAllShopContext"]) || array_key_exists("isAllShopContext", $context) ? $context["isAllShopContext"] : (function () { throw new RuntimeError('Variable "isAllShopContext" does not exist.', 47, $this->source); })()) && (isset($context["isStockManagementEnabled"]) || array_key_exists("isStockManagementEnabled", $context) ? $context["isStockManagementEnabled"] : (function () { throw new RuntimeError('Variable "isStockManagementEnabled" does not exist.', 47, $this->source); })()))) {
                // line 48
                echo "                  <th>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                ";
            }
            // line 50
            echo "              </tr>
            </thead>
            <tbody>
            ";
            // line 53
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 53))) {
                // line 54
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 55
                    echo "                  <tr>
                    <td>";
                    // line 56
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "attributes", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "attributes", [], "any", false, false, false, 56), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 57
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "supplier_reference", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "supplier_reference", [], "any", false, false, false, 57), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 58
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "wholesale_price", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "wholesale_price", [], "any", false, false, false, 58), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 59
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "reference", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "reference", [], "any", false, false, false, 59), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "ean13", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "ean13", [], "any", false, false, false, 60), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 61
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "upc", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "upc", [], "any", false, false, false, 61), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                    ";
                    // line 62
                    if (( !(isset($context["isAllShopContext"]) || array_key_exists("isAllShopContext", $context) ? $context["isAllShopContext"] : (function () { throw new RuntimeError('Variable "isAllShopContext" does not exist.', 62, $this->source); })()) && (isset($context["isStockManagementEnabled"]) || array_key_exists("isStockManagementEnabled", $context) ? $context["isStockManagementEnabled"] : (function () { throw new RuntimeError('Variable "isStockManagementEnabled" does not exist.', 62, $this->source); })()))) {
                        // line 63
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["combination"], "quantity", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["combination"], "quantity", [], "any", false, false, false, 63), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 65
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "              ";
            } else {
                // line 68
                echo "                <tr>
                  <td>";
                // line 69
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 69), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 70
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 70), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 71
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", true, true, false, 71)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "wholesale_price", [], "any", false, false, false, 71), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 72
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 72), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 73
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "ean13", [], "any", true, true, false, 73)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "ean13", [], "any", false, false, false, 73), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  <td>";
                // line 74
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 74), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "</td>
                  ";
                // line 75
                if (( !(isset($context["isAllShopContext"]) || array_key_exists("isAllShopContext", $context) ? $context["isAllShopContext"] : (function () { throw new RuntimeError('Variable "isAllShopContext" does not exist.', 75, $this->source); })()) && (isset($context["isStockManagementEnabled"]) || array_key_exists("isStockManagementEnabled", $context) ? $context["isStockManagementEnabled"] : (function () { throw new RuntimeError('Variable "isStockManagementEnabled" does not exist.', 75, $this->source); })()))) {
                    // line 76
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 76), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 78
                echo "                </tr>
            ";
            }
            // line 80
            echo "            </tbody>
          </table>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "    ";
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["viewableSupplier"]) || array_key_exists("viewableSupplier", $context) ? $context["viewableSupplier"] : (function () { throw new RuntimeError('Variable "viewableSupplier" does not exist.', 85, $this->source); })()), "supplierProducts", [], "any", false, false, false, 85))) {
            // line 86
            echo "      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No records found", [], "Admin.Global"), "html", null, true);
            echo "</p>
      </div>
    ";
        }
        // line 91
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 91,  222 => 88,  218 => 86,  215 => 85,  205 => 80,  201 => 78,  195 => 76,  193 => 75,  189 => 74,  185 => 73,  181 => 72,  177 => 71,  173 => 70,  169 => 69,  166 => 68,  163 => 67,  156 => 65,  150 => 63,  148 => 62,  144 => 61,  140 => 60,  136 => 59,  132 => 58,  128 => 57,  124 => 56,  121 => 55,  116 => 54,  114 => 53,  109 => 50,  103 => 48,  101 => 47,  97 => 46,  93 => 45,  89 => 44,  85 => 43,  81 => 42,  77 => 41,  66 => 35,  62 => 33,  58 => 32,  52 => 29,  48 => 28,  43 => 25,);
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

<div class=\"card\" data-role=\"products-card\">
  <h3 class=\"card-header\">
    {{ 'Products'|trans({}, 'Admin.Global') }}
    ({{ viewableSupplier.supplierProducts|length }})
  </h3>
  <div class=\"card-body\">
    {% for product in viewableSupplier.supplierProducts %}
      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">{{ product.name }}</a>
        </div>
        <div class=\"card-body\">
          <table class=\"table\">
            <thead>
              <tr>
                <th>{{ 'Attribute name'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Supplier reference'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Wholesale price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'EAN-13'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'UPC'|trans({}, 'Admin.Catalog.Feature') }}</th>
                {% if not isAllShopContext and isStockManagementEnabled %}
                  <th>{{ 'Available quantity'|trans({}, 'Admin.Catalog.Feature') }}</th>
                {% endif %}
              </tr>
            </thead>
            <tbody>
            {% if product.combinations is not empty %}
                {% for combination in product.combinations %}
                  <tr>
                    <td>{{ combination.attributes|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.supplier_reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.wholesale_price|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.ean13|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    <td>{{ combination.upc|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    {% if not isAllShopContext and isStockManagementEnabled %}
                      <td>{{ combination.quantity|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                    {% endif %}
                  </tr>
                {% endfor %}
              {% else %}
                <tr>
                  <td>{{ product.combinations|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.supplier_reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.wholesale_price|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.reference|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.ean13|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  <td>{{ product.upc|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  {% if not isAllShopContext and isStockManagementEnabled %}
                    <td>{{ product.quantity|default('N/A'|trans({}, 'Admin.Global')) }}</td>
                  {% endif %}
                </tr>
            {% endif %}
            </tbody>
          </table>
        </div>
      </div>
    {% endfor %}
    {% if viewableSupplier.supplierProducts is empty %}
      <div class=\"text-center grid-table-empty\">
        <p class=\"mb-0 mt-2\"><i class=\"material-icons\">warning</i></p>
        <p class=\"mb-2\">{{ 'No records found'|trans({}, 'Admin.Global') }}</p>
      </div>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Suppliers/Blocks/View/products.html.twig");
    }
}
