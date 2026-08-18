<?php
/**
 * Reports Page
 * Department of Christian Religious Affairs
 * Online Bungalow Booking System
 */

$page_title = "Reports Overview";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#F8FAFC]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Header Actions -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-medium text-slate-400 font-inter">Home / Reports</span>
                <h2 class="text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">System Reports</h2>
            </div>
            <div class="flex items-center gap-3">
                <button class="bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 text-xs font-semibold px-4 py-2.5 rounded-lg shadow-2xs transition-colors flex items-center gap-1.5 font-inter cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    Export All Logs
                </button>
                <button class="bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold px-4 py-2.5 rounded-lg shadow-sm transition-colors flex items-center gap-1.5 font-inter cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    New Booking
                </button>
            </div>
        </div>

        <!-- Report Generation Quick Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            
            <!-- Card 1: Revenue Reports -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[160px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#4E0000]"></div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-400 font-heading uppercase tracking-wide">Financials</span>
                        <div class="p-1.5 rounded-lg bg-red-50 text-[#4E0000]">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                    </div>
                    <h4 class="text-sm font-bold text-slate-800 font-heading">Revenue Report</h4>
                    <p class="text-[11px] text-slate-400 font-inter leading-relaxed">Analyze bookings income, deposit status, and total revenue logs.</p>
                </div>
                <button class="mt-4 w-full text-center bg-[#4E0000] hover:bg-[#3A0000] text-white text-xs font-semibold py-1.5 rounded-lg transition-colors cursor-pointer font-inter">
                    Generate
                </button>
            </div>

            <!-- Card 2: Occupancy Summaries -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[160px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#13273F]"></div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-400 font-heading uppercase tracking-wide">Resort Stats</span>
                        <div class="p-1.5 rounded-lg bg-blue-50 text-[#13273F]">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        </div>
                    </div>
                    <h4 class="text-sm font-bold text-slate-800 font-heading">Resort Occupancy</h4>
                    <p class="text-[11px] text-slate-400 font-inter leading-relaxed">View bungalow utilization status, active rooms, and popular periods.</p>
                </div>
                <button class="mt-4 w-full text-center bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold py-1.5 rounded-lg transition-colors cursor-pointer font-inter">
                    Generate
                </button>
            </div>

            <!-- Card 3: Member Registrations -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[160px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#D4AF37]"></div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-400 font-heading uppercase tracking-wide">Members</span>
                        <div class="p-1.5 rounded-lg bg-amber-50 text-[#D4AF37]">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                    </div>
                    <h4 class="text-sm font-bold text-slate-800 font-heading">Member Sign-ups</h4>
                    <p class="text-[11px] text-slate-400 font-inter leading-relaxed">Track new member registries, active dioceses, and church counts.</p>
                </div>
                <button class="mt-4 w-full text-center bg-[#D4AF37] hover:bg-[#B8860B] text-white text-xs font-semibold py-1.5 rounded-lg transition-colors cursor-pointer font-inter">
                    Generate
                </button>
            </div>

            <!-- Card 4: Audit Logs -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[160px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#4E0000]"></div>
                <div class="space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold text-slate-400 font-heading uppercase tracking-wide">Security</span>
                        <div class="p-1.5 rounded-lg bg-red-50 text-[#4E0000]">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                    </div>
                    <h4 class="text-sm font-bold text-slate-800 font-heading">Booking Audit Log</h4>
                    <p class="text-[11px] text-slate-400 font-inter leading-relaxed">Review staff modification logs, approvals actions, and system updates.</p>
                </div>
                <button class="mt-4 w-full text-center bg-[#4E0000] hover:bg-[#3A0000] text-white text-xs font-semibold py-1.5 rounded-lg transition-colors cursor-pointer font-inter">
                    Generate
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
                <input type="text" placeholder="Search report name, generated by, or user..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-300 focus:border-slate-300 transition-all h-9">
            </div>
            
            <!-- Dropdowns & Reset Filter -->
            <div class="flex flex-wrap items-center gap-3">
                <div class="relative">
                    <select class="appearance-none bg-[#F8FAFC] border border-slate-200 rounded-lg pl-3 pr-8 py-1.5 text-xs font-inter text-slate-600 focus:outline-none cursor-pointer h-9 min-w-[130px]">
                        <option>All categories</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="appearance-none bg-[#F8FAFC] border border-slate-200 rounded-lg pl-3 pr-8 py-1.5 text-xs font-inter text-slate-600 focus:outline-none cursor-pointer h-9 min-w-[120px]">
                        <option>All periods</option>
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

        <!-- Generated Reports Card -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs space-y-6">
            <h3 class="text-lg font-bold text-slate-900 font-heading">Recent Generated Reports</h3>

            <div class="overflow-x-auto -mx-6 sm:mx-0">
                <div class="inline-block min-w-full align-middle">
                    <table class="min-w-full text-left text-xs font-inter border-collapse">
                        <thead>
                            <tr class="bg-[#F5F2EB] text-[#8C8473] font-semibold border-b border-slate-200/40">
                                <th scope="col" class="py-3 px-4 rounded-l-lg tracking-wider text-[10px]">REPORT NAME</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">TYPE</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">RANGE</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">GENERATED BY</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">FILE SIZE</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">STATUS</th>
                                <th scope="col" class="py-3 px-4 text-center rounded-r-lg tracking-wider text-[10px]">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-bold text-slate-800">Bungalow Revenue Report - Q1</td>
                                <td class="py-4 px-4">
                                    <span class="bg-red-50 text-red-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase tracking-wider border border-red-200">PDF</span>
                                </td>
                                <td class="py-4 px-4 text-slate-500">01 Jan 2026 - 31 Mar 2026</td>
                                <td class="py-4 px-4 text-slate-500">Admin User</td>
                                <td class="py-4 px-4 text-slate-500 font-mono">1.8 MB</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Completed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="Download report">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                        </button>
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="More actions">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-bold text-slate-800">Thalawila Resort Occupancy Details</td>
                                <td class="py-4 px-4">
                                    <span class="bg-green-50 text-green-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase tracking-wider border border-green-200">XLSX</span>
                                </td>
                                <td class="py-4 px-4 text-slate-500">01 Feb 2026 - 28 Feb 2026</td>
                                <td class="py-4 px-4 text-slate-500">Admin User</td>
                                <td class="py-4 px-4 text-slate-500 font-mono">420 KB</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Completed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="Download report">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                        </button>
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="More actions">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-bold text-slate-800">Diocesan Member Distribution Log</td>
                                <td class="py-4 px-4">
                                    <span class="bg-red-50 text-red-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase tracking-wider border border-red-200">PDF</span>
                                </td>
                                <td class="py-4 px-4 text-slate-500">All Dates</td>
                                <td class="py-4 px-4 text-slate-500">Admin User</td>
                                <td class="py-4 px-4 text-slate-500 font-mono">1.2 MB</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Processing</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 opacity-50 cursor-not-allowed text-slate-300" disabled aria-label="Download report">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                        </button>
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="More actions">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-bold text-slate-800">Detailed Booking Modifications History</td>
                                <td class="py-4 px-4">
                                    <span class="bg-blue-50 text-blue-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase tracking-wider border border-blue-200">CSV</span>
                                </td>
                                <td class="py-4 px-4 text-slate-500">01 Jan 2026 - 15 Mar 2026</td>
                                <td class="py-4 px-4 text-slate-500">Admin User</td>
                                <td class="py-4 px-4 text-slate-500 font-mono">180 KB</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Completed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="Download report">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                        </button>
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="More actions">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-bold text-slate-800">Monthly Reservations Trend Summary</td>
                                <td class="py-4 px-4">
                                    <span class="bg-red-50 text-red-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase tracking-wider border border-red-200">PDF</span>
                                </td>
                                <td class="py-4 px-4 text-slate-500">01 Jan 2026 - 28 Feb 2026</td>
                                <td class="py-4 px-4 text-slate-500">Admin User</td>
                                <td class="py-4 px-4 text-slate-500 font-mono">2.1 MB</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Completed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="Download report">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                        </button>
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="More actions">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-bold text-slate-800">Pending Approvals Audit Record</td>
                                <td class="py-4 px-4">
                                    <span class="bg-red-50 text-red-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase tracking-wider border border-red-200">PDF</span>
                                </td>
                                <td class="py-4 px-4 text-slate-500">All Dates</td>
                                <td class="py-4 px-4 text-slate-500">Admin User</td>
                                <td class="py-4 px-4 text-slate-500 font-mono">1.1 MB</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Completed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="Download report">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                        </button>
                                        <button class="inline-flex items-center justify-center p-1.5 rounded-lg hover:bg-slate-50 transition-colors text-slate-400 hover:text-slate-600 cursor-pointer" aria-label="More actions">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
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
