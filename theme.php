<?php


/**
 * The VerticalRhythm Theme
 *
 * @author Ed van Beinum <e@edvanbeinum.com>
 * 
 */
class VerticalRhythm extends Theme
{

	/**
	 * Initialize theme, apply formattting
	 *
	 * @author Ed van Beinum <e@edvanbeinum.com>
	 * @return void
	 */
	public function action_init_theme()
	{
		// Apply Format::tag_and_list() to post tags...
		Format::apply( 'tag_and_list', 'post_tags_out' );

		// Apply Format::format_date() to the post's date. The format is specified using the
		// same formats as PHP's date() function but each char is wrapped in curly braces
		Format::apply( 'format_date', 'post_pubdate_out', '{j}{S} {F} {Y}' );
	}


	/**
	 * Adds variables to be available to every template
	 *
	 * @author Ed van Beinum <e@edvanbeinum.com>
	 * @return void
	 */
	public function add_template_vars()
	{
		parent::add_template_vars();

		// Add tags
		$this->assign( 'tags', Tags::vocabulary()->get_tree() );

		// Add tagline to Site Title, if set
		$site_title = Options::get( 'title' );
		if ( Options::get( 'tagline' ) ) {
			$site_title .= " | " . Options::get( 'tagline' );
		}
		$this->assign( 'site_title', $site_title );

		// Add a class depending on which page we are looking at. This is used to switch the
		// header and link colours on each section
		switch ( $this->post->title  ) {
			case 'About':
				$page_class = 'about';
				break;
			case 'Projects':
				$page_class = 'projects';
				break;
			default:
				$page_class = '';
		}
		$this->assign( 'page_class', $page_class );

		$this->assign( 'all_pages', Posts::get( array( 'content_type' => Post::type( 'page' ) ) ) );

	}
}

?>