<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
<footer class="site-footer">
                  <div class="layout-container">
                     <div class="site-footer__top full-footer footerTrIm clearfix">
                        <div class="container-max-width clearfix">
                           <div class="footer-wrapper">
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 footer-links-section">
                                    <div class="region region-footer-first">
                                       <div id="block-footersociallinks">
                                          <div class="field field--name-body field--type-text-with-summary field--label-hidden field--item">
                                             <div class="mobile-center-wrapper">
                                            
                                                <div class="footer-logo"> <?php
                                                      if(function_exists(the_custom_logo('logo-img'))){
                                                         $custom_logo_id = get_theme_mod('custom-logo');
                                                         $logo_id = wp_get_attachment_image_src($custom_logo_id);
                                                      }
                                                      ?></div>
                                                <div class="social-links"><span><a href="https://www.linkedin.com/company/vanguard-charitable" target="_blank"><img alt="altLinkedIN" data-entity-type="file" data-entity-uuid="6ced087b-69cd-4c96-9c26-f40171302884" height="20px" src="//cdn.vcapps.org/sites/default/files/inline-images/linkedin.png" width="20px" /></a></span><span class="social-follow-linkedin"><a href="https://www.linkedin.com/company/vanguard-charitable" style="color: #b6bdbd;font-size: 12px;line-height: 1.42;" target="_blank">Follow us on LinkedIn</a></span></div>
                                                <div class="copyright"><span>© </span>2021 Vanguard Charitable Endowment Program</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 footer-links-section">
                                    <div class="row">
                                       <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 footer-links">
                                          <div class="region region-footer-second">
                                             <nav role="navigation" aria-labelledby="block-secondaryfooter-menu" class="block-secondaryfootercustom-nav-menu" id="block-secondaryfooter">
                                                <h2 class="visually-hidden" id="block-secondaryfooter-menu"> Secondary footer</h2>
                                                <ul class="menu menu--secondary-footer nav">
                                                   <li class="first"><a href="/about-us" data-drupal-link-system-path="node/473">About Us</a></li>
                                                   <li><a href="#">Careers</a></li>
                                                   <li><a href="#">FAQs</a></li>
                                                   <li><a href="#">Contact Us</a></li>
                                                   <li><a href="#">Giving Matters Blog</a></li>
                                                   <li><a href="#">News &amp; Events</a></li>
                                                   <li class="last"><a href="#">Newsroom</a></li>
                                                </ul>
                                             </nav>
                                          </div>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 footer-links">
                                          <div class="region region-footer-third">
                                             <nav role="navigation" aria-labelledby="block-vc-ole-footer-menu" class="block-vc-ole-footercustom-nav-menu" id="block-vc-ole-footer">
                                                <h2 class="visually-hidden" id="block-vc-ole-footer-menu"> Footer menu</h2>
                                                <ul class="menu menu--footer nav">
                                                   <li class="first"><a href="#" data-drupal-link-system-path="node/281">Terms &amp; Conditions</a></li>
                                                   <li><a href="#">Sitemap</a></li>
                                                   <li><a href="#">Forms</a></li>
                                                   <li><a href="#">Request Literature</a></li>
                                                   <li><a href="#">Policies &amp; Guidelines</a></li>
                                                   <li><a href="#">Privacy Policy</a></li>
                                                   <li class="last"><a href="#">Company Policies</a></li>
                                                </ul>
                                             </nav>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                        <a id="scroll"><span></span></a>
                        <div class="compare-btn-parent"><a id="compare-button"><span>Compare</span><span class="numberofitems"></span></a><a id="compare-button-clear"><span>Clear</span></a></div>
                     </div>
                     <div class="site-footer__bottom">
                        <div class="container-max-width">
                           <div class="region region-footer-bottom">
                              <div id="block-footerbottomcopyright">
                                 <div class="field field--name-body field--type-text-with-summary field--label-hidden field--item">
                                    <div class="footer-bottom-img">
                                    <div class="footer-logo"> 
                                       <div contenteditable="false" tabindex="-1"><img alt="Vanguard" data-entity-type="file" data-entity-uuid="87f94025-e7f8-4481-84ce-2c75b1a836b3" height="46px" src="<?php the_post_thumbnail_url()?>" width="162px" class="align-center" /></div>
                                    </div>
                                    <div class="footer-bottom-txt"><span>© 2021 </span>Vanguard Charitable Endowment Program. VANGUARD is a trademark of The Vanguard Group, Inc.</div>
                                    <div class="footer-bottom-txt body-title">Vanguard Charitable is an independent, registered 501(c)(3). We are proud to be founded by Vanguard.</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </footer>
            </div>
         </div>
      </div>
      <?php endwhile; endif;?>
      <?php
      wp_footer();
      ?>
   </body>
</html>