<?php

/*
Template Name: Services Template
*/ 
?>

<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'Services'
);
    $the_query = new WP_Query( $args );
?>
<div>
    <article data-history-node-id="278" role="article" about="/node/278" class="node node--type-daf-tabs node--view-mode-full clearfix">
        <div class="daf-background-image mB-section-daf" style="background-image: url(//cdn.vcapps.org/sites/default/files/2019-07/investment-bg_0.png)">
            <div class="tabsParaWrapper margin-0 clearfix" id="df-tabs">
                <div class="container-max-width">
                    <div class="width-963">
                        <div class="daftabs-heading-description">
                            <div class="text-color-light">
                                <div class="daftabs-heading ">
                                    <div class="field field--name-field-heading field--type-string field--label-hidden field--item">Our philosophy is simple: Low-cost, high quality investments</div>
                                </div>
                                <div class="daftabs-description">
                                    <div class="field field--name-field-text field--type-text-long field--label-hidden field--item">
                                        <p>We've built our investment philosophy on the principles that have made Vanguard the leader in at-cost investment. Our goals are simple: Keep all-in fees low without sacrificing performance. More growth means more charitable impact over time.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="para-cards tab-row">
                    <?php if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="tab-cards">
                            <div class="para-text">
                                <img src='<?php the_post_thumbnail_url()?>' class="mB-T2B" alt="Portfolio Solutions" title="Portfolio Solutions" />
                                <h4 class=" mB-T2B BerkeleyStd-Medium-text"><?php the_title();?></h4>
                                <div class="mB-section">
                                    <p><?php the_content();?></p>
                                </div>
                                <div class="read-more-link">
                                    <span class="field-content">
                                        <a href="/investments/portfolio-solutions" aria-label="/investments/portfolio-solutions">
                                            <span>Read more</span>
                                            <div class="new_custom_arrow lg"><span class="arrow_custom_line" style="background: #006778;"><span style="border: solid #006778;"></span></span></div>
                                        </a>
                                    </span>
                                </div>
                            </div>
                            <div class="para-t-border" style="border-top: 5px solid #006778"></div>
                        </div>
   
                        <?php endwhile;
endif;?>
                    </div>
                </div>
            </div>
            <div class="curve-down-img"></div>
        </div>
    </article>
    <style>
        :root {
            --desktop-image-url: url(//cdn.vcapps.org/sites/default/files/2019-07/investment-bg_0.png);
            --mobile-image-url: url(//cdn.vcapps.org/sites/default/files/2019-07/investment-bg-m.png);
        }

        @media only screen and (min-width: 320px) and (max-width: 991px) {
            .daf-background-image {
                background-image: url(//cdn.vcapps.org/sites/default/files/2019-07/investment-bg-m.png) !important;
            }
        }
    </style>
</div>