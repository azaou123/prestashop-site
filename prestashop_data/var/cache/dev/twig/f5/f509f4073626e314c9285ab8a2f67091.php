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

/* @Modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl */
class __TwigTemplate_cba45c4c55164584aaa8a71fb89670c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl"));

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

<div class=\"modal fade\" id=\"upload-child-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title module-modal-title\" id=\"exampleModalLongTitle\">{l s='Upload child theme' mod='ps_themecusto'}</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <form action=\"#\" class=\"dropzone dz-clickable\" id=\"importDropzone\">
                            <div class=\"loader\"></div>
                            <div class=\"module-import-start\">
                                <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br>
                                <p class=\"module-import-start-main-text\">
                                    {l s='Drop your child theme archive here or' mod='ps_themecusto'} <a href=\"#\" class=\"module-import-start-select-manual\">{l s='select file' mod='ps_themecusto'}</a>
                                </p>
                                <p class=\"module-import-start-footer-text\">
                                    {l s='Please upload one file at a time, .zip. Your child theme will be installed right after that.' mod='ps_themecusto'}
                                </p>
                            </div>
                            <div class=\"module-import-failure\">
                                <i class=\"module-import-failure-icon material-icons\">error</i><br>
                                <p class=\"module-import-failure-msg\">{l s='Oops... Upload failed.' mod='ps_themecusto'}</p>
                                <a href=\"#\" class=\"module-import-failure-details-action\">{l s='What happened?' mod='ps_themecusto'}</a>
                                <div class=\"module-import-failure-details\">{l s='An error has occurred.' mod='ps_themecusto'}</div>
                                <p>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href=\"#\">{l s='Try again' mod='ps_themecusto'}</a>
                                </p>
                            </div>
                            <div class=\"module-import-success\">
                                <i class=\"module-import-success-icon material-icons\">done</i><br>
                                <p class=\"module-import-success-msg\"></p>
                            </div>
                            <input type=\"hidden\" name=\"action\" value=\"UploadChildTheme\" />
                            <div class=\"dz-default dz-message\"><span></span></div><input name=\"childthemefile\" type=\"file\" class=\"dz-hidden-input\" accept=\".zip\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl";
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

<div class=\"modal fade\" id=\"upload-child-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title module-modal-title\" id=\"exampleModalLongTitle\">{l s='Upload child theme' mod='ps_themecusto'}</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <form action=\"#\" class=\"dropzone dz-clickable\" id=\"importDropzone\">
                            <div class=\"loader\"></div>
                            <div class=\"module-import-start\">
                                <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br>
                                <p class=\"module-import-start-main-text\">
                                    {l s='Drop your child theme archive here or' mod='ps_themecusto'} <a href=\"#\" class=\"module-import-start-select-manual\">{l s='select file' mod='ps_themecusto'}</a>
                                </p>
                                <p class=\"module-import-start-footer-text\">
                                    {l s='Please upload one file at a time, .zip. Your child theme will be installed right after that.' mod='ps_themecusto'}
                                </p>
                            </div>
                            <div class=\"module-import-failure\">
                                <i class=\"module-import-failure-icon material-icons\">error</i><br>
                                <p class=\"module-import-failure-msg\">{l s='Oops... Upload failed.' mod='ps_themecusto'}</p>
                                <a href=\"#\" class=\"module-import-failure-details-action\">{l s='What happened?' mod='ps_themecusto'}</a>
                                <div class=\"module-import-failure-details\">{l s='An error has occurred.' mod='ps_themecusto'}</div>
                                <p>
                                    <a class=\"module-import-failure-retry btn btn-tertiary\" href=\"#\">{l s='Try again' mod='ps_themecusto'}</a>
                                </p>
                            </div>
                            <div class=\"module-import-success\">
                                <i class=\"module-import-success-icon material-icons\">done</i><br>
                                <p class=\"module-import-success-msg\"></p>
                            </div>
                            <input type=\"hidden\" name=\"action\" value=\"UploadChildTheme\" />
                            <div class=\"dz-default dz-message\"><span></span></div><input name=\"childthemefile\" type=\"file\" class=\"dz-hidden-input\" accept=\".zip\" style=\"visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "@Modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl", "/var/www/html/modules/ps_themecusto/views/templates/admin/controllers/advanced/elem/modal.tpl");
    }
}
