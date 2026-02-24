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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig */
class __TwigTemplate_d0089b263e458d4f58a76ea140838739 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig"));

        // line 25
        echo "
";
        // line 27
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", 27)->unwrap();
        // line 28
        echo "
<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download sample csv files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
        <div class=\"list-group\">
            ";
        // line 36
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Categories file", "categories_import"], 36, $context, $this->getSourceContext());
        echo "
            ";
        // line 37
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Products file", "products_import"], 37, $context, $this->getSourceContext());
        echo "
            ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Combinations file", "combinations_import"], 38, $context, $this->getSourceContext());
        echo "
            ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Customers file", "customers_import"], 39, $context, $this->getSourceContext());
        echo "
            ";
        // line 40
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Addresses file", "addresses_import"], 40, $context, $this->getSourceContext());
        echo "
            ";
        // line 41
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Brands file", "brands_import"], 41, $context, $this->getSourceContext());
        echo "
            ";
        // line 42
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Suppliers file", "suppliers_import"], 42, $context, $this->getSourceContext());
        echo "
            ";
        // line 43
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Aliases file", "alias_import"], 43, $context, $this->getSourceContext());
        echo "
            ";
        // line 44
        echo twig_call_macro($macros["ps"], "macro_import_file_sample", ["Sample Store Contacts file", "store_contacts"], 44, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 44,  89 => 43,  85 => 42,  81 => 41,  77 => 40,  73 => 39,  69 => 38,  65 => 37,  61 => 36,  53 => 31,  48 => 28,  46 => 27,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

{% trans_default_domain 'Admin.Advparameters.Feature' %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

<div class=\"card\">
    <h3 class=\"card-header\">
        <i class=\"material-icons\">file_download</i> {{ 'Download sample csv files'|trans({}, 'Admin.Advparameters.Feature') }}
    </h3>

    <div class=\"card-body\">
        <div class=\"list-group\">
            {{ ps.import_file_sample('Sample Categories file', 'categories_import') }}
            {{ ps.import_file_sample('Sample Products file', 'products_import') }}
            {{ ps.import_file_sample('Sample Combinations file', 'combinations_import') }}
            {{ ps.import_file_sample('Sample Customers file', 'customers_import') }}
            {{ ps.import_file_sample('Sample Addresses file', 'addresses_import') }}
            {{ ps.import_file_sample('Sample Brands file', 'brands_import') }}
            {{ ps.import_file_sample('Sample Suppliers file', 'suppliers_import') }}
            {{ ps.import_file_sample('Sample Aliases file', 'alias_import') }}
            {{ ps.import_file_sample('Sample Store Contacts file', 'store_contacts') }}
        </div>
    </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_sample_files.html.twig");
    }
}
