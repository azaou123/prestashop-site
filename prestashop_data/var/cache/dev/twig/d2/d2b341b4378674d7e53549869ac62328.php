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

/* @PrestaShop/Admin/Module/Includes/grid_loader.html.twig */
class __TwigTemplate_37bc4da09db5f4c9fa27a3eb1edc702b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/grid_loader.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/grid_loader.html.twig"));

        // line 26
        echo "<div class=\"module-placeholders-wrapper row\">
  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "    <div class=\"timeline-item col-lg-6 col-xl-3\">
      <div class=\"timeline-item-wrapper\">
        <div class=\"animated-background\">
          <div class=\"background-masker header-top\"></div>
          <div class=\"background-masker header-left\"></div>
          <div class=\"background-masker header-right\"></div>
          <div class=\"background-masker header-bottom\"></div>
          <div class=\"background-masker subheader-left\"></div>
          <div class=\"background-masker subheader-right\"></div>
          <div class=\"background-masker subheader-bottom\"></div>
          <div class=\"background-masker content-top\"></div>
          <div class=\"background-masker content-first-end\"></div>
          <div class=\"background-masker content-second-line\"></div>
          <div class=\"background-masker content-second-end\"></div>
          <div class=\"background-masker content-third-line\"></div>
          <div class=\"background-masker content-third-end\"></div>
        </div>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>

<div class=\"module-placeholders-failure\">
  <div class=\"module-placeholders-failure-wrapper\">
    <div class=\"module-placeholders-failure-msg\"></div>
    <button id=\"module-placeholders-failure-retry\" type=\"button\" class=\"btn btn-primary\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try again", [], "Admin.Actions"), "html", null, true);
        echo "</button>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/grid_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 53,  75 => 48,  50 => 28,  46 => 27,  43 => 26,);
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
{#Simulate a bunch of module card #}
<div class=\"module-placeholders-wrapper row\">
  {% for i in 0..8 %}
    <div class=\"timeline-item col-lg-6 col-xl-3\">
      <div class=\"timeline-item-wrapper\">
        <div class=\"animated-background\">
          <div class=\"background-masker header-top\"></div>
          <div class=\"background-masker header-left\"></div>
          <div class=\"background-masker header-right\"></div>
          <div class=\"background-masker header-bottom\"></div>
          <div class=\"background-masker subheader-left\"></div>
          <div class=\"background-masker subheader-right\"></div>
          <div class=\"background-masker subheader-bottom\"></div>
          <div class=\"background-masker content-top\"></div>
          <div class=\"background-masker content-first-end\"></div>
          <div class=\"background-masker content-second-line\"></div>
          <div class=\"background-masker content-second-end\"></div>
          <div class=\"background-masker content-third-line\"></div>
          <div class=\"background-masker content-third-end\"></div>
        </div>
      </div>
    </div>
  {% endfor %}
</div>

<div class=\"module-placeholders-failure\">
  <div class=\"module-placeholders-failure-wrapper\">
    <div class=\"module-placeholders-failure-msg\"></div>
    <button id=\"module-placeholders-failure-retry\" type=\"button\" class=\"btn btn-primary\">{{ 'Try again'|trans({}, 'Admin.Actions') }}</button>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/grid_loader.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_loader.html.twig");
    }
}
