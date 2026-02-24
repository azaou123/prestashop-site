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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig */
class __TwigTemplate_d2dfae38c8755c9fb2c90dda95aa7c68 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ((isset($context["isDeleteSubmitted"]) || array_key_exists("isDeleteSubmitted", $context) ? $context["isDeleteSubmitted"] : (function () { throw new RuntimeError('Variable "isDeleteSubmitted" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "  ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 27, $this->source); })()), 'form_start');
            echo "
  <div class=\"col-md-12\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        ";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What do you want to do with the products associated with this category?", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-group mb-0\">
          ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 35, $this->source); })()), "delete_mode", [], "any", false, false, false, 35), 'widget');
            echo "
        </div>
        <div class=\"d-none\">
          ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 38, $this->source); })()), "categories_to_delete", [], "any", false, false, false, 38), 'widget');
            echo "
        </div>
      </div>
      <div class=\"card-footer\">
        <a class=\"btn btn-secondary btn-sm\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
            echo "\">
          <i class=\"material-icons\">cancel</i>
          ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "
        </a>

        <button class=\"btn btn-danger btn-sm\" type=\"submit\">
          <i class=\"material-icons\">delete</i>
          ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    </div>
  </div>
  ";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 54, $this->source); })()), 'form_end');
            echo "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 54,  89 => 49,  81 => 44,  76 => 42,  69 => 38,  63 => 35,  56 => 31,  48 => 27,  46 => 26,  43 => 25,);
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

{% if isDeleteSubmitted %}
  {{ form_start(deleteCategoriesForm) }}
  <div class=\"col-md-12\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        {{ 'What do you want to do with the products associated with this category?'|trans({}, 'Admin.Catalog.Notification') }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-group mb-0\">
          {{ form_widget(deleteCategoriesForm.delete_mode) }}
        </div>
        <div class=\"d-none\">
          {{ form_widget(deleteCategoriesForm.categories_to_delete) }}
        </div>
      </div>
      <div class=\"card-footer\">
        <a class=\"btn btn-secondary btn-sm\" href=\"{{ path('admin_categories_index') }}\">
          <i class=\"material-icons\">cancel</i>
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>

        <button class=\"btn btn-danger btn-sm\" type=\"submit\">
          <i class=\"material-icons\">delete</i>
          {{ 'Delete'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  </div>
  {{ form_end(deleteCategoriesForm) }}
{% endif %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/delete_block.html.twig");
    }
}
