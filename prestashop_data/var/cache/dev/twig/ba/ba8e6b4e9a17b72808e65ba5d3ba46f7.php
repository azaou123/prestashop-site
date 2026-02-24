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

/* @Modules/pagesnotfound/pagesnotfound.php */
class __TwigTemplate_a3ee58dd8909e10c57ea3e05b98cc6f7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/pagesnotfound/pagesnotfound.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/pagesnotfound/pagesnotfound.php"));

        // line 1
        echo "<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class PagesNotFound extends Module
{
    private \$html = '';

    public function __construct()
    {
        \$this->name = 'pagesnotfound';
        \$this->tab = 'administration';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Pages not found', [], 'Modules.Pagesnotfound.Admin');
        \$this->description = \$this->trans('Enrich your stats, display the pages requested by your visitors that could not be found.', [], 'Modules.Pagesnotfound.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        if (!parent::install()
            || !\$this->registerHook('displayTop')
            || !\$this->registerHook('displayAdminStatsModules')
        ) {
            return false;
        }

        return Db::getInstance()->execute(
            'CREATE TABLE `' . _DB_PREFIX_ . 'pagenotfound` (
\t\t\tid_pagenotfound INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
\t\t\tid_shop INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t\tid_shop_group INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t\trequest_uri VARCHAR(256) NOT NULL,
\t\t\thttp_referer VARCHAR(256) NOT NULL,
\t\t\tdate_add DATETIME NOT NULL,
\t\t\tPRIMARY KEY(id_pagenotfound),
\t\t\tINDEX (`date_add`)
\t\t) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;'
        );
    }

    public function uninstall()
    {
        return parent::uninstall() && Db::getInstance()->execute('DROP TABLE `' . _DB_PREFIX_ . 'pagenotfound`');
    }

    private function getPages()
    {
        \$sql = 'SELECT http_referer, request_uri, COUNT(*) as nb
\t\t\t\tFROM `' . _DB_PREFIX_ . 'pagenotfound`
\t\t\t\tWHERE date_add BETWEEN ' . ModuleGraph::getDateBetween()
            . Shop::addSqlRestriction() .
            'GROUP BY http_referer, request_uri';
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);

        \$pages = [];
        foreach (\$result as \$row) {
            \$row['http_referer'] = parse_url(\$row['http_referer'], PHP_URL_HOST) . parse_url(\$row['http_referer'], PHP_URL_PATH);
            if (!isset(\$row['http_referer']) || empty(\$row['http_referer'])) {
                \$row['http_referer'] = '--';
            }
            if (!isset(\$pages[\$row['request_uri']])) {
                \$pages[\$row['request_uri']] = ['nb' => 0];
            }
            \$pages[\$row['request_uri']][\$row['http_referer']] = \$row['nb'];
            \$pages[\$row['request_uri']]['nb'] += \$row['nb'];
        }
        uasort(\$pages, 'pnfSort');

        return \$pages;
    }

    public function hookDisplayAdminStatsModules()
    {
        \$this->context->controller->addCSS(\$this->_path . 'views/css/stacking_responsive.css');

        if (Tools::isSubmit('submitTruncatePNF')) {
            Db::getInstance()->execute('TRUNCATE `' . _DB_PREFIX_ . 'pagenotfound`');
            \$this->html .= '<div class=\"alert alert-warning\"> ' . \$this->trans('The \"pages not found\" cache has been emptied.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        } elseif (Tools::isSubmit('submitDeletePNF')) {
            Db::getInstance()->execute(
                'DELETE FROM `' . _DB_PREFIX_ . 'pagenotfound`
\t\t\t\tWHERE date_add BETWEEN ' . ModuleGraph::getDateBetween()
            );
            \$this->html .= '<div class=\"alert alert-warning\"> ' . \$this->trans('The \"pages not found\" cache has been deleted.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        }

        \$this->html .= '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<h4>' . \$this->trans('Guide', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>' . \$this->trans('404 errors', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t\t<p>'
            . \$this->trans('A 404 error is an HTTP error code which means that the file requested by the user cannot be found. In your case it means that one of your visitors entered a wrong URL in the address bar, or that you or another website has a dead link. When possible, the referrer is shown so you can find the page/site which contains the dead link. If not, it generally means that it is a direct access, so someone may have bookmarked a link which doesn\\'t exist anymore.', [], 'Modules.Pagesnotfound.Admin') . '
\t\t\t\t</p>
\t\t\t\t<p>&nbsp;</p>
\t\t\t\t<h4>' . \$this->trans('How to catch these errors?', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t\t<p>'
            . sprintf(\$this->trans('If your webhost supports .htaccess files, you can create one in the root directory of PrestaShop and insert the following line inside: \"%s\".', [], 'Modules.Pagesnotfound.Admin'), 'ErrorDocument 404 ' . __PS_BASE_URI__ . '404.php') . '<br />' .
            sprintf(\$this->trans('A user requesting a page which doesn\\'t exist will be redirected to the following page: %s. This module logs access to this page.', [], 'Modules.Pagesnotfound.Admin'), __PS_BASE_URI__ . '404.php') . '
\t\t\t\t</p>
\t\t\t</div>';
        if (!file_exists(\$this->_normalizeDirectory(_PS_ROOT_DIR_) . '.htaccess')) {
            \$this->html .= '<div class=\"alert alert-warning\">' . \$this->trans('You must use a .htaccess file to redirect 404 errors to the \"404.php\" page.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        }

        \$pages = \$this->getPages();
        if (count(\$pages)) {
            \$titlePage = \$this->trans('Page', [], 'Modules.Pagesnotfound.Admin');
            \$titleReferer = \$this->trans('Referrer', [], 'Modules.Pagesnotfound.Admin');
            \$titleCounter = \$this->trans('Counter', [], 'Modules.Pagesnotfound.Admin');

            \$this->html .= '
            <div class=\"stacking__wrapper\">
            <table class=\"table\">
               \t<thead>
                    <tr>
                        <th scope=\"row\"></th>
                        <th scope=\"col\"><span class=\"title_box active\">' . \$titlePage . '</span></th>
                        <th scope=\"col\"><span class=\"title_box active\">' . \$titleReferer . '</span></th>
                        <th scope=\"col\"><span class=\"title_box active\">' . \$titleCounter . '</span></th>
                    </tr>
                </thead>
                <tbody>';
            foreach (\$pages as \$ru => \$hrs) {
                foreach (\$hrs as \$hr => \$counter) {
                    if (\$hr != 'nb') {
                        \$this->html .= '
                        <tr>
                            <th scope=\"row\"></th>
                            <td data-header=\"' . \$titlePage . '\"><a href=\"' . \$ru . '-admin404\">' . wordwrap(\$ru, 30, '<br />', true) . '</a></td>
                            <td data-header=\"' . \$titleReferer . '\"><a href=\"' . Tools::getProtocol() . \$hr . '\">' . wordwrap(\$hr, 40, '<br />', true) . '</a></td>
                            <td data-header=\"' . \$titleCounter . '\"><span>' . \$counter . '</span></td>
                        </tr>';
                    }
                }
            }
            \$this->html .= '
            \t</tbody>
            </table>
            </div>';
        } else {
            \$this->html .= '<div class=\"alert alert-warning\"> ' . \$this->trans('No \"page not found\" issue registered for now.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        }

        if (count(\$pages)) {
            \$this->html .= '
\t\t\t\t<h4>' . \$this->trans('Empty database', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t\t<form action=\"' . Tools::htmlEntitiesUtf8(\$_SERVER['REQUEST_URI']) . '\" method=\"post\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" name=\"submitDeletePNF\">
\t\t\t\t\t\t<i class=\"icon-remove\"></i> ' . \$this->trans('Empty ALL \"pages not found\" notices for this period', [], 'Modules.Pagesnotfound.Admin') . '
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" name=\"submitTruncatePNF\">
\t\t\t\t\t\t<i class=\"icon-remove\"></i> ' . \$this->trans('Empty ALL \"pages not found\" notices', [], 'Modules.Pagesnotfound.Admin') . '
\t\t\t\t\t</button>
\t\t\t\t</form>';
        }

        return \$this->html;
    }

    public function hookDisplayTop(\$params)
    {
        if (strstr(\$_SERVER['REQUEST_URI'], '404.php') && isset(\$_SERVER['REDIRECT_URL'])) {
            \$_SERVER['REQUEST_URI'] = \$_SERVER['REDIRECT_URL'];
        }
        if (!Validate::isUrl(\$request_uri = \$_SERVER['REQUEST_URI']) || strstr(\$_SERVER['REQUEST_URI'], '-admin404')) {
            return;
        }

        if (get_class(Context::getContext()->controller) == 'PageNotFoundController') {
            \$http_referer = isset(\$_SERVER['HTTP_REFERER']) ? \$_SERVER['HTTP_REFERER'] : '';
            if (empty(\$http_referer) || Validate::isAbsoluteUrl(\$http_referer)) {
                Db::getInstance()->execute(
                    '
\t\t    INSERT INTO `' . _DB_PREFIX_ . 'pagenotfound` (`request_uri`, `http_referer`, `date_add`, `id_shop`, `id_shop_group`)
\t\t    VALUES (\\'' . pSQL(\$request_uri) . '\\', \\'' . pSQL(\$http_referer) . '\\', NOW(), ' . (int) \$this->context->shop->id . ', ' . (int) \$this->context->shop->id_shop_group . ')
\t\t    '
                );
            }
        }
    }

    private function _normalizeDirectory(\$directory)
    {
        \$last = \$directory[strlen(\$directory) - 1];

        if (in_array(\$last, ['/', '\\\\'])) {
            \$directory[strlen(\$directory) - 1] = DIRECTORY_SEPARATOR;

            return \$directory;
        }

        \$directory .= DIRECTORY_SEPARATOR;

        return \$directory;
    }
}

function pnfSort(\$a, \$b)
{
    if (\$a['nb'] == \$b['nb']) {
        return 0;
    }

    return (\$a['nb'] > \$b['nb']) ? -1 : 1;
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/pagesnotfound/pagesnotfound.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class PagesNotFound extends Module
{
    private \$html = '';

    public function __construct()
    {
        \$this->name = 'pagesnotfound';
        \$this->tab = 'administration';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        parent::__construct();

        \$this->displayName = \$this->trans('Pages not found', [], 'Modules.Pagesnotfound.Admin');
        \$this->description = \$this->trans('Enrich your stats, display the pages requested by your visitors that could not be found.', [], 'Modules.Pagesnotfound.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        if (!parent::install()
            || !\$this->registerHook('displayTop')
            || !\$this->registerHook('displayAdminStatsModules')
        ) {
            return false;
        }

        return Db::getInstance()->execute(
            'CREATE TABLE `' . _DB_PREFIX_ . 'pagenotfound` (
\t\t\tid_pagenotfound INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
\t\t\tid_shop INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t\tid_shop_group INTEGER UNSIGNED NOT NULL DEFAULT \\'1\\',
\t\t\trequest_uri VARCHAR(256) NOT NULL,
\t\t\thttp_referer VARCHAR(256) NOT NULL,
\t\t\tdate_add DATETIME NOT NULL,
\t\t\tPRIMARY KEY(id_pagenotfound),
\t\t\tINDEX (`date_add`)
\t\t) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;'
        );
    }

    public function uninstall()
    {
        return parent::uninstall() && Db::getInstance()->execute('DROP TABLE `' . _DB_PREFIX_ . 'pagenotfound`');
    }

    private function getPages()
    {
        \$sql = 'SELECT http_referer, request_uri, COUNT(*) as nb
\t\t\t\tFROM `' . _DB_PREFIX_ . 'pagenotfound`
\t\t\t\tWHERE date_add BETWEEN ' . ModuleGraph::getDateBetween()
            . Shop::addSqlRestriction() .
            'GROUP BY http_referer, request_uri';
        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS(\$sql);

        \$pages = [];
        foreach (\$result as \$row) {
            \$row['http_referer'] = parse_url(\$row['http_referer'], PHP_URL_HOST) . parse_url(\$row['http_referer'], PHP_URL_PATH);
            if (!isset(\$row['http_referer']) || empty(\$row['http_referer'])) {
                \$row['http_referer'] = '--';
            }
            if (!isset(\$pages[\$row['request_uri']])) {
                \$pages[\$row['request_uri']] = ['nb' => 0];
            }
            \$pages[\$row['request_uri']][\$row['http_referer']] = \$row['nb'];
            \$pages[\$row['request_uri']]['nb'] += \$row['nb'];
        }
        uasort(\$pages, 'pnfSort');

        return \$pages;
    }

    public function hookDisplayAdminStatsModules()
    {
        \$this->context->controller->addCSS(\$this->_path . 'views/css/stacking_responsive.css');

        if (Tools::isSubmit('submitTruncatePNF')) {
            Db::getInstance()->execute('TRUNCATE `' . _DB_PREFIX_ . 'pagenotfound`');
            \$this->html .= '<div class=\"alert alert-warning\"> ' . \$this->trans('The \"pages not found\" cache has been emptied.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        } elseif (Tools::isSubmit('submitDeletePNF')) {
            Db::getInstance()->execute(
                'DELETE FROM `' . _DB_PREFIX_ . 'pagenotfound`
\t\t\t\tWHERE date_add BETWEEN ' . ModuleGraph::getDateBetween()
            );
            \$this->html .= '<div class=\"alert alert-warning\"> ' . \$this->trans('The \"pages not found\" cache has been deleted.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        }

        \$this->html .= '
\t\t\t<div class=\"panel-heading\">
\t\t\t\t' . \$this->displayName . '
\t\t\t</div>
\t\t\t<h4>' . \$this->trans('Guide', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t<h4>' . \$this->trans('404 errors', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t\t<p>'
            . \$this->trans('A 404 error is an HTTP error code which means that the file requested by the user cannot be found. In your case it means that one of your visitors entered a wrong URL in the address bar, or that you or another website has a dead link. When possible, the referrer is shown so you can find the page/site which contains the dead link. If not, it generally means that it is a direct access, so someone may have bookmarked a link which doesn\\'t exist anymore.', [], 'Modules.Pagesnotfound.Admin') . '
\t\t\t\t</p>
\t\t\t\t<p>&nbsp;</p>
\t\t\t\t<h4>' . \$this->trans('How to catch these errors?', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t\t<p>'
            . sprintf(\$this->trans('If your webhost supports .htaccess files, you can create one in the root directory of PrestaShop and insert the following line inside: \"%s\".', [], 'Modules.Pagesnotfound.Admin'), 'ErrorDocument 404 ' . __PS_BASE_URI__ . '404.php') . '<br />' .
            sprintf(\$this->trans('A user requesting a page which doesn\\'t exist will be redirected to the following page: %s. This module logs access to this page.', [], 'Modules.Pagesnotfound.Admin'), __PS_BASE_URI__ . '404.php') . '
\t\t\t\t</p>
\t\t\t</div>';
        if (!file_exists(\$this->_normalizeDirectory(_PS_ROOT_DIR_) . '.htaccess')) {
            \$this->html .= '<div class=\"alert alert-warning\">' . \$this->trans('You must use a .htaccess file to redirect 404 errors to the \"404.php\" page.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        }

        \$pages = \$this->getPages();
        if (count(\$pages)) {
            \$titlePage = \$this->trans('Page', [], 'Modules.Pagesnotfound.Admin');
            \$titleReferer = \$this->trans('Referrer', [], 'Modules.Pagesnotfound.Admin');
            \$titleCounter = \$this->trans('Counter', [], 'Modules.Pagesnotfound.Admin');

            \$this->html .= '
            <div class=\"stacking__wrapper\">
            <table class=\"table\">
               \t<thead>
                    <tr>
                        <th scope=\"row\"></th>
                        <th scope=\"col\"><span class=\"title_box active\">' . \$titlePage . '</span></th>
                        <th scope=\"col\"><span class=\"title_box active\">' . \$titleReferer . '</span></th>
                        <th scope=\"col\"><span class=\"title_box active\">' . \$titleCounter . '</span></th>
                    </tr>
                </thead>
                <tbody>';
            foreach (\$pages as \$ru => \$hrs) {
                foreach (\$hrs as \$hr => \$counter) {
                    if (\$hr != 'nb') {
                        \$this->html .= '
                        <tr>
                            <th scope=\"row\"></th>
                            <td data-header=\"' . \$titlePage . '\"><a href=\"' . \$ru . '-admin404\">' . wordwrap(\$ru, 30, '<br />', true) . '</a></td>
                            <td data-header=\"' . \$titleReferer . '\"><a href=\"' . Tools::getProtocol() . \$hr . '\">' . wordwrap(\$hr, 40, '<br />', true) . '</a></td>
                            <td data-header=\"' . \$titleCounter . '\"><span>' . \$counter . '</span></td>
                        </tr>';
                    }
                }
            }
            \$this->html .= '
            \t</tbody>
            </table>
            </div>';
        } else {
            \$this->html .= '<div class=\"alert alert-warning\"> ' . \$this->trans('No \"page not found\" issue registered for now.', [], 'Modules.Pagesnotfound.Admin') . '</div>';
        }

        if (count(\$pages)) {
            \$this->html .= '
\t\t\t\t<h4>' . \$this->trans('Empty database', [], 'Modules.Pagesnotfound.Admin') . '</h4>
\t\t\t\t<form action=\"' . Tools::htmlEntitiesUtf8(\$_SERVER['REQUEST_URI']) . '\" method=\"post\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" name=\"submitDeletePNF\">
\t\t\t\t\t\t<i class=\"icon-remove\"></i> ' . \$this->trans('Empty ALL \"pages not found\" notices for this period', [], 'Modules.Pagesnotfound.Admin') . '
\t\t\t\t\t</button>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" name=\"submitTruncatePNF\">
\t\t\t\t\t\t<i class=\"icon-remove\"></i> ' . \$this->trans('Empty ALL \"pages not found\" notices', [], 'Modules.Pagesnotfound.Admin') . '
\t\t\t\t\t</button>
\t\t\t\t</form>';
        }

        return \$this->html;
    }

    public function hookDisplayTop(\$params)
    {
        if (strstr(\$_SERVER['REQUEST_URI'], '404.php') && isset(\$_SERVER['REDIRECT_URL'])) {
            \$_SERVER['REQUEST_URI'] = \$_SERVER['REDIRECT_URL'];
        }
        if (!Validate::isUrl(\$request_uri = \$_SERVER['REQUEST_URI']) || strstr(\$_SERVER['REQUEST_URI'], '-admin404')) {
            return;
        }

        if (get_class(Context::getContext()->controller) == 'PageNotFoundController') {
            \$http_referer = isset(\$_SERVER['HTTP_REFERER']) ? \$_SERVER['HTTP_REFERER'] : '';
            if (empty(\$http_referer) || Validate::isAbsoluteUrl(\$http_referer)) {
                Db::getInstance()->execute(
                    '
\t\t    INSERT INTO `' . _DB_PREFIX_ . 'pagenotfound` (`request_uri`, `http_referer`, `date_add`, `id_shop`, `id_shop_group`)
\t\t    VALUES (\\'' . pSQL(\$request_uri) . '\\', \\'' . pSQL(\$http_referer) . '\\', NOW(), ' . (int) \$this->context->shop->id . ', ' . (int) \$this->context->shop->id_shop_group . ')
\t\t    '
                );
            }
        }
    }

    private function _normalizeDirectory(\$directory)
    {
        \$last = \$directory[strlen(\$directory) - 1];

        if (in_array(\$last, ['/', '\\\\'])) {
            \$directory[strlen(\$directory) - 1] = DIRECTORY_SEPARATOR;

            return \$directory;
        }

        \$directory .= DIRECTORY_SEPARATOR;

        return \$directory;
    }
}

function pnfSort(\$a, \$b)
{
    if (\$a['nb'] == \$b['nb']) {
        return 0;
    }

    return (\$a['nb'] > \$b['nb']) ? -1 : 1;
}
", "@Modules/pagesnotfound/pagesnotfound.php", "/var/www/html/modules/pagesnotfound/pagesnotfound.php");
    }
}
