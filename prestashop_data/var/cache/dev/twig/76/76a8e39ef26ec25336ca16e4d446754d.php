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

/* @Modules/blockwishlist/_dev/front/js/components/List/List.vue */
class __TwigTemplate_c77acd3498019a3804bab61e7f78f73f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/List/List.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/List/List.vue"));

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
  <div class=\"wishlist-list-container\">
    <ul
      class=\"wishlist-list\"
      v-if=\"items.length > 0 && items\"
      v-click-outside=\"emptyPopups\"
    >
      <li
        class=\"wishlist-list-item\"
        :key=\"list.id_wishlist\"
        v-for=\"list of items\"
        :class=\"{ 'wishlist-list-item-default': list.default }\"
      >
        <a
          class=\"wishlist-list-item-link\"
          @click=\"redirectToList(list.listUrl)\"
        >
          <p class=\"wishlist-list-item-title\">
            ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), "html", null, true);
        echo "
            <span v-if=\"list.nbProducts\">(";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 38, $this->source); })()), "nbProducts", [], "any", false, false, false, 38), "html", null, true);
        echo ")</span>
            <span v-else>(0)</span>
          </p>

          <div class=\"wishlist-list-item-right\">
            <button
              class=\"wishlist-list-item-actions\"
              @click.stop=\"togglePopup(list.id_wishlist)\"
              v-if=\"!list.default\"
            >
              <i class=\"material-icons\">more_vert</i>
            </button>

            <button
              @click.stop=\"toggleShare(list.id_wishlist, list.shareUrl)\"
              v-if=\"list.default\"
            >
              <i class=\"material-icons\">share</i>
            </button>

            <div
              class=\"dropdown-menu show\"
              v-if=\"activeDropdowns.includes(list.id_wishlist)\"
            >
              <button @click.stop=\"toggleRename(list.id_wishlist, list.name)\">
                ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["renameText"]) || array_key_exists("renameText", $context) ? $context["renameText"] : (function () { throw new RuntimeError('Variable "renameText" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "
              </button>
              <button
                @click.stop=\"toggleShare(list.id_wishlist, list.shareUrl)\"
              >
                ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["shareText"]) || array_key_exists("shareText", $context) ? $context["shareText"] : (function () { throw new RuntimeError('Variable "shareText" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "
              </button>
            </div>

            <button
              @click.stop=\"toggleDelete(list.id_wishlist, list.name)\"
              v-if=\"!list.default\"
            >
              <i class=\"material-icons\">delete</i>
            </button>
          </div>
        </a>
      </li>
    </ul>

    <ContentLoader
      v-if=\"loading\"
      class=\"wishlist-list-loader\"
      height=\"105\"
    >
      <rect
        x=\"0\"
        y=\"12\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"36\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"60\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"84\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
    </ContentLoader>
    <p
      class=\"wishlist-list-empty\"
      v-if=\"items.length <= 0 && !loading\"
    >
      ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["emptyText"]) || array_key_exists("emptyText", $context) ? $context["emptyText"] : (function () { throw new RuntimeError('Variable "emptyText" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "
    </p>
  </div>
</template>

<script>
  import {ContentLoader} from 'vue-content-loader';
  import EventBus from '@components/EventBus';
  import wishlistUrl from 'wishlistUrl';
  import vClickOutside from 'v-click-outside';

  /**
   * Dumb component to display the list of Wishlist on a page
   */
  export default {
    name: 'List',
    components: {
      ContentLoader,
    },
    data() {
      return {
        activeDropdowns: [],
        listUrl: wishlistUrl,
      };
    },
    props: {
      items: {
        type: Array,
        default: () => [],
      },
      renameText: {
        type: String,
        default: 'Rename',
      },
      emptyText: {
        type: String,
        default: '',
      },
      shareText: {
        type: String,
        default: 'Share',
      },
      loading: {
        type: Boolean,
        default: true,
      },
    },
    methods: {
      /**
       * Toggle a dropdown with some actions
       *
       * @param {Int} id The ID of the list which contain this dropdown
       */
      togglePopup(id) {
        if (this.activeDropdowns.includes(id)) {
          this.activeDropdowns = this.activeDropdowns.filter((e) => e !== id);
        } else {
          this.activeDropdowns = [];
          this.activeDropdowns.push(id);
        }
      },
      emptyPopups() {
        this.activeDropdowns = [];
      },
      /**
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleRename(id, title) {
        EventBus.\$emit('showRenameWishlist', {
          detail: {listId: id, title},
        });
      },
      /**
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleShare(id, shareUrl) {
        EventBus.\$emit('showShareWishlist', {
          detail: {listId: id, shareUrl},
        });
      },
      /**
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleDelete(id) {
        EventBus.\$emit('showDeleteWishlist', {
          detail: {listId: id, userId: 1},
        });
      },
      /**
       * Redirect to the list URI
       *
       * @param {String} listUrl The list url
       */
      redirectToList(listUrl) {
        window.location.href = listUrl;
      },
    },
    directives: {
      clickOutside: vClickOutside.directive,
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-list {
      margin-bottom: 0;

      &-empty {
        font-size: 1.875rem;
        text-align: center;
        padding: 1.875rem;
        padding-bottom: 1.25rem;
        font-weight: bold;
        color: #000;
      }

      &-loader {
        padding: 0 1.25rem;
        width: 100%;
      }

      &-item {
        &-default {
          border-bottom: 1px solid #0000002e;
        }

        &:hover {
          cursor: pointer;

          .wishlist-list-item-title {
            color: \$blue;
          }
        }

        &-link {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 1.5rem 1.25rem;
        }

        .dropdown-menu {
          right: 1.25rem;
          left: inherit;
          display: flex;
          flex-direction: column;
        }

        &-right {
          position: relative;
          white-space: nowrap;

          > button {
            transition: 0.25s ease-out;

            &:hover {
              opacity: 0.6;
            }

            i {
              color: #7a7a7a;
            }
          }

          .dropdown-menu {
            box-sizing: border-box;
            border: 1px solid #e5e5e5;
            border-radius: 0.25rem;
            background-color: #ffffff;
            box-shadow: 0.125rem 0.125rem 0.625rem 0 rgba(0, 0, 0, 0.2);
            padding: 0;
            overflow: hidden;

            > button {
              padding: 0.625rem 1.25rem;
              transition: 0.2s ease-out;
              text-align: left;

              &:hover {
                background-color: #f1f1f1;
              }
            }
          }
        }

        &-title {
          color: #232323;
          font-size: 1rem;
          font-weight: bold;
          letter-spacing: 0;
          line-height: 1.375rem;
          margin-bottom: 0;
          word-break: break-word;

          span {
            color: #7a7a7a;
            font-size: 1rem;
            letter-spacing: 0;
            line-height: 1.375rem;
            font-weight: normal;
            margin-left: 0.3125rem;
          }
        }

        button {
          cursor: pointer;
          border: none;
          background: none;

          &:focus {
            outline: 0;
          }
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
        return "@Modules/blockwishlist/_dev/front/js/components/List/List.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 125,  121 => 68,  113 => 63,  85 => 38,  81 => 37,  43 => 1,);
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
  <div class=\"wishlist-list-container\">
    <ul
      class=\"wishlist-list\"
      v-if=\"items.length > 0 && items\"
      v-click-outside=\"emptyPopups\"
    >
      <li
        class=\"wishlist-list-item\"
        :key=\"list.id_wishlist\"
        v-for=\"list of items\"
        :class=\"{ 'wishlist-list-item-default': list.default }\"
      >
        <a
          class=\"wishlist-list-item-link\"
          @click=\"redirectToList(list.listUrl)\"
        >
          <p class=\"wishlist-list-item-title\">
            {{ list.name }}
            <span v-if=\"list.nbProducts\">({{ list.nbProducts }})</span>
            <span v-else>(0)</span>
          </p>

          <div class=\"wishlist-list-item-right\">
            <button
              class=\"wishlist-list-item-actions\"
              @click.stop=\"togglePopup(list.id_wishlist)\"
              v-if=\"!list.default\"
            >
              <i class=\"material-icons\">more_vert</i>
            </button>

            <button
              @click.stop=\"toggleShare(list.id_wishlist, list.shareUrl)\"
              v-if=\"list.default\"
            >
              <i class=\"material-icons\">share</i>
            </button>

            <div
              class=\"dropdown-menu show\"
              v-if=\"activeDropdowns.includes(list.id_wishlist)\"
            >
              <button @click.stop=\"toggleRename(list.id_wishlist, list.name)\">
                {{ renameText }}
              </button>
              <button
                @click.stop=\"toggleShare(list.id_wishlist, list.shareUrl)\"
              >
                {{ shareText }}
              </button>
            </div>

            <button
              @click.stop=\"toggleDelete(list.id_wishlist, list.name)\"
              v-if=\"!list.default\"
            >
              <i class=\"material-icons\">delete</i>
            </button>
          </div>
        </a>
      </li>
    </ul>

    <ContentLoader
      v-if=\"loading\"
      class=\"wishlist-list-loader\"
      height=\"105\"
    >
      <rect
        x=\"0\"
        y=\"12\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"36\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"60\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
      <rect
        x=\"0\"
        y=\"84\"
        rx=\"3\"
        ry=\"0\"
        width=\"100%\"
        height=\"11\"
      />
    </ContentLoader>
    <p
      class=\"wishlist-list-empty\"
      v-if=\"items.length <= 0 && !loading\"
    >
      {{ emptyText }}
    </p>
  </div>
</template>

<script>
  import {ContentLoader} from 'vue-content-loader';
  import EventBus from '@components/EventBus';
  import wishlistUrl from 'wishlistUrl';
  import vClickOutside from 'v-click-outside';

  /**
   * Dumb component to display the list of Wishlist on a page
   */
  export default {
    name: 'List',
    components: {
      ContentLoader,
    },
    data() {
      return {
        activeDropdowns: [],
        listUrl: wishlistUrl,
      };
    },
    props: {
      items: {
        type: Array,
        default: () => [],
      },
      renameText: {
        type: String,
        default: 'Rename',
      },
      emptyText: {
        type: String,
        default: '',
      },
      shareText: {
        type: String,
        default: 'Share',
      },
      loading: {
        type: Boolean,
        default: true,
      },
    },
    methods: {
      /**
       * Toggle a dropdown with some actions
       *
       * @param {Int} id The ID of the list which contain this dropdown
       */
      togglePopup(id) {
        if (this.activeDropdowns.includes(id)) {
          this.activeDropdowns = this.activeDropdowns.filter((e) => e !== id);
        } else {
          this.activeDropdowns = [];
          this.activeDropdowns.push(id);
        }
      },
      emptyPopups() {
        this.activeDropdowns = [];
      },
      /**
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleRename(id, title) {
        EventBus.\$emit('showRenameWishlist', {
          detail: {listId: id, title},
        });
      },
      /**
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleShare(id, shareUrl) {
        EventBus.\$emit('showShareWishlist', {
          detail: {listId: id, shareUrl},
        });
      },
      /**
       * Toggle the popup to rename a list
       *
       * @param {Int} id The list ID so the rename popup know which list to rename
       * @param {String} The base title so the rename popup can autofill it
       */
      toggleDelete(id) {
        EventBus.\$emit('showDeleteWishlist', {
          detail: {listId: id, userId: 1},
        });
      },
      /**
       * Redirect to the list URI
       *
       * @param {String} listUrl The list url
       */
      redirectToList(listUrl) {
        window.location.href = listUrl;
      },
    },
    directives: {
      clickOutside: vClickOutside.directive,
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-list {
      margin-bottom: 0;

      &-empty {
        font-size: 1.875rem;
        text-align: center;
        padding: 1.875rem;
        padding-bottom: 1.25rem;
        font-weight: bold;
        color: #000;
      }

      &-loader {
        padding: 0 1.25rem;
        width: 100%;
      }

      &-item {
        &-default {
          border-bottom: 1px solid #0000002e;
        }

        &:hover {
          cursor: pointer;

          .wishlist-list-item-title {
            color: \$blue;
          }
        }

        &-link {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 1.5rem 1.25rem;
        }

        .dropdown-menu {
          right: 1.25rem;
          left: inherit;
          display: flex;
          flex-direction: column;
        }

        &-right {
          position: relative;
          white-space: nowrap;

          > button {
            transition: 0.25s ease-out;

            &:hover {
              opacity: 0.6;
            }

            i {
              color: #7a7a7a;
            }
          }

          .dropdown-menu {
            box-sizing: border-box;
            border: 1px solid #e5e5e5;
            border-radius: 0.25rem;
            background-color: #ffffff;
            box-shadow: 0.125rem 0.125rem 0.625rem 0 rgba(0, 0, 0, 0.2);
            padding: 0;
            overflow: hidden;

            > button {
              padding: 0.625rem 1.25rem;
              transition: 0.2s ease-out;
              text-align: left;

              &:hover {
                background-color: #f1f1f1;
              }
            }
          }
        }

        &-title {
          color: #232323;
          font-size: 1rem;
          font-weight: bold;
          letter-spacing: 0;
          line-height: 1.375rem;
          margin-bottom: 0;
          word-break: break-word;

          span {
            color: #7a7a7a;
            font-size: 1rem;
            letter-spacing: 0;
            line-height: 1.375rem;
            font-weight: normal;
            margin-left: 0.3125rem;
          }
        }

        button {
          cursor: pointer;
          border: none;
          background: none;

          &:focus {
            outline: 0;
          }
        }
      }
    }
  }
</style>
", "@Modules/blockwishlist/_dev/front/js/components/List/List.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/List/List.vue");
    }
}
