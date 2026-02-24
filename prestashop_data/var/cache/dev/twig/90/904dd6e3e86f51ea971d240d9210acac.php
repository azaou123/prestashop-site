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

/* @Modules/ps_contactinfo/ps_contactinfo.php */
class __TwigTemplate_f21b2298268d9ed9af0876ed3465bc48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_contactinfo/ps_contactinfo.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_contactinfo/ps_contactinfo.php"));

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
if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

class Ps_Contactinfo extends Module implements WidgetInterface
{
    private \$templates = [
        'light' => 'nav.tpl',
        'rich' => 'ps_contactinfo-rich.tpl',
        'default' => 'ps_contactinfo.tpl',
    ];

    public function __construct()
    {
        \$this->name = 'ps_contactinfo';
        \$this->author = 'PrestaShop';
        \$this->version = '3.3.3';

        \$this->bootstrap = true;
        parent::__construct();

        \$this->displayName = \$this->trans('Contact information', [], 'Modules.Contactinfo.Admin');
        \$this->description = \$this->trans('Let your customers know how to reach you, display contact information on your store.', [], 'Modules.Contactinfo.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.2.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install()
            && Configuration::updateValue('PS_CONTACT_INFO_DISPLAY_EMAIL', 1)
            && \$this->registerHook([
                'displayNav', // Standard hook
                'displayNav1', // For Classic-inspired themes
                'displayFooter',
                'displayContactRightColumn',
                'displayContactLeftColumn',
                'displayContactContent',
                'actionAdminStoresControllerUpdate_optionsAfter',
            ]);
    }

    public function renderWidget(\$hookName = null, array \$configuration = [])
    {
        if (\$hookName == null && isset(\$configuration['hook'])) {
            \$hookName = \$configuration['hook'];
        }

        if (preg_match('/^displayNav\\d*\$/', \$hookName)) {
            \$template_file = \$this->templates['light'];
        } elseif (in_array(\$hookName, ['displayContactLeftColumn', 'displayContactRightColumn', 'displayLeftColumn', 'displayRightColumn'])) {
            \$template_file = \$this->templates['rich'];
        } else {
            \$template_file = \$this->templates['default'];
        }

        \$this->smarty->assign(\$this->getWidgetVariables(\$hookName, \$configuration));

        return \$this->fetch('module:' . \$this->name . '/' . \$template_file);
    }

    public function getWidgetVariables(\$hookName = null, array \$configuration = [])
    {
        \$address = \$this->context->shop->getAddress();
        \$formattedAddress = AddressFormat::generateAddress(\$address, [], '<br />');

        \$is_state_multilang = !empty(State::\$definition['multilang']);
        \$state_name = (new State(\$address->id_state))->name;

        \$contact_infos = [
            'company' => Configuration::get('PS_SHOP_NAME'),
            'address' => [
                'formatted' => Validate::isCleanHtml(\$formattedAddress) ? \$formattedAddress : '',
                'address1' => \$address->address1,
                'address2' => \$address->address2,
                'postcode' => \$address->postcode,
                'city' => \$address->city,
                'state' => (!empty(\$address->id_state) ? (new State(\$address->id_state))->name[\$this->context->language->id] : null),
                'country' => (new Country(\$address->id_country))->name[\$this->context->language->id],
            ],
            'phone' => Configuration::get('PS_SHOP_PHONE'),
            'fax' => Configuration::get('PS_SHOP_FAX'),
            'email' => Configuration::get('PS_SHOP_EMAIL'),
            'details' => Configuration::get('PS_SHOP_DETAILS'),
        ];

        return [
            'contact_infos' => \$contact_infos,
            'display_email' => Configuration::get('PS_CONTACT_INFO_DISPLAY_EMAIL'),
        ];
    }

    public function hookActionAdminStoresControllerUpdate_optionsAfter()
    {
        foreach (\$this->templates as \$template) {
            \$this->_clearCache(\$template);
        }

        return true;
    }

    public function getContent()
    {
        \$output = [];

        if (Tools::isSubmit('submitContactInfo')) {
            Configuration::updateValue('PS_CONTACT_INFO_DISPLAY_EMAIL', (int) Tools::getValue('PS_CONTACT_INFO_DISPLAY_EMAIL'));

            foreach (\$this->templates as \$template) {
                \$this->_clearCache(\$template);
            }

            \$output[] = \$this->displayConfirmation(\$this->trans('Settings updated.', [], 'Admin.Notifications.Success'));

            Tools::redirectAdmin(\$this->context->link->getAdminLink('AdminModules', true) . '&conf=6&configure=' . \$this->name . '&tab_module=' . \$this->tab . '&module_name=' . \$this->name);
        }

        \$helper = new HelperForm();
        \$helper->submit_action = 'submitContactInfo';

        \$field = [
            'type' => 'switch',
            'label' => \$this->trans('Display email address', [], 'Admin.Actions'),
            'name' => 'PS_CONTACT_INFO_DISPLAY_EMAIL',
            'desc' => \$this->trans('Your theme needs to be compatible with this feature', [], 'Modules.Contactinfo.Admin'),
            'values' => [
                [
                    'id' => 'active_on',
                    'value' => 1,
                    'label' => \$this->trans('Yes', [], 'Admin.Global'),
                ],
                [
                    'id' => 'active_off',
                    'value' => 0,
                    'label' => \$this->trans('No', [], 'Admin.Global'),
                ],
            ],
        ];

        \$helper->fields_value['PS_CONTACT_INFO_DISPLAY_EMAIL'] = Configuration::get('PS_CONTACT_INFO_DISPLAY_EMAIL');

        \$output[] = \$helper->generateForm([
            [
                'form' => [
                    'legend' => [
                        'title' => \$this->displayName,
                        'icon' => 'icon-share',
                    ],
                    'input' => [\$field],
                    'submit' => [
                        'title' => \$this->trans('Save', [], 'Admin.Actions'),
                    ],
                ],
            ],
        ]);

        return implode(\$output);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_contactinfo/ps_contactinfo.php";
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
if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\\PrestaShop\\Core\\Module\\WidgetInterface;

class Ps_Contactinfo extends Module implements WidgetInterface
{
    private \$templates = [
        'light' => 'nav.tpl',
        'rich' => 'ps_contactinfo-rich.tpl',
        'default' => 'ps_contactinfo.tpl',
    ];

    public function __construct()
    {
        \$this->name = 'ps_contactinfo';
        \$this->author = 'PrestaShop';
        \$this->version = '3.3.3';

        \$this->bootstrap = true;
        parent::__construct();

        \$this->displayName = \$this->trans('Contact information', [], 'Modules.Contactinfo.Admin');
        \$this->description = \$this->trans('Let your customers know how to reach you, display contact information on your store.', [], 'Modules.Contactinfo.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.2.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install()
            && Configuration::updateValue('PS_CONTACT_INFO_DISPLAY_EMAIL', 1)
            && \$this->registerHook([
                'displayNav', // Standard hook
                'displayNav1', // For Classic-inspired themes
                'displayFooter',
                'displayContactRightColumn',
                'displayContactLeftColumn',
                'displayContactContent',
                'actionAdminStoresControllerUpdate_optionsAfter',
            ]);
    }

    public function renderWidget(\$hookName = null, array \$configuration = [])
    {
        if (\$hookName == null && isset(\$configuration['hook'])) {
            \$hookName = \$configuration['hook'];
        }

        if (preg_match('/^displayNav\\d*\$/', \$hookName)) {
            \$template_file = \$this->templates['light'];
        } elseif (in_array(\$hookName, ['displayContactLeftColumn', 'displayContactRightColumn', 'displayLeftColumn', 'displayRightColumn'])) {
            \$template_file = \$this->templates['rich'];
        } else {
            \$template_file = \$this->templates['default'];
        }

        \$this->smarty->assign(\$this->getWidgetVariables(\$hookName, \$configuration));

        return \$this->fetch('module:' . \$this->name . '/' . \$template_file);
    }

    public function getWidgetVariables(\$hookName = null, array \$configuration = [])
    {
        \$address = \$this->context->shop->getAddress();
        \$formattedAddress = AddressFormat::generateAddress(\$address, [], '<br />');

        \$is_state_multilang = !empty(State::\$definition['multilang']);
        \$state_name = (new State(\$address->id_state))->name;

        \$contact_infos = [
            'company' => Configuration::get('PS_SHOP_NAME'),
            'address' => [
                'formatted' => Validate::isCleanHtml(\$formattedAddress) ? \$formattedAddress : '',
                'address1' => \$address->address1,
                'address2' => \$address->address2,
                'postcode' => \$address->postcode,
                'city' => \$address->city,
                'state' => (!empty(\$address->id_state) ? (new State(\$address->id_state))->name[\$this->context->language->id] : null),
                'country' => (new Country(\$address->id_country))->name[\$this->context->language->id],
            ],
            'phone' => Configuration::get('PS_SHOP_PHONE'),
            'fax' => Configuration::get('PS_SHOP_FAX'),
            'email' => Configuration::get('PS_SHOP_EMAIL'),
            'details' => Configuration::get('PS_SHOP_DETAILS'),
        ];

        return [
            'contact_infos' => \$contact_infos,
            'display_email' => Configuration::get('PS_CONTACT_INFO_DISPLAY_EMAIL'),
        ];
    }

    public function hookActionAdminStoresControllerUpdate_optionsAfter()
    {
        foreach (\$this->templates as \$template) {
            \$this->_clearCache(\$template);
        }

        return true;
    }

    public function getContent()
    {
        \$output = [];

        if (Tools::isSubmit('submitContactInfo')) {
            Configuration::updateValue('PS_CONTACT_INFO_DISPLAY_EMAIL', (int) Tools::getValue('PS_CONTACT_INFO_DISPLAY_EMAIL'));

            foreach (\$this->templates as \$template) {
                \$this->_clearCache(\$template);
            }

            \$output[] = \$this->displayConfirmation(\$this->trans('Settings updated.', [], 'Admin.Notifications.Success'));

            Tools::redirectAdmin(\$this->context->link->getAdminLink('AdminModules', true) . '&conf=6&configure=' . \$this->name . '&tab_module=' . \$this->tab . '&module_name=' . \$this->name);
        }

        \$helper = new HelperForm();
        \$helper->submit_action = 'submitContactInfo';

        \$field = [
            'type' => 'switch',
            'label' => \$this->trans('Display email address', [], 'Admin.Actions'),
            'name' => 'PS_CONTACT_INFO_DISPLAY_EMAIL',
            'desc' => \$this->trans('Your theme needs to be compatible with this feature', [], 'Modules.Contactinfo.Admin'),
            'values' => [
                [
                    'id' => 'active_on',
                    'value' => 1,
                    'label' => \$this->trans('Yes', [], 'Admin.Global'),
                ],
                [
                    'id' => 'active_off',
                    'value' => 0,
                    'label' => \$this->trans('No', [], 'Admin.Global'),
                ],
            ],
        ];

        \$helper->fields_value['PS_CONTACT_INFO_DISPLAY_EMAIL'] = Configuration::get('PS_CONTACT_INFO_DISPLAY_EMAIL');

        \$output[] = \$helper->generateForm([
            [
                'form' => [
                    'legend' => [
                        'title' => \$this->displayName,
                        'icon' => 'icon-share',
                    ],
                    'input' => [\$field],
                    'submit' => [
                        'title' => \$this->trans('Save', [], 'Admin.Actions'),
                    ],
                ],
            ],
        ]);

        return implode(\$output);
    }
}
", "@Modules/ps_contactinfo/ps_contactinfo.php", "/var/www/html/modules/ps_contactinfo/ps_contactinfo.php");
    }
}
