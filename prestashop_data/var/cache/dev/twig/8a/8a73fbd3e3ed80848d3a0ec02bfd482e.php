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

/* @Modules/blockwishlist/views/templates/admin/statistics.html.twig */
class __TwigTemplate_b86a20d6d4fb2d0ef1dee66b828dc887 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 19);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "  ";
        if (((isset($context["shopId"]) || array_key_exists("shopId", $context) ? $context["shopId"] : (function () { throw new RuntimeError('Variable "shopId" does not exist.', 22, $this->source); })()) === null)) {
            // line 23
            echo "    <div class=\"alert medium-alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You need to choose a specific shop to display the top 10 most added products", [], "Modules.Blockwishlist.Admin"), "html", null, true);
            echo "
      </p>
    </div>
  ";
        }
        // line 29
        echo "
  <div class=\"row justify-content-center wishlist-stats\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">star</i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Top 10 most added products", [], "Modules.Blockwishlist.Admin"), "html", null, true);
        echo "
        </h3>

        <div class=\"card-body\">
          <div class=\"card-text\">
            <div class=\"row wishlist-stats-topbar\">
              <div class=\"btn-group\">
                <button class=\"btn btn-default active\" data-tab=\"1\">Day</button>
                <button class=\"btn btn-default\" data-tab=\"2\">Month</button>
                <button class=\"btn btn-default\" data-tab=\"3\">Year</button>
                <button class=\"btn btn-default\" data-tab=\"4\">All time</button>
              </div>

              <button class=\"btn btn-default refresh js-refresh\">
                <i class=\"material-icons\">history</i> ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Refresh", [], "Modules.Blockwishlist.Admin"), "html", null, true);
        echo "
              </button>
            </div>

            <div class=\"wishlist-tab active\" data-tab=\"1\">
              ";
        // line 53
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 53)->display(twig_array_merge($context, ["grid" => (isset($context["allTimeStatisticsGrid"]) || array_key_exists("allTimeStatisticsGrid", $context) ? $context["allTimeStatisticsGrid"] : (function () { throw new RuntimeError('Variable "allTimeStatisticsGrid" does not exist.', 53, $this->source); })())]));
        // line 54
        echo "            </div>

            <div class=\"wishlist-tab\" data-tab=\"2\">
              ";
        // line 57
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 57)->display(twig_array_merge($context, ["grid" => (isset($context["currentYearStatisticsGrid"]) || array_key_exists("currentYearStatisticsGrid", $context) ? $context["currentYearStatisticsGrid"] : (function () { throw new RuntimeError('Variable "currentYearStatisticsGrid" does not exist.', 57, $this->source); })())]));
        // line 58
        echo "            </div>

            <div class=\"wishlist-tab\" data-tab=\"3\">
              ";
        // line 61
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 61)->display(twig_array_merge($context, ["grid" => (isset($context["currentMonthStatisticsGrid"]) || array_key_exists("currentMonthStatisticsGrid", $context) ? $context["currentMonthStatisticsGrid"] : (function () { throw new RuntimeError('Variable "currentMonthStatisticsGrid" does not exist.', 61, $this->source); })())]));
        // line 62
        echo "            </div>

            <div class=\"wishlist-tab\" data-tab=\"4\">
              ";
        // line 65
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid.html.twig", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", 65)->display(twig_array_merge($context, ["grid" => (isset($context["currentDayStatisticsGrid"]) || array_key_exists("currentDayStatisticsGrid", $context) ? $context["currentDayStatisticsGrid"] : (function () { throw new RuntimeError('Variable "currentDayStatisticsGrid" does not exist.', 65, $this->source); })())]));
        // line 66
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script>
    var blockwishlistModule = {
      'resetCacheUrl': '";
        // line 79
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("blockwishlist_statistics_reset"), "js"), "html", null, true);
        echo "',
    };
  </script>
  <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../modules/blockwishlist/public/backoffice.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/admin/statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 82,  172 => 79,  164 => 75,  154 => 74,  138 => 66,  136 => 65,  131 => 62,  129 => 61,  124 => 58,  122 => 57,  117 => 54,  115 => 53,  107 => 48,  90 => 34,  83 => 29,  76 => 25,  72 => 23,  69 => 22,  59 => 21,  36 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block content %}
  {% if shopId is same as(null) %}
    <div class=\"alert medium-alert alert-warning\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'You need to choose a specific shop to display the top 10 most added products'|trans({}, 'Modules.Blockwishlist.Admin') }}
      </p>
    </div>
  {% endif %}

  <div class=\"row justify-content-center wishlist-stats\">
    <div class=\"col-xl-10\">
      <div class=\"card\">
        <h3 class=\"card-header\">
          <i class=\"material-icons\">star</i> {{ 'Top 10 most added products'|trans({}, 'Modules.Blockwishlist.Admin') }}
        </h3>

        <div class=\"card-body\">
          <div class=\"card-text\">
            <div class=\"row wishlist-stats-topbar\">
              <div class=\"btn-group\">
                <button class=\"btn btn-default active\" data-tab=\"1\">Day</button>
                <button class=\"btn btn-default\" data-tab=\"2\">Month</button>
                <button class=\"btn btn-default\" data-tab=\"3\">Year</button>
                <button class=\"btn btn-default\" data-tab=\"4\">All time</button>
              </div>

              <button class=\"btn btn-default refresh js-refresh\">
                <i class=\"material-icons\">history</i> {{ 'Refresh'|trans({}, 'Modules.Blockwishlist.Admin') }}
              </button>
            </div>

            <div class=\"wishlist-tab active\" data-tab=\"1\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': allTimeStatisticsGrid} %}
            </div>

            <div class=\"wishlist-tab\" data-tab=\"2\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': currentYearStatisticsGrid} %}
            </div>

            <div class=\"wishlist-tab\" data-tab=\"3\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': currentMonthStatisticsGrid} %}
            </div>

            <div class=\"wishlist-tab\" data-tab=\"4\">
              {% include '@PrestaShop/Admin/Common/Grid/grid.html.twig' with {'grid': currentDayStatisticsGrid} %}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script>
    var blockwishlistModule = {
      'resetCacheUrl': '{{ url('blockwishlist_statistics_reset')|e('js') }}',
    };
  </script>
  <script src=\"{{ asset('../modules/blockwishlist/public/backoffice.bundle.js') }}\"></script>
{% endblock %}
", "@Modules/blockwishlist/views/templates/admin/statistics.html.twig", "/var/www/html/modules/blockwishlist/views/templates/admin/statistics.html.twig");
    }
}
