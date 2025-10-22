<?php
/**
 * The main template file
 * 
 * @package CursoPro
 */

get_header(); ?>

<main class="site-main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Transforme Sua Carreira com <span style="color: var(--color-accent);">117 Cursos Online</span></h1>
                <p>Aprenda no seu ritmo com os melhores cursos online. Do básico ao avançado, temos o conteúdo perfeito para impulsionar sua carreira profissional.</p>
                
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="<?php echo get_post_type_archive_link('course'); ?>" class="btn btn-accent">
                        Explorar Todos os Cursos
                    </a>
                    <a href="<?php echo get_post_type_archive_link('course'); ?>" class="btn" style="background: rgba(255,255,255,0.1); border: 2px solid rgba(255,255,255,0.3); color: white;">
                        Ver Destaques
                    </a>
                </div>
                
                <div class="hero-stats">
                    <div class="hero-stat">
                        <h3>117+</h3>
                        <p>Cursos Disponíveis</p>
                    </div>
                    <div class="hero-stat">
                        <h3>10+</h3>
                        <p>Categorias</p>
                    </div>
                    <div class="hero-stat">
                        <h3>5.000+</h3>
                        <p>Alunos Satisfeitos</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Courses -->
    <section style="padding: 4rem 0; background-color: var(--color-background-secondary);">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Cursos em Destaque</h2>
                <p style="color: var(--color-text-light); font-size: 1.125rem;">Confira nossa seleção especial de cursos mais procurados e bem avaliados</p>
            </div>

            <div class="courses-grid">
                <?php
                $featured_args = array(
                    'post_type' => 'course',
                    'posts_per_page' => 8,
                    'meta_query' => array(
                        array(
                            'key' => '_course_featured',
                            'value' => '1',
                            'compare' => '='
                        )
                    )
                );
                
                $featured_courses = new WP_Query($featured_args);
                
                if ($featured_courses->have_posts()) :
                    while ($featured_courses->have_posts()) : $featured_courses->the_post();
                        get_template_part('template-parts/content', 'course-card');
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Se não houver cursos em destaque, mostrar os 8 mais recentes
                    $recent_args = array(
                        'post_type' => 'course',
                        'posts_per_page' => 8
                    );
                    $recent_courses = new WP_Query($recent_args);
                    
                    if ($recent_courses->have_posts()) :
                        while ($recent_courses->have_posts()) : $recent_courses->the_post();
                            get_template_part('template-parts/content', 'course-card');
                        endwhile;
                        wp_reset_postdata();
                    endif;
                endif;
                ?>
            </div>

            <div class="text-center mt-4">
                <a href="<?php echo get_post_type_archive_link('course'); ?>" class="btn btn-outline">
                    Ver Todos os 117 Cursos
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section style="padding: 4rem 0;">
        <div class="container">
            <div class="text-center mb-4">
                <h2>Por Que Escolher a CursoPro?</h2>
                <p style="color: var(--color-text-light); font-size: 1.125rem;">Milhares de alunos já transformaram suas carreiras conosco</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div style="text-align: center; padding: 2rem; background: var(--color-card); border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <div style="display: inline-flex; width: 64px; height: 64px; align-items: center; justify-content: center; background: rgba(26, 54, 93, 0.1); border-radius: 50%; margin-bottom: 1rem;">
                        <svg width="32" height="32" fill="var(--color-primary)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <h3>Qualidade Garantida</h3>
                    <p style="color: var(--color-text-light);">Cursos desenvolvidos por especialistas reconhecidos no mercado</p>
                </div>

                <div style="text-align: center; padding: 2rem; background: var(--color-card); border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <div style="display: inline-flex; width: 64px; height: 64px; align-items: center; justify-content: center; background: rgba(255, 107, 53, 0.1); border-radius: 50%; margin-bottom: 1rem;">
                        <svg width="32" height="32" fill="var(--color-accent)" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <h3>Comunidade Ativa</h3>
                    <p style="color: var(--color-text-light);">Mais de 5.000 alunos aprendendo e crescendo juntos</p>
                </div>

                <div style="text-align: center; padding: 2rem; background: var(--color-card); border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <div style="display: inline-flex; width: 64px; height: 64px; align-items: center; justify-content: center; background: rgba(26, 54, 93, 0.1); border-radius: 50%; margin-bottom: 1rem;">
                        <svg width="32" height="32" fill="var(--color-primary)" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <h3>Certificados</h3>
                    <p style="color: var(--color-text-light);">Certificado de conclusão reconhecido em cada curso</p>
                </div>

                <div style="text-align: center; padding: 2rem; background: var(--color-card); border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <div style="display: inline-flex; width: 64px; height: 64px; align-items: center; justify-content: center; background: rgba(255, 107, 53, 0.1); border-radius: 50%; margin-bottom: 1rem;">
                        <svg width="32" height="32" fill="var(--color-accent)" viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"/></svg>
                    </div>
                    <h3>Aprenda no Seu Ritmo</h3>
                    <p style="color: var(--color-text-light);">Acesso vitalício e suporte completo em todos os cursos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section style="padding: 4rem 0; background-color: var(--color-background-secondary);">
        <div class="container">
            <div class="text-center mb-4">
                <h2>O Que Nossos Alunos Dizem</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div style="background: var(--color-card); padding: 2rem; border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <div style="display: flex; gap: 0.25rem; margin-bottom: 1rem;">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg width="20" height="20" fill="var(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <?php endfor; ?>
                    </div>
                    <p style="color: var(--color-text-light); margin-bottom: 1rem;">"Os cursos da CursoPro mudaram minha vida profissional. Consegui uma promoção depois de aplicar o que aprendi!"</p>
                    <div style="font-weight: 600;">Maria Silva</div>
                    <div style="font-size: 0.875rem; color: var(--color-text-light);">Marketing Digital</div>
                </div>

                <div style="background: var(--color-card); padding: 2rem; border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <div style="display: flex; gap: 0.25rem; margin-bottom: 1rem;">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg width="20" height="20" fill="var(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <?php endfor; ?>
                    </div>
                    <p style="color: var(--color-text-light); margin-bottom: 1rem;">"Conteúdo de altíssima qualidade e professores excelentes. Recomendo para todos que querem crescer profissionalmente."</p>
                    <div style="font-weight: 600;">João Santos</div>
                    <div style="font-size: 0.875rem; color: var(--color-text-light);">Desenvolvimento Web</div>
                </div>

                <div style="background: var(--color-card); padding: 2rem; border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <div style="display: flex; gap: 0.25rem; margin-bottom: 1rem;">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg width="20" height="20" fill="var(--color-accent)" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        <?php endfor; ?>
                    </div>
                    <p style="color: var(--color-text-light); margin-bottom: 1rem;">"Investimento que vale muito a pena! Os certificados ajudaram muito no meu currículo."</p>
                    <div style="font-weight: 600;">Ana Costa</div>
                    <div style="font-size: 0.875rem; color: var(--color-text-light);">Design Gráfico</div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
