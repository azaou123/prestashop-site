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

/* @Modules/ps_linklist/src/Form/ChoiceProvider/HookChoiceProvider.php */
class __TwigTemplate_0f2b3ad59fd9b05f7c62c8e5f70a436b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Form/ChoiceProvider/HookChoiceProvider.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Form/ChoiceProvider/HookChoiceProvider.php"));

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

/**
 * Class HookChoiceProvider.
 */
final class HookChoiceProvider extends AbstractDatabaseChoiceProvider
{
    /**
     * @return mixed
     */
    public function getChoices()
    {
        \$qb = \$this->connection->createQueryBuilder();
        \$qb
            ->select('h.id_hook, h.name')
            ->from(\$this->dbPrefix . 'hook', 'h')
            ->andWhere('h.name LIKE :displayHook')
            ->setParameter('displayHook', 'display%')
            ->orderBy('h.name')
        ;

        \$hooks = \$qb->execute()->fetchAll();
        \$choices = [];
        foreach (\$hooks as \$hook) {
            \$choices[\$hook['name']] = \$hook['id_hook'];
        }

        return \$choices;
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Form/ChoiceProvider/HookChoiceProvider.php";
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

/**
 * Class HookChoiceProvider.
 */
final class HookChoiceProvider extends AbstractDatabaseChoiceProvider
{
    /**
     * @return mixed
     */
    public function getChoices()
    {
        \$qb = \$this->connection->createQueryBuilder();
        \$qb
            ->select('h.id_hook, h.name')
            ->from(\$this->dbPrefix . 'hook', 'h')
            ->andWhere('h.name LIKE :displayHook')
            ->setParameter('displayHook', 'display%')
            ->orderBy('h.name')
        ;

        \$hooks = \$qb->execute()->fetchAll();
        \$choices = [];
        foreach (\$hooks as \$hook) {
            \$choices[\$hook['name']] = \$hook['id_hook'];
        }

        return \$choices;
    }
}
", "@Modules/ps_linklist/src/Form/ChoiceProvider/HookChoiceProvider.php", "/var/www/html/modules/ps_linklist/src/Form/ChoiceProvider/HookChoiceProvider.php");
    }
}
