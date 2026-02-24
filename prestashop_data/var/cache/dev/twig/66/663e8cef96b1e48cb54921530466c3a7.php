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

/* @Modules/ps_searchbar/upgrade/upgrade-2.1.2.php */
class __TwigTemplate_ff916bcb01ba4cd6f624fc59f7b93f91 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_searchbar/upgrade/upgrade-2.1.2.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_searchbar/upgrade/upgrade-2.1.2.php"));

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
if (!defined('_PS_VERSION_')) {
    exit;
}

// In the latest version PrestaShop 1.7.8 the override for this module in classic theme was removed
// because the module is now self-sufficient, so we disable it from the theme to make sure the correct
// internal template is used (we only clean the theme from core classic theme, and only if it was not
// updated). Since this version of the module is only compatible starting PS 1.7.8 this clean can always
// be performed regardless of the current PrestaShop version.
// We don't delete the file but rather rename it so that the merchant can perform a rollback in case important
// changes were present in the file

function upgrade_module_2_1_2(\$module)
{
    \$module->unregisterHook('top');
    \$module->registerHook('displayTop');
    \$module->unregisterHook('header');
    \$module->registerHook('displayHeader');

    if (defined('_PS_ROOT_DIR_')) {
        \$coreThemeFile = realpath(_PS_ROOT_DIR_ . '/themes/classic/modules/ps_searchbar/ps_searchbar.tpl');
        if (file_exists(\$coreThemeFile)) {
            @rename(\$coreThemeFile, \$coreThemeFile . '.bak');
        }
    }

    return true;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_searchbar/upgrade/upgrade-2.1.2.php";
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
if (!defined('_PS_VERSION_')) {
    exit;
}

// In the latest version PrestaShop 1.7.8 the override for this module in classic theme was removed
// because the module is now self-sufficient, so we disable it from the theme to make sure the correct
// internal template is used (we only clean the theme from core classic theme, and only if it was not
// updated). Since this version of the module is only compatible starting PS 1.7.8 this clean can always
// be performed regardless of the current PrestaShop version.
// We don't delete the file but rather rename it so that the merchant can perform a rollback in case important
// changes were present in the file

function upgrade_module_2_1_2(\$module)
{
    \$module->unregisterHook('top');
    \$module->registerHook('displayTop');
    \$module->unregisterHook('header');
    \$module->registerHook('displayHeader');

    if (defined('_PS_ROOT_DIR_')) {
        \$coreThemeFile = realpath(_PS_ROOT_DIR_ . '/themes/classic/modules/ps_searchbar/ps_searchbar.tpl');
        if (file_exists(\$coreThemeFile)) {
            @rename(\$coreThemeFile, \$coreThemeFile . '.bak');
        }
    }

    return true;
}
", "@Modules/ps_searchbar/upgrade/upgrade-2.1.2.php", "/var/www/html/modules/ps_searchbar/upgrade/upgrade-2.1.2.php");
    }
}
