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

/* @Modules/ps_distributionapiclient/vue-app/src/views/sections/TopSectionView.vue */
class __TwigTemplate_7aabf0b0c39527c035011e39d6b686fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/TopSectionView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/TopSectionView.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
import TopContributorsView from '@/views/sections/sub-sections/TopContributorsView.vue';
import TopCompaniesView from '@/views/sections/sub-sections/TopCompaniesView.vue';
import type { Contributor, Company } from '@/types';

defineProps<{
  topContributors: Contributor[]
  topCompanies: Company[]
}>()
</script>

<template>
  <section class=\"wof-section wof-top-section\">
    <h2 class=\"wof-top-section__title puik-h1\">PrestaShop Project’s top contributors</h2>
    <div class=\"wof-top-section__cards\">
      <TopCompaniesView :top-companies=\"topCompanies\" />
      <TopContributorsView :top-contributors=\"topContributors\" />
    </div>
  </section>
</template>

<style>
:root {
  --wof-top-section-padding: 2.5rem 1rem;
  --wof-top-section-padding-lg: 4rem;
  --wof-top-section-rank-first: #ffd999;
  --wof-top-section-rank-second: #eeeeee;
  --wof-top-section-rank-third: #e7bd94;
}

.wof-section.wof-top-section {
  padding: var(--wof-top-section-padding);
}
@media (min-width: 768px) {
  .wof-section.wof-top-section {
    padding: var(--wof-top-section-padding-lg);
  }
}
.wof-top-section__title {
  margin-bottom: 0;
}

.wof-top-section__cards {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
}
.wof-top-section__rank {
  width: 1.5rem;
  height: 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}
.wof-top-section__rank span {
  line-height: 0;
}
.wof-top-section__rank--first {
  background-color: var(--wof-top-section-rank-first);
}
.wof-top-section__rank--second {
  background-color: var(--wof-top-section-rank-second);
}
.wof-top-section__rank--third {
  background-color: var(--wof-top-section-rank-third);
}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/sections/TopSectionView.vue";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
import TopContributorsView from '@/views/sections/sub-sections/TopContributorsView.vue';
import TopCompaniesView from '@/views/sections/sub-sections/TopCompaniesView.vue';
import type { Contributor, Company } from '@/types';

defineProps<{
  topContributors: Contributor[]
  topCompanies: Company[]
}>()
</script>

<template>
  <section class=\"wof-section wof-top-section\">
    <h2 class=\"wof-top-section__title puik-h1\">PrestaShop Project’s top contributors</h2>
    <div class=\"wof-top-section__cards\">
      <TopCompaniesView :top-companies=\"topCompanies\" />
      <TopContributorsView :top-contributors=\"topContributors\" />
    </div>
  </section>
</template>

<style>
:root {
  --wof-top-section-padding: 2.5rem 1rem;
  --wof-top-section-padding-lg: 4rem;
  --wof-top-section-rank-first: #ffd999;
  --wof-top-section-rank-second: #eeeeee;
  --wof-top-section-rank-third: #e7bd94;
}

.wof-section.wof-top-section {
  padding: var(--wof-top-section-padding);
}
@media (min-width: 768px) {
  .wof-section.wof-top-section {
    padding: var(--wof-top-section-padding-lg);
  }
}
.wof-top-section__title {
  margin-bottom: 0;
}

.wof-top-section__cards {
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
}
.wof-top-section__rank {
  width: 1.5rem;
  height: 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
}
.wof-top-section__rank span {
  line-height: 0;
}
.wof-top-section__rank--first {
  background-color: var(--wof-top-section-rank-first);
}
.wof-top-section__rank--second {
  background-color: var(--wof-top-section-rank-second);
}
.wof-top-section__rank--third {
  background-color: var(--wof-top-section-rank-third);
}
</style>
", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/TopSectionView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/sections/TopSectionView.vue");
    }
}
