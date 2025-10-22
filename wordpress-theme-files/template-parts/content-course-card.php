<?php
/**
 * Template part for displaying course card
 * 
 * @package CursoPro
 */
?>

<div class="course-card">
    <div class="course-image">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('course-thumbnail'); ?>
            </a>
        <?php else : ?>
            <a href="<?php the_permalink(); ?>">
                <img src="https://via.placeholder.com/800x600?text=Curso" alt="<?php the_title(); ?>">
            </a>
        <?php endif; ?>
        
        <?php
        $categories = get_the_terms(get_the_ID(), 'course_category');
        if ($categories && !is_wp_error($categories)) :
            $category = array_shift($categories);
        ?>
            <span class="course-category"><?php echo esc_html($category->name); ?></span>
        <?php endif; ?>
    </div>

    <div class="course-content">
        <h3 class="course-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        
        <p class="course-description">
            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
        </p>

        <div class="course-price">
            R$ <?php echo cursopro_get_course_price(); ?>
        </div>

        <div class="course-actions">
            <a href="<?php the_permalink(); ?>" class="btn btn-outline">
                Ver Detalhes
            </a>
            <?php
            $hotmart_link = cursopro_get_hotmart_link();
            if ($hotmart_link) :
            ?>
                <a href="<?php echo esc_url($hotmart_link); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-accent">
                    Comprar Agora
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
