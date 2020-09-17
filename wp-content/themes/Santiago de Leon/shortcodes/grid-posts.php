<?php
if(!function_exists('grid_posts_sc')) :

    function grid_posts_sc($atts) {


        $args = shortcode_atts(
            array(
                'limit'=> 0,
                'terms' => 0,
                'type' => 'any',
            ), $atts
        );

        $posts = get_posts(array(
                    'post_type' => $args['type'],
                    'numberposts' => -1,
                    'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'id',
                        'terms' => $args['terms'],
                        'include_children' => false
                    )
                    )
                ));


        $posts = (empty($args['limit']))? $posts : array_slice($posts, 0, $args['limit'], true);

        $sc= '';
        foreach ($posts as $post) {;
            $sc .='[card_post
                title="'.$post->post_title.'"
                text=""
                url="'.get_post_permalink($post->ID).'"
                image="'.wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large')[0].'"
            ][/card_post]
            ';
        }
        $sc .= $sc;
        $sc .= $sc;
        ob_start();
?>
<style>
    .grid-posts {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .grid-posts .card-post {
        height: auto !important;
        width: 22% !important;
        margin: .3rem auto;
    }
    @media (max-width: 1024px){
        .grid-posts .card-post {
            width: 28% !important;
            margin: .5rem auto;
        }
    }

    @media (max-width: 768px){
        .grid-posts .card-post {
            width: 42% !important;
        }
    } 

    @media (max-width: 540px){
        .grid-posts .card-post {
            width: 95% !important;
        }
    } 
</style>
<div class="grid-posts"><?= do_shortcode($sc) ?></div>
<?php
        $out = ob_get_clean();
        return $out;
    }

endif;

add_shortcode('grid_posts', 'grid_posts_sc');