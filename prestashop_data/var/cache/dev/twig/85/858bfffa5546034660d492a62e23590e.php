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

/* @PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig */
class __TwigTemplate_b14ec2730a067fafa1eef5afd49ace15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig"));

        // line 25
        echo "<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topMenuData"]) || array_key_exists("topMenuData", $context) ? $context["topMenuData"] : (function () { throw new RuntimeError('Variable "topMenuData" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 27
            echo "    ";
            $context["refMenu"] = twig_get_attribute($this->env, $this->source, $context["menu"], "refMenu", [], "any", false, false, false, 27);
            // line 28
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["refMenu"]) || array_key_exists("refMenu", $context) ? $context["refMenu"] : (function () { throw new RuntimeError('Variable "refMenu" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["refMenu"]) || array_key_exists("refMenu", $context) ? $context["refMenu"] : (function () { throw new RuntimeError('Variable "refMenu" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\">
        <a class=\"dropdown-item module-category-menu module-category-reset\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
        </a>

        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["menu"], "subMenu", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 41
                echo "          <a 
            class=\"dropdown-item module-category-menu\"
            ";
                // line 43
                if (twig_get_attribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 43)) {
                    echo "data-category-tab=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 43), "html", null, true);
                    echo "\"";
                }
                // line 44
                echo "            data-category-ref=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "refMenu", [], "any", false, false, false, 44), "html", null, true);
                echo "\"
            data-category-display-name=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 45), "html", null, true);
                echo "\"
          >
            ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 47), "html", null, true);
                echo "<span class=\"float-right\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subMenu"], "modules", [], "any", false, false, false, 47)), "html", null, true);
                echo "</span>
          </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subMenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  113 => 50,  102 => 47,  97 => 45,  92 => 44,  86 => 43,  82 => 41,  78 => 40,  72 => 37,  67 => 35,  59 => 30,  53 => 28,  50 => 27,  46 => 26,  43 => 25,);
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
<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  {% for menu in topMenuData %}
    {% set refMenu = menu.refMenu %}
    <div id=\"{{refMenu}}\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        {{menu.name}}
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"{{refMenu}}\">
        <a class=\"dropdown-item module-category-menu module-category-reset\">
          {{ 'All categories'|trans({}, 'Admin.Modules.Feature') }}
        </a>

        {% for subMenu in menu.subMenu %}
          <a 
            class=\"dropdown-item module-category-menu\"
            {% if subMenu.tab %}data-category-tab=\"{{subMenu.tab}}\"{% endif %}
            data-category-ref=\"{{subMenu.refMenu}}\"
            data-category-display-name=\"{{subMenu.name}}\"
          >
            {{subMenu.name}}<span class=\"float-right\">{{subMenu.modules|length }}</span>
          </a>
        {% endfor %}
    </div>
  {% endfor %}
</div>
", "@PrestaShop/Admin/Module/Includes/dropdown_categories_catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/dropdown_categories_catalog.html.twig");
    }
}
