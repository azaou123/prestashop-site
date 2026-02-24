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

/* @Modules/productcomments/views/js/post-comment.js */
class __TwigTemplate_497fef66ce6cb7739ae7a2295ae8ba8d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/js/post-comment.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/js/post-comment.js"));

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

jQuery(document).ready(function () {
  const \$ = jQuery;
  \$('body').on('click', '.post-product-comment', function (event) {
    event.preventDefault();
    showPostCommentModal();
  });

  const postCommentModal = \$('#post-product-comment-modal');
  postCommentModal.on('hidden.bs.modal', function () {
    postCommentModal.modal('hide');
    clearPostCommentForm();
  });

  const commentPostedModal = \$('#product-comment-posted-modal');
  const commentPostErrorModal = \$('#product-comment-post-error');

  const criterionsList = \$('#criterions_list');
  criterionsList.append('<div id=\"ratingNotChosen\">* ' + productCommentMandatoryMessage + '</div>');
  const criterionsInfo = \$('#ratingNotChosen');  

  function showPostCommentModal() {
    commentPostedModal.modal('hide');
    commentPostErrorModal.modal('hide');
    postCommentModal.modal('show');
    ratingChosen = false;
    criterionsInfo.hide();
  }

  function showCommentPostedModal() {
    postCommentModal.modal('hide');
    commentPostErrorModal.modal('hide');
    clearPostCommentForm();
    commentPostedModal.modal('show');
  }

  function showPostErrorModal(errorMessage) {
    postCommentModal.modal('hide');
    commentPostedModal.modal('hide');
    clearPostCommentForm();
    \$('#product-comment-post-error-message').html(errorMessage);
    commentPostErrorModal.modal('show');
  }

  function clearPostCommentForm() {
    \$('#post-product-comment-form input[type=\"text\"]').val('');
    \$('#post-product-comment-form input[type=\"text\"]').removeClass('valid error');
    \$('#post-product-comment-form textarea').val('');
    \$('#post-product-comment-form textarea').removeClass('valid error');
    \$('#post-product-comment-form .criterion-rating input').val(3).trigger('change');
  }

  function initCommentModal() {
    \$('#post-product-comment-modal .grade-stars').rating();
    \$('body').on('click', '.post-product-comment', function (event) {
      event.preventDefault();
      showPostCommentModal();
    });

    \$('#post-product-comment-form').on('submit', submitCommentForm);
  }

  function submitCommentForm(event) {
    event.preventDefault();
    var formData = \$(this).serializeArray();
    if (!validateFormData(formData)) {
      return;
    }
    \$.post(\$(this).attr('action'), \$(this).serialize(), function(jsonData) {
      if (jsonData) {
        if (jsonData.success) {
          clearPostCommentForm();
          showCommentPostedModal();
        } else {
          if (jsonData.errors) {
            var errorList = '<ul>';
            for (var i = 0; i < jsonData.errors.length; ++i) {
              errorList += '<li>' + jsonData.errors[i] + '</li>';
            }
            errorList += '</ul>';
            showPostErrorModal(errorList);
          } else {
            const decodedErrorMessage = \$(\"<div/>\").html(jsonData.error).text();
            showPostErrorModal(decodedErrorMessage);
          }
        }
      } else {
        showPostErrorModal(productCommentPostErrorMessage);
      }
    }).fail(function() {
      showPostErrorModal(productCommentPostErrorMessage);
    });
  }

  function validateFormData(formData) {
    var isValid = true;
    formData.forEach(function(formField) {
      const fieldSelector = '#post-product-comment-form [name=\"'+formField.name+'\"]';
      if (!formField.value) {
        \$(fieldSelector).addClass('error');
        \$(fieldSelector).removeClass('valid');
        isValid = false;
      } else {
        \$(fieldSelector).removeClass('error');
        \$(fieldSelector).addClass('valid');
      }
           
      if (!ratingChosen) {
        criterionsInfo.show();
        isValid = false;
      } else {
        criterionsInfo.hide();
      }
    });  

    return isValid;
  }

  initCommentModal();
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/views/js/post-comment.js";
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

jQuery(document).ready(function () {
  const \$ = jQuery;
  \$('body').on('click', '.post-product-comment', function (event) {
    event.preventDefault();
    showPostCommentModal();
  });

  const postCommentModal = \$('#post-product-comment-modal');
  postCommentModal.on('hidden.bs.modal', function () {
    postCommentModal.modal('hide');
    clearPostCommentForm();
  });

  const commentPostedModal = \$('#product-comment-posted-modal');
  const commentPostErrorModal = \$('#product-comment-post-error');

  const criterionsList = \$('#criterions_list');
  criterionsList.append('<div id=\"ratingNotChosen\">* ' + productCommentMandatoryMessage + '</div>');
  const criterionsInfo = \$('#ratingNotChosen');  

  function showPostCommentModal() {
    commentPostedModal.modal('hide');
    commentPostErrorModal.modal('hide');
    postCommentModal.modal('show');
    ratingChosen = false;
    criterionsInfo.hide();
  }

  function showCommentPostedModal() {
    postCommentModal.modal('hide');
    commentPostErrorModal.modal('hide');
    clearPostCommentForm();
    commentPostedModal.modal('show');
  }

  function showPostErrorModal(errorMessage) {
    postCommentModal.modal('hide');
    commentPostedModal.modal('hide');
    clearPostCommentForm();
    \$('#product-comment-post-error-message').html(errorMessage);
    commentPostErrorModal.modal('show');
  }

  function clearPostCommentForm() {
    \$('#post-product-comment-form input[type=\"text\"]').val('');
    \$('#post-product-comment-form input[type=\"text\"]').removeClass('valid error');
    \$('#post-product-comment-form textarea').val('');
    \$('#post-product-comment-form textarea').removeClass('valid error');
    \$('#post-product-comment-form .criterion-rating input').val(3).trigger('change');
  }

  function initCommentModal() {
    \$('#post-product-comment-modal .grade-stars').rating();
    \$('body').on('click', '.post-product-comment', function (event) {
      event.preventDefault();
      showPostCommentModal();
    });

    \$('#post-product-comment-form').on('submit', submitCommentForm);
  }

  function submitCommentForm(event) {
    event.preventDefault();
    var formData = \$(this).serializeArray();
    if (!validateFormData(formData)) {
      return;
    }
    \$.post(\$(this).attr('action'), \$(this).serialize(), function(jsonData) {
      if (jsonData) {
        if (jsonData.success) {
          clearPostCommentForm();
          showCommentPostedModal();
        } else {
          if (jsonData.errors) {
            var errorList = '<ul>';
            for (var i = 0; i < jsonData.errors.length; ++i) {
              errorList += '<li>' + jsonData.errors[i] + '</li>';
            }
            errorList += '</ul>';
            showPostErrorModal(errorList);
          } else {
            const decodedErrorMessage = \$(\"<div/>\").html(jsonData.error).text();
            showPostErrorModal(decodedErrorMessage);
          }
        }
      } else {
        showPostErrorModal(productCommentPostErrorMessage);
      }
    }).fail(function() {
      showPostErrorModal(productCommentPostErrorMessage);
    });
  }

  function validateFormData(formData) {
    var isValid = true;
    formData.forEach(function(formField) {
      const fieldSelector = '#post-product-comment-form [name=\"'+formField.name+'\"]';
      if (!formField.value) {
        \$(fieldSelector).addClass('error');
        \$(fieldSelector).removeClass('valid');
        isValid = false;
      } else {
        \$(fieldSelector).removeClass('error');
        \$(fieldSelector).addClass('valid');
      }
           
      if (!ratingChosen) {
        criterionsInfo.show();
        isValid = false;
      } else {
        criterionsInfo.hide();
      }
    });  

    return isValid;
  }

  initCommentModal();
});
", "@Modules/productcomments/views/js/post-comment.js", "/var/www/html/modules/productcomments/views/js/post-comment.js");
    }
}
