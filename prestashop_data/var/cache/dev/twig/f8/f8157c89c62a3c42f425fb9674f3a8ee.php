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

/* @Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopContributorsView.vue */
class __TwigTemplate_9f58f40c3d95943c88d244761405bab0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopContributorsView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopContributorsView.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
import { ref } from 'vue'
import TopCard from '@/views/components/TopCard.vue'
import TopModal from '@/views/components/TopModal.vue'
import type { PuikTableHeader } from '@prestashopcorp/puik-components'
import type { Contributor } from '@/types'

defineProps<{
  topContributors: Contributor[]
}>()

const headers: PuikTableHeader[] = [
  {
    text: 'Rank',
    value: 'rank',
    size: 'sm',
    align: 'center',
    searchable: false,
  },
  {
    text: 'Avatar',
    value: 'avatar',
    size: 'sm',
    align: 'center',
    searchable: false,
  },
  {
    text: 'Name',
    value: 'name',
    size: 'md',
    align: 'left',
    searchable: true,
  },
  {
    text: 'Contributions',
    value: 'mergedPullRequests',
    size: 'sm',
    align: 'center',
    searchable: false,
  },
  {
    value: 'actions',
    size: 'sm',
    align: 'center',
    preventExpand: true,
    searchSubmit: true,
  },
]
const stickyLastCol = ref(false)
const fullWidth = ref(true)

const modalContributorItem = ref()
const isModalOpen = ref(false)
const openModal = (contributor: any) => {
  modalContributorItem.value = contributor
  isModalOpen.value = true
}
const closeModal = () => {
  isModalOpen.value = false
}
</script>

<template>
  <TopCard
    title=\"🔥 Top contributors\"
    description=\"These experts spent hours improving PrestaShop's quality.\"
    external-link-content=\"View all\"
    external-link-href=\"https://contributors.prestashop-project.org/\"
    :headers=\"headers\"
    :items=\"topContributors\"
    :stickyLastCol=\"stickyLastCol\"
    :full-width=\"fullWidth\"
    @view=\"openModal\"
  >
    <template #item-rank=\"{ index }\">
      <div
        :class=\"[
          'wof-top-section__rank',
          { 'wof-top-section__rank--first': index === 0 },
          { 'wof-top-section__rank--second': index === 1 },
          { 'wof-top-section__rank--third': index === 2 }
        ]\"
      >
        <span class=\"puik-body-default-bold\">";
        // line 84
        echo twig_escape_filter($this->env, ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 84, $this->source); })()) + 1), "html", null, true);
        echo "</span>
      </div>
    </template>

    <template #item-avatar=\"{ item }\">
      <puik-avatar size=\"large\" type=\"photo\" :src=\"item.avatar_url\" />
    </template>

    <template #item-name=\"{ item }\">
      <div class=\"wof-top-contributors__name\">
        <span v-if=\"item.name\" class=\"puik-body-default\">";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 94, $this->source); })()), "name", [], "any", false, false, false, 94), "html", null, true);
        echo "</span>
        <puik-tag v-if=\"item.company\" :content=\"item.company\" variant=\"blue\" />
      </div>
    </template>

    <template #item-actions=\"{ item }\">
      <puik-button
        @click=\"openModal(item)\"
        variant=\"text\"
        right-icon=\"visibility\"
        aria-label=\"view profile\"
      />
    </template>
  </TopCard>

  <TopModal
    v-if=\"modalContributorItem\"
    :contributor=\"modalContributorItem\"
    :isOpen=\"isModalOpen\"
    @close=\"closeModal\"
  />
</template>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopContributorsView.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 94,  128 => 84,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
import { ref } from 'vue'
import TopCard from '@/views/components/TopCard.vue'
import TopModal from '@/views/components/TopModal.vue'
import type { PuikTableHeader } from '@prestashopcorp/puik-components'
import type { Contributor } from '@/types'

defineProps<{
  topContributors: Contributor[]
}>()

const headers: PuikTableHeader[] = [
  {
    text: 'Rank',
    value: 'rank',
    size: 'sm',
    align: 'center',
    searchable: false,
  },
  {
    text: 'Avatar',
    value: 'avatar',
    size: 'sm',
    align: 'center',
    searchable: false,
  },
  {
    text: 'Name',
    value: 'name',
    size: 'md',
    align: 'left',
    searchable: true,
  },
  {
    text: 'Contributions',
    value: 'mergedPullRequests',
    size: 'sm',
    align: 'center',
    searchable: false,
  },
  {
    value: 'actions',
    size: 'sm',
    align: 'center',
    preventExpand: true,
    searchSubmit: true,
  },
]
const stickyLastCol = ref(false)
const fullWidth = ref(true)

const modalContributorItem = ref()
const isModalOpen = ref(false)
const openModal = (contributor: any) => {
  modalContributorItem.value = contributor
  isModalOpen.value = true
}
const closeModal = () => {
  isModalOpen.value = false
}
</script>

<template>
  <TopCard
    title=\"🔥 Top contributors\"
    description=\"These experts spent hours improving PrestaShop's quality.\"
    external-link-content=\"View all\"
    external-link-href=\"https://contributors.prestashop-project.org/\"
    :headers=\"headers\"
    :items=\"topContributors\"
    :stickyLastCol=\"stickyLastCol\"
    :full-width=\"fullWidth\"
    @view=\"openModal\"
  >
    <template #item-rank=\"{ index }\">
      <div
        :class=\"[
          'wof-top-section__rank',
          { 'wof-top-section__rank--first': index === 0 },
          { 'wof-top-section__rank--second': index === 1 },
          { 'wof-top-section__rank--third': index === 2 }
        ]\"
      >
        <span class=\"puik-body-default-bold\">{{ index + 1 }}</span>
      </div>
    </template>

    <template #item-avatar=\"{ item }\">
      <puik-avatar size=\"large\" type=\"photo\" :src=\"item.avatar_url\" />
    </template>

    <template #item-name=\"{ item }\">
      <div class=\"wof-top-contributors__name\">
        <span v-if=\"item.name\" class=\"puik-body-default\">{{ item.name }}</span>
        <puik-tag v-if=\"item.company\" :content=\"item.company\" variant=\"blue\" />
      </div>
    </template>

    <template #item-actions=\"{ item }\">
      <puik-button
        @click=\"openModal(item)\"
        variant=\"text\"
        right-icon=\"visibility\"
        aria-label=\"view profile\"
      />
    </template>
  </TopCard>

  <TopModal
    v-if=\"modalContributorItem\"
    :contributor=\"modalContributorItem\"
    :isOpen=\"isModalOpen\"
    @close=\"closeModal\"
  />
</template>
", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopContributorsView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopContributorsView.vue");
    }
}
