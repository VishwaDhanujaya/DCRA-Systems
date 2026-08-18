<?php
/**
 * Pending Review Queue - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "Pending Review Queue";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Title -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Pending Review</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Pending Review</h2>
            </div>
        </div>

        <!-- 4 Summary Metric Cards Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Card 1: Awaiting Review -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Awaiting Review</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">24</h3>
                </div>
            </div>

            <!-- Card 2: Overdue -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Overdue</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">18</h3>
                </div>
            </div>

            <!-- Card 3: Reviewed Today -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Reviewed Today</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">312</h3>
                </div>
            </div>

            <!-- Card 4: Forwarded Today -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Forwarded Today</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">6</h3>
                </div>
            </div>

        </div>

        <!-- Search and Filters Bar -->
        <div class="flex flex-wrap items-center gap-3 text-xs font-inter w-full">
            
            <!-- Search Box -->
            <div class="relative flex-1 min-w-[280px]">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <input type="text" placeholder="Search name, ID, or diocese..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
            </div>

            <!-- Districts Filter -->
            <div class="min-w-[130px]">
                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                    <option>All districts</option>
                </select>
            </div>

            <!-- Statuses Filter -->
            <div class="min-w-[130px]">
                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                    <option>All statuses</option>
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

        <!-- Review Queue Card / Table -->
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-base font-bold text-slate-900 font-heading">Review Queue</h3>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[1100px]">
                    <thead>
                        <tr class="bg-[#F5ECE2]/80 border-b border-slate-200/70 text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider">
                            <th scope="col" class="py-3.5 px-5 font-bold">APP ID</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">CHURCH NAME</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">TYPE</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">ASSIGNED OFFICER</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">DOCUMENTS</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">STATUS</th>
                            <th scope="col" class="py-3.5 px-5 text-right font-bold">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-5 font-mono text-slate-500 font-medium">VLS-2634</td>
                            <td class="py-4 px-5">
                                <div class="font-bold text-slate-900 font-heading">Holy Redeemer Church</div>
                                <div class="text-[11px] text-slate-400 font-inter mt-0.5">Colombo District · Catholic</div>
                            </td>
                            <td class="py-4 px-5 text-slate-600">New Registration</td>
                            <td class="py-4 px-5 text-slate-600">S. Kumara</td>
                            <td class="py-4 px-5">
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Land Deed
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ NIC Copy
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#FFEBEE] text-[#C62828] border border-[#FFCDD2] font-inter">
                                        ✕ Auth. Letter
                                    </span>
                                </div>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#FEF3C7] text-[#92400E]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                    Dept Review
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <a href="<?= BASE_URL ?>applications/VLS-2634" class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-5 font-mono text-slate-500 font-medium">VLS-2631</td>
                            <td class="py-4 px-5">
                                <div class="font-bold text-slate-900 font-heading">Grace Evangelical Fellowship</div>
                                <div class="text-[11px] text-slate-400 font-inter mt-0.5">Gampaha District · Christian</div>
                            </td>
                            <td class="py-4 px-5 text-slate-600">Renewal</td>
                            <td class="py-4 px-5 text-slate-600">R. Perera</td>
                            <td class="py-4 px-5">
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Land Deed
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#FFEBEE] text-[#C62828] border border-[#FFCDD2] font-inter">
                                        ✕ NIC Copy
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#FFEBEE] text-[#C62828] border border-[#FFCDD2] font-inter">
                                        ✕ Auth. Letter
                                    </span>
                                </div>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DBEAFE] text-[#1E40AF]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#2563EB]"></span>
                                    Buddhasasana
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <a href="<?= BASE_URL ?>applications/VLS-2631" class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-5 font-mono text-slate-500 font-medium">VLS-2629</td>
                            <td class="py-4 px-5">
                                <div class="font-bold text-slate-900 font-heading">St. Sebastian's Parish</div>
                                <div class="text-[11px] text-slate-400 font-inter mt-0.5">Negombo · Catholic</div>
                            </td>
                            <td class="py-4 px-5 text-slate-600">Amendment</td>
                            <td class="py-4 px-5 text-slate-600">D. Jayawardena</td>
                            <td class="py-4 px-5">
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Land Deed
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ NIC Copy
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Auth. Letter
                                    </span>
                                </div>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#F3E8FF] text-[#6B21A8]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                                    MOD Clearance
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <a href="<?= BASE_URL ?>applications/VLS-2629" class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-5 font-mono text-slate-500 font-medium">VLS-2628</td>
                            <td class="py-4 px-5">
                                <div class="font-bold text-slate-900 font-heading">Calvary Christian Centre</div>
                                <div class="text-[11px] text-slate-400 font-inter mt-0.5">Kandy District · Christian</div>
                            </td>
                            <td class="py-4 px-5 text-slate-600">New Registration</td>
                            <td class="py-4 px-5 text-slate-600">S. Kumara</td>
                            <td class="py-4 px-5">
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Land Deed
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ NIC Copy
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Auth. Letter
                                    </span>
                                </div>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#F3E8FF] text-[#6B21A8]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                                    MOD Clearance
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <a href="<?= BASE_URL ?>applications/VLS-2628" class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-5 font-mono text-slate-500 font-medium">VLS-2625</td>
                            <td class="py-4 px-5">
                                <div class="font-bold text-slate-900 font-heading">All Saints Cathedral</div>
                                <div class="text-[11px] text-slate-400 font-inter mt-0.5">Colombo District · Anglican</div>
                            </td>
                            <td class="py-4 px-5 text-slate-600">Renewal</td>
                            <td class="py-4 px-5 text-slate-600">R. Perera</td>
                            <td class="py-4 px-5">
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Land Deed
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ NIC Copy
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#FFF3E0] text-[#EF6C00] border border-[#FFE0B2] font-inter">
                                        ⚠ Auth. Letter
                                    </span>
                                </div>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DCFCE7] text-[#15803D]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                    Approved
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <a href="<?= BASE_URL ?>applications/VLS-2625" class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-5 font-mono text-slate-500 font-medium">VLS-2619</td>
                            <td class="py-4 px-5">
                                <div class="font-bold text-slate-900 font-heading">New Life Assembly</div>
                                <div class="text-[11px] text-slate-400 font-inter mt-0.5">Matara District · Pentecostal</div>
                            </td>
                            <td class="py-4 px-5 text-slate-600">New Registration</td>
                            <td class="py-4 px-5 text-slate-600">D. Jayawardena</td>
                            <td class="py-4 px-5">
                                <div class="flex flex-wrap gap-1.5">
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ Land Deed
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#E8F5E9] text-[#2E7D32] border border-[#C8E6C9] font-inter">
                                        ✓ NIC Copy
                                    </span>
                                    <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full text-[9px] font-bold bg-[#FFEBEE] text-[#C62828] border border-[#FFCDD2] font-inter">
                                        ✕ Auth. Letter
                                    </span>
                                </div>
                            </td>
                            <td class="py-4 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DCFCE7] text-[#15803D]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                    Approved
                                </span>
                            </td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <a href="<?= BASE_URL ?>applications/VLS-2619" class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </a>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                    </button>
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                                    </button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Footer Pagination / Actions -->
            <div class="px-5 py-4 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 font-inter text-slate-500">
                <span class="text-xs font-medium">Showing 1–6 of 47 applications</span>
                
                <!-- Pagination -->
                <div class="flex items-center space-x-1 self-center sm:self-auto">
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-400 hover:bg-slate-100 font-mono text-xs">‹</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded bg-[#13273F] text-white font-semibold text-xs">1</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-600 hover:bg-slate-100 text-xs">2</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-600 hover:bg-slate-100 text-xs">3</button>
                    <span class="px-1 text-slate-400 text-xs">..</span>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-600 hover:bg-slate-100 text-xs">8</button>
                    <button class="w-6 h-6 flex items-center justify-center rounded text-slate-400 hover:bg-slate-100 font-mono text-xs">›</button>
                </div>
            </div>

        </div>

        <!-- Export Buttons Row -->
        <div class="flex items-center justify-end space-x-3 text-xs font-semibold font-heading">
            <button class="px-4 py-2.5 bg-white hover:bg-slate-50 text-slate-700 rounded-xl border border-slate-200 shadow-2xs transition-colors">
                Export Excel
            </button>
            <button class="px-4 py-2.5 bg-[#13273F] hover:bg-[#0d1c2e] text-white rounded-xl shadow-2xs transition-colors flex items-center gap-1.5">
                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                <span>Download Report</span>
            </button>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
