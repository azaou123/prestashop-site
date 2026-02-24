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

/* @Modules/blockreassurance/views/img/reassurance/pack1/timer.svg */
class __TwigTemplate_0c3855fb848599efdcf8e3aed574846f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/img/reassurance/pack1/timer.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/views/img/reassurance/pack1/timer.svg"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<svg width=\"70px\" height=\"70px\" viewBox=\"0 0 70 70\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>pack1_ timer</title>
    <desc>Created with Sketch.</desc>
    <g id=\"pack1_-timer\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"baseline-timer-24px\" transform=\"translate(8.000000, 2.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <path d=\"M35.75,0.916666667 L18.25,0.916666667 L18.25,6.75 L35.75,6.75 L35.75,0.916666667 Z M24.0833333,38.8333333 L29.9166667,38.8333333 L29.9166667,21.3333333 L24.0833333,21.3333333 L24.0833333,38.8333333 Z M47.5041667,19.5541667 L51.6458333,15.4125 C50.3916667,13.925 49.0208333,12.525 47.5333333,11.3 L43.3916667,15.4416667 C38.8708333,11.825 33.1833333,9.66666667 27,9.66666667 C12.5041667,9.66666667 0.75,21.4208333 0.75,35.9166667 C0.75,50.4125 12.475,62.1666667 27,62.1666667 C41.525,62.1666667 53.25,50.4125 53.25,35.9166667 C53.25,29.7333333 51.0916667,24.0458333 47.5041667,19.5541667 Z M27,56.3333333 C15.7125,56.3333333 6.58333333,47.2041667 6.58333333,35.9166667 C6.58333333,24.6291667 15.7125,15.5 27,15.5 C38.2875,15.5 47.4166667,24.6291667 47.4166667,35.9166667 C47.4166667,47.2041667 38.2875,56.3333333 27,56.3333333 Z\" id=\"Shape\"></path>
        </g>
    </g>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/views/img/reassurance/pack1/timer.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<svg width=\"70px\" height=\"70px\" viewBox=\"0 0 70 70\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
    <!-- Generator: Sketch 53.2 (72643) - https://sketchapp.com -->
    <title>pack1_ timer</title>
    <desc>Created with Sketch.</desc>
    <g id=\"pack1_-timer\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"baseline-timer-24px\" transform=\"translate(8.000000, 2.000000)\" fill=\"#000000\" fill-rule=\"nonzero\">
            <path d=\"M35.75,0.916666667 L18.25,0.916666667 L18.25,6.75 L35.75,6.75 L35.75,0.916666667 Z M24.0833333,38.8333333 L29.9166667,38.8333333 L29.9166667,21.3333333 L24.0833333,21.3333333 L24.0833333,38.8333333 Z M47.5041667,19.5541667 L51.6458333,15.4125 C50.3916667,13.925 49.0208333,12.525 47.5333333,11.3 L43.3916667,15.4416667 C38.8708333,11.825 33.1833333,9.66666667 27,9.66666667 C12.5041667,9.66666667 0.75,21.4208333 0.75,35.9166667 C0.75,50.4125 12.475,62.1666667 27,62.1666667 C41.525,62.1666667 53.25,50.4125 53.25,35.9166667 C53.25,29.7333333 51.0916667,24.0458333 47.5041667,19.5541667 Z M27,56.3333333 C15.7125,56.3333333 6.58333333,47.2041667 6.58333333,35.9166667 C6.58333333,24.6291667 15.7125,15.5 27,15.5 C38.2875,15.5 47.4166667,24.6291667 47.4166667,35.9166667 C47.4166667,47.2041667 38.2875,56.3333333 27,56.3333333 Z\" id=\"Shape\"></path>
        </g>
    </g>
</svg>
", "@Modules/blockreassurance/views/img/reassurance/pack1/timer.svg", "/var/www/html/modules/blockreassurance/views/img/reassurance/pack1/timer.svg");
    }
}
