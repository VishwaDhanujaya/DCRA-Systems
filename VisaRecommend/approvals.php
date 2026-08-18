<?php
/**
 * Approvals Management Page - Exact Visual & Layout Recreation
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */

$page_title = "Approvals";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Approval Applications Dataset
$applications = [
    [
        'id' => 'VLS-2628',
        'passport' => 'TK8374920',
        'name' => 'Fr. Anthony Silva',
        'initials' => 'AS',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Entry Visa',
        'visa_badge_class' => 'bg-sky-50 text-sky-700 border-sky-100',
        'purpose' => 'Religious Study',
        'elapsed' => '12d elapsed',
        'elapsed_badge_class' => 'bg-rose-50 text-rose-600 border-rose-100',
        'stage' => 'Final Review',
        'stage_key' => 'final-review',
        'step_current' => 4,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '18 Mar 2026',
        'subdate' => 'Submitted 12 days ago',
        'priority' => 'Overdue',
        'priority_key' => 'overdue',
        'priority_class' => 'text-rose-600',
        'dot_class' => 'bg-rose-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2628',
        'passport' => 'TK8374920',
        'name' => 'Sr. Mary Colette',
        'initials' => 'MC',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Extension',
        'visa_badge_class' => 'bg-emerald-50 text-emerald-700 border-emerald-100',
        'purpose' => 'Religious Study',
        'elapsed' => '10d elapsed',
        'elapsed_badge_class' => 'bg-emerald-50 text-emerald-600 border-emerald-100',
        'stage' => 'Final Review',
        'stage_key' => 'final-review',
        'step_current' => 2,
        'step_total' => 5,
        'bar_color' => 'bg-amber-500',
        'date' => '18 Mar 2026',
        'subdate' => 'Submitted 12 days ago',
        'priority' => 'On Track',
        'priority_key' => 'ontrack',
        'priority_class' => 'text-emerald-600',
        'dot_class' => 'bg-emerald-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2628',
        'passport' => 'TK8374920',
        'name' => 'Fr. James Perera',
        'initials' => 'JP',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Resident Visa',
        'visa_badge_class' => 'bg-amber-50 text-amber-700 border-amber-100',
        'purpose' => 'Religious Study',
        'elapsed' => '12d elapsed',
        'elapsed_badge_class' => 'bg-rose-50 text-rose-600 border-rose-100',
        'stage' => 'Final Review',
        'stage_key' => 'final-review',
        'step_current' => 3,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '18 Mar 2026',
        'subdate' => 'Submitted 12 days ago',
        'priority' => 'At Risk',
        'priority_key' => 'atrisk',
        'priority_class' => 'text-amber-600',
        'dot_class' => 'bg-amber-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2628',
        'passport' => 'TK8374920',
        'name' => 'Fr. Anthony Silva',
        'initials' => 'AS',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Entry Visa',
        'visa_badge_class' => 'bg-sky-50 text-sky-700 border-sky-100',
        'purpose' => 'Religious Study',
        'elapsed' => '12d elapsed',
        'elapsed_badge_class' => 'bg-rose-50 text-rose-600 border-rose-100',
        'stage' => 'Final Review',
        'stage_key' => 'final-review',
        'step_current' => 4,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '18 Mar 2026',
        'subdate' => 'Submitted 12 days ago',
        'priority' => 'Overdue',
        'priority_key' => 'overdue',
        'priority_class' => 'text-rose-600',
        'dot_class' => 'bg-rose-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2628',
        'passport' => 'TK8374920',
        'name' => 'Sr. Mary Colette',
        'initials' => 'MC',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Extension',
        'visa_badge_class' => 'bg-emerald-50 text-emerald-700 border-emerald-100',
        'purpose' => 'Religious Study',
        'elapsed' => '10d elapsed',
        'elapsed_badge_class' => 'bg-emerald-50 text-emerald-600 border-emerald-100',
        'stage' => 'Final Review',
        'stage_key' => 'final-review',
        'step_current' => 2,
        'step_total' => 5,
        'bar_color' => 'bg-amber-500',
        'date' => '18 Mar 2026',
        'subdate' => 'Submitted 12 days ago',
        'priority' => 'On Track',
        'priority_key' => 'ontrack',
        'priority_class' => 'text-emerald-600',
        'dot_class' => 'bg-emerald-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2628',
        'passport' => 'TK8374920',
        'name' => 'Fr. James Perera',
        'initials' => 'JP',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Resident Visa',
        'visa_badge_class' => 'bg-amber-50 text-amber-700 border-amber-100',
        'purpose' => 'Religious Study',
        'elapsed' => '12d elapsed',
        'elapsed_badge_class' => 'bg-rose-50 text-rose-600 border-rose-100',
        'stage' => 'Final Review',
        'stage_key' => 'final-review',
        'step_current' => 3,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '18 Mar 2026',
        'subdate' => 'Submitted 12 days ago',
        'priority' => 'At Risk',
        'priority_key' => 'atrisk',
        'priority_class' => 'text-amber-600',
        'dot_class' => 'bg-amber-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2629',
        'passport' => 'TK8374921',
        'name' => 'Rev. Thomas Jayasinghe',
        'initials' => 'TJ',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Entry Visa',
        'visa_badge_class' => 'bg-sky-50 text-sky-700 border-sky-100',
        'purpose' => 'Missionary Work',
        'elapsed' => '14d elapsed',
        'elapsed_badge_class' => 'bg-rose-50 text-rose-600 border-rose-100',
        'stage' => 'Department',
        'stage_key' => 'department',
        'step_current' => 1,
        'step_total' => 5,
        'bar_color' => 'bg-amber-500',
        'date' => '19 Mar 2026',
        'subdate' => 'Submitted 14 days ago',
        'priority' => 'Overdue',
        'priority_key' => 'overdue',
        'priority_class' => 'text-rose-600',
        'dot_class' => 'bg-rose-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2630',
        'passport' => 'TK8374922',
        'name' => 'Sr. Anna Fernando',
        'initials' => 'AF',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Extension',
        'visa_badge_class' => 'bg-emerald-50 text-emerald-700 border-emerald-100',
        'purpose' => 'Pastoral Ministry',
        'elapsed' => '5d elapsed',
        'elapsed_badge_class' => 'bg-emerald-50 text-emerald-600 border-emerald-100',
        'stage' => 'Buddhasasana',
        'stage_key' => 'buddhasasana',
        'step_current' => 3,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '21 Mar 2026',
        'subdate' => 'Submitted 5 days ago',
        'priority' => 'On Track',
        'priority_key' => 'ontrack',
        'priority_class' => 'text-emerald-600',
        'dot_class' => 'bg-emerald-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2631',
        'passport' => 'TK8374923',
        'name' => 'Fr. Joseph De Silva',
        'initials' => 'JS',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Resident Visa',
        'visa_badge_class' => 'bg-amber-50 text-amber-700 border-amber-100',
        'purpose' => 'Religious Education',
        'elapsed' => '9d elapsed',
        'elapsed_badge_class' => 'bg-amber-50 text-amber-700 border-amber-100',
        'stage' => 'MOD',
        'stage_key' => 'mod',
        'step_current' => 4,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '20 Mar 2026',
        'subdate' => 'Submitted 9 days ago',
        'priority' => 'At Risk',
        'priority_key' => 'atrisk',
        'priority_class' => 'text-amber-600',
        'dot_class' => 'bg-amber-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2632',
        'passport' => 'TK8374924',
        'name' => 'Bro. Peter Mendis',
        'initials' => 'PM',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Entry Visa',
        'visa_badge_class' => 'bg-sky-50 text-sky-700 border-sky-100',
        'purpose' => 'Monastic Retreat',
        'elapsed' => '3d elapsed',
        'elapsed_badge_class' => 'bg-emerald-50 text-emerald-600 border-emerald-100',
        'stage' => 'Department',
        'stage_key' => 'department',
        'step_current' => 1,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '23 Mar 2026',
        'subdate' => 'Submitted 3 days ago',
        'priority' => 'On Track',
        'priority_key' => 'ontrack',
        'priority_class' => 'text-emerald-600',
        'dot_class' => 'bg-emerald-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2633',
        'passport' => 'TK8374925',
        'name' => 'Sr. Teresa Wickramasinghe',
        'initials' => 'TW',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Resident Visa',
        'visa_badge_class' => 'bg-amber-50 text-amber-700 border-amber-100',
        'purpose' => 'Religious Service',
        'elapsed' => '15d elapsed',
        'elapsed_badge_class' => 'bg-rose-50 text-rose-600 border-rose-100',
        'stage' => 'MOD',
        'stage_key' => 'mod',
        'step_current' => 3,
        'step_total' => 5,
        'bar_color' => 'bg-amber-500',
        'date' => '17 Mar 2026',
        'subdate' => 'Submitted 15 days ago',
        'priority' => 'Overdue',
        'priority_key' => 'overdue',
        'priority_class' => 'text-rose-600',
        'dot_class' => 'bg-rose-500',
        'status' => 'Pending'
    ],
    [
        'id' => 'VLS-2634',
        'passport' => 'TK8374926',
        'name' => 'Fr. Mark Nonis',
        'initials' => 'MN',
        'nationality' => 'Sri Lankan',
        'visa_type' => 'Extension',
        'visa_badge_class' => 'bg-emerald-50 text-emerald-700 border-emerald-100',
        'purpose' => 'Diocesan Administration',
        'elapsed' => '8d elapsed',
        'elapsed_badge_class' => 'bg-amber-50 text-amber-700 border-amber-100',
        'stage' => 'Final Approval',
        'stage_key' => 'final-approval',
        'step_current' => 5,
        'step_total' => 5,
        'bar_color' => 'bg-teal-600',
        'date' => '20 Mar 2026',
        'subdate' => 'Submitted 8 days ago',
        'priority' => 'At Risk',
        'priority_key' => 'atrisk',
        'priority_class' => 'text-amber-600',
        'dot_class' => 'bg-amber-500',
        'status' => 'Pending'
    ]
];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Approvals</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Approvals</h2>
            </div>
            <div class="flex items-center gap-2.5 self-start sm:self-auto">
                <button type="button" id="export-btn" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-3.5 py-2.5 rounded-lg shadow-2xs flex items-center justify-center gap-1.5 transition-all min-h-[40px] whitespace-nowrap cursor-pointer">
                    <svg class="w-4 h-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export
                </button>
            </div>
        </div>

        <!-- 5 Summary Metric Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            
            <!-- Card 1: All Pending -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">All Pending</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">12</h3>
                </div>
            </div>

            <!-- Card 2: Department -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Department</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">03</h3>
                </div>
            </div>

            <!-- Card 3: Buddhasasana -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Buddhasasana</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">04</h3>
                </div>
            </div>

            <!-- Card 4: MOD -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">MOD</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">03</h3>
                </div>
            </div>

            <!-- Card 5: Final Approval -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Final Approval</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">02</h3>
                </div>
            </div>

        </div>

        <!-- Filter Toolbar Row -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 bg-white p-3.5 rounded-xl border border-slate-200/80 shadow-2xs">
            
            <!-- Left Search Input Box -->
            <div class="relative flex-1 max-w-xl">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" id="approval-search" placeholder="Search name, ID, or passport…" class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all">
            </div>

            <!-- Right Select Filters & Reset Button -->
            <div class="flex items-center flex-wrap gap-2.5">
                
                <!-- Filter 1: Priority -->
                <div class="relative">
                    <select id="filter-priority" class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option value="all">All priority</option>
                        <option value="overdue">Overdue</option>
                        <option value="ontrack">On Track</option>
                        <option value="atrisk">At Risk</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">
                        ▾
                    </div>
                </div>

                <!-- Filter 2: Stages -->
                <div class="relative">
                    <select id="filter-stage" class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option value="all">All stages</option>
                        <option value="department">Department</option>
                        <option value="buddhasasana">Buddhasasana</option>
                        <option value="mod">MOD</option>
                        <option value="final-review">Final Review</option>
                        <option value="final-approval">Final Approval</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">
                        ▾
                    </div>
                </div>

                <!-- Filter 3: Statuses -->
                <div class="relative">
                    <select id="filter-status" class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option value="all">All statuses</option>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">
                        ▾
                    </div>
                </div>

                <!-- Reset Filter Button -->
                <button type="button" id="reset-filter-btn" class="bg-white border border-rose-200 hover:bg-rose-50 text-rose-600 text-xs font-semibold px-3 py-2 rounded-lg flex items-center gap-1 cursor-pointer transition-all">
                    Reset Filter
                    <span class="text-rose-400 text-[10px]">✕</span>
                </button>

            </div>
        </div>

        <!-- Sub-header Showing Applications Count -->
        <div class="flex items-center justify-end">
            <span id="application-count" class="text-xs font-medium text-slate-400 font-inter">Showing 12 applications</span>
        </div>

        <!-- Approvals Grid (3 Columns) -->
        <div id="approvals-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6">
            
            <?php foreach ($applications as $index => $app): ?>
            <!-- Approval Card -->
            <div class="approval-card bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-200 flex flex-col justify-between space-y-4"
                 data-name="<?= e(strtolower($app['name'])) ?>"
                 data-passport="<?= e(strtolower($app['passport'])) ?>"
                 data-id="<?= e(strtolower($app['id'])) ?>"
                 data-priority="<?= e($app['priority_key']) ?>"
                 data-stage="<?= e($app['stage_key']) ?>"
                 data-status="<?= e($app['status']) ?>"
                 data-visatype="<?= e($app['visa_type']) ?>">
                
                <!-- Card Header: Avatar, Name, Nationality, Ref Code, Visa Type Pill -->
                <div class="flex items-start justify-between gap-3">
                    <div class="flex items-center space-x-3 min-w-0">
                        <div class="w-10 h-10 rounded-xl bg-secondary text-white font-bold text-xs font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                            <?= e($app['initials']) ?>
                        </div>
                        <div class="min-w-0">
                            <h4 class="font-bold text-slate-900 text-sm font-heading leading-snug truncate"><?= e($app['name']) ?></h4>
                            <p class="text-slate-400 text-xs font-inter leading-tight mt-0.5"><?= e($app['nationality']) ?></p>
                            <p class="text-slate-400 text-[11px] font-inter font-medium leading-tight"><?= e($app['id']) ?></p>
                        </div>
                    </div>
                    
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold border flex-shrink-0 whitespace-nowrap <?= $app['visa_badge_class'] ?>">
                        <?= e($app['visa_type']) ?>
                    </span>
                </div>

                <!-- Mid Tags Row: Passport Tag, Elapsed Tag, Purpose Tag -->
                <div class="flex items-center flex-wrap gap-2 pt-1">
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-mono font-medium bg-slate-100 text-slate-600 whitespace-nowrap">
                        <?= e($app['passport']) ?>
                    </span>
                    
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-medium border whitespace-nowrap <?= $app['elapsed_badge_class'] ?>">
                        <?= e($app['elapsed']) ?>
                    </span>
                    
                    <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-medium bg-purple-50 text-purple-700 border border-purple-100 whitespace-nowrap">
                        <?= e($app['purpose']) ?>
                    </span>
                </div>

                <!-- Stepper Section: Stage Label & 5-Step Segmented Bar -->
                <div class="space-y-1.5 pt-1">
                    <div class="flex items-center justify-between text-xs">
                        <span class="font-bold text-slate-900 font-heading"><?= e($app['stage']) ?></span>
                        <span class="text-slate-400 font-medium text-[11px] font-inter">Step <?= $app['step_current'] ?>/<?= $app['step_total'] ?></span>
                    </div>
                    
                    <!-- 5 Segment Horizontal Bar -->
                    <div class="grid grid-cols-5 gap-1.5 pt-0.5">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <div class="h-1.5 rounded-full transition-all <?= ($i <= $app['step_current']) ? $app['bar_color'] : 'bg-slate-200' ?>"></div>
                        <?php endfor; ?>
                    </div>
                </div>

                <!-- Dates & Priority Status Row -->
                <div class="flex items-center justify-between pt-2 border-t border-slate-100 text-xs">
                    <div>
                        <span class="font-semibold text-slate-700 block text-xs font-inter"><?= e($app['date']) ?></span>
                        <span class="text-slate-400 text-[11px] font-inter block mt-0.5"><?= e($app['subdate']) ?></span>
                    </div>

                    <div class="flex items-center gap-1.5 font-semibold text-xs <?= $app['priority_class'] ?>">
                        <span class="w-2 h-2 rounded-full <?= $app['dot_class'] ?>"></span>
                        <?= e($app['priority']) ?>
                    </div>
                </div>

                <!-- Action Buttons: Review, Approve, Reject -->
                <div class="grid grid-cols-3 gap-2.5 pt-1">
                    <button type="button" 
                            class="review-btn bg-white border border-slate-200 text-slate-700 font-semibold text-xs rounded-xl py-2 px-3 hover:bg-slate-50 hover:border-slate-300 text-center transition-all shadow-2xs cursor-pointer flex items-center justify-center"
                            data-id="<?= e($app['id']) ?>"
                            data-name="<?= e($app['name']) ?>"
                            data-visatype="<?= e($app['visa_type']) ?>">
                        Review
                    </button>
                    
                    <button type="button" 
                            class="approve-btn bg-white border border-emerald-500 text-emerald-700 font-semibold text-xs rounded-xl py-2 px-3 hover:bg-emerald-50 hover:border-emerald-600 text-center transition-all shadow-2xs cursor-pointer flex items-center justify-center"
                            data-id="<?= e($app['id']) ?>"
                            data-name="<?= e($app['name']) ?>">
                        Approve
                    </button>
                    
                    <button type="button" 
                            class="reject-btn bg-white border border-rose-400 text-rose-600 font-semibold text-xs rounded-xl py-2 px-3 hover:bg-rose-50 hover:border-rose-500 text-center transition-all shadow-2xs cursor-pointer flex items-center justify-center"
                            data-id="<?= e($app['id']) ?>"
                            data-name="<?= e($app['name']) ?>">
                        Reject
                    </button>
                </div>

            </div>
            <?php endforeach; ?>

        </div>

    </div>
</main>

<!-- Approval Action Toast Modal Notification -->
<div id="action-modal" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 items-center justify-center p-4 hidden transition-opacity duration-200">
    <div class="bg-white rounded-2xl max-w-md w-full p-6 shadow-2xl space-y-4 text-center transform transition-transform">
        <div id="action-modal-icon" class="w-12 h-12 rounded-full mx-auto flex items-center justify-center">
            <!-- Icon rendered via JS -->
        </div>
        <h3 id="action-modal-title" class="text-lg font-bold text-slate-900 font-heading">Confirm Action</h3>
        <p id="action-modal-desc" class="text-xs text-slate-500 font-inter">Are you sure you want to proceed with this application action?</p>
        
        <div id="action-modal-input-container" class="hidden text-left">
            <label class="block text-xs font-semibold text-slate-700 mb-1 font-inter">Rejection Reason / Notes:</label>
            <textarea id="action-modal-notes" rows="3" placeholder="Enter details..." class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter focus:bg-white focus:outline-none focus:border-slate-300"></textarea>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-2">
            <button type="button" id="action-modal-cancel" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-600 text-xs font-semibold rounded-lg font-heading transition-colors cursor-pointer">
                Cancel
            </button>
            <button type="button" id="action-modal-confirm" class="px-4 py-2 text-white text-xs font-semibold rounded-lg font-heading transition-colors cursor-pointer">
                Confirm
            </button>
        </div>
    </div>
</div>

<!-- Inline JavaScript for Filtering & Interactive Actions -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('approval-search');
    const prioritySelect = document.getElementById('filter-priority');
    const stageSelect = document.getElementById('filter-stage');
    const statusSelect = document.getElementById('filter-status');
    const resetBtn = document.getElementById('reset-filter-btn');
    const cards = document.querySelectorAll('.approval-card');
    const countDisplay = document.getElementById('application-count');
    const exportBtn = document.getElementById('export-btn');

    // Live Filtering Logic
    const filterCards = () => {
        const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
        const priorityVal = prioritySelect ? prioritySelect.value : 'all';
        const stageVal = stageSelect ? stageSelect.value : 'all';
        const statusVal = statusSelect ? statusSelect.value : 'all';

        let visibleCount = 0;

        cards.forEach(card => {
            const name = card.getAttribute('data-name') || '';
            const passport = card.getAttribute('data-passport') || '';
            const id = card.getAttribute('data-id') || '';
            const priority = card.getAttribute('data-priority') || '';
            const stage = card.getAttribute('data-stage') || '';
            const status = card.getAttribute('data-status') || '';

            const matchesSearch = !query || name.includes(query) || passport.includes(query) || id.includes(query);
            const matchesPriority = (priorityVal === 'all') || (priority === priorityVal);
            const matchesStage = (stageVal === 'all') || (stage === stageVal);
            const matchesStatus = (statusVal === 'all') || (status === statusVal);

            if (matchesSearch && matchesPriority && matchesStage && matchesStatus) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        if (countDisplay) {
            countDisplay.textContent = `Showing ${visibleCount} application${visibleCount !== 1 ? 's' : ''}`;
        }
    };

    if (searchInput) searchInput.addEventListener('input', filterCards);
    if (prioritySelect) prioritySelect.addEventListener('change', filterCards);
    if (stageSelect) stageSelect.addEventListener('change', filterCards);
    if (statusSelect) statusSelect.addEventListener('change', filterCards);

    if (resetBtn) {
        resetBtn.addEventListener('click', () => {
            if (searchInput) searchInput.value = '';
            if (prioritySelect) prioritySelect.value = 'all';
            if (stageSelect) stageSelect.value = 'all';
            if (statusSelect) statusSelect.value = 'all';
            filterCards();
        });
    }

    // Review Button Handler - Trigger Drawer
    document.querySelectorAll('.review-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const id = btn.getAttribute('data-id');
            const name = btn.getAttribute('data-name');
            const visatype = btn.getAttribute('data-visatype');
            
            if (typeof openApplicationDrawer === 'function') {
                openApplicationDrawer({
                    id: id,
                    name: name,
                    visatype: visatype,
                    status: 'Final Review'
                });
            } else {
                window.location.href = `<?= BASE_URL ?>application-details?id=${encodeURIComponent(id)}`;
            }
        });
    });

    // Action Modal Logic (Approve / Reject)
    const modal = document.getElementById('action-modal');
    const modalIcon = document.getElementById('action-modal-icon');
    const modalTitle = document.getElementById('action-modal-title');
    const modalDesc = document.getElementById('action-modal-desc');
    const modalInputContainer = document.getElementById('action-modal-input-container');
    const modalConfirmBtn = document.getElementById('action-modal-confirm');
    const modalCancelBtn = document.getElementById('action-modal-cancel');
    let targetCard = null;

    const closeModal = () => {
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    };

    if (modalCancelBtn) modalCancelBtn.addEventListener('click', closeModal);

    // Approve Button Handlers
    document.querySelectorAll('.approve-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const name = btn.getAttribute('data-name');
            const id = btn.getAttribute('data-id');
            targetCard = btn.closest('.approval-card');

            modalIcon.className = 'w-12 h-12 rounded-full mx-auto flex items-center justify-center bg-emerald-100 text-emerald-600';
            modalIcon.innerHTML = `<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>`;
            modalTitle.textContent = 'Approve Application';
            modalDesc.textContent = `Are you sure you want to approve application ${id} for ${name}?`;
            modalInputContainer.classList.add('hidden');
            
            modalConfirmBtn.className = 'px-4 py-2 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold rounded-lg font-heading transition-colors cursor-pointer';
            modalConfirmBtn.onclick = () => {
                closeModal();
                if (targetCard) {
                    const statusBadge = targetCard.querySelector('.approve-btn');
                    if (statusBadge) {
                        statusBadge.textContent = 'Approved ✓';
                        statusBadge.className = 'bg-emerald-600 text-white font-semibold text-xs rounded-xl py-2 px-3 text-center col-span-2 cursor-default';
                    }
                    const rejectBtn = targetCard.querySelector('.reject-btn');
                    if (rejectBtn) rejectBtn.remove();
                }
            };

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });

    // Reject Button Handlers
    document.querySelectorAll('.reject-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            const name = btn.getAttribute('data-name');
            const id = btn.getAttribute('data-id');
            targetCard = btn.closest('.approval-card');

            modalIcon.className = 'w-12 h-12 rounded-full mx-auto flex items-center justify-center bg-rose-100 text-rose-600';
            modalIcon.innerHTML = `<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>`;
            modalTitle.textContent = 'Reject Application';
            modalDesc.textContent = `Are you sure you want to reject application ${id} for ${name}?`;
            modalInputContainer.classList.remove('hidden');
            
            modalConfirmBtn.className = 'px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white text-xs font-semibold rounded-lg font-heading transition-colors cursor-pointer';
            modalConfirmBtn.onclick = () => {
                closeModal();
                if (targetCard) {
                    const rejectBtn = targetCard.querySelector('.reject-btn');
                    if (rejectBtn) {
                        rejectBtn.textContent = 'Rejected ✕';
                        rejectBtn.className = 'bg-rose-600 text-white font-semibold text-xs rounded-xl py-2 px-3 text-center col-span-2 cursor-default';
                    }
                    const approveBtn = targetCard.querySelector('.approve-btn');
                    if (approveBtn) approveBtn.remove();
                }
            };

            modal.classList.remove('hidden');
            modal.classList.add('flex');
        });
    });

    // Export Button Handler
    if (exportBtn) {
        exportBtn.addEventListener('click', () => {
            alert('Exporting approval records to CSV...');
        });
    }
});
</script>

<?php
require_once __DIR__ . '/includes/application-modal.php';
require_once __DIR__ . '/includes/footer.php';
?>
