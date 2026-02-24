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

/* @Modules/ps_facetedsearch/src/Filters/Provider.php */
class __TwigTemplate_f212e5da03368bebc6d65e5bf39690a8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Filters/Provider.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Filters/Provider.php"));

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

namespace PrestaShop\\Module\\FacetedSearch\\Filters;

use Db;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\ProductSearchQuery;

/**
 * Class responsible for providing filters configured for current search query
 */
class Provider
{
    /**
     * @var array
     */
    private \$filters = [];

    /**
     * @var Db
     */
    private \$database;

    public function __construct(Db \$database)
    {
        \$this->database = \$database;
    }

    /**
     * Get filters for current search query
     *
     * @param ProductSearchQuery \$query
     * @param int \$idShop
     *
     * @return array Filters
     */
    public function getFiltersForQuery(ProductSearchQuery \$query, int \$idShop)
    {
        if (empty(\$this->filters)) {
            \$this->filters = \$this->database->executeS(
            'SELECT type, id_value, filter_show_limit, filter_type FROM ' . _DB_PREFIX_ . 'layered_category
            WHERE controller = \\'' . \$query->getQueryType() . '\\'
            AND id_category = ' . (\$query->getQueryType() == 'category' ? (int) \$query->getIdCategory() : 0) . '
            AND id_shop = ' . \$idShop . '
            GROUP BY `type`, id_value ORDER BY position ASC'
            );
        }

        return \$this->filters;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Filters/Provider.php";
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

namespace PrestaShop\\Module\\FacetedSearch\\Filters;

use Db;
use PrestaShop\\PrestaShop\\Core\\Product\\Search\\ProductSearchQuery;

/**
 * Class responsible for providing filters configured for current search query
 */
class Provider
{
    /**
     * @var array
     */
    private \$filters = [];

    /**
     * @var Db
     */
    private \$database;

    public function __construct(Db \$database)
    {
        \$this->database = \$database;
    }

    /**
     * Get filters for current search query
     *
     * @param ProductSearchQuery \$query
     * @param int \$idShop
     *
     * @return array Filters
     */
    public function getFiltersForQuery(ProductSearchQuery \$query, int \$idShop)
    {
        if (empty(\$this->filters)) {
            \$this->filters = \$this->database->executeS(
            'SELECT type, id_value, filter_show_limit, filter_type FROM ' . _DB_PREFIX_ . 'layered_category
            WHERE controller = \\'' . \$query->getQueryType() . '\\'
            AND id_category = ' . (\$query->getQueryType() == 'category' ? (int) \$query->getIdCategory() : 0) . '
            AND id_shop = ' . \$idShop . '
            GROUP BY `type`, id_value ORDER BY position ASC'
            );
        }

        return \$this->filters;
    }
}
", "@Modules/ps_facetedsearch/src/Filters/Provider.php", "/var/www/html/modules/ps_facetedsearch/src/Filters/Provider.php");
    }
}
