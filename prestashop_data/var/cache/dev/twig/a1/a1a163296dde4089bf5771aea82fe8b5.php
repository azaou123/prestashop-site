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

/* @MailThemes/classic/components/layout.html.twig */
class __TwigTemplate_a4822b7dd6c773ed92f8c8de8d4974e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/components/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/components/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    <title>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Message from {shop_name}", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mailThemesUrl"]) || array_key_exists("mailThemesUrl", $context) ? $context["mailThemesUrl"] : (function () { throw new RuntimeError('Variable "mailThemesUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "/classic/assets/email.css\">
    ";
        // line 8
        if ((isset($context["languageIsRTL"]) || array_key_exists("languageIsRTL", $context) ? $context["languageIsRTL"] : (function () { throw new RuntimeError('Variable "languageIsRTL" does not exist.', 8, $this->source); })())) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["mailThemesUrl"]) || array_key_exists("mailThemesUrl", $context) ? $context["mailThemesUrl"] : (function () { throw new RuntimeError('Variable "mailThemesUrl" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "/classic/assets/rtl.css\">";
        }
        // line 9
        echo "
    <style>
      /****** responsive ********/
      @media only screen and (max-width: 300px){
        body {
          width:218px !important;
          margin:auto !important;
        }
        .table {width:195px !important;margin:auto !important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}
        span.title{font-size:20px !important;line-height: 23px !important}
        span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}
        td.box p{font-size: 12px !important;font-weight: bold !important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 200px!important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }

      @media only screen and (min-width: 301px) and (max-width: 500px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 295px !important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}

      }

      @media only screen and (min-width: 501px) and (max-width: 768px) {
        body {width:478px!important;margin:auto!important;}
        .table {width:450px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
      }


      /* Mobile */

      @media only screen and (max-device-width: 480px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}

        .table-recap{width: 295px!important;}
        .table-recap tr td, .conf_body td{text-align:center!important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }
    </style>
  </head>
  <body style=\"-webkit-text-size-adjust:none;\" ";
        // line 64
        if (((array_key_exists("languageIsRTL", $context)) ? (_twig_default_filter((isset($context["languageIsRTL"]) || array_key_exists("languageIsRTL", $context) ? $context["languageIsRTL"] : (function () { throw new RuntimeError('Variable "languageIsRTL" does not exist.', 64, $this->source); })()), false)) : (false))) {
            echo "dir=\"rtl\"";
        }
        echo ">
    <table class=\"table table-mail\">
      <tr>
        <td id=\"header-left\" class=\"space\">&nbsp;</td>
        <td align=\"center\">
          <table class=\"table\" bgcolor=\"#ffffff\">
            ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 73
        echo "
            ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "
            ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "          </table>
        </td>
        <td id=\"footer-right\" class=\"space\">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 71
        echo "              ";
        $this->loadTemplate("@MailThemes/classic/components/header.html.twig", "@MailThemes/classic/components/layout.html.twig", 71)->display($context);
        // line 72
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 75
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 78
        echo "              ";
        $this->loadTemplate("@MailThemes/classic/components/footer.html.twig", "@MailThemes/classic/components/layout.html.twig", 78)->display($context);
        // line 79
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/components/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 79,  217 => 78,  207 => 77,  197 => 75,  187 => 74,  177 => 72,  174 => 71,  164 => 70,  147 => 80,  145 => 77,  142 => 76,  140 => 74,  137 => 73,  135 => 70,  124 => 64,  67 => 9,  61 => 8,  57 => 7,  53 => 6,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    <title>{{ 'Message from {shop_name}'|trans({}, 'Emails.Body', locale) }}</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ mailThemesUrl }}/classic/assets/email.css\">
    {% if languageIsRTL %}<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ mailThemesUrl }}/classic/assets/rtl.css\">{% endif %}

    <style>
      /****** responsive ********/
      @media only screen and (max-width: 300px){
        body {
          width:218px !important;
          margin:auto !important;
        }
        .table {width:195px !important;margin:auto !important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto !important;display: block !important;}
        span.title{font-size:20px !important;line-height: 23px !important}
        span.subtitle{font-size: 14px !important;line-height: 18px !important;padding-top:10px !important;display:block !important;}
        td.box p{font-size: 12px !important;font-weight: bold !important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 200px!important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }

      @media only screen and (min-width: 301px) and (max-width: 500px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
        .table-recap table, .table-recap thead, .table-recap tbody, .table-recap th, .table-recap td, .table-recap tr {
          display: block !important;
        }
        .table-recap{width: 295px !important;}
        .table-recap tr td, .conf_body td{text-align:center !important;}

      }

      @media only screen and (min-width: 501px) and (max-width: 768px) {
        body {width:478px!important;margin:auto!important;}
        .table {width:450px!important;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}
      }


      /* Mobile */

      @media only screen and (max-device-width: 480px) {
        body {width:308px!important;margin:auto!important;}
        .table {width:285px;margin:auto!important;}
        .logo, .titleblock, .linkbelow, .box, .footer, .space_footer{width:auto!important;display: block!important;}

        .table-recap{width: 295px!important;}
        .table-recap tr td, .conf_body td{text-align:center!important;}
        .address{display: block !important;margin-bottom: 10px !important;}
        .space_address{display: none !important;}
      }
    </style>
  </head>
  <body style=\"-webkit-text-size-adjust:none;\" {% if languageIsRTL|default(false) %}dir=\"rtl\"{% endif %}>
    <table class=\"table table-mail\">
      <tr>
        <td id=\"header-left\" class=\"space\">&nbsp;</td>
        <td align=\"center\">
          <table class=\"table\" bgcolor=\"#ffffff\">
            {% block header %}
              {% include '@MailThemes/classic/components/header.html.twig' %}
            {% endblock header %}

            {% block content %}
            {% endblock %}

            {% block footer %}
              {% include '@MailThemes/classic/components/footer.html.twig' %}
            {% endblock footer %}
          </table>
        </td>
        <td id=\"footer-right\" class=\"space\">&nbsp;</td>
      </tr>
    </table>
  </body>
</html>
", "@MailThemes/classic/components/layout.html.twig", "/var/www/html/mails/themes/classic/components/layout.html.twig");
    }
}
