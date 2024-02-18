<div class="nav-wrapper">
    <div class="navigation-bar container">
        <div class="logo-container">
            <?php the_custom_logo() ; ?>
        </div>

        <div class="row">
            <div class="col main-primary-nav">
                <nav class="navbar navbar-expand-xl navbar-light">

                   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="menu-toggle-icon"></i>
                        </span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main',
                                    'depth' => 2,
                                    'container'       => 'div',
                                    'container_class' => '',
                                    'menu_class'      => 'navbar-nav',
                                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                    'walker'          => new WP_Bootstrap_Navwalker()
                                )
                            );
                        ?>
                    </div>
                </nav>

            </div>
        </div>
    </div>
</div>
