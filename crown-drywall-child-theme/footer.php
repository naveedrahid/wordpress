    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="aboutfooter wigdet_1">
                        <h6 class="widgettitle">ADDRESS</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.
                        </p>
                        <div class="social">
                            <?php
                                $social_platforms = array(
                                    'facebook' => __('Facebook'),
                                    'instagram' => __('Instagram'),
                                    'twitter' => __('Twitter'),
                                    'linkedin' => __('LinkedIn'),
                                    'youtube' => __('YouTube'),
                                );
                                
                                // Display the social URLs
                                echo '<div class="social">';
                                foreach ($social_platforms as $platform => $label) {
                                    $social_url = get_theme_mod('social_url_' . $platform, '');
                                    //var_dump($platform);
                                    if (!empty($social_url)) {
                                        if($platform == 'facebook'){
                                            echo '<a href="' . esc_url($social_url) . '">' . '<i class="fa-brands fa-facebook-f"></i>' . '</a>';
                                        }
                                        if($platform == 'instagram'){
                                            echo '<a href="' . esc_url($social_url) . '">' . '<i class="fa-brands fa-square-instagram"></i>' . '</a>';
                                        }
                                        if($platform == 'twitter'){
                                            echo '<a href="' . esc_url($social_url) . '">' . '<i class="fa-brands fa-twitter"></i>' . '</a>';
                                        }
                                        if($platform == 'linkedin'){
                                            echo '<a href="' . esc_url($social_url) . '">' . '<i class="fa-brands fa-linkedin"></i>' . '</a>';
                                        }
                                        if($platform == 'youtube'){
                                            echo '<a href="' . esc_url($social_url) . '">' . '<i class="fa-brands fa-youtube"></i>' . '</a>';
                                        }
                                    }
                                }
                                echo '</div>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <?php
                        $address = get_theme_mod('theme_address', '');
                        $phone_number = get_theme_mod('theme_phone_number', '');
                        $email = get_theme_mod('theme_email', '');
                    ?>
                    <div class=" wigdet_2  menu_3 menu">
                        <h6 class="widgettitle">Contact Info</h6>
                        <?php if ($address): ?>
                            <div class="footer_detail">
                                <div class="footer_icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="footer_content">
                                    <h4>ADDRESS</h4>
                                    <p><?php echo esc_html($address); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($phone_number): ?>
                            <div class="footer_detail">
                                <div class="footer_icon">
                                    <i class="fa-solid fa-mobile-screen"></i>
                                </div>
                                <div class="footer_content">
                                    <h4 class="">CALL US 24/7</h4>
                                    <p><?php echo esc_html($phone_number); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        
                        <?php if ($email): ?>
                            <div class="footer_detail">
                                <div class="footer_icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="footer_content">
                                    <h4>EMAIL</h4>
                                    <p><?php echo esc_html($email); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" wigdet_3 menu_3 menu">
                        <?php if ( is_active_sidebar( 'footer-sidebar-3' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="wigdet_4">
                        <?php if ( is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <p class="copy-right">
                <?php
                    $custom_text = get_theme_mod('copy_right', '');
                    
                    if ($custom_text) {
                        echo esc_html($custom_text);
                    }
                    ?>
                </p>
            </div>
        </div>
    
    </footer>
    </div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>