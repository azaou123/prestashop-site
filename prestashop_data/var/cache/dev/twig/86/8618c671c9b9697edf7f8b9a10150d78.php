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

/* @Modules/dashgoals/views/templates/hook/config.tpl */
class __TwigTemplate_d2d61186092f468983d52fa69ce7e040 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashgoals/views/templates/hook/config.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashgoals/views/templates/hook/config.tpl"));

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
<section id=\"dashgoals_config\" class=\"dash_config hide\">
\t<header><i class=\"icon-wrench\"></i> {l s='Configuration' d='Admin.Global'}</header>
\t<form class=\"defaultForm form-horizontal\" method=\"post\" action=\"{\$link->getAdminLink('AdminDashboard')|escape:'html':'UTF-8'}\">
\t\t<table class=\"table table-condensed table-striped table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"fixed-width-md\">{\$goals_year}</th>
\t\t\t\t\t<th class=\"fixed-width-md\">{l s='Traffic' d='Modules.Dashgoals.Admin'}</th>
\t\t\t\t\t<th class=\"fixed-width-md\">{l s='Conversion Rate' d='Modules.Dashgoals.Admin'}</th>
\t\t\t\t\t<th class=\"fixed-width-lg\">{l s='Average Cart Value' d='Modules.Dashgoals.Admin'}</th>
\t\t\t\t\t<th>{l s='Sales' d='Admin.Global'}</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{foreach \$goals_months as \$month}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{\$month.label}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"dashgoals_traffic_{\$month@key}\" name=\"dashgoals_traffic_{\$month@key}\" class=\"dashgoals_config_input form-control\"
\t\t\t\t\t\t\t\tvalue=\"{\$month.values.traffic|intval}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"dashgoals_conversion_{\$month@key}\" name=\"dashgoals_conversion_{\$month@key}\" class=\"dashgoals_config_input form-control\"
\t\t\t\t\t\t\t\tvalue=\"{\$month.values.conversion|floatval}\" />
\t\t\t\t\t\t\t<span class=\"input-group-addon\">%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">{\$currency->iso_code|escape}</span>
\t\t\t\t\t\t\t<input id=\"dashgoals_avg_cart_value_{\$month@key}\" name=\"dashgoals_avg_cart_value_{\$month@key}\" class=\"dashgoals_config_input form-control\"
\t\t\t\t\t\t\t\tvalue=\"{\$month.values.avg_cart_value|intval}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td id=\"dashgoals_sales_{\$month@key}\" class=\"dashgoals_sales\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{/foreach}
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"panel-footer\">
\t\t\t<button class=\"btn btn-default pull-right\" name=\"submitDashGoals\" type=\"submit\"><i class=\"process-icon-save\"></i> {l s='Save' d='Admin.Actions'}</button>
\t\t</div>
\t</form>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/dashgoals/views/templates/hook/config.tpl";
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
<section id=\"dashgoals_config\" class=\"dash_config hide\">
\t<header><i class=\"icon-wrench\"></i> {l s='Configuration' d='Admin.Global'}</header>
\t<form class=\"defaultForm form-horizontal\" method=\"post\" action=\"{\$link->getAdminLink('AdminDashboard')|escape:'html':'UTF-8'}\">
\t\t<table class=\"table table-condensed table-striped table-bordered\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"fixed-width-md\">{\$goals_year}</th>
\t\t\t\t\t<th class=\"fixed-width-md\">{l s='Traffic' d='Modules.Dashgoals.Admin'}</th>
\t\t\t\t\t<th class=\"fixed-width-md\">{l s='Conversion Rate' d='Modules.Dashgoals.Admin'}</th>
\t\t\t\t\t<th class=\"fixed-width-lg\">{l s='Average Cart Value' d='Modules.Dashgoals.Admin'}</th>
\t\t\t\t\t<th>{l s='Sales' d='Admin.Global'}</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{foreach \$goals_months as \$month}
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t{\$month.label}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"dashgoals_traffic_{\$month@key}\" name=\"dashgoals_traffic_{\$month@key}\" class=\"dashgoals_config_input form-control\"
\t\t\t\t\t\t\t\tvalue=\"{\$month.values.traffic|intval}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input id=\"dashgoals_conversion_{\$month@key}\" name=\"dashgoals_conversion_{\$month@key}\" class=\"dashgoals_config_input form-control\"
\t\t\t\t\t\t\t\tvalue=\"{\$month.values.conversion|floatval}\" />
\t\t\t\t\t\t\t<span class=\"input-group-addon\">%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<span class=\"input-group-addon\">{\$currency->iso_code|escape}</span>
\t\t\t\t\t\t\t<input id=\"dashgoals_avg_cart_value_{\$month@key}\" name=\"dashgoals_avg_cart_value_{\$month@key}\" class=\"dashgoals_config_input form-control\"
\t\t\t\t\t\t\t\tvalue=\"{\$month.values.avg_cart_value|intval}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</td>
\t\t\t\t\t<td id=\"dashgoals_sales_{\$month@key}\" class=\"dashgoals_sales\">
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{/foreach}
\t\t\t</tbody>
\t\t</table>
\t\t<div class=\"panel-footer\">
\t\t\t<button class=\"btn btn-default pull-right\" name=\"submitDashGoals\" type=\"submit\"><i class=\"process-icon-save\"></i> {l s='Save' d='Admin.Actions'}</button>
\t\t</div>
\t</form>
</section>
", "@Modules/dashgoals/views/templates/hook/config.tpl", "/var/www/html/modules/dashgoals/views/templates/hook/config.tpl");
    }
}
