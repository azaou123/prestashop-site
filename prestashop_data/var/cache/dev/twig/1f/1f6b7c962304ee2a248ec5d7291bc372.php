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

/* @Modules/ps_facetedsearch/views/templates/admin/view.tpl */
class __TwigTemplate_c666107716492d8d26b317c9da4ed155 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/admin/view.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/admin/view.tpl"));

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
{include file='./_functions/show_limit.tpl'}

<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='New filters template' d='Modules.Facetedsearch.Admin'}</h3>

  <form action=\"{\$current_url}\" method=\"post\" class=\"form-horizontal\" onsubmit=\"return checkForm();\">
    <input type=\"hidden\" name=\"id_layered_filter\" id=\"id_layered_filter\" value=\"{\$id_layered_filter}\" />

    {include file='./_partials/header.tpl'}
    {include file='./_partials/controllers.tpl'}
    {include file='./_partials/categories-tree.tpl'}
    {include file='./_partials/shops.tpl'}

    <div class=\"form-group\">
      <label class=\"control-label col-lg-3\">
        <span class=\"badge\" id=\"selected_filters\">0</span>
        <span class=\"label-tooltip\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"{l s='You can drag and drop filters to adjust position' d='Modules.Facetedsearch.Admin'}\">{l s='Filters:' d='Modules.Facetedsearch.Admin'}</span>
      </label>
      <div class=\"col-lg-9\">
        <section class=\"filter_panel\">
          <header class=\"clearfix\">
            <span class=\"badge pull-right\">
              {l
                s='Total filters: %s'
                sprintf=[\$total_filters]
                d='Modules.Facetedsearch.Admin'
              }
            </span>
          </header>
          <section class=\"filter_list\">
            <ul class=\"list-unstyled sortable\" id=\"list-filters\">

              {foreach from=\$default_filters item=filter key=filterId}
                <li class=\"filter_list_item row\" draggable=\"true\">
                  <div class=\"col-lg-2\">
                    <label class=\"switch-light prestashop-switch fixed-width-lg\">
                      <input name=\"{\$filterId}\" id=\"{\$filterId}\" type=\"checkbox\" />
                      <span>
                        <span>{l s='Yes' d='Admin.Global'}</span>
                        <span>{l s='No' d='Admin.Global'}</span>
                      </span>
                      <a class=\"slide-button btn\"></a>
                    </label>
                  </div>

                  <div class=\"col-lg-4\">
                      <h4>{l s=\$filter['label'] d='Modules.Facetedsearch.Admin'}</h4>
                  </div>

                  <div class=\"col-lg-3\">
                    <label class=\"control-label col-lg-6\">{l s='Filter style:' d='Modules.Facetedsearch.Admin'}</label>
                    {if !empty(\$filter['slider'])}
                      <p class=\"form-control-static\">{l s='List of ranges' d='Modules.Facetedsearch.Admin'}</p>
                    {else}
                      <div class=\"col-lg-6\">
                        <select name=\"{\$filterId}_filter_type\">
                          <option value=\"0\">{l s='Checkbox' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"1\">{l s='Radio button' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"2\">{l s='Drop-down list' d='Modules.Facetedsearch.Admin'}</option>
                        </select>
                      </div>
                    {/if}
                  </div>
                  <div class=\"col-lg-3\">
                    {if empty(\$filter['slider'])}
                      <label class=\"control-label col-lg-6\">{l s='Filter result limit:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        {call get_limit_select element=\$filterId}
                      </div>
                    {/if}
                  </div>
                </li>
              {/foreach}

              {if \$attribute_groups|count > 0}
                {foreach \$attribute_groups as \$attribute_group}
                  <li class=\"filter_list_item row\" draggable=\"true\">
                    <div class=\"col-lg-2\">
                      <label class=\"switch-light prestashop-switch fixed-width-lg\">
                        <input name=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}\" id=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}\" type=\"checkbox\" />
                        <span>
                          <span>{l s='Yes' d='Admin.Global'}</span>
                          <span>{l s='No' d='Admin.Global'}</span>
                        </span>
                        <a class=\"slide-button btn\"></a>
                      </label>
                    </div>
                    <div class=\"col-lg-4\">
                      <span class=\"module_name\">
                        {if \$attribute_group['n'] > 1}
                          {l
                            s='Attribute group: %name% (%count% attributes)'
                            sprintf=[
                              '%name%' => \$attribute_group['name'],
                              '%count%' => \$attribute_group['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {else}
                          {l
                            s='Attribute group: %name% (%count% attribute)'
                            sprintf=[
                              '%name%' => \$attribute_group['name'],
                              '%count%' => \$attribute_group['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {/if}
                        {if \$attribute_group['is_color_group']}
                          <img src=\"../img/admin/color_swatch.png\" alt=\"\" title=\"{l s='This group will allow user to select a color' d='Modules.Facetedsearch.Admin'}\" />
                        {/if}
                      </span>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter result limit:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        {call get_limit_select element=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}\"}
                      </div>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter style:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        <select name=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}_filter_type\">
                          <option value=\"0\">{l s='Checkbox' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"1\">{l s='Radio button' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"2\">{l s='Drop-down list' d='Modules.Facetedsearch.Admin'}</option>
                        </select>
                      </div>
                    </div>
                  </li>
                {/foreach}
              {/if}

              {if \$features|count > 0}
                {foreach \$features as \$feature}
                  <li class=\"filter_list_item row\" draggable=\"true\">
                    <div class=\"col-lg-2\">
                      <label class=\"switch-light prestashop-switch fixed-width-lg\">
                        <input name=\"layered_selection_feat_{(int)\$feature['id_feature']}\" id=\"layered_selection_feat_{(int)\$feature['id_feature']}\" type=\"checkbox\" />
                        <span>
                          <span>{l s='Yes' d='Admin.Global'}</span>
                          <span>{l s='No' d='Admin.Global'}</span>
                        </span>
                        <a class=\"slide-button btn\"></a>
                      </label>
                    </div>
                    <div class=\"col-lg-4\">
                      <span class=\"module_name\">
                        {if \$feature['n'] > 1}
                          {l
                            s='Feature: %name% (%count% values)'
                            sprintf=[
                              '%name%' => \$feature['name'],
                              '%count%' => \$feature['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {else}
                          {l
                            s='Feature: %name% (%count% value)'
                            sprintf=[
                              '%name%' => \$feature['name'],
                              '%count%' => \$feature['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {/if}
                      </span>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter result limit:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        {call get_limit_select element=\"layered_selection_feat_{(int)\$feature['id_feature']}\"}
                      </div>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter style:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        <select name=\"layered_selection_feat_{(int)\$feature['id_feature']}_filter_type\">
                          <option value=\"0\">{l s='Checkbox' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"1\">{l s='Radio button' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"2\">{l s='Drop-down list' d='Modules.Facetedsearch.Admin'}</option>
                        </select>
                      </div>
                    </div>
                  </li>
                {/foreach}
              {/if}
            </ul>
          </section>
        </section>
      </div>
    </div>

    {include file='./_partials/footer.tpl'}
  </form>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/templates/admin/view.tpl";
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
{include file='./_functions/show_limit.tpl'}

<div class=\"panel\">
  <h3><i class=\"icon-cogs\"></i> {l s='New filters template' d='Modules.Facetedsearch.Admin'}</h3>

  <form action=\"{\$current_url}\" method=\"post\" class=\"form-horizontal\" onsubmit=\"return checkForm();\">
    <input type=\"hidden\" name=\"id_layered_filter\" id=\"id_layered_filter\" value=\"{\$id_layered_filter}\" />

    {include file='./_partials/header.tpl'}
    {include file='./_partials/controllers.tpl'}
    {include file='./_partials/categories-tree.tpl'}
    {include file='./_partials/shops.tpl'}

    <div class=\"form-group\">
      <label class=\"control-label col-lg-3\">
        <span class=\"badge\" id=\"selected_filters\">0</span>
        <span class=\"label-tooltip\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"{l s='You can drag and drop filters to adjust position' d='Modules.Facetedsearch.Admin'}\">{l s='Filters:' d='Modules.Facetedsearch.Admin'}</span>
      </label>
      <div class=\"col-lg-9\">
        <section class=\"filter_panel\">
          <header class=\"clearfix\">
            <span class=\"badge pull-right\">
              {l
                s='Total filters: %s'
                sprintf=[\$total_filters]
                d='Modules.Facetedsearch.Admin'
              }
            </span>
          </header>
          <section class=\"filter_list\">
            <ul class=\"list-unstyled sortable\" id=\"list-filters\">

              {foreach from=\$default_filters item=filter key=filterId}
                <li class=\"filter_list_item row\" draggable=\"true\">
                  <div class=\"col-lg-2\">
                    <label class=\"switch-light prestashop-switch fixed-width-lg\">
                      <input name=\"{\$filterId}\" id=\"{\$filterId}\" type=\"checkbox\" />
                      <span>
                        <span>{l s='Yes' d='Admin.Global'}</span>
                        <span>{l s='No' d='Admin.Global'}</span>
                      </span>
                      <a class=\"slide-button btn\"></a>
                    </label>
                  </div>

                  <div class=\"col-lg-4\">
                      <h4>{l s=\$filter['label'] d='Modules.Facetedsearch.Admin'}</h4>
                  </div>

                  <div class=\"col-lg-3\">
                    <label class=\"control-label col-lg-6\">{l s='Filter style:' d='Modules.Facetedsearch.Admin'}</label>
                    {if !empty(\$filter['slider'])}
                      <p class=\"form-control-static\">{l s='List of ranges' d='Modules.Facetedsearch.Admin'}</p>
                    {else}
                      <div class=\"col-lg-6\">
                        <select name=\"{\$filterId}_filter_type\">
                          <option value=\"0\">{l s='Checkbox' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"1\">{l s='Radio button' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"2\">{l s='Drop-down list' d='Modules.Facetedsearch.Admin'}</option>
                        </select>
                      </div>
                    {/if}
                  </div>
                  <div class=\"col-lg-3\">
                    {if empty(\$filter['slider'])}
                      <label class=\"control-label col-lg-6\">{l s='Filter result limit:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        {call get_limit_select element=\$filterId}
                      </div>
                    {/if}
                  </div>
                </li>
              {/foreach}

              {if \$attribute_groups|count > 0}
                {foreach \$attribute_groups as \$attribute_group}
                  <li class=\"filter_list_item row\" draggable=\"true\">
                    <div class=\"col-lg-2\">
                      <label class=\"switch-light prestashop-switch fixed-width-lg\">
                        <input name=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}\" id=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}\" type=\"checkbox\" />
                        <span>
                          <span>{l s='Yes' d='Admin.Global'}</span>
                          <span>{l s='No' d='Admin.Global'}</span>
                        </span>
                        <a class=\"slide-button btn\"></a>
                      </label>
                    </div>
                    <div class=\"col-lg-4\">
                      <span class=\"module_name\">
                        {if \$attribute_group['n'] > 1}
                          {l
                            s='Attribute group: %name% (%count% attributes)'
                            sprintf=[
                              '%name%' => \$attribute_group['name'],
                              '%count%' => \$attribute_group['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {else}
                          {l
                            s='Attribute group: %name% (%count% attribute)'
                            sprintf=[
                              '%name%' => \$attribute_group['name'],
                              '%count%' => \$attribute_group['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {/if}
                        {if \$attribute_group['is_color_group']}
                          <img src=\"../img/admin/color_swatch.png\" alt=\"\" title=\"{l s='This group will allow user to select a color' d='Modules.Facetedsearch.Admin'}\" />
                        {/if}
                      </span>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter result limit:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        {call get_limit_select element=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}\"}
                      </div>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter style:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        <select name=\"layered_selection_ag_{(int)\$attribute_group['id_attribute_group']}_filter_type\">
                          <option value=\"0\">{l s='Checkbox' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"1\">{l s='Radio button' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"2\">{l s='Drop-down list' d='Modules.Facetedsearch.Admin'}</option>
                        </select>
                      </div>
                    </div>
                  </li>
                {/foreach}
              {/if}

              {if \$features|count > 0}
                {foreach \$features as \$feature}
                  <li class=\"filter_list_item row\" draggable=\"true\">
                    <div class=\"col-lg-2\">
                      <label class=\"switch-light prestashop-switch fixed-width-lg\">
                        <input name=\"layered_selection_feat_{(int)\$feature['id_feature']}\" id=\"layered_selection_feat_{(int)\$feature['id_feature']}\" type=\"checkbox\" />
                        <span>
                          <span>{l s='Yes' d='Admin.Global'}</span>
                          <span>{l s='No' d='Admin.Global'}</span>
                        </span>
                        <a class=\"slide-button btn\"></a>
                      </label>
                    </div>
                    <div class=\"col-lg-4\">
                      <span class=\"module_name\">
                        {if \$feature['n'] > 1}
                          {l
                            s='Feature: %name% (%count% values)'
                            sprintf=[
                              '%name%' => \$feature['name'],
                              '%count%' => \$feature['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {else}
                          {l
                            s='Feature: %name% (%count% value)'
                            sprintf=[
                              '%name%' => \$feature['name'],
                              '%count%' => \$feature['n']
                            ]
                            d='Modules.Facetedsearch.Admin'
                          }
                        {/if}
                      </span>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter result limit:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        {call get_limit_select element=\"layered_selection_feat_{(int)\$feature['id_feature']}\"}
                      </div>
                    </div>
                    <div class=\"col-lg-3 pull-right\">
                      <label class=\"control-label col-lg-6\">{l s='Filter style:' d='Modules.Facetedsearch.Admin'}</label>
                      <div class=\"col-lg-6\">
                        <select name=\"layered_selection_feat_{(int)\$feature['id_feature']}_filter_type\">
                          <option value=\"0\">{l s='Checkbox' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"1\">{l s='Radio button' d='Modules.Facetedsearch.Admin'}</option>
                          <option value=\"2\">{l s='Drop-down list' d='Modules.Facetedsearch.Admin'}</option>
                        </select>
                      </div>
                    </div>
                  </li>
                {/foreach}
              {/if}
            </ul>
          </section>
        </section>
      </div>
    </div>

    {include file='./_partials/footer.tpl'}
  </form>
</div>
", "@Modules/ps_facetedsearch/views/templates/admin/view.tpl", "/var/www/html/modules/ps_facetedsearch/views/templates/admin/view.tpl");
    }
}
