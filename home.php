<?php $theme->display( 'header' ); ?>
<div id="main" role="main">
	<h2>Table of contents</h2>
	<?php foreach ( Posts::get( array( 'status' => 'published', 'content_type' => Post::type('entry'), 'orderby' => 'pubdate DESC', 'limit' => '50' ) ) as $recent_post ): ?>
	<div class="contents">
		<p>
				<a href="<?php echo $recent_post->permalink; ?>"
			   title="<?php echo $recent_post->title; ?>"><?php echo $recent_post->title; ?></a>

		<span><?php echo $recent_post->pubdate_out; ?></span>
		</p>
	</div>
	<?php endforeach;?>
</div>
<?php $theme->display( 'footer' ); ?>