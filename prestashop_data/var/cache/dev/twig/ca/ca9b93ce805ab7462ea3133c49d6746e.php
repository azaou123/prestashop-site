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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig */
class __TwigTemplate_92d01a630a5217ee0423f2fb8b69cc94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'backup_warning' => [$this, 'block_backup_warning'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig"));

        // line 26
        echo "
";
        // line 27
        $this->displayBlock('backup_warning', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_backup_warning($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_warning"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_warning"));

        // line 28
        echo "  <div class=\"alert alert-warning\" role=\"alert\">
    <h4>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disclaimer before creating a new backup", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</h4>
    <ol>
      <li>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop is not responsible for your database, its backups and/or recovery.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop is open-source software. You are using it at your own risk under the license agreement.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You should back up your data on a regular basis (both files and database).", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This function only backs up your database, not your files.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By default, your existing database tables will be dropped during the backup recovery (see \"Backup options\" below).", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always verify the quality and integrity of your backup files!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always check your data.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
      <li>";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Never restore a backup on a live site.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "</li>
    </ol>

    ";
        // line 42
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", 42)->display($context);
        // line 43
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  112 => 42,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  69 => 29,  66 => 28,  47 => 27,  44 => 26,);
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

{% block backup_warning %}
  <div class=\"alert alert-warning\" role=\"alert\">
    <h4>{{ 'Disclaimer before creating a new backup'|trans({}, 'Admin.Advparameters.Notification') }}</h4>
    <ol>
      <li>{{ 'PrestaShop is not responsible for your database, its backups and/or recovery.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'PrestaShop is open-source software. You are using it at your own risk under the license agreement.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'You should back up your data on a regular basis (both files and database).'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'This function only backs up your database, not your files.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'By default, your existing database tables will be dropped during the backup recovery (see \"Backup options\" below).'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Always verify the quality and integrity of your backup files!'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Always verify that your backup files are complete, up-to-date and valid, even if you had a success message appear during the backup process.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Always check your data.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
      <li>{{ 'Never restore a backup on a live site.'|trans({}, 'Admin.Advparameters.Notification') }}</li>
    </ol>

    {% include '@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_form.html.twig' %}
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_warning.html.twig");
    }
}
