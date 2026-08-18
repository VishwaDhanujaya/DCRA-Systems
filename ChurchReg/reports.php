<?php
/**
 * Official Reports Page - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "Official Reports";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Title & Top Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter"><a href="<?= BASE_URL ?>dashboard" class="hover:text-slate-650 transition-colors">Home</a> / Reports</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Official Reports</h2>
            </div>
            
            <div class="flex items-center gap-2.5 self-start sm:self-auto text-xs font-semibold font-heading">
                <button class="px-4 py-2 bg-white hover:bg-slate-50 text-slate-700 rounded-xl border border-slate-200 shadow-2xs transition-colors h-10 flex items-center justify-center">
                    Export
                </button>
                <button class="px-4 py-2 bg-white hover:bg-slate-50 text-slate-700 rounded-xl border border-slate-200 shadow-2xs transition-colors h-10 flex items-center justify-center">
                    Print
                </button>
                <a href="<?= BASE_URL ?>certificates/new" class="px-4 py-2 bg-[#13273F] hover:bg-[#0d1c2e] text-white rounded-xl shadow-2xs transition-colors h-10 flex items-center justify-center gap-1.5">
                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Issue New Certificate</span>
                </a>
            </div>
        </div>

        <!-- 4 Summary Metric Cards Row -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Card 1: Total Applications -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Total Applications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">284</h3>
                </div>
            </div>

            <!-- Card 2: Certificates Active -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Certificates Active</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">221</h3>
                </div>
            </div>

            <!-- Card 3: Reports Generated -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Reports Generated</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">58</h3>
                </div>
            </div>

            <!-- Card 4: Districts Covered -->
            <div class="relative overflow-hidden bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col justify-between border-t-4 border-t-[#4E0000]">
                <div>
                    <p class="text-xs font-semibold text-slate-400 font-inter uppercase tracking-wider">Districts Covered</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">25</h3>
                </div>
            </div>

        </div>

        <!-- Search Bar Flat Canvas Layout -->
        <div class="flex flex-wrap items-center gap-3 text-xs font-inter w-full">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
                <input type="text" placeholder="Search name, ID, or diocese..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
            </div>
        </div>

        <!-- Report Templates Card -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-2xs space-y-6">
            
            <div class="flex items-center justify-between">
                <h3 class="text-base font-bold text-slate-900 font-heading">Report Templates</h3>
                <button class="px-4 py-2 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold rounded-xl shadow-2xs transition-colors font-heading cursor-pointer">
                    New Template
                </button>
            </div>

            <!-- Templates Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                
                <!-- Template 1 -->
                <div class="bg-[#F8FAFC]/50 rounded-xl p-5 border border-slate-200/80 flex flex-col justify-between min-h-[220px]">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-900 font-heading text-[13px]">Annual Registration Report</h4>
                        <p class="text-[11px] text-slate-500 font-inter leading-relaxed">
                            Comprehensive annual summary of all new registrations, renewals, rejections and active churches across all districts and denominations.
                        </p>
                        <div class="flex flex-wrap gap-1 pt-1 text-[9px] font-bold font-inter">
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Annual</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Ministry-Ready</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Certified</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-[11px] font-inter">
                        <span class="text-slate-400">Last: 31 Dec 2025</span>
                        <button class="px-4 py-1.5 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 text-[11px] font-semibold rounded-lg shadow-2xs transition-colors">
                            Generate
                        </button>
                    </div>
                </div>

                <!-- Template 2 -->
                <div class="bg-[#F8FAFC]/50 rounded-xl p-5 border border-slate-200/80 flex flex-col justify-between min-h-[220px]">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-900 font-heading text-[13px]">Monthly Activity Report</h4>
                        <p class="text-[11px] text-slate-500 font-inter leading-relaxed">
                            Applications received, processed, and pending for the current month broken down by district, officer, and status.
                        </p>
                        <div class="flex flex-wrap gap-1 pt-1 text-[9px] font-bold font-inter">
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">All</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">All Districts</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-[11px] font-inter">
                        <span class="text-slate-400">Last: 31 Mar 2025</span>
                        <button class="px-4 py-1.5 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 text-[11px] font-semibold rounded-lg shadow-2xs transition-colors">
                            Generate
                        </button>
                    </div>
                </div>

                <!-- Template 3 -->
                <div class="bg-[#F8FAFC]/50 rounded-xl p-5 border border-slate-200/80 flex flex-col justify-between min-h-[220px]">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-900 font-heading text-[13px]">MOD Clearance Submission</h4>
                        <p class="text-[11px] text-slate-500 font-inter leading-relaxed">
                            Formatted report of all applications pending or cleared by the Ministry of Defence, including security clearance status.
                        </p>
                        <div class="flex flex-wrap gap-1 pt-1 text-[9px] font-bold font-inter">
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Annual</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Ministry-Ready</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Certified</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-[11px] font-inter">
                        <span class="text-slate-400">Last: 31 Dec 2025</span>
                        <button class="px-4 py-1.5 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 text-[11px] font-semibold rounded-lg shadow-2xs transition-colors">
                            Generate
                        </button>
                    </div>
                </div>

                <!-- Template 4 -->
                <div class="bg-[#F8FAFC]/50 rounded-xl p-5 border border-slate-200/80 flex flex-col justify-between min-h-[220px]">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-900 font-heading text-[13px]">District-Wise Summary</h4>
                        <p class="text-[11px] text-slate-500 font-inter leading-relaxed">
                            Per-district breakdown of all registered churches, pending applications, and certificate expirations across Sri Lanka.
                        </p>
                        <div class="flex flex-wrap gap-1 pt-1 text-[9px] font-bold font-inter">
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Annual</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Ministry-Ready</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Certified</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-[11px] font-inter">
                        <span class="text-slate-400">Last: 31 Dec 2025</span>
                        <button class="px-4 py-1.5 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 text-[11px] font-semibold rounded-lg shadow-2xs transition-colors">
                            Generate
                        </button>
                    </div>
                </div>

                <!-- Template 5 -->
                <div class="bg-[#F8FAFC]/50 rounded-xl p-5 border border-slate-200/80 flex flex-col justify-between min-h-[220px]">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-900 font-heading text-[13px]">Certificate Expiry Report</h4>
                        <p class="text-[11px] text-slate-500 font-inter leading-relaxed">
                            List of all certificates expiring within 30, 60 or 90 days, sorted by urgency with renewal status tracking.
                        </p>
                        <div class="flex flex-wrap gap-1 pt-1 text-[9px] font-bold font-inter">
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">All</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">All Districts</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-[11px] font-inter">
                        <span class="text-slate-400">Last: 31 Mar 2025</span>
                        <button class="px-4 py-1.5 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 text-[11px] font-semibold rounded-lg shadow-2xs transition-colors">
                            Generate
                        </button>
                    </div>
                </div>

                <!-- Template 6 -->
                <div class="bg-[#F8FAFC]/50 rounded-xl p-5 border border-slate-200/80 flex flex-col justify-between min-h-[220px]">
                    <div class="space-y-2">
                        <h4 class="font-bold text-slate-900 font-heading text-[13px]">MOD Clearance Submission</h4>
                        <p class="text-[11px] text-slate-500 font-inter leading-relaxed">
                            Formatted report of all applications pending or cleared by the Ministry of Defence, including security clearance status.
                        </p>
                        <div class="flex flex-wrap gap-1 pt-1 text-[9px] font-bold font-inter">
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Annual</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Ministry-Ready</span>
                            <span class="px-2 py-0.5 rounded bg-slate-100 text-slate-600 border border-slate-200">Certified</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-[11px] font-inter">
                        <span class="text-slate-400">Last: 31 Dec 2025</span>
                        <button class="px-4 py-1.5 bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 text-[11px] font-semibold rounded-lg shadow-2xs transition-colors">
                            Generate
                        </button>
                    </div>
                </div>

            </div>

        </div>

        <!-- Recently Generated Reports Card -->
        <div class="bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden">
            
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-base font-bold text-slate-900 font-heading">Recently Generated Reports</h3>
            </div>

            <!-- Table Container -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[1100px]">
                    <thead>
                        <tr class="bg-[#F5ECE2]/80 border-b border-slate-200/70 text-[10px] font-bold text-slate-400 uppercase font-heading tracking-wider">
                            <th scope="col" class="py-3.5 px-5 font-bold">REPORT NAME</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">TYPE</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">FORMAT</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">GENERATED</th>
                            <th scope="col" class="py-3.5 px-5 font-bold">GENERATED BY</th>
                            <th scope="col" class="py-3.5 px-5 text-right font-bold">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <td class="py-4 px-5 font-bold text-slate-900">Monthly Activity Report — April 2025</td>
                            <td class="py-4 px-5 text-slate-600">Monthly</td>
                            <td class="py-4 px-5">
                                <span class="px-2 py-0.5 rounded-md font-bold text-[10px] bg-red-50 text-red-700 border border-red-100">PDF</span>
                            </td>
                            <td class="py-4 px-5 text-slate-500">07 Apr 2025, 10:12 AM</td>
                            <td class="py-4 px-5 text-slate-600 font-medium">S. Kumara</td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
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
                            <td class="py-4 px-5 font-bold text-slate-900">SLA Performance Report — Q1 2025</td>
                            <td class="py-4 px-5 text-slate-600">Performance</td>
                            <td class="py-4 px-5">
                                <span class="px-2 py-0.5 rounded-md font-bold text-[10px] bg-green-50 text-green-700 border border-green-100">XLSX</span>
                            </td>
                            <td class="py-4 px-5 text-slate-500">05 Apr 2025, 3:44 PM</td>
                            <td class="py-4 px-5 text-slate-600 font-medium">R. Perera</td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
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
                            <td class="py-4 px-5 font-bold text-slate-900">District Summary — Colombo District</td>
                            <td class="py-4 px-5 text-slate-600">Geographic</td>
                            <td class="py-4 px-5">
                                <span class="px-2 py-0.5 rounded-md font-bold text-[10px] bg-red-50 text-red-700 border border-red-100">PDF</span>
                            </td>
                            <td class="py-4 px-5 text-slate-500">04 Apr 2025, 11:20 AM</td>
                            <td class="py-4 px-5 text-slate-600 font-medium">D. Jayawardena</td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
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
                            <td class="py-4 px-5 font-bold text-slate-900">Certificate Expiry Alert — 90-Day Window</td>
                            <td class="py-4 px-5 text-slate-600">Expiry</td>
                            <td class="py-4 px-5">
                                <span class="px-2 py-0.5 rounded-md font-bold text-[10px] bg-slate-50 text-slate-700 border border-slate-200">CSV</span>
                            </td>
                            <td class="py-4 px-5 text-slate-500">03 Apr 2025, 9:05 AM</td>
                            <td class="py-4 px-5 text-slate-600 font-medium">S. Kumara</td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
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
                            <td class="py-4 px-5 font-bold text-slate-900">MOD Clearance Submission — March 2025</td>
                            <td class="py-4 px-5 text-slate-600">MOD</td>
                            <td class="py-4 px-5">
                                <span class="px-2 py-0.5 rounded-md font-bold text-[10px] bg-green-50 text-green-700 border border-green-100">XLSX</span>
                            </td>
                            <td class="py-4 px-5 text-slate-500">02 Apr 2025, 2:30 PM</td>
                            <td class="py-4 px-5 text-slate-600 font-medium">R. Perera</td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
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
                            <td class="py-4 px-5 font-bold text-slate-900">Annual Registration Report — FY 2024</td>
                            <td class="py-4 px-5 text-slate-600">Annual</td>
                            <td class="py-4 px-5">
                                <span class="px-2 py-0.5 rounded-md font-bold text-[10px] bg-red-50 text-red-700 border border-red-100">PDF</span>
                            </td>
                            <td class="py-4 px-5 text-slate-500">31 Dec 2024, 11:59 PM</td>
                            <td class="py-4 px-5 text-slate-600 font-medium">D. Jayawardena</td>
                            <td class="py-4 px-5 text-right">
                                <div class="flex items-center justify-end space-x-1.5">
                                    <button class="p-1 px-2 bg-slate-100/80 hover:bg-slate-200/80 text-slate-700 rounded-lg transition-colors inline-flex items-center justify-center">
                                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                    </button>
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

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
