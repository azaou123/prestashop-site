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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig */
class __TwigTemplate_8853407eb6ae54c044ffc6fa1449abd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig"));

        // line 25
        echo "
<div class=\"list-group\" id=\"profileTabs\" role=\"tablist\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 27, $this->source); })()), "profiles", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 28
            echo "    <a class=\"list-group-item list-group-item-action p-2";
            if ((twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 28, $this->source); })()), "employeeProfileId", [], "any", false, false, false, 28))) {
                echo " active";
            }
            echo "\"
       id=\"profileListItem_";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\"
       data-toggle=\"list\"
       href=\"#profileTabContent_";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\"
       role=\"tab\"
       aria-controls=\"home\"
    >
      ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "
    </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 38,  70 => 35,  63 => 31,  58 => 29,  51 => 28,  47 => 27,  43 => 25,);
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

<div class=\"list-group\" id=\"profileTabs\" role=\"tablist\">
  {% for profile in configurablePermissions.profiles %}
    <a class=\"list-group-item list-group-item-action p-2{% if profile.id == configurablePermissions.employeeProfileId %} active{% endif %}\"
       id=\"profileListItem_{{ profile.id }}\"
       data-toggle=\"list\"
       href=\"#profileTabContent_{{ profile.id }}\"
       role=\"tab\"
       aria-controls=\"home\"
    >
      {{ profile.name }}
    </a>
  {% endfor %}
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tabs.html.twig");
    }
}
