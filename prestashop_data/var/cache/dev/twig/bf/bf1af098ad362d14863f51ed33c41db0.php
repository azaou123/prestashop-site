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

/* @Modules/ps_distributionapiclient/vue-app/src/views/components/TopCard.vue */
class __TwigTemplate_d2812a01bccc720cff1e62f980c5374d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/components/TopCard.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/components/TopCard.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
import { type PuikTableHeader } from '@prestashopcorp/puik-components'

defineProps<{
  title: string
  description?: string
  externalLinkHref?: string
  externalLinkContent?: string
  headers: PuikTableHeader[]
  items: any[]
  stickyLastCol?: boolean
  fullWidth?: boolean
}>()

const emit = defineEmits<{
  (e: 'view', item: any): void
  (e: 'action', payload: any): void
}>()
</script>

<template>
  <puik-card class=\"wof-top-card\">
    <div class=\"wof-top-card__title-container\">
      <h3 class=\"wof-top-card__title puik-h2\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</h3>
      <puik-button
        v-if=\"externalLinkContent && externalLinkHref\"
        variant=\"secondary\"
        :aria-label=\"externalLinkContent\"
        class=\"wof-top-card__external-link\"
      >
        <puik-link
          :href=\"externalLinkHref\"
          target=\"_blank\"
          :aria-label=\"externalLinkContent\"
        >
          ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["externalLinkContent"]) || array_key_exists("externalLinkContent", $context) ? $context["externalLinkContent"] : (function () { throw new RuntimeError('Variable "externalLinkContent" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "
        </puik-link>
      </puik-button>
    </div>
    <p v-if=\"description\" class=\"wof-top-card__description puik-body-default\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</p>

    <puik-table
      v-if=\"items?.length\"
      :headers=\"headers\"
      :items=\"items\"
      :stickyLastCol=\"stickyLastCol\"
      :fullWidth=\"fullWidth\"
    >
      <template
        v-for=\"header in headers\"
        :key=\"header.value\"
        v-slot:[`item-\${header.value}`]=\"slotProps\"
      >
        <slot
          :name=\"`item-\${header.value}`\"
          v-bind=\"slotProps\"
        >
          <span class=\"puik-body-default\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slotProps"]) || array_key_exists("slotProps", $context) ? $context["slotProps"] : (function () { throw new RuntimeError('Variable "slotProps" does not exist.', 58, $this->source); })()), "item", [], "any", false, false, false, 58), twig_get_attribute($this->env, $this->source, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 58, $this->source); })()), "value", [], "any", false, false, false, 58), [], "array", false, false, false, 58), "html", null, true);
        echo "</span>
        </slot>
      </template>
    </puik-table>
  </puik-card>
</template>

<style>
:root {
  --wof-top-card-title-size-sm: 1.25rem;
}
.wof-top-card {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  max-width: 100%;
  gap: 0 !important;
}
.wof-top-card__title-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.wof-top-card__title,
.wof-top-card__description,
.wof-top-card__external-link {
  margin-bottom: 1rem;
}
@media (max-width: 768px) {
  .wof-top-card__title {
    font-size: var(--wof-top-card-title-size-sm);
  }

}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/components/TopCard.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 58,  90 => 40,  83 => 36,  68 => 24,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
import { type PuikTableHeader } from '@prestashopcorp/puik-components'

defineProps<{
  title: string
  description?: string
  externalLinkHref?: string
  externalLinkContent?: string
  headers: PuikTableHeader[]
  items: any[]
  stickyLastCol?: boolean
  fullWidth?: boolean
}>()

const emit = defineEmits<{
  (e: 'view', item: any): void
  (e: 'action', payload: any): void
}>()
</script>

<template>
  <puik-card class=\"wof-top-card\">
    <div class=\"wof-top-card__title-container\">
      <h3 class=\"wof-top-card__title puik-h2\">{{ title }}</h3>
      <puik-button
        v-if=\"externalLinkContent && externalLinkHref\"
        variant=\"secondary\"
        :aria-label=\"externalLinkContent\"
        class=\"wof-top-card__external-link\"
      >
        <puik-link
          :href=\"externalLinkHref\"
          target=\"_blank\"
          :aria-label=\"externalLinkContent\"
        >
          {{ externalLinkContent }}
        </puik-link>
      </puik-button>
    </div>
    <p v-if=\"description\" class=\"wof-top-card__description puik-body-default\">{{ description }}</p>

    <puik-table
      v-if=\"items?.length\"
      :headers=\"headers\"
      :items=\"items\"
      :stickyLastCol=\"stickyLastCol\"
      :fullWidth=\"fullWidth\"
    >
      <template
        v-for=\"header in headers\"
        :key=\"header.value\"
        v-slot:[`item-\${header.value}`]=\"slotProps\"
      >
        <slot
          :name=\"`item-\${header.value}`\"
          v-bind=\"slotProps\"
        >
          <span class=\"puik-body-default\">{{ slotProps.item[header.value] }}</span>
        </slot>
      </template>
    </puik-table>
  </puik-card>
</template>

<style>
:root {
  --wof-top-card-title-size-sm: 1.25rem;
}
.wof-top-card {
  display: flex;
  flex-direction: column;
  flex-grow: 1;
  max-width: 100%;
  gap: 0 !important;
}
.wof-top-card__title-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.wof-top-card__title,
.wof-top-card__description,
.wof-top-card__external-link {
  margin-bottom: 1rem;
}
@media (max-width: 768px) {
  .wof-top-card__title {
    font-size: var(--wof-top-card-title-size-sm);
  }

}
</style>
", "@Modules/ps_distributionapiclient/vue-app/src/views/components/TopCard.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/components/TopCard.vue");
    }
}
