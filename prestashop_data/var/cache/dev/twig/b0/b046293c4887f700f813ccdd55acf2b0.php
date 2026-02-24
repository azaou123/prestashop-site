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

/* @Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl */
class __TwigTemplate_90631d672c220f9acd63ca48a13f67a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl"));

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

<h2>{l s='Last connections' mod='psgdpr'}</h2>
<br>
<table id=\"summary-tab\" width=\"100%\">
    <tr>
        <th class=\"header\" valign=\"middle\">{l s='Origin request' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Page viewed' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Time on the page' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='IP address' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Date' mod='psgdpr'}</th>
    </tr>

    {if count(\$connections) >= 1}
    {foreach from=\$connections item=connection}
    <tr>
        <td class=\"center white\">{\$connection['http_referer']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['pages']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['time']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['ipaddress']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['date_add']|escape:'html':'UTF-8'}</td>
    </tr>
    {/foreach}
    {else}
    <tr>
        <td colspan=\"5\" class=\"center white\">{l s='No connections' mod='psgdpr'}</td>
    </tr>
    {/if}
</table>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl";
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

<h2>{l s='Last connections' mod='psgdpr'}</h2>
<br>
<table id=\"summary-tab\" width=\"100%\">
    <tr>
        <th class=\"header\" valign=\"middle\">{l s='Origin request' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Page viewed' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Time on the page' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='IP address' mod='psgdpr'}</th>
        <th class=\"header\" valign=\"middle\">{l s='Date' mod='psgdpr'}</th>
    </tr>

    {if count(\$connections) >= 1}
    {foreach from=\$connections item=connection}
    <tr>
        <td class=\"center white\">{\$connection['http_referer']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['pages']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['time']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['ipaddress']|escape:'html':'UTF-8'}</td>
        <td class=\"center white\">{\$connection['date_add']|escape:'html':'UTF-8'}</td>
    </tr>
    {/foreach}
    {else}
    <tr>
        <td colspan=\"5\" class=\"center white\">{l s='No connections' mod='psgdpr'}</td>
    </tr>
    {/if}
</table>
", "@Modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl", "/var/www/html/modules/psgdpr/views/templates/front/pdf/personalData.connections-tab.tpl");
    }
}
