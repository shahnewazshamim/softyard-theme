<?php
/**
 * The template for displaying all single posts
 */
?>

<?php get_header(); ?>

<?php get_template_part('page-template/sy-section-header', 'page'); ?>

<!-- Breadcrumb Section -->
<section class="breadcrumb-section section">
    <div class="container">
        <div class="breadcrumb-area">
            <h2 class="breadcrumb-title">Project Details</h2>
        </div>
    </div>
</section>
<!-- End Breadcrumb Section -->
<!-- Project Single Section -->
<section class="section project-single">
    <div class="container">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="row">
                        <div class="project-large-pic">
                            <?php (has_post_thumbnail()) ? the_post_thumbnail('', array('class' => 'img-responsive')) : ''; ?>
                        </div>
                        <?php
                        $post_meta = get_post_meta($post->ID, '_sy_portfolio_post_options', TRUE);
                        ?>
                        <div class="project-details">
                            <div class="col-sm-4">
                                <div class="project-info">
                                    <ul>
                                        <li>
                                            <h4>Title:</h4>
                                            <span><?php the_title() ?></span>
                                        </li>
                                        <?php if ($post_meta['portfolio_fields_date']): ?>
                                            <li>
                                                <h4>Date:</h4>
                                                <span><?php echo $post_meta['portfolio_fields_date']; ?></span>
                                            </li>
                                        <?php endif; ?>
                                        <?php if ($post_meta['portfolio_fields_client']): ?>
                                            <li>
                                                <h4>Client:</h4>
                                                <span><?php echo $post_meta['portfolio_fields_client']; ?></span>
                                            </li>
                                        <?php endif; ?>
                                        <li>
                                            <h4>Category:</h4>
                                            <span><?php echo get_the_term_list($post->ID, 'sy-portfolio-type', '', '<br>'); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="project-description">
                                    <h3>Project Description</h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $portfolio_tax_terms = wp_get_object_terms($post->ID, 'sy-portfolio-type', array('fields' => 'ids'));

                $args = array(
                    'post_type'      => 'sy-portfolio',
                    'post_status'    => 'publish',
                    'posts_per_page' => 3,
                    'orderby'        => 'rand',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'sy-portfolio-type',
                            'field'    => 'id',
                            'terms'    => $portfolio_tax_terms,
                        ),
                    ),
                    'post__not_in'   => array($post->ID),
                );

                $related_items = new WP_Query($args);
                ?>
                <div class="col-md-3 col-sm-12">
                    <div class="related-project">
                        <?php if ($related_items->have_posts()) : while ($related_items->have_posts()) : $related_items->the_post(); ?>
                            <div class="col-md-12">
                                <div class="related-project-pic">
                                    <a href="<?php the_permalink(); ?>" target="_blank"><?php (has_post_thumbnail()) ? the_post_thumbnail('related-thumb') : ''; ?></a>
                                </div>
                            </div>
                        <?php endwhile; endif;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="project-download">
                        <h3>Get the Idea</h3>
                        <a href="<?php echo $post_meta['portfolio_fields_live'] ?>" target="_blank" class="btn btn-block button download-button <?php if (!$post_meta['portfolio_fields_live']) echo 'disabled'; ?>">Live</a>
                        <a href="<?php echo $post_meta['portfolio_fields_demo'] ?>" target="_blank" class="btn btn-block button download-button <?php if (!$post_meta['portfolio_fields_demo']) echo 'disabled'; ?>">Demo</a>
                        <a href="<?php echo $post_meta['portfolio_fields_download'] ?>" target="_blank" class="btn btn-block button download-button <?php if (!$post_meta['portfolio_fields_download']) echo 'disabled'; ?>">Download</a>
                    </div>
                </div>
                <?php if ($post_meta['portfolio_fields_github'] || $post_meta['portfolio_fields_bitbucket']): ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-share">
                            <h3>Repositories</h3>
                            <div class="social-icon">
                                <ul>
                                    <?php if ($post_meta['portfolio_fields_github']) : ?>
                                        <li>
                                            <a href="<?php echo $post_meta['portfolio_fields_github'] ?>" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ($post_meta['portfolio_fields_bitbucket']) : ?>
                                        <li>
                                            <a href="<?php echo $post_meta['portfolio_fields_bitbucket'] ?>" target="_blank"><i class="fa fa-bitbucket" aria-hidden="true"></i></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>
<!-- End Single Project -->

<?php get_template_part('page-template/sy-section-footer', 'page'); ?>

<?php get_footer(); ?>
