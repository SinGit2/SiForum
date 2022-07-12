        
            <ul class="cat-list">

                <li>
                <form action="<?php bloginfo('url'); ?>" method="get">
                    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" class="input-search" placeholder="Ara ve Enter"  />
                </form>
                </li>


                <li class="cat-list-home">
                <a href="<?php bloginfo('url'); ?>">
                    <span style="color:white" class="dashicons dashicons-admin-comments"></span>Tüm Tartışmalar 
                </a>
                </li>



                <?php $taxonomies = get_terms( array( 'taxonomy' => 'category', 'hide_empty' => false, 'exlude' => array(19,19) ) ); 
                foreach( $taxonomies as $c ) { ?>
                
                <li>
                    <a href="<?php echo get_term_link( $c ); ?>">
                    <span style="color:<?php echo get_term_meta($c->term_id, 'color_code', true); ?>" class="dashicons <?php echo get_term_meta($c->term_id, 'icon_slug', true); ?>"></span><?php echo $c->name; ?> 
                    </a>
                </li>

                <?php } ?> 



            </ul>
 