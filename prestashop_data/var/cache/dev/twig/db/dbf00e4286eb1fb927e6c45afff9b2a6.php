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

/* @Modules/ps_distributionapiclient/ps_distributionapiclient.php */
class __TwigTemplate_290ee64a8e757ca055d61284fac5fdb9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/ps_distributionapiclient.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_distributionapiclient/ps_distributionapiclient.php"));

        // line 1
        echo "<?php
/**
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

declare(strict_types=1);

use PrestaShop\\Module\\DistributionApiClient\\DistributionApi;

if (!defined('_PS_VERSION_')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class Ps_Distributionapiclient extends Module
{
    public function __construct()
    {
        \$this->name = 'ps_distributionapiclient';
        \$this->displayName = \$this->trans('Distribution API Client', [], 'Modules.Distributionapiclient.Admin');
        \$this->description = \$this->trans('Download and upgrade PrestaShop\\'s native modules.', [], 'Modules.Distributionapiclient.Admin');
        \$this->author = 'PrestaShop';
        \$this->version = '1.2.0';
        \$this->ps_versions_compliancy = ['min' => '8.0.2', 'max' => '8.99.999'];
        \$this->tab = 'market_place';
        parent::__construct();
    }

    public function install(): bool
    {
        return parent::install()
            && \$this->registerHook('actionListModules')
            && \$this->registerHook('actionBeforeInstallModule')
            && \$this->registerHook('actionBeforeUpgradeModule')
            && \$this->registerTab()
        ;
    }

    /**
     * @return array<array<string, string>>
     */
    public function hookActionListModules(): array
    {
        return \$this->getDistributionApi()->getModuleList();
    }

    /**
     * @param string[] \$params
     *
     * @return void
     */
    public function hookActionBeforeInstallModule(array \$params): void
    {
        \$distributionApi = \$this->getDistributionApi();
        if (!isset(\$params['moduleName']) || \$distributionApi->isModuleOnDisk(\$params['moduleName'])) {
            return;
        }

        \$distributionApi->downloadModule(\$params['moduleName']);
    }

    /**
     * @param string[] \$params
     *
     * @return void
     */
    public function hookActionBeforeUpgradeModule(array \$params): void
    {
        if (!isset(\$params['moduleName']) || !empty(\$params['source'])) {
            return;
        }

        \$this->getDistributionApi()->downloadModule(\$params['moduleName']);
    }

    private function getDistributionApi(): DistributionApi
    {
        /** @var DistributionApi \$distributionApi */
        \$distributionApi = \$this->get('distributionapiclient.distribution_api');

        return \$distributionApi;
    }

    public function registerTab(): bool
    {
        \$parentClass = 'AdminPsdistributionapiclientCommunity';
        \$parentTabId = Tab::getIdFromClassName(\$parentClass);
        \$parentTab = new Tab(\$parentTabId ?: null);
        \$parentTab->active = true;
        \$parentTab->class_name = \$parentClass;
        \$parentTab->id_parent = 0;
        \$parentTab->module = \$this->name;
        \$parentTab->wording = 'Community';
        \$parentTab->wording_domain = 'Modules.Distributionapiclient.Admin';
        /** @var array{'id_lang': int, \"locale\": string} \$lang */
        foreach (Language::getLanguages() as \$lang) {
            \$parentTab->name[\$lang['id_lang']] = \$this->trans('Community', [], 'Modules.Distributionapiclient.Admin', \$lang['locale']);
        }
        \$parentTab->save();

        // Creation of the sub tab \"Wall of Fame\"
        \$childClass = 'AdminPsdistributionapiclient';
        \$childTabId = Tab::getIdFromClassName(\$childClass);
        \$childTab = new Tab(\$childTabId ?: null);
        \$childTab->active = true;
        \$childTab->class_name = \$childClass;
        \$childTab->id_parent = (int) Tab::getIdFromClassName(\$parentClass);
        \$childTab->route_name = 'ps_distributionapiclient_top_contributors';
        \$childTab->module = \$this->name;
        \$childTab->wording = 'Wall of Fame';
        \$childTab->wording_domain = 'Modules.Distributionapiclient.Admin';
        \$childTab->icon = 'groups';
        /** @var array{'id_lang': int, \"locale\": string} \$lang */
        foreach (Language::getLanguages() as \$lang) {
            \$childTab->name[\$lang['id_lang']] = \$this->trans('Wall of Fame', [], 'Modules.Distributionapiclient.Admin', \$lang['locale']);
        }
        \$childTab->save();

        return true;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_distributionapiclient/ps_distributionapiclient.php";
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

declare(strict_types=1);

use PrestaShop\\Module\\DistributionApiClient\\DistributionApi;

if (!defined('_PS_VERSION_')) {
    exit;
}

if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

class Ps_Distributionapiclient extends Module
{
    public function __construct()
    {
        \$this->name = 'ps_distributionapiclient';
        \$this->displayName = \$this->trans('Distribution API Client', [], 'Modules.Distributionapiclient.Admin');
        \$this->description = \$this->trans('Download and upgrade PrestaShop\\'s native modules.', [], 'Modules.Distributionapiclient.Admin');
        \$this->author = 'PrestaShop';
        \$this->version = '1.2.0';
        \$this->ps_versions_compliancy = ['min' => '8.0.2', 'max' => '8.99.999'];
        \$this->tab = 'market_place';
        parent::__construct();
    }

    public function install(): bool
    {
        return parent::install()
            && \$this->registerHook('actionListModules')
            && \$this->registerHook('actionBeforeInstallModule')
            && \$this->registerHook('actionBeforeUpgradeModule')
            && \$this->registerTab()
        ;
    }

    /**
     * @return array<array<string, string>>
     */
    public function hookActionListModules(): array
    {
        return \$this->getDistributionApi()->getModuleList();
    }

    /**
     * @param string[] \$params
     *
     * @return void
     */
    public function hookActionBeforeInstallModule(array \$params): void
    {
        \$distributionApi = \$this->getDistributionApi();
        if (!isset(\$params['moduleName']) || \$distributionApi->isModuleOnDisk(\$params['moduleName'])) {
            return;
        }

        \$distributionApi->downloadModule(\$params['moduleName']);
    }

    /**
     * @param string[] \$params
     *
     * @return void
     */
    public function hookActionBeforeUpgradeModule(array \$params): void
    {
        if (!isset(\$params['moduleName']) || !empty(\$params['source'])) {
            return;
        }

        \$this->getDistributionApi()->downloadModule(\$params['moduleName']);
    }

    private function getDistributionApi(): DistributionApi
    {
        /** @var DistributionApi \$distributionApi */
        \$distributionApi = \$this->get('distributionapiclient.distribution_api');

        return \$distributionApi;
    }

    public function registerTab(): bool
    {
        \$parentClass = 'AdminPsdistributionapiclientCommunity';
        \$parentTabId = Tab::getIdFromClassName(\$parentClass);
        \$parentTab = new Tab(\$parentTabId ?: null);
        \$parentTab->active = true;
        \$parentTab->class_name = \$parentClass;
        \$parentTab->id_parent = 0;
        \$parentTab->module = \$this->name;
        \$parentTab->wording = 'Community';
        \$parentTab->wording_domain = 'Modules.Distributionapiclient.Admin';
        /** @var array{'id_lang': int, \"locale\": string} \$lang */
        foreach (Language::getLanguages() as \$lang) {
            \$parentTab->name[\$lang['id_lang']] = \$this->trans('Community', [], 'Modules.Distributionapiclient.Admin', \$lang['locale']);
        }
        \$parentTab->save();

        // Creation of the sub tab \"Wall of Fame\"
        \$childClass = 'AdminPsdistributionapiclient';
        \$childTabId = Tab::getIdFromClassName(\$childClass);
        \$childTab = new Tab(\$childTabId ?: null);
        \$childTab->active = true;
        \$childTab->class_name = \$childClass;
        \$childTab->id_parent = (int) Tab::getIdFromClassName(\$parentClass);
        \$childTab->route_name = 'ps_distributionapiclient_top_contributors';
        \$childTab->module = \$this->name;
        \$childTab->wording = 'Wall of Fame';
        \$childTab->wording_domain = 'Modules.Distributionapiclient.Admin';
        \$childTab->icon = 'groups';
        /** @var array{'id_lang': int, \"locale\": string} \$lang */
        foreach (Language::getLanguages() as \$lang) {
            \$childTab->name[\$lang['id_lang']] = \$this->trans('Wall of Fame', [], 'Modules.Distributionapiclient.Admin', \$lang['locale']);
        }
        \$childTab->save();

        return true;
    }
}
", "@Modules/ps_distributionapiclient/ps_distributionapiclient.php", "/var/www/html/modules/ps_distributionapiclient/ps_distributionapiclient.php");
    }
}
