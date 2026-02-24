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

/* @PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig */
class __TwigTemplate_4ff6ddd3ccbc8e556de72389d02b9b9f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'feature_form_block' => [$this, 'block_feature_form_block'],
            'feature_form_rest' => [$this, 'block_feature_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('feature_form_block', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_feature_form_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_block"));

        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["featureForm"]) || array_key_exists("featureForm", $context) ? $context["featureForm"] : (function () { throw new RuntimeError('Variable "featureForm" does not exist.', 29, $this->source); })()), 'form_start');
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["featureForm"]) || array_key_exists("featureForm", $context) ? $context["featureForm"] : (function () { throw new RuntimeError('Variable "featureForm" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>={}")]], 38, $context, $this->getSourceContext());
        // line 41
        echo "

        ";
        // line 43
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayFeatureForm", ["id_feature" => (isset($context["featureId"]) || array_key_exists("featureId", $context) ? $context["featureId"] : (function () { throw new RuntimeError('Variable "featureId" does not exist.', 43, $this->source); })())]);
        echo "

        ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["featureForm"] ?? null), "shop_association", [], "any", true, true, false, 45)) {
            // line 46
            echo "          ";
            echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["featureForm"]) || array_key_exists("featureForm", $context) ? $context["featureForm"] : (function () { throw new RuntimeError('Variable "featureForm" does not exist.', 46, $this->source); })()), "shop_association", [], "any", false, false, false, 46), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store association", [], "Admin.Global")]], 46, $context, $this->getSourceContext());
            // line 48
            echo "
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('feature_form_rest', $context, $blocks);
        // line 54
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      ";
        // line 59
        echo "      <a href=\"";
        echo "\" class=\"btn btn-outline-secondary\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <button class=\"btn btn-primary float-right\">
        ";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
    </div>
  </div>

  ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["featureForm"]) || array_key_exists("featureForm", $context) ? $context["featureForm"] : (function () { throw new RuntimeError('Variable "featureForm" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_feature_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_form_rest"));

        // line 52
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["featureForm"]) || array_key_exists("featureForm", $context) ? $context["featureForm"] : (function () { throw new RuntimeError('Variable "featureForm" does not exist.', 52, $this->source); })()), 'rest');
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 52,  149 => 51,  137 => 68,  129 => 63,  123 => 60,  119 => 59,  113 => 54,  111 => 51,  108 => 50,  104 => 48,  101 => 46,  99 => 45,  94 => 43,  90 => 41,  88 => 38,  80 => 33,  72 => 29,  53 => 28,  50 => 27,  48 => 26,  45 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block feature_form_block %}
  {{ form_start(featureForm) }}

  <div class=\"card\">
    <h3 class=\"card-header\">
      {{ 'Feature'|trans({}, 'Admin.Catalog.Feature') }}
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        {{ ps.form_group_row(featureForm.name, {}, {
          'label': 'Name'|trans({}, 'Admin.Global'),
          'help': 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>={}'
        }) }}

        {{ renderhook('displayFeatureForm', {'id_feature': featureId}) }}

        {% if featureForm.shop_association is defined %}
          {{ ps.form_group_row(featureForm.shop_association, {}, {
            'label': 'Store association'|trans({}, 'Admin.Global')
          }) }}
        {% endif %}

        {% block feature_form_rest %}
          {{ form_rest(featureForm) }}
        {% endblock %}
      </div>
    </div>

    <div class=\"card-footer\">
      {#@todo uncomment path when index is migrated#}
      <a href=\"{#{{ path('admin_features_index') }}#}\" class=\"btn btn-outline-secondary\">
        {{ 'Cancel'|trans({}, 'Admin.Actions') }}
      </a>
      <button class=\"btn btn-primary float-right\">
        {{ 'Save'|trans({}, 'Admin.Actions') }}
      </button>
    </div>
  </div>

  {{ form_end(featureForm) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/Blocks/form.html.twig");
    }
}
