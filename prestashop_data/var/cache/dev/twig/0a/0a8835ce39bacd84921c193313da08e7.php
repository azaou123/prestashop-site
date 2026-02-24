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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig */
class __TwigTemplate_2029a7e1bf6037407a3768be04b5b092 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig"));

        // line 25
        echo "
<div class=\"modal fade\" id=\"addOrderProductModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 28, $this->source); })()), 'form_start', ["action" => "#"]);
        echo "
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 41, $this->source); })()), "product_id", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
              ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 44, $this->source); })()), "product_id", [], "any", false, false, false, 44), 'widget');
        echo "
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 48, $this->source); })()), "combination_id", [], "any", false, false, false, 48), "vars", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "\">
              ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 51, $this->source); })()), "combination_id", [], "any", false, false, false, 51), 'widget');
        echo "
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 57, $this->source); })()), "price_tax_excl", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
                  ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price tax excluded", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 62, $this->source); })()), "price_tax_excl", [], "any", false, false, false, 62), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 64, $this->source); })()), "currencyId", [], "any", false, false, false, 64), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-group mb-0\">
                <label class=\"form-control-label\" for=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 71, $this->source); })()), "price_tax_incl", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
        echo "\">
                  ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price tax included", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"input-group\">
                  ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 76, $this->source); })()), "price_tax_incl", [], "any", false, false, false, 76), 'widget');
        echo "
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orderForViewing"]) || array_key_exists("orderForViewing", $context) ? $context["orderForViewing"] : (function () { throw new RuntimeError('Variable "orderForViewing" does not exist.', 78, $this->source); })()), "currencyId", [], "any", false, false, false, 78), "html", null, true);
        echo "</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 86, $this->source); })()), "quantity", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86), "html", null, true);
        echo "\">
              ";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Global"), "html", null, true);
        echo "
            </label>
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 89, $this->source); })()), "quantity", [], "any", false, false, false, 89), 'widget');
        echo "
          </div>

        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            ";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    ";
        // line 102
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addProductToOrderForm"]) || array_key_exists("addProductToOrderForm", $context) ? $context["addProductToOrderForm"] : (function () { throw new RuntimeError('Variable "addProductToOrderForm" does not exist.', 102, $this->source); })()), 'form_end');
        echo "
  </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 102,  181 => 98,  175 => 95,  166 => 89,  161 => 87,  157 => 86,  146 => 78,  141 => 76,  134 => 72,  130 => 71,  120 => 64,  115 => 62,  108 => 58,  104 => 57,  95 => 51,  90 => 49,  86 => 48,  79 => 44,  74 => 42,  70 => 41,  60 => 34,  55 => 32,  48 => 28,  43 => 25,);
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

<div class=\"modal fade\" id=\"addOrderProductModal\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    {{ form_start(addProductToOrderForm, {'action': '#'}) }}
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\">
            {{ 'Add a product'|trans({}, 'Admin.Orderscustomers.Feature') }}
          </h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ 'Close'|trans({}, 'Admin.Actions') }}\">
            <span aria-hidden=\"true\">×</span>
          </button>
        </div>
        <div class=\"modal-body\">

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.product_id.vars.id }}\">
              {{ 'Product'|trans({}, 'Admin.Global') }}
            </label>
            {{ form_widget(addProductToOrderForm.product_id) }}
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.combination_id.vars.id }}\">
              {{ 'Combination'|trans({}, 'Admin.Global') }}
            </label>
            {{ form_widget(addProductToOrderForm.combination_id) }}
          </div>

          <div class=\"row\">
            <div class=\"col\">
              <div class=\"form-group\">
                <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.price_tax_excl.vars.id }}\">
                  {{ 'Price tax excluded'|trans({}, 'Admin.Advparameters.Feature') }}
                </label>

                <div class=\"input-group\">
                  {{ form_widget(addProductToOrderForm.price_tax_excl) }}
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">{{ orderForViewing.currencyId }}</span>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-group mb-0\">
                <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.price_tax_incl.vars.id }}\">
                  {{ 'Price tax included'|trans({}, 'Admin.Advparameters.Feature') }}
                </label>

                <div class=\"input-group\">
                  {{ form_widget(addProductToOrderForm.price_tax_incl) }}
                  <div class=\"input-group-append\">
                    <span class=\"input-group-text\">{{ orderForViewing.currencyId }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"form-control-label\" for=\"{{ addProductToOrderForm.quantity.vars.id }}\">
              {{ 'Quantity'|trans({}, 'Admin.Global') }}
            </label>
            {{ form_widget(addProductToOrderForm.quantity) }}
          </div>

        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">
            {{ 'Cancel'|trans({}, 'Admin.Actions') }}
          </button>
          <button type=\"submit\" class=\"btn btn-primary\">
            {{ 'Add'|trans({}, 'Admin.Actions') }}
          </button>
        </div>
      </div>
    {{ form_end(addProductToOrderForm) }}
  </div>
</div>", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/Modal/add_product_modal.html.twig");
    }
}
