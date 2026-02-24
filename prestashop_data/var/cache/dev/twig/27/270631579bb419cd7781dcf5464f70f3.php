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

/* @Modules/blockwishlist/_dev/front/js/components/Create/Create.vue */
class __TwigTemplate_2918340a921e47d23d3281306a59be2f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Create/Create.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Create/Create.vue"));

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
  import createList from '@graphqlFiles/mutations/createlist';
  import EventBus from '@components/EventBus';

  /**
   * This component display a modal where you can create a wishlist
   */
  export default {
    name: 'Create',
    props: {
      url: {
        type: String,
        required: true,
        default: '#',
      },
      title: {
        type: String,
        required: true,
        default: 'New wishlist',
      },
      label: {
        type: String,
        required: true,
        default: 'Wishlist name',
      },
      placeholder: {
        type: String,
        required: true,
        default: 'Add name',
      },
      cancelText: {
        type: String,
        required: true,
        default: 'Cancel',
      },
      lengthText: {
        type: String,
        required: true,
        default: 'List title is too short',
      },
      createText: {
        type: String,
        required: true,
        default: 'Create',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
      };
    },
    methods: {
      /**
       * Toggle the modal
       */
      toggleModal() {
        this.isHidden = !this.isHidden;
      },
      /**
       * Launch a createList mutation to create a Wishlist
       */
      async createWishlist() {
        const titleWithoutSpaces = this.value.replace(/ /g, '');

        if (titleWithoutSpaces < 1) {
          EventBus.\$emit('showToast', {
            detail: {
              type: 'error',
              message: this.lengthText,
            },
          });

          return false;
        }

        const {data: response} = await this.\$apollo.mutate({
          mutation: createList,
          variables: {
            name: this.value,
            url: this.url,
          },
        });

        EventBus.\$emit('showToast', {
          detail: {
            type: response.createList.success ? 'success' : 'error',
            message: response.createList.message,
          },
        });

        /**
         * As this is not a real SPA, we need to inform others VueJS apps that they need to refetch the list
         */
        EventBus.\$emit('refetchList');

        /**
         * Finally hide the modal after creating the list
         * and reopen the wishlist modal
         */
        this.toggleModal();
        EventBus.\$emit('showAddToWishList', {
          detail: {
            forceOpen: true,
          },
        });

        return true;
      },
    },
    mounted() {
      /**
       * Register to the event showCreateWishlist so others components can toggle this modal
       *
       * @param {String} 'showCreateWishlist'
       */
      EventBus.\$on('showCreateWishlist', () => {
        this.value = '';
        this.toggleModal();
      });
    },
  };
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/js/components/Create/Create.vue";
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
  import createList from '@graphqlFiles/mutations/createlist';
  import EventBus from '@components/EventBus';

  /**
   * This component display a modal where you can create a wishlist
   */
  export default {
    name: 'Create',
    props: {
      url: {
        type: String,
        required: true,
        default: '#',
      },
      title: {
        type: String,
        required: true,
        default: 'New wishlist',
      },
      label: {
        type: String,
        required: true,
        default: 'Wishlist name',
      },
      placeholder: {
        type: String,
        required: true,
        default: 'Add name',
      },
      cancelText: {
        type: String,
        required: true,
        default: 'Cancel',
      },
      lengthText: {
        type: String,
        required: true,
        default: 'List title is too short',
      },
      createText: {
        type: String,
        required: true,
        default: 'Create',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
      };
    },
    methods: {
      /**
       * Toggle the modal
       */
      toggleModal() {
        this.isHidden = !this.isHidden;
      },
      /**
       * Launch a createList mutation to create a Wishlist
       */
      async createWishlist() {
        const titleWithoutSpaces = this.value.replace(/ /g, '');

        if (titleWithoutSpaces < 1) {
          EventBus.\$emit('showToast', {
            detail: {
              type: 'error',
              message: this.lengthText,
            },
          });

          return false;
        }

        const {data: response} = await this.\$apollo.mutate({
          mutation: createList,
          variables: {
            name: this.value,
            url: this.url,
          },
        });

        EventBus.\$emit('showToast', {
          detail: {
            type: response.createList.success ? 'success' : 'error',
            message: response.createList.message,
          },
        });

        /**
         * As this is not a real SPA, we need to inform others VueJS apps that they need to refetch the list
         */
        EventBus.\$emit('refetchList');

        /**
         * Finally hide the modal after creating the list
         * and reopen the wishlist modal
         */
        this.toggleModal();
        EventBus.\$emit('showAddToWishList', {
          detail: {
            forceOpen: true,
          },
        });

        return true;
      },
    },
    mounted() {
      /**
       * Register to the event showCreateWishlist so others components can toggle this modal
       *
       * @param {String} 'showCreateWishlist'
       */
      EventBus.\$on('showCreateWishlist', () => {
        this.value = '';
        this.toggleModal();
      });
    },
  };
</script>
", "@Modules/blockwishlist/_dev/front/js/components/Create/Create.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/Create/Create.vue");
    }
}
