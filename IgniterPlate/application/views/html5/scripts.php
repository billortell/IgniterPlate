
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo site_url(); ?>js/libs/jquery-1.7.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="<?php echo site_url(); ?>js/plugins.js"></script>
  <script defer src="<?php echo site_url(); ?>js/script.js"></script>
  <script src="<?php echo site_url(); ?>js/mylibs/jquery.reveal.js"></script>
  <script src="<?php echo site_url(); ?>js/mylibs/jquery.orbit-1.3.0.js"></script>
  <script src="<?php echo site_url(); ?>js/mylibs/forms.jquery.js"></script>
  <script src="<?php echo site_url(); ?>js/mylibs/jquery.customforms.js"></script>
  <script src="<?php echo site_url(); ?>js/mylibs/jquery.placeholder.min.js"></script>
  <script src="<?php echo site_url(); ?>js/mylibs/app.js"></script>
  <!-- end scripts-->
  
	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!-- <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script> -->


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>