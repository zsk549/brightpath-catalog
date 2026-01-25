<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <!-- Brand Section -->
            <div class="footer-section">
                <?php if (is_active_sidebar('footer-1')) : ?>
                    <?php dynamic_sidebar('footer-1'); ?>
                <?php else : ?>
                    <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 1rem;">
                        <svg width="32" height="32" fill="white" viewBox="0 0 24 24">
                            <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/>
                        </svg>
                        <span style="font-weight: 700; font-size: 1.25rem;">CursoPro</span>
                    </div>
                    <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem;">
                        Transforme sua carreira com mais de 117 cursos online de alta qualidade.
                    </p>
                <?php endif; ?>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <?php if (is_active_sidebar('footer-2')) : ?>
                    <?php dynamic_sidebar('footer-2'); ?>
                <?php else : ?>
                    <h3>Links Rápidos</h3>
                    <ul>
                        <li><a href="<?php echo home_url('/'); ?>">Página Inicial</a></li>
                        <li><a href="<?php echo get_post_type_archive_link('course'); ?>">Todos os Cursos</a></li>
                        <li><a href="<?php echo home_url('/contato'); ?>">Contato</a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Contact Info -->
            <div class="footer-section">
                <?php if (is_active_sidebar('footer-3')) : ?>
                    <?php dynamic_sidebar('footer-3'); ?>
                <?php else : ?>
                    <h3>Contato</h3>
                    <ul>
                        <li style="display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                            contato@cursopro.com
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                            (11) 99999-9999
                        </li>
                        <li style="display: flex; align-items: center; gap: 0.5rem;">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            São Paulo, Brasil
                        </li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Newsletter -->
            <div class="footer-section">
                <?php if (is_active_sidebar('footer-4')) : ?>
                    <?php dynamic_sidebar('footer-4'); ?>
                <?php else : ?>
                    <h3>Newsletter</h3>
                    <p style="color: rgba(255, 255, 255, 0.8); font-size: 0.875rem; margin-bottom: 1rem;">
                        Receba novidades e promoções exclusivas.
                    </p>
                    <form method="post" action="<?php echo admin_url('admin-ajax.php'); ?>" class="newsletter-form">
                        <input type="hidden" name="action" value="cursopro_newsletter_subscribe">
                        <div style="margin-bottom: 0.5rem;">
                            <input 
                                type="email" 
                                name="newsletter_email" 
                                placeholder="Seu e-mail" 
                                required
                                style="width: 100%; padding: 0.75rem; border: 1px solid rgba(255, 255, 255, 0.2); border-radius: var(--radius); background: rgba(255, 255, 255, 0.1); color: white; font-family: var(--font-family);"
                            >
                        </div>
                        <button type="submit" class="btn btn-accent" style="width: 100%;">
                            Inscrever-se
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>

        <!-- Informações Legais -->
        <div class="footer-legal">
            <h3>Informações Legais</h3>
            <ul>
                <li><a href="<?php echo home_url('/politica-privacidade'); ?>">Política de Privacidade</a></li>
                <li><a href="<?php echo home_url('/politica-troca'); ?>">Política de Troca e Devolução</a></li>
            </ul>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados.</p>
            <p style="font-size: 0.75rem; margin-top: 0.5rem;">
                <a href="<?php echo home_url('/politica-privacidade'); ?>" style="margin-right: 1rem;">Política de Privacidade</a>
                <a href="<?php echo home_url('/politica-troca'); ?>">Política de Troca e Devolução</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
