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

/* @Modules/blockwishlist/_dev/front/js/components/Share/Share.vue */
class __TwigTemplate_6efee6c2f78f0a77af8b394400efd102 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Share/Share.vue"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/Share/Share.vue"));

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

  /**
   * This component display a modal where you can create a wishlist
   */
  export default {
    name: 'Share',
    props: {
      url: {
        type: String,
        required: true,
        default: '#',
      },
      title: {
        type: String,
        required: true,
        default: 'Share wishlist',
      },
      label: {
        type: String,
        required: true,
        default: 'Share link',
      },
      cancelText: {
        type: String,
        required: true,
        default: 'Cancel',
      },
      copyText: {
        type: String,
        required: true,
        default: 'Copy text',
      },
      copiedText: {
        type: String,
        required: true,
        default: 'Copied',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
        actionText: '',
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
       * Copy the link in the input value
       */
      copyLink() {
        const shareInput = document.querySelector(
          '.wishlist-share .form-control',
        );

        shareInput.select();
        shareInput.setSelectionRange(0, 99999);

        document.execCommand('copy');

        this.actionText = this.copiedText;

        this.toggleModal();

        EventBus.\$emit('showToast', {
          detail: {
            type: 'success',
            message: 'copyText',
          },
        });
      },
    },
    mounted() {
      this.actionText = this.copyText;

      /**
       * Register to the event showCreateWishlist so others components can toggle this modal
       *
       * @param {String} 'showCreateWishlist'
       */
      EventBus.\$on('showShareWishlist', async (event) => {
        this.actionText = this.copyText;
        this.value = event.detail.shareUrl;
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
        return "@Modules/blockwishlist/_dev/front/js/components/Share/Share.vue";
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

  /**
   * This component display a modal where you can create a wishlist
   */
  export default {
    name: 'Share',
    props: {
      url: {
        type: String,
        required: true,
        default: '#',
      },
      title: {
        type: String,
        required: true,
        default: 'Share wishlist',
      },
      label: {
        type: String,
        required: true,
        default: 'Share link',
      },
      cancelText: {
        type: String,
        required: true,
        default: 'Cancel',
      },
      copyText: {
        type: String,
        required: true,
        default: 'Copy text',
      },
      copiedText: {
        type: String,
        required: true,
        default: 'Copied',
      },
    },
    data() {
      return {
        value: '',
        isHidden: true,
        actionText: '',
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
       * Copy the link in the input value
       */
      copyLink() {
        const shareInput = document.querySelector(
          '.wishlist-share .form-control',
        );

        shareInput.select();
        shareInput.setSelectionRange(0, 99999);

        document.execCommand('copy');

        this.actionText = this.copiedText;

        this.toggleModal();

        EventBus.\$emit('showToast', {
          detail: {
            type: 'success',
            message: 'copyText',
          },
        });
      },
    },
    mounted() {
      this.actionText = this.copyText;

      /**
       * Register to the event showCreateWishlist so others components can toggle this modal
       *
       * @param {String} 'showCreateWishlist'
       */
      EventBus.\$on('showShareWishlist', async (event) => {
        this.actionText = this.copyText;
        this.value = event.detail.shareUrl;
        this.toggleModal();
      });
    },
  };
</script>
", "@Modules/blockwishlist/_dev/front/js/components/Share/Share.vue", "/var/www/html/modules/blockwishlist/_dev/front/js/components/Share/Share.vue");
    }
}
