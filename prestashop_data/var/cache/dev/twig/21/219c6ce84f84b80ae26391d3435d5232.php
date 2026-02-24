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

/* @Modules/ps_themecusto/classes/ThemeCustoRequests.php */
class __TwigTemplate_8fcfbb1ff9ed801f3ea8ee3ca77d9efe extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/classes/ThemeCustoRequests.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_themecusto/classes/ThemeCustoRequests.php"));

        // line 1
        echo "<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
* @author PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
* International Registered Trademark & Property of PrestaShop SA
**/
class ThemeCustoRequests
{
    /**
     * Get all the modules by name
     *
     * @param string \$moduleName
     *
     * @return array|false|PDOStatement|resource|null
     */
    public static function getModulesListByName(\$moduleName)
    {
        \$sqlQuery = '   SELECT m.id_module, m.name, ms.enable_device as active
                    FROM `' . _DB_PREFIX_ . 'module` m
                    LEFT JOIN `' . _DB_PREFIX_ . 'module_shop` ms ON m.id_module = ms.id_module
                    WHERE m.name = \"' . pSQL(\$moduleName) . '\"';

        return Db::getInstance()->executeS(\$sqlQuery);
    }

    /**
     * Get the device status of a module
     *
     * @param int \$moduleId
     *
     * @return string|false|null
     */
    public static function getModuleDeviceStatus(\$moduleId)
    {
        \$sqlQuery = '   SELECT ms.enable_device as active
                        FROM `' . _DB_PREFIX_ . 'module_shop` ms
                        WHERE ms.id_module = ' . (int) \$moduleId;

        return Db::getInstance()->getValue(\$sqlQuery);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_themecusto/classes/ThemeCustoRequests.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
* @author PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
* International Registered Trademark & Property of PrestaShop SA
**/
class ThemeCustoRequests
{
    /**
     * Get all the modules by name
     *
     * @param string \$moduleName
     *
     * @return array|false|PDOStatement|resource|null
     */
    public static function getModulesListByName(\$moduleName)
    {
        \$sqlQuery = '   SELECT m.id_module, m.name, ms.enable_device as active
                    FROM `' . _DB_PREFIX_ . 'module` m
                    LEFT JOIN `' . _DB_PREFIX_ . 'module_shop` ms ON m.id_module = ms.id_module
                    WHERE m.name = \"' . pSQL(\$moduleName) . '\"';

        return Db::getInstance()->executeS(\$sqlQuery);
    }

    /**
     * Get the device status of a module
     *
     * @param int \$moduleId
     *
     * @return string|false|null
     */
    public static function getModuleDeviceStatus(\$moduleId)
    {
        \$sqlQuery = '   SELECT ms.enable_device as active
                        FROM `' . _DB_PREFIX_ . 'module_shop` ms
                        WHERE ms.id_module = ' . (int) \$moduleId;

        return Db::getInstance()->getValue(\$sqlQuery);
    }
}
", "@Modules/ps_themecusto/classes/ThemeCustoRequests.php", "/var/www/html/modules/ps_themecusto/classes/ThemeCustoRequests.php");
    }
}
