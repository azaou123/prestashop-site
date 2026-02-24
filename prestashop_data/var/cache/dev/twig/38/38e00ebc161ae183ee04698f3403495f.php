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

/* @Modules/ps_themecusto/views/css/controllers/configuration/back.css */
class __TwigTemplate_297484d571e1ff61f5f2438192383b09 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/css/controllers/configuration/back.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/css/controllers/configuration/back.css"));

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

/* Add boostrap no-gutter class */
.no-gutter.row,
.no-gutter.container,
.no-gutter.container-fluid{
  margin-left: 0;
  margin-right: 0;
}

.no-gutter>[class^=\"col-\"]{
  padding-left: 0;
  padding-right: 0;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}

/**
    GENERAL
*/
body.adminpsthemecustoconfiguration {
    background-color: #fff;
}
#psthemecusto .modalCusto div.js-wireframe {
    background-color: #D5D5D5;
}
#psthemecusto .panel:first-child {
    border: none;
}
#psthemecusto .js-wireframe img{
    max-width: 100%;
}
#psthemecusto .js-wireframe div {
    cursor: pointer;
}
#psthemecusto .js-wireframe div.active .out-element{
    display: none;
}
#psthemecusto .js-wireframe div.active .active-element{
    display: block;
    opacity: 1;
}

.sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
    top: 210px;
}

#psthemecusto .configuration-rectangle {
    border-left: 4px solid #dcdcdc;
    margin-bottom: 25px;
    -webkit-box-shadow: 0px 2px 1px rgba(0,0,0,0.12);
    box-shadow: 0px 2px 1px rgba(0,0,0,0.12);
}
#psthemecusto .configuration-rectangle.active {
    -webkit-box-shadow: none;
    box-shadow: none;
}
#psthemecusto .configuration-rectangle.active,
#psthemecusto .configuration-rectangle:hover {
    border-color: #25b9d7;
    -webkit-transition: border-color .2s;
    transition: border-color .2s;
}
#psthemecusto .configuration-rectangle .module-logo {
    width: 40px;
    max-width: 100%;
}
#psthemecusto .configuration-rectangle .form-action-button-container {
    padding: 0;
}
#psthemecusto .configuration-rectangle .js-module-name {
    text-transform: uppercase;
    font-family: \"Open Sans\";
    font-size: 12px;
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    padding: 18px 24px 8px 12px;
    opacity: 0.6;
    background-color: #eff1f2;
    cursor: pointer;
}
#psthemecusto .configuration-rectangle .js-module-name.active {
    -webkit-box-shadow: 0px 2px 1px rgba(0,0,0,0.2);
    box-shadow: 0px 2px 1px rgba(0,0,0,0.2);
}
#psthemecusto .configuration-rectangle:hover .js-module-name,
#psthemecusto .configuration-rectangle .js-module-name.active,
#psthemecusto .configuration-rectangle .js-module-name:hover {
    background-color: #25b9d7;
    color: #fff;
    opacity: 1;
    -webkit-transition: opacity .2s, color .2s, background-color .2s, -webkit-transform .2s;
    transition: opacity .2s, color .2s, background-color .2s, transform .2s;
}
#psthemecusto .configuration-rectangle .module-informations {
    display: none;
    padding-top: 1.2vw;
    padding-right: 1.2vw;
    padding-left: 1.2vw;
    padding-bottom: 0;
}
#psthemecusto .configuration-rectangle .module-informations b {
    font-weight: bolder;
    color: #363a41;
    margin: 0;
    font-size: 14px;
    font-size: .875rem;
    margin-bottom: 7px;
    display: block;
}
#psthemecusto .configuration-rectangle .module-informations .description {
    font-size: 13px;
    font-size: .8rem;
    font-weight: 400;
    line-height: 1.5;
    color: #363a41;
}
#psthemecusto .configuration-rectangle .module-informations:last-child {
    padding-bottom: 25px;
}
#psthemecusto .configuration-rectangle .module-informations .icon-cogs {
    font-size: 20px;
}
#psthemecusto .configuration-rectangle .configuration-rectangle-caret {
    text-align: right;
}
#psthemecusto .configuration-rectangle .configuration-rectangle-caret .caret {
    border-top: 8px solid;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
}
button.dropdown-item {
    display: block;
    width: 100%;
    padding: 5px;
    padding: .3125rem;
    clear: both;
    font-weight: 400;
    color: #6c868e;
    text-align: inherit;
    white-space: nowrap;
    background: none;
    border: 0;
    cursor: initial;
}
.dropdown-item:focus,
.dropdown-item:hover {
    color: #25b9d7;
    text-decoration: none;
    background-color: #fff;
}

.btn-outline-primary {
    color: #25b9d7 !important;
    background-color: transparent !important;
    background-image: none !important;
    border-color: #25b9d7 !important;
}

.btn-outline-primary:hover {
    color: #fff !important;
    background-color: #3ed2f0 !important;
    border-color: #3ed2f0 !important;
}
.no-padding{
    padding: 0 !important;
}
.no-radius-right {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

.loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #25b9d7;
    width: 31px;
    height: 31px;
}
.configuration-rectangle .dropdown-action {
    padding: 0;
}
.configuration-rectangle .dropdown-action .material-icons{
    line-height: 0 !important;
    padding-top: 18px;
}
.configuration-rectangle .general-action .btn {
    padding: 8.5px 0px;
}
.dropdown-menu {
    box-shadow: 1px 1px 2px 0 rgba(0,0,0,.3) !important;
}
.dropdown-menu>li a{
    padding: 5px !important;
    padding: .3125rem !important;
    cursor: default;
    text-decoration: none;
    color: #6c868e;
    display: block;
}
.dropdown-menu>li a:hover {
    text-decoration: none;
    color: #3ed2f0;
}
.material-icons.up{
    display: none;
}
#psthemecusto .panel .panel-heading {
    font: 400 12px/1.42857 Open Sans,Helvetica,Arial,sans-serif!important;
    padding-bottom: 50px;
    border: none;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary:focus {
    outline: none;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary {
    color: #6C868E;
    border-radius: 20px;
    padding: 10px 20px!important;
    margin: 0px 8px;
    background-color: #F5F7F7!important;
    border-color: #F5F7F7!important;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary:hover,
#content #psthemecusto .panel .panel-heading .btn.btn-primary.selected {
    color: #363A41;
    background-color: #F4FBFD!important;
    border-color: #F4FBFD!important;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary.selected {
    color: #FFFFFF;
    background-color: #25b9d7!important;
    border-color: #25b9d7!important;
}

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/css/controllers/configuration/back.css";
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

/* Add boostrap no-gutter class */
.no-gutter.row,
.no-gutter.container,
.no-gutter.container-fluid{
  margin-left: 0;
  margin-right: 0;
}

.no-gutter>[class^=\"col-\"]{
  padding-left: 0;
  padding-right: 0;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}

/**
    GENERAL
*/
body.adminpsthemecustoconfiguration {
    background-color: #fff;
}
#psthemecusto .modalCusto div.js-wireframe {
    background-color: #D5D5D5;
}
#psthemecusto .panel:first-child {
    border: none;
}
#psthemecusto .js-wireframe img{
    max-width: 100%;
}
#psthemecusto .js-wireframe div {
    cursor: pointer;
}
#psthemecusto .js-wireframe div.active .out-element{
    display: none;
}
#psthemecusto .js-wireframe div.active .active-element{
    display: block;
    opacity: 1;
}

.sticky {
    position: -webkit-sticky !important;
    position: sticky !important;
    top: 210px;
}

#psthemecusto .configuration-rectangle {
    border-left: 4px solid #dcdcdc;
    margin-bottom: 25px;
    -webkit-box-shadow: 0px 2px 1px rgba(0,0,0,0.12);
    box-shadow: 0px 2px 1px rgba(0,0,0,0.12);
}
#psthemecusto .configuration-rectangle.active {
    -webkit-box-shadow: none;
    box-shadow: none;
}
#psthemecusto .configuration-rectangle.active,
#psthemecusto .configuration-rectangle:hover {
    border-color: #25b9d7;
    -webkit-transition: border-color .2s;
    transition: border-color .2s;
}
#psthemecusto .configuration-rectangle .module-logo {
    width: 40px;
    max-width: 100%;
}
#psthemecusto .configuration-rectangle .form-action-button-container {
    padding: 0;
}
#psthemecusto .configuration-rectangle .js-module-name {
    text-transform: uppercase;
    font-family: \"Open Sans\";
    font-size: 12px;
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: left;
    color: #4a4a4a;
    padding: 18px 24px 8px 12px;
    opacity: 0.6;
    background-color: #eff1f2;
    cursor: pointer;
}
#psthemecusto .configuration-rectangle .js-module-name.active {
    -webkit-box-shadow: 0px 2px 1px rgba(0,0,0,0.2);
    box-shadow: 0px 2px 1px rgba(0,0,0,0.2);
}
#psthemecusto .configuration-rectangle:hover .js-module-name,
#psthemecusto .configuration-rectangle .js-module-name.active,
#psthemecusto .configuration-rectangle .js-module-name:hover {
    background-color: #25b9d7;
    color: #fff;
    opacity: 1;
    -webkit-transition: opacity .2s, color .2s, background-color .2s, -webkit-transform .2s;
    transition: opacity .2s, color .2s, background-color .2s, transform .2s;
}
#psthemecusto .configuration-rectangle .module-informations {
    display: none;
    padding-top: 1.2vw;
    padding-right: 1.2vw;
    padding-left: 1.2vw;
    padding-bottom: 0;
}
#psthemecusto .configuration-rectangle .module-informations b {
    font-weight: bolder;
    color: #363a41;
    margin: 0;
    font-size: 14px;
    font-size: .875rem;
    margin-bottom: 7px;
    display: block;
}
#psthemecusto .configuration-rectangle .module-informations .description {
    font-size: 13px;
    font-size: .8rem;
    font-weight: 400;
    line-height: 1.5;
    color: #363a41;
}
#psthemecusto .configuration-rectangle .module-informations:last-child {
    padding-bottom: 25px;
}
#psthemecusto .configuration-rectangle .module-informations .icon-cogs {
    font-size: 20px;
}
#psthemecusto .configuration-rectangle .configuration-rectangle-caret {
    text-align: right;
}
#psthemecusto .configuration-rectangle .configuration-rectangle-caret .caret {
    border-top: 8px solid;
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
}
button.dropdown-item {
    display: block;
    width: 100%;
    padding: 5px;
    padding: .3125rem;
    clear: both;
    font-weight: 400;
    color: #6c868e;
    text-align: inherit;
    white-space: nowrap;
    background: none;
    border: 0;
    cursor: initial;
}
.dropdown-item:focus,
.dropdown-item:hover {
    color: #25b9d7;
    text-decoration: none;
    background-color: #fff;
}

.btn-outline-primary {
    color: #25b9d7 !important;
    background-color: transparent !important;
    background-image: none !important;
    border-color: #25b9d7 !important;
}

.btn-outline-primary:hover {
    color: #fff !important;
    background-color: #3ed2f0 !important;
    border-color: #3ed2f0 !important;
}
.no-padding{
    padding: 0 !important;
}
.no-radius-right {
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
}

.loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #25b9d7;
    width: 31px;
    height: 31px;
}
.configuration-rectangle .dropdown-action {
    padding: 0;
}
.configuration-rectangle .dropdown-action .material-icons{
    line-height: 0 !important;
    padding-top: 18px;
}
.configuration-rectangle .general-action .btn {
    padding: 8.5px 0px;
}
.dropdown-menu {
    box-shadow: 1px 1px 2px 0 rgba(0,0,0,.3) !important;
}
.dropdown-menu>li a{
    padding: 5px !important;
    padding: .3125rem !important;
    cursor: default;
    text-decoration: none;
    color: #6c868e;
    display: block;
}
.dropdown-menu>li a:hover {
    text-decoration: none;
    color: #3ed2f0;
}
.material-icons.up{
    display: none;
}
#psthemecusto .panel .panel-heading {
    font: 400 12px/1.42857 Open Sans,Helvetica,Arial,sans-serif!important;
    padding-bottom: 50px;
    border: none;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary:focus {
    outline: none;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary {
    color: #6C868E;
    border-radius: 20px;
    padding: 10px 20px!important;
    margin: 0px 8px;
    background-color: #F5F7F7!important;
    border-color: #F5F7F7!important;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary:hover,
#content #psthemecusto .panel .panel-heading .btn.btn-primary.selected {
    color: #363A41;
    background-color: #F4FBFD!important;
    border-color: #F4FBFD!important;
}
#content #psthemecusto .panel .panel-heading .btn.btn-primary.selected {
    color: #FFFFFF;
    background-color: #25b9d7!important;
    border-color: #25b9d7!important;
}

", "@Modules/ps_themecusto/views/css/controllers/configuration/back.css", "/var/www/html/modules/ps_themecusto/views/css/controllers/configuration/back.css");
    }
}
