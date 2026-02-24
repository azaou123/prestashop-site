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

/* @Modules/ps_linklist/src/Form/Type/LinkBlockType.php */
class __TwigTemplate_0073183acc9b9a19215c2afad156385d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Form/Type/LinkBlockType.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Form/Type/LinkBlockType.php"));

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

namespace PrestaShop\\Module\\LinkList\\Form\\Type;

use PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\Constraints\\DefaultLanguage;
use PrestaShopBundle\\Form\\Admin\\Type\\ShopChoiceTreeType;
use PrestaShopBundle\\Form\\Admin\\Type\\TranslatableType;
use PrestaShopBundle\\Form\\Admin\\Type\\TranslatorAwareType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LinkBlockType extends TranslatorAwareType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var array
     */
    private \$hookChoices;

    /**
     * @var array
     */
    private \$cmsPageChoices;

    /**
     * @var array
     */
    private \$productPageChoices;

    /**
     * @var array
     */
    private \$staticPageChoices;

    /**
     * @var array
     */
    private \$categoryChoices;

    /**
     * @var bool
     */
    private \$isMultiStoreUsed;

    /**
     * LinkBlockType constructor.
     *
     * @param TranslatorInterface \$translator
     * @param array \$locales
     * @param array \$hookChoices
     * @param array \$cmsPageChoices
     * @param array \$productPageChoices
     * @param array \$staticPageChoices
     * @param array \$categoryChoices
     */
    public function __construct(
        TranslatorInterface \$translator,
        array \$locales,
        array \$hookChoices,
        array \$cmsPageChoices,
        array \$productPageChoices,
        array \$staticPageChoices,
        array \$categoryChoices,
        bool \$isMultiStoreUsed
    ) {
        parent::__construct(\$translator, \$locales);
        \$this->hookChoices = \$hookChoices;
        \$this->cmsPageChoices = \$cmsPageChoices;
        \$this->productPageChoices = \$productPageChoices;
        \$this->staticPageChoices = \$staticPageChoices;
        \$this->categoryChoices = \$categoryChoices;
        \$this->translator = \$translator;
        \$this->isMultiStoreUsed = \$isMultiStoreUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('id_link_block', HiddenType::class)
            ->add('block_name', TranslatableType::class, [
                'locales' => \$this->locales,
                'required' => true,
                'label' => \$this->trans('Name of the block', 'Modules.Linklist.Admin'),
                'constraints' => [
                    new DefaultLanguage(),
                ],
                'options' => [
                    'constraints' => [
                        new Length([
                            'max' => 40,
                            'maxMessage' => \$this->translator->trans(
                                'Name of the block cannot be longer than %limit% characters',
                                [
                                    '%limit%' => 40,
                                ],
                                'Modules.Linklist.Admin'
                            ),
                        ]),
                    ],
                ],
            ])
            ->add('id_hook', ChoiceType::class, [
                'choices' => \$this->hookChoices,
                'attr' => [
                    'data-toggle' => 'select2',
                    'data-minimumResultsForSearch' => '7',
                ],
                'label' => \$this->trans('Hook', 'Admin.Global'),
            ])
            ->add('cms', ChoiceType::class, [
                'choices' => \$this->cmsPageChoices,
                'label' => \$this->trans('Content pages', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('product', ChoiceType::class, [
                'choices' => \$this->productPageChoices,
                'label' => \$this->trans('Product pages', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('category', ChoiceType::class, [
                'choices' => \$this->categoryChoices,
                'label' => \$this->trans('Categories', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('static', ChoiceType::class, [
                'choices' => \$this->staticPageChoices,
                'label' => \$this->trans('Static content', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('custom', CollectionType::class, [
                'entry_type' => TranslateCustomUrlType::class,
                'entry_options' => [
                    'locales' => \$this->locales,
                    'label' => false,
                ],
                'attr' => [
                    'class' => 'custom_collection',
                    'data-delete-button-label' => \$this->trans('Delete', 'Admin.Global'),
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'label' => \$this->trans('Custom content', 'Modules.Linklist.Admin'),
            ])
        ;

        if (\$this->isMultiStoreUsed) {
            \$builder->add('shop_association', ShopChoiceTreeType::class, [
                'label' => \$this->trans('Shop association', 'Admin.Global'),
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => \$this->trans(
                            'You have to select at least one shop to associate this item with',
                            'Admin.Notifications.Error'
                        ),
                    ]),
                ],
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'label' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'module_link_block';
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Form/Type/LinkBlockType.php";
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

namespace PrestaShop\\Module\\LinkList\\Form\\Type;

use PrestaShop\\PrestaShop\\Core\\ConstraintValidator\\Constraints\\DefaultLanguage;
use PrestaShopBundle\\Form\\Admin\\Type\\ShopChoiceTreeType;
use PrestaShopBundle\\Form\\Admin\\Type\\TranslatableType;
use PrestaShopBundle\\Form\\Admin\\Type\\TranslatorAwareType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class LinkBlockType extends TranslatorAwareType
{
    /**
     * @var TranslatorInterface
     */
    private \$translator;

    /**
     * @var array
     */
    private \$hookChoices;

    /**
     * @var array
     */
    private \$cmsPageChoices;

    /**
     * @var array
     */
    private \$productPageChoices;

    /**
     * @var array
     */
    private \$staticPageChoices;

    /**
     * @var array
     */
    private \$categoryChoices;

    /**
     * @var bool
     */
    private \$isMultiStoreUsed;

    /**
     * LinkBlockType constructor.
     *
     * @param TranslatorInterface \$translator
     * @param array \$locales
     * @param array \$hookChoices
     * @param array \$cmsPageChoices
     * @param array \$productPageChoices
     * @param array \$staticPageChoices
     * @param array \$categoryChoices
     */
    public function __construct(
        TranslatorInterface \$translator,
        array \$locales,
        array \$hookChoices,
        array \$cmsPageChoices,
        array \$productPageChoices,
        array \$staticPageChoices,
        array \$categoryChoices,
        bool \$isMultiStoreUsed
    ) {
        parent::__construct(\$translator, \$locales);
        \$this->hookChoices = \$hookChoices;
        \$this->cmsPageChoices = \$cmsPageChoices;
        \$this->productPageChoices = \$productPageChoices;
        \$this->staticPageChoices = \$staticPageChoices;
        \$this->categoryChoices = \$categoryChoices;
        \$this->translator = \$translator;
        \$this->isMultiStoreUsed = \$isMultiStoreUsed;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('id_link_block', HiddenType::class)
            ->add('block_name', TranslatableType::class, [
                'locales' => \$this->locales,
                'required' => true,
                'label' => \$this->trans('Name of the block', 'Modules.Linklist.Admin'),
                'constraints' => [
                    new DefaultLanguage(),
                ],
                'options' => [
                    'constraints' => [
                        new Length([
                            'max' => 40,
                            'maxMessage' => \$this->translator->trans(
                                'Name of the block cannot be longer than %limit% characters',
                                [
                                    '%limit%' => 40,
                                ],
                                'Modules.Linklist.Admin'
                            ),
                        ]),
                    ],
                ],
            ])
            ->add('id_hook', ChoiceType::class, [
                'choices' => \$this->hookChoices,
                'attr' => [
                    'data-toggle' => 'select2',
                    'data-minimumResultsForSearch' => '7',
                ],
                'label' => \$this->trans('Hook', 'Admin.Global'),
            ])
            ->add('cms', ChoiceType::class, [
                'choices' => \$this->cmsPageChoices,
                'label' => \$this->trans('Content pages', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('product', ChoiceType::class, [
                'choices' => \$this->productPageChoices,
                'label' => \$this->trans('Product pages', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('category', ChoiceType::class, [
                'choices' => \$this->categoryChoices,
                'label' => \$this->trans('Categories', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('static', ChoiceType::class, [
                'choices' => \$this->staticPageChoices,
                'label' => \$this->trans('Static content', 'Modules.Linklist.Admin'),
                'multiple' => true,
                'expanded' => true,
            ])
            ->add('custom', CollectionType::class, [
                'entry_type' => TranslateCustomUrlType::class,
                'entry_options' => [
                    'locales' => \$this->locales,
                    'label' => false,
                ],
                'attr' => [
                    'class' => 'custom_collection',
                    'data-delete-button-label' => \$this->trans('Delete', 'Admin.Global'),
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'label' => \$this->trans('Custom content', 'Modules.Linklist.Admin'),
            ])
        ;

        if (\$this->isMultiStoreUsed) {
            \$builder->add('shop_association', ShopChoiceTreeType::class, [
                'label' => \$this->trans('Shop association', 'Admin.Global'),
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => \$this->trans(
                            'You have to select at least one shop to associate this item with',
                            'Admin.Notifications.Error'
                        ),
                    ]),
                ],
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'label' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'module_link_block';
    }
}
", "@Modules/ps_linklist/src/Form/Type/LinkBlockType.php", "/var/www/html/modules/ps_linklist/src/Form/Type/LinkBlockType.php");
    }
}
