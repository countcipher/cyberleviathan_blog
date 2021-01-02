<?php get_header(); ?>

        <style>
            /* .nav{
                background-color: #fffbfc;
                box-shadow: 0 5px 30px rgba(35, 31, 32, 0.4);
            }
            .nav__link-title {
                color: #231f20;
            } */
        </style>

        <?php include "includes/navigation.php"; ?>

        <!-- ==================================
                    HEADER
        =====================================-->
        <header class="header BLOG__header BLOG__header--single" style="background-image: linear-gradient(to bottom right, rgba(35, 31, 32, 0.7), rgba(191, 30, 46, 0.7), rgba(35, 31, 32, 0.7)),  url('<?php echo get_template_directory_uri(); ?>/images/blog0.jpg')">
            <div class="header__text-box">
                <!-- <h1>Blog</h1>
                <h2>Your resource center for business technology</h2> -->
            </div>
        </header>

    <div class="BLOG__wrapper single__body">

        <!-- ==================================
                    POSTS
        =====================================-->
        <section class="BLOG__posts">
            <div class="container">
            
                <!-- =============================
                        BLOG ROLE
                =============================== -->

                <?php if(have_posts()) : ?>

                    <?php while(have_posts()) : the_post(); ?>

                        <div class="BLOG__card BLOG__card--single">

                                <?php the_post_thumbnail(); ?>

                                <h1 class="post-title"><?php the_title(); ?></h1>

                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                                
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
            </div>

        </section>

        <!-- ==================================
                    SIDEBAR
        =====================================-->
        <section class="SIDEBAR">
            sidebar
        </section>

    </div>

        <!-- =============================
                        CONTACT
        =============================== -->
        <?php //include "includes/contact.php"; ?>
        
        <!-- ==============================
                        FOOTER
        ================================ -->
        <?php get_footer(); ?>