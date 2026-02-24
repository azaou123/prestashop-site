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

/* @Modules/blockwishlist/views/templates/components/pagination.tpl */
class __TwigTemplate_b559f90bcc12046a24dc8c685df0a50f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/components/pagination.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/views/templates/components/pagination.tpl"));

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
<nav class=\"wishlist-pagination pagination\">
  <template v-if=\"display\">
    <div class=\"col-md-4\">
      {l s='Showing %min% - %max% of %total% item(s)' sprintf=['%min%' => '((minShown))', '%max%' => '((maxShown))', '%total%' => '((total))'] d='Modules.Blockwishlist.Shop'}
    </div>

    <div class=\"col-md-6 offset-md-2 pr-0\">
      <ul class=\"page-list clearfix text-sm-center\">
        <li :class=\"{literal}{current: page.current}{/literal}\" v-for=\"page of pages\">
          <a class=\"js-wishlist-search-link\" @click=\"paginate(page)\" key=\"page.page\" :class=\"{literal}{disabled: page.current, next: page.type === 'next', previous: page.type === 'previous'}{/literal}\">
            <span v-if=\"page.type === 'previous'\">
              <i class=\"material-icons\">keyboard_arrow_left</i> {l s='Previous' d='Modules.Blockwishlist.Shop'} 
            </span>

            <template v-if=\"page.type !== 'previous' && page.type !== 'next'\">
              ((page.page))
            </template>

            <span v-if=\"page.type === 'next'\">
              {l s='Next' d='Modules.Blockwishlist.Shop'} <i class=\"material-icons\"></i>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </template>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/views/templates/components/pagination.tpl";
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
<nav class=\"wishlist-pagination pagination\">
  <template v-if=\"display\">
    <div class=\"col-md-4\">
      {l s='Showing %min% - %max% of %total% item(s)' sprintf=['%min%' => '((minShown))', '%max%' => '((maxShown))', '%total%' => '((total))'] d='Modules.Blockwishlist.Shop'}
    </div>

    <div class=\"col-md-6 offset-md-2 pr-0\">
      <ul class=\"page-list clearfix text-sm-center\">
        <li :class=\"{literal}{current: page.current}{/literal}\" v-for=\"page of pages\">
          <a class=\"js-wishlist-search-link\" @click=\"paginate(page)\" key=\"page.page\" :class=\"{literal}{disabled: page.current, next: page.type === 'next', previous: page.type === 'previous'}{/literal}\">
            <span v-if=\"page.type === 'previous'\">
              <i class=\"material-icons\">keyboard_arrow_left</i> {l s='Previous' d='Modules.Blockwishlist.Shop'} 
            </span>

            <template v-if=\"page.type !== 'previous' && page.type !== 'next'\">
              ((page.page))
            </template>

            <span v-if=\"page.type === 'next'\">
              {l s='Next' d='Modules.Blockwishlist.Shop'} <i class=\"material-icons\"></i>
            </span>
          </a>
        </li>
      </ul>
    </div>
  </template>
</nav>
", "@Modules/blockwishlist/views/templates/components/pagination.tpl", "/var/www/html/modules/blockwishlist/views/templates/components/pagination.tpl");
    }
}
