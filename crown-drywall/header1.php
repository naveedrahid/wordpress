<header class="header1 header_style">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-sm-12 col-lg-2 col-xl-2">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="mob-menu">
                    <span>
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-10 col-xl-10">
                <div class="main-menu">
                    <?php require_once MENU_FILE_DIR; ?>
                    <?php menuSettings::renderPrimaryMenu(); ?>
                    <ul class="right-nav">
                        <li><a href="#"> <i class="fa fa-user"></i> Log in </a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>