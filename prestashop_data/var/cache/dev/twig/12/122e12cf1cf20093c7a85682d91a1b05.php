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

/* @Modules/blockwishlist/_dev/front/js/components/init.js */
class __TwigTemplate_9c6475033d9ded3674599a3516f867d5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/init.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/_dev/front/js/components/init.js"));

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
import Vue from 'vue';
import VueApollo from 'vue-apollo';
import apolloClient from '@graphqlFiles/client';

/**
 * Init a VueJS application to keep monolith features such as hooks or event the use of twig/smarty
 *
 * @param {Vue} component The component to be init
 * @param {String} componentSelector A selector for querySelectorAll
 * @param {Array[Object]} props An array containing Object{name, type} to parse int
 */
export default function initApp(component, componentSelector, props) {
  Vue.use(VueApollo);

  const apolloProvider = new VueApollo({
    defaultClient: apolloClient,
  });

  const componentElements = document.querySelectorAll(componentSelector);
  const ComponentRoot = Vue.extend(component);

  const propsData = {};

  componentElements.forEach((e) => {
    /* eslint-disable */
    for (const prop of props) {
      if (e.dataset[prop.name]) {
        if (prop.type === Number) {
          propsData[prop.name] = parseInt(e.dataset[prop.name], 10);
        } else if (prop.type === Boolean) {
          propsData[prop.name] = e.dataset[prop.name] === 'true';
        } else {
          propsData[prop.name] = e.dataset[prop.name];
        }
      }
    }
    /* eslint-enable */

    new ComponentRoot({
      el: e,
      delimiters: ['((', '))'],
      apolloProvider,
      propsData,
    });
  });
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/_dev/front/js/components/init.js";
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
import Vue from 'vue';
import VueApollo from 'vue-apollo';
import apolloClient from '@graphqlFiles/client';

/**
 * Init a VueJS application to keep monolith features such as hooks or event the use of twig/smarty
 *
 * @param {Vue} component The component to be init
 * @param {String} componentSelector A selector for querySelectorAll
 * @param {Array[Object]} props An array containing Object{name, type} to parse int
 */
export default function initApp(component, componentSelector, props) {
  Vue.use(VueApollo);

  const apolloProvider = new VueApollo({
    defaultClient: apolloClient,
  });

  const componentElements = document.querySelectorAll(componentSelector);
  const ComponentRoot = Vue.extend(component);

  const propsData = {};

  componentElements.forEach((e) => {
    /* eslint-disable */
    for (const prop of props) {
      if (e.dataset[prop.name]) {
        if (prop.type === Number) {
          propsData[prop.name] = parseInt(e.dataset[prop.name], 10);
        } else if (prop.type === Boolean) {
          propsData[prop.name] = e.dataset[prop.name] === 'true';
        } else {
          propsData[prop.name] = e.dataset[prop.name];
        }
      }
    }
    /* eslint-enable */

    new ComponentRoot({
      el: e,
      delimiters: ['((', '))'],
      apolloProvider,
      propsData,
    });
  });
}
", "@Modules/blockwishlist/_dev/front/js/components/init.js", "/var/www/html/modules/blockwishlist/_dev/front/js/components/init.js");
    }
}
