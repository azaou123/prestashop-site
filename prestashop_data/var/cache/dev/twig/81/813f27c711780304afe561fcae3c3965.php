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

/* @Modules/productcomments/views/js/list-comments.js */
class __TwigTemplate_6ff57939dbcea723f4ee9e397c375e83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/js/list-comments.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/js/list-comments.js"));

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
  const commentsList = \$('#product-comments-list');
  const emptyProductComment = \$('#empty-product-comment');
  const commentsListUrl = commentsList.data('list-comments-url');
  const updateCommentUsefulnessUrl = commentsList.data('update-comment-usefulness-url');
  const reportCommentUrl = commentsList.data('report-comment-url');
  const commentPrototype = commentsList.data('comment-item-prototype');

  const pagesListId = '#product-comments-list-pagination';
  const pageIdPrefix = '#pcl_page_';
  const totalPages = commentsList.data('total-pages');
  const prevCount = 0;
  const nextCount = totalPages + 1;
  const gapText = '&hellip;';

  \$('.grade-stars').rating();

  prestashop.on('updatedProduct', function() {
    \$('.product-comments-additional-info .grade-stars').rating();
  })

  document.addEventListener('updateRating', function() {
    \$('.grade-stars').rating();
  });

  const updateCommentPostErrorModal = \$('#update-comment-usefulness-post-error');

  const confirmAbuseModal = \$('#report-comment-confirmation');
  const reportCommentPostErrorModal = \$('#report-comment-post-error');
  const reportCommentPostedModal = \$('#report-comment-posted');

  function showUpdatePostCommentErrorModal(errorMessage) {
    \$('#update-comment-usefulness-post-error-message').html(errorMessage);
    updateCommentPostErrorModal.modal('show');
  }

  function showReportCommentErrorModal(errorMessage) {
    \$('#report-comment-post-error-message').html(errorMessage);
    reportCommentPostErrorModal.modal('show');
  }

  async function fetchComments(page) {  
    let response = await fetch(commentsListUrl + \"&page=\" + page);

    if (response.status === 200) {
        let data = await response.text();
        populateComments((JSON.parse(data)).comments);
    }
  }
  
  \$(pagesListId + ' li').on('click',
    function() {
      let oldCount = commentsList.data('current-page');
      let newCount = \$(this).index();
      
      if (newCount === prevCount) {  // click prev
        newCount = oldCount - 1;
        if (newCount <= 0) return;
      }
      if (newCount === nextCount) { // click next
        newCount = oldCount + 1;
        if (newCount >= nextCount) return;
      }
      
      \$(`\${pageIdPrefix}\${oldCount} span`).removeClass('current');
      \$(`\${pageIdPrefix}\${oldCount}`).removeClass('active');
      
      fetchComments(newCount); // fetch new page's comments                  

      \$(`\${pageIdPrefix}\${newCount}`).addClass('active');
      \$(`\${pageIdPrefix}\${newCount} span`).addClass('current');
      
      \$(`\${pageIdPrefix}\${newCount} span`).html(newCount);
      commentsList.data('current-page', newCount);      

      if (newCount === 1) // disable prev
        \$(`\${pageIdPrefix}\${prevCount}`).addClass('disabled');
      else   
        \$(`\${pageIdPrefix}\${prevCount}`).removeClass('disabled');

      if (newCount === totalPages)  // disable next
        \$(`\${pageIdPrefix}\${nextCount}`).addClass('disabled');
      else
        \$(`\${pageIdPrefix}\${nextCount}`).removeClass('disabled');

      // long list with over 9 pages      
      if (9 <= totalPages) {        
        generateGap(newCount, prevCount);
        generateGap(newCount, nextCount);
      }
    }
  )

  function generateGap(start, stop) {
    if (start == stop)
      return 0;
    let step = (start < stop) ? +1 : -1;
    let i = start + step;  
    if (4 < Math.abs(stop - start)) {
      \$(`\${pageIdPrefix}\${i}`).removeClass('hidden').removeClass('disabled');
      \$(`\${pageIdPrefix}\${i} span`).html(i);
      i = i + step;
      \$(`\${pageIdPrefix}\${i}`).removeClass('hidden').removeClass('disabled');
      \$(`\${pageIdPrefix}\${i} span`).html(gapText);
      i = i + step;
      for (; i != stop - 2*step; i = i + step) {
        \$(`\${pageIdPrefix}\${i}`).addClass('hidden');
      }  
    }
    else {
      for (; i != stop; i = i + step) {        
        \$(`\${pageIdPrefix}\${i}`).removeClass('hidden').removeClass('disabled');
        \$(`\${pageIdPrefix}\${i} span`).html(i);        
      }          
    } 
  }

  function populateComments(comments) {
    commentsList.html('');
    comments.forEach(addComment);
  }

  function addComment(comment) {
    var commentTemplate = commentPrototype;
    var customerName = comment.customer_name;
    if (!customerName) {
      customerName = comment.firstname+' '+comment.lastname;
    }
    commentTemplate = commentTemplate.replace(/@COMMENT_ID@/, comment.id_product_comment);
    commentTemplate = commentTemplate.replace(/@PRODUCT_ID@/, comment.id_product);
    commentTemplate = commentTemplate.replace(/@CUSTOMER_NAME@/, customerName);
    commentTemplate = commentTemplate.replace(/@COMMENT_DATE@/, comment.date_add);
    commentTemplate = commentTemplate.replace(/@COMMENT_TITLE@/, comment.title);
    commentTemplate = commentTemplate.replace(/@COMMENT_COMMENT@/, comment.content);
    commentTemplate = commentTemplate.replace(/@COMMENT_USEFUL_ADVICES@/, comment.usefulness);
    commentTemplate = commentTemplate.replace(/@COMMENT_GRADE@/, comment.grade);
    commentTemplate = commentTemplate.replace(/@COMMENT_NOT_USEFUL_ADVICES@/, (comment.total_usefulness - comment.usefulness));
    commentTemplate = commentTemplate.replace(/@COMMENT_TOTAL_ADVICES@/, comment.total_usefulness);

    const \$comment = \$(commentTemplate);
    \$('.grade-stars', \$comment).rating({
      grade: comment.grade
    });
    \$('.useful-review', \$comment).click(function() {
      updateCommentUsefulness(\$comment, comment.id_product_comment, 1);
    });
    \$('.not-useful-review', \$comment).click(function() {
      updateCommentUsefulness(\$comment, comment.id_product_comment, 0);
    });
    \$('.report-abuse', \$comment).click(function() {
      confirmCommentAbuse(comment.id_product_comment);
    });

    commentsList.append(\$comment);
  }

  async function updateCommentUsefulness(\$comment, commentId, usefulness) {
    try {
      const response = await fetch(updateCommentUsefulnessUrl, {
        method: \"POST\",
        headers: {
          \"Content-Type\": \"application/x-www-form-urlencoded\",
        },
        body: \"id_product_comment=\" + commentId + \"&usefulness=\" + usefulness,
      });

      if (response.status === 200) {        
        const jsonData = await response.json();
        if (jsonData.success) {
          \$('.useful-review-value', \$comment).html(jsonData.usefulness);
          \$('.not-useful-review-value', \$comment).html(jsonData.total_usefulness - jsonData.usefulness);
        } else {
          const decodedErrorMessage = \$(\"<div/>\").html(jsonData.error).text();
          showUpdatePostCommentErrorModal(decodedErrorMessage);
        }
      } else {
        showUpdatePostCommentErrorModal(productCommentUpdatePostErrorMessage);
      }
    } catch (error) {
      showUpdatePostCommentErrorModal(error);
    }
  }

  function confirmCommentAbuse(commentId) {
    confirmAbuseModal.modal('show');
    confirmAbuseModal.one('modal:confirm', function(event, confirm) {
      if (!confirm) {
        return;
      }
      confirmCommentAbuseFetch(commentId);
    })
  }

  async function confirmCommentAbuseFetch(commentId) {
    try {
      const response = await fetch(reportCommentUrl, {
        method: \"POST\",
        headers: {
          \"Content-Type\": \"application/x-www-form-urlencoded\",
        },        
        body: \"id_product_comment=\" + commentId,
      });

      if (response.status === 200) {        
        const jsonData = await response.json();
        if (jsonData.success) {
          reportCommentPostedModal.modal('show');
        } else {
          showReportCommentErrorModal(jsonData.error);
        }
      } else {
        showReportCommentErrorModal(productCommentAbuseReportErrorMessage);
      }
    } catch (error) {
      showReportCommentErrorModal(error);
    }
  }

  if (totalPages <= 1)
    \$(pagesListId).hide();
    
  if (totalPages > 0) {
    emptyProductComment.hide();
    \$(`\${pageIdPrefix}1`).trigger('click');    
  }  
});
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/views/js/list-comments.js";
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
  const commentsList = \$('#product-comments-list');
  const emptyProductComment = \$('#empty-product-comment');
  const commentsListUrl = commentsList.data('list-comments-url');
  const updateCommentUsefulnessUrl = commentsList.data('update-comment-usefulness-url');
  const reportCommentUrl = commentsList.data('report-comment-url');
  const commentPrototype = commentsList.data('comment-item-prototype');

  const pagesListId = '#product-comments-list-pagination';
  const pageIdPrefix = '#pcl_page_';
  const totalPages = commentsList.data('total-pages');
  const prevCount = 0;
  const nextCount = totalPages + 1;
  const gapText = '&hellip;';

  \$('.grade-stars').rating();

  prestashop.on('updatedProduct', function() {
    \$('.product-comments-additional-info .grade-stars').rating();
  })

  document.addEventListener('updateRating', function() {
    \$('.grade-stars').rating();
  });

  const updateCommentPostErrorModal = \$('#update-comment-usefulness-post-error');

  const confirmAbuseModal = \$('#report-comment-confirmation');
  const reportCommentPostErrorModal = \$('#report-comment-post-error');
  const reportCommentPostedModal = \$('#report-comment-posted');

  function showUpdatePostCommentErrorModal(errorMessage) {
    \$('#update-comment-usefulness-post-error-message').html(errorMessage);
    updateCommentPostErrorModal.modal('show');
  }

  function showReportCommentErrorModal(errorMessage) {
    \$('#report-comment-post-error-message').html(errorMessage);
    reportCommentPostErrorModal.modal('show');
  }

  async function fetchComments(page) {  
    let response = await fetch(commentsListUrl + \"&page=\" + page);

    if (response.status === 200) {
        let data = await response.text();
        populateComments((JSON.parse(data)).comments);
    }
  }
  
  \$(pagesListId + ' li').on('click',
    function() {
      let oldCount = commentsList.data('current-page');
      let newCount = \$(this).index();
      
      if (newCount === prevCount) {  // click prev
        newCount = oldCount - 1;
        if (newCount <= 0) return;
      }
      if (newCount === nextCount) { // click next
        newCount = oldCount + 1;
        if (newCount >= nextCount) return;
      }
      
      \$(`\${pageIdPrefix}\${oldCount} span`).removeClass('current');
      \$(`\${pageIdPrefix}\${oldCount}`).removeClass('active');
      
      fetchComments(newCount); // fetch new page's comments                  

      \$(`\${pageIdPrefix}\${newCount}`).addClass('active');
      \$(`\${pageIdPrefix}\${newCount} span`).addClass('current');
      
      \$(`\${pageIdPrefix}\${newCount} span`).html(newCount);
      commentsList.data('current-page', newCount);      

      if (newCount === 1) // disable prev
        \$(`\${pageIdPrefix}\${prevCount}`).addClass('disabled');
      else   
        \$(`\${pageIdPrefix}\${prevCount}`).removeClass('disabled');

      if (newCount === totalPages)  // disable next
        \$(`\${pageIdPrefix}\${nextCount}`).addClass('disabled');
      else
        \$(`\${pageIdPrefix}\${nextCount}`).removeClass('disabled');

      // long list with over 9 pages      
      if (9 <= totalPages) {        
        generateGap(newCount, prevCount);
        generateGap(newCount, nextCount);
      }
    }
  )

  function generateGap(start, stop) {
    if (start == stop)
      return 0;
    let step = (start < stop) ? +1 : -1;
    let i = start + step;  
    if (4 < Math.abs(stop - start)) {
      \$(`\${pageIdPrefix}\${i}`).removeClass('hidden').removeClass('disabled');
      \$(`\${pageIdPrefix}\${i} span`).html(i);
      i = i + step;
      \$(`\${pageIdPrefix}\${i}`).removeClass('hidden').removeClass('disabled');
      \$(`\${pageIdPrefix}\${i} span`).html(gapText);
      i = i + step;
      for (; i != stop - 2*step; i = i + step) {
        \$(`\${pageIdPrefix}\${i}`).addClass('hidden');
      }  
    }
    else {
      for (; i != stop; i = i + step) {        
        \$(`\${pageIdPrefix}\${i}`).removeClass('hidden').removeClass('disabled');
        \$(`\${pageIdPrefix}\${i} span`).html(i);        
      }          
    } 
  }

  function populateComments(comments) {
    commentsList.html('');
    comments.forEach(addComment);
  }

  function addComment(comment) {
    var commentTemplate = commentPrototype;
    var customerName = comment.customer_name;
    if (!customerName) {
      customerName = comment.firstname+' '+comment.lastname;
    }
    commentTemplate = commentTemplate.replace(/@COMMENT_ID@/, comment.id_product_comment);
    commentTemplate = commentTemplate.replace(/@PRODUCT_ID@/, comment.id_product);
    commentTemplate = commentTemplate.replace(/@CUSTOMER_NAME@/, customerName);
    commentTemplate = commentTemplate.replace(/@COMMENT_DATE@/, comment.date_add);
    commentTemplate = commentTemplate.replace(/@COMMENT_TITLE@/, comment.title);
    commentTemplate = commentTemplate.replace(/@COMMENT_COMMENT@/, comment.content);
    commentTemplate = commentTemplate.replace(/@COMMENT_USEFUL_ADVICES@/, comment.usefulness);
    commentTemplate = commentTemplate.replace(/@COMMENT_GRADE@/, comment.grade);
    commentTemplate = commentTemplate.replace(/@COMMENT_NOT_USEFUL_ADVICES@/, (comment.total_usefulness - comment.usefulness));
    commentTemplate = commentTemplate.replace(/@COMMENT_TOTAL_ADVICES@/, comment.total_usefulness);

    const \$comment = \$(commentTemplate);
    \$('.grade-stars', \$comment).rating({
      grade: comment.grade
    });
    \$('.useful-review', \$comment).click(function() {
      updateCommentUsefulness(\$comment, comment.id_product_comment, 1);
    });
    \$('.not-useful-review', \$comment).click(function() {
      updateCommentUsefulness(\$comment, comment.id_product_comment, 0);
    });
    \$('.report-abuse', \$comment).click(function() {
      confirmCommentAbuse(comment.id_product_comment);
    });

    commentsList.append(\$comment);
  }

  async function updateCommentUsefulness(\$comment, commentId, usefulness) {
    try {
      const response = await fetch(updateCommentUsefulnessUrl, {
        method: \"POST\",
        headers: {
          \"Content-Type\": \"application/x-www-form-urlencoded\",
        },
        body: \"id_product_comment=\" + commentId + \"&usefulness=\" + usefulness,
      });

      if (response.status === 200) {        
        const jsonData = await response.json();
        if (jsonData.success) {
          \$('.useful-review-value', \$comment).html(jsonData.usefulness);
          \$('.not-useful-review-value', \$comment).html(jsonData.total_usefulness - jsonData.usefulness);
        } else {
          const decodedErrorMessage = \$(\"<div/>\").html(jsonData.error).text();
          showUpdatePostCommentErrorModal(decodedErrorMessage);
        }
      } else {
        showUpdatePostCommentErrorModal(productCommentUpdatePostErrorMessage);
      }
    } catch (error) {
      showUpdatePostCommentErrorModal(error);
    }
  }

  function confirmCommentAbuse(commentId) {
    confirmAbuseModal.modal('show');
    confirmAbuseModal.one('modal:confirm', function(event, confirm) {
      if (!confirm) {
        return;
      }
      confirmCommentAbuseFetch(commentId);
    })
  }

  async function confirmCommentAbuseFetch(commentId) {
    try {
      const response = await fetch(reportCommentUrl, {
        method: \"POST\",
        headers: {
          \"Content-Type\": \"application/x-www-form-urlencoded\",
        },        
        body: \"id_product_comment=\" + commentId,
      });

      if (response.status === 200) {        
        const jsonData = await response.json();
        if (jsonData.success) {
          reportCommentPostedModal.modal('show');
        } else {
          showReportCommentErrorModal(jsonData.error);
        }
      } else {
        showReportCommentErrorModal(productCommentAbuseReportErrorMessage);
      }
    } catch (error) {
      showReportCommentErrorModal(error);
    }
  }

  if (totalPages <= 1)
    \$(pagesListId).hide();
    
  if (totalPages > 0) {
    emptyProductComment.hide();
    \$(`\${pageIdPrefix}1`).trigger('click');    
  }  
});
", "@Modules/productcomments/views/js/list-comments.js", "/var/www/html/modules/productcomments/views/js/list-comments.js");
    }
}
