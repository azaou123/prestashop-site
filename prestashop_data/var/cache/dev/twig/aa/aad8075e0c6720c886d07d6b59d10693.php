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

/* @PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig */
class __TwigTemplate_1c008b56d0d1704097c8897282ce016a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig"));

        // line 25
        $context["ats"] = twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 25, $this->source); })()), "attributes", [], "any", false, false, false, 25);
        // line 26
        list($context["name"], $context["displayName"], $context["nbRates"], $context["starsRate"], $context["img"], $context["serviceUrl"], $context["version"], $context["cover"], $context["additionalDescription"], $context["fullDescription"], $context["changeLog"], $context["customerBenefits"], $context["demoVideo"], $context["author"], $context["notFoundImg"], $context["features"], $context["badges"]) =         [twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 29, $this->source); })()), "name", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 29, $this->source); })()), "displayName", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 29, $this->source); })()), "nbRates", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 29, $this->source); })()), "starsRate", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 29, $this->source); })()), "img", [], "any", false, false, false, 29), (((twig_get_attribute($this->env, $this->source,         // line 30
($context["ats"] ?? null), "serviceUrl", [], "any", true, true, false, 30) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 30, $this->source); })()), "serviceUrl", [], "any", false, false, false, 30)) > 0))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 30, $this->source); })()), "serviceUrl", [], "any", false, false, false, 30)) : (false)), twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 31, $this->source); })()), "version", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 31, $this->source); })()), "cover", [], "any", false, false, false, 31), (((twig_get_attribute($this->env, $this->source,         // line 32
($context["ats"] ?? null), "additionalDescription", [], "any", true, true, false, 32) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 32, $this->source); })()), "additionalDescription", [], "any", false, false, false, 32)) > 0))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 32, $this->source); })()), "additionalDescription", [], "any", false, false, false, 32)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 33
($context["ats"] ?? null), "fullDescription", [], "any", true, true, false, 33) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 33, $this->source); })()), "fullDescription", [], "any", false, false, false, 33)) > 0))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 33, $this->source); })()), "fullDescription", [], "any", false, false, false, 33)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 34
($context["ats"] ?? null), "changeLog", [], "any", true, true, false, 34) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 34, $this->source); })()), "changeLog", [], "any", false, false, false, 34)) > 0))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 34, $this->source); })()), "changeLog", [], "any", false, false, false, 34)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 35
($context["ats"] ?? null), "customer_benefits", [], "any", true, true, false, 35) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 35, $this->source); })()), "customer_benefits", [], "any", false, false, false, 35)) > 0))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 35, $this->source); })()), "customer_benefits", [], "any", false, false, false, 35)) : (false)), (((twig_get_attribute($this->env, $this->source,         // line 36
($context["ats"] ?? null), "demo_video", [], "any", true, true, false, 36) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 36, $this->source); })()), "demo_video", [], "any", false, false, false, 36)) > 0))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 36, $this->source); })()), "demo_video", [], "any", false, false, false, 36)) : (false)), twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 37, $this->source); })()), "author", [], "any", false, false, false, 37), "https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png", twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 38, $this->source); })()), "features", [], "any", false, false, false, 38), (((twig_get_attribute($this->env, $this->source,         // line 39
($context["ats"] ?? null), "badges", [], "any", true, true, false, 39) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 39, $this->source); })()), "badges", [], "any", false, false, false, 39)) > 0))) ? (twig_get_attribute($this->env, $this->source, (isset($context["ats"]) || array_key_exists("ats", $context) ? $context["ats"] : (function () { throw new RuntimeError('Variable "ats" does not exist.', 39, $this->source); })()), "badges", [], "any", false, false, false, 39)) : (false))];
        // line 41
        echo "<div
  class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      ";
        // line 46
        if (((isset($context["nbRates"]) || array_key_exists("nbRates", $context) ? $context["nbRates"] : (function () { throw new RuntimeError('Variable "nbRates" does not exist.', 46, $this->source); })()) > 0)) {
            // line 47
            echo "        <div class=\"read-more-stars module-star-ranking-grid-";
            echo twig_escape_filter($this->env, (isset($context["starsRate"]) || array_key_exists("starsRate", $context) ? $context["starsRate"] : (function () { throw new RuntimeError('Variable "starsRate" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\">
          (
          ";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["nbRates"]) || array_key_exists("nbRates", $context) ? $context["nbRates"] : (function () { throw new RuntimeError('Variable "nbRates" does not exist.', 49, $this->source); })()), "html", null, true);
            echo "
          )
        </div>
      ";
        }
        // line 53
        echo "      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["displayName"]) || array_key_exists("displayName", $context) ? $context["displayName"] : (function () { throw new RuntimeError('Variable "displayName" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "<br>
            <small class=\"version small-text\">
              ";
        // line 58
        if ((array_key_exists("serviceUrl", $context) && (twig_length_filter($this->env, (isset($context["serviceUrl"]) || array_key_exists("serviceUrl", $context) ? $context["serviceUrl"] : (function () { throw new RuntimeError('Variable "serviceUrl" does not exist.', 58, $this->source); })())) > 0))) {
            // line 59
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 59, $this->source); })())], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        } else {
            // line 61
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% by %author%", ["%version%" => (isset($context["version"]) || array_key_exists("version", $context) ? $context["version"] : (function () { throw new RuntimeError('Variable "version" does not exist.', 61, $this->source); })()), "%author%" => (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 61, $this->source); })())], "Admin.Modules.Feature"), "html", null, true);
            echo "
              ";
        }
        // line 63
        echo "            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body module-modal-body\">
      <div class=\"module-big-cover\">
        <img src=\"";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["cover"] ?? null), "big", [], "any", true, true, false, 75)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cover"]) || array_key_exists("cover", $context) ? $context["cover"] : (function () { throw new RuntimeError('Variable "cover" does not exist.', 75, $this->source); })()), "big", [], "any", false, false, false, 75), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, (isset($context["notFoundImg"]) || array_key_exists("notFoundImg", $context) ? $context["notFoundImg"] : (function () { throw new RuntimeError('Variable "notFoundImg" does not exist.', 75, $this->source); })()), "html", null, true);
        }
        echo "\"/>
      </div>
      <div class=\"module-menu-readmore\">
        <nav
          class=\"navbar navbar-light\">
          ";
        // line 81
        echo "          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overview", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
            </li>
            ";
        // line 85
        if ((isset($context["additionalDescription"]) || array_key_exists("additionalDescription", $context) ? $context["additionalDescription"] : (function () { throw new RuntimeError('Variable "additionalDescription" does not exist.', 85, $this->source); })())) {
            // line 86
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional information", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 90
        echo "            ";
        if ((isset($context["customerBenefits"]) || array_key_exists("customerBenefits", $context) ? $context["customerBenefits"] : (function () { throw new RuntimeError('Variable "customerBenefits" does not exist.', 90, $this->source); })())) {
            // line 91
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-";
            // line 92
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 92, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Benefits", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 95
        echo "            ";
        if ((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 95, $this->source); })())) {
            // line 96
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-";
            // line 97
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 97, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 100
        echo "            ";
        if ((isset($context["demoVideo"]) || array_key_exists("demoVideo", $context) ? $context["demoVideo"] : (function () { throw new RuntimeError('Variable "demoVideo" does not exist.', 100, $this->source); })())) {
            // line 101
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 102, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Demo video", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 105
        echo "            ";
        if ((isset($context["changeLog"]) || array_key_exists("changeLog", $context) ? $context["changeLog"] : (function () { throw new RuntimeError('Variable "changeLog" does not exist.', 105, $this->source); })())) {
            // line 106
            echo "              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-";
            // line 107
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 107, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changelog", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              </li>
            ";
        }
        // line 110
        echo "            ";
        // line 111
        echo "          </ul>
        </nav>
        <div
          class=\"tab-content\">
          ";
        // line 116
        echo "          <div id=\"overview-";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane fade in active show\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 118
        if ((isset($context["fullDescription"]) || array_key_exists("fullDescription", $context) ? $context["fullDescription"] : (function () { throw new RuntimeError('Variable "fullDescription" does not exist.', 118, $this->source); })())) {
            // line 119
            echo "                ";
            echo (isset($context["fullDescription"]) || array_key_exists("fullDescription", $context) ? $context["fullDescription"] : (function () { throw new RuntimeError('Variable "fullDescription" does not exist.', 119, $this->source); })());
            echo "
              ";
        } else {
            // line 121
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No description found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 123
        echo "            </p>
            ";
        // line 124
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 124), "multistoreCompatibility", [], "any", true, true, false, 124) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 124, $this->source); })()), "attributes", [], "any", false, false, false, 124), "multistoreCompatibility", [], "any", false, false, false, 124) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_UNKNOWN")))) {
            // line 125
            echo "              <div class=\"module-readmore-multistore-content\">
                <h3>";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Multistore compatibility:", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</h3>
                ";
            // line 127
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 127, $this->source); })()), "attributes", [], "any", false, false, false, 127), "multistoreCompatibility", [], "any", false, false, false, 127) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_YES"))) {
                // line 128
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is compatible with the multistore feature. It can be either:", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                  <ul>
                    <li>";
                // line 130
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("configured differently from one store to another;", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                    <li>";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("configured quickly in the same way on all stores thanks to the all shops context or to the group of shops;", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                    <li>";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or even activated for one store and deactivated for another.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</li>
                  </ul>
                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 134
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 134, $this->source); })()), "attributes", [], "any", false, false, false, 134), "multistoreCompatibility", [], "any", false, false, false, 134) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_PARTIAL"))) {
                // line 135
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is partially compatible with the multistore feature. Some of its options might not be available.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 136
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 136, $this->source); })()), "attributes", [], "any", false, false, false, 136), "multistoreCompatibility", [], "any", false, false, false, 136) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_NOT_CONCERNED"))) {
                // line 137
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is not compatible with the multistore feature because it would not be useful.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 138
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 138, $this->source); })()), "attributes", [], "any", false, false, false, 138), "multistoreCompatibility", [], "any", false, false, false, 138) === twig_constant("\\Module::MULTISTORE_COMPATIBILITY_NO"))) {
                // line 139
                echo "                  ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This module is not compatible with the multistore feature. It means that its configuration applies to all stores.", [], "Admin.Modules.Feature"), "html", null, true);
                echo "
                ";
            }
            // line 141
            echo "              </div>
            ";
        }
        // line 143
        echo "          </div>

          <div id=\"additional-";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 145, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 147
        if ((isset($context["additionalDescription"]) || array_key_exists("additionalDescription", $context) ? $context["additionalDescription"] : (function () { throw new RuntimeError('Variable "additionalDescription" does not exist.', 147, $this->source); })())) {
            // line 148
            echo "                ";
            echo (isset($context["additionalDescription"]) || array_key_exists("additionalDescription", $context) ? $context["additionalDescription"] : (function () { throw new RuntimeError('Variable "additionalDescription" does not exist.', 148, $this->source); })());
            echo "
              ";
        } else {
            // line 150
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No additional description provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 152
        echo "            </p>
          </div>

          <div id=\"features-";
        // line 155
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 155, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 157
        if ((isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 157, $this->source); })())) {
            // line 158
            echo "                ";
            echo (isset($context["features"]) || array_key_exists("features", $context) ? $context["features"] : (function () { throw new RuntimeError('Variable "features" does not exist.', 158, $this->source); })());
            echo "
              ";
        } else {
            // line 160
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No feature list provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 162
        echo "            </p>
          </div>

          <div id=\"customer_benefits-";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 167
        if ((isset($context["customerBenefits"]) || array_key_exists("customerBenefits", $context) ? $context["customerBenefits"] : (function () { throw new RuntimeError('Variable "customerBenefits" does not exist.', 167, $this->source); })())) {
            // line 168
            echo "                ";
            echo (isset($context["customerBenefits"]) || array_key_exists("customerBenefits", $context) ? $context["customerBenefits"] : (function () { throw new RuntimeError('Variable "customerBenefits" does not exist.', 168, $this->source); })());
            echo "
              ";
        } else {
            // line 170
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No customer benefits notes found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 172
        echo "            </p>
          </div>

          <div id=\"demo_video-";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              ";
        // line 177
        if ((isset($context["demoVideo"]) || array_key_exists("demoVideo", $context) ? $context["demoVideo"] : (function () { throw new RuntimeError('Variable "demoVideo" does not exist.', 177, $this->source); })())) {
            // line 178
            echo "                ";
            echo $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getYoutubeLink((isset($context["demoVideo"]) || array_key_exists("demoVideo", $context) ? $context["demoVideo"] : (function () { throw new RuntimeError('Variable "demoVideo" does not exist.', 178, $this->source); })()));
            echo "
              ";
        } else {
            // line 180
            echo "                ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No demonstration video found for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
              ";
        }
        // line 182
        echo "            </p>
          </div>

          <div id=\"changelog-";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 185, $this->source); })()), "html", null, true);
        echo "\" class=\"tab-pane fade\">
            ";
        // line 186
        if ((isset($context["changeLog"]) || array_key_exists("changeLog", $context) ? $context["changeLog"] : (function () { throw new RuntimeError('Variable "changeLog" does not exist.', 186, $this->source); })())) {
            // line 187
            echo "              <ul class=\"module-readmore-tab-content\">
                ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->arrayCast((isset($context["changeLog"]) || array_key_exists("changeLog", $context) ? $context["changeLog"] : (function () { throw new RuntimeError('Variable "changeLog" does not exist.', 188, $this->source); })()))));
            foreach ($context['_seq'] as $context["version"] => $context["lines"]) {
                // line 189
                echo "                  <li>
                    <b>";
                // line 190
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo ":</b>
                    ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["lines"]);
                foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                    // line 192
                    echo "                      ";
                    echo twig_escape_filter($this->env, $context["line"], "html", null, true);
                    echo "<br/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 194
                echo "                  </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['version'], $context['lines'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            echo "              </ul>
            ";
        } else {
            // line 198
            echo "              ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No changelog provided for this module :(", [], "Admin.Modules.Notification"), "html", null, true);
            echo "
            ";
        }
        // line 200
        echo "          </div>
          ";
        // line 202
        echo "        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          ";
        // line 209
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 209, $this->source); })()), "attributes", [], "any", false, false, false, 209), "url_active", [], "any", false, false, false, 209) == "buy") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 209, $this->source); })()), "attributes", [], "any", false, false, false, 209), "price", [], "any", false, false, false, 209), "raw", [], "any", false, false, false, 209) != "0.00"))) {
            // line 210
            echo "            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 210, $this->source); })()), "attributes", [], "any", false, false, false, 210), "price", [], "any", false, false, false, 210), "displayPrice", [], "any", false, false, false, 210), "html", null, true);
            echo "
          ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 211
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 211, $this->source); })()), "attributes", [], "any", false, false, false, 211), "url_active", [], "any", false, false, false, 211) != "buy")) {
            // line 212
            echo "            ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Free", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
          ";
        }
        // line 214
        echo "        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["badges"]) || array_key_exists("badges", $context) ? $context["badges"] : (function () { throw new RuntimeError('Variable "badges" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["badge"]) {
            // line 219
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "img", [], "any", false, false, false, 219), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, false, 219), "html", null, true);
            echo "\"/>
            ";
            // line 220
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["badge"], "label", [], "any", false, false, false, 220), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['badge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "        </div>
        <div class=\"float-right module-action\">
          ";
        // line 224
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", 224)->display(twig_array_merge($context, ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 224, $this->source); })()), "level" => (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 224, $this->source); })())]));
        // line 225
        echo "        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 225,  508 => 224,  504 => 222,  496 => 220,  489 => 219,  485 => 218,  479 => 214,  473 => 212,  471 => 211,  466 => 210,  464 => 209,  455 => 202,  452 => 200,  446 => 198,  442 => 196,  435 => 194,  426 => 192,  422 => 191,  418 => 190,  415 => 189,  411 => 188,  408 => 187,  406 => 186,  402 => 185,  397 => 182,  391 => 180,  385 => 178,  383 => 177,  378 => 175,  373 => 172,  367 => 170,  361 => 168,  359 => 167,  354 => 165,  349 => 162,  343 => 160,  337 => 158,  335 => 157,  330 => 155,  325 => 152,  319 => 150,  313 => 148,  311 => 147,  306 => 145,  302 => 143,  298 => 141,  292 => 139,  290 => 138,  285 => 137,  283 => 136,  278 => 135,  276 => 134,  271 => 132,  267 => 131,  263 => 130,  257 => 128,  255 => 127,  251 => 126,  248 => 125,  246 => 124,  243 => 123,  237 => 121,  231 => 119,  229 => 118,  223 => 116,  217 => 111,  215 => 110,  207 => 107,  204 => 106,  201 => 105,  193 => 102,  190 => 101,  187 => 100,  179 => 97,  176 => 96,  173 => 95,  165 => 92,  162 => 91,  159 => 90,  151 => 87,  148 => 86,  146 => 85,  139 => 83,  135 => 81,  123 => 75,  109 => 63,  103 => 61,  97 => 59,  95 => 58,  90 => 56,  83 => 54,  80 => 53,  73 => 49,  67 => 47,  65 => 46,  58 => 41,  56 => 39,  55 => 38,  54 => 37,  53 => 36,  52 => 35,  51 => 34,  50 => 33,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 26,  43 => 25,);
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
{% set ats = module.attributes %}
{% set name, displayName, nbRates,
  starsRate, img, serviceUrl, version, cover, additionalDescription,
  fullDescription, changeLog, customerBenefits, demoVideo, author, notFoundImg, features, badges =
  ats.name, ats.displayName, ats.nbRates, ats.starsRate, ats.img,
  ats.serviceUrl is defined and ats.serviceUrl|length > 0 ? ats.serviceUrl : false,
  ats.version, ats.cover,
  ats.additionalDescription is defined and ats.additionalDescription|length > 0 ? ats.additionalDescription : false,
  ats.fullDescription is defined and ats.fullDescription|length > 0 ? ats.fullDescription : false,
  ats.changeLog is defined and ats.changeLog|length > 0 ? ats.changeLog : false,
  ats.customer_benefits is defined and ats.customer_benefits|length > 0 ? ats.customer_benefits : false,
  ats.demo_video is defined and ats.demo_video|length > 0 ? ats.demo_video : false,
  ats.author, 'https://cdn4.iconfinder.com/data/icons/ballicons-2-free/100/box-512.png',
  ats.features,
  ats.badges is defined and ats.badges|length > 0 ? ats.badges : false
%}
<div
  class=\"modal-dialog module-modal-dialog\">
  <!-- Modal content-->
  <div class=\"modal-content module-modal-content no-padding\">
    <div class=\"modal-header module-modal-header\">
      {% if nbRates > 0 %}
        <div class=\"read-more-stars module-star-ranking-grid-{{ starsRate }}\">
          (
          {{ nbRates }}
          )
        </div>
      {% endif %}
      <div>
        <img class=\"module-logo-thumb\" height=\"57\" width=\"57\" src=\"{{ img }}\" alt=\"{{ displayName }}\"/>
        <div class=\"modal-title module-modal-title\">
          <h1>{{ displayName }}<br>
            <small class=\"version small-text\">
              {% if serviceUrl is defined and serviceUrl|length > 0 %}
                {{ 'Service by %author%'|trans({'%author%' : author}, 'Admin.Modules.Feature') }}
              {% else %}
                {{ 'v%version% by %author%'|trans({ '%version%' : version, '%author%' : author }, 'Admin.Modules.Feature') }}
              {% endif %}
            </small>
          </h1>

        </div>
      </div>
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>

    <div class=\"modal-body module-modal-body\">
      <div class=\"module-big-cover\">
        <img src=\"{% if cover.big is defined %}{{ cover.big }}{% else %}{{ notFoundImg }}{% endif %}\"/>
      </div>
      <div class=\"module-menu-readmore\">
        <nav
          class=\"navbar navbar-light\">
          {# tab list #}
          <ul class=\"nav nav-pills\">
            <li class=\"nav-item\">
              <a class=\"nav-link module-readmore-tab active\" data-toggle=\"tab\" href=\"#overview-{{ name }}\">{{ 'Overview'|trans({}, 'Admin.Modules.Feature') }}</a>
            </li>
            {% if additionalDescription %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#additional-{{ name }}\">{{ 'Additional information'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if customerBenefits %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#customer_benefits-{{ name }}\">{{ 'Benefits'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if features %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#features-{{ name }}\">{{ 'Features'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if demoVideo %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#demo_video-{{ name }}\">{{ 'Demo video'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {% if changeLog %}
              <li class=\"nav-item\">
                <a class=\"nav-link module-readmore-tab\" data-toggle=\"tab\" href=\"#changelog-{{ name }}\">{{ 'Changelog'|trans({}, 'Admin.Modules.Feature') }}</a>
              </li>
            {% endif %}
            {# end tab list #}
          </ul>
        </nav>
        <div
          class=\"tab-content\">
          {# tab content list #}
          <div id=\"overview-{{ name }}\" class=\"tab-pane fade in active show\">
            <p class=\"module-readmore-tab-content\">
              {% if fullDescription %}
                {{ fullDescription|raw }}
              {% else %}
                {{ 'No description found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
            {% if module.attributes.multistoreCompatibility is defined and module.attributes.multistoreCompatibility is not same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_UNKNOWN')) %}
              <div class=\"module-readmore-multistore-content\">
                <h3>{{ 'Multistore compatibility:'|trans({}, 'Admin.Modules.Feature') }}</h3>
                {% if module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_YES')) %}
                  {{ 'This module is compatible with the multistore feature. It can be either:'|trans({}, 'Admin.Modules.Feature') }}
                  <ul>
                    <li>{{ 'configured differently from one store to another;'|trans({}, 'Admin.Modules.Feature') }}</li>
                    <li>{{ 'configured quickly in the same way on all stores thanks to the all shops context or to the group of shops;'|trans({}, 'Admin.Modules.Feature') }}</li>
                    <li>{{ 'or even activated for one store and deactivated for another.'|trans({}, 'Admin.Modules.Feature') }}</li>
                  </ul>
                {% elseif module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_PARTIAL')) %}
                  {{ 'This module is partially compatible with the multistore feature. Some of its options might not be available.'|trans({}, 'Admin.Modules.Feature') }}
                {% elseif module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_NOT_CONCERNED')) %}
                  {{ 'This module is not compatible with the multistore feature because it would not be useful.'|trans({}, 'Admin.Modules.Feature') }}
                {% elseif module.attributes.multistoreCompatibility is same as(constant('\\\\Module::MULTISTORE_COMPATIBILITY_NO')) %}
                  {{ 'This module is not compatible with the multistore feature. It means that its configuration applies to all stores.'|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
              </div>
            {% endif %}
          </div>

          <div id=\"additional-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if additionalDescription %}
                {{ additionalDescription|raw }}
              {% else %}
                {{ 'No additional description provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"features-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if features %}
                {{ features|raw }}
              {% else %}
                {{ 'No feature list provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"customer_benefits-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if customerBenefits %}
                {{ customerBenefits|raw }}
              {% else %}
                {{ 'No customer benefits notes found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"demo_video-{{ name }}\" class=\"tab-pane fade\">
            <p class=\"module-readmore-tab-content\">
              {% if demoVideo %}
                {{ youtube_link(demoVideo)|raw }}
              {% else %}
                {{ 'No demonstration video found for this module :('|trans({}, 'Admin.Modules.Notification') }}
              {% endif %}
            </p>
          </div>

          <div id=\"changelog-{{ name }}\" class=\"tab-pane fade\">
            {% if changeLog %}
              <ul class=\"module-readmore-tab-content\">
                {% for version, lines in changeLog|arrayCast|reverse %}
                  <li>
                    <b>{{version}}:</b>
                    {% for line in lines %}
                      {{line}}<br/>
                    {% endfor %}
                  </li>
                {% endfor %}
              </ul>
            {% else %}
              {{ 'No changelog provided for this module :('|trans({}, 'Admin.Modules.Notification') }}
            {% endif %}
          </div>
          {# end tab content list #}
        </div>
      </div>
    </div>

    <div class=\"modal-footer module-modal-footer\">
      <div class=\"module-stars-price\">
        <div class=\"module-price text-sm-right\">
          {% if module.attributes.url_active == 'buy' and module.attributes.price.raw != '0.00' %}
            {{ module.attributes.price.displayPrice }}
          {% elseif module.attributes.url_active != 'buy' %}
            {{ 'Free'|trans({}, 'Admin.Modules.Feature') }}
          {% endif %}
        </div>
      </div>
      <div class=\"module-badges-action\">
        <div class=\"float-left module-badges-display\">
          {% for badge in badges %}
            <img src=\"{{badge.img}}\" alt=\"{{badge.label}}\"/>
            {{badge.label}}
          {% endfor %}
        </div>
        <div class=\"float-right module-action\">
          {% include '@PrestaShop/Admin/Module/Includes/action_menu.html.twig' with { 'module': module, 'level' : level } %}
        </div>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_read_more_content.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_read_more_content.html.twig");
    }
}
