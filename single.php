<?php get_header(); ?>




<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <div id="single" class="">
    <h1 id="singleTitre" class="container-fluide text-center py-5"><?php the_title(); ?></h1>

    <div class="progress-bar" id="progressBarA" ></div>
    <div class="progress-bar" id="progressBarB"></div>
    <div class="progress-bar" id="progressBarC"></div>


    <div id="categorie" class="row justify-content-start">
      <div  class=""><?php the_category(); ?></div>

    </div>

    <div id="singleBody" class="container d-flex flex-column col-lg-8 col-sm-12 justify-content-start">


      <p class="text-center p-2"><?php the_post_thumbnail(); ?></p>

      <div class="row justify-content-around">
        <div>Un magnifique article de <?php the_author(); ?> du <?php the_date();"  " ?></div>
        <div class=""><?php comments_number(); ?></div>
      </div>

       <div class="p-5"><?php the_content(); ?></div>

       <p>A voir aussi : <?php the_tags(); ?></p>


      <?php endwhile; else : ?>
      <article>
        <p>Sorry, no post was found !</p>
      </article>
      <?php endif; ?>
    </div>
</div>

<div class="">


<a id="retourAccueil" class=" nav-link text-white bg-dark text-center" href="<?php echo get_option('home'); ?>/"><span id="white">&lsaquo;</span><span id="blue">Retour <span id="red">Accueil</span></span><span id="white">&rsaquo;</span></a>
</div>

<?php get_footer(); ?>
