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

/* @PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig */
class __TwigTemplate_786b0d87ccf4ac3f9de32516224156e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["cmsPageForm"]) || array_key_exists("cmsPageForm", $context) ? $context["cmsPageForm"] : (function () { throw new RuntimeError('Variable "cmsPageForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cmsPageForm"]) || array_key_exists("cmsPageForm", $context) ? $context["cmsPageForm"] : (function () { throw new RuntimeError('Variable "cmsPageForm" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["data-id" => ((array_key_exists("cmsPageId", $context)) ? (_twig_default_filter((isset($context["cmsPageId"]) || array_key_exists("cmsPageId", $context) ? $context["cmsPageId"] : (function () { throw new RuntimeError('Variable "cmsPageId" does not exist.', 28, $this->source); })()), 0)) : (0))]]);
        echo "
<div class=\"card\">
  <div class=\"card-header\">
    ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page", [], "Admin.Shopparameters.Feature"), "html", null, true);
        echo "
  </div>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["cmsPageForm"]) || array_key_exists("cmsPageForm", $context) ? $context["cmsPageForm"] : (function () { throw new RuntimeError('Variable "cmsPageForm" does not exist.', 35, $this->source); })()), 'widget');
        echo "
    </div>
  </div>

  <div class=\"card-footer d-flex\">
    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_cms_pages_index", ["id_cms_category" => (isset($context["cmsCategoryParentId"]) || array_key_exists("cmsCategoryParentId", $context) ? $context["cmsCategoryParentId"] : (function () { throw new RuntimeError('Variable "cmsCategoryParentId" does not exist.', 40, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
      ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>

    <div class=\"d-none d-lg-flex ml-auto \">
      <button type=\"submit\" class=\"btn btn-primary\" name=\"save-and-preview\" id=\"save-and-preview-button\">
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and preview", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
      <button type=\"submit\" class=\"btn btn-primary ml-3\" id=\"save-button\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>

    <div class=\"d-lg-none ml-auto\">
      <div class=\"btn-group dropup\">
        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-button-mobile\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"sr-only\">";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
          <button type=\"submit\" class=\"dropdown-item\" name=\"save-and-preview\" id=\"save-and-preview-button-mobile\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and preview", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>

</div>
";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["cmsPageForm"]) || array_key_exists("cmsPageForm", $context) ? $context["cmsPageForm"] : (function () { throw new RuntimeError('Variable "cmsPageForm" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 65,  108 => 58,  102 => 55,  97 => 53,  89 => 48,  84 => 46,  76 => 41,  72 => 40,  64 => 35,  57 => 31,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% form_theme cmsPageForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{{ form_start(cmsPageForm, {'attr': {'data-id': cmsPageId|default(0)}}) }}
<div class=\"card\">
  <div class=\"card-header\">
    {{ 'Page'|trans({}, 'Admin.Shopparameters.Feature') }}
  </div>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      {{ form_widget(cmsPageForm) }}
    </div>
  </div>

  <div class=\"card-footer d-flex\">
    <a href=\"{{ path('admin_cms_pages_index', {'id_cms_category' : cmsCategoryParentId}) }}\" class=\"btn btn-outline-secondary\" id=\"cancel-link\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>

    <div class=\"d-none d-lg-flex ml-auto \">
      <button type=\"submit\" class=\"btn btn-primary\" name=\"save-and-preview\" id=\"save-and-preview-button\">
        {{ 'Save and preview'|trans({}, 'Admin.Actions') }}
      </button>
      <button type=\"submit\" class=\"btn btn-primary ml-3\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
    </div>

    <div class=\"d-lg-none ml-auto\">
      <div class=\"btn-group dropup\">
        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-button-mobile\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"sr-only\">{{ 'Toggle dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
          <button type=\"submit\" class=\"dropdown-item\" name=\"save-and-preview\" id=\"save-and-preview-button-mobile\">{{ 'Save and preview'|trans({}, 'Admin.Actions') }}</button>
        </div>
      </div>
    </div>
  </div>

</div>
{{ form_end(cmsPageForm) }}
", "@PrestaShop/Admin/Improve/Design/Cms/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/Cms/Blocks/form.html.twig");
    }
}
