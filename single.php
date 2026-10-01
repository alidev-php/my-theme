
<?php
/**
 * AliTheme - Single Post Template
 * 
 * این فایل صفحه پست تکی رو نشون میده
 * شامل: عنوان، متا، محتوا، اشتراک‌گذاری، ناوبری
 *
 * @package AliTheme
 * @since 1.0.0
 */
?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
        <article class="single-post">
            <h1><?php the_title(); ?></h1>
            
            <div class="post-meta">
    <span class="meta-item">📅 <?php echo get_the_date(); ?></span>
    <span class="meta-item">✍️ <?php the_author(); ?></span>
    <span class="meta-item">⏰ ۳ دقیقه مطالعه</span>
</div>

            <div class="post-content">
                <?php the_content(); ?>
            </div>

            <div class="post-tags">
                <?php the_tags('برچسب‌ها: ', '، '); ?>
            </div>

            <a href="<?php echo home_url(); ?>" class="back-home">
                ← بازگشت به خانه
            </a>
        </article>

        <div class="comments-section">
            <?php comments_template(); ?>
        </div>

    <?php endwhile; ?>
<?php else : ?>
    <p>پستی پیدا نشد.</p>
<?php endif; ?>

<?php get_footer(); ?>