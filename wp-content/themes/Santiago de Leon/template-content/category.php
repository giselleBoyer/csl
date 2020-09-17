<?php
$category   = get_queried_object();
$fields     = get_fields($category);


$posts = get_posts(array(
        'post_type' => 'especialista',
        'numberposts' => -1,
        'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => $category->term_id,
            'include_children' => false
        )
        )
    ));
?>

<style>
    .toggle_custom .et_pb_toggle_title:before {
        right: 100% !important;
        font-size: 50px !important;
        content: "3" !important;
        color: #513081;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        -ms-transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .toggle_custom.et_pb_toggle_open .et_pb_toggle_title:before {
        -ms-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
</style>

<?php
$sc = '
[et_pb_section
    fb_built="1"
    fullwidth="on"
    _builder_version="3.23.3"
]
    [et_pb_fullwidth_header
        title="'.$category->name.'"
        text_orientation="center"
        background_overlay_color="rgba(29,0,163,0.45)"
        _builder_version="3.24"
        title_font="||||||||"
        title_font_size="40px"
        background_image="'.$fields['image'].'"
        custom_padding="156px||86px||true|"
    ]
    [/et_pb_fullwidth_header]
[/et_pb_section]
[et_pb_section
    fb_built="1"
    _builder_version="3.24"
]
    [et_pb_row
        width="100%"
        max_width="1169px"
        _builder_version="3.24"
    ]
        [et_pb_column
            type="4_4"
            _builder_version="3.24"
        ]
            [et_pb_text
                text_font_size="18px"
                _builder_version="3.24"
                text_font="||||||||"
            ]
                <p>'.html_entity_decode($category->description).'</p>
            [/et_pb_text]
        [/et_pb_column]
    [/et_pb_row]
    [et_pb_row
        _builder_version="3.24"
    ]
        [et_pb_column
            type="4_4"
            _builder_version="3.24"
        ]
            [et_pb_toggle
                use_icon_font_size="on"
                icon_font_size="50px"
                title="Horarios y ubicación dentro de la clínica"
                _builder_version="3.24"
                title_font="|700|||||||"
                body_font="||||||||"
                border_style_all="none"
                border_width_all="0px"
                background_color="#ffffff"
                module_class="toggle_custom"
            ]
                <p>'.html_entity_decode($fields['time']).'</p>
                <p>'.html_entity_decode($fields['location']).'</p>
            [/et_pb_toggle]
            [et_pb_toggle
                use_icon_font_size="on"
                icon_font_size="50px"
                title="Pruebas y Procedimientos"
                _builder_version="3.24"
                title_font="|700|||||||"
                body_font="||||||||"
                border_style_all="none"
                border_width_all="0px"
                background_color="#ffffff"
                module_class="toggle_custom"
            ]
                <p>'.html_entity_decode($fields['tests']).'</p>
            [/et_pb_toggle]
            [et_pb_toggle
                use_icon_font_size="on"
                icon_font_size="50px"
                title="Condiciones o Patologías tratadas"
                _builder_version="3.24"
                title_font="|700|||||||"
                body_font="||||||||"
                border_style_all="none"
                border_width_all="0px"
                background_color="#ffffff"
                module_class="toggle_custom"
            ]
                <p>'.html_entity_decode($fields['conditions']).'</p>
            [/et_pb_toggle]
            [et_pb_toggle
                open="on"
                use_icon_font_size="on"
                icon_font_size="50px"
                title="Doctores del área"
                _builder_version="3.24"
                title_font="|700|||||||"
                body_font="||||||||"
                border_style_all="none"
                border_width_all="0px"
                background_color="#ffffff"
                module_class="toggle_custom"
            ]
                [grid_posts type="especialista" terms="'.$category->term_id.'"][/grid_posts]
            [/et_pb_toggle]
            [et_pb_toggle
                use_icon_font_size="on"
                icon_font_size="50px"
                title="Temas relacionados al aseguramiento y pagos"
                _builder_version="3.24"
                title_font="|700|||||||"
                body_font="||||||||"
                border_style_all="none"
                border_width_all="0px"
                background_color="#ffffff"
                module_class="toggle_custom"
            ]
                <p>'.html_entity_decode($fields['payments']).'</p>
            [/et_pb_toggle]
        [/et_pb_column]
    [/et_pb_row]
[/et_pb_section]
';

echo do_shortcode($sc);