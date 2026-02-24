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

/* @Modules/ps_distributionapiclient/vue-app/src/views/sections/ContributeSectionView.vue */
class __TwigTemplate_518471ce13c01fdd4a1b3633e0e24ea6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/ContributeSectionView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/ContributeSectionView.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
defineProps<{
  contributeLink: string
  slackLink: string
}>()
</script>

<template>
  <section class=\"wof-section wof-contribute-section\">
    <div class=\"wof-contribute-section__content\">
      <h2 class=\"wof-contribute-section__tite puik-h2\">✨ How to contribute?</h2>
      <p class=\"wof-contribute-section__description puik-body-default\">
        Join the open-source movement by contributing to PrestaShop on GitHub—whether it’s code,
        documentation, or ideas. Every contribution counts!
      </p>
    </div>
    <div class=\"wof-contribute-section__links\">
      <a
        :href=\"contributeLink\"
        target=\"_blank\"
        aria-label=\"Contribute to PrestaShop\"
        rel=\"noopener noreferrer\"
      >
        <puik-button variant=\"primary\">
          Contribute
        </puik-button>
      </a>
      <a
        :href=\"slackLink\"
        target=\"_blank\"
        aria-label=\"join PrestaShop Slack Open Source\"
        rel=\"noopener noreferrer\"
      >
        <puik-button variant=\"secondary\">
          Join Slack
        </puik-button>
      </a>
    </div>
  </section>
</template>

<style>
:root {
  --wof-contribute-section-bg: #bde9c9;
  --wof-contribute-section-link-hover-color: #ffffff;
  --wof-description-max-width: 1200px;
}
.wof-contribute-section {
  justify-content: center;
  align-items: center;
  background-color: var(--wof-contribute-section-bg);
}
.wof-contribute-section__content {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.wof-contribute-section__tite {
  margin-bottom: 1rem;
}
.wof-contribute-section__description {
  margin-bottom: 0;
  max-width: var(--wof-description-max-width);
  text-align: center;
}
.wof-contribute-section__links {
  display: flex;
  gap: 1rem;
}
.wof-contribute-section__links a.puik-button {
  text-decoration: none !important;
}
.wof-contribute-section__links a.puik-button--primary:hover {
  color: var(--wof-contribute-section-link-hover-color) !important;
}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/sections/ContributeSectionView.vue";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
defineProps<{
  contributeLink: string
  slackLink: string
}>()
</script>

<template>
  <section class=\"wof-section wof-contribute-section\">
    <div class=\"wof-contribute-section__content\">
      <h2 class=\"wof-contribute-section__tite puik-h2\">✨ How to contribute?</h2>
      <p class=\"wof-contribute-section__description puik-body-default\">
        Join the open-source movement by contributing to PrestaShop on GitHub—whether it’s code,
        documentation, or ideas. Every contribution counts!
      </p>
    </div>
    <div class=\"wof-contribute-section__links\">
      <a
        :href=\"contributeLink\"
        target=\"_blank\"
        aria-label=\"Contribute to PrestaShop\"
        rel=\"noopener noreferrer\"
      >
        <puik-button variant=\"primary\">
          Contribute
        </puik-button>
      </a>
      <a
        :href=\"slackLink\"
        target=\"_blank\"
        aria-label=\"join PrestaShop Slack Open Source\"
        rel=\"noopener noreferrer\"
      >
        <puik-button variant=\"secondary\">
          Join Slack
        </puik-button>
      </a>
    </div>
  </section>
</template>

<style>
:root {
  --wof-contribute-section-bg: #bde9c9;
  --wof-contribute-section-link-hover-color: #ffffff;
  --wof-description-max-width: 1200px;
}
.wof-contribute-section {
  justify-content: center;
  align-items: center;
  background-color: var(--wof-contribute-section-bg);
}
.wof-contribute-section__content {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.wof-contribute-section__tite {
  margin-bottom: 1rem;
}
.wof-contribute-section__description {
  margin-bottom: 0;
  max-width: var(--wof-description-max-width);
  text-align: center;
}
.wof-contribute-section__links {
  display: flex;
  gap: 1rem;
}
.wof-contribute-section__links a.puik-button {
  text-decoration: none !important;
}
.wof-contribute-section__links a.puik-button--primary:hover {
  color: var(--wof-contribute-section-link-hover-color) !important;
}
</style>
", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/ContributeSectionView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/sections/ContributeSectionView.vue");
    }
}
