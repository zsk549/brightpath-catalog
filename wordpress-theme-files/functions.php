<?php
/**
 * CursoPro Theme Functions
 * 
 * @package CursoPro
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function cursopro_setup() {
    // Add support for theme features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
    
    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Menu Principal', 'cursopro'),
        'footer' => __('Menu Rodapé', 'cursopro')
    ));
    
    // Add image sizes for course thumbnails
    add_image_size('course-thumbnail', 800, 600, true);
    add_image_size('course-featured', 1200, 675, true);
}
add_action('after_setup_theme', 'cursopro_setup');

/**
 * Enqueue Styles and Scripts
 */
function cursopro_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('cursopro-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Main stylesheet
    wp_enqueue_style('cursopro-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Main JavaScript
    wp_enqueue_script('cursopro-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'cursopro_enqueue_scripts');

/**
 * Register Custom Post Type: Courses
 */
function cursopro_register_course_post_type() {
    $labels = array(
        'name'               => 'Cursos',
        'singular_name'      => 'Curso',
        'menu_name'          => 'Cursos',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Curso',
        'edit_item'          => 'Editar Curso',
        'new_item'           => 'Novo Curso',
        'view_item'          => 'Ver Curso',
        'search_items'       => 'Buscar Cursos',
        'not_found'          => 'Nenhum curso encontrado',
        'not_found_in_trash' => 'Nenhum curso na lixeira'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array('slug' => 'curso'),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-book',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'        => true,
    );

    register_post_type('course', $args);
}
add_action('init', 'cursopro_register_course_post_type');

/**
 * Register Course Category Taxonomy
 */
function cursopro_register_course_taxonomy() {
    $labels = array(
        'name'              => 'Categorias de Curso',
        'singular_name'     => 'Categoria de Curso',
        'search_items'      => 'Buscar Categorias',
        'all_items'         => 'Todas as Categorias',
        'parent_item'       => 'Categoria Pai',
        'parent_item_colon' => 'Categoria Pai:',
        'edit_item'         => 'Editar Categoria',
        'update_item'       => 'Atualizar Categoria',
        'add_new_item'      => 'Adicionar Nova Categoria',
        'new_item_name'     => 'Nome da Nova Categoria',
        'menu_name'         => 'Categorias',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categoria-curso'),
        'show_in_rest'      => true,
    );

    register_taxonomy('course_category', array('course'), $args);
}
add_action('init', 'cursopro_register_course_taxonomy');

/**
 * Add Custom Meta Boxes for Course
 */
function cursopro_add_course_meta_boxes() {
    add_meta_box(
        'course_details',
        'Detalhes do Curso',
        'cursopro_course_details_callback',
        'course',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'cursopro_add_course_meta_boxes');

/**
 * Course Details Meta Box Callback
 */
function cursopro_course_details_callback($post) {
    wp_nonce_field('cursopro_save_course_details', 'cursopro_course_details_nonce');
    
    $price = get_post_meta($post->ID, '_course_price', true);
    $hotmart_link = get_post_meta($post->ID, '_course_hotmart_link', true);
    $featured = get_post_meta($post->ID, '_course_featured', true);
    $topics = get_post_meta($post->ID, '_course_topics', true);
    
    ?>
    <div style="padding: 15px;">
        <p>
            <label for="course_price"><strong>Preço (R$):</strong></label><br>
            <input type="number" step="0.01" id="course_price" name="course_price" value="<?php echo esc_attr($price); ?>" style="width: 100%; max-width: 200px;">
        </p>
        
        <p>
            <label for="course_hotmart_link"><strong>Link Hotmart:</strong></label><br>
            <input type="url" id="course_hotmart_link" name="course_hotmart_link" value="<?php echo esc_url($hotmart_link); ?>" style="width: 100%;" placeholder="https://pay.hotmart.com/SEU_PRODUTO">
        </p>
        
        <p>
            <label>
                <input type="checkbox" name="course_featured" value="1" <?php checked($featured, '1'); ?>>
                <strong>Marcar como curso em destaque</strong>
            </label>
        </p>
        
        <p>
            <label for="course_topics"><strong>Tópicos do Curso (um por linha):</strong></label><br>
            <textarea id="course_topics" name="course_topics" rows="8" style="width: 100%;"><?php echo esc_textarea($topics); ?></textarea>
            <small>Digite cada módulo/tópico em uma linha separada</small>
        </p>
    </div>
    <?php
}

/**
 * Save Course Details
 */
function cursopro_save_course_details($post_id) {
    if (!isset($_POST['cursopro_course_details_nonce'])) {
        return;
    }
    
    if (!wp_verify_nonce($_POST['cursopro_course_details_nonce'], 'cursopro_save_course_details')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['course_price'])) {
        update_post_meta($post_id, '_course_price', sanitize_text_field($_POST['course_price']));
    }
    
    if (isset($_POST['course_hotmart_link'])) {
        update_post_meta($post_id, '_course_hotmart_link', esc_url_raw($_POST['course_hotmart_link']));
    }
    
    $featured = isset($_POST['course_featured']) ? '1' : '0';
    update_post_meta($post_id, '_course_featured', $featured);
    
    if (isset($_POST['course_topics'])) {
        update_post_meta($post_id, '_course_topics', sanitize_textarea_field($_POST['course_topics']));
    }
}
add_action('save_post', 'cursopro_save_course_details');

/**
 * Register Widget Areas
 */
function cursopro_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar Principal',
        'id'            => 'sidebar-1',
        'description'   => 'Widgets para a sidebar principal',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer 1',
        'id'            => 'footer-1',
        'description'   => 'Primeira coluna do rodapé',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer 2',
        'id'            => 'footer-2',
        'description'   => 'Segunda coluna do rodapé',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer 3',
        'id'            => 'footer-3',
        'description'   => 'Terceira coluna do rodapé',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => 'Footer 4',
        'id'            => 'footer-4',
        'description'   => 'Quarta coluna do rodapé',
        'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'cursopro_widgets_init');

/**
 * Custom Excerpt Length
 */
function cursopro_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'cursopro_excerpt_length');

/**
 * Custom Excerpt More
 */
function cursopro_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'cursopro_excerpt_more');

/**
 * Helper Function: Get Course Price
 */
function cursopro_get_course_price($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    $price = get_post_meta($post_id, '_course_price', true);
    return $price ? number_format((float)$price, 2, ',', '.') : '0,00';
}

/**
 * Helper Function: Get Hotmart Link
 */
function cursopro_get_hotmart_link($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    return get_post_meta($post_id, '_course_hotmart_link', true);
}

/**
 * Helper Function: Check if Course is Featured
 */
function cursopro_is_featured_course($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    return get_post_meta($post_id, '_course_featured', true) === '1';
}

/**
 * Helper Function: Get Course Topics
 */
function cursopro_get_course_topics($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    $topics = get_post_meta($post_id, '_course_topics', true);
    return $topics ? array_filter(explode("\n", $topics)) : array();
}
