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

/* @Modules/blockwishlist/src/Calculator/StatisticsCalculator.php */
class __TwigTemplate_ac027428f52d11786947e98fb8c75cc5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/src/Calculator/StatisticsCalculator.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/blockwishlist/src/Calculator/StatisticsCalculator.php"));

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

namespace PrestaShop\\Module\\BlockWishList\\Calculator;

use Customer;
use DateTime;
use Db;
use DbQuery;
use PrestaShop\\PrestaShop\\Adapter\\Image\\ImageRetriever;
use PrestaShop\\PrestaShop\\Adapter\\LegacyContext;
use PrestaShop\\PrestaShop\\Adapter\\Presenter\\Product\\ProductLazyArray;
use PrestaShop\\PrestaShop\\Adapter\\Presenter\\Product\\ProductPresenter;
use PrestaShop\\PrestaShop\\Adapter\\Product\\PriceFormatter;
use PrestaShop\\PrestaShop\\Adapter\\Product\\ProductColorsRetriever;
use PrestaShop\\PrestaShop\\Core\\Localization\\Locale;
use ProductAssembler;
use ProductPresenterFactory;

class StatisticsCalculator
{
    const ARRAY_KEYS_STATS = [
        'allTime',
        'currentYear',
        'currentMonth',
        'currentDay',
    ];

    private \$context;
    private \$productAssembler;

    /**
     * @var Locale
     */
    private \$locale;

    public function __construct(LegacyContext \$context, Locale \$locale)
    {
        \$this->context = \$context->getContext();
        \$this->context->customer = new Customer();
        \$this->productAssembler = new ProductAssembler(\$this->context);
        \$this->locale = \$locale;
    }

    /**
     * computeStatsFor
     *
     * @param string|null \$statsRange
     *
     * @return array
     */
    public function computeStatsFor(\$statsRange = null)
    {
        \$query = new DbQuery();
        \$query->select('id_product');
        \$query->select('id_product_attribute');
        \$query->select('date_add');
        \$query->select('id_statistics');
        \$query->from('blockwishlist_statistics');
        \$query->where('id_shop = \"' . (int) \$this->context->shop->id . '\"');

        switch (\$statsRange) {
            case 'currentYear':
                \$dateStart = (new DateTime('now'))->modify('-1 year')->format('Y-m-d H:i:s');
            break;
            case 'currentMonth':
                \$dateStart = (new DateTime('now'))->modify('-1 month')->format('Y-m-d H:i:s');
            break;
            case 'currentDay':
                \$dateStart = (new DateTime('now'))->modify('-1 day')->format('Y-m-d H:i:s');
            break;
            case 'allTime':
            default:
                \$dateStart = null;
            break;
        }

        if (null !== \$dateStart) {
            \$query->where('date_add >= \"' . \$dateStart . '\"');
        }

        \$results = Db::getInstance()->executeS(\$query);
        \$stats = [];

        foreach (\$results as \$result) {
            \$productAttributeKey = \$result['id_product'] . '.' . \$result['id_product_attribute'];

            if (isset(\$stats[\$productAttributeKey])) {
                \$stats[\$productAttributeKey] = \$stats[\$productAttributeKey] + 1;
            } else {
                \$stats[\$productAttributeKey] = 1;
            }
        }

        arsort(\$stats);
        \$stats = array_slice(\$stats, 0, 10);
        \$this->computeConversionRate(\$stats, \$dateStart);

        return \$stats;
    }

    /**
     * computeconversionRate
     *
     * @param array \$stats
     * @param string|null \$dateStart
     *
     * @return void
     */
    public function computeConversionRate(&\$stats, \$dateStart = null)
    {
        \$position = 0;

        foreach (\$stats as \$idProductAndAttribute => \$count) {
            // first ID is product, second one is product_attribute
            \$combination = '';
            \$ids = explode('.', \$idProductAndAttribute);
            \$id_product = \$ids[0];
            \$id_product_attribute = \$ids[1];
            \$productDetails = \$this->productAssembler->assembleProduct([
                'id_product' => \$id_product,
                'id_product_attribute' => \$id_product_attribute,
            ]);

            if (!empty(\$productDetails['attributes'])) {
                \$combinationArr = [];
                foreach (\$productDetails['attributes'] as \$attribute) {
                    \$combinationArr[] = \$attribute['group'] . ' : ' . \$attribute['name'];
                }
                \$combination = implode(',', \$combinationArr);
            }

            \$presentedProduct = \$this->getPresentedProduct(\$productDetails);
            \$imgDetails = \$this->getProductImage(\$presentedProduct);

            \$stats[\$idProductAndAttribute] = [
                'position' => \$position,
                'count' => \$count,
                'id_product' => \$id_product,
                'id_product_attribute' => \$id_product_attribute,
                'name' => \$productDetails['name'],
                'combination' => \$combination,
                'category_name' => \$presentedProduct['category_name'],
                'image_small_url' => \$imgDetails['small']['url'],
                'link' => \$presentedProduct['link'],
                'reference' => \$productDetails['reference'],
                'price' => \$this->locale->formatPrice(\$productDetails['price'], \$this->context->currency->iso_code),
                'quantity' => \$productDetails['quantity'],
                'conversionRate' => \$this->computeConversionByProduct(\$id_product, \$id_product_attribute, \$dateStart) . '%',
            ];

            ++\$position;
        }
    }

    private function getPresentedProduct(\$productDetails)
    {
        \$presenterFactory = new ProductPresenterFactory(\$this->context);
        \$presentationSettings = \$presenterFactory->getPresentationSettings();
        \$imageRetriever = new ImageRetriever(\$this->context->link);

        \$presenter = new ProductPresenter(
            \$imageRetriever,
            \$this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            \$this->context->getTranslator()
        );

        return \$presenter->present(
            \$presentationSettings,
            \$productDetails,
            \$this->context->language
        );
    }

    /**
     * getProductImage
     *
     * @param mixed|ProductLazyArray \$presentedProduct
     *
     * @return array
     */
    public function getProductImage(\$presentedProduct)
    {
        \$imgDetails = [];

        foreach (\$presentedProduct as \$key => \$value) {
            if (\$key == 'embedded_attributes') {
                \$imgDetails = \$value['cover'];
            }
        }
        if (!\$imgDetails) {
            \$imageRetriever = new ImageRetriever(\$this->context->link);
            \$imgDetails = \$imageRetriever->getNoPictureImage(\$this->context->language);
        }

        return \$imgDetails;
    }

    /**
     * computeConversionByProduct
     *
     * @param string \$id_product
     * @param string \$id_product_attribute
     * @param string \$dateStart (Y-m-d H:i:s)
     *
     * @return float
     */
    public function computeConversionByProduct(\$id_product, \$id_product_attribute, \$dateStart = null)
    {
        \$nbOrderPaidAndShipped = [];
        \$queryOrders = '
            SELECT count(distinct(o.id_order)) as nb
            FROM ' . _DB_PREFIX_ . 'orders o
            INNER JOIN ' . _DB_PREFIX_ . 'blockwishlist_statistics bws ON (o.id_cart = bws.id_cart )
            LEFT JOIN ' . _DB_PREFIX_ . 'order_history oh ON (o.`id_order` = oh.`id_order`)
            LEFT JOIN ' . _DB_PREFIX_ . 'order_state os ON (os.`id_order_state` = oh.`id_order_state` AND os.`paid` = 1 AND os.`shipped` = 1)
            LEFT JOIN ' . _DB_PREFIX_ . 'order_detail od ON (od.`id_order` = o.`id_order` AND od.`product_id` = bws.`id_product` AND od.`product_attribute_id` = bws.`id_product_attribute`)
            WHERE bws.`id_cart` <> 0 AND bws.`id_product` = ' . (int) \$id_product . ' AND bws.`id_product_attribute` = ' . (int) \$id_product_attribute . '
            AND bws.`id_shop` = ' . (int) \$this->context->shop->id . '
            ';

        if (null != \$dateStart) {
            \$queryOrders .= 'AND bws.date_add >= \"' . \$dateStart . '\"';
        }

        \$nbOrderPaidAndShipped = Db::getInstance()->getRow(\$queryOrders);

        if (empty(\$nbOrderPaidAndShipped['nb'])) {
            return 0;
        }

        \$queryCountAll = new DbQuery();
        \$queryCountAll->select('COUNT(id_statistics)');
        \$queryCountAll->from('blockwishlist_statistics');
        \$queryCountAll->where('id_product = ' . \$id_product);
        \$queryCountAll->where('id_product_attribute = ' . \$id_product_attribute);
        \$queryCountAll->where('id_shop = ' . (int) \$this->context->shop->id);

        if (null != \$dateStart) {
            \$queryCountAll->where('date_add >= \"' . \$dateStart . '\"');
        }

        \$countAddedToWishlist = Db::getInstance()->getValue(\$queryCountAll);

        if (0 != \$countAddedToWishlist) {
            return round((\$nbOrderPaidAndShipped['nb'] / \$countAddedToWishlist) * 100, 2);
        }

        return 0;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/blockwishlist/src/Calculator/StatisticsCalculator.php";
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

namespace PrestaShop\\Module\\BlockWishList\\Calculator;

use Customer;
use DateTime;
use Db;
use DbQuery;
use PrestaShop\\PrestaShop\\Adapter\\Image\\ImageRetriever;
use PrestaShop\\PrestaShop\\Adapter\\LegacyContext;
use PrestaShop\\PrestaShop\\Adapter\\Presenter\\Product\\ProductLazyArray;
use PrestaShop\\PrestaShop\\Adapter\\Presenter\\Product\\ProductPresenter;
use PrestaShop\\PrestaShop\\Adapter\\Product\\PriceFormatter;
use PrestaShop\\PrestaShop\\Adapter\\Product\\ProductColorsRetriever;
use PrestaShop\\PrestaShop\\Core\\Localization\\Locale;
use ProductAssembler;
use ProductPresenterFactory;

class StatisticsCalculator
{
    const ARRAY_KEYS_STATS = [
        'allTime',
        'currentYear',
        'currentMonth',
        'currentDay',
    ];

    private \$context;
    private \$productAssembler;

    /**
     * @var Locale
     */
    private \$locale;

    public function __construct(LegacyContext \$context, Locale \$locale)
    {
        \$this->context = \$context->getContext();
        \$this->context->customer = new Customer();
        \$this->productAssembler = new ProductAssembler(\$this->context);
        \$this->locale = \$locale;
    }

    /**
     * computeStatsFor
     *
     * @param string|null \$statsRange
     *
     * @return array
     */
    public function computeStatsFor(\$statsRange = null)
    {
        \$query = new DbQuery();
        \$query->select('id_product');
        \$query->select('id_product_attribute');
        \$query->select('date_add');
        \$query->select('id_statistics');
        \$query->from('blockwishlist_statistics');
        \$query->where('id_shop = \"' . (int) \$this->context->shop->id . '\"');

        switch (\$statsRange) {
            case 'currentYear':
                \$dateStart = (new DateTime('now'))->modify('-1 year')->format('Y-m-d H:i:s');
            break;
            case 'currentMonth':
                \$dateStart = (new DateTime('now'))->modify('-1 month')->format('Y-m-d H:i:s');
            break;
            case 'currentDay':
                \$dateStart = (new DateTime('now'))->modify('-1 day')->format('Y-m-d H:i:s');
            break;
            case 'allTime':
            default:
                \$dateStart = null;
            break;
        }

        if (null !== \$dateStart) {
            \$query->where('date_add >= \"' . \$dateStart . '\"');
        }

        \$results = Db::getInstance()->executeS(\$query);
        \$stats = [];

        foreach (\$results as \$result) {
            \$productAttributeKey = \$result['id_product'] . '.' . \$result['id_product_attribute'];

            if (isset(\$stats[\$productAttributeKey])) {
                \$stats[\$productAttributeKey] = \$stats[\$productAttributeKey] + 1;
            } else {
                \$stats[\$productAttributeKey] = 1;
            }
        }

        arsort(\$stats);
        \$stats = array_slice(\$stats, 0, 10);
        \$this->computeConversionRate(\$stats, \$dateStart);

        return \$stats;
    }

    /**
     * computeconversionRate
     *
     * @param array \$stats
     * @param string|null \$dateStart
     *
     * @return void
     */
    public function computeConversionRate(&\$stats, \$dateStart = null)
    {
        \$position = 0;

        foreach (\$stats as \$idProductAndAttribute => \$count) {
            // first ID is product, second one is product_attribute
            \$combination = '';
            \$ids = explode('.', \$idProductAndAttribute);
            \$id_product = \$ids[0];
            \$id_product_attribute = \$ids[1];
            \$productDetails = \$this->productAssembler->assembleProduct([
                'id_product' => \$id_product,
                'id_product_attribute' => \$id_product_attribute,
            ]);

            if (!empty(\$productDetails['attributes'])) {
                \$combinationArr = [];
                foreach (\$productDetails['attributes'] as \$attribute) {
                    \$combinationArr[] = \$attribute['group'] . ' : ' . \$attribute['name'];
                }
                \$combination = implode(',', \$combinationArr);
            }

            \$presentedProduct = \$this->getPresentedProduct(\$productDetails);
            \$imgDetails = \$this->getProductImage(\$presentedProduct);

            \$stats[\$idProductAndAttribute] = [
                'position' => \$position,
                'count' => \$count,
                'id_product' => \$id_product,
                'id_product_attribute' => \$id_product_attribute,
                'name' => \$productDetails['name'],
                'combination' => \$combination,
                'category_name' => \$presentedProduct['category_name'],
                'image_small_url' => \$imgDetails['small']['url'],
                'link' => \$presentedProduct['link'],
                'reference' => \$productDetails['reference'],
                'price' => \$this->locale->formatPrice(\$productDetails['price'], \$this->context->currency->iso_code),
                'quantity' => \$productDetails['quantity'],
                'conversionRate' => \$this->computeConversionByProduct(\$id_product, \$id_product_attribute, \$dateStart) . '%',
            ];

            ++\$position;
        }
    }

    private function getPresentedProduct(\$productDetails)
    {
        \$presenterFactory = new ProductPresenterFactory(\$this->context);
        \$presentationSettings = \$presenterFactory->getPresentationSettings();
        \$imageRetriever = new ImageRetriever(\$this->context->link);

        \$presenter = new ProductPresenter(
            \$imageRetriever,
            \$this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            \$this->context->getTranslator()
        );

        return \$presenter->present(
            \$presentationSettings,
            \$productDetails,
            \$this->context->language
        );
    }

    /**
     * getProductImage
     *
     * @param mixed|ProductLazyArray \$presentedProduct
     *
     * @return array
     */
    public function getProductImage(\$presentedProduct)
    {
        \$imgDetails = [];

        foreach (\$presentedProduct as \$key => \$value) {
            if (\$key == 'embedded_attributes') {
                \$imgDetails = \$value['cover'];
            }
        }
        if (!\$imgDetails) {
            \$imageRetriever = new ImageRetriever(\$this->context->link);
            \$imgDetails = \$imageRetriever->getNoPictureImage(\$this->context->language);
        }

        return \$imgDetails;
    }

    /**
     * computeConversionByProduct
     *
     * @param string \$id_product
     * @param string \$id_product_attribute
     * @param string \$dateStart (Y-m-d H:i:s)
     *
     * @return float
     */
    public function computeConversionByProduct(\$id_product, \$id_product_attribute, \$dateStart = null)
    {
        \$nbOrderPaidAndShipped = [];
        \$queryOrders = '
            SELECT count(distinct(o.id_order)) as nb
            FROM ' . _DB_PREFIX_ . 'orders o
            INNER JOIN ' . _DB_PREFIX_ . 'blockwishlist_statistics bws ON (o.id_cart = bws.id_cart )
            LEFT JOIN ' . _DB_PREFIX_ . 'order_history oh ON (o.`id_order` = oh.`id_order`)
            LEFT JOIN ' . _DB_PREFIX_ . 'order_state os ON (os.`id_order_state` = oh.`id_order_state` AND os.`paid` = 1 AND os.`shipped` = 1)
            LEFT JOIN ' . _DB_PREFIX_ . 'order_detail od ON (od.`id_order` = o.`id_order` AND od.`product_id` = bws.`id_product` AND od.`product_attribute_id` = bws.`id_product_attribute`)
            WHERE bws.`id_cart` <> 0 AND bws.`id_product` = ' . (int) \$id_product . ' AND bws.`id_product_attribute` = ' . (int) \$id_product_attribute . '
            AND bws.`id_shop` = ' . (int) \$this->context->shop->id . '
            ';

        if (null != \$dateStart) {
            \$queryOrders .= 'AND bws.date_add >= \"' . \$dateStart . '\"';
        }

        \$nbOrderPaidAndShipped = Db::getInstance()->getRow(\$queryOrders);

        if (empty(\$nbOrderPaidAndShipped['nb'])) {
            return 0;
        }

        \$queryCountAll = new DbQuery();
        \$queryCountAll->select('COUNT(id_statistics)');
        \$queryCountAll->from('blockwishlist_statistics');
        \$queryCountAll->where('id_product = ' . \$id_product);
        \$queryCountAll->where('id_product_attribute = ' . \$id_product_attribute);
        \$queryCountAll->where('id_shop = ' . (int) \$this->context->shop->id);

        if (null != \$dateStart) {
            \$queryCountAll->where('date_add >= \"' . \$dateStart . '\"');
        }

        \$countAddedToWishlist = Db::getInstance()->getValue(\$queryCountAll);

        if (0 != \$countAddedToWishlist) {
            return round((\$nbOrderPaidAndShipped['nb'] / \$countAddedToWishlist) * 100, 2);
        }

        return 0;
    }
}
", "@Modules/blockwishlist/src/Calculator/StatisticsCalculator.php", "/var/www/html/modules/blockwishlist/src/Calculator/StatisticsCalculator.php");
    }
}
