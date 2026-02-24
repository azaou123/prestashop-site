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

/* @Modules/blockwishlist/_dev/front/js/container/WishlistContainer/WishlistContainer.vue */
class __TwigTemplate_ebd47cd5b249362bc33ec65e1a8bb460 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/container/WishlistContainer/WishlistContainer.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/container/WishlistContainer/WishlistContainer.vue"));

        // line 1
        echo "<!--**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *-->
<template>
  <div class=\"wishlist-container\">
    <div class=\"wishlist-container-header\">
      <h1>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</h1>

      <a
        @click=\"openNewWishlistModal\"
        class=\"wishlist-add-to-new text-primary\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["addText"]) || array_key_exists("addText", $context) ? $context["addText"] : (function () { throw new RuntimeError('Variable "addText" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "
      </a>
    </div>

    <section
      id=\"content\"
      class=\"page-content card card-block\"
    >
      <list
        :items=\"lists\"
        :rename-text=\"renameText\"
        :share-text=\"shareText\"
        :empty-text=\"emptyText\"
        :loading=\"\$apollo.queries.lists.loading\"
      />
    </section>
  </div>
</template>

<script>
  import List from '@components/List/List';
  import getLists from '@graphqlFiles/queries/getlists';
  import EventBus from '@components/EventBus';

  /**
   * This component act as a smart component wich will handle every actions of the list one
   */
  export default {
    name: 'WishlistContainer',
    components: {
      List,
    },
    apollo: {
      lists: {
        query: getLists,
        variables() {
          return {
            url: this.url,
          };
        },
      },
    },
    props: {
      url: {
        type: String,
        required: true,
      },
      title: {
        type: String,
        required: true,
      },
      addText: {
        type: String,
        required: true,
      },
      renameText: {
        type: String,
        required: true,
      },
      emptyText: {
        type: String,
        required: true,
      },
      shareText: {
        type: String,
        required: true,
      },
    },
    data() {
      return {
        lists: [],
      };
    },
    methods: {
      /**
       * Send an event to opoen the Create Wishlist Modal
       */
      openNewWishlistModal() {
        EventBus.\$emit('showCreateWishlist');
      },
    },
    mounted() {
      /**
       * Register to the event refetchList so if an other component update it, this one can update his list
       *
       * @param {String} 'refetchList' The event I decided to create to communicate between VueJS Apps
       */
      EventBus.\$on('refetchList', () => {
        this.\$apollo.queries.lists.refetch();
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-container {
      &-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.25rem;
      }

      @at-root #main & .card.page-content {
        padding: 0;
        margin-bottom: 0.75rem;
      }
    }

    &-add-to-new {
      cursor: pointer;
      transition: 0.2s ease-out;
      font-size: 0.875rem;
      letter-spacing: 0;
      line-height: 1rem;

      &:hover {
        opacity: 0.7;
      }

      i {
        margin-right: 0.3125rem;
        vertical-align: middle;
        margin-top: -0.125rem;
        font-size: 1.25rem;
      }
    }
  }

  @media screen and (max-width: 768px) {
    .wishlist {
      &-container {
        .page-content.card {
          box-shadow: 0.125rem 0.125rem 0.5rem 0 rgba(0, 0, 0, 0.2);
          background-color: #fff;
          margin-top: 1.25rem;
        }
      }
    }
  }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/js/container/WishlistContainer/WishlistContainer.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 29,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *-->
<template>
  <div class=\"wishlist-container\">
    <div class=\"wishlist-container-header\">
      <h1>{{ title }}</h1>

      <a
        @click=\"openNewWishlistModal\"
        class=\"wishlist-add-to-new text-primary\"
      >
        <i class=\"material-icons\">add_circle_outline</i>
        {{ addText }}
      </a>
    </div>

    <section
      id=\"content\"
      class=\"page-content card card-block\"
    >
      <list
        :items=\"lists\"
        :rename-text=\"renameText\"
        :share-text=\"shareText\"
        :empty-text=\"emptyText\"
        :loading=\"\$apollo.queries.lists.loading\"
      />
    </section>
  </div>
</template>

<script>
  import List from '@components/List/List';
  import getLists from '@graphqlFiles/queries/getlists';
  import EventBus from '@components/EventBus';

  /**
   * This component act as a smart component wich will handle every actions of the list one
   */
  export default {
    name: 'WishlistContainer',
    components: {
      List,
    },
    apollo: {
      lists: {
        query: getLists,
        variables() {
          return {
            url: this.url,
          };
        },
      },
    },
    props: {
      url: {
        type: String,
        required: true,
      },
      title: {
        type: String,
        required: true,
      },
      addText: {
        type: String,
        required: true,
      },
      renameText: {
        type: String,
        required: true,
      },
      emptyText: {
        type: String,
        required: true,
      },
      shareText: {
        type: String,
        required: true,
      },
    },
    data() {
      return {
        lists: [],
      };
    },
    methods: {
      /**
       * Send an event to opoen the Create Wishlist Modal
       */
      openNewWishlistModal() {
        EventBus.\$emit('showCreateWishlist');
      },
    },
    mounted() {
      /**
       * Register to the event refetchList so if an other component update it, this one can update his list
       *
       * @param {String} 'refetchList' The event I decided to create to communicate between VueJS Apps
       */
      EventBus.\$on('refetchList', () => {
        this.\$apollo.queries.lists.refetch();
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-container {
      &-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 1.25rem;
      }

      @at-root #main & .card.page-content {
        padding: 0;
        margin-bottom: 0.75rem;
      }
    }

    &-add-to-new {
      cursor: pointer;
      transition: 0.2s ease-out;
      font-size: 0.875rem;
      letter-spacing: 0;
      line-height: 1rem;

      &:hover {
        opacity: 0.7;
      }

      i {
        margin-right: 0.3125rem;
        vertical-align: middle;
        margin-top: -0.125rem;
        font-size: 1.25rem;
      }
    }
  }

  @media screen and (max-width: 768px) {
    .wishlist {
      &-container {
        .page-content.card {
          box-shadow: 0.125rem 0.125rem 0.5rem 0 rgba(0, 0, 0, 0.2);
          background-color: #fff;
          margin-top: 1.25rem;
        }
      }
    }
  }
</style>
", "@Modules/blockwishlist/_dev/front/js/container/WishlistContainer/WishlistContainer.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/container/WishlistContainer/WishlistContainer.vue");
    }
}
