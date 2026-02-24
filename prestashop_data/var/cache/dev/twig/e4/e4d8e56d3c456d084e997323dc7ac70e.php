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

/* @PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig */
class __TwigTemplate_bbb36df4c94d1473dd6dbfc2ce5cc18c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig"));

        // line 25
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig", 25)->unwrap();
        // line 26
        echo "
";
        // line 27
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

        // line 28
        echo "
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 29, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mail_theme_generate")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate emails", [], "Admin.Design.Feature"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select your email theme", [], "Admin.Design.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 44, $this->source); })()), "mailTheme", [], "any", false, false, false, 44), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 45, $this->source); })()), "mailTheme", [], "any", false, false, false, 45), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select your language", [], "Admin.International.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 54, $this->source); })()), "language", [], "any", false, false, false, 54), 'errors');
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 55, $this->source); })()), "language", [], "any", false, false, false, 55), 'widget');
        echo "
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 60
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select the theme you want to overwrite", [], "Admin.Design.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop's email templates are stored in the \"mails\" folder, but they can be overridden by your current theme's own \"mails\" folder. Using this option enables to overwrite emails from your current theme.", [], "Admin.Design.Help")], 60, $context, $this->getSourceContext());
        // line 63
        echo "
          <div class=\"col-sm\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 65, $this->source); })()), "theme", [], "any", false, false, false, 65), 'errors');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 66, $this->source); })()), "theme", [], "any", false, false, false, 66), 'widget');
        echo "
            ";
        // line 67
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 67, $this->source); })()), "theme", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "disabled", [], "any", false, false, false, 67)) {
            // line 68
            echo "              <small class=\"form-text\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No emails were detected in any theme folder so this field is disabled.", [], "Admin.Design.Help"), "html", null, true);
            echo "</small>
            ";
        }
        // line 70
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 74
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Overwrite templates", [], "Admin.Design.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By default, existing email template files are not modified to avoid deleting any modification you may have done. Enable this option to force the overwrite.", [], "Admin.Design.Help")], 74, $context, $this->getSourceContext());
        // line 77
        echo "
          <div class=\"col-sm\">
            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 79, $this->source); })()), "overwrite", [], "any", false, false, false, 79), 'errors');
        echo "
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 80, $this->source); })()), "overwrite", [], "any", false, false, false, 80), 'widget');
        echo "
          </div>
        </div>

      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">email</i>
          <span>";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate emails", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>
  ";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateMailsForm"]) || array_key_exists("generateMailsForm", $context) ? $context["generateMailsForm"] : (function () { throw new RuntimeError('Variable "generateMailsForm" does not exist.', 96, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 96,  178 => 91,  164 => 80,  160 => 79,  156 => 77,  154 => 74,  148 => 70,  142 => 68,  140 => 67,  136 => 66,  132 => 65,  128 => 63,  126 => 60,  118 => 55,  114 => 54,  108 => 51,  99 => 45,  95 => 44,  89 => 41,  78 => 33,  71 => 29,  68 => 28,  49 => 27,  46 => 26,  44 => 25,);
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
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block generateMailsFormBlock %}

  {{ form_start(generateMailsForm, {'action': path('admin_mail_theme_generate')}) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">email</i>
      {{ 'Generate emails'|trans({}, 'Admin.Design.Feature') }}
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Select your email theme'|trans({}, 'Admin.Design.Feature') }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(generateMailsForm.mailTheme) }}
            {{ form_widget(generateMailsForm.mailTheme) }}
          </div>
        </div>

        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Select your language'|trans({}, 'Admin.International.Feature') }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(generateMailsForm.language) }}
            {{ form_widget(generateMailsForm.language) }}
          </div>
        </div>

        <div class=\"form-group row\">
          {{ ps.label_with_help(
            ('Select the theme you want to overwrite'|trans({}, 'Admin.Design.Feature')),
            ('PrestaShop\\'s email templates are stored in the \"mails\" folder, but they can be overridden by your current theme\\'s own \"mails\" folder. Using this option enables to overwrite emails from your current theme.'|trans({}, 'Admin.Design.Help'))
          ) }}
          <div class=\"col-sm\">
            {{ form_errors(generateMailsForm.theme) }}
            {{ form_widget(generateMailsForm.theme) }}
            {% if generateMailsForm.theme.vars.disabled %}
              <small class=\"form-text\">{{ 'No emails were detected in any theme folder so this field is disabled.'|trans({}, 'Admin.Design.Help') }}</small>
            {% endif %}
          </div>
        </div>

        <div class=\"form-group row\">
          {{ ps.label_with_help(
            ('Overwrite templates'|trans({}, 'Admin.Design.Feature')),
            ('By default, existing email template files are not modified to avoid deleting any modification you may have done. Enable this option to force the overwrite.'|trans({}, 'Admin.Design.Help'))
          ) }}
          <div class=\"col-sm\">
            {{ form_errors(generateMailsForm.overwrite) }}
            {{ form_widget(generateMailsForm.overwrite) }}
          </div>
        </div>

      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">email</i>
          <span>{{ 'Generate emails'|trans({}, 'Admin.Actions') }}</span>
        </button>
      </div>
    </div>
  </div>
  {{ form_end(generateMailsForm) }}

{% endblock %}
", "@PrestaShop/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/Design/MailTheme/Blocks/generate_mails_form.html.twig");
    }
}
