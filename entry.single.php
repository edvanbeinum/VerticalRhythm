<?php $theme->display( 'header' ); ?>
<div id="main" role="main">
<article>

		<h2><?php echo $post->title; ?></h2>
		<p class="post-date"><?php echo $post->pubdate_out; ?></p>
			<?php print $post->content_out;?>
	<div class="post-info">
	<p><?php _e( 'Tagged:' ); ?> <?php echo $post->tags_out; ?></p>
	<?php if ($twitter_username = Options::get('twitter__username')) : ?>
		<p class="comments">Comments and corrections to <a href="http://www.twitter.com/<?php echo $twitter_username ?>">@<?php echo $twitter_username ?></a></p>
	<?php endif; ?>

	</div>
</article>
</div>
<?php $theme->display( 'footer' ); ?>
