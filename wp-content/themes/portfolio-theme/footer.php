<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href="<?php echo site_url('/contact-me'); ?>"><strong>Contact Information</strong></a>
            </h1>
                <br>
                <a class="site-footer__link" href="tel:480-622-4654">(480) 622-4654</a>
                <br>
                <br>
                <a class="site-footer__link" href="mailto:Stephen.Havig@gmail.com">Stephen.Havig@gmail.com</a>

          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'footerMenuLocation'
                    ));
                ?>
                <!-- <ul>
                  <li><a href="<?php echo site_url('/about-me'); ?>">About Me</a></li>
                  <li><a href="<?php echo site_url('/projects'); ?>">Projects</a></li>
                  <li><a href="<?php echo site_url('/publications'); ?>">Publications</a></li>
                  <li><a href="<?php echo site_url('/resume'); ?>">Resume</a></li>
                </ul> -->
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
                <?php 
                wp_nav_menu(array(
                    'theme_location' => 'logisticalMenuLocation'
                ));
                ?>
                <!-- <ul>
                  <li><a href="<?php echo site_url('/legal'); ?>">Legal</a></li>
                  <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy</a></li>
                </ul> -->
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Me!</h3>
            <nav>
              <ul class="min-list social-icons-list group">
                <li>
                  <a href="https://www.linkedin.com/in/stephen-havig-199340145/" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://github.com/Stephen-Havig" class="social-color-github"><i class="fa fa-github" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/guapodelosguapos/" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/stephen.havig/" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/@stephenhavig5229" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>