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
                class="hidden md:block px-4 py-2 border border-neutral-300 rounded-md text-neutral-700 hover:bg-neutral-50 cursor-pointer">Enviar
                Currículo</span>
            <button class="md:hidden text-neutral-700">
                <i class="fa-solid fa-bars text-xl"></i>
            </button>
        </div>
    </div>


    <main id="main">
        <section id="services-hero" class="pt-20 h-[500px] bg-neutral-50">
            <div class="container mx-auto px-6 py-12">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-5xl text-neutral-900 mb-6">Nossos Serviços</h1>
                        <p class="text-xl text-neutral-600 mb-8">Soluções completas em recursos humanos para impulsionar
                            o sucesso da sua empresa e o desenvolvimento dos seus colaboradores.</p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <span
                                class="px-6 py-3 bg-neutral-800 text-white rounded-md text-center hover:bg-neutral-700 cursor-pointer">Solicitar
                                Consultoria</span>
                            <span
                                class="px-6 py-3 border border-neutral-300 rounded-md text-center hover:bg-neutral-50 cursor-pointer">Ver
                                Depoimentos</span>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center">
                        <div
                            class="w-full max-w-md bg-neutral-200 rounded-lg h-[300px] md:h-[400px] flex items-center justify-center">
                            <span class="text-white text-lg">Imagem de consultoria em recursos humanos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services-main" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl text-neutral-900 mb-4">Soluções Completas em RH</h2>
                    <div class="w-16 h-1 bg-neutral-300 mx-auto mb-6"></div>
                    <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Conheça nosso portfólio de serviços
                        especializados para atender às necessidades da sua empresa.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
                    <div id="recruitment" class="bg-neutral-50 p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-neutral-200 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-magnifying-glass text-neutral-700 text-xl"></i>
                            </div>
                            <h3 class="text-2xl">Recrutamento e Seleção</h3>
                        </div>
                        <p class="text-neutral-600 mb-6">Nossa equipe especializada identifica e seleciona os melhores
                            talentos para sua empresa, utilizando metodologias avançadas e processos estruturados.</p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Análise de perfil e competências</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Triagem curricular especializada</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Entrevistas por competência</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Testes técnicos e comportamentais</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Assessment center para cargos de liderança</span>
                            </li>
                        </ul>
                        <span
                            class="inline-block px-4 py-2 border border-neutral-700 text-neutral-700 rounded-md hover:bg-neutral-100 cursor-pointer">Solicitar
                            proposta</span>
                    </div>

                    <div id="performance" class="bg-neutral-50 p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-neutral-200 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-clipboard-check text-neutral-700 text-xl"></i>
                            </div>
                            <h3 class="text-2xl">Avaliação de Desempenho</h3>
                        </div>
                        <p class="text-neutral-600 mb-6">Desenvolvemos e implementamos sistemas de avaliação
                            personalizados que mensuram efetivamente o desempenho dos colaboradores e identificam
                            oportunidades de desenvolvimento.</p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Definição de indicadores de desempenho (KPIs)</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Avaliação 360 graus</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Feedback estruturado</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Planos de desenvolvimento individual</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Gestão por competências</span>
                            </li>
                        </ul>
                        <span
                            class="inline-block px-4 py-2 border border-neutral-700 text-neutral-700 rounded-md hover:bg-neutral-100 cursor-pointer">Solicitar
                            proposta</span>
                    </div>

                    <div id="training" class="bg-neutral-50 p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-neutral-200 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-graduation-cap text-neutral-700 text-xl"></i>
                            </div>
                            <h3 class="text-2xl">Treinamento e Desenvolvimento</h3>
                        </div>
                        <p class="text-neutral-600 mb-6">Programas de capacitação customizados para maximizar o
                            potencial da sua equipe e alinhar as competências dos colaboradores aos objetivos
                            estratégicos da empresa.</p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Levantamento de necessidades de treinamento</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Programas de desenvolvimento de liderança</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Treinamentos técnicos e comportamentais</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Workshops e dinâmicas de grupo</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Avaliação de eficácia dos treinamentos</span>
                            </li>
                        </ul>
                        <span
                            class="inline-block px-4 py-2 border border-neutral-700 text-neutral-700 rounded-md hover:bg-neutral-100 cursor-pointer">Solicitar
                            proposta</span>
                    </div>

                    <div id="consulting" class="bg-neutral-50 p-8 rounded-lg shadow-sm">
                        <div class="flex items-center mb-6">
                            <div class="w-14 h-14 bg-neutral-200 rounded-full flex items-center justify-center mr-4">
                                <i class="fa-solid fa-chart-line text-neutral-700 text-xl"></i>
                            </div>
                            <h3 class="text-2xl">Consultoria em RH</h3>
                        </div>
                        <p class="text-neutral-600 mb-6">Soluções estratégicas para otimizar a gestão de pessoas e
                            alinhar as práticas de recursos humanos aos objetivos do negócio.</p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Diagnóstico organizacional</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Estruturação de departamentos de RH</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Pesquisa de clima organizacional</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Gestão de mudanças</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-check text-neutral-700 mt-1 mr-3"></i>
                                <span>Implementação de políticas e procedimentos</span>
                            </li>
                        </ul>
                        <span
                            class="inline-block px-4 py-2 border border-neutral-700 text-neutral-700 rounded-md hover:bg-neutral-100 cursor-pointer">Solicitar
                            proposta</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="additional-services" class="py-16 bg-neutral-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl text-neutral-900 mb-4">Serviços Complementares</h2>
                    <div class="w-16 h-1 bg-neutral-300 mx-auto mb-6"></div>
                    <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Soluções adicionais para uma gestão de pessoas
                        completa e eficiente.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                    <div id="outsourcing" class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-neutral-200 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-people-arrows text-neutral-700"></i>
                        </div>
                        <h3 class="text-lg mb-3">Terceirização de RH</h3>
                        <p class="text-neutral-600 mb-4">Assuma o foco no seu negócio enquanto gerenciamos os processos
                            de RH com eficiência e especialização.</p>
                        <ul class="space-y-2 mb-4 text-neutral-600 text-sm">
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Gestão de folha de pagamento</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Administração de benefícios</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Gestão de documentação</span>
                            </li>
                        </ul>
                        <span class="text-neutral-700 hover:text-neutral-900 flex items-center cursor-pointer">
                            Saiba mais <i class="fa-solid fa-arrow-right ml-2"></i>
                        </span>
                    </div>

                    <div id="career" class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-neutral-200 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-route text-neutral-700"></i>
                        </div>
                        <h3 class="text-lg mb-3">Planos de Carreira</h3>
                        <p class="text-neutral-600 mb-4">Estruturação de planos de carreira alinhados à cultura
                            organizacional e às expectativas dos colaboradores.</p>
                        <ul class="space-y-2 mb-4 text-neutral-600 text-sm">
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Mapeamento de competências</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Trilhas de desenvolvimento</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Plano de sucessão</span>
                            </li>
                        </ul>
                        <span class="text-neutral-700 hover:text-neutral-900 flex items-center cursor-pointer">
                            Saiba mais <i class="fa-solid fa-arrow-right ml-2"></i>
                        </span>
                    </div>

                    <div id="culture" class="bg-white p-6 rounded-lg shadow-sm">
                        <div class="w-12 h-12 bg-neutral-200 rounded-full flex items-center justify-center mb-4">
                            <i class="fa-solid fa-heart text-neutral-700"></i>
                        </div>
                        <h3 class="text-lg mb-3">Cultura e Engajamento</h3>
                        <p class="text-neutral-600 mb-4">Estratégias para fortalecer a cultura organizacional e aumentar
                            o engajamento dos colaboradores.</p>
                        <ul class="space-y-2 mb-4 text-neutral-600 text-sm">
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Programas de reconhecimento</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Ações de endomarketing</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fa-solid fa-circle text-neutral-400 text-xs mt-1.5 mr-2"></i>
                                <span>Gestão do clima organizacional</span>
                            </li>
                        </ul>
                        <span class="text-neutral-700 hover:text-neutral-900 flex items-center cursor-pointer">
                            Saiba mais <i class="fa-solid fa-arrow-right ml-2"></i>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <section id="methodology" class="py-16 bg-white">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-12">
                        <h2 class="text-3xl text-neutral-900 mb-6">Nossa Metodologia</h2>
                        <p class="text-lg text-neutral-600 mb-6">Trabalhamos com uma abordagem estruturada e
                            personalizada para cada cliente, garantindo resultados efetivos e mensuráveis.</p>

                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 bg-neutral-200 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <span>1</span>
                                </div>
                                <div>
                                    <h3 class="mb-2">Diagnóstico</h3>
                                    <p class="text-neutral-600">Análise detalhada da situação atual, identificação de
                                        necessidades e definição de objetivos.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 bg-neutral-200 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <span>2</span>
                                </div>
                                <div>
                                    <h3 class="mb-2">Planejamento</h3>
                                    <p class="text-neutral-600">Elaboração de estratégias e planos de ação
                                        personalizados para atender às necessidades identificadas.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 bg-neutral-200 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <span>3</span>
                                </div>
                                <div>
                                    <h3 class="mb-2">Implementação</h3>
                                    <p class="text-neutral-600">Execução das ações planejadas com acompanhamento
                                        constante e ajustes quando necessário.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="w-10 h-10 bg-neutral-200 rounded-full flex items-center justify-center mr-4 shrink-0">
                                    <span>4</span>
                                </div>
                                <div>
                                    <h3 class="mb-2">Avaliação e Melhoria</h3>
                                    <p class="text-neutral-600">Mensuração de resultados, identificação de oportunidades
                                        de melhoria e implementação de ajustes.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <div class="bg-neutral-200 rounded-lg h-[400px] flex items-center justify-center">
                            <span class="text-white text-lg">Infográfico da metodologia</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="clients" class="py-16 bg-neutral-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl text-neutral-900 mb-4">Empresas que Confiam em Nossos Serviços</h2>
                    <div class="w-16 h-1 bg-neutral-300 mx-auto mb-6"></div>
                    <p class="text-xl text-neutral-600 max-w-3xl mx-auto">Atendemos empresas de diversos segmentos e
                        portes, oferecendo soluções personalizadas para cada necessidade.</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-12">
                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 1</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 2</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 3</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 4</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 5</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 6</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 7</span>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-sm flex items-center justify-center h-32">
                        <div class="bg-neutral-200 w-full h-full flex items-center justify-center">
                            <span class="text-white">Logo Cliente 8</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="cta" class="py-16 bg-neutral-800 text-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl mb-6">Pronto para transformar a gestão de pessoas na sua empresa?</h2>
                <p class="text-xl mb-8 max-w-3xl mx-auto">Entre em contato conosco para uma consultoria personalizada e
                    descubra como nossos serviços podem impulsionar os resultados do seu negócio.</p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <span
                        class="px-6 py-3 bg-white text-neutral-800 rounded-md hover:bg-neutral-100 cursor-pointer">Solicitar
                        Proposta</span>
                    <span class="px-6 py-3 border border-white rounded-md hover:bg-neutral-700 cursor-pointer">Falar com
                        um Consultor</span>
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