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

/* @Modules/dashtrends/views/js/dashtrends.js */
class __TwigTemplate_a6a3e77d99c434c4c3f206dd3e50ae75 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashtrends/views/js/dashtrends.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashtrends/views/js/dashtrends.js"));

        // line 1
        echo "/**
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
 */
var dashtrends_data;
var dashtrends_chart;

function line_chart_trends(widget_name, chart_details)
{
\tif (chart_details.data[0].values.length <= 1)
\t\t\$('#dash_trends_chart1').hide();
\telse
\t\t\$('#dash_trends_chart1').show();
\tnv.addGraph(function() {
\t\tvar chart = nv.models.lineChart()
\t\t\t.useInteractiveGuideline(true)
\t\t\t.x(function(d) { return (d !== undefined ? d[0] : 0); })
\t\t\t.y(function(d) { return (d !== undefined ? parseInt(d[1]) : 0); })
\t\t\t.margin({left: 80});

\t\tchart.xAxis.tickFormat(function(d) {
\t\t\tdate = new Date(d*1000);
\t\t\treturn date.format(chart_details['date_format']);
\t\t});

\t\tfirst_data = new Array();
\t\t\$.each(chart_details.data, function(index, value) {
\t\t\tif (value.id == 'sales' || value.id == 'sales_compare')
\t\t\t{
\t\t\t\tif (value.id == 'sales')
\t\t\t\t\t\$('#dashtrends_toolbar dl:first').css('background-color', chart_details.data[index].color).addClass('active');
\t\t\t\tfirst_data.push(chart_details.data[index]);
\t\t\t}
\t\t});

\t\tchart.yAxis.tickFormat(function(d) {
\t\t\treturn formatCurrency(parseFloat(d), currency_format, currency_sign, currency_blank);
\t\t});

\t\tdashtrends_data = chart_details.data;
\t\tdashtrends_chart = chart;

\t\td3.select('#dash_trends_chart1 svg')
\t\t\t.datum(first_data)
\t\t\t.call(chart);
\t\tnv.utils.windowResize(chart.update);

\t\treturn chart;
\t});
}

function selectDashtrendsChart(element, type)
{
\t\$('#dashtrends_toolbar dl').removeClass('active');
\tcurrent_charts = new Array();
\t\$.each(dashtrends_data, function(index, value) {
\t\tif (value.id == type || value.id == type + '_compare') {
\t\t\tif (value.id == type) {
\t\t\t\t\$(element).siblings().css('background-color', 'inherit').removeClass('active');
\t\t\t\t\$(element).css('background-color', dashtrends_data[index].color).addClass('active');
\t\t\t}

\t\t\tcurrent_charts.push(dashtrends_data[index]);
\t\t\tvalue.disabled = false;
\t\t}
\t});

\tdashtrends_chart.yAxis.tickFormat(d3.format('.f'));

\tif (type == 'sales' || type == 'average_cart_value' || type == 'net_profits')
\t\tdashtrends_chart.yAxis.tickFormat(function(d) {
\t\t\treturn formatCurrency(parseFloat(d), currency_format, currency_sign, currency_blank);
\t\t});

\tif (type == 'conversion_rate')
\t\tdashtrends_chart.yAxis.tickFormat(function(d) {
\t\t\treturn d3.round(d*100, 2)+' %';
\t\t});

\td3.select('#dash_trends_chart1 svg')
\t\t.datum(current_charts)
\t\t.call(dashtrends_chart);
}

\$(document).ready(function(){
    \$('dl').tooltip();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/dashtrends/views/js/dashtrends.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
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
 */
var dashtrends_data;
var dashtrends_chart;

function line_chart_trends(widget_name, chart_details)
{
\tif (chart_details.data[0].values.length <= 1)
\t\t\$('#dash_trends_chart1').hide();
\telse
\t\t\$('#dash_trends_chart1').show();
\tnv.addGraph(function() {
\t\tvar chart = nv.models.lineChart()
\t\t\t.useInteractiveGuideline(true)
\t\t\t.x(function(d) { return (d !== undefined ? d[0] : 0); })
\t\t\t.y(function(d) { return (d !== undefined ? parseInt(d[1]) : 0); })
\t\t\t.margin({left: 80});

\t\tchart.xAxis.tickFormat(function(d) {
\t\t\tdate = new Date(d*1000);
\t\t\treturn date.format(chart_details['date_format']);
\t\t});

\t\tfirst_data = new Array();
\t\t\$.each(chart_details.data, function(index, value) {
\t\t\tif (value.id == 'sales' || value.id == 'sales_compare')
\t\t\t{
\t\t\t\tif (value.id == 'sales')
\t\t\t\t\t\$('#dashtrends_toolbar dl:first').css('background-color', chart_details.data[index].color).addClass('active');
\t\t\t\tfirst_data.push(chart_details.data[index]);
\t\t\t}
\t\t});

\t\tchart.yAxis.tickFormat(function(d) {
\t\t\treturn formatCurrency(parseFloat(d), currency_format, currency_sign, currency_blank);
\t\t});

\t\tdashtrends_data = chart_details.data;
\t\tdashtrends_chart = chart;

\t\td3.select('#dash_trends_chart1 svg')
\t\t\t.datum(first_data)
\t\t\t.call(chart);
\t\tnv.utils.windowResize(chart.update);

\t\treturn chart;
\t});
}

function selectDashtrendsChart(element, type)
{
\t\$('#dashtrends_toolbar dl').removeClass('active');
\tcurrent_charts = new Array();
\t\$.each(dashtrends_data, function(index, value) {
\t\tif (value.id == type || value.id == type + '_compare') {
\t\t\tif (value.id == type) {
\t\t\t\t\$(element).siblings().css('background-color', 'inherit').removeClass('active');
\t\t\t\t\$(element).css('background-color', dashtrends_data[index].color).addClass('active');
\t\t\t}

\t\t\tcurrent_charts.push(dashtrends_data[index]);
\t\t\tvalue.disabled = false;
\t\t}
\t});

\tdashtrends_chart.yAxis.tickFormat(d3.format('.f'));

\tif (type == 'sales' || type == 'average_cart_value' || type == 'net_profits')
\t\tdashtrends_chart.yAxis.tickFormat(function(d) {
\t\t\treturn formatCurrency(parseFloat(d), currency_format, currency_sign, currency_blank);
\t\t});

\tif (type == 'conversion_rate')
\t\tdashtrends_chart.yAxis.tickFormat(function(d) {
\t\t\treturn d3.round(d*100, 2)+' %';
\t\t});

\td3.select('#dash_trends_chart1 svg')
\t\t.datum(current_charts)
\t\t.call(dashtrends_chart);
}

\$(document).ready(function(){
    \$('dl').tooltip();
});
", "@Modules/dashtrends/views/js/dashtrends.js", "/var/www/html/modules/dashtrends/views/js/dashtrends.js");
    }
}
