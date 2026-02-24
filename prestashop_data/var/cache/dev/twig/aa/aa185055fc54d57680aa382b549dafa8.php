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

/* @Modules/ps_facetedsearch/src/Hook/FeatureValue.php */
class __TwigTemplate_851942c45ae76c8186f4a17d9e1c64a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Hook/FeatureValue.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_facetedsearch/src/Hook/FeatureValue.php"));

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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch\\Hook;

use Language;
use PrestaShop\\Module\\FacetedSearch\\Form\\FeatureValue\\FormDataProvider;
use PrestaShop\\Module\\FacetedSearch\\Form\\FeatureValue\\FormModifier;
use Ps_Facetedsearch;
use Tools;

class FeatureValue extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'actionFeatureValueSave',
        'actionFeatureValueDelete',
        'displayFeatureValueForm',
        'displayFeatureValuePostProcess',
        'actionFeatureValueFormBuilderModifier',
        'actionAfterCreateFeatureValueFormHandler',
        'actionAfterUpdateFeatureValueFormHandler',
    ];

    /**
     * @var FormModifier
     */
    private \$formModifier;

    /**
     * @var FormDataProvider
     */
    private \$dataProvider;

    public function __construct(Ps_Facetedsearch \$module)
    {
        parent::__construct(\$module);

        \$this->formModifier = new FormModifier(\$module->getContext());
        \$this->dataProvider = new FormDataProvider(\$module->getDatabase());
    }

    /**
     * Hook for modifying feature form formBuilder
     *
     * @since PrestaShop 9.0
     *
     * @param array \$params
     */
    public function actionFeatureValueFormBuilderModifier(array \$params)
    {
        \$this->formModifier->modify(\$params['form_builder'], \$this->dataProvider->getData(\$params));
    }

    /**
     * Hook after create feature.
     *
     * @since PrestaShop 9.0
     *
     * @param array \$params
     */
    public function actionAfterCreateFeatureValueFormHandler(array \$params)
    {
        \$this->save(\$params['id'], \$params['form_data']);
    }

    /**
     * Hook after update feature.
     *
     * @since PrestaShop 9.0
     *
     * @param array \$params
     */
    public function actionAfterUpdateFeatureValueFormHandler(array \$params)
    {
        \$this->save(\$params['id'], \$params['form_data']);
    }

    /**
     * After save feature value
     *
     * @param array \$params
     */
    public function actionFeatureValueSave(array \$params)
    {
        if (empty(\$params['id_feature_value'])) {
            return;
        }

        //Removing all indexed language data for this attribute value id
        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . (int) \$params['id_feature_value']
        );

        foreach (Language::getLanguages(false) as \$language) {
            \$seoUrl = Tools::getValue('url_name_' . (int) \$language['id_lang']);
            \$metaTitle = Tools::getValue('meta_title_' . (int) \$language['id_lang']);
            if (empty(\$seoUrl) && empty(\$metaTitle)) {
                continue;
            }

            \$this->database->execute(
                'INSERT INTO ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
                (`id_feature_value`, `id_lang`, `url_name`, `meta_title`)
                VALUES (
                ' . (int) \$params['id_feature_value'] . ', ' . (int) \$language['id_lang'] . ',
                \\'' . pSQL(Tools::str2url(\$seoUrl)) . '\\',
                \\'' . pSQL(\$metaTitle, true) . '\\')'
            );
        }

        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * After delete Feature value
     *
     * @param array \$params
     */
    public function actionFeatureValueDelete(array \$params)
    {
        if (empty(\$params['id_feature_value'])) {
            return;
        }

        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . (int) \$params['id_feature_value']
        );
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * Post process feature value
     *
     * @param array \$params
     */
    public function displayFeatureValuePostProcess(array \$params)
    {
        \$this->module->checkLinksRewrite(\$params);
    }

    /**
     * Display feature value form
     *
     * @param array \$params
     *
     * @return string
     */
    public function displayFeatureValueForm(array \$params)
    {
        \$values = [];

        if (\$result = \$this->database->executeS(
            'SELECT `url_name`, `meta_title`, `id_lang`
            FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . (int) \$params['id_feature_value']
        )) {
            foreach (\$result as \$data) {
                \$values[\$data['id_lang']] = ['url_name' => \$data['url_name'], 'meta_title' => \$data['meta_title']];
            }
        }

        \$this->context->smarty->assign([
            'languages' => Language::getLanguages(false),
            'default_form_language' => (int) \$this->context->controller->default_form_language,
            'values' => \$values,
        ]);

        return \$this->module->render('feature_value_form.tpl');
    }

    private function save(\$featureValueId, array \$formData)
    {
        \$featureValueId = (int) \$featureValueId;
        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . \$featureValueId
        );

        \$query = 'INSERT INTO ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value ' .
            '(`id_feature_value`, `id_lang`, `url_name`, `meta_title`) ' .
            'VALUES (%d, %d, \\'%s\\', \\'%s\\')';

        foreach (Language::getLanguages(false) as \$language) {
            \$langId = (int) \$language['id_lang'];
            \$metaTitle = pSQL(\$formData['meta_title'][\$langId]);
            \$seoUrl = \$formData['url_name'][\$langId];

            if (!empty(\$seoUrl)) {
                \$seoUrl = pSQL(Tools::str2url(\$seoUrl));
            }

            \$this->database->execute(
                sprintf(
                    \$query,
                    \$featureValueId,
                    \$langId,
                    \$seoUrl,
                    \$metaTitle
                )
            );
        }

        \$this->module->invalidateLayeredFilterBlockCache();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_facetedsearch/src/Hook/FeatureValue.php";
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

namespace PrestaShop\\Module\\FacetedSearch\\Hook;

use Language;
use PrestaShop\\Module\\FacetedSearch\\Form\\FeatureValue\\FormDataProvider;
use PrestaShop\\Module\\FacetedSearch\\Form\\FeatureValue\\FormModifier;
use Ps_Facetedsearch;
use Tools;

class FeatureValue extends AbstractHook
{
    const AVAILABLE_HOOKS = [
        'actionFeatureValueSave',
        'actionFeatureValueDelete',
        'displayFeatureValueForm',
        'displayFeatureValuePostProcess',
        'actionFeatureValueFormBuilderModifier',
        'actionAfterCreateFeatureValueFormHandler',
        'actionAfterUpdateFeatureValueFormHandler',
    ];

    /**
     * @var FormModifier
     */
    private \$formModifier;

    /**
     * @var FormDataProvider
     */
    private \$dataProvider;

    public function __construct(Ps_Facetedsearch \$module)
    {
        parent::__construct(\$module);

        \$this->formModifier = new FormModifier(\$module->getContext());
        \$this->dataProvider = new FormDataProvider(\$module->getDatabase());
    }

    /**
     * Hook for modifying feature form formBuilder
     *
     * @since PrestaShop 9.0
     *
     * @param array \$params
     */
    public function actionFeatureValueFormBuilderModifier(array \$params)
    {
        \$this->formModifier->modify(\$params['form_builder'], \$this->dataProvider->getData(\$params));
    }

    /**
     * Hook after create feature.
     *
     * @since PrestaShop 9.0
     *
     * @param array \$params
     */
    public function actionAfterCreateFeatureValueFormHandler(array \$params)
    {
        \$this->save(\$params['id'], \$params['form_data']);
    }

    /**
     * Hook after update feature.
     *
     * @since PrestaShop 9.0
     *
     * @param array \$params
     */
    public function actionAfterUpdateFeatureValueFormHandler(array \$params)
    {
        \$this->save(\$params['id'], \$params['form_data']);
    }

    /**
     * After save feature value
     *
     * @param array \$params
     */
    public function actionFeatureValueSave(array \$params)
    {
        if (empty(\$params['id_feature_value'])) {
            return;
        }

        //Removing all indexed language data for this attribute value id
        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . (int) \$params['id_feature_value']
        );

        foreach (Language::getLanguages(false) as \$language) {
            \$seoUrl = Tools::getValue('url_name_' . (int) \$language['id_lang']);
            \$metaTitle = Tools::getValue('meta_title_' . (int) \$language['id_lang']);
            if (empty(\$seoUrl) && empty(\$metaTitle)) {
                continue;
            }

            \$this->database->execute(
                'INSERT INTO ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
                (`id_feature_value`, `id_lang`, `url_name`, `meta_title`)
                VALUES (
                ' . (int) \$params['id_feature_value'] . ', ' . (int) \$language['id_lang'] . ',
                \\'' . pSQL(Tools::str2url(\$seoUrl)) . '\\',
                \\'' . pSQL(\$metaTitle, true) . '\\')'
            );
        }

        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * After delete Feature value
     *
     * @param array \$params
     */
    public function actionFeatureValueDelete(array \$params)
    {
        if (empty(\$params['id_feature_value'])) {
            return;
        }

        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . (int) \$params['id_feature_value']
        );
        \$this->module->invalidateLayeredFilterBlockCache();
    }

    /**
     * Post process feature value
     *
     * @param array \$params
     */
    public function displayFeatureValuePostProcess(array \$params)
    {
        \$this->module->checkLinksRewrite(\$params);
    }

    /**
     * Display feature value form
     *
     * @param array \$params
     *
     * @return string
     */
    public function displayFeatureValueForm(array \$params)
    {
        \$values = [];

        if (\$result = \$this->database->executeS(
            'SELECT `url_name`, `meta_title`, `id_lang`
            FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . (int) \$params['id_feature_value']
        )) {
            foreach (\$result as \$data) {
                \$values[\$data['id_lang']] = ['url_name' => \$data['url_name'], 'meta_title' => \$data['meta_title']];
            }
        }

        \$this->context->smarty->assign([
            'languages' => Language::getLanguages(false),
            'default_form_language' => (int) \$this->context->controller->default_form_language,
            'values' => \$values,
        ]);

        return \$this->module->render('feature_value_form.tpl');
    }

    private function save(\$featureValueId, array \$formData)
    {
        \$featureValueId = (int) \$featureValueId;
        \$this->database->execute(
            'DELETE FROM ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value
            WHERE `id_feature_value` = ' . \$featureValueId
        );

        \$query = 'INSERT INTO ' . _DB_PREFIX_ . 'layered_indexable_feature_value_lang_value ' .
            '(`id_feature_value`, `id_lang`, `url_name`, `meta_title`) ' .
            'VALUES (%d, %d, \\'%s\\', \\'%s\\')';

        foreach (Language::getLanguages(false) as \$language) {
            \$langId = (int) \$language['id_lang'];
            \$metaTitle = pSQL(\$formData['meta_title'][\$langId]);
            \$seoUrl = \$formData['url_name'][\$langId];

            if (!empty(\$seoUrl)) {
                \$seoUrl = pSQL(Tools::str2url(\$seoUrl));
            }

            \$this->database->execute(
                sprintf(
                    \$query,
                    \$featureValueId,
                    \$langId,
                    \$seoUrl,
                    \$metaTitle
                )
            );
        }

        \$this->module->invalidateLayeredFilterBlockCache();
    }
}
", "@Modules/ps_facetedsearch/src/Hook/FeatureValue.php", "/var/www/html/modules/ps_facetedsearch/src/Hook/FeatureValue.php");
    }
}
