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

/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_cdfa10d3c9d640951e23f9b3da5fa1ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_tabs_container' => [$this, 'block_product_tabs_container'],
            'product_panel_essentials' => [$this, 'block_product_panel_essentials'],
            'product_panel_combinations' => [$this, 'block_product_panel_combinations'],
            'product_panel_shipping' => [$this, 'block_product_panel_shipping'],
            'product_panel_pricing' => [$this, 'block_product_panel_pricing'],
            'product_panel_seo' => [$this, 'block_product_panel_seo'],
            'product_panel_options' => [$this, 'block_product_panel_options'],
            'product_panel_modules' => [$this, 'block_product_panel_modules'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        // line 312
        $context["js_translatable"] = twig_array_merge(["Are you sure to disable variations ? they will all be deleted" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will delete all the combinations. Do you wish to proceed?", [], "Admin.Catalog.Notification")],         // line 314
(isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 314, $this->source); })()));
        // line 316
        $context["js_translatable"] = twig_array_merge(["Form update success" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings updated.", [], "Admin.Notifications.Success"), "Form update errors" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unable to update settings.", [], "Admin.Notifications.Error"), "Delete" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "ToLargeFile" => twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The file is too large. Maximum size allowed is: [1] MB. The file you are trying to upload is [2] MB.", [], "Admin.Notifications.Error"), ["[1]" => "{{maxFilesize}}", "[2]" => "{{filesize}}"]), "Drop images here" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop images here", [], "Admin.Catalog.Feature"), "or select files" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("or select files", [], "Admin.Catalog.Feature"), "files recommandations" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recommended size 800 x 800px for default theme.", [], "Admin.Catalog.Feature"), "files recommandations2" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("JPG, GIF, PNG or WebP format.", [], "Admin.Catalog.Feature"), "Cover" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cover", [], "Admin.Catalog.Feature"), "Are you sure you want to delete this item?" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this item?", [], "Admin.Notifications.Warning"), "Quantities" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantities", [], "Admin.Catalog.Feature"), "Combinations" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations", [], "Admin.Catalog.Feature"), "Virtual product" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Virtual product", [], "Admin.Catalog.Feature"), "tax incl." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl.", [], "Admin.Catalog.Feature"), "tax excl." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax excl.", [], "Admin.Catalog.Feature"), "You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A pack of products can't have combinations.", [], "Admin.Catalog.Notification") . " ") . twig_get_attribute($this->env, $this->source,         // line 332
(isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 332, $this->source); })()), "Are you sure to disable variations ? they will all be deleted", [], "array", false, false, false, 332)), "You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted." => (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A virtual product can't have combinations.", [], "Admin.Catalog.Notification") . " ") . twig_get_attribute($this->env, $this->source,         // line 333
(isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 333, $this->source); })()), "Are you sure to disable variations ? they will all be deleted", [], "array", false, false, false, 333)), "Are you sure you want to delete the selected item(s)?" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete the selected item(s)?", [], "Admin.Global")],         // line 335
(isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 335, $this->source); })()));
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . (isset($context["rtl_suffix"]) || array_key_exists("rtl_suffix", $context) ? $context["rtl_suffix"] : (function () { throw new RuntimeError('Variable "rtl_suffix" does not exist.', 29, $this->source); })())) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "  ";
        $context["hooks"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHooksArray("displayAdminProductsExtra", ["id_product" => (isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 33, $this->source); })())]);
        // line 34
        echo "  <div class=\"header-toolbar d-print-none\">
    ";
        // line 35
        echo $this->extensions['PrestaShopBundle\Twig\Extension\MultistoreComponentsExtension']->getMultistoreHeader();
        echo "
  </div>
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    ";
        // line 39
        if ( !(isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 39, $this->source); })())) {
            echo " <fieldset disabled id=\"field-disabled\"> ";
        }
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        $this->displayBlock('product_header', $context, $blocks);
        // line 53
        echo "
    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'errors');
        echo "
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      ";
        // line 62
        echo "      ";
        $this->displayBlock('product_tabs_container', $context, $blocks);
        // line 65
        echo "      <div id=\"form_content\" class=\"tab-content\">

        ";
        // line 68
        echo "        ";
        $this->displayBlock('product_panel_essentials', $context, $blocks);
        // line 89
        echo "
        ";
        // line 91
        echo "        ";
        $this->displayBlock('product_panel_combinations', $context, $blocks);
        // line 113
        echo "
        ";
        // line 115
        echo "        ";
        $this->displayBlock('product_panel_shipping', $context, $blocks);
        // line 130
        echo "
        ";
        // line 132
        echo "        ";
        $this->displayBlock('product_panel_pricing', $context, $blocks);
        // line 139
        echo "
        ";
        // line 141
        echo "        ";
        $this->displayBlock('product_panel_seo', $context, $blocks);
        // line 147
        echo "
        ";
        // line 149
        echo "        ";
        $this->displayBlock('product_panel_options', $context, $blocks);
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        $this->displayBlock('product_panel_modules', $context, $blocks);
        // line 231
        echo "      </div>

      ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "id_product", [], "any", false, false, false, 233), 'widget');
        echo "
      ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "_token", [], "any", false, false, false, 234), 'widget');
        echo "

    </div>
    ";
        // line 238
        echo "    ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/footer.html.twig", ["preview_link" =>         // line 239
(isset($context["preview_link"]) || array_key_exists("preview_link", $context) ? $context["preview_link"] : (function () { throw new RuntimeError('Variable "preview_link" does not exist.', 239, $this->source); })()), "preview_link_deactivate" =>         // line 240
(isset($context["preview_link_deactivate"]) || array_key_exists("preview_link_deactivate", $context) ? $context["preview_link_deactivate"] : (function () { throw new RuntimeError('Variable "preview_link_deactivate" does not exist.', 240, $this->source); })()), "is_shop_context" =>         // line 241
(isset($context["is_shop_context"]) || array_key_exists("is_shop_context", $context) ? $context["is_shop_context"] : (function () { throw new RuntimeError('Variable "is_shop_context" does not exist.', 241, $this->source); })()), "editable" =>         // line 242
(isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 242, $this->source); })()), "is_active" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 243
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "step1", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243), "active", [], "any", false, false, false, 243), "productId" =>         // line 244
(isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 244, $this->source); })())]);
        // line 245
        echo "
    ";
        // line 246
        if ( !(isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 246, $this->source); })())) {
            echo " </fieldset> ";
        }
        // line 247
        echo "  </form>


  ";
        // line 250
        $this->loadTemplate("@PrestaShop/Admin/Product/ProductPage/product.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 250, "1872195220")->display(twig_array_merge($context, ["id" => "confirmation_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning", [], "Admin.Notifications.Warning"), "closable" => false, "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global"), "class" => "btn btn-outline-secondary btn-lg cancel"], 1 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "class" => "btn btn-primary btn-lg continue"]]]));
        // line 271
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_product_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header"));

        // line 42
        echo "      ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/header.html.twig", ["formName" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 43
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "step1", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "formType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 44
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "step1", [], "any", false, false, false, 44), "type_product", [], "any", false, false, false, 44), "is_multishop_context" =>         // line 45
(isset($context["is_multishop_context"]) || array_key_exists("is_multishop_context", $context) ? $context["is_multishop_context"] : (function () { throw new RuntimeError('Variable "is_multishop_context" does not exist.', 45, $this->source); })()), "languages" =>         // line 46
(isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 46, $this->source); })()), "help_link" =>         // line 47
(isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 47, $this->source); })()), "stats_link" =>         // line 48
(isset($context["stats_link"]) || array_key_exists("stats_link", $context) ? $context["stats_link"] : (function () { throw new RuntimeError('Variable "stats_link" does not exist.', 48, $this->source); })()), "isCreationMode" =>         // line 49
(isset($context["isCreationMode"]) || array_key_exists("isCreationMode", $context) ? $context["isCreationMode"] : (function () { throw new RuntimeError('Variable "isCreationMode" does not exist.', 49, $this->source); })())]);
        // line 51
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_product_tabs_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tabs_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_tabs_container"));

        // line 63
        echo "        ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Blocks/tabs.html.twig", ["hooks" => (isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 63, $this->source); })())]);
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_product_panel_essentials($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_essentials"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_essentials"));

        // line 69
        echo "          ";
        $context["formQuantityShortcut"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "step1", [], "any", false, true, false, 69), "qty_0_shortcut", [], "any", true, true, false, 69)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "step1", [], "any", false, false, false, 69), "qty_0_shortcut", [], "any", false, false, false, 69)) : (null));
        // line 70
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/essentials.html.twig", ["formPackItems" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 71
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "step1", [], "any", false, false, false, 71), "inputPackItems", [], "any", false, false, false, 71), "productId" =>         // line 72
(isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 72, $this->source); })()), "images" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 73
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "step1", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73), "images", [], "any", false, false, false, 73), "formShortDescription" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "step1", [], "any", false, false, false, 74), "description_short", [], "any", false, false, false, 74), "formDescription" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "step1", [], "any", false, false, false, 75), "description", [], "any", false, false, false, 75), "formFeatures" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 76
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "step1", [], "any", false, false, false, 76), "features", [], "any", false, false, false, 76), "formManufacturer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 77
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "step1", [], "any", false, false, false, 77), "id_manufacturer", [], "any", false, false, false, 77), "formRelatedProducts" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 78
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "step1", [], "any", false, false, false, 78), "related_products", [], "any", false, false, false, 78), "is_combination_active" =>         // line 79
(isset($context["is_combination_active"]) || array_key_exists("is_combination_active", $context) ? $context["is_combination_active"] : (function () { throw new RuntimeError('Variable "is_combination_active" does not exist.', 79, $this->source); })()), "has_combinations" =>         // line 80
(isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 80, $this->source); })()), "formReference" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 81
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "step6", [], "any", false, false, false, 81), "reference", [], "any", false, false, false, 81), "formQuantityShortcut" =>         // line 82
(isset($context["formQuantityShortcut"]) || array_key_exists("formQuantityShortcut", $context) ? $context["formQuantityShortcut"] : (function () { throw new RuntimeError('Variable "formQuantityShortcut" does not exist.', 82, $this->source); })()), "formPriceShortcut" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "step1", [], "any", false, false, false, 83), "price_shortcut", [], "any", false, false, false, 83), "formPriceShortcutTTC" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "step1", [], "any", false, false, false, 84), "price_ttc_shortcut", [], "any", false, false, false, 84), "formCategories" => twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "step1", [], "any", false, false, false, 85)]);
        // line 87
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_product_panel_combinations($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_combinations"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_combinations"));

        // line 92
        echo "          ";
        $context["formStockQuantity"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "step3", [], "any", false, true, false, 92), "qty_0", [], "any", true, true, false, 92)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "step3", [], "any", false, false, false, 92), "qty_0", [], "any", false, false, false, 92)) : (null));
        // line 93
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/combinations.html.twig", ["formDependsOnStocks" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "step3", [], "any", false, false, false, 94), "depends_on_stock", [], "any", false, false, false, 94), "productId" =>         // line 95
(isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 95, $this->source); })()), "formStockQuantity" =>         // line 96
(isset($context["formStockQuantity"]) || array_key_exists("formStockQuantity", $context) ? $context["formStockQuantity"] : (function () { throw new RuntimeError('Variable "formStockQuantity" does not exist.', 96, $this->source); })()), "formStockMinimalQuantity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 97
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "step3", [], "any", false, false, false, 97), "minimal_quantity", [], "any", false, false, false, 97), "formLowStockThreshold" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 98
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "step3", [], "any", false, false, false, 98), "low_stock_threshold", [], "any", false, false, false, 98), "formLocation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 99
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "step3", [], "any", false, false, false, 99), "location", [], "any", false, false, false, 99), "formLowStockAlert" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 100
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "step3", [], "any", false, false, false, 100), "low_stock_alert", [], "any", false, false, false, 100), "formVirtualProduct" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 101
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "step3", [], "any", false, false, false, 101), "virtual_product", [], "any", false, false, false, 101), "asm_globally_activated" =>         // line 102
(isset($context["asm_globally_activated"]) || array_key_exists("asm_globally_activated", $context) ? $context["asm_globally_activated"] : (function () { throw new RuntimeError('Variable "asm_globally_activated" does not exist.', 102, $this->source); })()), "formType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 103
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "step1", [], "any", false, false, false, 103), "type_product", [], "any", false, false, false, 103), "formAdvancedStockManagement" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 104
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "step3", [], "any", false, false, false, 104), "advanced_stock_management", [], "any", false, false, false, 104), "formPackStockType" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 105
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "step3", [], "any", false, false, false, 105), "pack_stock_type", [], "any", false, false, false, 105), "formStep3" => twig_get_attribute($this->env, $this->source,         // line 106
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "step3", [], "any", false, false, false, 106), "formCombinations" =>         // line 107
(isset($context["formCombinations"]) || array_key_exists("formCombinations", $context) ? $context["formCombinations"] : (function () { throw new RuntimeError('Variable "formCombinations" does not exist.', 107, $this->source); })()), "has_combinations" =>         // line 108
(isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 108, $this->source); })()), "max_upload_size" =>         // line 109
(isset($context["max_upload_size"]) || array_key_exists("max_upload_size", $context) ? $context["max_upload_size"] : (function () { throw new RuntimeError('Variable "max_upload_size" does not exist.', 109, $this->source); })())]);
        // line 111
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_product_panel_shipping($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_shipping"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_shipping"));

        // line 116
        echo "          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    ";
        // line 119
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_shipping.html.twig", ["form" => twig_get_attribute($this->env, $this->source,         // line 120
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "step4", [], "any", false, false, false, 120), "asm_globally_activated" =>         // line 121
(isset($context["asm_globally_activated"]) || array_key_exists("asm_globally_activated", $context) ? $context["asm_globally_activated"] : (function () { throw new RuntimeError('Variable "asm_globally_activated" does not exist.', 121, $this->source); })()), "isNotVirtual" => (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 122
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "step1", [], "any", false, false, false, 122), "type_product", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "value", [], "any", false, false, false, 122) != "2"), "isChecked" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 123
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "step3", [], "any", false, false, false, 123), "advanced_stock_management", [], "any", false, false, false, 123), "vars", [], "any", false, false, false, 123), "checked", [], "any", false, false, false, 123), "warehouses" =>         // line 124
(isset($context["warehouses"]) || array_key_exists("warehouses", $context) ? $context["warehouses"] : (function () { throw new RuntimeError('Variable "warehouses" does not exist.', 124, $this->source); })())]);
        // line 125
        echo "
                  </div>
                </div>
          </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 132
    public function block_product_panel_pricing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_pricing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_pricing"));

        // line 133
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/pricing.html.twig", ["pricingForm" => twig_get_attribute($this->env, $this->source,         // line 134
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "step2", [], "any", false, false, false, 134), "is_multishop_context" =>         // line 135
(isset($context["is_multishop_context"]) || array_key_exists("is_multishop_context", $context) ? $context["is_multishop_context"] : (function () { throw new RuntimeError('Variable "is_multishop_context" does not exist.', 135, $this->source); })()), "productId" =>         // line 136
(isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 136, $this->source); })())]);
        // line 137
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 141
    public function block_product_panel_seo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_seo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_seo"));

        // line 142
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/seo.html.twig", ["seoForm" => twig_get_attribute($this->env, $this->source,         // line 143
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "step5", [], "any", false, false, false, 143), "productId" =>         // line 144
(isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 144, $this->source); })())]);
        // line 145
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 149
    public function block_product_panel_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_options"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_options"));

        // line 150
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Panels/options.html.twig", ["optionsForm" => twig_get_attribute($this->env, $this->source,         // line 151
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "step6", [], "any", false, false, false, 151), "productId" =>         // line 152
(isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 152, $this->source); })())]);
        // line 153
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_product_panel_modules($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_modules"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_panel_modules"));

        // line 158
        echo "          ";
        if ( !twig_test_empty($this->extensions['PrestaShopBundle\Twig\HookExtension']->hooksArrayContent((isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 158, $this->source); })())))) {
            // line 159
            echo "            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"container-fluid\">
                <div class=\"row module-selection\" style=\"display: none;\">
                  <div class=\"col-lg-7\">
                    ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 163, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 164
                echo "                      <div class=\"module-render-container module-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 164), "name", [], "any", false, false, false, 164), "html", null, true);
                echo "\">
                        <div>
                          <img class=\"top-logo\" src=\"";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 166), "img", [], "any", false, false, false, 166), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 166), "displayName", [], "any", false, false, false, 166), "html", null, true);
                echo "\">
                          <h2 class=\"text-ellipsis module-name-grid\">";
                // line 167
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 167), "displayName", [], "any", false, false, false, 167), "html", null, true);
                echo "</h2>
                          <div class=\"text-ellipsis small-text module-version\">";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 168), "version", [], "any", false, false, false, 168), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 168), "author", [], "any", false, false, false, 168), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"small no-padding\">
                          ";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 171), "description", [], "any", false, false, false, 171), "html", null, true);
                echo "
                        </div>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                  </div>
                  <div class=\"col-lg-5\">
                    <h2>";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                    <select class=\"modules-list-select\" data-toggle=\"select2\">
                      ";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 179, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 180
                echo "                        <option value=\"module-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 180), "displayName", [], "any", false, false, false, 180), "html", null, true);
                echo "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "                    </select>
                  </div>
                </div>

                <div class=\"module-render-container all-modules\">
                  <div>
                    <h2>";
            // line 188
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
                    <p>";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("These modules are relative to the product page of your store.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "<br />
                    ";
            // line 190
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage all your modules go to the [1]Installed module page[/1]", [], "Admin.Catalog.Feature"), ["[1]" => (("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"]);
            echo "</p>
                  </div>
                  <div class=\"row\">
                    ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 193, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 194
                echo "                      <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"module-item-wrapper-grid\">
                          <div class=\"module-item-heading-grid\">
                            <img class=\"module-logo-thumb-grid\" src=\"";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 197), "img", [], "any", false, false, false, 197), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 197), "displayName", [], "any", false, false, false, 197), "html", null, true);
                echo "\">
                            <h3 class=\"text-ellipsis module-name-grid\">
                              ";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 199), "displayName", [], "any", false, false, false, 199), "html", null, true);
                echo "
                            </h3>
                            <div class=\"text-ellipsis small-text module-version-author-grid\">
                              ";
                // line 202
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 202), "version", [], "any", false, false, false, 202), "html", null, true);
                echo " by ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 202), "author", [], "any", false, false, false, 202), "html", null, true);
                echo "
                            </div>
                          </div>
                          <div class=\"module-quick-description-grid small no-padding\">
                            ";
                // line 206
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 206), "description", [], "any", false, false, false, 206), "html", null, true);
                echo "
                          </div>
                          <div class=\"module-container\">
                            <div class=\"module-quick-action-grid clearfix\">
                              <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 210), "html", null, true);
                echo "\">
                                ";
                // line 211
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
                echo "
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                  </div>
                </div>

                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hooks"]) || array_key_exists("hooks", $context) ? $context["hooks"] : (function () { throw new RuntimeError('Variable "hooks" does not exist.', 221, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 222
                echo "                  <div id=\"module_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 222), "html", null, true);
                echo "\" class=\"module-render-container module-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 222), "name", [], "any", false, false, false, 222), "html", null, true);
                echo "\" style=\"display: none;\">
                    <div>";
                // line 223
                echo twig_get_attribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 223);
                echo "</div>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            echo "
              </div>
            </div>
          ";
        }
        // line 230
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 274
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 275
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/catalog_product.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-manufacturer.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-related.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-category-tags.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/default-category.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/product-combinations.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/modal-confirmation.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_page.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/form.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>

  <script>
      \$(function() {
        var editable = '";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 293, $this->source); })()), "html", null, true);
        echo "';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  768 => 293,  761 => 289,  757 => 288,  753 => 287,  749 => 286,  745 => 285,  741 => 284,  737 => 283,  733 => 282,  729 => 281,  725 => 280,  721 => 279,  717 => 278,  713 => 277,  707 => 275,  697 => 274,  687 => 230,  681 => 226,  672 => 223,  665 => 222,  661 => 221,  656 => 218,  643 => 211,  639 => 210,  632 => 206,  623 => 202,  617 => 199,  610 => 197,  605 => 194,  601 => 193,  595 => 190,  591 => 189,  587 => 188,  579 => 182,  568 => 180,  564 => 179,  559 => 177,  555 => 175,  545 => 171,  537 => 168,  533 => 167,  527 => 166,  521 => 164,  517 => 163,  511 => 159,  508 => 158,  498 => 157,  487 => 153,  485 => 152,  484 => 151,  482 => 150,  472 => 149,  461 => 145,  459 => 144,  458 => 143,  456 => 142,  446 => 141,  435 => 137,  433 => 136,  432 => 135,  431 => 134,  429 => 133,  419 => 132,  405 => 125,  403 => 124,  402 => 123,  401 => 122,  400 => 121,  399 => 120,  398 => 119,  393 => 116,  383 => 115,  372 => 111,  370 => 109,  369 => 108,  368 => 107,  367 => 106,  366 => 105,  365 => 104,  364 => 103,  363 => 102,  362 => 101,  361 => 100,  360 => 99,  359 => 98,  358 => 97,  357 => 96,  356 => 95,  355 => 94,  353 => 93,  350 => 92,  340 => 91,  329 => 87,  327 => 85,  326 => 84,  325 => 83,  324 => 82,  323 => 81,  322 => 80,  321 => 79,  320 => 78,  319 => 77,  318 => 76,  317 => 75,  316 => 74,  315 => 73,  314 => 72,  313 => 71,  311 => 70,  308 => 69,  298 => 68,  285 => 63,  275 => 62,  264 => 51,  262 => 49,  261 => 48,  260 => 47,  259 => 46,  258 => 45,  257 => 44,  256 => 43,  254 => 42,  244 => 41,  233 => 271,  231 => 250,  226 => 247,  222 => 246,  219 => 245,  217 => 244,  216 => 243,  215 => 242,  214 => 241,  213 => 240,  212 => 239,  210 => 238,  204 => 234,  200 => 233,  196 => 231,  193 => 157,  190 => 155,  187 => 149,  184 => 147,  181 => 141,  178 => 139,  175 => 132,  172 => 130,  169 => 115,  166 => 113,  163 => 91,  160 => 89,  157 => 68,  153 => 65,  150 => 62,  142 => 56,  137 => 53,  134 => 41,  132 => 40,  128 => 39,  121 => 35,  118 => 34,  115 => 33,  105 => 32,  93 => 29,  88 => 28,  78 => 27,  67 => 25,  65 => 335,  64 => 333,  63 => 332,  62 => 316,  60 => 314,  59 => 312,  46 => 25,);
    }

    public function getSourceContext()
    {
        return new Source(" {#**
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block content %}
  {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}
  <div class=\"header-toolbar d-print-none\">
    {{ multistoreHeader() }}
  </div>
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    {% block product_header %}
      {{ include('@Product/ProductPage/Blocks/header.html.twig', {
        'formName': form.step1.name,
        'formType': form.step1.type_product,
        'is_multishop_context': is_multishop_context,
        'languages': languages,
        'help_link': help_link,
        'stats_link': stats_link,
        'isCreationMode': isCreationMode,
        })
      }}
    {% endblock %}

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      {# FORM TABS CONTAINER #}
      {% block product_tabs_container %}
        {{ include('@Product/ProductPage/Blocks/tabs.html.twig', { 'hooks': hooks }) }}
      {% endblock %}
      <div id=\"form_content\" class=\"tab-content\">

        {# PANEL ESSENTIALS #}
        {% block product_panel_essentials %}
          {% set formQuantityShortcut = form.step1.qty_0_shortcut is defined ? form.step1.qty_0_shortcut : null  %}
          {{ include('@Product/ProductPage/Panels/essentials.html.twig', {
              'formPackItems': form.step1.inputPackItems,
              'productId': id_product,
              'images': form.step1.vars.value.images,
              'formShortDescription': form.step1.description_short,
              'formDescription': form.step1.description,
              'formFeatures': form.step1.features,
              'formManufacturer': form.step1.id_manufacturer,
              'formRelatedProducts': form.step1.related_products,
              'is_combination_active': is_combination_active,
              'has_combinations': has_combinations,
              'formReference': form.step6.reference,
              'formQuantityShortcut': formQuantityShortcut,
              'formPriceShortcut': form.step1.price_shortcut,
              'formPriceShortcutTTC': form.step1.price_ttc_shortcut,
              'formCategories': form.step1,
            })
          }}
        {% endblock %}

        {# PANEL COMBINATIONS #}
        {% block product_panel_combinations %}
          {% set formStockQuantity = form.step3.qty_0 is defined ? form.step3.qty_0 : null  %}
          {{ include('@Product/ProductPage/Panels/combinations.html.twig', {
              'formDependsOnStocks': form.step3.depends_on_stock,
              'productId': id_product,
              'formStockQuantity': formStockQuantity,
              'formStockMinimalQuantity': form.step3.minimal_quantity,
              'formLowStockThreshold': form.step3.low_stock_threshold,
              'formLocation': form.step3.location,
              'formLowStockAlert': form.step3.low_stock_alert,
              'formVirtualProduct': form.step3.virtual_product,
              'asm_globally_activated': asm_globally_activated,
              'formType': form.step1.type_product,
              'formAdvancedStockManagement': form.step3.advanced_stock_management,
              'formPackStockType': form.step3.pack_stock_type,
              'formStep3': form.step3,
              'formCombinations': formCombinations,
              'has_combinations': has_combinations,
              'max_upload_size': max_upload_size
            })
          }}
        {% endblock %}

        {# PANEL SHIPPING #}
        {% block product_panel_shipping %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    {{ include('@Product/ProductPage/Forms/form_shipping.html.twig', {
                      'form' : form.step4,
                      'asm_globally_activated': asm_globally_activated,
                      'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                      'isChecked': form.step3.advanced_stock_management.vars.checked,
                      'warehouses': warehouses
                    }) }}
                  </div>
                </div>
          </div>
        {% endblock %}

        {# PANEL PRICING #}
        {% block product_panel_pricing %}
          {{ include('@Product/ProductPage/Panels/pricing.html.twig', {
            'pricingForm': form.step2,
            'is_multishop_context': is_multishop_context,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL SEO #}
        {% block product_panel_seo %}
          {{ include('@Product/ProductPage/Panels/seo.html.twig', {
            'seoForm': form.step5,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL OPTIONS #}
        {% block product_panel_options %}
          {{ include('@Product/ProductPage/Panels/options.html.twig', {
            'optionsForm': form.step6,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL HOOKED MODULES #}
        {% block product_panel_modules %}
          {% if hooksarraycontent(hooks) is not empty %}
            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"container-fluid\">
                <div class=\"row module-selection\" style=\"display: none;\">
                  <div class=\"col-lg-7\">
                    {% for module in hooks %}
                      <div class=\"module-render-container module-{{ module.attributes.name }}\">
                        <div>
                          <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                          <h2 class=\"text-ellipsis module-name-grid\">{{ module.attributes.displayName }}</h2>
                          <div class=\"text-ellipsis small-text module-version\">{{ module.attributes.version }} by {{ module.attributes.author }}</div>
                        </div>
                        <div class=\"small no-padding\">
                          {{ module.attributes.description }}
                        </div>
                      </div>
                    {% endfor %}
                  </div>
                  <div class=\"col-lg-5\">
                    <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                    <select class=\"modules-list-select\" data-toggle=\"select2\">
                      {% for module in hooks %}
                        <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"module-render-container all-modules\">
                  <div>
                    <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                    <p>{{ 'These modules are relative to the product page of your store.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                    {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}</p>
                  </div>
                  <div class=\"row\">
                    {% for module in hooks %}
                      <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"module-item-wrapper-grid\">
                          <div class=\"module-item-heading-grid\">
                            <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                            <h3 class=\"text-ellipsis module-name-grid\">
                              {{ module.attributes.displayName }}
                            </h3>
                            <div class=\"text-ellipsis small-text module-version-author-grid\">
                              {{ module.attributes.version }} by {{ module.attributes.author }}
                            </div>
                          </div>
                          <div class=\"module-quick-description-grid small no-padding\">
                            {{ module.attributes.description }}
                          </div>
                          <div class=\"module-container\">
                            <div class=\"module-quick-action-grid clearfix\">
                              <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                {{ 'Configure'|trans({}, 'Admin.Actions') }}
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    {% endfor %}
                  </div>
                </div>

                {% for module in hooks %}
                  <div id=\"module_{{ module.id }}\" class=\"module-render-container module-{{ module.attributes.name }}\" style=\"display: none;\">
                    <div>{{ module.content|raw }}</div>
                  </div>
                {% endfor %}

              </div>
            </div>
          {% endif %}
        {% endblock %}
      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    {{ include('@Product/ProductPage/Blocks/footer.html.twig', {
      'preview_link': preview_link,
      'preview_link_deactivate': preview_link_deactivate,
      'is_shop_context': is_shop_context,
      'editable': editable,
      'is_active': form.step1.vars.value.active,
      'productId': id_product
    }) }}
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-outline-secondary btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/catalog_product.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/product_page.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1] MB. The file you are trying to upload is [2] MB.\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF, PNG or WebP format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure you want to delete this item?\": \"Are you sure you want to delete this item?\"|trans({}, 'Admin.Notifications.Warning'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"Are you sure you want to delete the selected item(s)?\": \"Are you sure you want to delete the selected item(s)?\"|trans({}, 'Admin.Global'),
}|merge(js_translatable) %}
", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}


/* @PrestaShop/Admin/Product/ProductPage/product.html.twig */
class __TwigTemplate_cdfa10d3c9d640951e23f9b3da5fa1ac___1872195220 extends Template
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
        // line 250
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/ProductPage/product.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", 250);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 267
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 268
        echo "      <div class=\"modal-body\"></div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/ProductPage/product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1205 => 268,  1195 => 267,  1172 => 250,  768 => 293,  761 => 289,  757 => 288,  753 => 287,  749 => 286,  745 => 285,  741 => 284,  737 => 283,  733 => 282,  729 => 281,  725 => 280,  721 => 279,  717 => 278,  713 => 277,  707 => 275,  697 => 274,  687 => 230,  681 => 226,  672 => 223,  665 => 222,  661 => 221,  656 => 218,  643 => 211,  639 => 210,  632 => 206,  623 => 202,  617 => 199,  610 => 197,  605 => 194,  601 => 193,  595 => 190,  591 => 189,  587 => 188,  579 => 182,  568 => 180,  564 => 179,  559 => 177,  555 => 175,  545 => 171,  537 => 168,  533 => 167,  527 => 166,  521 => 164,  517 => 163,  511 => 159,  508 => 158,  498 => 157,  487 => 153,  485 => 152,  484 => 151,  482 => 150,  472 => 149,  461 => 145,  459 => 144,  458 => 143,  456 => 142,  446 => 141,  435 => 137,  433 => 136,  432 => 135,  431 => 134,  429 => 133,  419 => 132,  405 => 125,  403 => 124,  402 => 123,  401 => 122,  400 => 121,  399 => 120,  398 => 119,  393 => 116,  383 => 115,  372 => 111,  370 => 109,  369 => 108,  368 => 107,  367 => 106,  366 => 105,  365 => 104,  364 => 103,  363 => 102,  362 => 101,  361 => 100,  360 => 99,  359 => 98,  358 => 97,  357 => 96,  356 => 95,  355 => 94,  353 => 93,  350 => 92,  340 => 91,  329 => 87,  327 => 85,  326 => 84,  325 => 83,  324 => 82,  323 => 81,  322 => 80,  321 => 79,  320 => 78,  319 => 77,  318 => 76,  317 => 75,  316 => 74,  315 => 73,  314 => 72,  313 => 71,  311 => 70,  308 => 69,  298 => 68,  285 => 63,  275 => 62,  264 => 51,  262 => 49,  261 => 48,  260 => 47,  259 => 46,  258 => 45,  257 => 44,  256 => 43,  254 => 42,  244 => 41,  233 => 271,  231 => 250,  226 => 247,  222 => 246,  219 => 245,  217 => 244,  216 => 243,  215 => 242,  214 => 241,  213 => 240,  212 => 239,  210 => 238,  204 => 234,  200 => 233,  196 => 231,  193 => 157,  190 => 155,  187 => 149,  184 => 147,  181 => 141,  178 => 139,  175 => 132,  172 => 130,  169 => 115,  166 => 113,  163 => 91,  160 => 89,  157 => 68,  153 => 65,  150 => 62,  142 => 56,  137 => 53,  134 => 41,  132 => 40,  128 => 39,  121 => 35,  118 => 34,  115 => 33,  105 => 32,  93 => 29,  88 => 28,  78 => 27,  67 => 25,  65 => 335,  64 => 333,  63 => 332,  62 => 316,  60 => 314,  59 => 312,  46 => 25,);
    }

    public function getSourceContext()
    {
        return new Source(" {#**
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block content %}
  {% set hooks = renderhooksarray('displayAdminProductsExtra', { 'id_product': id_product }) %}
  <div class=\"header-toolbar d-print-none\">
    {{ multistoreHeader() }}
  </div>
  <form name=\"form\" id=\"form\" method=\"post\" class=\"form-horizontal product-page row justify-content-md-center\" novalidate=\"novalidate\">

    {% if not editable %} <fieldset disabled id=\"field-disabled\"> {% endif %}
    {# PRODUCT HEADER #}
    {% block product_header %}
      {{ include('@Product/ProductPage/Blocks/header.html.twig', {
        'formName': form.step1.name,
        'formType': form.step1.type_product,
        'is_multishop_context': is_multishop_context,
        'languages': languages,
        'help_link': help_link,
        'stats_link': stats_link,
        'isCreationMode': isCreationMode,
        })
      }}
    {% endblock %}

    <div class=\"col-md-10\">
      <div id=\"form_bubbling_errors\">
        {{ form_errors(form) }}
      </div>
    </div>

    <div id=\"form-loading\" class=\"col-xxl-10\">
      {# FORM TABS CONTAINER #}
      {% block product_tabs_container %}
        {{ include('@Product/ProductPage/Blocks/tabs.html.twig', { 'hooks': hooks }) }}
      {% endblock %}
      <div id=\"form_content\" class=\"tab-content\">

        {# PANEL ESSENTIALS #}
        {% block product_panel_essentials %}
          {% set formQuantityShortcut = form.step1.qty_0_shortcut is defined ? form.step1.qty_0_shortcut : null  %}
          {{ include('@Product/ProductPage/Panels/essentials.html.twig', {
              'formPackItems': form.step1.inputPackItems,
              'productId': id_product,
              'images': form.step1.vars.value.images,
              'formShortDescription': form.step1.description_short,
              'formDescription': form.step1.description,
              'formFeatures': form.step1.features,
              'formManufacturer': form.step1.id_manufacturer,
              'formRelatedProducts': form.step1.related_products,
              'is_combination_active': is_combination_active,
              'has_combinations': has_combinations,
              'formReference': form.step6.reference,
              'formQuantityShortcut': formQuantityShortcut,
              'formPriceShortcut': form.step1.price_shortcut,
              'formPriceShortcutTTC': form.step1.price_ttc_shortcut,
              'formCategories': form.step1,
            })
          }}
        {% endblock %}

        {# PANEL COMBINATIONS #}
        {% block product_panel_combinations %}
          {% set formStockQuantity = form.step3.qty_0 is defined ? form.step3.qty_0 : null  %}
          {{ include('@Product/ProductPage/Panels/combinations.html.twig', {
              'formDependsOnStocks': form.step3.depends_on_stock,
              'productId': id_product,
              'formStockQuantity': formStockQuantity,
              'formStockMinimalQuantity': form.step3.minimal_quantity,
              'formLowStockThreshold': form.step3.low_stock_threshold,
              'formLocation': form.step3.location,
              'formLowStockAlert': form.step3.low_stock_alert,
              'formVirtualProduct': form.step3.virtual_product,
              'asm_globally_activated': asm_globally_activated,
              'formType': form.step1.type_product,
              'formAdvancedStockManagement': form.step3.advanced_stock_management,
              'formPackStockType': form.step3.pack_stock_type,
              'formStep3': form.step3,
              'formCombinations': formCombinations,
              'has_combinations': has_combinations,
              'max_upload_size': max_upload_size
            })
          }}
        {% endblock %}

        {# PANEL SHIPPING #}
        {% block product_panel_shipping %}
          <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step4\">
                <div class=\"container-fluid\">
                  <div class=\"row\">
                    {{ include('@Product/ProductPage/Forms/form_shipping.html.twig', {
                      'form' : form.step4,
                      'asm_globally_activated': asm_globally_activated,
                      'isNotVirtual': form.step1.type_product.vars.value != \"2\",
                      'isChecked': form.step3.advanced_stock_management.vars.checked,
                      'warehouses': warehouses
                    }) }}
                  </div>
                </div>
          </div>
        {% endblock %}

        {# PANEL PRICING #}
        {% block product_panel_pricing %}
          {{ include('@Product/ProductPage/Panels/pricing.html.twig', {
            'pricingForm': form.step2,
            'is_multishop_context': is_multishop_context,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL SEO #}
        {% block product_panel_seo %}
          {{ include('@Product/ProductPage/Panels/seo.html.twig', {
            'seoForm': form.step5,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL OPTIONS #}
        {% block product_panel_options %}
          {{ include('@Product/ProductPage/Panels/options.html.twig', {
            'optionsForm': form.step6,
            'productId': id_product
          }) }}
        {% endblock %}

        {# PANEL HOOKED MODULES #}
        {% block product_panel_modules %}
          {% if hooksarraycontent(hooks) is not empty %}
            <div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"hooks\">
              <div class=\"container-fluid\">
                <div class=\"row module-selection\" style=\"display: none;\">
                  <div class=\"col-lg-7\">
                    {% for module in hooks %}
                      <div class=\"module-render-container module-{{ module.attributes.name }}\">
                        <div>
                          <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                          <h2 class=\"text-ellipsis module-name-grid\">{{ module.attributes.displayName }}</h2>
                          <div class=\"text-ellipsis small-text module-version\">{{ module.attributes.version }} by {{ module.attributes.author }}</div>
                        </div>
                        <div class=\"small no-padding\">
                          {{ module.attributes.description }}
                        </div>
                      </div>
                    {% endfor %}
                  </div>
                  <div class=\"col-lg-5\">
                    <h2>{{ 'Module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                    <select class=\"modules-list-select\" data-toggle=\"select2\">
                      {% for module in hooks %}
                        <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
                      {% endfor %}
                    </select>
                  </div>
                </div>

                <div class=\"module-render-container all-modules\">
                  <div>
                    <h2>{{ 'Choose a module to configure'|trans({}, 'Admin.Catalog.Feature') }}</h2>
                    <p>{{ 'These modules are relative to the product page of your store.'|trans({}, 'Admin.Catalog.Feature') }}<br />
                    {{ 'To manage all your modules go to the [1]Installed module page[/1]'|trans({}, 'Admin.Catalog.Feature')|replace({'[1]': '<a href=\"' ~ path(\"admin_module_manage\") ~ '\">', '[/1]': '</a>'})|raw }}</p>
                  </div>
                  <div class=\"row\">
                    {% for module in hooks %}
                      <div class=\"col-lg-6 col-xl-4\">
                        <div class=\"module-item-wrapper-grid\">
                          <div class=\"module-item-heading-grid\">
                            <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
                            <h3 class=\"text-ellipsis module-name-grid\">
                              {{ module.attributes.displayName }}
                            </h3>
                            <div class=\"text-ellipsis small-text module-version-author-grid\">
                              {{ module.attributes.version }} by {{ module.attributes.author }}
                            </div>
                          </div>
                          <div class=\"module-quick-description-grid small no-padding\">
                            {{ module.attributes.description }}
                          </div>
                          <div class=\"module-container\">
                            <div class=\"module-quick-action-grid clearfix\">
                              <button class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                                {{ 'Configure'|trans({}, 'Admin.Actions') }}
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    {% endfor %}
                  </div>
                </div>

                {% for module in hooks %}
                  <div id=\"module_{{ module.id }}\" class=\"module-render-container module-{{ module.attributes.name }}\" style=\"display: none;\">
                    <div>{{ module.content|raw }}</div>
                  </div>
                {% endfor %}

              </div>
            </div>
          {% endif %}
        {% endblock %}
      </div>

      {{ form_widget(form.id_product) }}
      {{ form_widget(form._token) }}

    </div>
    {# FOOTER #}
    {{ include('@Product/ProductPage/Blocks/footer.html.twig', {
      'preview_link': preview_link,
      'preview_link_deactivate': preview_link_deactivate,
      'is_shop_context': is_shop_context,
      'editable': editable,
      'is_active': form.step1.vars.value.active,
      'productId': id_product
    }) }}
    {% if not editable %} </fieldset> {% endif %}
  </form>


  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': 'confirmation_modal',
    'title': \"Warning\"|trans({}, 'Admin.Notifications.Warning'),
    'closable': false,
    'actions': [
      {
        'type': 'button',
        'label': \"No\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-outline-secondary btn-lg cancel'
      },
      {
        'type': 'button',
        'label': \"Yes\"|trans({}, 'Admin.Global'),
        'class': 'btn btn-primary btn-lg continue'
      }
    ],
  } %}
    {% block content %}
      <div class=\"modal-body\"></div>
    {% endblock %}
  {% endembed %}

{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset('themes/new-theme/public/catalog_product.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-manufacturer.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-related.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-category-tags.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/default-category.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/product-combinations.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/modal-confirmation.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/product_page.bundle.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/product/form.js') }}\"></script>
  <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
  <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>

  <script>
      \$(function() {
        var editable = '{{ editable }}';

        if (editable !== '1'){
          \$('#field-disabled').find(\"select\").each(function() {
            \$(this).removeClass('select2-hidden-accessible');
          });
          \$('#field-disabled').find(\"span.select2\").each(function() {
            \$(this).hide();
          });
          \$('#field-disabled').find(\"a.pstaggerClosingCross\").each(function() {
            \$(this).attr(\"disabled\", \"disabled\").on(\"click\", function() {
              return false;
            });
          });
        }
      });
  </script>
{% endblock %}

{% set js_translatable = {
\"Are you sure to disable variations ? they will all be deleted\": \"This will delete all the combinations. Do you wish to proceed?\"|trans({}, 'Admin.Catalog.Notification'),
}|merge(js_translatable) %}

{% set js_translatable = {
\"Form update success\": \"Settings updated.\"|trans({}, 'Admin.Notifications.Success'),
\"Form update errors\": \"Unable to update settings.\"|trans({}, 'Admin.Notifications.Error'),
\"Delete\": \"Delete\"|trans({}, 'Admin.Actions'),
\"ToLargeFile\": \"The file is too large. Maximum size allowed is: [1] MB. The file you are trying to upload is [2] MB.\"|trans({}, 'Admin.Notifications.Error')|replace({ '[1]': '{{maxFilesize}}', '[2]': '{{filesize}}' }),
\"Drop images here\": \"Drop images here\"|trans({}, 'Admin.Catalog.Feature'),
\"or select files\": \"or select files\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations\": \"Recommended size 800 x 800px for default theme.\"|trans({}, 'Admin.Catalog.Feature'),
\"files recommandations2\": \"JPG, GIF, PNG or WebP format.\"|trans({}, 'Admin.Catalog.Feature'),
\"Cover\": \"Cover\"|trans({}, 'Admin.Catalog.Feature'),
\"Are you sure you want to delete this item?\": \"Are you sure you want to delete this item?\"|trans({}, 'Admin.Notifications.Warning'),
\"Quantities\": \"Quantities\"|trans({}, 'Admin.Catalog.Feature'),
\"Combinations\": \"Combinations\"|trans({}, 'Admin.Catalog.Feature'),
\"Virtual product\": \"Virtual product\"|trans({}, 'Admin.Catalog.Feature'),
\"tax incl.\": \"tax incl.\"|trans({}, 'Admin.Catalog.Feature'),
\"tax excl.\": \"tax excl.\"|trans({}, 'Admin.Catalog.Feature'),
\"You can't create pack product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A pack of products can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"You can't create virtual product with variations. Are you sure to disable variations ? they will all be deleted.\": \"A virtual product can't have combinations.\"|trans({}, \"Admin.Catalog.Notification\") ~ ' ' ~ js_translatable['Are you sure to disable variations ? they will all be deleted'],
\"Are you sure you want to delete the selected item(s)?\": \"Are you sure you want to delete the selected item(s)?\"|trans({}, 'Admin.Global'),
}|merge(js_translatable) %}
", "@PrestaShop/Admin/Product/ProductPage/product.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/product.html.twig");
    }
}
