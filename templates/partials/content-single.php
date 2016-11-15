<?php
/**
 * Displays single post content
 */
?>
<article id="post-<?php the_ID(); ?>" >

    <header class="post-header">
        <section class="single-post__image">
            <?php the_post_thumbnail(); ?>
        </section>
    </header>
     <section class="single-post__content">
        <h4 class="post-date"><?php the_date(); ?></h4>
        <h2 class="post-title">
            <?php the_title(); ?>
        </h2>
        <p class="ornements">
          d
        </p>
        <?php get_template_part('/post-meta'); ?>

      <p><?php the_content(); ?></p>
     
     <div class = single__actions>
       <div class="single__facebook single__button">PARTAGER <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
     width="12.693px" height="12.693px" fill="#213958"
 viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
        <path d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029
    c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77
    L40.43,21.739z"/>
    </svg></div>
        <a href="https://twitter.com/share" target="_blank"><div class="single__twitter single__button">TWITTER<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="12.693px" height="12.693px" fill="#55acee" viewBox="0 0 56.693 56.693" enable-background="new 0 0 56.693 56.693" xml:space="preserve">
<path d="M52.837,15.065c-1.811,0.805-3.76,1.348-5.805,1.591c2.088-1.25,3.689-3.23,4.444-5.592c-1.953,1.159-4.115,2-6.418,2.454
    c-1.843-1.964-4.47-3.192-7.377-3.192c-5.581,0-10.106,4.525-10.106,10.107c0,0.791,0.089,1.562,0.262,2.303
    c-8.4-0.422-15.848-4.445-20.833-10.56c-0.87,1.492-1.368,3.228-1.368,5.082c0,3.506,1.784,6.6,4.496,8.412
    c-1.656-0.053-3.215-0.508-4.578-1.265c-0.001,0.042-0.001,0.085-0.001,0.128c0,4.896,3.484,8.98,8.108,9.91
    c-0.848,0.23-1.741,0.354-2.663,0.354c-0.652,0-1.285-0.063-1.902-0.182c1.287,4.015,5.019,6.938,9.441,7.019
    c-3.459,2.711-7.816,4.327-12.552,4.327c-0.815,0-1.62-0.048-2.411-0.142c4.474,2.869,9.786,4.541,15.493,4.541
    c18.591,0,28.756-15.4,28.756-28.756c0-0.438-0.009-0.875-0.028-1.309C49.769,18.873,51.483,17.092,52.837,15.065z"/>
</svg></div></a>
        <div class="single__email single__button">EMAIL<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     width="14px" height="14px" fill="#d81128" viewBox="21.5 41.5 453 328" enable-background="new 21.5 41.5 453 328" xml:space="preserve">
<path d="M67.2,89.2v18V325.6h361.6V110V89.2H67.2z M372,115.6l-121.6,78.8l-122-78.8H372z M402.8,299.2H93.6V124l156.8,102
    l152.4-98.8V299.2z"/>
</svg>
</div>
        <div class="single__back single__button">Retour</div>
    </div>
    </section>

    <footer class="post-footer">
        <?php get_template_part('/comments-link'); ?>
    </footer>

</article>
