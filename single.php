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
        <?php if(have_posts()): while(have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <div class="project-large-pic">
                        <?php (has_post_thumbnail()) ? the_post_thumbnail() : ''; ?>
                    </div>
                    <?php
                    $post_meta = get_post_meta($post->ID, '_sy_portfolio_post_options', TRUE);
                    var_dump(get_post_meta($post->ID, '_sy_portfolio_post_options', TRUE))
                    ?>
                    <div class="project-details">
                        <div class="col-sm-4">
                            <div class="project-info">
                                <ul>
                                    <li>
                                        <h4>Title:</h4>
                                        <span><?php the_title() ?></span>
                                    </li>
                                    <li>
                                        <h4>Date:</h4>
                                        <span><?php echo $post_meta['portfolio_fields_date']; ?></span>
                                    </li>
                                    <li>
                                        <h4>Clint:</h4>
                                        <span><?php echo $post_meta['portfolio_fields_client']; ?></span>
                                    </li>
                                    <li>
                                        <h4>Category:</h4>
                                        <span><?php var_dump(get_the_category()) ?></span>
                                    </li>
                                    <li>
                                        <h4>Online Preview:</h4>
                                        <span>www.codexcoder.com</span>
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
            <!--<div class="col-md-3 col-sm-12">
                <div class="related-project">
                    <div class="col-md-12">
                        <div class="related-project-pic">
                            <a href="#"><img src="images/related-project-pic-one.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="related-project-pic">
                            <a href="#"><img src="images/related-project-pic-two.jpg" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="related-project-pic">
                            <a href="#"><img src="images/related-project-pic-three.jpg" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="project-download">
                    <h3>Download Brochures</h3>
                    <a href="#" class="button download-button"><img src="images/download-pdf.png" alt="" />Download.pdf <img src="images/download-icon.png" alt="" /></a>
                    <a href="#" class="button download-button"><img src="images/download-doc.png" alt="" />Download.doc <img src="images/download-icon.png" alt="" /></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="project-share">
                    <h3>Share</h3>
                    <div class="social-icon">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>
<!-- End Single Project -->

<?php get_template_part('page-template/sy-section-footer', 'page'); ?>

<?php get_footer(); ?>
