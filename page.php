<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <div class="bloc-top" style="background-image:url('<?php the_post_thumbnail_url('full')?>')"></div>
    <?php the_content()?>
    <?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>