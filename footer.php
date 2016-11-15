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
      <nav class="PrimaryFooter__wrap__container__subnav">
        <img src="<?php bloginfo( 'template_url' )?>/assets/images/logo-dumby.svg" alt="logo" class="PrimaryFooter__wrap__container__subnav__logo" />
        <?php wp_nav_menu( array( 'theme_location' => 'contact', 'menu_class' => 'menu ContactMenu' ) ); ?>
      </nav>
      <nav class="PrimaryFooter__wrap__container__subnav PrimaryFooter__wrap__container__subnav--newsletter--partners">
        <div class="PrimaryFooter__wrap__container__subnav__wrapper">
          <h4 class="uppercase">plan du site</h4>
          <?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
        </div>
        <div class="PrimaryFooter__wrap__container__subnav__wrapper">
          <h4 class="uppercase">Nos partenaires</h4>
        </div>
      </nav>
      <nav class="PrimaryFooter__wrap__container__subnav PrimaryFooter__wrap__container__subnav--newsletter">
        <div class="PrimaryFooter__wrap__container__subnav--newsletter__children">
          <ul>
            <li>
              <h4 class="uppercase">newsletter</h4>
            </li>
            <li><p class="PrimaryFooter__wrap__container__subnav--newsletter__children--text">Inscrivez-vous à notre newsletter<br>pour recevoir nos actualités :</p></li>
            <li>
              <?php echo do_shortcode('[mc4wp_form id="13"]'); ?>
            </li>
          </ul>
        </div>
        <div class="PrimaryFooter__wrap__container__subnav--newsletter__children">
          <h4 class="uppercase">suivez-nous</h4>
        </div>
      </nav>
      <nav class="PrimaryFooter__wrap__container__subnav">
        <h4 class="uppercase">notre projet</h4>
        <?php wp_nav_menu( array( 'theme_location' => 'projet') ); ?>
      </nav>
    </div>
  </nav>
</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
