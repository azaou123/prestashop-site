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

/* @Modules/ps_customersignin/ps_customersignin.php */
class __TwigTemplate_e70068e0a16490f44d4298f65a21df02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_customersignin/ps_customersignin.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_customersignin/ps_customersignin.php"));

        // line 1
        echo "<?php
/**
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ps_CustomerSignIn extends Module implements WidgetInterface
{
    /**
     * @var string Name of the module running on PS 1.6.x. Used for data migration.
     */
    const PS_16_EQUIVALENT_MODULE = 'blockuserinfo';

    private \$templateFile;

    public function __construct()
    {
        \$this->name = 'ps_customersignin';
        \$this->tab = 'front_office_features';
        \$this->author = 'PrestaShop';
        \$this->version = '2.0.5';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->getTranslator()->trans('Customer \"Sign in\" link', [], 'Modules.Customersignin.Admin');
        \$this->description = \$this->getTranslator()->trans('Make your customers feel at home on your store, invite them to sign in!', [], 'Modules.Customersignin.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];

        \$this->templateFile = 'module:ps_customersignin/ps_customersignin.tpl';
    }

    public function install()
    {
        // Migrate data from 1.6 equivalent module (if applicable), then uninstall
        if (Module::isInstalled(self::PS_16_EQUIVALENT_MODULE)) {
            \$oldModule = Module::getInstanceByName(self::PS_16_EQUIVALENT_MODULE);
            if (\$oldModule) {
                \$oldModule->uninstall();
            }
        }

        return parent::install()
            && \$this->registerHook('displayNav2');
    }

    public function getWidgetVariables(\$hookName, array \$configuration)
    {
        \$logged = \$this->context->customer->isLogged();

        if (\$logged) {
            \$customerName = \$this->getTranslator()->trans(
                '%firstname% %lastname%',
                [
                    '%firstname%' => \$this->context->customer->firstname,
                    '%lastname%' => \$this->context->customer->lastname,
                ],
                'Modules.Customersignin.Admin'
            );
        } else {
            \$customerName = '';
        }

        \$link = \$this->context->link;

        return [
            /*
            * @deprecated
            */
            'logged' => \$logged,
            'customerName' => \$customerName,
            /*
            * @deprecated
            */
            'logout_url' => \$link->getPageLink('index', true, null, 'mylogout'),
            /*
            * @deprecated
            */
            'my_account_url' => \$link->getPageLink('my-account', true),
        ];
    }

    public function renderWidget(\$hookName, array \$configuration)
    {
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
        return "@Modules/ps_customersignin/ps_customersignin.php";
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
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

class Ps_CustomerSignIn extends Module implements WidgetInterface
{
    /**
     * @var string Name of the module running on PS 1.6.x. Used for data migration.
     */
    const PS_16_EQUIVALENT_MODULE = 'blockuserinfo';

    private \$templateFile;

    public function __construct()
    {
        \$this->name = 'ps_customersignin';
        \$this->tab = 'front_office_features';
        \$this->author = 'PrestaShop';
        \$this->version = '2.0.5';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->getTranslator()->trans('Customer \"Sign in\" link', [], 'Modules.Customersignin.Admin');
        \$this->description = \$this->getTranslator()->trans('Make your customers feel at home on your store, invite them to sign in!', [], 'Modules.Customersignin.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];

        \$this->templateFile = 'module:ps_customersignin/ps_customersignin.tpl';
    }

    public function install()
    {
        // Migrate data from 1.6 equivalent module (if applicable), then uninstall
        if (Module::isInstalled(self::PS_16_EQUIVALENT_MODULE)) {
            \$oldModule = Module::getInstanceByName(self::PS_16_EQUIVALENT_MODULE);
            if (\$oldModule) {
                \$oldModule->uninstall();
            }
        }

        return parent::install()
            && \$this->registerHook('displayNav2');
    }

    public function getWidgetVariables(\$hookName, array \$configuration)
    {
        \$logged = \$this->context->customer->isLogged();

        if (\$logged) {
            \$customerName = \$this->getTranslator()->trans(
                '%firstname% %lastname%',
                [
                    '%firstname%' => \$this->context->customer->firstname,
                    '%lastname%' => \$this->context->customer->lastname,
                ],
                'Modules.Customersignin.Admin'
            );
        } else {
            \$customerName = '';
        }

        \$link = \$this->context->link;

        return [
            /*
            * @deprecated
            */
            'logged' => \$logged,
            'customerName' => \$customerName,
            /*
            * @deprecated
            */
            'logout_url' => \$link->getPageLink('index', true, null, 'mylogout'),
            /*
            * @deprecated
            */
            'my_account_url' => \$link->getPageLink('my-account', true),
        ];
    }

    public function renderWidget(\$hookName, array \$configuration)
    {
        \$this->smarty->assign(\$this->getWidgetVariables(\$hookName, \$configuration));

        return \$this->fetch(\$this->templateFile);
    }
}
", "@Modules/ps_customersignin/ps_customersignin.php", "/var/www/html/modules/ps_customersignin/ps_customersignin.php");
    }
}
