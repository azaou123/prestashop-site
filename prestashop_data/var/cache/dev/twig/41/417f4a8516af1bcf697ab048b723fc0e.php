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

/* @Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/reassurance_block.tpl */
class __TwigTemplate_20d3f0bd8101b6cd7f81cfee11a3ab12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/reassurance_block.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/reassurance_block.tpl"));

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

<section id=\"reassurance_block\">
    <section class=\"category_select row\">
        <div class=\"col-lg-2 col-xs-2 active\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/public.svg\" data-id=\"1\" /></div>
        <div class=\"col-lg-2 col-xs-2\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/globe.svg\" data-id=\"2\" /></div>
        <div class=\"col-lg-2 col-xs-2\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/globe.svg\" data-id=\"3\" /></div>
    </section>
    <section class=\"category_reassurance cat_1 active\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/headset.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/local-shipping.svg\"/>
            </div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/lock.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/loop.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/loyalty.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/mood.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/payment.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/public.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/redeem.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/thumb.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/timer.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/touch-app.svg\"/></div>
        </div>
    </section>
    <section class=\"category_reassurance cat_2\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/carrier.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/creditcard.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/gift.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/globe.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/hotline.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/parcel.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/phone.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/return.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/satisfaction.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/security.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/support.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/trust.svg\"/></div>
        </div>
    </section>
    <section class=\"category_reassurance cat_3\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/carrier.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/clock.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/comment.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/gift.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/globe.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/location.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/payment.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/return.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/satisfaction.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/security.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/star.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/support.svg\"/></div>
        </div>
    </section>
    <div class=\"select_none\">
        {l s='Select none' d='Modules.Blockreassurance.Admin'}
    </div>
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/reassurance_block.tpl";
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

<section id=\"reassurance_block\">
    <section class=\"category_select row\">
        <div class=\"col-lg-2 col-xs-2 active\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/public.svg\" data-id=\"1\" /></div>
        <div class=\"col-lg-2 col-xs-2\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/globe.svg\" data-id=\"2\" /></div>
        <div class=\"col-lg-2 col-xs-2\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/globe.svg\" data-id=\"3\" /></div>
    </section>
    <section class=\"category_reassurance cat_1 active\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/headset.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/local-shipping.svg\"/>
            </div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/lock.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/loop.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/loyalty.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/mood.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/payment.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/public.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/redeem.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/thumb.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/timer.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack1/touch-app.svg\"/></div>
        </div>
    </section>
    <section class=\"category_reassurance cat_2\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/carrier.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/creditcard.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/gift.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/globe.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/hotline.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/parcel.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/phone.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/return.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/satisfaction.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/security.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/support.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack2/trust.svg\"/></div>
        </div>
    </section>
    <section class=\"category_reassurance cat_3\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/carrier.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/clock.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/comment.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/gift.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/globe.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/location.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/payment.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/return.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/satisfaction.svg\"/></div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/security.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/star.svg\"/></div>
            <div class=\"col-lg-4 col-xs-4\"><img class=\"svg\" src=\"{\$img_url}/reassurance/pack3/support.svg\"/></div>
        </div>
    </section>
    <div class=\"select_none\">
        {l s='Select none' d='Modules.Blockreassurance.Admin'}
    </div>
</section>
", "@Modules/blockreassurance/views/templates/admin/tabs/content/config_elements/reassurance_block.tpl", "/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/reassurance_block.tpl");
    }
}
