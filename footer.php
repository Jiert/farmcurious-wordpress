<?php
/**
 * @package WordPress
 */
?>
      </div> <?php //CONTENT ?> 
    </div> <?php //CONTAINER ?>
    
    <div id="footerWrapper">
      <div id="footer" class="container">   
        <div class="row">
          <div id="siteMap" class="span5">
            <div class="footer-box">
              <h3 class="no-margin-top">Site Map</h3>
                <?php 
                  wp_nav_menu( array(
                    'menu'       => 'Site Map',
                    'depth'      => 2,
                    'container'  => false,
                    'menu_class' => '',
                    'fallback_cb' => 'wp_page_menu',
                    //Process nav menu using our custom nav walker
                    'walker' => new twitter_bootstrap_nav_walker())
                  );
                ?>
            </div>
          </div>
          
          <div id="support" class="span5">
            <div class="footer-box">
              <h3 class="no-margin-top">We Support</h3>
              <ul>
                <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
              </ul>
            </div>
          </div>
          
          <div id="copyright" class="span2">
            <div class="footer-box">
              <img id="footerLogo" src="<?php bloginfo('template_url'); ?>/images/logo-small.png" alt="Logo" />
              <p>Copyright &copy; <?php echo date(Y); ?></p> 
              <p>FARMcurious</p>
              <p>All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
          
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-17058934-1']);
      _gaq.push(['_trackPageview']);
    
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
            
    </script>

    <?php wp_footer(); ?>
    <!--<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>-->

  </body>
</html>