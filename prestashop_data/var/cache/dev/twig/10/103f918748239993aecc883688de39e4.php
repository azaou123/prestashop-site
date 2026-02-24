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

/* @PrestaShop/Admin/Common/pagination_quicknav.html.twig */
class __TwigTemplate_25505493f0a3ca00cb5f53a60bea2a4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination_quicknav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination_quicknav.html.twig"));

        // line 25
        if (((isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 25, $this->source); })()) || (isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 25, $this->source); })()))) {
            // line 26
            echo "<nav>
    <ul class=\"pagination\">
        <li class=\"page-item ";
            // line 28
            if ((isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 28, $this->source); })())) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 29
            if ((isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 29, $this->source); })())) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 29, $this->source); })()), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">1</a>
        </li>
        <li class=\"page-item ";
            // line 31
            if ((isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 31, $this->source); })())) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" data-role=\"previous-page-link\" ";
            // line 32
            if ((isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 32, $this->source); })())) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 32, $this->source); })()), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" style=\"width: 4em;\"
                   value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" psurl=\"";
            echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) || array_key_exists("jump_page_url", $context) ? $context["jump_page_url"] : (function () { throw new RuntimeError('Variable "jump_page_url" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" psmax=\"";
            echo twig_escape_filter($this->env, (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" pslimit=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\" />
        </li>
        <li class=\"page-item ";
            // line 38
            if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 38, $this->source); })()) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" data-role=\"next-page-link\" id=\"pagination_next_url\" ";
            // line 39
            if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 39, $this->source); })()) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">&gt;</a>
        </li>
        <li class=\"page-item ";
            // line 41
            if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 41, $this->source); })()) != false))) {
            } else {
                echo "disabled";
            }
            echo "\">
            <a class=\"page-link\" ";
            // line 42
            if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 42, $this->source); })()) != false))) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "\"";
            } else {
                echo "nohref";
            }
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "</a>
        </li>
    </ul>
</nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/pagination_quicknav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  116 => 41,  105 => 39,  98 => 38,  87 => 36,  74 => 32,  67 => 31,  56 => 29,  49 => 28,  45 => 26,  43 => 25,);
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
{% if previous_url or next_url %}
<nav>
    <ul class=\"pagination\">
        <li class=\"page-item {% if first_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if first_url %}href=\"{{ first_url }}\"{% else %}nohref{% endif %}>1</a>
        </li>
        <li class=\"page-item {% if previous_url %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" data-role=\"previous-page-link\" {% if previous_url %}href=\"{{ previous_url }}\"{% else %}nohref{% endif %}>&lt;</a>
        </li>
        <li class=\"page-item active\" style=\"float: left;\">
            <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" style=\"width: 4em;\"
                   value=\"{{ current_page }}\" psurl=\"{{ jump_page_url }}\" psmax=\"{{ page_count }}\" pslimit=\"{{ limit }}\" />
        </li>
        <li class=\"page-item {% if next_url is defined and next_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" data-role=\"next-page-link\" id=\"pagination_next_url\" {% if next_url is defined and next_url != false %}href=\"{{ next_url }}\"{% else %}nohref{% endif %}>&gt;</a>
        </li>
        <li class=\"page-item {% if last_url is defined and last_url != false %}{% else %}disabled{% endif %}\">
            <a class=\"page-link\" {% if last_url is defined and last_url != false %}href=\"{{ last_url }}\"{% else %}nohref{% endif %}>{{ page_count }}</a>
        </li>
    </ul>
</nav>
{% endif %}
", "@PrestaShop/Admin/Common/pagination_quicknav.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/pagination_quicknav.html.twig");
    }
}
