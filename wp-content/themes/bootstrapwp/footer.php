<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>

    <!-- End Template Content -->


	<footer class="footer">

		<div class="container">
	      <p class="pull-right"><a href="#"><?php _e("<!--:en-->Back to Top<!--:--><!--:es-->Ir a la parte superior<!--:-->"); ?></a></p>
	        <p>&copy; Ricardomonagas.com <?php the_time('Y') ?></p>
	          <?php
	    	
	    		if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content");
			  
			  ?>
	    
	    </div> <!-- /container -->

	</footer>

<?php wp_footer(); ?>

</body>

  <!-- Google Analytics -->
  
  <script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-27993174-1']);
	  _gaq.push(['_setDomainName', 'ricardomonagas.com']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
  
  </script>

  <!-- Follow Twitter -->
  
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

  <!-- Google Plus Button -->

  <script type="text/javascript">

	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();

  </script>

  <script type="text/javascript">

  	 jQuery(document).ready(function() {


  	 		jQuery("#facebook-btn").click(function() {

  	 			window.open("https://www.facebook.com/pages/Ricardo-Monagas/156824174474383");

  	 		});

  	 		jQuery("#twitter-btn").click(function() {

  	 			window.open("https://twitter.com/rmmonagas");

  	 		});

  	 		jQuery("#linkedin-btn").click(function() {

  	 			window.open("http://www.linkedin.com/pub/ricardo-monagas-medina/25/bb1/788");

  	 		});

  	 		


  	 });

  </script>

</html>