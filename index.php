<?php

get_header();
?>
    
    <div class="grid grid-cols-3">
        <div class="col-start-2">

        <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
        ?>

            <article class="grid bg-red-800 m-5 border border-danger rounded-2xl">
                <h2 class="text-4xl text-gray-300 p-2 text-center"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <?php if ( has_post_thumbnail() ): ?>
                
                <div class="justify-self-center m-3">
                    <?php the_post_thumbnail( 'medium_large' ); ?>
                </div>
                <?php endif; ?>
                <p class="m-2"><?= get_the_excerpt(); ?></p> <!--il y a une fonction dans functions.php qui filtre le nbr de mot-->
                <!-- <p class="m-2"><?php echo wp_trim_words(get_the_excerpt(), 5); ?></p> même chose qu'au dessus mais plus modulable sans le besoin de rajouter une fonction -->
            </article>

        <?php
                endwhile;
            else:
        ?>

            <p>Aucun post n'a été trouvé</p>

        <?php
            endif;
        ?>

        </div>
    </div>
<?php
get_footer();