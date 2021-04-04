<?php get_header(); ?>


<header class="hero">
    <div class="hero-text">
        <h1 class="hero-title">Muhammad Mahib Arib</h1>
        <p class="hero-sub-title">Junior Front End Web Developer</p>
        <a href="#" download="CV_Mahib" class="btn bg-green"><b>Download CV</b></a>
        <a href="#" download="Sertifikat_Mahib" class="btn bg-blue"><b>Download Sertifikat</b></a>
    </div>
</header>


<main>
    <section class="content">
        <div class="post">
            <h1 class="post-label">Portofolio</h1>
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