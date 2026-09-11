<?php
get_header();
?>

<main class="max-w-6xl mx-auto px-4 py-20">
    <?php if ( have_posts() ) : ?>
        <div class="grid md:grid-cols-2 gap-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="bg-bg-card p-6 rounded-xl border border-custom">
                    <h2 class="text-2xl font-bold mb-2">
                        <a href="<?php the_permalink(); ?>" class="hover:text-gradient"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-text-muted text-sm mb-4">
                        <?php echo get_the_date(); ?>
                    </div>
                    <div class="text-text-muted leading-relaxed">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="text-center text-text-muted">Nenhum conteúdo encontrado.</p>
    <?php endif; ?>
</main>

<?php
get_footer();
?>