<?php get_header(); ?>

<h1>وبلاگ من</h1>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
        <article>
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            
            <div class="post-meta">
                <?php echo get_the_date(); ?> | 
                <?php the_author(); ?>
            </div>

            <div class="post-content">
                <?php the_excerpt(); ?>
            </div>

            <a href="<?php the_permalink(); ?>" class="read-more">
                ادامه مطلب →
            </a>
        </article>

    <?php endwhile; ?>
<?php else : ?>
    <p>هیچ پستی پیدا نشد.</p>
<?php endif; ?>

<?php get_footer(); ?>