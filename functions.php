<?php




function pfmkws_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus( 
        array (
        'menu-header' =>__('En tête du menu', 'pfmkws'), )); 
    register_nav_menus( 
        array (
        'menu-footer' =>__('Pied de page', 'pfmkws'), ));
/*     register_nav_menu ('menu-footer', 'Pied de page');
 */}


function pfmkws_register_assets()
{
    if (is_front_page() ) {
        wp_enqueue_style("front-page-css", get_theme_file_uri("assets/css/pages/front-page.css"));
        wp_enqueue_style("front-page-css-small", get_theme_file_uri("assets/css/pages/front-page-small.css"));
        wp_enqueue_style("front-page-css-medium", get_theme_file_uri("assets/css/pages/front-page-medium.css"));
        wp_enqueue_style("front-page-css-medium-large", get_theme_file_uri("assets/css/pages/front-page-large.css"));
        wp_enqueue_style("header", get_theme_file_uri("assets/css/layout/header.css")); 
        wp_enqueue_style("header-small", get_theme_file_uri("assets/css/layout/header-small.css")); 
        wp_enqueue_style("header-medium", get_theme_file_uri("assets/css/layout/header-medium.css")); 
        wp_enqueue_style("header-large", get_theme_file_uri("assets/css/layout/header-large.css")); 
        wp_enqueue_style("navbar", get_theme_file_uri("assets/css/layout/nav.css"));
        wp_enqueue_style("carousel", get_theme_file_uri("assets/css/layout/carousel.css"));
        wp_enqueue_script( "nav-js", get_theme_file_uri( "assets/js/nav.js" ), [], false, true );
        wp_enqueue_script( "carousel-js", get_theme_file_uri( "assets/js/carousel.js" ), [], false, true );

      
        wp_register_style('reset', get_theme_file_uri("assets/css/reset.css"));
        /* wp_register_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], false, true); */

        wp_enqueue_style('reset');
        /*     wp_enqueue_script('boostrap');
 */
    }

    if (is_404()){
        wp_enqueue_style("header", get_theme_file_uri("assets/css/layout/header.css")); 
        wp_enqueue_style("header-small", get_theme_file_uri("assets/css/layout/header-small.css")); 
        wp_enqueue_style("header-medium", get_theme_file_uri("assets/css/layout/header-medium.css")); 
        wp_enqueue_style("header-large", get_theme_file_uri("assets/css/layout/header-large.css")); 
        wp_enqueue_style("navbar", get_theme_file_uri("assets/css/layout/nav.css"));
        wp_enqueue_script( "nav-js", get_theme_file_uri( "assets/js/nav.js" ), [], false, true );
        wp_register_style('reset', get_theme_file_uri("assets/css/reset.css"));
        /* wp_register_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], false, true); */

        wp_enqueue_style('reset');
    }
    if (is_archive()){

        wp_enqueue_style("header", get_theme_file_uri("assets/css/layout/header.css")); 
        wp_enqueue_style("header-small", get_theme_file_uri("assets/css/layout/header-small.css")); 
        wp_enqueue_style("header-medium", get_theme_file_uri("assets/css/layout/header-medium.css")); 
        wp_enqueue_style("header-large", get_theme_file_uri("assets/css/layout/header-large.css")); 
        wp_enqueue_style("navbar", get_theme_file_uri("assets/css/layout/nav.css"));
        wp_enqueue_script( "nav-js", get_theme_file_uri( "assets/js/nav.js" ), [], false, true );

        wp_register_style('reset', get_theme_file_uri("assets/css/reset.css"));
        /* wp_register_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], false, true); */

        wp_enqueue_style('reset');
    }
    if (is_single()){

        wp_enqueue_style("header", get_theme_file_uri("assets/css/layout/header.css")); 
        wp_enqueue_style("header-small", get_theme_file_uri("assets/css/layout/header-small.css")); 
        wp_enqueue_style("header-medium", get_theme_file_uri("assets/css/layout/header-medium.css")); 
        wp_enqueue_style("header-large", get_theme_file_uri("assets/css/layout/header-large.css")); 
        wp_enqueue_style("navbar", get_theme_file_uri("assets/css/layout/nav.css"));
        wp_enqueue_script( "nav-js", get_theme_file_uri( "assets/js/nav.js" ), [], false, true );

        wp_register_style('reset', get_theme_file_uri("assets/css/reset.css"));
        /* wp_register_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], false, true); */

        wp_enqueue_style('reset');
    }
    
    if (is_page()){
        wp_enqueue_style("header", get_theme_file_uri("assets/css/layout/header.css")); 
        wp_enqueue_style("header-small", get_theme_file_uri("assets/css/layout/header-small.css")); 
        wp_enqueue_style("header-medium", get_theme_file_uri("assets/css/layout/header-medium.css")); 
        wp_enqueue_style("header-large", get_theme_file_uri("assets/css/layout/header-large.css")); 
        wp_enqueue_style("navbar", get_theme_file_uri("assets/css/layout/nav.css"));
        wp_enqueue_script( "nav-js", get_theme_file_uri( "assets/js/nav.js" ), [], false, true );

        wp_register_style('reset', get_theme_file_uri("assets/css/reset.css"));
        /* wp_register_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], false, true); */

        wp_enqueue_style('reset');
        
    }if (is_search()){

        wp_enqueue_style("header", get_theme_file_uri("assets/css/layout/header.css")); 
        wp_enqueue_style("header-small", get_theme_file_uri("assets/css/layout/header-small.css")); 
        wp_enqueue_style("header-medium", get_theme_file_uri("assets/css/layout/header-medium.css")); 
        wp_enqueue_style("header-large", get_theme_file_uri("assets/css/layout/header-large.css")); 
        wp_enqueue_style("navbar", get_theme_file_uri("assets/css/layout/nav.css"));
        wp_enqueue_script( "nav-js", get_theme_file_uri( "assets/js/nav.js" ), [], false, true );

        wp_register_style('reset', get_theme_file_uri("assets/css/reset.css"));
        /* wp_register_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', [], false, true); */

        wp_enqueue_style('reset');
    }
}



 

 function pfmkws_menu_class($classes)
{
    $classes[] = '';

    return $classes;
}

function pfmkws_menu_link_class($attrs)
{
    $attrs['class'] = '';

    return $attrs;
} 

function pfmkws_pagination()
{
    $pages = paginate_links(['type' => 'array']);

    //Dans le cas où il n'y a pas de pagination, on ne va pas plus loin et on retourne notre résultat
    if ($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class="my-5">';
    echo '<ul class="pagination">';

    //Pour chaque page de la pagination 
    foreach ($pages as $page) {
        //la chaine ne contient pas le mot "current" (On cherche via strpos() le mot current dans $page)
        $active = strpos($page, 'current') !== false;
        //On crée une class "page-item"
        $class = 'page-item';
        //Auquel on concatene la class active 
        if ($active) {
            $class .= ' active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

add_action('after_setup_theme', 'pfmkws_supports');
add_action('wp_enqueue_scripts', 'pfmkws_register_assets');
add_filter('wp_title', 'pfmkws_title', 999, 1);
add_filter('nav_menu_css_class', 'pfmkws_menu_class');
add_filter('nav_menu_link_attributes', 'pfmkws_menu_link_class');


require get_template_directory() . './walker.php';