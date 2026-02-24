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

/* @Modules/gridhtml/gridhtml.php */
class __TwigTemplate_c62f45c361b17da8844eebf2eb47066a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/gridhtml/gridhtml.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/gridhtml/gridhtml.php"));

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

class GridHtml extends ModuleGridEngine
{
    /**
     * @var array
     */
    private \$_values;
    /**
     * @var array
     */
    private static \$_columns;
    /**
     * @var string
     */
    public \$_title;
    /**
     * @var int
     */
    public \$_width;
    /**
     * @var int
     */
    public \$_height;
    /**
     * @var int
     */
    public \$_totalCount;
    /**
     * @var int
     */
    public \$_start;
    /**
     * @var int
     */
    public \$_limit;

    /**
     * GridHtml constructor.
     *
     * @param string|null \$type
     */
    public function __construct(\$type = null)
    {
        if (\$type != null) {
            parent::__construct(\$type);
        } else {
            \$this->name = 'gridhtml';
            \$this->tab = 'administration';
            \$this->version = '2.0.3';
            \$this->author = 'PrestaShop';
            \$this->need_instance = 0;

            Module::__construct();

            \$this->displayName = \$this->trans('Simple HTML table display', [], 'Modules.Gridhtml.Admin');
            \$this->description = \$this->trans('Just allow statistics to be displayed (and therefore analyzed) on your back office.', [], 'Modules.Gridhtml.Admin');
            \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
        }
    }

    public function install()
    {
        return parent::install() and \$this->registerHook('GridEngine');
    }

    /**
     * @param array \$params
     * @param string \$grider
     */
    public static function hookGridEngine(\$params, \$grider)
    {
        self::\$_columns = \$params['columns'];
        if (!isset(\$params['emptyMsg'])) {
            \$params['emptyMsg'] = 'Empty';
        }

        \$customParams = '';
        if (isset(\$params['customParams'])) {
            foreach (\$params['customParams'] as \$name => \$value) {
                \$customParams .= '&' . \$name . '=' . urlencode(\$value);
            }
        }

        \$html = '
\t\t<table class=\"table\" id=\"grid_1\">
\t\t\t<thead>
\t\t\t\t<tr>';
        foreach (\$params['columns'] as \$column) {
            \$html .= '<th class=\"center\"><span class=\"title_box active\">' . \$column['header'] . '</span></th>';
        }
        \$html .= '</tr>
\t\t\t</thead>
\t\t\t<tbody></tbody>
\t\t\t<tfoot><tr><th colspan=\"' . count(\$params['columns']) . '\"></th></tr></tfoot>
\t\t</table>
\t\t<script type=\"text/javascript\">
\t\t\tfunction getGridData(url)
\t\t\t{
\t\t\t\t\$(\"#grid_1 tbody\").html(\"<tr><td style=\\\"text-align:center\\\" colspan=\\\"\" + ' . count(\$params['columns']) . ' + \"\\\"><img src=\\\"../img/loadingAnimation.gif\\\" /></td></tr>\");
\t\t\t\t\$.get(url, \"\", function(json) {
\t\t\t\t\t\$(\"#grid_1 tbody\").html(\"\");
\t\t\t\t\tvar array = \$.parseJSON(json);
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\"' . addslashes(\$params['pagingMessage']) . '\");
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html().replace(\"{0}\", array[\"from\"]));
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html().replace(\"{1}\", array[\"to\"]));
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html().replace(\"{2}\", array[\"total\"]));

\t\t\t\t\tif (array[\"from\"] > 1)
\t\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html() + \" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style=\\\\\"cursor:pointer;text-decoration:none\\\\\" onclick=\\\\\"gridPrevPage(\\'\"+ url +\"\\');\\\\\">&lt;&lt;</a>\");
\t\t\t\t\tif (array[\"to\"] < array[\"total\"])
\t\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html() + \" | <a style=\\\\\"cursor:pointer;text-decoration:none\\\\\" onclick=\\\\\"gridNextPage(\\'\"+ url +\"\\');\\\\\">&gt;&gt;</a>\");
\t\t\t\t\tvar values = array[\"values\"];
\t\t\t\t\tif (values.length > 0)
\t\t\t\t\t\t\$.each(values, function(index, row){
\t\t\t\t\t\t\tvar newLine = \"<tr>\";';
        foreach (\$params['columns'] as \$column) {
            \$html .= '\tnewLine += \"<td' . (isset(\$column['align']) ? ' align=\\\"' . \$column['align'] . '\\\"' : '') . '>\" + row[\"' . \$column['dataIndex'] . '\"] + \"</td>\";';
        }
        if (!isset(\$params['defaultSortColumn'])) {
            \$params['defaultSortColumn'] = false;
        }
        if (!isset(\$params['defaultSortDirection'])) {
            \$params['defaultSortDirection'] = false;
        }
        \$html .= '\t\t\$(\"#grid_1 tbody\").append(newLine);
\t\t\t\t\t\t});
\t\t\t\t\telse
\t\t\t\t\t\t\$(\"#grid_1 tbody\").append(\"<tr><td class=\\\"center\\\" colspan=\\\"\" + ' . count(\$params['columns']) . ' + \"\\\">' . \$params['emptyMsg'] . '</td></tr>\");
\t\t\t\t});
\t\t\t}

\t\t\tfunction gridNextPage(url)
\t\t\t{
\t\t\t\tvar from = url.match(/&start=[0-9]+/i);
\t\t\t\tif (from && from[0] && parseInt(from[0].replace(\"&start=\", \"\")) > 0)
\t\t\t\t\tfrom = \"&start=\" + (parseInt(from[0].replace(\"&start=\", \"\")) + 40);
\t\t\t\telse
\t\t\t\t\tfrom = \"&start=40\";
\t\t\t\turl = url.replace(/&start=[0-9]+/i, \"\") + from;
\t\t\t\tgetGridData(url);
\t\t\t}

\t\t\tfunction gridPrevPage(url)
\t\t\t{
\t\t\t\tvar from = url.match(/&start=[0-9]+/i);
\t\t\t\tif (from && from[0] && parseInt(from[0].replace(\"&start=\", \"\")) > 0)
\t\t\t\t{
\t\t\t\t\tvar fromInt = parseInt(from[0].replace(\"&start=\", \"\")) - 40;
\t\t\t\t\tif (fromInt > 0)
\t\t\t\t\t\tfrom = \"&start=\" + fromInt;
\t\t\t\t\telse
\t\t\t\t\t\tfrom = \"&start=0\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t\tfrom = \"&start=0\";
\t\t\t\turl = url.replace(/&start=[0-9]+/i, \"\") + from;
\t\t\t\tgetGridData(url);
\t\t\t}

\t\t\t\$(document).ready(function(){getGridData(\"' . \$grider . '&sort=' . urlencode(\$params['defaultSortColumn']) . '&dir=' . urlencode(\$params['defaultSortDirection']) . \$customParams . '\");});
\t\t</script>';

        return \$html;
    }

    public function setColumnsInfos(&\$infos)
    {
    }

    /**
     * @param array \$values
     */
    public function setValues(\$values)
    {
        \$this->_values = \$values;
    }

    /**
     * @param string \$title
     */
    public function setTitle(\$title)
    {
        \$this->_title = \$title;
    }

    /**
     * @param int \$width
     * @param int \$height
     */
    public function setSize(\$width, \$height)
    {
        \$this->_width = \$width;
        \$this->_height = \$height;
    }

    /**
     * @param int \$totalCount
     */
    public function setTotalCount(\$totalCount)
    {
        \$this->_totalCount = \$totalCount;
    }

    /**
     * @param int \$start
     * @param int \$limit
     */
    public function setLimit(\$start, \$limit)
    {
        \$this->_start = (int) \$start;
        \$this->_limit = (int) \$limit;
    }

    public function render()
    {
        echo json_encode([
            'total' => \$this->_totalCount,
            'from' => min(\$this->_start + 1, \$this->_totalCount),
            'to' => min(\$this->_start + \$this->_limit, \$this->_totalCount),
            'values' => \$this->_values,
        ]);
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/gridhtml/gridhtml.php";
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

class GridHtml extends ModuleGridEngine
{
    /**
     * @var array
     */
    private \$_values;
    /**
     * @var array
     */
    private static \$_columns;
    /**
     * @var string
     */
    public \$_title;
    /**
     * @var int
     */
    public \$_width;
    /**
     * @var int
     */
    public \$_height;
    /**
     * @var int
     */
    public \$_totalCount;
    /**
     * @var int
     */
    public \$_start;
    /**
     * @var int
     */
    public \$_limit;

    /**
     * GridHtml constructor.
     *
     * @param string|null \$type
     */
    public function __construct(\$type = null)
    {
        if (\$type != null) {
            parent::__construct(\$type);
        } else {
            \$this->name = 'gridhtml';
            \$this->tab = 'administration';
            \$this->version = '2.0.3';
            \$this->author = 'PrestaShop';
            \$this->need_instance = 0;

            Module::__construct();

            \$this->displayName = \$this->trans('Simple HTML table display', [], 'Modules.Gridhtml.Admin');
            \$this->description = \$this->trans('Just allow statistics to be displayed (and therefore analyzed) on your back office.', [], 'Modules.Gridhtml.Admin');
            \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
        }
    }

    public function install()
    {
        return parent::install() and \$this->registerHook('GridEngine');
    }

    /**
     * @param array \$params
     * @param string \$grider
     */
    public static function hookGridEngine(\$params, \$grider)
    {
        self::\$_columns = \$params['columns'];
        if (!isset(\$params['emptyMsg'])) {
            \$params['emptyMsg'] = 'Empty';
        }

        \$customParams = '';
        if (isset(\$params['customParams'])) {
            foreach (\$params['customParams'] as \$name => \$value) {
                \$customParams .= '&' . \$name . '=' . urlencode(\$value);
            }
        }

        \$html = '
\t\t<table class=\"table\" id=\"grid_1\">
\t\t\t<thead>
\t\t\t\t<tr>';
        foreach (\$params['columns'] as \$column) {
            \$html .= '<th class=\"center\"><span class=\"title_box active\">' . \$column['header'] . '</span></th>';
        }
        \$html .= '</tr>
\t\t\t</thead>
\t\t\t<tbody></tbody>
\t\t\t<tfoot><tr><th colspan=\"' . count(\$params['columns']) . '\"></th></tr></tfoot>
\t\t</table>
\t\t<script type=\"text/javascript\">
\t\t\tfunction getGridData(url)
\t\t\t{
\t\t\t\t\$(\"#grid_1 tbody\").html(\"<tr><td style=\\\"text-align:center\\\" colspan=\\\"\" + ' . count(\$params['columns']) . ' + \"\\\"><img src=\\\"../img/loadingAnimation.gif\\\" /></td></tr>\");
\t\t\t\t\$.get(url, \"\", function(json) {
\t\t\t\t\t\$(\"#grid_1 tbody\").html(\"\");
\t\t\t\t\tvar array = \$.parseJSON(json);
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\"' . addslashes(\$params['pagingMessage']) . '\");
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html().replace(\"{0}\", array[\"from\"]));
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html().replace(\"{1}\", array[\"to\"]));
\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html().replace(\"{2}\", array[\"total\"]));

\t\t\t\t\tif (array[\"from\"] > 1)
\t\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html() + \" &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a style=\\\\\"cursor:pointer;text-decoration:none\\\\\" onclick=\\\\\"gridPrevPage(\\'\"+ url +\"\\');\\\\\">&lt;&lt;</a>\");
\t\t\t\t\tif (array[\"to\"] < array[\"total\"])
\t\t\t\t\t\t\$(\"#grid_1 tfoot tr th\").html(\$(\"#grid_1 tfoot tr th\").html() + \" | <a style=\\\\\"cursor:pointer;text-decoration:none\\\\\" onclick=\\\\\"gridNextPage(\\'\"+ url +\"\\');\\\\\">&gt;&gt;</a>\");
\t\t\t\t\tvar values = array[\"values\"];
\t\t\t\t\tif (values.length > 0)
\t\t\t\t\t\t\$.each(values, function(index, row){
\t\t\t\t\t\t\tvar newLine = \"<tr>\";';
        foreach (\$params['columns'] as \$column) {
            \$html .= '\tnewLine += \"<td' . (isset(\$column['align']) ? ' align=\\\"' . \$column['align'] . '\\\"' : '') . '>\" + row[\"' . \$column['dataIndex'] . '\"] + \"</td>\";';
        }
        if (!isset(\$params['defaultSortColumn'])) {
            \$params['defaultSortColumn'] = false;
        }
        if (!isset(\$params['defaultSortDirection'])) {
            \$params['defaultSortDirection'] = false;
        }
        \$html .= '\t\t\$(\"#grid_1 tbody\").append(newLine);
\t\t\t\t\t\t});
\t\t\t\t\telse
\t\t\t\t\t\t\$(\"#grid_1 tbody\").append(\"<tr><td class=\\\"center\\\" colspan=\\\"\" + ' . count(\$params['columns']) . ' + \"\\\">' . \$params['emptyMsg'] . '</td></tr>\");
\t\t\t\t});
\t\t\t}

\t\t\tfunction gridNextPage(url)
\t\t\t{
\t\t\t\tvar from = url.match(/&start=[0-9]+/i);
\t\t\t\tif (from && from[0] && parseInt(from[0].replace(\"&start=\", \"\")) > 0)
\t\t\t\t\tfrom = \"&start=\" + (parseInt(from[0].replace(\"&start=\", \"\")) + 40);
\t\t\t\telse
\t\t\t\t\tfrom = \"&start=40\";
\t\t\t\turl = url.replace(/&start=[0-9]+/i, \"\") + from;
\t\t\t\tgetGridData(url);
\t\t\t}

\t\t\tfunction gridPrevPage(url)
\t\t\t{
\t\t\t\tvar from = url.match(/&start=[0-9]+/i);
\t\t\t\tif (from && from[0] && parseInt(from[0].replace(\"&start=\", \"\")) > 0)
\t\t\t\t{
\t\t\t\t\tvar fromInt = parseInt(from[0].replace(\"&start=\", \"\")) - 40;
\t\t\t\t\tif (fromInt > 0)
\t\t\t\t\t\tfrom = \"&start=\" + fromInt;
\t\t\t\t\telse
\t\t\t\t\t\tfrom = \"&start=0\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t\tfrom = \"&start=0\";
\t\t\t\turl = url.replace(/&start=[0-9]+/i, \"\") + from;
\t\t\t\tgetGridData(url);
\t\t\t}

\t\t\t\$(document).ready(function(){getGridData(\"' . \$grider . '&sort=' . urlencode(\$params['defaultSortColumn']) . '&dir=' . urlencode(\$params['defaultSortDirection']) . \$customParams . '\");});
\t\t</script>';

        return \$html;
    }

    public function setColumnsInfos(&\$infos)
    {
    }

    /**
     * @param array \$values
     */
    public function setValues(\$values)
    {
        \$this->_values = \$values;
    }

    /**
     * @param string \$title
     */
    public function setTitle(\$title)
    {
        \$this->_title = \$title;
    }

    /**
     * @param int \$width
     * @param int \$height
     */
    public function setSize(\$width, \$height)
    {
        \$this->_width = \$width;
        \$this->_height = \$height;
    }

    /**
     * @param int \$totalCount
     */
    public function setTotalCount(\$totalCount)
    {
        \$this->_totalCount = \$totalCount;
    }

    /**
     * @param int \$start
     * @param int \$limit
     */
    public function setLimit(\$start, \$limit)
    {
        \$this->_start = (int) \$start;
        \$this->_limit = (int) \$limit;
    }

    public function render()
    {
        echo json_encode([
            'total' => \$this->_totalCount,
            'from' => min(\$this->_start + 1, \$this->_totalCount),
            'to' => min(\$this->_start + \$this->_limit, \$this->_totalCount),
            'values' => \$this->_values,
        ]);
    }
}
", "@Modules/gridhtml/gridhtml.php", "/var/www/html/modules/gridhtml/gridhtml.php");
    }
}
