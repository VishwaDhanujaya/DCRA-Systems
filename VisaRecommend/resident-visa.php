<?php
/**
 * Resident Visa Recommendations Page
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */

$page_title = "Resident Visa Recommendations";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Resident Visa Applications Dataset
$applications = [
    [
        'id' => 'VLS-2631',
        'name' => 'Sr. Mary Colette',
        'church' => "St. Mary's Cathedral • Kandy Diocese",
        'passport' => 'TK8374920',
        'country' => '🇮🇹 Italy',
        'stage' => 'Department Review',
        'stage_step' => 'Step 2/5',
        'stage_badge' => 'bg-slate-100 text-slate-700 border-slate-200',
        'status' => 'In Progress',
        'status_badge' => 'bg-indigo-50 text-indigo-700 border-indigo-200',
        'priority' => 'Normal',
        'date' => '08 Mar 2026',
        'elapsed' => '10d elapsed'
    ],
    [
        'id' => 'VLS-2626',
        'name' => 'Fr. Joseph Perera',
        'church' => "St. Anne's Shrine • Thalawila",
        'passport' => 'MN7261548',
        'country' => '🇪🇸 Spain',
        'stage' => 'Buddhasasana',
        'stage_step' => 'Step 2/5',
        'stage_badge' => 'bg-sky-50 text-sky-700 border-sky-200',
        'status' => 'Pending',
        'status_badge' => 'bg-sky-50 text-sky-700 border-sky-200',
        'priority' => 'High Priority',
        'date' => '12 Mar 2026',
        'elapsed' => '14d elapsed'
    ],
    [
        'id' => 'VLS-2621',
        'name' => 'Sr. Maria Goretti',
        'church' => "Good Shepherd Convent • Colombo",
        'passport' => 'PO9876543',
        'country' => '🇫🇷 France',
        'stage' => 'MOD Security',
        'stage_step' => 'Step 3/5',
        'stage_badge' => 'bg-indigo-50 text-indigo-700 border-indigo-200',
        'status' => 'Under Review',
        'status_badge' => 'bg-purple-50 text-purple-700 border-purple-200',
        'priority' => 'Normal',
        'date' => '05 Mar 2026',
        'elapsed' => '21d elapsed'
    ]
];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Visa Types / Resident Visa</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Resident Visa Recommendations</h2>
            </div>
            <div class="flex items-center gap-2.5 self-start sm:self-auto">
                <button type="button" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-3.5 py-2.5 rounded-lg shadow-2xs flex items-center justify-center gap-1.5 transition-all min-h-[40px] whitespace-nowrap cursor-pointer">
                    <svg class="w-4 h-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export
                </button>
                <button type="button" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 transition-all min-h-[40px] whitespace-nowrap cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    New Resident Visa Request
                </button>
            </div>
        </div>

        <!-- 5 Summary Metric Cards Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Total Resident Visas</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">489</h3>
                </div>
            </div>

            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Department Clearance</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">18</h3>
                </div>
            </div>

            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Buddhasasana Stage</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">32</h3>
                </div>
            </div>

            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">MOD Security</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">15</h3>
                </div>
            </div>

            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Letters Issued</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">424</h3>
                </div>
            </div>

        </div>

        <!-- Filter Toolbar Row -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 bg-white p-3.5 rounded-xl border border-slate-200/80 shadow-2xs">
            <div class="relative flex-1 max-w-xl">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search applicant name, passport, or Ref ID…" class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300">
            </div>

            <div class="flex items-center flex-wrap gap-2.5">
                <div class="relative">
                    <select class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option>All stages ▾</option>
                        <option>Department Review</option>
                        <option>Buddhasasana</option>
                        <option>MOD Security</option>
                        <option>Final Review</option>
                    </select>
                </div>

                <div class="relative">
                    <select class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option>All statuses ▾</option>
                        <option>Pending</option>
                        <option>In Progress</option>
                        <option>Approved</option>
                    </select>
                </div>

                <button type="button" class="bg-white border border-rose-200 hover:bg-rose-50 text-rose-600 text-xs font-semibold px-3.5 py-2 rounded-lg flex items-center gap-1 cursor-pointer transition-all">
                    Reset Filter <span class="text-rose-400 text-[10px]">✕</span>
                </button>
            </div>
        </div>

        <!-- Data Table Container -->
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="font-bold text-slate-900 font-heading text-lg">Resident Visa Applications</h3>
                <span class="text-xs text-slate-500 font-inter">Showing <strong class="font-semibold text-slate-800">3</strong> active resident visa records</span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#FAF7F2] border-b border-slate-200/60 text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider">
                            <th class="py-3.5 px-5 font-bold">REF CODE</th>
                            <th class="py-3.5 px-5 font-bold">APPLICANT & DIOCESE</th>
                            <th class="py-3.5 px-5 font-bold">PASSPORT / COUNTRY</th>
                            <th class="py-3.5 px-5 font-bold">STAGE</th>
                            <th class="py-3.5 px-5 font-bold">STATUS</th>
                            <th class="py-3.5 px-5 font-bold">SUBMITTED</th>
                            <th class="py-3.5 px-5 font-bold text-right">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-xs font-inter">
                        <?php foreach ($applications as $app): ?>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-4 px-5 font-mono font-bold text-slate-900 align-top whitespace-nowrap">
                                <?= e($app['id']) ?>
                            </td>

                            <td class="py-4 px-5 align-top">
                                <h4 class="font-bold text-slate-900 text-xs font-heading whitespace-nowrap"><?= e($app['name']) ?></h4>
                                <p class="text-[11px] text-slate-400 whitespace-nowrap mt-0.5"><?= e($app['church']) ?></p>
                            </td>

                            <td class="py-4 px-5 align-top whitespace-nowrap">
                                <p class="text-[11px] text-slate-800 font-medium font-mono"><?= e($app['passport']) ?></p>
                                <p class="text-[11px] text-slate-500 mt-0.5"><?= e($app['country']) ?></p>
                            </td>

                            <td class="py-4 px-5 align-top whitespace-nowrap">
                                <span class="inline-block px-2.5 py-0.5 rounded-md text-[10px] font-semibold border <?= $app['stage_badge'] ?>">
                                    <?= e($app['stage']) ?>
                                </span>
                                <span class="block text-[10px] text-slate-400 mt-0.5"><?= e($app['stage_step']) ?></span>
                            </td>

                            <td class="py-4 px-5 align-top whitespace-nowrap">
                                <span class="inline-block px-2.5 py-0.5 rounded-md text-[10px] font-semibold border <?= $app['status_badge'] ?>">
                                    <?= e($app['status']) ?>
                                </span>
                            </td>

                            <td class="py-4 px-5 align-top whitespace-nowrap">
                                <span class="font-semibold text-slate-700 block text-xs"><?= e($app['date']) ?></span>
                                <span class="text-[11px] text-slate-400 block mt-0.5"><?= e($app['elapsed']) ?></span>
                            </td>

                            <td class="py-4 px-5 align-top text-right whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="Review Application" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors cursor-pointer">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
                                    <button type="button" title="Generate Recommendation Letter" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors cursor-pointer">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
