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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig */
class __TwigTemplate_2fb9d81b50da06bd64745358a85206a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'email_configuration' => [$this, 'block_email_configuration'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig"));

        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('email_configuration', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_email_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_configuration"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_configuration"));

        // line 29
        echo "  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">mail</i>
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email", [], "Admin.Global"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 36, $this->source); })()), "send_emails_to", [], "any", false, false, false, 36), 'row');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 37, $this->source); })()), "mail_method", [], "any", false, false, false, 37), 'row');
        echo "
        <div class=\"js-smtp-configuration";
        // line 38
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 38, $this->source); })()), "mail_method", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38) != (isset($context["smtpMailMethod"]) || array_key_exists("smtpMailMethod", $context) ? $context["smtpMailMethod"] : (function () { throw new RuntimeError('Variable "smtpMailMethod" does not exist.', 38, $this->source); })()))) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 39, $this->source); })()), "smtp_config", [], "any", false, false, false, 39), 'widget');
        echo "
        </div>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 41, $this->source); })()), "subject_prefix", [], "any", false, false, false, 41), 'row');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 42, $this->source); })()), "mail_type", [], "any", false, false, false, 42), 'row');
        echo "
        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 43, $this->source); })()), "log_emails", [], "any", false, false, false, 43), 'row');
        echo "
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fill in the fields below to set up DKIM signing of outgoing emails. This will reduce the likelihood of your emails being marked as spam.
              You can get the data below from your server administrator or generate it yourself by using one of the freely available tools, such as dkimcore.org.
              Also, make sure that your server is registered as an authorized sender in your SPF record. ", [], "Admin.Advparameters.Help"), "html", null, true);
        // line 48
        echo "
          </p>
        </div>
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 51, $this->source); })()), "dkim_enable", [], "any", false, false, false, 51), 'row');
        echo "
        <div class=\"js-dkim-configuration";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 52, $this->source); })()), "dkim_enable", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "value", [], "any", false, false, false, 52) == 0)) {
            echo " d-none";
        }
        echo "\">
          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 53, $this->source); })()), "dkim_config", [], "any", false, false, false, 53), 'widget');
        echo "
        </div>
        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["emailConfigurationForm"]) || array_key_exists("emailConfigurationForm", $context) ? $context["emailConfigurationForm"] : (function () { throw new RuntimeError('Variable "emailConfigurationForm" does not exist.', 55, $this->source); })()), 'rest');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"form-log-email-save-button\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 60,  137 => 55,  132 => 53,  126 => 52,  122 => 51,  117 => 48,  113 => 46,  107 => 43,  103 => 42,  99 => 41,  94 => 39,  88 => 38,  84 => 37,  80 => 36,  73 => 32,  68 => 29,  49 => 28,  46 => 27,  44 => 26,);
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
{% form_theme emailConfigurationForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block email_configuration %}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">mail</i>
      {{ 'Email'|trans({}, 'Admin.Global') }}
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        {{ form_row(emailConfigurationForm.send_emails_to) }}
        {{ form_row(emailConfigurationForm.mail_method) }}
        <div class=\"js-smtp-configuration{% if emailConfigurationForm.mail_method.vars.value != smtpMailMethod %} d-none{% endif %}\">
          {{ form_widget(emailConfigurationForm.smtp_config) }}
        </div>
        {{ form_row(emailConfigurationForm.subject_prefix) }}
        {{ form_row(emailConfigurationForm.mail_type) }}
        {{ form_row(emailConfigurationForm.log_emails) }}
        <div class=\"alert alert-info\" role=\"alert\">
          <p class=\"alert-text\">
            {{ 'Fill in the fields below to set up DKIM signing of outgoing emails. This will reduce the likelihood of your emails being marked as spam.
              You can get the data below from your server administrator or generate it yourself by using one of the freely available tools, such as dkimcore.org.
              Also, make sure that your server is registered as an authorized sender in your SPF record. '|trans({}, 'Admin.Advparameters.Help') }}
          </p>
        </div>
        {{ form_row(emailConfigurationForm.dkim_enable) }}
        <div class=\"js-dkim-configuration{% if emailConfigurationForm.dkim_enable.vars.value == 0 %} d-none{% endif %}\">
          {{ form_widget(emailConfigurationForm.dkim_config) }}
        </div>
        {{ form_rest(emailConfigurationForm) }}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"form-log-email-save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Email/Blocks/email_configuration.html.twig");
    }
}
