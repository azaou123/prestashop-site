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

/* @Modules/blockwishlist/_dev/front/js/components/Delete/Delete.vue */
class __TwigTemplate_95f87ad66af3254d8bb8ff807c55a492 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Delete/Delete.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Delete/Delete.vue"));

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
  import deleteList from '@graphqlFiles/mutations/deletelist';
  import removeFromList from '@graphqlFiles/mutations/removeFromList';
  import EventBus from '@components/EventBus';

  /**
   * This component display a modal where you can delete a wishlist
   */
  export default {
    name: 'Delete',
    props: {
      deleteProductUrl: {
        type: String,
        required: false,
        default: '#',
      },
      deleteListUrl: {
        type: String,
        required: false,
        default: '#',
      },
      title: {
        type: String,
        required: true,
        default: 'Delete',
      },
      titleList: {
        type: String,
        required: true,
        default: 'Delete',
      },
      placeholder: {
        type: String,
        required: true,
        default: 'This action is irreversible',
      },
      cancelText: {
        type: String,
        required: true,
        default: 'Cancel',
      },
      deleteText: {
        type: String,
        required: true,
        default: 'Delete',
      },
      deleteTextList: {
        type: String,
        required: true,
        default: 'Delete',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
        listId: null,
        listName: '',
        productId: null,
        productAttributeId: null,
      };
    },
    computed: {
      confirmMessage() {
        return this.placeholder.replace('%nameofthewishlist%', this.listName);
      },
      modalTitle() {
        return this.productId ? this.title : this.titleList;
      },
      modalDeleteText() {
        return this.productId ? this.deleteText : this.deleteTextList;
      },
    },
    methods: {
      /**
       * Toggle the modal
       */
      toggleModal() {
        this.isHidden = !this.isHidden;
      },
      /**
       * Launch a deleteList mutation to delete a Wishlist
       */
      async deleteWishlist() {
        const {data} = await this.\$apollo.mutate({
          mutation: this.productId ? removeFromList : deleteList,
          variables: {
            listId: this.listId,
            productId: parseInt(this.productId, 10),
            productAttributeId: parseInt(this.productAttributeId, 10),
            url: this.productId ? this.deleteProductUrl : this.deleteListUrl,
          },
        });

        const response = data.deleteList
          ? data.deleteList
          : data.removeFromList;

        /**
         * As this is not a real SPA, we need to inform others VueJS apps that they need to refetch the list
         */
        EventBus.\$emit('refetchList');

        EventBus.\$emit('showToast', {
          detail: {
            type: response.success ? 'success' : 'error',
            message: response.message,
          },
        });

        /**
         * Finally hide the modal after deleting the list
         * and reopen the wishlist modal
         */
        this.toggleModal();
      },
    },
    mounted() {
      /**
       * Register to the event showCreateWishlist so others components can toggle this modal
       *
       * @param {String} 'showDeleteWishlist'
       */
      EventBus.\$on('showDeleteWishlist', (event) => {
        this.value = '';
        this.listId = event.detail.listId;
        this.listName = event.detail.listName;
        this.productId = null;
        this.productAttributeId = null;

        if (event.detail.productId) {
          this.productId = event.detail.productId;
          this.productAttributeId = event.detail.productAttributeId;
        }

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
        return "@Modules/blockwishlist/_dev/front/js/components/Delete/Delete.vue";
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
  import deleteList from '@graphqlFiles/mutations/deletelist';
  import removeFromList from '@graphqlFiles/mutations/removeFromList';
  import EventBus from '@components/EventBus';

  /**
   * This component display a modal where you can delete a wishlist
   */
  export default {
    name: 'Delete',
    props: {
      deleteProductUrl: {
        type: String,
        required: false,
        default: '#',
      },
      deleteListUrl: {
        type: String,
        required: false,
        default: '#',
      },
      title: {
        type: String,
        required: true,
        default: 'Delete',
      },
      titleList: {
        type: String,
        required: true,
        default: 'Delete',
      },
      placeholder: {
        type: String,
        required: true,
        default: 'This action is irreversible',
      },
      cancelText: {
        type: String,
        required: true,
        default: 'Cancel',
      },
      deleteText: {
        type: String,
        required: true,
        default: 'Delete',
      },
      deleteTextList: {
        type: String,
        required: true,
        default: 'Delete',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
        listId: null,
        listName: '',
        productId: null,
        productAttributeId: null,
      };
    },
    computed: {
      confirmMessage() {
        return this.placeholder.replace('%nameofthewishlist%', this.listName);
      },
      modalTitle() {
        return this.productId ? this.title : this.titleList;
      },
      modalDeleteText() {
        return this.productId ? this.deleteText : this.deleteTextList;
      },
    },
    methods: {
      /**
       * Toggle the modal
       */
      toggleModal() {
        this.isHidden = !this.isHidden;
      },
      /**
       * Launch a deleteList mutation to delete a Wishlist
       */
      async deleteWishlist() {
        const {data} = await this.\$apollo.mutate({
          mutation: this.productId ? removeFromList : deleteList,
          variables: {
            listId: this.listId,
            productId: parseInt(this.productId, 10),
            productAttributeId: parseInt(this.productAttributeId, 10),
            url: this.productId ? this.deleteProductUrl : this.deleteListUrl,
          },
        });

        const response = data.deleteList
          ? data.deleteList
          : data.removeFromList;

        /**
         * As this is not a real SPA, we need to inform others VueJS apps that they need to refetch the list
         */
        EventBus.\$emit('refetchList');

        EventBus.\$emit('showToast', {
          detail: {
            type: response.success ? 'success' : 'error',
            message: response.message,
          },
        });

        /**
         * Finally hide the modal after deleting the list
         * and reopen the wishlist modal
         */
        this.toggleModal();
      },
    },
    mounted() {
      /**
       * Register to the event showCreateWishlist so others components can toggle this modal
       *
       * @param {String} 'showDeleteWishlist'
       */
      EventBus.\$on('showDeleteWishlist', (event) => {
        this.value = '';
        this.listId = event.detail.listId;
        this.listName = event.detail.listName;
        this.productId = null;
        this.productAttributeId = null;

        if (event.detail.productId) {
          this.productId = event.detail.productId;
          this.productAttributeId = event.detail.productAttributeId;
        }

        this.toggleModal();
      });
    },
  };
</script>
", "@Modules/blockwishlist/_dev/front/js/components/Delete/Delete.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/Delete/Delete.vue");
    }
}
