<?php
/**
 * Dashboard Overview - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 */

$page_title = "Dashboard Overview";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div>
            <span class="text-xs font-normal text-slate-400 font-inter">Home</span>
            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Dashboard Overview</h2>
        </div>

        <!-- 4 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat Card 1: Total Applications -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Total Applications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">148</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 12 this month
                </p>
            </div>

            <!-- Stat Card 2: Pending Review -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Pending Review</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">23</h3>
                </div>
                <p class="text-xs font-medium text-slate-400 mt-3 font-inter">
                    Awaiting action
                </p>
            </div>

            <!-- Stat Card 3: Approved -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Approved</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">112</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 8 this month
                </p>
            </div>

            <!-- Stat Card 4: Rejected -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-500 font-inter">Rejected</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">13</h3>
                </div>
                <p class="text-xs font-medium text-rose-600 mt-3 font-inter flex items-center">
                    ↓ 2 this month
                </p>
            </div>

        </div>

        <!-- Middle Section Grid: Recent Applications (Left 65%) & Status Distribution (Right 35%) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- Recent Applications Table Card (Spans 2 cols) -->
            <div class="lg:col-span-2 bg-[#F7F4EE] rounded-xl p-6 border border-[#EAE5D9] shadow-xs space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Recent Applications</h3>
                    <a href="<?= BASE_URL ?>applications" class="text-xs font-medium text-slate-400 hover:text-primary transition-colors font-inter flex items-center gap-1">
                        View all →
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs font-inter border-collapse">
                        <thead>
                            <tr class="bg-[#EFEAE1] text-slate-600 font-semibold border-b border-[#E3DCCE]">
                                <th scope="col" class="py-2.5 px-4 rounded-l-lg">ID</th>
                                <th scope="col" class="py-2.5 px-4">Name</th>
                                <th scope="col" class="py-2.5 px-4">Role</th>
                                <th scope="col" class="py-2.5 px-4">Submitted</th>
                                <th scope="col" class="py-2.5 px-4">Status</th>
                                <th scope="col" class="py-2.5 px-4 text-right rounded-r-lg">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#EAE5D9] text-slate-700">
                            
                            <!-- Row 1 -->
                            <tr class="bg-white/60 hover:bg-white transition-colors">
                                <td class="py-3 px-4 font-mono text-slate-400">#0089</td>
                                <td class="py-3 px-4 font-medium text-slate-900">Fr. Anthony Silva</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#F0EAE1] text-[#634E35] text-[11px] px-2.5 py-0.5 rounded-md font-medium">Father</span>
                                </td>
                                <td class="py-3 px-4 text-slate-500">26 Mar 2026</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                        Pending
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <a href="#" class="text-blue-600 hover:underline font-medium text-xs">View ↗</a>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="bg-white/60 hover:bg-white transition-colors">
                                <td class="py-3 px-4 font-mono text-slate-400">#0088</td>
                                <td class="py-3 px-4 font-medium text-slate-900">Sr. Mary Colette</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#EFEFEF] text-slate-600 text-[11px] px-2.5 py-0.5 rounded-md font-medium">Sister</span>
                                </td>
                                <td class="py-3 px-4 text-slate-500">25 Mar 2026</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                        Approved
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <a href="#" class="text-blue-600 hover:underline font-medium text-xs">View ↗</a>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="bg-white/60 hover:bg-white transition-colors">
                                <td class="py-3 px-4 font-mono text-slate-400">#0087</td>
                                <td class="py-3 px-4 font-medium text-slate-900">Fr. James Perera</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#F0EAE1] text-[#634E35] text-[11px] px-2.5 py-0.5 rounded-md font-medium">Father</span>
                                </td>
                                <td class="py-3 px-4 text-slate-500">24 Mar 2026</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#DBEAFE] text-[#1E40AF] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                                        In Review
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <a href="#" class="text-blue-600 hover:underline font-medium text-xs">View ↗</a>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="bg-white/60 hover:bg-white transition-colors">
                                <td class="py-3 px-4 font-mono text-slate-400">#0086</td>
                                <td class="py-3 px-4 font-medium text-slate-900">Sr. Agnes Fernando</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#EFEFEF] text-slate-600 text-[11px] px-2.5 py-0.5 rounded-md font-medium">Sister</span>
                                </td>
                                <td class="py-3 px-4 text-slate-500">23 Mar 2026</td>
                                <td class="py-3 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                        Approved
                                    </span>
                                </td>
                                <td class="py-3 px-4 text-right">
                                    <a href="#" class="text-blue-600 hover:underline font-medium text-xs">View ↗</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Status Distribution Donut Chart Card (Right Col) -->
            <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-6">
                <h3 class="text-lg font-bold text-slate-900 font-heading">Status Distribution</h3>

                <!-- Donut Chart Segment Graphic -->
                <div class="relative flex items-center justify-center py-2">
                    <svg class="w-40 h-40 transform -rotate-90" viewBox="0 0 36 36">
                        <!-- Track background -->
                        <path class="text-slate-100" stroke-width="4" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                        
                        <!-- Approved: 76% (Blue) -->
                        <path class="text-blue-600 transition-all duration-500" stroke-dasharray="76 100" stroke-dashoffset="0" stroke-width="4" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                        
                        <!-- Pending: 15% (Gold/Amber) -->
                        <path class="text-amber-600 transition-all duration-500" stroke-dasharray="15 100" stroke-dashoffset="-76" stroke-width="4" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                        
                        <!-- Rejected: 9% (Crimson/Primary #4E0000) -->
                        <path class="text-primary transition-all duration-500" stroke-dasharray="9 100" stroke-dashoffset="-91" stroke-width="4" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                    </svg>

                    <!-- Donut Center Label -->
                    <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                        <span class="text-2xl font-bold text-slate-900 font-heading leading-none">148</span>
                        <span class="text-[10px] text-slate-400 font-inter mt-0.5 uppercase tracking-wider">TOTAL</span>
                    </div>
                </div>

                <!-- Donut Chart Legend -->
                <div class="space-y-2.5 text-xs font-inter text-slate-600 pt-2 border-t border-slate-100">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                            <span>Approved — 112 (76%)</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-600"></span>
                            <span>Pending — 23 (15%)</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-primary"></span>
                            <span>Rejected — 13 (9%)</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Section Grid: Monthly Applications (2026) Bar Chart & Quick Summary Table -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- Monthly Applications Bar Chart Card (Spans 2 cols) -->
            <div class="lg:col-span-2 bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-6">
                <h3 class="text-lg font-bold text-slate-900 font-heading">Monthly Applications (2026)</h3>

                <!-- 12-Month Bar Chart Display matching exact design -->
                <div class="pt-6 pb-2">
                    <div class="h-44 flex items-end justify-between gap-2 border-b border-slate-200/80 px-2">
                        
                        <!-- Jan: 18 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">18</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[72px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Jan</span>
                        </div>

                        <!-- Feb: 15 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">15</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[60px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Feb</span>
                        </div>

                        <!-- Mar: 30 (Highlight Dark Navy Bar) -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-bold text-slate-900 font-inter">30</span>
                            <div class="w-full bg-secondary rounded-t-sm shadow-xs transition-all group-hover:bg-secondary-dark h-[120px]"></div>
                            <span class="text-[10px] font-semibold text-slate-700 font-inter -mb-6">Mar</span>
                        </div>

                        <!-- Apr: 12 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">12</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[48px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Apr</span>
                        </div>

                        <!-- May: 21 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">21</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[84px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">May</span>
                        </div>

                        <!-- Jun: 17 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">17</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[68px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Jun</span>
                        </div>

                        <!-- Jul: 9 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">9</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[36px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Jul</span>
                        </div>

                        <!-- Aug: 14 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">14</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[56px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Aug</span>
                        </div>

                        <!-- Sep: 11 -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-400 font-inter">11</span>
                            <div class="w-full bg-[#DBEAFE] rounded-t-sm transition-all group-hover:bg-[#BFDBFE] h-[44px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Sep</span>
                        </div>

                        <!-- Oct: - -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-300 font-inter">—</span>
                            <div class="w-full bg-slate-100 rounded-t-sm h-[8px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Oct</span>
                        </div>

                        <!-- Nov: - -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-300 font-inter">—</span>
                            <div class="w-full bg-slate-100 rounded-t-sm h-[8px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Nov</span>
                        </div>

                        <!-- Dec: - -->
                        <div class="flex-1 flex flex-col items-center gap-2 group">
                            <span class="text-[11px] font-medium text-slate-300 font-inter">—</span>
                            <div class="w-full bg-slate-100 rounded-t-sm h-[8px]"></div>
                            <span class="text-[10px] text-slate-400 font-inter -mb-6">Dec</span>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Quick Summary Card (Right Col) -->
            <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
                <h3 class="text-lg font-bold text-slate-900 font-heading">Quick Summary</h3>

                <div class="divide-y divide-slate-100 text-xs font-inter">
                    <div class="py-3 flex items-center justify-between text-slate-600">
                        <span>Fathers</span>
                        <span class="font-bold text-slate-900 font-heading">89</span>
                    </div>

                    <div class="py-3 flex items-center justify-between text-slate-600">
                        <span>Sisters</span>
                        <span class="font-bold text-slate-900 font-heading">59</span>
                    </div>

                    <div class="py-3 flex items-center justify-between text-slate-600">
                        <span>Identity Certs Issued</span>
                        <span class="font-bold text-slate-900 font-heading">78</span>
                    </div>

                    <div class="py-3 flex items-center justify-between text-slate-600">
                        <span>Passport Letters</span>
                        <span class="font-bold text-slate-900 font-heading">34</span>
                    </div>

                    <div class="py-3 flex items-center justify-between text-slate-600">
                        <span>Avg. Processing (days)</span>
                        <span class="font-bold text-slate-900 font-heading">4.2</span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
