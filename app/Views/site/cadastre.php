<html class="">

<head>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    window.FontAwesomeConfig = {
        autoReplaceSvg: 'nest', // Options: 'nest', 'remove', 'replace'
    };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>


    <style>
    * {
        font-family: 'Inter', sans-serif;
    }

    ::-webkit-scrollbar {
        display: none;
    }
    </style>


    <style>
    .highlighted-section {
        outline: 2px solid #3F20FB;
        background-color: rgba(63, 32, 251, 0.1);
    }

    .edit-button {
        position: absolute;
        z-index: 1000;
    }
    </style>


    <style>
    :root {
        /* Base colors */
        --color-base: #ffffff;
        --color-base-50: #f9fafb;
        --color-base-100: #f3f4f6;
        --color-base-200: #e5e7eb;
        --color-base-300: #d1d5db;
        --color-base-400: #9ca3af;
        --color-base-500: #6b7280;
        --color-base-600: #4b5563;
        --color-base-700: #374151;
        --color-base-800: #1f2937;
        --color-base-900: #111827;
        --color-base-content: #1f2937;

        /* Primary colors */
        --color-primary: #3b82f6;
        --color-primary-50: #eff6ff;
        --color-primary-100: #dbeafe;
        --color-primary-200: #bfdbfe;
        --color-primary-300: #93c5fd;
        --color-primary-400: #60a5fa;
        --color-primary-500: #3b82f6;
        --color-primary-600: #2563eb;
        --color-primary-700: #1d4ed8;
        --color-primary-800: #1e40af;
        --color-primary-900: #1e3a8a;
        --color-primary-focus: #2563eb;
        --color-primary-content: #ffffff;

        /* Secondary colors */
        --color-secondary: #8b5cf6;
        --color-secondary-50: #f5f3ff;
        --color-secondary-100: #ede9fe;
        --color-secondary-200: #ddd6fe;
        --color-secondary-300: #c4b5fd;
        --color-secondary-400: #a78bfa;
        --color-secondary-500: #8b5cf6;
        --color-secondary-600: #7c3aed;
        --color-secondary-700: #6d28d9;
        --color-secondary-800: #5b21b6;
        --color-secondary-900: #4c1d95;
        --color-secondary-focus: #7c3aed;
        --color-secondary-content: #ffffff;

        /* Accent colors */
        --color-accent: #f472b6;
        --color-accent-50: #fdf2f8;
        --color-accent-100: #fce7f3;
        --color-accent-200: #fbcfe8;
        --color-accent-300: #f9a8d4;
        --color-accent-400: #f472b6;
        --color-accent-500: #ec4899;
        --color-accent-600: #db2777;
        --color-accent-700: #be185d;
        --color-accent-800: #9d174d;
        --color-accent-900: #831843;
        --color-accent-focus: #db2777;
        --color-accent-content: #ffffff;

        /* Neutral colors */
        --color-neutral: #6b7280;
        --color-neutral-50: #f9fafb;
        --color-neutral-100: #f3f4f6;
        --color-neutral-200: #e5e7eb;
        --color-neutral-300: #d1d5db;
        --color-neutral-400: #9ca3af;
        --color-neutral-500: #6b7280;
        --color-neutral-600: #4b5563;
        --color-neutral-700: #374151;
        --color-neutral-800: #1f2937;
        --color-neutral-900: #111827;
        --color-neutral-focus: #4b5563;
        --color-neutral-content: #ffffff;

        /* Info colors */
        --color-info: #3b82f6;
        --color-info-50: #eff6ff;
        --color-info-100: #dbeafe;
        --color-info-200: #bfdbfe;
        --color-info-300: #93c5fd;
        --color-info-400: #60a5fa;
        --color-info-500: #3b82f6;
        --color-info-600: #2563eb;
        --color-info-700: #1d4ed8;
        --color-info-800: #1e40af;
        --color-info-900: #1e3a8a;
        --color-info-focus: #2563eb;
        --color-info-content: #ffffff;

        /* Success colors */
        --color-success: #10b981;
        --color-success-50: #ecfdf5;
        --color-success-100: #d1fae5;
        --color-success-200: #a7f3d0;
        --color-success-300: #6ee7b7;
        --color-success-400: #34d399;
        --color-success-500: #10b981;
        --color-success-600: #059669;
        --color-success-700: #047857;
        --color-success-800: #065f46;
        --color-success-900: #064e3b;
        --color-success-focus: #059669;
        --color-success-content: #ffffff;

        /* Warning colors */
        --color-warning: #f59e0b;
        --color-warning-50: #fffbeb;
        --color-warning-100: #fef3c7;
        --color-warning-200: #fde68a;
        --color-warning-300: #fcd34d;
        --color-warning-400: #fbbf24;
        --color-warning-500: #f59e0b;
        --color-warning-600: #d97706;
        --color-warning-700: #b45309;
        --color-warning-800: #92400e;
        --color-warning-900: #78350f;
        --color-warning-focus: #d97706;
        --color-warning-content: #ffffff;

        /* Error colors */
        --color-error: #ef4444;
        --color-error-50: #fef2f2;
        --color-error-100: #fee2e2;
        --color-error-200: #fecaca;
        --color-error-300: #fca5a5;
        --color-error-400: #f87171;
        --color-error-500: #ef4444;
        --color-error-600: #dc2626;
        --color-error-700: #b91c1c;
        --color-error-800: #991b1b;
        --color-error-900: #7f1d1d;
        --color-error-focus: #dc2626;
        --color-error-content: #ffffff;
    }
    </style>


    <style>
    /* Dark theme */
    .dark {
        /* Base colors */
        --color-base: #1f2937;
        --color-base-50: #111827;
        --color-base-100: #1f2937;
        --color-base-200: #374151;
        --color-base-300: #4b5563;
        --color-base-400: #6b7280;
        --color-base-500: #9ca3af;
        --color-base-600: #d1d5db;
        --color-base-700: #e5e7eb;
        --color-base-800: #f3f4f6;
        --color-base-900: #f9fafb;
        --color-base-content: #f9fafb;

        /* Primary colors */
        --color-primary: #60a5fa;
        --color-primary-50: #1e3a8a;
        --color-primary-100: #1e40af;
        --color-primary-200: #1d4ed8;
        --color-primary-300: #2563eb;
        --color-primary-400: #3b82f6;
        --color-primary-500: #60a5fa;
        --color-primary-600: #93c5fd;
        --color-primary-700: #bfdbfe;
        --color-primary-800: #dbeafe;
        --color-primary-900: #eff6ff;
        --color-primary-focus: #3b82f6;
        --color-primary-content: #1f2937;

        /* Secondary colors */
        --color-secondary: #a78bfa;
        --color-secondary-50: #4c1d95;
        --color-secondary-100: #5b21b6;
        --color-secondary-200: #6d28d9;
        --color-secondary-300: #7c3aed;
        --color-secondary-400: #8b5cf6;
        --color-secondary-500: #a78bfa;
        --color-secondary-600: #c4b5fd;
        --color-secondary-700: #ddd6fe;
        --color-secondary-800: #ede9fe;
        --color-secondary-900: #f5f3ff;
        --color-secondary-focus: #8b5cf6;
        --color-secondary-content: #1f2937;

        /* Accent colors */
        --color-accent: #f472b6;
        --color-accent-50: #831843;
        --color-accent-100: #9d174d;
        --color-accent-200: #be185d;
        --color-accent-300: #db2777;
        --color-accent-400: #ec4899;
        --color-accent-500: #f472b6;
        --color-accent-600: #f9a8d4;
        --color-accent-700: #fbcfe8;
        --color-accent-800: #fce7f3;
        --color-accent-900: #fdf2f8;
        --color-accent-focus: #ec4899;
        --color-accent-content: #1f2937;

        /* Neutral colors remain the same as light theme */

        /* Info colors */
        --color-info: #60a5fa;
        --color-info-50: #1e3a8a;
        --color-info-100: #1e40af;
        --color-info-200: #1d4ed8;
        --color-info-300: #2563eb;
        --color-info-400: #3b82f6;
        --color-info-500: #60a5fa;
        --color-info-600: #93c5fd;
        --color-info-700: #bfdbfe;
        --color-info-800: #dbeafe;
        --color-info-900: #eff6ff;
        --color-info-focus: #3b82f6;
        --color-info-content: #1f2937;

        /* Success colors */
        --color-success: #34d399;
        --color-success-50: #064e3b;
        --color-success-100: #065f46;
        --color-success-200: #047857;
        --color-success-300: #059669;
        --color-success-400: #10b981;
        --color-success-500: #34d399;
        --color-success-600: #6ee7b7;
        --color-success-700: #a7f3d0;
        --color-success-800: #d1fae5;
        --color-success-900: #ecfdf5;
        --color-success-focus: #10b981;
        --color-success-content: #1f2937;

        /* Warning colors */
        --color-warning: #fbbf24;
        --color-warning-50: #78350f;
        --color-warning-100: #92400e;
        --color-warning-200: #b45309;
        --color-warning-300: #d97706;
        --color-warning-400: #f59e0b;
        --color-warning-500: #fbbf24;
        --color-warning-600: #fcd34d;
        --color-warning-700: #fde68a;
        --color-warning-800: #fef3c7;
        --color-warning-900: #fffbeb;
        --color-warning-focus: #f59e0b;
        --color-warning-content: #1f2937;

        /* Error colors */
        --color-error: #f87171;
        --color-error-50: #7f1d1d;
        --color-error-100: #991b1b;
        --color-error-200: #b91c1c;
        --color-error-300: #dc2626;
        --color-error-400: #ef4444;
        --color-error-500: #f87171;
        --color-error-600: #fca5a5;
        --color-error-700: #fecaca;
        --color-error-800: #fee2e2;
        --color-error-900: #fef2f2;
        --color-error-focus: #ef4444;
        --color-error-content: #1f2937;
    }
    </style>


    <script>
    tailwind.config = {
        "theme": {
            "extend": {
                "colors": {
                    "transparent": "transparent",
                    "current": "currentColor",
                    "black": "#000000",
                    "white": "#ffffff",
                    "gray": {
                        "50": "#f9fafb",
                        "100": "#f3f4f6",
                        "200": "#e5e7eb",
                        "300": "#d1d5db",
                        "400": "#9ca3af",
                        "500": "#6b7280",
                        "600": "#4b5563",
                        "700": "#374151",
                        "800": "#1f2937",
                        "900": "#111827"
                    },
                    "red": {
                        "50": "#fef2f2",
                        "100": "#fee2e2",
                        "200": "#fecaca",
                        "300": "#fca5a5",
                        "400": "#f87171",
                        "500": "#ef4444",
                        "600": "#dc2626",
                        "700": "#b91c1c",
                        "800": "#991b1b",
                        "900": "#7f1d1d"
                    },
                    "yellow": {
                        "50": "#fffbeb",
                        "100": "#fef3c7",
                        "200": "#fde68a",
                        "300": "#fcd34d",
                        "400": "#fbbf24",
                        "500": "#f59e0b",
                        "600": "#d97706",
                        "700": "#b45309",
                        "800": "#92400e",
                        "900": "#78350f"
                    },
                    "green": {
                        "50": "#ecfdf5",
                        "100": "#d1fae5",
                        "200": "#a7f3d0",
                        "300": "#6ee7b7",
                        "400": "#34d399",
                        "500": "#10b981",
                        "600": "#059669",
                        "700": "#047857",
                        "800": "#065f46",
                        "900": "#064e3b"
                    },
                    "blue": {
                        "50": "#eff6ff",
                        "100": "#dbeafe",
                        "200": "#bfdbfe",
                        "300": "#93c5fd",
                        "400": "#60a5fa",
                        "500": "#3b82f6",
                        "600": "#2563eb",
                        "700": "#1d4ed8",
                        "800": "#1e40af",
                        "900": "#1e3a8a"
                    },
                    "indigo": {
                        "50": "#eef2ff",
                        "100": "#e0e7ff",
                        "200": "#c7d2fe",
                        "300": "#a5b4fc",
                        "400": "#818cf8",
                        "500": "#6366f1",
                        "600": "#4f46e5",
                        "700": "#4338ca",
                        "800": "#3730a3",
                        "900": "#312e81"
                    },
                    "purple": {
                        "50": "#f5f3ff",
                        "100": "#ede9fe",
                        "200": "#ddd6fe",
                        "300": "#c4b5fd",
                        "400": "#a78bfa",
                        "500": "#8b5cf6",
                        "600": "#7c3aed",
                        "700": "#6d28d9",
                        "800": "#5b21b6",
                        "900": "#4c1d95"
                    },
                    "pink": {
                        "50": "#fdf2f8",
                        "100": "#fce7f3",
                        "200": "#fbcfe8",
                        "300": "#f9a8d4",
                        "400": "#f472b6",
                        "500": "#ec4899",
                        "600": "#db2777",
                        "700": "#be185d",
                        "800": "#9d174d",
                        "900": "#831843"
                    },
                    "primary": {
                        "50": "var(--color-primary-50)",
                        "100": "var(--color-primary-100)",
                        "200": "var(--color-primary-200)",
                        "300": "var(--color-primary-300)",
                        "400": "var(--color-primary-400)",
                        "500": "var(--color-primary-500)",
                        "600": "var(--color-primary-600)",
                        "700": "var(--color-primary-700)",
                        "800": "var(--color-primary-800)",
                        "900": "var(--color-primary-900)",
                        "DEFAULT": "var(--color-primary)",
                        "focus": "var(--color-primary-focus)",
                        "content": "var(--color-primary-content)"
                    },
                    "secondary": {
                        "50": "var(--color-secondary-50)",
                        "100": "var(--color-secondary-100)",
                        "200": "var(--color-secondary-200)",
                        "300": "var(--color-secondary-300)",
                        "400": "var(--color-secondary-400)",
                        "500": "var(--color-secondary-500)",
                        "600": "var(--color-secondary-600)",
                        "700": "var(--color-secondary-700)",
                        "800": "var(--color-secondary-800)",
                        "900": "var(--color-secondary-900)",
                        "DEFAULT": "var(--color-secondary)",
                        "focus": "var(--color-secondary-focus)",
                        "content": "var(--color-secondary-content)"
                    },
                    "accent": {
                        "50": "var(--color-accent-50)",
                        "100": "var(--color-accent-100)",
                        "200": "var(--color-accent-200)",
                        "300": "var(--color-accent-300)",
                        "400": "var(--color-accent-400)",
                        "500": "var(--color-accent-500)",
                        "600": "var(--color-accent-600)",
                        "700": "var(--color-accent-700)",
                        "800": "var(--color-accent-800)",
                        "900": "var(--color-accent-900)",
                        "DEFAULT": "var(--color-accent)",
                        "focus": "var(--color-accent-focus)",
                        "content": "var(--color-accent-content)"
                    },
                    "neutral": {
                        "50": "var(--color-neutral-50)",
                        "100": "var(--color-neutral-100)",
                        "200": "var(--color-neutral-200)",
                        "300": "var(--color-neutral-300)",
                        "400": "var(--color-neutral-400)",
                        "500": "var(--color-neutral-500)",
                        "600": "var(--color-neutral-600)",
                        "700": "var(--color-neutral-700)",
                        "800": "var(--color-neutral-800)",
                        "900": "var(--color-neutral-900)",
                        "DEFAULT": "var(--color-neutral)",
                        "focus": "var(--color-neutral-focus)",
                        "content": "var(--color-neutral-content)"
                    },
                    "info": {
                        "50": "var(--color-info-50)",
                        "100": "var(--color-info-100)",
                        "200": "var(--color-info-200)",
                        "300": "var(--color-info-300)",
                        "400": "var(--color-info-400)",
                        "500": "var(--color-info-500)",
                        "600": "var(--color-info-600)",
                        "700": "var(--color-info-700)",
                        "800": "var(--color-info-800)",
                        "900": "var(--color-info-900)",
                        "DEFAULT": "var(--color-info)",
                        "focus": "var(--color-info-focus)",
                        "content": "var(--color-info-content)"
                    },
                    "success": {
                        "50": "var(--color-success-50)",
                        "100": "var(--color-success-100)",
                        "200": "var(--color-success-200)",
                        "300": "var(--color-success-300)",
                        "400": "var(--color-success-400)",
                        "500": "var(--color-success-500)",
                        "600": "var(--color-success-600)",
                        "700": "var(--color-success-700)",
                        "800": "var(--color-success-800)",
                        "900": "var(--color-success-900)",
                        "DEFAULT": "var(--color-success)",
                        "focus": "var(--color-success-focus)",
                        "content": "var(--color-success-content)"
                    },
                    "warning": {
                        "50": "var(--color-warning-50)",
                        "100": "var(--color-warning-100)",
                        "200": "var(--color-warning-200)",
                        "300": "var(--color-warning-300)",
                        "400": "var(--color-warning-400)",
                        "500": "var(--color-warning-500)",
                        "600": "var(--color-warning-600)",
                        "700": "var(--color-warning-700)",
                        "800": "var(--color-warning-800)",
                        "900": "var(--color-warning-900)",
                        "DEFAULT": "var(--color-warning)",
                        "focus": "var(--color-warning-focus)",
                        "content": "var(--color-warning-content)"
                    },
                    "error": {
                        "50": "var(--color-error-50)",
                        "100": "var(--color-error-100)",
                        "200": "var(--color-error-200)",
                        "300": "var(--color-error-300)",
                        "400": "var(--color-error-400)",
                        "500": "var(--color-error-500)",
                        "600": "var(--color-error-600)",
                        "700": "var(--color-error-700)",
                        "800": "var(--color-error-800)",
                        "900": "var(--color-error-900)",
                        "DEFAULT": "var(--color-error)",
                        "focus": "var(--color-error-focus)",
                        "content": "var(--color-error-content)"
                    },
                    "danger": {
                        "50": "var(--color-error-50)",
                        "100": "var(--color-error-100)",
                        "200": "var(--color-error-200)",
                        "300": "var(--color-error-300)",
                        "400": "var(--color-error-400)",
                        "500": "var(--color-error-500)",
                        "600": "var(--color-error-600)",
                        "700": "var(--color-error-700)",
                        "800": "var(--color-error-800)",
                        "900": "var(--color-error-900)",
                        "DEFAULT": "var(--color-error)",
                        "focus": "var(--color-error-focus)",
                        "content": "var(--color-error-content)"
                    },
                    "failure": {
                        "50": "var(--color-error-50)",
                        "100": "var(--color-error-100)",
                        "200": "var(--color-error-200)",
                        "300": "var(--color-error-300)",
                        "400": "var(--color-error-400)",
                        "500": "var(--color-error-500)",
                        "600": "var(--color-error-600)",
                        "700": "var(--color-error-700)",
                        "800": "var(--color-error-800)",
                        "900": "var(--color-error-900)",
                        "DEFAULT": "var(--color-error)",
                        "focus": "var(--color-error-focus)",
                        "content": "var(--color-error-content)"
                    }
                },
                "fontFamily": {
                    "sans": [
                        "Inter",
                        "sans-serif"
                    ]
                }
            }
        },
        "variants": {
            "extend": {
                "backgroundColor": [
                    "active",
                    "group-hover"
                ],
                "textColor": [
                    "active",
                    "group-hover"
                ]
            }
        },
        "plugins": []
    };
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&amp;display=swap">
    <style>
    .highlighted-section {
        outline: 2px solid #3F20FB;
        background-color: rgba(63, 32, 251, 0.1);
    }

    .edit-button {
        position: absolute;
        z-index: 1000;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    html,
    body {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    </style>
</head>

<body class="h-full text-base-content">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <i class="fa-solid fa-users-gear text-neutral-800 text-2xl"></i>
            <span class="text-xl text-neutral-800">HR Solutions</span>
        </div>
        <nav class="hidden md:flex items-center space-x-8">
            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer"><a
                    href="<?php echo route_to('site.home');?>">Início</a></span>
            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer"><a
                    href="<?php echo route_to('site.sobre');?>">Quem Somos</a></span>
            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer"><a
                    href="<?php echo route_to('site.servicos');?>">Serviços</a></span>
            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer"><a
                    href="<?php echo route_to('site.vagas');?>">Vagas</a></span>
            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer"><a
                    href="<?php echo route_to('site.sobre');?>">Clientes</a></span>
            <span class="text-neutral-700 hover:text-neutral-900 cursor-pointer"><a
                    href="<?php echo route_to('site.contato');?>">Contato
                </a></span>
        </nav>
        <div class="flex items-center space-x-4">
            <span
                class="hidden md:block px-4 py-2 border border-neutral-300 rounded-md text-neutral-700 hover:bg-neutral-50 cursor-pointer"><a
                    href="<?php echo route_to('site.cadastre');?>">Enviar
                    Currículo</a></span>
            <button class="md:hidden text-neutral-700">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </div>


    <main id="main">
        <section id="page-header" class="bg-neutral-800 py-16">
            <div class="container mx-auto px-6">
                <div class="text-center">
                    <h1 class="text-3xl md:text-4xl text-white mb-4">Cadastro de Currículo</h1>
                    <p class="text-lg text-neutral-300 max-w-2xl mx-auto">Preencha o formulário abaixo com suas
                        informações profissionais e dê o primeiro passo para encontrar a vaga ideal para sua carreira.
                    </p>
                </div>
            </div>
        </section>

        <section id="form-section" class="py-12 bg-neutral-50">
            <div class="container mx-auto px-6">
                <div class="bg-white rounded-lg shadow-sm p-6 md:p-8 max-w-4xl mx-auto">
                    <div class="mb-8">
                        <h2 class="text-2xl text-neutral-800 mb-4">Informações Pessoais</h2>
                        <div class="w-16 h-1 bg-neutral-300 mb-6"></div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="nome">Nome Completo *</label>
                                <input id="nome" type="text"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="Digite seu nome completo" required="">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="email">E-mail *</label>
                                <input id="email" type="email"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="seu.email@exemplo.com" required="">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="telefone">Telefone *</label>
                                <input id="telefone" type="tel"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="(00) 00000-0000" required="">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="nascimento">Data de Nascimento
                                    *</label>
                                <input id="nascimento" type="date"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    required="">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="cidade">Cidade *</label>
                                <input id="cidade" type="text"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="Sua cidade" required="">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="estado">Estado *</label>
                                <select id="estado"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    required="">
                                    <option value="" disabled="" selected="">Selecione seu estado</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="linkedin">LinkedIn
                                    (opcional)</label>
                                <input id="linkedin" type="url"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="https://linkedin.com/in/seuperfil">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="portfolio">Site/Portfólio
                                    (opcional)</label>
                                <input id="portfolio" type="url"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="https://seuportfolio.com">
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl text-neutral-800 mb-4">Formação e Experiência</h2>
                        <div class="w-16 h-1 bg-neutral-300 mb-6"></div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="formacao">Formação Acadêmica
                                    *</label>
                                <select id="formacao"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    required="">
                                    <option value="" disabled="" selected="">Selecione sua formação</option>
                                    <option value="ensino_medio">Ensino Médio</option>
                                    <option value="tecnico">Curso Técnico</option>
                                    <option value="superior_incompleto">Superior Incompleto</option>
                                    <option value="superior_completo">Superior Completo</option>
                                    <option value="pos_graduacao">Pós-Graduação</option>
                                    <option value="mestrado">Mestrado</option>
                                    <option value="doutorado">Doutorado</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="curso">Curso *</label>
                                <input id="curso" type="text"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="Nome do curso" required="">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="instituicao">Instituição
                                    *</label>
                                <input id="instituicao" type="text"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="Nome da instituição" required="">
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="conclusao">Ano de Conclusão
                                    *</label>
                                <input id="conclusao" type="number" min="1950" max="2025"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    placeholder="Ano de conclusão" required="">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="block text-neutral-700 mb-2 text-sm" for="experiencia">Experiência
                                Profissional *</label>
                            <textarea id="experiencia" rows="5"
                                class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                placeholder="Descreva suas experiências profissionais mais relevantes, incluindo empresa, cargo, período e principais atividades"
                                required=""></textarea>
                        </div>

                        <div>
                            <label class="block text-neutral-700 mb-2 text-sm" for="habilidades">Habilidades e
                                Competências *</label>
                            <textarea id="habilidades" rows="3"
                                class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                placeholder="Liste suas principais habilidades técnicas e comportamentais"
                                required=""></textarea>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl text-neutral-800 mb-4">Interesses Profissionais</h2>
                        <div class="w-16 h-1 bg-neutral-300 mb-6"></div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="area">Área de Interesse
                                    *</label>
                                <select id="area"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    required="">
                                    <option value="" disabled="" selected="">Selecione a área</option>
                                    <option value="administrativo">Administrativo</option>
                                    <option value="comercial">Comercial/Vendas</option>
                                    <option value="financeiro">Financeiro</option>
                                    <option value="marketing">Marketing</option>
                                    <option value="rh">Recursos Humanos</option>
                                    <option value="ti">Tecnologia da Informação</option>
                                    <option value="juridico">Jurídico</option>
                                    <option value="producao">Produção</option>
                                    <option value="logistica">Logística</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="nivel">Nível de Experiência
                                    *</label>
                                <select id="nivel"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    required="">
                                    <option value="" disabled="" selected="">Selecione o nível</option>
                                    <option value="estagio">Estágio</option>
                                    <option value="junior">Júnior</option>
                                    <option value="pleno">Pleno</option>
                                    <option value="senior">Sênior</option>
                                    <option value="gerencia">Gerência</option>
                                    <option value="diretoria">Diretoria</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="modalidade">Modalidade de
                                    Trabalho *</label>
                                <select id="modalidade"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    required="">
                                    <option value="" disabled="" selected="">Selecione a modalidade</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="hibrido">Híbrido</option>
                                    <option value="remoto">Remoto</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-neutral-700 mb-2 text-sm" for="regime">Regime de Contratação
                                    *</label>
                                <select id="regime"
                                    class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                    required="">
                                    <option value="" disabled="" selected="">Selecione o regime</option>
                                    <option value="clt">CLT</option>
                                    <option value="pj">PJ</option>
                                    <option value="estagio">Estágio</option>
                                    <option value="temporario">Temporário</option>
                                    <option value="autonomo">Autônomo</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-neutral-700 mb-2 text-sm" for="pretensao">Pretensão Salarial
                                (opcional)</label>
                            <input id="pretensao" type="text"
                                class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                placeholder="R$ 0.000,00">
                        </div>
                    </div>

                    <div class="mb-8">
                        <h2 class="text-2xl text-neutral-800 mb-4">Upload de Currículo</h2>
                        <div class="w-16 h-1 bg-neutral-300 mb-6"></div>

                        <div class="mb-6">
                            <label class="block text-neutral-700 mb-2 text-sm" for="curriculo">Anexar Currículo (PDF,
                                DOC ou DOCX) *</label>
                            <div class="border-2 border-dashed border-neutral-300 rounded-md p-6 text-center">
                                <div class="mb-4 flex justify-center">
                                    <i class="fa-solid fa-file-arrow-up text-neutral-400 text-4xl"></i>
                                </div>
                                <p class="text-neutral-600 mb-3">Arraste e solte seu arquivo aqui ou</p>
                                <button
                                    class="px-4 py-2 bg-neutral-100 border border-neutral-300 rounded-md text-neutral-700 hover:bg-neutral-200">Selecionar
                                    arquivo</button>
                                <input id="curriculo" type="file" class="hidden" accept=".pdf,.doc,.docx" required="">
                                <p class="text-neutral-500 text-sm mt-3">Tamanho máximo: 5MB</p>
                            </div>
                        </div>

                        <div>
                            <label class="block text-neutral-700 mb-2 text-sm" for="carta">Carta de Apresentação
                                (opcional)</label>
                            <textarea id="carta" rows="4"
                                class="w-full border border-neutral-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-neutral-400"
                                placeholder="Escreva uma breve apresentação sobre você, suas motivações e objetivos profissionais"></textarea>
                        </div>
                    </div>

                    <div class="mb-8">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="termos" type="checkbox"
                                    class="h-4 w-4 text-neutral-600 border-neutral-300 rounded focus:ring-neutral-500"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="termos" class="text-neutral-700">Concordo com os <span
                                        class="text-neutral-900 cursor-pointer">Termos de Uso</span> e <span
                                        class="text-neutral-900 cursor-pointer">Política de Privacidade</span> *</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit"
                            class="px-8 py-3 bg-neutral-800 text-white rounded-md hover:bg-neutral-700 focus:outline-none focus:ring-2 focus:ring-neutral-500 focus:ring-offset-2">
                            Enviar Currículo
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section id="faq-section" class="py-12 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-10">
                    <h2 class="text-3xl text-neutral-900 mb-4">Perguntas Frequentes</h2>
                    <div class="w-16 h-1 bg-neutral-300 mx-auto mb-6"></div>
                    <p class="text-lg text-neutral-600 max-w-2xl mx-auto">Tire suas dúvidas sobre o processo de cadastro
                        e seleção</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-4">
                    <div class="border border-neutral-200 rounded-md">
                        <div class="flex justify-between items-center p-4 cursor-pointer">
                            <h3 class="text-lg text-neutral-800">Como funciona o processo de seleção?</h3>
                            <i class="fa-solid fa-chevron-down text-neutral-600"></i>
                        </div>
                        <div class="p-4 pt-0 border-t border-neutral-200">
                            <p class="text-neutral-600">Após o envio do seu currículo, nossa equipe de recrutamento fará
                                uma análise do seu perfil. Caso você se encaixe em alguma vaga disponível, entraremos em
                                contato para agendar uma entrevista. Todo o processo é realizado com agilidade e
                                transparência.</p>
                        </div>
                    </div>

                    <div class="border border-neutral-200 rounded-md">
                        <div class="flex justify-between items-center p-4 cursor-pointer">
                            <h3 class="text-lg text-neutral-800">Por quanto tempo meu currículo fica no banco de dados?
                            </h3>
                            <i class="fa-solid fa-chevron-down text-neutral-600"></i>
                        </div>
                        <div class="p-4 pt-0 border-t border-neutral-200">
                            <p class="text-neutral-600">Seu currículo permanece em nosso banco de dados por 12 meses.
                                Após esse período, você pode atualizá-lo enviando novamente através deste formulário.
                            </p>
                        </div>
                    </div>

                    <div class="border border-neutral-200 rounded-md">
                        <div class="flex justify-between items-center p-4 cursor-pointer">
                            <h3 class="text-lg text-neutral-800">Como sei se meu currículo foi recebido?</h3>
                            <i class="fa-solid fa-chevron-down text-neutral-600"></i>
                        </div>
                        <div class="p-4 pt-0 border-t border-neutral-200">
                            <p class="text-neutral-600">Após o envio do formulário, você receberá um e-mail de
                                confirmação. Caso não receba, verifique sua pasta de spam ou entre em contato conosco.
                            </p>
                        </div>
                    </div>

                    <div class="border border-neutral-200 rounded-md">
                        <div class="flex justify-between items-center p-4 cursor-pointer">
                            <h3 class="text-lg text-neutral-800">Posso me candidatar a mais de uma vaga?</h3>
                            <i class="fa-solid fa-chevron-down text-neutral-600"></i>
                        </div>
                        <div class="p-4 pt-0 border-t border-neutral-200">
                            <p class="text-neutral-600">Sim, seu currículo será considerado para todas as vagas
                                compatíveis com seu perfil. Não é necessário enviar múltiplas vezes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer" class="bg-neutral-900 text-neutral-400">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-6">
                        <i class="fa-solid fa-users-gear text-white text-2xl"></i>
                        <span class="text-xl text-white">Belottis</span>
                    </div>
                    <p class="mb-6">Conectando talentos e oportunidades desde 2010.</p>
                    <div class="flex space-x-4">
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <a href="https://www.facebook.com/belottis/" target="blank"> <i
                                    class="fa-brands fa-facebook-f">
                                </i></a>
                        </span>
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </span>
                        <span class="text-neutral-400 hover:text-white cursor-pointer">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                    </div>
                </div>

                <div>
                    <h3 class="text-white text-lg mb-6">Links Rápidos</h3>
                    <ul class="space-y-3">
                        <li><span class="hover:text-white cursor-pointer">Início</span></li>
                        <li><span class="hover:text-white cursor-pointer">Quem Somos</span></li>
                        <li><span class="hover:text-white cursor-pointer">Serviços</span></li>
                        <li><span class="hover:text-white cursor-pointer">Vagas</span></li>
                        <li><span class="hover:text-white cursor-pointer">Cadastrar Currículo</span></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-white text-lg mb-6">Serviços</h3>
                    <ul class="space-y-3">
                        <li><span class="hover:text-white cursor-pointer">Recrutamento e Seleção</span></li>
                        <li><span class="hover:text-white cursor-pointer">Estágios</span></li>
                        <li><span class="hover:text-white cursor-pointer">Folha de Pagamento</span></li>
                        <li><span class="hover:text-white cursor-pointer">Treinamentos</span></li>

                    </ul>
                </div>

                <div>
                    <h3 class="text-white text-lg mb-6">Contato</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <i class="fa-solid fa-location-dot mr-3"></i>
                            <span>Rua Jamil João Zarif, 264 - Sala 4
                                CEP:07143-000 - Guarulhos / SP</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-phone mr-3"></i>
                            <span>(11) 2600-1607</span>
                            <span>(11) 94632-6003</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-envelope mr-3"></i>
                            <span>contato@belottis.com.br</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-neutral-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p>© 2025 HR Solutions. Todos os direitos reservados. Desenvolvido por <a
                        href="https://fredericomoura.com.br">Frederico Moura</a></p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <span class="hover:text-white cursor-pointer">Política de Privacidade</span>
                    <span class="hover:text-white cursor-pointer">Termos de Uso</span>
                    <span class="hover:text-white cursor-pointer">Cookies</span>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>