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

/* @Modules/ps_linklist/src/Controller/Admin/Improve/Design/LinkBlockController.php */
class __TwigTemplate_296f3077603e69c1a4145f566db9ea2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Controller/Admin/Improve/Design/LinkBlockController.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_linklist/src/Controller/Admin/Improve/Design/LinkBlockController.php"));

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

namespace PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design;

use PrestaShop\\Module\\LinkList\\Core\\Grid\\LinkBlockGridFactory;
use PrestaShop\\Module\\LinkList\\Core\\Search\\Filters\\LinkBlockFilters;
use PrestaShop\\Module\\LinkList\\Form\\LinkBlockFormDataProvider;
use PrestaShop\\Module\\LinkList\\Repository\\LinkBlockRepository;
use PrestaShop\\PrestaShop\\Core\\Exception\\DatabaseException;
use PrestaShop\\PrestaShop\\Core\\Form\\FormHandlerInterface;
use PrestaShopBundle\\Controller\\Admin\\FrameworkBundleAdminController;
use PrestaShopBundle\\Security\\Annotation\\AdminSecurity;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class LinkBlockController extends FrameworkBundleAdminController
{
    /**
     * @AdminSecurity(\"is_granted('read', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function listAction(Request \$request)
    {
        //Get hook list, then loop through hooks setting it in in the filter
        /** @var LinkBlockRepository \$repository */
        \$repository = \$this->get('prestashop.module.link_block.repository');
        \$hooks = \$repository->getHooksWithLinks();

        \$filtersParams = \$this->buildFiltersParamsByRequest(\$request);

        /** @var LinkBlockGridFactory \$linkBlockGridFactory */
        \$linkBlockGridFactory = \$this->get('prestashop.module.link_block.grid.factory');
        \$grids = \$linkBlockGridFactory->getGrids(\$hooks, \$filtersParams);

        \$presentedGrids = [];
        foreach (\$grids as \$grid) {
            \$presentedGrids[] = \$this->presentGrid(\$grid);
        }

        \$presentedGrids = array_filter(
            \$presentedGrids,
            function (\$grid) {
                return \$grid['data']['records_total'] > 0;
            }
        );

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/list.html.twig', [
            'grids' => \$presentedGrids,
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @AdminSecurity(\"is_granted('create', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     *
     * @return Response
     *
     * @throws \\Exception
     */
    public function createAction(Request \$request)
    {
        \$this->get('prestashop.module.link_block.form_provider')->setIdLinkBlock(null);
        \$form = \$this->get('prestashop.module.link_block.form_handler')->getForm();

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig', [
            'linkBlockForm' => \$form->createView(),
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @AdminSecurity(\"is_granted('update', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     * @param int \$linkBlockId
     *
     * @return Response
     *
     * @throws \\Exception
     */
    public function editAction(Request \$request, \$linkBlockId)
    {
        \$this->get('prestashop.module.link_block.form_provider')->setIdLinkBlock(\$linkBlockId);
        \$form = \$this->get('prestashop.module.link_block.form_handler')->getForm();

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig', [
            'linkBlockForm' => \$form->createView(),
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @AdminSecurity(\"is_granted('create', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     *
     * @return RedirectResponse|Response
     *
     * @throws \\Exception
     */
    public function createProcessAction(Request \$request)
    {
        return \$this->processForm(\$request, 'Successful creation.');
    }

    /**
     * @AdminSecurity(\"is_granted('update', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     * @param int \$linkBlockId
     *
     * @return RedirectResponse|Response
     *
     * @throws \\Exception
     */
    public function editProcessAction(Request \$request, \$linkBlockId)
    {
        return \$this->processForm(\$request, 'Successful update.', \$linkBlockId);
    }

    /**
     * @AdminSecurity(\"is_granted('delete', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param int \$linkBlockId
     *
     * @return RedirectResponse
     */
    public function deleteAction(\$linkBlockId)
    {
        \$repository = \$this->get('prestashop.module.link_block.repository');
        \$errors = [];
        try {
            \$repository->delete(\$linkBlockId);
        } catch (DatabaseException \$e) {
            \$errors[] = [
                'key' => 'Could not delete #%i',
                'domain' => 'Admin.Catalog.Notification',
                'parameters' => [\$linkBlockId],
            ];
        }

        if (0 === count(\$errors)) {
            \$this->clearModuleCache();
            \$this->addFlash('success', \$this->trans('Successful deletion.', 'Admin.Notifications.Success'));
        } else {
            \$this->flashErrors(\$errors);
        }

        return \$this->redirectToRoute('admin_link_block_list');
    }

    /**
     * @AdminSecurity(\"is_granted('update', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     * @param int \$hookId
     *
     * @throws \\Exception
     *
     * @return RedirectResponse
     */
    public function updatePositionsAction(Request \$request, \$hookId)
    {
        \$positionsData = [
            'positions' => \$request->request->all()['positions'],
            'parentId' => \$hookId,
        ];

        /** @var LinkBlockRepository \$repository */
        \$repository = \$this->get('prestashop.module.link_block.repository');

        try {
            \$repository->updatePositions(\$this->getContext()->shop->id, \$positionsData);
            \$this->clearModuleCache();
            \$this->addFlash('success', \$this->trans('Successful update.', 'Admin.Notifications.Success'));
        } catch (DatabaseException \$e) {
            \$errors = [\$e->getMessage()];
            \$this->flashErrors(\$errors);
        }

        return \$this->redirectToRoute('admin_link_block_list');
    }

    /**
     * @param Request \$request
     * @param string \$successMessage
     * @param int|null \$linkBlockId
     *
     * @return Response|RedirectResponse
     *
     * @throws \\Exception
     */
    private function processForm(Request \$request, \$successMessage, \$linkBlockId = null)
    {
        /** @var LinkBlockFormDataProvider \$formProvider */
        \$formProvider = \$this->get('prestashop.module.link_block.form_provider');
        \$formProvider->setIdLinkBlock(\$linkBlockId);

        /** @var FormHandlerInterface \$formHandler */
        \$formHandler = \$this->get('prestashop.module.link_block.form_handler');
        \$form = \$formHandler->getForm();
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted()) {
            if (\$form->isValid()) {
                \$saveErrors = \$formHandler->save(\$form->getData());
                if (0 === count(\$saveErrors)) {
                    \$this->addFlash('success', \$this->trans(\$successMessage, 'Admin.Notifications.Success'));

                    return \$this->redirectToRoute('admin_link_block_list');
                }

                \$this->flashErrors(\$saveErrors);
            }
            \$formErrors = [];
            foreach (\$form->getErrors(true) as \$error) {
                \$formErrors[] = \$error->getMessage();
            }
            \$this->flashErrors(\$formErrors);
        }

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig', [
            'linkBlockForm' => \$form->createView(),
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @param Request \$request
     *
     * @return array
     */
    protected function buildFiltersParamsByRequest(Request \$request)
    {
        \$filtersParams = array_merge(LinkBlockFilters::getDefaults(), \$request->query->all());

        return \$filtersParams;
    }

    /**
     * Gets the header toolbar buttons.
     *
     * @return array
     */
    private function getToolbarButtons()
    {
        return [
            'add' => [
                'href' => \$this->generateUrl('admin_link_block_create'),
                'desc' => \$this->trans('New block', 'Modules.Linklist.Admin'),
                'icon' => 'add_circle_outline',
            ],
        ];
    }

    /**
     * Clear module cache.
     */
    private function clearModuleCache()
    {
        \$this->get('prestashop.module.link_block.cache')->clearModuleCache();
    }
}
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/ps_linklist/src/Controller/Admin/Improve/Design/LinkBlockController.php";
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

namespace PrestaShop\\Module\\LinkList\\Controller\\Admin\\Improve\\Design;

use PrestaShop\\Module\\LinkList\\Core\\Grid\\LinkBlockGridFactory;
use PrestaShop\\Module\\LinkList\\Core\\Search\\Filters\\LinkBlockFilters;
use PrestaShop\\Module\\LinkList\\Form\\LinkBlockFormDataProvider;
use PrestaShop\\Module\\LinkList\\Repository\\LinkBlockRepository;
use PrestaShop\\PrestaShop\\Core\\Exception\\DatabaseException;
use PrestaShop\\PrestaShop\\Core\\Form\\FormHandlerInterface;
use PrestaShopBundle\\Controller\\Admin\\FrameworkBundleAdminController;
use PrestaShopBundle\\Security\\Annotation\\AdminSecurity;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class LinkBlockController extends FrameworkBundleAdminController
{
    /**
     * @AdminSecurity(\"is_granted('read', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     *
     * @return Response
     */
    public function listAction(Request \$request)
    {
        //Get hook list, then loop through hooks setting it in in the filter
        /** @var LinkBlockRepository \$repository */
        \$repository = \$this->get('prestashop.module.link_block.repository');
        \$hooks = \$repository->getHooksWithLinks();

        \$filtersParams = \$this->buildFiltersParamsByRequest(\$request);

        /** @var LinkBlockGridFactory \$linkBlockGridFactory */
        \$linkBlockGridFactory = \$this->get('prestashop.module.link_block.grid.factory');
        \$grids = \$linkBlockGridFactory->getGrids(\$hooks, \$filtersParams);

        \$presentedGrids = [];
        foreach (\$grids as \$grid) {
            \$presentedGrids[] = \$this->presentGrid(\$grid);
        }

        \$presentedGrids = array_filter(
            \$presentedGrids,
            function (\$grid) {
                return \$grid['data']['records_total'] > 0;
            }
        );

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/list.html.twig', [
            'grids' => \$presentedGrids,
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @AdminSecurity(\"is_granted('create', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     *
     * @return Response
     *
     * @throws \\Exception
     */
    public function createAction(Request \$request)
    {
        \$this->get('prestashop.module.link_block.form_provider')->setIdLinkBlock(null);
        \$form = \$this->get('prestashop.module.link_block.form_handler')->getForm();

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig', [
            'linkBlockForm' => \$form->createView(),
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @AdminSecurity(\"is_granted('update', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     * @param int \$linkBlockId
     *
     * @return Response
     *
     * @throws \\Exception
     */
    public function editAction(Request \$request, \$linkBlockId)
    {
        \$this->get('prestashop.module.link_block.form_provider')->setIdLinkBlock(\$linkBlockId);
        \$form = \$this->get('prestashop.module.link_block.form_handler')->getForm();

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig', [
            'linkBlockForm' => \$form->createView(),
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @AdminSecurity(\"is_granted('create', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     *
     * @return RedirectResponse|Response
     *
     * @throws \\Exception
     */
    public function createProcessAction(Request \$request)
    {
        return \$this->processForm(\$request, 'Successful creation.');
    }

    /**
     * @AdminSecurity(\"is_granted('update', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     * @param int \$linkBlockId
     *
     * @return RedirectResponse|Response
     *
     * @throws \\Exception
     */
    public function editProcessAction(Request \$request, \$linkBlockId)
    {
        return \$this->processForm(\$request, 'Successful update.', \$linkBlockId);
    }

    /**
     * @AdminSecurity(\"is_granted('delete', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param int \$linkBlockId
     *
     * @return RedirectResponse
     */
    public function deleteAction(\$linkBlockId)
    {
        \$repository = \$this->get('prestashop.module.link_block.repository');
        \$errors = [];
        try {
            \$repository->delete(\$linkBlockId);
        } catch (DatabaseException \$e) {
            \$errors[] = [
                'key' => 'Could not delete #%i',
                'domain' => 'Admin.Catalog.Notification',
                'parameters' => [\$linkBlockId],
            ];
        }

        if (0 === count(\$errors)) {
            \$this->clearModuleCache();
            \$this->addFlash('success', \$this->trans('Successful deletion.', 'Admin.Notifications.Success'));
        } else {
            \$this->flashErrors(\$errors);
        }

        return \$this->redirectToRoute('admin_link_block_list');
    }

    /**
     * @AdminSecurity(\"is_granted('update', request.get('_legacy_controller'))\", message=\"Access denied.\")
     *
     * @param Request \$request
     * @param int \$hookId
     *
     * @throws \\Exception
     *
     * @return RedirectResponse
     */
    public function updatePositionsAction(Request \$request, \$hookId)
    {
        \$positionsData = [
            'positions' => \$request->request->all()['positions'],
            'parentId' => \$hookId,
        ];

        /** @var LinkBlockRepository \$repository */
        \$repository = \$this->get('prestashop.module.link_block.repository');

        try {
            \$repository->updatePositions(\$this->getContext()->shop->id, \$positionsData);
            \$this->clearModuleCache();
            \$this->addFlash('success', \$this->trans('Successful update.', 'Admin.Notifications.Success'));
        } catch (DatabaseException \$e) {
            \$errors = [\$e->getMessage()];
            \$this->flashErrors(\$errors);
        }

        return \$this->redirectToRoute('admin_link_block_list');
    }

    /**
     * @param Request \$request
     * @param string \$successMessage
     * @param int|null \$linkBlockId
     *
     * @return Response|RedirectResponse
     *
     * @throws \\Exception
     */
    private function processForm(Request \$request, \$successMessage, \$linkBlockId = null)
    {
        /** @var LinkBlockFormDataProvider \$formProvider */
        \$formProvider = \$this->get('prestashop.module.link_block.form_provider');
        \$formProvider->setIdLinkBlock(\$linkBlockId);

        /** @var FormHandlerInterface \$formHandler */
        \$formHandler = \$this->get('prestashop.module.link_block.form_handler');
        \$form = \$formHandler->getForm();
        \$form->handleRequest(\$request);

        if (\$form->isSubmitted()) {
            if (\$form->isValid()) {
                \$saveErrors = \$formHandler->save(\$form->getData());
                if (0 === count(\$saveErrors)) {
                    \$this->addFlash('success', \$this->trans(\$successMessage, 'Admin.Notifications.Success'));

                    return \$this->redirectToRoute('admin_link_block_list');
                }

                \$this->flashErrors(\$saveErrors);
            }
            \$formErrors = [];
            foreach (\$form->getErrors(true) as \$error) {
                \$formErrors[] = \$error->getMessage();
            }
            \$this->flashErrors(\$formErrors);
        }

        return \$this->render('@Modules/ps_linklist/views/templates/admin/link_block/form.html.twig', [
            'linkBlockForm' => \$form->createView(),
            'enableSidebar' => true,
            'layoutHeaderToolbarBtn' => \$this->getToolbarButtons(),
            'help_link' => \$this->generateSidebarLink(\$request->attributes->get('_legacy_controller')),
        ]);
    }

    /**
     * @param Request \$request
     *
     * @return array
     */
    protected function buildFiltersParamsByRequest(Request \$request)
    {
        \$filtersParams = array_merge(LinkBlockFilters::getDefaults(), \$request->query->all());

        return \$filtersParams;
    }

    /**
     * Gets the header toolbar buttons.
     *
     * @return array
     */
    private function getToolbarButtons()
    {
        return [
            'add' => [
                'href' => \$this->generateUrl('admin_link_block_create'),
                'desc' => \$this->trans('New block', 'Modules.Linklist.Admin'),
                'icon' => 'add_circle_outline',
            ],
        ];
    }

    /**
     * Clear module cache.
     */
    private function clearModuleCache()
    {
        \$this->get('prestashop.module.link_block.cache')->clearModuleCache();
    }
}
", "@Modules/ps_linklist/src/Controller/Admin/Improve/Design/LinkBlockController.php", "/var/www/html/modules/ps_linklist/src/Controller/Admin/Improve/Design/LinkBlockController.php");
    }
}
