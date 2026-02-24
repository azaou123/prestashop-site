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

/* @Modules/blockwishlist/_dev/front/js/components/AddToWishlist/AddToWishlist.vue */
class __TwigTemplate_a855f99beda3813b4363428134dad81e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/AddToWishlist/AddToWishlist.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/AddToWishlist/AddToWishlist.vue"));

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
<script>
  import EventBus from '@components/EventBus';
  import ChooseList from '../ChooseList/ChooseList';

  export default {
    name: 'AddToWishlist',
    components: {
      ChooseList,
    },
    props: {
      url: {
        type: String,
        required: true,
        default: '#',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
        productAttributeId: 0,
        productId: 0,
        quantity: 0,
      };
    },
    methods: {
      /**
       * Open and close the modal
       */
      toggleModal(forceOpen) {
        if (forceOpen === true) {
          this.isHidden = false;
        } else {
          this.isHidden = !this.isHidden;
        }
      },
      /**
       * Dispatch an event to the Create component
       */
      openNewWishlistModal() {
        this.toggleModal();

        EventBus.\$emit('showCreateWishlist');
      },
    },
    mounted() {
      /**
       * Register to the event showAddToWishList so others component can open the modal of the current component
       */
      EventBus.\$on('showAddToWishList', (event) => {
        this.toggleModal(
          event.detail.forceOpen ? event.detail.forceOpen : null,
        );

        if (event.detail.productId) {
          this.productId = event.detail.productId;
        }

        if (typeof event.detail.productAttributeId === 'number') {
          this.productAttributeId = event.detail.productAttributeId;
        }

        if (event.detail.quantity) {
          this.quantity = event.detail.quantity;
        }
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
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
        color: \$blue;
        margin-top: -0.125rem;
        font-size: 1.25rem;
      }
    }

    &-add-to {
      .modal {
        &-body {
          padding: 0;
        }

        &-footer {
          text-align: left;
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
        return "@Modules/blockwishlist/_dev/front/js/components/AddToWishlist/AddToWishlist.vue";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
<script>
  import EventBus from '@components/EventBus';
  import ChooseList from '../ChooseList/ChooseList';

  export default {
    name: 'AddToWishlist',
    components: {
      ChooseList,
    },
    props: {
      url: {
        type: String,
        required: true,
        default: '#',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
        productAttributeId: 0,
        productId: 0,
        quantity: 0,
      };
    },
    methods: {
      /**
       * Open and close the modal
       */
      toggleModal(forceOpen) {
        if (forceOpen === true) {
          this.isHidden = false;
        } else {
          this.isHidden = !this.isHidden;
        }
      },
      /**
       * Dispatch an event to the Create component
       */
      openNewWishlistModal() {
        this.toggleModal();

        EventBus.\$emit('showCreateWishlist');
      },
    },
    mounted() {
      /**
       * Register to the event showAddToWishList so others component can open the modal of the current component
       */
      EventBus.\$on('showAddToWishList', (event) => {
        this.toggleModal(
          event.detail.forceOpen ? event.detail.forceOpen : null,
        );

        if (event.detail.productId) {
          this.productId = event.detail.productId;
        }

        if (typeof event.detail.productAttributeId === 'number') {
          this.productAttributeId = event.detail.productAttributeId;
        }

        if (event.detail.quantity) {
          this.quantity = event.detail.quantity;
        }
      });
    },
  };
</script>

<style lang=\"scss\" type=\"text/scss\">
  @import '@scss/_variables';

  .wishlist {
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
        color: \$blue;
        margin-top: -0.125rem;
        font-size: 1.25rem;
      }
    }

    &-add-to {
      .modal {
        &-body {
          padding: 0;
        }

        &-footer {
          text-align: left;
        }
      }
    }
  }
</style>
", "@Modules/blockwishlist/_dev/front/js/components/AddToWishlist/AddToWishlist.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/AddToWishlist/AddToWishlist.vue");
    }
}
