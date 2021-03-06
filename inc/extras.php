<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//wordpress login logo
// function inhabitent_login_logo() {
// 	echo '<style>'
// 			#login h1 a {
// 				background: url(' ')
// 			}
// }

// function the_url( $url ) {
//     return get_bloginfo( 'url' );
// }
// add_filter( 'login_headerurl', 'the_url' );

// //change wordpress login logo

function inhabitent_login_logo() {
    echo '<style>
        #login h1 a {
            background: url(' . get_template_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg) no-repeat !important;
            background-size: 300px 53px !important; width: 300px !important; height: 53px !important;
        }
        #login .button.button-primary {
            background-color: #248A83;
        }
    </style>';
}
add_action( 'login_head', 'inhabitent_login_logo' );

function login_url() {
	return home_url();
}
add_filter( 'login_headerurl', 'login_url');