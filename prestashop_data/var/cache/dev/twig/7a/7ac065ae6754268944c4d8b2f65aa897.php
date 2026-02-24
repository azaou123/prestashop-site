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

/* @Modules/ps_imageslider/css/homeslider.css */
class __TwigTemplate_c9237966120d405b63e5cdb4f99bbb54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_imageslider/css/homeslider.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_imageslider/css/homeslider.css"));

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
.homeslider-container {
  margin-bottom: 50px;
  position: relative;
  float: left;
  width: 100%;
}

.homeslider {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
}

.homeslider li {
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
}

.homeslider img {
  display: block;
  position: relative;
  z-index: 1;
  height: auto;
  width: 100%;
  border: 0;
}

.homeslider .caption {
  display: block;
  position: absolute;
  z-index: 2;
  font-size: 1em;
  text-shadow: none;
  color: #fff;
  background: #000;
  background: rgba(0,0,0, .6);
  left: 0;
  right: 0;
  bottom: 0;
  padding: 10px 20px;
  margin: 0;
  max-width: none;
}

.homeslider_nav {
  position: absolute;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  top: 52%;
  left: 0;
  opacity: 0.7;
  z-index: 3;
  text-indent: -9999px;
  overflow: hidden;
  text-decoration: none;
  height: 61px;
  width: 38px;
  background: transparent url(\"../homeslider.gif\") no-repeat left top;
  margin-top: -45px;
}

.homeslider_nav:active {
  opacity: 1.0;
}

.homeslider_nav.next {
  left: auto;
  background-position: right top;
  right: 0;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_imageslider/css/homeslider.css";
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
.homeslider-container {
  margin-bottom: 50px;
  position: relative;
  float: left;
  width: 100%;
}

.homeslider {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
}

.homeslider li {
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
}

.homeslider img {
  display: block;
  position: relative;
  z-index: 1;
  height: auto;
  width: 100%;
  border: 0;
}

.homeslider .caption {
  display: block;
  position: absolute;
  z-index: 2;
  font-size: 1em;
  text-shadow: none;
  color: #fff;
  background: #000;
  background: rgba(0,0,0, .6);
  left: 0;
  right: 0;
  bottom: 0;
  padding: 10px 20px;
  margin: 0;
  max-width: none;
}

.homeslider_nav {
  position: absolute;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  top: 52%;
  left: 0;
  opacity: 0.7;
  z-index: 3;
  text-indent: -9999px;
  overflow: hidden;
  text-decoration: none;
  height: 61px;
  width: 38px;
  background: transparent url(\"../homeslider.gif\") no-repeat left top;
  margin-top: -45px;
}

.homeslider_nav:active {
  opacity: 1.0;
}

.homeslider_nav.next {
  left: auto;
  background-position: right top;
  right: 0;
}
", "@Modules/ps_imageslider/css/homeslider.css", "/var/www/html/modules/ps_imageslider/css/homeslider.css");
    }
}
