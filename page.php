<?php
/**
 * AliTheme - Page Template
 * 
 * این فایل صفحه برگه‌ها رو نشون میده
 * شامل: عنوان، محتوا، دکمه بازگشت
 *
 * @package AliTheme
 * @since 1.0.0
 */
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        
        <article class="single-page">
            <h1><?php the_title(); ?></h1>

            <div class="page-content">
                <?php the_content(); ?>
            </div>

            <a href="<?php echo home_url(); ?>" class="back-home">
                ← بازگشت به خانه
            </a>
        </article>

    <?php endwhile; ?>
<?php else : ?>
    <p>صفحه‌ای پیدا نشد.</p>
<?php endif; ?>

<?php get_footer(); ?>