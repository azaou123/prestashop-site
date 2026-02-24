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

/* @Modules/ps_searchbar/ps_searchbar.css */
class __TwigTemplate_c4158bb48060f5781b3968ae9b48c744 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_searchbar/ps_searchbar.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_searchbar/ps_searchbar.css"));

        // line 1
        echo "#search_widget {
  margin-bottom: .625rem;
  overflow: auto;
}
#search_widget form {
  position: relative;
}
#search_widget form i {
  position: absolute;
  padding: .5rem;
}
#search_widget form i.clear {
  right: 15px;
  display: none;
}
#search_widget form input {
  width: 100%;
  padding: 10px 20px 10px 40px;
  outline: none;
  background-color: #f1f1f1;
  border: none;
  border-radius: 5px;
}

.ui-autocomplete.searchbar-autocomplete {
  width: 100%;
  min-height: 100%;
  border: none;
}

.ui-autocomplete.searchbar-autocomplete li a, .ui-autocomplete.searchbar-autocomplete li a.ui-state-focus {
  padding: 8px 15px;
  overflow: auto;
  border: none;
  background: none;
  margin: auto;
  border-radius: 0;
}

.ui-autocomplete.searchbar-autocomplete li a:hover {
  background-color: #f1f1f1;
  cursor: pointer;
}

.ui-autocomplete.searchbar-autocomplete li a .autocomplete-thumbnail {
  float: left;
  width: 50px;
  height: auto;
  margin-right: 8px;
}

@media only screen and (min-width: 768px) {
  #search_widget {
    float: right;
    margin-bottom: 0;
  }

  .ui-autocomplete.searchbar-autocomplete {
    width: 400px;
    min-height: auto;
    left: auto;
  }
}

@media only screen and (min-width: 992px) {
  #search_widget {
    min-width: 16.5rem;
  }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_searchbar/ps_searchbar.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("#search_widget {
  margin-bottom: .625rem;
  overflow: auto;
}
#search_widget form {
  position: relative;
}
#search_widget form i {
  position: absolute;
  padding: .5rem;
}
#search_widget form i.clear {
  right: 15px;
  display: none;
}
#search_widget form input {
  width: 100%;
  padding: 10px 20px 10px 40px;
  outline: none;
  background-color: #f1f1f1;
  border: none;
  border-radius: 5px;
}

.ui-autocomplete.searchbar-autocomplete {
  width: 100%;
  min-height: 100%;
  border: none;
}

.ui-autocomplete.searchbar-autocomplete li a, .ui-autocomplete.searchbar-autocomplete li a.ui-state-focus {
  padding: 8px 15px;
  overflow: auto;
  border: none;
  background: none;
  margin: auto;
  border-radius: 0;
}

.ui-autocomplete.searchbar-autocomplete li a:hover {
  background-color: #f1f1f1;
  cursor: pointer;
}

.ui-autocomplete.searchbar-autocomplete li a .autocomplete-thumbnail {
  float: left;
  width: 50px;
  height: auto;
  margin-right: 8px;
}

@media only screen and (min-width: 768px) {
  #search_widget {
    float: right;
    margin-bottom: 0;
  }

  .ui-autocomplete.searchbar-autocomplete {
    width: 400px;
    min-height: auto;
    left: auto;
  }
}

@media only screen and (min-width: 992px) {
  #search_widget {
    min-width: 16.5rem;
  }
}
", "@Modules/ps_searchbar/ps_searchbar.css", "/var/www/html/modules/ps_searchbar/ps_searchbar.css");
    }
}
