<?php
get_header();
?>
    <div>
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part( 'template-parts/banner');
            get_template_part( 'template-parts/about');
            get_template_part('template-parts/benifits' );
            get_template_part( 'template-parts/services');
            get_template_part( 'template-parts/updates' );
        }
    }
    ?>
</div>

<?php
    get_footer();
?>