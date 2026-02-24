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

/* @Modules/ps_facetedsearch/views/templates/admin/_partials/messages.tpl */
class __TwigTemplate_b1355a7f38c9d730c0dcfea3b885219d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/admin/_partials/messages.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/admin/_partials/messages.tpl"));

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
{if isset(\$message)}{\$message}{/if}

<div id=\"ajax-message-ok\" class=\"conf ajax-message alert alert-success\" style=\"display: none\">
\t<span class=\"message\"></span>
</div>
<div id=\"ajax-message-ko\" class=\"error ajax-message alert alert-danger\" style=\"display: none\">
\t<span class=\"message\"></span>
</div>

{if !empty(\$limit_warning)}
\t<div class=\"alert alert-danger\">
\t\t{if \$limit_warning['error_type'] == 'suhosin'}
\t\t\t{l s='Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:' d='Modules.Facetedsearch.Admin'}

\t\t\t<b>{\$limit_warning['post.max_vars']}</b> {l s='for suhosin.post.max_vars.' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t<b>{\$limit_warning['request.max_vars']}</b> {l s='for suhosin.request.max_vars.' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t{l s='Please ask your hosting provider to increase the Suhosin limit to' d='Modules.Facetedsearch.Admin'}
\t\t{else}
\t\t\t{l s='Warning! Your PHP configuration limits the maximum number of fields allowed in a form:' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t<b>{\$limit_warning['max_input_vars']}</b> {l s='for max_input_vars.' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t{l s='Please ask your hosting provider to increase this limit to' d='Modules.Facetedsearch.Admin'}
\t\t{/if}
\t\t{l s='%s at least, or you will have to edit the translation files manually.' sprintf=\$limit_warning['needed_limit'] d='Modules.Facetedsearch.Admin'}
\t</div>
{/if}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/templates/admin/_partials/messages.tpl";
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
{if isset(\$message)}{\$message}{/if}

<div id=\"ajax-message-ok\" class=\"conf ajax-message alert alert-success\" style=\"display: none\">
\t<span class=\"message\"></span>
</div>
<div id=\"ajax-message-ko\" class=\"error ajax-message alert alert-danger\" style=\"display: none\">
\t<span class=\"message\"></span>
</div>

{if !empty(\$limit_warning)}
\t<div class=\"alert alert-danger\">
\t\t{if \$limit_warning['error_type'] == 'suhosin'}
\t\t\t{l s='Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:' d='Modules.Facetedsearch.Admin'}

\t\t\t<b>{\$limit_warning['post.max_vars']}</b> {l s='for suhosin.post.max_vars.' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t<b>{\$limit_warning['request.max_vars']}</b> {l s='for suhosin.request.max_vars.' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t{l s='Please ask your hosting provider to increase the Suhosin limit to' d='Modules.Facetedsearch.Admin'}
\t\t{else}
\t\t\t{l s='Warning! Your PHP configuration limits the maximum number of fields allowed in a form:' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t<b>{\$limit_warning['max_input_vars']}</b> {l s='for max_input_vars.' d='Modules.Facetedsearch.Admin'}<br/>
\t\t\t{l s='Please ask your hosting provider to increase this limit to' d='Modules.Facetedsearch.Admin'}
\t\t{/if}
\t\t{l s='%s at least, or you will have to edit the translation files manually.' sprintf=\$limit_warning['needed_limit'] d='Modules.Facetedsearch.Admin'}
\t</div>
{/if}
", "@Modules/ps_facetedsearch/views/templates/admin/_partials/messages.tpl", "/var/www/html/modules/ps_facetedsearch/views/templates/admin/_partials/messages.tpl");
    }
}
