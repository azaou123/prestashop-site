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

/* @Modules/ps_languageselector/ps_languageselector.php */
class __TwigTemplate_4ea414bc336d6aabef58de4c6fbcc76b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_languageselector/ps_languageselector.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_languageselector/ps_languageselector.php"));

        // line 1
        echo "<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

class Ps_Languageselector extends Module implements WidgetInterface
{
    /**
     * @var string Name of the module running on PS 1.6.x. Used for data migration.
     */
    const PS_16_EQUIVALENT_MODULE = 'blocklanguages';

    private \$templateFile;

    public function __construct()
    {
        \$this->name = 'ps_languageselector';
        \$this->tab = 'front_office_features';
        \$this->author = 'PrestaShop';
        \$this->version = '2.1.3';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Language selector block', [], 'Modules.Languageselector.Admin');
        \$this->description = \$this->trans('Go international and display a language selector in the header of your store so that customers can shop in their own language.', [], 'Modules.Languageselector.Admin');

        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];

        \$this->templateFile = 'module:ps_languageselector/ps_languageselector.tpl';
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

        return parent::install();
    }

    public function renderWidget(\$hookName = null, array \$configuration = [])
    {
        \$languages = Language::getLanguages(true, \$this->context->shop->id);

        if (1 < count(\$languages)) {
            \$this->smarty->assign(\$this->getWidgetVariables(\$hookName, \$configuration));

            return \$this->fetch(\$this->templateFile);
        }

        return false;
    }

    public function getWidgetVariables(\$hookName = null, array \$configuration = [])
    {
        \$languages = Language::getLanguages(true, \$this->context->shop->id);

        foreach (\$languages as &\$lang) {
            \$lang['name_simple'] = \$this->getNameSimple(\$lang['name']);
        }

        return [
            'languages' => \$languages,
            'current_language' => [
                'id_lang' => \$this->context->language->id,
                'name' => \$this->context->language->name,
                'name_simple' => \$this->getNameSimple(\$this->context->language->name),
                'iso_code' => \$this->context->language->iso_code,
            ],
        ];
    }

    private function getNameSimple(\$name)
    {
        return preg_replace('/\\s\\(.*\\)\$/', '', \$name);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_languageselector/ps_languageselector.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
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
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

class Ps_Languageselector extends Module implements WidgetInterface
{
    /**
     * @var string Name of the module running on PS 1.6.x. Used for data migration.
     */
    const PS_16_EQUIVALENT_MODULE = 'blocklanguages';

    private \$templateFile;

    public function __construct()
    {
        \$this->name = 'ps_languageselector';
        \$this->tab = 'front_office_features';
        \$this->author = 'PrestaShop';
        \$this->version = '2.1.3';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Language selector block', [], 'Modules.Languageselector.Admin');
        \$this->description = \$this->trans('Go international and display a language selector in the header of your store so that customers can shop in their own language.', [], 'Modules.Languageselector.Admin');

        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];

        \$this->templateFile = 'module:ps_languageselector/ps_languageselector.tpl';
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

        return parent::install();
    }

    public function renderWidget(\$hookName = null, array \$configuration = [])
    {
        \$languages = Language::getLanguages(true, \$this->context->shop->id);

        if (1 < count(\$languages)) {
            \$this->smarty->assign(\$this->getWidgetVariables(\$hookName, \$configuration));

            return \$this->fetch(\$this->templateFile);
        }

        return false;
    }

    public function getWidgetVariables(\$hookName = null, array \$configuration = [])
    {
        \$languages = Language::getLanguages(true, \$this->context->shop->id);

        foreach (\$languages as &\$lang) {
            \$lang['name_simple'] = \$this->getNameSimple(\$lang['name']);
        }

        return [
            'languages' => \$languages,
            'current_language' => [
                'id_lang' => \$this->context->language->id,
                'name' => \$this->context->language->name,
                'name_simple' => \$this->getNameSimple(\$this->context->language->name),
                'iso_code' => \$this->context->language->iso_code,
            ],
        ];
    }

    private function getNameSimple(\$name)
    {
        return preg_replace('/\\s\\(.*\\)\$/', '', \$name);
    }
}
", "@Modules/ps_languageselector/ps_languageselector.php", "/var/www/html/modules/ps_languageselector/ps_languageselector.php");
    }
}
