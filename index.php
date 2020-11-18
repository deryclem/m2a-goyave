<?php
// à utiliser avec front-page.php
//wp_redirect(site_url());
//exit;
?>
<?php get_header(); ?>

<section id='content'>
  

  <fieldset id="fieldsetcontent">
    <!--<legend>index.php: contenu avec the_loop <code>while ( have_posts() )</code></legend>-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <fieldset class="post">
    <!--<legend>Article <code>the_post()</code> :</legend>-->

   	<!-- Display the Title as a link to the Post's permalink. -->

   	<h2><!-- titre du site --><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


   	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

   	<small><!--Date et auteur --><?php the_time('j F Y à G:i'); ?> par <?php the_author_posts_link(); ?></small>


   	<!-- Display the Post's content in a div box. -->

   	<div class="entry">
      <fieldset>
       <!--<legend>Contenu de l'article <code>the_content()</code></legend>-->
   		<?php the_content(); ?>
    </fieldset>
   	</div>

    
  </fieldset> <!-- closes the first div box -->

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</fieldset>
</section>

<?php get_footer(); ?>
