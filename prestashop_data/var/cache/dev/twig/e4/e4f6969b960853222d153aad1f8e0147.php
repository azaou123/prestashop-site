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

/* @Modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl */
class __TwigTemplate_34950d7e1aa68263cdc3745712e276f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl"));

        // line 1
        echo "{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<div class=\"clearfix\"></div>
<script>
\tvar currency_format = {\$currency->format|intval};
\tvar currency_sign = '{\$currency->sign|addslashes}';
\tvar currency_blank = {\$currency->blank|intval};
\tvar priceDisplayPrecision = 0;
\tvar dashgoals_year = {\$goals_year|intval};
\tvar dashgoals_ajax_link = '{\$dashgoals_ajax_link|addslashes}';
</script>

<section id=\"dashgoals\" class=\"panel widget\">
\t<header class=\"panel-heading\">
\t\t<i class=\"icon-bar-chart\"></i>
\t\t{l s='Forecast' d='Modules.Dashgoals.Admin'}
\t\t<span id=\"dashgoals_title\" class=\"badge\">{\$goals_year}</span>
\t\t<span class=\"btn-group\">
\t\t\t<a href=\"javascript:void(0);\" onclick=\"dashgoals_changeYear('backward');\" class=\"btn btn-default btn-xs\"><i class=\"icon-backward\"></i></a>
\t\t\t<a href=\"javascript:void(0);\" onclick=\"dashgoals_changeYear('forward');\" class=\"btn btn-default btn-xs\"><i class=\"icon-forward\"></i></a>
\t\t</span>

\t\t<span class=\"panel-heading-action\">
\t\t\t<a class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"toggleDashConfig('dashgoals');\" title=\"{l s='Configure' d='Admin.Global'}\">
\t\t\t\t<i class=\"process-icon-configure\"></i>
\t\t\t</a>
\t\t\t<a class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"refreshDashboard('dashgoals');\" title=\"{l s='Refresh' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-refresh\"></i>
\t\t\t</a>
\t\t</span>
\t</header>
\t{include file='./config.tpl'}
\t<section class=\"loading\">
\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t<label class=\"btn btn-default\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('traffic');\"/><i class=\"icon-circle\" style=\"color:{\$colors[0]}\"></i> {l s='Traffic' d='Modules.Dashgoals.Admin'}
\t\t\t</label>
\t\t\t<label class=\"btn btn-default\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('conversion');\"/><i class=\"icon-circle\" style=\"color:{\$colors[1]}\"></i> {l s='Conversion' d='Modules.Dashgoals.Admin'}
\t\t\t</label>
\t\t\t<label class=\"btn btn-default\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('avg_cart_value');\"/><i class=\"icon-circle\" style=\"color:{\$colors[2]}\"></i> {l s='Average Cart Value' d='Modules.Dashgoals.Admin'}
\t\t\t</label>
\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('sales');\"/><i class=\"icon-circle\" style=\"color:{\$colors[3]}\"></i> {l s='Sales' d='Admin.Global'}
\t\t\t</label>
\t\t</div>
\t\t<div id=\"dash_goals_chart1\" class=\"chart with-transitions\">
\t\t\t<svg></svg>
\t\t</div>
\t</section>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<div class=\"clearfix\"></div>
<script>
\tvar currency_format = {\$currency->format|intval};
\tvar currency_sign = '{\$currency->sign|addslashes}';
\tvar currency_blank = {\$currency->blank|intval};
\tvar priceDisplayPrecision = 0;
\tvar dashgoals_year = {\$goals_year|intval};
\tvar dashgoals_ajax_link = '{\$dashgoals_ajax_link|addslashes}';
</script>

<section id=\"dashgoals\" class=\"panel widget\">
\t<header class=\"panel-heading\">
\t\t<i class=\"icon-bar-chart\"></i>
\t\t{l s='Forecast' d='Modules.Dashgoals.Admin'}
\t\t<span id=\"dashgoals_title\" class=\"badge\">{\$goals_year}</span>
\t\t<span class=\"btn-group\">
\t\t\t<a href=\"javascript:void(0);\" onclick=\"dashgoals_changeYear('backward');\" class=\"btn btn-default btn-xs\"><i class=\"icon-backward\"></i></a>
\t\t\t<a href=\"javascript:void(0);\" onclick=\"dashgoals_changeYear('forward');\" class=\"btn btn-default btn-xs\"><i class=\"icon-forward\"></i></a>
\t\t</span>

\t\t<span class=\"panel-heading-action\">
\t\t\t<a class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"toggleDashConfig('dashgoals');\" title=\"{l s='Configure' d='Admin.Global'}\">
\t\t\t\t<i class=\"process-icon-configure\"></i>
\t\t\t</a>
\t\t\t<a class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"refreshDashboard('dashgoals');\" title=\"{l s='Refresh' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-refresh\"></i>
\t\t\t</a>
\t\t</span>
\t</header>
\t{include file='./config.tpl'}
\t<section class=\"loading\">
\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t<label class=\"btn btn-default\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('traffic');\"/><i class=\"icon-circle\" style=\"color:{\$colors[0]}\"></i> {l s='Traffic' d='Modules.Dashgoals.Admin'}
\t\t\t</label>
\t\t\t<label class=\"btn btn-default\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('conversion');\"/><i class=\"icon-circle\" style=\"color:{\$colors[1]}\"></i> {l s='Conversion' d='Modules.Dashgoals.Admin'}
\t\t\t</label>
\t\t\t<label class=\"btn btn-default\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('avg_cart_value');\"/><i class=\"icon-circle\" style=\"color:{\$colors[2]}\"></i> {l s='Average Cart Value' d='Modules.Dashgoals.Admin'}
\t\t\t</label>
\t\t\t<label class=\"btn btn-default active\">
\t\t\t\t<input type=\"radio\" name=\"options\" onchange=\"selectDashgoalsChart('sales');\"/><i class=\"icon-circle\" style=\"color:{\$colors[3]}\"></i> {l s='Sales' d='Admin.Global'}
\t\t\t</label>
\t\t</div>
\t\t<div id=\"dash_goals_chart1\" class=\"chart with-transitions\">
\t\t\t<svg></svg>
\t\t</div>
\t</section>
</section>
", "@Modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl", "/var/www/html/modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl");
    }
}
