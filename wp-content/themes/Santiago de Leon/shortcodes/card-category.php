<?php
if(!function_exists('card_category_sc')) :

    function card_category_sc($atts) {

        $args = shortcode_atts(
            array(
                'url' => '#',
                'title' => '',
                'image' => ''
            ), $atts
        );
        ob_start();
?>

<div class="card-category">
    <figure>
        <img src="<?= $args['image'] ?>" />
        <a href="<?= $args['url'] ?>"></a>
        <figcaption>
            <p><?= $args['title'] ?></p>
        </figcaption>
    </figure>
</div>
<?php
        $out = ob_get_clean();

        return $out;

    }

endif;

add_shortcode('card_category', 'card_category_sc');