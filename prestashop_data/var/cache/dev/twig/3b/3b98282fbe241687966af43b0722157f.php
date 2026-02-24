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

/* @Modules/ps_facetedsearch/views/dist/back.css */
class __TwigTemplate_c0a7359f417aae38c8ce50328424086a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/dist/back.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/views/dist/back.css"));

        // line 1
        echo ".bootstrap .filter_list .filter_list_item{display:table;width:100%;padding:5px 0;margin-bottom:4px;background-color:white;-webkit-box-shadow:rgba(0,0,0,0.3) 0 0 3px,rgba(0,0,0,0.1) 0 -2px 0 inset;box-shadow:rgba(0,0,0,0.3) 0 0 3px,rgba(0,0,0,0.1) 0 -2px 0 inset;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;cursor:pointer}.bootstrap .filter_panel{min-height:20px;padding:7px 7px 0px 7px;margin-bottom:20px;background-color:#ebebeb;border:1px solid #d9d9d9;border-radius:3px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.bootstrap .filter_panel header{margin-bottom:7px}.bootstrap .prestashop-switch span{display:none}.sortable-ghost{color:orange}#content.bootstrap .form-group-categories .panel{margin-bottom:0}


/*# sourceMappingURL=back.css.map*/";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/views/dist/back.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(".bootstrap .filter_list .filter_list_item{display:table;width:100%;padding:5px 0;margin-bottom:4px;background-color:white;-webkit-box-shadow:rgba(0,0,0,0.3) 0 0 3px,rgba(0,0,0,0.1) 0 -2px 0 inset;box-shadow:rgba(0,0,0,0.3) 0 0 3px,rgba(0,0,0,0.1) 0 -2px 0 inset;-webkit-border-radius:3px;-moz-border-radius:3px;-ms-border-radius:3px;-o-border-radius:3px;border-radius:3px;cursor:pointer}.bootstrap .filter_panel{min-height:20px;padding:7px 7px 0px 7px;margin-bottom:20px;background-color:#ebebeb;border:1px solid #d9d9d9;border-radius:3px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.bootstrap .filter_panel header{margin-bottom:7px}.bootstrap .prestashop-switch span{display:none}.sortable-ghost{color:orange}#content.bootstrap .form-group-categories .panel{margin-bottom:0}


/*# sourceMappingURL=back.css.map*/", "@Modules/ps_facetedsearch/views/dist/back.css", "/var/www/html/modules/ps_facetedsearch/views/dist/back.css");
    }
}
