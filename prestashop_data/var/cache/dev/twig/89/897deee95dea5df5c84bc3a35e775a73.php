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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig */
class __TwigTemplate_bde5e22b512d3c7740565f0346decea9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewableManufacturer"]) || array_key_exists("viewableManufacturer", $context) ? $context["viewableManufacturer"] : (function () { throw new RuntimeError('Variable "viewableManufacturer" does not exist.', 29, $this->source); })()), "manufacturerProducts", [], "any", false, false, false, 29)), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["viewableManufacturer"]) || array_key_exists("viewableManufacturer", $context) ? $context["viewableManufacturer"] : (function () { throw new RuntimeError('Variable "viewableManufacturer" does not exist.', 32, $this->source); })()), "manufacturerProducts", [], "any", false, false, false, 32));
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

          <div class=\"d-inline-block float-right\">
            <div class=\"btn-group-action text-right\">
              <div class=\"btn-group\">
                <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split p-0 no-rotate\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"btn tooltip-link js-submit-row-action dropdown-item\"
                     href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\"
                  >
                    ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
            echo "
                  </a>
                  <button class=\"btn tooltip-link js-form-submit-btn dropdown-item\"
                          type=\"button\"
                          data-form-submit-url=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_unit_action", ["action" => "delete", "id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"
                          data-form-confirm-message=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_sprintf("%s%s?", $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete item #", [], "Admin.International.Feature"), twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 51)), "html", null, true);
            echo "\"
                  >
                    ";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          ";
            // line 61
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 61))) {
                // line 62
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attribute name", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
                echo "</th>
                  <th>";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("EAN-13", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 68
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UPC", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MPN", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 70
                if (( !(isset($context["isAllShopContext"]) || array_key_exists("isAllShopContext", $context) ? $context["isAllShopContext"] : (function () { throw new RuntimeError('Variable "isAllShopContext" does not exist.', 70, $this->source); })()) && (isset($context["isStockManagementEnabled"]) || array_key_exists("isStockManagementEnabled", $context) ? $context["isStockManagementEnabled"] : (function () { throw new RuntimeError('Variable "isStockManagementEnabled" does not exist.', 70, $this->source); })()))) {
                    // line 71
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Available quantity", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 73
                echo "                </tr>
              </thead>
              <tbody>
                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "combinations", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["combination"]) {
                    // line 77
                    echo "                  <tr>
                    <td>";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "attributes", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 79
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "reference", [], "any", false, false, false, 79), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 80
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "ean13", [], "any", false, false, false, 80), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 81
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "upc", [], "any", false, false, false, 81), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "mpn", [], "any", false, false, false, 82), "html", null, true);
                    echo "</td>
                    ";
                    // line 83
                    if (( !(isset($context["isAllShopContext"]) || array_key_exists("isAllShopContext", $context) ? $context["isAllShopContext"] : (function () { throw new RuntimeError('Variable "isAllShopContext" does not exist.', 83, $this->source); })()) && (isset($context["isStockManagementEnabled"]) || array_key_exists("isStockManagementEnabled", $context) ? $context["isStockManagementEnabled"] : (function () { throw new RuntimeError('Variable "isStockManagementEnabled" does not exist.', 83, $this->source); })()))) {
                        // line 84
                        echo "                      <td>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["combination"], "quantity", [], "any", false, false, false, 84), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 86
                    echo "                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "              </tbody>
            </table>
          ";
            } else {
                // line 91
                echo "            <table class=\"table\">
              <thead>
                <tr>
                  <th>";
                // line 94
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ref:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 95
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("EAN-13:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 96
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("UPC:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  <th>";
                // line 97
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MPN:", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "</th>
                  ";
                // line 98
                if ((isset($context["isStockManagementEnabled"]) || array_key_exists("isStockManagementEnabled", $context) ? $context["isStockManagementEnabled"] : (function () { throw new RuntimeError('Variable "isStockManagementEnabled" does not exist.', 98, $this->source); })())) {
                    // line 99
                    echo "                    <th>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Qty:", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</th>
                  ";
                }
                // line 101
                echo "                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 105), "html", null, true);
                echo "</td>
                  <td>";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "ean13", [], "any", false, false, false, 106), "html", null, true);
                echo "</td>
                  <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "upc", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                  <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "mpn", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
                  ";
                // line 109
                if ((isset($context["isStockManagementEnabled"]) || array_key_exists("isStockManagementEnabled", $context) ? $context["isStockManagementEnabled"] : (function () { throw new RuntimeError('Variable "isStockManagementEnabled" does not exist.', 109, $this->source); })())) {
                    // line 110
                    echo "                    <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 110), "html", null, true);
                    echo "</td>
                  ";
                }
                // line 112
                echo "                </tr>
              </tbody>
            </table>
          ";
            }
            // line 116
            echo "        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 119,  264 => 116,  258 => 112,  252 => 110,  250 => 109,  246 => 108,  242 => 107,  238 => 106,  234 => 105,  228 => 101,  222 => 99,  220 => 98,  216 => 97,  212 => 96,  208 => 95,  204 => 94,  199 => 91,  194 => 88,  187 => 86,  181 => 84,  179 => 83,  175 => 82,  171 => 81,  167 => 80,  163 => 79,  159 => 78,  156 => 77,  152 => 76,  147 => 73,  141 => 71,  139 => 70,  135 => 69,  131 => 68,  127 => 67,  123 => 66,  119 => 65,  114 => 62,  112 => 61,  101 => 53,  96 => 51,  92 => 50,  85 => 46,  80 => 44,  66 => 35,  62 => 33,  58 => 32,  52 => 29,  48 => 28,  43 => 25,);
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
  <h3 class=\"card-header\">
    {{ 'Products'|trans({}, 'Admin.Global') }}
    ({{ viewableManufacturer.manufacturerProducts|length }})
  </h3>
  <div class=\"card-body\">
    {% for product in viewableManufacturer.manufacturerProducts %}
      <div class=\"card\">
        <div class=\"card-header clearfix\">
          <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">{{ product.name }}</a>

          <div class=\"d-inline-block float-right\">
            <div class=\"btn-group-action text-right\">
              <div class=\"btn-group\">
                <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split p-0 no-rotate\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\">
                  <a class=\"btn tooltip-link js-submit-row-action dropdown-item\"
                     href=\"{{ path('admin_product_form', {'id': product.id}) }}\"
                  >
                    {{ 'Edit'|trans({}, 'Admin.Actions') }}
                  </a>
                  <button class=\"btn tooltip-link js-form-submit-btn dropdown-item\"
                          type=\"button\"
                          data-form-submit-url=\"{{ path('admin_product_unit_action', {'action': 'delete', 'id': product.id}) }}\"
                          data-form-confirm-message=\"{{ '%s%s?'|format('Delete item #'|trans({}, 'Admin.International.Feature'), product.id) }}\"
                  >
                    {{ 'Delete'|trans({}, 'Admin.Actions') }}
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"card-body\">
          {% if product.combinations is not empty %}
            <table class=\"table\">
              <thead>
                <tr>
                  <th>{{ 'Attribute name'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
                  <th>{{ 'EAN-13'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'UPC'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'MPN'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% if not isAllShopContext and isStockManagementEnabled %}
                    <th>{{ 'Available quantity'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% endif %}
                </tr>
              </thead>
              <tbody>
                {% for combination in product.combinations %}
                  <tr>
                    <td>{{ combination.attributes }}</td>
                    <td>{{ combination.reference }}</td>
                    <td>{{ combination.ean13 }}</td>
                    <td>{{ combination.upc }}</td>
                    <td>{{ combination.mpn }}</td>
                    {% if not isAllShopContext and isStockManagementEnabled %}
                      <td>{{ combination.quantity }}</td>
                    {% endif %}
                  </tr>
                {% endfor %}
              </tbody>
            </table>
          {% else %}
            <table class=\"table\">
              <thead>
                <tr>
                  <th>{{ 'Ref:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'EAN-13:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'UPC:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  <th>{{ 'MPN:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% if isStockManagementEnabled %}
                    <th>{{ 'Qty:'|trans({}, 'Admin.Catalog.Feature') }}</th>
                  {% endif %}
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ product.reference }}</td>
                  <td>{{ product.ean13 }}</td>
                  <td>{{  product.upc }}</td>
                  <td>{{  product.mpn }}</td>
                  {% if isStockManagementEnabled %}
                    <td>{{ product.quantity }}</td>
                  {% endif %}
                </tr>
              </tbody>
            </table>
          {% endif %}
        </div>
      </div>
    {% endfor %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Blocks/View/products.html.twig");
    }
}
