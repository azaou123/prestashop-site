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

/* @MailThemes/classic/core/order_conf.html.twig */
class __TwigTemplate_4507de703439e0f5063881b8bd25f297 extends Template
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
        return "@MailThemes/classic/components/order_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/order_conf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/core/order_conf.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/order_layout.html.twig", "@MailThemes/classic/core/order_conf.html.twig", 1);
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
        echo "</span><br/>
      <span class=\"subtitle\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Thank you for shopping with {shop_name}!", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 8, $this->source); })())), "html", null, true);
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
          <font size=\"2\" face=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 22
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 22, $this->source); })()) == "html")) {
            // line 23
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order details", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 25, $this->source); })()));
            echo "
              </p>

";
        }
        // line 29
        echo "            <span>
              <span><strong>";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()));
        echo "</strong></span> {order_name} ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placed on", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 30, $this->source); })()));
        echo " {date}<br/><br/>
              <span><strong>";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 31, $this->source); })()));
        echo "</strong></span> {payment}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>
    <font size=\"2\" face=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <tr>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 45, $this->source); })()));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 46, $this->source); })()));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unit price", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 47, $this->source); })()));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 48, $this->source); })()));
        echo "</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total price", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 49, $this->source); })()));
        echo "</th>
        </tr>
        ";
        // line 51
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 51, $this->source); })()) == "html")) {
            // line 52
            echo "{products}
";
        }
        // line 54
        echo "        ";
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 54, $this->source); })()) == "txt")) {
            // line 55
            echo "{products_txt}
";
        }
        // line 57
        echo "
        ";
        // line 58
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 58, $this->source); })()) == "html")) {
            // line 59
            echo "{discounts}
";
        }
        // line 61
        echo "        ";
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 61, $this->source); })()) == "txt")) {
            // line 62
            echo "{discounts_txt}
";
        }
        // line 64
        echo "
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 72, $this->source); })()));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" align=\"right\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_products}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discounts", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 100, $this->source); })()));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 112, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_discounts}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        ";
        // line 121
        if (((isset($context["giftWrapping"]) || array_key_exists("giftWrapping", $context) ? $context["giftWrapping"] : (function () { throw new RuntimeError('Variable "giftWrapping" does not exist.', 121, $this->source); })()) == 1)) {
            // line 122
            echo "        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift-wrapping", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 129, $this->source); })()));
            echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
            // line 141
            echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 141, $this->source); })()), "html", null, true);
            echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_wrapping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        ";
        }
        // line 151
        echo "        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 158, $this->source); })()));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_shipping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 185, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Tax paid", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 186, $this->source); })()));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_tax_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"";
        // line 213
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 213, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    <strong>";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total paid", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 214, $this->source); })()));
        echo "</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"4\" face=\"";
        // line 226
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 226, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                    {total_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>

      </table>
    </font>
  </td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 246
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 246, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 247
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 247, $this->source); })()) == "html")) {
            // line 248
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 250
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 250, $this->source); })()));
            echo "
              </p>

";
        }
        // line 254
        echo "            <span>
              <span><strong>";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 255, $this->source); })()));
        echo "</strong></span> {carrier}<br/><br/>
              <span><strong>";
        // line 256
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 256, $this->source); })()));
        echo "</strong></span> {payment}
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
  <td>
    <table class=\"table\">
      <tr>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 277, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 278
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 278, $this->source); })()) == "html")) {
            // line 279
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 280
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 280, $this->source); })()));
            echo "
                    </p>
                    <span>
                      {delivery_block_html}
                    </span>
                  ";
        }
        // line 286
        echo "                  ";
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 286, $this->source); })()) == "txt")) {
            // line 287
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 287, $this->source); })()));
            echo "
\t\t\t\t\t\t\t\t\t\t{delivery_block_txt}
\t\t\t\t\t\t\t\t\t";
        }
        // line 290
        echo "                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
        <td width=\"20\" class=\"space_address\">&nbsp;</td>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"";
        // line 302
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 302, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 303
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 303, $this->source); })()) == "html")) {
            // line 304
            echo "                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 305
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 305, $this->source); })()));
            echo "
                    </p>
                    <span>
                      {invoice_block_html}
                    </span>
                  ";
        }
        // line 311
        echo "\t\t\t\t\t\t\t\t\t";
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 311, $this->source); })()) == "txt")) {
            // line 312
            echo "\t\t\t\t\t\t\t\t\t\t";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 312, $this->source); })()));
            echo "
\t\t\t\t\t\t\t\t\t\t{invoice_block_txt}
\t\t\t\t\t\t\t\t\t";
        }
        // line 315
        echo "                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
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
        // line 330
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 330, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 332
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Follow your order and download your invoice on our store, go to the <a href=\"{history_url}\" target=\"_blank\">%order_history_label%</a> section of your customer account.", ["%order_history_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order history and details", [], "Shop.Theme.Customeraccount", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 332, $this->source); })()))], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 332, $this->source); })()));
        echo "
      </span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 339
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 339, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>
        ";
        // line 341
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you have a guest account, you can follow your order via the <a href=\"{guest_tracking_url}\" target=\"_blank\">%guest_tracking_label%</a> section on our shop.", ["%guest_tracking_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Guest Tracking", [], "Shop.Theme.Customeraccount", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 341, $this->source); })()))], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 341, $this->source); })()));
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
        return "@MailThemes/classic/core/order_conf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  590 => 341,  585 => 339,  575 => 332,  570 => 330,  553 => 315,  546 => 312,  543 => 311,  534 => 305,  531 => 304,  529 => 303,  525 => 302,  511 => 290,  504 => 287,  501 => 286,  492 => 280,  489 => 279,  487 => 278,  483 => 277,  459 => 256,  455 => 255,  452 => 254,  445 => 250,  441 => 248,  439 => 247,  435 => 246,  412 => 226,  397 => 214,  393 => 213,  375 => 198,  360 => 186,  356 => 185,  338 => 170,  323 => 158,  319 => 157,  311 => 151,  298 => 141,  283 => 129,  279 => 128,  271 => 122,  269 => 121,  257 => 112,  242 => 100,  238 => 99,  220 => 84,  205 => 72,  201 => 71,  192 => 64,  188 => 62,  185 => 61,  181 => 59,  179 => 58,  176 => 57,  172 => 55,  169 => 54,  165 => 52,  163 => 51,  158 => 49,  154 => 48,  150 => 47,  146 => 46,  142 => 45,  136 => 42,  122 => 31,  116 => 30,  113 => 29,  106 => 25,  102 => 23,  100 => 22,  96 => 21,  80 => 8,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/order_layout.html.twig' %}

{% block content %}
<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Hi {firstname} {lastname},'|trans({}, 'Emails.Body', locale) }}</span><br/>
      <span class=\"subtitle\">{{ 'Thank you for shopping with {shop_name}!'|trans({}, 'Emails.Body', locale) }}</span>
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
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Order details'|trans({}, 'Emails.Body', locale)|raw }}
              </p>

{% endif %}
            <span>
              <span><strong>{{ 'Order:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {order_name} {{ 'Placed on'|trans({}, 'Emails.Body', locale)|raw }} {date}<br/><br/>
              <span><strong>{{ 'Payment:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {payment}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <tr>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">{{ 'Reference'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">{{ 'Product'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">{{ 'Unit price'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\">{{ 'Quantity'|trans({}, 'Emails.Body', locale)|raw }}</th>
          <th bgcolor=\"#f8f8f8\" style=\"border:1px solid #D6D4D4;background-color: #fbfbfb;color: #333;font-family: Arial;font-size: 13px;padding: 10px;\" width=\"17%\">{{ 'Total price'|trans({}, 'Emails.Body', locale)|raw }}</th>
        </tr>
        {% if templateType == 'html' %}
{products}
{% endif %}
        {% if templateType == 'txt' %}
{products_txt}
{% endif %}

        {% if templateType == 'html' %}
{discounts}
{% endif %}
        {% if templateType == 'txt' %}
{discounts_txt}
{% endif %}

        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Products'|trans({}, 'Emails.Body', locale)|raw }}</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" align=\"right\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    {total_products}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Discounts'|trans({}, 'Emails.Body', locale)|raw }}</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    {total_discounts}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        {% if giftWrapping == 1 %}
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Gift-wrapping'|trans({}, 'Emails.Body', locale)|raw }}</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    {total_wrapping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        {% endif %}
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Shipping'|trans({}, 'Emails.Body', locale)|raw }}</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    {total_shipping}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Total Tax paid'|trans({}, 'Emails.Body', locale)|raw }}</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    {total_tax_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>
        <tr class=\"conf_body\">
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    <strong>{{ 'Total paid'|trans({}, 'Emails.Body', locale)|raw }}</strong>
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
          <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
            <table class=\"table\">
              <tr>
                <td width=\"10\">&nbsp;</td>
                <td align=\"right\">
                  <font size=\"4\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                    {total_paid}
                  </font>
                </td>
                <td width=\"10\">&nbsp;</td>
              </tr>
            </table>
          </td>
        </tr>

      </table>
    </font>
  </td>
</tr>
<tr>
  <td class=\"box\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Shipping'|trans({}, 'Emails.Body', locale)|raw }}
              </p>

{% endif %}
            <span>
              <span><strong>{{ 'Carrier:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {carrier}<br/><br/>
              <span><strong>{{ 'Payment:'|trans({}, 'Emails.Body', locale)|raw }}</strong></span> {payment}
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
  <td>
    <table class=\"table\">
      <tr>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                  {% if templateType == 'html' %}
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      {{ 'Delivery address'|trans({}, 'Emails.Body', locale)|raw }}
                    </p>
                    <span>
                      {delivery_block_html}
                    </span>
                  {% endif %}
                  {% if templateType == 'txt' %}
\t\t\t\t\t\t\t\t\t\t{{ 'Delivery address'|trans({}, 'Emails.Body', locale)|raw }}
\t\t\t\t\t\t\t\t\t\t{delivery_block_txt}
\t\t\t\t\t\t\t\t\t{% endif %}
                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
        <td width=\"20\" class=\"space_address\">&nbsp;</td>
        <td class=\"box address\" width=\"310\" style=\"border:1px solid #D6D4D4;\">
          <table class=\"table\">
            <tr>
              <td width=\"10\">&nbsp;</td>
              <td>
                <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                  {% if templateType == 'html' %}
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      {{ 'Billing address'|trans({}, 'Emails.Body', locale)|raw }}
                    </p>
                    <span>
                      {invoice_block_html}
                    </span>
                  {% endif %}
\t\t\t\t\t\t\t\t\t{% if templateType == 'txt' %}
\t\t\t\t\t\t\t\t\t\t{{ 'Billing address'|trans({}, 'Emails.Body', locale)|raw }}
\t\t\t\t\t\t\t\t\t\t{invoice_block_txt}
\t\t\t\t\t\t\t\t\t{% endif %}
                </font>
              </td>
              <td width=\"10\">&nbsp;</td>
            </tr>
          </table>
        </td>
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
", "@MailThemes/classic/core/order_conf.html.twig", "/var/www/html/mails/themes/classic/core/order_conf.html.twig");
    }
}
