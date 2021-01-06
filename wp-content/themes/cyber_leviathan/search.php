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
                    SEARCH RESULTS SECTION
        =====================================-->
        <section class="BLOG__posts SEARCH">
            <div class="container">
                <h1 class="heading">Search Results</h1>
            
                <!-- =============================
                        BLOG ROLE FOR SEARCH
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

                                <p class="time">Posted on <?php the_date(); ?></p>

                                <p><?php the_excerpt(); ?></p>

                                <a href="<?php the_permalink(); ?>"><button class="btn btn--cta">Read More <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    <?php endwhile; ?>

                    <?php else : ?>

                    <h2 class="no-results">No search results for <?php echo $_GET['s'] ?></h2>

                <?php endif; ?>
                
            </div>

        </section>

        <!-- ==================================
                    SIDEBAR
        =====================================-->
        <?php include "includes/sidebar.php" ?>

    </div>

        <!-- =============================
                        CONTACT
        =============================== -->
        <?php //include "includes/contact.php"; ?>
        
        <!-- ==============================
                        FOOTER
        ================================ -->
        <?php get_footer(); ?>