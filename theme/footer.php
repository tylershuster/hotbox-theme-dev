<?php
/**
 * Footer file common to all
 * templates
 *
 */
?>


<footer>

  <div class="social">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/facebook.svg" alt="Our Facebook Page" title="The logo of Facebook, a popular social networking platform">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/twitter.svg" alt="Our Twitter Stream" title="The logo of Twitter, a popular activity stream">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/instagram.svg" alt="Our Instagram Account" title="The logo of Instagram, a popular photo-sharing website">
  </div>

    <span>Packed with <i>&hearts;</i> in Northern <em>California</em></span>

  </footer>



<?php wp_footer(); ?>
<script>
  jQuery(document).ready(function($) {
    $('.menu--toggle').replaceWith("<span class='menu--toggle unchecked'></span>");

    $('header').on( 'click', 'span.menu--toggle', function(event) {

      if( $(event.target).is('.checked') ) {

        $(event.target).removeClass( 'checked' ).addClass( 'unchecked' );

      } else {

        $(event.target).removeClass('unchecked').addClass('checked');

      }
    })
  });
</script>

<?php // </body> opens in header.php ?>
</body>
</html>
