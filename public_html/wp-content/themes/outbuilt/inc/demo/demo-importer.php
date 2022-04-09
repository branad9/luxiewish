<?php

/**
 * Demo importer custom function
 * We use https://wordpress.org/plugins/one-click-demo-import/ to import our demo content
 */

// Disable branding.
add_filter('ocdi/disable_pt_branding', '__return_true');

/**
 * Define demo file
 */
function outbuilt_import_files() {
    return array(
        array(
            'import_file_name'             => 'Gym',
            'local_import_file'            => get_template_directory() . '/inc/demo/gym/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/gym/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/gym/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/gym/gym.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/gym/',
        ),
        array(
            'import_file_name'             => 'Hair Salon',
            'local_import_file'            => get_template_directory() . '/inc/demo/salon/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/salon/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/salon/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/salon/salon.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/hair-salon/',
        ),
        array(
            'import_file_name'             => 'Political',
            'local_import_file'            => get_template_directory() . '/inc/demo/political/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/political/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/political/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/political/political.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/political/',
        ),
        array(
            'import_file_name'             => 'Furniture',
            'local_import_file'            => get_template_directory() . '/inc/demo/furniture/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/furniture/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/furniture/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/furniture/furniture.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/furniture/',
        ),
        array(
            'import_file_name'             => 'Jewelry',
            'local_import_file'            => get_template_directory() . '/inc/demo/jewelry/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/jewelry/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/jewelry/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/jewelry/jewelry.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/jewelry/',
        ),
        array(
            'import_file_name'             => 'Travel',
            'local_import_file'            => get_template_directory() . '/inc/demo/travel/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/travel/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/travel/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/travel/travel.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/travel/',
        ),
        array(
            'import_file_name'             => 'Interior',
            'local_import_file'            => get_template_directory() . '/inc/demo/interior/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/interior/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/interior/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/interior/interior.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/interior/',
        ),
        array(
            'import_file_name'             => 'School',
            'local_import_file'            => get_template_directory() . '/inc/demo/school/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/school/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/school/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/school/school.png',
            'preview_url'                 => 'https://demo.theme-junkie.com/school/',
        ),
        array(
            'import_file_name'             => 'Photography',
            'local_import_file'            => get_template_directory() . '/inc/demo/photography/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/photography/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/photography/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/photography/photography.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/photography/',
        ),
        array(
            'import_file_name'             => 'Graphic Designer',
            'local_import_file'            => get_template_directory() . '/inc/demo/graphic/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/graphic/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/graphic/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/graphic/graphic.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/graphic/',
        ),
        array(
            'import_file_name'             => 'Medical',
            'local_import_file'            => get_template_directory() . '/inc/demo/medical/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/medical/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/medical/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/medical/medical.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/medicall/',
        ),
        array(
            'import_file_name'             => 'Charity',
            'local_import_file'            => get_template_directory() . '/inc/demo/charity/dummy-data.xml',
            'local_import_widget_file'     => get_template_directory() . '/inc/demo/charity/widgets.wie',
            'local_import_customizer_file' => get_template_directory() . '/inc/demo/charity/customizer.dat',
            'import_preview_image_url'    => get_template_directory_uri() . '/inc/demo/charity/charity.jpg',
            'preview_url'                 => 'https://demo.theme-junkie.com/charity/',
        )
    );
}
add_filter('ocdi/import_files', 'outbuilt_import_files');

/**
 * After import function
 */
function outbuilt_after_import_setup() {

    // Assign menus to their locations.
    $primary = get_term_by('name', 'Main', 'nav_menu');
    $social  = get_term_by('name', 'Social', 'nav_menu');

    set_theme_mod('nav_menu_locations', array(
        'menu-1' => $primary->term_id,
        'mobile' => $primary->term_id,
        'social' => $social->term_id,
    ));

    // Elementor spesific options
    update_option('elementor_disable_color_schemes', true);
    update_option('elementor_disable_typography_schemes', true);

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title('Home');
    $blog_page_id  = get_page_by_title('Blog');

    update_option('show_on_front', 'page');
    update_option('page_on_front', $front_page_id->ID);
    update_option('page_for_posts', $blog_page_id->ID);
}
add_action('ocdi/after_import', 'outbuilt_after_import_setup');

/**
 * Extra requred plugins.
 */
function outbuilt_req_import_plugins($plugins) {

    // List of plugins used by all theme demos.
    $theme_plugins = [
        [
            'name'     => 'Advanced Custom Fields',
            'slug'     => 'advanced-custom-fields',
            'required' => true,
        ],
        [
            'name'     => 'Kirki',
            'slug'     => 'kirki',
            'required' => true,
        ],
        [
            'name'     => 'Elementor Website Builder',
            'slug'     => 'elementor',
            'required' => true,
        ],
    ];

    // Check if user is on the theme recommeneded plugins step and a demo was selected.
    if (
        isset($_GET['step']) &&
        $_GET['step'] === 'import' &&
        isset($_GET['import'])
    ) {

        // Gym
        if ($_GET['import'] === '0') {
            $theme_plugins[] = [
                'name'     => 'Prime Slider – Addons For Elementor',
                'slug'     => 'bdthemes-prime-slider-lite',
                'required' => true,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Scriptless Social Sharing',
                'slug'     => 'scriptless-social-sharing',
                'required' => false,
            ];
        }

        // Salon
        if ($_GET['import'] === '1') {
            $theme_plugins[] = [
                'name'     => 'Prime Slider – Addons For Elementor',
                'slug'     => 'bdthemes-prime-slider-lite',
                'required' => true,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Politic
        if ($_GET['import'] === '2') {
            $theme_plugins[] = [
                'name'     => 'GiveWP – Donation Plugin and Fundraising Platform',
                'slug'     => 'give',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Furniture
        if ($_GET['import'] === '3') {
            $theme_plugins[] = [
                'name'     => 'WooCommerce',
                'slug'     => 'woocommerce',
                'required' => true,
            ];

            $theme_plugins[] = [
                'name'     => 'WPC Smart Quick View for WooCommerce',
                'slug'     => 'woo-smart-quick-view',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'YITH WooCommerce Wishlist',
                'slug'     => 'yith-woocommerce-wishlist',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Jewelry
        if ($_GET['import'] === '4') {
            $theme_plugins[] = [
                'name'     => 'WooCommerce',
                'slug'     => 'woocommerce',
                'required' => true,
            ];

            $theme_plugins[] = [
                'name'     => 'WPC Smart Quick View for WooCommerce',
                'slug'     => 'woo-smart-quick-view',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'YITH WooCommerce Wishlist',
                'slug'     => 'yith-woocommerce-wishlist',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Travel
        if ($_GET['import'] === '5') {

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Interior
        if ($_GET['import'] === '6') {

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // School
        if ($_GET['import'] === '7') {

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Photography
        if ($_GET['import'] === '8') {
            $theme_plugins[] = [
                'name'     => 'WooCommerce',
                'slug'     => 'woocommerce',
                'required' => true,
            ];

            $theme_plugins[] = [
                'name'     => 'WPC Smart Quick View for WooCommerce',
                'slug'     => 'woo-smart-quick-view',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'YITH WooCommerce Wishlist',
                'slug'     => 'yith-woocommerce-wishlist',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Graphic Designer
        if ($_GET['import'] === '9') {
            $theme_plugins[] = [
                'name'     => 'WooCommerce',
                'slug'     => 'woocommerce',
                'required' => true,
            ];

            $theme_plugins[] = [
                'name'     => 'WPC Smart Quick View for WooCommerce',
                'slug'     => 'woo-smart-quick-view',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'YITH WooCommerce Wishlist',
                'slug'     => 'yith-woocommerce-wishlist',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Medical
        if ($_GET['import'] === '10') {
            $theme_plugins[] = [
                'name'     => 'WooCommerce',
                'slug'     => 'woocommerce',
                'required' => true,
            ];

            $theme_plugins[] = [
                'name'     => 'WPC Smart Quick View for WooCommerce',
                'slug'     => 'woo-smart-quick-view',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'YITH WooCommerce Wishlist',
                'slug'     => 'yith-woocommerce-wishlist',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }

        // Charity
        if ($_GET['import'] === '2') {
            $theme_plugins[] = [
                'name'     => 'GiveWP – Donation Plugin and Fundraising Platform',
                'slug'     => 'give',
                'required' => false,
            ];

            $theme_plugins[] = [
                'name'     => 'Contact Form 7',
                'slug'     => 'contact-form-7',
                'required' => false,
            ];
        }
    }

    return array_merge($plugins, $theme_plugins);
}
add_filter('ocdi/register_plugins', 'outbuilt_req_import_plugins');
