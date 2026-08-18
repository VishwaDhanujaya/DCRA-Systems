<?php
/**
 * Renovation Requests Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Church Renovation Information System
 */

$page_title = "Renovation Requests";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Renovation Requests</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Renovation Requests</h2>
            </div>
            <div class="flex items-center gap-3">
                <button class="bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-xs font-semibold font-inter inline-flex items-center gap-2 shadow-xs transition-colors cursor-pointer">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export
                </button>
                <button class="bg-secondary hover:bg-secondary-dark text-white px-4 py-2 rounded-lg text-xs font-semibold font-heading inline-flex items-center gap-2 shadow-xs transition-colors cursor-pointer">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    Add Request
                </button>
            </div>
        </div>

        <!-- 5 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 sm:gap-5">
            
            <!-- Stat Card 1: All Requests -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">All Requests</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">128</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 12 this quarter
                </p>
            </div>

            <!-- Stat Card 2: Pending -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Pending</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">14</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    Awaiting review
                </p>
            </div>

            <!-- Stat Card 3: In Progress -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">In Progress</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">37</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    Active sites
                </p>
            </div>

            <!-- Stat Card 4: Completed -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Completed</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">77</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    8 this quarter
                </p>
            </div>

            <!-- Stat Card 5: Rejected -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Rejected</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">4</h3>
                </div>
                <p class="text-xs font-medium text-rose-600 mt-3 font-inter">
                    Needs follow-up
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
                <input type="text" placeholder="Search name, ID, or diocese…" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all shadow-xs">
            </div>

            <!-- Status Dropdown -->
            <div class="relative">
                <select class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-7 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                    <option>All statuses</option>
                    <option>Pending</option>
                    <option>In Progress</option>
                    <option>Completed</option>
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
                    <option>Jaffna</option>
                    <option>Matara</option>
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
                    <option>Western</option>
                    <option>Central</option>
                    <option>Southern</option>
                    <option>Northern</option>
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

        <!-- All Requests Table Card -->
        <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
            <h3 class="text-lg font-bold text-slate-900 font-heading">All Requests</h3>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[900px]">
                    <thead>
                        <tr class="bg-[#F7F4EE] text-slate-500 font-semibold uppercase tracking-wider text-[10px] border-b border-[#EAE5D9]">
                            <th scope="col" class="py-3 px-3 w-8 rounded-tl-lg text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 cursor-pointer">
                                    REQUEST ID
                                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </span>
                            </th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1 cursor-pointer">
                                    CHURCH & DENOMINATION
                                    <svg class="w-3 h-3 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
                                </span>
                            </th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">LOCATION</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">WORK TYPE</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">DATE SUBMITTED</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">BUDGET (LKR)</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">PRIORITY</th>
                            <th scope="col" class="py-3 px-4 whitespace-nowrap">STATUS</th>
                            <th scope="col" class="py-3 px-4 text-center rounded-tr-lg whitespace-nowrap">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/60 transition-colors group">
                            <td class="py-3.5 px-3 text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </td>
                            <td class="py-3.5 px-4 font-mono font-medium whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-blue-600 hover:underline">#REN-2026-001</a>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-001" class="font-medium text-slate-900 hover:text-blue-600 transition-colors">St. Mary's Basilica</a>
                                <div class="text-[10px] text-slate-400 mt-0.5">Roman Catholic</div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Colombo , <span class="text-slate-400">Western</span>
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium inline-block">Roof Restoration</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="text-slate-700">10 Jan 2026</div>
                                <div class="text-[10px] text-slate-400">2mo ago</div>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">LKR 4,200,000</td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">High</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5 text-slate-400">
                                    <a href="<?= BASE_URL ?>requests/REN-2026-001" class="p-1 hover:text-slate-600 rounded transition-colors" title="View"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></a>
                                    <button class="p-1 hover:text-slate-600 rounded transition-colors" title="Edit"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></button>
                                    <button class="p-1 hover:text-rose-600 rounded transition-colors" title="Delete"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/60 transition-colors group">
                            <td class="py-3.5 px-3 text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </td>
                            <td class="py-3.5 px-4 font-mono font-medium whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-002" class="text-blue-600 hover:underline">#REN-2026-002</a>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-002" class="font-medium text-slate-900 hover:text-blue-600 transition-colors">St. Anthony's Church</a>
                                <div class="text-[10px] text-slate-400 mt-0.5">Roman Catholic</div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Kandy , <span class="text-slate-400">Central</span>
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium inline-block">Interior Renovation</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="text-slate-700">14 Jan 2026</div>
                                <div class="text-[10px] text-slate-400">2mo ago</div>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">LKR 8,750,000</td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">Medium</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    In Progress
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5 text-slate-400">
                                    <a href="<?= BASE_URL ?>requests/REN-2026-002" class="p-1 hover:text-slate-600 rounded transition-colors" title="View"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></a>
                                    <button class="p-1 hover:text-slate-600 rounded transition-colors" title="Edit"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></button>
                                    <button class="p-1 hover:text-rose-600 rounded transition-colors" title="Delete"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/60 transition-colors group">
                            <td class="py-3.5 px-3 text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </td>
                            <td class="py-3.5 px-4 font-mono font-medium whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-003" class="text-blue-600 hover:underline">#REN-2026-003</a>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-003" class="font-medium text-slate-900 hover:text-blue-600 transition-colors">Holy Trinity Church</a>
                                <div class="text-[10px] text-slate-400 mt-0.5">Church of Ceylon</div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Galle , <span class="text-slate-400">Southern</span>
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium inline-block">Bell Tower Repair</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="text-slate-700">28 Dec 2025</div>
                                <div class="text-[10px] text-slate-400">3mo ago</div>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">LKR 1,500,000</td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">Low</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                    Pending
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5 text-slate-400">
                                    <a href="<?= BASE_URL ?>requests/REN-2026-003" class="p-1 hover:text-slate-600 rounded transition-colors" title="View"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></a>
                                    <button class="p-1 hover:text-slate-600 rounded transition-colors" title="Edit"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></button>
                                    <button class="p-1 hover:text-rose-600 rounded transition-colors" title="Delete"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/60 transition-colors group">
                            <td class="py-3.5 px-3 text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </td>
                            <td class="py-3.5 px-4 font-mono font-medium whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-004" class="text-blue-600 hover:underline">#REN-2026-004</a>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2026-004" class="font-medium text-slate-900 hover:text-blue-600 transition-colors">Sacred Heart Church</a>
                                <div class="text-[10px] text-slate-400 mt-0.5">Roman Catholic</div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Jaffna , <span class="text-slate-400">Northern</span>
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium inline-block">Facade Restoration</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="text-slate-700">20 Dec 2025</div>
                                <div class="text-[10px] text-slate-400">3mo ago</div>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">LKR 3,300,000</td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">High</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    In Progress
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5 text-slate-400">
                                    <a href="<?= BASE_URL ?>requests/REN-2026-004" class="p-1 hover:text-slate-600 rounded transition-colors" title="View"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></a>
                                    <button class="p-1 hover:text-slate-600 rounded transition-colors" title="Edit"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></button>
                                    <button class="p-1 hover:text-rose-600 rounded transition-colors" title="Delete"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-50/60 transition-colors group">
                            <td class="py-3.5 px-3 text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </td>
                            <td class="py-3.5 px-4 font-mono font-medium whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2025-005" class="text-blue-600 hover:underline">#REN-2025-005</a>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2025-005" class="font-medium text-slate-900 hover:text-blue-600 transition-colors">St. Peter's Church</a>
                                <div class="text-[10px] text-slate-400 mt-0.5">Anglican</div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Matara , <span class="text-slate-400">Southern</span>
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium inline-block">Electrical Upgrade</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="text-slate-700">14 Dec 2025</div>
                                <div class="text-[10px] text-slate-400">3mo ago</div>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">LKR 980,000</td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">Low</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#FEE2E2] text-[#991B1B] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#EF4444]"></span>
                                    Rejected
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5 text-slate-400">
                                    <a href="<?= BASE_URL ?>requests/REN-2025-005" class="p-1 hover:text-slate-600 rounded transition-colors" title="View"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></a>
                                    <button class="p-1 hover:text-slate-600 rounded transition-colors" title="Edit"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></button>
                                    <button class="p-1 hover:text-rose-600 rounded transition-colors" title="Delete"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-slate-50/60 transition-colors group">
                            <td class="py-3.5 px-3 text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </td>
                            <td class="py-3.5 px-4 font-mono font-medium whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2025-006" class="text-blue-600 hover:underline">#REN-2025-006</a>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2025-006" class="font-medium text-slate-900 hover:text-blue-600 transition-colors">Christ Church</a>
                                <div class="text-[10px] text-slate-400 mt-0.5">Anglican</div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Nuwara Eliya , <span class="text-slate-400">Central</span>
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium inline-block">Structural Repair</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="text-slate-700">30 Nov 2025</div>
                                <div class="text-[10px] text-slate-400">3mo ago</div>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">LKR 6,100,000</td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">High</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#2563EB]"></span>
                                    Completed
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5 text-slate-400">
                                    <a href="<?= BASE_URL ?>requests/REN-2025-006" class="p-1 hover:text-slate-600 rounded transition-colors" title="View"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></a>
                                    <button class="p-1 hover:text-slate-600 rounded transition-colors" title="Edit"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></button>
                                    <button class="p-1 hover:text-rose-600 rounded transition-colors" title="Delete"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                                </div>
                            </td>
                        </tr>

                        <!-- Row 7 -->
                        <tr class="hover:bg-slate-50/60 transition-colors group">
                            <td class="py-3.5 px-3 text-center">
                                <input type="checkbox" class="rounded border-slate-300 text-primary focus:ring-primary/20">
                            </td>
                            <td class="py-3.5 px-4 font-mono font-medium whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2025-007" class="text-blue-600 hover:underline">#REN-2025-007</a>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <a href="<?= BASE_URL ?>requests/REN-2025-007" class="font-medium text-slate-900 hover:text-blue-600 transition-colors">St. Sebastian's Church</a>
                                <div class="text-[10px] text-slate-400 mt-0.5">Roman Catholic</div>
                            </td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">
                                <span class="inline-flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Negombo , <span class="text-slate-400">Western</span>
                                </span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-slate-700 text-[11px] px-2.5 py-1 rounded-md font-medium inline-block">Stained Glass Restoration</span>
                            </td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <div class="text-slate-700">22 Nov 2025</div>
                                <div class="text-[10px] text-slate-400">4mo ago</div>
                            </td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900 whitespace-nowrap">LKR 2,450,000</td>
                            <td class="py-3.5 px-4 text-slate-600 whitespace-nowrap">Medium</td>
                            <td class="py-3.5 px-4 whitespace-nowrap">
                                <span class="bg-[#F3E8FF] text-[#6B21A8] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                                    In Review
                                </span>
                            </td>
                            <td class="py-3.5 px-4 text-center whitespace-nowrap">
                                <div class="flex items-center justify-center gap-1.5 text-slate-400">
                                    <a href="<?= BASE_URL ?>requests/REN-2025-007" class="p-1 hover:text-slate-600 rounded transition-colors" title="View"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg></a>
                                    <button class="p-1 hover:text-slate-600 rounded transition-colors" title="Edit"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg></button>
                                    <button class="p-1 hover:text-rose-600 rounded transition-colors" title="Delete"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg></button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            
            <!-- Pagination Footer -->
            <div class="flex items-center justify-end pt-4 border-t border-slate-100">
                <nav class="flex items-center gap-1" aria-label="Pagination">
                    <button class="px-2.5 py-1.5 rounded-md border border-slate-200 text-slate-400 hover:bg-slate-50 text-xs font-medium">‹</button>
                    <button class="px-3 py-1.5 rounded-md bg-secondary text-white text-xs font-medium border border-secondary">1</button>
                    <button class="px-3 py-1.5 rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-medium">2</button>
                    <button class="px-2.5 py-1.5 rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-medium">›</button>
                </nav>
            </div>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
