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

/* @Modules/ps_distributionapiclient/vue-app/src/views/HomeView.vue */
class __TwigTemplate_a04a378a181573bf538f9c7d2e334537 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/HomeView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/HomeView.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
import 'vue3-carousel/carousel.css'

import { ref, onMounted } from 'vue'
import HeaderSectionView from '@/views/sections/HeaderSectionView.vue'
import TopSectionView from '@/views/sections/TopSectionView.vue'
import NewContributorsSectionView from '@/views/sections/NewContributorsSectionView.vue'
import ContributeSectionView from '@/views/sections/ContributeSectionView.vue'
import type { Company, Contributor, NewContributor } from '@/types'

const totalMergedPr = ref<number>(0)
const prestaMergedPrbyPercent = ref<number>(0)
const topCompanies = ref<Company[]>([])
const contributorsData = ref<Contributor[]>([])
const topContributors = ref<Contributor[]>([])
const newContributors = ref<NewContributor[]>([])

onMounted(async () => {
  try {
    const response = await fetch('https://contributors.prestashop-project.org/newcontributors.json')
    if (!response.ok) throw new Error('Error loading new contributors')
    const data: Record<string, NewContributor> = await response.json()
    newContributors.value = Object.values(data)
  } catch (error) {
    console.error('Error loading new contributors:', error)
  }

  try {
    const response = await fetch('https://contributors.prestashop-project.org/topcompanies.json')
    if (!response.ok) throw new Error('Error loading top companies')
    const data = await response.json()
    topCompanies.value = data.companies.slice(0, 5)

    const total: number =
      data.companies.reduce((acc: number, company: Company) => acc + company.merged_pull_requests, 0)
      + data.community.merged_pull_requests
    totalMergedPr.value = total ?? 0

    const prestashopCompany = data.companies.find((company: Company) => company.name === 'PrestaShop')
    prestaMergedPrbyPercent.value = prestashopCompany.pull_requests_percent ?? 0

  } catch (error) {
    console.error('Error loading top companies:', error)
  }

  try {
    const response = await fetch('https://contributors.prestashop-project.org/contributors_prs.json')
    if (!response.ok) throw new Error('Error loading contributors data')

    const data = await response.json()

    // Filter out non-contributor entries and nulls (e.g., \"updatedAt\") from the JSON object
    const contributorsOnly = Object.values(data).filter(
      (item): item is Contributor =>
        item !== null && typeof item === 'object' && 'contributions' in item,
    )
    contributorsData.value = contributorsOnly
    topContributors.value = contributorsOnly.slice(0, 5)

  } catch (error) {
    console.error('Error loading contributors data:', error)
  }
})
</script>

<template>
  <div class=\"wof-container\">
    <HeaderSectionView
      :total-merged-pr=\"totalMergedPr\"
      :presta-merged-pr-by-percent=\"prestaMergedPrbyPercent\"
    />
    <main>
      <TopSectionView :top-contributors=\"topContributors\" :top-companies=\"topCompanies\" />
      <NewContributorsSectionView :new-contributors=\"newContributors\" />
      <ContributeSectionView
        contributeLink=\"https://devdocs.prestashop-project.org/9/contribute/contribute-pull-requests/\"
        slackLink=\"https://www.prestashop-project.org/slack/\"
      />
    </main>
  </div>
</template>

<style>
:root {
  --wof-section-gap: 1.5rem;
  --wof-section-padding: 2.5rem 1rem;
  --wof-section-padding-lg: 4rem;
  --wof-avatar-bg: #fff;
  --wof-jumbotron-size-sm: 2.5rem;
  --wof-h1-size-sm: 1.75rem;
}

.wof-section {
  padding: var(--wof-section-padding);
  display: flex;
  flex-direction: column;
  gap: var(--wof-section-gap);
}
@media (min-width: 768px) {
  .wof-section {
    padding: var(--wof-section-padding-lg);
  }
}
.puik-tag p {
  margin-bottom: 0;
}
a.puik-button:hover {
  text-decoration: none;
}
.puik-avatar.puik-avatar--photo {
  background-color: var(--wof-avatar-bg);
}
@media (max-width: 768px) {
  .puik-brand-jumbotron {
    font-size: var(--wof-jumbotron-size-sm);
  }
  .puik-h1 {
    font-size: var(--wof-h1-size-sm);
  }
}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/HomeView.vue";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
import 'vue3-carousel/carousel.css'

import { ref, onMounted } from 'vue'
import HeaderSectionView from '@/views/sections/HeaderSectionView.vue'
import TopSectionView from '@/views/sections/TopSectionView.vue'
import NewContributorsSectionView from '@/views/sections/NewContributorsSectionView.vue'
import ContributeSectionView from '@/views/sections/ContributeSectionView.vue'
import type { Company, Contributor, NewContributor } from '@/types'

const totalMergedPr = ref<number>(0)
const prestaMergedPrbyPercent = ref<number>(0)
const topCompanies = ref<Company[]>([])
const contributorsData = ref<Contributor[]>([])
const topContributors = ref<Contributor[]>([])
const newContributors = ref<NewContributor[]>([])

onMounted(async () => {
  try {
    const response = await fetch('https://contributors.prestashop-project.org/newcontributors.json')
    if (!response.ok) throw new Error('Error loading new contributors')
    const data: Record<string, NewContributor> = await response.json()
    newContributors.value = Object.values(data)
  } catch (error) {
    console.error('Error loading new contributors:', error)
  }

  try {
    const response = await fetch('https://contributors.prestashop-project.org/topcompanies.json')
    if (!response.ok) throw new Error('Error loading top companies')
    const data = await response.json()
    topCompanies.value = data.companies.slice(0, 5)

    const total: number =
      data.companies.reduce((acc: number, company: Company) => acc + company.merged_pull_requests, 0)
      + data.community.merged_pull_requests
    totalMergedPr.value = total ?? 0

    const prestashopCompany = data.companies.find((company: Company) => company.name === 'PrestaShop')
    prestaMergedPrbyPercent.value = prestashopCompany.pull_requests_percent ?? 0

  } catch (error) {
    console.error('Error loading top companies:', error)
  }

  try {
    const response = await fetch('https://contributors.prestashop-project.org/contributors_prs.json')
    if (!response.ok) throw new Error('Error loading contributors data')

    const data = await response.json()

    // Filter out non-contributor entries and nulls (e.g., \"updatedAt\") from the JSON object
    const contributorsOnly = Object.values(data).filter(
      (item): item is Contributor =>
        item !== null && typeof item === 'object' && 'contributions' in item,
    )
    contributorsData.value = contributorsOnly
    topContributors.value = contributorsOnly.slice(0, 5)

  } catch (error) {
    console.error('Error loading contributors data:', error)
  }
})
</script>

<template>
  <div class=\"wof-container\">
    <HeaderSectionView
      :total-merged-pr=\"totalMergedPr\"
      :presta-merged-pr-by-percent=\"prestaMergedPrbyPercent\"
    />
    <main>
      <TopSectionView :top-contributors=\"topContributors\" :top-companies=\"topCompanies\" />
      <NewContributorsSectionView :new-contributors=\"newContributors\" />
      <ContributeSectionView
        contributeLink=\"https://devdocs.prestashop-project.org/9/contribute/contribute-pull-requests/\"
        slackLink=\"https://www.prestashop-project.org/slack/\"
      />
    </main>
  </div>
</template>

<style>
:root {
  --wof-section-gap: 1.5rem;
  --wof-section-padding: 2.5rem 1rem;
  --wof-section-padding-lg: 4rem;
  --wof-avatar-bg: #fff;
  --wof-jumbotron-size-sm: 2.5rem;
  --wof-h1-size-sm: 1.75rem;
}

.wof-section {
  padding: var(--wof-section-padding);
  display: flex;
  flex-direction: column;
  gap: var(--wof-section-gap);
}
@media (min-width: 768px) {
  .wof-section {
    padding: var(--wof-section-padding-lg);
  }
}
.puik-tag p {
  margin-bottom: 0;
}
a.puik-button:hover {
  text-decoration: none;
}
.puik-avatar.puik-avatar--photo {
  background-color: var(--wof-avatar-bg);
}
@media (max-width: 768px) {
  .puik-brand-jumbotron {
    font-size: var(--wof-jumbotron-size-sm);
  }
  .puik-h1 {
    font-size: var(--wof-h1-size-sm);
  }
}
</style>
", "@Modules/ps_distributionapiclient/vue-app/src/views/HomeView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/HomeView.vue");
    }
}
