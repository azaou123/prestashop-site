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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig */
class __TwigTemplate_de5646fca9ee0419491668fc2299251f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
<div class=\"card d-none js-files-history-block\">
    <div class=\"card-header\">
        ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("History of uploaded files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
        <span class=\"badge badge-primary js-files-history-number\">";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["importFileNames"]) || array_key_exists("importFileNames", $context) ? $context["importFileNames"] : (function () { throw new RuntimeError('Variable "importFileNames" does not exist.', 31, $this->source); })())), "html", null, true);
        echo "</span>
        <a href=\"#\" class=\"close js-close-files-history-block-btn\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </a>
    </div>
    <div class=\"card-content\">
        <table id=\"fileHistoryTable\"
               class=\"table mb-0\"
               data-delete-file-url=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_delete");
        echo "\"
               data-download-file-url=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_download");
        echo "\"
        >
            <tbody>
                <tr class=\"d-none\">
                    <td></td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Admin.Actions"), "html", null, true);
        echo "
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"#\" class=\"dropdown-item js-download-file-btn\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"#\" class=\"dropdown-item js-delete-file-btn\">
                                    <i class=\"material-icons\">delete</i>
                                    ";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["importFileNames"]) || array_key_exists("importFileNames", $context) ? $context["importFileNames"] : (function () { throw new RuntimeError('Variable "importFileNames" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["fileName"]) {
            // line 73
            echo "                <tr>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "</td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"";
            // line 76
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use", [], "Admin.Actions"), "html", null, true);
            echo "
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_download", ["filename" => $context["fileName"]]), "html", null, true);
            echo "\" class=\"dropdown-item\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_file_delete", ["filename" => $context["fileName"]]), "html", null, true);
            echo "\" class=\"dropdown-item\">
                                    <i class=\"material-icons\">delete</i>
                                    ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fileName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 103,  167 => 96,  162 => 94,  156 => 91,  151 => 89,  145 => 86,  134 => 78,  129 => 76,  124 => 74,  121 => 73,  117 => 72,  108 => 66,  100 => 61,  92 => 56,  81 => 48,  70 => 40,  66 => 39,  55 => 31,  51 => 30,  46 => 27,  43 => 25,);
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

<div class=\"card d-none js-files-history-block\">
    <div class=\"card-header\">
        {{ 'History of uploaded files'|trans({}, 'Admin.Advparameters.Feature') }}
        <span class=\"badge badge-primary js-files-history-number\">{{ importFileNames|length }}</span>
        <a href=\"#\" class=\"close js-close-files-history-block-btn\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </a>
    </div>
    <div class=\"card-content\">
        <table id=\"fileHistoryTable\"
               class=\"table mb-0\"
               data-delete-file-url=\"{{ path('admin_import_file_delete') }}\"
               data-download-file-url=\"{{ path('admin_import_file_download') }}\"
        >
            <tbody>
                <tr class=\"d-none\">
                    <td></td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                {{ 'Use'|trans({}, 'Admin.Actions') }}
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">{{ 'Toggle dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"#\" class=\"dropdown-item js-download-file-btn\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    {{ 'Download'|trans }}
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"#\" class=\"dropdown-item js-delete-file-btn\">
                                    <i class=\"material-icons\">delete</i>
                                    {{ 'Delete'|trans({}, 'Admin.Actions') }}
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                {% for fileName in importFileNames %}
                <tr>
                    <td>{{ fileName }}</td>
                    <td>
                        <div class=\"btn-group float-right\" data-file=\"{{ fileName }}\">
                            <button type=\"button\" class=\"btn btn-sm btn-outline-secondary js-use-file-btn\">
                                {{ 'Use'|trans({}, 'Admin.Actions') }}
                            </button>
                            <button type=\"button\"
                                    class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\"
                                    data-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                            >
                                <span class=\"sr-only\">{{ 'Toggle dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
                            </button>
                            <div class=\"dropdown-menu menu-sm\">
                                <a href=\"{{ path('admin_import_file_download', {'filename': fileName}) }}\" class=\"dropdown-item\" target=\"_blank\">
                                    <i class=\"material-icons\">file_download</i>
                                    {{ 'Download'|trans }}
                                </a>
                                <div class=\"dropdown-divider\"></div>
                                <a href=\"{{ path('admin_import_file_delete', {'filename': fileName}) }}\" class=\"dropdown-item\">
                                    <i class=\"material-icons\">delete</i>
                                    {{ 'Delete'|trans({}, 'Admin.Actions') }}
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
", "@PrestaShop/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Blocks/import_file_history.html.twig");
    }
}
