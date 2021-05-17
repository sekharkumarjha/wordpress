<?php

/*
Template Name: Benifits Template
*/ 
?>

<?php $args = array(
    'post_type' => 'post',
    'category_name' => 'Benefits of a donor-advised fund'
);
    $the_query = new WP_Query( $args );
?>
<div>
    <div class="container-max-width pB-30">
        <h2 class="mB-T2B">
            <div class="field field--name-field-heading field--type-string field--label-hidden field--item">Benefits of a donor-advised fund</div>
        </h2>
        <div class="image-with-text-para mB-section">
            <div class="para-cards tab-row">
            <?php if ($the_query->have_posts() ) : while ($the_query->have_posts() ) : $the_query->the_post(); ?>

                <div class="tab-cards home">
                    <div class="para-text para-text-home">
                        <img src='<?php the_post_thumbnail_url()?>' class="mB-T2B" alt="Group 22" title="" />
                        <h4 class="mB-T2B"><?php the_title();?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                
<?php endwhile;
endif;?>
</div>
        </div>
        <div class="primaryCta flex pB-50 cta-button-width-100">
            <a class="flex-center link-center" title="OPEN AN ACCOUNT" href="/open-an-account/consent">
                <span>OPEN AN ACCOUNT </span>
                <div class="new_arrow lg"><span class="arrow_line"><span></span></span></div>
            </a>
        </div>
    </div>
</div>