<div class="form-container">
    <div class="form-subcontainer">
        <div class="form-row">
            <div class="text-nuestros-container">
                <p class="text-nuestros">ENCUENTRA UN ESPECIALISTA</p>
            </div>
            <div class="form-sub-container">
                <form role="search" method="get" class="search-form" action="<?php echo home_url('/'); ?>">
                    <label>
                        <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
                        <label class="label-search-input" for="">Buscar:</label><input type="search" class="search-field dorctor-search" placeholder="<?php echo esc_attr_x('Dr. Nombre...', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />
                        <select name="category_name" id="category_name">
                        <option value="">Todos los especialistas</option>
                            <?php $categories = get_categories();
                            foreach ($categories as $key => $category) {?>
                                
                                <option value="<?php echo $category->slug; ?>"><?php echo $category->name; ?></option>
                            <?php } ?>
                        </select>
                        <input type="submit" class="search-submit search-especialistas" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                    </label>
            </div>
            </form>
        </div>
    </div>
</div>