<div class="index home">

    <div class="container" id="content">


        <div class="block-container">

            <?php

                while ( have_posts() ) : the_post();

                    the_content();

                endwhile;

            ?>

        </div>

    </div>
</div>
