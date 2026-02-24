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

/* @Modules/ps_mainmenu/ps_mainmenu.tpl */
class __TwigTemplate_3c827353bc6d69be9fcc6803a20b54f3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mainmenu/ps_mainmenu.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mainmenu/ps_mainmenu.tpl"));

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
{assign var=_counter value=0}
{function name=\"menu\" nodes=[] depth=0 parent=null}
    {if \$nodes|count}
      <ul class=\"top-menu\"{if \$depth == 0} id=\"top-menu\"{/if} data-depth=\"{\$depth}\">
        {foreach from=\$nodes item=node}
            <li class=\"{\$node.type}{if \$node.current} current {/if}\" id=\"{\$node.page_identifier}\">
            {assign var=_counter value=\$_counter+1}
              <a
                class=\"{if \$depth >= 0}dropdown-item{/if}{if \$depth === 1} dropdown-submenu{/if}\"
                href=\"{\$node.url}\" data-depth=\"{\$depth}\"
                {if \$node.open_in_new_window} target=\"_blank\" {/if}
              >
                {if \$node.children|count}
                  {* Cannot use page identifier as we can have the same page several times *}
                  {assign var=_expand_id value=10|mt_rand:100000}
                  <span class=\"float-xs-right hidden-md-up\">
                    <span data-target=\"#top_sub_menu_{\$_expand_id}\" data-toggle=\"collapse\" class=\"navbar-toggler collapse-icons\">
                      <i class=\"material-icons add\">&#xE313;</i>
                      <i class=\"material-icons remove\">&#xE316;</i>
                    </span>
                  </span>
                {/if}
                {if \$node.image_urls|count}
                  {foreach from=\$node.image_urls item=image_url}
                    <img src=\"{\$image_url}\">
                  {/foreach}
                {/if}
                {\$node.label}
              </a>
              {if \$node.children|count}
              <div {if \$depth === 0}class=\"popover sub-menu js-sub-menu collapse\"{else}class=\"collapse\"{/if} id=\"top_sub_menu_{\$_expand_id}\">
                {menu nodes=\$node.children depth=\$node.depth parent=\$node}
              </div>
              {/if}
            </li>
        {/foreach}
      </ul>
    {/if}
{/function}

<div class=\"menu js-top-menu position-static hidden-sm-down\" id=\"_desktop_top_menu\">
    {menu nodes=\$menu.children}
    <div class=\"clearfix\"></div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_mainmenu/ps_mainmenu.tpl";
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
{assign var=_counter value=0}
{function name=\"menu\" nodes=[] depth=0 parent=null}
    {if \$nodes|count}
      <ul class=\"top-menu\"{if \$depth == 0} id=\"top-menu\"{/if} data-depth=\"{\$depth}\">
        {foreach from=\$nodes item=node}
            <li class=\"{\$node.type}{if \$node.current} current {/if}\" id=\"{\$node.page_identifier}\">
            {assign var=_counter value=\$_counter+1}
              <a
                class=\"{if \$depth >= 0}dropdown-item{/if}{if \$depth === 1} dropdown-submenu{/if}\"
                href=\"{\$node.url}\" data-depth=\"{\$depth}\"
                {if \$node.open_in_new_window} target=\"_blank\" {/if}
              >
                {if \$node.children|count}
                  {* Cannot use page identifier as we can have the same page several times *}
                  {assign var=_expand_id value=10|mt_rand:100000}
                  <span class=\"float-xs-right hidden-md-up\">
                    <span data-target=\"#top_sub_menu_{\$_expand_id}\" data-toggle=\"collapse\" class=\"navbar-toggler collapse-icons\">
                      <i class=\"material-icons add\">&#xE313;</i>
                      <i class=\"material-icons remove\">&#xE316;</i>
                    </span>
                  </span>
                {/if}
                {if \$node.image_urls|count}
                  {foreach from=\$node.image_urls item=image_url}
                    <img src=\"{\$image_url}\">
                  {/foreach}
                {/if}
                {\$node.label}
              </a>
              {if \$node.children|count}
              <div {if \$depth === 0}class=\"popover sub-menu js-sub-menu collapse\"{else}class=\"collapse\"{/if} id=\"top_sub_menu_{\$_expand_id}\">
                {menu nodes=\$node.children depth=\$node.depth parent=\$node}
              </div>
              {/if}
            </li>
        {/foreach}
      </ul>
    {/if}
{/function}

<div class=\"menu js-top-menu position-static hidden-sm-down\" id=\"_desktop_top_menu\">
    {menu nodes=\$menu.children}
    <div class=\"clearfix\"></div>
</div>
", "@Modules/ps_mainmenu/ps_mainmenu.tpl", "/var/www/html/modules/ps_mainmenu/ps_mainmenu.tpl");
    }
}
