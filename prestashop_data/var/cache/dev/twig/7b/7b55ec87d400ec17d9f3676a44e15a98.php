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

/* @Modules/productcomments/src/Entity/ProductCommentCriterionLang.php */
class __TwigTemplate_463f86fa7d1a293582dbe0e8ebd233d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/src/Entity/ProductCommentCriterionLang.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/src/Entity/ProductCommentCriterionLang.php"));

        // line 1
        echo "<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0).
 * It is also available through the world-wide-web at this URL: https://opensource.org/licenses/AFL-3.0
 */
declare(strict_types=1);

namespace PrestaShop\\Module\\ProductComment\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use PrestaShopBundle\\Entity\\Lang;

/**
 * @ORM\\Table()
 *
 * @ORM\\Entity()
 */
class ProductCommentCriterionLang
{
    /**
     * @var ProductCommentCriterion
     *
     * @ORM\\Id
     *
     * @ORM\\ManyToOne(targetEntity=\"PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterion\", inversedBy=\"criterionLangs\")
     *
     * @ORM\\JoinColumn(name=\"id_product_comment_criterion\", referencedColumnName=\"id_product_comment_criterion\", nullable=false)
     */
    private \$productcommentcriterion;

    /**
     * @var Lang
     *
     * @ORM\\Id
     *
     * @ORM\\ManyToOne(targetEntity=\"PrestaShopBundle\\Entity\\Lang\")
     *
     * @ORM\\JoinColumn(name=\"id_lang\", referencedColumnName=\"id_lang\", nullable=false, onDelete=\"CASCADE\")
     */
    private \$lang;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", nullable=false)
     */
    private \$name;

    /**
     * @return ProductCommentCriterion
     */
    public function getProductCommentCriterion()
    {
        return \$this->productcommentcriterion;
    }

    public function setProductCommentCriterion(ProductCommentCriterion \$productcommentcriterion): self
    {
        \$this->productcommentcriterion = \$productcommentcriterion;

        return \$this;
    }

    /**
     * @return Lang
     */
    public function getLang()
    {
        return \$this->lang;
    }

    /**
     * @param Lang \$lang
     */
    public function setLang(Lang \$lang): self
    {
        \$this->lang = \$lang;

        return \$this;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function setName(string \$name): self
    {
        \$this->name = \$name;

        return \$this;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/src/Entity/ProductCommentCriterionLang.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * 2007-2020 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0).
 * It is also available through the world-wide-web at this URL: https://opensource.org/licenses/AFL-3.0
 */
declare(strict_types=1);

namespace PrestaShop\\Module\\ProductComment\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use PrestaShopBundle\\Entity\\Lang;

/**
 * @ORM\\Table()
 *
 * @ORM\\Entity()
 */
class ProductCommentCriterionLang
{
    /**
     * @var ProductCommentCriterion
     *
     * @ORM\\Id
     *
     * @ORM\\ManyToOne(targetEntity=\"PrestaShop\\Module\\ProductComment\\Entity\\ProductCommentCriterion\", inversedBy=\"criterionLangs\")
     *
     * @ORM\\JoinColumn(name=\"id_product_comment_criterion\", referencedColumnName=\"id_product_comment_criterion\", nullable=false)
     */
    private \$productcommentcriterion;

    /**
     * @var Lang
     *
     * @ORM\\Id
     *
     * @ORM\\ManyToOne(targetEntity=\"PrestaShopBundle\\Entity\\Lang\")
     *
     * @ORM\\JoinColumn(name=\"id_lang\", referencedColumnName=\"id_lang\", nullable=false, onDelete=\"CASCADE\")
     */
    private \$lang;

    /**
     * @var string
     *
     * @ORM\\Column(name=\"name\", type=\"string\", nullable=false)
     */
    private \$name;

    /**
     * @return ProductCommentCriterion
     */
    public function getProductCommentCriterion()
    {
        return \$this->productcommentcriterion;
    }

    public function setProductCommentCriterion(ProductCommentCriterion \$productcommentcriterion): self
    {
        \$this->productcommentcriterion = \$productcommentcriterion;

        return \$this;
    }

    /**
     * @return Lang
     */
    public function getLang()
    {
        return \$this->lang;
    }

    /**
     * @param Lang \$lang
     */
    public function setLang(Lang \$lang): self
    {
        \$this->lang = \$lang;

        return \$this;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function setName(string \$name): self
    {
        \$this->name = \$name;

        return \$this;
    }
}
", "@Modules/productcomments/src/Entity/ProductCommentCriterionLang.php", "/var/www/html/modules/productcomments/src/Entity/ProductCommentCriterionLang.php");
    }
}
