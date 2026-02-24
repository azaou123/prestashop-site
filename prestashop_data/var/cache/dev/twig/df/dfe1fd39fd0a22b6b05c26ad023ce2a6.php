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

/* @PrestaShop/Admin/Multistore/dropdown.html.twig */
class __TwigTemplate_351bd158d293ed27fcee2169f2c1a4a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'multistore_dropdown' => [$this, 'block_multistore_dropdown'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Multistore/dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Multistore/dropdown.html.twig"));

        // line 25
        $this->displayBlock('multistore_dropdown', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_multistore_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_dropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_dropdown"));

        // line 26
        echo "  <div class=\"btn-group multistore-dropdown js-multistore-dropdown\">
    <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton4\" data-toggle=\"dropdown\" data-flip=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <i class=\"material-icons\">storefront</i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton4\">
      <div class=\"multistore-dropdown-search-container\">
        <i class=\"material-icons\">search</i>
        <input type=\"text\" class=\"form-control multistore-dropdown-search js-multistore-dropdown-search\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search store name", [], "Admin.Navigation.Header"), "html", null, true);
        echo "\" data-no-results=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
        echo "\" data-searching=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
        echo "\">
      </div>

      <div class=\"multistore-dropdown-content js-multistore-scrollbar\">
        <ul class=\"multistore-dropdown-group\">
          ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupList"]) || array_key_exists("groupList", $context) ? $context["groupList"] : (function () { throw new RuntimeError('Variable "groupList" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 39
            echo "          <li class=\"multistore-dropdown-group-item\">
            <a class=\"multistore-dropdown-group-name\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl($context["group"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . twig_get_attribute($this->env, $this->source, $context["group"], "name", [], "any", false, false, false, 40)), "html", null, true);
            echo "</a>

            <ul class=\"multistore-dropdown-shops\">
              ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                // line 44
                echo "                <li class=\"multistore-dropdown-shop\">
                  <a class=\"multistore-dropdown-shop-name";
                // line 45
                if ((twig_get_attribute($this->env, $this->source, $context["shop"], "hasMainUrl", [], "method", false, false, false, 45) == false)) {
                    echo " multistore-dropdown-no-url\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "</a>";
                } else {
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl($context["shop"]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shop"], "name", [], "any", false, false, false, 45), "html", null, true);
                    echo "</a>";
                }
                // line 46
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["shopCustomizationChecker"]) || array_key_exists("shopCustomizationChecker", $context) ? $context["shopCustomizationChecker"] : (function () { throw new RuntimeError('Variable "shopCustomizationChecker" does not exist.', 46, $this->source); })()), "isConfigurationCustomizedForThisShop", [0 => (isset($context["configurationKey"]) || array_key_exists("configurationKey", $context) ? $context["configurationKey"] : (function () { throw new RuntimeError('Variable "configurationKey" does not exist.', 46, $this->source); })()), 1 => $context["shop"], 2 => (isset($context["isGroupShopContext"]) || array_key_exists("isGroupShopContext", $context) ? $context["isGroupShopContext"] : (function () { throw new RuntimeError('Variable "isGroupShopContext" does not exist.', 46, $this->source); })())], "method", false, false, false, 46) == true)) {
                    // line 47
                    echo "                    <p class=\"multistore-dropdown-shop-status multistore-dropdown-shop-status-locked\">
                      <i class=\"material-icons\">https</i>
                      ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customized", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                } else {
                    // line 51
                    echo "                    <p class=\"multistore-dropdown-shop-status\">
                      ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inherited", [], "Admin.Global"), "html", null, true);
                    echo "
                  ";
                }
                // line 54
                echo "                    </p>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "            </ul>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </ul>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Multistore/dropdown.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  146 => 57,  138 => 54,  133 => 52,  130 => 51,  125 => 49,  121 => 47,  118 => 46,  106 => 45,  103 => 44,  99 => 43,  91 => 40,  88 => 39,  84 => 38,  72 => 33,  63 => 26,  44 => 25,);
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
{% block multistore_dropdown %}
  <div class=\"btn-group multistore-dropdown js-multistore-dropdown\">
    <button class=\"btn btn-outline-secondary btn-sm dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton4\" data-toggle=\"dropdown\" data-flip=\"false\" aria-haspopup=\"true\" aria-expanded=\"false\">
      <i class=\"material-icons\">storefront</i>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenuButton4\">
      <div class=\"multistore-dropdown-search-container\">
        <i class=\"material-icons\">search</i>
        <input type=\"text\" class=\"form-control multistore-dropdown-search js-multistore-dropdown-search\" placeholder=\"{{ 'Search store name'|trans({}, 'Admin.Navigation.Header') }}\" data-no-results=\"{{ 'No results found for'|trans({}, 'Admin.Global') }}\" data-searching=\"{{ 'Searching for'|trans({}, 'Admin.Global') }}\">
      </div>

      <div class=\"multistore-dropdown-content js-multistore-scrollbar\">
        <ul class=\"multistore-dropdown-group\">
          {% for group in groupList %}
          <li class=\"multistore-dropdown-group-item\">
            <a class=\"multistore-dropdown-group-name\" href=\"{{ multistore_group_url(group) }}\">{{ \"Group\"|trans({}, 'Admin.Global') ~ ' ' ~ group.name }}</a>

            <ul class=\"multistore-dropdown-shops\">
              {% for shop in group.shops %}
                <li class=\"multistore-dropdown-shop\">
                  <a class=\"multistore-dropdown-shop-name{% if shop.hasMainUrl() == false %} multistore-dropdown-no-url\">{{ shop.name }}</a>{% else %}\" href=\"{{ multistore_shop_url(shop) }}\">{{ shop.name }}</a>{% endif %}
                  {% if shopCustomizationChecker.isConfigurationCustomizedForThisShop(configurationKey, shop, isGroupShopContext) == true %}
                    <p class=\"multistore-dropdown-shop-status multistore-dropdown-shop-status-locked\">
                      <i class=\"material-icons\">https</i>
                      {{ 'Customized'|trans({}, 'Admin.Global') }}
                  {% else %}
                    <p class=\"multistore-dropdown-shop-status\">
                      {{ 'Inherited'|trans({}, 'Admin.Global') }}
                  {% endif %}
                    </p>
                </li>
              {% endfor %}
            </ul>
          </li>
          {% endfor %}
        </ul>
      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Multistore/dropdown.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Multistore/dropdown.html.twig");
    }
}
