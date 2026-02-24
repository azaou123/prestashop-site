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

/* @Modules/productcomments/src/Form/ProductCommentCriterionFormDataProvider.php */
class __TwigTemplate_034d20ed2ebf8781c27533e2746146d3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataProvider.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataProvider.php"));

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
declare(strict_types=1);

namespace PrestaShop\\Module\\ProductComment\\Form;

use PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentCriterionRepository;
use PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataProvider\\FormDataProviderInterface;
use PrestaShopBundle\\Entity\\Repository\\LangRepository;

class ProductCommentCriterionFormDataProvider implements FormDataProviderInterface
{
    /**
     * @var ProductCommentCriterionRepository
     */
    private \$pccriterionRepository;

    /**
     * @var LangRepository
     */
    private \$langRepository;

    /**
     * @param ProductCommentCriterionRepository \$pccriterionRepository
     * @param LangRepository \$langRepository
     */
    public function __construct(
        ProductCommentCriterionRepository \$pccriterionRepository,
        LangRepository \$langRepository
    ) {
        \$this->pccriterionRepository = \$pccriterionRepository;
        \$this->langRepository = \$langRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getData(\$criterionId)
    {
        \$criterion = \$this->pccriterionRepository->find(\$criterionId);

        \$criterionData = [
            'type' => \$criterion->getType(),
            'active' => \$criterion->isActive(),
        ];
        foreach (\$criterion->getCriterionLangs() as \$criterionLang) {
            \$criterionData['name'][\$criterionLang->getLang()->getId()] = \$criterionLang->getName();
        }

        return \$criterionData;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
        \$default_name = [];

        \$langEntities = \$this->langRepository->findBy(['active' => 1]);
        foreach (\$langEntities as \$langEntity) {
            \$default_name[\$langEntity->getId()] = \$langEntity->getIsoCode();
        }

        return [
            'type' => '',
            'active' => false,
            'name' => \$default_name,
        ];
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataProvider.php";
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
declare(strict_types=1);

namespace PrestaShop\\Module\\ProductComment\\Form;

use PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentCriterionRepository;
use PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataProvider\\FormDataProviderInterface;
use PrestaShopBundle\\Entity\\Repository\\LangRepository;

class ProductCommentCriterionFormDataProvider implements FormDataProviderInterface
{
    /**
     * @var ProductCommentCriterionRepository
     */
    private \$pccriterionRepository;

    /**
     * @var LangRepository
     */
    private \$langRepository;

    /**
     * @param ProductCommentCriterionRepository \$pccriterionRepository
     * @param LangRepository \$langRepository
     */
    public function __construct(
        ProductCommentCriterionRepository \$pccriterionRepository,
        LangRepository \$langRepository
    ) {
        \$this->pccriterionRepository = \$pccriterionRepository;
        \$this->langRepository = \$langRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getData(\$criterionId)
    {
        \$criterion = \$this->pccriterionRepository->find(\$criterionId);

        \$criterionData = [
            'type' => \$criterion->getType(),
            'active' => \$criterion->isActive(),
        ];
        foreach (\$criterion->getCriterionLangs() as \$criterionLang) {
            \$criterionData['name'][\$criterionLang->getLang()->getId()] = \$criterionLang->getName();
        }

        return \$criterionData;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
        \$default_name = [];

        \$langEntities = \$this->langRepository->findBy(['active' => 1]);
        foreach (\$langEntities as \$langEntity) {
            \$default_name[\$langEntity->getId()] = \$langEntity->getIsoCode();
        }

        return [
            'type' => '',
            'active' => false,
            'name' => \$default_name,
        ];
    }
}
", "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataProvider.php", "/var/www/html/modules/productcomments/src/Form/ProductCommentCriterionFormDataProvider.php");
    }
}
