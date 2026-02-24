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

/* @Modules/psgdpr/classes/GDPRLog.php */
class __TwigTemplate_617b770737d370de2ea9cce6fd698907 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/classes/GDPRLog.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psgdpr/classes/GDPRLog.php"));

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
class GDPRLog extends ObjectModel
{
    /**
     * @var int
     */
    public \$id_customer;

    /**
     * @var int
     */
    public \$id_guest;

    /**
     * @var string
     */
    public \$client_name;

    /**
     * @var int
     */
    public \$id_module;

    /**
     * @var string
     */
    public \$request_type;

    /**
     * @var string
     */
    public \$data_add;

    /**
     * @var string
     */
    public \$data_upd;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'psgdpr_log',
        'primary' => 'id_gdpr_log',
        'multishop' => true,
        'fields' => [
            // Config fields
            'id_gdpr_log' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'id_guest' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'client_name' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => false],
            'id_module' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'request_type' => ['type' => self::TYPE_BOOL, 'validate' => 'isInt', 'required' => true],
            'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
            'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        ],
    ];

    /**
     * log consent
     *
     * @param int \$id_customer Customer identifier
     * @param string \$request_type
     * @param int \$id_module Module identifier
     * @param int \$id_guest Guest identifier
     * @param mixed \$value
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public static function addLog(\$id_customer, \$request_type, \$id_module, \$id_guest = 0, \$value = null)
    {
        /** @var Psgdpr|false \$psgdpr */
        \$psgdpr = Module::getInstanceByName('psgdpr');
        \$client_name = '';

        if (\$id_customer && \$psgdpr) {
            \$client_name = \$psgdpr->getCustomerNameById((int) \$id_customer);
            \$id_guest = 0;
        } elseif (\$value) {
            \$client_name = \$value;
        } elseif (\$psgdpr) {
            \$client_name = \$psgdpr->l('Guest client : ID') . \$id_guest;
        }

        switch (\$request_type) {
            case 'consent':
                \$request_type = 1;
                break;
            case 'exportPdf':
                \$request_type = 2;
                break;
            case 'exportCsv':
                \$request_type = 3;
                break;
            case 'delete':
                \$request_type = 4;
                break;
        }

        \$exist = (bool) Db::getInstance()->getValue('
            SELECT 1 FROM `' . _DB_PREFIX_ . 'psgdpr_log`
            WHERE date_add = NOW()
            AND date_upd = NOW()
            AND id_customer = ' . (int) \$id_customer . '
            AND id_guest = ' . (int) \$id_guest . '
            AND client_name = \"' . pSQL(\$client_name) . '\"
            AND id_module = ' . (int) \$id_module . '
            AND request_type = ' . (int) \$request_type
        );

        if (\$exist) {
            return true;
        }

        \$now = date('Y-m-d H:i:s');

        return Db::getInstance()->insert(
            'psgdpr_log',
            [
                'id_customer' => (int) \$id_customer,
                'id_guest' => (int) \$id_guest,
                'client_name' => pSQL(\$client_name),
                'id_module' => (int) \$id_module,
                'request_type' => (int) \$request_type,
                'date_add' => \$now,
                'date_upd' => \$now,
            ]
        );
    }

    /**
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getLogs()
    {
        \$logs = Db::getInstance()->executeS('
            SELECT *
            FROM `' . _DB_PREFIX_ . 'psgdpr_log`'
        );

        if (empty(\$logs)) {
            return [];
        }

        \$result = [];
        foreach (\$logs as \$log) {
            \$module_name = '';
            if (!empty(\$log['id_module'])) {
                /** @var Psgdpr|false \$module */
                \$module = Module::getInstanceById(\$log['id_module']);
                if (\$module) {
                    \$module_name = \$module->displayName;
                }
            }
            \$result[] = [
                'id_gdpr_log' => \$log['id_gdpr_log'],
                'id_customer' => \$log['id_customer'],
                'id_guest' => \$log['id_guest'],
                'client_name' => \$log['client_name'],
                'module_name' => \$module_name,
                'id_module' => \$log['id_module'],
                'request_type' => \$log['request_type'],
                'date_add' => \$log['date_add'],
            ];
            unset(\$module);
        }

        return \$result;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psgdpr/classes/GDPRLog.php";
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
class GDPRLog extends ObjectModel
{
    /**
     * @var int
     */
    public \$id_customer;

    /**
     * @var int
     */
    public \$id_guest;

    /**
     * @var string
     */
    public \$client_name;

    /**
     * @var int
     */
    public \$id_module;

    /**
     * @var string
     */
    public \$request_type;

    /**
     * @var string
     */
    public \$data_add;

    /**
     * @var string
     */
    public \$data_upd;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'psgdpr_log',
        'primary' => 'id_gdpr_log',
        'multishop' => true,
        'fields' => [
            // Config fields
            'id_gdpr_log' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'id_guest' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'client_name' => ['type' => self::TYPE_STRING, 'validate' => 'isString', 'required' => false],
            'id_module' => ['type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => false],
            'request_type' => ['type' => self::TYPE_BOOL, 'validate' => 'isInt', 'required' => true],
            'date_add' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
            'date_upd' => ['type' => self::TYPE_DATE, 'validate' => 'isDate'],
        ],
    ];

    /**
     * log consent
     *
     * @param int \$id_customer Customer identifier
     * @param string \$request_type
     * @param int \$id_module Module identifier
     * @param int \$id_guest Guest identifier
     * @param mixed \$value
     *
     * @return bool
     *
     * @throws PrestaShopDatabaseException
     */
    public static function addLog(\$id_customer, \$request_type, \$id_module, \$id_guest = 0, \$value = null)
    {
        /** @var Psgdpr|false \$psgdpr */
        \$psgdpr = Module::getInstanceByName('psgdpr');
        \$client_name = '';

        if (\$id_customer && \$psgdpr) {
            \$client_name = \$psgdpr->getCustomerNameById((int) \$id_customer);
            \$id_guest = 0;
        } elseif (\$value) {
            \$client_name = \$value;
        } elseif (\$psgdpr) {
            \$client_name = \$psgdpr->l('Guest client : ID') . \$id_guest;
        }

        switch (\$request_type) {
            case 'consent':
                \$request_type = 1;
                break;
            case 'exportPdf':
                \$request_type = 2;
                break;
            case 'exportCsv':
                \$request_type = 3;
                break;
            case 'delete':
                \$request_type = 4;
                break;
        }

        \$exist = (bool) Db::getInstance()->getValue('
            SELECT 1 FROM `' . _DB_PREFIX_ . 'psgdpr_log`
            WHERE date_add = NOW()
            AND date_upd = NOW()
            AND id_customer = ' . (int) \$id_customer . '
            AND id_guest = ' . (int) \$id_guest . '
            AND client_name = \"' . pSQL(\$client_name) . '\"
            AND id_module = ' . (int) \$id_module . '
            AND request_type = ' . (int) \$request_type
        );

        if (\$exist) {
            return true;
        }

        \$now = date('Y-m-d H:i:s');

        return Db::getInstance()->insert(
            'psgdpr_log',
            [
                'id_customer' => (int) \$id_customer,
                'id_guest' => (int) \$id_guest,
                'client_name' => pSQL(\$client_name),
                'id_module' => (int) \$id_module,
                'request_type' => (int) \$request_type,
                'date_add' => \$now,
                'date_upd' => \$now,
            ]
        );
    }

    /**
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public static function getLogs()
    {
        \$logs = Db::getInstance()->executeS('
            SELECT *
            FROM `' . _DB_PREFIX_ . 'psgdpr_log`'
        );

        if (empty(\$logs)) {
            return [];
        }

        \$result = [];
        foreach (\$logs as \$log) {
            \$module_name = '';
            if (!empty(\$log['id_module'])) {
                /** @var Psgdpr|false \$module */
                \$module = Module::getInstanceById(\$log['id_module']);
                if (\$module) {
                    \$module_name = \$module->displayName;
                }
            }
            \$result[] = [
                'id_gdpr_log' => \$log['id_gdpr_log'],
                'id_customer' => \$log['id_customer'],
                'id_guest' => \$log['id_guest'],
                'client_name' => \$log['client_name'],
                'module_name' => \$module_name,
                'id_module' => \$log['id_module'],
                'request_type' => \$log['request_type'],
                'date_add' => \$log['date_add'],
            ];
            unset(\$module);
        }

        return \$result;
    }
}
", "@Modules/psgdpr/classes/GDPRLog.php", "/var/www/html/modules/psgdpr/classes/GDPRLog.php");
    }
}
