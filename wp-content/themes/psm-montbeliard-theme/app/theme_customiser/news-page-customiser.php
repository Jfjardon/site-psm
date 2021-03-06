<?php

namespace App;
use WP_Customize_Control;
use WP_Customize_Image_Control;
use WP_Customize_Upload_Control;
use App\theme_customiser\Wysiwyg_editor_custom_control;

//Protect the file to direct Access wia url
if ( ! defined( 'ABSPATH' )) {
    header('Location: http://tinyurl.com/ydek4vj2');
    exit; // Exit if accessed directly
}

/**
 * Theme customizer
 */

add_action('customize_register',  function( $wp_customize ) {

    /**---------------------------------------------- /*
     * NEWS - PANNEL SECTIONS SELECT
    /* ---------------------------------------------- */

    $wp_customize->add_panel( 'news_page_sections_panel', array(
        'priority' => 15,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Page Actualités', 'textdomain' ),
        'description' => __( 'Administrez le contenu de la page Actualités', 'textdomain' ),
    ) );

    /**---------------------------------------------- /*
     * NEWS PAGE - SECTIONS
    /* ---------------------------------------------- */

    $wp_customize->add_section( 'news_page_header_section', array(
        'priority' => 15,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Section - Page Entête', 'textdomain' ),
        'description' => '',
        'panel' => 'news_page_sections_panel',
    ) );

    /**---------------------------------------------- /*
     * NEWS PAGE - HEADER SECTION FIELDS
    /* ---------------------------------------------- */

    //Image Licence
    $wp_customize->add_setting( 'news_page_header_section_img', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => \App\App::get_image_page_header('actualites','jpg'),
    ));

    //Image Licence control
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'news_page_header_section_img', array(
        'label' => 'Image de bannière',
        'section' => 'news_page_header_section',
        'settings' => 'news_page_header_section_img'
    )));

    // Little pencil logo pointer shortcut
    $wp_customize->selective_refresh->add_partial('news_page_header_section_img', [
        'selector' => '.news_page_header_section_img',
        'render_callback' => function () {
            return get_theme_mod('news_page_header_section_img');
        }
    ]);

    //Title
    $wp_customize->add_setting( 'news_page_header_section_title', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => 'Actualités',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );

    //Control Title
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'news_page_header_section_title', array(
        'type' => 'text',
        'section' => 'news_page_header_section',
        'settings' => 'news_page_header_section_title',
        'label' => 'Titre de la section "Entête"',
    )));

    // Little pencil logo pointer shortcut
    $wp_customize->selective_refresh->add_partial('news_page_header_section_title', [
        'selector' => '.news_page_header_section_title',
        'render_callback' => function () {
            return get_theme_mod('news_page_header_section_title');
        }
    ]);

    //Sub Title
    $wp_customize->add_setting( 'news_page_header_section_subtitle', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' =>  'Les dernières nouveautés de la formation',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage',
    ) );

    //Control Sub Title
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'news_page_header_section_subtitle', array(
        'type' => 'text',
        'section' => 'news_page_header_section',
        'settings' => 'news_page_header_section_subtitle',
        'label' => 'Sous titre de la section "Entête"',
    )));

    // Little pencil logo pointer shortcut
    $wp_customize->selective_refresh->add_partial('news_page_header_section_subtitle', [
        'selector' => '.news_page_header_section_subtitle',
        'render_callback' => function () {
            return get_theme_mod('news_page_header_section_subtitle');
        }
    ]);
});


