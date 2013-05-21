<?php

/**
 * Enqueue scripts 
 */
function twentytwelve_child_enqueue()
{
	// Add myriad pro for Peter's dev server (since it isn't covered by typekit).
	wp_register_style( 'myriad', get_stylesheet_directory_uri() . '/myriad-pro-condensed.css' );
	wp_enqueue_style( 'myriad' );

  // Load nav menu
  //wp_register_script( 'nav', get_stylesheet_directory_uri() . '/nav.js', array( 'jquery' ) );
  //wp_enqueue_script( 'nav' );
}
add_action( 'wp_enqueue_scripts', 'twentytwelve_child_enqueue' );

/**
 * Add Author to Display Posts Shortcode plugin
 * @author Bill Erickson
 * @link http://wordpress.org/extend/plugins/display-posts-shortcode/
 *
 * @param $output string, the original markup for an individual post
 * @param $atts array, all the attributes passed to the shortcode
 * @param $image string, the image part of the output
 * @param $title string, the title part of the output
 * @param $date string, the date part of the output
 * @param $excerpt string, the excerpt part of the output
 * @param $inner_wrapper string, what html element to wrap each post in (default is li)
 * @return $output string, the modified markup for an individual post
 */
function twentytwelve_child_display_posts_output( $output, $atts, $image, $title, $date, $excerpt, $inner_wrapper )
{	
	// Here's the author's name and gravatar
	if ( get_post_type() == 'the-watercooler' )
	{
		$author = '<span class="author"> by ' . get_the_author() . '</span>';
		$avatar = '<span class="avatar alignleft">' . get_avatar( get_the_author_meta( 'ID' ) ) . '</span>';

		// Use the_content instead of the_excerpt so we get links, videos, other cool stuffs...
		$excerpt = apply_filters( 'the_content', get_the_content() );
	}
	else
	{
		$author = '';
		$avatar = '';
	}

  // Add category to law cases
  if ( get_post_type() == 'legal_cases' )
    $category = '<footer class="entry-meta"> Filed Under: ' . get_the_category_list( ', ' ) . '.</footer>';
  else
    $category = ''; 

	// Now let's rebuild the output and add the $author to it
	$output = '<' . $inner_wrapper . ' class="listing-item">' . $image . $avatar . '<h3>' . $title . '</h3>' . $author . $date . $excerpt . $category . '</' . $inner_wrapper . '>';
	
	// Finally we'll return the modified output
	return $output;
}
add_filter( 'display_posts_shortcode_output', 'twentytwelve_child_display_posts_output', 10, 7 );

/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * This override removes the author from the output
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_entry_meta() {
  // Translators: used between list items, there is a space after the comma.
  $categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

  // Translators: used between list items, there is a space after the comma.
  $tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

  $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
    esc_url( get_permalink() ),
    esc_attr( get_the_time() ),
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );  

  $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
    esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ),
    get_the_author()
  );  

  // Translators: 1 is category, 2 is tag, and 3 is the date.
  if ( $tag_list ) { 
    $utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s.', 'twentytwelve' );
  } elseif ( $categories_list ) { 
    $utility_text = __( 'This entry was posted in %1$s on %3$s.', 'twentytwelve' );
  } else {
    $utility_text = __( 'This entry was posted on %3$s.', 'twentytwelve' );
  }

  printf(
    $utility_text,
    $categories_list,
    $tag_list,
    $date
  );  
}

/**
 * These fixes work with the inflexible wordpress system
 * to make sure our html validates...
 */
function dredf_content_fixes( $content )
{
  // Fix bug with magazine-columns where extra p's are added
  $content = preg_replace(
    '/(<p>)?((<\/div>)?<div class="column c\d">)<\/p>/', 
    '\2',
    $content
  );  

  return $content;
}
add_filter( 'the_content', 'dredf_content_fixes', 10 );

/**
 * Add WAI-ARIA markers
 * and tabindex to give links focus when clicked
 * and only-child to simulate :only-child selector
 */
//function twentytwelve_child_nav( $items ) { 
  //$items = preg_replace( '/<(a .*?)>/', '<\1 tabindex="0" role="menuitem">', $items );
  //$items = preg_replace( '/<(a .*?)>(.*?<\/a><\/li>)/', '<\1 class="only-child" aria-haspopup="false">\2', $items );
  //$items = preg_replace( '/<(li .*?)>/', '<\1 role="presentation">', $items );
  //return $items;
//}
//add_filter( 'wp_nav_menu_items', 'twentytwelve_child_nav' );
