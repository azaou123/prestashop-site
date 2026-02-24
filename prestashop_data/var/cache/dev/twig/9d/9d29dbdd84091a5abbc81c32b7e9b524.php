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

/* @Modules/ps_themecusto/views/css/controllers/advanced/back.css */
class __TwigTemplate_275567f7931a40ca47fd035bda6498c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/css/controllers/advanced/back.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/css/controllers/advanced/back.css"));

        // line 1
        echo "/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/

#psthemecusto .center-img img {
    display: block;
    margin: 1rem auto 2rem auto;
}
#psthemecusto b {
    font-weight: bolder;
    color: #363a41;
    margin: 0;
    font-size: 14px;
    font-size: .875rem;
    margin-bottom: 7px;
    display: block;
}
#psthemecusto p {
    font-size: 13px;
    font-size: .8rem;
    font-weight: 400;
    line-height: 1.5;
    color: #363a41;
}
#psthemecusto .row.row-buttons {
    margin-top: 1rem;
}
#psthemecusto .icon-external-link {
    font-weight: 400;
    font-size: 20px;
    padding-left: 6px;
    display:  inline-block;
    vertical-align: middle;
}
#psthemecusto .alert {
    margin-top: 1.5rem;
}
#psthemecusto .download_child_theme_error {
    margin-top: 0;
    display: none;
}
#psthemecusto .row.row-buttons .btn{
    white-space: initial !important;
}
form#importDropzone {
    border: 2px dashed #6c868e;
}
.dropzone {
    min-height: 150px;
    border: 2px solid rgba(0,0,0,0.3);
    background: white;
    padding: 20px 20px;
}
.dropzone.dz-clickable * {
    cursor: default;
}
.module-import-start-icon {
    font-size: 70px;
    color: #CECCCC;
}
.module-import-start {
    text-align: center;
}
.module-import-start-footer-text {
    font-size: smaller;
    font-style: italic;
    color: #CECCCC;
}
.btn-outline-secondary {
    border: 1px solid #8a8a8a !important;
}
a.btn-outline-secondary {
    color: #8a8a8a;
}
.row-buttons .btn {
    margin-bottom: 10px;
}

/**
    LOADER
*/
#psthemecusto .btn-primary.js-loader {
    position: relative;
    display: none;
}
.btn .loader {
    display: block;
    border: 2px solid #f3f3f3;
    border-top: 2px solid #25b9d7;
    width: 22px;
    height: 22px;
    position: absolute;
    top: 9px;
    right: 9px;
}
.modal .loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #25b9d7;
    width: 50px;
    height: 50px;
    margin-top: 32px;
}
/**
    MODAL
*/
.dz-preview {
    display: none !important;
}
#psthemecusto .modal .module-import-failure,
#psthemecusto .modal .module-import-failure-details,
#psthemecusto .modal .module-import-success {
    display: none;
    text-align: center;
}
#psthemecusto .modal .module-import-start-footer-text {
    color: #CECCCC !important;
    font-size: 0.8rem !important;
}
#psthemecusto .modal .module-import-failure {
    font-size: 0.8rem;
    line-height: 2rem;
}
#psthemecusto .modal .module-import-failure .module-import-failure-icon {
    color: #c45c67;
    font-size: 70px;
}
#psthemecusto .modal .module-import-failure .module-import-failure-msg {
    font-weight: 700;
    margin-bottom: 0;
}
#psthemecusto .modal .module-import-success .module-import-success-icon {
    color: #1c8ca3;
    font-size: 70px;
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/css/controllers/advanced/back.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*
* Don't forget to prefix your containers with your own identifier
* to avoid any conflicts with others containers.
*/

#psthemecusto .center-img img {
    display: block;
    margin: 1rem auto 2rem auto;
}
#psthemecusto b {
    font-weight: bolder;
    color: #363a41;
    margin: 0;
    font-size: 14px;
    font-size: .875rem;
    margin-bottom: 7px;
    display: block;
}
#psthemecusto p {
    font-size: 13px;
    font-size: .8rem;
    font-weight: 400;
    line-height: 1.5;
    color: #363a41;
}
#psthemecusto .row.row-buttons {
    margin-top: 1rem;
}
#psthemecusto .icon-external-link {
    font-weight: 400;
    font-size: 20px;
    padding-left: 6px;
    display:  inline-block;
    vertical-align: middle;
}
#psthemecusto .alert {
    margin-top: 1.5rem;
}
#psthemecusto .download_child_theme_error {
    margin-top: 0;
    display: none;
}
#psthemecusto .row.row-buttons .btn{
    white-space: initial !important;
}
form#importDropzone {
    border: 2px dashed #6c868e;
}
.dropzone {
    min-height: 150px;
    border: 2px solid rgba(0,0,0,0.3);
    background: white;
    padding: 20px 20px;
}
.dropzone.dz-clickable * {
    cursor: default;
}
.module-import-start-icon {
    font-size: 70px;
    color: #CECCCC;
}
.module-import-start {
    text-align: center;
}
.module-import-start-footer-text {
    font-size: smaller;
    font-style: italic;
    color: #CECCCC;
}
.btn-outline-secondary {
    border: 1px solid #8a8a8a !important;
}
a.btn-outline-secondary {
    color: #8a8a8a;
}
.row-buttons .btn {
    margin-bottom: 10px;
}

/**
    LOADER
*/
#psthemecusto .btn-primary.js-loader {
    position: relative;
    display: none;
}
.btn .loader {
    display: block;
    border: 2px solid #f3f3f3;
    border-top: 2px solid #25b9d7;
    width: 22px;
    height: 22px;
    position: absolute;
    top: 9px;
    right: 9px;
}
.modal .loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #25b9d7;
    width: 50px;
    height: 50px;
    margin-top: 32px;
}
/**
    MODAL
*/
.dz-preview {
    display: none !important;
}
#psthemecusto .modal .module-import-failure,
#psthemecusto .modal .module-import-failure-details,
#psthemecusto .modal .module-import-success {
    display: none;
    text-align: center;
}
#psthemecusto .modal .module-import-start-footer-text {
    color: #CECCCC !important;
    font-size: 0.8rem !important;
}
#psthemecusto .modal .module-import-failure {
    font-size: 0.8rem;
    line-height: 2rem;
}
#psthemecusto .modal .module-import-failure .module-import-failure-icon {
    color: #c45c67;
    font-size: 70px;
}
#psthemecusto .modal .module-import-failure .module-import-failure-msg {
    font-weight: 700;
    margin-bottom: 0;
}
#psthemecusto .modal .module-import-success .module-import-success-icon {
    color: #1c8ca3;
    font-size: 70px;
}", "@Modules/ps_themecusto/views/css/controllers/advanced/back.css", "/var/www/html/modules/ps_themecusto/views/css/controllers/advanced/back.css");
    }
}
