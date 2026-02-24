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

/* @PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig */
class __TwigTemplate_79948a6adfbf063dc4e3ecffb6a1450b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, (isset($context["warehouses"]) || array_key_exists("warehouses", $context) ? $context["warehouses"] : (function () { throw new RuntimeError('Variable "warehouses" does not exist.', 25, $this->source); })())) > 0)) {
            // line 26
            echo "    <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product location in warehouses", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h4>

    <div class=\"alert alert-info\" style=\"display:block; position: 'auto';\" role=\"alert\">
        <div class=\"alert-text\">
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This interface allows you to specify the warehouse in which the product is stocked.", [], "Admin.Catalog.Help"), "html", null, true);
            echo "</p>
            <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It is also possible to specify the location within the warehouse for each product or combination.", [], "Admin.Catalog.Help"), "html", null, true);
            echo "</p>
        </div>
    </div>
    <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please choose the warehouses associated with this product.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</p>

    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["warehouses"]) || array_key_exists("warehouses", $context) ? $context["warehouses"] : (function () { throw new RuntimeError('Variable "warehouses" does not exist.', 36, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["warehouse"]) {
                // line 37
                echo "        <div class=\"panel panel-default\">
            ";
                // line 38
                $context["collectionName"] = ("warehouse_combination_" . twig_get_attribute($this->env, $this->source, $context["warehouse"], "id_warehouse", [], "any", false, false, false, 38));
                // line 39
                echo "            <div class=\"form-group\" id=\"warehouse_combination_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["warehouse"], "id_warehouse", [], "any", false, false, false, 39), "html", null, true);
                echo "\">
                <label class=\"col-sm-2 control-label\">
                    <h4>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), (isset($context["collectionName"]) || array_key_exists("collectionName", $context) ? $context["collectionName"] : (function () { throw new RuntimeError('Variable "collectionName" does not exist.', 41, $this->source); })()), [], "array", false, false, false, 41), "vars", [], "any", false, false, false, 41), "label", [], "any", false, false, false, 41), "html", null, true);
                echo "</h4><br/>
                    ";
                // line 42
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), (isset($context["collectionName"]) || array_key_exists("collectionName", $context) ? $context["collectionName"] : (function () { throw new RuntimeError('Variable "collectionName" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42)) > 1)) {
                    // line 43
                    echo "                        <button type=\"button\" class=\"btn btn-default check_all_warehouse\">
                            <i class=\"icon-check-sign\"></i> ";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                    echo "
                        </button>
                    ";
                }
                // line 47
                echo "                </label>
                <div class=\"col-sm-10\">
                    ";
                // line 49
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), (isset($context["collectionName"]) || array_key_exists("collectionName", $context) ? $context["collectionName"] : (function () { throw new RuntimeError('Variable "collectionName" does not exist.', 49, $this->source); })()), [], "array", false, false, false, 49), 'errors');
                echo "
                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), (isset($context["collectionName"]) || array_key_exists("collectionName", $context) ? $context["collectionName"] : (function () { throw new RuntimeError('Variable "collectionName" does not exist.', 50, $this->source); })()), [], "array", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["warehouse_combination"]) {
                    // line 51
                    echo "                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52), "label", [], "any", false, false, false, 52), "html", null, true);
                    echo "</label>
                            <div class=\"col-sm-10\">
                                <div class=\"float-left col-lg-1\">";
                    // line 54
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "activated", [], "any", false, false, false, 54), 'widget');
                    echo "</div>
                                ";
                    // line 55
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "location", [], "any", false, false, false, 55), 'label');
                    echo "
                                <div class=\"float-left col-lg-3\">";
                    // line 56
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "location", [], "any", false, false, false, 56), 'widget');
                    echo "</div>
                                ";
                    // line 57
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "id_product_attribute", [], "any", false, false, false, 57), 'widget');
                    echo "
                                ";
                    // line 58
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "warehouse_id", [], "any", false, false, false, 58), 'widget');
                    echo "
                                ";
                    // line 59
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["warehouse_combination"], "product_id", [], "any", false, false, false, 59), 'widget');
                    echo "
                            </div>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warehouse_combination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warehouse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 63,  138 => 59,  134 => 58,  130 => 57,  126 => 56,  122 => 55,  118 => 54,  113 => 52,  110 => 51,  106 => 50,  102 => 49,  98 => 47,  92 => 44,  89 => 43,  87 => 42,  83 => 41,  77 => 39,  75 => 38,  72 => 37,  68 => 36,  63 => 34,  57 => 31,  53 => 30,  45 => 26,  43 => 25,);
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
{% if warehouses|length > 0 %}
    <h4>{{ 'Product location in warehouses'|trans({}, 'Admin.Catalog.Feature') }}</h4>

    <div class=\"alert alert-info\" style=\"display:block; position: 'auto';\" role=\"alert\">
        <div class=\"alert-text\">
            <p>{{ 'This interface allows you to specify the warehouse in which the product is stocked.'|trans({}, 'Admin.Catalog.Help') }}</p>
            <p>{{ 'It is also possible to specify the location within the warehouse for each product or combination.'|trans({}, 'Admin.Catalog.Help') }}</p>
        </div>
    </div>
    <p>{{ 'Please choose the warehouses associated with this product.'|trans({}, 'Admin.Catalog.Feature') }}</p>

    {% for warehouse in warehouses %}
        <div class=\"panel panel-default\">
            {% set collectionName = 'warehouse_combination_' ~ warehouse.id_warehouse %}
            <div class=\"form-group\" id=\"warehouse_combination_{{ warehouse.id_warehouse }}\">
                <label class=\"col-sm-2 control-label\">
                    <h4>{{ form[collectionName].vars.label }}</h4><br/>
                    {% if form[collectionName]|length() > 1 %}
                        <button type=\"button\" class=\"btn btn-default check_all_warehouse\">
                            <i class=\"icon-check-sign\"></i> {{ 'Check / Uncheck all'|trans({}, 'Admin.Actions') }}
                        </button>
                    {% endif %}
                </label>
                <div class=\"col-sm-10\">
                    {{ form_errors(form[collectionName]) }}
                    {% for warehouse_combination in form[collectionName] %}
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">{{ warehouse_combination.vars.value.label }}</label>
                            <div class=\"col-sm-10\">
                                <div class=\"float-left col-lg-1\">{{ form_widget(warehouse_combination.activated) }}</div>
                                {{ form_label(warehouse_combination.location) }}
                                <div class=\"float-left col-lg-3\">{{ form_widget(warehouse_combination.location) }}</div>
                                {{ form_widget(warehouse_combination.id_product_attribute) }}
                                {{ form_widget(warehouse_combination.warehouse_id) }}
                                {{ form_widget(warehouse_combination.product_id) }}
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endfor %}
{% endif %}
", "@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig");
    }
}
