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

/* @Modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl */
class __TwigTemplate_60cb855b1a1e009a7293257f5008ffed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl"));

        // line 1
        echo "{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div class=\"product-comment-list-item row\" data-product-comment-id=\"@COMMENT_ID@\" data-product-id=\"@PRODUCT_ID@\">
  <div class=\"col-sm-3 comment-infos\">
    <div class=\"grade-stars\" data-grade=\"@COMMENT_GRADE@\"></div>
    <div class=\"comment-date\">
      @COMMENT_DATE@
    </div>
    <div class=\"comment-author\">
      {l s='By %1\$s' sprintf=['@CUSTOMER_NAME@'] d='Modules.Productcomments.Shop'}
    </div>
  </div>

  <div class=\"col-sm-9 comment-content\">
    <p class=\"h4\">@COMMENT_TITLE@</p>
    <p>@COMMENT_COMMENT@</p>
    <div class=\"comment-buttons btn-group\">
      {if \$usefulness_enabled}
        <a class=\"useful-review\">
          <i class=\"material-icons thumb_up\" data-icon=\"thumb_up\"></i>
          <span class=\"useful-review-value\">@COMMENT_USEFUL_ADVICES@</span>
        </a>
        <a class=\"not-useful-review\">
          <i class=\"material-icons thumb_down\" data-icon=\"thumb_down\"></i>
          <span class=\"not-useful-review-value\">@COMMENT_NOT_USEFUL_ADVICES@</span>
        </a>
      {/if}
      <a class=\"report-abuse\" title=\"{l s='Report abuse' d='Modules.Productcomments.Shop'}\">
        <i class=\"material-icons flag\" data-icon=\"flag\"></i>
      </a>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl";
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}

<div class=\"product-comment-list-item row\" data-product-comment-id=\"@COMMENT_ID@\" data-product-id=\"@PRODUCT_ID@\">
  <div class=\"col-sm-3 comment-infos\">
    <div class=\"grade-stars\" data-grade=\"@COMMENT_GRADE@\"></div>
    <div class=\"comment-date\">
      @COMMENT_DATE@
    </div>
    <div class=\"comment-author\">
      {l s='By %1\$s' sprintf=['@CUSTOMER_NAME@'] d='Modules.Productcomments.Shop'}
    </div>
  </div>

  <div class=\"col-sm-9 comment-content\">
    <p class=\"h4\">@COMMENT_TITLE@</p>
    <p>@COMMENT_COMMENT@</p>
    <div class=\"comment-buttons btn-group\">
      {if \$usefulness_enabled}
        <a class=\"useful-review\">
          <i class=\"material-icons thumb_up\" data-icon=\"thumb_up\"></i>
          <span class=\"useful-review-value\">@COMMENT_USEFUL_ADVICES@</span>
        </a>
        <a class=\"not-useful-review\">
          <i class=\"material-icons thumb_down\" data-icon=\"thumb_down\"></i>
          <span class=\"not-useful-review-value\">@COMMENT_NOT_USEFUL_ADVICES@</span>
        </a>
      {/if}
      <a class=\"report-abuse\" title=\"{l s='Report abuse' d='Modules.Productcomments.Shop'}\">
        <i class=\"material-icons flag\" data-icon=\"flag\"></i>
      </a>
    </div>
  </div>
</div>
", "@Modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl", "/var/www/html/modules/productcomments/views/templates/hook/product-comment-item-prototype.tpl");
    }
}
