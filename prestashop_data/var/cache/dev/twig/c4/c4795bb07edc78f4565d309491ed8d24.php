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

/* @PrestaShop/Admin/Module/Includes/tab-module-line.html.twig */
class __TwigTemplate_3d9b2a1852170d0118fe368718c85021 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig"));

        // line 26
        $context["moduleImage"] = (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 26, $this->source); })()), "attributes", [], "any", false, false, false, 26), "img", [], "any", false, false, false, 26))) ? ((((twig_constant("_MODULE_DIR_") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 27, $this->source); })()), "attributes", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27)) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 27, $this->source); })()), "attributes", [], "any", false, false, false, 27), "logo", [], "any", false, false, false, 27))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 28, $this->source); })()), "attributes", [], "any", false, false, false, 28), "img", [], "any", false, false, false, 28)));
        // line 30
        echo "<tr>
  <td class=\"fixed-with-sm center\">
    <img
      class=\"img-thumbnail\"
      alt=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 34, $this->source); })()), "attributes", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
      src=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["moduleImage"]) || array_key_exists("moduleImage", $context) ? $context["moduleImage"] : (function () { throw new RuntimeError('Variable "moduleImage" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\"
    />
  </td>
  <td>
    <div id=\"anchor";
        // line 39
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 39, $this->source); })()), "attributes", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39)), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 39, $this->source); })()), "attributes", [], "any", false, false, false, 39), "displayName", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
      <div class=\"module_name\">
        <span style=\"display:none\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 41, $this->source); })()), "attributes", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</span>
        ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 42, $this->source); })()), "attributes", [], "any", false, false, false, 42), "displayName", [], "any", false, false, false, 42), "html", null, true);
        echo "
        <small class=\"text-muted\">v";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 43, $this->source); })()), "attributes", [], "any", false, false, false, 43), "version", [], "any", false, false, false, 43), "html", null, true);
        echo " - by ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 43, $this->source); })()), "attributes", [], "any", false, false, false, 43), "author", [], "any", false, false, false, 43), "html", null, true);
        echo "</small>
        ";
        // line 44
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 44, $this->source); })()), "attributes", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 44, $this->source); })()), "attributes", [], "any", false, false, false, 44), "type", [], "any", false, false, false, 44) == "addonsBought"))) {
            // line 45
            echo "        - <span class=\"module-badge-bought help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You bought this module on PrestaShop Addons. Thank You.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bought", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 46, $this->source); })()), "attributes", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 46, $this->source); })()), "attributes", [], "any", false, false, false, 46), "type", [], "any", false, false, false, 46) == "addonsMustHave"))) {
            // line 47
            echo "        - <span class=\"module-badge-popular help-tooltip text-primary\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is available on PrestaShop Addons.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-group\"></i> <small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Popular", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 48, $this->source); })()), "attributes", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 48, $this->source); })()), "attributes", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48) == "addonsPartner"))) {
            // line 49
            echo "        - <span class=\"module-badge-partner help-tooltip text-warning\" data-title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is available for free thanks to our partner.", [], "Admin.Modules.Help"), "html", null, true);
            echo "\"><i class=\"icon-pushpin\"></i> <small>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Official", [], "Admin.Modules.Help"), "html", null, true);
            echo "</small></span>
        ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
($context["module"] ?? null), "attributes", [], "any", false, true, false, 50), "id", [], "any", true, true, false, 50) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 50, $this->source); })()), "attributes", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50) >= 0))) {
            // line 51
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 51), "version_addons", [], "any", true, true, false, 51) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 51, $this->source); })()), "attributes", [], "any", false, false, false, 51), "version_addons", [], "any", false, false, false, 51))) {
                // line 52
                echo "            <span class=\"label label-warning\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Need update", [], "Admin.Modules.Help"), "html", null, true);
                echo "</span>
          ";
            }
            // line 54
            echo "        ";
        }
        // line 55
        echo "      </div>
      <p class=\"module_description\">
        ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 57), "description", [], "any", true, true, false, 57) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 57, $this->source); })()), "attributes", [], "any", false, false, false, 57), "description", [], "any", false, false, false, 57)))) {
            // line 58
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 58, $this->source); })()), "attributes", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58), "html", null, true);
            echo "
        ";
        }
        // line 60
        echo "      </p>
      ";
        // line 61
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 61), "message", [], "any", true, true, false, 61) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 61, $this->source); })()), "attributes", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61))) && (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 61), "type", [], "any", true, true, false, 61) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 61, $this->source); })()), "attributes", [], "any", false, false, false, 61), "type", [], "any", false, false, false, 61) != "addonsMustHave")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 61, $this->source); })()), "attributes", [], "any", false, false, false, 61), "type", [], "any", false, false, false, 61) != "addonsNative")))) {
            // line 62
            echo "        <div class=\"alert alert-success\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <p class=\"alert-text\">
            ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 65, $this->source); })()), "attributes", [], "any", false, false, false, 65), "message", [], "any", false, false, false, 65), "html", null, true);
            echo "
          </p>
        </div>
      ";
        }
        // line 69
        echo "    </div>
  </td>
  <td class=\"module-container module-quick-action-list clearfix\">
    ";
        // line 72
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 72, $this->source); })())]);
        echo "
  </td>
</tr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 72,  155 => 69,  148 => 65,  143 => 62,  141 => 61,  138 => 60,  132 => 58,  130 => 57,  126 => 55,  123 => 54,  117 => 52,  114 => 51,  112 => 50,  105 => 49,  103 => 48,  96 => 47,  94 => 46,  87 => 45,  85 => 44,  79 => 43,  75 => 42,  71 => 41,  64 => 39,  57 => 35,  53 => 34,  47 => 30,  45 => 28,  44 => 27,  43 => 26,);
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
{%
  set moduleImage = module.attributes.img is null ?
    constant('_MODULE_DIR_') ~ module.attributes.name ~ '/' ~ module.attributes.logo :
    module.attributes.img
%}
<tr>
  <td class=\"fixed-with-sm center\">
    <img
      class=\"img-thumbnail\"
      alt=\"{{ module.attributes.name }}\"
      src=\"{{ moduleImage }}\"
    />
  </td>
  <td>
    <div id=\"anchor{{ module.attributes.name|capitalize }}\" title=\"{{ module.attributes.displayName }}\">
      <div class=\"module_name\">
        <span style=\"display:none\">{{ module.attributes.name }}</span>
        {{ module.attributes.displayName }}
        <small class=\"text-muted\">v{{ module.attributes.version }} - by {{ module.attributes.author }}</small>
        {% if module.attributes.type is not empty and module.attributes.type == 'addonsBought' %}
        - <span class=\"module-badge-bought help-tooltip text-warning\" data-title=\"{{ 'You bought this module on PrestaShop Addons. Thank You.'|trans({}, 'Admin.Modules.Help') }}\"><i class=\"icon-pushpin\"></i> <small>{{ 'Bought'|trans({}, 'Admin.Modules.Help') }}</small></span>
        {% elseif module.attributes.type is not empty and module.attributes.type == 'addonsMustHave' %}
        - <span class=\"module-badge-popular help-tooltip text-primary\" data-title=\"{{ 'This module is available on PrestaShop Addons.'|trans({}, 'Admin.Modules.Help') }}\"><i class=\"icon-group\"></i> <small>{{ 'Popular'|trans({}, 'Admin.Modules.Help') }}</small></span>
        {% elseif module.attributes.type is not empty and module.attributes.type == 'addonsPartner' %}
        - <span class=\"module-badge-partner help-tooltip text-warning\" data-title=\"{{ 'This module is available for free thanks to our partner.'|trans({}, 'Admin.Modules.Help') }}\"><i class=\"icon-pushpin\"></i> <small>{{ 'Official'|trans({}, 'Admin.Modules.Help') }}</small></span>
        {% elseif module.attributes.id is defined and module.attributes.id >= 0 %}
          {% if module.attributes.version_addons is defined and module.attributes.version_addons %}
            <span class=\"label label-warning\">{{ 'Need update'|trans({}, 'Admin.Modules.Help') }}</span>
          {% endif %}
        {% endif %}
      </div>
      <p class=\"module_description\">
        {% if module.attributes.description is defined and module.attributes.description is not empty %}
          {{ module.attributes.description }}
        {% endif %}
      </p>
      {% if (module.attributes.message is defined and module.attributes.name is not empty) and (module.attributes.type is not defined or module.attributes.type != 'addonsMustHave' or module.attributes.type != 'addonsNative') %}
        <div class=\"alert alert-success\" role=\"alert\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
          <p class=\"alert-text\">
            {{ module.attributes.message }}
          </p>
        </div>
      {% endif %}
    </div>
  </td>
  <td class=\"module-container module-quick-action-list clearfix\">
    {{ include('@PrestaShop/Admin/Module/Includes/action_menu.html.twig', {'module': module}) }}
  </td>
</tr>
", "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/tab-module-line.html.twig");
    }
}
