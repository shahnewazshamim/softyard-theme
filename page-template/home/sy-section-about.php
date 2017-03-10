<!-- Feature Section -->
<section class="feature-section section">
    <div class="container">
        <div class="row">
            <?php
            $args      = array(
                'post_type' => 'company-feature',
                'order' => 'DESC',
                'orderby' => 'menu_order'
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if (have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <?php $post_meta = get_post_meta($post->ID, '_company_feature_post_options', TRUE); ?>
                <div class="col-md-3 col-sm-6">
                    <div class="single-feature row">
                        <?php if (!$post_meta['feature_fields_image_icon']): ?>
                            <span class="fa <?php echo $post_meta['feature_fields_icon_size'] . ' ' . $post_meta['feature_fields_icon']; ?>"></span>
                        <?php else: ?>
                            <img src="<?php echo $post_meta['feature_fields_image']; ?>" alt=""/>
                        <?php endif; ?>
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo $post_meta['feature_fields_desc']; ?></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!-- End Feature Section -->