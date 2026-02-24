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

/* @Modules/ps_facetedsearch/src/Form/AttributeGroup/FormModifier.php */
class __TwigTemplate_edad91b7ccfaf18622eee091a03e5585 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormModifier.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormModifier.php"));

        // line 1
        echo "<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShop\\Module\\FacetedSearch\\Form\\AttributeGroup;

use PrestaShop\\Module\\FacetedSearch\\Constraint\\UrlSegment;
use PrestaShop\\PrestaShop\\Core\\Exception\\CoreException;
use PrestaShopBundle\\Form\\Admin\\Type\\SwitchType;
use PrestaShopBundle\\Form\\Admin\\Type\\TranslatableType;
use PrestaShopBundle\\Translation\\DataCollectorTranslator;
use PrestaShopBundle\\Translation\\TranslatorComponent;
use Symfony\\Component\\Form\\FormBuilderInterface;

class FormModifier
{
    /**
     * @var DataCollectorTranslator|TranslatorComponent
     */
    private \$translator;

    /**
     * @param DataCollectorTranslator|TranslatorComponent \$translator
     */
    public function __construct(\$translator)
    {
        \$this->translator = \$translator;
    }

    public function modify(FormBuilderInterface \$formBuilder)
    {
        // Dynamically check the class and instanciate it, this avoids the module from requiring PrestaShop 1.7.8 minimum,
        // besides this code is not supposed to be called in older versions
        if (!class_exists('\\PrestaShopBundle\\Form\\FormBuilderModifier')) {
            throw new CoreException('FormBuilderModifier class was not found, it is only available in PrestaShop 1.7.8 and more');
        }
        \$formBuilderModifier = new \\PrestaShopBundle\\Form\\FormBuilderModifier();

        \$invalidCharsHint = \$this->translator->trans(
            'Invalid characters: <>;=#{}_',
            [],
            'Modules.Facetedsearch.Admin'
        );

        \$urlTip = \$this->translator->trans(
            'When the Faceted Search module is enabled, you can get more detailed URLs by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\\'s name, but you can change that setting using this field.',
            [],
            'Modules.Facetedsearch.Admin'
        );
        \$metaTitleTip = \$this->translator->trans(
            'When the Faceted Search module is enabled, you can get more detailed page titles by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\\'s name, but you can change that setting using this field.',
            [],
            'Modules.Facetedsearch.Admin'
        );

        \$formBuilderModifier->addBefore(
            \$formBuilder,
            'group_type',
            'url_name',
            TranslatableType::class,
            [
                'required' => false,
                'label' => \$this->translator->trans('URL', [], 'Modules.Facetedsearch.Admin'),
                'help' => \$urlTip . ' ' . \$invalidCharsHint,
                'options' => [
                    'constraints' => [
                        new UrlSegment([
                            'message' => \$this->translator->trans('%s is invalid.', [], 'Admin.Notifications.Error'),
                        ]),
                    ],
                ],
            ]
        );
        \$formBuilderModifier->addBefore(
            \$formBuilder,
            'group_type',
            'meta_title',
            TranslatableType::class,
            [
                'required' => false,
                'label' => \$this->translator->trans('Meta title', [], 'Modules.Facetedsearch.Admin'),
                'help' => \$metaTitleTip,
            ]
        );
        \$formBuilderModifier->addBefore(
            \$formBuilder,
            'group_type',
            'is_indexable',
            SwitchType::class,
            [
                'required' => false,
                'label' => \$this->translator->trans('Indexable', [], 'Modules.Facetedsearch.Admin'),
                'help' => \$this->translator->trans(
                    'Use this attribute in URL generated by the Faceted Search module.',
                    [],
                    'Modules.Facetedsearch.Admin'
                ),
            ]
        );
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormModifier.php";
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
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
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
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShop\\Module\\FacetedSearch\\Form\\AttributeGroup;

use PrestaShop\\Module\\FacetedSearch\\Constraint\\UrlSegment;
use PrestaShop\\PrestaShop\\Core\\Exception\\CoreException;
use PrestaShopBundle\\Form\\Admin\\Type\\SwitchType;
use PrestaShopBundle\\Form\\Admin\\Type\\TranslatableType;
use PrestaShopBundle\\Translation\\DataCollectorTranslator;
use PrestaShopBundle\\Translation\\TranslatorComponent;
use Symfony\\Component\\Form\\FormBuilderInterface;

class FormModifier
{
    /**
     * @var DataCollectorTranslator|TranslatorComponent
     */
    private \$translator;

    /**
     * @param DataCollectorTranslator|TranslatorComponent \$translator
     */
    public function __construct(\$translator)
    {
        \$this->translator = \$translator;
    }

    public function modify(FormBuilderInterface \$formBuilder)
    {
        // Dynamically check the class and instanciate it, this avoids the module from requiring PrestaShop 1.7.8 minimum,
        // besides this code is not supposed to be called in older versions
        if (!class_exists('\\PrestaShopBundle\\Form\\FormBuilderModifier')) {
            throw new CoreException('FormBuilderModifier class was not found, it is only available in PrestaShop 1.7.8 and more');
        }
        \$formBuilderModifier = new \\PrestaShopBundle\\Form\\FormBuilderModifier();

        \$invalidCharsHint = \$this->translator->trans(
            'Invalid characters: <>;=#{}_',
            [],
            'Modules.Facetedsearch.Admin'
        );

        \$urlTip = \$this->translator->trans(
            'When the Faceted Search module is enabled, you can get more detailed URLs by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\\'s name, but you can change that setting using this field.',
            [],
            'Modules.Facetedsearch.Admin'
        );
        \$metaTitleTip = \$this->translator->trans(
            'When the Faceted Search module is enabled, you can get more detailed page titles by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\\'s name, but you can change that setting using this field.',
            [],
            'Modules.Facetedsearch.Admin'
        );

        \$formBuilderModifier->addBefore(
            \$formBuilder,
            'group_type',
            'url_name',
            TranslatableType::class,
            [
                'required' => false,
                'label' => \$this->translator->trans('URL', [], 'Modules.Facetedsearch.Admin'),
                'help' => \$urlTip . ' ' . \$invalidCharsHint,
                'options' => [
                    'constraints' => [
                        new UrlSegment([
                            'message' => \$this->translator->trans('%s is invalid.', [], 'Admin.Notifications.Error'),
                        ]),
                    ],
                ],
            ]
        );
        \$formBuilderModifier->addBefore(
            \$formBuilder,
            'group_type',
            'meta_title',
            TranslatableType::class,
            [
                'required' => false,
                'label' => \$this->translator->trans('Meta title', [], 'Modules.Facetedsearch.Admin'),
                'help' => \$metaTitleTip,
            ]
        );
        \$formBuilderModifier->addBefore(
            \$formBuilder,
            'group_type',
            'is_indexable',
            SwitchType::class,
            [
                'required' => false,
                'label' => \$this->translator->trans('Indexable', [], 'Modules.Facetedsearch.Admin'),
                'help' => \$this->translator->trans(
                    'Use this attribute in URL generated by the Faceted Search module.',
                    [],
                    'Modules.Facetedsearch.Admin'
                ),
            ]
        );
    }
}
", "@Modules/ps_facetedsearch/src/Form/AttributeGroup/FormModifier.php", "/var/www/html/modules/ps_facetedsearch/src/Form/AttributeGroup/FormModifier.php");
    }
}
