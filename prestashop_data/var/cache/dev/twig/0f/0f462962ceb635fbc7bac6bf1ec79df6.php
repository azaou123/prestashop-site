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

/* @PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig */
class __TwigTemplate_406f3800b3f2966f967d60a9afe5da7e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig"));

        // line 25
        echo "<figure class=\"figure\">
  <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logoImage"]) || array_key_exists("logoImage", $context) ? $context["logoImage"] : (function () { throw new RuntimeError('Variable "logoImage" does not exist.', 26, $this->source); })()), "path", [], "any", false, false, false, 26), "html", null, true);
        echo "\" class=\"figure-img img-fluid img-thumbnail\">
  <figcaption class=\"figure-caption\">
    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logoImage"]) || array_key_exists("logoImage", $context) ? $context["logoImage"] : (function () { throw new RuntimeError('Variable "logoImage" does not exist.', 28, $this->source); })()), "size", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
    <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
            data-form-submit-url=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_manufacturers_delete_logo_image", ["manufacturerId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "get", [0 => "manufacturerId"], "method", false, false, false, 30)]), "html", null, true);
        echo "\"
            data-form-csrf-token=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-logo-thumbnail"), "html", null, true);
        echo "\"
    >
      <i class=\"material-icons\">
        delete_forever
      </i>
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </figcaption>
</figure>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 36,  62 => 31,  58 => 30,  51 => 28,  46 => 26,  43 => 25,);
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
<figure class=\"figure\">
  <img src=\"{{ logoImage.path }}\" class=\"figure-img img-fluid img-thumbnail\">
  <figcaption class=\"figure-caption\">
    <p>{{ 'File size'|trans({}, 'Admin.Advparameters.Feature') }} {{ logoImage.size }}</p>
    <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
            data-form-submit-url=\"{{ path('admin_manufacturers_delete_logo_image', {'manufacturerId': app.request.get('manufacturerId')}) }}\"
            data-form-csrf-token=\"{{ csrf_token('delete-logo-thumbnail') }}\"
    >
      <i class=\"material-icons\">
        delete_forever
      </i>
      {{ 'Delete'|trans({}, 'Admin.Actions') }}
    </button>
  </figcaption>
</figure>
", "@PrestaShop/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Manufacturer/logo_image.html.twig");
    }
}
