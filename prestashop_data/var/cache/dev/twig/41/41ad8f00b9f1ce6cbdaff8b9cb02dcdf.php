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

/* @Modules/blockwishlist/public/backoffice.css */
class __TwigTemplate_0c18406976167230e11dfb82ddca6bf4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/public/backoffice.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/public/backoffice.css"));

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
.wishlist-stats .card-text{width:100%;padding:10px 30px}.wishlist-stats .wishlist-stats-topbar{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-bottom:20px}.wishlist-stats .wishlist-stats-topbar .btn-group{border:1px solid #b7ced3;border-radius:3px}.wishlist-stats .wishlist-stats-topbar .btn-group button{color:#363a41;font-size:14px;letter-spacing:0;line-height:19px;background:none;font-weight:500;-webkit-transition:.25s ease-out;transition:.25s ease-out}.wishlist-stats .wishlist-stats-topbar .btn-group button:not(:last-child){border-right:1px solid #b7ced3}.wishlist-stats .wishlist-stats-topbar .btn-group button:hover,.wishlist-stats .wishlist-stats-topbar .btn-group button.active{background-color:#25b9d7;color:#fff}.wishlist-stats .wishlist-stats-topbar .refresh{color:#6c868e;font-size:14px;font-weight:bold;letter-spacing:0;line-height:19px;border:1px solid #6c868e;border-radius:4px;-webkit-transition:.25s ease-out;transition:.25s ease-out;background:none}.wishlist-stats .wishlist-stats-topbar .refresh:hover{background:#6c868e;color:#fff}.wishlist-stats .wishlist-tab{display:none}.wishlist-stats .wishlist-tab.active{display:block}.wishlist-stats .wishlist-tab .column-image img{max-width:50px}.wishlist-stats .wishlist-tab .column-conversionRate{font-weight:bold}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/public/backoffice.css";
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
.wishlist-stats .card-text{width:100%;padding:10px 30px}.wishlist-stats .wishlist-stats-topbar{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-bottom:20px}.wishlist-stats .wishlist-stats-topbar .btn-group{border:1px solid #b7ced3;border-radius:3px}.wishlist-stats .wishlist-stats-topbar .btn-group button{color:#363a41;font-size:14px;letter-spacing:0;line-height:19px;background:none;font-weight:500;-webkit-transition:.25s ease-out;transition:.25s ease-out}.wishlist-stats .wishlist-stats-topbar .btn-group button:not(:last-child){border-right:1px solid #b7ced3}.wishlist-stats .wishlist-stats-topbar .btn-group button:hover,.wishlist-stats .wishlist-stats-topbar .btn-group button.active{background-color:#25b9d7;color:#fff}.wishlist-stats .wishlist-stats-topbar .refresh{color:#6c868e;font-size:14px;font-weight:bold;letter-spacing:0;line-height:19px;border:1px solid #6c868e;border-radius:4px;-webkit-transition:.25s ease-out;transition:.25s ease-out;background:none}.wishlist-stats .wishlist-stats-topbar .refresh:hover{background:#6c868e;color:#fff}.wishlist-stats .wishlist-tab{display:none}.wishlist-stats .wishlist-tab.active{display:block}.wishlist-stats .wishlist-tab .column-image img{max-width:50px}.wishlist-stats .wishlist-tab .column-conversionRate{font-weight:bold}
", "@Modules/blockwishlist/public/backoffice.css", "/var/www/html/modules/blockwishlist/public/backoffice.css");
    }
}
