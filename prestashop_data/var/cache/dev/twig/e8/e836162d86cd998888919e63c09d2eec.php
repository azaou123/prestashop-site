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

/* @Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_product.tpl */
class __TwigTemplate_15339db38d88c8d1db317b06c6722e46 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_product.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_product.tpl"));

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

<div class=\"row no-gutter js-wireframe\">
    <div class=\"col-xs-12 js-img-menu\" data-module_name=\"menu\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/header.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/header-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/header-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-product_management\" data-module_name=\"product_management\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/product/product_mgmt.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_mgmt-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_mgmt-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-product_detail\" data-module_name=\"product_detail\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/product/product_detail.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_detail-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_detail-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-product_block\" data-module_name=\"product_block\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/product/products_block.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/product/products_block-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/product/products_block-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-social_newsletter\" data-module_name=\"social_newsletter\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-footer\" data-module_name=\"footer\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/footer.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/footer-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/footer-selected.jpg\"/>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_product.tpl";
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

<div class=\"row no-gutter js-wireframe\">
    <div class=\"col-xs-12 js-img-menu\" data-module_name=\"menu\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/header.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/header-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/header-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-product_management\" data-module_name=\"product_management\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/product/product_mgmt.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_mgmt-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_mgmt-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-product_detail\" data-module_name=\"product_detail\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/product/product_detail.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_detail-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/product/product_detail-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-product_block\" data-module_name=\"product_block\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/product/products_block.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/product/products_block-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/product/products_block-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-social_newsletter\" data-module_name=\"social_newsletter\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/newsletter-selected.jpg\"/>
    </div>
    <div class=\"col-xs-12 js-img-footer\" data-module_name=\"footer\">
        <img class=\"out-element\" src=\"{\$moduleImgUri}/wireframe/commons/footer.jpg\"/>
        <img class=\"hover-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/footer-hover.jpg\"/>
        <img class=\"active-element hide\" src=\"{\$moduleImgUri}/wireframe/commons/footer-selected.jpg\"/>
    </div>
</div>
", "@Modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_product.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_product.tpl");
    }
}
