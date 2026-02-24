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

/* @Modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl */
class __TwigTemplate_eff55086d138045cdb94345aa13fbcef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl"));

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

{extends file=\"helpers/options/options.tpl\"}

{block name=\"input\"}
  {if \$field['type'] == 'color'}
    <div class=\"col-lg-2\">
      <div class=\"input-group\">
        <input
                type=\"color\"
                data-hex=\"true\"
                class=\"{if isset(\$input.class)}{\$field['class']}{else}color mColorPickerInput{/if}\"
                name=\"{\$key}\"
                value=\"{\$field['value']|escape:'html':'UTF-8'}\"
        />
      </div>
    </div>
  {else}
    {\$smarty.block.parent}
  {/if}
{/block}

{block name=\"after\"}
  {\$smarty.block.parent}
  <script type=\"text/javascript\">
    // https://github.com/PrestaShop/PrestaShop/pull/18757
    \$.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
  </script>
{/block}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl";
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

{extends file=\"helpers/options/options.tpl\"}

{block name=\"input\"}
  {if \$field['type'] == 'color'}
    <div class=\"col-lg-2\">
      <div class=\"input-group\">
        <input
                type=\"color\"
                data-hex=\"true\"
                class=\"{if isset(\$input.class)}{\$field['class']}{else}color mColorPickerInput{/if}\"
                name=\"{\$key}\"
                value=\"{\$field['value']|escape:'html':'UTF-8'}\"
        />
      </div>
    </div>
  {else}
    {\$smarty.block.parent}
  {/if}
{/block}

{block name=\"after\"}
  {\$smarty.block.parent}
  <script type=\"text/javascript\">
    // https://github.com/PrestaShop/PrestaShop/pull/18757
    \$.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
  </script>
{/block}
", "@Modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl", "/var/www/html/modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl");
    }
}
