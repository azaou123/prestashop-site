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

/* @Modules/blockwishlist/_dev/front/js/components/Toast/Toast.vue */
class __TwigTemplate_c0bc3027786d7a2ee77970956a1d9ad6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Toast/Toast.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Toast/Toast.vue"));

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
  <div
    class=\"wishlist-toast\"
    :class=\"[{ isActive: active }, type]\"
  >
    <p class=\"wishlist-toast-text\">
      ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "
    </p>
  </div>
</template>

<script>
  import EventBus from '@components/EventBus';

  export default {
    name: 'Button',
    props: {
      renameWishlistText: {
        type: String,
        required: true,
      },
      addedWishlistText: {
        type: String,
        required: true,
      },
      deleteWishlistText: {
        type: String,
        required: true,
      },
      createWishlistText: {
        type: String,
        required: true,
      },
      deleteProductText: {
        type: String,
        required: true,
      },
      copyText: {
        type: String,
        required: true,
      },
    },
    data() {
      return {
        text: '',
        active: false,
        timeout: null,
        type: 'basic',
      };
    },
    mounted() {
      /**
       * Register to an even so every components can show toast
       */
      EventBus.\$on('showToast', (event) => {
        if (event.detail.message) {
          if (this[event.detail.message]) {
            this.text = this[event.detail.message];
          } else {
            this.text = event.detail.message;
          }
        }

        this.active = true;

        if (this.timeout) {
          clearTimeout(this.timeout);
        }

        this.timeout = setTimeout(() => {
          this.active = false;
          this.timeout = null;
        }, 2500);

        this.type = event.detail.type ? event.detail.type : 'basic';
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  .wishlist {
    &-toast {
      padding: 0.875rem 1.25rem;
      box-sizing: border-box;
      width: auto;
      border: 1px solid #e5e5e5;
      border-radius: 4px;
      background-color: #ffffff;
      box-shadow: 0.125rem 0.125rem 0.625rem 0 rgba(0, 0, 0, 0.2);
      position: fixed;
      right: 1.25rem;
      z-index: 9999;
      top: 4.375rem;
      transition: 0.2s ease-out;
      transform: translateY(-10px);
      pointer-events: none;
      opacity: 0;

      &.success {
        background-color: #69b92d;
        border-color: #69b92d;

        .wishlist-toast-text {
          color: white;
        }
      }

      &.error {
        background-color: #b9312d;
        border-color: #b9312d;

        .wishlist-toast-text {
          color: white;
        }
      }

      &.isActive {
        transform: translateY(0);
        pointer-events: all;
        opacity: 1;
      }

      &-text {
        color: #232323;
        font-size: 0.875rem;
        letter-spacing: 0;
        line-height: 1.1875rem;
        margin-bottom: 0;
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
        return "@Modules/blockwishlist/_dev/front/js/components/Toast/Toast.vue";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 25,  43 => 1,);
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
  <div
    class=\"wishlist-toast\"
    :class=\"[{ isActive: active }, type]\"
  >
    <p class=\"wishlist-toast-text\">
      {{ text }}
    </p>
  </div>
</template>

<script>
  import EventBus from '@components/EventBus';

  export default {
    name: 'Button',
    props: {
      renameWishlistText: {
        type: String,
        required: true,
      },
      addedWishlistText: {
        type: String,
        required: true,
      },
      deleteWishlistText: {
        type: String,
        required: true,
      },
      createWishlistText: {
        type: String,
        required: true,
      },
      deleteProductText: {
        type: String,
        required: true,
      },
      copyText: {
        type: String,
        required: true,
      },
    },
    data() {
      return {
        text: '',
        active: false,
        timeout: null,
        type: 'basic',
      };
    },
    mounted() {
      /**
       * Register to an even so every components can show toast
       */
      EventBus.\$on('showToast', (event) => {
        if (event.detail.message) {
          if (this[event.detail.message]) {
            this.text = this[event.detail.message];
          } else {
            this.text = event.detail.message;
          }
        }

        this.active = true;

        if (this.timeout) {
          clearTimeout(this.timeout);
        }

        this.timeout = setTimeout(() => {
          this.active = false;
          this.timeout = null;
        }, 2500);

        this.type = event.detail.type ? event.detail.type : 'basic';
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  .wishlist {
    &-toast {
      padding: 0.875rem 1.25rem;
      box-sizing: border-box;
      width: auto;
      border: 1px solid #e5e5e5;
      border-radius: 4px;
      background-color: #ffffff;
      box-shadow: 0.125rem 0.125rem 0.625rem 0 rgba(0, 0, 0, 0.2);
      position: fixed;
      right: 1.25rem;
      z-index: 9999;
      top: 4.375rem;
      transition: 0.2s ease-out;
      transform: translateY(-10px);
      pointer-events: none;
      opacity: 0;

      &.success {
        background-color: #69b92d;
        border-color: #69b92d;

        .wishlist-toast-text {
          color: white;
        }
      }

      &.error {
        background-color: #b9312d;
        border-color: #b9312d;

        .wishlist-toast-text {
          color: white;
        }
      }

      &.isActive {
        transform: translateY(0);
        pointer-events: all;
        opacity: 1;
      }

      &-text {
        color: #232323;
        font-size: 0.875rem;
        letter-spacing: 0;
        line-height: 1.1875rem;
        margin-bottom: 0;
      }
    }
  }
</style>
", "@Modules/blockwishlist/_dev/front/js/components/Toast/Toast.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/Toast/Toast.vue");
    }
}
