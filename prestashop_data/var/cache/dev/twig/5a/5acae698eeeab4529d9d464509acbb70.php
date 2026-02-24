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

/* @Modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl */
class __TwigTemplate_e995e0301c40b93940a1ad5341097b5b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl"));

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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<section id=\"js-active-search-filters\" class=\"{if \$activeFilters|count}active_filters{else}hide{/if}\">
  {block name='active_filters_title'}
    <p class=\"h6 {if \$activeFilters|count}active-filter-title{else}hidden-xs-up{/if}\">{l s='Active filters' d='Shop.Theme.Global'}</p>
  {/block}

  {if \$activeFilters|count}
    <ul>
      {foreach from=\$activeFilters item=\"filter\"}
        {block name='active_filters_item'}
          <li class=\"filter-block\">
            {l s='%1\$s:' d='Shop.Theme.Catalog' sprintf=[\$filter.facetLabel]}
            {\$filter.label}
            <a class=\"js-search-link\" href=\"{\$filter.nextEncodedFacetsURL}\"><i class=\"material-icons close\">&#xE5CD;</i></a>
          </li>
        {/block}
      {/foreach}
    </ul>
  {/if}
</section>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl";
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
<section id=\"js-active-search-filters\" class=\"{if \$activeFilters|count}active_filters{else}hide{/if}\">
  {block name='active_filters_title'}
    <p class=\"h6 {if \$activeFilters|count}active-filter-title{else}hidden-xs-up{/if}\">{l s='Active filters' d='Shop.Theme.Global'}</p>
  {/block}

  {if \$activeFilters|count}
    <ul>
      {foreach from=\$activeFilters item=\"filter\"}
        {block name='active_filters_item'}
          <li class=\"filter-block\">
            {l s='%1\$s:' d='Shop.Theme.Catalog' sprintf=[\$filter.facetLabel]}
            {\$filter.label}
            <a class=\"js-search-link\" href=\"{\$filter.nextEncodedFacetsURL}\"><i class=\"material-icons close\">&#xE5CD;</i></a>
          </li>
        {/block}
      {/foreach}
    </ul>
  {/if}
</section>
", "@Modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl", "/var/www/html/modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl");
    }
}
