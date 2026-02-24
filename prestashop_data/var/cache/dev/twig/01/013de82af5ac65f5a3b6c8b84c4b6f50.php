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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig */
class __TwigTemplate_8cd500bb74e3f113b63dab45905519ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig"));

        // line 25
        echo "
<div class=\"row module-selection d-none\">
  <div class=\"col-lg-7\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extraModules"]) || array_key_exists("extraModules", $context) ? $context["extraModules"] : (function () { throw new RuntimeError('Variable "extraModules" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 29
            echo "      <div class=\"module-render-container module-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
        <div>
          <img class=\"top-logo\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 31), "img", [], "any", false, false, false, 31), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 31), "displayName", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
          <h2 class=\"text-ellipsis module-name-grid\">
            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 33), "displayName", [], "any", false, false, false, 33), "html", null, true);
            echo "
          </h2>
          <div class=\"text-ellipsis small-text module-version\">
            ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 36), "version", [], "any", false, false, false, 36), "html", null, true);
            echo " by ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 36), "author", [], "any", false, false, false, 36), "html", null, true);
            echo "
          </div>
        </div>
        <div class=\"small no-padding\">
          ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 40), "description", [], "any", false, false, false, 40), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "  </div>

  <div class=\"col-lg-5\">
    <h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <select class=\"modules-list-select\" data-toggle=\"select2\">
      ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extraModules"]) || array_key_exists("extraModules", $context) ? $context["extraModules"] : (function () { throw new RuntimeError('Variable "extraModules" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 50
            echo "        <option value=\"module-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 50), "displayName", [], "any", false, false, false, 50), "html", null, true);
            echo "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </select>
  </div>
</div>

<div class=\"module-contents d-none\">
  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extraModules"]) || array_key_exists("extraModules", $context) ? $context["extraModules"] : (function () { throw new RuntimeError('Variable "extraModules" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 58
            echo "    <div id=\"module_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo "\" class=\"module-render-container module-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
            echo "\">
      ";
            // line 59
            echo twig_get_attribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 59);
            echo "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 62,  133 => 59,  126 => 58,  122 => 57,  115 => 52,  104 => 50,  100 => 49,  95 => 47,  90 => 44,  80 => 40,  71 => 36,  65 => 33,  58 => 31,  52 => 29,  48 => 28,  43 => 25,);
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

<div class=\"row module-selection d-none\">
  <div class=\"col-lg-7\">
    {% for module in extraModules %}
      <div class=\"module-render-container module-{{ module.attributes.name }}\">
        <div>
          <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
          <h2 class=\"text-ellipsis module-name-grid\">
            {{ module.attributes.displayName }}
          </h2>
          <div class=\"text-ellipsis small-text module-version\">
            {{ module.attributes.version }} by {{ module.attributes.author }}
          </div>
        </div>
        <div class=\"small no-padding\">
          {{ module.attributes.description }}
        </div>
      </div>
    {% endfor %}
  </div>

  <div class=\"col-lg-5\">
    <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <select class=\"modules-list-select\" data-toggle=\"select2\">
      {% for module in extraModules %}
        <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
      {% endfor %}
    </select>
  </div>
</div>

<div class=\"module-contents d-none\">
  {% for module in extraModules %}
    <div id=\"module_{{ module.id }}\" class=\"module-render-container module-{{ module.attributes.name }}\">
      {{ module.content|raw }}
    </div>
  {% endfor %}
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig");
    }
}
