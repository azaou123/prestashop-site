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

/* @PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig */
class __TwigTemplate_ed9c29f6292e451ab54e48074f485949 extends Template
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
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configuration information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You must provide this information when reporting an issue on GitHub or on the forum.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 45
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 45, $this->source); })()), "uname", [], "any", false, false, false, 45))) {
            // line 46
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server information:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 47, $this->source); })()), "uname", [], "any", false, false, false, 47), "html", null, true);
            echo "
          </p>
        ";
        }
        // line 50
        echo "        <p class=\"mb-0\">
          <strong>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Server software version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 51, $this->source); })()), "server", [], "any", false, false, false, 51), "version", [], "any", false, false, false, 51), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PHP version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 54, $this->source); })()), "server", [], "any", false, false, false, 54), "php", [], "any", false, false, false, 54), "version", [], "any", false, false, false, 54), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Memory limit:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 57, $this->source); })()), "server", [], "any", false, false, false, 57), "php", [], "any", false, false, false, 57), "memoryLimit", [], "any", false, false, false, 57), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max execution time:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 60, $this->source); })()), "server", [], "any", false, false, false, 60), "php", [], "any", false, false, false, 60), "maxExecutionTime", [], "any", false, false, false, 60), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload Max File size:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 63, $this->source); })()), "server", [], "any", false, false, false, 63), "php", [], "any", false, false, false, 63), "maxFileSizeUpload", [], "any", false, false, false, 63), "html", null, true);
        echo "
        </p>
        ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 65, $this->source); })()), "instaWebInstalled", [], "any", false, false, false, 65)) {
            // line 66
            echo "          <p class=\"mb-0\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PageSpeed module for Apache installed (mod_instaweb)", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
        ";
        }
        // line 68
        echo "      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Database information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 77, $this->source); })()), "database", [], "any", false, false, false, 77), "version", [], "any", false, false, false, 77), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL server:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 80, $this->source); })()), "database", [], "any", false, false, false, 80), "server", [], "any", false, false, false, 80), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL name:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 83, $this->source); })()), "database", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL user:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 86, $this->source); })()), "database", [], "any", false, false, false, 86), "user", [], "any", false, false, false, 86), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tables prefix:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 89, $this->source); })()), "database", [], "any", false, false, false, 89), "prefix", [], "any", false, false, false, 89), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL engine:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 92, $this->source); })()), "database", [], "any", false, false, false, 92), "engine", [], "any", false, false, false, 92), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MySQL driver:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 95, $this->source); })()), "database", [], "any", false, false, false, 95), "driver", [], "any", false, false, false, 95), "html", null, true);
        echo "
        </p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of overrides", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 105
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 105, $this->source); })()), "overrides", [], "any", false, false, false, 105))) {
            // line 106
            echo "          <div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">
            ";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No overrides have been found.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
          </p></div>
        ";
        } else {
            // line 110
            echo "          <ul>
            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 111, $this->source); })()), "overrides", [], "any", false, false, false, 111));
            foreach ($context['_seq'] as $context["_key"] => $context["override"]) {
                // line 112
                echo "              <li>";
                echo twig_escape_filter($this->env, $context["override"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['override'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "          </ul>
        ";
        }
        // line 116
        echo "      </div>
    </div>
  </div>
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop version:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 126, $this->source); })()), "shop", [], "any", false, false, false, 126), "version", [], "any", false, false, false, 126), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop URL:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 129, $this->source); })()), "shop", [], "any", false, false, false, 129), "url", [], "any", false, false, false, 129), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop path:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 132, $this->source); })()), "shop", [], "any", false, false, false, 132), "path", [], "any", false, false, false, 132), "html", null, true);
        echo "
        </p>
        <p class=\"mb-0\">
          <strong>";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current theme in use:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 135, $this->source); })()), "shop", [], "any", false, false, false, 135), "theme", [], "any", false, false, false, 135), "html", null, true);
        echo "
        </p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 145, $this->source); })()), "isNativePHPmail", [], "any", false, false, false, 145)) {
            // line 146
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using /usr/sbin/sendmail", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
          </p>
        ";
        } else {
            // line 150
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mail method:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are using your own SMTP parameters.", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 154
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP server:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 154, $this->source); })()), "smtp", [], "any", false, false, false, 154), "server", [], "any", false, false, false, 154), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 157
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP username:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            ";
            // line 158
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 158, $this->source); })()), "smtp", [], "any", false, false, false, 158), "user", [], "any", false, false, false, 158))) {
                // line 159
                echo "              ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
            ";
            } else {
                // line 161
                echo "              <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
            ";
            }
            // line 163
            echo "          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP password:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            ";
            // line 166
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 166, $this->source); })()), "smtp", [], "any", false, false, false, 166), "password", [], "any", false, false, false, 166))) {
                // line 167
                echo "              ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "
            ";
            } else {
                // line 169
                echo "              <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not defined", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
            ";
            }
            // line 171
            echo "          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 173
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Encryption:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 173, $this->source); })()), "smtp", [], "any", false, false, false, 173), "encryption", [], "any", false, false, false, 173), "html", null, true);
            echo "
          </p>
          <p class=\"mb-0\">
            <strong>";
            // line 176
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SMTP port:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["system"]) || array_key_exists("system", $context) ? $context["system"] : (function () { throw new RuntimeError('Variable "system" does not exist.', 176, $this->source); })()), "smtp", [], "any", false, false, false, 176), "port", [], "any", false, false, false, 176), "html", null, true);
            echo "
          </p>
        ";
        }
        // line 179
        echo "      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your information", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your web browser:", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, (isset($context["userAgent"]) || array_key_exists("userAgent", $context) ? $context["userAgent"] : (function () { throw new RuntimeError('Variable "userAgent" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "
        </p>
      </div>
    </div>

    <div class=\"card\" id=\"checkConfiguration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> ";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check your configuration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        ";
        // line 198
        if ((twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 198, $this->source); })()), "failRequired", [], "any", false, false, false, 198) == false)) {
            // line 199
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            <span class=\"text-success\">";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
          </p>
        ";
        } else {
            // line 204
            echo "          <p class=\"mb-0\">
            <strong>";
            // line 205
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Required parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
            <span class=\"text-danger\">";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
          </p>
          <ul>
            ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 209, $this->source); })()), "testsRequired", [], "any", false, false, false, 209));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 210
                echo "              ";
                if (("fail" == $context["value"])) {
                    // line 211
                    echo "                <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 211, $this->source); })()), "testsErrors", [], "any", false, false, false, 211), $context["key"], [], "array", false, false, false, 211), "html", null, true);
                    echo "</li>
              ";
                }
                // line 213
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "          </ul>
        ";
        }
        // line 216
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["requirements"] ?? null), "failOptional", [], "any", true, true, false, 216)) {
            // line 217
            echo "          ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 217, $this->source); })()), "failOptional", [], "any", false, false, false, 217) == false)) {
                // line 218
                echo "            <p class=\"mb-0\">
              <strong>";
                // line 219
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
              <span class=\"text-success\">";
                // line 220
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("OK", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
            </p>
          ";
            } else {
                // line 223
                echo "            <p class=\"mb-0\">
              <strong>";
                // line 224
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional parameters:", [], "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong>
              <span class=\"text-danger\">";
                // line 225
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please fix the following error(s)", [], "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
            </p>
            <ul>
              ";
                // line 228
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 228, $this->source); })()), "testsOptional", [], "any", false, false, false, 228));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 229
                    echo "                ";
                    if (("fail" == $context["value"])) {
                        // line 230
                        echo "                  <li>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["requirements"]) || array_key_exists("requirements", $context) ? $context["requirements"] : (function () { throw new RuntimeError('Variable "requirements" does not exist.', 230, $this->source); })()), "testsErrors", [], "any", false, false, false, 230), $context["key"], [], "array", false, false, false, 230), "html", null, true);
                        echo "</li>
                ";
                    }
                    // line 232
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 233
                echo "            </ul>
          ";
            }
            // line 235
            echo "        ";
        }
        // line 236
        echo "      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">info_outline</i> ";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of changed files", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\" id=\"changedFiles\">
    <i class=\"material-icons\">loop</i> ";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Checking files...", [], "Admin.Advparameters.Notification"), "html", null, true);
        echo "
  </div>
</div>

<script>
  \$(document).ready(function()
  {
    var translations = {
      missing: '";
        // line 254
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Missing files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      updated: '";
        // line 255
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Updated files", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      changesDetected: '";
        // line 256
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Changed/missing files have been detected.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "',
      noChangeDetected: '";
        // line 257
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No change has been detected in your files.", [], "Admin.Advparameters.Notification"), "js"), "html", null, true);
        echo "'
    };

    \$.ajax({
      type: 'POST',
      url: '";
        // line 262
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_system_information_check_files");
        echo "',
      data: {},
      dataType: 'json',
      success: function(json)
      {
        var tab = {
          'missing': translations.missing,
          'updated': translations.updated,
        };

        if (json.missing.length || json.updated.length) {
          \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">' + translations.changesDetected + '</p></div>');
        } else {
          \$('#changedFiles').html('<div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">' + translations.noChangeDetected + '</p></div>');
        }

        \$.each(tab, function(key, lang) {
          if (json[key].length) {
            var html = \$('<ul>').attr('id', key+'_files');
            \$(json[key]).each(function(key, file) {
              html.append(\$('<li>').html(file))
            });
            \$('#changedFiles')
              .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
              .append(html);
          }
        });
      }
    });
  });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 262,  597 => 257,  593 => 256,  589 => 255,  585 => 254,  574 => 246,  568 => 243,  559 => 236,  556 => 235,  552 => 233,  546 => 232,  540 => 230,  537 => 229,  533 => 228,  527 => 225,  523 => 224,  520 => 223,  514 => 220,  510 => 219,  507 => 218,  504 => 217,  501 => 216,  497 => 214,  491 => 213,  485 => 211,  482 => 210,  478 => 209,  472 => 206,  468 => 205,  465 => 204,  459 => 201,  455 => 200,  452 => 199,  450 => 198,  444 => 195,  432 => 188,  425 => 184,  418 => 179,  410 => 176,  402 => 173,  398 => 171,  392 => 169,  386 => 167,  384 => 166,  380 => 165,  376 => 163,  370 => 161,  364 => 159,  362 => 158,  358 => 157,  350 => 154,  342 => 151,  339 => 150,  331 => 147,  328 => 146,  326 => 145,  320 => 142,  308 => 135,  300 => 132,  292 => 129,  284 => 126,  277 => 122,  269 => 116,  265 => 114,  256 => 112,  252 => 111,  249 => 110,  243 => 107,  240 => 106,  238 => 105,  232 => 102,  220 => 95,  212 => 92,  204 => 89,  196 => 86,  188 => 83,  180 => 80,  172 => 77,  165 => 73,  158 => 68,  152 => 66,  150 => 65,  143 => 63,  135 => 60,  127 => 57,  119 => 54,  111 => 51,  108 => 50,  100 => 47,  97 => 46,  95 => 45,  89 => 42,  80 => 36,  74 => 33,  68 => 29,  58 => 28,  35 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block content %}
<div class=\"row\">
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Configuration information'|trans }}
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">{{ 'You must provide this information when reporting an issue on GitHub or on the forum.'|trans }}</p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Server information'|trans }}
      </h3>
      <div class=\"card-body\">
        {% if system.uname is not empty %}
          <p class=\"mb-0\">
            <strong>{{ 'Server information:'|trans }}</strong> {{ system.uname }}
          </p>
        {% endif %}
        <p class=\"mb-0\">
          <strong>{{ 'Server software version:'|trans }}</strong> {{ system.server.version }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'PHP version:'|trans }}</strong> {{ system.server.php.version }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'Memory limit:'|trans }}</strong> {{ system.server.php.memoryLimit }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'Max execution time:'|trans }}</strong> {{ system.server.php.maxExecutionTime }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'Upload Max File size:'|trans }}</strong> {{ system.server.php.maxFileSizeUpload }}
        </p>
        {% if system.instaWebInstalled %}
          <p class=\"mb-0\">{{ 'PageSpeed module for Apache installed (mod_instaweb)'|trans }}</p>
        {% endif %}
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Database information'|trans({}, 'Admin.Advparameters.Feature') }}
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>{{ 'MySQL version:'|trans }}</strong> {{ system.database.version }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'MySQL server:'|trans }}</strong> {{ system.database.server }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'MySQL name:'|trans }}</strong> {{ system.database.name }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'MySQL user:'|trans }}</strong> {{ system.database.user }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'Tables prefix:'|trans }}</strong> {{ system.database.prefix }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'MySQL engine:'|trans }}</strong> {{ system.database.engine }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'MySQL driver:'|trans }}</strong> {{ system.database.driver }}
        </p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'List of overrides'|trans({}, 'Admin.Advparameters.Feature') }}
      </h3>
      <div class=\"card-body\">
        {% if system.overrides is empty %}
          <div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">
            {{ 'No overrides have been found.'|trans({}, 'Admin.Advparameters.Feature') }}
          </p></div>
        {% else %}
          <ul>
            {% for override in system.overrides %}
              <li>{{ override }}</li>
            {% endfor %}
          </ul>
        {% endif %}
      </div>
    </div>
  </div>
  <div class=\"col-lg-6\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Store information'|trans }}
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>{{ 'PrestaShop version:'|trans }}</strong> {{ system.shop.version }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'Shop URL:'|trans }}</strong> {{ system.shop.url }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'Shop path:'|trans }}</strong> {{ system.shop.path }}
        </p>
        <p class=\"mb-0\">
          <strong>{{ 'Current theme in use:'|trans }}</strong> {{ system.shop.theme }}
        </p>
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Mail configuration'|trans }}
      </h3>
      <div class=\"card-body\">
        {% if system.isNativePHPmail %}
          <p class=\"mb-0\">
            <strong>{{ 'Mail method:'|trans }}</strong> {{ 'You are using /usr/sbin/sendmail'|trans }}
          </p>
        {% else %}
          <p class=\"mb-0\">
            <strong>{{ 'Mail method:'|trans }}</strong> {{ 'You are using your own SMTP parameters.'|trans }}
          </p>
          <p class=\"mb-0\">
            <strong>{{ 'SMTP server:'|trans }}</strong> {{ system.smtp.server }}
          </p>
          <p class=\"mb-0\">
            <strong>{{ 'SMTP username:'|trans }}</strong>
            {% if system.smtp.user is not empty %}
              {{ 'Defined'|trans }}
            {% else %}
              <span style=\"color:red;\">{{ 'Not defined'|trans }}</span>
            {% endif %}
          </p>
          <p class=\"mb-0\">
            <strong>{{ 'SMTP password:'|trans }}</strong>
            {% if system.smtp.password is not empty %}
              {{ 'Defined'|trans }}
            {% else %}
              <span style=\"color:red;\">{{ 'Not defined'|trans }}</span>
            {% endif %}
          </p>
          <p class=\"mb-0\">
            <strong>{{ 'Encryption:'|trans }}</strong> {{ system.smtp.encryption }}
          </p>
          <p class=\"mb-0\">
            <strong>{{ 'SMTP port:'|trans }}</strong> {{ system.smtp.port }}
          </p>
        {% endif %}
      </div>
    </div>

    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Your information'|trans }}
      </h3>
      <div class=\"card-body\">
        <p class=\"mb-0\">
          <strong>{{ 'Your web browser:'|trans }}</strong> {{ userAgent }}
        </p>
      </div>
    </div>

    <div class=\"card\" id=\"checkConfiguration\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">info_outline</i> {{ 'Check your configuration'|trans }}
      </h3>
      <div class=\"card-body\">
        {% if requirements.failRequired == false %}
          <p class=\"mb-0\">
            <strong>{{ 'Required parameters:'|trans }}</strong>
            <span class=\"text-success\">{{ 'OK'|trans({}, 'Admin.Advparameters.Notification') }}</span>
          </p>
        {% else %}
          <p class=\"mb-0\">
            <strong>{{ 'Required parameters:'|trans }}</strong>
            <span class=\"text-danger\">{{ 'Please fix the following error(s)'|trans({}, 'Admin.Advparameters.Notification') }}</span>
          </p>
          <ul>
            {% for key, value in requirements.testsRequired %}
              {% if 'fail' == value %}
                <li>{{ requirements.testsErrors[key] }}</li>
              {% endif %}
            {% endfor %}
          </ul>
        {% endif %}
        {% if requirements.failOptional is defined %}
          {% if requirements.failOptional == false %}
            <p class=\"mb-0\">
              <strong>{{ 'Optional parameters:'|trans }}</strong>
              <span class=\"text-success\">{{ 'OK'|trans({}, 'Admin.Advparameters.Notification') }}</span>
            </p>
          {% else %}
            <p class=\"mb-0\">
              <strong>{{ 'Optional parameters:'|trans }}</strong>
              <span class=\"text-danger\">{{ 'Please fix the following error(s)'|trans({}, 'Admin.Advparameters.Notification') }}</span>
            </p>
            <ul>
              {% for key, value in requirements.testsOptional %}
                {% if 'fail' == value %}
                  <li>{{ requirements.testsErrors[key] }}</li>
                {% endif %}
              {% endfor %}
            </ul>
          {% endif %}
        {% endif %}
      </div>
    </div>
  </div>
</div>

<div class=\"card\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">info_outline</i> {{ 'List of changed files'|trans }}
  </h3>
  <div class=\"card-body\" id=\"changedFiles\">
    <i class=\"material-icons\">loop</i> {{ 'Checking files...'|trans({}, 'Admin.Advparameters.Notification') }}
  </div>
</div>

<script>
  \$(document).ready(function()
  {
    var translations = {
      missing: '{{ 'Missing files'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}',
      updated: '{{ 'Updated files'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}',
      changesDetected: '{{ 'Changed/missing files have been detected.'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}',
      noChangeDetected: '{{ 'No change has been detected in your files.'|trans({}, 'Admin.Advparameters.Notification')|e('js') }}'
    };

    \$.ajax({
      type: 'POST',
      url: '{{ path(\"admin_system_information_check_files\") }}',
      data: {},
      dataType: 'json',
      success: function(json)
      {
        var tab = {
          'missing': translations.missing,
          'updated': translations.updated,
        };

        if (json.missing.length || json.updated.length) {
          \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">' + translations.changesDetected + '</p></div>');
        } else {
          \$('#changedFiles').html('<div class=\"alert alert-success mb-0\" role=\"alert\"><p class=\"alert-text\">' + translations.noChangeDetected + '</p></div>');
        }

        \$.each(tab, function(key, lang) {
          if (json[key].length) {
            var html = \$('<ul>').attr('id', key+'_files');
            \$(json[key]).each(function(key, file) {
              html.append(\$('<li>').html(file))
            });
            \$('#changedFiles')
              .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
              .append(html);
          }
        });
      }
    });
  });
</script>
{% endblock %}
", "@PrestaShop/Admin/Configure/AdvancedParameters/system_information.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/system_information.html.twig");
    }
}
