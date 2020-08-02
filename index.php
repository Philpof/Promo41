<?php
get_header()
?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

  <div class="container-fluide">
    <h1 class="singleTitre"><?php the_title(); ?></h1>


    
    <div class="row mx-auto mb-0">

      <div class="col-sm first headerarticle">

        <h1 class="headertitle pb-5"><?php the_title(); ?></h1>

        <?php the_post_thumbnail(); ?>
        <p><span id="h1span" class="text-white">Publié le <?php the_time( get_option( 'date_format' ) ); ?></span><br>
          <span> par <?php the_author(); ?> • <?php comments_number(); ?></span></p>

        <div class="headertext py-5 text-white">
          <a class="headerresp"><?php the_excerpt(); ?>></a>
        </div>
    		<p>
          <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
        </p>
        <p>Dans la catégorie <?php the_category(); ?></p>
        <p><?php the_tags(); ?></p>

        </div>
    </div>
  </div>

    <?php endwhile; endif; ?>

<?php
get_footer()
?>
