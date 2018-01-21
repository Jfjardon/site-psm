<?php

namespace App;
use Sober\Controller\Controller;

//Protect the file to direct Access wia url
if ( ! defined( 'ABSPATH' )) {
    header('Location: http://tinyurl.com/ydek4vj2');
    exit; // Exit if accessed directly
}
class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Résultats de recherche "%s"', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Il n\'y a rien du tout par ici 😟', 'sage');
        }
        return get_the_title();
    }

    public function get_menu_class(){
        if (is_home()|| is_front_page()) {
            $menu_class = 'is-home';
        }else if(is_page('credits')){
            $menu_class = 'is-credits';
        }else{
            $menu_class = 'is-not-home';
        }
        return $menu_class;
    }

    public static function get_default_image_article_thumbnail() {
        //$default_img = get_template_directory_uri().'/../dist/images/960-540-abstract-'. rand(1,6).'.jpg';
        if(get_post_type() == 'project' && wp_get_post_terms(get_the_ID(), 'project_type')[0]->name == 'Projets Rhizome') {
            $default_img = get_template_directory_uri() . '/../dist/images/projets/projets-rhizome/projets-rhizomes.png';
        }else if(get_post_type() == 'project' && wp_get_post_terms(get_the_ID(), 'project_type')[0]->name == 'Projets Rhizome'){
            $default_img = get_template_directory_uri().'/../dist/images/projets/projets-pfe/projets-pfe.png';
        }else{
            $default_img = get_template_directory_uri().'/../dist/images/articles/default-article/blogger-news.jpg';
        }
        return $default_img;
    }

    public static function get_image_page_header($image=null, $format=null) {
        $image_directory = '/../dist/images/';
        if ($image != null && $format != null) {
            $default_img = get_template_directory_uri().$image_directory.$image.'.'.$format;
        }else{
            if(has_post_thumbnail()){
                if(get_post_type() != 'project'){
                    $default_img = the_post_thumbnail_url('large');
                }else{
                    $default_img = get_template_directory_uri().'/../dist/images/page_image_placeholder.jpg';
                }
            }else{
                $default_img = get_template_directory_uri().'/../dist/images/page_image_placeholder.jpg';
            }
        }
        return $default_img;
    }


    public static function get_image_projects_rhizomes() {
        if(has_post_thumbnail()){
            the_post_thumbnail( 'medium' );
        }else{
            $image = get_template_directory_uri().'/../dist/images/projets/projets-rhizome/projets-rhizomes.png';
            _e('<img src="'.$image.'" alt="Projet Rhizome">');
        }
    }

    public static function get_image_projects_pfe() {
        if(has_post_thumbnail()){
            the_post_thumbnail( 'medium' );
        }else{
            $image = get_template_directory_uri().'/../dist/images/projets/projets-rhizome/projets-rhizomes.png';
            _e('<img src="'.$image.'" alt="Projet fin d\'études">');
        }
    }

    public static function get_random_svg_face() {
        $random_svg = get_template_directory_uri().'/../dist/images/svg/visages/perso0'. rand(1,7).'.svg';
        return $random_svg;
    }

    public function get_max_post_per_page(){
        $max_post_per_page = get_option( 'posts_per_page' );
        return $max_post_per_page;
    }

    public function get_current_page_index(){
        global $paged;
        return $paged;
    }

    public static function get_main_navigation(){
        $current_user_role = wp_get_current_user()->roles;
        if ($current_user_role[0] == 'administrator' || $current_user_role[0] == 'editor'  ) {
            $args = array(
                'menu' => 'menu-admin-editeur-connecte',
                'depth' => 2,
                'item_spacing' => ''
            );
        } else if ($current_user_role[0] == 'contributor' ){
            $args = array (
                'menu' => 'menu-etudiant-connecte',
                'depth' => 2,
                'item_spacing' => ''
            );
        }else {
            $args = array (
                'menu' => 'menu-visiteur',
                'depth' => 2,
                'item_spacing' => ''
            );
        }

        return wp_nav_menu($args);
    }

    public static function check_logged_in(){
        if ( is_user_logged_in()) {
            if($_GET['redirection']){
                wp_redirect($_GET['redirection']);
            }else{
                wp_redirect( home_url() );
            }
            exit;
        }
    }

    public static function check_not_logged_in(){
        if ( !is_user_logged_in()) {
            wp_redirect( home_url() ); exit;
        }
    }
}
