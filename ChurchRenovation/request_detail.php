<?php
/**
 * Request Details Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Church Renovation Information System
 */

$page_title = "Request Details - #REN-2026-001";
$request_id = $_GET['id'] ?? 'REN-2026-001';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">
                    <a href="<?= BASE_URL ?>requests" class="hover:text-primary transition-colors">Home / Renovation Requests</a> / #REN-2026-001
                </span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Request Details</h2>
            </div>
            <div class="flex items-center gap-3">
                <button class="bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-xs font-semibold font-inter inline-flex items-center gap-2 shadow-xs transition-colors">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export
                </button>
                <button class="bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 px-4 py-2 rounded-lg text-xs font-semibold font-inter inline-flex items-center gap-2 shadow-xs transition-colors">
                    <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                    </svg>
                    Edit
                </button>
            </div>
        </div>

        <!-- Subheader ID & Status Row -->
        <div class="flex items-center gap-3 text-xs font-inter text-slate-500">
            <span class="font-semibold text-slate-700">#REN-2026-001</span>
            <span>•</span>
            <span>Submitted 10 January 2026</span>
            <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 ml-2">
                <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                Pending Approval
            </span>
        </div>

        <!-- Main Content Layout Grid (Left 65% / Right 35%) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- Left Main Column (Spans 2 cols) -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- 1. Church Information Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-6">
                    <div class="flex items-start justify-between">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 font-heading">Church Information</h3>
                            <div class="mt-3">
                                <h4 class="text-base font-bold text-slate-900 font-heading">St. Mary's Basilica</h4>
                                <p class="text-xs text-slate-400 font-inter mt-0.5">Roman Catholic · Established 1878</p>
                            </div>
                            <div class="flex flex-wrap items-center gap-2 mt-3 text-xs font-inter">
                                <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full inline-flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                    Colombo, Western Province
                                </span>
                                <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full inline-flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                                    Built 1924
                                </span>
                            </div>
                        </div>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-[#634E35] text-[11px] px-3 py-1 rounded-md font-medium">
                            Colombo Diocese
                        </span>
                    </div>

                    <!-- 4-Grid Key Details Box -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-slate-100 text-xs font-inter">
                        <div class="space-y-1">
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block">PARISH PRIEST</span>
                            <p class="font-semibold text-slate-900">Fr. Thomas De Silva</p>
                            <p class="text-slate-400 text-[11px]">+94 11 234 5678</p>
                        </div>
                        <div class="space-y-1">
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block">DIOCESE</span>
                            <p class="font-semibold text-slate-900">Archdiocese of Colombo</p>
                            <p class="text-slate-400 text-[11px]">Western Province</p>
                        </div>
                        <div class="space-y-1 pt-2 border-t border-slate-50">
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block">CHURCH REGISTRATION</span>
                            <p class="font-mono font-medium text-slate-700">RC-COL-1878-042</p>
                        </div>
                        <div class="space-y-1 pt-2 border-t border-slate-50">
                            <span class="text-[10px] font-semibold text-slate-400 uppercase tracking-wider block">DATE OF REQUEST</span>
                            <p class="font-semibold text-slate-900">10 January 2026</p>
                            <p class="text-slate-400 text-[11px]">79 days ago</p>
                        </div>
                    </div>
                </div>

                <!-- 2. Renovation Description Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-slate-900 font-heading">Renovation Description</h3>
                        <span class="bg-[#FEF3C7] text-[#92400E] border border-[#FDE68A] text-[11px] px-3 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                            High Priority
                        </span>
                    </div>

                    <p class="text-xs text-slate-600 font-inter leading-relaxed">
                        The roof of the main nave has suffered significant structural deterioration due to heavy monsoon rains and prolonged water ingress over the past three years. Critical sections of the timber trusses are showing signs of rot, and several roofing tiles have displaced, posing a risk to the congregation and the historic interior. Immediate restoration is required to preserve both the architectural heritage and the safety of the building.
                    </p>

                    <div class="flex flex-wrap gap-2 pt-2 text-xs font-inter">
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-[#634E35] text-[11px] px-3 py-1 rounded-md font-medium">Roof Restoration</span>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-[#634E35] text-[11px] px-3 py-1 rounded-md font-medium">Structural Repair</span>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-[#634E35] text-[11px] px-3 py-1 rounded-md font-medium">Heritage Building</span>
                        <span class="bg-[#F7F4EE] border border-[#EAE5D9] text-[#634E35] text-[11px] px-3 py-1 rounded-md font-medium">Urgent</span>
                    </div>
                </div>

                <!-- 3. Scope of Work & Budget Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-slate-900 font-heading">Scope of Work & Budget</h3>
                        <span class="bg-slate-100 text-slate-500 text-[11px] px-2.5 py-0.5 rounded-md font-medium font-inter">
                            Estimated total
                        </span>
                    </div>

                    <div class="space-y-4 text-xs font-inter">
                        <!-- Item 1 -->
                        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
                            <div class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-primary mt-1.5 shrink-0"></span>
                                <div>
                                    <h4 class="font-bold text-slate-900">Timber truss inspection & replacement</h4>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Main nave — 14 trusses to be fully replaced</p>
                                </div>
                            </div>
                            <span class="font-semibold text-slate-900 text-right">LKR 1,800,000</span>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
                            <div class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-primary mt-1.5 shrink-0"></span>
                                <div>
                                    <h4 class="font-bold text-slate-900">Roofing tile replacement</h4>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Traditional clay tiles, approx. 2,400 units</p>
                                </div>
                            </div>
                            <span class="font-semibold text-slate-900 text-right">LKR 1,200,000</span>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start justify-between pb-3 border-b border-slate-100">
                            <div class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-primary mt-1.5 shrink-0"></span>
                                <div>
                                    <h4 class="font-bold text-slate-900">Waterproofing & sealing</h4>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Full interior membrane application</p>
                                </div>
                            </div>
                            <span class="font-semibold text-slate-900 text-right">LKR 750,000</span>
                        </div>

                        <!-- Item 4 -->
                        <div class="flex items-start justify-between pb-1">
                            <div class="flex items-start gap-2.5">
                                <span class="w-2 h-2 rounded-full bg-primary mt-1.5 shrink-0"></span>
                                <div>
                                    <h4 class="font-bold text-slate-900">Scaffolding & labour</h4>
                                    <p class="text-[11px] text-slate-400 mt-0.5">Estimated 8-week project duration</p>
                                </div>
                            </div>
                            <span class="font-semibold text-slate-900 text-right">LKR 450,000</span>
                        </div>
                    </div>

                    <!-- Total Estimated Budget Box -->
                    <div class="bg-[#F7F4EE] border border-[#EAE5D9] rounded-xl p-4 flex items-center justify-between">
                        <div>
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block font-heading">TOTAL ESTIMATED BUDGET</span>
                            <span class="text-xl font-bold text-slate-900 font-heading mt-0.5 block">LKR 4,200,000</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-medium text-slate-400 block font-inter">Ministry allocation</span>
                            <span class="text-xs font-semibold text-slate-800 font-inter mt-0.5 block">Within budget cap</span>
                        </div>
                    </div>
                </div>

                <!-- 4. Uploaded Request Letter Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-slate-900 font-heading">Uploaded Request Letter</h3>
                        <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1 font-inter">
                            ✓ Verified
                        </span>
                    </div>

                    <div class="bg-slate-50/70 border border-slate-200/80 rounded-xl p-4 flex items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 shrink-0">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900 font-inter">Renovation_Request_StMary_Jan2026.pdf</h4>
                                <p class="text-[11px] text-slate-400 font-inter mt-0.5">PDF Document · 1.8 MB · Uploaded 10 Jan 2026</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 shrink-0">
                            <button class="bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium font-inter inline-flex items-center gap-1.5 shadow-xs transition-colors">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Preview
                            </button>
                            <button class="bg-secondary hover:bg-secondary-dark text-white px-3 py-1.5 rounded-lg text-xs font-medium font-inter inline-flex items-center gap-1.5 shadow-xs transition-colors">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                                Download
                            </button>
                        </div>
                    </div>
                </div>

                <!-- 5. Site Photographs Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-6">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Site Photographs</h3>

                    <!-- Before Renovation Section -->
                    <div class="space-y-3">
                        <div class="flex items-center gap-2 text-xs font-inter text-slate-500">
                            <span class="font-medium text-slate-700">0 photos uploaded</span>
                            <span>·</span>
                            <span>Before renovation</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-8 flex flex-col items-center justify-center text-center text-slate-400 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group min-h-[120px]">
                                <span class="text-lg font-light group-hover:scale-110 transition-transform">+</span>
                                <span class="text-[10px] font-medium uppercase tracking-wider font-inter mt-1">BEFORE - 1</span>
                            </div>
                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-8 flex flex-col items-center justify-center text-center text-slate-400 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group min-h-[120px]">
                                <span class="text-lg font-light group-hover:scale-110 transition-transform">+</span>
                                <span class="text-[10px] font-medium uppercase tracking-wider font-inter mt-1">BEFORE - 2</span>
                            </div>
                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-8 flex flex-col items-center justify-center text-center text-slate-400 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group min-h-[120px]">
                                <span class="text-lg font-light group-hover:scale-110 transition-transform">+</span>
                                <span class="text-[10px] font-medium uppercase tracking-wider font-inter mt-1">BEFORE - 3</span>
                            </div>
                        </div>
                    </div>

                    <!-- After Renovation Section -->
                    <div class="space-y-3 pt-4 border-t border-slate-100">
                        <div class="flex items-center gap-2 text-xs font-inter text-slate-500">
                            <span class="font-medium text-slate-700">0 photos uploaded</span>
                            <span>·</span>
                            <span>After renovation</span>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-8 flex flex-col items-center justify-center text-center text-slate-400 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group min-h-[120px]">
                                <span class="text-lg font-light group-hover:scale-110 transition-transform">+</span>
                                <span class="text-[10px] font-medium uppercase tracking-wider font-inter mt-1">AFTER - 1</span>
                            </div>
                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-8 flex flex-col items-center justify-center text-center text-slate-400 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group min-h-[120px]">
                                <span class="text-lg font-light group-hover:scale-110 transition-transform">+</span>
                                <span class="text-[10px] font-medium uppercase tracking-wider font-inter mt-1">AFTER - 2</span>
                            </div>
                            <div class="border-2 border-dashed border-slate-200 rounded-xl p-8 flex flex-col items-center justify-center text-center text-slate-400 bg-slate-50/50 hover:bg-slate-50 transition-colors cursor-pointer group min-h-[120px]">
                                <span class="text-lg font-light group-hover:scale-110 transition-transform">+</span>
                                <span class="text-[10px] font-medium uppercase tracking-wider font-inter mt-1">AFTER - 3</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Column Panels -->
            <div class="space-y-6">
                
                <!-- 1. Assigned Reviewer Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Assigned Reviewer</h3>

                    <div class="flex items-center justify-between bg-slate-50/70 border border-slate-200/80 rounded-xl p-3.5">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-secondary text-white font-heading font-bold text-xs flex items-center justify-center shrink-0">
                                MF
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900 font-inter">Mr. M. Fernando</h4>
                                <p class="text-[10px] text-slate-400 font-inter mt-0.5">Senior Heritage Architect</p>
                            </div>
                        </div>
                        <span class="bg-[#ECFDF5] text-[#065F46] text-[10px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1 font-inter">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                            Active
                        </span>
                    </div>
                </div>

                <!-- 2. Activity Timeline Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Activity Timeline</h3>

                    <div class="relative pl-6 space-y-6 border-l-2 border-slate-100 font-inter">
                        
                        <!-- Event 1 -->
                        <div class="relative">
                            <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-blue-600 ring-4 ring-white"></span>
                            <h4 class="text-xs font-bold text-slate-900">Request submitted</h4>
                            <p class="text-[10px] text-slate-400 mt-0.5">Colombo Diocese Office · 10 Jan 2026</p>
                        </div>

                        <!-- Event 2 -->
                        <div class="relative">
                            <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-emerald-600 ring-4 ring-white"></span>
                            <h4 class="text-xs font-bold text-slate-900">Documents verified</h4>
                            <p class="text-[10px] text-slate-400 mt-0.5">Admin User · 12 Jan 2026</p>
                        </div>

                        <!-- Event 3 -->
                        <div class="relative">
                            <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-amber-600 ring-4 ring-white"></span>
                            <h4 class="text-xs font-bold text-slate-900">Assigned for review</h4>
                            <p class="text-[10px] text-slate-400 mt-0.5">Admin User · 14 Jan 2026</p>
                        </div>

                        <!-- Event 4 -->
                        <div class="relative opacity-60">
                            <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-slate-300 ring-4 ring-white"></span>
                            <h4 class="text-xs font-medium text-slate-600">Awaiting approval decision</h4>
                            <p class="text-[10px] text-slate-400 mt-0.5">Pending</p>
                        </div>

                    </div>
                </div>

                <!-- 3. Current Status & Actions Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-slate-900 font-heading">Current Status</h3>
                        <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 font-inter">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                            Pending Approval
                        </span>
                    </div>

                    <!-- Progress Bar -->
                    <div class="space-y-1.5">
                        <div class="flex items-center justify-between text-[11px] font-inter">
                            <span class="text-slate-400">Review progress</span>
                            <span class="font-bold text-slate-900">40%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                            <div class="bg-secondary h-full rounded-full w-[40%]"></div>
                        </div>
                    </div>

                    <!-- Key Metrics Rows -->
                    <div class="divide-y divide-slate-100 text-xs font-inter pt-1">
                        <div class="py-2.5 flex items-center justify-between text-slate-500">
                            <span>PRIORITY</span>
                            <span class="font-bold text-amber-600 flex items-center gap-1">★ High</span>
                        </div>
                        <div class="py-2.5 flex items-center justify-between text-slate-500">
                            <span>DAYS PENDING</span>
                            <span class="font-semibold text-slate-900">79 days</span>
                        </div>
                        <div class="py-2.5 flex items-center justify-between text-slate-500">
                            <span>BUDGET</span>
                            <span class="font-bold text-slate-900 font-heading">LKR 4,200,000</span>
                        </div>
                        <div class="py-2.5 flex items-center justify-between text-slate-500">
                            <span>WORK TYPE</span>
                            <span class="font-medium text-slate-800">Roof Restoration</span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-2.5 pt-2">
                        <div class="grid grid-cols-2 gap-2.5">
                            <button class="bg-[#059669] hover:bg-[#047857] text-white py-2.5 px-3 rounded-lg text-xs font-semibold font-inter inline-flex items-center justify-center gap-1.5 transition-colors shadow-xs">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                Approve
                            </button>
                            <button class="bg-primary hover:bg-primary-dark text-white py-2.5 px-3 rounded-lg text-xs font-semibold font-inter inline-flex items-center justify-center gap-1.5 transition-colors shadow-xs">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                                Reject
                            </button>
                        </div>
                        <button class="w-full bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 py-2.5 px-3 rounded-lg text-xs font-medium font-inter inline-flex items-center justify-center gap-2 transition-colors shadow-xs">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            Request More Information
                        </button>
                    </div>

                </div>

            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
