<?php
/**
 * Template for displaying single course
 * 
 * @package CursoPro
 */

get_header(); ?>

<main class="site-main" style="padding: 3rem 0;">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            
            <a href="<?php echo get_post_type_archive_link('course'); ?>" style="display: inline-flex; align-items: center; gap: 0.5rem; color: var(--color-primary); margin-bottom: 2rem;">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M19 12H5M12 19l-7-7 7-7"/>
                </svg>
                Voltar para Cursos
            </a>

            <div style="display: grid; grid-template-columns: 1fr; gap: 2rem;">
                <div style="grid-column: 1 / -1; display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
                    <!-- Main Content -->
                    <div>
                        <?php
                        $categories = get_the_terms(get_the_ID(), 'course_category');
                        if ($categories && !is_wp_error($categories)) :
                            $category = array_shift($categories);
                        ?>
                            <span style="display: inline-block; background-color: var(--color-accent); color: white; padding: 0.25rem 0.75rem; border-radius: 0.5rem; font-size: 0.875rem; font-weight: 600; margin-bottom: 1rem;">
                                <?php echo esc_html($category->name); ?>
                            </span>
                        <?php endif; ?>

                        <h1 style="font-size: 2.5rem; margin-bottom: 1.5rem;"><?php the_title(); ?></h1>

                        <div style="color: var(--color-text-light); font-size: 1.125rem; margin-bottom: 2rem;">
                            <?php the_excerpt(); ?>
                        </div>

                        <?php if (has_post_thumbnail()) : ?>
                            <div style="border-radius: var(--radius); overflow: hidden; margin-bottom: 2rem; aspect-ratio: 16/9;">
                                <?php the_post_thumbnail('course-featured', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Benefits -->
                        <div style="margin-bottom: 2rem;">
                            <h2 style="font-size: 1.75rem; margin-bottom: 1rem;">O que você vai aprender</h2>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
                                <div style="display: flex; align-items: start; gap: 0.75rem;">
                                    <svg width="24" height="24" fill="var(--color-accent)" viewBox="0 0 24 24" style="flex-shrink: 0; margin-top: 0.25rem;">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    <span>Conteúdo completo do básico ao avançado</span>
                                </div>
                                <div style="display: flex; align-items: start; gap: 0.75rem;">
                                    <svg width="24" height="24" fill="var(--color-accent)" viewBox="0 0 24 24" style="flex-shrink: 0; margin-top: 0.25rem;">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    <span>Projetos práticos e reais</span>
                                </div>
                                <div style="display: flex; align-items: start; gap: 0.75rem;">
                                    <svg width="24" height="24" fill="var(--color-accent)" viewBox="0 0 24 24" style="flex-shrink: 0; margin-top: 0.25rem;">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    <span>Material de apoio exclusivo</span>
                                </div>
                                <div style="display: flex; align-items: start; gap: 0.75rem;">
                                    <svg width="24" height="24" fill="var(--color-accent)" viewBox="0 0 24 24" style="flex-shrink: 0; margin-top: 0.25rem;">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    <span>Suporte direto com o instrutor</span>
                                </div>
                            </div>
                        </div>

                        <!-- Course Content -->
                        <div style="margin-bottom: 2rem;">
                            <h2 style="font-size: 1.75rem; margin-bottom: 1rem;">Conteúdo do Curso</h2>
                            
                            <?php
                            $topics = cursopro_get_course_topics();
                            if (!empty($topics)) :
                            ?>
                                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                                    <?php foreach ($topics as $index => $topic) : ?>
                                        <div style="display: flex; align-items: start; gap: 0.75rem; padding: 1rem; background: var(--color-card); border-radius: var(--radius); border: 1px solid var(--color-border);">
                                            <div style="flex-shrink: 0; width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(26, 54, 93, 0.1); color: var(--color-primary); font-weight: 600;">
                                                <?php echo $index + 1; ?>
                                            </div>
                                            <span style="flex: 1;"><?php echo esc_html($topic); ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Full Description -->
                        <div style="margin-bottom: 2rem;">
                            <h2 style="font-size: 1.75rem; margin-bottom: 1rem;">Sobre o Curso</h2>
                            <div style="color: var(--color-text); line-height: 1.8;">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar - Purchase Card -->
                    <div>
                        <div style="position: sticky; top: 6rem; background: var(--color-card); padding: 2rem; border-radius: var(--radius); box-shadow: var(--shadow-card); border: 1px solid var(--color-border);">
                            <div style="font-size: 2rem; font-weight: 700; color: var(--color-primary); margin-bottom: 1.5rem;">
                                R$ <?php echo cursopro_get_course_price(); ?>
                            </div>

                            <?php
                            $hotmart_link = cursopro_get_hotmart_link();
                            if ($hotmart_link) :
                            ?>
                                <a href="<?php echo esc_url($hotmart_link); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-accent" style="display: block; text-align: center; font-size: 1.125rem; padding: 1rem; margin-bottom: 1rem;">
                                    Comprar Agora
                                </a>
                            <?php endif; ?>

                            <div style="display: flex; flex-direction: column; gap: 1rem; font-size: 0.875rem;">
                                <div style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" fill="var(--color-text-light)" viewBox="0 0 24 24">
                                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                    </svg>
                                    <span>Acesso vitalício</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" fill="var(--color-text-light)" viewBox="0 0 24 24">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                    </svg>
                                    <span>Certificado de conclusão</span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 0.75rem;">
                                    <svg width="20" height="20" fill="var(--color-text-light)" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    <span>Garantia de 7 dias</span>
                                </div>
                            </div>

                            <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--color-border);">
                                <h3 style="font-weight: 600; margin-bottom: 0.75rem;">Este curso inclui:</h3>
                                <ul style="list-style: none; padding: 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.875rem; color: var(--color-text-light);">
                                    <li>✓ Aulas em vídeo de alta qualidade</li>
                                    <li>✓ Material didático para download</li>
                                    <li>✓ Exercícios práticos</li>
                                    <li>✓ Projetos reais</li>
                                    <li>✓ Suporte por e-mail</li>
                                    <li>✓ Atualizações gratuitas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
