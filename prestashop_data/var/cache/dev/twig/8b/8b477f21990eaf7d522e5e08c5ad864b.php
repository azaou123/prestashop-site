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

/* @Modules/ps_googleanalytics/classes/Handler/GanalyticsDataHandler.php */
class __TwigTemplate_e995f23ed636c9a80e875d977d26bf4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Handler/GanalyticsDataHandler.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_googleanalytics/classes/Handler/GanalyticsDataHandler.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
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
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Handler;

use PrestaShop\\Module\\Ps_Googleanalytics\\Repository\\GanalyticsDataRepository;

class GanalyticsDataHandler
{
    private \$ganalyticsDataRepository;
    private \$cartId;
    private \$shopId;

    /**
     * __construct
     *
     * @param int \$cartId
     * @param int \$shopId
     */
    public function __construct(\$cartId, \$shopId)
    {
        \$this->ganalyticsDataRepository = new GanalyticsDataRepository();
        \$this->cartId = (int) \$cartId;
        \$this->shopId = (int) \$shopId;
    }

    /**
     * readData
     *
     * @return array
     */
    public function readData()
    {
        \$dataReturned = \$this->ganalyticsDataRepository->findDataByCartIdAndShopId(
            \$this->cartId,
            \$this->shopId
        );

        if (false === \$dataReturned) {
            return [];
        }

        return \$this->jsonDecodeValidJson(\$dataReturned);
    }

    /**
     * Deletes all persisted data, probably because it was flushed.
     *
     * @return bool
     */
    public function deleteData()
    {
        return \$this->ganalyticsDataRepository->deleteRow(
            \$this->cartId,
            \$this->shopId
        );
    }

    /**
     * Stores event into data repository so we can output it
     * on first available chance.
     *
     * @param string \$dataToPersist
     *
     * @return bool
     */
    public function persistData(\$dataToPersist)
    {
        // Try to get current data
        \$currentData = \$this->readData();

        // If no data has been persisted yet, we create a new array, otherwise
        // we add it to the previous events stored.
        if (!empty(\$currentData)) {
            \$newData = \$currentData;
            \$newData[] = \$dataToPersist;
        } else {
            \$newData = [\$dataToPersist];
        }

        return \$this->ganalyticsDataRepository->addNewRow(
            (int) \$this->cartId,
            (int) \$this->shopId,
            json_encode(\$newData)
        );
    }

    /**
     * Check if the json is valid and returns an empty array if not
     *
     * @param string \$json
     *
     * @return array
     */
    protected function jsonDecodeValidJson(\$json)
    {
        \$array = json_decode(\$json, true);

        if (JSON_ERROR_NONE === json_last_error()) {
            return \$array;
        }

        return [];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_googleanalytics/classes/Handler/GanalyticsDataHandler.php";
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
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\\Module\\Ps_Googleanalytics\\Handler;

use PrestaShop\\Module\\Ps_Googleanalytics\\Repository\\GanalyticsDataRepository;

class GanalyticsDataHandler
{
    private \$ganalyticsDataRepository;
    private \$cartId;
    private \$shopId;

    /**
     * __construct
     *
     * @param int \$cartId
     * @param int \$shopId
     */
    public function __construct(\$cartId, \$shopId)
    {
        \$this->ganalyticsDataRepository = new GanalyticsDataRepository();
        \$this->cartId = (int) \$cartId;
        \$this->shopId = (int) \$shopId;
    }

    /**
     * readData
     *
     * @return array
     */
    public function readData()
    {
        \$dataReturned = \$this->ganalyticsDataRepository->findDataByCartIdAndShopId(
            \$this->cartId,
            \$this->shopId
        );

        if (false === \$dataReturned) {
            return [];
        }

        return \$this->jsonDecodeValidJson(\$dataReturned);
    }

    /**
     * Deletes all persisted data, probably because it was flushed.
     *
     * @return bool
     */
    public function deleteData()
    {
        return \$this->ganalyticsDataRepository->deleteRow(
            \$this->cartId,
            \$this->shopId
        );
    }

    /**
     * Stores event into data repository so we can output it
     * on first available chance.
     *
     * @param string \$dataToPersist
     *
     * @return bool
     */
    public function persistData(\$dataToPersist)
    {
        // Try to get current data
        \$currentData = \$this->readData();

        // If no data has been persisted yet, we create a new array, otherwise
        // we add it to the previous events stored.
        if (!empty(\$currentData)) {
            \$newData = \$currentData;
            \$newData[] = \$dataToPersist;
        } else {
            \$newData = [\$dataToPersist];
        }

        return \$this->ganalyticsDataRepository->addNewRow(
            (int) \$this->cartId,
            (int) \$this->shopId,
            json_encode(\$newData)
        );
    }

    /**
     * Check if the json is valid and returns an empty array if not
     *
     * @param string \$json
     *
     * @return array
     */
    protected function jsonDecodeValidJson(\$json)
    {
        \$array = json_decode(\$json, true);

        if (JSON_ERROR_NONE === json_last_error()) {
            return \$array;
        }

        return [];
    }
}
", "@Modules/ps_googleanalytics/classes/Handler/GanalyticsDataHandler.php", "/var/www/html/modules/ps_googleanalytics/classes/Handler/GanalyticsDataHandler.php");
    }
}
