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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig */
class __TwigTemplate_5bcf01fa4e3bb5c0d55da7cc980fa7bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'generateMailsFormBlock' => [$this, 'block_generateMailsFormBlock'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('generateMailsFormBlock', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_generateMailsFormBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generateMailsFormBlock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generateMailsFormBlock"));

        // line 27
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List %theme% layouts", ["%theme%" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31)], "Admin.Design.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">

      <table class=\"grid-table table\">
        <thead class=\"thead-default\">
          <tr class=\"column-headers\">
            <th scope=\"col\">
              ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "html", null, true);
        echo "
            </th>
            <th scope=\"col\">
              ";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module", [], "Admin.Global"), "html", null, true);
        echo "
            </th>
            <th scope=\"col\">
              <div class=\"grid-actions-header-text\">
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 53, $this->source); })()), "layouts", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["mailLayout"]) {
            // line 54
            echo "            <tr>
              <td class=\"data-type\">
                ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
              </td>
              <td class=\"data-type\">
                ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 59), "html", null, true);
            echo "
              </td>
              <td class=\"action-type\">
                ";
            // line 62
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 62))) {
                // line 63
                echo "                  ";
                $context["previewUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_preview_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "locale", [], "any", false, false, false, 63), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 63), "type" => "html"]);
                // line 64
                echo "                  ";
                $context["rawUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "locale", [], "any", false, false, false, 64), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 64, $this->source); })()), "name", [], "any", false, false, false, 64), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 64), "type" => "html"]);
                // line 65
                echo "                  ";
                $context["txtUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "locale", [], "any", false, false, false, 65), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 65), "type" => "txt"]);
                // line 66
                echo "                  ";
                $context["mailUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_send_test_mail", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "locale", [], "any", false, false, false, 66), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 66)]);
                // line 67
                echo "                ";
            } else {
                // line 68
                echo "                  ";
                $context["previewUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_preview_module_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "locale", [], "any", false, false, false, 68), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 68, $this->source); })()), "name", [], "any", false, false, false, 68), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 68), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 68), "type" => "html"]);
                // line 69
                echo "                  ";
                $context["rawUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_module_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "request", [], "any", false, false, false, 69), "locale", [], "any", false, false, false, 69), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 69), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 69), "type" => "html"]);
                // line 70
                echo "                  ";
                $context["txtUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_raw_module_layout", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "request", [], "any", false, false, false, 70), "locale", [], "any", false, false, false, 70), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 70, $this->source); })()), "name", [], "any", false, false, false, 70), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 70), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 70), "type" => "txt"]);
                // line 71
                echo "                  ";
                $context["mailUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_send_test_module_mail", ["locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "locale", [], "any", false, false, false, 71), "theme" => twig_get_attribute($this->env, $this->source, (isset($context["mailTheme"]) || array_key_exists("mailTheme", $context) ? $context["mailTheme"] : (function () { throw new RuntimeError('Variable "mailTheme" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), "module" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "moduleName", [], "any", false, false, false, 71), "layout" => twig_get_attribute($this->env, $this->source, $context["mailLayout"], "name", [], "any", false, false, false, 71)]);
                // line 72
                echo "                ";
            }
            // line 73
            echo "
                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, (isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 76, $this->source); })()), "html", null, true);
            echo "\">
                      <i class=\"material-icons\">http</i>
                    </a>

                    <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
                       data-toggle=\"dropdown\" 
                       aria-haspopup=\"true\" 
                       aria-expanded=\"false\">
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                      <a target=\"_blank\" class=\"btn tooltip-link dropdown-item raw-html-link\" href=\"";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["rawUrl"]) || array_key_exists("rawUrl", $context) ? $context["rawUrl"] : (function () { throw new RuntimeError('Variable "rawUrl" does not exist.', 86, $this->source); })()), "html", null, true);
            echo "\">
                        <i class=\"material-icons\">code</i>
                        ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Raw HTML", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                      </a>
                      <a target=\"_blank\" class=\"btn tooltip-link dropdown-item raw-text-link\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["txtUrl"]) || array_key_exists("txtUrl", $context) ? $context["txtUrl"] : (function () { throw new RuntimeError('Variable "txtUrl" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "\">
                        <i class=\"material-icons\">subject</i>
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text", [], "Admin.Design.Feature"), "html", null, true);
            echo "
                      </a>
                      <a class=\"btn tooltip-link dropdown-item\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, (isset($context["mailUrl"]) || array_key_exists("mailUrl", $context) ? $context["mailUrl"] : (function () { throw new RuntimeError('Variable "mailUrl" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "\">
                        <i class=\"material-icons\">email</i>
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Send a test email", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                      </a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mailLayout'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "        </tbody>
      </table>

    </div>

    <div class=\"card-footer\">
      <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_index", ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 110, $this->source); })()), [])) : ([]))), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\" id=\"back-to-configuration-link\">
        <i class=\"material-icons rtl-flip\">arrow_back</i>
        ";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to configuration", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>

  </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  228 => 112,  223 => 110,  215 => 104,  201 => 96,  196 => 94,  191 => 92,  186 => 90,  181 => 88,  176 => 86,  163 => 76,  158 => 73,  155 => 72,  152 => 71,  149 => 70,  146 => 69,  143 => 68,  140 => 67,  137 => 66,  134 => 65,  131 => 64,  128 => 63,  126 => 62,  120 => 59,  114 => 56,  110 => 54,  106 => 53,  97 => 47,  90 => 43,  84 => 40,  72 => 31,  66 => 27,  47 => 26,  44 => 25,);
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

{% block generateMailsFormBlock %}

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      {{ 'List %theme% layouts'|trans({'%theme%': mailTheme.name}, 'Admin.Design.Feature') }}
    </h3>

    <div class=\"card-body\">

      <table class=\"grid-table table\">
        <thead class=\"thead-default\">
          <tr class=\"column-headers\">
            <th scope=\"col\">
              {{ 'Name'|trans({}, 'Admin.Global') }}
            </th>
            <th scope=\"col\">
              {{ 'Module'|trans({}, 'Admin.Global') }}
            </th>
            <th scope=\"col\">
              <div class=\"grid-actions-header-text\">
                {{ 'Actions'|trans({}, 'Admin.Global') }}
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          {% for mailLayout in mailTheme.layouts %}
            <tr>
              <td class=\"data-type\">
                {{ mailLayout.name }}
              </td>
              <td class=\"data-type\">
                {{ mailLayout.moduleName }}
              </td>
              <td class=\"action-type\">
                {% if mailLayout.moduleName is empty %}
                  {% set previewUrl = path('admin_mail_theme_preview_layout', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name, type: 'html'}) %}
                  {% set rawUrl = path('admin_mail_theme_raw_layout', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name, type: 'html'}) %}
                  {% set txtUrl = path('admin_mail_theme_raw_layout', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name, type: 'txt'}) %}
                  {% set mailUrl = path('admin_mail_theme_send_test_mail', {locale: app.request.locale, theme: mailTheme.name, layout: mailLayout.name}) %}
                {% else %}
                  {% set previewUrl = path('admin_mail_theme_preview_module_layout', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name, type: 'html'}) %}
                  {% set rawUrl = path('admin_mail_theme_raw_module_layout', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name, type: 'html'}) %}
                  {% set txtUrl = path('admin_mail_theme_raw_module_layout', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name, type: 'txt'}) %}
                  {% set mailUrl = path('admin_mail_theme_send_test_module_mail', {locale: app.request.locale, theme: mailTheme.name, module: mailLayout.moduleName, layout: mailLayout.name}) %}
                {% endif %}

                <div class=\"btn-group-action text-right\">
                  <div class=\"btn-group\">
                    <a target=\"_blank\" class=\"btn tooltip-link dropdown-item\" href=\"{{ previewUrl }}\">
                      <i class=\"material-icons\">http</i>
                    </a>

                    <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
                       data-toggle=\"dropdown\" 
                       aria-haspopup=\"true\" 
                       aria-expanded=\"false\">
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\">
                      <a target=\"_blank\" class=\"btn tooltip-link dropdown-item raw-html-link\" href=\"{{ rawUrl }}\">
                        <i class=\"material-icons\">code</i>
                        {{ 'Raw HTML'|trans({}, 'Admin.Design.Feature') }}
                      </a>
                      <a target=\"_blank\" class=\"btn tooltip-link dropdown-item raw-text-link\" href=\"{{ txtUrl }}\">
                        <i class=\"material-icons\">subject</i>
                        {{ 'Text'|trans({}, 'Admin.Design.Feature') }}
                      </a>
                      <a class=\"btn tooltip-link dropdown-item\" href=\"{{ mailUrl }}\">
                        <i class=\"material-icons\">email</i>
                        {{ 'Send a test email'|trans({}, 'Admin.Advparameters.Feature') }}
                      </a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>

    </div>

    <div class=\"card-footer\">
      <a href=\"{{ path('admin_mail_theme_index', params|default({})) }}\" class=\"btn btn-outline-secondary\" id=\"back-to-configuration-link\">
        <i class=\"material-icons rtl-flip\">arrow_back</i>
        {{ 'Back to configuration'|trans({}, 'Admin.Actions') }}
      </a>
    </div>

  </div>

{% endblock %}
", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/list_mail_theme_layouts.html.twig");
    }
}
