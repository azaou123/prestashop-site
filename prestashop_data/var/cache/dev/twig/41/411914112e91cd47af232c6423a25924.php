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

/* @PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig */
class __TwigTemplate_655c3672264bf0e10fb3e3e03b42c0de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">local_shipping</i>
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suppliers", [], "Admin.Global"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">

      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 39, $this->source); })()), "phone", [], "any", false, false, false, 39), 'row');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 40, $this->source); })()), "mobile_phone", [], "any", false, false, false, 40), 'row');
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 41, $this->source); })()), "address", [], "any", false, false, false, 41), 'row');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 42, $this->source); })()), "address2", [], "any", false, false, false, 42), 'row');
        echo "
      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 43, $this->source); })()), "post_code", [], "any", false, false, false, 43), 'row');
        echo "
      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 44, $this->source); })()), "city", [], "any", false, false, false, 44), 'row');
        echo "
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 45, $this->source); })()), "id_country", [], "any", false, false, false, 45), 'row');
        echo "
        <div class=\"js-supplier-state";
        // line 46
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 46, $this->source); })()), "id_state", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "choices", [], "any", false, false, false, 46))) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 47, $this->source); })()), "id_state", [], "any", false, false, false, 47), 'row');
        echo "
        </div>
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 49, $this->source); })()), "dni", [], "any", false, false, false, 49), 'row');
        echo "
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 50, $this->source); })()), "logo", [], "any", false, false, false, 50), 'row');
        echo "

      ";
        // line 52
        if ((array_key_exists("logoImage", $context) &&  !(null === (isset($context["logoImage"]) || array_key_exists("logoImage", $context) ? $context["logoImage"] : (function () { throw new RuntimeError('Variable "logoImage" does not exist.', 52, $this->source); })())))) {
            // line 53
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
            // line 56
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Suppliers/logo_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", 56)->display($context);
            // line 57
            echo "          </div>
        </div>
      ";
        }
        // line 60
        echo "      ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 60, $this->source); })()), 'widget');
        echo "

    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_suppliers_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\">
      ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
</div>
";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["supplierForm"]) || array_key_exists("supplierForm", $context) ? $context["supplierForm"] : (function () { throw new RuntimeError('Variable "supplierForm" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 73,  155 => 69,  149 => 66,  145 => 65,  136 => 60,  131 => 57,  129 => 56,  124 => 53,  122 => 52,  117 => 50,  113 => 49,  108 => 47,  102 => 46,  98 => 45,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 37,  58 => 32,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% form_theme supplierForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{{ form_start(supplierForm) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">local_shipping</i>
    {{ 'Suppliers'|trans({}, 'Admin.Global') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">

      {{ form_row(supplierForm.name) }}
      {{ form_row(supplierForm.description) }}
      {{ form_row(supplierForm.phone) }}
      {{ form_row(supplierForm.mobile_phone) }}
      {{ form_row(supplierForm.address) }}
      {{ form_row(supplierForm.address2) }}
      {{ form_row(supplierForm.post_code) }}
      {{ form_row(supplierForm.city) }}
      {{ form_row(supplierForm.id_country) }}
        <div class=\"js-supplier-state{% if supplierForm.id_state.vars.choices is empty %} d-none{% endif %}\">
          {{ form_row(supplierForm.id_state) }}
        </div>
      {{ form_row(supplierForm.dni) }}
      {{ form_row(supplierForm.logo) }}

      {% if logoImage is defined and logoImage is not null %}
        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            {% include '@PrestaShop/Admin/Sell/Catalog/Suppliers/logo_image.html.twig' %}
          </div>
        </div>
      {% endif %}
      {{ form_widget(supplierForm) }}

    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_suppliers_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\">
      {{ 'Save'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
</div>
{{ form_end(supplierForm) }}
", "@PrestaShop/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Suppliers/Blocks/form.html.twig");
    }
}
