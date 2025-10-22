<?php
/**
 * Template Name: Contato
 * 
 * @package CursoPro
 */

get_header(); ?>

<main class="site-main" style="padding: 3rem 0;">
    <div class="container">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div class="text-center mb-4">
                <h1 style="font-size: 2.5rem; margin-bottom: 1rem;">Entre em Contato</h1>
                <p style="font-size: 1.125rem; color: var(--color-text-light);">
                    Tem alguma dúvida? Estamos aqui para ajudar!
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <!-- Contact Form -->
                <div style="background: var(--color-card); padding: 2rem; border-radius: var(--radius); box-shadow: var(--shadow-card);">
                    <h2 style="font-size: 1.75rem; margin-bottom: 1.5rem;">Envie sua Mensagem</h2>
                    
                    <?php if (isset($_GET['success']) && $_GET['success'] == '1') : ?>
                        <div style="padding: 1rem; background-color: #d4edda; border: 1px solid #c3e6cb; border-radius: var(--radius); color: #155724; margin-bottom: 1rem;">
                            Mensagem enviada com sucesso! Entraremos em contato em breve.
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                        <input type="hidden" name="action" value="cursopro_contact_form">
                        
                        <div class="form-group">
                            <label for="contact_name">Nome</label>
                            <input type="text" id="contact_name" name="contact_name" required placeholder="Seu nome completo">
                        </div>

                        <div class="form-group">
                            <label for="contact_email">E-mail</label>
                            <input type="email" id="contact_email" name="contact_email" required placeholder="seu@email.com">
                        </div>

                        <div class="form-group">
                            <label for="contact_message">Mensagem</label>
                            <textarea id="contact_message" name="contact_message" required placeholder="Como podemos ajudar?" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-accent" style="width: 100%;">
                            Enviar Mensagem
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div style="background: var(--color-card); padding: 1.5rem; border-radius: var(--radius); box-shadow: var(--shadow-card);">
                        <div style="display: flex; align-items: start; gap: 1rem;">
                            <div style="flex-shrink: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(26, 54, 93, 0.1);">
                                <svg width="24" height="24" fill="var(--color-primary)" viewBox="0 0 24 24">
                                    <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-weight: 600; margin-bottom: 0.25rem;">E-mail</h3>
                                <p style="color: var(--color-text-light);">contato@cursopro.com</p>
                                <p style="font-size: 0.875rem; color: var(--color-text-light); margin-top: 0.25rem;">
                                    Respondemos em até 24 horas
                                </p>
                            </div>
                        </div>
                    </div>

                    <div style="background: var(--color-card); padding: 1.5rem; border-radius: var(--radius); box-shadow: var(--shadow-card);">
                        <div style="display: flex; align-items: start; gap: 1rem;">
                            <div style="flex-shrink: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255, 107, 53, 0.1);">
                                <svg width="24" height="24" fill="var(--color-accent)" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-weight: 600; margin-bottom: 0.25rem;">Telefone</h3>
                                <p style="color: var(--color-text-light);">(11) 99999-9999</p>
                                <p style="font-size: 0.875rem; color: var(--color-text-light); margin-top: 0.25rem;">
                                    Seg-Sex: 9h às 18h
                                </p>
                            </div>
                        </div>
                    </div>

                    <div style="background: var(--color-card); padding: 1.5rem; border-radius: var(--radius); box-shadow: var(--shadow-card);">
                        <div style="display: flex; align-items: start; gap: 1rem;">
                            <div style="flex-shrink: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: rgba(26, 54, 93, 0.1);">
                                <svg width="24" height="24" fill="var(--color-primary)" viewBox="0 0 24 24">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-weight: 600; margin-bottom: 0.25rem;">Localização</h3>
                                <p style="color: var(--color-text-light);">São Paulo, Brasil</p>
                                <p style="font-size: 0.875rem; color: var(--color-text-light); margin-top: 0.25rem;">
                                    Atendimento 100% online
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
