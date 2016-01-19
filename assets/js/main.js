/*eslint-disable*/
/**
* Setup webpack public path
* to enable lazy-including of
* js chunks
*
*/


import './vendor/webpack.publicPath';

// import './vendor/jquery.waypoints.min.js';

/**
* Your theme's js starts
* here...
*/


jQuery(document).ready(function($) {

  $(document).scroll( function() {
    // console.log('hi');
    // console.log('html',$('html').scrollTop());
    // console.log('body',$('body').scrollTop());
    // console.log('main',$('main').scrollTop());
    // console.log('header',$('header').scrollTop());
    if( $('html').scrollTop() === 0  && $('body').scrollTop() === 0) {
      $('header').removeClass( 'stuck' );
    } else if( ( $('body').scrollTop() !== 0 || $('html').scrollTop() >= 0) ) {
      if( ! $( 'header' ).is('.stuck') ) {
        $('header').addClass('stuck');
      }
    }
  });
});
