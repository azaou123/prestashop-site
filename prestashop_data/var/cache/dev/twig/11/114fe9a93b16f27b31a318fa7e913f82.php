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

/* @Modules/ps_linklist/src/Core/Grid/Query/LinkBlockQueryBuilder.php */
class __TwigTemplate_5f4ace09a101f4260718e0d2cdfe9c78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Core/Grid/Query/LinkBlockQueryBuilder.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Core/Grid/Query/LinkBlockQueryBuilder.php"));

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

namespace PrestaShop\\Module\\LinkList\\Core\\Grid\\Query;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use PrestaShop\\PrestaShop\\Core\\Grid\\Query\\AbstractDoctrineQueryBuilder;
use PrestaShop\\PrestaShop\\Core\\Grid\\Search\\SearchCriteriaInterface;

/**
 * Class LinkBlockQueryBuilder.
 */
final class LinkBlockQueryBuilder extends AbstractDoctrineQueryBuilder
{
    /**
     * @param SearchCriteriaInterface|null \$searchCriteria
     *
     * @return QueryBuilder
     */
    public function getSearchQueryBuilder(SearchCriteriaInterface \$searchCriteria = null)
    {
        \$qb = \$this->getQueryBuilder(\$searchCriteria->getFilters());
        \$qb->select('
            lb.id_link_block,
            lbl.name AS block_name,
            lb.id_hook,
            h.name as hook_name,
            h.title as hook_title,
            h.description as hook_description,
            lbs.position as position,
            GROUP_CONCAT(s.name SEPARATOR \", \") as shop_name
            ')
            ->groupBy('lb.id_link_block')
            ->orderBy(
                \$searchCriteria->getOrderBy(),
                \$searchCriteria->getOrderWay()
            )
        ;

        if (\$searchCriteria->getLimit() > 0) {
            \$qb
                ->setFirstResult(\$searchCriteria->getOffset())
                ->setMaxResults(\$searchCriteria->getLimit())
            ;
        }

        return \$qb;
    }

    /**
     * @param SearchCriteriaInterface|null \$searchCriteria
     *
     * @return QueryBuilder
     */
    public function getCountQueryBuilder(SearchCriteriaInterface \$searchCriteria = null)
    {
        \$qb = \$this->getQueryBuilder(\$searchCriteria->getFilters());
        \$qb->select('COUNT(DISTINCT(lb.id_link_block))');

        return \$qb;
    }

    /**
     * Get generic query builder.
     *
     * @param array \$filters
     *
     * @return QueryBuilder
     */
    private function getQueryBuilder(array \$filters)
    {
        \$qb = \$this->connection
            ->createQueryBuilder()
            ->from(\$this->dbPrefix . 'link_block', 'lb')
            ->innerJoin('lb', \$this->dbPrefix . 'link_block_lang', 'lbl', 'lb.id_link_block = lbl.id_link_block')
            ->leftJoin('lb', \$this->dbPrefix . 'link_block_shop', 'lbs', 'lb.id_link_block = lbs.id_link_block')
            ->leftJoin('lb', \$this->dbPrefix . 'hook', 'h', 'lb.id_hook = h.id_hook')
            ->leftJoin('lb', \$this->dbPrefix . 'shop', 's', 's.id_shop = lbs.id_shop');

        foreach (\$filters as \$name => \$value) {
            if ('id_lang' === \$name) {
                \$qb
                    ->andWhere(\"lbl.id_lang = :\$name\")
                    ->setParameter(\$name, \$value)
                ;

                continue;
            }

            if ('id_hook' === \$name) {
                \$qb
                    ->andWhere(\"h.id_hook = :\$name\")
                    ->setParameter(\$name, \$value)
                ;

                continue;
            }

            if ('id_shop' === \$name) {
                \$qb
                    ->andWhere(\"lbs.id_shop IN (:\$name)\")
                    ->setParameter(\$name, \$value, Connection::PARAM_STR_ARRAY);

                continue;
            }

            \$qb
                ->andWhere(sprintf('lbl.%s LIKE :%s', \$name, \$name))
                ->setParameter(\$name, '%' . \$value . '%')
            ;
        }

        return \$qb;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Core/Grid/Query/LinkBlockQueryBuilder.php";
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

namespace PrestaShop\\Module\\LinkList\\Core\\Grid\\Query;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use PrestaShop\\PrestaShop\\Core\\Grid\\Query\\AbstractDoctrineQueryBuilder;
use PrestaShop\\PrestaShop\\Core\\Grid\\Search\\SearchCriteriaInterface;

/**
 * Class LinkBlockQueryBuilder.
 */
final class LinkBlockQueryBuilder extends AbstractDoctrineQueryBuilder
{
    /**
     * @param SearchCriteriaInterface|null \$searchCriteria
     *
     * @return QueryBuilder
     */
    public function getSearchQueryBuilder(SearchCriteriaInterface \$searchCriteria = null)
    {
        \$qb = \$this->getQueryBuilder(\$searchCriteria->getFilters());
        \$qb->select('
            lb.id_link_block,
            lbl.name AS block_name,
            lb.id_hook,
            h.name as hook_name,
            h.title as hook_title,
            h.description as hook_description,
            lbs.position as position,
            GROUP_CONCAT(s.name SEPARATOR \", \") as shop_name
            ')
            ->groupBy('lb.id_link_block')
            ->orderBy(
                \$searchCriteria->getOrderBy(),
                \$searchCriteria->getOrderWay()
            )
        ;

        if (\$searchCriteria->getLimit() > 0) {
            \$qb
                ->setFirstResult(\$searchCriteria->getOffset())
                ->setMaxResults(\$searchCriteria->getLimit())
            ;
        }

        return \$qb;
    }

    /**
     * @param SearchCriteriaInterface|null \$searchCriteria
     *
     * @return QueryBuilder
     */
    public function getCountQueryBuilder(SearchCriteriaInterface \$searchCriteria = null)
    {
        \$qb = \$this->getQueryBuilder(\$searchCriteria->getFilters());
        \$qb->select('COUNT(DISTINCT(lb.id_link_block))');

        return \$qb;
    }

    /**
     * Get generic query builder.
     *
     * @param array \$filters
     *
     * @return QueryBuilder
     */
    private function getQueryBuilder(array \$filters)
    {
        \$qb = \$this->connection
            ->createQueryBuilder()
            ->from(\$this->dbPrefix . 'link_block', 'lb')
            ->innerJoin('lb', \$this->dbPrefix . 'link_block_lang', 'lbl', 'lb.id_link_block = lbl.id_link_block')
            ->leftJoin('lb', \$this->dbPrefix . 'link_block_shop', 'lbs', 'lb.id_link_block = lbs.id_link_block')
            ->leftJoin('lb', \$this->dbPrefix . 'hook', 'h', 'lb.id_hook = h.id_hook')
            ->leftJoin('lb', \$this->dbPrefix . 'shop', 's', 's.id_shop = lbs.id_shop');

        foreach (\$filters as \$name => \$value) {
            if ('id_lang' === \$name) {
                \$qb
                    ->andWhere(\"lbl.id_lang = :\$name\")
                    ->setParameter(\$name, \$value)
                ;

                continue;
            }

            if ('id_hook' === \$name) {
                \$qb
                    ->andWhere(\"h.id_hook = :\$name\")
                    ->setParameter(\$name, \$value)
                ;

                continue;
            }

            if ('id_shop' === \$name) {
                \$qb
                    ->andWhere(\"lbs.id_shop IN (:\$name)\")
                    ->setParameter(\$name, \$value, Connection::PARAM_STR_ARRAY);

                continue;
            }

            \$qb
                ->andWhere(sprintf('lbl.%s LIKE :%s', \$name, \$name))
                ->setParameter(\$name, '%' . \$value . '%')
            ;
        }

        return \$qb;
    }
}
", "@Modules/ps_linklist/src/Core/Grid/Query/LinkBlockQueryBuilder.php", "/var/www/html/modules/ps_linklist/src/Core/Grid/Query/LinkBlockQueryBuilder.php");
    }
}
