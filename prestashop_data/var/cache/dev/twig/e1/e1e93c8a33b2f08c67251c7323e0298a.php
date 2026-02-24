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

/* @Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopCompaniesView.vue */
class __TwigTemplate_ca116c7b81dbd3d5137ae4e77e4125f9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopCompaniesView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopCompaniesView.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
import { ref } from 'vue'
import TopCard from '@/views/components/TopCard.vue'
import type { PuikTableHeader } from '@prestashopcorp/puik-components'
import type { Company } from '@/types'

defineProps<{
  topCompanies: Company[]
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
    text: 'Logo',
    value: 'logo',
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
    value: 'merged_pull_requests',
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

</script>

<template>
  <TopCard
    title=\"🚀 Top companies\"
    description=\"Meet the top companies who are helping us strengthen PrestaShop.\"
    :headers=\"headers\"
    :items=\"topCompanies\"
    :stickyLastCol=\"stickyLastCol\"
    :full-width=\"fullWidth\"
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
        // line 71
        echo twig_escape_filter($this->env, ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 71, $this->source); })()) + 1), "html", null, true);
        echo "</span>
      </div>
    </template>

    <template #item-logo=\"{ item }\">
      <puik-avatar v-if=\"item.avatar_url\" size=\"large\" type=\"photo\" :src=\"item.avatar_url\" />
      <puik-avatar v-else size=\"large\" :first-name=\"item.name\" :single-initial=\"false\" />
    </template>

    <template #item-name=\"{ item }\">
      <div class=\"wof-top-contributors__name\">
        <span class=\"puik-body-default\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 82, $this->source); })()), "name", [], "any", false, false, false, 82), "html", null, true);
        echo "</span>
      </div>
    </template>
    <template #item-actions=\"{ item }\">
      <a
        :href=\"item.html_url\"
        target=\"_blank\"
        aria-label=\"view profile\"
        rel=\"noopener noreferrer\"
      >
        <puik-button
          variant=\"text\"
          right-icon=\"visibility\"
          aria-label=\"view profile icon\"
        />
      </a>
    </template>
  </TopCard>
</template>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopCompaniesView.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 82,  115 => 71,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
import { ref } from 'vue'
import TopCard from '@/views/components/TopCard.vue'
import type { PuikTableHeader } from '@prestashopcorp/puik-components'
import type { Company } from '@/types'

defineProps<{
  topCompanies: Company[]
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
    text: 'Logo',
    value: 'logo',
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
    value: 'merged_pull_requests',
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

</script>

<template>
  <TopCard
    title=\"🚀 Top companies\"
    description=\"Meet the top companies who are helping us strengthen PrestaShop.\"
    :headers=\"headers\"
    :items=\"topCompanies\"
    :stickyLastCol=\"stickyLastCol\"
    :full-width=\"fullWidth\"
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

    <template #item-logo=\"{ item }\">
      <puik-avatar v-if=\"item.avatar_url\" size=\"large\" type=\"photo\" :src=\"item.avatar_url\" />
      <puik-avatar v-else size=\"large\" :first-name=\"item.name\" :single-initial=\"false\" />
    </template>

    <template #item-name=\"{ item }\">
      <div class=\"wof-top-contributors__name\">
        <span class=\"puik-body-default\">{{ item.name }}</span>
      </div>
    </template>
    <template #item-actions=\"{ item }\">
      <a
        :href=\"item.html_url\"
        target=\"_blank\"
        aria-label=\"view profile\"
        rel=\"noopener noreferrer\"
      >
        <puik-button
          variant=\"text\"
          right-icon=\"visibility\"
          aria-label=\"view profile icon\"
        />
      </a>
    </template>
  </TopCard>
</template>
", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopCompaniesView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/sections/sub-sections/TopCompaniesView.vue");
    }
}
