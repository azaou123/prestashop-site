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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig */
class __TwigTemplate_b3b50636efd9b8d527bb5eb5fdcb9b7d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">cloud_download</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download", [], "Admin.Actions"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"alert alert-success\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Beginning the download ...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </p>
      </div>
      <p>
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Backup files should automatically start downloading.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        ";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If not,[1][2] please click here[/1]!", ["[1]" => ((" <a href=\"" . twig_get_attribute($this->env, $this->source, (isset($context["downloadFile"]) || array_key_exists("downloadFile", $context) ? $context["downloadFile"] : (function () { throw new RuntimeError('Variable "downloadFile" does not exist.', 43, $this->source); })()), "url", [], "any", false, false, false, 43)) . "\" class=\"btn btn-outline-primary btn-sm\">"), "[/1]" => "</a> ", "[2]" => "<i class=\"icon-download\"></i>"], "Admin.Advparameters.Notification");
        echo "
      </p>
      <p class=\"mb-0\">
        <a class=\"btn btn-outline-primary btn-sm\" href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_backups_index");
        echo "\">
          <i class=\"material-icons\">keyboard_backspace</i>
          ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to list", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
      </p>
      <iframe src=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["downloadFile"]) || array_key_exists("downloadFile", $context) ? $context["downloadFile"] : (function () { throw new RuntimeError('Variable "downloadFile" does not exist.', 51, $this->source); })()), "url", [], "any", false, false, false, 51), "html", null, true);
        echo "\" class=\"d-none\"></iframe>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 51,  103 => 48,  98 => 46,  92 => 43,  88 => 42,  81 => 38,  73 => 33,  68 => 30,  58 => 29,  35 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% trans_default_domain 'Admin.Advparameters.Feature' %}

{% block content %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">cloud_download</i>
      {{ 'Download'|trans({}, 'Admin.Actions') }}
    </h3>
    <div class=\"card-body\">
      <div class=\"alert alert-success\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'Beginning the download ...'|trans({}, 'Admin.Advparameters.Notification') }}
        </p>
      </div>
      <p>
        {{ 'Backup files should automatically start downloading.'|trans({}, 'Admin.Advparameters.Notification') }}
        {{ 'If not,[1][2] please click here[/1]!'|trans({'[1]': ' <a href=\"'~ downloadFile.url ~'\" class=\"btn btn-outline-primary btn-sm\">', '[/1]': '</a> ', '[2]': '<i class=\"icon-download\"></i>'}, 'Admin.Advparameters.Notification')|raw }}
      </p>
      <p class=\"mb-0\">
        <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('admin_backups_index') }}\">
          <i class=\"material-icons\">keyboard_backspace</i>
          {{ 'Back to list'|trans({}, 'Admin.Actions') }}
        </a>
      </p>
      <iframe src=\"{{ downloadFile.url }}\" class=\"d-none\"></iframe>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/download_view.html.twig");
    }
}
