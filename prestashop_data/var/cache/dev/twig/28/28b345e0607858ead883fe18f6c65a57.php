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

/* @Modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription-column.tpl */
class __TwigTemplate_5d40542fb75ee552294f5647ee95796d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription-column.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription-column.tpl"));

        // line 1
        echo "{*
 * 2007-2020 PrestaShop.
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class=\"email_subscription block_newsletter\" id=\"blockEmailSubscription_{\$hookName}\">
  <h4>{l s='Newsletter' d='Modules.Emailsubscription.Shop'}</h4>
  {if \$msg}
    <p class=\"notification {if \$nw_error}notification-error{else}notification-success{/if}\">{\$msg}</p>
  {/if}
  <form action=\"{\$urls.current_url}#blockEmailSubscription_{\$hookName}\" method=\"post\">
    <input type=\"email\" name=\"email\" value=\"{\$value}\" placeholder=\"{l s='Your e-mail' d='Modules.Emailsubscription.Shop'}\" required />
    {if \$conditions}
      <p>{\$conditions}</p>
    {/if}
    {hook h='displayNewsletterRegistration'}
    <input type=\"hidden\" name=\"blockHookName\" value=\"{\$hookName}\" />
    <input type=\"submit\" name=\"submitNewsletter\" value=\"ok\" />
    {hook h='displayGDPRConsent' id_module=\$id_module}
    <input type=\"hidden\" name=\"action\" value=\"0\" />
  </form>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription-column.tpl";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{*
 * 2007-2020 PrestaShop.
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}

<div class=\"email_subscription block_newsletter\" id=\"blockEmailSubscription_{\$hookName}\">
  <h4>{l s='Newsletter' d='Modules.Emailsubscription.Shop'}</h4>
  {if \$msg}
    <p class=\"notification {if \$nw_error}notification-error{else}notification-success{/if}\">{\$msg}</p>
  {/if}
  <form action=\"{\$urls.current_url}#blockEmailSubscription_{\$hookName}\" method=\"post\">
    <input type=\"email\" name=\"email\" value=\"{\$value}\" placeholder=\"{l s='Your e-mail' d='Modules.Emailsubscription.Shop'}\" required />
    {if \$conditions}
      <p>{\$conditions}</p>
    {/if}
    {hook h='displayNewsletterRegistration'}
    <input type=\"hidden\" name=\"blockHookName\" value=\"{\$hookName}\" />
    <input type=\"submit\" name=\"submitNewsletter\" value=\"ok\" />
    {hook h='displayGDPRConsent' id_module=\$id_module}
    <input type=\"hidden\" name=\"action\" value=\"0\" />
  </form>
</div>
", "@Modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription-column.tpl", "/var/www/html/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription-column.tpl");
    }
}
