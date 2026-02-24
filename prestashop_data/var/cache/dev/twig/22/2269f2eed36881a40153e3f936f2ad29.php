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

/* @PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig */
class __TwigTemplate_e879eb7dd968404b6805402c7f8465f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig"));

        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig", 28, "44678092")->display(twig_array_merge($context, ["id" => "import_progress_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Importing your data...", [], "Admin.Advparameters.Notification"), "closable" => false, "progressbar" => ["id" => "import_progress_bar", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Validating data...", [], "Admin.Advparameters.Notification")], "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ignore warnings and continue?", [], "Admin.Advparameters.Notification"), "class" => "btn btn-outline-warning btn-lg js-continue-import"], 1 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Abort import", [], "Admin.Advparameters.Notification"), "class" => "btn btn-outline-danger btn-lg js-abort-import"], 2 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "class" => "btn btn-outline-secondary btn-lg js-close-modal"]]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 28,  46 => 27,  43 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Notification' %}

{% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': 'import_progress_modal',
  'title': 'Importing your data...'|trans,
  'closable': false,
  'progressbar': {
    id: 'import_progress_bar',
    label: 'Validating data...'|trans
  },
  'actions': [
    {
      'type': 'button',
      'label': 'Ignore warnings and continue?'|trans,
      'class': 'btn btn-outline-warning btn-lg js-continue-import',
    },
    {
      'type': 'button',
      'label': 'Abort import'|trans,
      'class': 'btn btn-outline-danger btn-lg js-abort-import',
    },
    {
      'type': 'button',
      'label': 'Close'|trans({}, 'Admin.Actions'),
      'class': 'btn btn-outline-secondary btn-lg js-close-modal',
    }
  ],
} %}
  {% block content %}
    <div class=\"modal-body\"
         data-importing-label=\"{{ 'Importing your data...'|trans({}, 'Admin.Advparameters.Notification') }}\"
         data-imported-label=\"{{ 'Data imported!'|trans({}, 'Admin.Advparameters.Notification') }}\"
    >
      <div class=\"alert alert-success js-import-success d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'Data imported!'|trans({}, 'Admin.Advparameters.Notification') }}
          {{ \"Look at your listings to make sure it's all there as you wished.\"|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
      <div class=\"alert alert-warning js-post-limit-warning d-none\" role=\"alert\">
        <div class=\"alert-text\">
          {{ \"Warning, the current import may require a PHP setting update, to allow more data to be transferred. If the current import stops before the end, you should increase your PHP \\\"post_max_size\\\" setting to [1]%size%[/1]MB at least, and try again.\"|trans({}, 'Admin.Advparameters.Notification')|replace({'[1]': '<span id=\"post_limit_value\">','%size%': '16','[/1]': '</span>'})|raw }}
        </div>
      </div>
      <div class=\"alert alert-warning js-import-warnings d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'Some errors were detected. Please check the details:'|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
      <div class=\"alert alert-danger js-import-errors d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'Errors occurred:'|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
      <div class=\"alert alert-info js-import-info d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'We made the following adjustments:'|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
    </div>
  {% endblock %}
{% endembed %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig");
    }
}


/* @PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig */
class __TwigTemplate_e879eb7dd968404b6805402c7f8465f2___44678092 extends Template
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
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig", 28);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 55
        echo "    <div class=\"modal-body\"
         data-importing-label=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Importing your data...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "\"
         data-imported-label=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Data imported!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "\"
    >
      <div class=\"alert alert-success js-import-success d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Data imported!", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
          ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Look at your listings to make sure it's all there as you wished.", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"alert alert-warning js-post-limit-warning d-none\" role=\"alert\">
        <div class=\"alert-text\">
          ";
        // line 67
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning, the current import may require a PHP setting update, to allow more data to be transferred. If the current import stops before the end, you should increase your PHP \"post_max_size\" setting to [1]%size%[/1]MB at least, and try again.", [], "Admin.Advparameters.Notification"), ["[1]" => "<span id=\"post_limit_value\">", "%size%" => "16", "[/1]" => "</span>"]);
        echo "
        </div>
      </div>
      <div class=\"alert alert-warning js-import-warnings d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some errors were detected. Please check the details:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"alert alert-danger js-import-errors d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Errors occurred:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"alert alert-info js-import-info d-none\" role=\"alert\">
        <span class=\"alert-text\">
          ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We made the following adjustments:", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 82,  261 => 77,  253 => 72,  245 => 67,  237 => 62,  233 => 61,  226 => 57,  222 => 56,  219 => 55,  209 => 54,  49 => 28,  46 => 27,  43 => 25,);
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

{% trans_default_domain 'Admin.Advparameters.Notification' %}

{% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': 'import_progress_modal',
  'title': 'Importing your data...'|trans,
  'closable': false,
  'progressbar': {
    id: 'import_progress_bar',
    label: 'Validating data...'|trans
  },
  'actions': [
    {
      'type': 'button',
      'label': 'Ignore warnings and continue?'|trans,
      'class': 'btn btn-outline-warning btn-lg js-continue-import',
    },
    {
      'type': 'button',
      'label': 'Abort import'|trans,
      'class': 'btn btn-outline-danger btn-lg js-abort-import',
    },
    {
      'type': 'button',
      'label': 'Close'|trans({}, 'Admin.Actions'),
      'class': 'btn btn-outline-secondary btn-lg js-close-modal',
    }
  ],
} %}
  {% block content %}
    <div class=\"modal-body\"
         data-importing-label=\"{{ 'Importing your data...'|trans({}, 'Admin.Advparameters.Notification') }}\"
         data-imported-label=\"{{ 'Data imported!'|trans({}, 'Admin.Advparameters.Notification') }}\"
    >
      <div class=\"alert alert-success js-import-success d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'Data imported!'|trans({}, 'Admin.Advparameters.Notification') }}
          {{ \"Look at your listings to make sure it's all there as you wished.\"|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
      <div class=\"alert alert-warning js-post-limit-warning d-none\" role=\"alert\">
        <div class=\"alert-text\">
          {{ \"Warning, the current import may require a PHP setting update, to allow more data to be transferred. If the current import stops before the end, you should increase your PHP \\\"post_max_size\\\" setting to [1]%size%[/1]MB at least, and try again.\"|trans({}, 'Admin.Advparameters.Notification')|replace({'[1]': '<span id=\"post_limit_value\">','%size%': '16','[/1]': '</span>'})|raw }}
        </div>
      </div>
      <div class=\"alert alert-warning js-import-warnings d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'Some errors were detected. Please check the details:'|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
      <div class=\"alert alert-danger js-import-errors d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'Errors occurred:'|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
      <div class=\"alert alert-info js-import-info d-none\" role=\"alert\">
        <span class=\"alert-text\">
          {{ 'We made the following adjustments:'|trans({}, 'Admin.Advparameters.Notification') }}
        </span>
      </div>
    </div>
  {% endblock %}
{% endembed %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/ImportDataConfiguration/Blocks/import_modal.html.twig");
    }
}
