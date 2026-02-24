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

/* @MailThemes/classic/core/in_transit.html.twig */
class __TwigTemplate_eda62eb9c4eb92e5cb40091590b2c875 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/in_transit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/in_transit.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/core/in_transit.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi {firstname} {lastname},", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 7, $this->source); })())), "html", null, true);
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <div itemscope=\"\" itemtype=\"https://schema.org/ParcelDelivery\">
            <div itemprop=\"deliveryAddress\" itemscope=\"\" itemtype=\"https://schema.org/PostalAddress\">
              <meta itemprop=\"streetAddress\" content=\"{address1}\"/>
              <meta itemprop=\"addressLocality\" content=\"{city}\"/>
              <meta itemprop=\"addressRegion\" content=\"{city}\"/>
              <meta itemprop=\"addressCountry\" content=\"{country}\"/>
              <meta itemprop=\"postalCode\" content=\"{postcode}\"/>
            </div>

            <link itemprop=\"trackingUrl\" href=\"{followup}\"/>
            <div itemprop=\"carrier\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
              <meta itemprop=\"name\" content=\"{carrier}\"/>
            </div>

            {meta_products}

            <div itemprop=\"partOfOrder\" itemscope=\"\" itemtype=\"https://schema.org/Order\">
              <meta itemprop=\"orderNumber\" content=\"{order_name}\"/>
              <div itemprop=\"merchant\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
                <meta itemprop=\"name\" content=\"{shop_name}\"/>
              </div>
              <link itemprop=\"orderStatus\" href=\"https://schema.org/OrderInTransit\"/>
            </div>
          </div>

          <font size=\"2\" face=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 46
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 46, $this->source); })()) == "html")) {
            // line 47
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order {order_name}", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })())), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("In transit", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })()));
            echo "
              </p>

";
        }
        // line 53
        echo "            <span>
              ";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your order with the reference [1]{order_name}[/1] is currently in transit.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 54, $this->source); })()));
        echo " <br/><br/>
              ";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can track your package using the following link:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 55, $this->source); })()));
        echo " <a href=\"{followup}\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("{followup}", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 55, $this->source); })())), "html", null, true);
        echo "</a>
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 71, $this->source); })()))], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 71, $this->source); })()));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 80, $this->source); })()))], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 80, $this->source); })()));
        echo "
      </span>
    </font>
  </td>
</tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/core/in_transit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 80,  177 => 78,  167 => 71,  162 => 69,  143 => 55,  139 => 54,  136 => 53,  127 => 49,  123 => 47,  121 => 46,  117 => 45,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/layout.html.twig' %}

{% block content %}
<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <div itemscope=\"\" itemtype=\"https://schema.org/ParcelDelivery\">
            <div itemprop=\"deliveryAddress\" itemscope=\"\" itemtype=\"https://schema.org/PostalAddress\">
              <meta itemprop=\"streetAddress\" content=\"{address1}\"/>
              <meta itemprop=\"addressLocality\" content=\"{city}\"/>
              <meta itemprop=\"addressRegion\" content=\"{city}\"/>
              <meta itemprop=\"addressCountry\" content=\"{country}\"/>
              <meta itemprop=\"postalCode\" content=\"{postcode}\"/>
            </div>

            <link itemprop=\"trackingUrl\" href=\"{followup}\"/>
            <div itemprop=\"carrier\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
              <meta itemprop=\"name\" content=\"{carrier}\"/>
            </div>

            {meta_products}

            <div itemprop=\"partOfOrder\" itemscope=\"\" itemtype=\"https://schema.org/Order\">
              <meta itemprop=\"orderNumber\" content=\"{order_name}\"/>
              <div itemprop=\"merchant\" itemscope=\"\" itemtype=\"https://schema.org/Organization\">
                <meta itemprop=\"name\" content=\"{shop_name}\"/>
              </div>
              <link itemprop=\"orderStatus\" href=\"https://schema.org/OrderInTransit\"/>
            </div>
          </div>

          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Order {order_name}'|trans({}, 'Emails.Body', locale) }}&nbsp;-&nbsp;{{ 'In transit'|trans({}, 'Emails.Body', locale)|raw }}
              </p>

{% endif %}
            <span>
              {{ 'Your order with the reference [1]{order_name}[/1] is currently in transit.'|trans({'[1]': '<span><strong>', '[/1]': '</strong></span>'}, 'Emails.Body', locale)|raw }} <br/><br/>
              {{ 'You can track your package using the following link:'|trans({}, 'Emails.Body', locale)|raw }} <a href=\"{followup}\">{{ '{followup}'|trans({}, 'Emails.Body', locale) }}</a>
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.'|trans({'%order_history_label%': 'Order history and details'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>
        {{ 'If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.'|trans({'%guest_tracking_label%': 'Guest Tracking'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
      </span>
    </font>
  </td>
</tr>
{% endblock %}
", "@MailThemes/classic/core/in_transit.html.twig", "/var/www/html/mails/themes/classic/core/in_transit.html.twig");
    }
}
