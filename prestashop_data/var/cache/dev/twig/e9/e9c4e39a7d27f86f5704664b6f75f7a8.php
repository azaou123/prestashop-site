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

/* @PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig */
class __TwigTemplate_0f4d0ec0b766e7d7150ad2a0149ef8eb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if ((isset($context["showHeaderAlert"]) || array_key_exists("showHeaderAlert", $context) ? $context["showHeaderAlert"] : (function () { throw new RuntimeError('Variable "showHeaderAlert" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "  <div class=\"alert alert-info\">
    <p>";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You need to register all the carriers with which you have chosen to work. PrestaShop comes with a selection of carrier modules you can install right below the page or buy on [1]Addons marketplace[/1].", ["[1]" => "<a href=\"https://addons.prestashop.com/en/520-shipping-carriers\">", "[/1]" => "</a>"], "Admin.Shipping.Help");
            echo "</p><br>
    <p>";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If there is no existing module for your carrier, you can register it manually by clicking on \"[1]\" but before, please make sure you did not register a new carrier if a module already exists for it!", ["[1]" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new carrier", [], "Admin.Shipping.Feature")], "Admin.Shipping.Help"), "html", null, true);
            echo "</p>
  </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 31,  54 => 30,  51 => 29,  49 => 28,  46 => 27,  43 => 25,);
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

{% trans_default_domain 'Admin.Shipping.Help' %}

{% if showHeaderAlert %}
  <div class=\"alert alert-info\">
    <p>{{ 'You need to register all the carriers with which you have chosen to work. PrestaShop comes with a selection of carrier modules you can install right below the page or buy on [1]Addons marketplace[/1].'|trans({'[1]': '<a href=\"https://addons.prestashop.com/en/520-shipping-carriers\">', '[/1]': '</a>'}, 'Admin.Shipping.Help')|raw }}</p><br>
    <p>{{ 'If there is no existing module for your carrier, you can register it manually by clicking on \"[1]\" but before, please make sure you did not register a new carrier if a module already exists for it!'|trans({'[1]': 'Add new carrier'|trans({}, 'Admin.Shipping.Feature')}, 'Admin.Shipping.Help') }}</p>
  </div>
{% endif %}
", "@PrestaShop/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Carriers/Blocks/information_block.html.twig");
    }
}
