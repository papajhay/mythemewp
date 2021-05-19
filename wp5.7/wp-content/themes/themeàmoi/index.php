<?php get_header() ?> <!--fonction d'insérer la partie en tête -->

<?php $sports = get_terms(['taxonomy' => 'sport']); ?>
<ul class="nav nav-pills my-4">
   <?php foreach ($sports as $sport): ?>
    <li class="nav-item">
       <a href="<?= get_term_link($sport) ?>" class="nav-link <?= is_tax('sport', $sport->term_id) ? 'active' : '' ?>"> <?= $sport->name ?></a>
    </li>
   <?php endforeach; ?>
</ul>


   <?php if(have_posts()): ?>
      <div class="row">
          <?php while (have_posts()):the_post() ;?><!--the_post():permet d'afficher l'article -->
             <div class="col-sm-4">
                <div class="card">
                    <?php the_post_thumbnail('card-header', ['class' =>'card-img-top', 'alt'=>'', 'style'=>'height: auto;'])?><!--the_post_thumbnail():génerer la taille d'image -->
                    <div class="card-body">
                         <h5 class="card-title"><?php the_title()?></h5><!--the_title():permet d'afficher le titre -->
                         <h6 class="card-subtitle mb-2 text-muted"><?php the_category()?></h6>
                         <ul>
                            <?php
                            the_terms(get_the_ID(), 'sport', '<li>', '</li><li>', '</li>')
                            ?>
                         </ul>
                         <p class="card-text">
                              <?php the_excerpt()?><!--permet de récuperer un extrait de contenu -->
                         </p>
                         <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a><!--the_permalink():permet de générer le lien -->
                    </div>
                </div>
            </div>  
          <?php endwhile ?>
      </div>

      <?php montheme_pagination() ?>

      <?= paginate_links() ?>

     <?php else: ?>
      <h1>Pas d'articles</h1> 
    <?php endif; ?>  

<?php get_footer() ?> <!--fonction d'insérer la partie pied de page -->