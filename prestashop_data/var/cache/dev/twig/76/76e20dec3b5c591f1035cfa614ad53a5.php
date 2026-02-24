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

/* @PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig */
class __TwigTemplate_f11ae6a81605a84d40a658c0b74bd8ea extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 28
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig"));

        // line 26
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit: %value%", ["%value%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["editableFeature"]) || array_key_exists("editableFeature", $context) ? $context["editableFeature"] : (function () { throw new RuntimeError('Variable "editableFeature" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), (isset($context["contextLangId"]) || array_key_exists("contextLangId", $context) ? $context["contextLangId"] : (function () { throw new RuntimeError('Variable "contextLangId" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26)], "Admin.Catalog.Feature");
        // line 28
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 31
        echo "  ";
        if ((array_key_exists("showDisabledFeatureWarning", $context) && (isset($context["showDisabledFeatureWarning"]) || array_key_exists("showDisabledFeatureWarning", $context) ? $context["showDisabledFeatureWarning"] : (function () { throw new RuntimeError('Variable "showDisabledFeatureWarning" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 32)->display($context);
            // line 33
            echo "  ";
        } else {
            // line 34
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 34)->display(twig_array_merge($context, ["featureId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 35
(isset($context["editableFeature"]) || array_key_exists("editableFeature", $context) ? $context["editableFeature"] : (function () { throw new RuntimeError('Variable "editableFeature" does not exist.', 35, $this->source); })()), "featureId", [], "any", false, false, false, 35), "getValue", [], "any", false, false, false, 35), "featureForm" =>             // line 36
(isset($context["featureForm"]) || array_key_exists("featureForm", $context) ? $context["featureForm"] : (function () { throw new RuntimeError('Variable "featureForm" does not exist.', 36, $this->source); })())]));
            // line 38
            echo "  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  ";
        // line 43
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form_javascripts.html.twig", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", 43)->display($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 43,  107 => 42,  97 => 41,  86 => 38,  84 => 36,  83 => 35,  81 => 34,  78 => 33,  75 => 32,  72 => 31,  62 => 30,  51 => 28,  49 => 26,  36 => 28,);
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

{% set layoutTitle = 'Edit: %value%'|trans({'%value%': editableFeature.name[contextLangId]}, 'Admin.Catalog.Feature') %}

{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {% if showDisabledFeatureWarning is defined and showDisabledFeatureWarning %}
    {% include '@PrestaShop/Admin/Sell/Catalog/Features/Blocks/disabled_feature_warning.html.twig' %}
  {% else %}
    {% include '@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form.html.twig' with {
      featureId: editableFeature.featureId.getValue,
      featureForm: featureForm
    } %}
  {% endif %}
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  {% include '@PrestaShop/Admin/Sell/Catalog/Features/Blocks/form_javascripts.html.twig' %}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Features/edit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Features/edit.html.twig");
    }
}
