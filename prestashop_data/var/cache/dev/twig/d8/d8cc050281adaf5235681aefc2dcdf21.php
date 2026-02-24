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

/* @Modules/ps_facetedsearch/_dev/back/blocklayered.scss */
class __TwigTemplate_2744f33b41ac30ce7640229087761519 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/_dev/back/blocklayered.scss"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/_dev/back/blocklayered.scss"));

        // line 1
        echo "/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
.bootstrap {
  .filter_list .filter_list_item {
\t  display: table;
\t  width: 100%;
\t  padding: 5px 0;
\t  margin-bottom: 4px;
\t  background-color: white;
\t  -webkit-box-shadow: rgba(0, 0, 0, 0.3) 0 0 3px, rgba(0, 0, 0, 0.1) 0 -2px 0 inset;
\t  box-shadow: rgba(0, 0, 0, 0.3) 0 0 3px, rgba(0, 0, 0, 0.1) 0 -2px 0 inset;
\t  -webkit-border-radius: 3px;
\t  -moz-border-radius: 3px;
\t  -ms-border-radius: 3px;
\t  -o-border-radius: 3px;
\t  border-radius: 3px;
    cursor: pointer;
  }

  .filter_panel {
\t  min-height: 20px;
\t  padding: 7px 7px 0px 7px;
\t  margin-bottom: 20px;
\t  background-color: #ebebeb;
\t  border: 1px solid #d9d9d9;
\t  border-radius: 3px;
\t  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
\t  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);

    header {
\t    margin-bottom: 7px;
    }
  }

  .prestashop-switch {
    span {
      display: none;
    }
  }
}
.sortable-ghost {
\tcolor: orange;
}
#content.bootstrap {
\t.form-group-categories .panel {
\t\tmargin-bottom: 0;
\t}
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/_dev/back/blocklayered.scss";
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
.bootstrap {
  .filter_list .filter_list_item {
\t  display: table;
\t  width: 100%;
\t  padding: 5px 0;
\t  margin-bottom: 4px;
\t  background-color: white;
\t  -webkit-box-shadow: rgba(0, 0, 0, 0.3) 0 0 3px, rgba(0, 0, 0, 0.1) 0 -2px 0 inset;
\t  box-shadow: rgba(0, 0, 0, 0.3) 0 0 3px, rgba(0, 0, 0, 0.1) 0 -2px 0 inset;
\t  -webkit-border-radius: 3px;
\t  -moz-border-radius: 3px;
\t  -ms-border-radius: 3px;
\t  -o-border-radius: 3px;
\t  border-radius: 3px;
    cursor: pointer;
  }

  .filter_panel {
\t  min-height: 20px;
\t  padding: 7px 7px 0px 7px;
\t  margin-bottom: 20px;
\t  background-color: #ebebeb;
\t  border: 1px solid #d9d9d9;
\t  border-radius: 3px;
\t  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
\t  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);

    header {
\t    margin-bottom: 7px;
    }
  }

  .prestashop-switch {
    span {
      display: none;
    }
  }
}
.sortable-ghost {
\tcolor: orange;
}
#content.bootstrap {
\t.form-group-categories .panel {
\t\tmargin-bottom: 0;
\t}
}
", "@Modules/ps_facetedsearch/_dev/back/blocklayered.scss", "/var/www/html/modules/ps_facetedsearch/_dev/back/blocklayered.scss");
    }
}
