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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig */
class __TwigTemplate_5b1d4dc3491d0efb0b329a2d54974e78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig"));

        // line 25
        echo "
<ul class=\"list-unstyled ml-5\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 27, $this->source); })()), "messages", [], "any", false, false, false, 27));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 28)) {
                // line 29
                echo "      <li>
        <hr class=\"mb-3 mt-0\">
      </li>
    ";
            }
            // line 33
            echo "
    <li class=\"media\">
      ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 35) == "customer")) {
                // line 36
                echo "        <i class=\"material-icons thread-message-icon\">person</i>
      ";
            } else {
                // line 38
                echo "        <img class=\"rounded-circle thread-message-employee-image\" src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "employeeImage", [], "any", false, false, false, 38), "html", null, true);
                echo "\">
      ";
            }
            // line 40
            echo "
      <div class=\"media-body ml-2\">
        <h4 class=\"mt-0 mb-1\">
          <i class=\"material-icons text-muted\">reply</i>

          ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 45) == twig_constant("PrestaShop\\PrestaShop\\Core\\Domain\\CustomerService\\ValueObject\\CustomerThreadMessageType::CUSTOMER"))) {
                // line 46
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "customerName", [], "any", false, false, false, 46), "html", null, true);
                echo "
          ";
            } else {
                // line 48
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "employeeName", [], "any", false, false, false, 48), "html", null, true);
                echo "
          ";
            }
            // line 50
            echo "
          <span class=\"text-muted\">
            <i class=\"material-icons text-muted font-16\">calendar_today</i>
            -
            ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getFunction('format_date')->getCallable()(twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 54)), "html", null, true);
            echo "
            <i class=\"material-icons text-muted font-16\">access_time</i>
            -
            ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 57), "H:i"), "html", null, true);
            echo "
          </span>

          ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, $context["message"], "attachmentFile", [], "any", false, false, false, 60)) {
                // line 61
                echo "            <i class=\"material-icons font-16\">attachment</i>
            <a href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_secured_file_image_reader", ["fileName" => twig_get_attribute($this->env, $this->source, $context["message"], "attachmentFile", [], "any", false, false, false, 62)]), "html", null, true);
                echo "\" target=\"_blank\">
              ";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attachment", [], "Admin.Catalog.Feature"), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 66
            echo "
          ";
            // line 67
            if (twig_get_attribute($this->env, $this->source, $context["message"], "productId", [], "any", false, false, false, 67)) {
                // line 68
                echo "            <i class=\"material-icons font-16\">library_books</i>
            <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_form", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "productId", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\">
              ";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Admin.Global"), "html", null, true);
                echo "
              ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "productName", [], "any", false, false, false, 71), "html", null, true);
                echo "
            </a>
          ";
            }
            // line 74
            echo "        </h4>
        <p class=\"pl-2 thread-message\">";
            // line 75
            echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 75), "html", null, true));
            echo "</p>
      </div>
    </li>
  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 79,  168 => 75,  165 => 74,  159 => 71,  155 => 70,  151 => 69,  148 => 68,  146 => 67,  143 => 66,  137 => 63,  133 => 62,  130 => 61,  128 => 60,  122 => 57,  116 => 54,  110 => 50,  104 => 48,  98 => 46,  96 => 45,  89 => 40,  83 => 38,  79 => 36,  77 => 35,  73 => 33,  67 => 29,  64 => 28,  47 => 27,  43 => 25,);
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

<ul class=\"list-unstyled ml-5\">
  {% for message in customerThreadView.messages %}
    {% if not loop.first %}
      <li>
        <hr class=\"mb-3 mt-0\">
      </li>
    {% endif %}

    <li class=\"media\">
      {% if message.type == 'customer' %}
        <i class=\"material-icons thread-message-icon\">person</i>
      {% else %}
        <img class=\"rounded-circle thread-message-employee-image\" src=\"{{ message.employeeImage }}\">
      {% endif %}

      <div class=\"media-body ml-2\">
        <h4 class=\"mt-0 mb-1\">
          <i class=\"material-icons text-muted\">reply</i>

          {% if message.type == constant('PrestaShop\\\\PrestaShop\\\\Core\\\\Domain\\\\CustomerService\\\\ValueObject\\\\CustomerThreadMessageType::CUSTOMER') %}
            {{ message.customerName }}
          {% else %}
            {{ message.employeeName }}
          {% endif %}

          <span class=\"text-muted\">
            <i class=\"material-icons text-muted font-16\">calendar_today</i>
            -
            {{ format_date(message.date) }}
            <i class=\"material-icons text-muted font-16\">access_time</i>
            -
            {{ message.date|date('H:i') }}
          </span>

          {% if message.attachmentFile %}
            <i class=\"material-icons font-16\">attachment</i>
            <a href=\"{{ path('admin_common_secured_file_image_reader', { 'fileName': message.attachmentFile }) }}\" target=\"_blank\">
              {{ 'Attachment'|trans({}, 'Admin.Catalog.Feature') }}
            </a>
          {% endif %}

          {% if message.productId %}
            <i class=\"material-icons font-16\">library_books</i>
            <a href=\"{{ path('admin_product_form', {'id': message.productId}) }}\">
              {{ 'Product'|trans({}, 'Admin.Global') }}
              {{ message.productName }}
            </a>
          {% endif %}
        </h4>
        <p class=\"pl-2 thread-message\">{{ message.message|nl2br }}</p>
      </div>
    </li>
  {% endfor %}
</ul>
", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/thread_messages.html.twig");
    }
}
