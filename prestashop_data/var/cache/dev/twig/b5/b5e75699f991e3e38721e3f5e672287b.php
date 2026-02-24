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

/* @Modules/ps_distributionapiclient/vue-app/src/views/sections/HeaderSectionView.vue */
class __TwigTemplate_7555820828e77504e0a131ea01401f60 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/HeaderSectionView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/HeaderSectionView.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
defineProps<{
  totalMergedPr: number
  prestaMergedPrByPercent: number
}>()

</script>

<template>
  <header class=\"wof-section wof-header-section\">
    <h1 class=\"wof-header-section__title puik-brand-jumbotron\">MEET our community Heroes</h1>
    <p class=\"wof-header-section__description puik-body-default\">
      From day one, PrestaShop has thrived as an open-source platform powered by a talented
      community of developers, merchants, and contributors. We all work together to improve and
      support the scalability of the PrestaShop e-commerce platform. By remaining the main
      contributors to its development, PrestaShop ensures long-term sustainability for everyone in
      the ecosystem. The project grows with each contribution, and with each contribution our
      contributors’ expertise grows. Take a look at our community.
    </p>
    <div class=\"wof-header-section__kpis-container\">
      <div class=\"wof-header-section__kpis-item\">
        <span class=\"wof-header-section__kpis-value puik-brand-h1\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["totalMergedPr"]) || array_key_exists("totalMergedPr", $context) ? $context["totalMergedPr"] : (function () { throw new RuntimeError('Variable "totalMergedPr" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</span>
        <span class=\"wof-header-section__kpis-label puik-body-default\">Total Contributions</span>
      </div>
      <div class=\"wof-header-section__kpis-item\">
        <span class=\"wof-header-section__kpis-value puik-brand-h1\">
          ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["prestaMergedPrByPercent"]) || array_key_exists("prestaMergedPrByPercent", $context) ? $context["prestaMergedPrByPercent"] : (function () { throw new RuntimeError('Variable "prestaMergedPrByPercent" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "%
        </span>
        <span class=\"wof-header-section__kpis-label puik-body-default\">Contributions by PrestaShop</span>
      </div>
      <div class=\"wof-header-section__kpis-item\">
        <span class=\"wof-header-section__kpis-value puik-brand-h1\">
            ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (100 - (isset($context["prestaMergedPrByPercent"]) || array_key_exists("prestaMergedPrByPercent", $context) ? $context["prestaMergedPrByPercent"] : (function () { throw new RuntimeError('Variable "prestaMergedPrByPercent" does not exist.', 33, $this->source); })())), "toFixed", [0 => 2], "method", false, false, false, 33), "html", null, true);
        echo "%
        </span>
        <span class=\"wof-header-section__kpis-label puik-body-default\">Contributions by Community</span>
      </div>
    </div>
  </header>
</template>

<style>
:root {
  --wof-header-section-bg: #1d1d1b;
  --wof-header-section-text: #ffffff;
  --wof-description-max-width: 1200px;
}

.wof-header-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 2rem;
  background-color: var(--wof-header-section-bg);
}
.wof-header-section * {
  color: var(--wof-header-section-text);
}
.wof-header-section__title {
  margin-bottom: 0;
  text-align: center;
  text-transform: uppercase;
}
.wof-header-section__description {
  max-width: var(--wof-description-max-width);
  text-align: center;
}
.wof-header-section__kpis-container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 2rem;
}
.wof-header-section__kpis-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-width: 190px;
}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/sections/HeaderSectionView.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  74 => 27,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
defineProps<{
  totalMergedPr: number
  prestaMergedPrByPercent: number
}>()

</script>

<template>
  <header class=\"wof-section wof-header-section\">
    <h1 class=\"wof-header-section__title puik-brand-jumbotron\">MEET our community Heroes</h1>
    <p class=\"wof-header-section__description puik-body-default\">
      From day one, PrestaShop has thrived as an open-source platform powered by a talented
      community of developers, merchants, and contributors. We all work together to improve and
      support the scalability of the PrestaShop e-commerce platform. By remaining the main
      contributors to its development, PrestaShop ensures long-term sustainability for everyone in
      the ecosystem. The project grows with each contribution, and with each contribution our
      contributors’ expertise grows. Take a look at our community.
    </p>
    <div class=\"wof-header-section__kpis-container\">
      <div class=\"wof-header-section__kpis-item\">
        <span class=\"wof-header-section__kpis-value puik-brand-h1\">{{ totalMergedPr }}</span>
        <span class=\"wof-header-section__kpis-label puik-body-default\">Total Contributions</span>
      </div>
      <div class=\"wof-header-section__kpis-item\">
        <span class=\"wof-header-section__kpis-value puik-brand-h1\">
          {{ prestaMergedPrByPercent }}%
        </span>
        <span class=\"wof-header-section__kpis-label puik-body-default\">Contributions by PrestaShop</span>
      </div>
      <div class=\"wof-header-section__kpis-item\">
        <span class=\"wof-header-section__kpis-value puik-brand-h1\">
            {{ (100 - prestaMergedPrByPercent).toFixed(2) }}%
        </span>
        <span class=\"wof-header-section__kpis-label puik-body-default\">Contributions by Community</span>
      </div>
    </div>
  </header>
</template>

<style>
:root {
  --wof-header-section-bg: #1d1d1b;
  --wof-header-section-text: #ffffff;
  --wof-description-max-width: 1200px;
}

.wof-header-section {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 2rem;
  background-color: var(--wof-header-section-bg);
}
.wof-header-section * {
  color: var(--wof-header-section-text);
}
.wof-header-section__title {
  margin-bottom: 0;
  text-align: center;
  text-transform: uppercase;
}
.wof-header-section__description {
  max-width: var(--wof-description-max-width);
  text-align: center;
}
.wof-header-section__kpis-container {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  gap: 2rem;
}
.wof-header-section__kpis-item {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-width: 190px;
}
</style>
", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/HeaderSectionView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/sections/HeaderSectionView.vue");
    }
}
