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

/* @Modules/blockwishlist/public/wishlist.css */
class __TwigTemplate_ce45ea78a0989a7d69934f98bce7b40f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/public/wishlist.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/public/wishlist.css"));

        // line 1
        echo "/**
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
 */
.wishlist-modal{display:none;opacity:0;pointer-events:none;z-index:0}.wishlist-modal.show{display:block;opacity:1;pointer-events:all;z-index:1051}.wishlist-modal.show+.modal-backdrop{pointer-events:all}.wishlist-modal.fade .modal-dialog{max-width:34.375rem;-webkit-transform:translateY(0);transform:translateY(0)}.wishlist-modal .close{font-weight:400;color:#7a7a7a;opacity:1;font-size:2.25rem}.wishlist-modal .close:hover{opacity:.6}.wishlist-modal .modal-header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;border:none}.wishlist-modal .modal-header h5{color:#232323;font-size:1.375rem;font-weight:bold;letter-spacing:0;line-height:1.875rem}.wishlist-modal .modal-header::after{content:none}.wishlist-modal .modal-text{color:#232323;font-size:.875rem;letter-spacing:0;line-height:1.875rem}.wishlist-modal .modal-body{padding:.9375 1.875rem}.wishlist-modal .modal-body .form-group{margin-bottom:0}.wishlist-modal .modal-body .form-group .form-control{border-radius:0;background:none;color:#000}.wishlist-modal .modal-content{width:100%}.wishlist-modal .modal-cancel:hover{opacity:.7}.wishlist-modal .modal-footer{border:none}.wishlist-modal .modal-footer .btn{text-transform:none;margin-bottom:.5rem}.wishlist-modal .modal-backdrop{pointer-events:none}.wishlist-modal .modal-backdrop.in{pointer-events:all}.wishlist-modal+.modal-backdrop{pointer-events:none}.wishlist-modal+.modal-backdrop.in{pointer-events:all}.products article .wishlist-button-add{position:absolute;top:.635rem;right:.635rem;z-index:10}.wishlist-footer-links{margin-bottom:3.125rem}.wishlist-footer-links>a{font-size:.875rem;letter-spacing:0;line-height:1.1875rem}.wishlist-footer-links>a:not(:first-child){margin-left:1.25rem}.wishlist-footer-links>a i{font-size:1.25rem;margin-right:.25rem;vertical-align:middle}.lang-rtl .products article .wishlist-button-add{right:inherit;left:.635rem}.lang-rtl .wishlist-button-product{margin-left:0;margin-right:1.25rem}.lang-rtl .wishlist-list-item .dropdown-menu{right:inherit;left:1.25rem}.lang-rtl .wishlist-list-item-right .dropdown-menu>button{text-align:right}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/public/wishlist.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
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
 */
.wishlist-modal{display:none;opacity:0;pointer-events:none;z-index:0}.wishlist-modal.show{display:block;opacity:1;pointer-events:all;z-index:1051}.wishlist-modal.show+.modal-backdrop{pointer-events:all}.wishlist-modal.fade .modal-dialog{max-width:34.375rem;-webkit-transform:translateY(0);transform:translateY(0)}.wishlist-modal .close{font-weight:400;color:#7a7a7a;opacity:1;font-size:2.25rem}.wishlist-modal .close:hover{opacity:.6}.wishlist-modal .modal-header{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;border:none}.wishlist-modal .modal-header h5{color:#232323;font-size:1.375rem;font-weight:bold;letter-spacing:0;line-height:1.875rem}.wishlist-modal .modal-header::after{content:none}.wishlist-modal .modal-text{color:#232323;font-size:.875rem;letter-spacing:0;line-height:1.875rem}.wishlist-modal .modal-body{padding:.9375 1.875rem}.wishlist-modal .modal-body .form-group{margin-bottom:0}.wishlist-modal .modal-body .form-group .form-control{border-radius:0;background:none;color:#000}.wishlist-modal .modal-content{width:100%}.wishlist-modal .modal-cancel:hover{opacity:.7}.wishlist-modal .modal-footer{border:none}.wishlist-modal .modal-footer .btn{text-transform:none;margin-bottom:.5rem}.wishlist-modal .modal-backdrop{pointer-events:none}.wishlist-modal .modal-backdrop.in{pointer-events:all}.wishlist-modal+.modal-backdrop{pointer-events:none}.wishlist-modal+.modal-backdrop.in{pointer-events:all}.products article .wishlist-button-add{position:absolute;top:.635rem;right:.635rem;z-index:10}.wishlist-footer-links{margin-bottom:3.125rem}.wishlist-footer-links>a{font-size:.875rem;letter-spacing:0;line-height:1.1875rem}.wishlist-footer-links>a:not(:first-child){margin-left:1.25rem}.wishlist-footer-links>a i{font-size:1.25rem;margin-right:.25rem;vertical-align:middle}.lang-rtl .products article .wishlist-button-add{right:inherit;left:.635rem}.lang-rtl .wishlist-button-product{margin-left:0;margin-right:1.25rem}.lang-rtl .wishlist-list-item .dropdown-menu{right:inherit;left:1.25rem}.lang-rtl .wishlist-list-item-right .dropdown-menu>button{text-align:right}
", "@Modules/blockwishlist/public/wishlist.css", "/var/www/html/modules/blockwishlist/public/wishlist.css");
    }
}
