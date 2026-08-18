<?php
/**
 * Reports Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Church Renovation Information System
 */

$page_title = "Reports";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Recent Projects dataset matching target visual UI
$recent_projects = [
    [
        'church' => 'St. Augustine Cathedral',
        'location' => 'Charleston, SC',
        'status' => 'Completed',
        'status_color' => 'emerald',
        'style' => 'Gothic',
        'timeline' => '2022–2023',
        'progress' => '100%',
        'budget' => '$4.2M'
    ],
    [
        'church' => 'Trinity Baptist Church',
        'location' => 'Savannah, GA',
        'status' => 'Completed',
        'status_color' => 'emerald',
        'style' => 'Colonial',
        'timeline' => '2021–2022',
        'progress' => '100%',
        'budget' => '$1.8M'
    ],
    [
        'church' => 'Grace Lutheran Chapel',
        'location' => 'Cincinnati, OH',
        'status' => 'In Progress',
        'status_color' => 'amber',
        'style' => 'Romanesque',
        'timeline' => "Due Jun'25",
        'progress' => '68%',
        'budget' => '$920K'
    ],
    [
        'church' => 'First Presbyterian',
        'location' => 'Hartford, CT',
        'status' => 'Completed',
        'status_color' => 'emerald',
        'style' => 'Federal',
        'timeline' => '2023–2024',
        'progress' => '100%',
        'budget' => '$2.1M'
    ],
    [
        'church' => 'Holy Rosary Parish',
        'location' => 'Mobile, AL',
        'status' => 'Planned',
        'status_color' => 'sky',
        'style' => 'Baroque',
        'timeline' => "Sep'25+",
        'progress' => '8%',
        'budget' => '$680K'
    ]
];

// Precision Monthly completion & progress bar chart heights (%) matching target image
$monthly_chart = [
    ['month' => 'Jan', 'completed' => 35, 'in_progress' => 48],
    ['month' => 'Feb', 'completed' => 25, 'in_progress' => 88],
    ['month' => 'Mar', 'completed' => 32, 'in_progress' => 68],
    ['month' => 'Apr', 'completed' => 36, 'in_progress' => 48],
    ['month' => 'May', 'completed' => 25, 'in_progress' => 68],
    ['month' => 'Jun', 'completed' => 30, 'in_progress' => 88],
    ['month' => 'Jul', 'completed' => 36, 'in_progress' => 48],
    ['month' => 'Aug', 'completed' => 52, 'in_progress' => 68],
    ['month' => 'Sep', 'completed' => 25, 'in_progress' => 48],
    ['month' => 'Oct', 'completed' => 36, 'in_progress' => 88],
    ['month' => 'Nov', 'completed' => 25, 'in_progress' => 48],
    ['month' => 'Dec', 'completed' => 32, 'in_progress' => 68]
];

// Provinces breakdown count dataset matching target image
$provinces = [
    'Western' => 89,
    'Southern' => 59,
    'Central' => 78,
    'Sabaragamuva' => 34,
    'Northern' => 75,
    'Eastern' => 15,
    'Uva' => 34,
    'North-Central' => 24,
    'North-Western' => 16
];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Top Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Reports</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Reports</h2>
            </div>
            <div>
                <button class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold py-2.5 px-4 rounded-lg inline-flex items-center gap-2 shadow-xs transition-colors cursor-pointer font-inter">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Report
                </button>
            </div>
        </div>

        <!-- Date Range Filter Bar -->
        <div class="flex flex-wrap items-center gap-3 font-inter">
            <div class="flex items-center gap-2">
                <span class="text-xs font-normal text-slate-500">From</span>
                <div class="relative">
                    <input type="text" value="01 Jan 2025" class="bg-white border border-slate-200 rounded-lg text-xs font-medium text-slate-700 py-1.5 px-3 focus:outline-none focus:border-slate-300 w-32 shadow-xs">
                </div>
            </div>
            
            <div class="flex items-center gap-2">
                <span class="text-xs font-normal text-slate-500">To</span>
                <div class="relative">
                    <input type="text" value="31 Dec 2025" class="bg-white border border-slate-200 rounded-lg text-xs font-medium text-slate-700 py-1.5 px-3 focus:outline-none focus:border-slate-300 w-32 shadow-xs">
                </div>
            </div>

            <!-- All Types Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-1.5 pl-3 pr-8 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>All types</option>
                    <option>Roof Restoration</option>
                    <option>Interior Renovation</option>
                    <option>Bell Tower Repair</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>

            <!-- All Dioceses Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-1.5 pl-3 pr-8 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>All dioceses</option>
                    <option>Colombo Diocese</option>
                    <option>Galle Diocese</option>
                    <option>Negombo Diocese</option>
                    <option>Kandy Diocese</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>
        </div>

        <!-- 4 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat Card 1: Total Projects -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">TOTAL PROJECTS</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">63</h3>
                </div>
            </div>

            <!-- Stat Card 2: Completed -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">COMPLETED</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">51</h3>
                </div>
            </div>

            <!-- Stat Card 3: Total Budget -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">TOTAL BUDGET</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">LKR 450,000</h3>
                </div>
            </div>

            <!-- Stat Card 4: Avg. Duration -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">AVG. DURATION</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">16 mo</h3>
                </div>
            </div>

        </div>

        <!-- Middle Analytics Dashboard Grid (2 Columns: Chart 65% + Side Panels 35%) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
            
            <!-- Left Panel: Renovation Progress Bar Chart Card (Spans 2 Columns, Full Height Aligned) -->
            <div class="lg:col-span-2 bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs flex flex-col justify-between h-full">
                
                <!-- Chart Title & Legend Header -->
                <div class="space-y-1">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Renovation Progress</h3>
                    <p class="text-xs text-slate-400 font-inter">Monthly project completions & budget spend · 01 Jan 2026 - 31 Mar 2026</p>
                    
                    <!-- Chart Legend Markers -->
                    <div class="flex items-center gap-5 text-xs text-slate-600 font-inter pt-3">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-xs bg-[#13273F] inline-block"></span>
                            <span>Completed</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-xs bg-[#4E0000] inline-block"></span>
                            <span>In Progress</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-xs bg-slate-200 inline-block"></span>
                            <span>Budget (LKR M)</span>
                        </div>
                    </div>
                </div>

                <!-- Expanded Monthly Bar Chart Visual Area -->
                <div class="relative pt-6 pb-2 flex-1 flex flex-col justify-end min-h-[360px]">
                    <!-- Horizontal Grid Baseline Lines -->
                    <div class="absolute inset-0 flex flex-col justify-between pointer-events-none pb-8 border-b border-slate-200">
                        <div class="border-b border-slate-100 w-full"></div>
                        <div class="border-b border-slate-100 w-full"></div>
                        <div class="border-b border-slate-100 w-full"></div>
                        <div class="border-b border-slate-100 w-full"></div>
                        <div class="border-b border-slate-100 w-full"></div>
                    </div>

                    <!-- 12-Month Bars Container -->
                    <div class="relative z-10 flex items-end justify-between h-72 sm:h-80 px-2">
                        <?php foreach ($monthly_chart as $m): ?>
                            <div class="flex flex-col items-center gap-2 flex-1 group cursor-pointer h-full justify-end">
                                <!-- Bars Pair -->
                                <div class="flex items-end gap-1.5 h-[85%] w-full justify-center">
                                    <!-- Completed Navy Bar -->
                                    <div class="w-2.5 sm:w-3.5 bg-[#13273F] rounded-t-xs transition-all duration-300 group-hover:bg-secondary-light" 
                                         style="height: <?= $m['completed'] ?>%">
                                    </div>
                                    <!-- In Progress Maroon Bar -->
                                    <div class="w-2.5 sm:w-3.5 bg-[#4E0000] rounded-t-xs transition-all duration-300 group-hover:bg-primary-light" 
                                         style="height: <?= $m['in_progress'] ?>%">
                                    </div>
                                </div>
                                <!-- Month Label -->
                                <span class="text-xs font-inter text-slate-500 font-medium group-hover:text-slate-900 transition-colors shrink-0">
                                    <?= $m['month'] ?>
                                </span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <!-- Right Side Panels Column (Spans 1 Column) -->
            <div class="space-y-6 flex flex-col justify-between">
                
                <!-- Card 1: Status Breakdown (Donut Pie Chart) -->
                <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs space-y-4 font-inter">
                    <h3 class="text-base font-bold text-slate-900 font-heading">Status Breakdown</h3>
                    
                    <div class="flex items-center justify-between gap-4">
                        <!-- High Precision Solid Segment SVG Donut Chart matching design -->
                        <div class="relative w-32 h-32 flex items-center justify-center shrink-0">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                                <!-- Background Base Ring Track -->
                                <circle cx="18" cy="18" r="15.91549430918954" fill="none" stroke="#F1F5F9" stroke-width="3.6" />
                                
                                <!-- Segment 1: Completed 60% (Vibrant Blue #2563EB) -->
                                <circle cx="18" cy="18" r="15.91549430918954" fill="none" stroke="#2563EB" stroke-width="3.6" 
                                        stroke-dasharray="60 100" stroke-dashoffset="0" />
                                
                                <!-- Segment 2: In Progress 15% (Secondary Blue #3B82F6) -->
                                <circle cx="18" cy="18" r="15.91549430918954" fill="none" stroke="#3B82F6" stroke-width="3.6" 
                                        stroke-dasharray="15 100" stroke-dashoffset="-60" />
                                
                                <!-- Segment 3: Planning 15% (Warm Amber Gold #D97706) -->
                                <circle cx="18" cy="18" r="15.91549430918954" fill="none" stroke="#D97706" stroke-width="3.6" 
                                        stroke-dasharray="15 100" stroke-dashoffset="-75" />
                                
                                <!-- Segment 4: On Hold 10% (Deep Crimson Maroon #4E0000) -->
                                <circle cx="18" cy="18" r="15.91549430918954" fill="none" stroke="#4E0000" stroke-width="3.6" 
                                        stroke-dasharray="10 100" stroke-dashoffset="-90" />
                            </svg>
                            <!-- Donut Center Text Label -->
                            <div class="absolute text-center">
                                <span class="text-2xl font-bold text-slate-900 font-heading block leading-none">148</span>
                                <span class="text-[9px] text-slate-400 uppercase tracking-widest font-semibold block mt-1">TOTAL</span>
                            </div>
                        </div>

                        <!-- Legend List -->
                        <div class="space-y-1.5 text-xs text-slate-600 font-medium">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#2563EB]"></span>
                                <span>Completed — 77 (60%)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#3B82F6]"></span>
                                <span>In Progress — 23 (15%)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#D97706]"></span>
                                <span>Planning — 13 (9%)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-[#4E0000]"></span>
                                <span>On Hold — 13 (9%)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Projects by Province -->
                <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs space-y-3 font-inter flex-1 flex flex-col justify-between">
                    <h3 class="text-base font-bold text-slate-900 font-heading">Projects by Province</h3>
                    
                    <div class="divide-y divide-slate-100 text-xs">
                        <?php foreach ($provinces as $province_name => $count): ?>
                            <div class="py-1.5 flex items-center justify-between text-slate-700">
                                <span><?= e($province_name) ?></span>
                                <span class="font-semibold text-slate-900"><?= e($count) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

        </div>

        <!-- Recent Projects Table Card -->
        <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
            
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold text-slate-900 font-heading">Recent Projects</h3>
                <div class="flex items-center gap-2 font-inter">
                    <button class="bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium inline-flex items-center gap-1.5 shadow-xs cursor-pointer">
                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/></svg>
                        Filter
                    </button>
                    <button class="bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium shadow-xs cursor-pointer">
                        View All
                    </button>
                </div>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[750px]">
                    <thead>
                        <tr class="bg-[#F7F4EE] text-slate-500 font-semibold uppercase tracking-wider text-[10px] border-b border-[#EAE5D9]">
                            <th scope="col" class="py-3 px-4 rounded-tl-lg whitespace-nowrap">CHURCH / LOCATION</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">STATUS</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">ARCHITECT STYLE</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">TIMELINE</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">PROGRESS</th>
                            <th scope="col" class="py-3 px-4 text-right rounded-tr-lg whitespace-nowrap">BUDGET</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <?php foreach ($recent_projects as $p): ?>
                            <tr class="hover:bg-slate-50/70 transition-colors">
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="font-semibold text-slate-900 font-heading text-xs"><?= e($p['church']) ?></div>
                                    <div class="text-[11px] text-slate-400"><?= e($p['location']) ?></div>
                                </td>
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <?php if ($p['status'] === 'Completed'): ?>
                                        <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                            Completed
                                        </span>
                                    <?php elseif ($p['status'] === 'In Progress'): ?>
                                        <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                            In Progress
                                        </span>
                                    <?php else: ?>
                                        <span class="bg-[#EFF6FF] text-[#1E40AF] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                                            Planned
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                    <?= e($p['style']) ?>
                                </td>
                                <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                    <div class="flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        <span><?= e($p['timeline']) ?></span>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                    <?= e($p['progress']) ?>
                                </td>
                                <td class="py-3.5 px-4 text-right font-bold text-slate-900 font-heading whitespace-nowrap">
                                    <?= e($p['budget']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Bottom Actions Row -->
        <div class="flex items-center gap-3 pt-2 font-inter">
            <button class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold py-2.5 px-4 rounded-lg inline-flex items-center gap-2 shadow-xs transition-colors cursor-pointer">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                Download Report
            </button>

            <button class="bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 text-xs font-semibold py-2.5 px-4 rounded-lg inline-flex items-center gap-2 shadow-xs transition-colors cursor-pointer">
                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
                Export Excel
            </button>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
