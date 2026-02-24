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

/* @PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig */
class __TwigTemplate_e0862b64bf5c7b3e73174998144064d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig"));

        // line 25
        echo "
 <li class=\"mb-2 ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()), "employeeId", [], "any", false, false, false, 26)) {
            echo "messages-block-employee";
        } else {
            echo "messages-block-customer";
        }
        echo "\">
  <div class=\"row no-gutters\">
    ";
        // line 28
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 28, $this->source); })()), "employeeId", [], "any", false, false, false, 28)) {
            // line 29
            echo "      <div class=\"messages-block-icon\">
        <i class=\"material-icons\">account_circle</i>
      </div>

      <div class=\"messages-block-content\">
        <p class=\"mb-0 message customer-message\">
          ";
            // line 35
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 35, $this->source); })()), "message", [], "any", false, false, false, 35), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0\">
          ";
            // line 38
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 38, $this->source); })()), "customerFirstName", [], "any", false, false, false, 38) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 38, $this->source); })()), "customerLastName", [], "any", false, false, false, 38)), "html", null, true);
            echo "
          ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 39, $this->source); })()), "messageDate", [], "any", false, false, false, 39), "format", [], "any", false, false, false, 39), "html", null, true);
            echo "
        </p>
      </div>
    ";
        }
        // line 43
        echo "
    ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 44, $this->source); })()), "employeeId", [], "any", false, false, false, 44)) {
            // line 45
            echo "      <div class=\"messages-block-content\">
        <p class=\"mb-0 message employee-message";
            // line 46
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 46, $this->source); })()), "isPrivate", [], "any", false, false, false, 46)) ? ("--private") : (""));
            echo "\">
          ";
            // line 47
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 47, $this->source); })()), "message", [], "any", false, false, false, 47), "html", null, true));
            echo "
        </p>
        <p class=\"text-muted mb-0 text-right\">
          ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 50, $this->source); })()), "isCurrentEmployeesMessage", [], "any", false, false, false, 50)) {
                // line 51
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Me", [], "Admin.Global"), "html", null, true);
                echo "
          ";
            } else {
                // line 53
                echo "            ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 53, $this->source); })()), "employeeFirstName", [], "any", false, false, false, 53) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 53, $this->source); })()), "employeeLastName", [], "any", false, false, false, 53)), "html", null, true);
                echo "
          ";
            }
            // line 55
            echo "
          ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 56, $this->source); })()), "messageDate", [], "any", false, false, false, 56), "format", [], "any", false, false, false, 56), "html", null, true);
            echo "
        </p>
      </div>

      <div class=\"messages-block-icon\">
        <i class=\"material-icons employee-icon";
            // line 61
            echo ((twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 61, $this->source); })()), "isPrivate", [], "any", false, false, false, 61)) ? ("--private") : (""));
            echo "\"></i>
      </div>
    ";
        }
        // line 64
        echo "  </div>
</li>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 64,  125 => 61,  117 => 56,  114 => 55,  108 => 53,  102 => 51,  100 => 50,  94 => 47,  90 => 46,  87 => 45,  85 => 44,  82 => 43,  75 => 39,  71 => 38,  65 => 35,  57 => 29,  55 => 28,  46 => 26,  43 => 25,);
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

 <li class=\"mb-2 {% if message.employeeId %}messages-block-employee{% else %}messages-block-customer{% endif %}\">
  <div class=\"row no-gutters\">
    {% if not message.employeeId %}
      <div class=\"messages-block-icon\">
        <i class=\"material-icons\">account_circle</i>
      </div>

      <div class=\"messages-block-content\">
        <p class=\"mb-0 message customer-message\">
          {{ message.message|nl2br }}
        </p>
        <p class=\"text-muted mb-0\">
          {{ message.customerFirstName ~ ' ' ~ message.customerLastName }}
          {{ message.messageDate.format }}
        </p>
      </div>
    {% endif %}

    {% if message.employeeId %}
      <div class=\"messages-block-content\">
        <p class=\"mb-0 message employee-message{{ message.isPrivate ? '--private' : '' }}\">
          {{ message.message|nl2br }}
        </p>
        <p class=\"text-muted mb-0 text-right\">
          {% if message.isCurrentEmployeesMessage %}
            {{ 'Me'|trans({}, 'Admin.Global') }}
          {% else %}
            {{ message.employeeFirstName ~ ' ' ~ message.employeeLastName }}
          {% endif %}

          {{ message.messageDate.format }}
        </p>
      </div>

      <div class=\"messages-block-icon\">
        <i class=\"material-icons employee-icon{{ message.isPrivate ? '--private' : '' }}\"></i>
      </div>
    {% endif %}
  </div>
</li>
", "@PrestaShop/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Order/Blocks/View/msg_list_item.html.twig");
    }
}
