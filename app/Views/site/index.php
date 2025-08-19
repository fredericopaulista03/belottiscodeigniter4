<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belottis - Site Responsivo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                screens: {
                    'xs': '475px',
                },
            }
        }
    }
    </script>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    :root {
        /* Cores base */
        --color-primary: #3b82f6;
        --color-primary-dark: #2563eb;
        --color-dark: #1f2937;
        --color-light: #f9fafb;
        --color-gray: #6b7280;
        --color-white: #ffffff;
    }

    body {
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        color: #1f2937;
        overflow-x: hidden;
    }

    /* Container responsivo */
    .container {
        width: 100%;
        padding-right: 1rem;
        padding-left: 1rem;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 640px) {
        .container {
            max-width: 640px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px;
        }
    }

    @media (min-width: 1024px) {
        .container {
            max-width: 1024px;
            padding-right: 2rem;
            padding-left: 2rem;
        }
    }

    @media (min-width: 1280px) {
        .container {
            max-width: 1280px;
        }
    }

    /* Header responsivo */
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
        position: relative;
    }

    .logo {
        height: 2.5rem;
        width: auto;
    }

    .nav-menu {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background-color: var(--color-white);
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 50;
        padding: 1rem;
    }

    .nav-menu.active {
        display: flex;
    }

    .nav-menu a {
        padding: 0.75rem 1rem;
        color: #374151;
        text-decoration: none;
        border-bottom: 1px solid #e5e7eb;
    }

    .nav-menu a:hover {
        color: #111827;
        background-color: #f9fafb;
    }

    .menu-button {
        display: block;
        background: none;
        border: none;
        color: #374151;
        font-size: 1.25rem;
        cursor: pointer;
    }

    @media (min-width: 768px) {
        .nav-menu {
            display: flex;
            flex-direction: row;
            position: static;
            background: none;
            box-shadow: none;
            padding: 0;
        }

        .nav-menu a {
            padding: 0.5rem 1rem;
            border-bottom: none;
        }

        .menu-button {
            display: none;
        }
    }

    /* Seção Hero responsiva */
    .hero {
        padding: 4rem 0;
        background-color: #f9fafb;
        position: relative;
    }

    .hero-content {
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }

    .hero-text {
        flex: 1;
    }

    .hero-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-image img {
        width: 100%;
        max-width: 400px;
        height: auto;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .hero-title {
        font-size: 2.25rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .hero-description {
        font-size: 1.125rem;
        color: #4b5563;
        margin-bottom: 2rem;
    }

    .hero-buttons {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    @media (min-width: 640px) {
        .hero-buttons {
            flex-direction: row;
        }
    }

    @media (min-width: 768px) {
        .hero {
            padding: 6rem 0;
        }

        .hero-content {
            flex-direction: row;
            align-items: center;
        }

        .hero-title {
            font-size: 3rem;
        }
    }

    @media (min-width: 1024px) {
        .hero-title {
            font-size: 3.75rem;
        }
    }

    /* Botões */
    .btn {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        border-radius: 0.375rem;
        text-align: center;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.2s;
        cursor: pointer;
    }

    .btn-primary {
        background-color: var(--color-dark);
        color: var(--color-white);
        border: 1px solid var(--color-dark);
    }

    .btn-primary:hover {
        background-color: #374151;
        border-color: #374151;
    }

    .btn-outline {
        background-color: transparent;
        color: var(--color-dark);
        border: 1px solid #d1d5db;
    }

    .btn-outline:hover {
        background-color: #f9fafb;
        border-color: #9ca3af;
    }

    /* Seções gerais */
    .section {
        padding: 3rem 0;
    }

    .section-title {
        font-size: 1.875rem;
        font-weight: 700;
        text-align: center;
        color: #111827;
        margin-bottom: 1rem;
    }

    .section-divider {
        width: 4rem;
        height: 0.25rem;
        background-color: #d1d5db;
        margin: 0 auto 3rem auto;
    }

    .section-description {
        font-size: 1.125rem;
        text-align: center;
        color: #4b5563;
        max-width: 48rem;
        margin: 0 auto 3rem auto;
    }

    @media (min-width: 768px) {
        .section {
            padding: 5rem 0;
        }

        .section-title {
            font-size: 2.25rem;
        }
    }

    /* Cards */
    .card-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .card {
        background-color: var(--color-white);
        border-radius: 0.5rem;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    }

    .card-icon {
        width: 3.5rem;
        height: 3.5rem;
        background-color: #e5e7eb;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        color: #374151;
        font-size: 1.5rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #111827;
    }

    .card-description {
        color: #4b5563;
        margin-bottom: 1rem;
    }

    .card-link {
        display: inline-flex;
        align-items: center;
        color: #374151;
        font-weight: 500;
        text-decoration: none;
    }

    .card-link:hover {
        color: #111827;
    }

    @media (min-width: 640px) {
        .card-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .card-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-top: 3rem;
            margin-bottom: 3rem;
            padding: 0 2rem;
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    /* Depoimentos */
    .testimonial-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
    }

    .testimonial {
        background-color: var(--color-white);
        border-radius: 0.5rem;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .testimonial-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .testimonial-avatar {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        margin-right: 1rem;
    }

    .testimonial-name {
        font-weight: 600;
        color: #111827;
    }

    .testimonial-role {
        font-size: 0.875rem;
        color: #6b7280;
    }

    .testimonial-text {
        color: #4b5563;
        font-style: italic;
    }

    @media (min-width: 768px) {
        .testimonial-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    /* Footer */
    .footer {
        background-color: #111827;
        color: #9ca3af;
        padding: 3rem 0 1.5rem 0;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .footer-logo {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .footer-logo-text {
        font-size: 1.25rem;
        font-weight: 600;
        color: var(--color-white);
        margin-left: 0.5rem;
    }

    .footer-title {
        font-size: 1.125rem;
        font-weight: 600;
        color: var(--color-white);
        margin-bottom: 1rem;
    }

    .footer-links {
        list-style: none;
    }

    .footer-links li {
        margin-bottom: 0.5rem;
    }

    .footer-links a {
        color: #9ca3af;
        text-decoration: none;
    }

    .footer-links a:hover {
        color: var(--color-white);
    }

    .footer-social {
        display: flex;
        gap: 1rem;
        margin-top: 1rem;
    }

    .footer-social a {
        color: #9ca3af;
        font-size: 1.25rem;
    }

    .footer-social a:hover {
        color: var(--color-white);
    }

    .footer-bottom {
        border-top: 1px solid #374151;
        margin-top: 3rem;
        padding-top: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }

    .footer-bottom-links {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
    }

    .footer-bottom-links a {
        color: #9ca3af;
        text-decoration: none;
    }

    .footer-bottom-links a:hover {
        color: var(--color-white);
    }

    @media (min-width: 768px) {
        .footer-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .footer-bottom {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            text-align: left;
        }
    }

    @media (min-width: 1024px) {
        .footer-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 3rem;
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding: 0 2rem;
        }
    }

    /* Utilitários */
    .text-center {
        text-align: center;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .mb-8 {
        margin-bottom: 2rem;
    }

    .mt-8 {
        margin-top: 2rem;
    }

    .mt-12 {
        margin-top: 3rem;
    }

    .hidden {
        display: none;
    }

    @media (min-width: 768px) {
        .md\\:flex {
            display: flex;
        }

        .md\\:hidden {
            display: none;
        }
    }

    /* Animações suaves */
    .fade-in {
        animation: fadeIn 0.5s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Ajustes para mobile */
    @media (max-width: 767px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-description {
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .section-description {
            font-size: 1rem;
            padding: 0 1rem;
        }

        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }

    /* Ajustes para telas muito pequenas */
    @media (max-width: 350px) {
        .hero-buttons .btn {
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
        }

        .hero-title {
            font-size: 1.75rem;
        }
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="container">
        <div class="header">
            <div class="flex items-center">
                <img src="<?php echo base_url('assets/img/belottis.png'); ?>" alt="Belottis" class="logo">
            </div>

            <nav id="nav-menu" class="nav-menu">
                <a href="#">Início</a>
                <a href="#">Quem Somos</a>
                <a href="#">Serviços</a>
                <a href="#">Vagas</a>
                <a href="#">Clientes</a>
                <a href="#">Contato</a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="#" class="btn-outline hidden md:flex">Enviar Currículo</a>
                <button class="menu-button" id="menu-toggle">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">Conectando talentos às melhores oportunidades</h1>
                    <p class="hero-description">Somos especialistas em encontrar o profissional certo para sua empresa e
                        a vaga ideal para sua carreira.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn btn-primary">Ver Vagas Disponíveis</a>
                        <a href="#" class="btn btn-outline">Cadastrar Currículo</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="<?php echo base_url('assets/img/rh.jpg'); ?>"
                        alt="Imagem de profissionais em ambiente corporativo">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="section bg-white">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Nossa Missão</h2>
                <div class="section-divider"></div>
                <p class="section-description">Oferecer aos clientes soluções eficazes e inovadoras na área de Recursos
                    Humanos.</p>
            </div>

            <div class="card-grid">
                <div class="card fade-in">
                    <div class="card-icon">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3 class="card-title">Compromisso</h3>
                    <p class="card-description">Trabalhamos com ética e transparência, buscando sempre os melhores
                        resultados para nossos clientes e candidatos.</p>
                </div>

                <div class="card fade-in">
                    <div class="card-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3 class="card-title">Precisão</h3>
                    <p class="card-description">Utilizamos metodologias avançadas para garantir a compatibilidade entre
                        candidatos e vagas.</p>
                </div>

                <div class="card fade-in">
                    <div class="card-icon">
                        <i class="fa-solid fa-rocket"></i>
                    </div>
                    <h3 class="card-title">Inovação</h3>
                    <p class="card-description">Estamos sempre atualizados com as tendências do mercado e novas
                        tecnologias de recrutamento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-logo">
                        <i class="fa-solid fa-users-gear text-white text-2xl"></i>
                        <span class="footer-logo-text">Belottis</span>
                    </div>
                    <p class="mb-6">Conectando talentos e oportunidades desde 2010.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="footer-title">Links Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="#">Início</a></li>
                        <li><a href="#">Quem Somos</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Vagas</a></li>
                        <li><a href="#">Cadastrar Currículo</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer-title">Serviços</h3>
                    <ul class="footer-links">
                        <li><a href="#">Recrutamento e Seleção</a></li>
                        <li><a href="#">Estágios</a></li>
                        <li><a href="#">Folha de Pagamento</a></li>
                        <li><a href="#">Treinamentos</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer-title">Contato</h3>
                    <ul class="footer-links">
                        <li><i class="fa-solid fa-location-dot mr-2"></i> Rua Jamil João Zarif, 264 - Sala 4</li>
                        <li><i class="fa-solid fa-phone mr-2"></i> (11) 2600-1607</li>
                        <li><i class="fa-solid fa-envelope mr-2"></i> contato@belottis.com.br</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>© 2025 Belottis. Todos os direitos reservados.</p>
                <div class="footer-bottom-links">
                    <a href="#">Política de Privacidade</a>
                    <a href="#">Termos de Uso</a>
                    <a href="#">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
    // Menu mobile toggle
    document.getElementById('menu-toggle').addEventListener('click', function() {
        const navMenu = document.getElementById('nav-menu');
        navMenu.classList.toggle('active');
    });

    // Fechar menu ao clicar em um link
    document.querySelectorAll('#nav-menu a').forEach(link => {
        link.addEventListener('click', () => {
            document.getElementById('nav-menu').classList.remove('active');
        });
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>