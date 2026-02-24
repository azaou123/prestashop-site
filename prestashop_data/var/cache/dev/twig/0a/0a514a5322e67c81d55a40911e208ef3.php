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

/* @PrestaShop/Admin/Sell/Catalog/Attachment/Blocks/form.html.twig */
class __TwigTemplate_f049d9720c5401bdc3d9b938695d17b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'attachment_form' => [$this, 'block_attachment_form'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Attachment/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Attachment/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["attachmentForm"]) || array_key_exists("attachmentForm", $context) ? $context["attachmentForm"] : (function () { throw new RuntimeError('Variable "attachmentForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('attachment_form', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_attachment_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attachment_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "attachment_form"));

        // line 29
        echo "  ";
        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["attachmentForm"]) || array_key_exists("attachmentForm", $context) ? $context["attachmentForm"] : (function () { throw new RuntimeError('Variable "attachmentForm" does not exist.', 30, $this->source); })()), 'form_start', ["attr" => ["data-attachment-id" => ((array_key_exists("attachmentId", $context)) ? (_twig_default_filter((isset($context["attachmentId"]) || array_key_exists("attachmentId", $context) ? $context["attachmentId"] : (function () { throw new RuntimeError('Variable "attachmentId" does not exist.', 30, $this->source); })()), "")) : (""))]]);
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">attachment</i>
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File", [], "Admin.Global"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["attachmentForm"]) || array_key_exists("attachmentForm", $context) ? $context["attachmentForm"] : (function () { throw new RuntimeError('Variable "attachmentForm" does not exist.', 38, $this->source); })()), 'errors');
        echo "
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["attachmentForm"]) || array_key_exists("attachmentForm", $context) ? $context["attachmentForm"] : (function () { throw new RuntimeError('Variable "attachmentForm" does not exist.', 39, $this->source); })()), 'widget');
        echo "

          ";
        // line 41
        if (array_key_exists("attachmentId", $context)) {
            // line 42
            echo "            <div class=\"form-group row\">
              <div class=\"col-sm float-right\">
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_attachments_view", ["attachmentId" => (isset($context["attachmentId"]) || array_key_exists("attachmentId", $context) ? $context["attachmentId"] : (function () { throw new RuntimeError('Variable "attachmentId" does not exist.', 44, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary float-right\">
                  <i class=\"material-icons\">cloud_download</i>
                  ";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download current file", [], "messages"), "html", null, true);
            echo "
                </a>
              </div>
            </div>
          ";
        }
        // line 51
        echo "        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\Extension\PathWithBackUrlExtension']->getPathWithBackUrl("admin_attachments_index"), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary cancel-btn\">
          ";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>
        <button class=\"btn btn-primary float-right submit-btn\">
          ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["attachmentForm"]) || array_key_exists("attachmentForm", $context) ? $context["attachmentForm"] : (function () { throw new RuntimeError('Variable "attachmentForm" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Attachment/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 62,  131 => 58,  125 => 55,  121 => 54,  116 => 51,  108 => 46,  103 => 44,  99 => 42,  97 => 41,  92 => 39,  88 => 38,  81 => 34,  73 => 30,  71 => 29,  52 => 28,  49 => 27,  47 => 26,  44 => 25,);
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

{% form_theme attachmentForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block attachment_form %}
  {# Add data attribute to allow form iframe modal to easily get the data #}
  {{ form_start(attachmentForm, {'attr': {'data-attachment-id': attachmentId|default('')}}) }}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">attachment</i>
        {{ 'File'|trans({}, 'Admin.Global') }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          {{ form_errors(attachmentForm) }}
          {{ form_widget(attachmentForm) }}

          {% if attachmentId is defined %}
            <div class=\"form-group row\">
              <div class=\"col-sm float-right\">
                <a href=\"{{ path('admin_attachments_view', {'attachmentId': attachmentId}) }}\" class=\"btn btn-primary float-right\">
                  <i class=\"material-icons\">cloud_download</i>
                  {{'Download current file'|trans({}, 'messages')}}
                </a>
              </div>
            </div>
          {% endif %}
        </div>
      </div>
      <div class=\"card-footer\">
          <a href=\"{{ pathWithBackUrl('admin_attachments_index') }}\" class=\"btn btn-outline-secondary cancel-btn\">
          {{ 'Cancel'|trans({}, 'Admin.Actions') }}
        </a>
        <button class=\"btn btn-primary float-right submit-btn\">
          {{ 'Save'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    </div>
  {{ form_end(attachmentForm) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Attachment/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Attachment/Blocks/form.html.twig");
    }
}
