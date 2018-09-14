<?php get_header(); the_post();?>

<div class="shop">
    <header class="shop-header">
        <a href="<?php echo site_url('/store/');?>">
            <span class="helper">
                <h1>TribalTech </h1>
                <span class="sub">Store</span>
            </span>
        </a>
    </header>

    <?php the_content(); ?>

    <div class="skew black"></div>

</div>

<?php get_footer(); ?>