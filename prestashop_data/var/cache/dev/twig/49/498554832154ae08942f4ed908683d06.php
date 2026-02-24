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

/* @Modules/blockwishlist/_dev/front/js/components/Product/Product.vue */
class __TwigTemplate_acdfbc2a6dd1ed044e8ad1c6bd646396 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Product/Product.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Product/Product.vue"));

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
  <div class=\"wishlist-product\">
    <a
      class=\"wishlist-product-link\"
      :href=\"product.canonical_url\"
    >
      <div class=\"wishlist-product-image\">
        <img
          v-if=\"product.default_image\"
          :src=\"product.default_image.large.url\"
          :alt=\"product.default_image.legend\"
          :title=\"product.default_image.legend\"
          :class=\"{
            'wishlist-product-unavailable': !product.add_to_cart_url
          }\"
        >
        <img
          v-else-if=\"product.cover\"
          :src=\"product.cover.large.url\"
          :alt=\"product.cover.legend\"
          :title=\"product.cover.legend\"
          :class=\"{
            'wishlist-product-unavailable': !product.add_to_cart_url
          }\"
        >
        <img
          v-else
          :src=\"prestashop.urls.no_picture_image.bySize.home_default.url\"
        >

        <p
          class=\"wishlist-product-availability\"
          v-if=\"product.show_availability\"
        >
          <i
            class=\"material-icons\"
            v-if=\"product.availability === 'unavailable'\"
          >
            block
          </i>
          <i
            class=\"material-icons\"
            v-if=\"product.availability === 'last_remaining_items'\"
          >
            warning
          </i>
          ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 65, $this->source); })()), "availability_message", [], "any", false, false, false, 65), "html", null, true);
        echo "
        </p>
      </div>
      <div class=\"wishlist-product-right\">
        <p class=\"wishlist-product-title\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 69, $this->source); })()), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "</p>

        <p class=\"wishlist-product-price\">
          <span
            class=\"wishlist-product-price-promo\"
            v-if=\"product.has_discount\"
          >
            ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 76, $this->source); })()), "regular_price", [], "any", false, false, false, 76), "html", null, true);
        echo "
          </span>
          ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 78, $this->source); })()), "price", [], "any", false, false, false, 78), "html", null, true);
        echo "
        </p>

        <div class=\"wishlist-product-combinations\">
          <p class=\"wishlist-product-combinations-text\">
            <template v-for=\"(attribute, key, index) of product.attributes\">
              ";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 84, $this->source); })()), "group", [], "any", false, false, false, 84), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attribute"]) || array_key_exists("attribute", $context) ? $context["attribute"] : (function () { throw new RuntimeError('Variable "attribute" does not exist.', 84, $this->source); })()), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "
              <span
                :key=\"key\"
                v-if=\"index <= Object.keys(product.attributes).length - 1\"
              >
                -
              </span>

              <span
                :key=\"key + 'end'\"
                v-if=\"index == Object.keys(product.attributes).length - 1\"
              >
                ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["quantityText"]) || array_key_exists("quantityText", $context) ? $context["quantityText"] : (function () { throw new RuntimeError('Variable "quantityText" does not exist.', 96, $this->source); })()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "wishlist_quantity", [], "any", false, false, false, 96), "html", null, true);
        echo "
              </span>
            </template>

            <span v-if=\"Object.keys(product.attributes).length === 0\">
              ";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["quantityText"]) || array_key_exists("quantityText", $context) ? $context["quantityText"] : (function () { throw new RuntimeError('Variable "quantityText" does not exist.', 101, $this->source); })()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 101, $this->source); })()), "wishlist_quantity", [], "any", false, false, false, 101), "html", null, true);
        echo "
            </span>
          </p>

          <a
            :href=\"product.canonical_url\"
            v-if=\"!isShare\"
          >
            <i class=\"material-icons\">create</i>
          </a>
        </div>
      </div>
    </a>

    <div class=\"wishlist-product-bottom\">
      <button
        class=\"btn wishlist-product-addtocart\"
        :class=\"{
          'btn-secondary': product.customizable,
          'btn-primary': !product.customizable
        }\"
        :disabled=\"isDisabled || forceDisable\"
        @click=\"
          product.add_to_cart_url || product.customizable
            ? addToCartAction()
            : null
        \"
      >
        <i
          class=\"material-icons shopping-cart\"
          v-if=\"!product.customizable\"
        >
          shopping_cart
        </i>
        ";
        // line 135
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 135, $this->source); })()), "customizable", [], "any", false, false, false, 135)) ? ((isset($context["customizeText"]) || array_key_exists("customizeText", $context) ? $context["customizeText"] : (function () { throw new RuntimeError('Variable "customizeText" does not exist.', 135, $this->source); })())) : ((isset($context["addToCart"]) || array_key_exists("addToCart", $context) ? $context["addToCart"] : (function () { throw new RuntimeError('Variable "addToCart" does not exist.', 135, $this->source); })()))), "html", null, true);
        echo "
      </button>

      <button
        class=\"wishlist-button-add\"
        v-if=\"!isShare\"
        @click=\"removeFromWishlist\"
      >
        <i class=\"material-icons\">delete</i>
      </button>
    </div>

    <p
      class=\"wishlist-product-availability wishlist-product-availability-responsive\"
      v-if=\"product.show_availability\"
    >
      <i
        class=\"material-icons\"
        v-if=\"product.availability === 'unavailable'\"
      >
        block
      </i>
      <i
        class=\"material-icons\"
        v-if=\"product.availability === 'last_remaining_items'\"
      >
        warning
      </i>
      ";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 163, $this->source); })()), "availability_message", [], "any", false, false, false, 163), "html", null, true);
        echo "
    </p>
  </div>
</template>

<script>
  import EventBus from '@components/EventBus';
  import headers from '@constants/headers';
  import prestashop from 'prestashop';
  import wishlistAddProductToCartUrl from 'wishlistAddProductToCartUrl';

  export default {
    name: 'Product',
    props: {
      product: {
        type: Object,
        required: true,
        default: null,
      },
      listId: {
        type: Number,
        required: true,
        default: null,
      },
      listName: {
        type: String,
        required: true,
        default: '',
      },
      isShare: {
        type: Boolean,
        required: false,
        default: false,
      },
      customizeText: {
        type: String,
        required: true,
        default: 'Customize',
      },
      quantityText: {
        type: String,
        required: true,
        default: 'Quantity',
      },
      addToCart: {
        type: String,
        required: true,
      },
      status: {
        type: Number,
        required: false,
        default: 0,
      },
      hasControls: {
        type: Boolean,
        required: false,
        default: true,
      },
    },
    data() {
      return {
        prestashop,
        forceDisable: false,
      };
    },
    computed: {
      isDisabled() {
        const wishlistQuantity = parseInt(this.product.wishlist_quantity, 10);
        const quantityAvailable = parseInt(this.product.quantity_available, 10);
        const cartQuantity = parseInt(this.product.cart_quantity, 10);

        if (this.product.allow_oosp) {
          return false;
        }

        if (this.product.customizable) {
          return false;
        }

        if (wishlistQuantity > quantityAvailable) {
          return true;
        }

        if (cartQuantity >= quantityAvailable) {
          return true;
        }

        if (cartQuantity
          && cartQuantity + wishlistQuantity > quantityAvailable
        ) {
          return true;
        }

        return !this.product.add_to_cart_url;
      },
    },
    methods: {
      /**
       * Remove the product from the wishlist
       */
      async removeFromWishlist() {
        EventBus.\$emit('showDeleteWishlist', {
          detail: {
            listId: this.listId,
            listName: this.listName,
            productId: this.product.id,
            productAttributeId: this.product.id_product_attribute,
          },
        });
      },
      async addToCartAction() {
        if (this.product.add_to_cart_url && !this.product.customizable) {
          try {
            this.forceDisable = true;
            const datas = new FormData();
            datas.append('qty', this.product.wishlist_quantity);
            datas.append('id_product', this.product.id_product);
            datas.append('id_customization', this.product.id_customization);

            const response = await fetch(
              `\${this.product.add_to_cart_url}&action=update`,
              {
                method: 'POST',
                headers: headers.addToCart,
                body: datas,
              },
            );

            const resp = await response.json();

            EventBus.\$emit('refetchList');

            prestashop.emit('updateCart', {
              reason: {
                idProduct: this.product.id_product,
                idProductAttribute: this.product.id_product_attribute,
                idCustomization: this.product.id_customization,
                linkAction: 'add-to-cart',
              },
              resp,
            });

            \$('body').on('hide.bs.modal', '#blockcart-modal', () => {
              this.forceDisable = false;
            });

            /* eslint-disable */
            const statResponse = await fetch(
              `\${wishlistAddProductToCartUrl}&params[idWishlist]=\${this.listId}&params[id_product]=\${this.product.id_product}&params[id_product_attribute]=\${this.product.id_product_attribute}&params[quantity]=\${this.product.wishlist_quantity}`,
              {
                headers: {
                  'Content-Type':
                    'application/x-www-form-urlencoded; charset=UTF-8',
                  Accept: 'application/json, text/javascript, */*; q=0.01'
                }
              }
            );
            /* eslint-enable */

            await statResponse.json();
          } catch (error) {
            prestashop.emit('handleError', {
              eventType: 'addProductToCart',
              resp: error,
            });
          }
        } else {
          window.location.href = this.product.canonical_url;
        }
      },
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-products-item {
      margin: 1.5625rem;
    }

    &-product {
      max-width: 15.625rem;
      width: 100%;
      position: relative;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

      &-unavailable {
        opacity: 0.5;
      }

      &-availability {
        display: flex;
        align-items: flex-start;
        margin-bottom: 0;
        color: #232323;
        font-size: 0.75rem;
        font-weight: bold;
        letter-spacing: 0;
        line-height: 1.0625rem;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 1.0625rem;
        z-index: 5;
        min-width: 80%;
        justify-content: center;

        i {
          color: #ff4c4c;
          margin-right: 0.3125rem;
          font-size: 1.125rem;
        }

        &-responsive {
          display: none;
          position: inherit;
          transform: inherit;
          bottom: inherit;
          margin-top: 0.625rem;
          left: inherit;
        }
      }

      &-link {
        &:focus {
          text-decoration: none;
        }

        &:hover {
          img {
            transform: translate(-50%, -50%) scale(1.1);
          }
        }
      }

      &-title {
        margin-top: 0.625rem;
        margin-bottom: 0.315rem;
        color: #737373;
        font-size: 0.875rem;
        letter-spacing: 0;
        line-height: 1.875rem;
      }

      &-image {
        width: 15.625rem;
        height: 15.625rem;
        position: relative;
        overflow: hidden;

        img {
          position: absolute;
          max-width: 100%;
          max-height: 100%;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          transition: 0.25s ease-out;
        }
      }

      &-price {
        color: #232323;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 0;
        line-height: 1.375rem;

        &-promo {
          text-decoration: line-through;
          color: #737373;
          font-size: 0.875rem;
          font-weight: bold;
          letter-spacing: 0;
          line-height: 1.1875rem;
          margin-right: 0.3125rem;
          vertical-align: middle;
          display: inline-block;
          margin-top: -0.1875rem;
        }
      }

      &-combinations {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;

        a {
          display: block;
          color: #7a7a7a;

          &:hover {
            color: \$blue;
          }
        }

        &-text {
          color: #7a7a7a;
          font-size: 0.8125rem;
          letter-spacing: 0;
          line-height: 1.25rem;
          min-height: 3.125rem;
          margin: 0;
        }
      }

      &-addtocart {
        width: 100%;
        text-transform: inherit;
      }
    }

    &-button {
      &-add {
        position: absolute;
        top: 0.625rem;
        right: 0.625rem;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 2.5rem;
        width: 2.5rem;
        min-width: 2.5rem;
        padding-top: 0.1875rem;
        background-color: #ffffff;
        box-shadow: 0.125rem 0.125rem 0.25rem 0 rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        cursor: pointer;
        transition: 0.2s ease-out;
        border: none;

        &:hover {
          opacity: 0.7;
        }

        &:focus {
          outline: 0;
        }

        &:active {
          transform: scale(1.2);
        }

        i {
          color: #7a7a7a;
          margin-top: -0.125rem;
        }
      }
    }
  }

  @media screen and (max-width: 768px) {
    .wishlist {
      &-button-add {
        position: inherit;
        margin-left: 0.625rem;
      }

      &-products-item {
        width: 100%;
        margin: 0;
        margin-bottom: 1.875rem;

        &:not(:last-child) {
          margin-bottom: 1.875rem;
        }
      }

      &-product {
        margin: 0;
        width: 100%;
        max-width: 100%;

        &-link {
          &:hover {
            img {
              transform: inherit;
            }
          }
        }

        &-bottom {
          display: flex;
          align-items: center;
          justify-content: space-between;
        }

        &-right {
          flex: 1;
        }

        &-availability {
          display: none;

          &-responsive {
            display: block;
            min-width: 100%;
            justify-content: flex-start;
          }
        }

        &-image {
          width: 100px;
          height: 100px;
          margin-right: 1.25rem;
          position: inherit;

          img {
            position: inherit;
            left: inherit;
            top: inherit;
            transform: inherit;
          }
        }

        &-link {
          display: flex;
          align-items: flex-start;
        }

        &-title {
          margin-top: 0;
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
        return "@Modules/blockwishlist/_dev/front/js/components/Product/Product.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 163,  206 => 135,  167 => 101,  157 => 96,  140 => 84,  131 => 78,  126 => 76,  116 => 69,  109 => 65,  43 => 1,);
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
  <div class=\"wishlist-product\">
    <a
      class=\"wishlist-product-link\"
      :href=\"product.canonical_url\"
    >
      <div class=\"wishlist-product-image\">
        <img
          v-if=\"product.default_image\"
          :src=\"product.default_image.large.url\"
          :alt=\"product.default_image.legend\"
          :title=\"product.default_image.legend\"
          :class=\"{
            'wishlist-product-unavailable': !product.add_to_cart_url
          }\"
        >
        <img
          v-else-if=\"product.cover\"
          :src=\"product.cover.large.url\"
          :alt=\"product.cover.legend\"
          :title=\"product.cover.legend\"
          :class=\"{
            'wishlist-product-unavailable': !product.add_to_cart_url
          }\"
        >
        <img
          v-else
          :src=\"prestashop.urls.no_picture_image.bySize.home_default.url\"
        >

        <p
          class=\"wishlist-product-availability\"
          v-if=\"product.show_availability\"
        >
          <i
            class=\"material-icons\"
            v-if=\"product.availability === 'unavailable'\"
          >
            block
          </i>
          <i
            class=\"material-icons\"
            v-if=\"product.availability === 'last_remaining_items'\"
          >
            warning
          </i>
          {{ product.availability_message }}
        </p>
      </div>
      <div class=\"wishlist-product-right\">
        <p class=\"wishlist-product-title\">{{ product.name }}</p>

        <p class=\"wishlist-product-price\">
          <span
            class=\"wishlist-product-price-promo\"
            v-if=\"product.has_discount\"
          >
            {{ product.regular_price }}
          </span>
          {{ product.price }}
        </p>

        <div class=\"wishlist-product-combinations\">
          <p class=\"wishlist-product-combinations-text\">
            <template v-for=\"(attribute, key, index) of product.attributes\">
              {{ attribute.group }} : {{ attribute.name }}
              <span
                :key=\"key\"
                v-if=\"index <= Object.keys(product.attributes).length - 1\"
              >
                -
              </span>

              <span
                :key=\"key + 'end'\"
                v-if=\"index == Object.keys(product.attributes).length - 1\"
              >
                {{ quantityText }} : {{ product.wishlist_quantity }}
              </span>
            </template>

            <span v-if=\"Object.keys(product.attributes).length === 0\">
              {{ quantityText }} : {{ product.wishlist_quantity }}
            </span>
          </p>

          <a
            :href=\"product.canonical_url\"
            v-if=\"!isShare\"
          >
            <i class=\"material-icons\">create</i>
          </a>
        </div>
      </div>
    </a>

    <div class=\"wishlist-product-bottom\">
      <button
        class=\"btn wishlist-product-addtocart\"
        :class=\"{
          'btn-secondary': product.customizable,
          'btn-primary': !product.customizable
        }\"
        :disabled=\"isDisabled || forceDisable\"
        @click=\"
          product.add_to_cart_url || product.customizable
            ? addToCartAction()
            : null
        \"
      >
        <i
          class=\"material-icons shopping-cart\"
          v-if=\"!product.customizable\"
        >
          shopping_cart
        </i>
        {{ product.customizable ? customizeText : addToCart }}
      </button>

      <button
        class=\"wishlist-button-add\"
        v-if=\"!isShare\"
        @click=\"removeFromWishlist\"
      >
        <i class=\"material-icons\">delete</i>
      </button>
    </div>

    <p
      class=\"wishlist-product-availability wishlist-product-availability-responsive\"
      v-if=\"product.show_availability\"
    >
      <i
        class=\"material-icons\"
        v-if=\"product.availability === 'unavailable'\"
      >
        block
      </i>
      <i
        class=\"material-icons\"
        v-if=\"product.availability === 'last_remaining_items'\"
      >
        warning
      </i>
      {{ product.availability_message }}
    </p>
  </div>
</template>

<script>
  import EventBus from '@components/EventBus';
  import headers from '@constants/headers';
  import prestashop from 'prestashop';
  import wishlistAddProductToCartUrl from 'wishlistAddProductToCartUrl';

  export default {
    name: 'Product',
    props: {
      product: {
        type: Object,
        required: true,
        default: null,
      },
      listId: {
        type: Number,
        required: true,
        default: null,
      },
      listName: {
        type: String,
        required: true,
        default: '',
      },
      isShare: {
        type: Boolean,
        required: false,
        default: false,
      },
      customizeText: {
        type: String,
        required: true,
        default: 'Customize',
      },
      quantityText: {
        type: String,
        required: true,
        default: 'Quantity',
      },
      addToCart: {
        type: String,
        required: true,
      },
      status: {
        type: Number,
        required: false,
        default: 0,
      },
      hasControls: {
        type: Boolean,
        required: false,
        default: true,
      },
    },
    data() {
      return {
        prestashop,
        forceDisable: false,
      };
    },
    computed: {
      isDisabled() {
        const wishlistQuantity = parseInt(this.product.wishlist_quantity, 10);
        const quantityAvailable = parseInt(this.product.quantity_available, 10);
        const cartQuantity = parseInt(this.product.cart_quantity, 10);

        if (this.product.allow_oosp) {
          return false;
        }

        if (this.product.customizable) {
          return false;
        }

        if (wishlistQuantity > quantityAvailable) {
          return true;
        }

        if (cartQuantity >= quantityAvailable) {
          return true;
        }

        if (cartQuantity
          && cartQuantity + wishlistQuantity > quantityAvailable
        ) {
          return true;
        }

        return !this.product.add_to_cart_url;
      },
    },
    methods: {
      /**
       * Remove the product from the wishlist
       */
      async removeFromWishlist() {
        EventBus.\$emit('showDeleteWishlist', {
          detail: {
            listId: this.listId,
            listName: this.listName,
            productId: this.product.id,
            productAttributeId: this.product.id_product_attribute,
          },
        });
      },
      async addToCartAction() {
        if (this.product.add_to_cart_url && !this.product.customizable) {
          try {
            this.forceDisable = true;
            const datas = new FormData();
            datas.append('qty', this.product.wishlist_quantity);
            datas.append('id_product', this.product.id_product);
            datas.append('id_customization', this.product.id_customization);

            const response = await fetch(
              `\${this.product.add_to_cart_url}&action=update`,
              {
                method: 'POST',
                headers: headers.addToCart,
                body: datas,
              },
            );

            const resp = await response.json();

            EventBus.\$emit('refetchList');

            prestashop.emit('updateCart', {
              reason: {
                idProduct: this.product.id_product,
                idProductAttribute: this.product.id_product_attribute,
                idCustomization: this.product.id_customization,
                linkAction: 'add-to-cart',
              },
              resp,
            });

            \$('body').on('hide.bs.modal', '#blockcart-modal', () => {
              this.forceDisable = false;
            });

            /* eslint-disable */
            const statResponse = await fetch(
              `\${wishlistAddProductToCartUrl}&params[idWishlist]=\${this.listId}&params[id_product]=\${this.product.id_product}&params[id_product_attribute]=\${this.product.id_product_attribute}&params[quantity]=\${this.product.wishlist_quantity}`,
              {
                headers: {
                  'Content-Type':
                    'application/x-www-form-urlencoded; charset=UTF-8',
                  Accept: 'application/json, text/javascript, */*; q=0.01'
                }
              }
            );
            /* eslint-enable */

            await statResponse.json();
          } catch (error) {
            prestashop.emit('handleError', {
              eventType: 'addProductToCart',
              resp: error,
            });
          }
        } else {
          window.location.href = this.product.canonical_url;
        }
      },
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
    &-products-item {
      margin: 1.5625rem;
    }

    &-product {
      max-width: 15.625rem;
      width: 100%;
      position: relative;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;

      &-unavailable {
        opacity: 0.5;
      }

      &-availability {
        display: flex;
        align-items: flex-start;
        margin-bottom: 0;
        color: #232323;
        font-size: 0.75rem;
        font-weight: bold;
        letter-spacing: 0;
        line-height: 1.0625rem;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 1.0625rem;
        z-index: 5;
        min-width: 80%;
        justify-content: center;

        i {
          color: #ff4c4c;
          margin-right: 0.3125rem;
          font-size: 1.125rem;
        }

        &-responsive {
          display: none;
          position: inherit;
          transform: inherit;
          bottom: inherit;
          margin-top: 0.625rem;
          left: inherit;
        }
      }

      &-link {
        &:focus {
          text-decoration: none;
        }

        &:hover {
          img {
            transform: translate(-50%, -50%) scale(1.1);
          }
        }
      }

      &-title {
        margin-top: 0.625rem;
        margin-bottom: 0.315rem;
        color: #737373;
        font-size: 0.875rem;
        letter-spacing: 0;
        line-height: 1.875rem;
      }

      &-image {
        width: 15.625rem;
        height: 15.625rem;
        position: relative;
        overflow: hidden;

        img {
          position: absolute;
          max-width: 100%;
          max-height: 100%;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          transition: 0.25s ease-out;
        }
      }

      &-price {
        color: #232323;
        font-size: 1rem;
        font-weight: bold;
        letter-spacing: 0;
        line-height: 1.375rem;

        &-promo {
          text-decoration: line-through;
          color: #737373;
          font-size: 0.875rem;
          font-weight: bold;
          letter-spacing: 0;
          line-height: 1.1875rem;
          margin-right: 0.3125rem;
          vertical-align: middle;
          display: inline-block;
          margin-top: -0.1875rem;
        }
      }

      &-combinations {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;

        a {
          display: block;
          color: #7a7a7a;

          &:hover {
            color: \$blue;
          }
        }

        &-text {
          color: #7a7a7a;
          font-size: 0.8125rem;
          letter-spacing: 0;
          line-height: 1.25rem;
          min-height: 3.125rem;
          margin: 0;
        }
      }

      &-addtocart {
        width: 100%;
        text-transform: inherit;
      }
    }

    &-button {
      &-add {
        position: absolute;
        top: 0.625rem;
        right: 0.625rem;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 2.5rem;
        width: 2.5rem;
        min-width: 2.5rem;
        padding-top: 0.1875rem;
        background-color: #ffffff;
        box-shadow: 0.125rem 0.125rem 0.25rem 0 rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        cursor: pointer;
        transition: 0.2s ease-out;
        border: none;

        &:hover {
          opacity: 0.7;
        }

        &:focus {
          outline: 0;
        }

        &:active {
          transform: scale(1.2);
        }

        i {
          color: #7a7a7a;
          margin-top: -0.125rem;
        }
      }
    }
  }

  @media screen and (max-width: 768px) {
    .wishlist {
      &-button-add {
        position: inherit;
        margin-left: 0.625rem;
      }

      &-products-item {
        width: 100%;
        margin: 0;
        margin-bottom: 1.875rem;

        &:not(:last-child) {
          margin-bottom: 1.875rem;
        }
      }

      &-product {
        margin: 0;
        width: 100%;
        max-width: 100%;

        &-link {
          &:hover {
            img {
              transform: inherit;
            }
          }
        }

        &-bottom {
          display: flex;
          align-items: center;
          justify-content: space-between;
        }

        &-right {
          flex: 1;
        }

        &-availability {
          display: none;

          &-responsive {
            display: block;
            min-width: 100%;
            justify-content: flex-start;
          }
        }

        &-image {
          width: 100px;
          height: 100px;
          margin-right: 1.25rem;
          position: inherit;

          img {
            position: inherit;
            left: inherit;
            top: inherit;
            transform: inherit;
          }
        }

        &-link {
          display: flex;
          align-items: flex-start;
        }

        &-title {
          margin-top: 0;
        }
      }
    }
  }
</style>
", "@Modules/blockwishlist/_dev/front/js/components/Product/Product.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/Product/Product.vue");
    }
}
