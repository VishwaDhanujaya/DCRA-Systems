<?php
/**
 * Medical Letters - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Free of Charge Medical Letter Issuing System
 */

$page_title = "Medical Letters";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Medical Letters</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Medical Letters</h2>
            </div>
            <a href="<?= BASE_URL ?>new-medical-letter" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-5 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 transition-all self-start sm:self-auto min-h-[40px] whitespace-nowrap cursor-pointer">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                New Medical Letter
            </a>
        </div>

        <!-- Filter Toolbar Card -->
        <div class="flex flex-col xl:flex-row xl:items-center justify-between gap-4 bg-white p-4 rounded-xl border border-slate-200/80 shadow-2xs">
            
            <!-- Left: Search Input Box -->
            <div class="relative flex-1 max-w-md">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" id="search-query" placeholder="Search name, or passport no…" class="w-full pl-10 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 focus:ring-1 focus:ring-slate-300 transition-all h-9">
            </div>

            <!-- Right: Filters Panel -->
            <div class="flex flex-wrap items-center gap-3">
                
                <!-- Date Range From -->
                <div class="flex items-center space-x-2">
                    <span class="text-xs text-slate-500 font-inter font-medium">From</span>
                    <input type="text" id="filter-date-from" value="01 Jan 2025" placeholder="DD MMM YYYY" class="w-28 text-center py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:border-slate-300 transition-all h-9">
                </div>

                <!-- Date Range To -->
                <div class="flex items-center space-x-2">
                    <span class="text-xs text-slate-500 font-inter font-medium">To</span>
                    <input type="text" id="filter-date-to" value="31 Dec 2025" placeholder="DD MMM YYYY" class="w-28 text-center py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:border-slate-300 transition-all h-9">
                </div>

                <!-- Type Selector -->
                <div class="relative">
                    <select id="filter-type" class="appearance-none bg-none bg-slate-50 border border-slate-200 rounded-lg pl-3.5 pr-8 py-2 text-xs font-semibold text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer h-9">
                        <option value="all">All types</option>
                        <option value="Entry Visa">Entry Visa</option>
                        <option value="Resident Visa">Resident Visa</option>
                        <option value="Visa Extension">Visa Extension</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5">
                        <svg class="w-2.5 h-2.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <!-- Status Selector -->
                <div class="relative">
                    <select id="filter-status" class="appearance-none bg-none bg-slate-50 border border-slate-200 rounded-lg pl-3.5 pr-8 py-2 text-xs font-semibold text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer h-9">
                        <option value="all">All status</option>
                        <option value="Issued">Issued</option>
                        <option value="Printed">Printed</option>
                        <option value="Pending">Pending</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5">
                        <svg class="w-2.5 h-2.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <!-- Stage Selector -->
                <div class="relative">
                    <select id="filter-stage" class="appearance-none bg-none bg-slate-50 border border-slate-200 rounded-lg pl-3.5 pr-8 py-2 text-xs font-semibold text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer h-9">
                        <option value="all">All stages</option>
                        <option value="Notified">Notified</option>
                        <option value="Pending">Pending</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5">
                        <svg class="w-2.5 h-2.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>

                <!-- Reset Filter Button -->
                <button type="button" id="btn-reset-filter" class="border border-rose-200 hover:bg-rose-50 text-rose-600 text-xs font-semibold px-5 py-2 rounded-lg transition-colors font-inter cursor-pointer whitespace-nowrap h-9 flex items-center justify-center gap-1.5">
                    Reset Filter
                    <svg class="w-2.5 h-2.5 text-rose-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

            </div>

        </div>

        <!-- Main Card: Recent Medical Letters Table -->
        <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-5">
            
            <!-- Card Header with Table Title and Right Dropdown -->
            <div class="flex items-center justify-between flex-wrap gap-2">
                <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Recent Medical Letters</h3>
                <div class="relative">
                    <select id="table-header-type-filter" class="appearance-none bg-none bg-slate-50 border border-slate-200 rounded-lg pl-3 pr-8 py-1.5 text-xs font-semibold text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer h-8">
                        <option value="all">Visa Type</option>
                        <option value="Entry Visa">Entry Visa</option>
                        <option value="Resident Visa">Resident Visa</option>
                        <option value="Visa Extension">Visa Extension</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5">
                        <svg class="w-2.5 h-2.5 text-slate-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Medical Letters Data Table (Responsive Scroll) -->
            <div class="overflow-x-auto -mx-5 sm:mx-0 px-5 sm:px-0">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[950px]">
                    <thead>
                        <tr class="bg-[#F7F4EE] text-slate-500 font-bold uppercase text-[9px] tracking-wider border-b border-slate-200/50">
                            <th scope="col" class="py-3 px-4 whitespace-nowrap w-[15%]">DATE & TIME</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap w-[30%]">APPLICANT</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap w-[15%]">PASSPORT NUMBER</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap w-[12%]">VISA ID</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap w-[13%]">VISA TYPE</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap w-[15%]">STATUS</th>
                            <th scope="col" class="py-3 px-4 text-center whitespace-nowrap w-[15%]">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody id="letters-table-body" class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1: Fr. Anthony Silva -->
                        <tr class="hover:bg-slate-50/80 transition-colors" data-id="VLS-2634" data-type="Entry Visa" data-status="Issued" data-stage="Notified" data-date="2025-03-14">
                            <td class="py-3.5 px-4 text-slate-400 font-medium whitespace-nowrap">14 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block whitespace-nowrap">Fr. Anthony Silva</span>
                                <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Anthony's Church • Colombo Diocese</span>
                            </td>
                            <td class="py-3.5 px-4 font-mono font-bold text-slate-900 uppercase whitespace-nowrap">AB123456</td>
                            <td class="py-3.5 px-4 font-mono font-semibold text-slate-500 whitespace-nowrap">VLS-2634</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#E0F2FE] text-[#0284C7] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Entry Visa</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#E0F2FE] text-[#0369A1] text-[10px] px-2 py-0.5 rounded-full font-semibold inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span>
                                    Issued
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="View Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Print Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <span class="bg-[#E0F2FE] text-[#0284C7] border border-[#BFE2FD] px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap ml-1.5 inline-block w-[68px] text-center">Notified</span>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2: Sr. Mary Colette -->
                        <tr class="hover:bg-slate-50/80 transition-colors" data-id="VLS-2631" data-type="Resident Visa" data-status="Printed" data-stage="Pending" data-date="2025-03-08">
                            <td class="py-3.5 px-4 text-slate-400 font-medium whitespace-nowrap">08 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block whitespace-nowrap">Sr. Mary Colette</span>
                                <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Mary's Cathedral • Kandy Diocese</span>
                            </td>
                            <td class="py-3.5 px-4 font-mono font-bold text-slate-900 uppercase whitespace-nowrap">DE987654</td>
                            <td class="py-3.5 px-4 font-mono font-semibold text-slate-500 whitespace-nowrap">VLS-2631</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#FEF3C7] text-[#D97706] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Resident Visa</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#DCFCE7] text-[#15803D] text-[10px] px-2 py-0.5 rounded-full font-semibold inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                    Printed
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="View Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Print Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <span class="bg-[#FEF2F2] text-[#EF4444] border border-[#FEE2E2] px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap ml-1.5 inline-block w-[68px] text-center">Pending</span>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3: Fr. James Perera -->
                        <tr class="hover:bg-slate-50/80 transition-colors" data-id="VLS-2629" data-type="Visa Extension" data-status="Printed" data-stage="Notified" data-date="2025-03-02">
                            <td class="py-3.5 px-4 text-slate-400 font-medium whitespace-nowrap">02 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block whitespace-nowrap">Fr. James Perera</span>
                                <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">Holy Trinity Church • Galle Diocese</span>
                            </td>
                            <td class="py-3.5 px-4 font-mono font-bold text-slate-900 uppercase whitespace-nowrap">IN445512</td>
                            <td class="py-3.5 px-4 font-mono font-semibold text-slate-500 whitespace-nowrap">VLS-2629</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#CCFBF1] text-[#0F766E] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Visa Extension</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#DCFCE7] text-[#15803D] text-[10px] px-2 py-0.5 rounded-full font-semibold inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                    Printed
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="View Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Print Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <span class="bg-[#E0F2FE] text-[#0284C7] border border-[#BFE2FD] px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap ml-1.5 inline-block w-[68px] text-center">Notified</span>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4: Sr. Agnes Fernando -->
                        <tr class="hover:bg-slate-50/80 transition-colors" data-id="VLS-2628" data-type="Entry Visa" data-status="Pending" data-stage="Pending" data-date="2025-02-25">
                            <td class="py-3.5 px-4 text-slate-400 font-medium whitespace-nowrap">25 Feb 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block whitespace-nowrap">Sr. Agnes Fernando</span>
                                <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">Sacred Heart Church • Jaffna Diocese</span>
                            </td>
                            <td class="py-3.5 px-4 font-mono font-bold text-slate-900 uppercase whitespace-nowrap">GB334421</td>
                            <td class="py-3.5 px-4 font-mono font-semibold text-slate-500 whitespace-nowrap">VLS-2628</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#E0F2FE] text-[#0284C7] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Entry Visa</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#FEF3C7] text-[#D97706] text-[10px] px-2 py-0.5 rounded-full font-semibold inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="View Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Print Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <span class="bg-[#FEF2F2] text-[#EF4444] border border-[#FEE2E2] px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap ml-1.5 inline-block w-[68px] text-center">Pending</span>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5: Fr. Anthony Silva -->
                        <tr class="hover:bg-slate-50/80 transition-colors" data-id="VLS-2625" data-type="Resident Visa" data-status="Pending" data-stage="Notified" data-date="2025-02-20">
                            <td class="py-3.5 px-4 text-slate-400 font-medium whitespace-nowrap">20 Feb 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block whitespace-nowrap">Fr. Anthony Silva</span>
                                <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Peter's Church • Matara Diocese</span>
                            </td>
                            <td class="py-3.5 px-4 font-mono font-bold text-slate-900 uppercase whitespace-nowrap">JP778821</td>
                            <td class="py-3.5 px-4 font-mono font-semibold text-slate-500 whitespace-nowrap">VLS-2625</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#FEF3C7] text-[#D97706] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Resident Visa</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#FEF3C7] text-[#D97706] text-[10px] px-2 py-0.5 rounded-full font-semibold inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="View Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Print Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <span class="bg-[#E0F2FE] text-[#0284C7] border border-[#BFE2FD] px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap ml-1.5 inline-block w-[68px] text-center">Notified</span>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6: Sr. Mary Colette -->
                        <tr class="hover:bg-slate-50/80 transition-colors" data-id="VLS-2619" data-type="Visa Extension" data-status="Printed" data-stage="Notified" data-date="2025-02-13">
                            <td class="py-3.5 px-4 text-slate-400 font-medium whitespace-nowrap">13 Feb 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="font-bold text-slate-900 block whitespace-nowrap">Sr. Mary Colette</span>
                                <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Anthony's Church • Colombo Diocese</span>
                            </td>
                            <td class="py-3.5 px-4 font-mono font-bold text-slate-900 uppercase whitespace-nowrap">ES221983</td>
                            <td class="py-3.5 px-4 font-mono font-semibold text-slate-500 whitespace-nowrap">VLS-2619</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#CCFBF1] text-[#0F766E] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Visa Extension</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#DCFCE7] text-[#15803D] text-[10px] px-2 py-0.5 rounded-full font-semibold inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                    Printed
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="flex items-center justify-end space-x-1">
                                    <button type="button" title="View Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Print Letter" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                        </svg>
                                    </button>
                                    <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-secondary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center shadow-3xs">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </button>
                                    <span class="bg-[#E0F2FE] text-[#0284C7] border border-[#BFE2FD] px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap ml-1.5 inline-block w-[68px] text-center">Notified</span>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Pagination Toolbar -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-3 border-t border-slate-100 text-xs text-slate-500 font-inter">
                <span id="showing-entries-text">Showing <strong class="font-semibold text-slate-800">1–6</strong> of <strong class="font-semibold text-slate-800">47</strong> applications</span>
                <div class="flex items-center space-x-1">
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-400 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">&lsaquo;</button>
                    <button type="button" class="w-7 h-7 rounded bg-secondary text-white font-semibold flex items-center justify-center shadow-xs cursor-pointer">1</button>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">2</button>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">3</button>
                    <span class="px-1 text-slate-400">…</span>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">8</button>
                    <button type="button" class="w-7 h-7 rounded border border-slate-200 text-slate-400 hover:bg-slate-50 flex items-center justify-center transition-colors cursor-pointer">&rsaquo;</button>
                </div>
            </div>

            <!-- Action Buttons Footer -->
            <div class="flex justify-end items-center gap-2.5 pt-3">
                <button type="button" class="border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold px-5 py-2.5 rounded-lg transition-colors font-heading shadow-3xs cursor-pointer h-10 flex items-center justify-center">
                    Export Excel
                </button>
                <button type="button" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold px-5 py-2.5 rounded-lg transition-colors font-heading shadow-xs cursor-pointer h-10 flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Download Report
                </button>
            </div>

        </div>

    </div>
</main>

<!-- Client-side Interactive Filter Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const searchQuery = document.getElementById('search-query');
    const filterType = document.getElementById('filter-type');
    const filterStatus = document.getElementById('filter-status');
    const filterStage = document.getElementById('filter-stage');
    const btnResetFilter = document.getElementById('btn-reset-filter');
    const tableHeaderTypeFilter = document.getElementById('table-header-type-filter');
    const tableRows = document.querySelectorAll('#letters-table-body tr');
    const showingEntriesText = document.getElementById('showing-entries-text');
    const filterDateFrom = document.getElementById('filter-date-from');
    const filterDateTo = document.getElementById('filter-date-to');

    // Parse date helpers
    function parseDate(dateStr) {
        // Parse "DD MMM YYYY" (e.g. "14 Mar 2026" or "01 Jan 2025")
        if (!dateStr) return null;
        const months = {
            jan:0, feb:1, mar:2, apr:3, may:4, jun:5, jul:6, aug:7, sep:8, oct:9, nov:10, dec:11
        };
        const parts = dateStr.trim().split(/\s+/);
        if (parts.length !== 3) return null;
        
        const day = parseInt(parts[0], 10);
        const monthStr = parts[1].toLowerCase().substring(0, 3);
        const year = parseInt(parts[2], 10);
        
        if (isNaN(day) || isNaN(year) || !(monthStr in months)) return null;
        return new Date(year, months[monthStr], day);
    }

    // Main filter function
    function applyFilters() {
        const query = searchQuery.value.trim().toLowerCase();
        const type = filterType.value;
        const status = filterStatus.value;
        const stage = filterStage.value;
        const headerType = tableHeaderTypeFilter.value;
        
        const fromDate = parseDate(filterDateFrom.value);
        const toDate = parseDate(filterDateTo.value);

        let visibleCount = 0;

        tableRows.forEach(row => {
            const rowId = row.dataset.id.toLowerCase();
            const rowType = row.dataset.type;
            const rowStatus = row.dataset.status;
            const rowStage = row.dataset.stage;
            const rowDateStr = row.dataset.date; // "YYYY-MM-DD"
            const rowDate = new Date(rowDateStr);

            // Extract text contents to search
            const rowText = row.innerText.toLowerCase();

            // Match query (case-insensitive search in ID, Name, Diocese, Passport)
            const matchesQuery = !query || rowText.includes(query) || rowId.includes(query);

            // Match Type (combining filterType select & headerType select)
            let matchesType = true;
            if (type !== 'all' && rowType !== type) matchesType = false;
            if (headerType !== 'all' && rowType !== headerType) matchesType = false;

            // Match Status
            const matchesStatus = (status === 'all' || rowStatus === status);

            // Match Stage/Notification
            const matchesStage = (stage === 'all' || rowStage === stage);

            // Match Date Range
            let matchesDate = true;
            if (fromDate && rowDate < fromDate) matchesDate = false;
            if (toDate && rowDate > toDate) matchesDate = false;

            // Update Visibility
            if (matchesQuery && matchesType && matchesStatus && matchesStage && matchesDate) {
                row.style.display = '';
                visibleCount++;
            } else {
                row.style.display = 'none';
            }
        });

        // Update total showing count text
        showingEntriesText.innerHTML = `Showing <strong class="font-semibold text-slate-800">1–${visibleCount}</strong> of <strong class="font-semibold text-slate-800">${visibleCount}</strong> applications`;
    }

    // Reset filters
    function resetFilters() {
        searchQuery.value = '';
        filterType.value = 'all';
        filterStatus.value = 'all';
        filterStage.value = 'all';
        tableHeaderTypeFilter.value = 'all';
        filterDateFrom.value = '01 Jan 2025';
        filterDateTo.value = '31 Dec 2025';
        applyFilters();
    }

    // Event listeners
    searchQuery.addEventListener('input', applyFilters);
    filterType.addEventListener('change', () => {
        // Sync with table header type filter
        tableHeaderTypeFilter.value = filterType.value;
        applyFilters();
    });
    filterStatus.addEventListener('change', applyFilters);
    filterStage.addEventListener('change', applyFilters);
    tableHeaderTypeFilter.addEventListener('change', () => {
        // Sync back with main filterType select
        filterType.value = tableHeaderTypeFilter.value;
        applyFilters();
    });
    filterDateFrom.addEventListener('change', applyFilters);
    filterDateTo.addEventListener('change', applyFilters);
    btnResetFilter.addEventListener('click', resetFilters);

    // Initial apply
    applyFilters();
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
