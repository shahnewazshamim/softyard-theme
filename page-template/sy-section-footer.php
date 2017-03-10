<!-- Footer section -->
<footer class="footer-section">
    <!--<div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="f-widget">
                            <h2>About The Boss</h2>
                            <div class="footer-content">
                                <p>Distily enable team driven services through extensive is a relatonships platforms with interactive content. Enthusiastically scale effective.</p>
                            </div>
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <i class="fa fa-home" aria-hidden="true"></i><span> New Chokoya Road, USA.</span>
                                    </li>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><span> +8801 923 970 212</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i><span> Contact@yourmail.com</span>
                                    </li>
                                    <li><i class="fa fa-globe" aria-hidden="true"></i><span> www.codexcoder.com</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="f-widget">
                            <h2>Latest News</h2>
                            <ul class="latest-news">
                                <li>
												<span class="small-thumbnail">
													<a href="#"><img src="images/footer-latest-news-one.jpg" alt=""/></a>
												</span>
                                    <div class="content">
                                        <a href="#" class="latest-news-title">Corem ipsum dolor them amectetuer adipiscing...</a>
                                        <span class="post-date">04 February 2016</span>
                                    </div>
                                </li>
                                <li>
												<span class="small-thumbnail">
													<a href="#"><img src="images/footer-latest-news-two.jpg" alt=""/></a>
												</span>
                                    <div class="content">
                                        <a href="#" class="latest-news-title">Mirum est notare quam littera gothica nunc...</a>
                                        <span class="post-date">04 February 2016</span>
                                    </div>
                                </li>
                                <li>
												<span class="small-thumbnail">
													<a href="#"><img src="images/footer-latest-news-three.jpg" alt=""/></a>
												</span>
                                    <div class="content">
                                        <a href="#" class="latest-news-title">Duis autem vel eum iriure dolor in hendrerit...</a>
                                        <span class="post-date">04 February 2016</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="f-widget">
                            <h2>Twitter Widget</h2>
                            <ul class="twitter-widget">
                                <li>
                                    <span class="twitter-icon"><i class="fa fa-twitter"></i></span>
                                    <div class="twitter-content">
                                        <p>Raritas etiam processus a theme dynamicus sequitur mutationem
                                            <a href="#">http://t.co/hVtABj5tZo</a></p>
                                        <span class="twitt-time">23 seconds ago</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="twitter-icon"><i class="fa fa-twitter"></i></span>
                                    <div class="twitter-content">
                                        <p>Duis autem eum
                                            <a href="#">codexcoder.com</a> dolor hendrerit in vulputate velit</p>
                                        <span class="twitt-time">8 months ago</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="twitter-icon"><i class="fa fa-twitter"></i></span>
                                    <div class="twitter-content">
                                        <p><a href="#">@bonndu007</a> am liber tempor cum soluta nobis eleifend</p>
                                        <span class="twitt-time">2 years ago</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="f-widget">
                            <h2>Recent Photos</h2>
                            <div class="footer-instagram">

                                <a href="#"><img src="images/footer-intagram-one.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-two.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-three.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-four.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-five.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-six.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-seven.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-eight.jpg" alt=""/></a>
                                <a href="#"><img src="images/footer-intagram-nine.jpg" alt=""/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <?php if (cs_get_option('copyright')): ?>
                    <div class="copyright-text">
                        <p><?php echo cs_get_option('copyright') ?></p>
                    </div>
                <?php endif; ?>
                <?php if (cs_get_option('social_menu')): ?>
                    <div class="social-icon">
                        <ul>
                            <?php
                            foreach(cs_get_all_option() as $key => $value){
                                if(strpos($key, 'social_menu_') !== FALSE) {
                                    if($value == '') continue;
                                    $social_menus[$key] = $value;
                                }
                            }
                            if(!empty($social_menus)){
                                foreach($social_menus as $icon => $url) {
                                    $icon = str_replace('_', '-', str_replace('social_menu_', '', $icon));
                                    echo '<li><a href="'.$url.'" target="_blank"><i class="fa fa-'.$icon.'" aria-hidden="true"></i></a></li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>