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

/* @Modules/ps_facetedsearch/controllers/front/cron.php */
class __TwigTemplate_e0a4412e1c7f1d8bdaa12a57990609f0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/controllers/front/cron.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/controllers/front/cron.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

class Ps_FacetedSearchCronModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
        \$this->ajax = true;
    }

    public function postProcess()
    {
        if (substr(Tools::hash('ps_facetedsearch/index'), 0, 10) != Tools::getValue('token')) {
            header('HTTP/1.1 403 Forbidden');
            header('Status: 403 Forbidden');
            \$this->ajaxRender('Bad token');

            return;
        }

        \$action = Tools::getValue('action');
        switch (\$action) {
            case 'indexAttributes':
                Shop::setContext(Shop::CONTEXT_ALL);

                \$psFacetedsearch = new Ps_Facetedsearch();
                \$psFacetedsearch->indexAttributes();
                \$psFacetedsearch->indexFeatures();
                \$psFacetedsearch->indexAttributeGroup();

                \$this->ajaxRender('1');
                break;
            case 'clearCache':
                \$psFacetedsearch = new Ps_Facetedsearch();
                \$this->ajaxRender(\$psFacetedsearch->invalidateLayeredFilterBlockCache());
                break;
            case 'indexPrices':
                Shop::setContext(Shop::CONTEXT_ALL);

                \$module = new Ps_Facetedsearch();
                if (Tools::getValue('full')) {
                    \$this->ajaxRender(\$module->fullPricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax'), true));
                } else {
                    \$this->ajaxRender(\$module->pricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax')));
                }

                break;
            default:
                header('HTTP/1.1 403 Forbidden');
                header('Status: 403 Forbidden');
                \$this->ajaxRender('Unknown action');
        }
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/controllers/front/cron.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

class Ps_FacetedSearchCronModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
        \$this->ajax = true;
    }

    public function postProcess()
    {
        if (substr(Tools::hash('ps_facetedsearch/index'), 0, 10) != Tools::getValue('token')) {
            header('HTTP/1.1 403 Forbidden');
            header('Status: 403 Forbidden');
            \$this->ajaxRender('Bad token');

            return;
        }

        \$action = Tools::getValue('action');
        switch (\$action) {
            case 'indexAttributes':
                Shop::setContext(Shop::CONTEXT_ALL);

                \$psFacetedsearch = new Ps_Facetedsearch();
                \$psFacetedsearch->indexAttributes();
                \$psFacetedsearch->indexFeatures();
                \$psFacetedsearch->indexAttributeGroup();

                \$this->ajaxRender('1');
                break;
            case 'clearCache':
                \$psFacetedsearch = new Ps_Facetedsearch();
                \$this->ajaxRender(\$psFacetedsearch->invalidateLayeredFilterBlockCache());
                break;
            case 'indexPrices':
                Shop::setContext(Shop::CONTEXT_ALL);

                \$module = new Ps_Facetedsearch();
                if (Tools::getValue('full')) {
                    \$this->ajaxRender(\$module->fullPricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax'), true));
                } else {
                    \$this->ajaxRender(\$module->pricesIndexProcess((int) Tools::getValue('cursor'), (bool) Tools::getValue('ajax')));
                }

                break;
            default:
                header('HTTP/1.1 403 Forbidden');
                header('Status: 403 Forbidden');
                \$this->ajaxRender('Unknown action');
        }
    }
}
", "@Modules/ps_facetedsearch/controllers/front/cron.php", "/var/www/html/modules/ps_facetedsearch/controllers/front/cron.php");
    }
}
