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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig */
class __TwigTemplate_d98976115cc9329752dd16e1a8d57c03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig"));

        // line 25
        echo "
<div id=\"combinations-empty-state\" class=\"d-none\">
  <div class=\"text-center showcase-list-card\">
    <img alt=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" class=\"img-responsive mt-3 img-rtl\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/empty_state/combinations.svg"), "html", null, true);
        echo "\">

    <p class=\"mt-4 showcase-list-card__header\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

    <p class=\"mx-auto showcase-list-card__message\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      ";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1].", ["%attributes_and_features_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attributes & Features", [], "Admin.Navigation.Menu"), "[1]" => (("<a class=\"alert-link\" href=" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminAttributesGroups")) . " target=\"_blank\">"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "
    </p>

    <div class=\"mt-4\">
      <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getFunction('documentation_link')->getCallable()("combinations"), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-outline-secondary mr-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
        echo "</a>
      <button type=\"button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </button>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 40,  74 => 38,  67 => 34,  63 => 33,  57 => 30,  48 => 28,  43 => 25,);
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

<div id=\"combinations-empty-state\" class=\"d-none\">
  <div class=\"text-center showcase-list-card\">
    <img alt=\"{{ 'Generate product combinations'|trans({}, 'Admin.Catalog.Feature') }}\" title=\"{{ 'Generate product combinations'|trans({}, 'Admin.Catalog.Feature') }}\" class=\"img-responsive mt-3 img-rtl\" src=\"{{ asset('themes/new-theme/img/empty_state/combinations.svg') }}\">

    <p class=\"mt-4 showcase-list-card__header\">{{ 'Generate product combinations'|trans({}, 'Admin.Catalog.Feature') }}</p>

    <p class=\"mx-auto showcase-list-card__message\">
      {{ 'Combinations are the different variations of a product, with attributes like its size, weight or color taking different values.'|trans({}, 'Admin.Catalog.Feature') }}
      {{ 'To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1].'|trans({'%attributes_and_features_label%': 'Attributes & Features'|trans({}, 'Admin.Navigation.Menu'), '[1]': '<a class=\"alert-link\" href=' ~ getAdminLink(\"AdminAttributesGroups\") ~ ' target=\"_blank\">', '[/1]': '</a>'}, 'Admin.Catalog.Help')|raw }}
    </p>

    <div class=\"mt-4\">
      <a href=\"{{ documentation_link('combinations') }}\" target=\"_blank\" class=\"btn btn-outline-secondary mr-1\">{{ 'Learn more'|trans({}, 'Admin.Actions') }}</a>
      <button type=\"button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
        {{ 'Generate combinations'|trans({}, 'Admin.Catalog.Feature') }}
      </button>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/empty_state.html.twig");
    }
}
