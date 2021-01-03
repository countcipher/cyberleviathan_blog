<?php get_header(); ?>

        <?php include "includes/navigation.php"; ?>
        
        <!-- ==================================
                    HEADER
        =====================================-->
        <header class="header BLOG__header" style="background-image: linear-gradient(to bottom right, rgba(35, 31, 32, 0.7), rgba(191, 30, 46, 0.7), rgba(35, 31, 32, 0.7)), url('<?php echo get_template_directory_uri(); ?>/images/blog0.jpg');">
            <div class="header__text-box">
                <h1>Blog</h1>
                <h2>Your resource center for business technology</h2>
            </div>
        </header>

    <div class="BLOG__wrapper">

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

                        <div class="BLOG__card">
                                <span class="outline"></span>
                                <span class="outline"></span>
                                <span class="outline"></span>
                                <span class="outline"></span>

                                <?php the_post_thumbnail(); ?>

                                <h1><?php the_title(); ?></h1>
                                <p><?php the_excerpt(); ?></p>

                                <a href="<?php the_permalink(); ?>"><button class="btn btn--cta">Read More &rarr; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                
            </div>

        </section>

        <!-- ==================================
                    SIDEBAR
        =====================================-->
        <section class="SIDEBAR">
            <?php if(is_active_sidebar('sidebar')) : ?>

                <?php dynamic_sidebar('sidebar'); ?>

            <?php endif; ?>
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