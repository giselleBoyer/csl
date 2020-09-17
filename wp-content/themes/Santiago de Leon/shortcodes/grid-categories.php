<?php
if(!function_exists('grid_categories_sc')) :

    function grid_categories_sc($atts) {


        $args = shortcode_atts(
            array(
                'limit' => 0,
                'type' => 'any',
            ), $atts
        );

        $categories = get_categories(array(
            'exclude'=>array(1),
            "hide_empty" => 0,
            "type"      => "post",
            "orderby"   => "name",
            "order"     => "ASC",
            'post_type' => $args['type']
        ));


        $categories = (empty($args['limit']))? $categories : array_slice($categories, 0, $args['limit'], true);

        $sc= '';
        foreach ($categories as $category) {;
            $sc .='[card_category
                title="'.$category->name.'"
                url="'.get_category_link($category->term_id).'"
                image="'.get_field('image',$category).'"
            ][/card_category]
            ';
        }
        ob_start();
?>

<div class="grid-categories"><?= do_shortcode($sc) ?></div>
<?php
        $out = ob_get_clean();
        return $out;
    }

endif;

add_shortcode('grid_categories', 'grid_categories_sc');