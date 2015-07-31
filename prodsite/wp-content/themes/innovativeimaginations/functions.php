<?php
    /**
     * The functions file is used to initialize everything in the theme.  It controls how the theme is loaded and
     * sets up the supported features, default actions, and default filters.  If making customizations, users
     * should create a child theme and make changes to its functions.php file (not this one).  Friends don't let
     * friends modify parent theme files. ;)
     *
     * Child themes should do their setup on the 'after_setup_theme' hook with a priority of 11 if they want to
     * override parent theme features.  Use a priority of 9 if wanting to run before the parent theme.
     *
     * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
     * General Public License as published by the Free Software Foundation; either version 2 of the License,
     * or (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
     * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
     *
     * You should have received a copy of the GNU General Public License along with this program; if not, write
     * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
     *
     * @package ini
     * @subpackage Functions
     * @version 1.0
     * @author Amen Moja Ra <amen.ra@imaginationeverywhere.info>
     * @copyright Copyright (c) 2014 - 2015, Amen Moja Ra
     * @link http://imaginationeverywhere.info/themes/belife
     * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
     */

    /* Load the core theme framework. */
    require_once( trailingslashit( get_template_directory() ) . 'library/hybrid.php' );
    new Hybrid();

    /* Do theme setup on the 'after_setup_theme' hook. */
      add_action( 'after_setup_theme', 'ini_setup', 10);

    if (!function_exists('ini_setup')){

        /**
         * ini Theme setup.
         *
         * Set up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support post thumbnails.
         *
         * @since Fat Cat Media House WordPress Theme 1.0
         */

        function ini_setup(){
            /* Add theme support for framework extensions. */
            
            /*  This is to activate the featured image in Posts
             *  The best thumbnail/image script ever. 
             */
            add_theme_support( 'get-the-image' );

            /* Enable custom template hierarchy. */
            add_theme_support( 'hybrid-core-template-hierarchy' );

            /* Load shortcodes. */
            add_theme_support( 'hybrid-core-shortcodes' );

            /*  Adds input fields in the post editor for adding post-specific 
             *  meta information as well as sets up some defaults on other pages.
             */
            add_theme_support( 'hybrid-core-seo' );

            /*  This theme uses wp_nav_menu() in one location. */
            register_nav_menus( array(
                'front_page_menu' => __( 'Front Page Menu', 'ini'),
                'default_page_menu' => __( 'Default Page Menu', 'ini'),
            ));

            /*  Here are Hybrid Core Framework Extensions which provide more 
             *  Theme Supports
             */
            
            /* Breadcrumbs. Yay! */
            add_theme_support( 'breadcrumb-trail' );
            
            remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
            remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
            remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
            remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
            remove_action( 'wp_head', 'index_rel_link' ); // index link
            remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
            remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
            remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
            remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP ver
            
            // Hook into the header to add the needed meta 
            add_action('wp_head', 'add_meta_tags', 0);

            // Hook into the header to add the needed meta 
            add_action( 'wp_head', 'add_link_tags', 2);

            // Hook into the 'wp_enqueue_scripts' action
            add_action( 'wp_enqueue_scripts', 'ini_theme_scripts' );
        
            // Enqueue Scripts in the Admin
            //add_action( 'admin_enqueue_scripts', 'Text Domain_post_listing_column_resize' );       
            
            //Set Image Sizes
            //add_action( 'init', 'text_domain_add_image_sizes' );
            
            /* Filters hooks go here. */

            //enable automatic updates for all plugins
            add_filter( 'auto_update_plugin', '__return_true' );

            // enable automatic updates for all themes
            add_filter( 'auto_update_theme', '__return_true' );
            
            /** Gravity Forms Filters 
             *  These functions are located in includes/forms.php  
            **/
            // Add custom classes to inputs
            //add_action("gform_field_input", "gf_custom_class", 10, 5);
 
            /** Gravity Forms Filters 
              * These functions are located in includes/forms.php    
            **/

            // This function forces jQuery calls to be loaded in the footer after all other scripts
            add_filter("gform_init_scripts_footer", "init_scripts");

            // filter the Gravity Forms button type 
            //add_filter("gform_submit_button", "form_submit_button", 10, 2);

            // Add a class to menu icon
            //add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
            
            //Add Prev & Next Link Styled Paginaiton
            add_filter('next_posts_link_attributes', 'next_page_posts_link_attributes');
            add_filter('previous_posts_link_attributes', 'previous_page_posts_link_attributes');
           
            /**
            * Create Advance Custom Fields Options Pages.
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/options-pages.php');

            /**
            * Register our sidebars and widgetized areas.
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/dynamic-sidebars.php');

            /**
            * Create Breadcrumbs
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/breadcrumbs.php');

            /**
            * Gravity Forms Configuration
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/forms.php');

            /**
            * Create Pagination
            *
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/pagination.php');

            /**
            * Customize Nav Menu
            */
            require_once( trailingslashit( THEME_DIR ) .'includes/walker-menu.php');
        }
    }
    
    //adds meta tags along with the title tag to the header.php file
    if (!function_exists('add_meta_tags')) {
        function add_meta_tags() {
        ?>
            
        <?php
        }
    }

    // Add the appropriate link tags to the header
    if(!function_exists('add_link_tags')){
        function add_link_tags(){
?>
            <!--[if IE]><link rel="icon"  href="favicons/favicon_16x16.ico" /><![endif]-->
            <!-- <link rel="icon" href="favicons/favicon_96x96.png"> -->
            <!-- Specifying a Webpage Icon for Web Clip -->
            <!-- <link rel="apple-touch-icon-precomposed" href="favicons/favicon_57x57.png">
            <link rel="apple-touch-icon-precomposed" sizes="72x72"  href="favicons/favicon_72x72.png">
            <link rel="apple-touch-icon-precomposed" sizes="114x114"  href="favicons/favicon_114x114.png">
            <link rel="apple-touch-icon-precomposed" sizes="144x144"  href="favicons/favicon_144x144.png">
            <link rel="apple-touch-icon-precomposed" sizes="180x180"  href="favicons/favicon_180x180.png"> -->
<?php
        }
    }

    if (!function_exists('the_slug')) {
        // Get the slug
        function the_slug() {
            $post_data = get_post($post->ID, ARRAY_A);
            $slug = $post_data['post_name'];
            return $slug; 
        }
    }
    
    if (!function_exists('special_nav_class')) {
        function special_nav_class($classes, $item){
             //if( in_array('menu-item', $classes) ){
             //        $classes[] = 'dropdown';
             //}
             //return $classes;
        }  
    }

    //Set Image Sizes
    if (!function_exists('ini_add_image_sizes')) {
        function ini_add_image_sizes() {
           //add_image_size('featured-image-name', width, height, true/false);
        }
    }

    // Register Script
    if(!function_exists('ini_theme_scripts')){
        function ini_theme_scripts(){
            global $wp_scripts;
            global $wp_styles;
            
            wp_deregister_style( 'open-sans' );
            wp_register_style( 'open-sans','http://fonts.googleapis.com/css?family=Open+Sans:300,400italic,600,700italic,400,700,800italic', false, '1.0' );
            wp_enqueue_style( 'open-sans' );

            wp_deregister_style( 'varela-round' );
            wp_register_style( 'varela-round','http://fonts.googleapis.com/css?family=Varela+Round', false, '1.0' );
            wp_enqueue_style( 'varela-round' );

            wp_deregister_style( 'font-awesome' );
            wp_register_style( 'font-awesome','http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', false, '1.0' );
            wp_enqueue_style( 'font-awesome' );

             wp_deregister_style( 'z-nav' );
            wp_register_style( 'z-nav',trailingslashit( THEME_URI ) .'external/z-nav/z-nav.css', false, '1.0' );
            wp_enqueue_style( 'z-nav' );

             wp_deregister_style( 'idangerous' );
            wp_register_style( 'idangerous',trailingslashit( THEME_URI ) .'external/swiper/idangerous.swiper.css', false, '1.0' );
            wp_enqueue_style( 'idangerous' );

             wp_deregister_style( 'style' );
            wp_register_style( 'style',trailingslashit( THEME_URI ) .'css/style.css?v=1', false, '1.0' );
            wp_enqueue_style( 'style' );

             wp_deregister_script( 'modernizr' );
             wp_register_script( 'modernizr', trailingslashit( THEME_URI ) .'external/modernizr/modernizr.custom.js', false, '1.0');
             wp_enqueue_script( 'modernizr' );

            wp_deregister_script( 'html5shiv' );
             wp_register_script( 'html5shiv','http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js', false, '1.0');
             wp_enqueue_script( 'html5shiv' );
             //Use the wp scripts constant if necesarry
             //global ;
             //Conditonally add scripts if necessary
             $wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
    
             wp_deregister_script( 'respond' );
              wp_register_script( 'respond','http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.3.0/respond.js', false, '1.0');
              wp_enqueue_script( 'respond' );
              //Use the wp scripts constant if necesarry
              //global ;
              //Conditonally add scripts if necessary
              $wp_scripts->add_data( 'respond', 'conditional', 'lt IE 9' );

             wp_deregister_style( 'ie9' );
            wp_register_style( 'ie9',trailingslashit( THEME_URI ) .'css/ie9.css', false, '1.0' );
            wp_enqueue_style( 'ie9' );
            //Conditonally add styles if necessary
            wp_style_add_data( 'ie9', 'conditional', 'lt IE 9' );
        }
    }
