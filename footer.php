<footer>

	<div class="social-guff">
			<a href="http://twitter.com/<?php echo Options::get('twitter__username') ?>"><img src="<?php Site::out_path( 'theme' ); ?>/img/twitter-2.png" width="21"
												  height="21" title="Read my drivel and misinformation on Twitter"/></a>
	<a href="<?php URL::out( 'atompub_servicedocument' ); ?>"><img src="<?php Site::out_path( 'theme' ); ?>/img/rss.png"
																   width="21" height="21"
																   title="Subscribe to my Atom feed"/></a>
		<a href="mailto:e@edvanbeinum.com"><img src="<?php Site::out_path( 'theme' ); ?>/img/email.png"
																   width="21" height="21"
																   title="Spam me"/></a>
	<a href="http://978.gs" id="gs-overlay-badge"><img src="<?php Site::out_path( 'theme' ); ?>/img/978-badge.png"
													   alt="This site is built with 978 grid system" width="59"
													   height="25" style="border: 0;"></a>
		<p>Powered by <a href="http://habariproject.org">Habari</a></p>
	</div>


</footer>
</div> <!--! end of #container -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
<script>window.jQuery || document.write("<script src='<?php Site::out_path( 'theme' ); ?>/js/libs/jquery-1.6.min.js'>\x3C/script>")</script>


<script src="<?php Site::out_path( 'theme' ); ?>/js/plugins.js"></script>
<script src="<?php Site::out_path( 'theme' ); ?>/js/script.js"></script>


	<script>
    var _gaq=[["_setAccount","UA-16848561-1"],["_trackPageview"],["_trackPageLoadTime"]];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>

</body>
</html>