<?php

/*
Template Name: Banner Template
*/ 
?>

<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'Banner'
);
    $the_query = new WP_Query( $args );
?>
<?php if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
<?php endwhile;
endif;?>
<div class="region region-content">
    <article data-history-node-id="558" role="article" about="/home" class="node node--type-page-layout-manager node--view-mode-full clearfix">
        <header></header>
        <div class="node__content clearfix">
            <div class="layout layout--onecol">
                <div class="layout__region layout__region--content">
                    <div></div>
                    <div>
                        <div>
                        
                        <div class="hidden-xs hidden-sm background-height full-background-image-home mB-section" role="presentation" style="background-image : url('<?php the_post_thumbnail_url()?>')">
                                <div class="container-max-width">
                                    <div class="transparent-background">
                                        <div>
                                            <h1 class="pB-30">
                                                <p><?php the_title();?></p>
                                            </h1>
                                            <h4>
                                                <p><a href="#" style="color: #ffffff"><?php the_content();?><sup>TM</sup> pinpoints charities in the areas most affected by COVID-19</a></p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-md hidden-lg mB-section">
                            <div class="full-background-image-home-mobile ">
                                <div class="field field--name-field-banner-image-mobile field--type-image field--label-hidden field--item"><img src="//cdn.vcapps.org/sites/default/files/2020-10/navi_home_page_banner_mobile.png" width="720" height="448" alt="Introducing NAVi" title="Introducing NAVi" typeof="foaf:Image" class="img-responsive" /></div>
                            </div>
                            <div class="mobile-background">
                                <div class="container-max-width">
                                    <h1 class="pT-30">
                                        <p><?php the_title();?></p>
                                    </h1>
                                    <h4 class="pT-30 pB-30">
                                        <p><a href="/map" style="color: #ffffff"><?php the_content();?><sup>TM</sup> pinpoints charities in the areas most affected by COVID-19</a></p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <article data-history-node-id="801" role="article" about="/node/801" class="node node--type-simple-text node--promoted node--view-mode-full clearfix">
                            <div class="node__content clearfix">
                                <div class="">
                                    <div class="container-max-width">
                                        <div class="">
                                            <h1 id="home-page--covid-19-facts-title" class="mB-T2B ">Vanguard Charitable donors take action</h1>
                                            <div class="clearfix color-noneforP common-Font-Color mB-section whole-panel-body ">
                                                <div class="field field--name-field-body field--type-text-long field--label-hidden field--item">
                                                    <p><strong><?php the_date();?></strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div>
                        <div class="">
                            <div class="container-max-width">
                                <div class="row">
                                    <div id="contrib-amount">
                                        <div class="ca-block ">
                                            <div class="ca-title">Total grant dollars given</div>
                                            <div class="ca-color" style="background-color:#007FAB">
                                                <h2 class="ca-desc text-color-light">$1.8B</h2>
                                            </div>
                                        </div>
                                        <div class="ca-block ">
                                            <div class="ca-title">Unique organizations supported</div>
                                            <div class="ca-color" style="background-color:#007FAB">
                                                <h2 class="ca-desc text-color-light">50,000</h2>
                                            </div>
                                        </div>
                                        <div class="ca-block mR-0">
                                            <div class="ca-title">Year-over-year grants increase</div>
                                            <div class="ca-color" style="background-color:#007FAB">
                                                <h2 class="ca-desc text-color-light">22%</h2>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="hr-line-below "></div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>