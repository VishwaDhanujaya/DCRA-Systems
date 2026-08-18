<?php
/**
 * Archive Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 */

$page_title = "Archive";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div>
            <span class="text-xs font-normal text-slate-400 font-inter">Home / Archive</span>
            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Archive</h2>
        </div>

        <!-- Filters Section -->
        <div class="flex flex-wrap lg:flex-nowrap items-center gap-2 sm:gap-2.5 bg-transparent w-full">
            <!-- Search field -->
            <div class="relative flex-1 min-w-[200px] sm:min-w-[240px]">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search name, ID, or diocese..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all h-10 sm:h-9 min-h-[40px]">
            </div>

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
            </select>

            <!-- Dropdown: All Years -->
            <select class="bg-white border border-slate-200/80 rounded-lg text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-300 transition-all py-1.5 pl-2.5 pr-7 cursor-pointer h-10 sm:h-9 min-h-[40px] flex-shrink-0">
                <option>All Years</option>
                <option>2026</option>
                <option>2025</option>
                <option>2024</option>
            </select>

            <!-- Reset Filter Button -->
            <button type="button" class="border border-rose-200 bg-rose-50 text-[#B91C1C] hover:bg-rose-100 rounded-lg text-xs font-inter font-medium px-3 py-1.5 flex items-center justify-center gap-1.5 transition-colors h-10 sm:h-9 min-h-[40px] flex-shrink-0 whitespace-nowrap">
                Reset Filter
                <svg class="w-3.5 h-3.5 text-[#B91C1C]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
        </div>

        <!-- Archive Table Card -->
        <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-4">
            
            <!-- Export button aligned to right -->
            <div class="flex justify-end">
                <button type="button" class="border border-slate-200 bg-white text-slate-600 hover:bg-slate-50 text-xs px-3.5 py-1.5 rounded-lg flex items-center gap-1.5 transition-colors font-inter shadow-3xs">
                    <!-- Export Tray SVG -->
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Export
                </button>
            </div>

            <!-- Table Layout -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse">
                    <thead>
                        <tr class="bg-[#F6F3EC] text-slate-500 font-semibold border-b border-slate-200/60 uppercase text-[10px] tracking-wider">
                            <th scope="col" class="py-3 px-5 font-heading">Cert No.</th>
                            <th scope="col" class="py-3 px-5 font-heading">Name</th>
                            <th scope="col" class="py-3 px-5 font-heading">Role</th>
                            <th scope="col" class="py-3 px-5 font-heading">Type</th>
                            <th scope="col" class="py-3 px-5 font-heading">Diocese</th>
                            <th scope="col" class="py-3 px-5 font-heading">Issued</th>
                            <th scope="col" class="py-3 px-5 font-heading">Valid Until</th>
                            <th scope="col" class="py-3 px-5 text-right font-heading">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-blue-600 hover:underline cursor-pointer">CERT-2026-080</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Sr. Mary Colette</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF5FF] text-[#7E22CE] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#F3E8FF]/80">Sister</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Kandy</td>
                            <td class="py-3.5 px-5 text-slate-500">25 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-500">24 Mar 2027</td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3.5 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-blue-600 hover:underline cursor-pointer">CERT-2026-079</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Sr. Agnes Fernando</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF5FF] text-[#7E22CE] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#F3E8FF]/80">Sister</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Galle</td>
                            <td class="py-3.5 px-5 text-slate-500">23 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-500">22 Mar 2027</td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3.5 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-blue-600 hover:underline cursor-pointer">CERT-2026-078</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Fr. Lucas Mendis</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Father</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF8F5] text-[#635543] text-[11px] px-2.5 py-0.5 rounded border border-[#EFEAE1] font-medium">Passport</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Kandy</td>
                            <td class="py-3.5 px-5 text-slate-500">20 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-500">19 Mar 2027</td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3.5 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-blue-600 hover:underline cursor-pointer">CERT-2025-077</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Fr. Daniel Peris</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Father</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Colombo</td>
                            <td class="py-3.5 px-5 text-slate-500">01 Dec 2025</td>
                            <td class="py-3.5 px-5 text-slate-500">30 Nov 2026</td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3.5 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-blue-600 hover:underline cursor-pointer">CERT-2025-076</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Sr. Rosa Almeida</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF5FF] text-[#7E22CE] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#F3E8FF]/80">Sister</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF8F5] text-[#635543] text-[11px] px-2.5 py-0.5 rounded border border-[#EFEAE1] font-medium">Passport</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Colombo</td>
                            <td class="py-3.5 px-5 text-slate-500">14 Nov 2025</td>
                            <td class="py-3.5 px-5 text-slate-500">13 Nov 2026</td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3.5 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-blue-600 hover:underline cursor-pointer">CERT-2025-075</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Fr. Thomas Jayawardena</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Father</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Galle</td>
                            <td class="py-3.5 px-5 text-slate-500">02 Oct 2025</td>
                            <td class="py-3.5 px-5 text-slate-500">01 Oct 2026</td>
                            <td class="py-3.5 px-5 text-right">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3.5 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Table Footer / Pagination -->
            <div class="flex items-center justify-end pt-4 border-t border-slate-100 font-inter">
                <div class="flex items-center gap-1">
                    <!-- First page button -->
                    <button type="button" aria-label="First page" disabled class="border border-slate-100 text-slate-300 rounded-md text-xs px-2.5 py-1.5 cursor-not-allowed font-medium bg-slate-50/50">
                        «
                    </button>
                    <!-- Prev page button -->
                    <button type="button" aria-label="Previous page" disabled class="border border-slate-100 text-slate-300 rounded-md text-xs px-2.5 py-1.5 cursor-not-allowed font-medium bg-slate-50/50">
                        ‹
                    </button>
                    <!-- Page 1 button (Active) -->
                    <button type="button" class="bg-secondary text-white rounded-md text-xs font-semibold px-3 py-1.5 shadow-xs transition-colors">
                        1
                    </button>
                    <!-- Page 2 button (Inactive) -->
                    <button type="button" class="border border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-slate-800 rounded-md text-xs px-3 py-1.5 transition-colors font-medium">
                        2
                    </button>
                    <!-- Next page button -->
                    <button type="button" aria-label="Next page" class="border border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-slate-800 rounded-md text-xs px-2.5 py-1.5 transition-colors font-medium">
                        ›
                    </button>
                    <!-- Last page button -->
                    <button type="button" aria-label="Last page" class="border border-slate-200 text-slate-600 hover:bg-slate-50 hover:text-slate-800 rounded-md text-xs px-2.5 py-1.5 transition-colors font-medium">
                        »
                    </button>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
