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

/* @Modules/blockreassurance/_dev/front/index.js */
class __TwigTemplate_a6134a7e560a6f6dfc6497be84bbb17f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/_dev/front/index.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockreassurance/_dev/front/index.js"));

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

import './front.scss';

\$(window).ready(() => {
  /**
   * @param {String} imgSrc
   */
  function styleSVG(imgSrc) {
    const imgTarget = \$(`.blockreassurance_product img.svg.invisible[src=\"\${imgSrc}\"], .blockreassurance img.svg.invisible[src=\"\${imgSrc}\"]`);

    if (imgTarget.length === 0) {
      return;
    }

    // Fetch the image
    \$.ajax({
      url: imgSrc,
      type: 'GET',
      success(data) {
        if (\$.isXMLDoc(data)) {
          // Get the SVG tag, ignore the rest
          let \$svg = \$(data).find('svg');
          // Add URL in data
          \$svg = \$svg.attr('data-img-url', imgSrc);
          // Remove any invalid XML tags as per http://validator.w3.org
          \$svg = \$svg.removeAttr('xmlns:a');
          // Set color defined in backoffice
          \$svg.find('path[fill]').attr('fill', window.psr_icon_color);
          \$svg.find('path:not([fill])').css('fill', window.psr_icon_color);
          // For each element, replace the svg with specific ID & CSS class
          imgTarget.each(function renderSVG() {
            const imgID = \$(this).attr('id');
            const imgClass = \$(this).attr('class');
            let \$imgSvg = \$svg.clone();
            // Add replaced image's ID to the new SVG
            \$imgSvg = typeof imgID !== 'undefined' ? \$imgSvg.attr('id', imgID) : \$imgSvg;
            // Add replaced image's classes to the new SVG
            \$imgSvg = typeof imgClass !== 'undefined' ? \$imgSvg.attr('class', `\${imgClass} replaced-svg`) : \$imgSvg.attr('class', ' replaced-svg');
            \$imgSvg.removeClass('invisible');
            \$(this).replaceWith(\$imgSvg);
          });
        }
      },
    });
  }

  const imgSrcSvg = \$('.blockreassurance_product img.svg, .blockreassurance img.svg').map(function getSrcAttr() {
    return \$(this).attr('src');
  }).toArray();
  imgSrcSvg
    .filter((el, pos) => imgSrcSvg.indexOf(el) === pos)
    .forEach(styleSVG);
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockreassurance/_dev/front/index.js";
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

import './front.scss';

\$(window).ready(() => {
  /**
   * @param {String} imgSrc
   */
  function styleSVG(imgSrc) {
    const imgTarget = \$(`.blockreassurance_product img.svg.invisible[src=\"\${imgSrc}\"], .blockreassurance img.svg.invisible[src=\"\${imgSrc}\"]`);

    if (imgTarget.length === 0) {
      return;
    }

    // Fetch the image
    \$.ajax({
      url: imgSrc,
      type: 'GET',
      success(data) {
        if (\$.isXMLDoc(data)) {
          // Get the SVG tag, ignore the rest
          let \$svg = \$(data).find('svg');
          // Add URL in data
          \$svg = \$svg.attr('data-img-url', imgSrc);
          // Remove any invalid XML tags as per http://validator.w3.org
          \$svg = \$svg.removeAttr('xmlns:a');
          // Set color defined in backoffice
          \$svg.find('path[fill]').attr('fill', window.psr_icon_color);
          \$svg.find('path:not([fill])').css('fill', window.psr_icon_color);
          // For each element, replace the svg with specific ID & CSS class
          imgTarget.each(function renderSVG() {
            const imgID = \$(this).attr('id');
            const imgClass = \$(this).attr('class');
            let \$imgSvg = \$svg.clone();
            // Add replaced image's ID to the new SVG
            \$imgSvg = typeof imgID !== 'undefined' ? \$imgSvg.attr('id', imgID) : \$imgSvg;
            // Add replaced image's classes to the new SVG
            \$imgSvg = typeof imgClass !== 'undefined' ? \$imgSvg.attr('class', `\${imgClass} replaced-svg`) : \$imgSvg.attr('class', ' replaced-svg');
            \$imgSvg.removeClass('invisible');
            \$(this).replaceWith(\$imgSvg);
          });
        }
      },
    });
  }

  const imgSrcSvg = \$('.blockreassurance_product img.svg, .blockreassurance img.svg').map(function getSrcAttr() {
    return \$(this).attr('src');
  }).toArray();
  imgSrcSvg
    .filter((el, pos) => imgSrcSvg.indexOf(el) === pos)
    .forEach(styleSVG);
});
", "@Modules/blockreassurance/_dev/front/index.js", "/var/www/html/modules/blockreassurance/_dev/front/index.js");
    }
}
