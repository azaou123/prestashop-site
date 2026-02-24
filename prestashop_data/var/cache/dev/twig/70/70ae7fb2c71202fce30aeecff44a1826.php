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

/* @MailThemes/modern/modules/followup/followup_3.html.twig */
class __TwigTemplate_952ab80362d4b0cdd3391bf283220fbf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'styles' => [$this, 'block_styles'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MailThemes/modern/components/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/modules/followup/followup_3.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/modern/modules/followup/followup_3.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/modern/components/layout.html.twig", "@MailThemes/modern/modules/followup/followup_3.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow up 3", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 3, $this->source); })())), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 11, $this->source); })()), "html", null, true);
        echo ";font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 13, $this->source); })()), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <!-- TITLE BEGINING -->
                                      <tr>
                                        <td align=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:20px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ";color:#363A41;\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Hi {firstname} {lastname},", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 23, $this->source); })())), "html", null, true);
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- SUBTITLE BEGINING -->
                                      <tr>
                                        <td align=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 30, $this->source); })()), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thanks for your trust.", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()));
        echo "</div>
                                        </td>
                                      </tr>
                                      <!-- SUBTITLE ENDING -->
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 54, $this->source); })()), "html", null, true);
        echo ";font-size:0px;padding:0 50px 40px;text-align:";
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 54, $this->source); })()), "html", null, true);
        echo ";\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 56, $this->source); })()), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 56, $this->source); })()), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" class=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-right:0;padding-left:0;word-break:break-word;\">
                                  <p style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\">
                                  </p>
                                  <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\" role=\"presentation\" width=\"25px\" ><tr><td style=\"height:0;line-height:0;\"> &nbsp;
</td></tr></table><![endif]-->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 84, $this->source); })()), "html", null, true);
        echo ";font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 86, $this->source); })()), "html", null, true);
        echo ";direction:";
        echo twig_escape_filter($this->env, (isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 86, $this->source); })()), "html", null, true);
        echo ";display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#fefefe;border:1px solid #DFDFDF;vertical-align:top;padding:20px 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 95, $this->source); })()), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We are pleased to offer you a discount of [1]{amount}%[/1] off your next order. And this offer is valid for [1]{days}[/1] days, so do not wait any longer!", ["[1]" => "<span class=\"label\">", "[/1]" => "</span>"], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 95, $this->source); })()));
        echo "</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 100, $this->source); })()), "html", null, true);
        echo ";color:#363A41;\"><span style=\"font-weight:700\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here is your VOUCHER CODE:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 100, $this->source); })()));
        echo "</span> {voucher_num}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["align_left"]) || array_key_exists("align_left", $context) ? $context["align_left"] : (function () { throw new RuntimeError('Variable "align_left" does not exist.', 105, $this->source); })()), "html", null, true);
        echo ";color:#363A41;\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter this code in your shopping cart to get the discount.", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 105, $this->source); })()));
        echo "</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "styles"));

        // line 128
        echo "<style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if mso]>
        <noscript>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        </noscript>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <!--[if !mso]><!-->
  <style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i);
  </style>
  <!--<![endif]-->
  <style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }

      .mj-column-px-25 {
        width: 25px !important;
        max-width: 25px;
      }
    }
  </style>
  <style media=\"screen and (min-width:480px)\">
    .moz-text-html .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }

    .moz-text-html .mj-column-px-25 {
      width: 25px !important;
      max-width: 25px;
    }
  </style>
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/modern/modules/followup/followup_3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 128,  284 => 127,  251 => 105,  247 => 104,  238 => 100,  234 => 99,  225 => 95,  221 => 94,  208 => 86,  203 => 84,  170 => 56,  163 => 54,  134 => 30,  130 => 29,  119 => 23,  115 => 22,  101 => 13,  96 => 11,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/modern/components/layout.html.twig' %}
        
{% block title %}{{ 'Follow up 3'|trans({}, 'Emails.Body', locale) }}{% endblock %}

{% block content %}
<!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 25px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:554px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"vertical-align:top;padding:0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <!-- TITLE BEGINING -->
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:20px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:20px;font-weight:600;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</div>
                                        </td>
                                      </tr>
                                      <!-- TITLE ENDING -->
                                      <!-- SUBTITLE BEGINING -->
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;padding-bottom:25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:16px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Thanks for your trust.'|trans({}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                      <!-- SUBTITLE ENDING -->
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:0 50px 40px;text-align:{{ align_left }};\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:25px;\" ><![endif]-->
                        <div class=\"mj-column-px-25 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td align=\"center\" class=\"left\" style=\"font-size:0px;padding:10px 25px;padding-top:0;padding-right:0;padding-left:0;word-break:break-word;\">
                                  <p style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\">
                                  </p>
                                  <!--[if mso | IE]><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 3px #505050;font-size:1px;margin:0px auto;width:25px;\" role=\"presentation\" width=\"25px\" ><tr><td style=\"height:0;line-height:0;\"> &nbsp;
</td></tr></table><![endif]-->
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BORDER ENDING -->
              <!-- BOX BEGINING -->
              <!--[if mso | IE]><tr><td class=\"\" width=\"604px\" ><table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" role=\"presentation\" style=\"width:604px;\" width=\"604\" ><tr><td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\"><![endif]-->
              <div style=\"margin:0px auto;max-width:604px;\">
                <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
                  <tbody>
                    <tr>
                      <td style=\"direction:{{ direction }};font-size:0px;padding:15px 50px 40px;text-align:center;\">
                        <!--[if mso | IE]><table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\"><tr><td class=\"\" style=\"vertical-align:top;width:504px;\" ><![endif]-->
                        <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:{{ align_left }};direction:{{ direction }};display:inline-block;vertical-align:top;width:100%;\">
                          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" width=\"100%\">
                            <tbody>
                              <tr>
                                <td style=\"background-color:#fefefe;border:1px solid #DFDFDF;vertical-align:top;padding:20px 0;\">
                                  <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"\" width=\"100%\">
                                    <tbody>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'We are pleased to offer you a discount of [1]{amount}%[/1] off your next order. And this offer is valid for [1]{days}[/1] days, so do not wait any longer!'|trans({'[1]': '<span class=\"label\">', '[/1]': '</span>'}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:{{ align_left }};color:#363A41;\"><span style=\"font-weight:700\">{{ 'Here is your VOUCHER CODE:'|trans({}, 'Emails.Body', locale)|raw }}</span> {voucher_num}</div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td align=\"{{ align_left }}\" style=\"font-size:0px;padding:10px 25px;padding-top:0px;word-break:break-word;\">
                                          <div style=\"font-family:Open sans, arial, sans-serif;font-size:14px;line-height:25px;text-align:{{ align_left }};color:#363A41;\">{{ 'Enter this code in your shopping cart to get the discount.'|trans({}, 'Emails.Body', locale)|raw }}</div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!--[if mso | IE]></td></tr></table><![endif]-->
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--[if mso | IE]></td></tr></table></td></tr><![endif]-->
              <!-- BOX ENDING -->
              

{% endblock %}

{% block styles %}
<style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      margin: 0;
      padding: 0;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
    }

    table,
    td {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    img {
      border: 0;
      height: auto;
      line-height: 100%;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    p {
      display: block;
      margin: 13px 0;
    }
  </style>
  <!--[if mso]>
        <noscript>
        <xml>
        <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
        </xml>
        </noscript>
        <![endif]-->
  <!--[if lte mso 11]>
        <style type=\"text/css\">
          .mj-outlook-group-fix { width:100% !important; }
        </style>
        <![endif]-->
  <!--[if !mso]><!-->
  <style type=\"text/css\">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700);
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i);
  </style>
  <!--<![endif]-->
  <style type=\"text/css\">
    @media only screen and (min-width:480px) {
      .mj-column-per-100 {
        width: 100% !important;
        max-width: 100%;
      }

      .mj-column-px-25 {
        width: 25px !important;
        max-width: 25px;
      }
    }
  </style>
  <style media=\"screen and (min-width:480px)\">
    .moz-text-html .mj-column-per-100 {
      width: 100% !important;
      max-width: 100%;
    }

    .moz-text-html .mj-column-px-25 {
      width: 25px !important;
      max-width: 25px;
    }
  </style>
  <style type=\"text/css\">
  </style>
  <style type=\"text/css\">
    .shadow {
      box-shadow: 0 20px 30px 0 rgba(0, 0, 0, 0.1);
    }

    .label {
      font-weight: 700;
    }

    .warning {
      font-weight: 700;
      font-size: 16px;
    }

    a {
      color: #25B9D7;
      text-decoration: underline;
      font-weight: 600;
    }

    a.light {
      font-weight: 400;
    }

    span.strong {
      font-weight: 600;
    }

    @media only screen and (max-width: 480px) {

      body,
      .no-bg {
        background-color: #fff !important;
      }

      .left p {
        text-align: left;
        display: inline-block
      }
    }
  </style>

{% endblock %}
", "@MailThemes/modern/modules/followup/followup_3.html.twig", "/var/www/html/mails/themes/modern/modules/followup/followup_3.html.twig");
    }
}
