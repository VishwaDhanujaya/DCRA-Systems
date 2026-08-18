<?php
declare(strict_types=1);

/**
 * Central e-Services Portal
 * Department of Christian Religious Affairs
 */

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

$page_title = 'Department of Christian Religious Affairs — Portal';
$current_date = date('l, d F Y');

// 6 Core Department Systems in precise order requested:
// Upper Row (Maroon #4E0000): 01 Church Registration, 02 Priest Cert, 03 Visa Recommendation
// Lower Row (Navy #13273F): 04 Church Renovation, 05 Medical Letter, 06 Thalawila Pilgrim House Booking
$systems = [
    // Upper Row (Maroon Theme)
    [
        'code' => '01',
        'folder' => 'ChurchReg',
        'title' => 'Church Registration Management',
        'desc' => 'Official registration of churches, religious places of worship, governing bodies, trustees, and legal archives.',
        'border' => 'hover:border-[#4E0000]',
        'icon_bg' => 'bg-[#4E0000] text-white shadow-sm',
        'badge' => 'bg-[#4E0000]/10 text-[#4E0000] border-[#4E0000]/20',
        'btn' => 'bg-[#4E0000] hover:bg-[#390000] text-white',
        'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"/></svg>'
    ],
    [
        'code' => '02',
        'folder' => 'PriestCert',
        'title' => 'Priesthood Identity & Passport Cert',
        'desc' => 'Issuance and verification of priesthood certificates, clergy identity authentication, and passport clearance.',
        'border' => 'hover:border-[#4E0000]',
        'icon_bg' => 'bg-[#4E0000] text-white shadow-sm',
        'badge' => 'bg-[#4E0000]/10 text-[#4E0000] border-[#4E0000]/20',
        'btn' => 'bg-[#4E0000] hover:bg-[#390000] text-white',
        'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 022 2h14a2 2 0 062-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"/></svg>'
    ],
    [
        'code' => '03',
        'folder' => 'VisaRecommend',
        'title' => 'Visa Recommendation System',
        'desc' => 'Processing entry, resident, and extension visa recommendation letters for missionary clergy & foreign dignitaries.',
        'border' => 'hover:border-[#4E0000]',
        'icon_bg' => 'bg-[#4E0000] text-white shadow-sm',
        'badge' => 'bg-[#4E0000]/10 text-[#4E0000] border-[#4E0000]/20',
        'btn' => 'bg-[#4E0000] hover:bg-[#390000] text-white',
        'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>'
    ],
    // Lower Row (Navy Blue Theme)
    [
        'code' => '04',
        'folder' => 'ChurchRenovation',
        'title' => 'Church Renovation Information',
        'desc' => 'Project tracking, renovation grant requests, technical site inspections, and structural restoration.',
        'border' => 'hover:border-[#13273F]',
        'icon_bg' => 'bg-[#13273F] text-white shadow-sm',
        'badge' => 'bg-[#13273F]/10 text-[#13273F] border-[#13273F]/20',
        'btn' => 'bg-[#13273F] hover:bg-[#0D1B2C] text-white',
        'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h5m-5 0V11m0 0h-2m2 0h2M9 7h.01M15 7h.01M9 11h.01M15 11h.01"/></svg>'
    ],
    [
        'code' => '05',
        'folder' => 'MedicalLetter',
        'title' => 'Free Medical Letter Issuing',
        'desc' => 'Formal medical treatment recommendation letters and state healthcare assistance for ordained clergy.',
        'border' => 'hover:border-[#13273F]',
        'icon_bg' => 'bg-[#13273F] text-white shadow-sm',
        'badge' => 'bg-[#13273F]/10 text-[#13273F] border-[#13273F]/20',
        'btn' => 'bg-[#13273F] hover:bg-[#0D1B2C] text-white',
        'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>'
    ],
    [
        'code' => '06',
        'folder' => 'BungalowBooking',
        'title' => 'Thalawila Pilgrim House Booking',
        'desc' => 'Reservation and booking management for Thalawila Shrine Pilgrim House, guest quarters, and retreat facilities.',
        'border' => 'hover:border-[#13273F]',
        'icon_bg' => 'bg-[#13273F] text-white shadow-sm',
        'badge' => 'bg-[#13273F]/10 text-[#13273F] border-[#13273F]/20',
        'btn' => 'bg-[#13273F] hover:bg-[#0D1B2C] text-white',
        'icon' => '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>'
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="h-full bg-[#FDFBF9]">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($page_title) ?></title>
    
    <!-- Google Fonts: Montserrat & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./assets/images/emblem.png">

    <!-- CSS Styling -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Tailwind CSS Engine -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4E0000',
                        secondary: '#13273F'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen lg:h-screen bg-[#FDFBF9] text-slate-800 flex flex-col font-sans antialiased overflow-y-auto lg:overflow-hidden selection:bg-slate-200">

    <!-- Header Bar -->
    <header class="bg-white border-b border-slate-200/90 py-3.5 px-4 sm:px-8 flex-shrink-0 shadow-2xs">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="./" class="flex items-center group">
                <img src="./assets/images/logo.png" alt="DCRA Logo" class="h-9 w-auto object-contain flex-shrink-0">
                <div class="h-6 w-px bg-slate-200 mx-3 sm:mx-4 hidden sm:block"></div>
                <div class="hidden sm:block">
                    <h1 class="text-sm sm:text-base font-bold text-slate-900 font-heading tracking-tight leading-tight">
                        Department of Christian Religious Affairs
                    </h1>
                </div>
            </a>

            <div class="text-xs font-medium text-slate-500 hidden sm:block font-inter">
                <span><?= e($current_date) ?></span>
            </div>
        </div>
    </header>

    <!-- Main Section (Responsive Viewport Grid) -->
    <main class="flex-1 max-w-7xl w-full mx-auto px-4 sm:px-8 py-4 sm:py-6 flex flex-col justify-between">

        <!-- Section Header -->
        <div class="mb-3 sm:mb-4 flex-shrink-0">
            <h2 class="text-base sm:text-lg lg:text-xl font-extrabold text-slate-900 font-heading tracking-tight">
                Digital E-Services Systems
            </h2>
            <p class="text-xs text-slate-500 font-inter mt-0.5">Select a system module below to open its management workspace.</p>
        </div>

        <!-- 3x2 Responsive Grid Container -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3.5 sm:gap-5 flex-1 min-h-0">
            <?php foreach ($systems as $sys): ?>
            <a href="./<?= e($sys['folder']) ?>/" class="bg-white rounded-2xl border border-slate-200/90 p-4 sm:p-5 shadow-xs hover:shadow-lg transition-all duration-200 flex flex-col justify-between group overflow-hidden relative <?= e($sys['border']) ?>">
                
                <!-- Top Row: Icon & Module Code -->
                <div class="flex items-center justify-between">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center <?= e($sys['icon_bg']) ?>">
                        <?= $sys['icon'] ?>
                    </div>
                    <span class="text-[11px] font-mono font-bold px-2.5 py-0.5 rounded-full border <?= e($sys['badge']) ?>">
                        SYS-<?= e($sys['code']) ?>
                    </span>
                </div>

                <!-- Middle Content -->
                <div class="my-2.5 space-y-1">
                    <h3 class="text-sm sm:text-base font-bold text-slate-900 font-heading leading-snug group-hover:text-primary transition-colors">
                        <?= e($sys['title']) ?>
                    </h3>
                    <p class="text-[11px] sm:text-xs text-slate-600 font-inter leading-relaxed line-clamp-2">
                        <?= e($sys['desc']) ?>
                    </p>
                </div>

                <!-- Bottom Button -->
                <div class="pt-2.5 border-t border-slate-100 flex items-center justify-between text-xs font-bold font-heading">
                    <span class="text-slate-600 group-hover:text-slate-900 transition-colors">Workspace</span>
                    <span class="px-3.5 py-1.5 rounded-xl text-[11px] transition-all flex items-center gap-1.5 shadow-2xs <?= e($sys['btn']) ?>">
                        <span>Launch</span>
                        <span>→</span>
                    </span>
                </div>

            </a>
            <?php endforeach; ?>
        </div>

    </main>

    <!-- Compact Footer -->
    <footer class="bg-white border-t border-slate-200 py-2.5 px-4 sm:px-8 text-xs text-slate-500 flex-shrink-0">
        <div class="max-w-7xl mx-auto flex items-center justify-between text-[11px]">
            <span>© <?= date('Y') ?> Department of Christian Religious Affairs</span>
            <span class="font-mono text-slate-400">Government of Sri Lanka</span>
        </div>
    </footer>

</body>
</html>
