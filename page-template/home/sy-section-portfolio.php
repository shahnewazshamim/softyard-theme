<!-- Portfolio Section -->
<section class="portfolio-section section">
    <div class="container">
        <div class="row">
            <div class="section-heading">
                <h2 class="section-title"><?php echo cs_get_option('portfolio_title'); ?></h2>
                <p class="section-content"><?php echo cs_get_option('portfolio_desc'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="portfolio-item">
                <?php
                $args = array(
                    'post_type'      => 'sy-portfolio',
                    'order'          => 'DESC',
                    'orderby'        => 'post_date',
                    'posts_per_page' => 1,
                );

                $the_query = new WP_Query($args);
                ?>
                <?php if (have_posts()): while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php $post_meta = get_post_meta($post->ID, '_sy_portfolio_post_options', TRUE); ?>
                    <div class="col-sm-4">
                        <div class="row">
                            <a href="<?php the_permalink($post->ID); ?>" target="_blank">
                                <div class="single-portfolio">
                                    <div class="single-portfolio-inner">
                                        <?php (has_post_thumbnail()) ? the_post_thumbnail('portfolio-thumb') : ''; ?>
                                        <div class="round-overlay"></div>
                                        <a class="fancybox" href="<?php the_post_thumbnail_url(); ?>">
                                            <div class="light-box-icon">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
                <?php if ($the_query->post_count >= $args['posts_per_page']): ?>
                    <a href="#" class="button">View All Portfolio</a>
                <?php endif; ?>
            </div>
        </div>
</section>
<!-- End Portfolio Section -->