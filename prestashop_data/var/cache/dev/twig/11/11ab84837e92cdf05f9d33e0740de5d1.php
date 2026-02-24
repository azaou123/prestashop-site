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

/* @Modules/ps_linklist/src/Form/ChoiceProvider/AbstractDatabaseChoiceProvider.php */
class __TwigTemplate_b9aa7d0a4d71c884afa6564eb1f06c11 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Form/ChoiceProvider/AbstractDatabaseChoiceProvider.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Form/ChoiceProvider/AbstractDatabaseChoiceProvider.php"));

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

namespace PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider;

use Doctrine\\DBAL\\Connection;
use PrestaShop\\PrestaShop\\Core\\Form\\FormChoiceProviderInterface;

/**
 * Class AbstractDatabaseChoiceProvider.
 */
abstract class AbstractDatabaseChoiceProvider implements FormChoiceProviderInterface
{
    /**
     * @var Connection
     */
    protected \$connection;

    /**
     * @var string
     */
    protected \$dbPrefix;

    /**
     * @var int
     */
    protected \$idLang;

    /**
     * @var array
     */
    protected \$shopIds;

    /**
     * AbstractDatabaseChoiceProvider constructor.
     *
     * @param Connection \$connection
     * @param string \$dbPrefix
     * @param int|null \$idLang
     * @param array|null \$shopIds
     */
    public function __construct(Connection \$connection, \$dbPrefix, \$idLang = null, array \$shopIds = null)
    {
        \$this->connection = \$connection;
        \$this->dbPrefix = \$dbPrefix;
        \$this->idLang = \$idLang;
        \$this->shopIds = \$shopIds;
    }

    /**
     * {@inheritdoc}
     */
    abstract public function getChoices();
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Form/ChoiceProvider/AbstractDatabaseChoiceProvider.php";
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

namespace PrestaShop\\Module\\LinkList\\Form\\ChoiceProvider;

use Doctrine\\DBAL\\Connection;
use PrestaShop\\PrestaShop\\Core\\Form\\FormChoiceProviderInterface;

/**
 * Class AbstractDatabaseChoiceProvider.
 */
abstract class AbstractDatabaseChoiceProvider implements FormChoiceProviderInterface
{
    /**
     * @var Connection
     */
    protected \$connection;

    /**
     * @var string
     */
    protected \$dbPrefix;

    /**
     * @var int
     */
    protected \$idLang;

    /**
     * @var array
     */
    protected \$shopIds;

    /**
     * AbstractDatabaseChoiceProvider constructor.
     *
     * @param Connection \$connection
     * @param string \$dbPrefix
     * @param int|null \$idLang
     * @param array|null \$shopIds
     */
    public function __construct(Connection \$connection, \$dbPrefix, \$idLang = null, array \$shopIds = null)
    {
        \$this->connection = \$connection;
        \$this->dbPrefix = \$dbPrefix;
        \$this->idLang = \$idLang;
        \$this->shopIds = \$shopIds;
    }

    /**
     * {@inheritdoc}
     */
    abstract public function getChoices();
}
", "@Modules/ps_linklist/src/Form/ChoiceProvider/AbstractDatabaseChoiceProvider.php", "/var/www/html/modules/ps_linklist/src/Form/ChoiceProvider/AbstractDatabaseChoiceProvider.php");
    }
}
