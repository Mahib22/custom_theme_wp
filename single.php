<?php get_header(); ?>

    
<header class="hero-two">
        <a class="home" href=" <?php echo home_url(); ?>"><i class="fas fa-home"></i></a>
    <div class="hero-text">
        <h1 class="blog-title"><?php the_title(); ?></h1>
    </div>
</header>

<main id="blog">
    <section class="content">
        <div class="article">


<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>

		<article class="card">
            <p> <?php the_content(); ?> </p>
        </article>
<?php		
	} 
}
?> 


</div>
</section>
</main>



<?php get_footer(); ?>