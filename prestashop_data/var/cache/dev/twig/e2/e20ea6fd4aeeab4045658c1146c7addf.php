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

/* @PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig */
class __TwigTemplate_8dca18449f2ebd8d2b273bb162ddb255 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig"));

        // line 25
        echo "

<div class=\"card customer-personal-informations-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 30, $this->source); })()), "personalInformation", [], "any", false, false, false, 30), "firstName", [], "any", false, false, false, 30), "html", null, true);
        echo "
    ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 31, $this->source); })()), "personalInformation", [], "any", false, false, false, 31), "lastName", [], "any", false, false, false, 31), "html", null, true);
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, twig_sprintf("[%06d]", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 32, $this->source); })()), "customerId", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32)), "html", null, true);
        echo "
    -
    <a href=\"mailto:";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 34, $this->source); })()), "personalInformation", [], "any", false, false, false, 34), "email", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
      ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 35, $this->source); })()), "personalInformation", [], "any", false, false, false, 35), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "
    </a>

    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminCustomers", true, ["id_customer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 38, $this->source); })()), "customerId", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "updatecustomer" => 1, "back" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "uri", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\"
       class=\"tooltip-link float-right edit-link\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Social Title", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-social-title col-8\">
        ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 54, $this->source); })()), "personalInformation", [], "any", false, false, false, 54), "socialTitle", [], "any", false, false, false, 54), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Age", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-birthday\">
        ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 63, $this->source); })()), "personalInformation", [], "any", false, false, false, 63), "birthday", [], "any", false, false, false, 63), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registration Date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-registration-date\">
        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 72, $this->source); })()), "personalInformation", [], "any", false, false, false, 72), "registrationDate", [], "any", false, false, false, 72), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last Visit", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-last-visit-date\">
        ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 81, $this->source); })()), "personalInformation", [], "any", false, false, false, 81), "lastVisitDate", [], "any", false, false, false, 81), "html", null, true);
        echo "
      </div>
    </div>

    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 85, $this->source); })()), "personalInformation", [], "any", false, false, false, 85), "rankBySales", [], "any", false, false, false, 85)) {
            // line 86
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Best Customer Rank", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8 customer-sales-rank\">
          ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 91, $this->source); })()), "personalInformation", [], "any", false, false, false, 91), "rankBySales", [], "any", false, false, false, 91), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 95
        echo "
    ";
        // line 96
        if ((isset($context["isMultistoreEnabled"]) || array_key_exists("isMultistoreEnabled", $context) ? $context["isMultistoreEnabled"] : (function () { throw new RuntimeError('Variable "isMultistoreEnabled" does not exist.', 96, $this->source); })())) {
            // line 97
            echo "      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
            echo "
        </div>
        <div class=\"customer-shop-name col-8\">
          ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 102, $this->source); })()), "personalInformation", [], "any", false, false, false, 102), "shopName", [], "any", false, false, false, 102), "html", null, true);
            echo "
        </div>
      </div>
    ";
        }
        // line 106
        echo "
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8 customer-language-name\">
        ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 112, $this->source); })()), "personalInformation", [], "any", false, false, false, 112), "languageName", [], "any", false, false, false, 112), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registrations", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 121
        $context["isNewsletterSubscribed"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 121, $this->source); })()), "personalInformation", [], "any", false, false, false, 121), "subscriptions", [], "any", false, false, false, 121), "newsletterSubscribed", [], "any", false, false, false, 121);
        // line 122
        echo "        ";
        $context["isPartnerOffersSubscribed"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 122, $this->source); })()), "personalInformation", [], "any", false, false, false, 122), "subscriptions", [], "any", false, false, false, 122), "partnerOffersSubscribed", [], "any", false, false, false, 122);
        // line 123
        echo "
        <span class=\"customer-newsletter-subscription-status badge badge-";
        // line 124
        if ((isset($context["isNewsletterSubscribed"]) || array_key_exists("isNewsletterSubscribed", $context) ? $context["isNewsletterSubscribed"] : (function () { throw new RuntimeError('Variable "isNewsletterSubscribed" does not exist.', 124, $this->source); })())) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 125
        if ((isset($context["isNewsletterSubscribed"]) || array_key_exists("isNewsletterSubscribed", $context) ? $context["isNewsletterSubscribed"] : (function () { throw new RuntimeError('Variable "isNewsletterSubscribed" does not exist.', 125, $this->source); })())) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Newsletter", [], "Admin.Global"), "html", null, true);
        echo "
        </span>

        <span class=\"customer-partner-offers-status badge badge-";
        // line 129
        if ((isset($context["isPartnerOffersSubscribed"]) || array_key_exists("isPartnerOffersSubscribed", $context) ? $context["isPartnerOffersSubscribed"] : (function () { throw new RuntimeError('Variable "isPartnerOffersSubscribed" does not exist.', 129, $this->source); })())) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          <i class=\"material-icons\">";
        // line 130
        if ((isset($context["isPartnerOffersSubscribed"]) || array_key_exists("isPartnerOffersSubscribed", $context) ? $context["isPartnerOffersSubscribed"] : (function () { throw new RuntimeError('Variable "isPartnerOffersSubscribed" does not exist.', 130, $this->source); })())) {
            echo "check";
        } else {
            echo "cancel";
        }
        echo "</i>
          ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Partner offers", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Latest Update", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </div>
      <div class=\"customer-latest-update col-8\">
        ";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 141, $this->source); })()), "personalInformation", [], "any", false, false, false, 141), "lastUpdateDate", [], "any", false, false, false, 141), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        ";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
        echo "
      </div>
      <div class=\"col-8\">
        ";
        // line 150
        $context["isCustomerActive"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 150, $this->source); })()), "personalInformation", [], "any", false, false, false, 150), "active", [], "any", false, false, false, 150);
        // line 151
        echo "
        <span class=\"customer-status badge badge-";
        // line 152
        if ((isset($context["isCustomerActive"]) || array_key_exists("isCustomerActive", $context) ? $context["isCustomerActive"] : (function () { throw new RuntimeError('Variable "isCustomerActive" does not exist.', 152, $this->source); })())) {
            echo "success";
        } else {
            echo "danger";
        }
        echo " rounded\">
          ";
        // line 153
        if ((isset($context["isCustomerActive"]) || array_key_exists("isCustomerActive", $context) ? $context["isCustomerActive"] : (function () { throw new RuntimeError('Variable "isCustomerActive" does not exist.', 153, $this->source); })())) {
            // line 154
            echo "            <i class=\"material-icons\">check</i>
            ";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Active", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        } else {
            // line 157
            echo "            <i class=\"material-icons\">cancel</i>
            ";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inactive", [], "Admin.Global"), "html", null, true);
            echo "
          ";
        }
        // line 160
        echo "        </span>
      </div>
    </div>

    ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 164, $this->source); })()), "personalInformation", [], "any", false, false, false, 164), "guest", [], "any", false, false, false, 164)) {
            // line 165
            echo "      ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["transferGuestAccountForm"]) || array_key_exists("transferGuestAccountForm", $context) ? $context["transferGuestAccountForm"] : (function () { throw new RuntimeError('Variable "transferGuestAccountForm" does not exist.', 165, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
            // line 166
            echo "
      <div class=\"customer-guest-status row mb-1\">
        <div class=\"col-4 text-right\">
          ";
            // line 169
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This customer is registered as a Guest.", [], "Admin.Orderscustomers.Feature"), "html", null, true);
            echo "
        </div>
        <div class=\"col-8\">
          ";
            // line 172
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 172, $this->source); })()), "generalInformation", [], "any", false, false, false, 172), "customerBySameEmailExists", [], "any", false, false, false, 172)) {
                // line 173
                echo "            <p>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A registered customer account using the defined email address already exists. ", [], "Admin.Orderscustomers.Notification"), "html", null, true);
                echo "</p>
          ";
            } else {
                // line 175
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferGuestAccountForm"]) || array_key_exists("transferGuestAccountForm", $context) ? $context["transferGuestAccountForm"] : (function () { throw new RuntimeError('Variable "transferGuestAccountForm" does not exist.', 175, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_customers_transform_guest_to_customer", ["customerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customerInformation"]) || array_key_exists("customerInformation", $context) ? $context["customerInformation"] : (function () { throw new RuntimeError('Variable "customerInformation" does not exist.', 175, $this->source); })()), "customerId", [], "any", false, false, false, 175), "value", [], "any", false, false, false, 175)])]);
                echo "
            ";
                // line 176
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["transferGuestAccountForm"]) || array_key_exists("transferGuestAccountForm", $context) ? $context["transferGuestAccountForm"] : (function () { throw new RuntimeError('Variable "transferGuestAccountForm" does not exist.', 176, $this->source); })()), "transfer_guest_account", [], "any", false, false, false, 176), 'widget');
                echo "

            <p class=\"small-text\">
              ";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This feature generates a random password before sending an email to your customer.", [], "Admin.Orderscustomers.Help"), "html", null, true);
                echo "
            </p>
            ";
                // line 181
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transferGuestAccountForm"]) || array_key_exists("transferGuestAccountForm", $context) ? $context["transferGuestAccountForm"] : (function () { throw new RuntimeError('Variable "transferGuestAccountForm" does not exist.', 181, $this->source); })()), 'form_end');
                echo "
          ";
            }
            // line 183
            echo "        </div>
      </div>
    ";
        }
        // line 186
        echo "  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 186,  376 => 183,  371 => 181,  366 => 179,  360 => 176,  355 => 175,  349 => 173,  347 => 172,  341 => 169,  336 => 166,  333 => 165,  331 => 164,  325 => 160,  320 => 158,  317 => 157,  312 => 155,  309 => 154,  307 => 153,  299 => 152,  296 => 151,  294 => 150,  288 => 147,  279 => 141,  273 => 138,  263 => 131,  255 => 130,  247 => 129,  241 => 126,  233 => 125,  225 => 124,  222 => 123,  219 => 122,  217 => 121,  211 => 118,  202 => 112,  196 => 109,  191 => 106,  184 => 102,  178 => 99,  174 => 97,  172 => 96,  169 => 95,  162 => 91,  156 => 88,  152 => 86,  150 => 85,  143 => 81,  137 => 78,  128 => 72,  122 => 69,  113 => 63,  107 => 60,  98 => 54,  92 => 51,  81 => 43,  73 => 38,  67 => 35,  63 => 34,  58 => 32,  54 => 31,  50 => 30,  43 => 25,);
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


<div class=\"card customer-personal-informations-card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">person</i>
    {{ customerInformation.personalInformation.firstName }}
    {{ customerInformation.personalInformation.lastName }}
    {{ '[%06d]'|format(customerInformation.customerId.value) }}
    -
    <a href=\"mailto:{{ customerInformation.personalInformation.email }}\">
      {{ customerInformation.personalInformation.email }}
    </a>

    <a href=\"{{ getAdminLink('AdminCustomers', true, {'id_customer': customerInformation.customerId.value, 'updatecustomer': 1, 'back': app.request.uri}) }}\"
       class=\"tooltip-link float-right edit-link\"
       data-toggle=\"pstooltip\"
       title=\"\"
       data-placement=\"top\"
       data-original-title=\"{{ 'Edit'|trans({}, 'Admin.Actions') }}\"
    >
      <i class=\"material-icons\">edit</i>
    </a>
  </h3>
  <div class=\"card-body\">
    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Social Title'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"customer-social-title col-8\">
        {{ customerInformation.personalInformation.socialTitle }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Age'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8 customer-birthday\">
        {{ customerInformation.personalInformation.birthday }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Registration Date'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8 customer-registration-date\">
        {{ customerInformation.personalInformation.registrationDate }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Last Visit'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8 customer-last-visit-date\">
        {{ customerInformation.personalInformation.lastVisitDate }}
      </div>
    </div>

    {% if customerInformation.personalInformation.rankBySales %}
      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'Best Customer Rank'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </div>
        <div class=\"col-8 customer-sales-rank\">
          {{ customerInformation.personalInformation.rankBySales }}
        </div>
      </div>
    {% endif %}

    {% if isMultistoreEnabled %}
      <div class=\"row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'Store'|trans({}, 'Admin.Global') }}
        </div>
        <div class=\"customer-shop-name col-8\">
          {{ customerInformation.personalInformation.shopName }}
        </div>
      </div>
    {% endif %}

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Language'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"col-8 customer-language-name\">
        {{ customerInformation.personalInformation.languageName }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Registrations'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"col-8\">
        {% set isNewsletterSubscribed = customerInformation.personalInformation.subscriptions.newsletterSubscribed %}
        {% set isPartnerOffersSubscribed = customerInformation.personalInformation.subscriptions.partnerOffersSubscribed %}

        <span class=\"customer-newsletter-subscription-status badge badge-{% if isNewsletterSubscribed %}success{% else %}danger{% endif %} rounded\">
          <i class=\"material-icons\">{% if isNewsletterSubscribed %}check{% else %}cancel{% endif %}</i>
          {{ 'Newsletter'|trans({}, 'Admin.Global') }}
        </span>

        <span class=\"customer-partner-offers-status badge badge-{% if isPartnerOffersSubscribed %}success{% else %}danger{% endif %} rounded\">
          <i class=\"material-icons\">{% if isPartnerOffersSubscribed %}check{% else %}cancel{% endif %}</i>
          {{ 'Partner offers'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </span>
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Latest Update'|trans({}, 'Admin.Orderscustomers.Feature') }}
      </div>
      <div class=\"customer-latest-update col-8\">
        {{ customerInformation.personalInformation.lastUpdateDate }}
      </div>
    </div>

    <div class=\"row mb-1\">
      <div class=\"col-4 text-right\">
        {{ 'Status'|trans({}, 'Admin.Global') }}
      </div>
      <div class=\"col-8\">
        {% set isCustomerActive = customerInformation.personalInformation.active %}

        <span class=\"customer-status badge badge-{% if isCustomerActive %}success{% else %}danger{% endif %} rounded\">
          {% if isCustomerActive %}
            <i class=\"material-icons\">check</i>
            {{ 'Active'|trans({}, 'Admin.Global') }}
          {% else %}
            <i class=\"material-icons\">cancel</i>
            {{ 'Inactive'|trans({}, 'Admin.Global') }}
          {% endif %}
        </span>
      </div>
    </div>

    {% if customerInformation.personalInformation.guest %}
      {% form_theme transferGuestAccountForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

      <div class=\"customer-guest-status row mb-1\">
        <div class=\"col-4 text-right\">
          {{ 'This customer is registered as a Guest.'|trans({}, 'Admin.Orderscustomers.Feature') }}
        </div>
        <div class=\"col-8\">
          {% if customerInformation.generalInformation.customerBySameEmailExists %}
            <p>{{ 'A registered customer account using the defined email address already exists. '|trans({}, 'Admin.Orderscustomers.Notification') }}</p>
          {% else %}
            {{ form_start(transferGuestAccountForm, {'action': path('admin_customers_transform_guest_to_customer', {'customerId': customerInformation.customerId.value})}) }}
            {{ form_widget(transferGuestAccountForm.transfer_guest_account) }}

            <p class=\"small-text\">
              {{ 'This feature generates a random password before sending an email to your customer.'|trans({}, 'Admin.Orderscustomers.Help') }}
            </p>
            {{ form_end(transferGuestAccountForm) }}
          {% endif %}
        </div>
      </div>
    {% endif %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Customer/Blocks/View/personal_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Customer/Blocks/View/personal_information.html.twig");
    }
}
