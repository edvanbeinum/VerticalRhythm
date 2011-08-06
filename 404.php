<?php $theme->display( 'header' ); ?>
<div id="main" role="main">
	<div id="error">
		<h1>404</h1>
	</div>

	<div>
		<p>Sorry, but the page you were trying to view does not exist.</p>

		<p>You can:</p>
		<ul>
			<?php if ( $twitter_username = Options::get( 'twitter__username' ) ) : ?>
			<li>Berate me via <a href="http://twitter.com/edvanbeinum">Twitter</a></li>
			<?php endif; ?>
			<li>Head to the <a href="<?php Site::out_url( 'habari' ); ?>">homepage</a></li>
		</ul>
	</div>

</div>
<?php $theme->display( 'footer' ); ?>