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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig */
class __TwigTemplate_f528b44f0fa7a1335a2b0b463756305b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'combinations_paginated_list' => [$this, 'block_combinations_paginated_list'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('combinations_paginated_list', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_combinations_paginated_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combinations_paginated_list"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "combinations_paginated_list"));

        // line 27
        echo "  <div id=\"combinations-paginated-list\" class=\"d-none\">

    ";
        // line 29
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig", ["productId" =>         // line 30
(isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 30, $this->source); })()), "isMultistoreActive" =>         // line 31
(isset($context["isMultistoreActive"]) || array_key_exists("isMultistoreActive", $context) ? $context["isMultistoreActive"] : (function () { throw new RuntimeError('Variable "isMultistoreActive" does not exist.', 31, $this->source); })()), "shopName" =>         // line 32
(isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 32, $this->source); })()), "shopId" =>         // line 33
(isset($context["shopId"]) || array_key_exists("shopId", $context) ? $context["shopId"] : (function () { throw new RuntimeError('Variable "shopId" does not exist.', 33, $this->source); })())]);
        // line 34
        echo "

    <div class=\"justify-content-center\" id=\"combinations-list\">
      <div class=\"spinner-product-combinations-container\" id=\"productCombinationsLoading\">
        <div class=\"spinner spinner-primary\"></div>
      </div>

      ";
        // line 45
        echo "      <div id=\"combinations-list-form-container\">
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["combinationsForm"]) || array_key_exists("combinationsForm", $context) ? $context["combinationsForm"] : (function () { throw new RuntimeError('Variable "combinationsForm" does not exist.', 46, $this->source); })()), 'row');
        echo "
      </div>

      ";
        // line 50
        echo "      ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_filters_state.html.twig");
        echo "

      <div id=\"combinations-list-footer\">
        <span>
          ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edition mode", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </span>
        <div id=\"combinations-list-footer-buttons\">
          <button type=\"button\" id=\"cancel-combinations-edition\" class=\"btn btn-secondary\">
            ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <button type=\"button\" id=\"save-combinations-edition\" class=\"btn btn-primary\">
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save list", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </button>
        </div>
      </div>
    </div>

    <div class=\"row justify-content-center\" id=\"combinations-pagination\">
      ";
        // line 68
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" =>         // line 69
(isset($context["combinationsLimit"]) || array_key_exists("combinationsLimit", $context) ? $context["combinationsLimit"] : (function () { throw new RuntimeError('Variable "combinationsLimit" does not exist.', 69, $this->source); })()), "limitChoices" =>         // line 70
(isset($context["combinationLimitChoices"]) || array_key_exists("combinationLimitChoices", $context) ? $context["combinationLimitChoices"] : (function () { throw new RuntimeError('Variable "combinationLimitChoices" does not exist.', 70, $this->source); })())]);
        // line 71
        echo "
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 71,  127 => 70,  126 => 69,  125 => 68,  115 => 61,  109 => 58,  102 => 54,  94 => 50,  88 => 46,  85 => 45,  76 => 34,  74 => 33,  73 => 32,  72 => 31,  71 => 30,  70 => 29,  66 => 27,  47 => 26,  44 => 25,);
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

{% block combinations_paginated_list %}
  <div id=\"combinations-paginated-list\" class=\"d-none\">

    {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig', {
      'productId': productId,
      'isMultistoreActive': isMultistoreActive,
      'shopName': shopName,
      'shopId': shopId,
    }) }}

    <div class=\"justify-content-center\" id=\"combinations-list\">
      <div class=\"spinner-product-combinations-container\" id=\"productCombinationsLoading\">
        <div class=\"spinner spinner-primary\"></div>
      </div>

      {#**
        * This div contains the whole list with the input fields, it should contain nothing more because the whole
        * content may be replaced when invalid form values are detected by the update list API in edition mode.
      *#}
      <div id=\"combinations-list-form-container\">
        {{ form_row(combinationsForm) }}
      </div>

      {# Empty state when product has no combinations by specified filters #}
      {{ include('@PrestaShop/Admin/Sell/Catalog/Product/Combination/empty_filters_state.html.twig') }}

      <div id=\"combinations-list-footer\">
        <span>
          {{ 'Edition mode'|trans({}, 'Admin.Catalog.Feature') }}
        </span>
        <div id=\"combinations-list-footer-buttons\">
          <button type=\"button\" id=\"cancel-combinations-edition\" class=\"btn btn-secondary\">
            {{ 'Cancel'|trans({}, 'Admin.Actions') }}
          </button>
          <button type=\"button\" id=\"save-combinations-edition\" class=\"btn btn-primary\">
            {{ 'Save list'|trans({}, 'Admin.Catalog.Feature') }}
          </button>
        </div>
      </div>
    </div>

    <div class=\"row justify-content-center\" id=\"combinations-pagination\">
      {{ include('@PrestaShop/Admin/Common/javascript_pagination.html.twig', {
        'limit': combinationsLimit,
        'limitChoices': combinationLimitChoices,
      }) }}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/paginated_list.html.twig");
    }
}
