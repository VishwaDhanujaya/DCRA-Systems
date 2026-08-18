<?php
/**
 * Notification Logs & Dispatcher Page - Exact Visual & Layout Recreation
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */

$page_title = "Notification Logs";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Sample Notification Logs Dataset
$logs = [
    [
        'id' => 'VLS-2634',
        'name' => 'Fr. Anthony Silva',
        'church' => "St. Anthony's Church • Colombo Diocese",
        'visa_type' => 'Entry Visa',
        'visa_badge' => 'bg-sky-50 text-sky-700 border-sky-100',
        'sms' => '+94 71 234 5678',
        'email' => 'anthony@gmail.com',
        'sms_status' => 'Sent',
        'sms_status_class' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80',
        'email_status' => 'Sent',
        'email_status_class' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80',
        'message' => 'Your application VLS-2634 has advanced to the next approval stage. We will notify you of further updates.',
        'date' => '14 Mar 2026',
        'time' => '09:41 AM'
    ],
    [
        'id' => 'VLS-2631',
        'name' => 'Sr. Mary Colette',
        'church' => "St. Mary's Cathedral • Kandy Diocese",
        'visa_type' => 'Resident Visa',
        'visa_badge' => 'bg-amber-50 text-amber-700 border-amber-100',
        'sms' => '+94 71 234 5678',
        'email' => 'anthony@gmail.com',
        'sms_status' => 'Sent',
        'sms_status_class' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80',
        'email_status' => 'Sent',
        'email_status_class' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80',
        'message' => 'Your application VLS-2634 has advanced to the next approval stage. We will notify you of further updates.',
        'date' => '08 Mar 2026',
        'time' => '08:00 AM'
    ],
    [
        'id' => 'VLS-2629',
        'name' => 'Fr. James Perera',
        'church' => 'Holy Trinity Church • Galle Diocese',
        'visa_type' => 'Visa Extension',
        'visa_badge' => 'bg-emerald-50 text-emerald-700 border-emerald-100',
        'sms' => '+94 71 234 5678',
        'email' => 'anthony@gmail.com',
        'sms_status' => 'Sent',
        'sms_status_class' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80',
        'email_status' => 'Failed',
        'email_status_class' => 'bg-rose-50 text-rose-700 border-rose-200/80',
        'message' => 'Your application VLS-2634 has advanced to the next approval stage. We will notify you of further updates.',
        'date' => '04 Mar 2026',
        'time' => '08:30 AM'
    ],
    [
        'id' => 'VLS-2628',
        'name' => 'Sr. Agnes Fernando',
        'church' => 'Sacred Heart Church • Jaffna Diocese',
        'visa_type' => 'Visa Extension',
        'visa_badge' => 'bg-emerald-50 text-emerald-700 border-emerald-100',
        'sms' => '+94 71 234 5678',
        'email' => 'anthony@gmail.com',
        'sms_status' => 'Sent',
        'sms_status_class' => 'bg-emerald-50 text-emerald-700 border-emerald-200/80',
        'email_status' => 'Failed',
        'email_status_class' => 'bg-rose-50 text-rose-700 border-rose-200/80',
        'message' => 'Your application VLS-2634 has advanced to the next approval stage. We will notify you of further updates.',
        'date' => '02 Mar 2026',
        'time' => '08:30 AM'
    ]
];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Notifications</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Notification Logs</h2>
            </div>
            <div class="flex items-center gap-2.5 self-start sm:self-auto">
                <button type="button" id="export-btn" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-3.5 py-2.5 rounded-lg shadow-2xs flex items-center justify-center gap-1.5 transition-all min-h-[40px] whitespace-nowrap cursor-pointer">
                    <svg class="w-4 h-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export
                </button>
                <button type="button" id="send-notification-top-btn" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 transition-all min-h-[40px] whitespace-nowrap cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    Send Notification
                </button>
            </div>
        </div>

        <!-- 5 Summary Metric Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            
            <!-- Card 1: Total Dispatched -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Total Dispatched</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">284</h3>
                </div>
            </div>

            <!-- Card 2: SMS Sent -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">SMS Sent</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">142</h3>
                </div>
            </div>

            <!-- Card 3: Emails Sent -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Emails Sent</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">142</h3>
                </div>
            </div>

            <!-- Card 4: Delivered -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Delivered</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">271</h3>
                </div>
            </div>

            <!-- Card 5: Failed -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Failed</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">13</h3>
                </div>
            </div>

        </div>

        <!-- Send Applicant Notifications Banner Box -->
        <div class="bg-[#F0F4F8] border border-slate-200/80 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-2xs">
            <div>
                <h3 class="font-bold text-slate-900 font-heading text-base sm:text-lg">Send Applicant Notifications</h3>
                <p class="text-slate-500 text-xs font-inter mt-1">Dispatch SMS and email updates to applicants based on stage changes or manual triggers</p>
            </div>
            
            <div class="flex items-center flex-wrap gap-2.5 flex-shrink-0">
                <button type="button" class="action-trigger-btn bg-white border border-slate-200/90 hover:bg-slate-50 text-slate-700 font-semibold text-xs py-2 px-4 rounded-xl shadow-2xs transition-all cursor-pointer" data-mode="SMS">
                    Send SMS
                </button>
                <button type="button" class="action-trigger-btn bg-white border border-slate-200/90 hover:bg-slate-50 text-slate-700 font-semibold text-xs py-2 px-4 rounded-xl shadow-2xs transition-all cursor-pointer" data-mode="Email">
                    Send Email
                </button>
                <button type="button" class="action-trigger-btn bg-white border border-slate-200/90 hover:bg-slate-50 text-slate-700 font-semibold text-xs py-2 px-4 rounded-xl shadow-2xs transition-all cursor-pointer" data-mode="Bulk">
                    Bulk Notify
                </button>
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
                <input type="text" id="notification-search" placeholder="Search name, ID, or passport…" class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all">
            </div>

            <!-- Right Select Filters & Reset Button -->
            <div class="flex items-center flex-wrap gap-2.5">
                
                <!-- Filter 1: Priority -->
                <div class="relative">
                    <select id="filter-priority" class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option value="all">All priority</option>
                        <option value="high">High Priority</option>
                        <option value="medium">Medium</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">
                        ▾
                    </div>
                </div>

                <!-- Filter 2: Stages -->
                <div class="relative">
                    <select id="filter-stage" class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option value="all">All stages</option>
                        <option value="Department">Department</option>
                        <option value="Buddhasasana">Buddhasasana</option>
                        <option value="MOD">MOD</option>
                        <option value="Final Review">Final Review</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">
                        ▾
                    </div>
                </div>

                <!-- Filter 3: Statuses -->
                <div class="relative">
                    <select id="filter-status" class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-2 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option value="all">All statuses</option>
                        <option value="Sent">Sent</option>
                        <option value="Failed">Failed</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">
                        ▾
                    </div>
                </div>

                <!-- Reset Filter Button -->
                <button type="button" id="reset-filter-btn" class="bg-white border border-rose-200 hover:bg-rose-50 text-rose-600 text-xs font-semibold px-3.5 py-2 rounded-lg flex items-center gap-1 cursor-pointer transition-all">
                    Reset Filter
                    <span class="text-rose-400 text-[10px]">✕</span>
                </button>

            </div>
        </div>

        <!-- Notification Log Table Card Container -->
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden">
            
            <!-- Table Card Header Bar -->
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="font-bold text-slate-900 font-heading text-lg">Notification Log</h3>
                
                <div class="relative">
                    <select id="table-visa-type" class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option value="all">Visa Type ▾</option>
                        <option value="Entry Visa">Entry Visa</option>
                        <option value="Resident Visa">Resident Visa</option>
                        <option value="Visa Extension">Visa Extension</option>
                    </select>
                </div>
            </div>

            <!-- Responsive Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-[#FAF7F2] border-b border-slate-200/60 text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider">
                            <th class="py-3.5 px-5 font-bold">APP ID</th>
                            <th class="py-3.5 px-5 font-bold">APPLICANT</th>
                            <th class="py-3.5 px-5 font-bold">CHANNEL & RECIPIENT</th>
                            <th class="py-3.5 px-5 font-bold">DELIVERY STATUS</th>
                            <th class="py-3.5 px-5 font-bold">MESSAGE</th>
                            <th class="py-3.5 px-5 font-bold">DATE & TIME</th>
                            <th class="py-3.5 px-5 font-bold text-right">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody id="notification-tbody" class="divide-y divide-slate-100 text-xs font-inter">
                        
                        <?php foreach ($logs as $log): ?>
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            
                            <!-- Col 1: APP ID -->
                            <td class="py-4 px-5 font-mono font-bold text-slate-900 align-top whitespace-nowrap">
                                <?= e($log['id']) ?>
                            </td>

                            <!-- Col 2: APPLICANT -->
                            <td class="py-4 px-5 align-top">
                                <h4 class="font-bold text-slate-900 text-xs font-heading whitespace-nowrap"><?= e($log['name']) ?></h4>
                                <p class="text-[11px] text-slate-400 whitespace-nowrap mt-0.5"><?= e($log['church']) ?></p>
                                <span class="inline-block px-2 py-0.5 rounded-md text-[10px] font-semibold border mt-1.5 <?= $log['visa_badge'] ?>">
                                    <?= e($log['visa_type']) ?>
                                </span>
                            </td>

                            <!-- Col 3: CHANNEL & RECIPIENT -->
                            <td class="py-4 px-5 align-top whitespace-nowrap">
                                <p class="text-[11px] text-slate-800 font-medium">SMS: <?= e($log['sms']) ?></p>
                                <p class="text-[11px] text-slate-700 font-medium mt-1">Email: <?= e($log['email']) ?></p>
                            </td>

                            <!-- Col 4: DELIVERY STATUS -->
                            <td class="py-4 px-5 align-top whitespace-nowrap space-y-1">
                                <span class="inline-block px-2.5 py-0.5 rounded-md text-[10px] font-semibold border <?= $log['sms_status_class'] ?>">
                                    <?= e($log['sms_status']) ?>
                                </span>
                                <span class="block px-2.5 py-0.5 rounded-md text-[10px] font-semibold border w-fit <?= $log['email_status_class'] ?>">
                                    <?= e($log['email_status']) ?>
                                </span>
                            </td>

                            <!-- Col 5: MESSAGE -->
                            <td class="py-4 px-5 align-top max-w-xs text-[11px] text-slate-500 leading-relaxed">
                                <?= e($log['message']) ?>
                            </td>

                            <!-- Col 6: DATE & TIME -->
                            <td class="py-4 px-5 align-top whitespace-nowrap">
                                <span class="font-semibold text-slate-700 block text-xs"><?= e($log['date']) ?></span>
                                <span class="text-[11px] text-slate-400 block mt-0.5"><?= e($log['time']) ?></span>
                            </td>

                            <!-- Col 7: ACTIONS -->
                            <td class="py-4 px-5 align-top text-right whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="View Application Details" class="review-drawer-trigger p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors cursor-pointer" data-id="<?= e($log['id']) ?>" data-name="<?= e($log['name']) ?>" data-visatype="<?= e($log['visa_type']) ?>">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
                                    <button type="button" title="View Document Logs" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors cursor-pointer">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    </button>
                                    <button type="button" title="Resend Notification" class="resend-btn p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors cursor-pointer" data-id="<?= e($log['id']) ?>">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </button>
                                </div>
                            </td>

                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>

            <!-- Table Pagination Footer -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-3 p-4 border-t border-slate-100 text-xs text-slate-500">
                <span class="whitespace-nowrap">Showing <strong class="font-semibold text-slate-800">1–6</strong> of <strong class="font-semibold text-slate-800">47</strong> applications</span>
                <div class="flex items-center space-x-1">
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-400 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">‹</button>
                    <button type="button" class="w-7 h-7 rounded bg-secondary text-white font-semibold flex items-center justify-center shadow-xs cursor-pointer">1</button>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">2</button>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">3</button>
                    <span class="px-1 text-slate-400">…</span>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">8</button>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-400 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">›</button>
                </div>
            </div>

        </div>

        <!-- Bottom Grid: Quick Send Form & Donut Chart Analytics -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
            
            <!-- LEFT (8 Cols): Quick Send Form Card -->
            <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200/90 p-6 shadow-2xs space-y-4 flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-slate-900 font-heading text-lg mb-4">Quick Send</h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Application Selector -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider mb-1.5">APPLICATION</label>
                            <div class="relative">
                                <select id="quick-app-select" class="w-full appearance-none bg-slate-50 border border-slate-200 rounded-xl p-3 pr-8 text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:border-slate-300 cursor-pointer">
                                    <option value="VLS-2634">VLS-2634 - Fr. Anthony Silva</option>
                                    <option value="VLS-2631">VLS-2631 - Sr. Mary Colette</option>
                                    <option value="VLS-2629">VLS-2629 - Fr. James Perera</option>
                                    <option value="VLS-2628">VLS-2628 - Sr. Agnes Fernando</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400 text-xs">
                                    ▾
                                </div>
                            </div>
                        </div>

                        <!-- Channel Selector -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider mb-1.5">CHANNEL</label>
                            <div class="relative">
                                <select id="quick-channel-select" class="w-full appearance-none bg-slate-50 border border-slate-200 rounded-xl p-3 pr-8 text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:border-slate-300 cursor-pointer">
                                    <option value="sms">SMS Only</option>
                                    <option value="email">Email Only</option>
                                    <option value="both">SMS & Email</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-slate-400 text-xs">
                                    ▾
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Message Textarea -->
                    <div class="mt-4">
                        <label class="block text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider mb-1.5">MESSAGE</label>
                        <textarea id="quick-message-input" rows="3" placeholder="type a message" class="w-full bg-slate-50 border border-slate-200 rounded-xl p-3 text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all"></textarea>
                    </div>
                </div>

                <!-- Form Bottom Action Buttons -->
                <div class="flex items-center justify-end gap-3 pt-2">
                    <button type="button" id="quick-clear-btn" class="bg-white border border-slate-200 hover:bg-slate-100 text-slate-600 font-semibold text-xs px-5 py-2.5 rounded-xl shadow-2xs transition-all cursor-pointer">
                        Clear
                    </button>
                    <button type="button" id="quick-send-btn" class="bg-secondary hover:bg-secondary-dark text-white font-semibold text-xs px-6 py-2.5 rounded-xl shadow-sm transition-all cursor-pointer">
                        Send Now
                    </button>
                </div>
            </div>

            <!-- RIGHT (4 Cols): Quick Send Donut Chart Card -->
            <div class="lg:col-span-4 bg-white rounded-2xl border border-slate-200/90 p-6 shadow-2xs flex flex-col justify-between">
                <h3 class="font-bold text-slate-900 font-heading text-lg mb-4">Quick Send</h3>
                
                <div class="flex items-center justify-between gap-5 my-auto py-2">
                    
                    <!-- SVG Donut Progress Circle -->
                    <div class="relative w-28 h-28 sm:w-32 sm:h-32 flex items-center justify-center flex-shrink-0">
                        <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                            <path class="text-slate-100" stroke-width="3.8" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                            <path class="text-secondary" stroke-width="3.8" stroke-dasharray="95, 100" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                        </svg>
                        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                            <span class="font-bold text-slate-900 font-heading text-2xl tracking-tight leading-none">95%</span>
                            <span class="text-[11px] text-slate-400 font-inter mt-1 font-medium">Delivered</span>
                        </div>
                    </div>

                    <!-- Donut Chart Stats Legend -->
                    <div class="flex-1 space-y-3 text-xs font-inter min-w-0">
                        <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                            <span class="text-slate-500 font-medium truncate">SMS Delivered</span>
                            <strong class="font-bold text-slate-900 font-mono ml-2">140/142</strong>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                            <span class="text-slate-500 font-medium truncate">Email Delivered</span>
                            <strong class="font-bold text-slate-900 font-mono ml-2">137/142</strong>
                        </div>
                        <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                            <span class="text-slate-500 font-medium truncate">Failed</span>
                            <strong class="font-bold text-rose-600 font-mono ml-2">13/284</strong>
                        </div>
                        <div class="flex items-center justify-between pt-0.5">
                            <span class="text-slate-500 font-medium truncate">Pending</span>
                            <strong class="font-bold text-slate-900 font-mono ml-2">7/284</strong>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</main>

<!-- Send Notification Modal Dialog -->
<div id="notification-modal" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 items-center justify-center p-4 hidden transition-opacity duration-200">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 shadow-2xl space-y-4 transform transition-transform">
        <div class="flex items-center justify-between border-b border-slate-100 pb-3">
            <h3 id="modal-title" class="text-lg font-bold text-slate-900 font-heading">Dispatch Applicant Notification</h3>
            <button type="button" id="modal-close-btn" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 flex items-center justify-center cursor-pointer">
                ✕
            </button>
        </div>

        <div class="space-y-4 text-xs font-inter">
            <div>
                <label class="block font-bold text-slate-700 mb-1 font-heading">Select Applicant:</label>
                <select id="modal-app-select" class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:bg-white focus:outline-none">
                    <option value="VLS-2634">VLS-2634 - Fr. Anthony Silva</option>
                    <option value="VLS-2631">VLS-2631 - Sr. Mary Colette</option>
                    <option value="VLS-2629">VLS-2629 - Fr. James Perera</option>
                </select>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1 font-heading">Dispatch Channel:</label>
                <div class="grid grid-cols-3 gap-2">
                    <label class="p-2.5 border rounded-lg flex items-center justify-center gap-1.5 cursor-pointer bg-slate-50">
                        <input type="radio" name="dispatch_channel" value="SMS" checked> SMS
                    </label>
                    <label class="p-2.5 border rounded-lg flex items-center justify-center gap-1.5 cursor-pointer bg-slate-50">
                        <input type="radio" name="dispatch_channel" value="Email"> Email
                    </label>
                    <label class="p-2.5 border rounded-lg flex items-center justify-center gap-1.5 cursor-pointer bg-slate-50">
                        <input type="radio" name="dispatch_channel" value="Both"> Both
                    </label>
                </div>
            </div>

            <div>
                <label class="block font-bold text-slate-700 mb-1 font-heading">Custom Message Content:</label>
                <textarea id="modal-msg" rows="3" placeholder="Enter message update..." class="w-full p-2.5 bg-slate-50 border border-slate-200 rounded-lg focus:bg-white focus:outline-none">Your application status has been updated. Please contact the Department for details.</textarea>
            </div>
        </div>

        <div class="flex items-center justify-end gap-3 pt-3 border-t border-slate-100">
            <button type="button" id="modal-cancel-btn" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold text-xs rounded-xl font-heading cursor-pointer">
                Cancel
            </button>
            <button type="button" id="modal-submit-btn" class="px-5 py-2 bg-secondary hover:bg-secondary-dark text-white font-semibold text-xs rounded-xl font-heading shadow-xs cursor-pointer">
                Dispatch Notification
            </button>
        </div>
    </div>
</div>

<!-- Inline Client-side Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Drawer trigger for review buttons
    document.querySelectorAll('.review-drawer-trigger').forEach(btn => {
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
                    status: 'MOD Review'
                });
            } else {
                window.location.href = `<?= BASE_URL ?>application-details?id=${encodeURIComponent(id)}`;
            }
        });
    });

    // Quick Send Form Actions
    const quickSendBtn = document.getElementById('quick-send-btn');
    const quickClearBtn = document.getElementById('quick-clear-btn');
    const quickMsgInput = document.getElementById('quick-message-input');

    if (quickSendBtn) {
        quickSendBtn.addEventListener('click', () => {
            const msg = quickMsgInput ? quickMsgInput.value.trim() : '';
            if (!msg) {
                alert('Please enter a message content before sending.');
                return;
            }
            alert('Notification dispatched successfully via selected channel!');
            if (quickMsgInput) quickMsgInput.value = '';
        });
    }

    if (quickClearBtn) {
        quickClearBtn.addEventListener('click', () => {
            if (quickMsgInput) quickMsgInput.value = '';
        });
    }

    // Modal Dialog Trigger
    const modal = document.getElementById('notification-modal');
    const sendTopBtn = document.getElementById('send-notification-top-btn');
    const modalCloseBtn = document.getElementById('modal-close-btn');
    const modalCancelBtn = document.getElementById('modal-cancel-btn');
    const modalSubmitBtn = document.getElementById('modal-submit-btn');

    const openModal = (mode = 'Notification') => {
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }
    };

    const closeModal = () => {
        if (modal) {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }
    };

    if (sendTopBtn) sendTopBtn.addEventListener('click', () => openModal('General'));
    
    document.querySelectorAll('.action-trigger-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const mode = btn.getAttribute('data-mode');
            openModal(mode);
        });
    });

    if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
    if (modalCancelBtn) modalCancelBtn.addEventListener('click', closeModal);

    if (modalSubmitBtn) {
        modalSubmitBtn.addEventListener('click', () => {
            alert('Notification queued and dispatched to target applicant!');
            closeModal();
        });
    }

    // Resend Button Action
    document.querySelectorAll('.resend-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.getAttribute('data-id');
            alert(`Resending notification update for application ${id}...`);
        });
    });

    // Export Button Handler
    const exportBtn = document.getElementById('export-btn');
    if (exportBtn) {
        exportBtn.addEventListener('click', () => {
            alert('Exporting notification logs to CSV...');
        });
    }
});
</script>

<?php
require_once __DIR__ . '/includes/application-modal.php';
require_once __DIR__ . '/includes/footer.php';
?>
