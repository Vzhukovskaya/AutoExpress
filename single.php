<?php get_header('custom'); ?>
<?php the_post(); ?>

<div class="container">
    <?php the_title(); ?>
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>