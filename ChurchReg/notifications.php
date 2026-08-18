<?php
/**
 * System Notifications Page - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "System Notifications";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Title & Top Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter"><a href="<?= BASE_URL ?>dashboard" class="hover:text-slate-650 transition-colors">Home</a> / Notifications</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">System Notifications</h2>
            </div>
            
            <div class="flex items-center gap-2.5 self-start sm:self-auto text-xs font-semibold font-heading">
                <button class="px-4 py-2 bg-white hover:bg-slate-50 text-slate-700 rounded-xl border border-slate-200 shadow-2xs transition-colors h-10 flex items-center justify-center">
                    Mark All as Read
                </button>
                <button class="px-4 py-2 bg-white hover:bg-slate-50 text-slate-700 rounded-xl border border-slate-200 shadow-2xs transition-colors h-10 flex items-center justify-center">
                    Notification Settings
                </button>
                <a href="<?= BASE_URL ?>certificates/new" class="px-4 py-2 bg-[#13273F] hover:bg-[#0d1c2e] text-white rounded-xl shadow-2xs transition-colors h-10 flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Issue New Certificate</span>
                </a>
            </div>
        </div>

        <!-- 4 Summary Metric Cards Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Card 1: Unread Notifications -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Unread Notifications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">8</h3>
                </div>
            </div>

            <!-- Card 2: Total Received -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Total Received</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">184</h3>
                </div>
            </div>

            <!-- Card 3: System Alerts -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">System Alerts</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">3</h3>
                </div>
            </div>

            <!-- Card 4: SMS & Email Sent -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">SMS & Email Sent</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">112</h3>
                </div>
            </div>

        </div>

        <!-- Search and Filters Bar (Flat Canvas Layout) -->
        <div class="flex flex-wrap items-center gap-3 text-xs font-inter w-full">
            
            <!-- Search Box -->
            <div class="relative flex-1 min-w-[280px]">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <input type="text" placeholder="Search notifications..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
            </div>

            <!-- Type Filter -->
            <div class="min-w-[130px]">
                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                    <option>All Types</option>
                    <option>System Alerts</option>
                    <option>Application Status</option>
                    <option>Clearance Actions</option>
                </select>
            </div>

            <!-- Status Filter -->
            <div class="min-w-[130px]">
                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                    <option>All Status</option>
                    <option>Unread</option>
                    <option>Read</option>
                </select>
            </div>

            <!-- Reset Filter Button -->
            <div class="ml-auto sm:ml-0">
                <button class="px-4 py-2 bg-white hover:bg-red-50 text-red-600 border border-red-200 hover:border-red-300 rounded-xl text-xs font-semibold transition-all flex items-center justify-center gap-1.5 whitespace-nowrap">
                    <span>Reset Filter</span>
                    <svg class="w-3 h-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>

        </div>

        <!-- Notification History Card -->
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-base font-bold text-slate-900 font-heading">Notification History</h3>
            </div>

            <!-- Notifications Queue -->
            <div class="divide-y divide-slate-100">
                
                <!-- Item 1: Unread Alert -->
                <div class="p-5 hover:bg-slate-50/50 transition-colors flex items-start justify-between gap-4 bg-slate-50/20">
                    <div class="flex items-start gap-4">
                        <!-- Icon Column -->
                        <div class="w-9 h-9 rounded-xl bg-amber-50 text-amber-600 border border-amber-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        </div>
                        <!-- Content -->
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-900 text-xs sm:text-sm font-heading">MOD Security Clearance Delayed</h4>
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#FEF3C7] text-[#92400E] border border-[#FDE68A] uppercase font-inter">Unread</span>
                            </div>
                            <p class="text-xs text-slate-600 font-inter">
                                Security clearance response from the Ministry of Defence is pending for over 15 days for application <a href="<?= BASE_URL ?>applications/VLS-2634" class="text-primary hover:underline font-semibold font-mono">VLS-2634</a> (Holy Redeemer Church).
                            </p>
                            <span class="text-[11px] text-slate-400 font-inter block">10 minutes ago · System Alerts</span>
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-2 flex-shrink-0 text-xs font-semibold font-inter">
                        <button class="px-3 py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-700 border border-slate-200 rounded-lg transition-colors">
                            Mark as Read
                        </button>
                        <a href="<?= BASE_URL ?>applications/VLS-2634" class="px-3 py-1.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white rounded-lg transition-colors">
                            View Application
                        </a>
                    </div>
                </div>

                <!-- Item 2: Unread Status Change -->
                <div class="p-5 hover:bg-slate-50/50 transition-colors flex items-start justify-between gap-4 bg-slate-50/20">
                    <div class="flex items-start gap-4">
                        <!-- Icon Column -->
                        <div class="w-9 h-9 rounded-xl bg-blue-50 text-blue-600 border border-blue-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                        </div>
                        <!-- Content -->
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-900 text-xs sm:text-sm font-heading">Application Awaiting Department Review</h4>
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#FEF3C7] text-[#92400E] border border-[#FDE68A] uppercase font-inter">Unread</span>
                            </div>
                            <p class="text-xs text-slate-600 font-inter">
                                New application submitted for <a href="<?= BASE_URL ?>applications/VLS-2631" class="text-primary hover:underline font-semibold font-mono">VLS-2631</a> (Grace Evangelical Fellowship) has passed initial registration check.
                            </p>
                            <span class="text-[11px] text-slate-400 font-inter block">2 hours ago · Application Status</span>
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-2 flex-shrink-0 text-xs font-semibold font-inter">
                        <button class="px-3 py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-700 border border-slate-200 rounded-lg transition-colors">
                            Mark as Read
                        </button>
                        <a href="<?= BASE_URL ?>applications/VLS-2631" class="px-3 py-1.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white rounded-lg transition-colors">
                            View Application
                        </a>
                    </div>
                </div>

                <!-- Item 3: Read Email Sent -->
                <div class="p-5 hover:bg-slate-50/50 transition-colors flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <!-- Icon Column -->
                        <div class="w-9 h-9 rounded-xl bg-green-50 text-green-600 border border-green-100 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l8-5.333a2 2 0 012.22 0l8 5.333A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-2.25-1.5a2 2 0 00-2.22 0l-2.25 1.5"/></svg>
                        </div>
                        <!-- Content -->
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-700 text-xs sm:text-sm font-heading">Registration Certificate Issued</h4>
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-slate-100 text-slate-500 border border-slate-200 uppercase font-inter">Read</span>
                            </div>
                            <p class="text-xs text-slate-500 font-inter">
                                Certificate generated successfully and emailed to Calvary Christian Centre (<a href="<?= BASE_URL ?>applications/VLS-2628" class="text-primary hover:underline font-semibold font-mono">VLS-2628</a>).
                            </p>
                            <span class="text-[11px] text-slate-400 font-inter block">Yesterday, 4:30 PM · Notifications Sent</span>
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-2 flex-shrink-0 text-xs font-semibold font-inter">
                        <a href="<?= BASE_URL ?>applications/VLS-2628" class="px-3 py-1.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white rounded-lg transition-colors">
                            View Application
                        </a>
                    </div>
                </div>

                <!-- Item 4: Read System Backup -->
                <div class="p-5 hover:bg-slate-50/50 transition-colors flex items-start justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <!-- Icon Column -->
                        <div class="w-9 h-9 rounded-xl bg-slate-50 text-slate-500 border border-slate-200/80 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.58 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.58 4 8 4s8-1.79 8-4M4 7c0-2.21 3.58-4 8-4s8 1.79 8 4m0 5c0 2.21-3.58 4-8 4s-8-1.79-8-4"/></svg>
                        </div>
                        <!-- Content -->
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-bold text-slate-700 text-xs sm:text-sm font-heading">Automated System Database Backup Completed</h4>
                                <span class="px-2 py-0.5 rounded-full text-[9px] font-bold bg-slate-100 text-slate-500 border border-slate-200 uppercase font-inter">Read</span>
                            </div>
                            <p class="text-xs text-slate-500 font-inter">
                                Scheduled system database and uploaded file backup successfully archived on remote server.
                            </p>
                            <span class="text-[11px] text-slate-400 font-inter block">3 days ago · System Alerts</span>
                        </div>
                    </div>
                    <!-- Actions -->
                    <div class="flex items-center gap-2 flex-shrink-0 text-xs font-semibold font-inter">
                        <button class="px-3 py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-700 border border-slate-200 rounded-lg transition-colors">
                            View Logs
                        </button>
                    </div>
                </div>

            </div>

            <!-- Table Footer Pagination / Actions -->
            <div class="px-5 py-4 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 font-inter text-slate-500">
                <span class="text-xs font-medium">Showing 1–4 of 184 notifications</span>
                
                <!-- Pagination -->
                <div class="flex items-center space-x-1 self-center sm:self-auto">
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-400 hover:bg-slate-100 font-mono text-xs">‹</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded bg-[#13273F] text-white font-semibold text-xs">1</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-600 hover:bg-slate-100 text-xs">2</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-600 hover:bg-slate-100 text-xs">3</button>
                    <span class="px-1 text-slate-400 text-xs">..</span>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-600 hover:bg-slate-100 text-xs">31</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-400 hover:bg-slate-100 font-mono text-xs">›</button>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
