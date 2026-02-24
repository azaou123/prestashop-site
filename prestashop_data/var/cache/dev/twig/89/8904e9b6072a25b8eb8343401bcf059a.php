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

/* @PrestaShop/Admin/Module/tab-modules-list.html.twig */
class __TwigTemplate_0a77fff4c62dee9c1e8596f1f2e96b1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/tab-modules-list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/tab-modules-list.html.twig"));

        // line 25
        $context["modulesListShouldBeDisplayed"] = (array_key_exists("modulesList", $context) &&  !twig_test_empty((isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 25, $this->source); })())));
        // line 26
        if (((isset($context["modulesListShouldBeDisplayed"]) || array_key_exists("modulesListShouldBeDisplayed", $context) ? $context["modulesListShouldBeDisplayed"] : (function () { throw new RuntimeError('Variable "modulesListShouldBeDisplayed" does not exist.', 26, $this->source); })()) == true)) {
            // line 27
            echo "  <div class=\"row-margin-bottom\">
    <ul class=\"nav nav-pills\">
      ";
            // line 29
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 29, $this->source); })()), "notInstalled", [], "any", false, false, false, 29)) > 0)) {
                // line 30
                echo "        <li class=\"active\">
          <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
            ";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not Installed", []), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            // line 36
            echo "
      ";
            // line 37
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 37, $this->source); })()), "installed", [], "any", false, false, false, 37)) > 0)) {
                // line 38
                echo "        <li ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 38, $this->source); })()), "notInstalled", [], "any", false, false, false, 38)) == 0)) {
                    echo " class=\"active\" ";
                }
                echo ">
          <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
            ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installed", []), "html", null, true);
                echo "
          </a>
        </li>
      ";
            }
            // line 44
            echo "    </ul>
  </div>
  <div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
    ";
            // line 47
            if ((twig_get_attribute($this->env, $this->source, ($context["modulesList"] ?? null), "notInstalled", [], "any", true, true, false, 47) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 47, $this->source); })()), "notInstalled", [], "any", false, false, false, 47)))) {
                // line 48
                echo "      <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
        <table id=\"tab_modules_list_not_installed\" class=\"table\">
          ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 50, $this->source); })()), "notInstalled", [], "any", false, false, false, 50));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 51
                    echo "            ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        </table>
      </div>
    ";
            }
            // line 56
            echo "    ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 56, $this->source); })()), "installed", [], "any", false, false, false, 56)) > 0)) {
                // line 57
                echo "      <div class=\"tab-pane ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 57, $this->source); })()), "notInstalled", [], "any", false, false, false, 57)) == 0)) {
                    echo "active";
                }
                echo "\" id=\"tab_modules_list_installed\">
        <table id=\"tab_modules_list_installed\" class=\"table\">
          ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["modulesList"]) || array_key_exists("modulesList", $context) ? $context["modulesList"] : (function () { throw new RuntimeError('Variable "modulesList" does not exist.', 59, $this->source); })()), "installed", [], "any", false, false, false, 59));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 60
                    echo "            ";
                    echo twig_include($this->env, $context, "@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig", ["module" => $context["module"]]);
                    echo "
          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "        </table>
      </div>
    ";
            }
            // line 65
            echo "  </div>
";
        }
        // line 67
        echo "<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "locale", [], "any", false, false, false, 69), "html", null, true);
        echo "&amp;utm_content=download";
        if (array_key_exists("adminListFromSource", $context)) {
            echo "&amp;utm_term=";
            echo twig_escape_filter($this->env, (isset($context["adminListFromSource"]) || array_key_exists("adminListFromSource", $context) ? $context["adminListFromSource"] : (function () { throw new RuntimeError('Variable "adminListFromSource" does not exist.', 69, $this->source); })()), "html", null, true);
        }
        echo "\" onclick=\"return !window.open(this.href);\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("More modules on addons.prestashop.com", []), "html", null, true);
        echo "</a>
  </p>
</div>

";
        // line 73
        if (((isset($context["modulesListShouldBeDisplayed"]) || array_key_exists("modulesListShouldBeDisplayed", $context) ? $context["modulesListShouldBeDisplayed"] : (function () { throw new RuntimeError('Variable "modulesListShouldBeDisplayed" does not exist.', 73, $this->source); })()) == true)) {
            // line 74
            echo "  <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/module_card.bundle.js"), "html", null, true);
            echo "\"></script>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/tab-modules-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 74,  206 => 73,  192 => 69,  188 => 67,  184 => 65,  179 => 62,  162 => 60,  145 => 59,  137 => 57,  134 => 56,  129 => 53,  112 => 51,  95 => 50,  91 => 48,  89 => 47,  84 => 44,  77 => 40,  69 => 38,  67 => 37,  64 => 36,  57 => 32,  53 => 30,  51 => 29,  47 => 27,  45 => 26,  43 => 25,);
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
{% set modulesListShouldBeDisplayed = (modulesList is defined and modulesList is not empty) %}
{% if modulesListShouldBeDisplayed == true %}
  <div class=\"row-margin-bottom\">
    <ul class=\"nav nav-pills\">
      {% if modulesList.notInstalled|length > 0 %}
        <li class=\"active\">
          <a href=\"#tab_modules_list_not_installed\" data-toggle=\"tab\">
            {{ 'Not Installed'|trans({}) }}
          </a>
        </li>
      {% endif %}

      {% if modulesList.installed|length > 0 %}
        <li {% if modulesList.notInstalled|length == 0 %} class=\"active\" {% endif %}>
          <a href=\"#tab_modules_list_installed\" data-toggle=\"tab\">
            {{ 'Installed'|trans({}) }}
          </a>
        </li>
      {% endif %}
    </ul>
  </div>
  <div id=\"modules_list_container_content\" class=\"tab-content modal-content-overflow\">
    {% if modulesList.notInstalled is defined and modulesList.notInstalled is not empty %}
      <div class=\"tab-pane active\" id=\"tab_modules_list_not_installed\">
        <table id=\"tab_modules_list_not_installed\" class=\"table\">
          {% for module in modulesList.notInstalled %}
            {{ include('@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig',{'module': module}) }}
          {% endfor %}
        </table>
      </div>
    {% endif %}
    {% if modulesList.installed|length > 0 %}
      <div class=\"tab-pane {% if modulesList.notInstalled|length == 0 %}active{% endif %}\" id=\"tab_modules_list_installed\">
        <table id=\"tab_modules_list_installed\" class=\"table\">
          {% for module in modulesList.installed %}
            {{ include('@PrestaShop/Admin/Module/Includes/tab-module-line.html.twig',{'module': module}) }}
          {% endfor %}
        </table>
      </div>
    {% endif %}
  </div>
{% endif %}
<div class=\"alert alert-addons row-margin-top\" role=\"alert\">
  <p class=\"alert-text\">
    <a href=\"https://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-{{ app.request.locale }}&amp;utm_content=download{% if adminListFromSource is defined %}&amp;utm_term={{ adminListFromSource }}{% endif %}\" onclick=\"return !window.open(this.href);\">{{ 'More modules on addons.prestashop.com'|trans({}) }}</a>
  </p>
</div>

{% if modulesListShouldBeDisplayed == true %}
  <script src=\"{{ asset('themes/new-theme/public/module_card.bundle.js') }}\"></script>
{% endif %}
", "@PrestaShop/Admin/Module/tab-modules-list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/tab-modules-list.html.twig");
    }
}
