<?php
/**
 * Approvals Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Church Renovation Information System
 */

$page_title = "Approvals";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Approvals</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Approvals</h2>
            </div>
            <div class="flex items-center gap-3">
                <button class="bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-xs font-semibold font-inter inline-flex items-center gap-2 shadow-xs transition-colors cursor-pointer">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export
                </button>
                <button class="bg-secondary hover:bg-secondary-dark text-white px-4 py-2 rounded-lg text-xs font-semibold font-heading inline-flex items-center gap-2 shadow-xs transition-colors cursor-pointer">
                    Bulk Approve
                </button>
            </div>
        </div>

        <!-- 4 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat Card 1: Total Requests -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Total Requests</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">128</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 3this week
                </p>
            </div>

            <!-- Stat Card 2: Awaiting Decision -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Awaiting Decision</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">14</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    2 urgent
                </p>
            </div>

            <!-- Stat Card 3: Approved -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Approved</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">37</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    2this month
                </p>
            </div>

            <!-- Stat Card 4: Rejected -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Rejected</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">77</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    This quarter
                </p>
            </div>

        </div>

        <!-- Filter Controls Bar -->
        <div class="flex flex-wrap items-center gap-3">
            <!-- Search Field -->
            <div class="relative flex-1 min-w-[240px]">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search church, ID, or diocese…" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all shadow-xs">
            </div>

            <!-- Status Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-7 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>All statuses</option>
                    <option>Pending</option>
                    <option>Approved</option>
                    <option>Rejected</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>

            <!-- Diocese Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-7 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>All dioceses</option>
                    <option>Colombo</option>
                    <option>Kandy</option>
                    <option>Galle</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>

            <!-- Priority Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-7 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>Priority</option>
                    <option>High</option>
                    <option>Medium</option>
                    <option>Low</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>

            <!-- Location Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-7 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>Location</option>
                    <option>Colombo</option>
                    <option>Kandy</option>
                    <option>Galle</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>

            <!-- Sort Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-7 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>Newest first</option>
                    <option>Oldest first</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2 text-slate-400">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                </div>
            </div>

            <!-- Reset Filter Button -->
            <button class="border border-rose-200 text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-medium font-inter inline-flex items-center gap-1 transition-colors cursor-pointer shadow-xs whitespace-nowrap">
                Reset Filter
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
            </button>
        </div>

        <!-- 4 Approval Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5 items-stretch">
            
            <!-- Card 1: St. Mary's Basilica (Pending) -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-xs flex flex-col justify-between overflow-hidden">
                <div class="p-5 space-y-4">
                    <!-- Top Row -->
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-2.5">
                            <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20 mt-1">
                            <div>
                                <h3 class="font-bold text-slate-900 font-heading text-sm">St. Mary's Basilica</h3>
                                <p class="text-[11px] text-slate-400 font-inter">Roman Catholic</p>
                                <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-xs font-mono font-medium text-blue-600 hover:underline inline-block mt-0.5">#REN-2026-081</a>
                            </div>
                        </div>
                        <button class="text-slate-400 hover:text-slate-600 p-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                        </button>
                    </div>

                    <!-- Tags Row -->
                    <div class="flex flex-wrap items-center gap-1.5 text-[11px] font-inter">
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium flex items-center gap-1">
                            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Colombo
                        </span>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium">
                            Roof Restoration
                        </span>
                        <span class="bg-rose-50 border border-rose-200 text-rose-700 px-2 py-0.5 rounded-md font-medium">
                            High priority
                        </span>
                        <span class="bg-[#FEF3C7] text-[#92400E] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                            Pending
                        </span>
                    </div>

                    <!-- 3 Metric Columns Box -->
                    <div class="bg-[#F7F4EE] border border-[#EAE5D9] rounded-lg p-3 grid grid-cols-3 gap-2 text-center text-xs font-inter">
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">BUDGET</span>
                            <span class="font-bold text-slate-900 text-[11px] block mt-0.5">LKR 4,200,000</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">SUBMITTED</span>
                            <span class="font-medium text-slate-700 text-[11px] block mt-0.5">10 Jan 2026</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">WAITING</span>
                            <span class="font-semibold text-amber-700 text-[11px] block mt-0.5">79 days</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-xs text-slate-600 font-inter leading-relaxed line-clamp-3">
                        Critical roof deterioration due to monsoon water ingress. Timber trusses showing signs of rot in the main nave, posing structural…risk.
                    </p>

                    <!-- Reviewer Line -->
                    <div class="flex items-center justify-between pt-2 border-t border-slate-100 font-inter">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-secondary text-white text-[10px] font-bold font-heading flex items-center justify-center shrink-0">
                                MF
                            </div>
                            <div>
                                <h4 class="text-[11px] font-bold text-slate-900 leading-tight">M. Fernando</h4>
                                <p class="text-[9px] text-slate-400 leading-tight">Heritage Architect</p>
                            </div>
                        </div>
                        <span class="bg-sky-50 text-sky-700 text-[10px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                            Reviewing
                        </span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="p-4 pt-0 grid grid-cols-5 gap-2 font-inter">
                    <a href="<?= BASE_URL ?>requests/REN-2026-001" class="col-span-1 border border-slate-200 text-slate-500 hover:bg-slate-50 rounded-lg p-2 flex items-center justify-center transition-colors" title="View Details">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </a>
                    <button class="col-span-2 border border-slate-200 text-slate-700 hover:bg-slate-50 rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 transition-colors cursor-pointer">
                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        Reject
                    </button>
                    <button class="col-span-2 bg-[#059669] hover:bg-[#047857] text-white rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 transition-colors cursor-pointer shadow-xs">
                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        Approve
                    </button>
                </div>
            </div>

            <!-- Card 2: Holy Trinity Cathedral (Pending) -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-xs flex flex-col justify-between overflow-hidden">
                <div class="p-5 space-y-4">
                    <!-- Top Row -->
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-2.5">
                            <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20 mt-1">
                            <div>
                                <h3 class="font-bold text-slate-900 font-heading text-sm">Holy Trinity Cathe</h3>
                                <p class="text-[11px] text-slate-400 font-inter">Roman Catholic</p>
                                <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-xs font-mono font-medium text-blue-600 hover:underline inline-block mt-0.5">#REN-2026-081</a>
                            </div>
                        </div>
                        <button class="text-slate-400 hover:text-slate-600 p-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                        </button>
                    </div>

                    <!-- Tags Row -->
                    <div class="flex flex-wrap items-center gap-1.5 text-[11px] font-inter">
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium flex items-center gap-1">
                            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Kandy
                        </span>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium">
                            Roof Restoration
                        </span>
                        <span class="bg-amber-50 border border-amber-200 text-amber-700 px-2 py-0.5 rounded-md font-medium">
                            Medium priority
                        </span>
                        <span class="bg-[#FEF3C7] text-[#92400E] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                            Pending
                        </span>
                    </div>

                    <!-- 3 Metric Columns Box -->
                    <div class="bg-[#F7F4EE] border border-[#EAE5D9] rounded-lg p-3 grid grid-cols-3 gap-2 text-center text-xs font-inter">
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">BUDGET</span>
                            <span class="font-bold text-slate-900 text-[11px] block mt-0.5">LKR 1,500,000</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">SUBMITTED</span>
                            <span class="font-medium text-slate-700 text-[11px] block mt-0.5">08 Jan 2026</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">WAITING</span>
                            <span class="font-semibold text-amber-700 text-[11px] block mt-0.5">79 days</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-xs text-slate-600 font-inter leading-relaxed line-clamp-3">
                        Foundation settlement observed along the east wall. Requires underpinning and reinforcement to prevent further cracking to…this heritage building.
                    </p>

                    <!-- Reviewer Line -->
                    <div class="flex items-center justify-between pt-2 border-t border-slate-100 font-inter">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-secondary text-white text-[10px] font-bold font-heading flex items-center justify-center shrink-0">
                                MF
                            </div>
                            <div>
                                <h4 class="text-[11px] font-bold text-slate-900 leading-tight">S. Kumara</h4>
                                <p class="text-[9px] text-slate-400 leading-tight">Conservation Officer</p>
                            </div>
                        </div>
                        <span class="bg-sky-50 text-sky-700 text-[10px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                            Reviewing
                        </span>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="p-4 pt-0 grid grid-cols-5 gap-2 font-inter">
                    <a href="<?= BASE_URL ?>requests/REN-2026-001" class="col-span-1 border border-slate-200 text-slate-500 hover:bg-slate-50 rounded-lg p-2 flex items-center justify-center transition-colors" title="View Details">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                    </a>
                    <button class="col-span-2 border border-slate-200 text-slate-700 hover:bg-slate-50 rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 transition-colors cursor-pointer">
                        <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        Reject
                    </button>
                    <button class="col-span-2 bg-[#059669] hover:bg-[#047857] text-white rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 transition-colors cursor-pointer shadow-xs">
                        <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        Approve
                    </button>
                </div>
            </div>

            <!-- Card 3: St. Mary's Basilica (Approved) -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-xs flex flex-col justify-between overflow-hidden">
                <div class="p-5 space-y-4">
                    <!-- Top Row -->
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-2.5">
                            <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20 mt-1">
                            <div>
                                <h3 class="font-bold text-slate-900 font-heading text-sm">St. Mary's Basilica</h3>
                                <p class="text-[11px] text-slate-400 font-inter">Roman Catholic</p>
                                <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-xs font-mono font-medium text-blue-600 hover:underline inline-block mt-0.5">#REN-2026-081</a>
                            </div>
                        </div>
                        <button class="text-slate-400 hover:text-slate-600 p-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                        </button>
                    </div>

                    <!-- Tags Row -->
                    <div class="flex flex-wrap items-center gap-1.5 text-[11px] font-inter">
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium flex items-center gap-1">
                            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Colombo
                        </span>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium">
                            Roof Restoration
                        </span>
                        <span class="bg-rose-50 border border-rose-200 text-rose-700 px-2 py-0.5 rounded-md font-medium">
                            High priority
                        </span>
                        <span class="bg-[#ECFDF5] text-[#065F46] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                            Approved
                        </span>
                    </div>

                    <!-- 3 Metric Columns Box -->
                    <div class="bg-[#F7F4EE] border border-[#EAE5D9] rounded-lg p-3 grid grid-cols-3 gap-2 text-center text-xs font-inter">
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">BUDGET</span>
                            <span class="font-bold text-slate-900 text-[11px] block mt-0.5">LKR 980,000</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">SUBMITTED</span>
                            <span class="font-medium text-slate-700 text-[11px] block mt-0.5">15 Nov 2025</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">WAITING</span>
                            <span class="font-semibold text-amber-700 text-[11px] block mt-0.5">79 days</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-xs text-slate-600 font-inter leading-relaxed line-clamp-3">
                        Critical roof deterioration due to monsoon water ingress. Timber trusses showing signs of rot in the main nave, posing structural…risk.
                    </p>

                    <!-- Reviewer Line -->
                    <div class="flex items-center justify-between pt-2 border-t border-slate-100 font-inter">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-secondary text-white text-[10px] font-bold font-heading flex items-center justify-center shrink-0">
                                MF
                            </div>
                            <div>
                                <h4 class="text-[11px] font-bold text-slate-900 leading-tight">N. Jayawardena</h4>
                                <p class="text-[9px] text-slate-400 leading-tight">Heritage Architect</p>
                            </div>
                        </div>
                        <span class="bg-sky-50 text-sky-700 text-[10px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                            Reviewing
                        </span>
                    </div>
                </div>

                <!-- Action Buttons & Notification Banner -->
                <div>
                    <div class="p-4 pt-0 grid grid-cols-5 gap-2 font-inter opacity-70">
                        <a href="<?= BASE_URL ?>requests/REN-2026-001" class="col-span-1 border border-slate-200 text-slate-500 hover:bg-slate-50 rounded-lg p-2 flex items-center justify-center transition-colors" title="View Details">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </a>
                        <button class="col-span-2 border border-slate-200 text-slate-400 rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 cursor-not-allowed">
                            <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                            Reject
                        </button>
                        <button class="col-span-2 bg-[#10B981]/60 text-white rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 cursor-not-allowed">
                            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Approve
                        </button>
                    </div>
                    
                    <!-- Approved Notification Banner -->
                    <div class="bg-[#ECFDF5] text-[#065F46] border-t border-[#A7F3D0] px-4 py-2 text-[11px] font-medium font-inter flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-[#10B981]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                        Approved — email notification sent
                    </div>
                </div>
            </div>

            <!-- Card 4: St. Mary's Basilica (Rejected) -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-xs flex flex-col justify-between overflow-hidden">
                <div class="p-5 space-y-4">
                    <!-- Top Row -->
                    <div class="flex items-start justify-between">
                        <div class="flex items-start gap-2.5">
                            <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20 mt-1">
                            <div>
                                <h3 class="font-bold text-slate-900 font-heading text-sm">St. Mary's Basilica</h3>
                                <p class="text-[11px] text-slate-400 font-inter">Roman Catholic</p>
                                <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-xs font-mono font-medium text-blue-600 hover:underline inline-block mt-0.5">#REN-2026-081</a>
                            </div>
                        </div>
                        <button class="text-slate-400 hover:text-slate-600 p-1">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                        </button>
                    </div>

                    <!-- Tags Row -->
                    <div class="flex flex-wrap items-center gap-1.5 text-[11px] font-inter">
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium flex items-center gap-1">
                            <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Colombo
                        </span>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-600 px-2 py-0.5 rounded-md font-medium">
                            Roof Restoration
                        </span>
                        <span class="bg-rose-50 border border-rose-200 text-rose-700 px-2 py-0.5 rounded-md font-medium">
                            High priority
                        </span>
                        <span class="bg-[#FEE2E2] text-[#991B1B] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#EF4444]"></span>
                            Rejected
                        </span>
                    </div>

                    <!-- 3 Metric Columns Box -->
                    <div class="bg-[#F7F4EE] border border-[#EAE5D9] rounded-lg p-3 grid grid-cols-3 gap-2 text-center text-xs font-inter">
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">BUDGET</span>
                            <span class="font-bold text-slate-900 text-[11px] block mt-0.5">LKR 6,100,000</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">SUBMITTED</span>
                            <span class="font-medium text-slate-700 text-[11px] block mt-0.5">02 Nov 2025</span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider block font-heading">WAITING</span>
                            <span class="font-semibold text-amber-700 text-[11px] block mt-0.5">79 days</span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-xs text-slate-600 font-inter leading-relaxed line-clamp-3">
                        Foundation settlement observed along the east wall. Requires underpinning and reinforcement to prevent further cracking to…this heritage building.
                    </p>

                    <!-- Reviewer Line -->
                    <div class="flex items-center justify-between pt-2 border-t border-slate-100 font-inter">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-secondary text-white text-[10px] font-bold font-heading flex items-center justify-center shrink-0">
                                MF
                            </div>
                            <div>
                                <h4 class="text-[11px] font-bold text-slate-900 leading-tight">S. Kumara</h4>
                                <p class="text-[9px] text-slate-400 leading-tight">Conservation Officer</p>
                            </div>
                        </div>
                        <span class="bg-sky-50 text-sky-700 text-[10px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                            Reviewing
                        </span>
                    </div>
                </div>

                <!-- Action Buttons & Notification Banner -->
                <div>
                    <div class="p-4 pt-0 grid grid-cols-5 gap-2 font-inter opacity-70">
                        <a href="<?= BASE_URL ?>requests/REN-2026-001" class="col-span-1 border border-slate-200 text-slate-500 hover:bg-slate-50 rounded-lg p-2 flex items-center justify-center transition-colors" title="View Details">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </a>
                        <button class="col-span-2 border border-slate-200 text-slate-400 rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 cursor-not-allowed">
                            <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                            Reject
                        </button>
                        <button class="col-span-2 bg-[#059669]/60 text-white rounded-lg text-xs font-semibold py-2 inline-flex items-center justify-center gap-1 cursor-not-allowed">
                            <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            Approve
                        </button>
                    </div>
                    
                    <!-- Rejected Notification Banner -->
                    <div class="bg-[#FEE2E2] text-[#991B1B] border-t border-[#FCA5A5] px-4 py-2 text-[11px] font-medium font-inter flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-[#EF4444]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                        Rejected — church has been notified
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
