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

/* @MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig */
class __TwigTemplate_7ccf8c97d15a145da4dc13a30f18fae4 extends Template
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
        // line 1
        return "@MailThemes/classic/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi,", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 7, $this->source); })()));
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\" style=\"border:none;padding:7px 0\">
    <span>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have received a new return request for {shop_name}.", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 16, $this->source); })())), "html", null, true);
        echo "</span>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
    <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
      ";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Return details", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 25, $this->source); })()));
        echo "
    </p>
    <span style=\"color:#777\">
      <span style=\"color:#333\"><strong>";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 28, $this->source); })()));
        echo "</strong></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("{order_name} Placed on {date}", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 28, $this->source); })())), "html", null, true);
        echo "<br/>
      <span style=\"color:#333\"><strong>";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 29, $this->source); })()));
        echo "</strong></span> {firstname} {lastname}, ({email})
    </span>
  </td>
</tr>
<tr>
  <td style=\"border:none;padding:7px 0\">
    <table class=\"table table-recap\" bgcolor=\"#ffffff\" style=\"width:100%;background-color:#fff\"><!-- Title -->
      <thead>
        <tr>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 38, $this->source); })()));
        echo "</th>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 39, $this->source); })()));
        echo "</th>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 40, $this->source); })()));
        echo "</th>
        </tr>
      </thead>
      <tbody>
        {items}
      </tbody>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
  <td style=\"border:none;padding:7px 0\">
    <table class=\"table\" style=\"width:100%;background-color:#fff\">
      <tr>
        <td class=\"box address\" width=\"310\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
          <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 57, $this->source); })()));
        echo "</p>
          <span style=\"color:#777\">
            {delivery_block_html}
          </span>
        </td>
        <td width=\"20\" class=\"space_address\" style=\"border:none;padding:7px 0\">&nbsp;</td>
        <td class=\"box address\" width=\"310\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
          <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 64, $this->source); })()));
        echo "</p>
          <span style=\"color:#777\">
            {invoice_block_html}
          </span>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
    <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
      ";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer message:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 79, $this->source); })()));
        echo "
    </p>
    <span style=\"color:#777\">
      {message}
    </span>
  </td>
</tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 79,  162 => 64,  152 => 57,  132 => 40,  128 => 39,  124 => 38,  112 => 29,  106 => 28,  100 => 25,  88 => 16,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/layout.html.twig' %}

{% block content %}
<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Hi,'|trans({}, 'Emails.Body', locale)|raw }}</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\" style=\"border:none;padding:7px 0\">
    <span>{{ 'You have received a new return request for {shop_name}.'|trans({}, 'Emails.Body', locale) }}</span>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
    <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
      {{ 'Return details'|trans({}, 'Emails.Body', locale)|raw }}
    </p>
    <span style=\"color:#777\">
      <span style=\"color:#333\"><strong>{{ 'Order:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {{ '{order_name} Placed on {date}'|trans({}, 'Emails.Body', locale) }}<br/>
      <span style=\"color:#333\"><strong>{{ 'Customer:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {firstname} {lastname}, ({email})
    </span>
  </td>
</tr>
<tr>
  <td style=\"border:none;padding:7px 0\">
    <table class=\"table table-recap\" bgcolor=\"#ffffff\" style=\"width:100%;background-color:#fff\"><!-- Title -->
      <thead>
        <tr>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">{{ 'Reference'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">{{ 'Product'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th style=\"border:1px solid #DDD!important;background-color:#fbfbfb;font-family:Arial;color:#333;font-size:13px;padding:10px\">{{ 'Quantity'|trans({}, 'Emails.Body', locale)|raw }}</th>
        </tr>
      </thead>
      <tbody>
        {items}
      </tbody>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
  <td style=\"border:none;padding:7px 0\">
    <table class=\"table\" style=\"width:100%;background-color:#fff\">
      <tr>
        <td class=\"box address\" width=\"310\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
          <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">{{ 'Delivery address'|trans({}, 'Emails.Body', locale)|raw }}</p>
          <span style=\"color:#777\">
            {delivery_block_html}
          </span>
        </td>
        <td width=\"20\" class=\"space_address\" style=\"border:none;padding:7px 0\">&nbsp;</td>
        <td class=\"box address\" width=\"310\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
          <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">{{ 'Billing address'|trans({}, 'Emails.Body', locale)|raw }}</p>
          <span style=\"color:#777\">
            {invoice_block_html}
          </span>
        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\" style=\"padding:0!important;border:none\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"background-color:#fbfbfb;border:1px solid #d6d4d4!important;padding:10px!important\">
    <p style=\"margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;border-bottom:1px solid #d6d4d4!important;padding-bottom:10px\">
      {{ 'Customer message:'|trans({}, 'Emails.Body', locale)|raw }}
    </p>
    <span style=\"color:#777\">
      {message}
    </span>
  </td>
</tr>
{% endblock %}
", "@MailThemes/classic/modules/ps_emailalerts/return_slip.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/return_slip.html.twig");
    }
}
