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

/* @MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig */
class __TwigTemplate_886577ccf7ea1db54fc24c03e39ced76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig", 1);
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
    <td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            <span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi {firstname} {lastname},", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 7, $this->source); })())), "html", null, true);
        echo "</span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"box\" style=\"border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0\">
        <table class=\"table\" style=\"width:100%\">
            <tr>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
                <td style=\"padding:7px 0\">
                    <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
                        ";
        // line 21
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 21, $this->source); })()) == "html")) {
            // line 22
            echo "
                            <p style=\"border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px\">
                                ";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order {order_name}", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 24, $this->source); })())), "html", null, true);
            echo "&nbsp;-&nbsp;";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order edited", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 24, $this->source); })()));
            echo "
                            </p>

";
        }
        // line 28
        echo "                        <span style=\"color:#777\">
                            ";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your order with the reference [1]{order_name}[/1] has been modified.", ["[1]" => "<span><strong>", "[/1]" => "</strong></span>"], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 29, $this->source); })()));
        echo "
                        </span>
                    </font>
                </td>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                ";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 45, $this->source); })()))], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 45, $this->source); })()));
        echo "
            </span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                ";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 54, $this->source); })()))], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 54, $this->source); })()));
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
        return "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 54,  130 => 45,  111 => 29,  108 => 28,  99 => 24,  95 => 22,  93 => 21,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/layout.html.twig' %}

{% block content %}
<tr>
    <td align=\"center\" class=\"titleblock\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            <span class=\"title\" style=\"font-weight:500;font-size:28px;text-transform:uppercase;line-height:33px\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"box\" style=\"border:1px solid #D6D4D4;background-color:#f8f8f8;padding:7px 0\">
        <table class=\"table\" style=\"width:100%\">
            <tr>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
                <td style=\"padding:7px 0\">
                    <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
                        {% if templateType == 'html' %}

                            <p style=\"border-bottom:1px solid #D6D4D4;margin:3px 0 7px;text-transform:uppercase;font-weight:500;font-size:18px;padding-bottom:10px\">
                                {{ 'Order {order_name}'|trans({}, 'Emails.Body', locale) }}&nbsp;-&nbsp;{{ 'Order edited'|trans({}, 'Emails.Body', locale)|raw }}
                            </p>

{% endif %}
                        <span style=\"color:#777\">
                            {{ 'Your order with the reference [1]{order_name}[/1] has been modified.'|trans({'[1]': '<span><strong>', '[/1]': '</strong></span>'}, 'Emails.Body', locale)|raw }}
                        </span>
                    </font>
                </td>
                <td width=\"10\" style=\"padding:7px 0\">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td class=\"space_footer\" style=\"padding:0!important\">&nbsp;</td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                {{ 'Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.'|trans({'%order_history_label%': 'Order history and details'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
            </span>
        </font>
    </td>
</tr>
<tr>
    <td class=\"linkbelow\" style=\"padding:7px 0\">
        <font size=\"2\" face=\"Open-sans, sans-serif\" color=\"#555454\">
            <span>
                {{ 'If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.'|trans({'%guest_tracking_label%': 'Guest Tracking'|trans({}, 'Shop.Theme.Customeraccount', locale)}, 'Emails.Body', locale)|raw }}
            </span>
        </font>
    </td>
</tr>
{% endblock %}
", "@MailThemes/classic/modules/ps_emailalerts/order_changed.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/order_changed.html.twig");
    }
}
