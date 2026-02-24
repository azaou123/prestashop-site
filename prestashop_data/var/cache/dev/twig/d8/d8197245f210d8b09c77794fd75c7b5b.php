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

/* @MailThemes/classic/modules/ps_emailalerts/new_order.html.twig */
class __TwigTemplate_6fc10b1d7762324a1e8d66068056ae3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig"));

        $this->parent = $this->loadTemplate("@MailThemes/classic/components/layout.html.twig", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Congratulations!", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 7, $this->source); })()));
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new order was placed on {shop_name} by the following customer: {firstname} {lastname} ({email})", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 14, $this->source); })())), "html", null, true);
        echo "</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 28
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 28, $this->source); })()) == "html")) {
            // line 29
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order details", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 31, $this->source); })()));
            echo "
              </p>
            
";
        }
        // line 35
        echo "            <span>
              <span><strong>";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 36, $this->source); })()));
        echo "</strong></span> {order_name} ";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Placed on", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 36, $this->source); })()));
        echo " {date}<br/><br/>
              <span><strong>";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Payment:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 37, $this->source); })()));
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
        // line 48
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
      <table class=\"table table-recap\" bgcolor=\"#ffffff\"><!-- Title -->
        <thead>
          <tr>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 52, $this->source); })()));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 53, $this->source); })()));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unit price", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 54, $this->source); })()));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 55, $this->source); })()));
        echo "</th>
            <th style=\"border:1px solid #D6D4D4;\">";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total price", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 56, $this->source); })()));
        echo "</th>
          </tr>
        </thead>
        <tbody>
          {items}
          <tr class=\"conf_body\">
            <td bgcolor=\"#f8f8f8\" colspan=\"4\" style=\"border:1px solid #D6D4D4;\">
              <table class=\"table\">
                <tr>
                  <td width=\"10\">&nbsp;</td>
                  <td align=\"right\">
                    <font size=\"2\" face=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Products", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 68, $this->source); })()));
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
        // line 80
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 80, $this->source); })()), "html", null, true);
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
        // line 95
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discounts", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 96, $this->source); })()));
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
        // line 108
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      {total_discounts}
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
        // line 123
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Gift-wrapping", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 124, $this->source); })()));
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
        // line 136
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      {total_wrapping}
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
        // line 151
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 151, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shipping", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 152, $this->source); })()));
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
        // line 164
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 164, $this->source); })()), "html", null, true);
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
        // line 179
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total Tax paid", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 180, $this->source); })()));
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
        // line 192
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 192, $this->source); })()), "html", null, true);
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
        // line 207
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 207, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      <strong>";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total paid", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 208, $this->source); })()));
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
                  <td align=\"right\" class=\"total_amount\">
                    <font size=\"4\" face=\"";
        // line 220
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 220, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                      {total_paid}
                    </font>
                  </td>
                  <td width=\"10\">&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </font>
  </td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 240
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 240, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 241
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 241, $this->source); })()) == "html")) {
            // line 242
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 244
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carrier:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 244, $this->source); })()));
            echo "
              </p>
            
";
        }
        // line 248
        echo "            <span>
              {carrier}
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
        // line 270
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 270, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 271
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 271, $this->source); })()) == "html")) {
            // line 272
            echo "
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 274
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delivery address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 274, $this->source); })()));
            echo "
                    </p>
                  
";
        }
        // line 278
        echo "                  <span>
                    {delivery_block_html}
                  </span>
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
                <font size=\"2\" face=\"";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 293, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
                  ";
        // line 294
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 294, $this->source); })()) == "html")) {
            // line 295
            echo "
                    <p style=\"border-bottom:1px solid #D6D4D4;\">
                      ";
            // line 297
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Billing address", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 297, $this->source); })()));
            echo "
                    </p>
                  
";
        }
        // line 301
        echo "                  <span>
                    {invoice_block_html}
                  </span>
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
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["languageDefaultFont"]) || array_key_exists("languageDefaultFont", $context) ? $context["languageDefaultFont"] : (function () { throw new RuntimeError('Variable "languageDefaultFont" does not exist.', 323, $this->source); })()), "html", null, true);
        echo "Open-sans, sans-serif\" color=\"#555454\">
            ";
        // line 324
        if (((isset($context["templateType"]) || array_key_exists("templateType", $context) ? $context["templateType"] : (function () { throw new RuntimeError('Variable "templateType" does not exist.', 324, $this->source); })()) == "html")) {
            // line 325
            echo "
              <p style=\"border-bottom:1px solid #D6D4D4;\">
                ";
            // line 327
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer message:", [], "Emails.Body", (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 327, $this->source); })()));
            echo "
              </p>
            
";
        }
        // line 331
        echo "            <span>
              {message}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 331,  535 => 327,  531 => 325,  529 => 324,  525 => 323,  501 => 301,  494 => 297,  490 => 295,  488 => 294,  484 => 293,  467 => 278,  460 => 274,  456 => 272,  454 => 271,  450 => 270,  426 => 248,  419 => 244,  415 => 242,  413 => 241,  409 => 240,  386 => 220,  371 => 208,  367 => 207,  349 => 192,  334 => 180,  330 => 179,  312 => 164,  297 => 152,  293 => 151,  275 => 136,  260 => 124,  256 => 123,  238 => 108,  223 => 96,  219 => 95,  201 => 80,  186 => 68,  182 => 67,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  145 => 48,  131 => 37,  125 => 36,  122 => 35,  115 => 31,  111 => 29,  109 => 28,  105 => 27,  89 => 14,  85 => 13,  76 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@MailThemes/classic/components/layout.html.twig' %}

{% block content %}
<tr>
  <td align=\"center\" class=\"titleblock\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span class=\"title\">{{ 'Congratulations!'|trans({}, 'Emails.Body', locale)|raw }}</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"linkbelow\">
    <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
      <span>{{ 'A new order was placed on {shop_name} by the following customer: {firstname} {lastname} ({email})'|trans({}, 'Emails.Body', locale) }}</span>
    </font>
  </td>
</tr>
<tr>
  <td class=\"space_footer\">&nbsp;</td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
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
        <thead>
          <tr>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Reference'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Product'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Unit price'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Quantity'|trans({}, 'Emails.Body', locale)|raw }}</th>
            <th style=\"border:1px solid #D6D4D4;\">{{ 'Total price'|trans({}, 'Emails.Body', locale)|raw }}</th>
          </tr>
        </thead>
        <tbody>
          {items}
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
                  <td align=\"right\" class=\"total_amount\">
                    <font size=\"4\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
                      {total_paid}
                    </font>
                  </td>
                  <td width=\"10\">&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </font>
  </td>
</tr>
<tr>
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Carrier:'|trans({}, 'Emails.Body', locale)|raw }}
              </p>
            
{% endif %}
            <span>
              {carrier}
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
                  
{% endif %}
                  <span>
                    {delivery_block_html}
                  </span>
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
                  
{% endif %}
                  <span>
                    {invoice_block_html}
                  </span>
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
  <td class=\"box\" colspan=\"3\" style=\"border:1px solid #D6D4D4;\">
    <table class=\"table\">
      <tr>
        <td width=\"10\">&nbsp;</td>
        <td>
          <font size=\"2\" face=\"{{ languageDefaultFont }}Open-sans, sans-serif\" color=\"#555454\">
            {% if templateType == 'html' %}

              <p style=\"border-bottom:1px solid #D6D4D4;\">
                {{ 'Customer message:'|trans({}, 'Emails.Body', locale)|raw }}
              </p>
            
{% endif %}
            <span>
              {message}
            </span>
          </font>
        </td>
        <td width=\"10\">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
{% endblock %}
", "@MailThemes/classic/modules/ps_emailalerts/new_order.html.twig", "/var/www/html/mails/themes/classic/modules/ps_emailalerts/new_order.html.twig");
    }
}
