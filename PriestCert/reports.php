<?php
/**
 * Reports Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 */

$page_title = "Reports";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Reports</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Reports</h2>
            </div>
            <div>
                <button type="button" class="bg-secondary hover:bg-secondary-dark text-white font-medium text-xs px-4 py-2 h-9 rounded-lg flex items-center justify-center gap-2 shadow-xs transition-colors font-inter">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Download Report
                </button>
            </div>
        </div>

        <!-- Filters Row -->
        <div class="flex flex-wrap items-center gap-4 text-xs text-slate-500 font-inter bg-transparent">
            <!-- From Date -->
            <div class="flex items-center gap-2">
                <span>From</span>
                <input type="text" value="01 Jan 2026" class="bg-white border border-slate-200 rounded-lg py-1.5 px-3 w-32 h-10 sm:h-9 min-h-[40px] focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 text-slate-800 text-xs font-medium">
            </div>
            <!-- To Date -->
            <div class="flex items-center gap-2">
                <span>To</span>
                <input type="text" value="26 Mar 2026" class="bg-white border border-slate-200 rounded-lg py-1.5 px-3 w-32 h-10 sm:h-9 min-h-[40px] focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 text-slate-800 text-xs font-medium">
            </div>
            <!-- Dropdown: All types -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-3 pr-8 cursor-pointer h-10 sm:h-9 min-h-[40px]">
                <option>All types</option>
                <option>Identity</option>
                <option>Passport</option>
            </select>
            <!-- Dropdown: All dioceses -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-3 pr-8 cursor-pointer h-10 sm:h-9 min-h-[40px]">
                <option>All dioceses</option>
                <option>Colombo</option>
                <option>Kandy</option>
                <option>Galle</option>
                <option>Jaffna</option>
            </select>
        </div>

        <!-- 4 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            
            <!-- Stat Card 1: Applications -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">APPLICATIONS</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">63</h3>
                </div>
            </div>

            <!-- Stat Card 2: Certs Issued -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">CERTS ISSUED</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">51</h3>
                </div>
            </div>

            <!-- Stat Card 3: Avg. Processing -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">AVG. PROCESSING</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">4.2 days</h3>
                </div>
            </div>

            <!-- Stat Card 4: Approval Rate -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading">APPROVAL RATE</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">81%</h3>
                </div>
            </div>

        </div>

        <!-- Main Double Column Workspace Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 items-start">
            
            <!-- Left Card: Applications Per Month -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-6">
                <h3 class="text-lg font-bold text-slate-950 font-heading">Applications Per Month</h3>
                
                <!-- 3-Month Bar Chart Representation -->
                <div class="pt-6 pb-2 border-b border-slate-100">
                    <div class="h-44 flex items-end justify-center gap-12 border-b border-slate-200/80 px-4">
                        
                        <!-- Jan: 18 -->
                        <div class="w-24 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">18</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[72px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter mt-1">Jan</span>
                        </div>

                        <!-- Feb: 15 -->
                        <div class="w-24 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">15</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[60px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter mt-1">Feb</span>
                        </div>

                        <!-- Mar: 30 -->
                        <div class="w-24 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-bold text-[#13273F] font-inter">30</span>
                            <div class="w-full bg-secondary rounded-t-sm transition-all group-hover:bg-secondary-dark h-[120px] shadow-2xs"></div>
                            <span class="text-[10px] font-semibold text-slate-700 font-inter mt-1">Mar</span>
                        </div>

                    </div>
                </div>

                <!-- Table below -->
                <div class="divide-y divide-slate-100 text-xs font-inter">
                    <div class="py-3 flex items-center justify-between text-slate-650">
                        <span class="text-slate-500">Fathers</span>
                        <span class="font-bold text-slate-900 font-heading">89</span>
                    </div>

                    <div class="py-3 flex items-center justify-between text-slate-650">
                        <span class="text-slate-500">Sisters</span>
                        <span class="font-bold text-slate-900 font-heading">59</span>
                    </div>

                    <div class="py-3 flex items-center justify-between text-slate-650">
                        <span class="text-slate-500">Identity Certs Issued</span>
                        <span class="font-bold text-slate-900 font-heading">78</span>
                    </div>

                    <div class="py-3 flex items-center justify-between text-slate-650">
                        <span class="text-slate-500">Passport Letters</span>
                        <span class="font-bold text-slate-900 font-heading">34</span>
                    </div>
                </div>
            </div>

            <!-- Right Card: Diocese Breakdown & Status -->
            <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-6">
                
                <!-- Sub-section: Diocese Breakdown -->
                <div class="space-y-4">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Diocese Breakdown</h3>
                    
                    <div class="divide-y divide-slate-100 text-xs font-inter">
                        <div class="py-3 flex items-center justify-between text-slate-500">
                            <span>Colombo</span>
                            <span class="font-semibold text-slate-800">89</span>
                        </div>

                        <div class="py-3 flex items-center justify-between text-slate-500">
                            <span>Kandy</span>
                            <span class="font-semibold text-slate-800">59</span>
                        </div>

                        <div class="py-3 flex items-center justify-between text-slate-500">
                            <span>Galle</span>
                            <span class="font-semibold text-slate-800">78</span>
                        </div>

                        <div class="py-3 flex items-center justify-between text-slate-500">
                            <span>Jaffna</span>
                            <span class="font-semibold text-slate-800">34</span>
                        </div>

                        <div class="py-3 flex items-center justify-between font-bold text-slate-900 border-t border-slate-200 pt-3">
                            <span>Total</span>
                            <span class="font-bold text-slate-950 font-heading">260</span>
                        </div>
                    </div>
                </div>

                <!-- Sub-section: Status -->
                <div class="space-y-4 pt-4">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Status</h3>
                    
                    <div class="divide-y divide-slate-100 text-xs font-inter">
                        <div class="py-3 flex items-center justify-between text-slate-500">
                            <span>Approved</span>
                            <span class="font-semibold text-slate-800">51 (81%)</span>
                        </div>

                        <div class="py-3 flex items-center justify-between text-slate-500">
                            <span>Pending</span>
                            <span class="font-semibold text-slate-800">8 (13%)</span>
                        </div>

                        <div class="py-3 flex items-center justify-between text-slate-500">
                            <span>Rejected</span>
                            <span class="font-semibold text-slate-800">4 (6%)</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
