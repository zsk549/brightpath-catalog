<?php
/**
 * Template for displaying course archive (all courses)
 * 
 * @package CursoPro
 */

get_header(); ?>

<main class="site-main" style="padding: 3rem 0;">
    <div class="container">
        <div style="margin-bottom: 3rem;">
            <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Todos os Cursos</h1>
            <p style="font-size: 1.125rem; color: var(--color-text-light);">
                Explore nosso catálogo completo com 117 cursos online
            </p>
        </div>

        <!-- Filters -->
        <div class="course-filters">
            <form method="get" action="<?php echo get_post_type_archive_link('course'); ?>" id="course-filter-form">
                <div class="filters-grid">
                    <!-- Search -->
                    <div class="filter-group">
                        <label for="search">Buscar Cursos</label>
                        <input 
                            type="text" 
                            id="search" 
                            name="s" 
                            placeholder="Digite o nome do curso..." 
                            value="<?php echo get_search_query(); ?>"
                        >
                    </div>

                    <!-- Category Filter -->
                    <div class="filter-group">
                        <label for="category">Categoria</label>
                        <select id="category" name="course_category">
                            <option value="">Todas as Categorias</option>
                            <?php
                            $categories = get_terms(array(
                                'taxonomy' => 'course_category',
                                'hide_empty' => true,
                            ));
                            
                            $selected_category = isset($_GET['course_category']) ? $_GET['course_category'] : '';
                            
                            if (!empty($categories) && !is_wp_error($categories)) :
                                foreach ($categories as $category) :
                            ?>
                                    <option value="<?php echo esc_attr($category->slug); ?>" <?php selected($selected_category, $category->slug); ?>>
                                        <?php echo esc_html($category->name); ?>
                                    </option>
                            <?php
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>

                    <!-- Price Filter -->
                    <div class="filter-group">
                        <label for="price">Filtrar por Preço</label>
                        <select id="price" name="price_range">
                            <option value="">Todos os Preços</option>
                            <option value="0-200" <?php selected(isset($_GET['price_range']) ? $_GET['price_range'] : '', '0-200'); ?>>Até R$ 200</option>
                            <option value="201-400" <?php selected(isset($_GET['price_range']) ? $_GET['price_range'] : '', '201-400'); ?>>R$ 201 - R$ 400</option>
                            <option value="401-plus" <?php selected(isset($_GET['price_range']) ? $_GET['price_range'] : '', '401-plus'); ?>>Acima de R$ 400</option>
                        </select>
                    </div>
                </div>

                <div style="margin-top: 1rem;">
                    <button type="submit" class="btn btn-primary">Aplicar Filtros</button>
                    <a href="<?php echo get_post_type_archive_link('course'); ?>" class="btn btn-outline" style="margin-left: 0.5rem;">Limpar Filtros</a>
                </div>
            </form>

            <?php
            $total_courses = wp_count_posts('course')->publish;
            ?>
            <div style="margin-top: 1rem; font-size: 0.875rem; color: var(--color-text-light);">
                Exibindo <?php echo $wp_query->found_posts; ?> de <?php echo $total_courses; ?> cursos
            </div>
        </div>

        <!-- Courses Grid -->
        <?php if (have_posts()) : ?>
            <div class="courses-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'course-card'); ?>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div style="margin-top: 3rem; text-align: center;">
                <?php
                the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '← Anterior',
                    'next_text' => 'Próximo →',
                ));
                ?>
            </div>
        <?php else : ?>
            <div style="text-align: center; padding: 3rem 0;">
                <p style="font-size: 1.125rem; color: var(--color-text-light);">
                    Nenhum curso encontrado com os filtros selecionados.
                </p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
