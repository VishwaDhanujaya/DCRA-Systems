<?php
/**
 * Dashboard Overview - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "Dashboard Overview";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Title & New Application Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Dashboard Overview</h2>
            </div>
            <a href="<?= BASE_URL ?>applications/new" class="inline-flex items-center justify-center gap-2 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold px-4 py-2.5 rounded-xl shadow-2xs transition-all font-heading self-start sm:self-auto">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>New Application</span>
            </a>
        </div>

        <!-- Top 4 Summary Metric Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Card 1: Total Applications -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Total Applications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">128</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    FY 2026 &nbsp;·&nbsp; <span class="font-semibold text-slate-700">47 this month</span>
                </p>
            </div>

            <!-- Card 2: Pending Review -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Pending Review</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">14</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    Avg wait <span class="font-semibold text-slate-700">8.3 days</span>
                </p>
            </div>

            <!-- Card 3: Approved -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Approved</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">37</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    Approval rate <span class="font-semibold text-slate-700">77.8%</span>
                </p>
            </div>

            <!-- Card 4: Rejected -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Rejected</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">77</h3>
                </div>
                <p class="text-xs font-medium text-slate-500 mt-3 font-inter">
                    Rejection rate <span class="font-semibold text-slate-700">5.6%</span>
                </p>
            </div>

        </div>

        <!-- 2-Column Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- LEFT MAIN COLUMN (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- 1. Approval Workflow Card -->
                <div class="bg-white rounded-2xl p-5 sm:p-6 border border-slate-200/90 shadow-2xs">
                    <h3 class="text-base font-bold text-slate-900 font-heading mb-6">Approval Workflow</h3>
                    
                    <!-- Horizontal Stepper Bar -->
                    <div class="relative px-2 sm:px-6 pb-2">
                        
                        <!-- Connecting Line from center of first circle to center of last circle -->
                        <div class="absolute top-[15px] left-[48px] right-[48px] h-[2.5px] bg-[#217254] z-0"></div>

                        <!-- 6 Steps Container -->
                        <div class="relative z-10 flex items-start justify-between">
                            
                            <!-- Step 1 -->
                            <div class="flex flex-col items-center text-center w-24">
                                <div class="w-8 h-8 rounded-full bg-[#217254] text-white flex items-center justify-center shadow-2xs">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-500 font-inter mt-3 leading-snug">Application<br>Submitted</span>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex flex-col items-center text-center w-24">
                                <div class="w-8 h-8 rounded-full bg-[#217254] text-white flex items-center justify-center shadow-2xs">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-500 font-inter mt-3 leading-snug">Dept.<br>Review</span>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex flex-col items-center text-center w-24">
                                <div class="w-8 h-8 rounded-full bg-[#217254] text-white flex items-center justify-center shadow-2xs">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-500 font-inter mt-3 leading-snug">Buddhasasana<br>Ministry</span>
                            </div>

                            <!-- Step 4 -->
                            <div class="flex flex-col items-center text-center w-24">
                                <div class="w-8 h-8 rounded-full bg-[#217254] text-white flex items-center justify-center shadow-2xs">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-500 font-inter mt-3 leading-snug">MOD<br>Clearance</span>
                            </div>

                            <!-- Step 5 -->
                            <div class="flex flex-col items-center text-center w-24">
                                <div class="w-8 h-8 rounded-full bg-[#217254] text-white flex items-center justify-center shadow-2xs">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-500 font-inter mt-3 leading-snug">Final<br>Approval</span>
                            </div>

                            <!-- Step 6 -->
                            <div class="flex flex-col items-center text-center w-24">
                                <div class="w-8 h-8 rounded-full bg-[#217254] text-white flex items-center justify-center shadow-2xs">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <span class="text-xs font-medium text-slate-500 font-inter mt-3 leading-snug">Certificate<br>Issued</span>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- 2. Recent Applications Card -->
                <div class="bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden">
                    <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                        <h3 class="text-base font-bold text-slate-900 font-heading">Recent Applications</h3>
                        <button class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-50 hover:bg-slate-100 text-slate-700 text-xs font-medium rounded-lg border border-slate-200/80 transition-colors font-inter">
                            <span>Filter</span>
                            <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs font-inter border-collapse min-w-[700px]">
                            <thead>
                                <tr class="bg-[#F5ECE2]/80 border-b border-slate-200/70 text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider">
                                    <th scope="col" class="py-3.5 px-5 font-bold">APP ID</th>
                                    <th scope="col" class="py-3.5 px-5 font-bold">CHURCH NAME</th>
                                    <th scope="col" class="py-3.5 px-5 font-bold">TYPE</th>
                                    <th scope="col" class="py-3.5 px-5 font-bold">FILED</th>
                                    <th scope="col" class="py-3.5 px-5 font-bold">STATUS</th>
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
                                    <td class="py-3.5 px-5 text-slate-500">14 Mar 2026</td>
                                    <td class="py-3.5 px-5">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#FEF3C7] text-[#92400E]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                            Dept Review
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-5 text-right">
                                        <a href="<?= BASE_URL ?>applications/VLS-2634" class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 text-xs font-medium rounded-lg transition-colors">
                                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            <span>Process</span>
                                        </a>
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
                                    <td class="py-3.5 px-5 text-slate-500">08 Mar 2026</td>
                                    <td class="py-3.5 px-5">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DBEAFE] text-[#1E40AF]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#2563EB]"></span>
                                            Buddhasasana
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-5 text-right">
                                        <a href="<?= BASE_URL ?>applications/VLS-2631" class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 text-xs font-medium rounded-lg transition-colors">
                                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            <span>Forward</span>
                                        </a>
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
                                    <td class="py-3.5 px-5 text-slate-500">02 Mar 2026</td>
                                    <td class="py-3.5 px-5">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#F3E8FF] text-[#6B21A8]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                                            MOD Clearance
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-5 text-right">
                                        <a href="<?= BASE_URL ?>applications/VLS-2629" class="p-1.5 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                        </a>
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
                                    <td class="py-3.5 px-5 text-slate-500">25 Feb 2026</td>
                                    <td class="py-3.5 px-5">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#F3E8FF] text-[#6B21A8]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#9333EA]"></span>
                                            MOD Clearance
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-5 text-right">
                                        <a href="<?= BASE_URL ?>applications/VLS-2628" class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 text-xs font-medium rounded-lg transition-colors">
                                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            <span>Certificate</span>
                                        </a>
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
                                    <td class="py-3.5 px-5 text-slate-500">20 Feb 2026</td>
                                    <td class="py-3.5 px-5">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DCFCE7] text-[#15803D]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                            Approved
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-5 text-right">
                                        <a href="<?= BASE_URL ?>applications/VLS-2625" class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 text-xs font-medium rounded-lg transition-colors">
                                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            <span>Certificate</span>
                                        </a>
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
                                    <td class="py-3.5 px-5 text-slate-500">13 Feb 2026</td>
                                    <td class="py-3.5 px-5">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-[#DCFCE7] text-[#15803D]">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                            Approved
                                        </span>
                                    </td>
                                    <td class="py-3.5 px-5 text-right">
                                        <a href="<?= BASE_URL ?>applications/VLS-2619" class="inline-flex items-center gap-1.5 px-3 py-1 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 text-xs font-medium rounded-lg transition-colors">
                                            <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                            <span>Reopen</span>
                                        </a>
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

                <!-- 3. Sub-grid for Activity Log & By District (Inside Left Column) -->
                <div class="grid grid-cols-1 md:grid-cols-5 gap-6 items-start">
                    
                    <!-- Activity Log Card (Spans 2 cols of 5) -->
                    <div class="md:col-span-2 bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-base font-bold text-slate-900 font-heading">Activity Log</h3>
                            <a href="<?= BASE_URL ?>reports" class="text-xs font-semibold text-slate-500 hover:text-slate-900 transition-colors font-inter flex items-center gap-1">
                                <span>Full Log</span>
                                <span>→</span>
                            </a>
                        </div>

                        <div class="space-y-3 text-xs font-inter">
                            
                            <!-- Log Item 1 -->
                            <div class="p-3.5 bg-white rounded-xl border border-slate-200/90 shadow-2xs">
                                <p class="font-semibold text-slate-800 leading-snug">Certificate issued for All Saints Cathedral (CRA-2025-0046)</p>
                                <span class="text-[11px] text-slate-400 mt-1 block">Today, 10:05 AM · S. Kumara</span>
                            </div>

                            <!-- Log Item 2 -->
                            <div class="p-3.5 bg-white rounded-xl border border-slate-200/90 shadow-2xs">
                                <p class="font-semibold text-slate-800 leading-snug">Application forwarded to MOD — CRA-2025-0049</p>
                                <span class="text-[11px] text-slate-400 mt-1 block">Today, 09:20 AM · R. Perera</span>
                            </div>

                            <!-- Log Item 3 -->
                            <div class="p-3.5 bg-white rounded-xl border border-slate-200/90 shadow-2xs">
                                <p class="font-semibold text-slate-800 leading-snug">Status updated — CRA-2025-0050 sent to Buddhasasana</p>
                                <span class="text-[11px] text-slate-400 mt-1 block">Yesterday, 4:00 PM · S. Kumara</span>
                            </div>

                            <!-- Log Item 4 -->
                            <div class="p-3.5 bg-white rounded-xl border border-slate-200/90 shadow-2xs">
                                <p class="font-semibold text-slate-800 leading-snug">Application rejected — CRA-2025-0041 (docs incomplete)</p>
                                <span class="text-[11px] text-slate-400 mt-1 block">Yesterday, 2:10 PM · D. Jayawardena</span>
                            </div>

                        </div>
                    </div>

                    <!-- By District Card (Spans 3 cols of 5) -->
                    <div class="md:col-span-3 bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                        <h3 class="text-base font-bold text-slate-900 font-heading">By District</h3>

                        <div class="divide-y divide-slate-100 text-xs font-inter">
                            <div class="py-2.5 flex items-center justify-between text-slate-700">
                                <span class="font-medium">Colombo</span>
                                <span class="font-bold text-slate-900 font-heading text-sm">89</span>
                            </div>

                            <div class="py-2.5 flex items-center justify-between text-slate-700">
                                <span class="font-medium">Gampaha</span>
                                <span class="font-bold text-slate-900 font-heading text-sm">59</span>
                            </div>

                            <div class="py-2.5 flex items-center justify-between text-slate-700">
                                <span class="font-medium">Kandy</span>
                                <span class="font-bold text-slate-900 font-heading text-sm">78</span>
                            </div>

                            <div class="py-2.5 flex items-center justify-between text-slate-700">
                                <span class="font-medium">Negombo</span>
                                <span class="font-bold text-slate-900 font-heading text-sm">34</span>
                            </div>

                            <div class="py-2.5 flex items-center justify-between text-slate-700">
                                <span class="font-medium">Other Districts</span>
                                <span class="font-bold text-slate-900 font-heading text-sm">75</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT SIDEBAR COLUMN (Spans 1 col on lg) -->
            <div class="space-y-6">
                
                <!-- 1. Ministry Queue Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <h3 class="text-base font-bold text-slate-900 font-heading">Ministry Queue</h3>
                    
                    <div class="space-y-3.5 text-xs font-inter">
                        
                        <!-- Item 1 -->
                        <div>
                            <div class="flex items-center justify-between text-slate-700 font-medium mb-1">
                                <span>Dept. Review</span>
                                <span class="font-bold text-slate-900 font-heading">12 pending</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-[#13273F] h-full rounded-full" style="width: 75%"></div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div>
                            <div class="flex items-center justify-between text-slate-700 font-medium mb-1">
                                <span>Buddhasasana Ministry</span>
                                <span class="font-bold text-slate-900 font-heading">08 pending</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-[#13273F] h-full rounded-full" style="width: 50%"></div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div>
                            <div class="flex items-center justify-between text-slate-700 font-medium mb-1">
                                <span>MOD Clearance</span>
                                <span class="font-bold text-slate-900 font-heading">05 pending</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-[#13273F] h-full rounded-full" style="width: 30%"></div>
                            </div>
                        </div>

                        <!-- Item 4 -->
                        <div>
                            <div class="flex items-center justify-between text-slate-700 font-medium mb-1">
                                <span>Final Approval</span>
                                <span class="font-bold text-slate-900 font-heading">07 pending</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-[#13273F] h-full rounded-full" style="width: 42%"></div>
                            </div>
                        </div>

                        <!-- Item 5 -->
                        <div>
                            <div class="flex items-center justify-between text-slate-700 font-medium mb-1">
                                <span>Certificates Awaiting</span>
                                <span class="font-bold text-slate-900 font-heading">15 ready</span>
                            </div>
                            <div class="w-full bg-slate-100 h-1.5 rounded-full overflow-hidden">
                                <div class="bg-[#13273F] h-full rounded-full" style="width: 88%"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 2. Notifications Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <h3 class="text-base font-bold text-slate-900 font-heading">Notifications</h3>

                    <div class="divide-y divide-slate-100 text-xs font-inter space-y-3.5 pt-1">
                        
                        <!-- Notification 1 -->
                        <div class="pt-2">
                            <p class="font-semibold text-slate-800 leading-snug">CRA-2025-0046 has been approved. Certificate generation is ready.</p>
                            <span class="text-[11px] text-slate-400 mt-1 block">Today, 09:41 AM</span>
                        </div>

                        <!-- Notification 2 -->
                        <div class="pt-3">
                            <p class="font-semibold text-slate-800 leading-snug">5 applications at MOD clearance stage have exceeded the 14-day SLA.</p>
                            <span class="text-[11px] text-slate-400 mt-1 block">Today, 08:15 AM</span>
                        </div>

                        <!-- Notification 3 -->
                        <div class="pt-3">
                            <p class="font-semibold text-slate-800 leading-snug">SMS notification sent to Holy Redeemer Church — application received.</p>
                            <span class="text-[11px] text-slate-400 mt-1 block">Today, 07:32 AM</span>
                        </div>

                        <!-- Notification 4 -->
                        <div class="pt-3">
                            <p class="font-semibold text-slate-800 leading-snug">New application CRA-2025-0051 submitted and awaiting department review.</p>
                            <span class="text-[11px] text-slate-400 mt-1 block">Yesterday, 4:30 PM</span>
                        </div>

                    </div>

                    <div class="pt-4 text-center border-t border-slate-100">
                        <a href="<?= BASE_URL ?>notifications" class="inline-flex items-center gap-1 text-xs font-semibold text-[#13273F] hover:text-[#0D1C2E] transition-colors font-inter">
                            <span>View All Notifications</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
