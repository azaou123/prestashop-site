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

/* @Modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl */
class __TwigTemplate_187653240cbb2649dabb177cb44a6abe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl"));

        // line 1
        echo "{*
* 2007-2018 PrestaShop
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   http://addons.prestashop.com/en/content/12-terms-and-conditions-of-use
* International Registered Trademark & Property of PrestaShop SA
*}

<div id=\"psthemecusto\">
    <div class=\"panel col-lg-12\">
        <div class=\"panel-heading\">
            {l s='Advanced Customization' mod='ps_themecusto'}
        </div>
        <div class=\"row\">
            <div class=\"col-ld-12\">
                <p>{l s='You can edit your theme sheet by using the Parent/Child theme feature' mod='ps_themecusto'}:</p>
            </div>
            <div class=\"col-ld-12 steps\">
                <div class=\"col-lg-3\">
                    <div class=\"col-lg-12 center-img\">
                        <img src=\"{\$images}download.png\"/>
                    </div>
                    <b>1 - {l s='Download your current theme' mod='ps_themecusto'}</b>
                    <div class=\"col-lg-12\">
                        <p>{l s='You picked a theme but still want to bring some specific adjustments? Get a child theme, it will allow you to keep the parts you want and customize the others!' mod='ps_themecusto'}</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-lg-push-1\">
                    <div class=\"col-lg-12 center-img\">
                        <img src=\"{\$images}edit.png\"/>
                    </div>
                    <b>2 - {l s='Edit your child theme' mod='ps_themecusto'}</b>
                    <div class=\"col-lg-12\">
                        <p>{l s='Once the child theme created, next step is simple: apply the changes you want within the desired files, it will handle the customization part while keeping the parent theme’s look and functionality.' mod='ps_themecusto'}</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-lg-push-2\">
                    <div class=\"col-lg-12 center-img\">
                        <img src=\"{\$images}reupload.png\"/>
                    </div>
                    <b>3 - {l s='Upload your child theme' mod='ps_themecusto'}</b>
                    <div class=\"col-lg-12\">
                        <p>{l s='As you only bring modification to the child theme, you can upgrade the parent theme easily, without losing your customization.' mod='ps_themecusto'}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row row-buttons\">
            <div class=\"col-lg-3\">
                <div class=\"alert alert-danger download_child_theme_error\" role=\"alert\">
                    <b>{l s='An error occurred' mod='ps_themecusto'}</b>
                    <p class=\"alert-text\">{l s='Please check that you have the rights to write to the folders /app/cache/ and /themes/' mod='ps_themecusto'}</p>
                </div>
                <div class=\"btn btn-primary btn-lg btn-block\" rel=\"noopener\" id=\"download_child_theme\">
                    {l s='Download theme' mod='ps_themecusto'}
                </div>
                <div class=\"btn btn-primary btn-lg btn-block js-loader\" rel=\"noopener\" >
                    {l s='Downloading' mod='ps_themecusto'}<div class=\"loader\"></div>
                </div>
            </div>
            <div class=\"col-lg-3 col-lg-push-1\">
                <a href=\"https://devdocs.prestashop.com/1.7/themes/reference/template_inheritance/parent_child_feature/\" class=\"link-child btn btn-outline-secondary btn-lg btn-block\" rel=\"noopener\" target=\"_blank\">{l s='How to use parents/child themes' mod='ps_themecusto'} <i class=\"icon-external-link\"></i></a>
            </div>
            <div class=\"col-lg-3 col-lg-push-2\">
                <a href=\"#\" class=\"btn btn-primary btn-lg btn-block\" rel=\"noopener\" data-toggle=\"modal\" data-target=\"#upload-child-modal\" >{l s='Upload child theme' mod='ps_themecusto'}</a>
            </div>
        </div>
        <div class=\"alert alert-info col-lg-12\" role=\"alert\">
            <b>{l s='Information' mod='ps_themecusto'}</b>
            <p class=\"alert-text\">{l s='By using this method you can override the CSS and html of your theme, and add analytics tags.' mod='ps_themecusto'}</p>
            <p class=\"alert-text\">{l s='Once uploaded, the child theme will be available in your Theme & Logo section' mod='ps_themecusto'}</p>
        </div>
        {include file=\"./elem/modal.tpl\"}
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{*
* 2007-2018 PrestaShop
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   http://addons.prestashop.com/en/content/12-terms-and-conditions-of-use
* International Registered Trademark & Property of PrestaShop SA
*}

<div id=\"psthemecusto\">
    <div class=\"panel col-lg-12\">
        <div class=\"panel-heading\">
            {l s='Advanced Customization' mod='ps_themecusto'}
        </div>
        <div class=\"row\">
            <div class=\"col-ld-12\">
                <p>{l s='You can edit your theme sheet by using the Parent/Child theme feature' mod='ps_themecusto'}:</p>
            </div>
            <div class=\"col-ld-12 steps\">
                <div class=\"col-lg-3\">
                    <div class=\"col-lg-12 center-img\">
                        <img src=\"{\$images}download.png\"/>
                    </div>
                    <b>1 - {l s='Download your current theme' mod='ps_themecusto'}</b>
                    <div class=\"col-lg-12\">
                        <p>{l s='You picked a theme but still want to bring some specific adjustments? Get a child theme, it will allow you to keep the parts you want and customize the others!' mod='ps_themecusto'}</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-lg-push-1\">
                    <div class=\"col-lg-12 center-img\">
                        <img src=\"{\$images}edit.png\"/>
                    </div>
                    <b>2 - {l s='Edit your child theme' mod='ps_themecusto'}</b>
                    <div class=\"col-lg-12\">
                        <p>{l s='Once the child theme created, next step is simple: apply the changes you want within the desired files, it will handle the customization part while keeping the parent theme’s look and functionality.' mod='ps_themecusto'}</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-lg-push-2\">
                    <div class=\"col-lg-12 center-img\">
                        <img src=\"{\$images}reupload.png\"/>
                    </div>
                    <b>3 - {l s='Upload your child theme' mod='ps_themecusto'}</b>
                    <div class=\"col-lg-12\">
                        <p>{l s='As you only bring modification to the child theme, you can upgrade the parent theme easily, without losing your customization.' mod='ps_themecusto'}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row row-buttons\">
            <div class=\"col-lg-3\">
                <div class=\"alert alert-danger download_child_theme_error\" role=\"alert\">
                    <b>{l s='An error occurred' mod='ps_themecusto'}</b>
                    <p class=\"alert-text\">{l s='Please check that you have the rights to write to the folders /app/cache/ and /themes/' mod='ps_themecusto'}</p>
                </div>
                <div class=\"btn btn-primary btn-lg btn-block\" rel=\"noopener\" id=\"download_child_theme\">
                    {l s='Download theme' mod='ps_themecusto'}
                </div>
                <div class=\"btn btn-primary btn-lg btn-block js-loader\" rel=\"noopener\" >
                    {l s='Downloading' mod='ps_themecusto'}<div class=\"loader\"></div>
                </div>
            </div>
            <div class=\"col-lg-3 col-lg-push-1\">
                <a href=\"https://devdocs.prestashop.com/1.7/themes/reference/template_inheritance/parent_child_feature/\" class=\"link-child btn btn-outline-secondary btn-lg btn-block\" rel=\"noopener\" target=\"_blank\">{l s='How to use parents/child themes' mod='ps_themecusto'} <i class=\"icon-external-link\"></i></a>
            </div>
            <div class=\"col-lg-3 col-lg-push-2\">
                <a href=\"#\" class=\"btn btn-primary btn-lg btn-block\" rel=\"noopener\" data-toggle=\"modal\" data-target=\"#upload-child-modal\" >{l s='Upload child theme' mod='ps_themecusto'}</a>
            </div>
        </div>
        <div class=\"alert alert-info col-lg-12\" role=\"alert\">
            <b>{l s='Information' mod='ps_themecusto'}</b>
            <p class=\"alert-text\">{l s='By using this method you can override the CSS and html of your theme, and add analytics tags.' mod='ps_themecusto'}</p>
            <p class=\"alert-text\">{l s='Once uploaded, the child theme will be available in your Theme & Logo section' mod='ps_themecusto'}</p>
        </div>
        {include file=\"./elem/modal.tpl\"}
    </div>
</div>
", "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/advanced/index.tpl");
    }
}
