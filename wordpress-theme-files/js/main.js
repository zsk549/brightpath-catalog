/**
 * CursoPro Theme JavaScript
 * 
 * @package CursoPro
 */

(function($) {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const menuToggle = $('#mobile-menu-toggle');
        const mobileNav = $('#mobile-navigation');

        if (menuToggle.length && mobileNav.length) {
            menuToggle.on('click', function(e) {
                e.preventDefault();
                $(this).toggleClass('active');
                mobileNav.slideToggle(300);
            });

            // Close menu when clicking outside
            $(document).on('click', function(e) {
                if (!$(e.target).closest('.site-header').length) {
                    mobileNav.slideUp(300);
                    menuToggle.removeClass('active');
                }
            });

            // Close menu on window resize
            $(window).on('resize', function() {
                if ($(window).width() > 768) {
                    mobileNav.hide();
                    menuToggle.removeClass('active');
                }
            });
        }
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        $('a[href*="#"]:not([href="#"])').on('click', function(e) {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
                location.hostname === this.hostname) {
                
                let target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                
                if (target.length) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                    return false;
                }
            }
        });
    }

    /**
     * Sticky Header on Scroll
     */
    function initStickyHeader() {
        const header = $('.site-header');
        let lastScroll = 0;

        $(window).on('scroll', function() {
            const currentScroll = $(this).scrollTop();

            if (currentScroll > 100) {
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
            }

            lastScroll = currentScroll;
        });
    }

    /**
     * Course Filter Form Auto Submit
     */
    function initCourseFilters() {
        $('#course-filter-form select').on('change', function() {
            // Optionally auto-submit on change
            // $(this).closest('form').submit();
        });
    }

    /**
     * Newsletter Form Handler
     */
    function initNewsletterForm() {
        $('.newsletter-form').on('submit', function(e) {
            e.preventDefault();
            
            const form = $(this);
            const email = form.find('input[name="newsletter_email"]').val();
            const submitBtn = form.find('button[type="submit"]');
            const originalText = submitBtn.text();

            submitBtn.prop('disabled', true).text('Enviando...');

            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: {
                    action: 'cursopro_newsletter_subscribe',
                    email: email
                },
                success: function(response) {
                    alert('Obrigado por se inscrever! Você receberá nossas novidades em breve.');
                    form[0].reset();
                },
                error: function() {
                    alert('Erro ao processar sua solicitação. Tente novamente.');
                },
                complete: function() {
                    submitBtn.prop('disabled', false).text(originalText);
                }
            });
        });
    }

    /**
     * Contact Form Handler
     */
    function initContactForm() {
        $('form[action*="admin-ajax.php"]').on('submit', function(e) {
            const form = $(this);
            const action = form.find('input[name="action"]').val();
            
            if (action === 'cursopro_contact_form') {
                e.preventDefault();
                
                const submitBtn = form.find('button[type="submit"]');
                const originalText = submitBtn.text();

                submitBtn.prop('disabled', true).text('Enviando...');

                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: form.serialize(),
                    success: function(response) {
                        alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
                        form[0].reset();
                    },
                    error: function() {
                        alert('Erro ao enviar mensagem. Tente novamente.');
                    },
                    complete: function() {
                        submitBtn.prop('disabled', false).text(originalText);
                    }
                });
            }
        });
    }

    /**
     * Initialize all functions
     */
    $(document).ready(function() {
        initMobileMenu();
        initSmoothScroll();
        initStickyHeader();
        initCourseFilters();
        initNewsletterForm();
        initContactForm();
    });

})(jQuery);
