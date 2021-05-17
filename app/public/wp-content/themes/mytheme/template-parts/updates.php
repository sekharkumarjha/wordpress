<?php

/*
Template Name: Update and News Template
*/ 
?>

<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'Updates'
);
    $the_query = new WP_Query( $args );
?>
                                          
                                          <div>
                                             <div class="views-element-container form-group">
                                                <div class="view view-blogs-list view-id-blogs_list view-display-id-block_1 js-view-dom-id-1f70f0a6b40b46fba77480a0e663af230c9cfae6a76351c82bea0a12551fa8f6 container-max-width">
                                                   <div class="">
                                                      <div class = "blog-list-header">
                                                         <div class="view-header">
                                                            <h2>Don’t miss out on our updates</h2>
                                                         </div>
                                                         <div class="blogs-show-more-button">
                                                            <span>
                                                               <div class="more-link form-group"><a href="/blog">VIEW ALL POSTS</a></div>
                                                            </span>
                                                            <div class="new_custom_arrow lg"><span class="arrow_custom_line" style="background: #006778;"><span style="border: solid #006778;"></span></span></div>
                                                         </div>
                                                      </div>
                                                      <div class="view-content">
                                                         <div class="views-view-grid horizontal cols-3 clearfix">
                                                            <div>
                                                             <?php if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                                                               <div class="col-md-4 hm-blog-row" style="width: 33.333333333333%;">
                                                                  <div class="views-field views-field-field-blogs-image">
                                                                     <div class="field-content"><a href="/blog/qa-casey-marsh-chief-development-officer-feeding-america" hreflang="en"><img src="<?php the_post_thumbnail_url()?>" title="Leaf image" typeof="foaf:Image" class="img-responsive" /></a></div>
                                                                  </div>
                                                                  <div class="views-field views-field-title">
                                                                     <span class="field-content">
                                                                        <div class="blog-home"><?php the_title();?></div>
                                                                        <h4><a href="/blog/qa-casey-marsh-chief-development-officer-feeding-america" hreflang="en"><?php the_content(); ?></a></h4>
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                               
                                                               <?php endwhile;
                                                               endif;?>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'News'
);
    $the_query = new WP_Query( $args );
?>                                          
                                          <div>
                                             <div class="views-element-container form-group">
                                                <div class="view view-news-more view-id-news_more view-display-id-block_1 js-view-dom-id-9f83cb23fcb0956a1b9077fca9ae9b6f421863e25ac927c1991f0e23038db350 container-max-width news-more-layout-block-view-container">
                                                   <div class="">
                                                      <div class = "news-block-list-header">
                                                         <div class="view-header">
                                                            <h2>News and more</h2>
                                                         </div>
                                                         <div class="blogs-show-more-button">
                                                            <span>
                                                               <div class="more-link form-group"><a href="/news">VIEW ALL NEWS</a></div>
                                                            </span>
                                                            <div class="new_custom_arrow lg"><span class="arrow_custom_line" style="background: #006778;"><span style="border: solid #006778;"></span></span></div>
                                                         </div>
                                                      </div>
                                                      <div class="view-content">
                                                         <div id="views-bootstrap-news-more-block-1" class="grid views-view-grid horizontal">
                                                            <div class="row">
                                                            <?php if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                                                               <div class="col col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                                                                  <div class="views-field views-field-nothing">
                                                                     <span class="field-content">
                                                                        <div id="news-more-row-data-id">
                                                                           <h4><?php the_title();?></h4>
                                                                           <a href="/news/vanguard-charitable-appoints-new-board-members" hreflang="en">
                                                                              <div class="read-more-link">
                                                                                 <span class="field-content">Read More </span>
                                                                                 <div class="new_custom_arrow lg"><span class="arrow_custom_line"><span></span></span></div>
                                                                              </div>
                                                                           </a>
                                                                        </div>
                                                                     </span>
                                                                  </div>
                                                               </div>
                                                              
                                                               <?php endwhile;
                                                               endif;?>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div>
                                             <article data-history-node-id="517" role="article" about="/node/517" class="node node--type-backgroundimage-text-cta node--promoted node--view-mode-full clearfix">
                                                <div class="node__content clearfix">
                                                   <div class="hidden-xs hidden-sm">
                                                      <div class=" bg_image_type_2" role="presentation" style="background-image : url('//cdn.vcapps.org/sites/default/files/2019-11/Plain%20Footer%202x_0.png')">
                                                         <div class="container-max-width">
                                                            <div class="text-color-light width-768 left-align">
                                                               <h1 class="mB-T2B">Are you ready to open an account?</h1>
                                                               <div class="primaryCta flex pB-50 pT-30">
                                                                  <a class="flex-center link-center" title="YES, I AM" href="/open-an-account/consent" aria-label="/open-an-account/consent">
                                                                     <span>YES, I AM </span>
                                                                     <div class="new_arrow lg"><span class="arrow_line"><span></span></span></div>
                                                                  </a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="hidden-md hidden-lg">
                                                      <div class=" bg_image_type_2 " role="presentation" style="background-image : url('//cdn.vcapps.org/sites/default/files/2019-11/Plain%20Footer%20Mobile%202x.png')">
                                                         <div class="container-max-width">
                                                            <div class="text-color-light width-726 left-align">
                                                               <h1 class="mB-T2B">Are you ready to open an account?</h1>
                                                               <div class="primaryCta flex pT-30 pB-40">
                                                                  <a class="flex-center link-center" title="YES, I AM" href="/open-an-account/consent">
                                                                     <span>YES, I AM </span>
                                                                     <div class="new_arrow lg"><span class="arrow_line"><span></span></span></div>
                                                                  </a>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </article>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </article>
                           
                           </div>
                        </section>
                     </main>
                  </div>
               </div>