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

/* @Modules/productcomments/js/moderate.js */
class __TwigTemplate_2c337f33ca944605da4b96e992f7820f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/js/moderate.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/js/moderate.js"));

        // line 1
        echo "/**
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

function getCommentForm()
{
\tif (document.forms)
\t\treturn (document.forms['comment_form']);
\telse
\t\treturn (document.comment_form);
}

function getCommentDeleteForm()
{
\tif (document.forms)
\t\treturn (document.forms['delete_comment_form']);
\telse
\t\treturn (document.delete_comment_form);
}

function acceptComment(id)
{
\tvar form = getCommentForm();
\tif (id)
\t\tform.elements['id_product_comment'].value = id;
\tform.elements['action'].value = 'accept';
\tform.submit();
}


function deleteComment(id)
{
\tvar form = getCommentForm();
\tif (id)
\t\tform.elements['id_product_comment'].value = id;
\tform.elements['action'].value = 'delete';
\tform.submit();
}

function delComment(id, confirmation)
{
\tvar answer = confirm(confirmation);
\tif (answer)
\t{
\t\tvar form = getCommentDeleteForm();
\t\tif (id)
\t\t\tform.elements['delete_id_product_comment'].value = id;
\t\tform.elements['delete_action'].value = 'delete';
\t\tform.submit();
\t}
}

function getCriterionForm()
{
\tif (document.forms)
\t\treturn (document.forms['criterion_form']);
\telse
\t\treturn (document.criterion_form);
}

function editCriterion(id)
{
\tvar form = getCriterionForm();
\tform.elements['id_product_comment_criterion'].value = id;
\tform.elements['criterion_name'].value = document.getElementById('criterion_name_' + id).value;
\tform.elements['criterion_action'].value = 'edit';
\tform.submit();
}

function deleteCriterion(id)
{
\tvar form = getCriterionForm();
\tform.elements['id_product_comment_criterion'].value = id;
\tform.elements['criterion_action'].value = 'delete';
\tform.submit();
}

\$( document ).ready(function() {
\t\$('select#id_product_comment_criterion_type').change(function() {
\t\t// PS 1.6
\t\t\$('#categoryBox').closest('div.form-group').hide();
\t\t\$('#ids_product').closest('div.form-group').hide();
\t\t// PS 1.5
\t\t\$('#categories-treeview').closest('div.margin-form').hide();
\t\t\$('#categories-treeview').closest('div.margin-form').prev().hide();
\t\t\$('#ids_product').closest('div.margin-form').hide();
\t\t\$('#ids_product').closest('div.margin-form').prev().hide();

\t\tif (this.value == 2)
\t\t{
\t\t\t\$('#categoryBox').closest('div.form-group').show();
\t\t\t// PS 1.5
\t\t\t\$('#categories-treeview').closest('div.margin-form').show();
\t\t\t\$('#categories-treeview').closest('div.margin-form').prev().show();
\t\t}
\t\telse if (this.value == 3)
\t\t{
\t\t\t\$('#ids_product').closest('div.form-group').show();
\t\t\t// PS 1.5
\t\t\t\$('#ids_product').closest('div.margin-form').show();
\t\t\t\$('#ids_product').closest('div.margin-form').prev().show();
\t\t}
\t});

\t\$('select#id_product_comment_criterion_type').trigger( \"change\" );
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/js/moderate.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

function getCommentForm()
{
\tif (document.forms)
\t\treturn (document.forms['comment_form']);
\telse
\t\treturn (document.comment_form);
}

function getCommentDeleteForm()
{
\tif (document.forms)
\t\treturn (document.forms['delete_comment_form']);
\telse
\t\treturn (document.delete_comment_form);
}

function acceptComment(id)
{
\tvar form = getCommentForm();
\tif (id)
\t\tform.elements['id_product_comment'].value = id;
\tform.elements['action'].value = 'accept';
\tform.submit();
}


function deleteComment(id)
{
\tvar form = getCommentForm();
\tif (id)
\t\tform.elements['id_product_comment'].value = id;
\tform.elements['action'].value = 'delete';
\tform.submit();
}

function delComment(id, confirmation)
{
\tvar answer = confirm(confirmation);
\tif (answer)
\t{
\t\tvar form = getCommentDeleteForm();
\t\tif (id)
\t\t\tform.elements['delete_id_product_comment'].value = id;
\t\tform.elements['delete_action'].value = 'delete';
\t\tform.submit();
\t}
}

function getCriterionForm()
{
\tif (document.forms)
\t\treturn (document.forms['criterion_form']);
\telse
\t\treturn (document.criterion_form);
}

function editCriterion(id)
{
\tvar form = getCriterionForm();
\tform.elements['id_product_comment_criterion'].value = id;
\tform.elements['criterion_name'].value = document.getElementById('criterion_name_' + id).value;
\tform.elements['criterion_action'].value = 'edit';
\tform.submit();
}

function deleteCriterion(id)
{
\tvar form = getCriterionForm();
\tform.elements['id_product_comment_criterion'].value = id;
\tform.elements['criterion_action'].value = 'delete';
\tform.submit();
}

\$( document ).ready(function() {
\t\$('select#id_product_comment_criterion_type').change(function() {
\t\t// PS 1.6
\t\t\$('#categoryBox').closest('div.form-group').hide();
\t\t\$('#ids_product').closest('div.form-group').hide();
\t\t// PS 1.5
\t\t\$('#categories-treeview').closest('div.margin-form').hide();
\t\t\$('#categories-treeview').closest('div.margin-form').prev().hide();
\t\t\$('#ids_product').closest('div.margin-form').hide();
\t\t\$('#ids_product').closest('div.margin-form').prev().hide();

\t\tif (this.value == 2)
\t\t{
\t\t\t\$('#categoryBox').closest('div.form-group').show();
\t\t\t// PS 1.5
\t\t\t\$('#categories-treeview').closest('div.margin-form').show();
\t\t\t\$('#categories-treeview').closest('div.margin-form').prev().show();
\t\t}
\t\telse if (this.value == 3)
\t\t{
\t\t\t\$('#ids_product').closest('div.form-group').show();
\t\t\t// PS 1.5
\t\t\t\$('#ids_product').closest('div.margin-form').show();
\t\t\t\$('#ids_product').closest('div.margin-form').prev().show();
\t\t}
\t});

\t\$('select#id_product_comment_criterion_type').trigger( \"change\" );
});
", "@Modules/productcomments/js/moderate.js", "/var/www/html/modules/productcomments/js/moderate.js");
    }
}
