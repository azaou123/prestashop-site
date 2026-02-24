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

/* @Modules/ps_distributionapiclient/vue-app/src/views/sections/WallOfFameSectionView.vue */
class __TwigTemplate_2345d36b86e77bce54387b1d6e0cd3d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/WallOfFameSectionView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/WallOfFameSectionView.vue"));

        // line 1
        echo "<template>
  <section class=\"wof-section wof-wall-of-fame-section\">
    <div>
      <h2 class=\"puik-h2\">🏆 PrestaShop Project’s Wall of fame</h2>
      <p class=\"puik-body-default\">
        The PrestaShop Wall of Fame: built by the best, committed to the core.
      </p>
    </div>
  </section>
</template>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/sections/WallOfFameSectionView.vue";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<template>
  <section class=\"wof-section wof-wall-of-fame-section\">
    <div>
      <h2 class=\"puik-h2\">🏆 PrestaShop Project’s Wall of fame</h2>
      <p class=\"puik-body-default\">
        The PrestaShop Wall of Fame: built by the best, committed to the core.
      </p>
    </div>
  </section>
</template>
", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/WallOfFameSectionView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/sections/WallOfFameSectionView.vue");
    }
}
