<?php
if (!function_exists('card_post_sc')) :
    function card_post_sc($atts)
    {

        $args = shortcode_atts(
            array(
                'url' => '#',
                'title' => '',
                'image' => ''
            ),
            $atts
        );

        if (empty($args['image'])) :
            $args['image'] = 'http://dev-analiticom.com/santiagodeleon/wp-content/uploads/2019/06/Portrait_Placeholder.png';
        endif;

        ob_start();
        ?>

        <div class="card-post">
            <div class="wrapper">
                <img src="<?= $args['image'] ?>" />
                <div class="data">
                    <div class="content">
                        <h4 class="title"><a href="<?= $args['url'] ?>"><?= $args['title'] ?></a></h4>
                        <p class="text">Cardiologo</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $out = ob_get_clean();

        return $out;
    }

endif;

add_shortcode('card_post', 'card_post_sc');
