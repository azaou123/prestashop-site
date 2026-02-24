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

/* @Modules/productcomments/views/js/productListingComments.js */
class __TwigTemplate_7e4a0533009d92488a22308f1a48f9b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/js/productListingComments.js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/productcomments/views/js/productListingComments.js"));

        // line 1
        echo "/**
 * 2007-2019 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */


\$(document).ready(function() {
    productListingComments.init();
    productListingComments.load();
});


var productListingComments = (function () {

    var data = {
        productIDs: [],
        commentsLoadingInProgress: false,
        ajaxIDsLimit: 50,
        ajaxUrl: ''
    }

    var DOMStrings = {
        productListReviewsContainer: '.product-list-reviews',
        productListReviewsNumberOfComments: '.comments-nb',
        productListReviewsStarsContainer: '.grade-stars',
        productContainer: '.js-product-miniature'
    };

    var DOMClasses =  {
        inProgress: 'reviews-loading',
        reviewsLoaded: 'reviews-loaded',
        hasReviews: 'has-reviews'
    };

    function setEvents() {
        prestashop.on('updateProductList', function() {
            addProductsIDs();
        });
    }


    function setAjaxUrl() {
        if (data.ajaxUrl !== '')
            return;

        var url = \$(DOMStrings.productListReviewsContainer).first().data('url');
        data.ajaxUrl = url;
    }

    function getNewProductsReviewsElements() {
        var \$productListReviews = \$(DOMStrings.productContainer)
            .not('.' + DOMClasses.reviewsLoaded + ', .' + DOMClasses.inProgress)
            .addClass(DOMClasses.inProgress)
            .find(DOMStrings.productListReviewsContainer);

        return \$productListReviews;
    }

    function addProductsIDs() {

        var \$productsList = getNewProductsReviewsElements(),
            seenIds = {};

        \$productsList.each(function () {
            var id = \$(this).data('id');
            seenIds[id] = true;
        });


        var IDsArray = Object.keys(seenIds).filter(e => e !== 'undefined');
        var prevDataIDs = data.productIDs.splice(0);
        data.productIDs = prevDataIDs.concat(IDsArray);

        if (!data.commentsLoadingInProgress) {
            loadProductsData();
        }
    }

    function loadProductsData() {
        if (data.productIDs.length === 0)
            return;

        data.commentsLoadingInProgress = true;

        var dataIDsCopy = data.productIDs.slice(0);
            selectedProductIDs = dataIDsCopy.splice(0, data.ajaxIDsLimit);


        \$.get(data.ajaxUrl, { id_products: selectedProductIDs }, function (jsonData) {
            if (jsonData) {
                \$.each(jsonData.products, function(i, elem) {
                    var productData = elem;
                    var \$productsReviewsContainer = \$('.product-list-reviews[data-id=\"' + productData.id_product + '\"]');

                    \$productsReviewsContainer.each(function () {
                        var \$self = \$(this);

                        if (productData.comments_nb > 0) {
                            \$self.find(DOMStrings.productListReviewsStarsContainer).rating({ grade: productData.average_grade, starWidth: 16 });
                            \$self.find(DOMStrings.productListReviewsNumberOfComments).text('(' + productData.comments_nb + ')');
                            \$self.closest(DOMStrings.productContainer).addClass(DOMClasses.hasReviews);
                            \$self.css('visibility', 'visible');
                        }

                        \$self.closest(DOMStrings.productContainer).addClass(DOMClasses.reviewsLoaded);
                        \$self.closest(DOMStrings.productContainer).removeClass(DOMClasses.inProgress);

                    });
                    data.productIDs.shift();
                });

                data.commentsLoadingInProgress = false;
                if (data.productIDs.length > 0) {
                    loadProductsData();
                }

            }
        });
    }


    return {
        load: function () {
            addProductsIDs();
        },
        init: function () {
            setAjaxUrl();
            setEvents();
        }
    }
})();
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/productcomments/views/js/productListingComments.js";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/**
 * 2007-2019 PrestaShop SA and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */


\$(document).ready(function() {
    productListingComments.init();
    productListingComments.load();
});


var productListingComments = (function () {

    var data = {
        productIDs: [],
        commentsLoadingInProgress: false,
        ajaxIDsLimit: 50,
        ajaxUrl: ''
    }

    var DOMStrings = {
        productListReviewsContainer: '.product-list-reviews',
        productListReviewsNumberOfComments: '.comments-nb',
        productListReviewsStarsContainer: '.grade-stars',
        productContainer: '.js-product-miniature'
    };

    var DOMClasses =  {
        inProgress: 'reviews-loading',
        reviewsLoaded: 'reviews-loaded',
        hasReviews: 'has-reviews'
    };

    function setEvents() {
        prestashop.on('updateProductList', function() {
            addProductsIDs();
        });
    }


    function setAjaxUrl() {
        if (data.ajaxUrl !== '')
            return;

        var url = \$(DOMStrings.productListReviewsContainer).first().data('url');
        data.ajaxUrl = url;
    }

    function getNewProductsReviewsElements() {
        var \$productListReviews = \$(DOMStrings.productContainer)
            .not('.' + DOMClasses.reviewsLoaded + ', .' + DOMClasses.inProgress)
            .addClass(DOMClasses.inProgress)
            .find(DOMStrings.productListReviewsContainer);

        return \$productListReviews;
    }

    function addProductsIDs() {

        var \$productsList = getNewProductsReviewsElements(),
            seenIds = {};

        \$productsList.each(function () {
            var id = \$(this).data('id');
            seenIds[id] = true;
        });


        var IDsArray = Object.keys(seenIds).filter(e => e !== 'undefined');
        var prevDataIDs = data.productIDs.splice(0);
        data.productIDs = prevDataIDs.concat(IDsArray);

        if (!data.commentsLoadingInProgress) {
            loadProductsData();
        }
    }

    function loadProductsData() {
        if (data.productIDs.length === 0)
            return;

        data.commentsLoadingInProgress = true;

        var dataIDsCopy = data.productIDs.slice(0);
            selectedProductIDs = dataIDsCopy.splice(0, data.ajaxIDsLimit);


        \$.get(data.ajaxUrl, { id_products: selectedProductIDs }, function (jsonData) {
            if (jsonData) {
                \$.each(jsonData.products, function(i, elem) {
                    var productData = elem;
                    var \$productsReviewsContainer = \$('.product-list-reviews[data-id=\"' + productData.id_product + '\"]');

                    \$productsReviewsContainer.each(function () {
                        var \$self = \$(this);

                        if (productData.comments_nb > 0) {
                            \$self.find(DOMStrings.productListReviewsStarsContainer).rating({ grade: productData.average_grade, starWidth: 16 });
                            \$self.find(DOMStrings.productListReviewsNumberOfComments).text('(' + productData.comments_nb + ')');
                            \$self.closest(DOMStrings.productContainer).addClass(DOMClasses.hasReviews);
                            \$self.css('visibility', 'visible');
                        }

                        \$self.closest(DOMStrings.productContainer).addClass(DOMClasses.reviewsLoaded);
                        \$self.closest(DOMStrings.productContainer).removeClass(DOMClasses.inProgress);

                    });
                    data.productIDs.shift();
                });

                data.commentsLoadingInProgress = false;
                if (data.productIDs.length > 0) {
                    loadProductsData();
                }

            }
        });
    }


    return {
        load: function () {
            addProductsIDs();
        },
        init: function () {
            setAjaxUrl();
            setEvents();
        }
    }
})();
", "@Modules/productcomments/views/js/productListingComments.js", "/var/www/html/modules/productcomments/views/js/productListingComments.js");
    }
}
