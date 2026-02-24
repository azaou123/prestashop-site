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

/* @PrestaShop/Admin/Common/unavailable-feature.html.twig */
class __TwigTemplate_3899d42604dc5aa80624e9aed8031f41 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/unavailable-feature.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/unavailable-feature.html.twig"));

        // line 25
        echo "
 <div class=\"unavailable-feature\">
  <h2>
    ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["featureTitle"]) || array_key_exists("featureTitle", $context) ? $context["featureTitle"] : (function () { throw new RuntimeError('Variable "featureTitle" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "
    ";
        // line 29
        if (array_key_exists("helpbox", $context)) {
            // line 30
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/HelpBox/helpbox.html.twig", ["content" =>             // line 31
(isset($context["helpbox"]) || array_key_exists("helpbox", $context) ? $context["helpbox"] : (function () { throw new RuntimeError('Variable "helpbox" does not exist.', 31, $this->source); })())]);
            // line 32
            echo "
    ";
        }
        // line 34
        echo "  </h2>

  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
 </div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/unavailable-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 38,  62 => 34,  58 => 32,  56 => 31,  54 => 30,  52 => 29,  48 => 28,  43 => 25,);
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

 <div class=\"unavailable-feature\">
  <h2>
    {{ featureTitle }}
    {% if helpbox is defined %}
      {{ include('@PrestaShop/Admin/Common/HelpBox/helpbox.html.twig', {
        'content': helpbox,
      }) }}
    {% endif %}
  </h2>

  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      {{ 'Not available yet.'|trans({}, 'Admin.Catalog.Feature') }}
    </p>
  </div>
 </div>
", "@PrestaShop/Admin/Common/unavailable-feature.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/unavailable-feature.html.twig");
    }
}
