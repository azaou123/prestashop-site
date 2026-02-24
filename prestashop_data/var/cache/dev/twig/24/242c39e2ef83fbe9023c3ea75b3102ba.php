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

/* @Modules/ps_distributionapiclient/vue-app/src/views/sections/NewContributorsSectionView.vue */
class __TwigTemplate_bb26e2662482d773874389fa33adbaf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/NewContributorsSectionView.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/NewContributorsSectionView.vue"));

        // line 1
        echo "<script setup lang=\"ts\">
import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Navigation } from 'vue3-carousel'
import type { NewContributor } from '@/types'

defineProps<{
  newContributors: NewContributor[]
}>()

const carousel_config = {
  itemsToShow: 1,
  gap: 16,
  snapAlign: 'center' as const,
  breakpointMode: 'carousel' as const,
  breakpoints: {
    0: {
      itemsToShow: 1,
      snapAlign: 'center' as const,
    },
    476: {
      itemsToShow: 2,
      snapAlign: 'start' as const,
    },
    992: {
      itemsToShow: 3,
      snapAlign: 'start' as const,
    },
    1024: {
      itemsToShow: 4,
      snapAlign: 'start' as const,
    },
    1200: {
      itemsToShow: 5,
      snapAlign: 'start' as const,
    },
    1600: {
      itemsToShow: 6,
      snapAlign: 'start' as const,
    },
  },
}
</script>

<template>
  <section class=\"wof-section wof-new-contributors-section\">
    <div>
      <h2 class=\"wof-new-contributors-section__title puik-h2\">👋 Say hello to our new contributors</h2>
      <p class=\"wof-new-contributors-section__description puik-body-default\">
        Fresh commits, fresh faces. Meet the contributors who just joined!
      </p>
    </div>
    <Carousel v-bind=\"carousel_config\">
      <Slide v-for=\"(newContributor, index) in newContributors\" :key=\"index\">
        <puik-card class=\"wof-new-contributors-section__card\">
          <img
            class=\"wof-new-contributors-section__img\"
            :src=\"newContributor.avatar_url\"
            :alt=\"`\${newContributor.name ?? newContributor.login} avatar`\"
          />
          <h3 class=\"puik-h3\">";
        // line 60
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["newContributor"] ?? null), "name", [], "any", true, true, false, 60) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["newContributor"] ?? null), "name", [], "any", false, false, false, 60)))) ? (twig_get_attribute($this->env, $this->source, ($context["newContributor"] ?? null), "name", [], "any", false, false, false, 60)) : (twig_get_attribute($this->env, $this->source, (isset($context["newContributor"]) || array_key_exists("newContributor", $context) ? $context["newContributor"] : (function () { throw new RuntimeError('Variable "newContributor" does not exist.', 60, $this->source); })()), "login", [], "any", false, false, false, 60))), "html", null, true);
        echo "</h3>
          <p class=\"puik-body-default\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["newContributor"]) || array_key_exists("newContributor", $context) ? $context["newContributor"] : (function () { throw new RuntimeError('Variable "newContributor" does not exist.', 61, $this->source); })()), "login", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
          <p class=\"puik-body-small\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["newContributor"]) || array_key_exists("newContributor", $context) ? $context["newContributor"] : (function () { throw new RuntimeError('Variable "newContributor" does not exist.', 62, $this->source); })()), "contributions", [], "any", false, false, false, 62), "html", null, true);
        echo " contribution";
        echo (((twig_get_attribute($this->env, $this->source, (isset($context["newContributor"]) || array_key_exists("newContributor", $context) ? $context["newContributor"] : (function () { throw new RuntimeError('Variable "newContributor" does not exist.', 62, $this->source); })()), "contributions", [], "any", false, false, false, 62) > 1)) ? ("s") : (""));
        echo "</p>
        </puik-card>
      </Slide>
      <template #addons>
        <div class=\"wof-carousel__nav-container\">
          <Navigation>
            <template #prev>
              <puik-icon icon=\"keyboard_arrow_left\" />
            </template>
            <template #next>
              <puik-icon icon=\"keyboard_arrow_right\" />
            </template>
          </Navigation>
        </div>
      </template>
    </Carousel>
  </section>
</template>

<style>
:root {
  --wof-new-contributors-section-bg: #a4dbe8;
  --wof-carousel-nav-bg: #fff;
  --wof-carousel-nav-border: #1d1d1b;
  --wof-carousel-nav-disabled-bg: #f7f7f7;
  --wof-carousel-nav-disabled-border: #ddd;
  --wof-carousel-nav-hover: #000;
}

.wof-new-contributors-section {
  background-color: var(--wof-new-contributors-section-bg);
}
.wof-new-contributors-section__card {
  flex-grow: 1;
  gap: 0;
}
.wof-new-contributors-section__card * {
  margin-bottom: 0;
}
.wof-new-contributors-section__title {
  margin-bottom: 1rem;
}
.wof-new-contributors-section__description {
  margin-bottom: 0;
  padding-right: 96px;
}
.wof-new-contributors-section__img {
  width: 100%;
  object-fit: cover;
  object-position: center;
}

.carousel {
  --vc-nav-border-radius: 50%;
  --vc-nav-width: 36px;
  --vc-nav-height: 36px;
}
.wof-carousel__nav-container {
  margin: 1rem 0 1.5rem 1rem;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  right: 0;
  bottom: 100%;
  gap: 0.5rem;
}
.wof-carousel__nav-container .carousel__next,
.wof-carousel__nav-container .carousel__prev {
  background: var(--vc-nav-background, var(--wof-carousel-nav-bg));
  background-color: var(--wof-carousel-nav-bg);
  border: 1px solid var(--wof-carousel-nav-border);
  border-radius: var(--vc-nav-border-radius);
  color: var(--vc-nav-color);
  font-size: var(--vc-nav-height);
  height: var(--vc-nav-height);
  position: relative;
  transform: translateY(0);
  width: var(--vc-nav-width);
}

.wof-carousel__nav-container .carousel__next--disabled,
.wof-carousel__nav-container .carousel__prev--disabled {
  background-color: var(--wof-carousel-nav-disabled-bg);
  border-color: var(--wof-carousel-nav-disabled-border);
  opacity: 1;
}

.wof-carousel__nav-container .carousel__next--disabled .puik-icon,
.wof-carousel__nav-container .carousel__prev--disabled .puik-icon {
  opacity: 0.3;
}

.wof-carousel__nav-container .carousel__next:hover,
.wof-carousel__nav-container .carousel__prev:hover {
  color: var(--wof-carousel-nav-hover);
}
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/vue-app/src/views/sections/NewContributorsSectionView.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 62,  108 => 61,  104 => 60,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script setup lang=\"ts\">
import 'vue3-carousel/carousel.css'
import { Carousel, Slide, Navigation } from 'vue3-carousel'
import type { NewContributor } from '@/types'

defineProps<{
  newContributors: NewContributor[]
}>()

const carousel_config = {
  itemsToShow: 1,
  gap: 16,
  snapAlign: 'center' as const,
  breakpointMode: 'carousel' as const,
  breakpoints: {
    0: {
      itemsToShow: 1,
      snapAlign: 'center' as const,
    },
    476: {
      itemsToShow: 2,
      snapAlign: 'start' as const,
    },
    992: {
      itemsToShow: 3,
      snapAlign: 'start' as const,
    },
    1024: {
      itemsToShow: 4,
      snapAlign: 'start' as const,
    },
    1200: {
      itemsToShow: 5,
      snapAlign: 'start' as const,
    },
    1600: {
      itemsToShow: 6,
      snapAlign: 'start' as const,
    },
  },
}
</script>

<template>
  <section class=\"wof-section wof-new-contributors-section\">
    <div>
      <h2 class=\"wof-new-contributors-section__title puik-h2\">👋 Say hello to our new contributors</h2>
      <p class=\"wof-new-contributors-section__description puik-body-default\">
        Fresh commits, fresh faces. Meet the contributors who just joined!
      </p>
    </div>
    <Carousel v-bind=\"carousel_config\">
      <Slide v-for=\"(newContributor, index) in newContributors\" :key=\"index\">
        <puik-card class=\"wof-new-contributors-section__card\">
          <img
            class=\"wof-new-contributors-section__img\"
            :src=\"newContributor.avatar_url\"
            :alt=\"`\${newContributor.name ?? newContributor.login} avatar`\"
          />
          <h3 class=\"puik-h3\">{{ newContributor.name ?? newContributor.login}}</h3>
          <p class=\"puik-body-default\">{{ newContributor.login }}</p>
          <p class=\"puik-body-small\">{{ newContributor.contributions }} contribution{{ newContributor.contributions > 1 ? \"s\" : \"\" }}</p>
        </puik-card>
      </Slide>
      <template #addons>
        <div class=\"wof-carousel__nav-container\">
          <Navigation>
            <template #prev>
              <puik-icon icon=\"keyboard_arrow_left\" />
            </template>
            <template #next>
              <puik-icon icon=\"keyboard_arrow_right\" />
            </template>
          </Navigation>
        </div>
      </template>
    </Carousel>
  </section>
</template>

<style>
:root {
  --wof-new-contributors-section-bg: #a4dbe8;
  --wof-carousel-nav-bg: #fff;
  --wof-carousel-nav-border: #1d1d1b;
  --wof-carousel-nav-disabled-bg: #f7f7f7;
  --wof-carousel-nav-disabled-border: #ddd;
  --wof-carousel-nav-hover: #000;
}

.wof-new-contributors-section {
  background-color: var(--wof-new-contributors-section-bg);
}
.wof-new-contributors-section__card {
  flex-grow: 1;
  gap: 0;
}
.wof-new-contributors-section__card * {
  margin-bottom: 0;
}
.wof-new-contributors-section__title {
  margin-bottom: 1rem;
}
.wof-new-contributors-section__description {
  margin-bottom: 0;
  padding-right: 96px;
}
.wof-new-contributors-section__img {
  width: 100%;
  object-fit: cover;
  object-position: center;
}

.carousel {
  --vc-nav-border-radius: 50%;
  --vc-nav-width: 36px;
  --vc-nav-height: 36px;
}
.wof-carousel__nav-container {
  margin: 1rem 0 1.5rem 1rem;
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  right: 0;
  bottom: 100%;
  gap: 0.5rem;
}
.wof-carousel__nav-container .carousel__next,
.wof-carousel__nav-container .carousel__prev {
  background: var(--vc-nav-background, var(--wof-carousel-nav-bg));
  background-color: var(--wof-carousel-nav-bg);
  border: 1px solid var(--wof-carousel-nav-border);
  border-radius: var(--vc-nav-border-radius);
  color: var(--vc-nav-color);
  font-size: var(--vc-nav-height);
  height: var(--vc-nav-height);
  position: relative;
  transform: translateY(0);
  width: var(--vc-nav-width);
}

.wof-carousel__nav-container .carousel__next--disabled,
.wof-carousel__nav-container .carousel__prev--disabled {
  background-color: var(--wof-carousel-nav-disabled-bg);
  border-color: var(--wof-carousel-nav-disabled-border);
  opacity: 1;
}

.wof-carousel__nav-container .carousel__next--disabled .puik-icon,
.wof-carousel__nav-container .carousel__prev--disabled .puik-icon {
  opacity: 0.3;
}

.wof-carousel__nav-container .carousel__next:hover,
.wof-carousel__nav-container .carousel__prev:hover {
  color: var(--wof-carousel-nav-hover);
}
</style>
", "@Modules/ps_distributionapiclient/vue-app/src/views/sections/NewContributorsSectionView.vue", "/var/www/html/modules/ps_distributionapiclient/vue-app/src/views/sections/NewContributorsSectionView.vue");
    }
}
