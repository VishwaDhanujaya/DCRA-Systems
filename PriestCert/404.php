<?php
/**
 * Redesigned Premium 404 Error Page
 * Department of Christian Religious Affairs
 * Priesthood Identity & Passport Cert
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

// Set 404 response header
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="<?= COLOR_PRIMARY ?>">
    <title>Page Not Found - <?= APP_NAME ?></title>
    
    <!-- Google Fonts: Montserrat & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Compiled Tailwind CSS Bundle -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    
    <!-- Tailwind CSS CDN Engine -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '<?= COLOR_PRIMARY ?? '#4E0000' ?>',
                            dark: '<?= COLOR_PRIMARY === '#4E0000' ? '#390000' : '#0D1B2C' ?>'
                        },
                        secondary: '<?= COLOR_SECONDARY ?? '#13273F' ?>'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <style>
        .bg-custom-radial {
            background: radial-gradient(circle, rgba(253,252,249,1) 0%, rgba(246,243,236,1) 100%);
        }
    </style>
</head>
<body class="h-full text-slate-800 flex flex-col justify-between font-sans antialiased bg-custom-radial">

    <!-- Top bar -->
    <header class="bg-white/80 backdrop-blur-md border-b border-slate-200/60 py-3.5 px-4 sm:px-6 lg:px-8 sticky top-0 z-30">
        <div class="max-w-[1600px] mx-auto flex items-center">
            <a href="<?= BASE_URL ?>dashboard" class="flex items-center">
                <img src="<?= BASE_URL ?>assets/images/logo.png" alt="Department of Christian Religious Affairs Logo" class="h-10 w-auto object-contain">
                <span class="ml-4 text-sm sm:text-base font-bold text-slate-900 font-heading tracking-tight">
                    <?= APP_NAME ?>
                </span>
            </a>
        </div>
    </header>

    <!-- Main Container -->
    <main class="flex-1 flex items-center justify-center p-6 my-4">
        <!-- Card Container with Double Gold Border -->
        <div class="max-w-md w-full bg-white/95 backdrop-blur-sm border-4 border-double border-[#D4AF37]/50 rounded-2xl shadow-lg overflow-hidden relative flex flex-col justify-between p-1">
            <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
            
            <div class="p-8 text-center space-y-6">
                
                <!-- Gothic Arch Window SVG Illustration -->
                <div class="pt-2">
                    <svg class="mx-auto h-16 w-16 text-[#C5A059]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.2">
                        <!-- Outer Gothic Arch -->
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 21V12C4 7 8 3 12 3C16 3 20 7 20 12V21" />
                        <!-- Inner Arch Details -->
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 21V12C8 9.5 9.8 7.5 12 7.5C14.2 7.5 16 9.5 16 12V21" />
                        <!-- Horizontal Bottom Line -->
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 21H21" />
                        <!-- Vertical Center Pane Line -->
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5V21" />
                        <!-- Decorative Circle in Arch Peak -->
                        <circle cx="12" cy="5.2" r="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

                <!-- Text descriptions -->
                <div class="space-y-2">
                    <span class="text-[10px] font-bold text-[#C5A059] uppercase tracking-widest font-heading block">Error Code 404</span>
                    <h3 class="text-xl font-bold text-slate-900 font-heading tracking-tight">Resource Not Found</h3>
                    <p class="text-xs text-slate-400 font-inter leading-relaxed max-w-xs mx-auto">
                        The requested page or ecclesiastical record could not be located. It may have been archived or removed.
                    </p>
                </div>

                <!-- Gold ornament line divider -->
                <div class="flex items-center justify-center gap-1.5 py-1">
                    <div class="w-10 h-px bg-[#D4AF37]/30"></div>
                    <div class="w-1.5 h-1.5 bg-[#D4AF37] rotate-45 rounded-2xs"></div>
                    <div class="w-10 h-px bg-[#D4AF37]/30"></div>
                </div>

                <!-- Search Input Widget -->
                <div class="space-y-1.5 max-w-xs mx-auto">
                    <label for="search-input" class="text-[9px] font-bold text-slate-400 uppercase tracking-wider font-heading block text-center">Looking for something specific?</label>
                    <div class="relative">
                        <input id="search-input" type="text" placeholder="Search portal pages..." class="w-full pl-9 pr-3 py-2 bg-slate-50/50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all min-h-[44px]">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Inline Quick Links -->
                <div class="text-[10px] text-slate-400 font-inter flex items-center justify-center gap-2">
                    <a href="<?= BASE_URL ?>dashboard" class="hover:text-primary transition-colors font-medium">Dashboard</a>
                    <span class="text-slate-200">•</span>
                    <a href="<?= BASE_URL ?>settings" class="hover:text-primary transition-colors font-medium">Settings</a>
                </div>

                <!-- Action Button Block -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center gap-3">
                    <a href="<?= BASE_URL ?>dashboard" class="w-full sm:w-auto bg-primary hover:bg-primary-dark text-white font-semibold text-xs px-5 py-2.5 min-h-[44px] flex items-center justify-center rounded-lg shadow-xs transition-colors font-inter text-center">
                        Back to Dashboard
                    </a>
                    <button type="button" onclick="history.back()" class="w-full sm:w-auto border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-xs px-5 py-2.5 min-h-[44px] flex items-center justify-center rounded-lg transition-colors font-inter font-medium shadow-3xs text-center">
                        Go Back
                    </button>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-slate-200 py-3 px-4 text-center text-xs text-slate-500">
        &copy; 2026 Department of Christian Religious Affairs. All rights reserved.
    </footer>

</body>
</html>
