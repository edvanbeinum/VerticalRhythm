<?php $theme->display ( 'header' ); ?>


<div id="main" role="main">
	<h2>Entries tagged with '<?php echo $tag; ?>'</h2>
	<?php foreach ( $posts as $post ) : ?>
	<div class="contents">
		<p>
				<a href="<?php echo $post->permalink; ?>"
			   title="<?php echo $post->title; ?>"><?php echo $post->title; ?></a>

		<span><?php echo $post->pubdate_out; ?></span>
		</p>
	</div>
	<?php endforeach;?>
</div>
<?php $theme->display ( 'footer' ); ?>
