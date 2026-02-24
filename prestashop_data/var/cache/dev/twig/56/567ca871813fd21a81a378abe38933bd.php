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

/* @Modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl */
class __TwigTemplate_2860b2ff31bc4ebe9b6104a63b78bcfe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl"));

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

<div id=\"block_myaccount_infos\">
  <h4><a href=\"{\$urls.pages.my_account}\" title=\"{l s='Your account' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Your account' d='Shop.Theme.Customeraccount'}</a></h4>
  <ul>
    {if \$customer.is_logged}
      <li><a href=\"{\$urls.pages.identity}\" title=\"{l s='Information' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Information' d='Shop.Theme.Customeraccount'}</a></li>
      {if \$customer.addresses|count}
        <li><a href=\"{\$urls.pages.addresses}\" title=\"{l s='Addresses' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Addresses' d='Shop.Theme.Customeraccount'}</a></li>
      {else}
        <li><a href=\"{\$urls.pages.address}\" title=\"{l s='Add first address' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Add first address' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.history}\" title=\"{l s='Orders' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Orders' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.order_slip}\" title=\"{l s='Credit slips' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Credit slips' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if \$configuration.voucher_enabled && !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.discount}\" title=\"{l s='Vouchers' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Vouchers' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if \$configuration.return_enabled && !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.order_follow}\" title=\"{l s='Merchandise returns' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Merchandise returns' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {hook h=\"displayMyAccountBlock\"}
      <li><a href=\"{\$urls.actions.logout}\" title=\"{l s='Log me out' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Sign out' d='Shop.Theme.Actions'}</a></li>
    {else}
      <li><a href=\"{\$urls.pages.guest_tracking}\" title=\"{l s='Order tracking' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Order tracking' d='Shop.Theme.Customeraccount'}</a></li>
      <li><a href=\"{\$urls.pages.my_account}\" title=\"{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Sign in' d='Shop.Theme.Actions'}</a></li>
      <li><a href=\"{\$urls.pages.register}\" title=\"{l s='Create account' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Create account' d='Shop.Theme.Customeraccount'}</a></li>
      {hook h=\"displayMyAccountBlock\"}
    {/if}
  </ul>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl";
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

<div id=\"block_myaccount_infos\">
  <h4><a href=\"{\$urls.pages.my_account}\" title=\"{l s='Your account' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Your account' d='Shop.Theme.Customeraccount'}</a></h4>
  <ul>
    {if \$customer.is_logged}
      <li><a href=\"{\$urls.pages.identity}\" title=\"{l s='Information' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Information' d='Shop.Theme.Customeraccount'}</a></li>
      {if \$customer.addresses|count}
        <li><a href=\"{\$urls.pages.addresses}\" title=\"{l s='Addresses' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Addresses' d='Shop.Theme.Customeraccount'}</a></li>
      {else}
        <li><a href=\"{\$urls.pages.address}\" title=\"{l s='Add first address' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Add first address' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.history}\" title=\"{l s='Orders' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Orders' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.order_slip}\" title=\"{l s='Credit slips' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Credit slips' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if \$configuration.voucher_enabled && !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.discount}\" title=\"{l s='Vouchers' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Vouchers' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {if \$configuration.return_enabled && !\$configuration.is_catalog}
        <li><a href=\"{\$urls.pages.order_follow}\" title=\"{l s='Merchandise returns' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Merchandise returns' d='Shop.Theme.Customeraccount'}</a></li>
      {/if}
      {hook h=\"displayMyAccountBlock\"}
      <li><a href=\"{\$urls.actions.logout}\" title=\"{l s='Log me out' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Sign out' d='Shop.Theme.Actions'}</a></li>
    {else}
      <li><a href=\"{\$urls.pages.guest_tracking}\" title=\"{l s='Order tracking' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Order tracking' d='Shop.Theme.Customeraccount'}</a></li>
      <li><a href=\"{\$urls.pages.my_account}\" title=\"{l s='Log in to your customer account' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Sign in' d='Shop.Theme.Actions'}</a></li>
      <li><a href=\"{\$urls.pages.register}\" title=\"{l s='Create account' d='Shop.Theme.Customeraccount'}\" rel=\"nofollow\">{l s='Create account' d='Shop.Theme.Customeraccount'}</a></li>
      {hook h=\"displayMyAccountBlock\"}
    {/if}
  </ul>
</div>
", "@Modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl", "/var/www/html/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl");
    }
}
