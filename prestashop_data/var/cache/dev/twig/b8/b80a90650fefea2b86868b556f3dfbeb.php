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

/* @Modules/productcomments/src/Form/ProductCommentCriterionFormDataHandler.php */
class __TwigTemplate_5465571fa23b25e04cb614449e731fb3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataHandler.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataHandler.php"));

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

use Doctrine\\ORM\\EntityManagerInterface;
use PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterion;
use PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang;
use PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentCriterionRepository;
use PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataHandler\\FormDataHandlerInterface;
use PrestaShopBundle\\Entity\\Repository\\LangRepository;

class ProductCommentCriterionFormDataHandler implements FormDataHandlerInterface
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
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @param ProductCommentCriterionRepository \$pccriterionRepository
     * @param LangRepository \$langRepository
     * @param EntityManagerInterface \$entityManager
     */
    public function __construct(
        ProductCommentCriterionRepository \$pccriterionRepository,
        LangRepository \$langRepository,
        EntityManagerInterface \$entityManager
    ) {
        \$this->pccriterionRepository = \$pccriterionRepository;
        \$this->langRepository = \$langRepository;
        \$this->entityManager = \$entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function create(array \$data)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function update(\$id, array \$data)
    {
    }

    /**
     * @param ProductCommentCriterion \$pccriterion
     * @param array \$pcc_languages
     *
     * @todo migrate this temporary function to above standard function create
     */
    public function createLangs(\$pccriterion, \$pcc_languages): void
    {
        foreach (\$pcc_languages as \$langId => \$langContent) {
            \$lang = \$this->langRepository->find(\$langId);
            \$pccriterionLang = new ProductCommentCriterionLang();
            \$pccriterionLang
                ->setLang(\$lang)
                ->setName(\$langContent)
            ;
            \$pccriterion->addCriterionLang(\$pccriterionLang);
        }

        \$this->entityManager->persist(\$pccriterion);
        \$this->entityManager->flush();
    }

    /**
     * @param ProductCommentCriterion \$pccriterion
     * @param array \$pcc_languages
     *
     * @todo migrate this temporary function to above standard function update
     */
    public function updateLangs(\$pccriterion, \$pcc_languages): void
    {
        foreach (\$pcc_languages as \$langId => \$langContent) {
            \$lang = \$this->langRepository->find(\$langId);
            \$pccriterionLang = \$pccriterion->getCriterionLangByLangId(\$langId);
            if (null === \$pccriterionLang) {
                continue;
            }
            \$pccriterionLang
                ->setName(\$langContent)
            ;
        }

        \$this->entityManager->persist(\$pccriterion);
        \$this->entityManager->flush();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataHandler.php";
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

use Doctrine\\ORM\\EntityManagerInterface;
use PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterion;
use PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterionLang;
use PrestaShop\\Module\\ProductComment\\Repository\\ProductCommentCriterionRepository;
use PrestaShop\\PrestaShop\\Core\\Form\\IdentifiableObject\\DataHandler\\FormDataHandlerInterface;
use PrestaShopBundle\\Entity\\Repository\\LangRepository;

class ProductCommentCriterionFormDataHandler implements FormDataHandlerInterface
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
     * @var EntityManagerInterface
     */
    private \$entityManager;

    /**
     * @param ProductCommentCriterionRepository \$pccriterionRepository
     * @param LangRepository \$langRepository
     * @param EntityManagerInterface \$entityManager
     */
    public function __construct(
        ProductCommentCriterionRepository \$pccriterionRepository,
        LangRepository \$langRepository,
        EntityManagerInterface \$entityManager
    ) {
        \$this->pccriterionRepository = \$pccriterionRepository;
        \$this->langRepository = \$langRepository;
        \$this->entityManager = \$entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function create(array \$data)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function update(\$id, array \$data)
    {
    }

    /**
     * @param ProductCommentCriterion \$pccriterion
     * @param array \$pcc_languages
     *
     * @todo migrate this temporary function to above standard function create
     */
    public function createLangs(\$pccriterion, \$pcc_languages): void
    {
        foreach (\$pcc_languages as \$langId => \$langContent) {
            \$lang = \$this->langRepository->find(\$langId);
            \$pccriterionLang = new ProductCommentCriterionLang();
            \$pccriterionLang
                ->setLang(\$lang)
                ->setName(\$langContent)
            ;
            \$pccriterion->addCriterionLang(\$pccriterionLang);
        }

        \$this->entityManager->persist(\$pccriterion);
        \$this->entityManager->flush();
    }

    /**
     * @param ProductCommentCriterion \$pccriterion
     * @param array \$pcc_languages
     *
     * @todo migrate this temporary function to above standard function update
     */
    public function updateLangs(\$pccriterion, \$pcc_languages): void
    {
        foreach (\$pcc_languages as \$langId => \$langContent) {
            \$lang = \$this->langRepository->find(\$langId);
            \$pccriterionLang = \$pccriterion->getCriterionLangByLangId(\$langId);
            if (null === \$pccriterionLang) {
                continue;
            }
            \$pccriterionLang
                ->setName(\$langContent)
            ;
        }

        \$this->entityManager->persist(\$pccriterion);
        \$this->entityManager->flush();
    }
}
", "@Modules/productcomments/src/Form/ProductCommentCriterionFormDataHandler.php", "/var/www/html/modules/productcomments/src/Form/ProductCommentCriterionFormDataHandler.php");
    }
}
