=== CursoPro - Tema WordPress para Cursos Online ===

Versão: 1.1
Autor: CursoPro Team
Requer pelo menos: WordPress 5.0
Testado até: WordPress 6.4
Licença: GPLv2 ou posterior

== Descrição ==

CursoPro é um tema WordPress moderno e profissional, desenvolvido especificamente para sites de catálogo e vendas de cursos online. Com design limpo e focado em conversão, o tema integra perfeitamente com a Hotmart para venda de cursos.

== Características Principais ==

* Design moderno e responsivo
* Custom Post Type "Cursos" com campos personalizados
* Taxonomia de categorias de cursos
* Sistema de filtros (busca, categoria, preço)
* Integração com Hotmart (links de checkout)
* Cards de cursos otimizados para conversão
* Seção de cursos em destaque
* Página de detalhes do curso completa
* Formulário de contato
* Newsletter no rodapé
* SEO otimizado
* Menu mobile responsivo
* **NOVO: Conformidade LGPD e CDC**
* **NOVO: Páginas de Políticas Legais**
* **NOVO: Avisos de Segurança nas páginas de curso**

== Instalação ==

1. FAZER UPLOAD DO TEMA:
   - Acesse: Aparência > Temas > Adicionar Novo > Fazer Upload
   - Faça upload do arquivo .zip do tema
   - Clique em "Instalar Agora" e depois em "Ativar"

2. CONFIGURAÇÃO INICIAL:

   a) Criar Páginas Básicas:
      - Crie uma página chamada "Contato"
      - Selecione o template "Contato" nas configurações da página
      
   b) Criar Páginas Legais (IMPORTANTE para conformidade):
      - Crie uma página "Política de Privacidade"
        * Slug: politica-privacidade
        * Template: Política de Privacidade
      - Crie uma página "Política de Troca e Devolução"
        * Slug: politica-troca
        * Template: Política de Troca e Devolução
      
   c) Configurar Menus:
      - Vá em Aparência > Menus
      - Crie um menu e adicione:
        * Página Inicial (link para home)
        * Cursos (link para arquivo de cursos)
        * Contato (página criada)
      - Atribua ao "Menu Principal"

   d) Configurar Widgets (Opcional):
      - Aparência > Widgets
      - Configure as 4 áreas do rodapé

3. ADICIONAR CURSOS:

   a) Criar Categorias:
      - Vá em Cursos > Categorias
      - Adicione as categorias desejadas:
        * Desenvolvimento Web
        * Marketing Digital
        * Design Gráfico
        * Fotografia
        * Negócios
        * Desenvolvimento Pessoal
        * Idiomas
        * Música
        * Saúde e Fitness
        * Culinária

   b) Adicionar Novos Cursos:
      - Vá em Cursos > Adicionar Novo
      - Preencha:
        * Título do Curso
        * Descrição (editor principal)
        * Imagem Destacada (recomendado: 800x600px)
        * Categoria
        * Na caixa "Detalhes do Curso":
          - Preço (em reais)
          - Link Hotmart (ex: https://pay.hotmart.com/SEU_PRODUTO)
          - Marcar como destaque (opcional)
          - Tópicos do Curso (um por linha)

4. CONFIGURAR LINKS HOTMART:
   - Acesse sua conta Hotmart
   - Copie o link de checkout de cada produto
   - Cole no campo "Link Hotmart" de cada curso

5. PERSONALIZAR APARÊNCIA:

   a) Logo:
      - Aparência > Personalizar > Identidade do Site
      - Faça upload do seu logo

   b) Cores (opcional):
      - Edite o arquivo style.css
      - Modifique as variáveis CSS em :root
      
   c) Textos do Hero:
      - Edite o arquivo index.php
      - Localize a seção .hero-section
      - Altere os textos conforme necessário

== Páginas do Tema ==

* index.php - Página inicial com hero e destaques
* archive-course.php - Catálogo completo de cursos com filtros
* single-course.php - Página de detalhes do curso
* page-contato.php - Página de contato (Template)
* page-politica-privacidade.php - Política de Privacidade (LGPD)
* page-politica-troca.php - Política de Troca e Devolução (CDC)

== Conformidade Legal (LGPD e CDC) ==

O tema inclui implementação discreta de políticas legais:

1. RODAPÉ:
   - Seção "Informações Legais" com links para políticas
   - Links em fonte pequena, cor neutra, sem interferir na conversão

2. PÁGINA DO CURSO (single-course.php):
   - Avisos de segurança próximo ao botão de compra:
     * "Compra 100% segura (LGPD)" com link para política de privacidade
     * "Garantia de 7 dias (CDC)" com link para política de troca
   - Ícones discretos mas visíveis

3. PÁGINAS DE POLÍTICAS:
   - Conteúdo completo em conformidade com a lei
   - Design limpo e legível
   - Fácil navegação

Para conformidade total, considere adicionar:
- Banner de cookies (plugin recomendado: GDPR Cookie Consent)
- Checkbox de aceite nos formulários de contato/checkout

== Custom Post Types ==

CURSO (course):
- Título
- Descrição
- Imagem destacada
- Categoria (taxonomia)
- Meta campos:
  * _course_price (preço)
  * _course_hotmart_link (link Hotmart)
  * _course_featured (destaque)
  * _course_topics (tópicos/módulos)

== Shortcodes ==

Não há shortcodes neste tema. Use os Custom Post Types e templates de página.

== Funções Helper ==

* cursopro_get_course_price() - Retorna preço formatado
* cursopro_get_hotmart_link() - Retorna link da Hotmart
* cursopro_is_featured_course() - Verifica se é destaque
* cursopro_get_course_topics() - Retorna array de tópicos

== Widgets ==

O tema possui 5 áreas de widgets:
* Sidebar Principal
* Footer 1, 2, 3, 4

== Personalização Avançada ==

MODIFICAR CORES:
Edite as variáveis CSS no arquivo style.css:
--primary: 210 100% 20%;
--accent: 142 76% 36%;
etc.

ADICIONAR FUNCIONALIDADES:
Use o arquivo functions.php para adicionar:
* Hooks personalizados
* Filtros
* Ações do WordPress

== Compatibilidade ==

* WordPress 5.0+
* PHP 7.4+
* MySQL 5.6+

== Plugins Recomendados ==

* Contact Form 7 (formulários)
* Yoast SEO (otimização)
* WP Rocket (cache)
* Wordfence Security (segurança)
* GDPR Cookie Consent (conformidade cookies)

== Suporte ==

Para suporte, entre em contato através de:
Email: contato@cursopro.com

== Changelog ==

= 1.1 =
* Adicionadas páginas de Política de Privacidade (LGPD)
* Adicionada página de Política de Troca e Devolução (CDC)
* Avisos de segurança na página do curso
* Seção de Informações Legais no rodapé
* Melhorias no CSS do rodapé

= 1.0 =
* Lançamento inicial
* Custom Post Type de Cursos
* Sistema de filtros
* Integração Hotmart
* Design responsivo completo

== Créditos ==

* Desenvolvido por: CursoPro Team
* Baseado em: HTML/CSS/JavaScript
* Ícones: Material Icons (inline SVG)
* Fontes: Google Fonts (Inter)

== Licença ==

Este tema é licenciado sob GPLv2 ou posterior.
Você é livre para usar, modificar e distribuir este tema.
