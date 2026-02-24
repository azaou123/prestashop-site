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

/* @Modules/ps_currencyselector/ps_currencyselector.php */
class __TwigTemplate_d746246cb5bd7f0eb39f26167258197d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_currencyselector/ps_currencyselector.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_currencyselector/ps_currencyselector.php"));

        // line 1
        echo "<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

use PrestaShop\\PrestaShop\\Adapter\\Presenter\\Object\\ObjectPresenter;
use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ps_Currencyselector extends Module implements WidgetInterface
{
    private \$templateFile;

    public function __construct()
    {
        \$this->name = 'ps_currencyselector';
        \$this->tab = 'front_office_features';
        \$this->author = 'PrestaShop';
        \$this->version = '2.1.1';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Currency block', [], 'Modules.Currencyselector.Admin');
        \$this->description = \$this->trans('Offer your customers the possibility to buy matching items when on a product page.', [], 'Modules.Currencyselector.Admin');

        \$this->ps_versions_compliancy = ['min' => '1.7.5.0', 'max' => _PS_VERSION_];

        \$this->templateFile = 'module:ps_currencyselector/ps_currencyselector.tpl';
    }

    public function install()
    {
        return parent::install()
            && \$this->registerHook('actionAdminCurrenciesControllerSaveAfter');
    }

    public function hookActionAdminCurrenciesControllerSaveAfter()
    {
        return parent::_clearCache(\$this->templateFile);
    }

    public function getWidgetVariables(\$hookName, array \$configuration)
    {
        \$current_currency = null;
        \$serializer = new ObjectPresenter();
        \$currencies = array_map(
            function (\$currency) use (\$serializer, &\$current_currency) {
                \$currencyArray = \$serializer->present(\$currency);

                // serializer doesn't see 'sign' because it is not a regular
                // ObjectModel field.
                \$currencyArray['sign'] = \$currency->sign;

                \$url = \$this->context->link->getLanguageLink(\$this->context->language->id);

                \$parsedUrl = parse_url(\$url);
                \$urlParams = [];
                if (isset(\$parsedUrl['query'])) {
                    parse_str(\$parsedUrl['query'], \$urlParams);
                }
                \$newParams = array_merge(
                    \$urlParams,
                    [
                        'SubmitCurrency' => 1,
                        'id_currency' => \$currency->id,
                    ]
                );
                \$newUrl = sprintf('%s://%s%s%s?%s',
                    \$parsedUrl['scheme'],
                    \$parsedUrl['host'],
                    isset(\$parsedUrl['port']) ? ':' . \$parsedUrl['port'] : '',
                    \$parsedUrl['path'],
                    http_build_query(\$newParams)
                );

                \$currencyArray['url'] = \$newUrl;

                if (\$currency->id === \$this->context->currency->id) {
                    \$currencyArray['current'] = true;
                    \$current_currency = \$currencyArray;
                } else {
                    \$currencyArray['current'] = false;
                }

                return \$currencyArray;
            },
            Currency::getCurrencies(true, true)
        );

        return [
            'currencies' => \$currencies,
            'current_currency' => \$current_currency,
        ];
    }

    public function renderWidget(\$hookName, array \$configuration)
    {
        if (Configuration::isCatalogMode() || !Currency::isMultiCurrencyActivated()) {
            return false;
        }

        \$this->smarty->assign(\$this->getWidgetVariables(\$hookName, \$configuration));

        return \$this->fetch(\$this->templateFile);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_currencyselector/ps_currencyselector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

use PrestaShop\\PrestaShop\\Adapter\\Presenter\\Object\\ObjectPresenter;
use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ps_Currencyselector extends Module implements WidgetInterface
{
    private \$templateFile;

    public function __construct()
    {
        \$this->name = 'ps_currencyselector';
        \$this->tab = 'front_office_features';
        \$this->author = 'PrestaShop';
        \$this->version = '2.1.1';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Currency block', [], 'Modules.Currencyselector.Admin');
        \$this->description = \$this->trans('Offer your customers the possibility to buy matching items when on a product page.', [], 'Modules.Currencyselector.Admin');

        \$this->ps_versions_compliancy = ['min' => '1.7.5.0', 'max' => _PS_VERSION_];

        \$this->templateFile = 'module:ps_currencyselector/ps_currencyselector.tpl';
    }

    public function install()
    {
        return parent::install()
            && \$this->registerHook('actionAdminCurrenciesControllerSaveAfter');
    }

    public function hookActionAdminCurrenciesControllerSaveAfter()
    {
        return parent::_clearCache(\$this->templateFile);
    }

    public function getWidgetVariables(\$hookName, array \$configuration)
    {
        \$current_currency = null;
        \$serializer = new ObjectPresenter();
        \$currencies = array_map(
            function (\$currency) use (\$serializer, &\$current_currency) {
                \$currencyArray = \$serializer->present(\$currency);

                // serializer doesn't see 'sign' because it is not a regular
                // ObjectModel field.
                \$currencyArray['sign'] = \$currency->sign;

                \$url = \$this->context->link->getLanguageLink(\$this->context->language->id);

                \$parsedUrl = parse_url(\$url);
                \$urlParams = [];
                if (isset(\$parsedUrl['query'])) {
                    parse_str(\$parsedUrl['query'], \$urlParams);
                }
                \$newParams = array_merge(
                    \$urlParams,
                    [
                        'SubmitCurrency' => 1,
                        'id_currency' => \$currency->id,
                    ]
                );
                \$newUrl = sprintf('%s://%s%s%s?%s',
                    \$parsedUrl['scheme'],
                    \$parsedUrl['host'],
                    isset(\$parsedUrl['port']) ? ':' . \$parsedUrl['port'] : '',
                    \$parsedUrl['path'],
                    http_build_query(\$newParams)
                );

                \$currencyArray['url'] = \$newUrl;

                if (\$currency->id === \$this->context->currency->id) {
                    \$currencyArray['current'] = true;
                    \$current_currency = \$currencyArray;
                } else {
                    \$currencyArray['current'] = false;
                }

                return \$currencyArray;
            },
            Currency::getCurrencies(true, true)
        );

        return [
            'currencies' => \$currencies,
            'current_currency' => \$current_currency,
        ];
    }

    public function renderWidget(\$hookName, array \$configuration)
    {
        if (Configuration::isCatalogMode() || !Currency::isMultiCurrencyActivated()) {
            return false;
        }

        \$this->smarty->assign(\$this->getWidgetVariables(\$hookName, \$configuration));

        return \$this->fetch(\$this->templateFile);
    }
}
", "@Modules/ps_currencyselector/ps_currencyselector.php", "/var/www/html/modules/ps_currencyselector/ps_currencyselector.php");
    }
}
