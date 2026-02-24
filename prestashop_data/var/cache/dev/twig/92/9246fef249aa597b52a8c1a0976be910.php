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

/* @PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig */
class __TwigTemplate_e01ef137ac356e3d01aef650ba36c09d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig"));

        // line 25
        echo "
<div class=\"card\" data-role=\"messages_timeline\">
  <h3 class=\"card-header\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders and messages timeline", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"timeline\">
      ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerThreadView"]) || array_key_exists("customerThreadView", $context) ? $context["customerThreadView"] : (function () { throw new RuntimeError('Variable "customerThreadView" does not exist.', 32, $this->source); })()), "timeline", [], "any", false, false, false, 32), "timelineItems", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["timelineItem"]) {
            // line 33
            echo "        ";
            // line 34
            echo "        <div class=\"timeline-item ";
            if ((twig_get_attribute($this->env, $this->source, $context["timelineItem"], "arrow", [], "any", false, false, false, 34) == "right")) {
                echo "right";
            } else {
                echo "left";
            }
            echo "\">

          ";
            // line 37
            echo "          <div class=\"timeline-icon-wrapper\">
            <div class=\"timeline-icon\" 
              ";
            // line 39
            if (twig_get_attribute($this->env, $this->source, $context["timelineItem"], "color", [], "any", false, false, false, 39)) {
                // line 40
                echo "                style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timelineItem"], "color", [], "any", false, false, false, 40), "html", null, true);
                echo ";\"
              ";
            }
            // line 42
            echo "            >
              <i class=\"material-icons text-white\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timelineItem"], "icon", [], "any", false, false, false, 43), "html", null, true);
            echo "</i>
            </div>
          </div>

          ";
            // line 47
            echo " 
          <div class=\"timeline-date-wrapper\">
            <div class=\"timeline-date\">
              <i class=\"material-icons font-16\">calendar_today</i>
              <span class=\"timeline-date-day\">";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getFunction('format_date')->getCallable()(twig_get_attribute($this->env, $this->source, $context["timelineItem"], "date", [], "any", false, false, false, 51)), "html", null, true);
            echo "</span>
              <i class=\"material-icons font-16\">access_time</i>
              <span>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["timelineItem"], "date", [], "any", false, false, false, 53), "H:i"), "html", null, true);
            echo "</span>
            </div>
          </div>

          ";
            // line 58
            echo "          <div class=\"timeline-content-wrapper\">
            <div class=\"timeline-content\">
              <div>
                ";
            // line 61
            echo twig_nl2br(twig_get_attribute($this->env, $this->source, $context["timelineItem"], "content", [], "any", false, false, false, 61));
            echo "
              </div>
              ";
            // line 63
            if (twig_get_attribute($this->env, $this->source, $context["timelineItem"], "relatedOrderId", [], "any", false, false, false, 63)) {
                // line 64
                echo "                <p class=\"mb-0 mt-2\">
                  <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminOrders", true, ["vieworder" => 1, "id_order" => twig_get_attribute($this->env, $this->source, $context["timelineItem"], "relatedOrderId", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\"
                      class=\"btn btn-outline-secondary btn-sm\"
                      target=\"_blank\"
                  >
                    ";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See more", [], "Admin.Actions"), "html", null, true);
                echo "
                  </a>
                </p>
              ";
            }
            // line 73
            echo "            </div>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timelineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 77,  140 => 73,  133 => 69,  126 => 65,  123 => 64,  121 => 63,  116 => 61,  111 => 58,  104 => 53,  99 => 51,  93 => 47,  86 => 43,  83 => 42,  77 => 40,  75 => 39,  71 => 37,  61 => 34,  59 => 33,  55 => 32,  48 => 28,  43 => 25,);
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

<div class=\"card\" data-role=\"messages_timeline\">
  <h3 class=\"card-header\">
    {{ 'Orders and messages timeline'|trans({}, 'Admin.Orderscustomers.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"timeline\">
      {% for timelineItem in customerThreadView.timeline.timelineItems %}
        {# We are using left-right styling for the timeline #}
        <div class=\"timeline-item {% if timelineItem.arrow == 'right' %}right{% else %}left{% endif %}\">

          {# Icon #}
          <div class=\"timeline-icon-wrapper\">
            <div class=\"timeline-icon\" 
              {% if timelineItem.color %}
                style=\"background-color: {{ timelineItem.color }};\"
              {% endif %}
            >
              <i class=\"material-icons text-white\">{{ timelineItem.icon }}</i>
            </div>
          </div>

          {# Date #} 
          <div class=\"timeline-date-wrapper\">
            <div class=\"timeline-date\">
              <i class=\"material-icons font-16\">calendar_today</i>
              <span class=\"timeline-date-day\">{{ format_date(timelineItem.date) }}</span>
              <i class=\"material-icons font-16\">access_time</i>
              <span>{{ timelineItem.date|date('H:i') }}</span>
            </div>
          </div>

          {# Content #}
          <div class=\"timeline-content-wrapper\">
            <div class=\"timeline-content\">
              <div>
                {{ timelineItem.content|raw|nl2br }}
              </div>
              {% if timelineItem.relatedOrderId %}
                <p class=\"mb-0 mt-2\">
                  <a href=\"{{ getAdminLink('AdminOrders', true, {'vieworder': 1, 'id_order': timelineItem.relatedOrderId}) }}\"
                      class=\"btn btn-outline-secondary btn-sm\"
                      target=\"_blank\"
                  >
                    {{ 'See more'|trans({}, 'Admin.Actions') }}
                  </a>
                </p>
              {% endif %}
            </div>
          </div>
        </div>
      {% endfor %}
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/CustomerService/CustomerThread/Block/timeline.html.twig");
    }
}
