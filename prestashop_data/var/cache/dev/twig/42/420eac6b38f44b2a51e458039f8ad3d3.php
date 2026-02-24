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

/* @Modules/ps_facetedsearch/views/templates/hook/feature_value_form.tpl */
class __TwigTemplate_cce71188d7e7c8cc6da8e5a4e1f993d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/hook/feature_value_form.tpl"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/templates/hook/feature_value_form.tpl"));

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
<div class=\"form-group\">
\t<label class=\"control-label col-lg-4\">
\t\t<span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{l s='Invalid characters: <>;=#{}_' d='Modules.Facetedsearch.Admin'}\">{l s='URL' d='Modules.Facetedsearch.Admin'}</span>
\t</label>
\t<div class=\"col-lg-8\">
\t\t<div class=\"row\">
\t\t\t{foreach \$languages as \$language}
\t\t\t  <div class=\"translatable-field lang-{\$language['id_lang']}\" style=\"display: {if \$language['id_lang'] == \$default_form_language}block{else}none{/if};\">
\t\t\t\t  <div class=\"col-lg-9\">
\t\t\t\t\t  <input type=\"text\" size=\"64\" name=\"url_name_{\$language['id_lang']}\" value=\"{if isset(\$values[\$language['id_lang']]) && isset(\$values[\$language['id_lang']]['url_name'])}{\$values[\$language['id_lang']]['url_name']|escape:'htmlall':'UTF-8'}{/if}\" />
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-lg-2\">
\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" tabindex=\"-1\" data-toggle=\"dropdown\">
\t\t\t\t\t\t  {\$language['iso_code']}
\t\t\t\t\t\t  <span class=\"caret\"></span>
\t\t\t\t\t  </button>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t  {foreach \$languages as \$language}
\t\t\t\t\t\t    <li><a href=\"javascript:hideOtherLanguage({\$language['id_lang']});\" tabindex=\"-1\">{\$language['name']}</a></li>
\t\t\t\t\t\t  {/foreach}
\t\t\t\t\t  </ul>
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t{/foreach}
\t\t\t<div class=\"col-lg-9\">
\t\t\t\t<p class=\"help-block\">{l s='When the Faceted Search module is enabled, you can get more detailed URLs by choosing the word that best represent this feature\\'s value. By default, PrestaShop uses the value\\'s name, but you can change that setting using this field.' d='Modules.Facetedsearch.Admin'}</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"control-label col-lg-4\">{l s='Meta title' d='Admin.Global'}</label>
\t<div class=\"col-lg-8\">
\t\t<div class=\"row\">
\t\t\t{foreach \$languages as \$language}
\t\t\t  <div class=\"translatable-field lang-{\$language['id_lang']}\" style=\"display: {if \$language['id_lang'] == \$default_form_language}block{else}none{/if};\">
\t\t\t\t  <div class=\"col-lg-9\">
\t\t\t\t\t  <input type=\"text\" size=\"70\" name=\"meta_title_{\$language['id_lang']}\" value=\"{if isset(\$values[\$language['id_lang']]) && isset(\$values[\$language['id_lang']]['meta_title'])}{\$values[\$language['id_lang']]['meta_title']|escape:'htmlall':'UTF-8'}{/if}\" />
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-lg-2\">
\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" tabindex=\"-1\" data-toggle=\"dropdown\">
\t\t\t\t\t\t  {\$language['iso_code']}
\t\t\t\t\t\t  <span class=\"caret\"></span>
\t\t\t\t\t  </button>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t  {foreach \$languages as \$language}
\t\t\t\t\t\t    <li><a href=\"javascript:hideOtherLanguage({\$language['id_lang']});\" tabindex=\"-1\">{\$language['name']}</a></li>
\t\t\t\t\t\t  {/foreach}
\t\t\t\t\t  </ul>
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t{/foreach}
\t\t\t<div class=\"col-lg-9\">
\t\t\t\t<p class=\"help-block\">{l s='When the Faceted Search module is enabled, you can get more detailed page titles by choosing the word that best represent this feature\\'s value. By default, PrestaShop uses the value\\'s name, but you can change that setting using this field.' d='Modules.Facetedsearch.Admin'}</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/templates/hook/feature_value_form.tpl";
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
<div class=\"form-group\">
\t<label class=\"control-label col-lg-4\">
\t\t<span class=\"label-tooltip\" data-toggle=\"tooltip\" data-html=\"true\" title=\"\" data-original-title=\"{l s='Invalid characters: <>;=#{}_' d='Modules.Facetedsearch.Admin'}\">{l s='URL' d='Modules.Facetedsearch.Admin'}</span>
\t</label>
\t<div class=\"col-lg-8\">
\t\t<div class=\"row\">
\t\t\t{foreach \$languages as \$language}
\t\t\t  <div class=\"translatable-field lang-{\$language['id_lang']}\" style=\"display: {if \$language['id_lang'] == \$default_form_language}block{else}none{/if};\">
\t\t\t\t  <div class=\"col-lg-9\">
\t\t\t\t\t  <input type=\"text\" size=\"64\" name=\"url_name_{\$language['id_lang']}\" value=\"{if isset(\$values[\$language['id_lang']]) && isset(\$values[\$language['id_lang']]['url_name'])}{\$values[\$language['id_lang']]['url_name']|escape:'htmlall':'UTF-8'}{/if}\" />
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-lg-2\">
\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" tabindex=\"-1\" data-toggle=\"dropdown\">
\t\t\t\t\t\t  {\$language['iso_code']}
\t\t\t\t\t\t  <span class=\"caret\"></span>
\t\t\t\t\t  </button>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t  {foreach \$languages as \$language}
\t\t\t\t\t\t    <li><a href=\"javascript:hideOtherLanguage({\$language['id_lang']});\" tabindex=\"-1\">{\$language['name']}</a></li>
\t\t\t\t\t\t  {/foreach}
\t\t\t\t\t  </ul>
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t{/foreach}
\t\t\t<div class=\"col-lg-9\">
\t\t\t\t<p class=\"help-block\">{l s='When the Faceted Search module is enabled, you can get more detailed URLs by choosing the word that best represent this feature\\'s value. By default, PrestaShop uses the value\\'s name, but you can change that setting using this field.' d='Modules.Facetedsearch.Admin'}</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"form-group\">
\t<label class=\"control-label col-lg-4\">{l s='Meta title' d='Admin.Global'}</label>
\t<div class=\"col-lg-8\">
\t\t<div class=\"row\">
\t\t\t{foreach \$languages as \$language}
\t\t\t  <div class=\"translatable-field lang-{\$language['id_lang']}\" style=\"display: {if \$language['id_lang'] == \$default_form_language}block{else}none{/if};\">
\t\t\t\t  <div class=\"col-lg-9\">
\t\t\t\t\t  <input type=\"text\" size=\"70\" name=\"meta_title_{\$language['id_lang']}\" value=\"{if isset(\$values[\$language['id_lang']]) && isset(\$values[\$language['id_lang']]['meta_title'])}{\$values[\$language['id_lang']]['meta_title']|escape:'htmlall':'UTF-8'}{/if}\" />
\t\t\t\t  </div>
\t\t\t\t  <div class=\"col-lg-2\">
\t\t\t\t\t  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" tabindex=\"-1\" data-toggle=\"dropdown\">
\t\t\t\t\t\t  {\$language['iso_code']}
\t\t\t\t\t\t  <span class=\"caret\"></span>
\t\t\t\t\t  </button>
\t\t\t\t\t  <ul class=\"dropdown-menu\">
\t\t\t\t\t\t  {foreach \$languages as \$language}
\t\t\t\t\t\t    <li><a href=\"javascript:hideOtherLanguage({\$language['id_lang']});\" tabindex=\"-1\">{\$language['name']}</a></li>
\t\t\t\t\t\t  {/foreach}
\t\t\t\t\t  </ul>
\t\t\t\t  </div>
\t\t\t  </div>
\t\t\t{/foreach}
\t\t\t<div class=\"col-lg-9\">
\t\t\t\t<p class=\"help-block\">{l s='When the Faceted Search module is enabled, you can get more detailed page titles by choosing the word that best represent this feature\\'s value. By default, PrestaShop uses the value\\'s name, but you can change that setting using this field.' d='Modules.Facetedsearch.Admin'}</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
", "@Modules/ps_facetedsearch/views/templates/hook/feature_value_form.tpl", "/var/www/html/modules/ps_facetedsearch/views/templates/hook/feature_value_form.tpl");
    }
}
