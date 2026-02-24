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

/* @PrestaShop/Admin/Module/Includes/card_grid.html.twig */
class __TwigTemplate_c935db7b4c73cee4db893691e868104c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig"));

        // line 25
        $context["isModuleActive"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 25, $this->source); })()), "database", [], "any", false, false, false, 25), "active", [], "any", false, false, false, 25);
        // line 26
        echo "
<div
  class=\"module-item module-item-grid col-lg-6 col-xl-3 ";
        // line 28
        if ((((isset($context["origin"]) || array_key_exists("origin", $context) ? $context["origin"] : (function () { throw new RuntimeError('Variable "origin" does not exist.', 28, $this->source); })()) == "manage") && ((isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 28, $this->source); })()) == "0"))) {
            echo "module-item-grid-isNotActive";
        }
        echo "\"
  data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "attributes", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
  data-name=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 30, $this->source); })()), "attributes", [], "any", false, false, false, 30), "displayName", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
  data-scoring=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 31, $this->source); })()), "attributes", [], "any", false, false, false, 31), "avgRate", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
  data-logo=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 32, $this->source); })()), "attributes", [], "any", false, false, false, 32), "img", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
  data-author=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "attributes", [], "any", false, false, false, 33), "author", [], "any", false, false, false, 33), "html", null, true);
        echo "\"
  data-version=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 34, $this->source); })()), "attributes", [], "any", false, false, false, 34), "version", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
  data-description=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 35, $this->source); })()), "attributes", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
  data-tech-name=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 36, $this->source); })()), "attributes", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
  data-child-categories=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 37, $this->source); })()), "attributes", [], "any", false, false, false, 37), "categoryName", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
  data-categories=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\"
  data-type=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 39, $this->source); })()), "attributes", [], "any", false, false, false, 39), "productType", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
  data-price=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 40, $this->source); })()), "attributes", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40), "raw", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
  data-active=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"
>
  <div class=\"module-item-wrapper-grid\">
    <div class=\"module-item-heading-grid\">
      <div class=\"module-logo-thumb-grid\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 46, $this->source); })()), "attributes", [], "any", false, false, false, 46), "img", [], "any", false, false, false, 46), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 46, $this->source); })()), "attributes", [], "any", false, false, false, 46), "displayName", [], "any", false, false, false, 46), "html", null, true);
        echo "\"/>
      </div>
      <h3
        class=\"text-ellipsis module-name-grid\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        title=\"";
        // line 52
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 52, $this->source); })()), "attributes", [], "any", false, false, false, 52), "displayName", [], "any", false, false, false, 52);
        echo "\"
      >
        ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 54, $this->source); })()), "attributes", [], "any", false, false, false, 54), "displayName", [], "any", false, false, false, 54)) {
            // line 55
            echo "          ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 55, $this->source); })()), "attributes", [], "any", false, false, false, 55), "displayName", [], "any", false, false, false, 55);
            echo "
        ";
        } else {
            // line 57
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 57, $this->source); })()), "attributes", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "
        ";
        }
        // line 59
        echo "      </h3>
      <div class=\"text-ellipsis small-text module-version-author-grid\">
        ";
        // line 61
        $this->displayBlock('addon_version', $context, $blocks);
        // line 68
        echo "      </div>
    </div>
    <div class=\"module-quick-description-grid small no-padding mb-0\">
      ";
        // line 71
        $this->displayBlock('addon_description', $context, $blocks);
        // line 79
        echo "    </div>

    <div class=\"module-container module-quick-action-grid clearfix\">
        <div class=\"badges-container\">
          ";
        // line 83
        $context["badges"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 83, $this->source); })()), "attributes", [], "any", false, false, false, 83), "badges", [], "any", false, false, false, 83);
        // line 84
        echo "          ";
        if ((isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 84, $this->source); })())) {
            // line 85
            echo "            ";
            $context["badge"] = twig_first($this->env, (isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 85, $this->source); })()));
            // line 86
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 86, $this->source); })()), "img", [], "any", false, false, false, 86), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 86, $this->source); })()), "label", [], "any", false, false, false, 86), "html", null, true);
            echo "\"/>
            ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 87, $this->source); })()), "label", [], "any", false, false, false, 87), "html", null, true);
            echo "
          ";
        }
        // line 89
        echo "        </div>
      <hr />
      ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 91, $this->source); })()), "attributes", [], "any", false, false, false, 91), "nbRates", [], "any", false, false, false, 91) > 0)) {
            // line 92
            echo "        <div class=\"module-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 92, $this->source); })()), "attributes", [], "any", false, false, false, 92), "starsRate", [], "any", false, false, false, 92), "html", null, true);
            echo " small\">
          (";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 93, $this->source); })()), "attributes", [], "any", false, false, false, 93), "nbRates", [], "any", false, false, false, 93), "html", null, true);
            echo ")
        </div>
      ";
        }
        // line 96
        echo "      <div class=\"float-right module-price\">
      ";
        // line 97
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 97, $this->source); })()), "attributes", [], "any", false, false, false, 97), "url_active", [], "any", false, false, false, 97) == "buy") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 97, $this->source); })()), "attributes", [], "any", false, false, false, 97), "price", [], "any", false, false, false, 97), "raw", [], "any", false, false, false, 97) != "0.00"))) {
            // line 98
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 98, $this->source); })()), "attributes", [], "any", false, false, false, 98), "price", [], "any", false, false, false, 98), "displayPrice", [], "any", false, false, false, 98), "html", null, true);
            echo "
      ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 99, $this->source); })()), "attributes", [], "any", false, false, false, 99), "url_active", [], "any", false, false, false, 99) != "buy")) {
            // line 100
            echo "        <span class=\"pt-2\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
      ";
        }
        // line 102
        echo "      </div>
      ";
        // line 103
        if ((array_key_exists("requireBulkActions", $context) && ((isset($context["requireBulkActions"]) || array_key_exists("requireBulkActions", $context) ? $context["requireBulkActions"] : (function () { throw new RuntimeError('Variable "requireBulkActions" does not exist.', 103, $this->source); })()) == true))) {
            // line 104
            echo "        <div class=\"float-right module-checkbox-bulk-grid\">
          <input type=\"checkbox\" data-name=\"";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 105, $this->source); })()), "attributes", [], "any", false, false, false, 105), "displayName", [], "any", false, false, false, 105), "html", null, true);
            echo "\" data-tech-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 105, $this->source); })()), "attributes", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
            echo "\" />
        </div>
      ";
        }
        // line 108
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig", 108)->display(twig_array_merge($context, ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 108, $this->source); })()), "level" => (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 108, $this->source); })())]));
        // line 109
        echo "    </div>
    ";
        // line 110
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig", 110)->display(twig_array_merge($context, ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 110, $this->source); })())]));
        // line 111
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 61
    public function block_addon_version($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        // line 62
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 62, $this->source); })()), "attributes", [], "any", false, false, false, 62), "productType", [], "any", false, false, false, 62) == "service")) {
            // line 63
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 63, $this->source); })()), "attributes", [], "any", false, false, false, 63), "author", [], "any", false, false, false, 63)) . "</b>")], "Admin.Modules.Feature");
            echo "
          ";
        } else {
            // line 65
            echo "            ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% - by %author%", ["%version%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 65, $this->source); })()), "attributes", [], "any", false, false, false, 65), "version", [], "any", false, false, false, 65), "%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 65, $this->source); })()), "attributes", [], "any", false, false, false, 65), "author", [], "any", false, false, false, 65)) . "</b>")], "Admin.Modules.Feature");
            echo "
          ";
        }
        // line 67
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 71
    public function block_addon_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        // line 72
        echo "        <div class=\"module-quick-description-text\">
          ";
        // line 73
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 73, $this->source); })()), "attributes", [], "any", false, false, false, 73), "description", [], "any", false, false, false, 73);
        echo "
          ";
        // line 74
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "description", [], "any", false, false, false, 74)) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "description", [], "any", false, false, false, 74)) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "fullDescription", [], "any", false, false, false, 74))))) {
            // line 75
            echo "            ...
          ";
        }
        // line 77
        echo "        </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/card_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 77,  307 => 75,  305 => 74,  301 => 73,  298 => 72,  288 => 71,  278 => 67,  272 => 65,  266 => 63,  263 => 62,  253 => 61,  241 => 111,  239 => 110,  236 => 109,  233 => 108,  225 => 105,  222 => 104,  220 => 103,  217 => 102,  211 => 100,  209 => 99,  204 => 98,  202 => 97,  199 => 96,  193 => 93,  188 => 92,  186 => 91,  182 => 89,  177 => 87,  170 => 86,  167 => 85,  164 => 84,  162 => 83,  156 => 79,  154 => 71,  149 => 68,  147 => 61,  143 => 59,  137 => 57,  131 => 55,  129 => 54,  124 => 52,  113 => 46,  105 => 41,  101 => 40,  97 => 39,  93 => 38,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  51 => 28,  47 => 26,  45 => 25,);
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
{% set isModuleActive = module.database.active %}

<div
  class=\"module-item module-item-grid col-lg-6 col-xl-3 {% if origin == 'manage' and isModuleActive == '0' %}module-item-grid-isNotActive{% endif %}\"
  data-id=\"{{ module.attributes.id }}\"
  data-name=\"{{ module.attributes.displayName }}\"
  data-scoring=\"{{ module.attributes.avgRate }}\"
  data-logo=\"{{ module.attributes.img }}\"
  data-author=\"{{ module.attributes.author }}\"
  data-version=\"{{ module.attributes.version }}\"
  data-description=\"{{ module.attributes.description }}\"
  data-tech-name=\"{{ module.attributes.name }}\"
  data-child-categories=\"{{ module.attributes.categoryName }}\"
  data-categories=\"{{ category }}\"
  data-type=\"{{ module.attributes.productType }}\"
  data-price=\"{{ module.attributes.price.raw }}\"
  data-active=\"{{ isModuleActive }}\"
>
  <div class=\"module-item-wrapper-grid\">
    <div class=\"module-item-heading-grid\">
      <div class=\"module-logo-thumb-grid\">
        <img src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\"/>
      </div>
      <h3
        class=\"text-ellipsis module-name-grid\"
        data-toggle=\"pstooltip\"
        data-placement=\"top\"
        title=\"{{ module.attributes.displayName|raw }}\"
      >
        {% if module.attributes.displayName %}
          {{ module.attributes.displayName|raw }}
        {% else %}
          {{ module.attributes.name }}
        {% endif %}
      </h3>
      <div class=\"text-ellipsis small-text module-version-author-grid\">
        {% block addon_version %}
          {% if module.attributes.productType == \"service\" %}
            {{ 'Service by %author%'|trans({'%author%' : '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
          {% else %}
            {{ 'v%version% - by %author%'|trans({ '%version%' : module.attributes.version, '%author%' : '<b>' ~ module.attributes.author ~ '</b>' }, 'Admin.Modules.Feature')|raw }}
          {% endif %}
        {% endblock %}
      </div>
    </div>
    <div class=\"module-quick-description-grid small no-padding mb-0\">
      {% block addon_description %}
        <div class=\"module-quick-description-text\">
          {{ module.attributes.description|raw }}
          {% if module.attributes.description|length > 0 and module.attributes.description|length < module.attributes.fullDescription|length %}
            ...
          {% endif %}
        </div>
      {% endblock %}
    </div>

    <div class=\"module-container module-quick-action-grid clearfix\">
        <div class=\"badges-container\">
          {% set badges = module.attributes.badges %}
          {% if badges %}
            {% set badge = badges|first %}
            <img src=\"{{badge.img}}\" alt=\"{{badge.label}}\"/>
            {{badge.label}}
          {% endif %}
        </div>
      <hr />
      {% if module.attributes.nbRates > 0 %}
        <div class=\"module-stars module-star-ranking-grid-{{ module.attributes.starsRate}} small\">
          ({{ module.attributes.nbRates }})
        </div>
      {% endif %}
      <div class=\"float-right module-price\">
      {% if module.attributes.url_active == 'buy' and module.attributes.price.raw != '0.00' %}
        {{ module.attributes.price.displayPrice }}
      {% elseif module.attributes.url_active != 'buy' %}
        <span class=\"pt-2\">{{ 'Free'|trans({}, 'Admin.Modules.Feature') }}</span>
      {% endif %}
      </div>
      {% if requireBulkActions is defined and requireBulkActions == true %}
        <div class=\"float-right module-checkbox-bulk-grid\">
          <input type=\"checkbox\" data-name=\"{{ module.attributes.displayName }}\" data-tech-name=\"{{module.attributes.name}}\" />
        </div>
      {% endif %}
      {% include '@PrestaShop/Admin/Module/Includes/action_menu.html.twig' with { 'module': module, 'level' : level } %}
    </div>
    {% include '@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig' with { 'module': module } %}
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/card_grid.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_grid.html.twig");
    }
}
