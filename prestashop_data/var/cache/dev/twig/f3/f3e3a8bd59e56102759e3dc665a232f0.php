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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig */
class __TwigTemplate_d8abfd5ea86517d6cc169b5d982cfe41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig"));

        // line 25
        echo "
<div class=\"card customer-sent-emails-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last emails", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    <span class=\"badge badge-primary rounded\">";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 30, $this->source); })()), "sentEmailsInformation", [], "any", false, false, false, 30)), "html", null, true);
        echo "</span>
  </h3>
  <div class=\"card-body\">
    ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 33, $this->source); })()), "sentEmailsInformation", [], "any", false, false, false, 33))) {
            // line 34
            echo "      <table class=\"table\">
        <thead>
          <tr>
            <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Date", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Subject", [], "Admin.Global"), "html", null, true);
            echo "</th>
            <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Template", [], "Admin.Global"), "html", null, true);
            echo "</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 44, $this->source); })()), "sentEmailsInformation", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["sentEmail"]) {
                // line 45
                echo "            <tr class=\"customer-sent-email\">
              <td class=\"customer-sent-email-date\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sentEmail"], "date", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
              <td class=\"customer-sent-email-language\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sentEmail"], "language", [], "any", false, false, false, 47), "html", null, true);
                echo "</td>
              <td class=\"customer-sent-email-subject\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sentEmail"], "subject", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
              <td class=\"customer-sent-email-template\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sentEmail"], "template", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sentEmail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 55
            echo "      <p class=\"text-muted text-center mb-0\">
        ";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No records found", [], "Admin.Global"), "html", null, true);
            echo "
      </p>
    ";
        }
        // line 59
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  121 => 56,  118 => 55,  113 => 52,  104 => 49,  100 => 48,  96 => 47,  92 => 46,  89 => 45,  85 => 44,  78 => 40,  74 => 39,  70 => 38,  66 => 37,  61 => 34,  59 => 33,  53 => 30,  49 => 29,  43 => 25,);
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

<div class=\"card customer-sent-emails-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">mail_outline</i>
    {{ 'Last emails'|trans({}, 'Admin.Orderscustomers.Feature') }}
    <span class=\"badge badge-primary rounded\">{{ customerInformation.sentEmailsInformation|length }}</span>
  </h3>
  <div class=\"card-body\">
    {% if customerInformation.sentEmailsInformation is not empty %}
      <table class=\"table\">
        <thead>
          <tr>
            <th>{{ 'Date'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Language'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Subject'|trans({}, 'Admin.Global') }}</th>
            <th>{{ 'Template'|trans({}, 'Admin.Global') }}</th>
          </tr>
        </thead>
        <tbody>
          {% for sentEmail in customerInformation.sentEmailsInformation %}
            <tr class=\"customer-sent-email\">
              <td class=\"customer-sent-email-date\">{{ sentEmail.date }}</td>
              <td class=\"customer-sent-email-language\">{{ sentEmail.language }}</td>
              <td class=\"customer-sent-email-subject\">{{ sentEmail.subject }}</td>
              <td class=\"customer-sent-email-template\">{{ sentEmail.template }}</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    {% else %}
      <p class=\"text-muted text-center mb-0\">
        {{ 'No records found'|trans({}, 'Admin.Global') }}
      </p>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/sent_emails.html.twig");
    }
}
