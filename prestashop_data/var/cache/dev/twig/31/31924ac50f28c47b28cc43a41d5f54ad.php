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

/* @PrestaShop/Admin/Sell/Order/Order/preview.html.twig */
class __TwigTemplate_ec4bc6b7747cf968b7b3fd7bc0d41baf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'order_preview' => [$this, 'block_order_preview'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('order_preview', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_order_preview($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_preview"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "order_preview"));

        // line 27
        echo "  <div class=\"row order-preview-content mt-2\" data-role=\"preview-row\">
    <div class=\"col-5\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">local_shipping</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"shipping-details\">
              <p class=\"mb-0\">
                <strong>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier", [], "Admin.Global"), "html", null, true);
        echo ":</strong>
                ";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 40, $this->source); })()), "isVirtual", [], "any", false, false, false, 40)) {
            // line 41
            echo "                  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 41, $this->source); })()), "shippingDetails", [], "any", false, false, false, 41), "carrierName", [], "any", false, false, false, 41), "html", null, true);
            echo "
                ";
        } else {
            // line 43
            echo "                  -
                ";
        }
        // line 45
        echo "              </p>

              <p class=\"mb-0\">
                <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tracking number", [], "Admin.Shipping.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 49
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 49, $this->source); })()), "isVirtual", [], "any", false, false, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 49, $this->source); })()), "shippingDetails", [], "any", false, false, false, 49), "trackingNumber", [], "any", false, false, false, 49)))) {
            // line 50
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 50, $this->source); })()), "shippingDetails", [], "any", false, false, false, 50), "trackingUrl", [], "any", false, false, false, 50)) {
                // line 51
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 51, $this->source); })()), "shippingDetails", [], "any", false, false, false, 51), "trackingUrl", [], "any", false, false, false, 51), "html", null, true);
                echo "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 51, $this->source); })()), "shippingDetails", [], "any", false, false, false, 51), "trackingNumber", [], "any", false, false, false, 51), "html", null, true);
                echo "</a>
                  ";
            } else {
                // line 53
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 53, $this->source); })()), "shippingDetails", [], "any", false, false, false, 53), "trackingNumber", [], "any", false, false, false, 53), "html", null, true);
                echo "
                  ";
            }
            // line 55
            echo "                ";
        } else {
            // line 56
            echo "                  -
                ";
        }
        // line 58
        echo "              </p>

              <p class=\"mb-2\">
                <strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
                ";
        // line 62
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 62, $this->source); })()), "virtual", [], "any", false, false, false, 62)) {
            // line 63
            echo "                  -
                ";
        }
        // line 65
        echo "              </p>

              ";
        // line 67
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 67, $this->source); })()), "virtual", [], "any", false, false, false, 67)) {
            // line 68
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 68, $this->source); })()), "shippingAddressFormatted", [], "any", false, false, false, 68), "
"));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 69
                echo "                  <p";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 69)) {
                    echo " class=\"mb-0\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                echo "</p>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "              ";
        }
        // line 72
        echo "            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">email</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"email\">
              <p class=\"mb-1\">
                <strong>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email:", [], "Admin.Global"), "html", null, true);
        echo "</strong>
              </p>

              <p class=\"mb-0\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 87, $this->source); })()), "invoiceDetails", [], "any", false, false, false, 87), "email", [], "any", false, false, false, 87), "html", null, true);
        echo "</p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">receipt</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"invoice-details\">
              <p class=\"mb-1\">
                <strong>";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo ":</strong>
              </p>


              ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 102, $this->source); })()), "invoiceAddressFormatted", [], "any", false, false, false, 102), "
"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 103
            echo "                <p";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 103)) {
                echo " class=\"mb-0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "</p>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-7\">
      <div class=\"table-responsive\">
        <table class=\"table product table-borderless border-bottom-0\" data-role=\"product-table\">
          <thead>
          <tr>
            ";
        // line 115
        if (twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 115, $this->source); })()), "taxIncluded", [], "any", false, false, false, 115)) {
            // line 116
            echo "              ";
            $context["taxInclusion"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax included", [], "Admin.Global");
            // line 117
            echo "            ";
        } else {
            // line 118
            echo "              ";
            $context["taxInclusion"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax excluded", [], "Admin.Global");
            // line 119
            echo "            ";
        }
        // line 120
        echo "
            <th>
              ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Admin.Global"), "html", null, true);
        echo "
              (";
        // line 123
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 123, $this->source); })()), "productDetails", [], "any", false, false, false, 123)), "html", null, true);
        echo ")
            </th>
            <th>";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"js-cell-product-stock-location\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock location", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 127
        if ((twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 127, $this->source); })()), "taxIncluded", [], "any", false, false, false, 127) == false)) {
            // line 128
            echo "              <th class=\"text-center\">
                ";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax", [], "Admin.Global"), "html", null, true);
            echo "
              </th>
            ";
        }
        // line 132
        echo "            <th class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">
              ";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total", [], "Admin.Global"), "html", null, true);
        echo "
              <small>";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["taxInclusion"]) || array_key_exists("taxInclusion", $context) ? $context["taxInclusion"] : (function () { throw new RuntimeError('Variable "taxInclusion" does not exist.', 135, $this->source); })()), "html", null, true);
        echo "</small>
            </th>
          </tr>
          </thead>
          <tbody>
          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 140, $this->source); })()), "productDetails", [], "any", false, false, false, 140));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["productDetail"]) {
            // line 141
            echo "            <tr class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 141) > (isset($context["productsPreviewLimit"]) || array_key_exists("productsPreviewLimit", $context) ? $context["productsPreviewLimit"] : (function () { throw new RuntimeError('Variable "productsPreviewLimit" does not exist.', 141, $this->source); })()))) {
                echo "js-product-preview-more d-none";
            }
            echo "\">
              <td class=\"p-1\">
                ";
            // line 143
            if (twig_get_attribute($this->env, $this->source, $context["productDetail"], "id", [], "any", false, false, false, 143)) {
                // line 144
                echo "                  <a class=\"px-0 external-link\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["productDetail"], "id", [], "any", false, false, false, 144)]), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "name", [], "any", false, false, false, 144), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 146
                echo "                  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "name", [], "any", false, false, false, 146), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product deleted", [], "Admin.Catalog.Feature"), "html", null, true);
                echo ")
                ";
            }
            // line 148
            echo "              </td>
              <td class=\"p-1\">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "reference", [], "any", false, false, false, 149), "html", null, true);
            echo "</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                ";
            // line 151
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["productDetail"], "location", [], "any", false, false, false, 151))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "location", [], "any", false, false, false, 151), "html", null, true);
            }
            // line 152
            echo "              </td>
              ";
            // line 153
            if ((twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 153, $this->source); })()), "taxIncluded", [], "any", false, false, false, 153) == false)) {
                // line 154
                echo "                <td class=\"p-1 text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "totalTax", [], "any", false, false, false, 154), "html", null, true);
                echo "</td>
              ";
            }
            // line 156
            echo "              <td class=\"p-1 text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "quantity", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
              <td class=\"p-1 text-center\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["productDetail"], "totalPrice", [], "any", false, false, false, 157), "html", null, true);
            echo "</td>
            </tr>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productDetail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "
          ";
        // line 161
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 161, $this->source); })()), "productDetails", [], "any", false, false, false, 161)) > (isset($context["productsPreviewLimit"]) || array_key_exists("productsPreviewLimit", $context) ? $context["productsPreviewLimit"] : (function () { throw new RuntimeError('Variable "productsPreviewLimit" does not exist.', 161, $this->source); })()))) {
            // line 162
            echo "            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  ";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("(%count% more)", ["%count%" => (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 167
(isset($context["orderPreview"]) || array_key_exists("orderPreview", $context) ? $context["orderPreview"] : (function () { throw new RuntimeError('Variable "orderPreview" does not exist.', 167, $this->source); })()), "productDetails", [], "any", false, false, false, 167)) - (isset($context["productsPreviewLimit"]) || array_key_exists("productsPreviewLimit", $context) ? $context["productsPreviewLimit"] : (function () { throw new RuntimeError('Variable "productsPreviewLimit" does not exist.', 167, $this->source); })()))], "Admin.Global"), "html", null, true);
            // line 168
            echo "
                </a>
              </td>
            </tr>
          ";
        }
        // line 173
        echo "          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_orders_view", ["orderId" => (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 178, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-sm mb-3\">
          ";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open details", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          <i class=\"material-icons rtl-flip\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  ";
        // line 185
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayOrderPreview", ["order_id" => (isset($context["orderId"]) || array_key_exists("orderId", $context) ? $context["orderId"] : (function () { throw new RuntimeError('Variable "orderId" does not exist.', 185, $this->source); })())]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  480 => 185,  471 => 179,  467 => 178,  460 => 173,  453 => 168,  451 => 167,  450 => 166,  444 => 162,  442 => 161,  439 => 160,  422 => 157,  417 => 156,  411 => 154,  409 => 153,  406 => 152,  402 => 151,  397 => 149,  394 => 148,  386 => 146,  378 => 144,  376 => 143,  368 => 141,  351 => 140,  343 => 135,  339 => 134,  333 => 132,  327 => 129,  324 => 128,  322 => 127,  318 => 126,  314 => 125,  309 => 123,  305 => 122,  301 => 120,  298 => 119,  295 => 118,  292 => 117,  289 => 116,  287 => 115,  275 => 105,  254 => 103,  236 => 102,  229 => 98,  215 => 87,  209 => 84,  195 => 72,  192 => 71,  171 => 69,  152 => 68,  150 => 67,  146 => 65,  142 => 63,  140 => 62,  136 => 61,  131 => 58,  127 => 56,  124 => 55,  118 => 53,  110 => 51,  107 => 50,  105 => 49,  101 => 48,  96 => 45,  92 => 43,  86 => 41,  84 => 40,  80 => 39,  66 => 27,  47 => 26,  44 => 25,);
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

{% block order_preview %}
  <div class=\"row order-preview-content mt-2\" data-role=\"preview-row\">
    <div class=\"col-5\">
      <div class=\"row\">
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">local_shipping</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"shipping-details\">
              <p class=\"mb-0\">
                <strong>{{ 'Carrier'|trans({}, 'Admin.Global') }}:</strong>
                {% if not orderPreview.isVirtual %}
                  {{ orderPreview.shippingDetails.carrierName }}
                {% else %}
                  -
                {% endif %}
              </p>

              <p class=\"mb-0\">
                <strong>{{ 'Tracking number'|trans({}, 'Admin.Shipping.Feature') }}:</strong>
                {% if not orderPreview.isVirtual and orderPreview.shippingDetails.trackingNumber is not empty %}
                  {% if orderPreview.shippingDetails.trackingUrl %}
                    <a href=\"{{ orderPreview.shippingDetails.trackingUrl }}\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">{{ orderPreview.shippingDetails.trackingNumber }}</a>
                  {% else %}
                    {{ orderPreview.shippingDetails.trackingNumber }}
                  {% endif %}
                {% else %}
                  -
                {% endif %}
              </p>

              <p class=\"mb-2\">
                <strong>{{ 'Shipping details'|trans({}, 'Admin.Orderscustomers.Feature') }}:</strong>
                {% if orderPreview.virtual %}
                  -
                {% endif %}
              </p>

              {% if not orderPreview.virtual %}
                {% for line in orderPreview.shippingAddressFormatted|split(\"\\n\") %}
                  <p{% if not loop.last %} class=\"mb-0\"{% endif %}>{{ line }}</p>
                {% endfor %}
              {% endif %}
            </div>
          </div>
        </div>
        <div class=\"col\">
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">email</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"email\">
              <p class=\"mb-1\">
                <strong>{{ 'Email:'|trans({}, 'Admin.Global') }}</strong>
              </p>

              <p class=\"mb-0\">{{ orderPreview.invoiceDetails.email }}</p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-1\">
              <p class=\"mb-0\">
                <i class=\"material-icons pr-1\">receipt</i>
              </p>
            </div>
            <div class=\"col\" data-role=\"invoice-details\">
              <p class=\"mb-1\">
                <strong>{{ 'Invoice details'|trans({}, 'Admin.Orderscustomers.Feature') }}:</strong>
              </p>


              {% for line in orderPreview.invoiceAddressFormatted|split(\"\\n\") %}
                <p{% if not loop.last %} class=\"mb-0\"{% endif %}>{{ line }}</p>
              {% endfor %}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-7\">
      <div class=\"table-responsive\">
        <table class=\"table product table-borderless border-bottom-0\" data-role=\"product-table\">
          <thead>
          <tr>
            {% if orderPreview.taxIncluded %}
              {% set taxInclusion = 'Tax included'|trans({}, 'Admin.Global') %}
            {% else %}
              {% set taxInclusion = 'Tax excluded'|trans({}, 'Admin.Global') %}
            {% endif %}

            <th>
              {{ 'Products'|trans({}, 'Admin.Global') }}
              ({{ orderPreview.productDetails|length }})
            </th>
            <th>{{ 'Reference'|trans({}, 'Admin.Global') }}</th>
            <th class=\"js-cell-product-stock-location\">{{ 'Stock location'|trans({}, 'Admin.Orderscustomers.Feature') }}</th>
            {% if orderPreview.taxIncluded == false %}
              <th class=\"text-center\">
                {{ 'Tax'|trans({}, 'Admin.Global') }}
              </th>
            {% endif %}
            <th class=\"text-center\">{{ 'Quantity'|trans({}, 'Admin.Global') }}</th>
            <th class=\"text-center\">
              {{ 'Total'|trans({}, 'Admin.Global') }}
              <small>{{ taxInclusion }}</small>
            </th>
          </tr>
          </thead>
          <tbody>
          {% for productDetail in orderPreview.productDetails %}
            <tr class=\"{% if loop.index > productsPreviewLimit %}js-product-preview-more d-none{% endif %}\">
              <td class=\"p-1\">
                {% if productDetail.id %}
                  <a class=\"px-0 external-link\" href=\"{{ path('admin_product_form', {'id': productDetail.id}) }}\" target=\"_blank\">{{ productDetail.name }}</a>
                {% else %}
                  {{ productDetail.name }} ({{ 'Product deleted'|trans({}, 'Admin.Catalog.Feature') }})
                {% endif %}
              </td>
              <td class=\"p-1\">{{ productDetail.reference }}</td>
              <td class=\"p-1 js-cell-product-stock-location\">
                {% if productDetail.location is not empty %}{{ productDetail.location }}{% endif %}
              </td>
              {% if orderPreview.taxIncluded == false %}
                <td class=\"p-1 text-center\">{{ productDetail.totalTax }}</td>
              {% endif %}
              <td class=\"p-1 text-center\">{{ productDetail.quantity }}</td>
              <td class=\"p-1 text-center\">{{ productDetail.totalPrice }}</td>
            </tr>
          {% endfor %}

          {% if orderPreview.productDetails|length > productsPreviewLimit %}
            <tr>
              <td colspan=\"6\">
                <a href=\"#\" class=\"js-preview-more-products-btn text-dark\">
                  <i class=\"material-icons\">more_horiz</i>
                  {{ '(%count% more)'|trans({
                    '%count%': orderPreview.productDetails|length - productsPreviewLimit
                  }, 'Admin.Global') }}
                </a>
              </td>
            </tr>
          {% endif %}
          </tbody>
        </table>
      </div>

      <div class=\"text-right\">
        <a href=\"{{ path('admin_orders_view', {'orderId': orderId}) }}\" class=\"btn btn-primary btn-sm mb-3\">
          {{ 'Open details'|trans({}, 'Admin.Orderscustomers.Feature') }}
          <i class=\"material-icons rtl-flip\">arrow_right_alt</i>
        </a>
      </div>
    </div>
  </div>
  {{ renderhook('displayOrderPreview', {'order_id': orderId}) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Order/Order/preview.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/preview.html.twig");
    }
}
