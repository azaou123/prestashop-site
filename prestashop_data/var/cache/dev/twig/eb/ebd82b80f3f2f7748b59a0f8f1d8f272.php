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

/* @Modules/blockwishlist/views/templates/pages/lists.tpl */
class __TwigTemplate_d3c22aaa5d4f9414d7775911656fe539 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/pages/lists.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/pages/lists.tpl"));

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
{extends file='customer/page.tpl'}

{block name='page_header_container'}
{/block}

{block name='page_content_container'}
  <div
    class=\"wishlist-container\"
    data-url=\"{\$url}\"
    data-title=\"{\$wishlistsTitlePage}\"
    data-empty-text=\"{l s='No wishlist found.' d='Modules.Blockwishlist.Shop'}\"
    data-rename-text=\"{l s='Rename' d='Modules.Blockwishlist.Shop'}\"
    data-share-text=\"{l s='Share' d='Modules.Blockwishlist.Shop'}\"
    data-add-text=\"{\$newWishlistCTA}\"
  ></div>

  {include file=\"module:blockwishlist/views/templates/components/modals/share.tpl\" url=\$shareUrl}
  {include file=\"module:blockwishlist/views/templates/components/modals/rename.tpl\" url=\$renameUrl}
{/block}


{block name='page_footer_container'}
  <div class=\"wishlist-footer-links\">
    <a href=\"{\$link->getPageLink('my-account', true)|escape:'html'}\" class=\"text-primary\"><i class=\"material-icons\">chevron_left</i>{l s='Return to your account' d='Modules.Blockwishlist.Shop'}</a>
    <a href=\"{\$urls.base_url}\" class=\"text-primary\"><i class=\"material-icons\">home</i>{l s='Home' d='Shop.Theme.Global'}</a>
  </div>
{/block}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/pages/lists.tpl";
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
{extends file='customer/page.tpl'}

{block name='page_header_container'}
{/block}

{block name='page_content_container'}
  <div
    class=\"wishlist-container\"
    data-url=\"{\$url}\"
    data-title=\"{\$wishlistsTitlePage}\"
    data-empty-text=\"{l s='No wishlist found.' d='Modules.Blockwishlist.Shop'}\"
    data-rename-text=\"{l s='Rename' d='Modules.Blockwishlist.Shop'}\"
    data-share-text=\"{l s='Share' d='Modules.Blockwishlist.Shop'}\"
    data-add-text=\"{\$newWishlistCTA}\"
  ></div>

  {include file=\"module:blockwishlist/views/templates/components/modals/share.tpl\" url=\$shareUrl}
  {include file=\"module:blockwishlist/views/templates/components/modals/rename.tpl\" url=\$renameUrl}
{/block}


{block name='page_footer_container'}
  <div class=\"wishlist-footer-links\">
    <a href=\"{\$link->getPageLink('my-account', true)|escape:'html'}\" class=\"text-primary\"><i class=\"material-icons\">chevron_left</i>{l s='Return to your account' d='Modules.Blockwishlist.Shop'}</a>
    <a href=\"{\$urls.base_url}\" class=\"text-primary\"><i class=\"material-icons\">home</i>{l s='Home' d='Shop.Theme.Global'}</a>
  </div>
{/block}
", "@Modules/blockwishlist/views/templates/pages/lists.tpl", "/var/www/html/modules/blockwishlist/views/templates/pages/lists.tpl");
    }
}
