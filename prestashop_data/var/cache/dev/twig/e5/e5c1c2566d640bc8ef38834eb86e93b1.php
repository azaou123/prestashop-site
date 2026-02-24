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

/* @Modules/ps_linklist/views/js/form/index.js */
class __TwigTemplate_606da70daea0a90de5930b9d2189b6c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/views/js/form/index.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/views/js/form/index.js"));

        // line 1
        echo "/**
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
 */

import TranslatableInput from '@components/translatable-input';
import ChoiceTree from '@components/form/choice-tree';

const \$ = window.\$;

\$(() => {
  new TranslatableInput({localeInputSelector: '.js-locale-input'});

  const idHookSelect = \$('#form_link_block_id_hook');
  if (idHookSelect.hasClass('select2-hidden-accessible')) {
    const targetNode = document.getElementsByTagName('body')[0];
    const observer = new MutationObserver(function(mutationsList, observer) {
      for(let mutation of mutationsList) {
        if (mutation.type === 'childList' && mutation.addedNodes.length == 1) {
          let node = mutation.addedNodes[0];
          if (\$(node).hasClass('select2-container--open')) {
            \$('#select2-form_link_block_id_hook-results li').each(function () {
              \$(this).attr('data-hook-name', \$(this).html());
            });
          }
        }
      }
    });
    observer.observe(targetNode,  { childList: true });
  }

  const addCustomButton = \$('.add-collection-btn');
  addCustomButton.on('click', appendPrototype);

  const collectionId = addCustomButton.data().collectionId;
  const collection = document.getElementById(collectionId);
  const collectionPrototype = collection.dataset.prototype;

  if (collection.children.length) {
    \$('.custom_collection .col-sm-12').each((index, customBlock) => {
      appendDeleteButton(\$(customBlock));
    });
  } else {
    appendPrototype();
  }

  function appendPrototype(event) {
    if (event) {
      event.preventDefault();
    }

    const newChild = collectionPrototype.replace(/__name__/g, (collection.children.length + 1));
    const \$newChild = \$(newChild);
    \$('#'+collectionId).append(\$newChild);
    appendDeleteButton(\$newChild);
  }

  function appendDeleteButton(customBlock) {
    const collection = customBlock.closest('.custom_collection');
    const \$button = \$('<button class=\"remove_custom_url btn btn-primary mt-1\">'+collection.data('deleteButtonLabel')+'</button>');
    \$button.on('click', (event) => {
      event.preventDefault();
      const \$button = \$(event.target);
      const \$row = \$button.closest('.row');
      \$row.remove();

      return false;
    });
    customBlock.find('.locale-input-group').first().closest('.col-sm-12').append(\$button);
  }

  new ChoiceTree('#form_link_block_shop_association').enableAutoCheckChildren();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/views/js/form/index.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
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
 */

import TranslatableInput from '@components/translatable-input';
import ChoiceTree from '@components/form/choice-tree';

const \$ = window.\$;

\$(() => {
  new TranslatableInput({localeInputSelector: '.js-locale-input'});

  const idHookSelect = \$('#form_link_block_id_hook');
  if (idHookSelect.hasClass('select2-hidden-accessible')) {
    const targetNode = document.getElementsByTagName('body')[0];
    const observer = new MutationObserver(function(mutationsList, observer) {
      for(let mutation of mutationsList) {
        if (mutation.type === 'childList' && mutation.addedNodes.length == 1) {
          let node = mutation.addedNodes[0];
          if (\$(node).hasClass('select2-container--open')) {
            \$('#select2-form_link_block_id_hook-results li').each(function () {
              \$(this).attr('data-hook-name', \$(this).html());
            });
          }
        }
      }
    });
    observer.observe(targetNode,  { childList: true });
  }

  const addCustomButton = \$('.add-collection-btn');
  addCustomButton.on('click', appendPrototype);

  const collectionId = addCustomButton.data().collectionId;
  const collection = document.getElementById(collectionId);
  const collectionPrototype = collection.dataset.prototype;

  if (collection.children.length) {
    \$('.custom_collection .col-sm-12').each((index, customBlock) => {
      appendDeleteButton(\$(customBlock));
    });
  } else {
    appendPrototype();
  }

  function appendPrototype(event) {
    if (event) {
      event.preventDefault();
    }

    const newChild = collectionPrototype.replace(/__name__/g, (collection.children.length + 1));
    const \$newChild = \$(newChild);
    \$('#'+collectionId).append(\$newChild);
    appendDeleteButton(\$newChild);
  }

  function appendDeleteButton(customBlock) {
    const collection = customBlock.closest('.custom_collection');
    const \$button = \$('<button class=\"remove_custom_url btn btn-primary mt-1\">'+collection.data('deleteButtonLabel')+'</button>');
    \$button.on('click', (event) => {
      event.preventDefault();
      const \$button = \$(event.target);
      const \$row = \$button.closest('.row');
      \$row.remove();

      return false;
    });
    customBlock.find('.locale-input-group').first().closest('.col-sm-12').append(\$button);
  }

  new ChoiceTree('#form_link_block_shop_association').enableAutoCheckChildren();
});
", "@Modules/ps_linklist/views/js/form/index.js", "/var/www/html/modules/ps_linklist/views/js/form/index.js");
    }
}
