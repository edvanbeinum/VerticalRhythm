<?php $theme->display( 'header' ); ?>
<div id="main" role="main">
<article>

		<h2><?php echo $post->title; ?></h2>

			<?php echo $post->content_out;?>
	<?php if ($twitter_username = Options::get('twitter__username')) : ?>
	<div class="post-info">
	<p class="comments">Comments and corrections to <a href="http://www.twitter.com/<?php echo $twitter_username ?>">@<?php echo $twitter_username ?></a></p>
	</div>
	<?php endif; ?>


</article>

</div>
<?php $theme->display( 'footer' ); ?>
