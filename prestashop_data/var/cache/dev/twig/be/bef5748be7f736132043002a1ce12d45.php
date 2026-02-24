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

/* @Modules/ps_facetedsearch/upgrade/upgrade-3.4.1.php */
class __TwigTemplate_31d7c6ff4eb82bd2872548c8d5d761ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/upgrade/upgrade-3.4.1.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/upgrade/upgrade-3.4.1.php"));

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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Removes files or directories.
 *
 * @param array \$files An array of files to remove
 *
 * @return true|string True if everything goes fine, error details otherwise
 */
function removeFromFsDuringUpgrade(array \$files)
{
    \$files = array_reverse(\$files);
    foreach (\$files as \$file) {
        if (is_dir(\$file)) {
            \$iterator = new FilesystemIterator(\$file, FilesystemIterator::CURRENT_AS_PATHNAME | FilesystemIterator::SKIP_DOTS);
            removeFromFsDuringUpgrade(iterator_to_array(\$iterator));
            if (!rmdir(\$file) && file_exists(\$file)) {
                return 'Deletion of directory ' . \$file . 'failed';
            }
        } elseif (!unlink(\$file) && file_exists(\$file)) {
            return 'Deletion of file ' . \$file . 'failed';
        }
    }

    return true;
}
/**
 * This upgrade file removes the folder vendor/phpunit, when added from a previous release installed on the shop.
 *
 * @return bool
 */
function upgrade_module_3_4_1(\$module)
{
    \$path = __DIR__ . '/../vendor/phpunit';
    if (file_exists(\$path)) {
        \$result = removeFromFsDuringUpgrade([\$path]);
        if (\$result !== true) {
            PrestaShopLogger::addLog('Could not delete PHPUnit from module. ' . \$result, 3);

            return false;
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
        return "@Modules/ps_facetedsearch/upgrade/upgrade-3.4.1.php";
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */
if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Removes files or directories.
 *
 * @param array \$files An array of files to remove
 *
 * @return true|string True if everything goes fine, error details otherwise
 */
function removeFromFsDuringUpgrade(array \$files)
{
    \$files = array_reverse(\$files);
    foreach (\$files as \$file) {
        if (is_dir(\$file)) {
            \$iterator = new FilesystemIterator(\$file, FilesystemIterator::CURRENT_AS_PATHNAME | FilesystemIterator::SKIP_DOTS);
            removeFromFsDuringUpgrade(iterator_to_array(\$iterator));
            if (!rmdir(\$file) && file_exists(\$file)) {
                return 'Deletion of directory ' . \$file . 'failed';
            }
        } elseif (!unlink(\$file) && file_exists(\$file)) {
            return 'Deletion of file ' . \$file . 'failed';
        }
    }

    return true;
}
/**
 * This upgrade file removes the folder vendor/phpunit, when added from a previous release installed on the shop.
 *
 * @return bool
 */
function upgrade_module_3_4_1(\$module)
{
    \$path = __DIR__ . '/../vendor/phpunit';
    if (file_exists(\$path)) {
        \$result = removeFromFsDuringUpgrade([\$path]);
        if (\$result !== true) {
            PrestaShopLogger::addLog('Could not delete PHPUnit from module. ' . \$result, 3);

            return false;
        }
    }

    return true;
}
", "@Modules/ps_facetedsearch/upgrade/upgrade-3.4.1.php", "/var/www/html/modules/ps_facetedsearch/upgrade/upgrade-3.4.1.php");
    }
}
