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

/* @Modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl */
class __TwigTemplate_969883864519866bb9c878159209e960 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl"));

        // line 1
        echo "{**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<span class=\"product-quantity\">{\$product.quantity}</span>
<span class=\"product-name\">{\$product.name}</span>
<span class=\"product-price\">{\$product.price}</span>
<a  class=\"remove-from-cart\"
    rel=\"nofollow\"
    href=\"{\$product.remove_from_cart_url}\"
    data-link-action=\"remove-from-cart\"
>
    {l s=\"Remove\" d=\"Shop.Theme.Actions\"}
</a>
{if \$product.customizations|count}
    <div class=\"customizations\">
        <ul>
            {foreach from=\$product.customizations item=\"customization\"}
                <li>
                    <span class=\"product-quantity\">{\$customization.quantity}</span>
                    <a href=\"{\$customization.remove_from_cart_url}\" class=\"remove-from-cart\" rel=\"nofollow\">{l s='Remove' d=\"Shop.Theme.Actions\"}</a>
                    <ul>
                        {foreach from=\$customization.fields item=\"field\"}
                            <li>
                                <label>{\$field.label}</label>
                                {if \$field.type == 'text'}
                                    <span>{\$field.text}</span>
                                {elseif \$field.type == 'image'}
                                    <img src=\"{\$field.image.small.url}\">
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<span class=\"product-quantity\">{\$product.quantity}</span>
<span class=\"product-name\">{\$product.name}</span>
<span class=\"product-price\">{\$product.price}</span>
<a  class=\"remove-from-cart\"
    rel=\"nofollow\"
    href=\"{\$product.remove_from_cart_url}\"
    data-link-action=\"remove-from-cart\"
>
    {l s=\"Remove\" d=\"Shop.Theme.Actions\"}
</a>
{if \$product.customizations|count}
    <div class=\"customizations\">
        <ul>
            {foreach from=\$product.customizations item=\"customization\"}
                <li>
                    <span class=\"product-quantity\">{\$customization.quantity}</span>
                    <a href=\"{\$customization.remove_from_cart_url}\" class=\"remove-from-cart\" rel=\"nofollow\">{l s='Remove' d=\"Shop.Theme.Actions\"}</a>
                    <ul>
                        {foreach from=\$customization.fields item=\"field\"}
                            <li>
                                <label>{\$field.label}</label>
                                {if \$field.type == 'text'}
                                    <span>{\$field.text}</span>
                                {elseif \$field.type == 'image'}
                                    <img src=\"{\$field.image.small.url}\">
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}
", "@Modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl", "/var/www/html/modules/ps_shoppingcart/ps_shoppingcart-product-line.tpl");
    }
}
