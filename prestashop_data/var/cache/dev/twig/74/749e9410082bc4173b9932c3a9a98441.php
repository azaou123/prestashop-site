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

/* @Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/cms.tpl */
class __TwigTemplate_a87fc3032098e336e22b30a91c8f7522 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/cms.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/cms.tpl"));

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

<div class=\"form-group psr-cms {if (isset(\$block) && \$block['type_link'] != \$LINK_TYPE_CMS) || !isset(\$block)} inactive{/if}\">
    <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-3\">
        <div class=\"text-right\">
            <label class=\"control-label\">
                {l s='CMS Page' d='Modules.Blockreassurance.Admin'}
            </label>
        </div>
    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-4\">
        <div class=\"input-group col-xs-12 col-sm-12 col-md-7 col-lg-12 psrea-flex\">
            <select class=\"custom-select\" name=\"ID_CMS_{if isset(\$block)}{\$block['id_psreassurance']}{/if}\">
                {foreach from=\$allCms item=cms}
                    <option value=\"{\$cms['id_cms']}\" {if isset(\$block) && \$block['id_cms'] == \$cms['id_cms']} selected=\"selected\"{/if}>{\$cms['meta_title']|escape:'htmlall':'UTF-8'}</option>
                {/foreach}
            </select>
        </div>
    </div>
    <div class=\"clearfix\"></div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/cms.tpl";
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

<div class=\"form-group psr-cms {if (isset(\$block) && \$block['type_link'] != \$LINK_TYPE_CMS) || !isset(\$block)} inactive{/if}\">
    <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-3\">
        <div class=\"text-right\">
            <label class=\"control-label\">
                {l s='CMS Page' d='Modules.Blockreassurance.Admin'}
            </label>
        </div>
    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-4\">
        <div class=\"input-group col-xs-12 col-sm-12 col-md-7 col-lg-12 psrea-flex\">
            <select class=\"custom-select\" name=\"ID_CMS_{if isset(\$block)}{\$block['id_psreassurance']}{/if}\">
                {foreach from=\$allCms item=cms}
                    <option value=\"{\$cms['id_cms']}\" {if isset(\$block) && \$block['id_cms'] == \$cms['id_cms']} selected=\"selected\"{/if}>{\$cms['meta_title']|escape:'htmlall':'UTF-8'}</option>
                {/foreach}
            </select>
        </div>
    </div>
    <div class=\"clearfix\"></div>
</div>
", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/cms.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/cms.tpl");
    }
}
