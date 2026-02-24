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

/* @Modules/ps_facetedsearch/src/Form/AttributeGroup/FormDataProvider.php */
class __TwigTemplate_2c034a6fa7977d61c2c825c81831f419 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormDataProvider.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormDataProvider.php"));

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

namespace PrestaShop\\Module\\FacetedSearch\\Form\\AttributeGroup;

use Db;
use PrestaShopDatabaseException;

class FormDataProvider
{
    /**
     * @var Db
     */
    private \$database;

    public function __construct(Db \$database)
    {
        \$this->database = \$database;
    }

    /**
     * Fills form data
     *
     * @param array \$params
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public function getData(array \$params)
    {
        \$defaultUrl = [];
        \$defaultMetaTitle = [];
        \$isIndexable = false;

        // if params contains id, gets data for edit form
        if (!empty(\$params['id'])) {
            \$attributeGroupId = (int) \$params['id'];

            // returns false if request failed.
            \$queryIndexable = \$this->database->getValue(
                'SELECT `indexable` ' .
                'FROM ' . _DB_PREFIX_ . 'layered_indexable_attribute_group ' .
                'WHERE `id_attribute_group` = ' . \$attributeGroupId
            );

            \$isIndexable = (bool) \$queryIndexable;
            \$result = \$this->database->executeS(
                'SELECT `url_name`, `meta_title`, `id_lang` ' .
                'FROM ' . _DB_PREFIX_ . 'layered_indexable_attribute_group_lang_value ' .
                'WHERE `id_attribute_group` = ' . \$attributeGroupId
            );

            if (!empty(\$result) && is_array(\$result)) {
                foreach (\$result as \$data) {
                    \$defaultUrl[\$data['id_lang']] = \$data['url_name'];
                    \$defaultMetaTitle[\$data['id_lang']] = \$data['meta_title'];
                }
            }
        }

        return [
            'url_name' => \$defaultUrl,
            'meta_title' => \$defaultMetaTitle,
            'is_indexable' => \$isIndexable,
        ];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormDataProvider.php";
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

namespace PrestaShop\\Module\\FacetedSearch\\Form\\AttributeGroup;

use Db;
use PrestaShopDatabaseException;

class FormDataProvider
{
    /**
     * @var Db
     */
    private \$database;

    public function __construct(Db \$database)
    {
        \$this->database = \$database;
    }

    /**
     * Fills form data
     *
     * @param array \$params
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     */
    public function getData(array \$params)
    {
        \$defaultUrl = [];
        \$defaultMetaTitle = [];
        \$isIndexable = false;

        // if params contains id, gets data for edit form
        if (!empty(\$params['id'])) {
            \$attributeGroupId = (int) \$params['id'];

            // returns false if request failed.
            \$queryIndexable = \$this->database->getValue(
                'SELECT `indexable` ' .
                'FROM ' . _DB_PREFIX_ . 'layered_indexable_attribute_group ' .
                'WHERE `id_attribute_group` = ' . \$attributeGroupId
            );

            \$isIndexable = (bool) \$queryIndexable;
            \$result = \$this->database->executeS(
                'SELECT `url_name`, `meta_title`, `id_lang` ' .
                'FROM ' . _DB_PREFIX_ . 'layered_indexable_attribute_group_lang_value ' .
                'WHERE `id_attribute_group` = ' . \$attributeGroupId
            );

            if (!empty(\$result) && is_array(\$result)) {
                foreach (\$result as \$data) {
                    \$defaultUrl[\$data['id_lang']] = \$data['url_name'];
                    \$defaultMetaTitle[\$data['id_lang']] = \$data['meta_title'];
                }
            }
        }

        return [
            'url_name' => \$defaultUrl,
            'meta_title' => \$defaultMetaTitle,
            'is_indexable' => \$isIndexable,
        ];
    }
}
", "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormDataProvider.php", "/var/www/html/modules/ps_facetedsearch/src/Form/AttributeGroup/FormDataProvider.php");
    }
}
