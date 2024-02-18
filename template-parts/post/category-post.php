 <div class="col-lg-3 card-item">
    <a href="<?php echo esc_url( get_permalink($args['id'])); ?>">
        <article class="">

            <h4 class="entry-title"><?php echo get_the_title($args['id']);?></h4>

            <?php
                get_template_part( 'template-parts/post/post-author-meta', null, array(
                    'id' => $args['id']
                ));
            ?>
        </article>
    </a>
</div>
