<?php
/**
 * Reports & Analytics Page
 * Department of Christian Religious Affairs
 * Free of Charge Medical Letter Issuing System
 */

$page_title = "Reports & Analytics";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Reports</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Reports & Analytics</h2>
            </div>
            <div class="flex items-center gap-3">
                <button type="button" class="border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-2xs flex items-center gap-2 transition-all cursor-pointer min-h-[40px]">
                    <svg class="w-4 h-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export Summary
                </button>
                <a href="<?= BASE_URL ?>new-medical-letter" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-5 py-2.5 rounded-lg shadow-xs flex items-center justify-center gap-2 transition-all min-h-[40px] whitespace-nowrap cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                    </svg>
                    New Medical Letter
                </a>
            </div>
        </div>

        <!-- 4 Stat Summary Cards with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat 1 -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">TOTAL REPORTS GENERATED</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">312</h3>
                    <p class="text-xs text-emerald-600 font-medium font-inter mt-1.5 flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                        <span>&uarr; 14% vs last month</span>
                    </p>
                </div>
            </div>

            <!-- Stat 2 -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">ENTRY VISA STATEMENTS</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">184</h3>
                    <p class="text-xs text-slate-500 font-medium font-inter mt-1.5">59% of total volume</p>
                </div>
            </div>

            <!-- Stat 3 -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">RESIDENT VISA STATEMENTS</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">96</h3>
                    <p class="text-xs text-slate-500 font-medium font-inter mt-1.5">31% of total volume</p>
                </div>
            </div>

            <!-- Stat 4 -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">VISA EXTENSIONS APPROVED</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">32</h3>
                    <p class="text-xs text-slate-500 font-medium font-inter mt-1.5">10% of total volume</p>
                </div>
            </div>

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
                <input type="text" id="report-search-query" placeholder="Search report ID, applicant name or passport..." class="w-full pl-10 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 focus:ring-1 focus:ring-slate-300 transition-all h-9">
            </div>

            <!-- Right: Filters & Format Controls -->
            <div class="flex flex-wrap items-center gap-3">
                
                <div class="flex items-center space-x-2">
                    <span class="text-xs text-slate-500 font-inter font-medium">From</span>
                    <input type="text" value="01 Jan 2026" placeholder="DD MMM YYYY" class="w-28 text-center py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:border-slate-300 transition-all h-9">
                </div>

                <div class="flex items-center space-x-2">
                    <span class="text-xs text-slate-500 font-inter font-medium">To</span>
                    <input type="text" value="31 Mar 2026" placeholder="DD MMM YYYY" class="w-28 text-center py-2 bg-slate-50 border border-slate-200 rounded-lg text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:border-slate-300 transition-all h-9">
                </div>

                <div class="relative">
                    <select class="appearance-none bg-none bg-slate-50 border border-slate-200 rounded-lg pl-3.5 pr-8 py-2 text-xs font-semibold text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer h-9">
                        <option value="all">All Categories</option>
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

                <button type="button" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-4 py-2 rounded-lg transition-colors h-9 cursor-pointer">
                    Apply Filter
                </button>
            </div>
        </div>

        <!-- Analytical Breakdown Grid (Category Metrics & Health Division Summary) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- Category Volume Breakdown -->
            <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4 lg:col-span-2">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Category Volume Breakdown</h3>
                    <span class="text-xs text-slate-400 font-inter">Q1 2026 Data</span>
                </div>

                <div class="space-y-4 font-inter">
                    <div>
                        <div class="flex justify-between text-xs font-semibold text-slate-700 mb-1.5">
                            <span>Entry Visa Recommendations</span>
                            <span class="font-bold text-slate-900">184 letters (59%)</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#13273F] h-2.5 rounded-full" style="width: 59%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs font-semibold text-slate-700 mb-1.5">
                            <span>Resident Visa Recommendations</span>
                            <span class="font-bold text-slate-900">96 letters (31%)</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#4E0000] h-2.5 rounded-full" style="width: 31%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between text-xs font-semibold text-slate-700 mb-1.5">
                            <span>Visa Extension Approvals</span>
                            <span class="font-bold text-slate-900">32 letters (10%)</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-[#D4AF37] h-2.5 rounded-full" style="width: 10%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Health Services Division Clearance Summary -->
            <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                    <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Department Status</h3>
                </div>
                
                <div class="space-y-3 text-xs font-inter">
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-200/60">
                        <span class="font-semibold text-slate-700">Health Services Division</span>
                        <span class="px-2 py-0.5 text-[10px] font-bold bg-emerald-100 text-emerald-800 rounded-md">Operational</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-200/60">
                        <span class="font-semibold text-slate-700">Visa Recommendation Sync</span>
                        <span class="px-2 py-0.5 text-[10px] font-bold bg-emerald-100 text-emerald-800 rounded-md">Connected</span>
                    </div>
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg border border-slate-200/60">
                        <span class="font-semibold text-slate-700">Defence Security Clearance</span>
                        <span class="px-2 py-0.5 text-[10px] font-bold bg-emerald-100 text-emerald-800 rounded-md">Active</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Master Reports Data Table Card -->
        <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs overflow-hidden">
            <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Generated Medical Reports Log</h3>
                <span class="text-xs text-slate-400 font-inter">Showing 5 of 312 records</span>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse font-inter text-xs">
                    <thead>
                        <tr class="bg-slate-50/80 border-b border-slate-200/80 text-slate-500 font-heading font-bold uppercase text-[10px] tracking-wider">
                            <th class="py-3.5 px-4 sm:px-6">REPORT REF</th>
                            <th class="py-3.5 px-4">APPLICANT NAME</th>
                            <th class="py-3.5 px-4">PASSPORT NO</th>
                            <th class="py-3.5 px-4">VISA TYPE</th>
                            <th class="py-3.5 px-4">DATE ISSUED</th>
                            <th class="py-3.5 px-4">STATUS</th>
                            <th class="py-3.5 px-4 sm:px-6 text-right">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-slate-900">RPT-2026-0043</td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900">Fr. Anthony Silva</td>
                            <td class="py-3.5 px-4 font-mono">GH2847391</td>
                            <td class="py-3.5 px-4">Entry Visa</td>
                            <td class="py-3.5 px-4 text-slate-500">26 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="inline-block px-2.5 py-0.5 text-[10px] font-bold bg-[#E6F4ED] text-[#236B4E] rounded-md">Issued</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-6 text-right">
                                <button type="button" class="text-primary hover:text-primary-dark font-bold font-heading text-xs cursor-pointer">Download</button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-slate-900">RPT-2026-0042</td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900">Rev. Joseph Perera</td>
                            <td class="py-3.5 px-4 font-mono">N7890123</td>
                            <td class="py-3.5 px-4">Resident Visa</td>
                            <td class="py-3.5 px-4 text-slate-500">24 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="inline-block px-2.5 py-0.5 text-[10px] font-bold bg-[#E6F4ED] text-[#236B4E] rounded-md">Issued</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-6 text-right">
                                <button type="button" class="text-primary hover:text-primary-dark font-bold font-heading text-xs cursor-pointer">Download</button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-slate-900">RPT-2026-0041</td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900">Sister Mary Catherine</td>
                            <td class="py-3.5 px-4 font-mono">P4567890</td>
                            <td class="py-3.5 px-4">Visa Extension</td>
                            <td class="py-3.5 px-4 text-slate-500">22 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="inline-block px-2.5 py-0.5 text-[10px] font-bold bg-[#E6F4ED] text-[#236B4E] rounded-md">Issued</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-6 text-right">
                                <button type="button" class="text-primary hover:text-primary-dark font-bold font-heading text-xs cursor-pointer">Download</button>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-slate-900">RPT-2026-0040</td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900">Fr. Francis Xavier</td>
                            <td class="py-3.5 px-4 font-mono">K1234567</td>
                            <td class="py-3.5 px-4">Entry Visa</td>
                            <td class="py-3.5 px-4 text-slate-500">20 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="inline-block px-2.5 py-0.5 text-[10px] font-bold bg-[#FDF5E6] text-[#C59B3F] rounded-md">Pending</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-6 text-right">
                                <button type="button" class="text-primary hover:text-primary-dark font-bold font-heading text-xs cursor-pointer">Download</button>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-4 sm:px-6 font-mono font-bold text-slate-900">RPT-2026-0039</td>
                            <td class="py-3.5 px-4 font-semibold text-slate-900">John Doe</td>
                            <td class="py-3.5 px-4 font-mono">AB123456</td>
                            <td class="py-3.5 px-4">Resident Visa</td>
                            <td class="py-3.5 px-4 text-slate-500">18 Mar 2026</td>
                            <td class="py-3.5 px-4">
                                <span class="inline-block px-2.5 py-0.5 text-[10px] font-bold bg-[#E6F4ED] text-[#236B4E] rounded-md">Issued</span>
                            </td>
                            <td class="py-3.5 px-4 sm:px-6 text-right">
                                <button type="button" class="text-primary hover:text-primary-dark font-bold font-heading text-xs cursor-pointer">Download</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Pagination Footer -->
            <div class="px-6 py-4 bg-slate-50/80 border-t border-slate-200/80 flex flex-col sm:flex-row items-center justify-between gap-4 font-inter text-xs text-slate-500">
                <span>Showing 1 to 5 of 312 entries</span>
                <div class="flex items-center space-x-1">
                    <button type="button" class="px-3 py-1.5 border border-slate-200 rounded-md bg-white hover:bg-slate-50 text-slate-600 font-semibold cursor-pointer">Previous</button>
                    <button type="button" class="px-3 py-1.5 border border-primary bg-primary text-white font-semibold rounded-md shadow-2xs">1</button>
                    <button type="button" class="px-3 py-1.5 border border-slate-200 rounded-md bg-white hover:bg-slate-50 text-slate-600 font-semibold cursor-pointer">2</button>
                    <button type="button" class="px-3 py-1.5 border border-slate-200 rounded-md bg-white hover:bg-slate-50 text-slate-600 font-semibold cursor-pointer">3</button>
                    <button type="button" class="px-3 py-1.5 border border-slate-200 rounded-md bg-white hover:bg-slate-50 text-slate-600 font-semibold cursor-pointer">Next</button>
                </div>
            </div>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
