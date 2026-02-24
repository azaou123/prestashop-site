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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig */
class __TwigTemplate_f53516e086ee1d7a209a153c96206835 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig"));

        // line 25
        echo "
<div class=\"tab-content p-lg-0 bg-transparent px-0\" id=\"profileTabContents\">
  ";
        // line 27
        $context["employeeProfileTabPermissions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 27, $this->source); })()), "profilePermissionsForTabs", [], "any", false, false, false, 27), (isset($context["employeeProfileId"]) || array_key_exists("employeeProfileId", $context) ? $context["employeeProfileId"] : (function () { throw new RuntimeError('Variable "employeeProfileId" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27);
        // line 28
        echo "
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 29, $this->source); })()), "profiles", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
            // line 30
            echo "    ";
            $context["profileTabPermissions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 30, $this->source); })()), "profilePermissionsForTabs", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 30), [], "array", false, false, false, 30);
            // line 31
            echo "    <div class=\"tab-pane fade js-permissions-content";
            if ((twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 31) == (isset($context["employeeProfileId"]) || array_key_exists("employeeProfileId", $context) ? $context["employeeProfileId"] : (function () { throw new RuntimeError('Variable "employeeProfileId" does not exist.', 31, $this->source); })()))) {
                echo " active show";
            }
            echo "\"
      id=\"profileTabContent_";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\"
      data-profile-id=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\"
      data-profile-permissions=\"";
            // line 34
            echo twig_escape_filter($this->env, json_encode((isset($context["profileTabPermissions"]) || array_key_exists("profileTabPermissions", $context) ? $context["profileTabPermissions"] : (function () { throw new RuntimeError('Variable "profileTabPermissions" does not exist.', 34, $this->source); })())), "html", null, true);
            echo "\"
      data-modules-permissions=\"";
            // line 35
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["profilePermissionsForModules"]) || array_key_exists("profilePermissionsForModules", $context) ? $context["profilePermissionsForModules"] : (function () { throw new RuntimeError('Variable "profilePermissionsForModules" does not exist.', 35, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 35), [], "array", false, false, false, 35)), "html", null, true);
            echo "\"
      data-employee-permissions=\"";
            // line 36
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 36, $this->source); })()), "profilePermissionsForTabs", [], "any", false, false, false, 36), (isset($context["employeeProfileId"]) || array_key_exists("employeeProfileId", $context) ? $context["employeeProfileId"] : (function () { throw new RuntimeError('Variable "employeeProfileId" does not exist.', 36, $this->source); })()), [], "array", false, false, false, 36)), "html", null, true);
            echo "\"
      data-employee-modules-permissions=\"";
            // line 37
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["profilePermissionsForModules"]) || array_key_exists("profilePermissionsForModules", $context) ? $context["profilePermissionsForModules"] : (function () { throw new RuntimeError('Variable "profilePermissionsForModules" does not exist.', 37, $this->source); })()), (isset($context["employeeProfileId"]) || array_key_exists("employeeProfileId", $context) ? $context["employeeProfileId"] : (function () { throw new RuntimeError('Variable "employeeProfileId" does not exist.', 37, $this->source); })()), [], "array", false, false, false, 37)), "html", null, true);
            echo "\"
      role=\"tabpanel\"
      aria-labelledby=\"profileListItem_";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\"
    >
      <div class=\"row\">
        ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, $context["profile"], "is_administrator", [], "any", false, false, false, 42)) {
                // line 43
                echo "          <div class=\"col\">
            <div class=\"card\">
              <div class=\"card-body\">
                ";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Administrator permissions cannot be modified.", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "
              </div>
            </div>
          </div>
        ";
            } else {
                // line 51
                echo "          ";
                // line 52
                $context["profileTypes"] = ["view" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 54
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 54, $this->source); })()), "isBulkViewConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 54)], "method", false, false, false, 54), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions")], "add" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 58
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 58, $this->source); })()), "isBulkAddConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 58)], "method", false, false, false, 58), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add", [], "Admin.Actions")], "edit" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 62
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 62, $this->source); })()), "isBulkEditConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 62)], "method", false, false, false, 62), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions")], "delete" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 66
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 66, $this->source); })()), "isBulkDeleteConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 66)], "method", false, false, false, 66), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions")], "all" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 70
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 70, $this->source); })()), "isBulkAllConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 70)], "method", false, false, false, 70), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All", [], "Admin.Actions")]];
                // line 75
                echo "          <div class=\"col-xl-6\">
            <div
              id=\"profile-content-";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 77), "html", null, true);
                echo "\"
              data-update-url=\"";
                // line 78
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissions_update_tab_permissions");
                echo "\"
              data-can-edit=\"";
                // line 79
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 79, $this->source); })()), "hasEmployeeEditPermission", [], "any", false, false, false, 79)) ? ("true") : ("false"));
                echo "\"
              data-types=\"";
                // line 80
                echo twig_escape_filter($this->env, json_encode((isset($context["profileTypes"]) || array_key_exists("profileTypes", $context) ? $context["profileTypes"] : (function () { throw new RuntimeError('Variable "profileTypes" does not exist.', 80, $this->source); })())), "html", null, true);
                echo "\"
              data-permissions=\"";
                // line 81
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 81, $this->source); })()), "tabs", [], "any", false, false, false, 81)), "html", null, true);
                echo "\"
              data-title=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu", [], "Admin.Advparameters.Feature"));
                echo "\"
              data-empty=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No menu", [], "Admin.Advparameters.Feature"));
                echo "\"
            >
            </div>
          </div>

          ";
                // line 89
                $context["moduleTypes"] = ["view" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 91
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 91, $this->source); })()), "isBulkViewConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 91)], "method", false, false, false, 91), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View", [], "Admin.Actions")], "configure" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 95
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 95, $this->source); })()), "isBulkAddConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 95)], "method", false, false, false, 95), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions")], "uninstall" => ["value" => twig_get_attribute($this->env, $this->source,                 // line 99
(isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 99, $this->source); })()), "isBulkEditConfigurationEnabled", [0 => twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 99)], "method", false, false, false, 99), "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall", [], "Admin.Actions")]];
                // line 104
                echo "          <div class=\"col-xl-6\">
            <div
              id=\"module-content-";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 106), "html", null, true);
                echo "\"
              data-update-url=\"";
                // line 107
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_permissions_update_module_permissions");
                echo "\"
              data-can-edit=\"";
                // line 108
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["configurablePermissions"]) || array_key_exists("configurablePermissions", $context) ? $context["configurablePermissions"] : (function () { throw new RuntimeError('Variable "configurablePermissions" does not exist.', 108, $this->source); })()), "hasEmployeeEditPermission", [], "any", false, false, false, 108)) ? ("true") : ("false"));
                echo "\"
              data-types=\"";
                // line 109
                echo twig_escape_filter($this->env, json_encode((isset($context["moduleTypes"]) || array_key_exists("moduleTypes", $context) ? $context["moduleTypes"] : (function () { throw new RuntimeError('Variable "moduleTypes" does not exist.', 109, $this->source); })())), "html", null, true);
                echo "\"
              data-permissions=\"";
                // line 110
                echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, (isset($context["profilePermissionsForModules"]) || array_key_exists("profilePermissionsForModules", $context) ? $context["profilePermissionsForModules"] : (function () { throw new RuntimeError('Variable "profilePermissionsForModules" does not exist.', 110, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["profile"], "id", [], "any", false, false, false, 110), [], "array", false, false, false, 110)), "html", null, true);
                echo "\"
              data-title=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"));
                echo "\"
              data-empty=\"";
                // line 112
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No module", [], "Admin.Advparameters.Feature"));
                echo "\"
            >
            </div>
          </div>
        ";
            }
            // line 117
            echo "      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "</div>

";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "  <script>
    var permissionsMessages = {
      success: \"";
        // line 125
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update successful", [], "Admin.Notifications.Success"), "js"), "html", null, true);
        echo "\",
      error: \"";
        // line 126
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unable to update settings.", [], "Admin.Notifications.Error"), "js"), "html", null, true);
        echo "\",
    };
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 126,  234 => 125,  230 => 123,  211 => 122,  207 => 120,  199 => 117,  191 => 112,  187 => 111,  183 => 110,  179 => 109,  175 => 108,  171 => 107,  167 => 106,  163 => 104,  161 => 99,  160 => 95,  159 => 91,  158 => 89,  150 => 83,  146 => 82,  142 => 81,  138 => 80,  134 => 79,  130 => 78,  126 => 77,  122 => 75,  120 => 70,  119 => 66,  118 => 62,  117 => 58,  116 => 54,  115 => 52,  113 => 51,  105 => 46,  100 => 43,  98 => 42,  92 => 39,  87 => 37,  83 => 36,  79 => 35,  75 => 34,  71 => 33,  67 => 32,  60 => 31,  57 => 30,  53 => 29,  50 => 28,  48 => 27,  44 => 25,);
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

<div class=\"tab-content p-lg-0 bg-transparent px-0\" id=\"profileTabContents\">
  {% set employeeProfileTabPermissions = configurablePermissions.profilePermissionsForTabs[employeeProfileId] %}

  {% for profile in configurablePermissions.profiles %}
    {% set profileTabPermissions = configurablePermissions.profilePermissionsForTabs[profile.id] %}
    <div class=\"tab-pane fade js-permissions-content{% if profile.id == employeeProfileId %} active show{% endif %}\"
      id=\"profileTabContent_{{ profile.id }}\"
      data-profile-id=\"{{ profile.id }}\"
      data-profile-permissions=\"{{ profileTabPermissions|json_encode }}\"
      data-modules-permissions=\"{{ profilePermissionsForModules[profile.id]|json_encode }}\"
      data-employee-permissions=\"{{ configurablePermissions.profilePermissionsForTabs[employeeProfileId]|json_encode }}\"
      data-employee-modules-permissions=\"{{ profilePermissionsForModules[employeeProfileId]|json_encode }}\"
      role=\"tabpanel\"
      aria-labelledby=\"profileListItem_{{ profile.id }}\"
    >
      <div class=\"row\">
        {% if profile.is_administrator %}
          <div class=\"col\">
            <div class=\"card\">
              <div class=\"card-body\">
                {{ 'Administrator permissions cannot be modified.'|trans({}, 'Admin.Advparameters.Notification') }}
              </div>
            </div>
          </div>
        {% else %}
          {%
            set profileTypes = {
              'view': {
                'value': configurablePermissions.isBulkViewConfigurationEnabled(profile.id),
                'label': ('View'|trans({}, 'Admin.Actions')),
              },
              'add': {
                'value': configurablePermissions.isBulkAddConfigurationEnabled(profile.id),
                'label': ('Add'|trans({}, 'Admin.Actions')),
              },
              'edit': {
                'value': configurablePermissions.isBulkEditConfigurationEnabled(profile.id),
                'label': ('Edit'|trans({}, 'Admin.Actions')),
              },
              'delete': {
                'value': configurablePermissions.isBulkDeleteConfigurationEnabled(profile.id),
                'label': ('Delete'|trans({}, 'Admin.Actions')),
              },
              'all': {
                'value': configurablePermissions.isBulkAllConfigurationEnabled(profile.id),
                'label': ('All'|trans({}, 'Admin.Actions')),
              }
            }
          %}
          <div class=\"col-xl-6\">
            <div
              id=\"profile-content-{{ profile.id }}\"
              data-update-url=\"{{ path('admin_permissions_update_tab_permissions') }}\"
              data-can-edit=\"{{ configurablePermissions.hasEmployeeEditPermission ? 'true' : 'false' }}\"
              data-types=\"{{ profileTypes|json_encode }}\"
              data-permissions=\"{{ configurablePermissions.tabs|json_encode}}\"
              data-title=\"{{ 'Menu'|trans({}, 'Admin.Advparameters.Feature')|escape }}\"
              data-empty=\"{{ 'No menu'|trans({}, 'Admin.Advparameters.Feature')|escape }}\"
            >
            </div>
          </div>

          {%
            set moduleTypes = {
              'view': {
                'value': configurablePermissions.isBulkViewConfigurationEnabled(profile.id),
                'label': ('View'|trans({}, 'Admin.Actions')),
              },
              'configure': {
                'value': configurablePermissions.isBulkAddConfigurationEnabled(profile.id),
                'label': ('Configure'|trans({}, 'Admin.Actions')),
              },
              'uninstall': {
                'value': configurablePermissions.isBulkEditConfigurationEnabled(profile.id),
                'label': ('Uninstall'|trans({}, 'Admin.Actions')),
              }
            }
          %}
          <div class=\"col-xl-6\">
            <div
              id=\"module-content-{{ profile.id }}\"
              data-update-url=\"{{ path('admin_permissions_update_module_permissions') }}\"
              data-can-edit=\"{{ configurablePermissions.hasEmployeeEditPermission ? 'true' : 'false' }}\"
              data-types=\"{{ moduleTypes|json_encode }}\"
              data-permissions=\"{{ profilePermissionsForModules[profile.id]|json_encode}}\"
              data-title=\"{{ 'Modules'|trans({}, 'Admin.Global')|escape }}\"
              data-empty=\"{{ 'No module'|trans({}, 'Admin.Advparameters.Feature')|escape }}\"
            >
            </div>
          </div>
        {% endif %}
      </div>
    </div>
  {% endfor %}
</div>

{% block javascripts %}
  <script>
    var permissionsMessages = {
      success: \"{{ 'Update successful'|trans({}, 'Admin.Notifications.Success')|escape('js') }}\",
      error: \"{{ 'Unable to update settings.'|trans({}, 'Admin.Notifications.Error')|escape('js') }}\",
    };
  </script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Permission/Blocks/profile_tab_contents.html.twig");
    }
}
