<section class="SIDEBAR">
    <div class="side-widget search">
        <form action="<?php echo home_url(); ?>" method="get">
            <input type="text" name="s" placeholder="Search...">
        </form>
    </div>
    <?php if(is_active_sidebar('sidebar')) : ?>

        <?php dynamic_sidebar('sidebar'); ?>

    <?php endif; ?>
</section>