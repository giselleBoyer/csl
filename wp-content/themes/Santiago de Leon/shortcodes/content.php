<?php
if(!function_exists('content_sc')) :

    function content_sc($atts) {

        $args = shortcode_atts(
            array(
                'name' => ''
            ), $atts
        );
        ob_start();
        
        get_template_part('template-content/'.$args['name']);

        $out = ob_get_clean();

        return $out;
    }

endif;

add_shortcode('content', 'content_sc');