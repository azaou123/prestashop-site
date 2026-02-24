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

/* @Modules/dashgoals/views/js/dashgoals.js */
class __TwigTemplate_f3a072f7ffe8d6a8654b4e302fa98ae1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashgoals/views/js/dashgoals.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashgoals/views/js/dashgoals.js"));

        // line 1
        echo "var dashgoals_data;
var dashgoals_chart;

function bar_chart_goals(widget_name, chart_details)
{
\tnv.addGraph(function() {
\t\tdashgoals_data = chart_details.data;

\t\tvar chart = nv.models.multiBarChart()
\t\t\t.stacked(true)
\t\t\t.showControls(false)
\t\t\t.tooltipContent(function(key, y, e, graph) {
\t\t\t\tif (graph.value == 0)
\t\t\t\t\treturn '';

\t\t\t\tif (key == 'sales_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + formatCurrency(parseInt(graph.point.sales), currency_format, currency_sign, currency_blank) + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')<br/>';
\t\t\t\t\tif (graph.point.sales > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'sales_less') {
\t\t\t\t\tif (graph.point.sales > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')</div>';
\t\t\t\t} else if (key == 'sales_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\telse if (key == 'avg_cart_value_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + formatCurrency(parseInt(graph.point.avg_cart_value), currency_format, currency_sign, currency_blank) + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')<br/>';
\t\t\t\t\tif (graph.point.avg_cart_value > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'avg_cart_value_less') {
\t\t\t\t\tif (graph.point.avg_cart_value > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')</div>';
\t\t\t\t} else if (key == 'avg_cart_value_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\telse if (key == 'traffic_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.point.traffic + ' ' +graph.series.unit_text+'</strong><br />(' + graph.point.goal + ' ' +graph.series.unit_text+')<br/>';
\t\t\t\t\tif (graph.point.traffic > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'traffic_less') {
\t\t\t\t\tif (graph.point.traffic > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + graph.point.goal_diff + ' ' +graph.series.unit_text+'</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + graph.point.goal + ' ' +graph.series.unit_text+')</div>';
\t\t\t\t} else if (key == 'traffic_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + graph.point.goal_diff + ' ' +graph.series.unit_text+'</span></div>';
\t\t\t\telse if (key == 'conversion_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.point.conversion + '%</strong><br />(' + graph.point.goal + '%)</strong><br/>';
\t\t\t\t\tif (graph.point.conversion  > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'conversion_less') {
\t\t\t\t\tif (graph.point.conversion > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + graph.point.goal_diff + '%</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + graph.point.goal + '%)</div>';
\t\t\t\t} else if (key == 'conversion_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + graph.point.goal_diff + '%</span></div>';

\t\t\t});

\t\tchart.yAxis.tickFormat(d3.format('.1f'));
\t\tdashgoals_chart = chart;

\t\td3.select('#dash_goals_chart1 svg')
\t\t\t.datum(chart_details.data)
\t\t\t.transition()
\t\t\t.call(chart);

\t\t\$('#dash_goals_chart1 .nv-legendWrap').remove();

\t\tnv.utils.windowResize(chart.update);

\t\treturn chart;
\t});
}

function selectDashgoalsChart(type)
{
\tif (type !== false)
\t{
\t\t\$.each(dashgoals_data, function(index, value) {
\t\t\tif (value.key == type + '_real' || value.key == type + '_more' || value.key == type + '_less')
\t\t\t\tvalue.disabled = false;
\t\t\telse
\t\t\t\tvalue.disabled = true;
\t\t});
\t}
\tdashgoals_toggleDashConfig();
}

/* \tRefresh dashgoals chart when coming from the config panel
\tCalled from /js/admin-dashboard.js: toggleDashConfig() */
function dashgoals_toggleDashConfig()
{
\td3.select('#dash_goals_chart1 svg')
\t\t.datum(dashgoals_data)
\t\t.transition()
\t\t.call(dashgoals_chart);
\tnv.utils.windowResize(dashgoals_chart.update);
}

/* \tCalculate Sales based on the traffic, average cart value and conversion rate */
function dashgoals_calc_sales()
{
\t\$('.dashgoals_sales').each(function() {
\t\tvar key = \$(this).attr('id').substr(16);
\t\tvar sales = parseFloat(\$('#dashgoals_traffic_' + key).val()) * parseFloat(\$('#dashgoals_avg_cart_value_' + key).val()) * parseFloat(\$('#dashgoals_conversion_' + key).val()) / 100;
\t\tif (isNaN(sales))
\t\t\t\$(this).text(formatCurrency(0, currency_format, currency_sign, currency_blank));
\t\telse
\t\t\t\$(this).text(formatCurrency(parseInt(sales), currency_format, currency_sign, currency_blank));
\t});
}

function dashgoals_changeYear(xward)
{
\tvar new_year = dashgoals_year;
\tif (xward == 'forward')
\t\tnew_year = dashgoals_year + 1;
\telse if (xward == 'backward')
\t\tnew_year = dashgoals_year - 1;

\t\$.ajax({
\t\turl: dashgoals_ajax_link,
\t\tdata: {
\t\t\tajax: true,
\t\t\taction: 'changeconfyear',
\t\t\tyear: new_year
\t\t},
\t\tsuccess : function(result){
\t\t\t\$('#dashgoals_title').text(\$('#dashgoals_title').text().replace(dashgoals_year, new_year));
\t\t\tvar hide_conf = \$('#dashgoals_config').hasClass('hide');
\t\t\t\$('#dashgoals_config').replaceWith(result);
\t\t\tdashgoals_calc_sales();
\t\t\tif (!hide_conf)
\t\t\t\t\$('#dashgoals_config').removeClass('hide');
\t\t\t\$('.dashgoals_config_input').off();
\t\t\t\$('.dashgoals_config_input').keyup(function() { dashgoals_calc_sales(); });
\t\t\tdashgoals_year = new_year;
\t\t\trefreshDashboard('dashgoals', false, dashgoals_year);
\t\t}
\t});
}

\$(document).ready(function() {
\t\$('.dashgoals_config_input').keyup(function() { dashgoals_calc_sales(); });
\tdashgoals_calc_sales();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/dashgoals/views/js/dashgoals.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("var dashgoals_data;
var dashgoals_chart;

function bar_chart_goals(widget_name, chart_details)
{
\tnv.addGraph(function() {
\t\tdashgoals_data = chart_details.data;

\t\tvar chart = nv.models.multiBarChart()
\t\t\t.stacked(true)
\t\t\t.showControls(false)
\t\t\t.tooltipContent(function(key, y, e, graph) {
\t\t\t\tif (graph.value == 0)
\t\t\t\t\treturn '';

\t\t\t\tif (key == 'sales_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + formatCurrency(parseInt(graph.point.sales), currency_format, currency_sign, currency_blank) + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')<br/>';
\t\t\t\t\tif (graph.point.sales > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'sales_less') {
\t\t\t\t\tif (graph.point.sales > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')</div>';
\t\t\t\t} else if (key == 'sales_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\telse if (key == 'avg_cart_value_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + formatCurrency(parseInt(graph.point.avg_cart_value), currency_format, currency_sign, currency_blank) + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')<br/>';
\t\t\t\t\tif (graph.point.avg_cart_value > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'avg_cart_value_less') {
\t\t\t\t\tif (graph.point.avg_cart_value > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + formatCurrency(parseInt(graph.point.goal), currency_format, currency_sign, currency_blank) + ')</div>';
\t\t\t\t} else if (key == 'avg_cart_value_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + formatCurrency(parseInt(graph.point.goal_diff), currency_format, currency_sign, currency_blank) + '</span></div>';
\t\t\t\telse if (key == 'traffic_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.point.traffic + ' ' +graph.series.unit_text+'</strong><br />(' + graph.point.goal + ' ' +graph.series.unit_text+')<br/>';
\t\t\t\t\tif (graph.point.traffic > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'traffic_less') {
\t\t\t\t\tif (graph.point.traffic > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + graph.point.goal_diff + ' ' +graph.series.unit_text+'</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + graph.point.goal + ' ' +graph.series.unit_text+')</div>';
\t\t\t\t} else if (key == 'traffic_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + graph.point.goal_diff + ' ' +graph.series.unit_text+'</span></div>';
\t\t\t\telse if (key == 'conversion_real') {
\t\t\t\t\tvar result = '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.point.conversion + '%</strong><br />(' + graph.point.goal + '%)</strong><br/>';
\t\t\t\t\tif (graph.point.conversion  > graph.point.goal)
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_up\">+';
\t\t\t\t\telse
\t\t\t\t\t\tresult += '<span class=\"dash_trend dash_trend_down\">';
\t\t\t\t\tresult += graph.point.goal_diff + '%</span></div>';
\t\t\t\t\treturn result;
\t\t\t\t} else if (key == 'conversion_less') {
\t\t\t\t\tif (graph.point.conversion > 0)
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_down\">' + graph.point.goal_diff + '%</span></div>';
\t\t\t\t\telse
\t\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br />(' + graph.point.goal + '%)</div>';
\t\t\t\t} else if (key == 'conversion_more')
\t\t\t\t\treturn '<div class=\"tooltip-panel\"><div class=\"tooltip-panel-heading\">' + graph.series.title + '</div><strong>' + graph.series.zone_text + '</strong><br /><span class=\"dash_trend dash_trend_up\">+' + graph.point.goal_diff + '%</span></div>';

\t\t\t});

\t\tchart.yAxis.tickFormat(d3.format('.1f'));
\t\tdashgoals_chart = chart;

\t\td3.select('#dash_goals_chart1 svg')
\t\t\t.datum(chart_details.data)
\t\t\t.transition()
\t\t\t.call(chart);

\t\t\$('#dash_goals_chart1 .nv-legendWrap').remove();

\t\tnv.utils.windowResize(chart.update);

\t\treturn chart;
\t});
}

function selectDashgoalsChart(type)
{
\tif (type !== false)
\t{
\t\t\$.each(dashgoals_data, function(index, value) {
\t\t\tif (value.key == type + '_real' || value.key == type + '_more' || value.key == type + '_less')
\t\t\t\tvalue.disabled = false;
\t\t\telse
\t\t\t\tvalue.disabled = true;
\t\t});
\t}
\tdashgoals_toggleDashConfig();
}

/* \tRefresh dashgoals chart when coming from the config panel
\tCalled from /js/admin-dashboard.js: toggleDashConfig() */
function dashgoals_toggleDashConfig()
{
\td3.select('#dash_goals_chart1 svg')
\t\t.datum(dashgoals_data)
\t\t.transition()
\t\t.call(dashgoals_chart);
\tnv.utils.windowResize(dashgoals_chart.update);
}

/* \tCalculate Sales based on the traffic, average cart value and conversion rate */
function dashgoals_calc_sales()
{
\t\$('.dashgoals_sales').each(function() {
\t\tvar key = \$(this).attr('id').substr(16);
\t\tvar sales = parseFloat(\$('#dashgoals_traffic_' + key).val()) * parseFloat(\$('#dashgoals_avg_cart_value_' + key).val()) * parseFloat(\$('#dashgoals_conversion_' + key).val()) / 100;
\t\tif (isNaN(sales))
\t\t\t\$(this).text(formatCurrency(0, currency_format, currency_sign, currency_blank));
\t\telse
\t\t\t\$(this).text(formatCurrency(parseInt(sales), currency_format, currency_sign, currency_blank));
\t});
}

function dashgoals_changeYear(xward)
{
\tvar new_year = dashgoals_year;
\tif (xward == 'forward')
\t\tnew_year = dashgoals_year + 1;
\telse if (xward == 'backward')
\t\tnew_year = dashgoals_year - 1;

\t\$.ajax({
\t\turl: dashgoals_ajax_link,
\t\tdata: {
\t\t\tajax: true,
\t\t\taction: 'changeconfyear',
\t\t\tyear: new_year
\t\t},
\t\tsuccess : function(result){
\t\t\t\$('#dashgoals_title').text(\$('#dashgoals_title').text().replace(dashgoals_year, new_year));
\t\t\tvar hide_conf = \$('#dashgoals_config').hasClass('hide');
\t\t\t\$('#dashgoals_config').replaceWith(result);
\t\t\tdashgoals_calc_sales();
\t\t\tif (!hide_conf)
\t\t\t\t\$('#dashgoals_config').removeClass('hide');
\t\t\t\$('.dashgoals_config_input').off();
\t\t\t\$('.dashgoals_config_input').keyup(function() { dashgoals_calc_sales(); });
\t\t\tdashgoals_year = new_year;
\t\t\trefreshDashboard('dashgoals', false, dashgoals_year);
\t\t}
\t});
}

\$(document).ready(function() {
\t\$('.dashgoals_config_input').keyup(function() { dashgoals_calc_sales(); });
\tdashgoals_calc_sales();
});
", "@Modules/dashgoals/views/js/dashgoals.js", "/var/www/html/modules/dashgoals/views/js/dashgoals.js");
    }
}
