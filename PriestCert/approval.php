<?php
/**
 * Approval Queue Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 */

$page_title = "Approval";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Approval</span>
                <h2 class="text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Approval</h2>
            </div>
            
            <!-- Right side: New Application & Download buttons -->
            <div class="flex items-center gap-2">
                <a href="<?= BASE_URL ?>applications/new" class="bg-secondary hover:bg-secondary-dark text-white font-medium text-xs px-4 py-2 h-9 rounded-lg flex items-center justify-center gap-2 shadow-xs transition-colors font-inter">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    New Application
                </a>
                <button type="button" aria-label="Export data" class="h-9 w-9 bg-white border border-slate-200 hover:bg-slate-50 text-slate-600 rounded-lg flex items-center justify-center transition-colors shadow-xs">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- 4 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            
            <!-- Stat Card 1: In Queue -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">IN QUEUE</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">5</h3>
                </div>
                <p class="text-xs font-medium text-slate-400 mt-2 font-inter">
                    Total awaiting action
                </p>
            </div>

            <!-- Stat Card 2: Pending -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">PENDING</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">3</h3>
                </div>
                <p class="text-xs font-medium text-slate-400 mt-2 font-inter">
                    Not yet reviewed
                </p>
            </div>

            <!-- Stat Card 3: In Review -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">IN REVIEW</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">2</h3>
                </div>
                <p class="text-xs font-medium text-slate-400 mt-2 font-inter">
                    Under active review
                </p>
            </div>

            <!-- Stat Card 4: Urgent -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">URGENT</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">2</h3>
                </div>
                <p class="text-xs font-medium text-slate-400 mt-2 font-inter">
                    Needs immediate action
                </p>
            </div>

        </div>

        <!-- Filters Section -->
        <div class="flex flex-wrap xl:flex-nowrap items-center gap-2 sm:gap-2.5 bg-transparent w-full">
            <!-- Search field -->
            <div class="relative flex-1 min-w-[200px] sm:min-w-[220px]">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search name, or diocese..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all h-10 sm:h-9 min-h-[40px]">
            </div>

            <!-- Dropdown: All statuses -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-2.5 pr-7 cursor-pointer h-10 sm:h-9 min-h-[40px] flex-shrink-0">
                <option>All statuses</option>
                <option>Pending</option>
                <option>Approved</option>
                <option>In review</option>
                <option>Rejected</option>
            </select>

            <!-- Dropdown: All roles -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-2.5 pr-7 cursor-pointer h-10 sm:h-9 min-h-[40px] flex-shrink-0">
                <option>All roles</option>
                <option>Father</option>
                <option>Sister</option>
            </select>

            <!-- Dropdown: All dioceses -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-2.5 pr-7 cursor-pointer h-10 sm:h-9 min-h-[40px] flex-shrink-0">
                <option>All dioceses</option>
                <option>Colombo</option>
                <option>Kandy</option>
                <option>Galle</option>
                <option>Jaffna</option>
            </select>

            <!-- Dropdown: All types -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-2.5 pr-7 cursor-pointer h-10 sm:h-9 min-h-[40px] flex-shrink-0">
                <option>All types</option>
                <option>Identity</option>
                <option>Passport</option>
                <option>Both</option>
            </select>

            <!-- Dropdown: Newest first -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-2.5 pr-7 cursor-pointer h-10 sm:h-9 min-h-[40px] flex-shrink-0">
                <option>Newest first</option>
                <option>Oldest first</option>
            </select>

            <!-- Reset Filter Button -->
            <button type="button" class="border border-rose-200 bg-rose-50 text-[#B91C1C] hover:bg-rose-100 rounded-lg text-xs font-inter font-medium px-3 py-1.5 flex items-center justify-center gap-1.5 transition-colors h-10 sm:h-9 min-h-[40px] flex-shrink-0 whitespace-nowrap">
                Reset Filter
                <svg class="w-3.5 h-3.5 text-[#B91C1C]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>

            <!-- View toggle (Grid / List) -->
            <div class="flex items-center border border-slate-200 rounded-lg overflow-hidden bg-white h-10 sm:h-9 min-h-[40px] shadow-2xs flex-shrink-0">
                <button type="button" class="bg-secondary text-white text-xs font-inter font-medium py-1 px-3 flex items-center gap-1.5 h-full transition-colors">
                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    Grid
                </button>
                <button type="button" class="bg-white text-slate-500 hover:bg-slate-50 text-xs font-inter font-medium py-1 px-3 flex items-center gap-1.5 h-full transition-colors border-l border-slate-200">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    List
                </button>
            </div>
        </div>

        <!-- Records count -->
        <div class="flex justify-end">
            <span class="text-xs font-medium text-slate-400 font-inter">Showing 5 of 12 records</span>
        </div>

        <!-- Verification Cards Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 sm:gap-6">
            
            <!-- Card 1: Fr. Anthony Silva -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-5 flex flex-col justify-between hover:border-slate-300 transition-all duration-150">
                <div>
                    <!-- Card Header: Name & Priority Badge -->
                    <div class="flex items-start justify-between gap-2">
                        <h4 class="text-base font-bold text-slate-900 font-heading leading-snug">Fr. Anthony Silva</h4>
                        <!-- Priority Badge -->
                        <span class="bg-[#FEF2F2] text-[#B91C1C] border border-[#FEE2E2] rounded-full text-[10px] px-2.5 py-0.5 font-semibold inline-flex items-center gap-1 flex-shrink-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#EF4444]"></span>
                            Urgent
                        </span>
                    </div>
                    
                    <!-- Role & Diocese -->
                    <p class="text-xs font-medium text-slate-400 font-inter mt-1.5">Father · Colombo Diocese</p>
                    <p class="text-[11px] font-mono text-slate-300 mt-0.5">#0089</p>

                    <!-- Horizontal details row -->
                    <div class="flex flex-wrap items-center justify-between gap-2 border-t border-slate-100/80 pt-3 mt-4 text-xs font-inter text-slate-500 leading-normal">
                        <!-- Detail 1: Date -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>26 Mar 2026</span>
                        </div>
                        
                        <!-- Detail 2: Cert Type -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Identity Cert</span>
                        </div>
                        
                        <!-- Detail 3: Queue Status -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Today</span>
                        </div>
                    </div>

                    <!-- Verification Badges -->
                    <div class="flex flex-wrap items-center gap-2 mt-3 pb-4 border-b border-slate-100/80">
                        <span class="bg-[#FFFBEB] text-[#B45309] text-[10px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1 border border-[#FEF3C7]">
                            <span class="w-1 h-1 rounded-full bg-[#D97706]"></span>
                            Pending
                        </span>
                        <span class="bg-emerald-50 text-emerald-700 border border-emerald-100 rounded text-[10px] px-2.5 py-0.5 font-medium">All docs verified</span>
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex items-center justify-between gap-1.5 mt-4 pt-3 border-t border-slate-100/80">
                    <button type="button" class="bg-emerald-50/80 hover:bg-emerald-100 text-emerald-700 border border-emerald-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Approve</button>
                    <button type="button" class="bg-rose-50/80 hover:bg-rose-100 text-rose-700 border border-rose-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Reject</button>
                    <button type="button" class="bg-amber-50/80 hover:bg-amber-100 text-amber-700 border border-amber-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Changes</button>
                    
                    <button type="button" aria-label="View details" class="bg-blue-50 text-[#1E40AF] hover:bg-blue-100 border border-blue-200/80 p-2 rounded-lg flex items-center justify-center transition-colors w-9 h-9 flex-shrink-0 shadow-3xs cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 2: Sr. Mary Colette -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-5 flex flex-col justify-between hover:border-slate-300 transition-all duration-150">
                <div>
                    <!-- Card Header: Name & Priority Badge -->
                    <div class="flex items-start justify-between gap-2">
                        <h4 class="text-base font-bold text-slate-900 font-heading leading-snug">Sr. Mary Colette</h4>
                        <!-- Priority Badge -->
                        <span class="bg-[#EFF6FF] text-[#1D4ED8] border border-[#DBEAFE] rounded-full text-[10px] px-2.5 py-0.5 font-semibold inline-flex items-center gap-1 flex-shrink-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                            In review
                        </span>
                    </div>
                    
                    <!-- Role & Diocese -->
                    <p class="text-xs font-medium text-slate-400 font-inter mt-1.5">Sister · Kandy Diocese</p>
                    <p class="text-[11px] font-mono text-slate-300 mt-0.5">#0088</p>

                    <!-- Horizontal details row -->
                    <div class="flex flex-wrap items-center justify-between gap-2 border-t border-slate-100/80 pt-3 mt-4 text-xs font-inter text-slate-500 leading-normal">
                        <!-- Detail 1: Date -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>25 Mar 2026</span>
                        </div>
                        
                        <!-- Detail 2: Cert Type -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Identity Cert</span>
                        </div>
                        
                        <!-- Detail 3: Queue Status -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>1 day in queue</span>
                        </div>
                    </div>

                    <!-- Verification Badges -->
                    <div class="flex flex-wrap items-center gap-2 mt-3 pb-4 border-b border-slate-100/80">
                        <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[10px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1 border border-[#DBEAFE]">
                            <span class="w-1 h-1 rounded-full bg-[#3B82F6]"></span>
                            In review
                        </span>
                        <span class="bg-emerald-50 text-emerald-700 border border-emerald-100 rounded text-[10px] px-2.5 py-0.5 font-medium">All docs verified</span>
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex items-center justify-between gap-1.5 mt-4 pt-3 border-t border-slate-100/80">
                    <button type="button" class="bg-emerald-50/80 hover:bg-emerald-100 text-emerald-700 border border-emerald-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Approve</button>
                    <button type="button" class="bg-rose-50/80 hover:bg-rose-100 text-rose-700 border border-rose-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Reject</button>
                    <button type="button" class="bg-amber-50/80 hover:bg-amber-100 text-amber-700 border border-amber-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Changes</button>
                    
                    <button type="button" aria-label="View details" class="bg-blue-50 text-[#1E40AF] hover:bg-blue-100 border border-blue-200/80 p-2 rounded-lg flex items-center justify-center transition-colors w-9 h-9 flex-shrink-0 shadow-3xs cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 3: Fr. James Perera -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-5 flex flex-col justify-between hover:border-slate-300 transition-all duration-150">
                <div>
                    <!-- Card Header: Name & Priority Badge -->
                    <div class="flex items-start justify-between gap-2">
                        <h4 class="text-base font-bold text-slate-900 font-heading leading-snug">Fr. James Perera</h4>
                        <!-- Priority Badge -->
                        <span class="bg-[#EFF6FF] text-[#1D4ED8] border border-[#DBEAFE] rounded-full text-[10px] px-2.5 py-0.5 font-semibold inline-flex items-center gap-1 flex-shrink-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                            In review
                        </span>
                    </div>
                    
                    <!-- Role & Diocese -->
                    <p class="text-xs font-medium text-slate-400 font-inter mt-1.5">Father · Colombo Diocese</p>
                    <p class="text-[11px] font-mono text-slate-300 mt-0.5">#0089</p>

                    <!-- Horizontal details row -->
                    <div class="flex flex-wrap items-center justify-between gap-2 border-t border-slate-100/80 pt-3 mt-4 text-xs font-inter text-slate-500 leading-normal">
                        <!-- Detail 1: Date -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>24 Mar 2026</span>
                        </div>
                        
                        <!-- Detail 2: Cert Type -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Both Cert</span>
                        </div>
                        
                        <!-- Detail 3: Queue Status -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>2 days in queue</span>
                        </div>
                    </div>

                    <!-- Verification Badges -->
                    <div class="flex flex-wrap items-center gap-2 mt-3 pb-4 border-b border-slate-100/80">
                        <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[10px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1 border border-[#DBEAFE]">
                            <span class="w-1 h-1 rounded-full bg-[#3B82F6]"></span>
                            In review
                        </span>
                        <span class="bg-rose-50 text-rose-700 border border-rose-100 rounded text-[10px] px-2.5 py-0.5 font-medium">1 doc missing</span>
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex items-center justify-between gap-1.5 mt-4 pt-3 border-t border-slate-100/80">
                    <button type="button" class="bg-emerald-50/80 hover:bg-emerald-100 text-emerald-700 border border-emerald-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Approve</button>
                    <button type="button" class="bg-rose-50/80 hover:bg-rose-100 text-rose-700 border border-rose-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Reject</button>
                    <button type="button" class="bg-amber-50/80 hover:bg-amber-100 text-amber-700 border border-amber-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Changes</button>
                    
                    <button type="button" aria-label="View details" class="bg-blue-50 text-[#1E40AF] hover:bg-blue-100 border border-blue-200/80 p-2 rounded-lg flex items-center justify-center transition-colors w-9 h-9 flex-shrink-0 shadow-3xs cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 4: Sr. Theresa Raj -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-5 flex flex-col justify-between hover:border-slate-300 transition-all duration-150">
                <div>
                    <!-- Card Header: Name & Priority Badge -->
                    <div class="flex items-start justify-between gap-2">
                        <h4 class="text-base font-bold text-slate-900 font-heading leading-snug">Sr. Theresa Raj</h4>
                        <!-- Priority Badge -->
                        <span class="bg-[#FEF2F2] text-[#B91C1C] border border-[#FEE2E2] rounded-full text-[10px] px-2.5 py-0.5 font-semibold inline-flex items-center gap-1 flex-shrink-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#EF4444]"></span>
                            Urgent
                        </span>
                    </div>
                    
                    <!-- Role & Diocese -->
                    <p class="text-xs font-medium text-slate-400 font-inter mt-1.5">Sister · Jaffna Diocese</p>
                    <p class="text-[11px] font-mono text-slate-300 mt-0.5">#0084</p>

                    <!-- Horizontal details row -->
                    <div class="flex flex-wrap items-center justify-between gap-2 border-t border-slate-100/80 pt-3 mt-4 text-xs font-inter text-slate-500 leading-normal">
                        <!-- Detail 1: Date -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>21 Mar 2026</span>
                        </div>
                        
                        <!-- Detail 2: Cert Type -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Identity Cert</span>
                        </div>
                        
                        <!-- Detail 3: Queue Status -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>5 days in queue</span>
                        </div>
                    </div>

                    <!-- Verification Badges -->
                    <div class="flex flex-wrap items-center gap-2 mt-3 pb-4 border-b border-slate-100/80">
                        <span class="bg-[#FFFBEB] text-[#B45309] text-[10px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1 border border-[#FEF3C7]">
                            <span class="w-1 h-1 rounded-full bg-[#D97706]"></span>
                            Pending
                        </span>
                        <span class="bg-rose-50 text-rose-700 border border-rose-100 rounded text-[10px] px-2.5 py-0.5 font-medium">1 doc missing</span>
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex items-center justify-between gap-1.5 mt-4 pt-3 border-t border-slate-100/80">
                    <button type="button" class="bg-emerald-50/80 hover:bg-emerald-100 text-emerald-700 border border-emerald-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Approve</button>
                    <button type="button" class="bg-rose-50/80 hover:bg-rose-100 text-rose-700 border border-rose-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Reject</button>
                    <button type="button" class="bg-amber-50/80 hover:bg-amber-100 text-amber-700 border border-amber-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Changes</button>
                    
                    <button type="button" aria-label="View details" class="bg-blue-50 text-[#1E40AF] hover:bg-blue-100 border border-blue-200/80 p-2 rounded-lg flex items-center justify-center transition-colors w-9 h-9 flex-shrink-0 shadow-3xs cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Card 5: Sr. Cecilia Nonis -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-5 flex flex-col justify-between hover:border-slate-300 transition-all duration-150">
                <div>
                    <!-- Card Header: Name & Priority Badge -->
                    <div class="flex items-start justify-between gap-2">
                        <h4 class="text-base font-bold text-slate-900 font-heading leading-snug">Sr. Cecilia Nonis</h4>
                        <!-- Priority Badge -->
                        <span class="bg-[#FFFBEB] text-[#B45309] border border-[#FEF3C7] rounded-full text-[10px] px-2.5 py-0.5 font-semibold inline-flex items-center gap-1 flex-shrink-0">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                            Pending
                        </span>
                    </div>
                    
                    <!-- Role & Diocese -->
                    <p class="text-xs font-medium text-slate-400 font-inter mt-1.5">Sister · Galle Diocese</p>
                    <p class="text-[11px] font-mono text-slate-300 mt-0.5">#0082</p>

                    <!-- Horizontal details row -->
                    <div class="flex flex-wrap items-center justify-between gap-2 border-t border-slate-100/80 pt-3 mt-4 text-xs font-inter text-slate-500 leading-normal">
                        <!-- Detail 1: Date -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>19 Mar 2026</span>
                        </div>
                        
                        <!-- Detail 2: Cert Type -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <span>Both Cert</span>
                        </div>
                        
                        <!-- Detail 3: Queue Status -->
                        <div class="flex items-center gap-1 text-slate-500">
                            <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>7 days in queue</span>
                        </div>
                    </div>

                    <!-- Verification Badges -->
                    <div class="flex flex-wrap items-center gap-2 mt-3 pb-4 border-b border-slate-100/80">
                        <span class="bg-[#FFFBEB] text-[#B45309] text-[10px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1 border border-[#FEF3C7]">
                            <span class="w-1 h-1 rounded-full bg-[#D97706]"></span>
                            Pending
                        </span>
                        <span class="bg-emerald-50 text-emerald-700 border border-emerald-100 rounded text-[10px] px-2.5 py-0.5 font-medium">All docs verified</span>
                    </div>
                </div>

                <!-- Action buttons -->
                <div class="flex items-center justify-between gap-1.5 mt-4 pt-3 border-t border-slate-100/80">
                    <button type="button" class="bg-emerald-50/80 hover:bg-emerald-100 text-emerald-700 border border-emerald-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Approve</button>
                    <button type="button" class="bg-rose-50/80 hover:bg-rose-100 text-rose-700 border border-rose-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Reject</button>
                    <button type="button" class="bg-amber-50/80 hover:bg-amber-100 text-amber-700 border border-amber-200/80 rounded-lg text-xs font-semibold px-2.5 py-2 transition-colors text-center flex-1 min-h-[36px] cursor-pointer">Changes</button>
                    
                    <button type="button" aria-label="View details" class="bg-blue-50 text-[#1E40AF] hover:bg-blue-100 border border-blue-200/80 p-2 rounded-lg flex items-center justify-center transition-colors w-9 h-9 flex-shrink-0 shadow-3xs cursor-pointer">
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
