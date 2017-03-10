<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
            <div class="object" id="object_five"></div>
            <div class="object" id="object_six"></div>
            <div class="object" id="object_seven"></div>
            <div class="object" id="object_eight"></div>
            <div class="object" id="object_big"></div>
        </div>
    </div>
</div>
<!-- Preloader -->

<!-- Header Section -->
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <?php if (cs_get_option('fs_logo_text_enable')): ?>
                        <?php
                        $text_logo = explode(' ', cs_get_option('fs_logo_text'));
                        if (!empty($text_logo)) {
                            echo '<span class="sy-text-logo">' . $text_logo[0] . '<em> ' . $text_logo[1] . '</em></span>';
                        }
                        ?>
                    <?php else: ?>
                        <a href="<?php site_url() ?>"><img src="<?php echo cs_get_option('fs_logo_image') ?>" alt=""/></a>
                    <?php endif; ?>
                </div>
                <div class="header-top-right">
                    <ul>
                        <?php if (cs_get_option('fs_schedule_enable')): ?>
                            <li>
                                <?php if (!cs_get_option('fs_schedule_image_icon')): ?>
                                    <span class="fa fa-2x <?php echo cs_get_option('fs_schedule_icon'); ?>"></span>
                                <?php else: ?>
                                    <img src="<?php echo cs_get_option('fs_schedule_image'); ?>" alt=""/>
                                <?php endif; ?>
                                <div class="header-top-contact">
                                    <h4><?php echo cs_get_option('fs_schedule_workday') ?></h4>
                                    <h5><?php echo cs_get_option('fs_schedule_offday') ?></h5>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (cs_get_option('fs_contact_enable')): ?>
                            <li>
                                <?php if (!cs_get_option('fs_contact_image_icon')): ?>
                                    <span class="fa fa-2x <?php echo cs_get_option('fs_contact_icon'); ?>"></span>
                                <?php else: ?>
                                    <img src="<?php echo cs_get_option('fs_contact_image'); ?>" alt=""/>
                                <?php endif; ?>
                                <div class="header-top-contact">
                                    <h4><?php echo cs_get_option('fs_contact_phone') ?></h4>
                                    <h5><?php echo cs_get_option('fs_contact_email') ?></h5>
                                </div>
                            </li>
                        <?php endif; ?>
                        <?php if (cs_get_option('fs_address_enable')): ?>
                            <li>
                                <?php if (!cs_get_option('fs_address_image_icon')): ?>
                                    <span class="fa fa-2x <?php echo cs_get_option('fs_address_icon'); ?>"></span>
                                <?php else: ?>
                                    <img src="<?php echo cs_get_option('fs_schedule_image'); ?>" alt=""/>
                                <?php endif; ?>
                                <div class="header-top-contact">
                                    <h4><?php echo cs_get_option('fs_address_line_1') ?></h4>
                                    <h5><?php echo cs_get_option('fs_address_line_2') ?></h5>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="mainmenu-area" id="sohag">
        <div class="container">
            <div class="row">
                <div class="nav-menu">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar-one bar-stick"></span>
                                <span class="icon-bar-two bar-stick"></span>
                                <span class="icon-bar-three bar-stick"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a>
                                    <ul class="dropdown-menu">
                                        <li class="active"><a href="">Homepage One</a></li>
                                        <li><a href="">Homepage Two</a></li>
                                        <li><a href="">Homepage Three</a></li>
                                    </ul>
                                </li>
                                <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i><span>Contact</span></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Section -->