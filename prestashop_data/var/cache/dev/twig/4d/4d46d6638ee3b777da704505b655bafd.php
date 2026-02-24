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

/* @Modules/ps_themecusto/views/css/general.css */
class __TwigTemplate_21f7e6a6a197c03859f9af2b1ed184a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/css/general.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/css/general.css"));

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

/**
    MODAL
*/
#psthemecusto .modal {
    overflow: hidden;
}
#psthemecusto .modal .modal-content {
    border-radius: 0 !important;
}
#psthemecusto .modal h4 {
    font-size: 1.125rem;
    line-height: 1.5;
    font-family: Open Sans,Helvetica,Arial,sans-serif;
    font-weight: 700;
}
#psthemecusto .modal .modal-header,
#psthemecusto .modal .modal-footer {
    border: 0 !important;
}
#psthemecusto .modal .modal-header {
    position: relative;
}
#psthemecusto .modal .modal-header .close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 2rem;
}
#psthemecusto .modal .modal-header .close span {
    color: #000;
}
#psthemecusto .modal p{
    font-family: Open Sans,Helvetica,Arial,sans-serif;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #363a41;
}
#psthemecusto .modal .modal-footer .action_available {
    text-transform: initial;
}

/**
    LOADER
*/
.loader {
    display: none;
    border-radius: 50%;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    margin: auto;
}
@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
/**
    BUTTON
*/
#psthemecusto .btn {
    border-radius: 0;
}
#psthemecusto .btn.btn-primary {
    text-transform: initial;
    background-color: #25b9d7 !important;
    border-color: #25b9d7 !important;
}
#psthemecusto .btn.btn-primary:hover {
    background-color: #3ed2f0 !important;
    border-color: #3ed2f0 !important;
}

.redBG{
    background-color: red;
}
.greenBG{
    background-color: green;
}
.blueBG{
    background-color: blue;
}
.yellowBG{
    background-color: yellow;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/css/general.css";
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

/**
    MODAL
*/
#psthemecusto .modal {
    overflow: hidden;
}
#psthemecusto .modal .modal-content {
    border-radius: 0 !important;
}
#psthemecusto .modal h4 {
    font-size: 1.125rem;
    line-height: 1.5;
    font-family: Open Sans,Helvetica,Arial,sans-serif;
    font-weight: 700;
}
#psthemecusto .modal .modal-header,
#psthemecusto .modal .modal-footer {
    border: 0 !important;
}
#psthemecusto .modal .modal-header {
    position: relative;
}
#psthemecusto .modal .modal-header .close {
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 2rem;
}
#psthemecusto .modal .modal-header .close span {
    color: #000;
}
#psthemecusto .modal p{
    font-family: Open Sans,Helvetica,Arial,sans-serif;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #363a41;
}
#psthemecusto .modal .modal-footer .action_available {
    text-transform: initial;
}

/**
    LOADER
*/
.loader {
    display: none;
    border-radius: 50%;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    margin: auto;
}
@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
/**
    BUTTON
*/
#psthemecusto .btn {
    border-radius: 0;
}
#psthemecusto .btn.btn-primary {
    text-transform: initial;
    background-color: #25b9d7 !important;
    border-color: #25b9d7 !important;
}
#psthemecusto .btn.btn-primary:hover {
    background-color: #3ed2f0 !important;
    border-color: #3ed2f0 !important;
}

.redBG{
    background-color: red;
}
.greenBG{
    background-color: green;
}
.blueBG{
    background-color: blue;
}
.yellowBG{
    background-color: yellow;
}
", "@Modules/ps_themecusto/views/css/general.css", "/var/www/html/modules/ps_themecusto/views/css/general.css");
    }
}
