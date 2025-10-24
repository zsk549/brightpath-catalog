<?php get_header(); ?>

<main id="main-content">
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1>Transforme Sua Carreira com 117 Cursos Online</h1>
      <p class="price-highlight">Cada curso por APENAS R$ 19,90!</p>
      <p>Aprenda no seu ritmo, de qualquer lugar, com os melhores cursos do mercado</p>
      
      <div style="margin-top: 2rem;">
        <a href="#catalogo" class="btn btn-primary">Ver Catálogo Completo</a>
      </div>
      
      <div class="hero-stats">
        <div class="hero-stat">
          <div class="hero-stat-number">117</div>
          <div>Cursos Disponíveis</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number">12</div>
          <div>Categorias</div>
        </div>
        <div class="hero-stat">
          <div class="hero-stat-number">5.000+</div>
          <div>Alunos Satisfeitos</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Video Section -->
  <section class="video-section">
    <div class="container">
      <h2>Sua Jornada de Transformação Começa Aqui!</h2>
      <div class="video-placeholder">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/video-thumbnail.jpg" alt="Vídeo de Apresentação">
      </div>
      <p style="margin-top: 1.5rem; font-size: 1.1rem;">
        Assista a este vídeo para descobrir como você pode acelerar seus resultados e alcançar o sucesso que sempre sonhou com nossos 117 cursos exclusivos.
      </p>
      <div style="margin-top: 1.5rem;">
        <a href="#catalogo" class="btn btn-primary">COMEÇAR MINHA TRANSFORMAÇÃO AGORA</a>
      </div>
    </div>
  </section>

  <!-- Courses Section -->
  <section id="catalogo" class="courses-section">
    <div class="container">
      <h2 class="section-title">Catálogo de Cursos</h2>
      
      <div class="course-grid">
        <?php
        // Loop de Cursos (exemplo com posts personalizados)
        $args = array(
          'post_type' => 'course',
          'posts_per_page' => -1,
          'orderby' => 'title',
          'order' => 'ASC'
        );
        
        $courses_query = new WP_Query($args);
        
        if ($courses_query->have_posts()) :
          while ($courses_query->have_posts()) : $courses_query->the_post();
            $price = get_post_meta(get_the_ID(), '_course_price', true) ?: '19.90';
            $hotmart_link = get_post_meta(get_the_ID(), '_course_hotmart_link', true);
            $category_terms = get_the_terms(get_the_ID(), 'course_category');
            $category = $category_terms ? $category_terms[0]->name : 'Geral';
        ?>
          
          <article class="course-card">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
            <?php endif; ?>
            
            <div class="course-card-content">
              <span class="category"><?php echo esc_html($category); ?></span>
              <h3><?php the_title(); ?></h3>
              <p class="price">R$ <?php echo number_format($price, 2, ',', '.'); ?></p>
              
              <div style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <a href="<?php the_permalink(); ?>" class="btn btn-outline" style="flex: 1; text-align: center;">
                  Ver Detalhes
                </a>
                <?php if ($hotmart_link) : ?>
                  <a href="<?php echo esc_url($hotmart_link); ?>" target="_blank" class="btn btn-primary" style="flex: 1; text-align: center;">
                    Comprar Agora
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </article>
          
        <?php
          endwhile;
          wp_reset_postdata();
        else :
        ?>
          <p>Nenhum curso encontrado.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
