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

/* @Modules/ps_emailsubscription/views/templates/admin/newsletter_subscribe.tpl */
class __TwigTemplate_0b56f0a4fa6905c718997bfd1fef4c2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailsubscription/views/templates/admin/newsletter_subscribe.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailsubscription/views/templates/admin/newsletter_subscribe.tpl"));

        // line 1
        echo "{*
 * 2007-2020 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name=\"input_row\"}
  <div class=\"form-group\">
    {block name=\"label\"}
      <label class=\"control-label col-lg-3{if isset(\$input.required) && \$input.required} required{/if}\">
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{if isset(\$input.hint)}{\$input.hint|escape:'html':'UTF-8'}{/if}\">
            {if isset(\$input.label)}
              {\$input.label}
            {/if}
          </span>
      </label>
    {/block}
    {block name=\"field\"}
      <div class=\"col-lg-9\">
        {block name=\"input\"}
          <span class=\"switch prestashop-switch fixed-width-lg\">
            {foreach \$input.values as \$value}
              <input type=\"radio\" name=\"{\$input.name}\"{if \$value.value == 1} id=\"{\$input.name}_on\" {else} id=\"{\$input.name}_off\"{/if} value=\"{\$value.value}\"
                {if \$input.value == \$value.value} checked=\"checked\"{/if}
              >
              {strip}
                <label {if \$value.value == 1} for=\"{\$input.name}_on\"{else} for=\"{\$input.name}_off\"{/if}>
                  {if \$value.value == 1}
                    {l s='Yes' d='Admin.Global'}
                  {else}
                    {l s='No' d='Admin.Global'}
                  {/if}
                </label>
              {/strip}
            {/foreach}
            <a class=\"slide-button btn\"></a>
          </span>
        {/block}
      </div>
    {/block}
  </div>
{/block}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailsubscription/views/templates/admin/newsletter_subscribe.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{*
 * 2007-2020 PrestaShop.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name=\"input_row\"}
  <div class=\"form-group\">
    {block name=\"label\"}
      <label class=\"control-label col-lg-3{if isset(\$input.required) && \$input.required} required{/if}\">
          <span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"{if isset(\$input.hint)}{\$input.hint|escape:'html':'UTF-8'}{/if}\">
            {if isset(\$input.label)}
              {\$input.label}
            {/if}
          </span>
      </label>
    {/block}
    {block name=\"field\"}
      <div class=\"col-lg-9\">
        {block name=\"input\"}
          <span class=\"switch prestashop-switch fixed-width-lg\">
            {foreach \$input.values as \$value}
              <input type=\"radio\" name=\"{\$input.name}\"{if \$value.value == 1} id=\"{\$input.name}_on\" {else} id=\"{\$input.name}_off\"{/if} value=\"{\$value.value}\"
                {if \$input.value == \$value.value} checked=\"checked\"{/if}
              >
              {strip}
                <label {if \$value.value == 1} for=\"{\$input.name}_on\"{else} for=\"{\$input.name}_off\"{/if}>
                  {if \$value.value == 1}
                    {l s='Yes' d='Admin.Global'}
                  {else}
                    {l s='No' d='Admin.Global'}
                  {/if}
                </label>
              {/strip}
            {/foreach}
            <a class=\"slide-button btn\"></a>
          </span>
        {/block}
      </div>
    {/block}
  </div>
{/block}
", "@Modules/ps_emailsubscription/views/templates/admin/newsletter_subscribe.tpl", "/var/www/html/modules/ps_emailsubscription/views/templates/admin/newsletter_subscribe.tpl");
    }
}
