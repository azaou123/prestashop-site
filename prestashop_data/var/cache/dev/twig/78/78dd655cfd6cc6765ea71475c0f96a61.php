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

/* @Modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl */
class __TwigTemplate_3e33ba0d33ad1bbc0b5cb3bda9c2a545 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl"));

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
<script>
\tvar currency_format = {\$currency->format|floatval};
\tvar currency_sign = '{\$currency->sign|@addcslashes:'\\''}';
\tvar currency_blank = {\$currency->blank|intval};
\tvar priceDisplayPrecision = 0;
</script>
<div class=\"clearfix\"></div>
<section id=\"dashtrends\" class=\"panel widget\">
\t<header class=\"panel-heading\">
\t\t<i class=\"icon-bar-chart\"></i> {l s='Dashboard' d='Modules.Dashtrends.Admin'}
\t\t<span class=\"panel-heading-action\">
\t\t\t<a class=\"list-toolbar-btn\" href=\"{\$link->getAdminLink('AdminDashboard')|escape:'html':'UTF-8'}&amp;profitability_conf=1\" title=\"{l s='Configure' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-configure\"></i>
\t\t\t</a>
\t\t\t<a class=\"list-toolbar-btn\" href=\"#\" onclick=\"refreshDashboard('dashtrends'); return false;\" title=\"{l s='Refresh' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-refresh\"></i>
\t\t\t</a>
\t\t</span>
\t</header>
\t<div id=\"dashtrends_toolbar\" class=\"row\">
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'sales');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Sum of revenue (excl. tax) generated within the date range by orders considered validated.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Sales' d='Admin.Global'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"sales_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"sales_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'orders');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Total number of orders received within the date range that are considered validated.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Orders' d='Admin.Global'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"orders_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"orders_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'average_cart_value');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Average Cart Value is a metric representing the value of an average order within the date range. It is calculated by dividing Sales by Orders.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Cart Value' d='Modules.Dashtrends.Admin'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"cart_value_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"cart_value_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'visits');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Total number of visits within the date range. A visit is the period of time a user is actively engaged with your website.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Visits' d='Admin.Global'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"visits_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"visits_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'conversion_rate');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Ecommerce Conversion Rate is the percentage of visits that resulted in an validated order.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t<dt>{l s='Conversion Rate' d='Admin.Global'}</dt>
\t\t\t<dd class=\"data_value size_l\"><span id=\"conversion_rate_score\"></span></dd>
\t\t\t<dd class=\"dash_trend\"><span id=\"conversion_rate_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'net_profits');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Net profit is a measure of the profitability of a venture after accounting for all Ecommerce costs. You can provide these costs by clicking on the configuration icon right above here.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Net Profit' d='Modules.Dashtrends.Admin'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"net_profits_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"net_profits_score_trends\"></span></dd>
\t\t</dl>
\t</div>
\t<div id=\"dash_trends_chart1\" class=\"chart with-transitions\">
\t\t<svg></svg>
\t</div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl";
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
<script>
\tvar currency_format = {\$currency->format|floatval};
\tvar currency_sign = '{\$currency->sign|@addcslashes:'\\''}';
\tvar currency_blank = {\$currency->blank|intval};
\tvar priceDisplayPrecision = 0;
</script>
<div class=\"clearfix\"></div>
<section id=\"dashtrends\" class=\"panel widget\">
\t<header class=\"panel-heading\">
\t\t<i class=\"icon-bar-chart\"></i> {l s='Dashboard' d='Modules.Dashtrends.Admin'}
\t\t<span class=\"panel-heading-action\">
\t\t\t<a class=\"list-toolbar-btn\" href=\"{\$link->getAdminLink('AdminDashboard')|escape:'html':'UTF-8'}&amp;profitability_conf=1\" title=\"{l s='Configure' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-configure\"></i>
\t\t\t</a>
\t\t\t<a class=\"list-toolbar-btn\" href=\"#\" onclick=\"refreshDashboard('dashtrends'); return false;\" title=\"{l s='Refresh' d='Admin.Actions'}\">
\t\t\t\t<i class=\"process-icon-refresh\"></i>
\t\t\t</a>
\t\t</span>
\t</header>
\t<div id=\"dashtrends_toolbar\" class=\"row\">
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'sales');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Sum of revenue (excl. tax) generated within the date range by orders considered validated.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Sales' d='Admin.Global'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"sales_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"sales_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'orders');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Total number of orders received within the date range that are considered validated.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Orders' d='Admin.Global'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"orders_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"orders_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'average_cart_value');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Average Cart Value is a metric representing the value of an average order within the date range. It is calculated by dividing Sales by Orders.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Cart Value' d='Modules.Dashtrends.Admin'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"cart_value_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"cart_value_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'visits');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Total number of visits within the date range. A visit is the period of time a user is actively engaged with your website.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Visits' d='Admin.Global'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"visits_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"visits_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'conversion_rate');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Ecommerce Conversion Rate is the percentage of visits that resulted in an validated order.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t<dt>{l s='Conversion Rate' d='Admin.Global'}</dt>
\t\t\t<dd class=\"data_value size_l\"><span id=\"conversion_rate_score\"></span></dd>
\t\t\t<dd class=\"dash_trend\"><span id=\"conversion_rate_score_trends\"></span></dd>
\t\t</dl>
\t\t<dl class=\"col-xs-4 col-lg-2 label-tooltip\" onclick=\"selectDashtrendsChart(this, 'net_profits');\" data-toggle=\"tooltip\" data-original-title=\"{l s='Net profit is a measure of the profitability of a venture after accounting for all Ecommerce costs. You can provide these costs by clicking on the configuration icon right above here.' d='Modules.Dashtrends.Admin'}\" data-placement=\"bottom\">
\t\t\t\t<dt>{l s='Net Profit' d='Modules.Dashtrends.Admin'}</dt>
\t\t\t\t<dd class=\"data_value size_l\"><span id=\"net_profits_score\"></span></dd>
\t\t\t\t<dd class=\"dash_trend\"><span id=\"net_profits_score_trends\"></span></dd>
\t\t</dl>
\t</div>
\t<div id=\"dash_trends_chart1\" class=\"chart with-transitions\">
\t\t<svg></svg>
\t</div>
</section>
", "@Modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl", "/var/www/html/modules/dashtrends/views/templates/hook/dashboard_zone_two.tpl");
    }
}
