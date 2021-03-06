<?php get_header(); ?>

<?php

$recent_product_args = array(
  'post_type' => 'product',
  'orderby' => 'date',
  'order' => 'DESC',
  'posts_per_page' => 8
);

$RecentProducts = get_posts( $recent_product_args );

 ?>
<main class="fullwidth">

    <div id="hero">
      <span class="tagline">A new surprise every month!</span>

      <a href="join" class="purple button">Join Now</a>
      <a href="how" class="green button">How it Works</a>
    </div>

    <div id="pitch">

      <div class="social">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/facebook.svg" alt="Our Facebook Page" title="The logo of Facebook, a popular social networking platform">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/twitter.svg" alt="Our Twitter Stream" title="The logo of Twitter, a popular activity stream">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/instagram.svg" alt="Our Instagram Account" title="The logo of Instagram, a popular photo-sharing website">
      </div>

      <h2>Get the highest quality products!</h2>

      <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pipe.png" alt="An X kind of Pipe" title="'For tobacco only'"></figure>
      <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jar.png" alt="An organic nug jug" title="Put your weed in here"></figure>
      <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lighter_bro.png" alt="A 'Lighter Bro' multi-tool"></figure>
      <figure><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/black_label.png" alt="Black Label cleaner"></figure>

      <p>Because we're connoisseurs like you, we will never send you a product that we wouldn't use ourselves or that we're not completely stoked on! From the OG toker to the new generation dabbers, we have something for everyone!</p>

    </div>

    <style media="screen">
      #cta1 {
        overflow: hidden;
        position: relative;
      }
    </style>

    <div id="cta1" class="cta parallax">

      <div class="bg-image" style="background-image: url('/wp-content/themes/hotbox/assets/img/calltoaction_bg.jpg');"> </div>

      <span>Are you a connoisseur?</span>

      <hr>

      <span>Start collecting the finest products available!</span>

      <a href="join" class="button">Sign Up Now</a>

    </div>

    <div id="how">

      <h2>How it Works</h2>

      <ol>
        <li><span>Choose one of our <a href="#plans">two plans</a> and sign up on our simple form.</span></li>
        <li><span>We pack your box full of the coolest and latest smokin gear! Saving you up to 50% of original cost!</span></li>
        <li><span>Your box of goodies will arrive at your doorstep in a discreet package!<br>Enjoy!</span></li>
      </ol>

      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/box-mockup-01.svg" alt="" />

      <a href="join" class="purple button">Join</a>
      <a href="about" class="green button">Learn More</a>


    </div>

    <div id="testimonial" class="testimonial parallax">

      <div class="bg-image" style="background-image: url('/wp-content/themes/hotbox/assets/img/calltoaction_bg.jpg');"> </div>

      <h3>What our Customers are Saying</h3>

      <blockquote>
        <p>The Hot Box is awesome. They really know their products and plus they are right there in Northern California close to the Emerald Triangle!!!</p>
        <cite>Chaz<img src="http://lorempixel.com/30/30/people" /></cite>
      </blockquote>

    </div>

    <div id="plans">

      <aside id="current_order">

        <h1>Now taking orders for <em>Jan.</em></h1>

        <i class="hot_box"></i>

      </aside>

      <h2>Pricing Options</h2>

      <?php echo file_get_contents( get_stylesheet_directory() . "/assets/svg/guarantee.svg" ); ?>

      <span>Save on the best products that you'll receive automatically every month. Cancel at any time.</span>


      <ul>

        <li>

          <h3>OG Hot Box</h3>

          <ul>
            <li>5-8 Smoking Products</li>
            <li>1-3 Smoking Products</li>
            <li>Plan Renews Monthly</li>
            <li>Free shipping!</li>
          </ul>

          <span>$29.95/mo</span>

          <a href="order" class="green button">Order now</a>
        </li>

        <li>

          <h3>Top Shelf Box</h3>

          <ul>
            <li>5-8 Smoking Products</li>
            <li>1-3 Smoking Products</li>
            <li>Plan Renews Monthly</li>
            <li>Free shipping!</li>
          </ul>

          <span>$79.95/mo</span>

          <a href="order" class="green button">Order now</a>
        </li>

        <li>

          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/svg/gift_box.svg" alt="Gift box">

          <h3>Order A</h3><a class="purple button" href="gift_box">one time gift box</a>

        </li>

      </ul>

    </div>

    <div id="cta2" class="cta parallax">

      <div class="bg-image" style="background-image: url('/wp-content/themes/hotbox/assets/img/calltoaction_bg.jpg');"> </div>

      <span>Are you a connoisseur?</span>

      <hr>

      <span>Start collecting the finest products available!</span>

      <a href="join" class="button">Sign Up Now</a>

    </div>

    <div id="history">

      <h2>Previous Boxes</h2>

      <span class="ribbon">See something you like<span class="hide"> from previous boxes</span>?</span>

      <span class="cta">Buy it now at our <a href="store" class="purple button">Online Store</a></span>

      <figure><a href="<?php echo get_the_permalink( $RecentProducts[0]->ID ); ?>">

        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($RecentProducts[0]->ID ) ) ?>" alt="">

        <figcaption><?php echo $RecentProducts[0]->post_title; ?></figcaption>

      </a></figure>

      <?php unset( $RecentProducts[0] ); ?>

    </div>

    <div id="store">

      <span class="awning"></span>

      <h2>Online Store</h2>

      <span>Purchase items from previous boxes here!</span>

       <ul>

       <?php foreach( $RecentProducts as $Product ): ?>

         <li><a href="<?php echo get_the_permalink( $Product->ID ); ?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($Product->ID ) ) ?>" /></a></li>

       <?php endforeach; ?>

       </ul>

    </div>

    <div id="contact">

      <h2>Contact the Hot Box</h2>

      <p>We're here to answer any questions you may have about The Hot Box. If you are  a vendor or part of a company that sells awesome products and you are interested in partnering with us, let us know!</p>

      <form action="">

        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="E-mail">
        <input type="text" name="subject" placeholder="subject">
        <textarea name="message" cols="30" rows="10"></textarea>

        <input type="submit" value="send" class="green button">

      </form>

    </div>

    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12120.172573328244!2d-122.35833552175293!3d40.58480309158952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1452803325976" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

  </main>

  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
  <script src="http://scrollmagic.io/js/lib/greensock/TweenMax.min.js"></script>
  <script src="http://scrollmagic.io/scrollmagic/uncompressed/plugins/animation.gsap.js"></script>

  <script type="text/javascript">



    jQuery(document).ready(function($) {

      $('#how li').addClass('hidden');

      var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
          duration: '200%',
          triggerHook: "onEnter"
        }
      });

      new ScrollMagic.Scene({
        triggerElement: "#pitch",
        offset: 300
      })
      .on( 'enter', function(event) {

        $('#pitch figure').each(function(index,element) {

          $(element).queue( 'flairQueue', function() {

            setTimeout( function() {

              $(element).css('transform', 'scale(1.2)');

            }, index * 80 );

            setTimeout( function() {

              $(element).css('transform', '');

            }, index * 80 + 300 );

          });

          $(element).dequeue('flairQueue');


        });
      })
      .addTo(controller);

      new ScrollMagic.Scene({
        triggerElement: "#how",
        offset: 300
      })
      .on( 'enter', function( event ) {

        $('#how li').each( function( index, element ){

          $(element).queue( 'enterQueue', function() {

            setTimeout( function() {

              $(element).removeClass('hidden');

            }, index * 200 );

          });

          $(element).dequeue('enterQueue');

        });
      })
      .addTo(controller);

      var tween1 = new TimelineMax().add([
        TweenMax.fromTo('#cta1 .bg-image',1, {backgroundPosition: "0% 0%"}, {backgroundPosition: "0% -100%", ease:Linear.easeNone})
      ]);
      var tween2 = new TimelineMax().add([
        TweenMax.fromTo('#cta2 .bg-image',1, {backgroundPosition: "0% 0%"}, {backgroundPosition: "0% -100%", ease:Linear.easeNone})
      ]);
      var tween3 = new TimelineMax().add([
        TweenMax.fromTo('#testimonial .bg-image',1, {backgroundPosition: "0% 0%"}, {backgroundPosition: "0% -100%", ease:Linear.easeNone})
      ]);

      new ScrollMagic.Scene({
        triggerElement: '#cta1',
        duration: "800",
      })
      .setTween(tween1).addTo(controller);

      new ScrollMagic.Scene({
        triggerElement: '#cta2',
        duration: "800",
      })
      .setTween(tween2).addTo(controller);

      new ScrollMagic.Scene({
        triggerElement: '#testimonial',
        duration: "800",
      })
      .setTween(tween3).addTo(controller);

      new ScrollMagic.Scene({
        triggerElement: '#store',
      }).on('progress', function(event) {

        if( event.progress > 0.44 && event.progress < 0.82 ) {

          if( ! $('#store .awning').is('.stuck') ) {

            $('#store .awning').addClass('stuck');

          }

        } else if( event.progress < 0.44 ) {

          $('#store .awning.stuck').removeClass('stuck');

        } else if( ! $('#store').is(':visible') ) {

          $('#store .awning.stuck').removeClass('stuck');

        } else if( event.progress > 0.82 ) {
          $('#store .awning').removeClass('stuck');
        }
        console.log(event.progress);

        //$('#store .awning').addClass('stuck');

      })
      .on('leave', function(event) {
      console.log('let');
      })
      .addTo(controller);

    });
  </script>
<?php get_footer(); ?>
