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

/* @PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig */
class __TwigTemplate_a724087c3c7e11e492732e9d001ba15a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig"));

        // line 25
        echo "
<div class=\"card\" data-role=\"cart-summary\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart summary", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unit price", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock", [], "Admin.Global"), "html", null, true);
        echo "</th>
          <th>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 43, $this->source); })()), "cartSummary", [], "any", false, false, false, 43), "products", [], "any", false, false, false, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 44
            echo "          ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 44))) {
                // line 45
                echo "            <tr>
              <td>";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 46);
                echo "</td>
              <td>
                <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
                  ";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49), "html", null, true);
                echo "

                  ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 52), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                  <br>

                  ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 58), "html", null, true);
                    echo "
                  ";
                }
                // line 60
                echo "
                  ";
                // line 61
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 61) && twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 61))) {
                    // line 62
                    echo "                    / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 62), "html", null, true);
                    echo "
                  ";
                }
                // line 64
                echo "                </a>
              </td>
              <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "unit_price_formatted", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>
              <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 67), "html", null, true);
                echo "</td>
              <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock_quantity", [], "any", false, false, false, 68), "html", null, true);
                echo "</td>
              <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "total_price_formatted", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
            </tr>

            <tr>
              <td colspan=\"2\">
                ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 74), "fields", [], "any", false, false, false, 74));
                foreach ($context['_seq'] as $context["_key"] => $context["customizationField"]) {
                    // line 75
                    echo "                  <div class=\"row\">
                    <div class=\"col-6 text-right\">
                      ";
                    // line 77
                    if (twig_get_attribute($this->env, $this->source, $context["customizationField"], "name", [], "any", false, false, false, 77)) {
                        // line 78
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizationField"], "name", [], "any", false, false, false, 78), "html", null, true);
                        echo "</strong>
                      ";
                    } else {
                        // line 80
                        echo "                        <strong>";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text #", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                        echo "</strong>
                      ";
                    }
                    // line 82
                    echo "                    </div>
                    <div class=\"col-6\">
                      ";
                    // line 84
                    if ((twig_get_attribute($this->env, $this->source, $context["customizationField"], "type", [], "any", false, false, false, 84) == "customizable_file")) {
                        // line 85
                        echo "                        <img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizationField"], "image", [], "any", false, false, false, 85), "html", null, true);
                        echo "\">
                      ";
                    } else {
                        // line 87
                        echo "                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customizationField"], "value", [], "any", false, false, false, 87), "html", null, true);
                        echo "
                      ";
                    }
                    // line 89
                    echo "                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customizationField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "              </td>

              <td></td>
              <td>";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 95), "quantity", [], "any", false, false, false, 95), "html", null, true);
                echo "</td>
              <td></td>
              <td></td>
            </tr>
          ";
            }
            // line 100
            echo "
          ";
            // line 101
            if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["product"], "customization", [], "any", false, false, false, 101)) || (twig_get_attribute($this->env, $this->source, $context["product"], "cart_quantity", [], "any", false, false, false, 101) > twig_get_attribute($this->env, $this->source, $context["product"], "customization_quantity", [], "any", false, false, false, 101)))) {
                // line 102
                echo "            <tr>
              <td>";
                // line 103
                echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 103);
                echo "</td>
              <td>
                <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\">
                  ";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 106), "html", null, true);
                echo "

                  ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 108)) {
                    // line 109
                    echo "                    <br> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "attributes", [], "any", false, false, false, 109), "html", null, true);
                    echo "
                  ";
                }
                // line 111
                echo "                  <br>

                  ";
                // line 113
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 113)) {
                    // line 114
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ref:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                    echo "
                    ";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 115), "html", null, true);
                    echo "
                  ";
                }
                // line 117
                echo "
                  ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "reference", [], "any", false, false, false, 118) && twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 118))) {
                    // line 119
                    echo "                    / ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "supplier_reference", [], "any", false, false, false, 119), "html", null, true);
                    echo "
                  ";
                }
                // line 121
                echo "                </a>
              </td>
              <td>";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "unit_price_formatted", [], "any", false, false, false, 123), "html", null, true);
                echo "</td>
              <td>";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cart_quantity", [], "any", false, false, false, 124), "html", null, true);
                echo "</td>
              <td>";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock_quantity", [], "any", false, false, false, 125), "html", null, true);
                echo "</td>
              <td>";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "total_price_formatted", [], "any", false, false, false, 126), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            // line 129
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
        <tr>
          <td colspan=\"5\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total cost of products:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</td>
          <td class=\"text-right\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 133, $this->source); })()), "cartSummary", [], "any", false, false, false, 133), "total_products_formatted", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
        </tr>

        ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 136, $this->source); })()), "cartSummary", [], "any", false, false, false, 136), "total_discounts", [], "any", false, false, false, 136)) {
            // line 137
            echo "          <tr>
            <td colspan=\"5\">";
            // line 138
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total value of vouchers:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 139, $this->source); })()), "cartSummary", [], "any", false, false, false, 139), "total_discounts_formatted", [], "any", false, false, false, 139), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 142
        echo "
        ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 143, $this->source); })()), "cartSummary", [], "any", false, false, false, 143), "total_wrapping", [], "any", false, false, false, 143)) {
            // line 144
            echo "          <tr>
            <td colspan=\"5\">";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total cost of gift wrapping:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 146, $this->source); })()), "cartSummary", [], "any", false, false, false, 146), "total_wrapping_formatted", [], "any", false, false, false, 146), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 149
        echo "
        ";
        // line 150
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 150, $this->source); })()), "cartSummary", [], "any", false, false, false, 150), "total_shipping", [], "any", false, false, false, 150)) {
            // line 151
            echo "          <tr>
            <td colspan=\"5\">";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total shipping costs:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</td>
            <td class=\"text-right\">";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 153, $this->source); })()), "cartSummary", [], "any", false, false, false, 153), "total_shipping_formatted", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
          </tr>
        ";
        }
        // line 156
        echo "
        <tr>
          <td colspan=\"5\">
            <strong>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "</strong>
          </td>
          <td class=\"text-right\">
            <strong>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 162, $this->source); })()), "cartSummary", [], "any", false, false, false, 162), "total_formatted", [], "any", false, false, false, 162), "html", null, true);
        echo "</strong>
          </td>
        </tr>
      </tbody>
    </table>

    ";
        // line 168
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 168, $this->source); })()), "cartSummary", [], "any", false, false, false, 168), "cart_rules", [], "any", false, false, false, 168))) {
            // line 169
            echo "      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
          <th>";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount name", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "</th>
          <th class=\"text-right\">";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value", [], "Admin.Global"), "html", null, true);
            echo "</th>
        </tr>
        </thead>
        <tbody>
          ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 178, $this->source); })()), "cartSummary", [], "any", false, false, false, 178), "cart_rules", [], "any", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["cartRule"]) {
                // line 179
                echo "            <tr>
              <td>";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartRule"], "id", [], "any", false, false, false, 180), "html", null, true);
                echo "</td>
              <td>
                <a href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCartRules", true, ["id_cart_rule" => twig_get_attribute($this->env, $this->source,                 // line 183
$context["cartRule"], "id", [], "any", false, false, false, 183), "updatecart_rule" => 1]), "html", null, true);
                // line 185
                echo "\">
                  ";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartRule"], "name", [], "any", false, false, false, 186), "html", null, true);
                echo "
                </a>
              </td>
              <td class=\"text-right\">
                ";
                // line 190
                if (twig_get_attribute($this->env, $this->source, $context["cartRule"], "is_free_shipping", [], "any", false, false, false, 190)) {
                    // line 191
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free shipping", [], "Admin.Shipping.Feature"), "html", null, true);
                    echo "
                ";
                } else {
                    // line 193
                    echo "                  - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartRule"], "formatted_value", [], "any", false, false, false, 193), "html", null, true);
                    echo "
                ";
                }
                // line 195
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartRule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "        </tbody>
      </table>
    ";
        }
        // line 201
        echo "
    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For this particular customer group, prices are displayed as:", [], "Admin.Orderscustomers.Notification"), "html", null, true);
        echo "
        <strong>
          ";
        // line 206
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cartView"]) || array_key_exists("cartView", $context) ? $context["cartView"] : (function () { throw new RuntimeError('Variable "cartView" does not exist.', 206, $this->source); })()), "cartSummary", [], "any", false, false, false, 206), "is_tax_included", [], "any", false, false, false, 206)) {
            // line 207
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax included", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 209
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax excluded", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 211
        echo "        </strong>
      </p>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 211,  487 => 209,  481 => 207,  479 => 206,  474 => 204,  469 => 201,  464 => 198,  456 => 195,  450 => 193,  444 => 191,  442 => 190,  435 => 186,  432 => 185,  430 => 183,  429 => 182,  424 => 180,  421 => 179,  417 => 178,  410 => 174,  406 => 173,  402 => 172,  397 => 169,  395 => 168,  386 => 162,  380 => 159,  375 => 156,  369 => 153,  365 => 152,  362 => 151,  360 => 150,  357 => 149,  351 => 146,  347 => 145,  344 => 144,  342 => 143,  339 => 142,  333 => 139,  329 => 138,  326 => 137,  324 => 136,  318 => 133,  314 => 132,  310 => 130,  304 => 129,  298 => 126,  294 => 125,  290 => 124,  286 => 123,  282 => 121,  276 => 119,  274 => 118,  271 => 117,  266 => 115,  261 => 114,  259 => 113,  255 => 111,  249 => 109,  247 => 108,  242 => 106,  238 => 105,  233 => 103,  230 => 102,  228 => 101,  225 => 100,  217 => 95,  212 => 92,  204 => 89,  198 => 87,  192 => 85,  190 => 84,  186 => 82,  180 => 80,  174 => 78,  172 => 77,  168 => 75,  164 => 74,  156 => 69,  152 => 68,  148 => 67,  144 => 66,  140 => 64,  134 => 62,  132 => 61,  129 => 60,  124 => 58,  119 => 57,  117 => 56,  113 => 54,  107 => 52,  105 => 51,  100 => 49,  96 => 48,  91 => 46,  88 => 45,  85 => 44,  81 => 43,  74 => 39,  70 => 38,  66 => 37,  62 => 36,  58 => 35,  48 => 28,  43 => 25,);
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

<div class=\"card\" data-role=\"cart-summary\">
  <h3 class=\"card-header\">
    {{ 'Cart summary'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    <table class=\"table\">
      <thead>
        <tr>
          <th>&nbsp;</th>
          <th>{{ 'Product'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Unit price'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Stock'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Total'|trans({}, 'Admin.Global') }}</th>
        </tr>
      </thead>
      <tbody>
        {% for product in cartView.cartSummary.products %}
          {% if product.customization is not empty %}
            <tr>
              <td>{{ product.image|raw }}</td>
              <td>
                <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">
                  {{ product.name }}

                  {% if product.attributes %}
                    <br> {{ product.attributes }}
                  {% endif %}
                  <br>

                  {% if product.reference %}
                    {{ 'Ref:'|trans({}, 'Admin.Orderscustomers.Feature') }}
                    {{ product.reference }}
                  {% endif %}

                  {% if product.reference and product.supplier_reference %}
                    / {{ product.supplier_reference }}
                  {% endif %}
                </a>
              </td>
              <td>{{ product.unit_price_formatted }}</td>
              <td>{{ product.quantity }}</td>
              <td>{{ product.stock_quantity }}</td>
              <td>{{ product.total_price_formatted }}</td>
            </tr>

            <tr>
              <td colspan=\"2\">
                {% for customizationField in product.customization.fields %}
                  <div class=\"row\">
                    <div class=\"col-6 text-right\">
                      {% if customizationField.name %}
                        <strong>{{ customizationField.name }}</strong>
                      {% else %}
                        <strong>{{ 'Text #'|trans({}, 'Admin.Orderscustomers.Feature') }}</strong>
                      {% endif %}
                    </div>
                    <div class=\"col-6\">
                      {% if customizationField.type == 'customizable_file' %}
                        <img src=\"{{ customizationField.image }}\">
                      {% else %}
                        {{ customizationField.value }}
                      {% endif %}
                    </div>
                  </div>
                {% endfor %}
              </td>

              <td></td>
              <td>{{ product.customization.quantity }}</td>
              <td></td>
              <td></td>
            </tr>
          {% endif %}

          {% if product.customization is empty or product.cart_quantity > product.customization_quantity %}
            <tr>
              <td>{{ product.image|raw }}</td>
              <td>
                <a href=\"{{ path('admin_product_form', {'id': product.id}) }}\">
                  {{ product.name }}

                  {% if product.attributes %}
                    <br> {{ product.attributes }}
                  {% endif %}
                  <br>

                  {% if product.reference %}
                    {{ 'Ref:'|trans({}, 'Admin.Orderscustomers.Feature') }}
                    {{ product.reference }}
                  {% endif %}

                  {% if product.reference and product.supplier_reference %}
                    / {{ product.supplier_reference }}
                  {% endif %}
                </a>
              </td>
              <td>{{ product.unit_price_formatted }}</td>
              <td>{{ product.cart_quantity }}</td>
              <td>{{ product.stock_quantity }}</td>
              <td>{{ product.total_price_formatted }}</td>
            </tr>
          {% endif %}
        {% endfor %}

        <tr>
          <td colspan=\"5\">{{ 'Total cost of products:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
          <td class=\"text-right\">{{ cartView.cartSummary.total_products_formatted }}</td>
        </tr>

        {% if cartView.cartSummary.total_discounts %}
          <tr>
            <td colspan=\"5\">{{ 'Total value of vouchers:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
            <td class=\"text-right\">{{ cartView.cartSummary.total_discounts_formatted }}</td>
          </tr>
        {% endif %}

        {% if cartView.cartSummary.total_wrapping %}
          <tr>
            <td colspan=\"5\">{{ 'Total cost of gift wrapping:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
            <td class=\"text-right\">{{ cartView.cartSummary.total_wrapping_formatted }}</td>
          </tr>
        {% endif %}

        {% if cartView.cartSummary.total_shipping %}
          <tr>
            <td colspan=\"5\">{{ 'Total shipping costs:'|trans({}, 'Admin.Orderscustomers.Feature') }}</td>
            <td class=\"text-right\">{{ cartView.cartSummary.total_shipping_formatted }}</td>
          </tr>
        {% endif %}

        <tr>
          <td colspan=\"5\">
            <strong>{{ 'Total'|trans({}, 'Admin.Global') }}</strong>
          </td>
          <td class=\"text-right\">
            <strong>{{ cartView.cartSummary.total_formatted }}</strong>
          </td>
        </tr>
      </tbody>
    </table>

    {% if cartView.cartSummary.cart_rules is not empty %}
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
          <th>{{ 'Discount name'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
          <th class=\"text-right\">{{ 'Value'|trans({}, 'Admin.Global') }}</th>
        </tr>
        </thead>
        <tbody>
          {% for cartRule in cartView.cartSummary.cart_rules %}
            <tr>
              <td>{{ cartRule.id }}</td>
              <td>
                <a href=\"{{ getAdminLink('AdminCartRules', true, {
                  id_cart_rule: cartRule.id,
                  updatecart_rule: 1
                }) }}\">
                  {{ cartRule.name }}
                </a>
              </td>
              <td class=\"text-right\">
                {% if cartRule.is_free_shipping %}
                  {{ 'Free shipping'|trans({}, 'Admin.Shipping.Feature') }}
                {% else %}
                  - {{ cartRule.formatted_value }}
                {% endif %}
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% endif %}

    <div class=\"alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'For this particular customer group, prices are displayed as:'|trans({}, 'Admin.Orderscustomers.Notification') }}
        <strong>
          {% if cartView.cartSummary.is_tax_included %}
            {{ 'Tax included'|trans({}, 'Admin.Global') }}
          {% else %}
            {{ 'Tax excluded'|trans({}, 'Admin.Global') }}
          {% endif %}
        </strong>
      </p>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Cart/Blocks/View/cart_summary.html.twig");
    }
}
