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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig */
class __TwigTemplate_7b19302d52ccd94d78ea2ec641476a55 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Addresses", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </div>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 35, $this->source); })()), "id_manufacturer", [], "any", false, false, false, 35), 'row');
        echo "
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 36, $this->source); })()), "last_name", [], "any", false, false, false, 36), 'row');
        echo "
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 37, $this->source); })()), "first_name", [], "any", false, false, false, 37), 'row');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 38, $this->source); })()), "address", [], "any", false, false, false, 38), 'row');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 39, $this->source); })()), "address2", [], "any", false, false, false, 39), 'row');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 40, $this->source); })()), "post_code", [], "any", false, false, false, 40), 'row');
        echo "
      ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 41, $this->source); })()), "city", [], "any", false, false, false, 41), 'row');
        echo "
      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 42, $this->source); })()), "id_country", [], "any", false, false, false, 42), 'row');
        echo "
      <div class=\"js-manufacturer-address-state";
        // line 43
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 43, $this->source); })()), "id_state", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "choices", [], "any", false, false, false, 43))) {
            echo " d-none";
        }
        echo "\">
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 44, $this->source); })()), "id_state", [], "any", false, false, false, 44), 'row');
        echo "
      </div>

      ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 47, $this->source); })()), 'widget');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manufacturers_index");
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>
  </div>

</div>
";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addressForm"]) || array_key_exists("addressForm", $context) ? $context["addressForm"] : (function () { throw new RuntimeError('Variable "addressForm" does not exist.', 63, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 63,  128 => 58,  121 => 54,  117 => 53,  108 => 47,  102 => 44,  96 => 43,  92 => 42,  88 => 41,  84 => 40,  80 => 39,  76 => 38,  72 => 37,  68 => 36,  64 => 35,  57 => 31,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% form_theme addressForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{{ form_start(addressForm) }}
<div class=\"card\">
  <div class=\"card-header\">
    {{ 'Addresses'|trans({}, 'Admin.Catalog.Feature') }}
  </div>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      {{ form_row(addressForm.id_manufacturer) }}
      {{ form_row(addressForm.last_name) }}
      {{ form_row(addressForm.first_name) }}
      {{ form_row(addressForm.address) }}
      {{ form_row(addressForm.address2) }}
      {{ form_row(addressForm.post_code) }}
      {{ form_row(addressForm.city) }}
      {{ form_row(addressForm.id_country) }}
      <div class=\"js-manufacturer-address-state{% if addressForm.id_state.vars.choices is empty %} d-none{% endif %}\">
        {{ form_row(addressForm.id_state) }}
      </div>

      {{ form_widget(addressForm) }}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-inline-flex\">
      <a href=\"{{ path('admin_manufacturers_index') }}\" class=\"btn btn-outline-secondary\">
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <div class=\"d-inline-flex float-right\">
      <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>
  </div>

</div>
{{ form_end(addressForm) }}
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/Address/Blocks/form.html.twig");
    }
}
