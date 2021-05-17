<?php get_header() ?> <!--fonction d'insérer la partie en tête -->

   <?php if(have_posts()): ?>
   <ul>
       <?php while (have_posts()):the_post() ;?><!--the_post():fonction d'afficher l'article -->
           <a href="<?php the_permalink() ?>"><!--the_permalink():permet de génerer le lien vers un article-->
             <li><?php the_title()?> <!-- fonction d'afficher d'article -->
           </a>
               <?php the_author() ?><!-- fonction d'afficher l'auteur de l'article-->
             </li>
       <?php endwhile ?>
   </ul>
       <?php else: ?>
      <h1>Pas d'articles</h1> 
    <?php endif; ?>  

<?php get_footer() ?> <!--fonction d'insérer la partie pied de page -->