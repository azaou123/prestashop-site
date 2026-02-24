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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig */
class __TwigTemplate_98dd36030d95076bea2b3465559d5e0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["validOrdersCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 26, $this->source); })()), "ordersInformation", [], "any", false, false, false, 26), "validOrders", [], "any", false, false, false, 26));
        // line 27
        $context["invalidOrdersCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 27, $this->source); })()), "ordersInformation", [], "any", false, false, false, 27), "invalidOrders", [], "any", false, false, false, 27));
        // line 28
        $context["ordersCount"] = ((isset($context["validOrdersCount"]) || array_key_exists("validOrdersCount", $context) ? $context["validOrdersCount"] : (function () { throw new RuntimeError('Variable "validOrdersCount" does not exist.', 28, $this->source); })()) + (isset($context["invalidOrdersCount"]) || array_key_exists("invalidOrdersCount", $context) ? $context["invalidOrdersCount"] : (function () { throw new RuntimeError('Variable "invalidOrdersCount" does not exist.', 28, $this->source); })()));
        // line 29
        echo "
<div class=\"card customer-orders-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_basket</i>
    ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["ordersCount"]) || array_key_exists("ordersCount", $context) ? $context["ordersCount"] : (function () { throw new RuntimeError('Variable "ordersCount" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 37
        if (((isset($context["ordersCount"]) || array_key_exists("ordersCount", $context) ? $context["ordersCount"] : (function () { throw new RuntimeError('Variable "ordersCount" does not exist.', 37, $this->source); })()) > 0)) {
            // line 38
            echo "      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-success rounded\">";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["validOrdersCount"]) || array_key_exists("validOrdersCount", $context) ? $context["validOrdersCount"] : (function () { throw new RuntimeError('Variable "validOrdersCount" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "</span>
              ";
            // line 44
            $context["totalAmount"] = (("<span id=\"total-order-amount\">" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 44, $this->source); })()), "ordersInformation", [], "any", false, false, false, 44), "totalSpent", [], "any", false, false, false, 44)) . "</span>");
            // line 45
            echo "              ";
            echo twig_sprintf($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("for a total amount of %s", [], "Admin.Orderscustomers.Feature"), (isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 45, $this->source); })()));
            echo "
            </div>
            <div class=\"col\">
              ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid orders:", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
              <span class=\"badge badge-danger rounded\">";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["invalidOrdersCount"]) || array_key_exists("invalidOrdersCount", $context) ? $context["invalidOrdersCount"] : (function () { throw new RuntimeError('Variable "invalidOrdersCount" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "</span>
            </div>
          </div>
        </div>
      </div>

      ";
            // line 55
            if ((isset($context["validOrdersCount"]) || array_key_exists("validOrdersCount", $context) ? $context["validOrdersCount"] : (function () { throw new RuntimeError('Variable "validOrdersCount" does not exist.', 55, $this->source); })())) {
                // line 56
                echo "        <table class=\"table\">
          <thead>
            <tr>
              <th>";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 61
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
              <th class=\"text-right\">";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 69, $this->source); })()), "ordersInformation", [], "any", false, false, false, 69), "validOrders", [], "any", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 70
                    echo "              ";
                    $context["orderViewUrl"] = $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["id_order" => twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 70), "vieworder" => 1]);
                    // line 71
                    echo "
              <tr class=\"customer-valid-order\">
                <td class=\"customer-valid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 73
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 73, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 73), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 74, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderPlacedDate", [], "any", false, false, false, 74), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 75
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 75, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "paymentMethodName", [], "any", false, false, false, 75), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 76, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderStatus", [], "any", false, false, false, 76), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 77, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderProductsCount", [], "any", false, false, false, 77), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 78, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalPaid", [], "any", false, false, false, 78), "html", null, true);
                    echo "</td>
                <td class=\"customer-valid-order-actions text-right\">
                  <div class=\"btn-group-action\">
                    <div class=\"btn-group\">
                      <a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 82, $this->source); })()), "html", null, true);
                    echo "\" class=\"btn tooltip-link dropdown-item view-link\" data-toggle=\"pstooltip\" data-placement=\"top\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions"), "html", null, true);
                    echo "\">
                        <i class=\"material-icons\">zoom_in</i>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "          </tbody>
        </table>
      ";
            }
            // line 93
            echo "

      ";
            // line 95
            if ((isset($context["invalidOrdersCount"]) || array_key_exists("invalidOrdersCount", $context) ? $context["invalidOrdersCount"] : (function () { throw new RuntimeError('Variable "invalidOrdersCount" does not exist.', 95, $this->source); })())) {
                // line 96
                echo "        <table class=\"table\">
          <thead>
            <tr>
              <th>";
                // line 99
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 100
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 101
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 102
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 103
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
                echo "</th>
              <th>";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total spent", [], "Admin.Orderscustomers.Feature"), "html", null, true);
                echo "</th>
              <th class=\"text-right\">";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
                echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 109, $this->source); })()), "ordersInformation", [], "any", false, false, false, 109), "invalidOrders", [], "any", false, false, false, 109));
                foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                    // line 110
                    echo "              ";
                    $context["orderViewUrl"] = $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["id_order" => twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 110), "vieworder" => 1]);
                    // line 111
                    echo "
              <tr class=\"customer-invalid-order\">
                <td class=\"customer-invalid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 113, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderId", [], "any", false, false, false, 113), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 114
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 114, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderPlacedDate", [], "any", false, false, false, 114), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 115
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 115, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "paymentMethodName", [], "any", false, false, false, 115), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 116
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 116, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderStatus", [], "any", false, false, false, 116), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 117
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 117, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "orderProductsCount", [], "any", false, false, false, 117), "html", null, true);
                    echo "</td>
                <td class=\"customer-invalid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 118, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "totalPaid", [], "any", false, false, false, 118), "html", null, true);
                    echo "</td>
                <td class=\"text-right customer-invalid-order-actions\">
                  <div class=\"btn-group-action\">
                    <div class=\"btn-group\">
                      <a href=\"";
                    // line 122
                    echo twig_escape_filter($this->env, (isset($context["orderViewUrl"]) || array_key_exists("orderViewUrl", $context) ? $context["orderViewUrl"] : (function () { throw new RuntimeError('Variable "orderViewUrl" does not exist.', 122, $this->source); })()), "html", null, true);
                    echo "\" class=\"btn tooltip-link dropdown-item grid-view-row-link\" data-toggle=\"pstooltip\" data-placement=\"top\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions"), "html", null, true);
                    echo "\">
                        <i class=\"material-icons\">zoom_in</i>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "          </tbody>
        </table>
      ";
            }
            // line 133
            echo "
    ";
        } else {
            // line 135
            echo "      <p class=\"text-muted text-center\">
        ";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%firstname% %lastname% has not placed any orders yet", ["%firstname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 136, $this->source); })()), "personalInformation", [], "any", false, false, false, 136), "firstName", [], "any", false, false, false, 136), "%lastname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 136, $this->source); })()), "personalInformation", [], "any", false, false, false, 136), "lastName", [], "any", false, false, false, 136)], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 139
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 139,  335 => 136,  332 => 135,  328 => 133,  323 => 130,  307 => 122,  298 => 118,  292 => 117,  286 => 116,  280 => 115,  274 => 114,  268 => 113,  264 => 111,  261 => 110,  257 => 109,  250 => 105,  246 => 104,  242 => 103,  238 => 102,  234 => 101,  230 => 100,  226 => 99,  221 => 96,  219 => 95,  215 => 93,  210 => 90,  194 => 82,  185 => 78,  179 => 77,  173 => 76,  167 => 75,  161 => 74,  155 => 73,  151 => 71,  148 => 70,  144 => 69,  137 => 65,  133 => 64,  129 => 63,  125 => 62,  121 => 61,  117 => 60,  113 => 59,  108 => 56,  106 => 55,  97 => 49,  93 => 48,  86 => 45,  84 => 44,  80 => 43,  76 => 42,  70 => 38,  68 => 37,  62 => 34,  58 => 33,  52 => 29,  50 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% set validOrdersCount = customerInformation.ordersInformation.validOrders|length %}
{% set invalidOrdersCount = customerInformation.ordersInformation.invalidOrders|length %}
{% set ordersCount = validOrdersCount + invalidOrdersCount %}

<div class=\"card customer-orders-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">shopping_basket</i>
    {{ 'Orders'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ ordersCount }}</span>
  </h3>
  <div class=\"card-body\">
    {% if ordersCount > 0 %}
      <div class=\"card\">
        <div class=\"card-body\">
          <div class=\"row\">
            <div class=\"col\">
              {{ 'Valid orders:'|trans({}, 'Admin.Orderscustomers.Feature') }}
              <span class=\"badge badge-success rounded\">{{ validOrdersCount }}</span>
              {% set totalAmount = '<span id=\"total-order-amount\">'~customerInformation.ordersInformation.totalSpent~'</span>' %}
              {{ 'for a total amount of %s'|trans({}, 'Admin.Orderscustomers.Feature')|format(totalAmount)|raw }}
            </div>
            <div class=\"col\">
              {{ 'Invalid orders:'|trans({}, 'Admin.Orderscustomers.Feature') }}
              <span class=\"badge badge-danger rounded\">{{ invalidOrdersCount }}</span>
            </div>
          </div>
        </div>
      </div>

      {% if validOrdersCount %}
        <table class=\"table\">
          <thead>
            <tr>
              <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Payment'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Products'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Total spent'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
              <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
            </tr>
          </thead>
          <tbody>
            {% for order in customerInformation.ordersInformation.validOrders %}
              {% set orderViewUrl = getAdminLink('AdminOrders', true, {'id_order': order.orderId, 'vieworder': 1}) %}

              <tr class=\"customer-valid-order\">
                <td class=\"customer-valid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderId }}</td>
                <td class=\"customer-valid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderPlacedDate }}</td>
                <td class=\"customer-valid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.paymentMethodName }}</td>
                <td class=\"customer-valid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderStatus }}</td>
                <td class=\"customer-valid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderProductsCount }}</td>
                <td class=\"customer-valid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.totalPaid }}</td>
                <td class=\"customer-valid-order-actions text-right\">
                  <div class=\"btn-group-action\">
                    <div class=\"btn-group\">
                      <a href=\"{{ orderViewUrl }}\" class=\"btn tooltip-link dropdown-item view-link\" data-toggle=\"pstooltip\" data-placement=\"top\" data-original-title=\"{{ 'View'|trans({}, 'Admin.Actions') }}\">
                        <i class=\"material-icons\">zoom_in</i>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      {% endif %}


      {% if invalidOrdersCount %}
        <table class=\"table\">
          <thead>
            <tr>
              <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Payment'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Status'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Products'|trans({}, 'Admin.Global') }}</th>
              <th>{{ 'Total spent'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
              <th class=\"text-right\">{{ 'Actions'|trans({}, 'Admin.Global') }}</th>
            </tr>
          </thead>
          <tbody>
            {% for order in customerInformation.ordersInformation.invalidOrders %}
              {% set orderViewUrl = getAdminLink('AdminOrders', true, {'id_order': order.orderId, 'vieworder': 1}) %}

              <tr class=\"customer-invalid-order\">
                <td class=\"customer-invalid-order-id js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderId }}</td>
                <td class=\"customer-invalid-order-date js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderPlacedDate }}</td>
                <td class=\"customer-invalid-order-payment js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.paymentMethodName }}</td>
                <td class=\"customer-invalid-order-status js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderStatus }}</td>
                <td class=\"customer-invalid-order-products js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.orderProductsCount }}</td>
                <td class=\"customer-invalid-order-total js-linkable-item cursor-pointer\" data-linkable-href=\"{{ orderViewUrl }}\">{{ order.totalPaid }}</td>
                <td class=\"text-right customer-invalid-order-actions\">
                  <div class=\"btn-group-action\">
                    <div class=\"btn-group\">
                      <a href=\"{{ orderViewUrl }}\" class=\"btn tooltip-link dropdown-item grid-view-row-link\" data-toggle=\"pstooltip\" data-placement=\"top\" data-original-title=\"{{ 'View'|trans({}, 'Admin.Actions') }}\">
                        <i class=\"material-icons\">zoom_in</i>
                      </a>
                    </div>
                  </div>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      {% endif %}

    {% else %}
      <p class=\"text-muted text-center\">
        {{ '%firstname% %lastname% has not placed any orders yet'|trans({'%firstname%': customerInformation.personalInformation.firstName, '%lastname%': customerInformation.personalInformation.lastName}, 'Admin.Orderscustomers.Feature') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/orders.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/orders.html.twig");
    }
}
