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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig */
class __TwigTemplate_c932d69195e2ec17f9c8062f69610d8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'backup_info' => [$this, 'block_backup_info'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('backup_info', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_backup_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_info"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "backup_info"));

        // line 27
        echo "  <div class=\"alert alert-info\" role=\"alert\">
    <h4>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How to restore a database backup in 10 easy steps", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</h4>
    <ol class=\"mb-0\">
      <li>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set \"Enable Shop\" to \"No\" in the \"Maintenance\" page under the \"Preferences\" menu.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download the backup from the list below or from your FTP server (in the folder \"admin/backups\").", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please ask your hosting provider for \"phpMyAdmin\" access to your database.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Connect to \"phpMyAdmin\" and select your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unless you enabled the \"Drop existing tables\" option, you must delete all tables from your current database.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("At the top of the screen, please select the \"Import\" tab", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click on the \"%phpmyadmin_browse_label%\" button and select the backup file from your hard drive.", ["%phpmyadmin_browse_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo "</li>
      <li>
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check the maximum filesize allowed (e.g. Max: 16MB)", [], "Admin.Advparameters.Help"), "html", null, true);
        echo " <br>
        ";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If your backup file exceeds this limit, contact your hosting provider for assistance. ", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "
      </li>
      <li>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click on the \"%phpmyadmin_go_label%\" button and please wait patiently for the import process to conclude. This may take several minutes.", ["%phpmyadmin_go_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go", [], "Admin.Actions")], "Admin.Advparameters.Help"), "html", null, true);
        echo " <br></li>
    </ol>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  111 => 40,  107 => 39,  102 => 37,  98 => 36,  94 => 35,  90 => 34,  86 => 33,  82 => 32,  78 => 31,  74 => 30,  69 => 28,  66 => 27,  47 => 26,  44 => 25,);
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

{% block backup_info %}
  <div class=\"alert alert-info\" role=\"alert\">
    <h4>{{ 'How to restore a database backup in 10 easy steps'|trans({}, 'Admin.Advparameters.Help') }}</h4>
    <ol class=\"mb-0\">
      <li>{{ 'Set \"Enable Shop\" to \"No\" in the \"Maintenance\" page under the \"Preferences\" menu.'|trans({}, 'Admin.Advparameters.Help') }}</li>
      <li>{{ 'Download the backup from the list below or from your FTP server (in the folder \"admin/backups\").'|trans({}, 'Admin.Advparameters.Help') }}</li>
      <li>{{ 'Check the backup integrity: Look for errors, incomplete file, etc... Be sure to verify all of your data.'|trans({}, 'Admin.Advparameters.Help') }}</li>
      <li>{{ 'Please ask your hosting provider for \"phpMyAdmin\" access to your database.'|trans({}, 'Admin.Advparameters.Help') }}</li>
      <li>{{ 'Connect to \"phpMyAdmin\" and select your current database.'|trans({}, 'Admin.Advparameters.Help') }}</li>
      <li>{{ 'Unless you enabled the \"Drop existing tables\" option, you must delete all tables from your current database.'|trans({}, 'Admin.Advparameters.Help') }}</li>
      <li>{{ 'At the top of the screen, please select the \"Import\" tab'|trans({}, 'Admin.Advparameters.Help') }}</li>
      <li>{{ 'Click on the \"%phpmyadmin_browse_label%\" button and select the backup file from your hard drive.'|trans({'%phpmyadmin_browse_label%': 'Browse'|trans({}, 'Admin.Actions')}, 'Admin.Advparameters.Help') }}</li>
      <li>
        {{ 'Check the maximum filesize allowed (e.g. Max: 16MB)'|trans({}, 'Admin.Advparameters.Help') }} <br>
        {{ 'If your backup file exceeds this limit, contact your hosting provider for assistance. '|trans({}, 'Admin.Advparameters.Help') }}
      </li>
      <li>{{ 'Click on the \"%phpmyadmin_go_label%\" button and please wait patiently for the import process to conclude. This may take several minutes.'|trans({'%phpmyadmin_go_label%': 'Go'|trans({}, 'Admin.Actions')}, 'Admin.Advparameters.Help') }} <br></li>
    </ol>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Backup/Blocks/backup_info.html.twig");
    }
}
