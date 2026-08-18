<?php
/**
 * Dashboard Overview - Responsive & Impeccable UI
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */

$page_title = "Dashboard Overview";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Dashboard Overview</h2>
            </div>
            <a href="#" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 transition-all self-start sm:self-auto min-h-[40px] whitespace-nowrap">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                New Application
            </a>
        </div>

        <!-- 4 Top Stat Cards Row with Crimson Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat Card 1: Total Applications -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Total Applications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">128</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-4 font-inter flex items-center gap-1 whitespace-nowrap">
                    <span>↑</span> +38 this month vs last month
                </p>
            </div>

            <!-- Stat Card 2: Pending Review -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Pending Review</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">14</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-4 font-inter whitespace-nowrap">
                    12 awaiting MOD · 5 at Ministry
                </p>
            </div>

            <!-- Stat Card 3: Approved (YTD) -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Approved (YTD)</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">37</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-4 font-inter whitespace-nowrap">
                    31 this month · avg 4.2 days
                </p>
            </div>

            <!-- Stat Card 4: Letters Issued -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Letters Issued</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">77</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-4 font-inter whitespace-nowrap">
                    8 ready to issue today
                </p>
            </div>

        </div>

        <!-- 5 Stage Breakdown Cards Row (Responsive Grid) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 sm:gap-4">
            
            <!-- Stage 1: Department -->
            <div class="bg-white rounded-xl p-4 border border-slate-200/80 shadow-xs text-center">
                <h4 class="text-2xl font-bold text-slate-900 font-heading">47</h4>
                <p class="text-xs font-bold text-slate-800 font-heading mt-1 whitespace-nowrap">Department</p>
                <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Initial Review</p>
            </div>

            <!-- Stage 2: Buddhasasana -->
            <div class="bg-white rounded-xl p-4 border border-slate-200/80 shadow-xs text-center">
                <h4 class="text-2xl font-bold text-slate-900 font-heading">23</h4>
                <p class="text-xs font-bold text-slate-800 font-heading mt-1 whitespace-nowrap">Buddhasasana</p>
                <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Ministry Review</p>
            </div>

            <!-- Stage 3: MOD -->
            <div class="bg-white rounded-xl p-4 border border-slate-200/80 shadow-xs text-center">
                <h4 class="text-2xl font-bold text-slate-900 font-heading">12</h4>
                <p class="text-xs font-bold text-slate-800 font-heading mt-1 whitespace-nowrap">MOD</p>
                <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Security Clearance</p>
            </div>

            <!-- Stage 4: Ministry -->
            <div class="bg-white rounded-xl p-4 border border-slate-200/80 shadow-xs text-center">
                <h4 class="text-2xl font-bold text-slate-900 font-heading">05</h4>
                <p class="text-xs font-bold text-slate-800 font-heading mt-1 whitespace-nowrap">Ministry</p>
                <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Final Approval</p>
            </div>

            <!-- Stage 5: Issuance -->
            <div class="bg-white rounded-xl p-4 border border-slate-200/80 shadow-xs text-center col-span-2 sm:col-span-1">
                <h4 class="text-2xl font-bold text-slate-900 font-heading">08</h4>
                <p class="text-xs font-bold text-slate-800 font-heading mt-1 whitespace-nowrap">Issuance</p>
                <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Letter Ready</p>
            </div>

        </div>

        <!-- Main Lower Section: Recent Applications (Left ~70%) & Process/Activity Stack (Right ~30%) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- Left Column: Recent Applications Card (Spans 2 cols) -->
            <div class="lg:col-span-2 bg-white rounded-xl p-4 sm:p-6 border border-slate-200/80 shadow-xs space-y-5">
                
                <div class="flex items-center justify-between flex-wrap gap-2">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading whitespace-nowrap">Recent Applications</h3>
                    <div class="relative">
                        <select class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 pr-8 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                            <option>Visa Type</option>
                            <option>Entry Visa</option>
                            <option>Resident Visa</option>
                            <option>Visa Extension</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">
                            ▾
                        </div>
                    </div>
                </div>

                <!-- Applications Data Table (Responsive Scroll) -->
                <div class="overflow-x-auto -mx-4 sm:mx-0 px-4 sm:px-0">
                    <table class="w-full text-left text-xs font-inter border-collapse min-w-[700px]">
                        <thead>
                            <tr class="bg-[#F7F4EE] text-slate-500 font-semibold uppercase text-[10px] tracking-wider border-b border-slate-200/80">
                                <th scope="col" class="py-3 px-3.5 whitespace-nowrap">App ID</th>
                                <th scope="col" class="py-3 px-3.5 whitespace-nowrap">Applicant</th>
                                <th scope="col" class="py-3 px-3.5 whitespace-nowrap">Visa Type</th>
                                <th scope="col" class="py-3 px-3.5 whitespace-nowrap">Stage</th>
                                <th scope="col" class="py-3 px-3.5 whitespace-nowrap">Status</th>
                                <th scope="col" class="py-3 px-3.5 whitespace-nowrap">Submitted</th>
                                <th scope="col" class="py-3 px-3.5 text-center whitespace-nowrap">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-3.5 font-mono text-slate-500 whitespace-nowrap">VLS-2634</td>
                                <td class="py-3.5 px-3.5">
                                    <span class="font-semibold text-slate-900 block whitespace-nowrap">Fr. Anthony Silva</span>
                                    <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Anthony's Church • Colombo Diocese</span>
                                </td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#E0F2FE] text-[#0284C7] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-block whitespace-nowrap">Entry Visa</span>
                                </td>
                                <td class="py-3.5 px-3.5 font-medium text-slate-700 whitespace-nowrap">Step 3/5</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#E0F2FE] text-[#0369A1] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span>
                                        MOD Review
                                    </span>
                                </td>
                                <td class="py-3.5 px-3.5 text-slate-400 whitespace-nowrap">14 Mar 2026</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <div class="flex items-center justify-center space-x-1">
                                        <button type="button" title="View Details" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </button>
                                        <a href="<?= BASE_URL ?>application-details?id=VLS-2634" title="Application Details" class="p-1.5 text-slate-400 hover:text-primary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        </a>
                                        <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-3.5 font-mono text-slate-500 whitespace-nowrap">VLS-2631</td>
                                <td class="py-3.5 px-3.5">
                                    <span class="font-semibold text-slate-900 block whitespace-nowrap">Sr. Mary Colette</span>
                                    <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Mary's Cathedral • Kandy Diocese</span>
                                </td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#FEF3C7] text-[#D97706] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-block whitespace-nowrap">Resident Visa</span>
                                </td>
                                <td class="py-3.5 px-3.5 font-medium text-slate-700 whitespace-nowrap">Step 5/5</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#DCFCE7] text-[#15803D] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                        Ready to Issue
                                    </span>
                                </td>
                                <td class="py-3.5 px-3.5 text-slate-400 whitespace-nowrap">08 Mar 2026</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <div class="flex items-center justify-center space-x-1">
                                        <button type="button" title="View Details" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </button>
                                        <a href="<?= BASE_URL ?>application-details?id=VLS-2634" title="Application Details" class="p-1.5 text-slate-400 hover:text-primary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        </a>
                                        <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-3.5 font-mono text-slate-500 whitespace-nowrap">VLS-2629</td>
                                <td class="py-3.5 px-3.5">
                                    <span class="font-semibold text-slate-900 block whitespace-nowrap">Fr. James Perera</span>
                                    <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">Holy Trinity Church • Galle Diocese</span>
                                </td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#CCFBF1] text-[#0F766E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-block whitespace-nowrap">Visa Extension</span>
                                </td>
                                <td class="py-3.5 px-3.5 font-medium text-slate-700 whitespace-nowrap">Step 2/5</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#E0F2FE] text-[#0369A1] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span>
                                        Buddhasasana
                                    </span>
                                </td>
                                <td class="py-3.5 px-3.5 text-slate-400 whitespace-nowrap">02 Mar 2026</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <div class="flex items-center justify-center space-x-1">
                                        <button type="button" title="View Details" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </button>
                                        <a href="<?= BASE_URL ?>application-details?id=VLS-2634" title="Application Details" class="p-1.5 text-slate-400 hover:text-primary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        </a>
                                        <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-3.5 font-mono text-slate-500 whitespace-nowrap">VLS-2628</td>
                                <td class="py-3.5 px-3.5">
                                    <span class="font-semibold text-slate-900 block whitespace-nowrap">Sr. Agnes Fernando</span>
                                    <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">Sacred Heart Church • Jaffna Diocese</span>
                                </td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#E0F2FE] text-[#0284C7] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-block whitespace-nowrap">Entry Visa</span>
                                </td>
                                <td class="py-3.5 px-3.5 font-medium text-slate-700 whitespace-nowrap">Step 4/5</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#FEF3C7] text-[#D97706] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                        Ministry Pending
                                    </span>
                                </td>
                                <td class="py-3.5 px-3.5 text-slate-400 whitespace-nowrap">25 Feb 2026</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <div class="flex items-center justify-center space-x-1">
                                        <button type="button" title="View Details" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </button>
                                        <a href="<?= BASE_URL ?>application-details?id=VLS-2634" title="Application Details" class="p-1.5 text-slate-400 hover:text-primary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        </a>
                                        <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-3.5 font-mono text-slate-500 whitespace-nowrap">VLS-2625</td>
                                <td class="py-3.5 px-3.5">
                                    <span class="font-semibold text-slate-900 block whitespace-nowrap">Fr. Anthony Silva</span>
                                    <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Peter's Church • Matara Diocese</span>
                                </td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#FEF3C7] text-[#D97706] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-block whitespace-nowrap">Resident Visa</span>
                                </td>
                                <td class="py-3.5 px-3.5 font-medium text-slate-700 whitespace-nowrap">Step 1/5</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#FEF3C7] text-[#B45309] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#B45309]"></span>
                                        Dept Review
                                    </span>
                                </td>
                                <td class="py-3.5 px-3.5 text-slate-400 whitespace-nowrap">20 Feb 2026</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <div class="flex items-center justify-center space-x-1">
                                        <button type="button" title="View Details" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </button>
                                        <a href="<?= BASE_URL ?>application-details?id=VLS-2634" title="Application Details" class="p-1.5 text-slate-400 hover:text-primary border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer inline-flex items-center">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        </a>
                                        <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3.5 px-3.5 font-mono text-slate-500 whitespace-nowrap">VLS-2619</td>
                                <td class="py-3.5 px-3.5">
                                    <span class="font-semibold text-slate-900 block whitespace-nowrap">Sr. Mary Colette</span>
                                    <span class="text-[11px] text-slate-400 font-normal block whitespace-nowrap">St. Anthony's Church • Colombo Diocese</span>
                                </td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#CCFBF1] text-[#0F766E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-block whitespace-nowrap">Visa Extension</span>
                                </td>
                                <td class="py-3.5 px-3.5 font-medium text-slate-700 whitespace-nowrap">Step 5/5</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <span class="bg-[#DCFCE7] text-[#15803D] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                        Letter Issued
                                    </span>
                                </td>
                                <td class="py-3.5 px-3.5 text-slate-400 whitespace-nowrap">13 Feb 2026</td>
                                <td class="py-3.5 px-3.5 whitespace-nowrap">
                                    <div class="flex items-center justify-center space-x-1">
                                        <button type="button" title="View Details" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </button>
                                        <button type="button" title="View Documents" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                        </button>
                                        <button type="button" title="Send Email" class="p-1.5 text-slate-400 hover:text-slate-600 border border-slate-200 rounded hover:bg-slate-50 transition-colors cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- Table Pagination Footer -->
                <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-3 border-t border-slate-100 text-xs text-slate-500">
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

            <!-- Right Column Stacked Cards (Approval Process & Recent Activity) -->
            <div class="space-y-6">
                
                <!-- Approval Process Stepper Card -->
                <div class="bg-white rounded-xl p-4 sm:p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading whitespace-nowrap">Approval Process</h3>

                    <div class="relative pl-1">
                        <!-- Stepper Vertical Connecting Line -->
                        <div class="absolute left-5 top-4 bottom-4 w-0.5 bg-slate-200 z-0"></div>

                        <div class="space-y-6 relative z-10">
                            <!-- Step 1 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-primary text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-xs">
                                    1
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Department Review</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Cleared by D. Perera</p>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-primary text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-xs">
                                    2
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Buddhasasana Ministry</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Cleared 22 Mar</p>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-primary text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-xs">
                                    3
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">MOD Clearance</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Security review ongoing</p>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-primary text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-xs">
                                    4
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Ministry Final</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Awaiting MOD</p>
                                </div>
                            </div>

                            <!-- Step 5 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-primary text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-xs">
                                    5
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Letter Issuance</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Recommendation letter</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Card -->
                <div class="bg-white rounded-xl p-4 sm:p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading whitespace-nowrap">Recent Activity</h3>
                        <a href="#" class="text-xs font-medium text-slate-500 hover:text-primary transition-colors font-inter flex items-center gap-0.5 whitespace-nowrap">
                            See all →
                        </a>
                    </div>

                    <div class="divide-y divide-slate-100 font-inter text-xs space-y-0">
                        <!-- Activity 1 -->
                        <div class="py-3 first:pt-0">
                            <p class="text-slate-800 leading-snug">
                                <strong class="font-medium text-slate-900">VLS-2631</strong> — Letter issued to Fr. Anthony Silva. SMS sent to +86-131-XXXX.
                            </p>
                            <span class="text-[11px] text-slate-400 mt-1 block whitespace-nowrap">2 hours ago</span>
                        </div>

                        <!-- Activity 2 -->
                        <div class="py-3">
                            <p class="text-slate-800 leading-snug">
                                <strong class="font-medium text-slate-900">VLS-2634</strong> — MOD review request dispatched by system.
                            </p>
                            <span class="text-[11px] text-slate-400 mt-1 block whitespace-nowrap">5 hours ago</span>
                        </div>

                        <!-- Activity 3 -->
                        <div class="py-3">
                            <p class="text-slate-800 leading-snug">
                                <strong class="font-medium text-slate-900">VLS-2619</strong> — Final approval received. Letter ready.
                            </p>
                            <span class="text-[11px] text-slate-400 mt-1 block whitespace-nowrap">Yesterday at 3:22 PM</span>
                        </div>

                        <!-- Activity 4 -->
                        <div class="py-3 last:pb-0">
                            <p class="text-slate-800 leading-snug">
                                Sync completed. 38 new records imported.
                            </p>
                            <span class="text-[11px] text-slate-400 mt-1 block whitespace-nowrap">Yesterday at 10:05 AM</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/application-modal.php';
require_once __DIR__ . '/includes/footer.php';
?>
