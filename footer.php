      </div>
      <!-- end .row .row-fluid -->
    </section>
    <!-- end #main -->

    <footer class="site-footer wrapper" role="contentinfo">
      <div class="row">
        <div id="supplementary" class="row-fluid">
          <?php
            $footer_widget_locations = get_option( 'footer_widget_locations', 'No' );
            if ( $footer_widget_locations == 'Yes' ) {
              get_template_part( 'footer', 'widgets' );
            }
          ?>
        </div>
        <!-- end #supplementary -->
        <div class="site-info">
          <p>
            <?php
              $copyright_text = stripcslashes( get_option( 'copyright_text', "" ) );
              echo $copyright_text;
            ?>
          </p>
          <p style="font-size: .8em; color: rgba(34, 221, 34, 0.5)"><?php echo get_num_queries(); ?> queries in <?php timer_stop(1); ?> seconds.</p>
        </div>
        <!-- end .site-info -->
      </div>
      <!-- end .row -->
    </footer>
    <!-- end .site-footer -->
  </div>
  <!-- end #PAGE -->
  <?php wp_footer(); ?>
  </body>
</html>
