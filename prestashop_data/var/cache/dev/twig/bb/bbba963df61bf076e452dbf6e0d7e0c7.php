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

/* @Modules/ps_emailalerts/views/templates/admin/_configure/helpers/form/form.tpl */
class __TwigTemplate_02b0b65bbe0f4709923ebc162df42411 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/views/templates/admin/_configure/helpers/form/form.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailalerts/views/templates/admin/_configure/helpers/form/form.tpl"));

        // line 1
        echo "{**
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
 *}

{extends file=\"helpers/form/form.tpl\"}

{block name=\"input\"}
    {if \$input.type == 'switch' && \$smarty.const._PS_VERSION_|@addcslashes:'\\'' < '1.6'}
        {foreach \$input.values as \$value}
          <input type=\"radio\" name=\"{\$input.name|escape:'html':'UTF-8'}\" id=\"{\$value.id|intval}\"
                 value=\"{\$value.value|escape:'html':'UTF-8'}\"
                 {if \$fields_value[\$input.name] == \$value.value}checked=\"checked\"{/if}
                  {if isset(\$input.disabled) && \$input.disabled}disabled=\"disabled\"{/if} />
          <label class=\"t\" for=\"{\$value.id|intval}\">
              {if isset(\$input.is_bool) && \$input.is_bool == true}
                  {if \$value.value == 1}
                    <img src=\"../img/admin/enabled.gif\" alt=\"{\$value.label}\"
                         title=\"{\$value.label|escape:'html':'UTF-8'}\"/>
                  {else}
                    <img src=\"../img/admin/disabled.gif\" alt=\"{\$value.label}\"
                         title=\"{\$value.label|escape:'html':'UTF-8'}\"/>
                  {/if}
              {else}
                  {\$value.label|escape:'html':'UTF-8'}
              {/if}
          </label>
          {if isset(\$input.br) && \$input.br}<br/>{/if}
          {if isset(\$value.p) && \$value.p}<p>{\$value.p}</p>{/if}
        {/foreach}
    {elseif \$input.type == 'emailalerts_tags'}
      {literal}
        <script type=\"text/javascript\">
          \$().ready(function () {
            var input_id = '{/literal}{if isset(\$input.id)}{\$input.id}{else}{\$input.name}{/if}{literal}';
            \$('#' + input_id).tagify({delimiters: [13, 44], addTagPrompt: '{/literal}{l s='Add email' mod='ps_emailalerts' js=1}{literal}'});
            \$({/literal}'#{\$table}{literal}_form').submit(function () {
              \$(this).find('#' + input_id).val(\$('#' + input_id).tagify('serialize'));
            });
          });
        </script>
      {/literal}
      {assign var='value_text' value=\$fields_value[\$input.name]}
      <input type=\"text\"
           name=\"{\$input.name}\"
           id=\"{if isset(\$input.id)}{\$input.id}{else}{\$input.name}{/if}\"
           value=\"{if isset(\$input.string_format) && \$input.string_format}{\$value_text|string_format:\$input.string_format|escape:'html':'UTF-8'}{else}{\$value_text|escape:'html':'UTF-8'}{/if}\"
           class=\"{if isset(\$input.class)}{\$input.class}{/if} tagify\" autocomplete=\"off\"
            {if isset(\$input.placeholder) && \$input.placeholder } placeholder=\"{\$input.placeholder}\"{/if}
      />
    {else}
        {\$smarty.block.parent}
    {/if}
{/block}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailalerts/views/templates/admin/_configure/helpers/form/form.tpl";
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
 *}

{extends file=\"helpers/form/form.tpl\"}

{block name=\"input\"}
    {if \$input.type == 'switch' && \$smarty.const._PS_VERSION_|@addcslashes:'\\'' < '1.6'}
        {foreach \$input.values as \$value}
          <input type=\"radio\" name=\"{\$input.name|escape:'html':'UTF-8'}\" id=\"{\$value.id|intval}\"
                 value=\"{\$value.value|escape:'html':'UTF-8'}\"
                 {if \$fields_value[\$input.name] == \$value.value}checked=\"checked\"{/if}
                  {if isset(\$input.disabled) && \$input.disabled}disabled=\"disabled\"{/if} />
          <label class=\"t\" for=\"{\$value.id|intval}\">
              {if isset(\$input.is_bool) && \$input.is_bool == true}
                  {if \$value.value == 1}
                    <img src=\"../img/admin/enabled.gif\" alt=\"{\$value.label}\"
                         title=\"{\$value.label|escape:'html':'UTF-8'}\"/>
                  {else}
                    <img src=\"../img/admin/disabled.gif\" alt=\"{\$value.label}\"
                         title=\"{\$value.label|escape:'html':'UTF-8'}\"/>
                  {/if}
              {else}
                  {\$value.label|escape:'html':'UTF-8'}
              {/if}
          </label>
          {if isset(\$input.br) && \$input.br}<br/>{/if}
          {if isset(\$value.p) && \$value.p}<p>{\$value.p}</p>{/if}
        {/foreach}
    {elseif \$input.type == 'emailalerts_tags'}
      {literal}
        <script type=\"text/javascript\">
          \$().ready(function () {
            var input_id = '{/literal}{if isset(\$input.id)}{\$input.id}{else}{\$input.name}{/if}{literal}';
            \$('#' + input_id).tagify({delimiters: [13, 44], addTagPrompt: '{/literal}{l s='Add email' mod='ps_emailalerts' js=1}{literal}'});
            \$({/literal}'#{\$table}{literal}_form').submit(function () {
              \$(this).find('#' + input_id).val(\$('#' + input_id).tagify('serialize'));
            });
          });
        </script>
      {/literal}
      {assign var='value_text' value=\$fields_value[\$input.name]}
      <input type=\"text\"
           name=\"{\$input.name}\"
           id=\"{if isset(\$input.id)}{\$input.id}{else}{\$input.name}{/if}\"
           value=\"{if isset(\$input.string_format) && \$input.string_format}{\$value_text|string_format:\$input.string_format|escape:'html':'UTF-8'}{else}{\$value_text|escape:'html':'UTF-8'}{/if}\"
           class=\"{if isset(\$input.class)}{\$input.class}{/if} tagify\" autocomplete=\"off\"
            {if isset(\$input.placeholder) && \$input.placeholder } placeholder=\"{\$input.placeholder}\"{/if}
      />
    {else}
        {\$smarty.block.parent}
    {/if}
{/block}
", "@Modules/ps_emailalerts/views/templates/admin/_configure/helpers/form/form.tpl", "/var/www/html/modules/ps_emailalerts/views/templates/admin/_configure/helpers/form/form.tpl");
    }
}
