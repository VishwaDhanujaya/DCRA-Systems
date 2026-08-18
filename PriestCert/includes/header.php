<?php
/**
 * Global Staff Header Template
 * Department of Christian Religious Affairs
 */

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/auth.php';

$page_title = $page_title ?? 'Priesthood Identity & Passport Certification';
$user = current_user();
?>
<!DOCTYPE html>
<html lang="en" class="h-full bg-[#FDFBF9]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="<?= COLOR_PRIMARY ?>">
    <title><?= e($page_title) ?> - <?= APP_ORG ?></title>
    
    <!-- Google Fonts: Montserrat & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicon Emblem -->
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/images/emblem.png">

    <!-- Compiled Tailwind CSS Bundle -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">

    <!-- Tailwind CSS CDN Engine (Temporary for development) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '<?= COLOR_PRIMARY ?? '#4E0000' ?>',
                            dark: '#390000',
                            light: '#6B0D0D'
                        },
                        secondary: {
                            DEFAULT: '<?= COLOR_SECONDARY ?? '#13273F' ?>',
                            dark: '#0D1B2C'
                        },
                        accent: {
                            gold: '<?= COLOR_ACCENT ?? '#D4AF37' ?>',
                            'gold-dark': '#B8860B'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="h-full bg-[#FDFBF9] text-slate-800 flex flex-col font-sans antialiased">

<!-- Top Header Navigation Bar -->
<header class="bg-white border-b border-slate-200/90 sticky top-0 z-30 shadow-2xs">
    <div class="w-full px-4 sm:px-6">
        <div class="flex items-center justify-between h-16">
            
            <!-- Left: Department Emblem Logo | Divider | Main System Title -->
            <div class="flex items-center">
                <button id="sidebar-toggle" type="button" aria-label="Toggle navigation menu" aria-controls="app-sidebar" aria-expanded="false" class="lg:hidden p-2 rounded-lg hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-primary min-w-[40px] min-h-[40px] flex items-center justify-center text-slate-600 transition-colors mr-2">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                
                <a href="<?= BASE_URL ?>dashboard" class="flex items-center flex-shrink-0 group">
                    <img src="<?= BASE_URL ?>assets/images/logo.png" alt="Department of Christian Religious Affairs Logo" class="h-9 w-auto object-contain flex-shrink-0">
                </a>
                
                <div class="h-6 w-px bg-slate-200 mx-3 sm:mx-4 hidden sm:block"></div>

                <div class="hidden sm:block">
                    <h1 class="text-sm sm:text-base font-bold text-slate-900 font-heading tracking-tight leading-tight">Priesthood Identity & Passport Certification</h1>
                </div>
            </div>

            <!-- Right: Search Bar | Date | Admin User Pill -->
            <div class="flex items-center space-x-3 sm:space-x-4">
                
                <!-- Search Input Field -->
                <div class="relative hidden md:block w-48 lg:w-56">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                    <input type="text" placeholder="Search..." class="w-full pl-9 pr-3 py-1.5 bg-slate-100/80 border border-slate-200/80 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                </div>

                <!-- Divider -->
                <div class="h-5 w-px bg-slate-200 hidden sm:block" aria-hidden="true"></div>

                <!-- Date Display -->
                <span class="text-xs font-medium text-slate-500 hidden lg:block font-inter">
                    <?= date('l, d F Y') ?>
                </span>

                <!-- User Profile Badge Pill & Dropdown Menu -->
                <div class="relative" id="user-menu-container">
                    <button id="user-menu-button" type="button" aria-expanded="false" aria-haspopup="true" class="flex items-center space-x-2 bg-slate-50 hover:bg-slate-100 px-3 py-1.5 rounded-full border border-slate-200/80 cursor-pointer transition-colors focus:outline-none focus:ring-2 focus:ring-primary/20">
                        <div class="w-6 h-6 rounded-full bg-primary text-white text-[10px] font-bold font-heading flex items-center justify-center flex-shrink-0">
                            AD
                        </div>
                        <span class="text-xs font-semibold text-slate-700 font-inter hidden sm:inline-block">Admin User</span>
                        <svg class="w-3.5 h-3.5 text-slate-400 transition-transform duration-200" id="user-menu-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <!-- Dropdown Menu Box -->
                    <div id="user-menu-dropdown" class="hidden absolute right-0 mt-2 w-56 rounded-2xl bg-white shadow-xl border border-slate-200/90 py-1.5 z-50 transform origin-top-right transition-all">
                        <div class="px-4 py-2.5 border-b border-slate-100">
                            <p class="text-xs font-bold text-slate-900 font-heading">Admin User</p>
                            <p class="text-[11px] text-slate-500 font-inter truncate">admin@dcra.gov.lk</p>
                            <span class="inline-block mt-1.5 text-[10px] font-mono font-semibold px-2 py-0.5 rounded-md bg-primary/10 text-primary border border-primary/20">System Administrator</span>
                        </div>
                        <div class="py-1">
                            <a href="<?= BASE_URL ?>../" class="flex items-center px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                                <svg class="w-4 h-4 mr-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                                All e-Services Portal
                            </a>
                            <a href="<?= BASE_URL ?>settings" class="flex items-center px-4 py-2 text-xs text-slate-700 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                                <svg class="w-4 h-4 mr-2.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                System Settings
                            </a>
                        </div>
                        <div class="border-t border-slate-100 pt-1">
                            <a href="<?= BASE_URL ?>logout" class="flex items-center px-4 py-2 text-xs font-medium text-red-600 hover:bg-red-50 transition-colors">
                                <svg class="w-4 h-4 mr-2.5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const userBtn = document.getElementById('user-menu-button');
    const userDropdown = document.getElementById('user-menu-dropdown');
    const userArrow = document.getElementById('user-menu-arrow');

    if (userBtn && userDropdown) {
        userBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            const isHidden = userDropdown.classList.contains('hidden');
            if (isHidden) {
                userDropdown.classList.remove('hidden');
                userBtn.setAttribute('aria-expanded', 'true');
                if (userArrow) userArrow.classList.add('rotate-180');
            } else {
                userDropdown.classList.add('hidden');
                userBtn.setAttribute('aria-expanded', 'false');
                if (userArrow) userArrow.classList.remove('rotate-180');
            }
        });

        document.addEventListener('click', function(e) {
            if (!userDropdown.contains(e.target) && !userBtn.contains(e.target)) {
                userDropdown.classList.add('hidden');
                userBtn.setAttribute('aria-expanded', 'false');
                if (userArrow) userArrow.classList.remove('rotate-180');
            }
        });
    }
});
</script>

<!-- Main Page Wrapper (Sidebar + Main Content Area) -->
<div class="flex-1 flex overflow-hidden">
