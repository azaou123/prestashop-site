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

/* @Modules/graphnvd3/graphnvd3.php */
class __TwigTemplate_6e9b30faf08926d53b507283467bedd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/graphnvd3/graphnvd3.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/graphnvd3/graphnvd3.php"));

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

class GraphNvD3 extends ModuleGraphEngine
{
    private \$_width;
    private \$_height;
    private \$_values;
    private \$_legend;
    private \$_titles;

    public function __construct(\$type = null)
    {
        if (\$type !== null) {
            parent::__construct(\$type);

            return;
        }

        \$this->name = 'graphnvd3';
        \$this->tab = 'administration';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        Module::__construct();

        \$this->displayName = \$this->trans('NVD3 Charts', [], 'Modules.Graphnvd3.Admin');
        \$this->description = \$this->trans('Enable the NVD3 charting code for your own uses, providing you with ever so useful graphs.', [], 'Modules.Graphnvd3.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('GraphEngine') && \$this->registerHook('actionAdminControllerSetMedia');
    }

    public function hookActionAdminControllerSetMedia(\$params)
    {
        \$admin_webpath = str_ireplace(_PS_ROOT_DIR_, '', _PS_ADMIN_DIR_);
        \$admin_webpath = preg_replace('/^' . preg_quote(DIRECTORY_SEPARATOR, '/') . '/', '', \$admin_webpath);

        \$this->context->controller->addJS([
            _PS_JS_DIR_ . 'vendor/d3.v3.min.js',
            __PS_BASE_URI__ . \$admin_webpath . '/themes/' . \$this->context->employee->bo_theme . '/js/vendor/nv.d3.min.js',
        ]);
        \$this->context->controller->addCSS(__PS_BASE_URI__ . \$admin_webpath . '/themes/' . \$this->context->employee->bo_theme . '/css/vendor/nv.d3.css');
    }

    public static function hookGraphEngine(\$params, \$drawer)
    {
        static \$divid = 1;

        if (strpos(\$params['width'], '%') !== false) {
            \$params['width'] = (int) preg_replace('/\\s*%\\s*/', '', \$params['width']) . '%';
        } else {
            \$params['width'] = (int) \$params['width'] . 'px';
        }

        \$nvd3_func = [
            'line' => '
\t\t\t\tnv.models.lineChart()',
            'pie' => '
\t\t\t\tnv.models.pieChart()
\t\t\t\t\t.x(function(d) { return d.label; })
\t\t\t\t\t.y(function(d) { return d.value; })
\t\t\t\t\t.showLabels(true)
\t\t\t\t\t.showLegend(false)',
        ];

        return '
\t\t<div id=\"nvd3_chart_' . \$divid . '\" class=\"chart with-transitions\">
\t\t\t<svg style=\"width:' . \$params['width'] . ';height:' . (int) \$params['height'] . 'px\"></svg>
\t\t</div>
\t\t<script>
\t\t\t\$.ajax({
\t\t\turl: \"' . addslashes(\$drawer) . '\",
\t\t\tdataType: \"json\",
\t\t\ttype: \"GET\",
\t\t\tcache: false,
\t\t\theaders: {\"cache-control\": \"no-cache\"},
\t\t\tsuccess: function(jsonData){
\t\t\t\tnv.addGraph(function(){
\t\t\t\t\tvar chart = ' . \$nvd3_func[\$params['type']] . ';

\t\t\t\t\tif (jsonData.axisLabels.xAxis != null)
\t\t\t\t\t\tchart.xAxis.axisLabel(jsonData.axisLabels.xAxis);
\t\t\t\t\tif (jsonData.axisLabels.yAxis != null)
\t\t\t\t\t\tchart.yAxis.axisLabel(jsonData.axisLabels.yAxis);

\t\t\t\t\td3.select(\"#nvd3_chart_' . (\$divid++) . ' svg\")
\t\t\t\t\t\t.datum(jsonData.data)
\t\t\t\t\t\t.transition().duration(500)
\t\t\t\t\t\t.call(chart);

\t\t\t\t\tnv.utils.windowResize(chart.update);

\t\t\t\t\treturn chart;
\t\t\t\t});
\t\t\t}
\t\t});
\t\t</script>';
    }

    public function createValues(\$values)
    {
        \$this->_values = \$values;
    }

    public function setSize(\$width, \$height)
    {
        \$this->_width = \$width;
        \$this->_height = \$height;
    }

    public function setLegend(\$legend)
    {
        \$this->_legend = \$legend;
    }

    public function setTitles(\$titles)
    {
        \$this->_titles = \$titles;
    }

    public function draw()
    {
        \$array = [
            'axisLabels' => ['xAxis' => \$this->_titles['x'], 'yAxis' => \$this->_titles['y']],
            'data' => [],
        ];

        if (!isset(\$this->_values[0]) || !is_array(\$this->_values[0])) {
            \$nvd3_values = [];
            if (Tools::getValue('type') == 'pie') {
                foreach (\$this->_values as \$x => \$y) {
                    \$nvd3_values[] = ['label' => \$this->_legend[\$x], 'value' => \$y];
                }
                \$array['data'] = \$nvd3_values;
            } else {
                foreach (\$this->_values as \$x => \$y) {
                    \$nvd3_values[] = ['x' => \$x, 'y' => \$y];
                }
                \$array['data'][] = ['values' => \$nvd3_values, 'key' => \$this->_titles['main']];
            }
        } else {
            foreach (\$this->_values as \$layer => \$gross_values) {
                \$nvd3_values = [];
                foreach (\$gross_values as \$x => \$y) {
                    \$nvd3_values[] = ['x' => \$x, 'y' => \$y];
                }
                \$array['data'][] = ['values' => \$nvd3_values, 'key' => \$this->_titles['main'][\$layer]];
            }
        }
        echo preg_replace('/\"([0-9]+)\"/', '\$1', json_encode(\$array));
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/graphnvd3/graphnvd3.php";
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

class GraphNvD3 extends ModuleGraphEngine
{
    private \$_width;
    private \$_height;
    private \$_values;
    private \$_legend;
    private \$_titles;

    public function __construct(\$type = null)
    {
        if (\$type !== null) {
            parent::__construct(\$type);

            return;
        }

        \$this->name = 'graphnvd3';
        \$this->tab = 'administration';
        \$this->version = '2.0.3';
        \$this->author = 'PrestaShop';
        \$this->need_instance = 0;

        Module::__construct();

        \$this->displayName = \$this->trans('NVD3 Charts', [], 'Modules.Graphnvd3.Admin');
        \$this->description = \$this->trans('Enable the NVD3 charting code for your own uses, providing you with ever so useful graphs.', [], 'Modules.Graphnvd3.Admin');
        \$this->ps_versions_compliancy = ['min' => '1.7.1.0', 'max' => _PS_VERSION_];
    }

    public function install()
    {
        return parent::install() && \$this->registerHook('GraphEngine') && \$this->registerHook('actionAdminControllerSetMedia');
    }

    public function hookActionAdminControllerSetMedia(\$params)
    {
        \$admin_webpath = str_ireplace(_PS_ROOT_DIR_, '', _PS_ADMIN_DIR_);
        \$admin_webpath = preg_replace('/^' . preg_quote(DIRECTORY_SEPARATOR, '/') . '/', '', \$admin_webpath);

        \$this->context->controller->addJS([
            _PS_JS_DIR_ . 'vendor/d3.v3.min.js',
            __PS_BASE_URI__ . \$admin_webpath . '/themes/' . \$this->context->employee->bo_theme . '/js/vendor/nv.d3.min.js',
        ]);
        \$this->context->controller->addCSS(__PS_BASE_URI__ . \$admin_webpath . '/themes/' . \$this->context->employee->bo_theme . '/css/vendor/nv.d3.css');
    }

    public static function hookGraphEngine(\$params, \$drawer)
    {
        static \$divid = 1;

        if (strpos(\$params['width'], '%') !== false) {
            \$params['width'] = (int) preg_replace('/\\s*%\\s*/', '', \$params['width']) . '%';
        } else {
            \$params['width'] = (int) \$params['width'] . 'px';
        }

        \$nvd3_func = [
            'line' => '
\t\t\t\tnv.models.lineChart()',
            'pie' => '
\t\t\t\tnv.models.pieChart()
\t\t\t\t\t.x(function(d) { return d.label; })
\t\t\t\t\t.y(function(d) { return d.value; })
\t\t\t\t\t.showLabels(true)
\t\t\t\t\t.showLegend(false)',
        ];

        return '
\t\t<div id=\"nvd3_chart_' . \$divid . '\" class=\"chart with-transitions\">
\t\t\t<svg style=\"width:' . \$params['width'] . ';height:' . (int) \$params['height'] . 'px\"></svg>
\t\t</div>
\t\t<script>
\t\t\t\$.ajax({
\t\t\turl: \"' . addslashes(\$drawer) . '\",
\t\t\tdataType: \"json\",
\t\t\ttype: \"GET\",
\t\t\tcache: false,
\t\t\theaders: {\"cache-control\": \"no-cache\"},
\t\t\tsuccess: function(jsonData){
\t\t\t\tnv.addGraph(function(){
\t\t\t\t\tvar chart = ' . \$nvd3_func[\$params['type']] . ';

\t\t\t\t\tif (jsonData.axisLabels.xAxis != null)
\t\t\t\t\t\tchart.xAxis.axisLabel(jsonData.axisLabels.xAxis);
\t\t\t\t\tif (jsonData.axisLabels.yAxis != null)
\t\t\t\t\t\tchart.yAxis.axisLabel(jsonData.axisLabels.yAxis);

\t\t\t\t\td3.select(\"#nvd3_chart_' . (\$divid++) . ' svg\")
\t\t\t\t\t\t.datum(jsonData.data)
\t\t\t\t\t\t.transition().duration(500)
\t\t\t\t\t\t.call(chart);

\t\t\t\t\tnv.utils.windowResize(chart.update);

\t\t\t\t\treturn chart;
\t\t\t\t});
\t\t\t}
\t\t});
\t\t</script>';
    }

    public function createValues(\$values)
    {
        \$this->_values = \$values;
    }

    public function setSize(\$width, \$height)
    {
        \$this->_width = \$width;
        \$this->_height = \$height;
    }

    public function setLegend(\$legend)
    {
        \$this->_legend = \$legend;
    }

    public function setTitles(\$titles)
    {
        \$this->_titles = \$titles;
    }

    public function draw()
    {
        \$array = [
            'axisLabels' => ['xAxis' => \$this->_titles['x'], 'yAxis' => \$this->_titles['y']],
            'data' => [],
        ];

        if (!isset(\$this->_values[0]) || !is_array(\$this->_values[0])) {
            \$nvd3_values = [];
            if (Tools::getValue('type') == 'pie') {
                foreach (\$this->_values as \$x => \$y) {
                    \$nvd3_values[] = ['label' => \$this->_legend[\$x], 'value' => \$y];
                }
                \$array['data'] = \$nvd3_values;
            } else {
                foreach (\$this->_values as \$x => \$y) {
                    \$nvd3_values[] = ['x' => \$x, 'y' => \$y];
                }
                \$array['data'][] = ['values' => \$nvd3_values, 'key' => \$this->_titles['main']];
            }
        } else {
            foreach (\$this->_values as \$layer => \$gross_values) {
                \$nvd3_values = [];
                foreach (\$gross_values as \$x => \$y) {
                    \$nvd3_values[] = ['x' => \$x, 'y' => \$y];
                }
                \$array['data'][] = ['values' => \$nvd3_values, 'key' => \$this->_titles['main'][\$layer]];
            }
        }
        echo preg_replace('/\"([0-9]+)\"/', '\$1', json_encode(\$array));
    }
}
", "@Modules/graphnvd3/graphnvd3.php", "/var/www/html/modules/graphnvd3/graphnvd3.php");
    }
}
