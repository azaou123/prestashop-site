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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig */
class __TwigTemplate_a42a2c92d07af32735338e99fc90b6cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig"));

        // line 25
        echo "
<div class=\"card\" data-role=\"addresses-card\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Addresses", [], "Admin.Global"), "html", null, true);
        echo "
    (";
        // line 29
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["viewableManufacturer"]) || array_key_exists("viewableManufacturer", $context) ? $context["viewableManufacturer"] : (function () { throw new RuntimeError('Variable "viewableManufacturer" does not exist.', 29, $this->source); })()), "manufacturerAddresses", [], "any", false, false, false, 29)), "html", null, true);
        echo ")
  </h3>
  <div class=\"card-body\">
    ";
        // line 32
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["viewableManufacturer"]) || array_key_exists("viewableManufacturer", $context) ? $context["viewableManufacturer"] : (function () { throw new RuntimeError('Variable "viewableManufacturer" does not exist.', 32, $this->source); })()), "manufacturerAddresses", [], "any", false, false, false, 32))) {
            // line 33
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Address (2)", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("City", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("State", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mobile phone", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Other", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["viewableManufacturer"]) || array_key_exists("viewableManufacturer", $context) ? $context["viewableManufacturer"] : (function () { throw new RuntimeError('Variable "viewableManufacturer" does not exist.', 48, $this->source); })()), "manufacturerAddresses", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 49
                echo "            <tr>
              <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "first_name", [], "any", false, false, false, 50), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "last_name", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
              <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address1", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
              <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "address2", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
              <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
              <td>";
                // line 54
                if (twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 54)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "state", [], "any", false, false, false, 54), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 55
                if (twig_get_attribute($this->env, $this->source, $context["address"], "phone", [], "any", false, false, false, 55)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "phone", [], "any", false, false, false, 55), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["address"], "phone_mobile", [], "any", false, false, false, 56)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "phone_mobile", [], "any", false, false, false, 56), "html", null, true);
                } else {
                    echo "-";
                }
                echo "</td>
              <td>";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["address"], "other", [], "any", false, false, false, 57)) {
                    echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "other", [], "any", false, false, false, 57), "html", null, true));
                } else {
                    echo "-";
                }
                echo "</td>
              <td>
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a class=\"btn tooltip-link js-link-row-action dropdown-item\"
                       href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manufacturer_addresses_edit", ["addressId" => twig_get_attribute($this->env, $this->source, $context["address"], "id", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
                echo "\"
                    >
                      <i class=\"material-icons\">edit</i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 77
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No address has been found for this brand.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
    ";
        }
        // line 79
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 79,  188 => 77,  183 => 74,  168 => 65,  162 => 62,  150 => 57,  142 => 56,  134 => 55,  126 => 54,  122 => 53,  118 => 52,  114 => 51,  108 => 50,  105 => 49,  101 => 48,  93 => 43,  89 => 42,  85 => 41,  81 => 40,  77 => 39,  73 => 38,  69 => 37,  65 => 36,  60 => 33,  58 => 32,  52 => 29,  48 => 28,  43 => 25,);
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

<div class=\"card\" data-role=\"addresses-card\">
  <h3 class=\"card-header\">
    {{ 'Addresses'|trans({}, 'Admin.Global') }}
    ({{ viewableManufacturer.manufacturerAddresses|length }})
  </h3>
  <div class=\"card-body\">
    {% if viewableManufacturer.manufacturerAddresses is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Address'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Address (2)'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'City'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'State'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Home phone'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Mobile phone'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Other'|trans({}, 'Admin.Global') }}</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {% for address in viewableManufacturer.manufacturerAddresses %}
            <tr>
              <td>{{ address.first_name }} {{ address.last_name }}</td>
              <td>{{ address.address1 }}</td>
              <td>{{ address.address2 }}</td>
              <td>{{ address.city }}</td>
              <td>{% if address.state %}{{ address.state }}{% else %}-{% endif %}</td>
              <td>{% if address.phone %}{{ address.phone }}{% else %}-{% endif %}</td>
              <td>{% if address.phone_mobile %}{{ address.phone_mobile }}{% else %}-{% endif %}</td>
              <td>{% if address.other %}{{ address.other|nl2br }}{% else %}-{% endif %}</td>
              <td>
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a class=\"btn tooltip-link js-link-row-action dropdown-item\"
                       href=\"{{ path('admin_manufacturer_addresses_edit', {'addressId': address.id }) }}\"
                       data-toggle=\"pstooltip\"
                       data-placement=\"top\"
                       data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">edit</i>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% else %}
      {{ 'No address has been found for this brand.'|trans({}, 'Admin.Catalog.Notification') }}
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Blocks/View/addresses.html.twig");
    }
}
