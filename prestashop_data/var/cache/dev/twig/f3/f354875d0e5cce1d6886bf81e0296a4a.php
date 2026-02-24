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

/* @Modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl */
class __TwigTemplate_105d508b6fb00053593fab7af267bbed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl"));

        // line 1
        echo "{**
 * 2007-2020 PrestaShop SA and Contributors
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{extends file=\"helpers/form/form.tpl\"}

{block name=\"script\"}
\$(document).ready(function(){
\$('#menuOrderUp').click(function(e){
\te.preventDefault();
    move(true);
});
\$('#menuOrderDown').click(function(e){
    e.preventDefault();
    move();
});
\$(\"#items\").closest('form').on('submit', function(e) {
\t\$(\"#items option\").prop('selected', true);
});
\$(\"#addItem\").click(add);
\$(\"#availableItems\").dblclick(add);
\$(\"#removeItem\").click(remove);
\$(\"#items\").dblclick(remove);
function add()
{
\t\$(\"#availableItems option:selected\").each(function(i){
\t\tvar val = \$(this).val();
\t\tvar text = \$(this).text();
\t\ttext = text.replace(/(^\\s*)|(\\s*\$)/gi,\"\");
\t\tif (val == \"PRODUCT\")
\t\t{
\t\t\tval = prompt('{l s=\"Indicate the ID number for the product\" d='Modules.Mainmenu.Admin' js=1}');
\t\t\tif (val == null || val == \"\" || isNaN(val))
\t\t\t\treturn;
\t\t\ttext = '{l s=\"Product ID #\" d='Modules.Mainmenu.Admin' js=1}'+val;
\t\t\tval = \"PRD\"+val;
\t\t}
\t\t\$(\"#items\").append('<option value=\"'+val+'\" selected=\"selected\">'+text+'</option>');
\t});
\tserialize();
\treturn false;
}
function remove()
{
\t\$(\"#items option:selected\").each(function(i){
\t\t\$(this).remove();
\t});
\tserialize();
\treturn false;
}
function serialize()
{
\tvar options = \"\";
\t\$(\"#items option\").each(function(i){
\t\toptions += \$(this).val()+\",\";
\t});
\t\$(\"#itemsInput\").val(options.substr(0, options.length - 1));
}
function move(up)
{
        var tomove = \$('#items option:selected');
        if (tomove.length >1)
        {
                alert('{l s=\"Please select just one item\" d='Modules.Mainmenu.Admin'}');
                return false;
        }
        if (up)
                tomove.prev().insertAfter(tomove);
        else
                tomove.next().insertBefore(tomove);
        serialize();
        return false;
}
});
{/block}

{block name=\"input\"}
    {if \$input.type == 'link_choice'}
\t    <div class=\"row\">
\t    \t<div class=\"col-sm-2\">
\t    \t\t<h4 style=\"margin-top:5px;\">{l s='Change position' d='Modules.Mainmenu.Admin'}</h4>
                <a href=\"#\" id=\"menuOrderUp\" class=\"btn btn-default\" style=\"font-size:20px;display:block;\"><i class=\"icon-chevron-up\"></i></a><br/>
                <a href=\"#\" id=\"menuOrderDown\" class=\"btn btn-default\" style=\"font-size:20px;display:block;\"><i class=\"icon-chevron-down\"></i></a><br/>
\t    \t</div>
\t    \t<div class=\"col-sm-5\">
\t    \t\t<h4 style=\"margin-top:5px;\">{l s='Selected items' d='Modules.Mainmenu.Admin'}</h4>
\t    \t\t{\$selected_links}
\t    \t</div>
\t    \t<div class=\"col-sm-5\">
\t    \t\t<h4 style=\"margin-top:5px;\">{l s='Available items' d='Modules.Mainmenu.Admin'}</h4>
\t    \t\t{\$choices}
\t    \t</div>

\t    </div>
\t    <br/>
\t    <div class=\"row\">
\t    \t<div class=\"col-sm-2\"></div>
\t    \t<div class=\"col-sm-5\"><a href=\"#\" id=\"removeItem\" class=\"btn btn-default\"><i class=\"icon-arrow-right\"></i> {l s='Remove' d='Modules.Mainmenu.Admin'}</a></div>
\t\t<div class=\"col-sm-5\"><a href=\"#\" id=\"addItem\" class=\"btn btn-default\"><i class=\"icon-arrow-left\"></i> {l s='Add' d='Admin.Actions'}</a></div>
\t    </div>
\t{else}
\t\t{\$smarty.block.parent}
    {/if}
{/block}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{**
 * 2007-2020 PrestaShop SA and Contributors
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

{extends file=\"helpers/form/form.tpl\"}

{block name=\"script\"}
\$(document).ready(function(){
\$('#menuOrderUp').click(function(e){
\te.preventDefault();
    move(true);
});
\$('#menuOrderDown').click(function(e){
    e.preventDefault();
    move();
});
\$(\"#items\").closest('form').on('submit', function(e) {
\t\$(\"#items option\").prop('selected', true);
});
\$(\"#addItem\").click(add);
\$(\"#availableItems\").dblclick(add);
\$(\"#removeItem\").click(remove);
\$(\"#items\").dblclick(remove);
function add()
{
\t\$(\"#availableItems option:selected\").each(function(i){
\t\tvar val = \$(this).val();
\t\tvar text = \$(this).text();
\t\ttext = text.replace(/(^\\s*)|(\\s*\$)/gi,\"\");
\t\tif (val == \"PRODUCT\")
\t\t{
\t\t\tval = prompt('{l s=\"Indicate the ID number for the product\" d='Modules.Mainmenu.Admin' js=1}');
\t\t\tif (val == null || val == \"\" || isNaN(val))
\t\t\t\treturn;
\t\t\ttext = '{l s=\"Product ID #\" d='Modules.Mainmenu.Admin' js=1}'+val;
\t\t\tval = \"PRD\"+val;
\t\t}
\t\t\$(\"#items\").append('<option value=\"'+val+'\" selected=\"selected\">'+text+'</option>');
\t});
\tserialize();
\treturn false;
}
function remove()
{
\t\$(\"#items option:selected\").each(function(i){
\t\t\$(this).remove();
\t});
\tserialize();
\treturn false;
}
function serialize()
{
\tvar options = \"\";
\t\$(\"#items option\").each(function(i){
\t\toptions += \$(this).val()+\",\";
\t});
\t\$(\"#itemsInput\").val(options.substr(0, options.length - 1));
}
function move(up)
{
        var tomove = \$('#items option:selected');
        if (tomove.length >1)
        {
                alert('{l s=\"Please select just one item\" d='Modules.Mainmenu.Admin'}');
                return false;
        }
        if (up)
                tomove.prev().insertAfter(tomove);
        else
                tomove.next().insertBefore(tomove);
        serialize();
        return false;
}
});
{/block}

{block name=\"input\"}
    {if \$input.type == 'link_choice'}
\t    <div class=\"row\">
\t    \t<div class=\"col-sm-2\">
\t    \t\t<h4 style=\"margin-top:5px;\">{l s='Change position' d='Modules.Mainmenu.Admin'}</h4>
                <a href=\"#\" id=\"menuOrderUp\" class=\"btn btn-default\" style=\"font-size:20px;display:block;\"><i class=\"icon-chevron-up\"></i></a><br/>
                <a href=\"#\" id=\"menuOrderDown\" class=\"btn btn-default\" style=\"font-size:20px;display:block;\"><i class=\"icon-chevron-down\"></i></a><br/>
\t    \t</div>
\t    \t<div class=\"col-sm-5\">
\t    \t\t<h4 style=\"margin-top:5px;\">{l s='Selected items' d='Modules.Mainmenu.Admin'}</h4>
\t    \t\t{\$selected_links}
\t    \t</div>
\t    \t<div class=\"col-sm-5\">
\t    \t\t<h4 style=\"margin-top:5px;\">{l s='Available items' d='Modules.Mainmenu.Admin'}</h4>
\t    \t\t{\$choices}
\t    \t</div>

\t    </div>
\t    <br/>
\t    <div class=\"row\">
\t    \t<div class=\"col-sm-2\"></div>
\t    \t<div class=\"col-sm-5\"><a href=\"#\" id=\"removeItem\" class=\"btn btn-default\"><i class=\"icon-arrow-right\"></i> {l s='Remove' d='Modules.Mainmenu.Admin'}</a></div>
\t\t<div class=\"col-sm-5\"><a href=\"#\" id=\"addItem\" class=\"btn btn-default\"><i class=\"icon-arrow-left\"></i> {l s='Add' d='Admin.Actions'}</a></div>
\t    </div>
\t{else}
\t\t{\$smarty.block.parent}
    {/if}
{/block}
", "@Modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl", "/var/www/html/modules/ps_mainmenu/views/templates/admin/_configure/helpers/form/form.tpl");
    }
}
