<?php
/**
 * Applications List - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "Applications";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Title & Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Applications</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Applications</h2>
            </div>
            <a href="<?= BASE_URL ?>applications/new" class="inline-flex items-center justify-center gap-2 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold px-4 py-2.5 rounded-xl shadow-2xs transition-all font-heading self-start sm:self-auto">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>New Application</span>
            </a>
        </div>

        <!-- 5 Status Summary Metric Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-5">
            
            <!-- Card 1: All Applications -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">All Applications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">284</h3>
                </div>
            </div>

            <!-- Card 2: Pending -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Pending</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">14</h3>
                </div>
            </div>

            <!-- Card 3: Under Review -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Under Review</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">37</h3>
                </div>
            </div>

            <!-- Card 4: Approved -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Approved</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">77</h3>
                </div>
            </div>

            <!-- Card 5: Rejected -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Rejected</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">4</h3>
                </div>
            </div>

        </div>

        <!-- Search and Filters Bar -->
        <div class="flex flex-wrap items-center gap-3 text-xs font-inter w-full">
            
            <!-- Search Name or Passport -->
            <div class="relative flex-1 min-w-[240px]">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <input type="text" placeholder="Search name, or passport no..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
            </div>

            <!-- Date Range From -->
            <div class="flex items-center space-x-2">
                <span class="text-slate-400 flex-shrink-0">From</span>
                <input type="text" value="01 Jan 2025" class="w-28 px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-700 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all text-center">
            </div>

            <!-- Date Range To -->
            <div class="flex items-center space-x-2">
                <span class="text-slate-400 flex-shrink-0">To</span>
                <input type="text" value="31 Dec 2025" class="w-28 px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-700 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all text-center">
            </div>

            <!-- Type Selector -->
            <div class="min-w-[120px]">
                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                    <option>All types</option>
                    <option>New Registration</option>
                    <option>Renewal</option>
                    <option>Amendment</option>
                </select>
            </div>

            <!-- Status Selector -->
            <div class="min-w-[120px]">
                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                    <option>All status</option>
                </select>
            </div>

            <!-- Stage Selector -->
            <div class="min-w-[120px]">
                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                    <option>All stages</option>
                </select>
            </div>

            <!-- Reset Button -->
            <div class="ml-auto md:ml-0">
                <button class="px-4 py-2 bg-white hover:bg-red-50 text-red-600 border border-red-200 hover:border-red-300 rounded-xl text-xs font-semibold transition-all flex items-center justify-center gap-1 whitespace-nowrap">
                    <span>Reset Filter</span>
                </button>
            </div>

        </div>

        <!-- Recent Applications Table Card -->
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-base font-bold text-slate-900 font-heading">Recent Applications</h3>
                <button class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-700 text-xs font-medium rounded-lg border border-slate-200/80 transition-colors font-inter">
                    <span>Filter</span>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[900px]">
                    <thead>
                        <tr class="bg-[#F5ECE2]/80 border-b border-slate-200/70 text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider">
                            <th scope="col" class="py-3.5 px-5 font-bold">APP ID</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">CHURCH NAME</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">TYPE</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">FILED DATE</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">ASSIGNED OFFICER</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">STATUS</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">STAGE</th>
                            <th scope="col" class="py-3.5 px-5 font-bold text-right">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-slate-500 font-medium">VLS-2634</td>
                            <td class="py-3.5 px-5">
                                <div class="font-bold text-slate-900 font-heading">Holy Redeemer Church</div>
                                <div class="text-[11px] text-slate-400 font-inter">Colombo District · Catholic</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600">New Registration</td>
                            <td class="py-3.5 px-5 text-slate-500">25 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-600">S. Kumara</td>
                            <td class="py-3.5 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#FEF3C7] text-[#92400E]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                    Dept Review
                                </span>
                            </td>
                            <td class="py-3.5 px-5 font-medium text-slate-600">2/5</td>
                            <td class="py-3.5 px-5 text-right">
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
                            <td class="py-3.5 px-5 font-mono text-slate-500 font-medium">VLS-2631</td>
                            <td class="py-3.5 px-5">
                                <div class="font-bold text-slate-900 font-heading">Grace Evangelical Fellowship</div>
                                <div class="text-[11px] text-slate-400 font-inter">Gampaha District · Christian</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600">Renewal</td>
                            <td class="py-3.5 px-5 text-slate-500">20 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-600">R. Perera</td>
                            <td class="py-3.5 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DBEAFE] text-[#1E40AF]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#2563EB]"></span>
                                    Buddhasasana
                                </span>
                            </td>
                            <td class="py-3.5 px-5 font-medium text-slate-600">3/5</td>
                            <td class="py-3.5 px-5 text-right">
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
                            <td class="py-3.5 px-5 font-mono text-slate-500 font-medium">VLS-2629</td>
                            <td class="py-3.5 px-5">
                                <div class="font-bold text-slate-900 font-heading">St. Sebastian's Parish</div>
                                <div class="text-[11px] text-slate-400 font-inter">Negombo · Catholic</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600">Amendment</td>
                            <td class="py-3.5 px-5 text-slate-500">15 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-600">D. Jayawardena</td>
                            <td class="py-3.5 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#F3E8FF] text-[#6B21A8]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                                    MOD Clearance
                                </span>
                            </td>
                            <td class="py-3.5 px-5 font-medium text-slate-600">4/5</td>
                            <td class="py-3.5 px-5 text-right">
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
                            <td class="py-3.5 px-5 font-mono text-slate-500 font-medium">VLS-2628</td>
                            <td class="py-3.5 px-5">
                                <div class="font-bold text-slate-900 font-heading">Calvary Christian Centre</div>
                                <div class="text-[11px] text-slate-400 font-inter">Kandy District · Christian</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600">New Registration</td>
                            <td class="py-3.5 px-5 text-slate-500">12 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-600">S. Kumara</td>
                            <td class="py-3.5 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#F3E8FF] text-[#6B21A8]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                                    MOD Clearance
                                </span>
                            </td>
                            <td class="py-3.5 px-5 font-medium text-slate-600">4/5</td>
                            <td class="py-3.5 px-5 text-right">
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
                            <td class="py-3.5 px-5 font-mono text-slate-500 font-medium">VLS-2625</td>
                            <td class="py-3.5 px-5">
                                <div class="font-bold text-slate-900 font-heading">All Saints Cathedral</div>
                                <div class="text-[11px] text-slate-400 font-inter">Colombo District · Anglican</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600">Renewal</td>
                            <td class="py-3.5 px-5 text-slate-500">11 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-600">R. Perera</td>
                            <td class="py-3.5 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DCFCE7] text-[#15803D]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                    Approved
                                </span>
                            </td>
                            <td class="py-3.5 px-5 font-medium text-slate-600">5/5</td>
                            <td class="py-3.5 px-5 text-right">
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
                            <td class="py-3.5 px-5 font-mono text-slate-500 font-medium">VLS-2619</td>
                            <td class="py-3.5 px-5">
                                <div class="font-bold text-slate-900 font-heading">New Life Assembly</div>
                                <div class="text-[11px] text-slate-400 font-inter">Matara District · Pentecostal</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600">New Registration</td>
                            <td class="py-3.5 px-5 text-slate-500">05 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-600">D. Jayawardena</td>
                            <td class="py-3.5 px-5">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DCFCE7] text-[#15803D]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                    Approved
                                </span>
                            </td>
                            <td class="py-3.5 px-5 font-medium text-slate-600">5/5</td>
                            <td class="py-3.5 px-5 text-right">
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

            <!-- Pagination Footer -->
            <div class="p-4 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-400 font-inter">
                <span>Showing <strong class="font-normal text-slate-600">1–6</strong> of <strong class="font-normal text-slate-600">47</strong> applications</span>
                
                <div class="flex items-center space-x-1">
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

        <!-- Export Actions Row -->
        <div class="flex items-center justify-end space-x-3 pt-2">
            <button class="px-4 py-2 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold rounded-xl border border-slate-200 shadow-2xs transition-colors font-inter">
                Export Excel
            </button>
            <button class="inline-flex items-center justify-center gap-1.5 px-4 py-2 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold rounded-xl shadow-2xs transition-all font-heading">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                <span>Download Report</span>
            </button>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
