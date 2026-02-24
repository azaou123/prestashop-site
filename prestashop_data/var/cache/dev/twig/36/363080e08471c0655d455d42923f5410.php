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

/* @Modules/blockwishlist/_dev/front/js/container/ProductsListContainer/ProductsListContainer.vue */
class __TwigTemplate_08337a577eaee717faac7f328e944077 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/container/ProductsListContainer/ProductsListContainer.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/container/ProductsListContainer/ProductsListContainer.vue"));

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
  <div class=\"wishlist-products-container\">
    <div class=\"wishlist-products-container-header\">
      <h1>
        ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "

        <span
          class=\"wishlist-products-count\"
          v-if=\"products.datas && products.datas.products\"
        >
          (";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })()), "datas", [], "any", false, false, false, 29), "pagination", [], "any", false, false, false, 29), "total_items", [], "any", false, false, false, 29), "html", null, true);
        echo ")
        </span>
      </h1>

      <div
        class=\"sort-by-row\"
        v-if=\"products.datas\"
      >
        <span class=\"hidden-sm-down col-sm-3 col-md-3 sort-by\">";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "</span>
        <div class=\"col-xs-12 col-sm-9 col-md-9 products-sort-order dropdown\">
          <button
            class=\"btn-unstyle select-title\"
            rel=\"nofollow\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            ";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["currentSort"]) || array_key_exists("currentSort", $context) ? $context["currentSort"] : (function () { throw new RuntimeError('Variable "currentSort" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "
            <i class=\"material-icons float-xs-right\">arrow_drop_down</i>
          </button>
          <div class=\"dropdown-menu\">
            <a
              rel=\"nofollow\"
              @click=\"changeSelectedSort(sort)\"
              class=\"select-list\"
              :key=\"key\"
              v-for=\"(sort, key) in productList\"
            >
              ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 57, $this->source); })()), "label", [], "any", false, false, false, 57), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>
    </div>

    <section
      id=\"content\"
      class=\"page-content card card-block\"
    >
      <ul
        class=\"wishlist-products-list\"
        v-if=\"products.datas && products.datas.products.length > 0\"
      >
        <li
          class=\"wishlist-products-item\"
          v-for=\"(product, key) in products.datas.products\"
          :key=\"key\"
        >
          <Product
            :product=\"product\"
            :add-to-cart=\"addToCart\"
            :customize-text=\"customizeText\"
            :quantity-text=\"quantityText\"
            :list-name=\"title\"
            :list-id=\"
              listId ? listId : parseInt(currentWishlist.id_wishlist, 10)
            \"
            :is-share=\"share\"
          />
        </li>
      </ul>

      <ContentLoader
        v-if=\"!products.datas\"
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
        v-if=\"products.datas && products.datas.products.length <= 0\"
      >
        ";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["noProductsMessage"]) || array_key_exists("noProductsMessage", $context) ? $context["noProductsMessage"] : (function () { throw new RuntimeError('Variable "noProductsMessage" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "
      </p>
    </section>
  </div>
</template>

<script>
  import Product from '@components/Product/Product';
  import getProducts from '@graphqlFiles/queries/getproducts';
  import {ContentLoader} from 'vue-content-loader';
  import EventBus from '@components/EventBus';

  /**
   * This component act as a smart component wich will handle every actions of the list one
   */
  export default {
    name: 'ProductsListContainer',
    components: {
      Product,
      ContentLoader,
    },
    apollo: {
      products: {
        query: getProducts,
        variables() {
          return {
            listId: this.listId,
            url: this.apiUrl,
          };
        },
        skip() {
          return true;
        },
        fetchPolicy: 'network-only',
      },
    },
    props: {
      url: {
        type: String,
        required: false,
        default: '#',
      },
      title: {
        type: String,
        required: true,
      },
      filter: {
        type: String,
        required: true,
      },
      noProductsMessage: {
        type: String,
        required: true,
      },
      listId: {
        type: Number,
        required: false,
        default: 0,
      },
      addToCart: {
        type: String,
        required: true,
      },
      share: {
        type: Boolean,
        required: true,
      },
      customizeText: {
        type: String,
        required: true,
      },
      quantityText: {
        type: String,
        required: true,
      },
    },
    data() {
      return {
        products: [],
        currentWishlist: {},
        apiUrl: window.location.href,
        selectedSort: '',
      };
    },
    methods: {
      /**
       * Sort by the select drop down
       * @param {String} value The value selected
       */
      async changeSelectedSort(value) {
        this.selectedSort = value.label;
        this.apiUrl = value.url;
      },
    },
    computed: {
      productList() {
        const productList = this.products.datas.sort_orders.filter(
          (sort) => sort.label !== this.products.datas.sort_selected,
        );

        return productList;
      },
      currentSort() {
        return this.selectedSort !== ''
          ? this.selectedSort
          : this.products.datas.sort_selected;
      },
    },
    mounted() {
      if (this.listId) {
        this.\$apollo.queries.products.skip = false;
      }

      /**
       * Register to the event refetchProducts so if an other component update it, this one can update his list
       *
       * @param {String} 'refetchProduct' The event I decided to create to communicate between VueJS Apps
       */
      EventBus.\$on('refetchList', () => {
        this.\$apollo.queries.products.refetch();
      });

      EventBus.\$on('updatePagination', (payload) => {
        this.products = false;
        this.apiUrl = payload.page.url;
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-list-loader {
      padding: 0 1.25rem;
      width: 100%;
    }

    &-list-empty {
      font-size: 30;
      text-align: center;
      padding: 1.875rem;
      padding-bottom: 1.25rem;
      font-weight: bold;
      color: #000;
    }

    &-products-container {
      .sort-by-row {
        min-width: 19.6875rem;
        display: flex;
        align-items: center;

        a {
          cursor: pointer;
        }

        .sort-by {
          padding: 0;
        }

        .products-sort-order {
          padding: 0;
        }
      }

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

    &-products {
      &-list {
        display: flex;
        flex-wrap: wrap;
        margin: -1.5625rem;
        padding: 1.25rem 2.8125rem;
        margin-top: 0;
      }

      &-count {
        color: #7a7a7a;
        font-size: 1.375rem;
        font-weight: normal;
        line-height: 1.875rem;
      }
    }
  }

  @media screen and (max-width: 768px) {
    .wishlist {
      &-products-container {
        &-header {
          flex-wrap: wrap;

          .products-sort-order {
            flex: 1;
          }

          .filter-button {
            width: auto;
            padding-right: 0;
          }

          .sort-by-row {
            width: 100%;
            min-width: 16.00rem;
          }
        }

        .page-content.card {
          box-shadow: 0.125rem 0.125rem 0.5rem 0 rgba(0, 0, 0, 0.2);
          background-color: #fff;
          margin-top: 1.25rem;
        }

        .wishlist-products-list {
          justify-content: center;
          margin: 0;
          padding: 0.9375rem;
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
        return "@Modules/blockwishlist/_dev/front/js/container/ProductsListContainer/ProductsListContainer.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 134,  113 => 57,  99 => 46,  87 => 37,  76 => 29,  67 => 23,  43 => 1,);
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
  <div class=\"wishlist-products-container\">
    <div class=\"wishlist-products-container-header\">
      <h1>
        {{ title }}

        <span
          class=\"wishlist-products-count\"
          v-if=\"products.datas && products.datas.products\"
        >
          ({{ products.datas.pagination.total_items }})
        </span>
      </h1>

      <div
        class=\"sort-by-row\"
        v-if=\"products.datas\"
      >
        <span class=\"hidden-sm-down col-sm-3 col-md-3 sort-by\">{{ filter }}</span>
        <div class=\"col-xs-12 col-sm-9 col-md-9 products-sort-order dropdown\">
          <button
            class=\"btn-unstyle select-title\"
            rel=\"nofollow\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ currentSort }}
            <i class=\"material-icons float-xs-right\">arrow_drop_down</i>
          </button>
          <div class=\"dropdown-menu\">
            <a
              rel=\"nofollow\"
              @click=\"changeSelectedSort(sort)\"
              class=\"select-list\"
              :key=\"key\"
              v-for=\"(sort, key) in productList\"
            >
              {{ sort.label }}
            </a>
          </div>
        </div>
      </div>
    </div>

    <section
      id=\"content\"
      class=\"page-content card card-block\"
    >
      <ul
        class=\"wishlist-products-list\"
        v-if=\"products.datas && products.datas.products.length > 0\"
      >
        <li
          class=\"wishlist-products-item\"
          v-for=\"(product, key) in products.datas.products\"
          :key=\"key\"
        >
          <Product
            :product=\"product\"
            :add-to-cart=\"addToCart\"
            :customize-text=\"customizeText\"
            :quantity-text=\"quantityText\"
            :list-name=\"title\"
            :list-id=\"
              listId ? listId : parseInt(currentWishlist.id_wishlist, 10)
            \"
            :is-share=\"share\"
          />
        </li>
      </ul>

      <ContentLoader
        v-if=\"!products.datas\"
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
        v-if=\"products.datas && products.datas.products.length <= 0\"
      >
        {{ noProductsMessage }}
      </p>
    </section>
  </div>
</template>

<script>
  import Product from '@components/Product/Product';
  import getProducts from '@graphqlFiles/queries/getproducts';
  import {ContentLoader} from 'vue-content-loader';
  import EventBus from '@components/EventBus';

  /**
   * This component act as a smart component wich will handle every actions of the list one
   */
  export default {
    name: 'ProductsListContainer',
    components: {
      Product,
      ContentLoader,
    },
    apollo: {
      products: {
        query: getProducts,
        variables() {
          return {
            listId: this.listId,
            url: this.apiUrl,
          };
        },
        skip() {
          return true;
        },
        fetchPolicy: 'network-only',
      },
    },
    props: {
      url: {
        type: String,
        required: false,
        default: '#',
      },
      title: {
        type: String,
        required: true,
      },
      filter: {
        type: String,
        required: true,
      },
      noProductsMessage: {
        type: String,
        required: true,
      },
      listId: {
        type: Number,
        required: false,
        default: 0,
      },
      addToCart: {
        type: String,
        required: true,
      },
      share: {
        type: Boolean,
        required: true,
      },
      customizeText: {
        type: String,
        required: true,
      },
      quantityText: {
        type: String,
        required: true,
      },
    },
    data() {
      return {
        products: [],
        currentWishlist: {},
        apiUrl: window.location.href,
        selectedSort: '',
      };
    },
    methods: {
      /**
       * Sort by the select drop down
       * @param {String} value The value selected
       */
      async changeSelectedSort(value) {
        this.selectedSort = value.label;
        this.apiUrl = value.url;
      },
    },
    computed: {
      productList() {
        const productList = this.products.datas.sort_orders.filter(
          (sort) => sort.label !== this.products.datas.sort_selected,
        );

        return productList;
      },
      currentSort() {
        return this.selectedSort !== ''
          ? this.selectedSort
          : this.products.datas.sort_selected;
      },
    },
    mounted() {
      if (this.listId) {
        this.\$apollo.queries.products.skip = false;
      }

      /**
       * Register to the event refetchProducts so if an other component update it, this one can update his list
       *
       * @param {String} 'refetchProduct' The event I decided to create to communicate between VueJS Apps
       */
      EventBus.\$on('refetchList', () => {
        this.\$apollo.queries.products.refetch();
      });

      EventBus.\$on('updatePagination', (payload) => {
        this.products = false;
        this.apiUrl = payload.page.url;
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-list-loader {
      padding: 0 1.25rem;
      width: 100%;
    }

    &-list-empty {
      font-size: 30;
      text-align: center;
      padding: 1.875rem;
      padding-bottom: 1.25rem;
      font-weight: bold;
      color: #000;
    }

    &-products-container {
      .sort-by-row {
        min-width: 19.6875rem;
        display: flex;
        align-items: center;

        a {
          cursor: pointer;
        }

        .sort-by {
          padding: 0;
        }

        .products-sort-order {
          padding: 0;
        }
      }

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

    &-products {
      &-list {
        display: flex;
        flex-wrap: wrap;
        margin: -1.5625rem;
        padding: 1.25rem 2.8125rem;
        margin-top: 0;
      }

      &-count {
        color: #7a7a7a;
        font-size: 1.375rem;
        font-weight: normal;
        line-height: 1.875rem;
      }
    }
  }

  @media screen and (max-width: 768px) {
    .wishlist {
      &-products-container {
        &-header {
          flex-wrap: wrap;

          .products-sort-order {
            flex: 1;
          }

          .filter-button {
            width: auto;
            padding-right: 0;
          }

          .sort-by-row {
            width: 100%;
            min-width: 16.00rem;
          }
        }

        .page-content.card {
          box-shadow: 0.125rem 0.125rem 0.5rem 0 rgba(0, 0, 0, 0.2);
          background-color: #fff;
          margin-top: 1.25rem;
        }

        .wishlist-products-list {
          justify-content: center;
          margin: 0;
          padding: 0.9375rem;
        }
      }
    }
  }
</style>
", "@Modules/blockwishlist/_dev/front/js/container/ProductsListContainer/ProductsListContainer.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/container/ProductsListContainer/ProductsListContainer.vue");
    }
}
