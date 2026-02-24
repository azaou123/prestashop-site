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

/* @PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig */
class __TwigTemplate_6b8e0c66c9661e1a09ea7b4c19c79a37 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["requiredFieldsForm"]) || array_key_exists("requiredFieldsForm", $context) ? $context["requiredFieldsForm"] : (function () { throw new RuntimeError('Variable "requiredFieldsForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
<div class=\"collapse\" id=\"addressRequiredFieldsContainer\">
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requiredFieldsForm"]) || array_key_exists("requiredFieldsForm", $context) ? $context["requiredFieldsForm"] : (function () { throw new RuntimeError('Variable "requiredFieldsForm" does not exist.', 29, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_addresses_save_required_fields")]);
        echo "
  <div class=\"card\" >
    <h3 class=\"card-header\">
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required Fields", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"alert alert-info\" role=\"alert\">
        <div class=\"alert-text\">
          <p>
            ";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required fields apply to the customer's registration form, you should check the address formats in [1]International > Locations > Countries[/1] before.", ["[1]" => (("<a href=\"" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCountries", true)) . "\">"), "[/1]" => "</a>"], "Admin.Orderscustomers.Help");
        // line 44
        echo "
          </p>
        </div>
      </div>
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["requiredFieldsForm"]) || array_key_exists("requiredFieldsForm", $context) ? $context["requiredFieldsForm"] : (function () { throw new RuntimeError('Variable "requiredFieldsForm" does not exist.', 48, $this->source); })()), "required_fields", [], "any", false, false, false, 48), 'widget');
        echo "
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
  ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requiredFieldsForm"]) || array_key_exists("requiredFieldsForm", $context) ? $context["requiredFieldsForm"] : (function () { throw new RuntimeError('Variable "requiredFieldsForm" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 56,  82 => 52,  75 => 48,  69 => 44,  67 => 38,  58 => 32,  52 => 29,  48 => 27,  46 => 26,  43 => 25,);
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

{% form_theme requiredFieldsForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

<div class=\"collapse\" id=\"addressRequiredFieldsContainer\">
  {{ form_start(requiredFieldsForm, {'action': path('admin_addresses_save_required_fields')}) }}
  <div class=\"card\" >
    <h3 class=\"card-header\">
      {{ 'Required Fields'|trans({}, 'Admin.Orderscustomers.Feature') }}
    </h3>
    <div class=\"card-body\">
      <div class=\"alert alert-info\" role=\"alert\">
        <div class=\"alert-text\">
          <p>
            {{ 'Required fields apply to the customer\\'s registration form, you should check the address formats in [1]International > Locations > Countries[/1] before.'|trans(
              {
                '[1]': '<a href=\"' ~ getAdminLink('AdminCountries', true) ~ '\">',
                '[/1]': '</a>'
              },
              'Admin.Orderscustomers.Help')|raw
            }}
          </p>
        </div>
      </div>
      {{ form_widget(requiredFieldsForm.required_fields) }}
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
  {{ form_end(requiredFieldsForm) }}
</div>
", "@PrestaShop/Admin/Sell/Address/Blocks/required_fields.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Address/Blocks/required_fields.html.twig");
    }
}
