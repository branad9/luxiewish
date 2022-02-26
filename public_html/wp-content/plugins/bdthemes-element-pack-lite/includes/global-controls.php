<?php

use Elementor\Controls_Manager;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;

use ElementPack\Modules\QueryControl\Controls\Group_Control_Posts;

//Query Controls
function ep_query_controls($widget) {
    $widget->start_controls_section(
        'section_query',
        [
            'label' => __( 'Query', 'bdthemes-element-pack' ),
            'tab'   => Controls_Manager::TAB_CONTENT,
        ]
    );
    
    $widget->add_group_control(
        Group_Control_Posts::get_type(),
        [
            'name'  => 'posts',
            'label' => __( 'Posts', 'bdthemes-element-pack' ),
        ]
    );
    
    $widget->add_control(
        'advanced',
        [
            'label' => __( 'Advanced', 'bdthemes-element-pack' ),
            'type'  => Controls_Manager::HEADING,
        ]
    );
    
    $widget->add_control(
        'orderby',
        [
            'label'   => __( 'Order By', 'bdthemes-element-pack' ),
            'type'    => Controls_Manager::SELECT,
            'default' => 'post_date',
            'options' => [
                'post_date'  => __( 'Date', 'bdthemes-element-pack' ),
                'post_title' => __( 'Title', 'bdthemes-element-pack' ),
                'menu_order' => __( 'Menu Order', 'bdthemes-element-pack' ),
                'rand'       => __( 'Random', 'bdthemes-element-pack' ),
            ],
        ]
    );
    
    $widget->add_control(
        'order',
        [
            'label'   => __( 'Order', 'bdthemes-element-pack' ),
            'type'    => Controls_Manager::SELECT,
            'default' => 'desc',
            'options' => [
                'asc'  => __( 'ASC', 'bdthemes-element-pack' ),
                'desc' => __( 'DESC', 'bdthemes-element-pack' ),
            ],
        ]
    );
    
    
    $widget->add_control(
        'offset',
        [
            'label'     => esc_html__( 'Offset', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::NUMBER,
            'default'   => 0,
            'condition' => [
                'posts_post_type!' => 'by_id',
            ],
        ]
    );
    
    $widget->end_controls_section();
}

//Navigation Controls
function ep_navigation_controls($widget) {
    $widget->start_controls_section(
        'section_content_navigation',
        [
            'label' => __( 'Navigation', 'bdthemes-element-pack' ),
        ]
    );
    
    $widget->add_control(
        'navigation',
        [
            'label'        => __( 'Navigation', 'bdthemes-element-pack' ),
            'type'         => Controls_Manager::SELECT,
            'default'      => 'arrows',
            'options'      => [
                'both'            => esc_html__( 'Arrows and Dots', 'bdthemes-element-pack' ),
                'arrows-fraction' => esc_html__( 'Arrows and Fraction', 'bdthemes-element-pack' ),
                'arrows'          => esc_html__( 'Arrows', 'bdthemes-element-pack' ),
                'dots'            => esc_html__( 'Dots', 'bdthemes-element-pack' ),
                'progressbar'     => esc_html__( 'Progress', 'bdthemes-element-pack' ),
                'none'            => esc_html__( 'None', 'bdthemes-element-pack' ),
            ],
            'prefix_class' => 'bdt-navigation-type-',
            'render_type'  => 'template',
        ]
    );
    
    $widget->add_control(
        'dynamic_bullets',
        [
            'label'     => __( 'Dynamic Bullets?', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SWITCHER,
            'condition' => [
                'navigation' => ['dots', 'both'],
            ],
        ]
    );
    
    $widget->add_control(
        'show_scrollbar',
        [
            'label' => __( 'Show Scrollbar?', 'bdthemes-element-pack' ),
            'type'  => Controls_Manager::SWITCHER,
        ]
    );
    
    $widget->add_control(
        'both_position',
        [
            'label'     => __( 'Arrows and Dots Position', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SELECT,
            'default'   => 'center',
            'options'   => element_pack_navigation_position(),
            'condition' => [
                'navigation' => 'both',
            ],
        
        ]
    );
    
    $widget->add_control(
        'arrows_fraction_position',
        [
            'label'     => __( 'Arrows and Fraction Position', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SELECT,
            'default'   => 'center',
            'options'   => element_pack_navigation_position(),
            'condition' => [
                'navigation' => 'arrows-fraction',
            ],
        
        ]
    );
    
    $widget->add_control(
        'arrows_position',
        [
            'label'     => __( 'Arrows Position', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SELECT,
            'default'   => 'center',
            'options'   => element_pack_navigation_position(),
            'condition' => [
                'navigation' => 'arrows',
            ],
        
        ]
    );
    
    $widget->add_control(
        'dots_position',
        [
            'label'     => __( 'Dots Position', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SELECT,
            'default'   => 'bottom-center',
            'options'   => element_pack_pagination_position(),
            'condition' => [
                'navigation' => 'dots',
            ],
        
        ]
    );
    
    $widget->add_control(
        'progress_position',
        [
            'label'     => __( 'Progress Position', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SELECT,
            'default'   => 'bottom',
            'options'   => [
                'bottom' => esc_html__( 'Bottom', 'bdthemes-element-pack' ),
                'top'    => esc_html__( 'Top', 'bdthemes-element-pack' ),
            ],
            'condition' => [
                'navigation' => 'progressbar',
            ],
        
        ]
    );
    
    $widget->add_control(
        'nav_arrows_icon',
        [
            'label'     => esc_html__( 'Arrows Icon', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SELECT,
            'default'   => '5',
            'options'   => [
                '1'        => esc_html__( 'Style 1', 'bdthemes-element-pack' ),
                '2'        => esc_html__( 'Style 2', 'bdthemes-element-pack' ),
                '3'        => esc_html__( 'Style 3', 'bdthemes-element-pack' ),
                '4'        => esc_html__( 'Style 4', 'bdthemes-element-pack' ),
                '5'        => esc_html__( 'Style 5', 'bdthemes-element-pack' ),
                '6'        => esc_html__( 'Style 6', 'bdthemes-element-pack' ),
                '7'        => esc_html__( 'Style 7', 'bdthemes-element-pack' ),
                '8'        => esc_html__( 'Style 8', 'bdthemes-element-pack' ),
                '9'        => esc_html__( 'Style 9', 'bdthemes-element-pack' ),
                '10'       => esc_html__( 'Style 10', 'bdthemes-element-pack' ),
                '11'       => esc_html__( 'Style 11', 'bdthemes-element-pack' ),
                '12'       => esc_html__( 'Style 12', 'bdthemes-element-pack' ),
                '13'       => esc_html__( 'Style 13', 'bdthemes-element-pack' ),
                '14'       => esc_html__( 'Style 14', 'bdthemes-element-pack' ),
                '15'       => esc_html__( 'Style 15', 'bdthemes-element-pack' ),
                '16'       => esc_html__( 'Style 16', 'bdthemes-element-pack' ),
                '17'       => esc_html__( 'Style 17', 'bdthemes-element-pack' ),
                '18'       => esc_html__( 'Style 18', 'bdthemes-element-pack' ),
                'circle-1' => esc_html__( 'Style 19', 'bdthemes-element-pack' ),
                'circle-2' => esc_html__( 'Style 20', 'bdthemes-element-pack' ),
                'circle-3' => esc_html__( 'Style 21', 'bdthemes-element-pack' ),
                'circle-4' => esc_html__( 'Style 22', 'bdthemes-element-pack' ),
                'square-1' => esc_html__( 'Style 23', 'bdthemes-element-pack' ),
            ],
            'condition' => [
                'navigation' => ['arrows-fraction', 'both', 'arrows'],
            ],
        ]
    );
    
    $widget->add_control(
        'hide_arrow_on_mobile',
        [
            'label'     => __( 'Hide Arrow on Mobile', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SWITCHER,
            'default'   => 'yes',
            'condition' => [
                'navigation' => ['arrows-fraction', 'arrows', 'both'],
            ],
        ]
    );
    
    $widget->end_controls_section();
}

//Carousel Settings Controls
function ep_carousel_settings($widget) {
    $widget->start_controls_section(
        'section_carousel_settings',
        [
            'label' => __( 'Carousel Settings', 'bdthemes-element-pack' ),
        ]
    );
    
    $widget->add_control(
        'skin',
        [
            'label'        => esc_html__( 'Layout', 'bdthemes-element-pack' ),
            'type'         => Controls_Manager::SELECT,
            'default'      => 'carousel',
            'options'      => [
                'carousel'  => esc_html__( 'Carousel', 'bdthemes-element-pack' ),
                'coverflow' => esc_html__( 'Coverflow', 'bdthemes-element-pack' ),
            ],
            'prefix_class' => 'bdt-carousel-style-',
            'render_type'  => 'template',
        ]
    );
    
    $widget->add_control(
        'coverflow_toggle',
        [
            'label'        => __( 'Coverflow Effect', 'bdthemes-element-pack' ),
            'type'         => Controls_Manager::POPOVER_TOGGLE,
            'return_value' => 'yes',
            'condition'    => [
                'skin' => 'coverflow'
            ]
        ]
    );
    
    $widget->start_popover();
    
    $widget->add_control(
        'coverflow_rotate',
        [
            'label'       => esc_html__( 'Rotate', 'bdthemes-element-pack' ),
            'type'        => Controls_Manager::SLIDER,
            'default'     => [
                'size' => 50,
            ],
            'range'       => [
                'px' => [
                    'min'  => -360,
                    'max'  => 360,
                    'step' => 5,
                ],
            ],
            'condition'   => [
                'coverflow_toggle' => 'yes'
            ],
            'render_type' => 'template',
        ]
    );
    
    $widget->add_control(
        'coverflow_stretch',
        [
            'label'       => __( 'Stretch', 'bdthemes-element-pack' ),
            'type'        => Controls_Manager::SLIDER,
            'default'     => [
                'size' => 0,
            ],
            'range'       => [
                'px' => [
                    'min'  => 0,
                    'step' => 10,
                    'max'  => 100,
                ],
            ],
            'condition'   => [
                'coverflow_toggle' => 'yes'
            ],
            'render_type' => 'template',
        ]
    );
    
    $widget->add_control(
        'coverflow_modifier',
        [
            'label'       => __( 'Modifier', 'bdthemes-element-pack' ),
            'type'        => Controls_Manager::SLIDER,
            'default'     => [
                'size' => 1,
            ],
            'range'       => [
                'px' => [
                    'min'  => 1,
                    'step' => 1,
                    'max'  => 10,
                ],
            ],
            'condition'   => [
                'coverflow_toggle' => 'yes'
            ],
            'render_type' => 'template',
        ]
    );
    
    $widget->add_control(
        'coverflow_depth',
        [
            'label'       => __( 'Depth', 'bdthemes-element-pack' ),
            'type'        => Controls_Manager::SLIDER,
            'default'     => [
                'size' => 100,
            ],
            'range'       => [
                'px' => [
                    'min'  => 0,
                    'step' => 10,
                    'max'  => 1000,
                ],
            ],
            'condition'   => [
                'coverflow_toggle' => 'yes'
            ],
            'render_type' => 'template',
        ]
    );
    
    $widget->end_popover();
    
    $widget->add_control(
        'hr_005',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'skin' => 'coverflow'
            ]
        ]
    );
    
    $widget->add_control(
        'autoplay',
        [
            'label'   => __( 'Autoplay', 'bdthemes-element-pack' ),
            'type'    => Controls_Manager::SWITCHER,
            'default' => 'yes',
        
        ]
    );
    
    $widget->add_control(
        'autoplay_speed',
        [
            'label'     => esc_html__( 'Autoplay Speed', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::NUMBER,
            'default'   => 5000,
            'condition' => [
                'autoplay' => 'yes',
            ],
        ]
    );
    
    $widget->add_control(
        'pauseonhover',
        [
            'label' => esc_html__( 'Pause on Hover', 'bdthemes-element-pack' ),
            'type'  => Controls_Manager::SWITCHER,
        ]
    );
    
    $widget->add_responsive_control(
        'slides_to_scroll',
        [
            'type'           => Controls_Manager::SELECT,
            'label'          => esc_html__( 'Slides to Scroll', 'bdthemes-element-pack' ),
            'default'        => 1,
            'tablet_default' => 1,
            'mobile_default' => 1,
            'options'        => [
                1 => '1',
                2 => '2',
                3 => '3',
                4 => '4',
                5 => '5',
                6 => '6',
            ],
        ]
    );
    
    $widget->add_control(
        'centered_slides',
        [
            'label'       => __( 'Center Slide', 'bdthemes-element-pack' ),
            'description' => __( 'Use even items from Layout > Columns settings for better preview.', 'bdthemes-element-pack' ),
            'type'        => Controls_Manager::SWITCHER,
        ]
    );
    
    $widget->add_control(
        'grab_cursor',
        [
            'label' => __( 'Grab Cursor', 'bdthemes-element-pack' ),
            'type'  => Controls_Manager::SWITCHER,
        ]
    );
    
    $widget->add_control(
        'loop',
        [
            'label'   => __( 'Loop', 'bdthemes-element-pack' ),
            'type'    => Controls_Manager::SWITCHER,
            'default' => 'yes',
        
        ]
    );
    
    
    $widget->add_control(
        'speed',
        [
            'label'   => __( 'Animation Speed (ms)', 'bdthemes-element-pack' ),
            'type'    => Controls_Manager::SLIDER,
            'default' => [
                'size' => 500,
            ],
            'range' => [
                'px' => [
                    'min'  => 100,
                    'max'  => 5000,
                    'step' => 50,
                ],
            ],
        ]
    );
    
    $widget->add_control(
        'observer',
        [
            'label'       => __( 'Observer', 'bdthemes-element-pack' ),
            'description' => __( 'When you use carousel in any hidden place (in tabs, accordion etc) keep it yes.', 'bdthemes-element-pack' ),
            'type'        => Controls_Manager::SWITCHER,
        ]
    );
    
    $widget->end_controls_section();
}

//Navigation Style Controls
function ep_navigation_style_controls($widget, $name) {
    $widget->start_controls_section(
        'section_style_navigation',
        [
            'label'      => __( 'Navigation', 'bdthemes-element-pack' ),
            'tab'        => Controls_Manager::TAB_STYLE,
            'conditions' => [
                'relation' => 'or',
                'terms'    => [
                    [
                        'name'     => 'navigation',
                        'operator' => '!=',
                        'value'    => 'none',
                    ],
                    [
                        'name'  => 'show_scrollbar',
                        'value' => 'yes',
                    ],
                ],
            ],
        ]
    );
    
    $widget->add_control(
        'arrows_heading',
        [
            'label'     => __( 'Arrows', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::HEADING,
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->start_controls_tabs( 'tabs_navigation_arrows_style' );
    
    $widget->start_controls_tab(
        'tabs_nav_arrows_normal',
        [
            'label'     => __( 'Normal', 'bdthemes-element-pack' ),
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'arrows_color',
        [
            'label'     => __( 'Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev i, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next i' => 'color: {{VALUE}}',
            ],
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'arrows_background',
        [
            'label'     => __( 'Background', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next' => 'background-color: {{VALUE}}',
            ],
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_group_control(
        Group_Control_Border::get_type(),
        [
            'name'      => 'nav_arrows_border',
            'selector'  => '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next',
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'border_radius',
        [
            'label'      => __( 'Border Radius', 'bdthemes-element-pack' ),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', '%'],
            'selectors'  => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'condition'  => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_padding',
        [
            'label'      => esc_html__( 'Padding', 'bdthemes-element-pack' ),
            'type'       => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', 'em', '%'],
            'selectors'  => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'condition'  => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_size',
        [
            'label'     => __( 'Size', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SLIDER,
            'range'     => [
                'px' => [
                    'min' => 10,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev i,
            {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next i' => 'font-size: {{SIZE || 24}}{{UNIT}};',
            ],
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_space',
        [
            'label'     => __( 'Space Between Arrows', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SLIDER,
            'range'     => [
                'px' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev' => 'margin-right: {{SIZE}}px;',
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next' => 'margin-left: {{SIZE}}px;',
            ],
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->end_controls_tab();
    
    $widget->start_controls_tab(
        'tabs_nav_arrows_hover',
        [
            'label'     => __( 'Hover', 'bdthemes-element-pack' ),
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'arrows_hover_color',
        [
            'label'     => __( 'Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev:hover i, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next:hover i' => 'color: {{VALUE}}',
            ],
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'arrows_hover_background',
        [
            'label'     => __( 'Background', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev:hover, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next:hover' => 'background-color: {{VALUE}}',
            ],
            'condition' => [
                'navigation!' => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'nav_arrows_hover_border_color',
        [
            'label'     => __( 'Border Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev:hover, {{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next:hover' => 'border-color: {{VALUE}};',
            ],
            'condition' => [
                'nav_arrows_border_border!' => '',
                'navigation!'               => ['dots', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->end_controls_tab();
    
    $widget->end_controls_tabs();
    
    $widget->add_control(
        'hr_1',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'navigation!' => ['arrows', 'arrows-fraction', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'dots_heading',
        [
            'label'     => __( 'Dots', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::HEADING,
            'condition' => [
                'navigation!' => ['arrows', 'arrows-fraction', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'hr_11',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'navigation!' => ['arrows', 'arrows-fraction', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'dots_color',
        [
            'label'     => __( 'Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-bullet' => 'background-color: {{VALUE}}',
            ],
            'condition' => [
                'navigation!' => ['arrows', 'arrows-fraction', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'active_dot_color',
        [
            'label'     => __( 'Active Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-bullet-active' => 'background-color: {{VALUE}}',
            ],
            'condition' => [
                'navigation!' => ['arrows', 'arrows-fraction', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'dots_size',
        [
            'label'     => __( 'Size', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SLIDER,
            'range'     => [
                'px' => [
                    'min' => 5,
                    'max' => 20,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-bullet' => 'height: {{SIZE}}{{UNIT}};width: {{SIZE}}{{UNIT}};',
            ],
            'condition' => [
                'navigation!' => ['arrows', 'arrows-fraction', 'progressbar', 'none'],
            ],
        ]
    );
    
    $widget->add_control(
        'hr_2',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'navigation' => 'arrows-fraction',
            ],
        ]
    );
    
    $widget->add_control(
        'fraction_heading',
        [
            'label'     => __( 'Fraction', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::HEADING,
            'condition' => [
                'navigation' => 'arrows-fraction',
            ],
        ]
    );
    
    $widget->add_control(
        'hr_12',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'navigation' => 'arrows-fraction',
            ],
        ]
    );
    
    $widget->add_control(
        'fraction_color',
        [
            'label'     => __( 'Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-fraction' => 'color: {{VALUE}}',
            ],
            'condition' => [
                'navigation' => 'arrows-fraction',
            ],
        ]
    );
    
    $widget->add_control(
        'active_fraction_color',
        [
            'label'     => __( 'Active Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-current' => 'color: {{VALUE}}',
            ],
            'condition' => [
                'navigation' => 'arrows-fraction',
            ],
        ]
    );
    
    $widget->add_group_control(
        Group_Control_Typography::get_type(),
        [
            'name'      => 'fraction_typography',
            'label'     => esc_html__( 'Typography', 'bdthemes-element-pack' ),
            //'scheme'    => Schemes\Typography::TYPOGRAPHY_4,
            'selector'  => '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-fraction',
            'condition' => [
                'navigation' => 'arrows-fraction',
            ],
        ]
    );
    
    $widget->add_control(
        'hr_3',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'navigation' => 'progressbar',
            ],
        ]
    );
    
    $widget->add_control(
        'progresbar_heading',
        [
            'label'     => __( 'Progresbar', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::HEADING,
            'condition' => [
                'navigation' => 'progressbar',
            ],
        ]
    );
    
    $widget->add_control(
        'hr_13',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'navigation' => 'progressbar',
            ],
        ]
    );
    
    $widget->add_control(
        'progresbar_color',
        [
            'label'     => __( 'Bar Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-progressbar' => 'background-color: {{VALUE}}',
            ],
            'condition' => [
                'navigation' => 'progressbar',
            ],
        ]
    );
    
    $widget->add_control(
        'progres_color',
        [
            'label'     => __( 'Progress Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'separator' => 'after',
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-progressbar .swiper-pagination-progressbar-fill' => 'background: {{VALUE}}',
            ],
            'condition' => [
                'navigation' => 'progressbar',
            ],
        ]
    );
    
    $widget->add_control(
        'hr_4',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'show_scrollbar' => 'yes'
            ],
        ]
    );
    
    $widget->add_control(
        'scrollbar_heading',
        [
            'label'     => __( 'Scrollbar', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::HEADING,
            'condition' => [
                'show_scrollbar' => 'yes'
            ],
        ]
    );
    
    $widget->add_control(
        'hr_14',
        [
            'type'      => Controls_Manager::DIVIDER,
            'condition' => [
                'show_scrollbar' => 'yes'
            ],
        ]
    );
    
    $widget->add_control(
        'scrollbar_color',
        [
            'label'     => __( 'Bar Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-scrollbar' => 'background: {{VALUE}}',
            ],
            'condition' => [
                'show_scrollbar' => 'yes'
            ],
        ]
    );
    
    $widget->add_control(
        'scrollbar_drag_color',
        [
            'label'     => __( 'Drag Color', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-scrollbar .swiper-scrollbar-drag' => 'background: {{VALUE}}',
            ],
            'condition' => [
                'show_scrollbar' => 'yes'
            ],
        ]
    );
    
    $widget->add_control(
        'scrollbar_height',
        [
            'label'     => __( 'Height', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SLIDER,
            'range'     => [
                'px' => [
                    'min' => 1,
                    'max' => 10,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-container-horizontal > .swiper-scrollbar' => 'height: {{SIZE}}px;',
            ],
            'condition' => [
                'show_scrollbar' => 'yes'
            ],
        ]
    );
    
    $widget->add_control(
        'hr_05',
        [
            'type' => Controls_Manager::DIVIDER,
        ]
    );
    
    $widget->add_control(
        'navi_offset_heading',
        [
            'label' => __( 'Offset', 'bdthemes-element-pack' ),
            'type'  => Controls_Manager::HEADING,
        ]
    );
    
    $widget->add_control(
        'hr_6',
        [
            'type' => Controls_Manager::DIVIDER,
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_ncx_position',
        [
            'label'          => __( 'Arrows Horizontal Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 0,
            ],
            'tablet_default' => [
                'size' => 0,
            ],
            'mobile_default' => [
                'size' => 0,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'arrows',
                    ],
                    [
                        'name'     => 'arrows_position',
                        'operator' => '!=',
                        'value'    => 'center',
                    ],
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-arrows-ncx: {{SIZE}}px;'
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_ncy_position',
        [
            'label'          => __( 'Arrows Vertical Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 40,
            ],
            'tablet_default' => [
                'size' => 40,
            ],
            'mobile_default' => [
                'size' => 40,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-arrows-ncy: {{SIZE}}px;'
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'arrows',
                    ],
                    [
                        'name'     => 'arrows_position',
                        'operator' => '!=',
                        'value'    => 'center',
                    ],
                ],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_acx_position',
        [
            'label'      => __( 'Arrows Horizontal Offset', 'bdthemes-element-pack' ),
            'type'       => Controls_Manager::SLIDER,
            'default'    => [
                'size' => -60,
            ],
            'range'      => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'selectors'  => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev' => 'left: {{SIZE}}px;',
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next' => 'right: {{SIZE}}px;',
            ],
            'conditions' => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'arrows',
                    ],
                    [
                        'name'  => 'arrows_position',
                        'value' => 'center',
                    ],
                ],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'dots_nnx_position',
        [
            'label'          => __( 'Dots Horizontal Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 0,
            ],
            'tablet_default' => [
                'size' => 0,
            ],
            'mobile_default' => [
                'size' => 0,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'dots',
                    ],
                    [
                        'name'     => 'dots_position',
                        'operator' => '!=',
                        'value'    => '',
                    ],
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-dots-nnx: {{SIZE}}px;'
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'dots_nny_position',
        [
            'label'          => __( 'Dots Vertical Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 30,
            ],
            'tablet_default' => [
                'size' => 30,
            ],
            'mobile_default' => [
                'size' => 30,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'dots',
                    ],
                    [
                        'name'     => 'dots_position',
                        'operator' => '!=',
                        'value'    => '',
                    ],
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-dots-nny: {{SIZE}}px;'
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'both_ncx_position',
        [
            'label'          => __( 'Arrows & Dots Horizontal Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 0,
            ],
            'tablet_default' => [
                'size' => 0,
            ],
            'mobile_default' => [
                'size' => 0,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'both',
                    ],
                    [
                        'name'     => 'both_position',
                        'operator' => '!=',
                        'value'    => 'center',
                    ],
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-both-ncx: {{SIZE}}px;'
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'both_ncy_position',
        [
            'label'          => __( 'Arrows & Dots Vertical Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 40,
            ],
            'tablet_default' => [
                'size' => 40,
            ],
            'mobile_default' => [
                'size' => 40,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'both',
                    ],
                    [
                        'name'     => 'both_position',
                        'operator' => '!=',
                        'value'    => 'center',
                    ],
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-both-ncy: {{SIZE}}px;'
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'both_cx_position',
        [
            'label'      => __( 'Arrows Offset', 'bdthemes-element-pack' ),
            'type'       => Controls_Manager::SLIDER,
            'default'    => [
                'size' => -60,
            ],
            'range'      => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'selectors'  => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev' => 'left: {{SIZE}}px;',
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next' => 'right: {{SIZE}}px;',
            ],
            'conditions' => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'both',
                    ],
                    [
                        'name'  => 'both_position',
                        'value' => 'center',
                    ],
                ],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'both_cy_position',
        [
            'label'      => __( 'Dots Offset', 'bdthemes-element-pack' ),
            'type'       => Controls_Manager::SLIDER,
            'default'    => [
                'size' => 30,
            ],
            'range'      => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'selectors'  => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-dots-container' => 'transform: translateY({{SIZE}}px);',
            ],
            'conditions' => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'both',
                    ],
                    [
                        'name'  => 'both_position',
                        'value' => 'center',
                    ],
                ],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_fraction_ncx_position',
        [
            'label'          => __( 'Arrows & Fraction Horizontal Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 0,
            ],
            'tablet_default' => [
                'size' => 0,
            ],
            'mobile_default' => [
                'size' => 0,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'arrows-fraction',
                    ],
                    [
                        'name'     => 'arrows_fraction_position',
                        'operator' => '!=',
                        'value'    => 'center',
                    ],
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-arrows-fraction-ncx: {{SIZE}}px;'
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_fraction_ncy_position',
        [
            'label'          => __( 'Arrows & Fraction Vertical Offset', 'bdthemes-element-pack' ),
            'type'           => Controls_Manager::SLIDER,
            'default'        => [
                'size' => 40,
            ],
            'tablet_default' => [
                'size' => 40,
            ],
            'mobile_default' => [
                'size' => 40,
            ],
            'range'          => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'conditions'     => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'arrows-fraction',
                    ],
                    [
                        'name'     => 'arrows_fraction_position',
                        'operator' => '!=',
                        'value'    => 'center',
                    ],
                ],
            ],
            'selectors'      => [
                '{{WRAPPER}}' => '--ep-'. $name .'-arrows-fraction-ncy: {{SIZE}}px;'
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_fraction_cx_position',
        [
            'label'      => __( 'Arrows Offset', 'bdthemes-element-pack' ),
            'type'       => Controls_Manager::SLIDER,
            'default'    => [
                'size' => -60,
            ],
            'range'      => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'selectors'  => [
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-prev' => 'left: {{SIZE}}px;',
                '{{WRAPPER}} .bdt-'. $name .' .bdt-navigation-next' => 'right: {{SIZE}}px;',
            ],
            'conditions' => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'arrows-fraction',
                    ],
                    [
                        'name'  => 'arrows_fraction_position',
                        'value' => 'center',
                    ],
                ],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'arrows_fraction_cy_position',
        [
            'label'      => __( 'Fraction Offset', 'bdthemes-element-pack' ),
            'type'       => Controls_Manager::SLIDER,
            'default'    => [
                'size' => 30,
            ],
            'range'      => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'selectors'  => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-fraction' => 'transform: translateY({{SIZE}}px);',
            ],
            'conditions' => [
                'terms' => [
                    [
                        'name'  => 'navigation',
                        'value' => 'arrows-fraction',
                    ],
                    [
                        'name'  => 'arrows_fraction_position',
                        'value' => 'center',
                    ],
                ],
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'progress_y_position',
        [
            'label'     => __( 'Progress Offset', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SLIDER,
            'default'   => [
                'size' => 15,
            ],
            'range'     => [
                'px' => [
                    'min' => -200,
                    'max' => 200,
                ],
            ],
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-pagination-progressbar' => 'transform: translateY({{SIZE}}px);',
            ],
            'condition' => [
                'navigation' => 'progressbar',
            ],
        ]
    );
    
    $widget->add_responsive_control(
        'scrollbar_vertical_offset',
        [
            'label'     => __( 'Scrollbar Offset', 'bdthemes-element-pack' ),
            'type'      => Controls_Manager::SLIDER,
            'selectors' => [
                '{{WRAPPER}} .bdt-'. $name .' .swiper-container-horizontal > .swiper-scrollbar' => 'bottom: {{SIZE}}px;',
            ],
            'condition' => [
                'show_scrollbar' => 'yes'
            ],
        ]
    );
    
    $widget->end_controls_section();
}

//Image Mask Controls
function ep_image_mask($widget) {
    $widget->start_popover();

    $widget->add_control(
        'image_mask_shape',
        [
            'label'     => esc_html__('Masking Shape', 'bdthemes-element-pack'),
            'title'     => esc_html__('Masking Shape', 'bdthemes-element-pack'),
            'type'      => Controls_Manager::CHOOSE,
            'default'   => 'default',
            'options'   => [
                'default' => [
                    'title' => esc_html__('Default Shapes', 'bdthemes-element-pack'),
                    'icon'  => 'eicon-star',
                ],
                'custom'  => [
                    'title' => esc_html__('Custom Shape', 'bdthemes-element-pack'),
                    'icon'  => 'eicon-image-bold',
                ],
            ],
            'toggle'    => false,
            'condition' => [
                'image_mask_popover' => 'yes',
            ],
        ]
    );

    $widget->add_control(
        'image_mask_shape_default',
        [
            'label'          => _x('Default', 'Mask Image', 'bdthemes-element-pack'),
            'label_block'    => true,
            'show_label'     => false,
            'type'           => Controls_Manager::SELECT,
            'default'        => 0,
            'options'        => element_pack_mask_shapes(),
            'selectors'      => [
                '{{WRAPPER}} .bdt-image-mask' => '-webkit-mask-image: url({{VALUE}}); mask-image: url({{VALUE}});',
            ],
            'condition'      => [
                'image_mask_popover' => 'yes',
                'image_mask_shape'   => 'default',
            ],
            'style_transfer' => true,
        ]
    );

    $widget->add_control(
        'image_mask_shape_custom',
        [
            'label'      => _x('Custom Shape', 'Mask Image', 'bdthemes-element-pack'),
            'type'       => Controls_Manager::MEDIA,
            'show_label' => false,
            'selectors'  => [
                '{{WRAPPER}} .bdt-image-mask' => '-webkit-mask-image: url({{URL}}); mask-image: url({{URL}});',
            ],
            'condition'  => [
                'image_mask_popover' => 'yes',
                'image_mask_shape'   => 'custom',
            ],
        ]
    );

    $widget->add_control(
        'image_mask_shape_position',
        [
            'label'                => esc_html__('Position', 'bdthemes-element-pack'),
            'type'                 => Controls_Manager::SELECT,
            'default'              => 'center-center',
            'options'              => [
                'center-center' => esc_html__('Center Center', 'bdthemes-element-pack'),
                'center-left'   => esc_html__('Center Left', 'bdthemes-element-pack'),
                'center-right'  => esc_html__('Center Right', 'bdthemes-element-pack'),
                'top-center'    => esc_html__('Top Center', 'bdthemes-element-pack'),
                'top-left'      => esc_html__('Top Left', 'bdthemes-element-pack'),
                'top-right'     => esc_html__('Top Right', 'bdthemes-element-pack'),
                'bottom-center' => esc_html__('Bottom Center', 'bdthemes-element-pack'),
                'bottom-left'   => esc_html__('Bottom Left', 'bdthemes-element-pack'),
                'bottom-right'  => esc_html__('Bottom Right', 'bdthemes-element-pack'),
            ],
            'selectors_dictionary' => [
                'center-center' => 'center center',
                'center-left'   => 'center left',
                'center-right'  => 'center right',
                'top-center'    => 'top center',
                'top-left'      => 'top left',
                'top-right'     => 'top right',
                'bottom-center' => 'bottom center',
                'bottom-left'   => 'bottom left',
                'bottom-right'  => 'bottom right',
            ],
            'selectors'            => [
                '{{WRAPPER}} .bdt-image-mask' => '-webkit-mask-position: {{VALUE}}; mask-position: {{VALUE}};',
            ],
            'condition'            => [
                'image_mask_popover' => 'yes',
            ],
        ]
    );

    $widget->add_control(
        'image_mask_shape_size',
        [
            'label'     => esc_html__('Size', 'bdthemes-element-pack'),
            'type'      => Controls_Manager::SELECT,
            'default'   => 'contain',
            'options'   => [
                'auto'    => esc_html__('Auto', 'bdthemes-element-pack'),
                'cover'   => esc_html__('Cover', 'bdthemes-element-pack'),
                'contain' => esc_html__('Contain', 'bdthemes-element-pack'),
                'initial' => esc_html__('Custom', 'bdthemes-element-pack'),
            ],
            'selectors' => [
                '{{WRAPPER}} .bdt-image-mask' => '-webkit-mask-size: {{VALUE}}; mask-size: {{VALUE}};',
            ],
            'condition' => [
                'image_mask_popover' => 'yes',
            ],
        ]
    );

    $widget->add_control(
        'image_mask_shape_custom_size',
        [
            'label'      => _x('Custom Size', 'Mask Image', 'bdthemes-element-pack'),
            'type'       => Controls_Manager::SLIDER,
            'responsive' => true,
            'size_units' => ['px', 'em', '%', 'vw'],
            'range'      => [
                'px' => [
                    'min' => 0,
                    'max' => 1000,
                ],
                'em' => [
                    'min' => 0,
                    'max' => 100,
                ],
                '%'  => [
                    'min' => 0,
                    'max' => 100,
                ],
                'vw' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'default'    => [
                'size' => 100,
                'unit' => '%',
            ],
            'required'   => true,
            'selectors'  => [
                '{{WRAPPER}} .bdt-image-mask' => '-webkit-mask-size: {{SIZE}}{{UNIT}}; mask-size: {{SIZE}}{{UNIT}};',
            ],
            'condition'  => [
                'image_mask_popover'    => 'yes',
                'image_mask_shape_size' => 'initial',
            ],
        ]
    );

    $widget->add_control(
        'image_mask_shape_repeat',
        [
            'label'                => esc_html__('Repeat', 'bdthemes-element-pack'),
            'type'                 => Controls_Manager::SELECT,
            'default'              => 'no-repeat',
            'options'              => [
                'repeat'          => esc_html__('Repeat', 'bdthemes-element-pack'),
                'repeat-x'        => esc_html__('Repeat-x', 'bdthemes-element-pack'),
                'repeat-y'        => esc_html__('Repeat-y', 'bdthemes-element-pack'),
                'space'           => esc_html__('Space', 'bdthemes-element-pack'),
                'round'           => esc_html__('Round', 'bdthemes-element-pack'),
                'no-repeat'       => esc_html__('No-repeat', 'bdthemes-element-pack'),
                'repeat-space'    => esc_html__('Repeat Space', 'bdthemes-element-pack'),
                'round-space'     => esc_html__('Round Space', 'bdthemes-element-pack'),
                'no-repeat-round' => esc_html__('No-repeat Round', 'bdthemes-element-pack'),
            ],
            'selectors_dictionary' => [
                'repeat'          => 'repeat',
                'repeat-x'        => 'repeat-x',
                'repeat-y'        => 'repeat-y',
                'space'           => 'space',
                'round'           => 'round',
                'no-repeat'       => 'no-repeat',
                'repeat-space'    => 'repeat space',
                'round-space'     => 'round space',
                'no-repeat-round' => 'no-repeat round',
            ],
            'selectors'            => [
                '{{WRAPPER}} .bdt-image-mask' => '-webkit-mask-repeat: {{VALUE}}; mask-repeat: {{VALUE}};',
            ],
            'condition'            => [
                'image_mask_popover' => 'yes',
            ],
        ]
    );

    $widget->end_popover();
}

//Render Function
function render_header_attribute($widget, $name) {
    $id = 'bdt-'. $name .'-' . $widget->get_id();
    $settings = $widget->get_settings_for_display();

    $widget->add_render_attribute( 'carousel', 'id', $id );

    $elementor_vp_lg = get_option( 'elementor_viewport_lg' );
    $elementor_vp_md = get_option( 'elementor_viewport_md' );
    $viewport_lg = !empty( $elementor_vp_lg ) ? $elementor_vp_lg - 1 : 1023;
    $viewport_md = !empty( $elementor_vp_md ) ? $elementor_vp_md - 1 : 767;
    
    
    if ( 'arrows' == $settings['navigation'] ) {
        $widget->add_render_attribute( 'carousel', 'class', 'bdt-arrows-align-' . $settings['arrows_position'] );
    } elseif ( 'dots' == $settings['navigation'] ) {
        $widget->add_render_attribute( 'carousel', 'class', 'bdt-dots-align-' . $settings['dots_position'] );
    } elseif ( 'both' == $settings['navigation'] ) {
        $widget->add_render_attribute( 'carousel', 'class', 'bdt-arrows-dots-align-' . $settings['both_position'] );
    } elseif ( 'arrows-fraction' == $settings['navigation'] ) {
        $widget->add_render_attribute( 'carousel', 'class', 'bdt-arrows-dots-align-' . $settings['arrows_fraction_position'] );
    }
    
    if ( 'arrows-fraction' == $settings['navigation'] ) {
        $pagination_type = 'fraction';
    } elseif ( 'both' == $settings['navigation'] or 'dots' == $settings['navigation'] ) {
        $pagination_type = 'bullets';
    } elseif ( 'progressbar' == $settings['navigation'] ) {
        $pagination_type = 'progressbar';
    } else {
        $pagination_type = '';
    }
    
    $widget->add_render_attribute(
        [
            'carousel' => [
                'data-settings' => [
                    wp_json_encode( array_filter( [
                        "autoplay"        => ( "yes" == $settings["autoplay"] ) ? ["delay" => $settings["autoplay_speed"]] : false,
                        "loop"            => ( $settings["loop"] == "yes" ) ? true : false,
                        "speed"           => $settings["speed"]["size"],
                        "pauseOnHover"    => ( "yes" == $settings["pauseonhover"] ) ? true : false,
                        "slidesPerView"   => (int)$settings["columns_mobile"],
                        "slidesPerGroup"  => (int)$settings["slides_to_scroll_mobile"],
                        "spaceBetween"    => $settings["item_gap"]["size"],
                        "centeredSlides"  => ( $settings["centered_slides"] === "yes" ) ? true : false,
                        "grabCursor"      => ( $settings["grab_cursor"] === "yes" ) ? true : false,
                        "effect"          => $settings["skin"],
                        "observer"        => ( $settings["observer"] ) ? true : false,
                        "observeParents"  => ( $settings["observer"] ) ? true : false,
                        "breakpoints"     => [
                            (int)$viewport_md => [
                                "slidesPerView"  => (int)$settings["columns_tablet"],
                                "spaceBetween"   => $settings["item_gap"]["size"],
                                "slidesPerGroup" => (int)$settings["slides_to_scroll_tablet"]
                            ],
                            (int)$viewport_lg => [
                                "slidesPerView"  => (int)$settings["columns"],
                                "spaceBetween"   => $settings["item_gap"]["size"],
                                "slidesPerGroup" => (int)$settings["slides_to_scroll"]
                            ]
                        ],
                        "navigation"      => [
                            "nextEl" => "#" . $id . " .bdt-navigation-next",
                            "prevEl" => "#" . $id . " .bdt-navigation-prev",
                        ],
                        "pagination"      => [
                            "el"             => "#" . $id . " .swiper-pagination",
                            "type"           => $pagination_type,
                            "clickable"      => "true",
                            'dynamicBullets' => ( "yes" == $settings["dynamic_bullets"] ) ? true : false,
                        ],
                        "scrollbar"       => [
                            "el"   => "#" . $id . " .swiper-scrollbar",
                            "hide" => "true",
                        ],
                        'coverflowEffect' => [
                            'rotate'       => ( "yes" == $settings["coverflow_toggle"] ) ? $settings["coverflow_rotate"]["size"] : 50,
                            'stretch'      => ( "yes" == $settings["coverflow_toggle"] ) ? $settings["coverflow_stretch"]["size"] : 0,
                            'depth'        => ( "yes" == $settings["coverflow_toggle"] ) ? $settings["coverflow_depth"]["size"] : 100,
                            'modifier'     => ( "yes" == $settings["coverflow_toggle"] ) ? $settings["coverflow_modifier"]["size"] : 1,
                            'slideShadows' => true,
                        ],
                    
                    ] ) )
                ]
            ]
        ]
    );
}

function render_navigation($widget) {
    $settings = $widget->get_settings_for_display();
    $hide_arrow_on_mobile = $settings['hide_arrow_on_mobile'] ? ' bdt-visible@m' : '';
    
    if ( 'arrows' == $settings['navigation'] ) : ?>
        <div class="bdt-position-z-index bdt-position-<?php
            echo esc_attr( $settings['arrows_position'] . $hide_arrow_on_mobile ); ?>">
            <div class="bdt-arrows-container bdt-slidenav-container">
                <a href="" class="bdt-navigation-prev bdt-slidenav-previous bdt-icon bdt-slidenav">
                    <i class="ep-arrow-left-<?php
                        echo esc_attr( $settings['nav_arrows_icon'] ); ?>" aria-hidden="true"></i>
                </a>
                <a href="" class="bdt-navigation-next bdt-slidenav-next bdt-icon bdt-slidenav">
                    <i class="ep-arrow-right-<?php
                        echo esc_attr( $settings['nav_arrows_icon'] ); ?>" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    <?php
    endif;
}

function render_pagination($widget) {
    $settings = $widget->get_settings_for_display();
    
    if ( 'dots' == $settings['navigation'] or 'arrows-fraction' == $settings['navigation'] ) : ?>
        <div class="bdt-position-z-index bdt-position-<?php
            echo esc_attr( $settings['dots_position'] ); ?>">
            <div class="bdt-dots-container">
                <div class="swiper-pagination"></div>
            </div>
        </div>
    
    <?php
    elseif ( 'progressbar' == $settings['navigation'] ) : ?>
        <div class="swiper-pagination bdt-position-z-index bdt-position-<?php
            echo esc_attr( $settings['progress_position'] ); ?>"></div>
    <?php
    endif;
}

function render_both_navigation($widget) {
    $settings = $widget->get_settings_for_display();
    $hide_arrow_on_mobile = $settings['hide_arrow_on_mobile'] ? 'bdt-visible@m' : '';
    
    ?>
    <div class="bdt-position-z-index bdt-position-<?php
        echo esc_attr( $settings['both_position'] ); ?>">
        <div class="bdt-arrows-dots-container bdt-slidenav-container ">

            <div class="bdt-flex bdt-flex-middle">
                <div class="<?php
                    echo esc_attr( $hide_arrow_on_mobile ); ?>">
                    <a href="" class="bdt-navigation-prev bdt-slidenav-previous bdt-icon bdt-slidenav">
                        <i class="ep-arrow-left-<?php
                            echo esc_attr( $settings['nav_arrows_icon'] ); ?>" aria-hidden="true"></i>
                    </a>
                </div>
                
                <?php
                    if ( 'center' !== $settings['both_position'] ) : ?>
                        <div class="swiper-pagination"></div>
                    <?php
                    endif; ?>

                <div class="<?php
                    echo esc_attr( $hide_arrow_on_mobile ); ?>">
                    <a href="" class="bdt-navigation-next bdt-slidenav-next bdt-icon bdt-slidenav">
                        <i class="ep-arrow-right-<?php
                            echo esc_attr( $settings['nav_arrows_icon'] ); ?>" aria-hidden="true"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <?php
}

function render_arrows_fraction($widget) {
    $settings = $widget->get_settings_for_display();
    $hide_arrow_on_mobile = $settings['hide_arrow_on_mobile'] ? 'bdt-visible@m' : '';
    
    ?>
    <div class="bdt-position-z-index bdt-position-<?php
        echo esc_attr( $settings['arrows_fraction_position'] ); ?>">
        <div class="bdt-arrows-fraction-container bdt-slidenav-container ">

            <div class="bdt-flex bdt-flex-middle">
                <div class="<?php
                    echo esc_attr( $hide_arrow_on_mobile ); ?>">
                    <a href="" class="bdt-navigation-prev bdt-slidenav-previous bdt-icon bdt-slidenav">
                        <i class="ep-arrow-left-<?php
                            echo esc_attr( $settings['nav_arrows_icon'] ); ?>" aria-hidden="true"></i>
                    </a>
                </div>
                
                <?php
                    if ( 'center' !== $settings['arrows_fraction_position'] ) : ?>
                        <div class="swiper-pagination"></div>
                    <?php
                    endif; ?>

                <div class="<?php
                    echo esc_attr( $hide_arrow_on_mobile ); ?>">
                    <a href="" class="bdt-navigation-next bdt-slidenav-next bdt-icon bdt-slidenav">
                        <i class="ep-arrow-right-<?php
                            echo esc_attr( $settings['nav_arrows_icon'] ); ?>" aria-hidden="true"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <?php
}

function render_footer($widget) {
    $settings = $widget->get_settings_for_display();
    
    ?>
    </div>
    <?php
    if ( 'yes' === $settings['show_scrollbar'] ) : ?>
        <div class="swiper-scrollbar"></div>
    <?php
    endif; ?>
    </div>
    
    <?php
    if ( 'both' == $settings['navigation'] ) : ?>
        <?php render_both_navigation($widget); ?>
        <?php
        if ( 'center' === $settings['both_position'] ) : ?>
            <div class="bdt-position-z-index bdt-position-bottom">
                <div class="bdt-dots-container">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        <?php
        endif; ?>
    <?php
    elseif ( 'arrows-fraction' == $settings['navigation'] ) : ?>
        <?php render_arrows_fraction($widget); ?>
        <?php
        if ( 'center' === $settings['arrows_fraction_position'] ) : ?>
            <div class="bdt-dots-container">
                <div class="swiper-pagination"></div>
            </div>
        <?php
        endif; ?>
    <?php
    else : ?>
        <?php render_pagination($widget); ?>
        <?php render_navigation($widget); ?>
    <?php
    endif; ?>

    </div>
    
    <?php
}