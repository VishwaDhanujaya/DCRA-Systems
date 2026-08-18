<?php
/**
 * Standalone Mock Login Page
 * Department of Christian Religious Affairs
 * Online Bungalow Booking System
 */

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="theme-color" content="<?= COLOR_PRIMARY ?>">
    <title>Login - <?= APP_ORG ?></title>
    
    <!-- Google Fonts: Montserrat & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Compiled Tailwind CSS Bundle -->
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
    
    <style>
        /* Exact Left Panel Gradient */
        .bg-login-maroon {
            background: linear-gradient(90deg, #390000 0%, #4E0000 100%);
        }
    </style>
</head>
<body class="h-full min-h-screen bg-white font-sans antialiased flex flex-col lg:flex-row">

    <!-- Left Brand Panel with Exact Gradient -->
    <div class="w-full lg:w-1/3 xl:w-[35%] min-h-[220px] lg:min-h-screen bg-login-maroon p-8 sm:p-12 flex flex-col justify-between items-center relative overflow-hidden flex-shrink-0" style="background: linear-gradient(90deg, #390000 0%, #4E0000 100%);">
        
        <!-- Top Spacer -->
        <div class="hidden lg:block"></div>

        <!-- Department Emblem Logo & Title -->
        <div class="my-auto text-center space-y-4 max-w-sm px-4">
            <img src="<?= BASE_URL ?>assets/images/logo-light.png" alt="Department of Christian Religious Affairs Logo" class="h-20 sm:h-24 w-auto mx-auto object-contain">
        </div>

        <!-- Bottom Copyright Text -->
        <div class="text-[11px] text-white/70 font-inter text-center font-normal tracking-wide mt-6 lg:mt-0">
            2026 &copy; All rights reserved by SLT Digital
        </div>
    </div>

    <!-- Right White Login Workspace -->
    <div class="flex-1 flex items-center justify-center p-6 sm:p-12 bg-white min-h-[500px]">
        <div class="w-full max-w-md space-y-6">
            
            <!-- Heading Block -->
            <div class="text-center space-y-2">
                <h1 class="text-3xl font-bold text-slate-900 font-heading tracking-tight">Login</h1>
                <p class="text-xs sm:text-sm text-slate-400 font-inter font-normal">Login your account in a seconds</p>
            </div>

            <!-- Login Form Container -->
            <form action="<?= BASE_URL ?>dashboard" method="GET" class="space-y-5 font-inter pt-2">
                
                <!-- Email Address Input -->
                <div>
                    <input type="email" required placeholder="Email Address" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-primary/30 focus:border-slate-400 transition-all h-12 min-h-[44px]">
                </div>

                <!-- Password Input -->
                <div>
                    <input type="password" required placeholder="Password" class="w-full px-4 py-3 bg-white border border-slate-200 rounded-lg text-sm text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-primary/30 focus:border-slate-400 transition-all h-12 min-h-[44px]">
                </div>

                <!-- Controls Row: Keep me logged in & Forget password? -->
                <div class="flex items-center justify-between text-xs pt-1">
                    <label class="flex items-center gap-2 text-slate-500 cursor-pointer select-none">
                        <input type="checkbox" class="w-4 h-4 text-primary border-slate-300 rounded focus:ring-primary cursor-pointer">
                        <span>Keep me logged in</span>
                    </label>
                    <a href="#" class="text-[#4E0000] hover:text-[#390000] font-medium transition-colors">Forget password?</a>
                </div>

                <!-- Log In Action Button -->
                <button type="submit" class="w-full bg-[#4E0000] hover:bg-[#390000] text-white font-semibold text-sm py-3 px-4 rounded-lg shadow-xs transition-colors min-h-[44px] mt-2 cursor-pointer flex items-center justify-center">
                    Log in
                </button>

                <!-- Bottom Sign Up Link -->
                <p class="text-xs text-slate-500 text-center pt-2">
                    Don't have an account? <a href="#" class="text-[#4E0000] hover:text-[#390000] font-semibold transition-colors">Sign up</a>
                </p>
            </form>

        </div>
    </div>

</body>
</html>

