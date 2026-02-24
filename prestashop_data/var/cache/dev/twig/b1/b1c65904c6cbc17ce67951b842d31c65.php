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

/* @Modules/ps_facetedsearch/views/templates/admin/manage.tpl */
class __TwigTemplate_d0938b8e74726f857756ee97c5d1dae0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/admin/manage.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/admin/manage.tpl"));

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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{include file='./_partials/messages.tpl'}

<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='Indexes and caches' d='Modules.Facetedsearch.Admin'}</h3>
  <div id=\"indexing-warning\" class=\"alert alert-warning\" style=\"display: none\">
\t{l s='Indexing is in progress. Please do not leave this page' d='Modules.Facetedsearch.Admin'}
  </div>
  <div class=\"row\">
\t<p>
\t  <a class=\"ajaxcall-recurcive btn btn-default\" href=\"{\$price_indexer_url}\">{l s='Index all missing prices' d='Modules.Facetedsearch.Admin'}</a>
\t  <a class=\"ajaxcall-recurcive btn btn-default\" href=\"{\$full_price_indexer_url}\">{l s='Rebuild entire price index' d='Modules.Facetedsearch.Admin'}</a>
\t  <a class=\"ajaxcall btn btn-default\" href=\"{\$attribute_indexer_url}\">{l s='Build attributes and features indexes' d='Modules.Facetedsearch.Admin'}</a>
\t  <a class=\"ajaxcall btn btn-default\" href=\"{\$clear_cache_url}\">{l s='Clear cache' d='Modules.Facetedsearch.Admin'}</a>
\t</p>
  </div>
  <div class=\"row\">
\t<div class=\"alert alert-info\">
\t\t<p>{l s='We recommend to set regular cron tasks to manage the indexes and cache on daily/weekly basis.' d='Modules.Facetedsearch.Admin'}</p>
\t\t<br>
\t  {l s='Add missing products to price index:' d='Modules.Facetedsearch.Admin'} <strong>{\$price_indexer_url}</strong>
\t  <br>
\t\t{l s='Rebuild price index:' d='Modules.Facetedsearch.Admin'} <strong>{\$full_price_indexer_url}</strong>
\t  <br>
\t\t{l s='Rebuild attribute index:' d='Modules.Facetedsearch.Admin'} <strong>{\$attribute_indexer_url}</strong>
\t\t<br>
\t\t{l s='Flush block cache:' d='Modules.Facetedsearch.Admin'} <strong>{\$clear_cache_url}</strong>
\t\t<br>
\t\t<br>
\t\t<p>{l s='A nightly rebuild is recommended.' d='Modules.Facetedsearch.Admin'}</p>
\t</div>
  </div>
</div>
<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='Filters templates' d='Modules.Facetedsearch.Admin'}<span class=\"badge\">{\$filters_templates|count}</span></h3>
  {if \$filters_templates|count > 0}
\t<div class=\"row\">
\t  <table class=\"table\">
\t\t<thead>
\t\t  <tr>
\t\t\t<th class=\"fixed-width-xs center\"><span class=\"title_box\">{l s='ID' d='Admin.Global'}</span></th>
\t\t\t<th><span class=\"title_box text-left\">{l s='Name' d='Admin.Global'}</span></th>
\t\t\t<th><span class=\"title_box\">{l s='Pages' d='Admin.Global'}</span></th>
\t\t\t<th class=\"fixed-width-sm center\"><span class=\"title_box\">{l s='Categories' d='Admin.Global'}</span></th>
\t\t\t<th class=\"fixed-width-lg\"><span class=\"title_box\">{l s='Created on' d='Modules.Facetedsearch.Admin'}</span></th>
\t\t\t<th class=\"fixed-width-sm\"><span class=\"title_box text-right\">{l s='Actions' d='Modules.Facetedsearch.Admin'}</span></th>
\t\t  </tr>
\t\t</thead>
\t\t<tbody>
\t\t  {foreach \$filters_templates as \$template}
\t\t\t<tr>
\t\t\t  <td class=\"center\">{\$template['id_layered_filter']}</td>
\t\t\t  <td class=\"text-left\">{\$template['name']}</td>
\t\t\t  <td>{\$template['controllers']}</td>
\t\t\t  <td class=\"center\">{\$template['n_categories']}</td>
\t\t\t  <td>{\$template['date_add']}</td>
\t\t\t  <td>
\t\t\t\t{if empty(\$limit_warning)}
\t\t\t\t  <div class=\"btn-group-action\">
\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t  <a href=\"{\$current_url}&amp;edit_filters_template=1&amp;id_layered_filter={(int)\$template['id_layered_filter']}\" class=\"btn btn-default\">
\t\t\t\t\t\t<i class=\"icon-pencil\"></i> {l s='Edit' d='Admin.Actions'}
\t\t\t\t\t  </a>
\t\t\t\t\t  <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<span class=\"caret\"></span>&nbsp;
\t\t\t\t\t  </button>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <a href=\"{\$current_url}&amp;deleteFilterTemplate=1&amp;id_layered_filter={(int)\$template['id_layered_filter']}\"
\t\t\t\t\t\t     onclick=\"return confirm('{l s='Do you really want to delete this filter template?' d='Modules.Facetedsearch.Admin'}');\">
\t\t\t\t\t\t\t<i class=\"icon-trash\"></i> {l s='Delete' d='Admin.Actions'}
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t{/if}
\t\t\t  </td>
\t\t\t</tr>
\t\t  {/foreach}
\t\t</tbody>
\t  </table>
\t  <div class=\"clearfix\">&nbsp;</div>
\t</div>
  {else}
\t<div class=\"row alert alert-warning\">{l s='No filter template found.' d='Modules.Facetedsearch.Admin'}</div>
  {/if}
  {if empty(\$limit_warning)}
\t<div class=\"panel-footer\">
\t  <a class=\"btn btn-default pull-right\" href=\"{\$current_url}&amp;add_new_filters_template=1\"><i class=\"process-icon-plus\"></i> {l s='Add new template' d='Modules.Facetedsearch.Admin'}</a>
\t</div>
  {/if}
</div>
<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='Configuration' d='Admin.Global'}</h3>
  <form action=\"{\$current_url}\" method=\"post\" class=\"form-horizontal\">
\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Enable cache system' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_cache_enabled\" id=\"ps_layered_cache_enabled_on\" value=\"1\"{if \$cache_enabled} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_cache_enabled_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_cache_enabled\" id=\"ps_layered_cache_enabled_off\" value=\"0\"{if !\$cache_enabled} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_cache_enabled_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='This option caches filtering blocks, so the module does not have to query for matching products all the time. The cache is invalidated on every modification on your store. If you encounter some incosistencies, disable this cache or make sure to flush it if needed.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show the number of matching products' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_show_qties\" id=\"ps_layered_show_qties_on\" value=\"1\"{if \$show_quantities} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_show_qties_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_show_qties\" id=\"ps_layered_show_qties_off\" value=\"0\"{if !\$show_quantities} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_show_qties_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='Enable or disable display of matching products after filters. Disabling this won\\'t bring any performance benefit, because matching products need to be calculated anyway.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show products from subcategories' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_full_tree\" id=\"ps_layered_full_tree_on\" value=\"1\"{if \$full_tree} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_full_tree_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_full_tree\" id=\"ps_layered_full_tree_off\" value=\"0\"{if !\$full_tree} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_full_tree_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='Enable this, if you want to display products from subcategories, even if they are not specifically assigned to the currently browsed category.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show products only from default category' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_by_default_category\" id=\"ps_layered_filter_by_default_category_on\" value=\"1\"{if \$filter_by_default_category} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_by_default_category_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_by_default_category\" id=\"ps_layered_filter_by_default_category_off\" value=\"0\"{if !\$filter_by_default_category} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_by_default_category_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t  <div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='Works only if \"Show products from subcategories\" is off.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Category filter depth' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<input type=\"text\" name=\"ps_layered_filter_category_depth\" value=\"{if \$category_depth !== false}{\$category_depth}{else}1{/if}\" class=\"fixed-width-sm\" />
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='This option controls the behavior of category filter block - how deep children of the currently browsed category you want to display? The default value is 1 - only the direct children. Use 0 for unlimited depth.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Use tax to filter price' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_usetax\" id=\"ps_layered_filter_price_usetax_on\" value=\"1\"{if \$price_use_tax} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_price_usetax_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_usetax\" id=\"ps_layered_filter_price_usetax_off\" value=\"0\"{if !\$price_use_tax} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_price_usetax_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Use rounding to filter price' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_rounding\" id=\"ps_layered_filter_price_rounding_on\" value=\"1\"{if \$price_use_rounding} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_price_rounding_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_rounding\" id=\"ps_layered_filter_price_rounding_off\" value=\"0\"{if !\$price_use_rounding} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_price_rounding_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show unavailable, out of stock last' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_show_out_of_stock_last\" id=\"ps_layered_filter_show_out_of_stock_last_on\" value=\"1\"{if \$show_out_of_stock_last} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_show_out_of_stock_last_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_show_out_of_stock_last\" id=\"ps_layered_filter_show_out_of_stock_last_off\" value=\"0\"{if !\$show_out_of_stock_last} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_show_out_of_stock_last_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t</div>

  <div class=\"form-group\">
    <label class=\"col-lg-3 control-label\">{l s='Use Jquery UI slider' d='Modules.Facetedsearch.Admin'}</label>
    <div class=\"col-lg-9\">
    <span class=\"switch prestashop-switch fixed-width-lg\">
      <input type=\"radio\" name=\"ps_use_jquery_ui_slider\" id=\"ps_use_jquery_ui_slider_on\" value=\"1\"{if \$use_jquery_ui_slider} checked=\"checked\"{/if}>
      <label for=\"ps_use_jquery_ui_slider_on\" class=\"radioCheck\">
      <i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
      </label>
      <input type=\"radio\" name=\"ps_use_jquery_ui_slider\" id=\"ps_use_jquery_ui_slider_off\" value=\"0\"{if !\$use_jquery_ui_slider} checked=\"checked\"{/if}>
      <label for=\"ps_use_jquery_ui_slider_off\" class=\"radioCheck\">
      <i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
      </label>
      <a class=\"slide-button btn\"></a>
    </span>
    </div>
    <div class=\"col-lg-9 col-lg-offset-3\">
      <div class=\"help-block\">
        {l s='Switch this off only if your theme does not use Jquery UI slider. It is recommended to keep it on when using classic theme.' d='Modules.Facetedsearch.Admin'}
      </div>
    </div>
  </div>

\t<div class=\"form-group\">
\t\t<label class=\"control-label col-lg-3\">{l s='Default filter template for new categories' d='Modules.Facetedsearch.Admin'}</label>\t\t\t\t
\t\t<div class=\"col-lg-9\">
\t\t\t<select class=\"form-control fixed-width-xxl\" name=\"ps_layered_default_category_template\" id=\"ps_layered_default_category_template\">
\t\t\t\t<option value=\"0\" {if empty(\$default_category_template)} selected=\"selected\" {/if}>{l s='None' d='Admin.Global'}</option>
\t\t\t\t{foreach \$filters_templates as \$template}
\t\t\t\t\t<option value=\"{\$template['id_layered_filter']}\" {if \$default_category_template == \$template['id_layered_filter']} selected=\"selected\" {/if}>{\$template['name']}</option>
\t\t\t\t{/foreach}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t\t<div class=\"help-block\">{l s='If you want to automatically assign a filter template to new categories, select it here.' d='Modules.Facetedsearch.Admin'}</div>
\t\t</div>
\t</div>

\t<div class=\"panel-footer\">
\t  <button type=\"submit\" class=\"btn btn-default pull-right\" name=\"submitLayeredSettings\"><i class=\"process-icon-save\"></i> {l s='Save' d='Admin.Actions'}</button>
\t</div>
  </form>
</div>

<script type=\"text/javascript\">
  {if isset(\$PS_LAYERED_INDEXED)}var PS_LAYERED_INDEXED = {\$PS_LAYERED_INDEXED};{/if}
  var token = '{\$token}';
  var id_lang = {\$id_lang};
  var base_folder = '{\$base_folder}';
  var translations = new Object();

  translations.in_progress = '{l s='(in progress)' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.url_indexation_finished = '{l s='URL indexing finished' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.attribute_indexation_finished = '{l s='Attribute indexing finished' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.url_indexation_failed = '{l s='URL indexing failed' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.attribute_indexation_failed = '{l s='Attribute indexing failed' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.price_indexation_finished = '{l s='Price indexing finished' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.price_indexation_failed = '{l s='Price indexing failed' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.price_indexation_in_progress = '{l s='(in progress, %s products price to index)' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.loading = '{l s='Loading...' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.delete_all_filters_templates = '{l s='You selected -All categories-: all existing filter templates will be deleted. Is it OK?' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.no_selected_categories = '{l s='You must select at least one category' js=1 d='Modules.Facetedsearch.Admin'}';
\ttranslations.no_selected_controllers = '{l s='You must select at least one page' js=1 d='Modules.Facetedsearch.Admin'}';
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/templates/admin/manage.tpl";
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{include file='./_partials/messages.tpl'}

<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='Indexes and caches' d='Modules.Facetedsearch.Admin'}</h3>
  <div id=\"indexing-warning\" class=\"alert alert-warning\" style=\"display: none\">
\t{l s='Indexing is in progress. Please do not leave this page' d='Modules.Facetedsearch.Admin'}
  </div>
  <div class=\"row\">
\t<p>
\t  <a class=\"ajaxcall-recurcive btn btn-default\" href=\"{\$price_indexer_url}\">{l s='Index all missing prices' d='Modules.Facetedsearch.Admin'}</a>
\t  <a class=\"ajaxcall-recurcive btn btn-default\" href=\"{\$full_price_indexer_url}\">{l s='Rebuild entire price index' d='Modules.Facetedsearch.Admin'}</a>
\t  <a class=\"ajaxcall btn btn-default\" href=\"{\$attribute_indexer_url}\">{l s='Build attributes and features indexes' d='Modules.Facetedsearch.Admin'}</a>
\t  <a class=\"ajaxcall btn btn-default\" href=\"{\$clear_cache_url}\">{l s='Clear cache' d='Modules.Facetedsearch.Admin'}</a>
\t</p>
  </div>
  <div class=\"row\">
\t<div class=\"alert alert-info\">
\t\t<p>{l s='We recommend to set regular cron tasks to manage the indexes and cache on daily/weekly basis.' d='Modules.Facetedsearch.Admin'}</p>
\t\t<br>
\t  {l s='Add missing products to price index:' d='Modules.Facetedsearch.Admin'} <strong>{\$price_indexer_url}</strong>
\t  <br>
\t\t{l s='Rebuild price index:' d='Modules.Facetedsearch.Admin'} <strong>{\$full_price_indexer_url}</strong>
\t  <br>
\t\t{l s='Rebuild attribute index:' d='Modules.Facetedsearch.Admin'} <strong>{\$attribute_indexer_url}</strong>
\t\t<br>
\t\t{l s='Flush block cache:' d='Modules.Facetedsearch.Admin'} <strong>{\$clear_cache_url}</strong>
\t\t<br>
\t\t<br>
\t\t<p>{l s='A nightly rebuild is recommended.' d='Modules.Facetedsearch.Admin'}</p>
\t</div>
  </div>
</div>
<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='Filters templates' d='Modules.Facetedsearch.Admin'}<span class=\"badge\">{\$filters_templates|count}</span></h3>
  {if \$filters_templates|count > 0}
\t<div class=\"row\">
\t  <table class=\"table\">
\t\t<thead>
\t\t  <tr>
\t\t\t<th class=\"fixed-width-xs center\"><span class=\"title_box\">{l s='ID' d='Admin.Global'}</span></th>
\t\t\t<th><span class=\"title_box text-left\">{l s='Name' d='Admin.Global'}</span></th>
\t\t\t<th><span class=\"title_box\">{l s='Pages' d='Admin.Global'}</span></th>
\t\t\t<th class=\"fixed-width-sm center\"><span class=\"title_box\">{l s='Categories' d='Admin.Global'}</span></th>
\t\t\t<th class=\"fixed-width-lg\"><span class=\"title_box\">{l s='Created on' d='Modules.Facetedsearch.Admin'}</span></th>
\t\t\t<th class=\"fixed-width-sm\"><span class=\"title_box text-right\">{l s='Actions' d='Modules.Facetedsearch.Admin'}</span></th>
\t\t  </tr>
\t\t</thead>
\t\t<tbody>
\t\t  {foreach \$filters_templates as \$template}
\t\t\t<tr>
\t\t\t  <td class=\"center\">{\$template['id_layered_filter']}</td>
\t\t\t  <td class=\"text-left\">{\$template['name']}</td>
\t\t\t  <td>{\$template['controllers']}</td>
\t\t\t  <td class=\"center\">{\$template['n_categories']}</td>
\t\t\t  <td>{\$template['date_add']}</td>
\t\t\t  <td>
\t\t\t\t{if empty(\$limit_warning)}
\t\t\t\t  <div class=\"btn-group-action\">
\t\t\t\t\t<div class=\"btn-group pull-right\">
\t\t\t\t\t  <a href=\"{\$current_url}&amp;edit_filters_template=1&amp;id_layered_filter={(int)\$template['id_layered_filter']}\" class=\"btn btn-default\">
\t\t\t\t\t\t<i class=\"icon-pencil\"></i> {l s='Edit' d='Admin.Actions'}
\t\t\t\t\t  </a>
\t\t\t\t\t  <button class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<span class=\"caret\"></span>&nbsp;
\t\t\t\t\t  </button>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t  <a href=\"{\$current_url}&amp;deleteFilterTemplate=1&amp;id_layered_filter={(int)\$template['id_layered_filter']}\"
\t\t\t\t\t\t     onclick=\"return confirm('{l s='Do you really want to delete this filter template?' d='Modules.Facetedsearch.Admin'}');\">
\t\t\t\t\t\t\t<i class=\"icon-trash\"></i> {l s='Delete' d='Admin.Actions'}
\t\t\t\t\t\t  </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t  </ul>
\t\t\t\t\t</div>
\t\t\t\t  </div>
\t\t\t\t{/if}
\t\t\t  </td>
\t\t\t</tr>
\t\t  {/foreach}
\t\t</tbody>
\t  </table>
\t  <div class=\"clearfix\">&nbsp;</div>
\t</div>
  {else}
\t<div class=\"row alert alert-warning\">{l s='No filter template found.' d='Modules.Facetedsearch.Admin'}</div>
  {/if}
  {if empty(\$limit_warning)}
\t<div class=\"panel-footer\">
\t  <a class=\"btn btn-default pull-right\" href=\"{\$current_url}&amp;add_new_filters_template=1\"><i class=\"process-icon-plus\"></i> {l s='Add new template' d='Modules.Facetedsearch.Admin'}</a>
\t</div>
  {/if}
</div>
<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='Configuration' d='Admin.Global'}</h3>
  <form action=\"{\$current_url}\" method=\"post\" class=\"form-horizontal\">
\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Enable cache system' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_cache_enabled\" id=\"ps_layered_cache_enabled_on\" value=\"1\"{if \$cache_enabled} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_cache_enabled_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_cache_enabled\" id=\"ps_layered_cache_enabled_off\" value=\"0\"{if !\$cache_enabled} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_cache_enabled_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='This option caches filtering blocks, so the module does not have to query for matching products all the time. The cache is invalidated on every modification on your store. If you encounter some incosistencies, disable this cache or make sure to flush it if needed.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show the number of matching products' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_show_qties\" id=\"ps_layered_show_qties_on\" value=\"1\"{if \$show_quantities} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_show_qties_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_show_qties\" id=\"ps_layered_show_qties_off\" value=\"0\"{if !\$show_quantities} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_show_qties_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='Enable or disable display of matching products after filters. Disabling this won\\'t bring any performance benefit, because matching products need to be calculated anyway.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show products from subcategories' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_full_tree\" id=\"ps_layered_full_tree_on\" value=\"1\"{if \$full_tree} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_full_tree_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_full_tree\" id=\"ps_layered_full_tree_off\" value=\"0\"{if !\$full_tree} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_full_tree_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='Enable this, if you want to display products from subcategories, even if they are not specifically assigned to the currently browsed category.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show products only from default category' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_by_default_category\" id=\"ps_layered_filter_by_default_category_on\" value=\"1\"{if \$filter_by_default_category} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_by_default_category_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_by_default_category\" id=\"ps_layered_filter_by_default_category_off\" value=\"0\"{if !\$filter_by_default_category} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_by_default_category_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t  <div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='Works only if \"Show products from subcategories\" is off.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Category filter depth' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<input type=\"text\" name=\"ps_layered_filter_category_depth\" value=\"{if \$category_depth !== false}{\$category_depth}{else}1{/if}\" class=\"fixed-width-sm\" />
\t  </div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t<div class=\"help-block\">
\t\t  {l s='This option controls the behavior of category filter block - how deep children of the currently browsed category you want to display? The default value is 1 - only the direct children. Use 0 for unlimited depth.' d='Modules.Facetedsearch.Admin'}
\t\t</div>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Use tax to filter price' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_usetax\" id=\"ps_layered_filter_price_usetax_on\" value=\"1\"{if \$price_use_tax} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_price_usetax_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_usetax\" id=\"ps_layered_filter_price_usetax_off\" value=\"0\"{if !\$price_use_tax} checked=\"checked\"{/if}>
\t\t  <label for=\"ps_layered_filter_price_usetax_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Use rounding to filter price' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_rounding\" id=\"ps_layered_filter_price_rounding_on\" value=\"1\"{if \$price_use_rounding} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_price_rounding_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_price_rounding\" id=\"ps_layered_filter_price_rounding_off\" value=\"0\"{if !\$price_use_rounding} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_price_rounding_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t</div>

\t<div class=\"form-group\">
\t  <label class=\"col-lg-3 control-label\">{l s='Show unavailable, out of stock last' d='Modules.Facetedsearch.Admin'}</label>
\t  <div class=\"col-lg-9\">
\t\t<span class=\"switch prestashop-switch fixed-width-lg\">
\t\t  <input type=\"radio\" name=\"ps_layered_filter_show_out_of_stock_last\" id=\"ps_layered_filter_show_out_of_stock_last_on\" value=\"1\"{if \$show_out_of_stock_last} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_show_out_of_stock_last_on\" class=\"radioCheck\">
\t\t\t<i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
\t\t  </label>
\t\t  <input type=\"radio\" name=\"ps_layered_filter_show_out_of_stock_last\" id=\"ps_layered_filter_show_out_of_stock_last_off\" value=\"0\"{if !\$show_out_of_stock_last} checked=\"checked\"{/if}/>
\t\t  <label for=\"ps_layered_filter_show_out_of_stock_last_off\" class=\"radioCheck\">
\t\t\t<i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
\t\t  </label>
\t\t  <a class=\"slide-button btn\"></a>
\t\t</span>
\t  </div>
\t</div>

  <div class=\"form-group\">
    <label class=\"col-lg-3 control-label\">{l s='Use Jquery UI slider' d='Modules.Facetedsearch.Admin'}</label>
    <div class=\"col-lg-9\">
    <span class=\"switch prestashop-switch fixed-width-lg\">
      <input type=\"radio\" name=\"ps_use_jquery_ui_slider\" id=\"ps_use_jquery_ui_slider_on\" value=\"1\"{if \$use_jquery_ui_slider} checked=\"checked\"{/if}>
      <label for=\"ps_use_jquery_ui_slider_on\" class=\"radioCheck\">
      <i class=\"color_success\"></i> {l s='Yes' d='Admin.Global'}
      </label>
      <input type=\"radio\" name=\"ps_use_jquery_ui_slider\" id=\"ps_use_jquery_ui_slider_off\" value=\"0\"{if !\$use_jquery_ui_slider} checked=\"checked\"{/if}>
      <label for=\"ps_use_jquery_ui_slider_off\" class=\"radioCheck\">
      <i class=\"color_danger\"></i> {l s='No' d='Admin.Global'}
      </label>
      <a class=\"slide-button btn\"></a>
    </span>
    </div>
    <div class=\"col-lg-9 col-lg-offset-3\">
      <div class=\"help-block\">
        {l s='Switch this off only if your theme does not use Jquery UI slider. It is recommended to keep it on when using classic theme.' d='Modules.Facetedsearch.Admin'}
      </div>
    </div>
  </div>

\t<div class=\"form-group\">
\t\t<label class=\"control-label col-lg-3\">{l s='Default filter template for new categories' d='Modules.Facetedsearch.Admin'}</label>\t\t\t\t
\t\t<div class=\"col-lg-9\">
\t\t\t<select class=\"form-control fixed-width-xxl\" name=\"ps_layered_default_category_template\" id=\"ps_layered_default_category_template\">
\t\t\t\t<option value=\"0\" {if empty(\$default_category_template)} selected=\"selected\" {/if}>{l s='None' d='Admin.Global'}</option>
\t\t\t\t{foreach \$filters_templates as \$template}
\t\t\t\t\t<option value=\"{\$template['id_layered_filter']}\" {if \$default_category_template == \$template['id_layered_filter']} selected=\"selected\" {/if}>{\$template['name']}</option>
\t\t\t\t{/foreach}
\t\t\t</select>
\t\t</div>
\t\t<div class=\"col-lg-9 col-lg-offset-3\">
\t\t\t<div class=\"help-block\">{l s='If you want to automatically assign a filter template to new categories, select it here.' d='Modules.Facetedsearch.Admin'}</div>
\t\t</div>
\t</div>

\t<div class=\"panel-footer\">
\t  <button type=\"submit\" class=\"btn btn-default pull-right\" name=\"submitLayeredSettings\"><i class=\"process-icon-save\"></i> {l s='Save' d='Admin.Actions'}</button>
\t</div>
  </form>
</div>

<script type=\"text/javascript\">
  {if isset(\$PS_LAYERED_INDEXED)}var PS_LAYERED_INDEXED = {\$PS_LAYERED_INDEXED};{/if}
  var token = '{\$token}';
  var id_lang = {\$id_lang};
  var base_folder = '{\$base_folder}';
  var translations = new Object();

  translations.in_progress = '{l s='(in progress)' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.url_indexation_finished = '{l s='URL indexing finished' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.attribute_indexation_finished = '{l s='Attribute indexing finished' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.url_indexation_failed = '{l s='URL indexing failed' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.attribute_indexation_failed = '{l s='Attribute indexing failed' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.price_indexation_finished = '{l s='Price indexing finished' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.price_indexation_failed = '{l s='Price indexing failed' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.price_indexation_in_progress = '{l s='(in progress, %s products price to index)' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.loading = '{l s='Loading...' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.delete_all_filters_templates = '{l s='You selected -All categories-: all existing filter templates will be deleted. Is it OK?' js=1 d='Modules.Facetedsearch.Admin'}';
  translations.no_selected_categories = '{l s='You must select at least one category' js=1 d='Modules.Facetedsearch.Admin'}';
\ttranslations.no_selected_controllers = '{l s='You must select at least one page' js=1 d='Modules.Facetedsearch.Admin'}';
</script>
", "@Modules/ps_facetedsearch/views/templates/admin/manage.tpl", "/var/www/html/modules/ps_facetedsearch/views/templates/admin/manage.tpl");
    }
}
