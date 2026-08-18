<?php
/**
 * Notifications Page
 * Department of Christian Religious Affairs
 * Online Bungalow Booking System
 */

$page_title = "System Notifications";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#F8FAFC]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Header Actions -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-medium text-slate-400 font-inter">Home / Notifications</span>
                <h2 class="text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Notifications</h2>
            </div>
            <div class="flex items-center gap-3">
                <button class="bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 text-xs font-semibold px-4 py-2.5 rounded-lg shadow-2xs transition-colors flex items-center gap-1.5 font-inter cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    Mark All Read
                </button>
                <button class="bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold px-4 py-2.5 rounded-lg shadow-sm transition-colors flex items-center gap-1.5 font-inter cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    New Booking
                </button>
            </div>
        </div>

        <!-- Filter Row -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pt-2">
            <!-- Search Box -->
            <div class="relative flex-1 max-w-2xl">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search notifications..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-300 focus:border-slate-300 transition-all h-9">
            </div>
            
            <!-- Dropdowns & Reset Filter -->
            <div class="flex flex-wrap items-center gap-3">
                <div class="relative">
                    <select class="appearance-none bg-[#F8FAFC] border border-slate-200 rounded-lg pl-3 pr-8 py-1.5 text-xs font-inter text-slate-600 focus:outline-none cursor-pointer h-9 min-w-[110px]">
                        <option>All types</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="appearance-none bg-[#F8FAFC] border border-slate-200 rounded-lg pl-3 pr-8 py-1.5 text-xs font-inter text-slate-600 focus:outline-none cursor-pointer h-9 min-w-[120px]">
                        <option>All priorities</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>

                <button class="border border-red-500/80 text-red-500 hover:bg-red-50 text-xs font-semibold px-4 py-1.5 rounded-lg transition-colors flex items-center justify-between gap-2 font-inter h-9 cursor-pointer">
                    <span>Reset Filter</span>
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>
        </div>

        <!-- Notifications Card -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs space-y-6">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <h3 class="text-lg font-bold text-slate-900 font-heading">All Notifications</h3>
                <span class="bg-[#4E0000]/10 text-[#4E0000] text-[10px] font-bold px-2 py-0.5 rounded-full font-mono">2 Unread</span>
            </div>

            <!-- Notifications List -->
            <div class="divide-y divide-slate-100">
                
                <!-- Notification 1 (Unread) -->
                <div class="py-4 flex gap-4 items-start hover:bg-slate-50/30 transition-colors px-2 rounded-xl">
                    <!-- Icon Box (Success Green) -->
                    <div class="p-2 bg-emerald-50 text-emerald-600 rounded-xl flex-shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <!-- Message Body -->
                    <div class="flex-1 space-y-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h4 class="text-sm font-bold text-slate-800 font-heading">Payment Verified</h4>
                            <div class="flex items-center gap-2">
                                <span class="bg-blue-50 text-blue-700 text-[10px] font-semibold px-2 py-0.5 rounded-md font-inter">Low</span>
                                <span class="text-[10px] text-slate-400 font-inter">10 mins ago</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 font-inter leading-relaxed">Payment of <span class="font-semibold text-slate-700">LKR 13,200.00</span> for Reservation <span class="font-semibold text-slate-700">TPH-20260409</span> by Anthony Silva was verified successfully.</p>
                    </div>
                    <!-- Action Dot -->
                    <div class="flex items-center justify-center h-8 flex-shrink-0">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#4E0000]" title="Unread notification"></div>
                    </div>
                </div>

                <!-- Notification 2 (Unread) -->
                <div class="py-4 flex gap-4 items-start hover:bg-slate-50/30 transition-colors px-2 rounded-xl">
                    <!-- Icon Box (Alert Danger) -->
                    <div class="p-2 bg-rose-50 text-rose-600 rounded-xl flex-shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <!-- Message Body -->
                    <div class="flex-1 space-y-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h4 class="text-sm font-bold text-slate-800 font-heading">Pending Booking Approval</h4>
                            <div class="flex items-center gap-2">
                                <span class="bg-red-50 text-red-700 text-[10px] font-semibold px-2 py-0.5 rounded-md font-inter">High</span>
                                <span class="text-[10px] text-slate-400 font-inter">1 hour ago</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 font-inter leading-relaxed">A new booking request <span class="font-semibold text-slate-700">TPH-20260410</span> by Mary Colette requires staff approval check.</p>
                    </div>
                    <!-- Action Dot -->
                    <div class="flex items-center justify-center h-8 flex-shrink-0">
                        <div class="h-2.5 w-2.5 rounded-full bg-[#4E0000]" title="Unread notification"></div>
                    </div>
                </div>

                <!-- Notification 3 (Read) -->
                <div class="py-4 flex gap-4 items-start hover:bg-slate-50/30 transition-colors px-2 rounded-xl">
                    <!-- Icon Box (Info Blue) -->
                    <div class="p-2 bg-blue-50 text-blue-600 rounded-xl flex-shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <!-- Message Body -->
                    <div class="flex-1 space-y-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h4 class="text-sm font-bold text-slate-800 font-heading">Member Status Changed</h4>
                            <div class="flex items-center gap-2">
                                <span class="bg-amber-50 text-amber-700 text-[10px] font-semibold px-2 py-0.5 rounded-md font-inter">Medium</span>
                                <span class="text-[10px] text-slate-400 font-inter">5 hours ago</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 font-inter leading-relaxed">Agnes Fernando's profile status was updated to <span class="font-semibold text-slate-700">Inactive</span> by System Administrator.</p>
                    </div>
                    <!-- Empty Spacer for Read -->
                    <div class="w-2.5 flex-shrink-0"></div>
                </div>

                <!-- Notification 4 (Read) -->
                <div class="py-4 flex gap-4 items-start hover:bg-slate-50/30 transition-colors px-2 rounded-xl">
                    <!-- Icon Box (Warning Gold) -->
                    <div class="p-2 bg-amber-50 text-amber-600 rounded-xl flex-shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <!-- Message Body -->
                    <div class="flex-1 space-y-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h4 class="text-sm font-bold text-slate-800 font-heading">Resort Maintenance Schedule</h4>
                            <div class="flex items-center gap-2">
                                <span class="bg-amber-50 text-amber-700 text-[10px] font-semibold px-2 py-0.5 rounded-md font-inter">Medium</span>
                                <span class="text-[10px] text-slate-400 font-inter">1 day ago</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 font-inter leading-relaxed">Resort room <span class="font-semibold text-slate-700">TPH - R02</span> is scheduled for routine AC servicing on 28 Mar 2026.</p>
                    </div>
                    <!-- Empty Spacer -->
                    <div class="w-2.5 flex-shrink-0"></div>
                </div>

                <!-- Notification 5 (Read) -->
                <div class="py-4 flex gap-4 items-start hover:bg-slate-50/30 transition-colors px-2 rounded-xl">
                    <!-- Icon Box (Success Green) -->
                    <div class="p-2 bg-emerald-50 text-emerald-600 rounded-xl flex-shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <!-- Message Body -->
                    <div class="flex-1 space-y-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h4 class="text-sm font-bold text-slate-800 font-heading">New Member Registered</h4>
                            <div class="flex items-center gap-2">
                                <span class="bg-blue-50 text-blue-700 text-[10px] font-semibold px-2 py-0.5 rounded-md font-inter">Low</span>
                                <span class="text-[10px] text-slate-400 font-inter">2 days ago</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 font-inter leading-relaxed">James Perera registered successfully under St. Sebastian's Parish and is waiting for credential activation.</p>
                    </div>
                    <!-- Empty Spacer -->
                    <div class="w-2.5 flex-shrink-0"></div>
                </div>

                <!-- Notification 6 (Read) -->
                <div class="py-4 flex gap-4 items-start hover:bg-slate-50/30 transition-colors px-2 rounded-xl">
                    <!-- Icon Box (Info Blue) -->
                    <div class="p-2 bg-blue-50 text-blue-600 rounded-xl flex-shrink-0">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <!-- Message Body -->
                    <div class="flex-1 space-y-1">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h4 class="text-sm font-bold text-slate-800 font-heading">System Maintenance Completed</h4>
                            <div class="flex items-center gap-2">
                                <span class="bg-blue-50 text-blue-700 text-[10px] font-semibold px-2 py-0.5 rounded-md font-inter">Low</span>
                                <span class="text-[10px] text-slate-400 font-inter">3 days ago</span>
                            </div>
                        </div>
                        <p class="text-xs text-slate-500 font-inter leading-relaxed">System database backup and static assets optimization bundle were completed successfully.</p>
                    </div>
                    <!-- Empty Spacer -->
                    <div class="w-2.5 flex-shrink-0"></div>
                </div>

            </div>

            <!-- Table Footer Pagination / Showing Count -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-100">
                <span class="text-xs text-slate-500 font-inter">Showing <span class="font-semibold text-slate-700">1–6</span> of <span class="font-semibold text-slate-700">47</span> applications</span>
                
                <div class="flex items-center gap-1.5 font-inter">
                    <!-- Prev -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-50 transition-colors cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <!-- Active 1 -->
                    <button class="h-8 w-8 rounded-lg bg-[#13273F] text-white flex items-center justify-center text-xs font-bold shadow-xs cursor-pointer">
                        1
                    </button>
                    <!-- 2 -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors cursor-pointer">
                        2
                    </button>
                    <!-- 3 -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors cursor-pointer">
                        3
                    </button>
                    <!-- ... -->
                    <span class="px-1 text-xs text-slate-400 font-medium">...</span>
                    <!-- 8 -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors cursor-pointer">
                        8
                    </button>
                    <!-- Next -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-50 transition-colors cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
