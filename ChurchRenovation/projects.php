<?php
/**
 * Projects Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Church Renovation Information System
 */

$page_title = "Projects";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Projects dataset matching target visual UI and extended records
$projects = [
    [
        'id' => 'PRJ-2026-001',
        'name' => "St. Anthony's Church",
        'diocese' => 'Colombo Diocese',
        'province' => 'Western Province',
        'city' => 'Colombo',
        'location' => 'Colombo, Western Province',
        'status' => 'Completed',
        'status_color' => 'emerald',
        'type' => 'Roof Restoration',
        'start_date' => 'Mar 2026',
        'end_date' => 'Oct 2027',
        'date_range' => 'Mar 2026 – Oct 2027',
        'budget' => 450000,
        'budget_formatted' => 'LKR 450,000',
        'progress' => 100,
        'contractor' => 'Apex Heritage Restorations Ltd',
        'inspector' => 'Eng. Ruwan Fernando',
        'description' => 'Complete slate roof restoration, timber truss structural reinforcement, and waterproof membrane insulation.'
    ],
    [
        'id' => 'PRJ-2026-002',
        'name' => "St. Mary's Cathedral",
        'diocese' => 'Galle Diocese',
        'province' => 'Southern Province',
        'city' => 'Galle',
        'location' => 'Galle, Southern Province',
        'status' => 'In Progress',
        'status_color' => 'sky',
        'type' => 'Interior Renovation',
        'start_date' => 'Feb 2026',
        'end_date' => 'Sep 2027',
        'date_range' => 'Feb 2026 – Sep 2027',
        'budget' => 350000,
        'budget_formatted' => 'LKR 350,000',
        'progress' => 65,
        'contractor' => 'Southern Civil Engineering Co.',
        'inspector' => 'Arch. Anura Silva',
        'description' => 'Altar plaster restoration, stained glass window refurbishment, and electrical rewiring.'
    ],
    [
        'id' => 'PRJ-2026-003',
        'name' => 'Holy Trinity Church',
        'diocese' => 'Negombo Diocese',
        'province' => 'Western Province',
        'city' => 'Negombo',
        'location' => 'Negombo, Western Province',
        'status' => 'Completed',
        'status_color' => 'emerald',
        'type' => 'Bell Tower Repair',
        'start_date' => 'Jan 2026',
        'end_date' => 'Aug 2027',
        'date_range' => 'Jan 2026 – Aug 2027',
        'budget' => 250000,
        'budget_formatted' => 'LKR 250,000',
        'progress' => 100,
        'contractor' => 'Coastal Heritage Builders',
        'inspector' => 'Eng. Samantha Perera',
        'description' => 'Masonry crack stabilization, bell mounting mechanism renewal, and exterior weatherproof painting.'
    ],
    [
        'id' => 'PRJ-2026-004',
        'name' => 'Sacred Heart Church',
        'diocese' => 'Kalutara Diocese',
        'province' => 'Western Province',
        'city' => 'Kalutara',
        'location' => 'Kalutara, Western Province',
        'status' => 'Planned',
        'status_color' => 'amber',
        'type' => 'Structural Preservation',
        'start_date' => 'Dec 2025',
        'end_date' => 'Jul 2027',
        'date_range' => 'Dec 2025 – Jul 2027',
        'budget' => 150000,
        'budget_formatted' => 'LKR 150,000',
        'progress' => 15,
        'contractor' => 'Island Preservation Corp',
        'inspector' => 'Eng. Nimal Jayawardena',
        'description' => 'Foundation underpinning, damp-proof course insertion, and perimeter drainage overhaul.'
    ],
    [
        'id' => 'PRJ-2026-005',
        'name' => "St. Sebastian's Church",
        'diocese' => 'Kandy Diocese',
        'province' => 'Central Province',
        'city' => 'Kandy',
        'location' => 'Kandy, Central Province',
        'status' => 'In Progress',
        'status_color' => 'sky',
        'type' => 'Facade Restoration',
        'start_date' => 'Apr 2026',
        'end_date' => 'Nov 2027',
        'date_range' => 'Apr 2026 – Nov 2027',
        'budget' => 520000,
        'budget_formatted' => 'LKR 520,000',
        'progress' => 45,
        'contractor' => 'Central Heritage Restorers',
        'inspector' => 'Arch. Malini Wickramasinghe',
        'description' => 'Front facade stonework cleaning, mortar repointing, and decorative archways conservation.'
    ],
    [
        'id' => 'PRJ-2026-006',
        'name' => "St. Joseph's Shrine",
        'diocese' => 'Jaffna Diocese',
        'province' => 'Northern Province',
        'city' => 'Jaffna',
        'location' => 'Jaffna, Northern Province',
        'status' => 'Planned',
        'status_color' => 'amber',
        'type' => 'Roof Restoration',
        'start_date' => 'May 2026',
        'end_date' => 'Dec 2027',
        'date_range' => 'May 2026 – Dec 2027',
        'budget' => 380000,
        'budget_formatted' => 'LKR 380,000',
        'progress' => 0,
        'contractor' => 'Northern Infrastructure Developers',
        'inspector' => 'Eng. K. Balasubramaniam',
        'description' => 'Terracotta tile roof replacement, guttering upgrades, and ceiling timber treatment.'
    ]
];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div>
            <span class="text-xs font-normal text-slate-400 font-inter">Home / Projects</span>
            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Projects</h2>
        </div>

        <!-- 4 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat Card 1: Total Projects -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Total Projects</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">128</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 4 this year
                </p>
            </div>

            <!-- Stat Card 2: Completed -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Completed</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">14</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    71%
                </p>
            </div>

            <!-- Stat Card 3: In Progress -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">In Progress</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">37</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    Active
                </p>
            </div>

            <!-- Stat Card 4: Planned -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Planned</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">77</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    Upcoming
                </p>
            </div>

        </div>

        <!-- Filter Controls & View Toggle Bar -->
        <div class="space-y-2">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <div class="flex flex-wrap items-center gap-3 flex-1">
                    <!-- Search Field -->
                    <div class="relative flex-1 min-w-[240px]">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text" id="project-search-input" placeholder="Search name, or diocese…" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all shadow-xs">
                    </div>

                    <!-- All Types Dropdown -->
                    <div class="relative">
                        <select id="project-type-filter" class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-8 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                            <option value="">All types</option>
                            <option value="Roof Restoration">Roof Restoration</option>
                            <option value="Interior Renovation">Interior Renovation</option>
                            <option value="Bell Tower Repair">Bell Tower Repair</option>
                            <option value="Structural Preservation">Structural Preservation</option>
                            <option value="Facade Restoration">Facade Restoration</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </div>
                    </div>

                    <!-- Reset Filter Button -->
                    <button id="project-reset-btn" class="border border-rose-200 text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-medium font-inter inline-flex items-center gap-1 transition-colors cursor-pointer shadow-xs whitespace-nowrap">
                        Reset Filter
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>

                <!-- Grid / List Toggle Buttons -->
                <div class="flex items-center gap-1 font-inter">
                    <button id="view-toggle-grid" class="bg-secondary text-white px-3 py-1.5 rounded-lg text-xs font-semibold inline-flex items-center gap-1.5 shadow-xs cursor-pointer transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        Grid
                    </button>
                    <button id="view-toggle-list" class="bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium inline-flex items-center gap-1.5 transition-colors cursor-pointer shadow-xs">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        List
                    </button>
                </div>
            </div>

            <!-- Records Count Subtext -->
            <div id="records-counter-text" class="text-right text-[11px] text-slate-400 font-inter">
                Showing <?= count(array_slice($projects, 0, 4)) ?> of 12 records
            </div>
        </div>

        <!-- Project Cards Grid Container -->
        <div id="projects-grid-view" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5 items-stretch">
            <?php foreach (array_slice($projects, 0, 4) as $p): ?>
                <div class="project-card-item bg-white rounded-xl border border-slate-200/80 shadow-xs flex flex-col justify-between overflow-hidden group hover:border-slate-300 transition-all" 
                     data-name="<?= e(strtolower($p['name'])) ?>" 
                     data-diocese="<?= e(strtolower($p['diocese'])) ?>" 
                     data-type="<?= e($p['type']) ?>">
                    <div>
                        <!-- Split Photo Header Area (Before / After Visual Container) -->
                        <div class="relative bg-[#F8FAFC] border-b border-slate-200/80 h-36 flex items-center overflow-hidden">
                            <!-- Background Subtle Architectural Blueprint Pattern -->
                            <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:12px_12px] opacity-40"></div>
                            
                            <!-- Left Half (Before Photo Container) -->
                            <div class="relative flex-1 h-full border-r border-slate-200/60 p-3 flex flex-col justify-between items-start bg-slate-100/50">
                                <span class="bg-rose-50 border border-rose-200/70 text-rose-600 text-[10px] px-2 py-0.5 rounded-full font-medium font-inter z-10 shadow-2xs">
                                    Before
                                </span>
                                <div class="w-full flex items-center justify-center text-slate-300 group-hover:text-slate-400 transition-colors my-auto">
                                    <svg class="w-8 h-8 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Right Half (After Photo Container) -->
                            <div class="relative flex-1 h-full p-3 flex flex-col justify-between items-start bg-emerald-50/20">
                                <span class="bg-rose-50 border border-rose-200/70 text-rose-600 text-[10px] px-2 py-0.5 rounded-full font-medium font-inter z-10 shadow-2xs">
                                    After
                                </span>
                                <div class="w-full flex items-center justify-center text-slate-300 group-hover:text-emerald-500/50 transition-colors my-auto">
                                    <svg class="w-8 h-8 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Content Details -->
                        <div class="p-5 space-y-3 font-inter">
                            <div>
                                <h3 class="font-bold text-slate-900 font-heading text-sm group-hover:text-primary transition-colors"><?= e($p['name']) ?></h3>
                                <p class="text-[11px] text-slate-400 mt-0.5"><?= e($p['diocese']) ?></p>
                            </div>

                            <div>
                                <?php if ($p['status'] === 'Completed'): ?>
                                    <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                        Completed
                                    </span>
                                <?php elseif ($p['status'] === 'In Progress'): ?>
                                    <span class="bg-[#EFF6FF] text-[#1E40AF] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                                        In Progress
                                    </span>
                                <?php else: ?>
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                        Planned
                                    </span>
                                <?php endif; ?>
                            </div>

                            <div class="space-y-1.5 text-xs text-slate-500 pt-1">
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                    <span class="whitespace-nowrap"><?= e($p['date_range']) ?></span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    <span class="whitespace-nowrap"><?= e($p['location']) ?></span>
                                </div>
                                <div class="flex items-center gap-1.5 font-medium text-slate-700">
                                    <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                    <span><?= e($p['budget_formatted']) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="p-5 pt-0">
                        <button onclick="openProjectModal('<?= e($p['id']) ?>')" class="w-full bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold py-2.5 px-4 rounded-lg inline-flex items-center justify-center transition-colors shadow-xs cursor-pointer">
                            View Full Details
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Project List View Table Container (Hidden by Default) -->
        <div id="projects-list-view" class="bg-white rounded-xl border border-slate-200/80 shadow-xs overflow-hidden hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[850px]">
                    <thead>
                        <tr class="bg-[#F7F4EE] text-slate-500 font-semibold uppercase tracking-wider text-[10px] border-b border-[#EAE5D9]">
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Project ID</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Church & Diocese</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Work Type</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Status</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Timeline</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Location</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Budget (LKR)</th>
                            <th scope="col" class="py-3.5 px-5 text-right whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200/70">
                        <?php foreach ($projects as $p): ?>
                            <tr class="project-list-row hover:bg-slate-50/70 transition-colors" 
                                data-name="<?= e(strtolower($p['name'])) ?>" 
                                data-diocese="<?= e(strtolower($p['diocese'])) ?>" 
                                data-type="<?= e($p['type']) ?>">
                                <td class="py-3.5 px-5 font-mono text-slate-500 font-medium whitespace-nowrap">
                                    <?= e($p['id']) ?>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap">
                                    <div class="font-semibold text-slate-900 font-heading text-xs"><?= e($p['name']) ?></div>
                                    <div class="text-[11px] text-slate-400"><?= e($p['diocese']) ?></div>
                                </td>
                                <td class="py-3.5 px-5 text-slate-700 font-medium whitespace-nowrap">
                                    <?= e($p['type']) ?>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap">
                                    <?php if ($p['status'] === 'Completed'): ?>
                                        <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                            Completed
                                        </span>
                                    <?php elseif ($p['status'] === 'In Progress'): ?>
                                        <span class="bg-[#EFF6FF] text-[#1E40AF] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                                            In Progress
                                        </span>
                                    <?php else: ?>
                                        <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                            Planned
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-3.5 px-5 text-slate-600 whitespace-nowrap">
                                    <?= e($p['date_range']) ?>
                                </td>
                                <td class="py-3.5 px-5 text-slate-600 whitespace-nowrap">
                                    <?= e($p['location']) ?>
                                </td>
                                <td class="py-3.5 px-5 font-semibold text-slate-900 whitespace-nowrap">
                                    <?= e($p['budget_formatted']) ?>
                                </td>
                                <td class="py-3.5 px-5 text-right whitespace-nowrap">
                                    <button onclick="openProjectModal('<?= e($p['id']) ?>')" class="bg-secondary hover:bg-secondary-dark text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition-colors shadow-2xs cursor-pointer">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

<!-- Project Detail Modal Dialog -->
<div id="project-detail-modal" class="fixed inset-0 z-50 items-center justify-center bg-slate-950/60 backdrop-blur-xs hidden p-4" aria-modal="true" role="dialog">
    <div class="bg-white rounded-2xl border border-slate-200 shadow-2xl max-w-2xl w-full overflow-hidden flex flex-col max-h-[90vh] animate-in fade-in zoom-in duration-200">
        
        <!-- Modal Header -->
        <div class="px-6 py-4 bg-slate-50 border-b border-slate-200 flex items-center justify-between">
            <div>
                <span id="modal-project-id" class="text-[10px] font-mono text-slate-400 uppercase tracking-wider font-semibold">PRJ-2026-001</span>
                <h3 id="modal-project-title" class="text-lg font-bold text-slate-900 font-heading">St. Anthony's Church</h3>
            </div>
            <button onclick="closeProjectModal()" class="p-1.5 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-200/60 transition-colors cursor-pointer" aria-label="Close modal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Modal Body Content -->
        <div class="p-6 overflow-y-auto space-y-6 text-xs font-inter">
            
            <!-- Before & After Visual Preview Comparison -->
            <div>
                <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide mb-2 font-heading">Renovation Visual Log</p>
                <div class="grid grid-cols-2 gap-3 h-44 rounded-xl overflow-hidden border border-slate-200">
                    <div class="bg-slate-100 p-4 flex flex-col justify-between items-start relative border-r border-slate-200">
                        <span class="bg-rose-50 border border-rose-200 text-rose-600 text-[10px] px-2 py-0.5 rounded-full font-medium">Before Renovation</span>
                        <div class="w-full text-center text-slate-400 text-xs my-auto font-medium">
                            Initial Site State Photo
                        </div>
                    </div>
                    <div class="bg-emerald-50/40 p-4 flex flex-col justify-between items-start relative">
                        <span class="bg-emerald-50 border border-emerald-200 text-emerald-700 text-[10px] px-2 py-0.5 rounded-full font-medium">Current / After State</span>
                        <div class="w-full text-center text-emerald-600 text-xs my-auto font-medium">
                            Completed Restoration
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Specs Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 bg-slate-50/70 p-4 rounded-xl border border-slate-200/80">
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Diocese</span>
                    <p id="modal-project-diocese" class="font-medium text-slate-800 mt-0.5">Colombo Diocese</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Renovation Type</span>
                    <p id="modal-project-type" class="font-medium text-slate-800 mt-0.5">Roof Restoration</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Project Status</span>
                    <p id="modal-project-status" class="font-medium text-emerald-600 mt-0.5">Completed</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Approved Budget</span>
                    <p id="modal-project-budget" class="font-medium text-slate-900 mt-0.5">LKR 450,000</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Timeline</span>
                    <p id="modal-project-timeline" class="font-medium text-slate-800 mt-0.5">Mar 2026 – Oct 2027</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Location</span>
                    <p id="modal-project-location" class="font-medium text-slate-800 mt-0.5">Colombo, Western Province</p>
                </div>
            </div>

            <!-- Progress Bar -->
            <div>
                <div class="flex justify-between items-center mb-1.5">
                    <span class="font-semibold text-slate-700">Project Progress</span>
                    <span id="modal-project-progress-num" class="font-semibold text-primary">100%</span>
                </div>
                <div class="w-full h-2.5 bg-slate-200 rounded-full overflow-hidden">
                    <div id="modal-project-progress-bar" class="h-full bg-primary transition-all duration-300" style="width: 100%"></div>
                </div>
            </div>

            <!-- Description -->
            <div>
                <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide mb-1 font-heading">Scope of Work</p>
                <p id="modal-project-desc" class="text-slate-600 leading-relaxed">
                    Complete slate roof restoration, timber truss structural reinforcement, and waterproof membrane insulation.
                </p>
            </div>

            <!-- Assigned Team & Authorities -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 border-t border-slate-200/80 pt-4">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-secondary/10 text-secondary flex items-center justify-center font-bold text-xs shrink-0">
                        CT
                    </div>
                    <div>
                        <span class="text-[10px] font-semibold text-slate-400 uppercase block">Contractor</span>
                        <span id="modal-project-contractor" class="font-medium text-slate-800">Apex Heritage Restorations Ltd</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-xs shrink-0">
                        IN
                    </div>
                    <div>
                        <span class="text-[10px] font-semibold text-slate-400 uppercase block">Supervising Inspector</span>
                        <span id="modal-project-inspector" class="font-medium text-slate-800">Eng. Ruwan Fernando</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Modal Footer -->
        <div class="px-6 py-3.5 bg-slate-50 border-t border-slate-200 flex justify-end">
            <button onclick="closeProjectModal()" class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-4 py-2 rounded-lg font-medium text-xs transition-colors cursor-pointer">
                Close
            </button>
        </div>
    </div>
</div>

<!-- Client-side Interactive Scripting -->
<script>
    const projectsData = <?= json_encode($projects) ?>;

    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('project-search-input');
        const typeFilter = document.getElementById('project-type-filter');
        const resetBtn = document.getElementById('project-reset-btn');
        const gridViewBtn = document.getElementById('view-toggle-grid');
        const listViewBtn = document.getElementById('view-toggle-list');
        const gridContainer = document.getElementById('projects-grid-view');
        const listContainer = document.getElementById('projects-list-view');
        const recordsCounter = document.getElementById('records-counter-text');

        // View Mode Switcher Logic
        gridViewBtn.addEventListener('click', () => {
            gridContainer.classList.remove('hidden');
            listContainer.classList.add('hidden');
            
            gridViewBtn.className = "bg-secondary text-white px-3 py-1.5 rounded-lg text-xs font-semibold inline-flex items-center gap-1.5 shadow-xs cursor-pointer transition-colors";
            listViewBtn.className = "bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium inline-flex items-center gap-1.5 transition-colors cursor-pointer shadow-xs";
        });

        listViewBtn.addEventListener('click', () => {
            listContainer.classList.remove('hidden');
            gridContainer.classList.add('hidden');

            listViewBtn.className = "bg-secondary text-white px-3 py-1.5 rounded-lg text-xs font-semibold inline-flex items-center gap-1.5 shadow-xs cursor-pointer transition-colors";
            gridViewBtn.className = "bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium inline-flex items-center gap-1.5 transition-colors cursor-pointer shadow-xs";
        });

        // Filter and Search Handler
        function filterProjects() {
            const query = searchInput.value.toLowerCase().trim();
            const selectedType = typeFilter.value;

            let visibleCount = 0;

            // Filter Grid Items
            const gridItems = document.querySelectorAll('.project-card-item');
            gridItems.forEach(item => {
                const name = item.getAttribute('data-name');
                const diocese = item.getAttribute('data-diocese');
                const type = item.getAttribute('data-type');

                const matchesQuery = !query || name.includes(query) || diocese.includes(query);
                const matchesType = !selectedType || type === selectedType;

                if (matchesQuery && matchesType) {
                    item.classList.remove('hidden');
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });

            // Filter List Rows
            const listRows = document.querySelectorAll('.project-list-row');
            listRows.forEach(row => {
                const name = row.getAttribute('data-name');
                const diocese = row.getAttribute('data-diocese');
                const type = row.getAttribute('data-type');

                const matchesQuery = !query || name.includes(query) || diocese.includes(query);
                const matchesType = !selectedType || type === selectedType;

                if (matchesQuery && matchesType) {
                    row.classList.remove('hidden');
                } else {
                    row.classList.add('hidden');
                }
            });

            // Update record counter text
            recordsCounter.textContent = `Showing ${visibleCount} of ${gridItems.length} records`;
        }

        searchInput.addEventListener('input', filterProjects);
        typeFilter.addEventListener('change', filterProjects);

        resetBtn.addEventListener('click', () => {
            searchInput.value = '';
            typeFilter.value = '';
            filterProjects();
        });
    });

    // Modal Control Functions
    function openProjectModal(id) {
        const p = projectsData.find(item => item.id === id);
        if (!p) return;

        document.getElementById('modal-project-id').textContent = p.id;
        document.getElementById('modal-project-title').textContent = p.name;
        document.getElementById('modal-project-diocese').textContent = p.diocese;
        document.getElementById('modal-project-type').textContent = p.type;
        document.getElementById('modal-project-status').textContent = p.status;
        document.getElementById('modal-project-budget').textContent = p.budget_formatted;
        document.getElementById('modal-project-timeline').textContent = p.date_range;
        document.getElementById('modal-project-location').textContent = p.location;
        document.getElementById('modal-project-desc').textContent = p.description;
        document.getElementById('modal-project-contractor').textContent = p.contractor;
        document.getElementById('modal-project-inspector').textContent = p.inspector;
        
        document.getElementById('modal-project-progress-num').textContent = p.progress + '%';
        document.getElementById('modal-project-progress-bar').style.width = p.progress + '%';

        const modal = document.getElementById('project-detail-modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeProjectModal() {
        const modal = document.getElementById('project-detail-modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // Close modal when pressing Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeProjectModal();
        }
    });
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
