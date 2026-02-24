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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig */
class __TwigTemplate_b7ec095f6c32d84085eed2fe863fb457 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig"));

        // line 25
        echo "
<div class=\"card d-none\" id=\"cart-block\">
  <h3 class=\"card-header\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</h3>
  <div class=\"card-body\">
    <div class=\"alert alert-danger d-none\" id=\"js-cart-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"product-search\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</label>
      <div class=\"col-md-6 col-xl-4\">
        <input id=\"product-search\" type=\"text\" class=\"form-control\">
        <small class=\"form-text\">
          ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for an existing product by typing the first letters of its name.", [], "Admin.Orderscustomers.Help"), "html", null, true);
        echo "
        </small>
      </div>
    </div>

    <div class=\"js-no-products-found d-none\">
        <div class=\"alert alert-danger\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No products found", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <div class=\"js-searching-products d-none\">
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for products", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "</p>
        </div>
    </div>

    <hr class=\"mt-3 mb-3\">

        <div id=\"product-search-results\" class=\"d-none\">
          <form id=\"js-add-product-form\">

            <div class=\"row js-product-select-row\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"product-select\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 col-xl-4\">
                <select name=\"product_id\" id=\"product-select\" class=\"form-control custom-select\" data-customization-label=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"></select>
              </div>
            </div>

            <div class=\"row mt-3 js-combinations-row d-none\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"combination-select\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "</label>
              <div class=\"col-md-6 col-xl-4\">
                <select name=\"combination_id\" id=\"combination-select\" class=\"form-control custom-select\"></select>
              </div>
            </div>

            <div class=\"row mt-3 d-none\" id=\"js-customization-container\">
              <span class=\"col-md-6 col-xl-3 text-md-right col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
              <div class=\"col-md-6 col-xl-4 custom-fields-container\" id=\"js-custom-fields-container\"></div>
            </div>

            <div class=\"row mt-3 js-quantity-row\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"quantity-input\">";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</label>
              <div class=\"col-6 col-xl-3\">
                <input name=\"product_quantity\" id=\"quantity-input\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                ";
        // line 82
        if ((isset($context["stockManagementEnabled"]) || array_key_exists("stockManagementEnabled", $context) ? $context["stockManagementEnabled"] : (function () { throw new RuntimeError('Variable "stockManagementEnabled" does not exist.', 82, $this->source); })())) {
            // line 83
            echo "                  <small class=\"form-text\">
                    ";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
                    <span class=\"js-in-stock-counter\"></span>
                  </small>
                ";
        }
        // line 88
        echo "              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-md-6 offset-md-6 offset-xl-3\">
                <button id=\"add-product-to-cart-btn\" type=\"button\" class=\"btn btn-primary\">
                  ";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add to cart", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
                </button>
              </div>
            </div>

          </form>
          <hr>
        </div>
        <div class=\"js-no-records-found\"></div>
          <div class=\"table-responsive\">
            <table id=\"products-table\" class=\"table d-none\">
              <thead>
              <tr>
                <th>";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price per unit", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        <div class=\"row js-tax-warning d-none\">
          <div class=\"col-xl-6 offset-xl-3\">
            <div class=\"alert alert-warning\">
              <div class=\"alert-text\">
                ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The prices are without taxes.", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"js-cart-currency-select\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <div class=\"col-md-6 col-xl-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-currency-select\">
              ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) || array_key_exists("currencies", $context) ? $context["currencies"] : (function () { throw new RuntimeError('Variable "currencies" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 132
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            </select>
          </div>
        </div>
        <div class=\"row mt-3\">
          <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"js-cart-language-select\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <div class=\"col-md-6 col-xl-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-language-select\">
              ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 141, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["id"]) {
            // line 142
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "            </select>
          </div>
        </div>
  </div>
</div>

";
        // line 150
        $context["requiredFieldMarkTemplate"] = ('' === $tmp = "  <span class=\"js-required-field-mark text-danger d-none\">*</span>
") ? '' : new Markup($tmp, $this->env->getCharset());
        // line 153
        echo "
<script id=\"js-product-custom-text-template\" type=\"text/template\">
  <div class=\"js-product-custom-text\">
    ";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["requiredFieldMarkTemplate"]) || array_key_exists("requiredFieldMarkTemplate", $context) ? $context["requiredFieldMarkTemplate"] : (function () { throw new RuntimeError('Variable "requiredFieldMarkTemplate" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "
    <label for=\"\" class=\"js-product-custom-input-label\"></label>
    <input name=\"\" type=\"text\" class=\"form-control js-product-custom-input\">
  </div>
</script>

<script id=\"js-product-custom-file-template\" type=\"text/template\">
  <div class=\"mt-3\">
      ";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["requiredFieldMarkTemplate"]) || array_key_exists("requiredFieldMarkTemplate", $context) ? $context["requiredFieldMarkTemplate"] : (function () { throw new RuntimeError('Variable "requiredFieldMarkTemplate" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <div class=\"custom-file\">
        <input name=\"\" type=\"file\" class=\"custom-file-input js-product-custom-input\">
        <label class=\"custom-file-label\">
          ";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true);
        echo "
        </label>
      </div>
  </div>
</script>

<script id=\"products-table-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td><input class=\"form-control js-product-unit-input\" type=\"text\"></td>
    <td>
      <input type=\"number\" min=\"1\" class=\"form-control js-product-qty-input\" style=\"max-width: 100px;";
        // line 185
        if ( !(isset($context["stockManagementEnabled"]) || array_key_exists("stockManagementEnabled", $context) ? $context["stockManagementEnabled"] : (function () { throw new RuntimeError('Variable "stockManagementEnabled" does not exist.', 185, $this->source); })())) {
            echo "margin-top:0px;";
        }
        echo "\">
      ";
        // line 186
        if ((isset($context["stockManagementEnabled"]) || array_key_exists("stockManagementEnabled", $context) ? $context["stockManagementEnabled"] : (function () { throw new RuntimeError('Variable "stockManagementEnabled" does not exist.', 186, $this->source); })())) {
            // line 187
            echo "        <small class=\"form-text\">
          ";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In stock", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
          <span class=\"js-product-qty-stock\"></span>
        </small>
      ";
        }
        // line 192
        echo "    </td>
    <td class=\"js-product-total-price\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-product-remove-btn\">";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"products-table-gift-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td>";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td class=\"js-product-gift-qty\"></td>
    <td class=\"js-product-total-price\">";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
    <td></td>
  </tr>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-text-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"></span>
    </small>
  </div>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-file-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"> <img src=\"\" alt=\"\"></span>
    </small>
  </div>
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 210,  351 => 208,  335 => 195,  330 => 192,  323 => 188,  320 => 187,  318 => 186,  312 => 185,  293 => 169,  285 => 164,  274 => 156,  269 => 153,  266 => 150,  258 => 144,  247 => 142,  243 => 141,  237 => 138,  231 => 134,  220 => 132,  216 => 131,  210 => 128,  201 => 122,  187 => 111,  183 => 110,  179 => 109,  175 => 108,  171 => 107,  167 => 106,  151 => 93,  144 => 88,  137 => 84,  134 => 83,  132 => 82,  126 => 79,  118 => 74,  108 => 67,  100 => 62,  95 => 60,  82 => 50,  73 => 44,  63 => 37,  56 => 33,  47 => 27,  43 => 25,);
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

<div class=\"card d-none\" id=\"cart-block\">
  <h3 class=\"card-header\">{{ 'Cart'|trans({}, 'Admin.Orderscustomers.Feature') }}</h3>
  <div class=\"card-body\">
    <div class=\"alert alert-danger d-none\" id=\"js-cart-error-block\">
      <div class=\"alert-text\"></div>
    </div>
    <div class=\"row\">
      <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"product-search\">{{ 'Search for a product'|trans({}, 'Admin.Orderscustomers.Feature') }}</label>
      <div class=\"col-md-6 col-xl-4\">
        <input id=\"product-search\" type=\"text\" class=\"form-control\">
        <small class=\"form-text\">
          {{ 'Search for an existing product by typing the first letters of its name.'|trans({}, 'Admin.Orderscustomers.Help') }}
        </small>
      </div>
    </div>

    <div class=\"js-no-products-found d-none\">
        <div class=\"alert alert-danger\" role=\"alert\">
          <p class=\"alert-text\">{{ 'No products found'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
        </div>
    </div>

    <div class=\"js-searching-products d-none\">
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">{{ 'Searching for products'|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
        </div>
    </div>

    <hr class=\"mt-3 mb-3\">

        <div id=\"product-search-results\" class=\"d-none\">
          <form id=\"js-add-product-form\">

            <div class=\"row js-product-select-row\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"product-select\">{{ 'Product'|trans({}, 'Admin.Global') }}</label>
              <div class=\"col-md-6 col-xl-4\">
                <select name=\"product_id\" id=\"product-select\" class=\"form-control custom-select\" data-customization-label=\"{{ 'Customization'|trans({}, 'Admin.Catalog.Feature') }}\"></select>
              </div>
            </div>

            <div class=\"row mt-3 js-combinations-row d-none\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"combination-select\">{{ 'Combination'|trans({}, 'Admin.Global') }}</label>
              <div class=\"col-md-6 col-xl-4\">
                <select name=\"combination_id\" id=\"combination-select\" class=\"form-control custom-select\"></select>
              </div>
            </div>

            <div class=\"row mt-3 d-none\" id=\"js-customization-container\">
              <span class=\"col-md-6 col-xl-3 text-md-right col-form-label\">{{ 'Customization'|trans({}, 'Admin.Catalog.Feature') }}</span>
              <div class=\"col-md-6 col-xl-4 custom-fields-container\" id=\"js-custom-fields-container\"></div>
            </div>

            <div class=\"row mt-3 js-quantity-row\">
              <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"quantity-input\">{{ 'Quantity'|trans({}, 'Admin.Global') }}</label>
              <div class=\"col-6 col-xl-3\">
                <input name=\"product_quantity\" id=\"quantity-input\" type=\"number\" min=\"1\" value=\"1\" class=\"form-control\">
                {% if stockManagementEnabled %}
                  <small class=\"form-text\">
                    {{ 'In stock'|trans({}, 'Admin.Orderscustomers.Feature') }}
                    <span class=\"js-in-stock-counter\"></span>
                  </small>
                {% endif %}
              </div>
            </div>
            <div class=\"row mt-3\">
              <div class=\"col-md-6 offset-md-6 offset-xl-3\">
                <button id=\"add-product-to-cart-btn\" type=\"button\" class=\"btn btn-primary\">
                  {{ 'Add to cart'|trans({}, 'Admin.Orderscustomers.Feature') }}
                </button>
              </div>
            </div>

          </form>
          <hr>
        </div>
        <div class=\"js-no-records-found\"></div>
          <div class=\"table-responsive\">
            <table id=\"products-table\" class=\"table d-none\">
              <thead>
              <tr>
                <th>{{ 'Product'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Description'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Price per unit'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Price'|trans({}, 'Admin.Global') }}</th>
                <th></th>
              </tr>
              </thead>
              <tbody></tbody>
            </table>
          </div>
        <div class=\"row js-tax-warning d-none\">
          <div class=\"col-xl-6 offset-xl-3\">
            <div class=\"alert alert-warning\">
              <div class=\"alert-text\">
                {{ 'The prices are without taxes.'|trans({}, 'Admin.Orderscustomers.Notification') }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"js-cart-currency-select\">{{ 'Currency'|trans({}, 'Admin.Global') }}</label>
          <div class=\"col-md-6 col-xl-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-currency-select\">
              {% for name, id in currencies %}
                <option value=\"{{ id }}\">{{ name }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        <div class=\"row mt-3\">
          <label class=\"col-md-6 col-xl-3 text-md-right col-form-label\" for=\"js-cart-language-select\">{{ 'Language'|trans({}, 'Admin.Global') }}</label>
          <div class=\"col-md-6 col-xl-4\">
            <select class=\"form-control custom-select\" id=\"js-cart-language-select\">
              {% for name, id in languages %}
                <option value=\"{{ id }}\">{{ name }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
  </div>
</div>

{% set requiredFieldMarkTemplate %}
  <span class=\"js-required-field-mark text-danger d-none\">*</span>
{% endset %}

<script id=\"js-product-custom-text-template\" type=\"text/template\">
  <div class=\"js-product-custom-text\">
    {{ requiredFieldMarkTemplate }}
    <label for=\"\" class=\"js-product-custom-input-label\"></label>
    <input name=\"\" type=\"text\" class=\"form-control js-product-custom-input\">
  </div>
</script>

<script id=\"js-product-custom-file-template\" type=\"text/template\">
  <div class=\"mt-3\">
      {{ requiredFieldMarkTemplate }}
      <label for=\"\" class=\"js-product-custom-input-label\"></label>
      <div class=\"custom-file\">
        <input name=\"\" type=\"file\" class=\"custom-file-input js-product-custom-input\">
        <label class=\"custom-file-label\">
          {{ 'Choose file(s)'|trans({}, 'Admin.Actions') }}
        </label>
      </div>
  </div>
</script>

<script id=\"products-table-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td><input class=\"form-control js-product-unit-input\" type=\"text\"></td>
    <td>
      <input type=\"number\" min=\"1\" class=\"form-control js-product-qty-input\" style=\"max-width: 100px;{% if not stockManagementEnabled %}margin-top:0px;{% endif %}\">
      {% if stockManagementEnabled %}
        <small class=\"form-text\">
          {{ 'In stock'|trans({}, 'Admin.Orderscustomers.Feature') }}
          <span class=\"js-product-qty-stock\"></span>
        </small>
      {% endif %}
    </td>
    <td class=\"js-product-total-price\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-product-remove-btn\">{{ 'Remove'|trans({}, 'Admin.Actions') }}</button>
    </td>
  </tr>
</script>

<script id=\"products-table-gift-row-template\" type=\"text/template\">
  <tr>
    <td><img class=\"js-product-image\" src=\"\" alt=\"\"></td>
    <td class=\"js-product-definition-td\">
      <p class=\"mb-0 js-product-name\"></p>
      <p class=\"js-product-attr\"></p>
    </td>
    <td class=\"js-product-ref\"></td>
    <td>{{ 'Gift'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
    <td class=\"js-product-gift-qty\"></td>
    <td class=\"js-product-total-price\">{{ 'Gift'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
    <td></td>
  </tr>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-text-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"></span>
    </small>
  </div>
</script>

<script type=\"text/template\" id=\"js-table-product-customized-file-template\">
  <div class=\"row\">
    <small class=\"col d-inline\">
      <span class=\"js-customization-name\"></span>
      <span>: </span>
      <span class=\"js-customization-value\"> <img src=\"\" alt=\"\"></span>
    </small>
  </div>
</script>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/cart.html.twig");
    }
}
