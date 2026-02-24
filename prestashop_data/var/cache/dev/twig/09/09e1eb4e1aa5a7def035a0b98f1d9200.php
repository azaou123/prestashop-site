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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig */
class __TwigTemplate_fdc5ddcf687ff006ea7349513cec2598 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig"));

        // line 25
        echo "
<div class=\"card customer-groups-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Groups", [], "Admin.Global"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 30, $this->source); })()), "groupsInformation", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>

    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCustomers", true, ["id_customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 32, $this->source); })()), "customerId", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "updatecustomer" => 1]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    ";
        // line 42
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 42, $this->source); })()), "groupsInformation", [], "any", false, false, false, 42))) {
            // line 43
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 51, $this->source); })()), "groupsInformation", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 52
                echo "          <tr class=\"customer-group\">
            <td class=\"customer-group-id\">";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "groupId", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
            <td class=\"customer-group-name\">
              <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminGroups", true, ["id_group" => twig_get_attribute($this->env, $this->source, $context["group"], "groupId", [], "any", false, false, false, 55), "viewgroup" => 1]), "html", null, true);
                echo "\">
                ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 56), "html", null, true);
                echo "
              </a>
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 64
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No cart is available", [], "Admin.Orderscustomers.Notification"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 68
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 68,  127 => 65,  124 => 64,  119 => 61,  108 => 56,  104 => 55,  99 => 53,  96 => 52,  92 => 51,  85 => 47,  81 => 46,  76 => 43,  74 => 42,  65 => 36,  58 => 32,  53 => 30,  49 => 29,  43 => 25,);
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

<div class=\"card customer-groups-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">group</i>
    {{ 'Groups'|trans({}, 'Admin.Global') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.groupsInformation|length }}</span>

    <a href=\"{{ getAdminLink('AdminCustomers', true, {'id_customer': customerInformation.customerId.value, 'updatecustomer': 1}) }}\"
       class=\"tooltip-link float-right\"
       data-toggle=\"pstooltip\"
       data-placement=\"top\"
       data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    {% if customerInformation.groupsInformation is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
        {% for group in customerInformation.groupsInformation %}
          <tr class=\"customer-group\">
            <td class=\"customer-group-id\">{{ group.groupId }}</td>
            <td class=\"customer-group-name\">
              <a href=\"{{ getAdminLink('AdminGroups', true, {'id_group': group.groupId, 'viewgroup': 1}) }}\">
                {{ group.name }}
              </a>
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
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/groups.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/groups.html.twig");
    }
}
