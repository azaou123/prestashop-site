<?php
/* Smarty version 4.3.4, created on 2026-02-24 06:25:08
  from 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_699d3634560570_12631923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproductsviewstemplateshookps_featuredproducts.tpl',
      1 => 1750078354,
      2 => 'module',
    ),
    'd406fae3949f13d1323633970369b6224a3219b8' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/section-title.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '479484f03757e9bc99ab986acb6b6d71172fc289' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/productlist.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '98437dc18b083b5462418d39da99c609f2c47346' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '2c9b6a5b423d8795aa110426efd423a8b892a0bb' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/product-flags.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '2e2adb7a7ecc21eac9a4e12e490c1a04bef8d138' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/catalog/_partials/variant-links.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
    '85bd82ee12f29a4d3595fd3ca8f7abe4aa05cb94' => 
    array (
      0 => '/var/www/html/themes/hummingbird/templates/components/qty-input.tpl',
      1 => 1750078354,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_699d3634560570_12631923 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/hummingbird/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><section class="featured-products">
  <div class="container">
    

  <h2 class="h2 section-title">Produits populaires</h2>

    
<div class="products row">
      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="1"
    data-id-product-attribute="1"
  >
    <div class="card">
      <a href="http://localhost:8085/hommes/1-1-hummingbird-printed-t-shirt.html#/1-taille-s/8-couleur-blanc" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge discount">-20%</li>
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/1-default_xs/hummingbird-printed-t-shirt.jpg 120w,
                    http://localhost:8085/1-default_m/hummingbird-printed-t-shirt.jpg 200w,
                    http://localhost:8085/1-default_md/hummingbird-printed-t-shirt.jpg 320w,
                    http://localhost:8085/1-product_main/hummingbird-printed-t-shirt.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/1-default_md/hummingbird-printed-t-shirt.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="T-shirt imprimé colibri"
                  title="T-shirt imprimé colibri"
                  data-full-size-image-url="http://localhost:8085/1-home_default/hummingbird-printed-t-shirt.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/hommes/1-1-hummingbird-printed-t-shirt.html#/1-taille-s/8-couleur-blanc"><p class="product-miniature__title">T-shirt imprimé colibri</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                                  <div class="variant-links">
      <a href="http://localhost:8085/hommes/1-3-hummingbird-printed-t-shirt.html#/2-taille-m/8-couleur-blanc"
       class="color"
       title="Blanc"
       aria-label="Blanc"
       style="background-color: #ffffff"    ></a>
      <a href="http://localhost:8085/hommes/1-2-hummingbird-printed-t-shirt.html#/1-taille-s/11-couleur-noir"
       class="color"
       title="Noir"
       aria-label="Noir"
       style="background-color: #434A54"    ></a>
  
  <span class="js-count count"></span>
</div>
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="1" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              22,94 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                          

                      <span class="product-miniature__regular-price" aria-label="Prix de base">28,68 €</span>
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="1" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_1"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="2"
    data-id-product-attribute="9"
  >
    <div class="card">
      <a href="http://localhost:8085/femmes/2-9-brown-bear-printed-sweater.html#/1-taille-s" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge discount">-20%</li>
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/21-default_xs/brown-bear-printed-sweater.jpg 120w,
                    http://localhost:8085/21-default_m/brown-bear-printed-sweater.jpg 200w,
                    http://localhost:8085/21-default_md/brown-bear-printed-sweater.jpg 320w,
                    http://localhost:8085/21-product_main/brown-bear-printed-sweater.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/21-default_md/brown-bear-printed-sweater.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Pull imprimé ours brun"
                  title="Pull imprimé ours brun"
                  data-full-size-image-url="http://localhost:8085/21-home_default/brown-bear-printed-sweater.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/femmes/2-9-brown-bear-printed-sweater.html#/1-taille-s"><p class="product-miniature__title">Pull imprimé colibri</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="2" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              34,46 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                          

                      <span class="product-miniature__regular-price" aria-label="Prix de base">43,08 €</span>
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="2" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_2"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="3"
    data-id-product-attribute="13"
  >
    <div class="card">
      <a href="http://localhost:8085/art/3-13-affiche-encadree-the-best-is-yet-to-come.html#/19-dimension-40x60cm" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/3-default_xs/affiche-encadree-the-best-is-yet-to-come.jpg 120w,
                    http://localhost:8085/3-default_m/affiche-encadree-the-best-is-yet-to-come.jpg 200w,
                    http://localhost:8085/3-default_md/affiche-encadree-the-best-is-yet-to-come.jpg 320w,
                    http://localhost:8085/3-product_main/affiche-encadree-the-best-is-yet-to-come.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/3-default_md/affiche-encadree-the-best-is-yet-to-come.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Affiche encadrée The best is yet to come"
                  title="Affiche encadrée The best is yet to come"
                  data-full-size-image-url="http://localhost:8085/3-home_default/affiche-encadree-the-best-is-yet-to-come.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/art/3-13-affiche-encadree-the-best-is-yet-to-come.html#/19-dimension-40x60cm"><p class="product-miniature__title">Affiche encadrée The best is yet to come</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="3" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              34,80 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="3" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_3"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="4"
    data-id-product-attribute="16"
  >
    <div class="card">
      <a href="http://localhost:8085/art/4-16-affiche-encadree-the-adventure-begins.html#/19-dimension-40x60cm" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/4-default_xs/affiche-encadree-the-adventure-begins.jpg 120w,
                    http://localhost:8085/4-default_m/affiche-encadree-the-adventure-begins.jpg 200w,
                    http://localhost:8085/4-default_md/affiche-encadree-the-adventure-begins.jpg 320w,
                    http://localhost:8085/4-product_main/affiche-encadree-the-adventure-begins.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/4-default_md/affiche-encadree-the-adventure-begins.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Affiche encadrée The adventure begins"
                  title="Affiche encadrée The adventure begins"
                  data-full-size-image-url="http://localhost:8085/4-home_default/affiche-encadree-the-adventure-begins.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/art/4-16-affiche-encadree-the-adventure-begins.html#/19-dimension-40x60cm"><p class="product-miniature__title">Affiche encadrée The adventure begins</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="4" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              34,80 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="4" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_4"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="5"
    data-id-product-attribute="19"
  >
    <div class="card">
      <a href="http://localhost:8085/art/5-19-affiche-encadree-today-is-a-good-day.html#/19-dimension-40x60cm" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/5-default_xs/affiche-encadree-today-is-a-good-day.jpg 120w,
                    http://localhost:8085/5-default_m/affiche-encadree-today-is-a-good-day.jpg 200w,
                    http://localhost:8085/5-default_md/affiche-encadree-today-is-a-good-day.jpg 320w,
                    http://localhost:8085/5-product_main/affiche-encadree-today-is-a-good-day.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/5-default_md/affiche-encadree-today-is-a-good-day.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Affiche encadrée Today is a good day"
                  title="Affiche encadrée Today is a good day"
                  data-full-size-image-url="http://localhost:8085/5-home_default/affiche-encadree-today-is-a-good-day.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/art/5-19-affiche-encadree-today-is-a-good-day.html#/19-dimension-40x60cm"><p class="product-miniature__title">Affiche encadrée Today is a good day</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="5" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              34,80 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="5" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_5"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="6"
    data-id-product-attribute="0"
  >
    <div class="card">
      <a href="http://localhost:8085/accessoires-de-maison/6-mug-the-best-is-yet-to-come.html" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/6-default_xs/mug-the-best-is-yet-to-come.jpg 120w,
                    http://localhost:8085/6-default_m/mug-the-best-is-yet-to-come.jpg 200w,
                    http://localhost:8085/6-default_md/mug-the-best-is-yet-to-come.jpg 320w,
                    http://localhost:8085/6-product_main/mug-the-best-is-yet-to-come.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/6-default_md/mug-the-best-is-yet-to-come.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Mug The best is yet to come"
                  title="Mug The best is yet to come"
                  data-full-size-image-url="http://localhost:8085/6-home_default/mug-the-best-is-yet-to-come.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/accessoires-de-maison/6-mug-the-best-is-yet-to-come.html"><p class="product-miniature__title">Mug The best is yet to come</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="6" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              14,28 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="6" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_6"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="7"
    data-id-product-attribute="0"
  >
    <div class="card">
      <a href="http://localhost:8085/accessoires-de-maison/7-mug-the-adventure-begins.html" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/7-default_xs/mug-the-adventure-begins.jpg 120w,
                    http://localhost:8085/7-default_m/mug-the-adventure-begins.jpg 200w,
                    http://localhost:8085/7-default_md/mug-the-adventure-begins.jpg 320w,
                    http://localhost:8085/7-product_main/mug-the-adventure-begins.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/7-default_md/mug-the-adventure-begins.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Mug The adventure begins"
                  title="Mug The adventure begins"
                  data-full-size-image-url="http://localhost:8085/7-home_default/mug-the-adventure-begins.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/accessoires-de-maison/7-mug-the-adventure-begins.html"><p class="product-miniature__title">Mug The adventure begins</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="7" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              14,28 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="7" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_7"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

      

  <article
    class="product-miniature js-product-miniature col-12 col-xs-6 col-lg-4 col-xl-3"
    data-id-product="8"
    data-id-product-attribute="0"
  >
    <div class="card">
      <a href="http://localhost:8085/accessoires-de-maison/8-mug-today-is-a-good-day.html" class="product-miniature__link">
        
  <ul class="product-flags js-product-flags">
          <li class="badge new">Nouveau</li>
      </ul>


        
          <div class="product-miniature__image-container thumbnail-container">
                          <picture>
                
                
                <img
                  class="product-miniature__image card-img-top"
                  srcset="
                    http://localhost:8085/8-default_xs/mug-today-is-a-good-day.jpg 120w,
                    http://localhost:8085/8-default_m/mug-today-is-a-good-day.jpg 200w,
                    http://localhost:8085/8-default_md/mug-today-is-a-good-day.jpg 320w,
                    http://localhost:8085/8-product_main/mug-today-is-a-good-day.jpg 720w"
                  sizes="(min-width: 1300px) 320px, (min-width: 768px) 120px, 50vw"
                  src="http://localhost:8085/8-default_md/mug-today-is-a-good-day.jpg"
                  width="320"
                  height="320"
                  loading="lazy"
                  alt="Mug Today is a good day"
                  title="Mug Today is a good day"
                  data-full-size-image-url="http://localhost:8085/8-home_default/mug-today-is-a-good-day.jpg"
                >
              </picture>
            
            
              <button class="product-miniature__quickview_touch btn js-quickview" data-link-action="quickview">
                <i class="material-icons">&#xE417;</i>
              </button>
            
          </div>
        
      </a>

      
        <div class="product-miniature__infos card-body">
          
            <div class="product-miniature__quickview">
              <button class="product-miniature__quickview_button btn btn-link js-quickview btn-with-icon" data-link-action="quickview">
                <i class="material-icons" aria-hidden="true">&#xE417;</i>
                Aperçu rapide
              </button>
            </div>
          

          <div class="product-miniature__infos__top">
            
              <a href="http://localhost:8085/accessoires-de-maison/8-mug-today-is-a-good-day.html"><p class="product-miniature__title">Mug Today is a good day</p></a>
            
          </div>

          <div class="product-miniature__infos__bottom">
            
              <div class="product-miniature__variants">
                              </div>
            

            
              
<!-- begin module:productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- begin /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->

<div class="product-list-reviews" data-id="8" data-url="http://localhost:8085/module/productcomments/CommentGrade">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<!-- end /var/www/html/modules/productcomments/views/templates/hook/product-list-reviews.tpl -->
<!-- end module:productcomments/views/templates/hook/product-list-reviews.tpl -->

            

            <div class="product-miniature__prices">
              
                                  

                  <span class="product-miniature__price" aria-label="Prix">
                                                              14,28 €
                                      </span>

                  

                  
                              

              
                                  <div class="product-miniature__discount-price">
                                      </div>
                              
            </div>

                          <form action="http://localhost:8085/panier" method="post" class="d-flex flex-wrap flex-md-nowrap gap-3 align-items-center mt-3">
                <input type="hidden" value="8" name="id_product">

                <input type="hidden" name="token" value="58de628f7242c70bdf11da4c04539457" />

                <div class="quantity-button js-quantity-button w-100 w-sm-auto">
                  

    
<div class="input-group flex-nowrap mb-0">
  <button role="button" aria-label="decrement" class="btn decrement js-decrement-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE15B;</i>
    <i class="material-icons confirmation d-none">&#xE5CD;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>

  <input
          id="quantity_wanted_8"
          value="1"
          min="1"
              class="form-control"
      name="qty"
      aria-label="Quantité"
      type="text"
      inputmode="numeric"
      pattern="[0-9]*"
      value="1"
      min="1"
      />

  <button role="button" aria-label="increment" class="btn increment js-increment-button" type="button">
    <i class="material-icons" aria-hidden="true">&#xE145;</i>
    <i class="material-icons confirmation d-none">&#xE5CA;</i>
    <div class="spinner-border spinner-border-sm align-middle d-none" role="status"></div>
  </button>
</div>
                </div>

                <button data-button-action="add-to-cart" class="btn btn-primary flex-grow-1 flex-md-grow-0">
                  <i class="material-icons" aria-hidden="true">&#xe854;</i>
                  <span class="visually-hidden">Ajouter au panier</span>
                </button>
              </form>
                      </div>
        </div>
      
    </div>
  </article>

  </div>
  </div>

  <div class="featured-products-footer text-center">
    <a class="all-product-link btn btn-outline-primary btn-with-icon" href="http://localhost:8085/2-accueil">
      Tous les produits
      <i class="material-icons rtl-flip" aria-hidden="true">&#xE315;</i>
    </a>
  </div>
</section>
<!-- end /var/www/html/themes/hummingbird/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }
}
