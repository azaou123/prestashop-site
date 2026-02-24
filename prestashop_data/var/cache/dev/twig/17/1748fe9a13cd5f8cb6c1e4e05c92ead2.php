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

/* @Modules/ps_linklist/views/tsconfig.json */
class __TwigTemplate_ed09876a43a8b8e257aa1bd5b052a999 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/views/tsconfig.json"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/views/tsconfig.json"));

        // line 1
        echo "{
  \"compilerOptions\": {
    \"outDir\": \"./public/\",
    \"noImplicitAny\": true,
    \"module\": \"es6\",
    \"target\": \"es5\",
    \"strict\": true,
    \"moduleResolution\": \"node\",
    \"allowSyntheticDefaultImports\": true,
    \"allowJs\": true,
    \"baseUrl\": \"./\",
    \"typeRoots\": [\"node_modules/@types\"],
    \"paths\": {
      \"@PSJs/*\": [\"../../admin-dev/themes/new-theme/js/*\"]
    }
  },
  \"ts-node\": {
    \"compilerOptions\": {
      \"module\": \"commonjs\"
    }
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/tsconfig.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"compilerOptions\": {
    \"outDir\": \"./public/\",
    \"noImplicitAny\": true,
    \"module\": \"es6\",
    \"target\": \"es5\",
    \"strict\": true,
    \"moduleResolution\": \"node\",
    \"allowSyntheticDefaultImports\": true,
    \"allowJs\": true,
    \"baseUrl\": \"./\",
    \"typeRoots\": [\"node_modules/@types\"],
    \"paths\": {
      \"@PSJs/*\": [\"../../admin-dev/themes/new-theme/js/*\"]
    }
  },
  \"ts-node\": {
    \"compilerOptions\": {
      \"module\": \"commonjs\"
    }
  }
}
", "@Modules/ps_linklist/views/tsconfig.json", "/var/www/html/modules/ps_linklist/views/tsconfig.json");
    }
}
