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

/* @PrestaShop/Admin/Helpers/range_slider.html.twig */
class __TwigTemplate_2218bdfc98b9be4a795a6541713242fe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/range_slider.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/range_slider.html.twig"));

        // line 25
        echo "<script>
    \$(document).ready(function() {
        var sliderInput = \$('#";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
            value = value.replace('BETWEEN ', '');
            value = value.replace(' AND ', ',');
            value = value.replace('<', '";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 34, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ",');
            value = value.replace('>', '";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 35, $this->source); })()), "10")) : ("10")), "html", null, true);
        echo ",');
            value = value.split(',');
            value[0] = parseInt(value[0]);
            value[1] = parseInt(value[1]);
        } else {
            value = [";
        // line 40
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 40, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 40, $this->source); })()), "10")) : ("10")), "html", null, true);
        echo "];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        sliderInput.bootstrapSlider({
            formatter: function(values) {
                if (typeof values[0] != 'undefined') {
                    var slider = \$('#";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "');
                    if (values[0] == ";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 50, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo " && values[1] == ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 50, $this->source); })()), "10")) : ("10")), "html", null, true);
        echo ") {
                        slider.attr('sql', '');
                        return \"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not filtered", [], "Admin.Global"), "html", null, true);
        echo "\";
                    }
                    if (values[0] == values[1]) {
                        slider.attr('sql', ''); //'='+values[0]);
                        return \"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Equals", [], "Admin.Global"), "html", null, true);
        echo " \" + values[0];
                    }
                    if (values[0] == ";
        // line 58
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 58, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ") {
                        slider.attr('sql', '<'+values[1]);
                        return \"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Below", [], "Admin.Global"), "html", null, true);
        echo " \" + values[1];
                    }
                    if (values[1] == ";
        // line 62
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 62, $this->source); })()), "10")) : ("10")), "html", null, true);
        echo ") {
                        slider.attr('sql', '>'+values[0]);
                        return \"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Above", [], "Admin.Global"), "html", null, true);
        echo " \" + values[0];
                    }
                    slider.attr('sql', 'BETWEEN '+values[0]+' AND '+values[1]);
                    return \"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Inside range", [], "Admin.Global"), "html", null, true);
        echo " [\" + values[0] + \"~\" + values[1] + \"]\";
                }
            },
            min: ";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 70, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ",
            max: ";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 71, $this->source); })()), "10")) : ("10")), "html", null, true);
        echo ",
            step: ";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("step", $context)) ? (_twig_default_filter((isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 72, $this->source); })()), "1")) : ("1")), "html", null, true);
        echo ",
            //tooltip: 'always',
            scale: '";
        // line 74
        echo twig_escape_filter($this->env, ((array_key_exists("scale", $context)) ? (_twig_default_filter((isset($context["scale"]) || array_key_exists("scale", $context) ? $context["scale"] : (function () { throw new RuntimeError('Variable "scale" does not exist.', 74, $this->source); })()), "linear")) : ("linear")), "html", null, true);
        echo "', // or 'logarithmic'
            value: value,
            id: '";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "Slider'
        });
        ";
        // line 78
        if (array_key_exists("on_change_func_name", $context)) {
            // line 79
            echo "            sliderInput.on('slideStop', function() {
                ";
            // line 80
            echo (isset($context["on_change_func_name"]) || array_key_exists("on_change_func_name", $context) ? $context["on_change_func_name"] : (function () { throw new RuntimeError('Variable "on_change_func_name" does not exist.', 80, $this->source); })());
            echo "
            });
        ";
        }
        // line 83
        echo "    });
</script>
<style>
    <!-- /* To remove once integrated in sass */
    #";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "Slider .slider-selection {
        background: #aaaaaa;
    }
    #";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "Slider .tooltip-inner {
        padding: 0.4em;
    }
    -->
</style>

<input type=\"text\" id=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\" value=\"\" sql=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Helpers/range_slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 96,  179 => 90,  173 => 87,  167 => 83,  161 => 80,  158 => 79,  156 => 78,  151 => 76,  146 => 74,  141 => 72,  137 => 71,  133 => 70,  127 => 67,  121 => 64,  116 => 62,  111 => 60,  106 => 58,  101 => 56,  94 => 52,  87 => 50,  83 => 49,  69 => 40,  61 => 35,  57 => 34,  47 => 27,  43 => 25,);
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
<script>
    \$(document).ready(function() {
        var sliderInput = \$('#{{ input_name }}');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
            value = value.replace('BETWEEN ', '');
            value = value.replace(' AND ', ',');
            value = value.replace('<', '{{ min|default('0') }},');
            value = value.replace('>', '{{ max|default('10') }},');
            value = value.split(',');
            value[0] = parseInt(value[0]);
            value[1] = parseInt(value[1]);
        } else {
            value = [{{ min|default('0') }},{{ max|default('10') }}];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        sliderInput.bootstrapSlider({
            formatter: function(values) {
                if (typeof values[0] != 'undefined') {
                    var slider = \$('#{{ input_name }}');
                    if (values[0] == {{ min|default('0') }} && values[1] == {{ max|default('10') }}) {
                        slider.attr('sql', '');
                        return \"{{ 'Not filtered'|trans({}, 'Admin.Global') }}\";
                    }
                    if (values[0] == values[1]) {
                        slider.attr('sql', ''); //'='+values[0]);
                        return \"{{ 'Equals'|trans({}, 'Admin.Global') }} \" + values[0];
                    }
                    if (values[0] == {{ min|default('0') }}) {
                        slider.attr('sql', '<'+values[1]);
                        return \"{{ 'Below'|trans({}, 'Admin.Global') }} \" + values[1];
                    }
                    if (values[1] == {{ max|default('10') }}) {
                        slider.attr('sql', '>'+values[0]);
                        return \"{{ 'Above'|trans({}, 'Admin.Global') }} \" + values[0];
                    }
                    slider.attr('sql', 'BETWEEN '+values[0]+' AND '+values[1]);
                    return \"{{ 'Inside range'|trans({}, 'Admin.Global') }} [\" + values[0] + \"~\" + values[1] + \"]\";
                }
            },
            min: {{ min|default('0') }},
            max: {{ max|default('10') }},
            step: {{ step|default('1') }},
            //tooltip: 'always',
            scale: '{{ scale|default('linear') }}', // or 'logarithmic'
            value: value,
            id: '{{ input_name }}Slider'
        });
        {% if on_change_func_name is defined %}
            sliderInput.on('slideStop', function() {
                {{ on_change_func_name|raw }}
            });
        {% endif %}
    });
</script>
<style>
    <!-- /* To remove once integrated in sass */
    #{{ input_name }}Slider .slider-selection {
        background: #aaaaaa;
    }
    #{{ input_name }}Slider .tooltip-inner {
        padding: 0.4em;
    }
    -->
</style>

<input type=\"text\" id=\"{{ input_name }}\" name=\"{{ input_name }}\" value=\"\" sql=\"{{ value }}\" />
", "@PrestaShop/Admin/Helpers/range_slider.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Helpers/range_slider.html.twig");
    }
}
