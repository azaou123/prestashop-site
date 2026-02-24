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

/* @Modules/ps_imageslider/views/templates/hook/list.tpl */
class __TwigTemplate_c346221991b51066f4d36b9e0fcb01f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_imageslider/views/templates/hook/list.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_imageslider/views/templates/hook/list.tpl"));

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
<div class=\"panel\"><h3><i class=\"icon-list-ul\"></i> {l s='Slides list' d='Modules.Imageslider.Admin'}
\t<span class=\"panel-heading-action\">
\t\t<a id=\"desc-product-new\" class=\"list-toolbar-btn\" href=\"{\$link->getAdminLink('AdminModules')}&configure=ps_imageslider&addSlide=1\">
\t\t\t<span title=\"\" data-toggle=\"tooltip\" class=\"label-tooltip\" data-original-title=\"{l s='Add new' d='Admin.Actions'}\" data-html=\"true\">
\t\t\t\t<i class=\"process-icon-new \"></i>
\t\t\t</span>
\t\t</a>
\t</span>
\t</h3>
\t<div id=\"slidesContent\">
\t\t<div id=\"slides\" class=\"list-group\">
\t\t\t{foreach from=\$slides item=slide}
\t\t\t\t<div id=\"slides_{\$slide.id_slide}\" class=\"panel list-group-item\" data-id=\"{\$slide.id_slide}\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t<span><i class=\"icon-arrows \"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"{\$image_baseurl}{\$slide.image}\" alt=\"{\$slide.title}\" class=\"img-thumbnail\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<h4 class=\"pull-left\">
\t\t\t\t\t\t\t\t#{\$slide.id_slide} - {\$slide.title}
\t\t\t\t\t\t\t\t{if \$slide.is_shared}
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span class=\"label color_field pull-left\" style=\"background-color:#108510;color:white;margin-top:5px;\">
\t\t\t\t\t\t\t\t\t\t\t{l s='Shared slide' d='Modules.Imageslider.Admin'}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{/if}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<div class=\"btn-group-action pull-right\">
\t\t\t\t\t\t\t\t{\$slide.status}

\t\t\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\t\t\t\thref=\"{\$link->getAdminLink('AdminModules')}&configure=ps_imageslider&id_slide={\$slide.id_slide}\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t{l s='Edit' d='Admin.Actions'}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\t\t\t\thref=\"{\$link->getAdminLink('AdminModules')}&configure=ps_imageslider&delete_id_slide={\$slide.id_slide}\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-trash\"></i>
\t\t\t\t\t\t\t\t\t{l s='Delete' d='Admin.Actions'}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{/foreach}
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_imageslider/views/templates/hook/list.tpl";
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
<div class=\"panel\"><h3><i class=\"icon-list-ul\"></i> {l s='Slides list' d='Modules.Imageslider.Admin'}
\t<span class=\"panel-heading-action\">
\t\t<a id=\"desc-product-new\" class=\"list-toolbar-btn\" href=\"{\$link->getAdminLink('AdminModules')}&configure=ps_imageslider&addSlide=1\">
\t\t\t<span title=\"\" data-toggle=\"tooltip\" class=\"label-tooltip\" data-original-title=\"{l s='Add new' d='Admin.Actions'}\" data-html=\"true\">
\t\t\t\t<i class=\"process-icon-new \"></i>
\t\t\t</span>
\t\t</a>
\t</span>
\t</h3>
\t<div id=\"slidesContent\">
\t\t<div id=\"slides\" class=\"list-group\">
\t\t\t{foreach from=\$slides item=slide}
\t\t\t\t<div id=\"slides_{\$slide.id_slide}\" class=\"panel list-group-item\" data-id=\"{\$slide.id_slide}\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-1\">
\t\t\t\t\t\t\t<span><i class=\"icon-arrows \"></i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<img src=\"{\$image_baseurl}{\$slide.image}\" alt=\"{\$slide.title}\" class=\"img-thumbnail\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<h4 class=\"pull-left\">
\t\t\t\t\t\t\t\t#{\$slide.id_slide} - {\$slide.title}
\t\t\t\t\t\t\t\t{if \$slide.is_shared}
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<span class=\"label color_field pull-left\" style=\"background-color:#108510;color:white;margin-top:5px;\">
\t\t\t\t\t\t\t\t\t\t\t{l s='Shared slide' d='Modules.Imageslider.Admin'}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{/if}
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<div class=\"btn-group-action pull-right\">
\t\t\t\t\t\t\t\t{\$slide.status}

\t\t\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\t\t\t\thref=\"{\$link->getAdminLink('AdminModules')}&configure=ps_imageslider&id_slide={\$slide.id_slide}\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t{l s='Edit' d='Admin.Actions'}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"btn btn-default\"
\t\t\t\t\t\t\t\t\thref=\"{\$link->getAdminLink('AdminModules')}&configure=ps_imageslider&delete_id_slide={\$slide.id_slide}\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-trash\"></i>
\t\t\t\t\t\t\t\t\t{l s='Delete' d='Admin.Actions'}
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{/foreach}
\t\t</div>
\t</div>
</div>
", "@Modules/ps_imageslider/views/templates/hook/list.tpl", "/var/www/html/modules/ps_imageslider/views/templates/hook/list.tpl");
    }
}
