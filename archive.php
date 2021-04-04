<?php get_header(); ?>

    
<header class="hero-one">
        <a class="home" href=" <?php echo home_url(); ?>"><i class="fas fa-home"></i></a>
    <div class="hero-text">
        <h1 class="blog-title"><?php echo 'Kategori '; single_cat_title(); ?></h1>
    </div>
</header>

<main>
    <section class="content">
        <div class="post">
        <div class="portofolio">


<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<article class="portofolio-item">
                <?php the_post_thumbnail('small_thumb'); ?>
                <div class="portofolio-content">
                    <?php the_category(' &bull; '); ?>
                    <h1 class="portofolio-title"><a href=" <?php the_permalink(); ?> "> <?php the_title(); ?> </a></h1>
                </div>
        </article>
<?php		
	} 
}
?> 


</div>
</div>

</section>
</main>


<?php get_footer(); ?>