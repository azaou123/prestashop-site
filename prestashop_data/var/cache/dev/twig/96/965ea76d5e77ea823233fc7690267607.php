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

/* @Modules/productcomments/ProductComment.php */
class __TwigTemplate_3331df71831768ff025dab8168eb444a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/ProductComment.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/ProductComment.php"));

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

class ProductComment extends ObjectModel
{
    /** @var int */
    public \$id;

    /** @var int */
    public \$id_product;

    /** @var int */
    public \$id_customer;

    /** @var int */
    public \$id_guest;

    /** @var int */
    public \$customer_name;

    /** @var string */
    public \$title;

    /** @var string */
    public \$content;

    /** @var int */
    public \$grade;

    /** @var bool */
    public \$validate = false;

    /** @var bool */
    public \$deleted = false;

    /** @var string Object creation date */
    public \$date_add;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'product_comment',
        'primary' => 'id_product_comment',
        'fields' => [
            'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'id_guest' => ['type' => self::TYPE_INT],
            'customer_name' => ['type' => self::TYPE_STRING],
            'title' => ['type' => self::TYPE_STRING],
            'content' => ['type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 65535, 'required' => true],
            'grade' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'validate' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
            'deleted' => ['type' => self::TYPE_BOOL],
            'date_add' => ['type' => self::TYPE_DATE],
        ],
    ];

    /**
     * Get comments by IdProduct
     *
     * @return array|bool
     */
    public static function getByProduct(\$id_product, \$p = 1, \$n = null, \$id_customer = null)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            return false;
        }
        \$validate = (bool) Configuration::get('PRODUCT_COMMENTS_MODERATE');
        \$p = (int) \$p;
        \$n = (int) \$n;
        \$id_customer = (int) \$id_customer;
        if (\$p <= 1) {
            \$p = 1;
        }
        if (\$n != null && \$n <= 0) {
            \$n = 5;
        }

        \$cache_id = 'ProductComment::getByProduct_' . \$id_product . '-' . \$p . '-' . \$n . '-' . \$id_customer . '-' . \$validate;
        if (!Cache::isStored(\$cache_id)) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT pc.`id_product_comment`,
\t\t\t(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment` AND pcu.`usefulness` = 1) AS total_useful,
\t\t\t(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment`) AS total_advice, ' .
            (\$id_customer ? '(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_usefulness` pcuc WHERE pcuc.`id_product_comment` = pc.`id_product_comment` AND pcuc.id_customer = ' . \$id_customer . ') AS customer_advice, ' : '') .
            (\$id_customer ? '(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_report` pcrc WHERE pcrc.`id_product_comment` = pc.`id_product_comment` AND pcrc.id_customer = ' . \$id_customer . ') AS customer_report, ' : '') . '
\t\t\tIF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  LEFT(c.`lastname`, 1)), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pc.title
\t\t\t  FROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON c.`id_customer` = pc.`id_customer`
\t\t\tWHERE pc.`id_product` = ' . \$id_product . (\$validate ? ' AND pc.`validate` = 1' : '') . '
\t\t\tORDER BY pc.`date_add` DESC
\t\t\t' . (\$n ? 'LIMIT ' . ((\$p - 1) * \$n) . ', ' . \$n : ''));
            Cache::store(\$cache_id, \$result);
        }

        return Cache::retrieve(\$cache_id);
    }

    /**
     * Return customer's comment
     *
     * @return array Comments
     */
    public static function getByCustomer(\$id_product, \$id_customer, \$get_last = false, \$id_guest = false)
    {
        \$cache_id = 'ProductComment::getByCustomer_' . (int) \$id_product . '-' . (int) \$id_customer . '-' . (bool) \$get_last . '-' . (int) \$id_guest;
        if (!Cache::isStored(\$cache_id)) {
            \$results = Db::getInstance()->executeS('
\t\t\t\tSELECT *
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\t\tWHERE pc.`id_product` = ' . (int) \$id_product . '
\t\t\t\tAND ' . (!\$id_guest ? 'pc.`id_customer` = ' . (int) \$id_customer : 'pc.`id_guest` = ' . (int) \$id_guest) . '
\t\t\t\tORDER BY pc.`date_add` DESC '
                . (\$get_last ? 'LIMIT 1' : '')
            );

            if (\$get_last && count(\$results)) {
                \$results = array_shift(\$results);
            }

            Cache::store(\$cache_id, \$results);
        }

        return Cache::retrieve(\$cache_id);
    }

    /**
     * Get Grade By product
     *
     * @return array|bool
     */
    public static function getGradeByProduct(\$id_product, \$id_lang)
    {
        if (!Validate::isUnsignedId(\$id_product) ||
            !Validate::isUnsignedId(\$id_lang)) {
            return false;
        }
        \$validate = (bool) Configuration::get('PRODUCT_COMMENTS_MODERATE');

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\tSELECT pc.`id_product_comment`, pcg.`grade`, pccl.`name`, pcc.`id_product_comment_criterion`
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_grade` pcg ON (pcg.`id_product_comment` = pc.`id_product_comment`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion` pcc ON (pcc.`id_product_comment_criterion` = pcg.`id_product_comment_criterion`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_lang` pccl ON (pccl.`id_product_comment_criterion` = pcg.`id_product_comment_criterion`)
\t\tWHERE pc.`id_product` = ' . \$id_product . '
\t\tAND pccl.`id_lang` = ' . \$id_lang .
        (\$validate ? ' AND pc.`validate` = 1' : ''));
    }

    public static function getRatings(\$id_product)
    {
        \$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');

        \$sql = 'SELECT AVG(pc.`grade`) AS avg,
\t\t\t\tMIN(pc.`grade`) AS min,
\t\t\t\tMAX(pc.`grade`) AS max
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tWHERE pc.`id_product` = ' . (int) \$id_product . '
\t\t\tAND pc.`deleted` = 0' .
            (\$validate == '1' ? ' AND pc.`validate` = 1' : '');

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);
    }

    /**
     * @deprecated 4.0.0
     */
    public static function getAverageGrade(\$id_product)
    {
        \$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow('
\t\tSELECT AVG(pc.`grade`) AS grade
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tWHERE pc.`id_product` = ' . (int) \$id_product . '
\t\tAND pc.`deleted` = 0' .
        (\$validate == '1' ? ' AND pc.`validate` = 1' : ''));
    }

    public static function getAveragesByProduct(\$id_product, \$id_lang)
    {
        /* Get all grades */
        \$grades = ProductComment::getGradeByProduct((int) \$id_product, (int) \$id_lang);
        \$total = ProductComment::getGradedCommentNumber((int) \$id_product);
        if (!count(\$grades) || !\$total) {
            return [];
        }

        /* Addition grades for each criterion */
        \$criterionsGradeTotal = [];
        \$count_grades = count(\$grades);
        for (\$i = 0; \$i < \$count_grades; ++\$i) {
            if (array_key_exists(\$grades[\$i]['id_product_comment_criterion'], \$criterionsGradeTotal) === false) {
                \$criterionsGradeTotal[\$grades[\$i]['id_product_comment_criterion']] = (int) (\$grades[\$i]['grade']);
            } else {
                \$criterionsGradeTotal[\$grades[\$i]['id_product_comment_criterion']] += (int) (\$grades[\$i]['grade']);
            }
        }

        /* Finally compute the averages */
        \$averages = [];
        foreach (\$criterionsGradeTotal as \$key => \$criterionGradeTotal) {
            \$averages[(int) \$key] = \$criterionGradeTotal / \$total;
        }

        return \$averages;
    }

    /**
     * Return number of comments and average grade by products
     *
     * @return int|false
     *
     * @deprecated 4.0.0
     */
    public static function getCommentNumber(\$id_product)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            return false;
        }
        \$validate = (bool) Configuration::get('PRODUCT_COMMENTS_MODERATE');
        \$cache_id = 'ProductComment::getCommentNumber_' . \$id_product . '-' . \$validate;
        if (!Cache::isStored(\$cache_id)) {
            \$result = (int) Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\t\tSELECT COUNT(`id_product_comment`) AS \"nbr\"
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tWHERE `id_product` = ' . \$id_product . (\$validate ? ' AND `validate` = 1' : ''));
            Cache::store(\$cache_id, (string) \$result);
        }

        return (int) Cache::retrieve(\$cache_id);
    }

    /**
     * Return number of comments and average grade by products
     *
     * @return int|bool
     */
    public static function getGradedCommentNumber(\$id_product)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            return false;
        }
        \$validate = (int) Configuration::get('PRODUCT_COMMENTS_MODERATE');

        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow('
\t\tSELECT COUNT(pc.`id_product`) AS nbr
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tWHERE `id_product` = ' . \$id_product . (\$validate == '1' ? ' AND `validate` = 1' : '') . '
\t\tAND `grade` > 0');

        return (int) (\$result['nbr']);
    }

    /**
     * Get comments by Validation
     *
     * @return array Comments
     *
     * @deprecated 6.0.0
     */
    public static function getByValidate(\$validate = '0', \$deleted = false, \$p = null, \$limit = null, \$skip_validate = false)
    {
        \$sql = '
\t\t\tSELECT pc.`id_product_comment`, pc.`id_product`, c.id_customer AS customer_id, IF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  c.`lastname`), pc.customer_name) customer_name, pc.`title`, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (c.`id_customer` = pc.`id_customer`)
            LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . Shop::addSqlRestrictionOnLang('pl') . ')';

        if (!\$skip_validate) {
            \$sql .= ' WHERE pc.`validate` = ' . (int) \$validate;
        }

        \$sql .= ' ORDER BY pc.`date_add` DESC';

        if (\$p && \$limit) {
            \$offset = (\$p - 1) * \$limit;
            \$sql .= ' LIMIT ' . (int) \$offset . ',' . (int) \$limit;
        }

        return Db::getInstance()->executeS(\$sql);
    }

    /**
     * Get numbers of comments by Validation
     *
     * @return int Count of comments
     *
     * @deprecated 6.0.0
     */
    public static function getCountByValidate(\$validate = '0', \$skip_validate = false)
    {
        \$sql = '
            SELECT COUNT(*)
            FROM `' . _DB_PREFIX_ . 'product_comment`';

        if (!\$skip_validate) {
            \$sql .= ' WHERE `validate` = ' . (int) \$validate;
        }

        return (int) Db::getInstance()->getValue(\$sql);
    }

    /**
     * Get all comments
     *
     * @return array Comments
     */
    public static function getAll()
    {
        return Db::getInstance()->executeS('
\t\tSELECT pc.`id_product_comment`, pc.`id_product`, IF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  c.`lastname`), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (c.`id_customer` = pc.`id_customer`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . Shop::addSqlRestrictionOnLang('pl') . ')
\t\tORDER BY pc.`date_add` DESC');
    }

    /**
     * Validate a comment
     *
     * @return bool succeed
     */
    public function validate(\$validate = '1')
    {
        if (!Validate::isUnsignedId(\$this->id)) {
            return false;
        }

        \$success = (Db::getInstance()->execute('
\t\tUPDATE `' . _DB_PREFIX_ . 'product_comment` SET
\t\t`validate` = ' . (int) \$validate . '
\t\tWHERE `id_product_comment` = ' . \$this->id));

        Hook::exec('actionObjectProductCommentValidateAfter', ['object' => \$this]);

        return \$success;
    }

    /**
     * Delete a comment, grade and report data
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public function delete()
    {
        return parent::delete()
            && ProductComment::deleteGrades(\$this->id)
            && ProductComment::deleteReports(\$this->id)
            && ProductComment::deleteUsefulness(\$this->id);
    }

    /**
     * Delete Grades
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public static function deleteGrades(\$id_product_comment)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_grade`
\t\tWHERE `id_product_comment` = ' . \$id_product_comment);
    }

    /**
     * Delete Reports
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public static function deleteReports(\$id_product_comment)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_report`
\t\tWHERE `id_product_comment` = ' . \$id_product_comment);
    }

    /**
     * Delete usefulness
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public static function deleteUsefulness(\$id_product_comment)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_usefulness`
\t\tWHERE `id_product_comment` = ' . \$id_product_comment);
    }

    /**
     * Report comment
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/ReportComment and src/Entity/ProductCommentReport
     */
    public static function reportComment(\$id_product_comment, \$id_customer)
    {
        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_report` (`id_product_comment`, `id_customer`)
\t\t\tVALUES (' . (int) \$id_product_comment . ', ' . (int) \$id_customer . ')');
    }

    /**
     * Comment already report
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/ReportComment and src/Entity/ProductCommentReport
     */
    public static function isAlreadyReport(\$id_product_comment, \$id_customer)
    {
        return (bool) Db::getInstance()->getValue('
\t\t\tSELECT COUNT(*)
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_report`
\t\t\tWHERE `id_customer` = ' . (int) \$id_customer . '
\t\t\tAND `id_product_comment` = ' . (int) \$id_product_comment);
    }

    /**
     * Set comment usefulness
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/UpdateCommentUsefulness and src/Entity/ProductCommentUsefulness
     */
    public static function setCommentUsefulness(\$id_product_comment, \$usefulness, \$id_customer)
    {
        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_usefulness` (`id_product_comment`, `usefulness`, `id_customer`)
\t\t\tVALUES (' . (int) \$id_product_comment . ', ' . (int) \$usefulness . ', ' . (int) \$id_customer . ')');
    }

    /**
     * Usefulness already set
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/UpdateCommentUsefulness and src/Entity/ProductCommentUsefulness
     */
    public static function isAlreadyUsefulness(\$id_product_comment, \$id_customer)
    {
        return (bool) Db::getInstance()->getValue('
\t\t\tSELECT COUNT(*)
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_usefulness`
\t\t\tWHERE `id_customer` = ' . (int) \$id_customer . '
\t\t\tAND `id_product_comment` = ' . (int) \$id_product_comment);
    }

    /**
     * Get reported comments
     *
     * @return array Comments
     *
     * @deprecated 6.0.0
     */
    public static function getReportedComments()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\tSELECT DISTINCT(pc.`id_product_comment`), pc.`id_product`, IF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  c.`lastname`), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`, pc.`title`
\t\tFROM `' . _DB_PREFIX_ . 'product_comment_report` pcr
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tON pcr.id_product_comment = pc.id_product_comment
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (c.`id_customer` = pc.`id_customer`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . ' AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . Shop::addSqlRestrictionOnLang('pl') . ')
\t\tORDER BY pc.`date_add` DESC');
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/ProductComment.php";
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

class ProductComment extends ObjectModel
{
    /** @var int */
    public \$id;

    /** @var int */
    public \$id_product;

    /** @var int */
    public \$id_customer;

    /** @var int */
    public \$id_guest;

    /** @var int */
    public \$customer_name;

    /** @var string */
    public \$title;

    /** @var string */
    public \$content;

    /** @var int */
    public \$grade;

    /** @var bool */
    public \$validate = false;

    /** @var bool */
    public \$deleted = false;

    /** @var string Object creation date */
    public \$date_add;

    /**
     * @see ObjectModel::\$definition
     */
    public static \$definition = [
        'table' => 'product_comment',
        'primary' => 'id_product_comment',
        'fields' => [
            'id_product' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'id_customer' => ['type' => self::TYPE_INT, 'validate' => 'isUnsignedId', 'required' => true],
            'id_guest' => ['type' => self::TYPE_INT],
            'customer_name' => ['type' => self::TYPE_STRING],
            'title' => ['type' => self::TYPE_STRING],
            'content' => ['type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 65535, 'required' => true],
            'grade' => ['type' => self::TYPE_FLOAT, 'validate' => 'isFloat'],
            'validate' => ['type' => self::TYPE_BOOL, 'validate' => 'isBool'],
            'deleted' => ['type' => self::TYPE_BOOL],
            'date_add' => ['type' => self::TYPE_DATE],
        ],
    ];

    /**
     * Get comments by IdProduct
     *
     * @return array|bool
     */
    public static function getByProduct(\$id_product, \$p = 1, \$n = null, \$id_customer = null)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            return false;
        }
        \$validate = (bool) Configuration::get('PRODUCT_COMMENTS_MODERATE');
        \$p = (int) \$p;
        \$n = (int) \$n;
        \$id_customer = (int) \$id_customer;
        if (\$p <= 1) {
            \$p = 1;
        }
        if (\$n != null && \$n <= 0) {
            \$n = 5;
        }

        \$cache_id = 'ProductComment::getByProduct_' . \$id_product . '-' . \$p . '-' . \$n . '-' . \$id_customer . '-' . \$validate;
        if (!Cache::isStored(\$cache_id)) {
            \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\t\tSELECT pc.`id_product_comment`,
\t\t\t(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment` AND pcu.`usefulness` = 1) AS total_useful,
\t\t\t(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_usefulness` pcu WHERE pcu.`id_product_comment` = pc.`id_product_comment`) AS total_advice, ' .
            (\$id_customer ? '(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_usefulness` pcuc WHERE pcuc.`id_product_comment` = pc.`id_product_comment` AND pcuc.id_customer = ' . \$id_customer . ') AS customer_advice, ' : '') .
            (\$id_customer ? '(SELECT count(*) FROM `' . _DB_PREFIX_ . 'product_comment_report` pcrc WHERE pcrc.`id_product_comment` = pc.`id_product_comment` AND pcrc.id_customer = ' . \$id_customer . ') AS customer_report, ' : '') . '
\t\t\tIF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  LEFT(c.`lastname`, 1)), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pc.title
\t\t\t  FROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON c.`id_customer` = pc.`id_customer`
\t\t\tWHERE pc.`id_product` = ' . \$id_product . (\$validate ? ' AND pc.`validate` = 1' : '') . '
\t\t\tORDER BY pc.`date_add` DESC
\t\t\t' . (\$n ? 'LIMIT ' . ((\$p - 1) * \$n) . ', ' . \$n : ''));
            Cache::store(\$cache_id, \$result);
        }

        return Cache::retrieve(\$cache_id);
    }

    /**
     * Return customer's comment
     *
     * @return array Comments
     */
    public static function getByCustomer(\$id_product, \$id_customer, \$get_last = false, \$id_guest = false)
    {
        \$cache_id = 'ProductComment::getByCustomer_' . (int) \$id_product . '-' . (int) \$id_customer . '-' . (bool) \$get_last . '-' . (int) \$id_guest;
        if (!Cache::isStored(\$cache_id)) {
            \$results = Db::getInstance()->executeS('
\t\t\t\tSELECT *
\t\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\t\tWHERE pc.`id_product` = ' . (int) \$id_product . '
\t\t\t\tAND ' . (!\$id_guest ? 'pc.`id_customer` = ' . (int) \$id_customer : 'pc.`id_guest` = ' . (int) \$id_guest) . '
\t\t\t\tORDER BY pc.`date_add` DESC '
                . (\$get_last ? 'LIMIT 1' : '')
            );

            if (\$get_last && count(\$results)) {
                \$results = array_shift(\$results);
            }

            Cache::store(\$cache_id, \$results);
        }

        return Cache::retrieve(\$cache_id);
    }

    /**
     * Get Grade By product
     *
     * @return array|bool
     */
    public static function getGradeByProduct(\$id_product, \$id_lang)
    {
        if (!Validate::isUnsignedId(\$id_product) ||
            !Validate::isUnsignedId(\$id_lang)) {
            return false;
        }
        \$validate = (bool) Configuration::get('PRODUCT_COMMENTS_MODERATE');

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\tSELECT pc.`id_product_comment`, pcg.`grade`, pccl.`name`, pcc.`id_product_comment_criterion`
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_grade` pcg ON (pcg.`id_product_comment` = pc.`id_product_comment`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion` pcc ON (pcc.`id_product_comment_criterion` = pcg.`id_product_comment_criterion`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment_criterion_lang` pccl ON (pccl.`id_product_comment_criterion` = pcg.`id_product_comment_criterion`)
\t\tWHERE pc.`id_product` = ' . \$id_product . '
\t\tAND pccl.`id_lang` = ' . \$id_lang .
        (\$validate ? ' AND pc.`validate` = 1' : ''));
    }

    public static function getRatings(\$id_product)
    {
        \$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');

        \$sql = 'SELECT AVG(pc.`grade`) AS avg,
\t\t\t\tMIN(pc.`grade`) AS min,
\t\t\t\tMAX(pc.`grade`) AS max
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tWHERE pc.`id_product` = ' . (int) \$id_product . '
\t\t\tAND pc.`deleted` = 0' .
            (\$validate == '1' ? ' AND pc.`validate` = 1' : '');

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow(\$sql);
    }

    /**
     * @deprecated 4.0.0
     */
    public static function getAverageGrade(\$id_product)
    {
        \$validate = Configuration::get('PRODUCT_COMMENTS_MODERATE');

        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow('
\t\tSELECT AVG(pc.`grade`) AS grade
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tWHERE pc.`id_product` = ' . (int) \$id_product . '
\t\tAND pc.`deleted` = 0' .
        (\$validate == '1' ? ' AND pc.`validate` = 1' : ''));
    }

    public static function getAveragesByProduct(\$id_product, \$id_lang)
    {
        /* Get all grades */
        \$grades = ProductComment::getGradeByProduct((int) \$id_product, (int) \$id_lang);
        \$total = ProductComment::getGradedCommentNumber((int) \$id_product);
        if (!count(\$grades) || !\$total) {
            return [];
        }

        /* Addition grades for each criterion */
        \$criterionsGradeTotal = [];
        \$count_grades = count(\$grades);
        for (\$i = 0; \$i < \$count_grades; ++\$i) {
            if (array_key_exists(\$grades[\$i]['id_product_comment_criterion'], \$criterionsGradeTotal) === false) {
                \$criterionsGradeTotal[\$grades[\$i]['id_product_comment_criterion']] = (int) (\$grades[\$i]['grade']);
            } else {
                \$criterionsGradeTotal[\$grades[\$i]['id_product_comment_criterion']] += (int) (\$grades[\$i]['grade']);
            }
        }

        /* Finally compute the averages */
        \$averages = [];
        foreach (\$criterionsGradeTotal as \$key => \$criterionGradeTotal) {
            \$averages[(int) \$key] = \$criterionGradeTotal / \$total;
        }

        return \$averages;
    }

    /**
     * Return number of comments and average grade by products
     *
     * @return int|false
     *
     * @deprecated 4.0.0
     */
    public static function getCommentNumber(\$id_product)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            return false;
        }
        \$validate = (bool) Configuration::get('PRODUCT_COMMENTS_MODERATE');
        \$cache_id = 'ProductComment::getCommentNumber_' . \$id_product . '-' . \$validate;
        if (!Cache::isStored(\$cache_id)) {
            \$result = (int) Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getValue('
\t\t\tSELECT COUNT(`id_product_comment`) AS \"nbr\"
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tWHERE `id_product` = ' . \$id_product . (\$validate ? ' AND `validate` = 1' : ''));
            Cache::store(\$cache_id, (string) \$result);
        }

        return (int) Cache::retrieve(\$cache_id);
    }

    /**
     * Return number of comments and average grade by products
     *
     * @return int|bool
     */
    public static function getGradedCommentNumber(\$id_product)
    {
        if (!Validate::isUnsignedId(\$id_product)) {
            return false;
        }
        \$validate = (int) Configuration::get('PRODUCT_COMMENTS_MODERATE');

        \$result = Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->getRow('
\t\tSELECT COUNT(pc.`id_product`) AS nbr
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tWHERE `id_product` = ' . \$id_product . (\$validate == '1' ? ' AND `validate` = 1' : '') . '
\t\tAND `grade` > 0');

        return (int) (\$result['nbr']);
    }

    /**
     * Get comments by Validation
     *
     * @return array Comments
     *
     * @deprecated 6.0.0
     */
    public static function getByValidate(\$validate = '0', \$deleted = false, \$p = null, \$limit = null, \$skip_validate = false)
    {
        \$sql = '
\t\t\tSELECT pc.`id_product_comment`, pc.`id_product`, c.id_customer AS customer_id, IF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  c.`lastname`), pc.customer_name) customer_name, pc.`title`, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (c.`id_customer` = pc.`id_customer`)
            LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . Shop::addSqlRestrictionOnLang('pl') . ')';

        if (!\$skip_validate) {
            \$sql .= ' WHERE pc.`validate` = ' . (int) \$validate;
        }

        \$sql .= ' ORDER BY pc.`date_add` DESC';

        if (\$p && \$limit) {
            \$offset = (\$p - 1) * \$limit;
            \$sql .= ' LIMIT ' . (int) \$offset . ',' . (int) \$limit;
        }

        return Db::getInstance()->executeS(\$sql);
    }

    /**
     * Get numbers of comments by Validation
     *
     * @return int Count of comments
     *
     * @deprecated 6.0.0
     */
    public static function getCountByValidate(\$validate = '0', \$skip_validate = false)
    {
        \$sql = '
            SELECT COUNT(*)
            FROM `' . _DB_PREFIX_ . 'product_comment`';

        if (!\$skip_validate) {
            \$sql .= ' WHERE `validate` = ' . (int) \$validate;
        }

        return (int) Db::getInstance()->getValue(\$sql);
    }

    /**
     * Get all comments
     *
     * @return array Comments
     */
    public static function getAll()
    {
        return Db::getInstance()->executeS('
\t\tSELECT pc.`id_product_comment`, pc.`id_product`, IF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  c.`lastname`), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`
\t\tFROM `' . _DB_PREFIX_ . 'product_comment` pc
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (c.`id_customer` = pc.`id_customer`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . Shop::addSqlRestrictionOnLang('pl') . ')
\t\tORDER BY pc.`date_add` DESC');
    }

    /**
     * Validate a comment
     *
     * @return bool succeed
     */
    public function validate(\$validate = '1')
    {
        if (!Validate::isUnsignedId(\$this->id)) {
            return false;
        }

        \$success = (Db::getInstance()->execute('
\t\tUPDATE `' . _DB_PREFIX_ . 'product_comment` SET
\t\t`validate` = ' . (int) \$validate . '
\t\tWHERE `id_product_comment` = ' . \$this->id));

        Hook::exec('actionObjectProductCommentValidateAfter', ['object' => \$this]);

        return \$success;
    }

    /**
     * Delete a comment, grade and report data
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public function delete()
    {
        return parent::delete()
            && ProductComment::deleteGrades(\$this->id)
            && ProductComment::deleteReports(\$this->id)
            && ProductComment::deleteUsefulness(\$this->id);
    }

    /**
     * Delete Grades
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public static function deleteGrades(\$id_product_comment)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_grade`
\t\tWHERE `id_product_comment` = ' . \$id_product_comment);
    }

    /**
     * Delete Reports
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public static function deleteReports(\$id_product_comment)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_report`
\t\tWHERE `id_product_comment` = ' . \$id_product_comment);
    }

    /**
     * Delete usefulness
     *
     * @return bool succeed
     *
     * @deprecated 6.0.0
     */
    public static function deleteUsefulness(\$id_product_comment)
    {
        if (!Validate::isUnsignedId(\$id_product_comment)) {
            return false;
        }

        return Db::getInstance()->execute('
\t\tDELETE FROM `' . _DB_PREFIX_ . 'product_comment_usefulness`
\t\tWHERE `id_product_comment` = ' . \$id_product_comment);
    }

    /**
     * Report comment
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/ReportComment and src/Entity/ProductCommentReport
     */
    public static function reportComment(\$id_product_comment, \$id_customer)
    {
        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_report` (`id_product_comment`, `id_customer`)
\t\t\tVALUES (' . (int) \$id_product_comment . ', ' . (int) \$id_customer . ')');
    }

    /**
     * Comment already report
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/ReportComment and src/Entity/ProductCommentReport
     */
    public static function isAlreadyReport(\$id_product_comment, \$id_customer)
    {
        return (bool) Db::getInstance()->getValue('
\t\t\tSELECT COUNT(*)
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_report`
\t\t\tWHERE `id_customer` = ' . (int) \$id_customer . '
\t\t\tAND `id_product_comment` = ' . (int) \$id_product_comment);
    }

    /**
     * Set comment usefulness
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/UpdateCommentUsefulness and src/Entity/ProductCommentUsefulness
     */
    public static function setCommentUsefulness(\$id_product_comment, \$usefulness, \$id_customer)
    {
        return Db::getInstance()->execute('
\t\t\tINSERT INTO `' . _DB_PREFIX_ . 'product_comment_usefulness` (`id_product_comment`, `usefulness`, `id_customer`)
\t\t\tVALUES (' . (int) \$id_product_comment . ', ' . (int) \$usefulness . ', ' . (int) \$id_customer . ')');
    }

    /**
     * Usefulness already set
     *
     * @return bool
     *
     * @deprecated 4.0.0 - migrated to controllers/front/UpdateCommentUsefulness and src/Entity/ProductCommentUsefulness
     */
    public static function isAlreadyUsefulness(\$id_product_comment, \$id_customer)
    {
        return (bool) Db::getInstance()->getValue('
\t\t\tSELECT COUNT(*)
\t\t\tFROM `' . _DB_PREFIX_ . 'product_comment_usefulness`
\t\t\tWHERE `id_customer` = ' . (int) \$id_customer . '
\t\t\tAND `id_product_comment` = ' . (int) \$id_product_comment);
    }

    /**
     * Get reported comments
     *
     * @return array Comments
     *
     * @deprecated 6.0.0
     */
    public static function getReportedComments()
    {
        return Db::getInstance((bool) _PS_USE_SQL_SLAVE_)->executeS('
\t\tSELECT DISTINCT(pc.`id_product_comment`), pc.`id_product`, IF(c.id_customer, CONCAT(c.`firstname`, \\' \\',  c.`lastname`), pc.customer_name) customer_name, pc.`content`, pc.`grade`, pc.`date_add`, pl.`name`, pc.`title`
\t\tFROM `' . _DB_PREFIX_ . 'product_comment_report` pcr
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_comment` pc
\t\t\tON pcr.id_product_comment = pc.id_product_comment
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON (c.`id_customer` = pc.`id_customer`)
\t\tLEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (pl.`id_product` = pc.`id_product` AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . ' AND pl.`id_lang` = ' . (int) Context::getContext()->language->id . Shop::addSqlRestrictionOnLang('pl') . ')
\t\tORDER BY pc.`date_add` DESC');
    }
}
", "@Modules/productcomments/ProductComment.php", "/var/www/html/modules/productcomments/ProductComment.php");
    }
}
