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

/* @Modules/productcomments/ProductCommentCriterion.php */
class __TwigTemplate_8eb74fdd5cb19340a6c0d7d904424985 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/ProductCommentCriterion.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/ProductCommentCriterion.php"));

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
class ProductCommentCriterion extends ObjectModel
{
    const NAME_MAX_LENGTH = 64;

    public \$id;
    public \$id_product_comment_criterion_type;
    public \$name;
    public \$active = true;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'product_comment_criterion',
        'primary' => 'id_product_comment_criterion',
        'multilang' => true,
        'fields' => [
            'id_product_comment_criterion_type' => ['type' => self::TYPE_INT],
            'active' => ['type' => self::TYPE_BOOL],
            // Lang fields
            'name' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => self::NAME_MAX_LENGTH],
        ],
    ];

    /**
     * @deprecated 6.0.0 - migrated to src/Repository/ProductCommentCriterionRepository
     */
    public function delete()
    {
        if (!parent::delete()) {
            return false;
        }
        if (\$this->id_product_comment_criterion_type == 2) {
            if (!Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_category
\t\t\t\t\tWHERE id_product_comment_criterion=' . (int) \$this->id)) {
                return false;
            }
        } elseif (\$this->id_product_comment_criterion_type == 3) {
            if (!Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_product
\t\t\t\t\tWHERE id_product_comment_criterion=' . (int) \$this->id)) {
                return false;
            }
        }

        return Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_grade`
\t\t\tWHERE `id_product_comment_criterion` = ' . (int) \$this->id);
    }

    public function update(\$nullValues = false)
    {
        \$previousUpdate = new self((int) \$this->id);
        if (!parent::update(\$nullValues)) {
            return false;
        }
        if (\$previousUpdate->id_product_comment_criterion_type != \$this->id_product_comment_criterion_type) {
            if (\$previousUpdate->id_product_comment_criterion_type == 2) {
                return Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_category
\t\t\t\t\tWHERE id_product_comment_criterion = ' . (int) \$previousUpdate->id);
            } elseif (\$previousUpdate->id_product_comment_criterion_type == 3) {
                return Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_product
\t\t\t\t\tWHERE id_product_comment_criterion = ' . (int) \$previousUpdate->id);
            }
        }

        return true;
    }

    /**
     * Link a Comment Criterion to a product
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0 - migrated to src/Repository/ProductCommentCriterionRepository
     */
    public function addProduct(\$id_product)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_criterion_product` (`id_product_comment_criterion`, `id_product`)
\t\t\tVALUES(' . (int) \$this->id . ',' . \$id_product . ')
\t\t');
    }

    /**
     * Link a Comment Criterion to a category
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0 - migrated to src/Repository/ProductCommentCriterionRepository
     */
    public function addCategory(\$id_category)
    {
        if (!Validate::isUnsignedId(\$id_category)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_criterion_category` (`id_product_comment_criterion`, `id_category`)
\t\t\tVALUES(' . (int) \$this->id . ',' . \$id_category . ')
\t\t');
    }

    /**
     * Add grade to a criterion
     *
     * @return bool succeed
     *
     * @deprecated 4.0.0
     */
    public function addGrade(\$id_product_comment, \$grade)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            exit(Tools::displayError());
        }
        if (\$grade < 0) {
            \$grade = 0;
        } elseif (\$grade > 10) {
            \$grade = 10;
        }

        return Db::getInstance()->execute('
\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_grade`
\t\t(`id_product_comment`, `id_product_comment_criterion`, `grade`) VALUES(
\t\t' . \$id_product_comment . ',
\t\t' . (int) \$this->id . ',
\t\t' . (int) (\$grade) . ')');
    }

    /**
     * Get criterion by Product
     *
     * @return array Criterion
     *
     * @deprecated 4.0.0
     */
    public static function getByProduct(\$id_product, \$id_lang)
    {
        if (!Validate::isUnsignedId(\$id_product) ||
            !Validate::isUnsignedId(\$id_lang)) {
            exit(Tools::displayError());
        }

        \$cache_id = 'ProductCommentCriterion::getByProduct_' . \$id_product . '-' . \$id_lang;
        if (!Cache::isStored(\$cache_id)) {
            \$result = Db::getInstance()->executeS('
\t\t\t\tSELECT pcc.`id_product_comment_criterion`, pccl.`name`
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion` pcc
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_lang` pccl
\t\t\t\t\tON (pcc.id_product_comment_criterion = pccl.id_product_comment_criterion)
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_product` pccp
\t\t\t\t\tON (pcc.`id_product_comment_criterion` = pccp.`id_product_comment_criterion` AND pccp.`id_product` = ' . \$id_product . ')
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_category` pccc
\t\t\t\t\tON (pcc.`id_product_comment_criterion` = pccc.`id_product_comment_criterion`)
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_shop` ps
\t\t\t\t\tON (ps.id_category_default = pccc.id_category AND ps.id_product = ' . \$id_product . ')
\t\t\t\tWHERE pccl.`id_lang` = ' . \$id_lang . '
\t\t\t\tAND (
\t\t\t\t\tpccp.id_product IS NOT NULL
\t\t\t\t\tOR ps.id_product IS NOT NULL
\t\t\t\t\tOR pcc.id_product_comment_criterion_type = 1
\t\t\t\t)
\t\t\t\tAND pcc.active = 1
\t\t\t\tGROUP BY pcc.id_product_comment_criterion
\t\t\t');
            Cache::store(\$cache_id, \$result);
        }

        return Cache::retrieve(\$cache_id);
    }

    /**
     * Get Criterions
     *
     * @return array Criterions
     *
     * @deprecated 6.0.0
     */
    public static function getCriterions(\$id_lang, \$type = false, \$active = false)
    {
        if (!Validate::isUnsignedId(\$id_lang)) {
            exit(Tools::displayError());
        }

        \$sql = '
\t\t\tSELECT pcc.`id_product_comment_criterion`, pcc.id_product_comment_criterion_type, pccl.`name`, pcc.active
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion` pcc
\t\t\tJOIN `' . _DB_PREFIX_ . 'product_comment_criterion_lang` pccl ON (pcc.id_product_comment_criterion = pccl.id_product_comment_criterion)
\t\t\tWHERE pccl.`id_lang` = ' . \$id_lang . (\$active ? ' AND active = 1' : '') . (\$type ? ' AND id_product_comment_criterion_type = ' . (int) \$type : '') . '
\t\t\tORDER BY pccl.`name` ASC';
        \$criterions = Db::getInstance()->executeS(\$sql);

        \$types = self::getTypes();
        foreach (\$criterions as \$key => \$data) {
            \$criterions[\$key]['type_name'] = \$types[\$data['id_product_comment_criterion_type']];
        }

        return \$criterions;
    }

    /**
     * @deprecated 6.0.0
     */
    public function getProducts()
    {
        \$res = Db::getInstance()->executeS('
\t\t\tSELECT pccp.id_product, pccp.id_product_comment_criterion
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion_product` pccp
\t\t\tWHERE pccp.id_product_comment_criterion = ' . (int) \$this->id);
        \$products = [];
        if (\$res) {
            foreach (\$res as \$row) {
                \$products[] = (int) \$row['id_product'];
            }
        }

        return \$products;
    }

    /**
     * @deprecated 6.0.0
     */
    public function getCategories()
    {
        \$res = Db::getInstance()->executeS('
\t\t\tSELECT pccc.id_category, pccc.id_product_comment_criterion
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion_category` pccc
\t\t\tWHERE pccc.id_product_comment_criterion = ' . (int) \$this->id);
        \$criterions = [];
        if (\$res) {
            foreach (\$res as \$row) {
                \$criterions[] = (int) \$row['id_category'];
            }
        }

        return \$criterions;
    }

    /**
     * @deprecated 6.0.0
     */
    public function deleteCategories()
    {
        return Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_criterion_category`
\t\t\tWHERE `id_product_comment_criterion` = ' . (int) \$this->id);
    }

    /**
     * @deprecated 6.0.0
     */
    public function deleteProducts()
    {
        return Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_criterion_product`
\t\t\tWHERE `id_product_comment_criterion` = ' . (int) \$this->id);
    }

    /**
     * @deprecated 6.0.0
     */
    public static function getTypes()
    {
        // Instance of module class for translations
        \$module = new ProductComments();

        return [
            1 => \$module->getTranslator()->trans('Valid for the entire catalog', [], 'Modules.Productcomments.Admin'),
            2 => \$module->getTranslator()->trans('Restricted to some categories', [], 'Modules.Productcomments.Admin'),
            3 => \$module->getTranslator()->trans('Restricted to some products', [], 'Modules.Productcomments.Admin'),
        ];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/ProductCommentCriterion.php";
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
class ProductCommentCriterion extends ObjectModel
{
    const NAME_MAX_LENGTH = 64;

    public \$id;
    public \$id_product_comment_criterion_type;
    public \$name;
    public \$active = true;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'product_comment_criterion',
        'primary' => 'id_product_comment_criterion',
        'multilang' => true,
        'fields' => [
            'id_product_comment_criterion_type' => ['type' => self::TYPE_INT],
            'active' => ['type' => self::TYPE_BOOL],
            // Lang fields
            'name' => ['type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => self::NAME_MAX_LENGTH],
        ],
    ];

    /**
     * @deprecated 6.0.0 - migrated to src/Repository/ProductCommentCriterionRepository
     */
    public function delete()
    {
        if (!parent::delete()) {
            return false;
        }
        if (\$this->id_product_comment_criterion_type == 2) {
            if (!Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_category
\t\t\t\t\tWHERE id_product_comment_criterion=' . (int) \$this->id)) {
                return false;
            }
        } elseif (\$this->id_product_comment_criterion_type == 3) {
            if (!Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_product
\t\t\t\t\tWHERE id_product_comment_criterion=' . (int) \$this->id)) {
                return false;
            }
        }

        return Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_grade`
\t\t\tWHERE `id_product_comment_criterion` = ' . (int) \$this->id);
    }

    public function update(\$nullValues = false)
    {
        \$previousUpdate = new self((int) \$this->id);
        if (!parent::update(\$nullValues)) {
            return false;
        }
        if (\$previousUpdate->id_product_comment_criterion_type != \$this->id_product_comment_criterion_type) {
            if (\$previousUpdate->id_product_comment_criterion_type == 2) {
                return Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_category
\t\t\t\t\tWHERE id_product_comment_criterion = ' . (int) \$previousUpdate->id);
            } elseif (\$previousUpdate->id_product_comment_criterion_type == 3) {
                return Db::getInstance()->execute('
\t\t\t\t\tDELETE FROM ' . _DB_PREFIX_ . 'product_comment_criterion_product
\t\t\t\t\tWHERE id_product_comment_criterion = ' . (int) \$previousUpdate->id);
            }
        }

        return true;
    }

    /**
     * Link a Comment Criterion to a product
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0 - migrated to src/Repository/ProductCommentCriterionRepository
     */
    public function addProduct(\$id_product)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_criterion_product` (`id_product_comment_criterion`, `id_product`)
\t\t\tVALUES(' . (int) \$this->id . ',' . \$id_product . ')
\t\t');
    }

    /**
     * Link a Comment Criterion to a category
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0 - migrated to src/Repository/ProductCommentCriterionRepository
     */
    public function addCategory(\$id_category)
    {
        if (!Validate::isUnsignedId(\$id_category)) {
            exit(Tools::displayError());
        }

        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_criterion_category` (`id_product_comment_criterion`, `id_category`)
\t\t\tVALUES(' . (int) \$this->id . ',' . \$id_category . ')
\t\t');
    }

    /**
     * Add grade to a criterion
     *
     * @return bool succeed
     *
     * @deprecated 4.0.0
     */
    public function addGrade(\$id_product_comment, \$grade)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            exit(Tools::displayError());
        }
        if (\$grade < 0) {
            \$grade = 0;
        } elseif (\$grade > 10) {
            \$grade = 10;
        }

        return Db::getInstance()->execute('
\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_grade`
\t\t(`id_product_comment`, `id_product_comment_criterion`, `grade`) VALUES(
\t\t' . \$id_product_comment . ',
\t\t' . (int) \$this->id . ',
\t\t' . (int) (\$grade) . ')');
    }

    /**
     * Get criterion by Product
     *
     * @return array Criterion
     *
     * @deprecated 4.0.0
     */
    public static function getByProduct(\$id_product, \$id_lang)
    {
        if (!Validate::isUnsignedId(\$id_product) ||
            !Validate::isUnsignedId(\$id_lang)) {
            exit(Tools::displayError());
        }

        \$cache_id = 'ProductCommentCriterion::getByProduct_' . \$id_product . '-' . \$id_lang;
        if (!Cache::isStored(\$cache_id)) {
            \$result = Db::getInstance()->executeS('
\t\t\t\tSELECT pcc.`id_product_comment_criterion`, pccl.`name`
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion` pcc
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_lang` pccl
\t\t\t\t\tON (pcc.id_product_comment_criterion = pccl.id_product_comment_criterion)
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_product` pccp
\t\t\t\t\tON (pcc.`id_product_comment_criterion` = pccp.`id_product_comment_criterion` AND pccp.`id_product` = ' . \$id_product . ')
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_category` pccc
\t\t\t\t\tON (pcc.`id_product_comment_criterion` = pccc.`id_product_comment_criterion`)
\t\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_shop` ps
\t\t\t\t\tON (ps.id_category_default = pccc.id_category AND ps.id_product = ' . \$id_product . ')
\t\t\t\tWHERE pccl.`id_lang` = ' . \$id_lang . '
\t\t\t\tAND (
\t\t\t\t\tpccp.id_product IS NOT NULL
\t\t\t\t\tOR ps.id_product IS NOT NULL
\t\t\t\t\tOR pcc.id_product_comment_criterion_type = 1
\t\t\t\t)
\t\t\t\tAND pcc.active = 1
\t\t\t\tGROUP BY pcc.id_product_comment_criterion
\t\t\t');
            Cache::store(\$cache_id, \$result);
        }

        return Cache::retrieve(\$cache_id);
    }

    /**
     * Get Criterions
     *
     * @return array Criterions
     *
     * @deprecated 6.0.0
     */
    public static function getCriterions(\$id_lang, \$type = false, \$active = false)
    {
        if (!Validate::isUnsignedId(\$id_lang)) {
            exit(Tools::displayError());
        }

        \$sql = '
\t\t\tSELECT pcc.`id_product_comment_criterion`, pcc.id_product_comment_criterion_type, pccl.`name`, pcc.active
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion` pcc
\t\t\tJOIN `' . _DB_PREFIX_ . 'product_comment_criterion_lang` pccl ON (pcc.id_product_comment_criterion = pccl.id_product_comment_criterion)
\t\t\tWHERE pccl.`id_lang` = ' . \$id_lang . (\$active ? ' AND active = 1' : '') . (\$type ? ' AND id_product_comment_criterion_type = ' . (int) \$type : '') . '
\t\t\tORDER BY pccl.`name` ASC';
        \$criterions = Db::getInstance()->executeS(\$sql);

        \$types = self::getTypes();
        foreach (\$criterions as \$key => \$data) {
            \$criterions[\$key]['type_name'] = \$types[\$data['id_product_comment_criterion_type']];
        }

        return \$criterions;
    }

    /**
     * @deprecated 6.0.0
     */
    public function getProducts()
    {
        \$res = Db::getInstance()->executeS('
\t\t\tSELECT pccp.id_product, pccp.id_product_comment_criterion
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion_product` pccp
\t\t\tWHERE pccp.id_product_comment_criterion = ' . (int) \$this->id);
        \$products = [];
        if (\$res) {
            foreach (\$res as \$row) {
                \$products[] = (int) \$row['id_product'];
            }
        }

        return \$products;
    }

    /**
     * @deprecated 6.0.0
     */
    public function getCategories()
    {
        \$res = Db::getInstance()->executeS('
\t\t\tSELECT pccc.id_category, pccc.id_product_comment_criterion
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_criterion_category` pccc
\t\t\tWHERE pccc.id_product_comment_criterion = ' . (int) \$this->id);
        \$criterions = [];
        if (\$res) {
            foreach (\$res as \$row) {
                \$criterions[] = (int) \$row['id_category'];
            }
        }

        return \$criterions;
    }

    /**
     * @deprecated 6.0.0
     */
    public function deleteCategories()
    {
        return Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_criterion_category`
\t\t\tWHERE `id_product_comment_criterion` = ' . (int) \$this->id);
    }

    /**
     * @deprecated 6.0.0
     */
    public function deleteProducts()
    {
        return Db::getInstance()->execute('
\t\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_criterion_product`
\t\t\tWHERE `id_product_comment_criterion` = ' . (int) \$this->id);
    }

    /**
     * @deprecated 6.0.0
     */
    public static function getTypes()
    {
        // Instance of module class for translations
        \$module = new ProductComments();

        return [
            1 => \$module->getTranslator()->trans('Valid for the entire catalog', [], 'Modules.Productcomments.Admin'),
            2 => \$module->getTranslator()->trans('Restricted to some categories', [], 'Modules.Productcomments.Admin'),
            3 => \$module->getTranslator()->trans('Restricted to some products', [], 'Modules.Productcomments.Admin'),
        ];
    }
}
", "@Modules/productcomments/ProductCommentCriterion.php", "/var/www/html/modules/productcomments/ProductCommentCriterion.php");
    }
}
