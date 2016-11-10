<?php
/**
 * Displays the footer
 */
?>

        </div>
    </section>

    <footer class="PrimaryFooter site-footer">
        <div class="PrimaryFooter__wrap">
            <aside class="footer-widgets widget-area">
                <?php dynamic_sidebar( 'footer-widgets' ); ?>
            </aside>
            <div class="PrimaryFooter__wrap__container">
                <nav class="PrimaryFooter__wrap__container__subnav PrimaryFooter__wrap__container__subnav--contact">
                    <img src="<?php bloginfo( 'template_url' )?>/assets/images/logo-dumby.svg" alt="logo" class="PrimaryFooter__wrap__container__subnav__logo" />
                    <?php wp_nav_menu( array( 'theme_location' => 'contact' ) ); ?>
                </nav>
                <nav class="PrimaryFooter__wrap__container__subnav">
                    <h4 class="uppercase">plan du site</h4>
                    <?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
                </nav>
                <nav class="PrimaryFooter__wrap__container__subnav PrimaryFooter__wrap__container__subnav--newsletter">
                    <div class="PrimaryFooter__wrap__subnav__newsletter">
                        <ul>
                            <li><h4 class="uppercase">newsletter</h4></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="PrimaryFooter__wrap__container__subnav__followUs">
                        <h4 class="uppercase">suivez-nous</h4>
                    </div>
                </nav>
                <nav class="PrimaryFooter__wrap__container__subnav">
                    <h4 class="uppercase">notre projet</h4>
                    <?php wp_nav_menu( array( 'theme_location' => 'projet' ) ); ?>
                </nav>
            </nav>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>
