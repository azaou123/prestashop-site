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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig */
class __TwigTemplate_15ca72b043686e2420acfd06e85e321e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig"));

        // line 25
        echo "
<div class=\"card d-none\" id=\"cart-rules-block\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vouchers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <label class=\"col-md-3 text-md-right col-form-label\" for=\"search-cart-rules-input\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</label>
      <div class=\"col-md-4 mb-2\" id=\"cart-rules-search-block\">
        <div class=\"col p-0\">
          <input type=\"text\" class=\"form-control\" id=\"search-cart-rules-input\">
          <ul id=\"search-cart-rules-result-box\" class=\"position-absolute bg-white w-100 form-control d-none list-unstyled\"></ul>
          <div class=\"text-danger align-top d-none\" id=\"js-cart-rule-error-block\">
            <i class=\"material-icons form-error-icon\">error_outline</i>
            <span id=\"js-cart-rule-error-text\"></span>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or", [], "Admin.Global"), "html", null, true);
        echo "</span>
        <a class=\"btn btn-primary\" id=\"js-add-cart-rule-btn\"
          href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCartRules", true, ["liteDisplaying" => 1, "submitFormAjax" => 1, "addcart_rule" => 1]), "html", null, true);
        echo "\">
          ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new voucher", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </a>
      </div>
    </div>

    <table class=\"table d-none mt-2\" id=\"cart-rules-table\">
      <thead>
      <tr>
        <th>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Value", [], "Admin.Global"), "html", null, true);
        echo "</th>
        <th></th>
      </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<script id=\"cart-rules-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-rule-name\"></td>
    <td class=\"js-cart-rule-description\"></td>
    <td class=\"js-cart-rule-value\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-cart-rule-delete-btn\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove", [], "Admin.Global"), "html", null, true);
        echo "</button>
    </td>
  </tr>
</script>

<script id=\"cart-rules-not-found-template\" type=\"text/template\">
  <li>";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No voucher was found", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</li>
</script>

<script id=\"found-cart-rule-template\" type=\"text/template\">
  <li data-cart-rule-id=\"\" class=\"js-found-cart-rule found-cart-rule\"></li>
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 78,  116 => 72,  98 => 57,  94 => 56,  90 => 55,  79 => 47,  75 => 46,  70 => 44,  55 => 32,  48 => 28,  43 => 25,);
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

<div class=\"card d-none\" id=\"cart-rules-block\">
  <h3 class=\"card-header\">
    {{ 'Vouchers'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"row\">
      <label class=\"col-md-3 text-md-right col-form-label\" for=\"search-cart-rules-input\">{{ 'Search for a voucher'|trans({}, 'Admin.Orderscustomers.Feature') }}</label>
      <div class=\"col-md-4 mb-2\" id=\"cart-rules-search-block\">
        <div class=\"col p-0\">
          <input type=\"text\" class=\"form-control\" id=\"search-cart-rules-input\">
          <ul id=\"search-cart-rules-result-box\" class=\"position-absolute bg-white w-100 form-control d-none list-unstyled\"></ul>
          <div class=\"text-danger align-top d-none\" id=\"js-cart-rule-error-block\">
            <i class=\"material-icons form-error-icon\">error_outline</i>
            <span id=\"js-cart-rule-error-text\"></span>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <span class=\"mr-2\">{{ 'or'|trans({}, 'Admin.Global') }}</span>
        <a class=\"btn btn-primary\" id=\"js-add-cart-rule-btn\"
          href=\"{{ getAdminLink('AdminCartRules', true, {'liteDisplaying': 1, 'submitFormAjax': 1, 'addcart_rule': 1}) }}\">
          {{ 'Add new voucher'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </a>
      </div>
    </div>

    <table class=\"table d-none mt-2\" id=\"cart-rules-table\">
      <thead>
      <tr>
        <th>{{ 'Name'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Description'|trans({}, 'Admin.Global') }}</th>
        <th>{{ 'Value'|trans({}, 'Admin.Global') }}</th>
        <th></th>
      </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
</div>

<script id=\"cart-rules-table-row-template\" type=\"text/template\">
  <tr>
    <td class=\"js-cart-rule-name\"></td>
    <td class=\"js-cart-rule-description\"></td>
    <td class=\"js-cart-rule-value\"></td>
    <td class=\"text-right\">
      <button class=\"btn btn-outline-danger js-cart-rule-delete-btn\">{{ 'Remove'|trans({}, 'Admin.Global') }}</button>
    </td>
  </tr>
</script>

<script id=\"cart-rules-not-found-template\" type=\"text/template\">
  <li>{{ 'No voucher was found'|trans({}, 'Admin.Orderscustomers.Feature') }}</li>
</script>

<script id=\"found-cart-rule-template\" type=\"text/template\">
  <li data-cart-rule-id=\"\" class=\"js-found-cart-rule found-cart-rule\"></li>
</script>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/Create/cart_rules.html.twig");
    }
}
