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

/* @Modules/ps_linklist/src/DataMigration.php */
class __TwigTemplate_eb0eb95b957448518891e0d732935e15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/DataMigration.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/DataMigration.php"));

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

namespace PrestaShop\\Module\\LinkList;

use Configuration;
use Db;
use Hook;
use Language;
use PrestaShop\\Module\\LinkList\\Model\\LinkBlock;

/**
 * Class used to migrate data from the 1.6 module
 */
class DataMigration
{
    /**
     * @var Db
     */
    private \$db;

    public function __construct(Db \$db)
    {
        \$this->db = \$db;
    }

    /**
     * Retrieve content from 1.6 module, then cleanup
     */
    public function migrateData()
    {
        // Copy first table
        \$this->db->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block`
            (`id_link_block`, `id_hook`, `position`)
            SELECT `id_cms_block`, `location`, `position`
            FROM `' . _DB_PREFIX_ . 'cms_block`'
        );
        // Update hook IDs (Got from BlockCMSModel in 1.6 module)
        \$relationBetweenOldLocationsAndHooks = [
            0 => 'displayLeftColumn', // LEFT_COLUMN
            1 => 'displayRightColumn', // RIGHT_COLUMN
            2 => 'displayFooter', // FOOTER
        ];
        foreach (\$relationBetweenOldLocationsAndHooks as \$oldLocation => \$newHookLocation) {
            // Retrieve the cms page IDs linked in the old module
            \$content = \$this->generateJsonForBlockContent([
                'cms' => \$this->getCmsIdsFromBlock(\$oldLocation),
            ]);

            \$this->db->execute(
                'UPDATE `' . _DB_PREFIX_ . 'link_block`
                SET `id_hook` = ' . (int) Hook::getIdByName(\$newHookLocation) . \",
                `content` = '\" . pSQL(\$content) . \"'
                WHERE `id_hook` = \" . \$oldLocation
            );
        }
        // Copy second table (lang)
        \$this->db->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block_lang`
            (`id_link_block`, `id_lang`, `name`)
            SELECT `id_cms_block`, `id_lang`, `name`
            FROM `' . _DB_PREFIX_ . 'cms_block_lang`'
        );
        // Copy third table (shop)
        \$this->db->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block_shop`
            (`id_link_block`, `id_shop`)
            SELECT `id_cms_block`, `id_shop`
            FROM `' . _DB_PREFIX_ . 'cms_block_shop`'
        );

        \$this->migrateBlockFooter();

        // Drop old tables
        \$this->db->execute(
            'DROP TABLE `' . _DB_PREFIX_ . 'cms_block`,
            `' . _DB_PREFIX_ . 'cms_block_lang`,
            `' . _DB_PREFIX_ . 'cms_block_page`,
            `' . _DB_PREFIX_ . 'cms_block_shop`'
        );
    }

    private function migrateBlockFooter()
    {
        if (!Configuration::get('FOOTER_BLOCK_ACTIVATION')) {
            return;
        }

        \$linkBlock = new LinkBlock();
        \$data = [];
        \$footerCMS = Configuration::get('FOOTER_CMS');
        if (!empty(\$footerCMS)) {
            foreach (explode('|', \$footerCMS) as \$val) {
                list(, \$cmsId) = explode('_', \$val);
                \$data['cms'][] = \$cmsId;
            }
        }
        if (Configuration::get('FOOTER_PRICE-DROP')) {
            \$data['product'][] = 'prices-drop';
        }
        if (Configuration::get('FOOTER_NEW-PRODUCTS')) {
            \$data['product'][] = 'new-products';
        }
        if (Configuration::get('FOOTER_BEST-SALES')) {
            \$data['product'][] = 'best-sales';
        }
        if (Configuration::get('FOOTER_CONTACT')) {
            \$data['static'][] = 'contact';
        }
        if (Configuration::get('FOOTER_SITEMAP')) {
            \$data['static'][] = 'sitemap';
        }
        if (Configuration::get('PS_STORES_DISPLAY_FOOTER')) {
            \$data['static'][] = 'stores';
        }
        \$linkBlock->content = \$this->generateJsonForBlockContent(\$data);
        \$linkBlock->id_hook = (int) Hook::getIdByName('displayFooter');

        \$languages = Language::getLanguages(false);
        foreach (\$languages as \$lang) {
            \$linkBlock->name[\$lang['id_lang']] = 'Footer content (Migrated)';
            \$linkBlock->custom_content[\$lang['id_lang']] = json_encode([[
                'title' => Configuration::get('FOOTER_CMS_TEXT_' . \$lang['id_lang']),
                'url' => '#',
            ]]);
        }
        \$linkBlock->save();
    }

    /**
     * Generate a JSON for the column `content` of link_block
     *
     * @param array \$data
     *
     * @return string
     */
    private function generateJsonForBlockContent(array \$data)
    {
        return json_encode([
            'cms' => empty(\$data['cms']) ? [false] : \$data['cms'],
            'static' => empty(\$data['static']) ? [false] : \$data['static'],
            'product' => empty(\$data['product']) ? [false] : \$data['product'],
        ]);
    }

    /**
     * Get list of cms IDs from database for a given old cms_block_page
     *
     * @param int \$oldLocation
     *
     * @return array
     */
    private function getCmsIdsFromBlock(\$oldLocation)
    {
        \$request = \$this->db->executeS(
            'SELECT id_cms FROM  `' . _DB_PREFIX_ . 'cms_block_page`
            WHERE id_cms_block = ' . (int) \$oldLocation . '
            AND is_category = 0'
        );

        \$ids = [];
        foreach (\$request as \$row) {
            \$ids[] = \$row['id_cms'];
        }

        return \$ids;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/DataMigration.php";
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

namespace PrestaShop\\Module\\LinkList;

use Configuration;
use Db;
use Hook;
use Language;
use PrestaShop\\Module\\LinkList\\Model\\LinkBlock;

/**
 * Class used to migrate data from the 1.6 module
 */
class DataMigration
{
    /**
     * @var Db
     */
    private \$db;

    public function __construct(Db \$db)
    {
        \$this->db = \$db;
    }

    /**
     * Retrieve content from 1.6 module, then cleanup
     */
    public function migrateData()
    {
        // Copy first table
        \$this->db->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block`
            (`id_link_block`, `id_hook`, `position`)
            SELECT `id_cms_block`, `location`, `position`
            FROM `' . _DB_PREFIX_ . 'cms_block`'
        );
        // Update hook IDs (Got from BlockCMSModel in 1.6 module)
        \$relationBetweenOldLocationsAndHooks = [
            0 => 'displayLeftColumn', // LEFT_COLUMN
            1 => 'displayRightColumn', // RIGHT_COLUMN
            2 => 'displayFooter', // FOOTER
        ];
        foreach (\$relationBetweenOldLocationsAndHooks as \$oldLocation => \$newHookLocation) {
            // Retrieve the cms page IDs linked in the old module
            \$content = \$this->generateJsonForBlockContent([
                'cms' => \$this->getCmsIdsFromBlock(\$oldLocation),
            ]);

            \$this->db->execute(
                'UPDATE `' . _DB_PREFIX_ . 'link_block`
                SET `id_hook` = ' . (int) Hook::getIdByName(\$newHookLocation) . \",
                `content` = '\" . pSQL(\$content) . \"'
                WHERE `id_hook` = \" . \$oldLocation
            );
        }
        // Copy second table (lang)
        \$this->db->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block_lang`
            (`id_link_block`, `id_lang`, `name`)
            SELECT `id_cms_block`, `id_lang`, `name`
            FROM `' . _DB_PREFIX_ . 'cms_block_lang`'
        );
        // Copy third table (shop)
        \$this->db->execute(
            'INSERT INTO `' . _DB_PREFIX_ . 'link_block_shop`
            (`id_link_block`, `id_shop`)
            SELECT `id_cms_block`, `id_shop`
            FROM `' . _DB_PREFIX_ . 'cms_block_shop`'
        );

        \$this->migrateBlockFooter();

        // Drop old tables
        \$this->db->execute(
            'DROP TABLE `' . _DB_PREFIX_ . 'cms_block`,
            `' . _DB_PREFIX_ . 'cms_block_lang`,
            `' . _DB_PREFIX_ . 'cms_block_page`,
            `' . _DB_PREFIX_ . 'cms_block_shop`'
        );
    }

    private function migrateBlockFooter()
    {
        if (!Configuration::get('FOOTER_BLOCK_ACTIVATION')) {
            return;
        }

        \$linkBlock = new LinkBlock();
        \$data = [];
        \$footerCMS = Configuration::get('FOOTER_CMS');
        if (!empty(\$footerCMS)) {
            foreach (explode('|', \$footerCMS) as \$val) {
                list(, \$cmsId) = explode('_', \$val);
                \$data['cms'][] = \$cmsId;
            }
        }
        if (Configuration::get('FOOTER_PRICE-DROP')) {
            \$data['product'][] = 'prices-drop';
        }
        if (Configuration::get('FOOTER_NEW-PRODUCTS')) {
            \$data['product'][] = 'new-products';
        }
        if (Configuration::get('FOOTER_BEST-SALES')) {
            \$data['product'][] = 'best-sales';
        }
        if (Configuration::get('FOOTER_CONTACT')) {
            \$data['static'][] = 'contact';
        }
        if (Configuration::get('FOOTER_SITEMAP')) {
            \$data['static'][] = 'sitemap';
        }
        if (Configuration::get('PS_STORES_DISPLAY_FOOTER')) {
            \$data['static'][] = 'stores';
        }
        \$linkBlock->content = \$this->generateJsonForBlockContent(\$data);
        \$linkBlock->id_hook = (int) Hook::getIdByName('displayFooter');

        \$languages = Language::getLanguages(false);
        foreach (\$languages as \$lang) {
            \$linkBlock->name[\$lang['id_lang']] = 'Footer content (Migrated)';
            \$linkBlock->custom_content[\$lang['id_lang']] = json_encode([[
                'title' => Configuration::get('FOOTER_CMS_TEXT_' . \$lang['id_lang']),
                'url' => '#',
            ]]);
        }
        \$linkBlock->save();
    }

    /**
     * Generate a JSON for the column `content` of link_block
     *
     * @param array \$data
     *
     * @return string
     */
    private function generateJsonForBlockContent(array \$data)
    {
        return json_encode([
            'cms' => empty(\$data['cms']) ? [false] : \$data['cms'],
            'static' => empty(\$data['static']) ? [false] : \$data['static'],
            'product' => empty(\$data['product']) ? [false] : \$data['product'],
        ]);
    }

    /**
     * Get list of cms IDs from database for a given old cms_block_page
     *
     * @param int \$oldLocation
     *
     * @return array
     */
    private function getCmsIdsFromBlock(\$oldLocation)
    {
        \$request = \$this->db->executeS(
            'SELECT id_cms FROM  `' . _DB_PREFIX_ . 'cms_block_page`
            WHERE id_cms_block = ' . (int) \$oldLocation . '
            AND is_category = 0'
        );

        \$ids = [];
        foreach (\$request as \$row) {
            \$ids[] = \$row['id_cms'];
        }

        return \$ids;
    }
}
", "@Modules/ps_linklist/src/DataMigration.php", "/var/www/html/modules/ps_linklist/src/DataMigration.php");
    }
}
