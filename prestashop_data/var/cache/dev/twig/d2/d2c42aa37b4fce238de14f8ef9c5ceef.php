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

/* @Modules/dashactivity/views/js/dashactivity.js */
class __TwigTemplate_f40d313b2296669b2960ab125e0ae3f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashactivity/views/js/dashactivity.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashactivity/views/js/dashactivity.js"));

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

function pie_chart_trends(widget_name, chart_details)
{
\tnv.addGraph(function() {
\t\tvar chart = nv.models.pieChart()
\t\t\t.x(function(d) { return d.key })
\t\t\t.y(function(d) { return d.y })
\t\t\t.color(d3.scale.category10().range())
\t\t\t.donut(true)
\t\t\t.showLabels(false)
\t\t\t.showLegend(false);

\t\td3.select(\"#dash_traffic_chart2 svg\")
\t\t\t.datum(chart_details.data)
\t\t\t.transition().duration(1200)
\t\t\t.call(chart);
\t\t\t
\t\tnv.utils.windowResize(chart.update);

\t\treturn chart;
\t});\t
}

//TODO unify this with other function in calenda.js and replace date.js functions
Date.parseDate = function(date, format) {
\tif (format === undefined)
\t\tformat = 'Y-m-d';

\tvar formatSeparator = format.match(/[.\\/\\-\\s].*?/);
\tvar formatParts     = format.split(/\\W+/);
\tvar parts           = date.split(formatSeparator);
\tvar date            = new Date();

\tif (parts.length === formatParts.length) {
\t\tdate.setHours(0);
\t\tdate.setMinutes(0);
\t\tdate.setSeconds(0);
\t\tdate.setMilliseconds(0);

\t\tfor (var i=0; i<=formatParts.length; i++) {
\t\t\tswitch(formatParts[i]) {
\t\t\t\tcase 'dd':
\t\t\t\tcase 'd':
\t\t\t\tcase 'j':
\t\t\t\tdate.setDate(parseInt(parts[i], 10)||1);
\t\t\t\tbreak;

\t\t\t\tcase 'mm':
\t\t\t\tcase 'm':
\t\t\t\tdate.setMonth((parseInt(parts[i], 10)||1) - 1);
\t\t\t\tbreak;

\t\t\t\tcase 'yy':
\t\t\t\tcase 'y':
\t\t\t\tdate.setFullYear(2000 + (parseInt(parts[i], 10)||1));
\t\t\t\tbreak;

\t\t\t\tcase 'yyyy':
\t\t\t\tcase 'Y':
\t\t\t\tdate.setFullYear(parseInt(parts[i], 10)||1);
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\treturn date;
};

Date.prototype.format = function(format) {
\tif (format === undefined)
\t\treturn this.toString();

\tvar formatSeparator = format.match(/[.\\/\\-\\s].*?/);
\tvar formatParts     = format.split(/\\W+/);
\tvar result          = '';

\tfor (var i=0; i<=formatParts.length; i++) {
\t\tswitch(formatParts[i]) {
\t\t\tcase 'd':
\t\t\tcase 'j':
\t\t\tresult += this.getDate() + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'dd':
\t\t\tresult += (this.getDate() < 10 ? '0' : '')+this.getDate() + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'm':
\t\t\tresult += (this.getMonth() + 1) + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'mm':
\t\t\tresult += (this.getMonth() < 9 ? '0' : '')+(this.getMonth() + 1) + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'yy':
\t\t\tcase 'y':
\t\t\tresult += this.getFullYear() + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'yyyy':
\t\t\tcase 'Y':
\t\t\tresult += this.getFullYear() + formatSeparator;
\t\t\tbreak;
\t\t}
\t}

\treturn result.slice(0, -1);
}

\$(document).ready(function() {
\tif (typeof date_subtitle === \"undefined\")
\t\tvar date_subtitle = '(from %s to %s)';

\tif (typeof date_format === \"undefined\")
\t\tvar date_format = 'Y-mm-dd';

\t\$('#date-start').change(function() {
\t\tstart = Date.parseDate(\$('#date-start').val(), 'Y-m-d');
\t\tend = Date.parseDate(\$('#date-end').val(), 'Y-m-d');
\t\t\$('#customers-newsletters-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t\t\$('#traffic-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t});

\t\$('#date-end').change(function() {
\t\tstart = Date.parseDate(\$('#date-start').val(), 'Y-m-d');
\t\tend = Date.parseDate(\$('#date-end').val(), 'Y-m-d');
\t\t
\t\t\$('#customers-newsletters-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t\t\$('#traffic-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t});
});";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/dashactivity/views/js/dashactivity.js";
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

function pie_chart_trends(widget_name, chart_details)
{
\tnv.addGraph(function() {
\t\tvar chart = nv.models.pieChart()
\t\t\t.x(function(d) { return d.key })
\t\t\t.y(function(d) { return d.y })
\t\t\t.color(d3.scale.category10().range())
\t\t\t.donut(true)
\t\t\t.showLabels(false)
\t\t\t.showLegend(false);

\t\td3.select(\"#dash_traffic_chart2 svg\")
\t\t\t.datum(chart_details.data)
\t\t\t.transition().duration(1200)
\t\t\t.call(chart);
\t\t\t
\t\tnv.utils.windowResize(chart.update);

\t\treturn chart;
\t});\t
}

//TODO unify this with other function in calenda.js and replace date.js functions
Date.parseDate = function(date, format) {
\tif (format === undefined)
\t\tformat = 'Y-m-d';

\tvar formatSeparator = format.match(/[.\\/\\-\\s].*?/);
\tvar formatParts     = format.split(/\\W+/);
\tvar parts           = date.split(formatSeparator);
\tvar date            = new Date();

\tif (parts.length === formatParts.length) {
\t\tdate.setHours(0);
\t\tdate.setMinutes(0);
\t\tdate.setSeconds(0);
\t\tdate.setMilliseconds(0);

\t\tfor (var i=0; i<=formatParts.length; i++) {
\t\t\tswitch(formatParts[i]) {
\t\t\t\tcase 'dd':
\t\t\t\tcase 'd':
\t\t\t\tcase 'j':
\t\t\t\tdate.setDate(parseInt(parts[i], 10)||1);
\t\t\t\tbreak;

\t\t\t\tcase 'mm':
\t\t\t\tcase 'm':
\t\t\t\tdate.setMonth((parseInt(parts[i], 10)||1) - 1);
\t\t\t\tbreak;

\t\t\t\tcase 'yy':
\t\t\t\tcase 'y':
\t\t\t\tdate.setFullYear(2000 + (parseInt(parts[i], 10)||1));
\t\t\t\tbreak;

\t\t\t\tcase 'yyyy':
\t\t\t\tcase 'Y':
\t\t\t\tdate.setFullYear(parseInt(parts[i], 10)||1);
\t\t\t\tbreak;
\t\t\t}
\t\t}
\t}

\treturn date;
};

Date.prototype.format = function(format) {
\tif (format === undefined)
\t\treturn this.toString();

\tvar formatSeparator = format.match(/[.\\/\\-\\s].*?/);
\tvar formatParts     = format.split(/\\W+/);
\tvar result          = '';

\tfor (var i=0; i<=formatParts.length; i++) {
\t\tswitch(formatParts[i]) {
\t\t\tcase 'd':
\t\t\tcase 'j':
\t\t\tresult += this.getDate() + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'dd':
\t\t\tresult += (this.getDate() < 10 ? '0' : '')+this.getDate() + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'm':
\t\t\tresult += (this.getMonth() + 1) + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'mm':
\t\t\tresult += (this.getMonth() < 9 ? '0' : '')+(this.getMonth() + 1) + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'yy':
\t\t\tcase 'y':
\t\t\tresult += this.getFullYear() + formatSeparator;
\t\t\tbreak;

\t\t\tcase 'yyyy':
\t\t\tcase 'Y':
\t\t\tresult += this.getFullYear() + formatSeparator;
\t\t\tbreak;
\t\t}
\t}

\treturn result.slice(0, -1);
}

\$(document).ready(function() {
\tif (typeof date_subtitle === \"undefined\")
\t\tvar date_subtitle = '(from %s to %s)';

\tif (typeof date_format === \"undefined\")
\t\tvar date_format = 'Y-mm-dd';

\t\$('#date-start').change(function() {
\t\tstart = Date.parseDate(\$('#date-start').val(), 'Y-m-d');
\t\tend = Date.parseDate(\$('#date-end').val(), 'Y-m-d');
\t\t\$('#customers-newsletters-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t\t\$('#traffic-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t});

\t\$('#date-end').change(function() {
\t\tstart = Date.parseDate(\$('#date-start').val(), 'Y-m-d');
\t\tend = Date.parseDate(\$('#date-end').val(), 'Y-m-d');
\t\t
\t\t\$('#customers-newsletters-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t\t\$('#traffic-subtitle').html(sprintf(date_subtitle, start.format(date_format), end.format(date_format)));
\t});
});", "@Modules/dashactivity/views/js/dashactivity.js", "/var/www/html/modules/dashactivity/views/js/dashactivity.js");
    }
}
