<!-- Counter Section -->
<section class="counter-section parallax" data-dir="down" id="counter-section">
    <div class="parallax-window">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <?php if(cs_get_option('activity_stat')): ?>
                        <?php foreach(cs_get_option('activity_stat') as $item): ?>
                            <div class="col-sm-3 col-xs-6">
                                <div class="single-counter-box">
                                    <span class="counter-icon fa fa-3x <?php echo $item['activity_stat_icon']; ?>"></span>
                                    <span class="counter"><?php echo $item['activity_stat_value']; ?></span>
                                    <h3><?php echo $item['activity_stat_text']; ?></h3>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Section -->