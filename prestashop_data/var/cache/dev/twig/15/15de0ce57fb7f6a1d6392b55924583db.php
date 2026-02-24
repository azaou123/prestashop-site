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

/* @PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig */
class __TwigTemplate_c46df66080aba31788136b666d157513 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig"));

        // line 25
        echo "
<div id=\"combination-list-actions\">
  <div class=\"btn-group\">
    ";
        // line 29
        echo "    <button class=\"btn btn-outline-secondary dropdown-toggle\"
      id=\"combination-bulk-actions-btn\"
      data-toggle=\"dropdown\"
      aria-expanded=\"false\"
      disabled
    >
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulk actions", [], "Admin.Global"), "html", null, true);
        echo "
      <i class=\"icon-caret-up\"></i>
    </button>
    <div class=\"dropdown-menu\" style=\"\">
      <button
        id=\"combination-bulk-form-btn\" class=\"dropdown-item bulk-action-btn\" type=\"button\"
        data-btn-label=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-form-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_combinations_bulk_combination_form", ["productId" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 42, $this->source); })())]), "html", null, true);
        echo "\"
        data-modal-confirm-label=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply to %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-modal-cancel-label=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
      >
        ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit %combinations_number% combinations", ["%s" => ""], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </button>
      ";
        // line 48
        if ((isset($context["isMultistoreActive"]) || array_key_exists("isMultistoreActive", $context) ? $context["isMultistoreActive"] : (function () { throw new RuntimeError('Variable "isMultistoreActive" does not exist.', 48, $this->source); })())) {
            // line 49
            echo "        ";
            $context["deleteLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations from store \"%store_name%\"", ["%store_name%" => (isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 49, $this->source); })())], "Admin.Catalog.Feature");
            // line 50
            echo "        ";
            $context["modalMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete selected combinations from store \"%store_name%\"?", ["%store_name%" => (isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 50, $this->source); })())], "Admin.Catalog.Notification");
            // line 51
            echo "      ";
        } else {
            // line 52
            echo "        ";
            $context["deleteLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations", [], "Admin.Catalog.Feature");
            // line 53
            echo "        ";
            $context["modalMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete selected combinations?", [], "Admin.Catalog.Notification");
            // line 54
            echo "      ";
        }
        // line 55
        echo "      <button
        id=\"combination-bulk-delete-btn\" class=\"dropdown-item bulk-action-btn bulk-delete-btn\" type=\"button\"
        data-btn-label=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["deleteLabel"]) || array_key_exists("deleteLabel", $context) ? $context["deleteLabel"] : (function () { throw new RuntimeError('Variable "deleteLabel" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\"
        data-form-url=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_combinations_bulk_delete", ["productId" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 58, $this->source); })())]), "html", null, true);
        echo "\"
        data-modal-message=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["modalMessage"]) || array_key_exists("modalMessage", $context) ? $context["modalMessage"] : (function () { throw new RuntimeError('Variable "modalMessage" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\"
        data-modal-confirm-label=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-modal-cancel-label=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "\"
        data-bulk-chunk-size=\"10\"
        data-progress-title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-progress-message=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %done%/%total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-close-label=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-stop-processing=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop processing", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-errors-message=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_count% errors occurred. You can download the logs for future reference.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-back-to-processing=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to processing", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-download-error-log=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download error log", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-view-error-log=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View %error_count% error logs", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-view-error-title=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error log", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"
        data-shop-id=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["shopId"]) || array_key_exists("shopId", $context) ? $context["shopId"] : (function () { throw new RuntimeError('Variable "shopId" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\"
      >
        ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["deleteLabel"]) || array_key_exists("deleteLabel", $context) ? $context["deleteLabel"] : (function () { throw new RuntimeError('Variable "deleteLabel" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "
      </button>
      ";
        // line 76
        if ((isset($context["isMultistoreActive"]) || array_key_exists("isMultistoreActive", $context) ? $context["isMultistoreActive"] : (function () { throw new RuntimeError('Variable "isMultistoreActive" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "        <button
          id=\"combination-bulk-delete-btn-all-shops\" class=\"dropdown-item bulk-action-btn bulk-delete-btn\" type=\"button\"
          data-btn-label=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations from all stores", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-form-url=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_products_combinations_bulk_delete", ["productId" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 80, $this->source); })())]), "html", null, true);
            echo "\"
          data-modal-message=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete selected combinations from all stores?", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "\"
          data-modal-confirm-label=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-modal-cancel-label=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
            echo "\"
          data-bulk-chunk-size=\"10\"
          data-progress-title=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-progress-message=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting %done%/%total% combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-close-label=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-stop-processing=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stop processing", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-errors-message=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_count% errors occurred. You can download the logs for future reference.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-back-to-processing=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to processing", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-download-error-log=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download error log", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-view-error-log=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View %error_count% error logs", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
          data-view-error-title=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Error log", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "\"
        >
          ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete %combinations_number% combinations from all stores", ["%s" => ""], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </button>
      ";
        }
        // line 98
        echo "    </div>
  </div>

  <button type=\"button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
    ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </button>
</div>

";
        // line 107
        echo "<div id=\"combinations_filters\"
  data-translations=\"";
        // line 108
        echo twig_escape_filter($this->env, json_encode(["filters.label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by:", [], "Admin.Actions"), "filters.clear" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear filter|Clear {filtersNb} filters", [], "Admin.Actions")]), "html", null, true);
        // line 111
        echo "\"
></div>
<div id=\"combination-edit-modal\"
     data-empty-image=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/img/empty_state/combinations_history.png"), "html", null, true);
        echo "\"
     data-translations=\"";
        // line 115
        echo twig_escape_filter($this->env, json_encode(["modal.save" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "modal.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "modal.previous" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous combination", [], "Admin.Catalog.Feature"), "modal.next" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next combination", [], "Admin.Catalog.Feature"), "modal.history.editedCombination" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edited combinations ({editedNb})", [], "Admin.Catalog.Feature"), "modal.history.confirmTitle" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discard changes?", [], "Admin.Catalog.Notification"), "modal.history.confirmBody" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All unsaved modifications made on the combination [1]{combinationName}[/1] will be lost.", ["[1]" => "<span class=\"font-weight-bold\">", "[/1]" => "</span>"], "Admin.Catalog.Notification"), "modal.cancel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "modal.confirm" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discard", [], "Admin.Actions"), "modal.history.empty" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here, you can have a look at the combinations you have edited. The list will reset when you close the editing window.", [], "Admin.Catalog.Feature"), "modal.history.open" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Open history", [], "Admin.Catalog.Feature"), "modal.history.close" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close history", [], "Admin.Catalog.Feature")]), "html", null, true);
        // line 128
        echo "\"
></div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 128,  275 => 115,  271 => 114,  266 => 111,  264 => 108,  261 => 107,  254 => 102,  248 => 98,  242 => 95,  237 => 93,  233 => 92,  229 => 91,  225 => 90,  221 => 89,  217 => 88,  213 => 87,  209 => 86,  205 => 85,  200 => 83,  196 => 82,  192 => 81,  188 => 80,  184 => 79,  180 => 77,  178 => 76,  173 => 74,  168 => 72,  164 => 71,  160 => 70,  156 => 69,  152 => 68,  148 => 67,  144 => 66,  140 => 65,  136 => 64,  132 => 63,  127 => 61,  123 => 60,  119 => 59,  115 => 58,  111 => 57,  107 => 55,  104 => 54,  101 => 53,  98 => 52,  95 => 51,  92 => 50,  89 => 49,  87 => 48,  82 => 46,  77 => 44,  73 => 43,  69 => 42,  65 => 41,  56 => 35,  48 => 29,  43 => 25,);
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

<div id=\"combination-list-actions\">
  <div class=\"btn-group\">
    {# button disabled by default, because js toggles its availability based on selected combinations #}
    <button class=\"btn btn-outline-secondary dropdown-toggle\"
      id=\"combination-bulk-actions-btn\"
      data-toggle=\"dropdown\"
      aria-expanded=\"false\"
      disabled
    >
      {{ 'Bulk actions'|trans({}, 'Admin.Global') }}
      <i class=\"icon-caret-up\"></i>
    </button>
    <div class=\"dropdown-menu\" style=\"\">
      <button
        id=\"combination-bulk-form-btn\" class=\"dropdown-item bulk-action-btn\" type=\"button\"
        data-btn-label=\"{{ 'Edit %combinations_number% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-form-url=\"{{ url('admin_products_combinations_bulk_combination_form', { 'productId': productId }) }}\"
        data-modal-confirm-label=\"{{ 'Apply to %combinations_number% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-modal-cancel-label=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\"
      >
        {{ 'Edit %combinations_number% combinations'|trans({'%s': ''}, 'Admin.Catalog.Feature') }}
      </button>
      {% if isMultistoreActive %}
        {% set deleteLabel = 'Delete %combinations_number% combinations from store \"%store_name%\"'|trans({'%store_name%': shopName}, 'Admin.Catalog.Feature') %}
        {% set modalMessage = 'Are you sure you want to delete selected combinations from store \"%store_name%\"?'|trans({'%store_name%': shopName}, 'Admin.Catalog.Notification') %}
      {% else %}
        {% set deleteLabel = 'Delete %combinations_number% combinations'|trans({}, 'Admin.Catalog.Feature') %}
        {% set modalMessage = 'Are you sure you want to delete selected combinations?'|trans({}, 'Admin.Catalog.Notification') %}
      {% endif %}
      <button
        id=\"combination-bulk-delete-btn\" class=\"dropdown-item bulk-action-btn bulk-delete-btn\" type=\"button\"
        data-btn-label=\"{{ deleteLabel }}\"
        data-form-url=\"{{ url('admin_products_combinations_bulk_delete', { 'productId': productId }) }}\"
        data-modal-message=\"{{ modalMessage }}\"
        data-modal-confirm-label=\"{{ 'Delete %combinations_number% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-modal-cancel-label=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\"
        data-bulk-chunk-size=\"10\"
        data-progress-title=\"{{ 'Deleting %total% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-progress-message=\"{{ 'Deleting %done%/%total% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-close-label=\"{{ 'Close'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-stop-processing=\"{{ 'Stop processing'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-errors-message=\"{{ '%error_count% errors occurred. You can download the logs for future reference.'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-back-to-processing=\"{{ 'Back to processing'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-download-error-log=\"{{ 'Download error log'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-view-error-log=\"{{ 'View %error_count% error logs'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-view-error-title=\"{{ 'Error log'|trans({}, 'Admin.Catalog.Feature') }}\"
        data-shop-id=\"{{ shopId }}\"
      >
        {{ deleteLabel }}
      </button>
      {% if isMultistoreActive %}
        <button
          id=\"combination-bulk-delete-btn-all-shops\" class=\"dropdown-item bulk-action-btn bulk-delete-btn\" type=\"button\"
          data-btn-label=\"{{ 'Delete %combinations_number% combinations from all stores'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-form-url=\"{{ url('admin_products_combinations_bulk_delete', { 'productId': productId }) }}\"
          data-modal-message=\"{{ 'Are you sure you want to delete selected combinations from all stores?'|trans({}, 'Admin.Catalog.Notification') }}\"
          data-modal-confirm-label=\"{{ 'Delete %combinations_number% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-modal-cancel-label=\"{{ 'Cancel'|trans({}, 'Admin.Actions') }}\"
          data-bulk-chunk-size=\"10\"
          data-progress-title=\"{{ 'Deleting %total% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-progress-message=\"{{ 'Deleting %done%/%total% combinations'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-close-label=\"{{ 'Close'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-stop-processing=\"{{ 'Stop processing'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-errors-message=\"{{ '%error_count% errors occurred. You can download the logs for future reference.'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-back-to-processing=\"{{ 'Back to processing'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-download-error-log=\"{{ 'Download error log'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-view-error-log=\"{{ 'View %error_count% error logs'|trans({}, 'Admin.Catalog.Feature') }}\"
          data-view-error-title=\"{{ 'Error log'|trans({}, 'Admin.Catalog.Feature') }}\"
        >
          {{ 'Delete %combinations_number% combinations from all stores'|trans({'%s': ''}, 'Admin.Catalog.Feature') }}
        </button>
      {% endif %}
    </div>
  </div>

  <button type=\"button\" class=\"btn btn-primary generate-combinations-button\" disabled=\"disabled\">
    {{ 'Generate combinations'|trans({}, 'Admin.Catalog.Feature') }}
  </button>
</div>

{# Combination filters for paginated list #}
<div id=\"combinations_filters\"
  data-translations=\"{{ {
   'filters.label': 'Filter by:'|trans({}, 'Admin.Actions'),
   'filters.clear': 'Clear filter|Clear {filtersNb} filters'|trans({}, 'Admin.Actions'),
  }|json_encode }}\"
></div>
<div id=\"combination-edit-modal\"
     data-empty-image=\"{{ asset('themes/new-theme/img/empty_state/combinations_history.png') }}\"
     data-translations=\"{{ {
       'modal.save': 'Save'|trans({}, 'Admin.Actions'),
       'modal.close': 'Close'|trans({}, 'Admin.Actions'),
       'modal.previous': 'Previous combination'|trans({}, 'Admin.Catalog.Feature'),
       'modal.next': 'Next combination'|trans({}, 'Admin.Catalog.Feature'),
       'modal.history.editedCombination': 'Edited combinations ({editedNb})'|trans({}, 'Admin.Catalog.Feature'),
       'modal.history.confirmTitle': 'Discard changes?'|trans({}, 'Admin.Catalog.Notification'),
       'modal.history.confirmBody': 'All unsaved modifications made on the combination [1]{combinationName}[/1] will be lost.'|trans({'[1]': '<span class=\"font-weight-bold\">', '[/1]': '</span>'}, 'Admin.Catalog.Notification'),
       'modal.cancel': 'Cancel'|trans({}, 'Admin.Actions'),
       'modal.confirm': 'Discard'|trans({}, 'Admin.Actions'),
       'modal.history.empty': 'Here, you can have a look at the combinations you have edited. The list will reset when you close the editing window.'|trans({}, 'Admin.Catalog.Feature'),
       'modal.history.open': 'Open history'|trans({}, 'Admin.Catalog.Feature'),
       'modal.history.close': 'Close history'|trans({}, 'Admin.Catalog.Feature'),
     }|json_encode }}\"
></div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Product/Combination/paginated_list_header.html.twig");
    }
}
