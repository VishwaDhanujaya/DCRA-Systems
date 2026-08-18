<?php
/**
 * Dashboard Overview - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Church Renovation Information System
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
            
            <!-- Stat Card 1: Total Renovations -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Total Renovations</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">128</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 12 new this quarter
                </p>
            </div>

            <!-- Stat Card 2: Pending Approval -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Pending Approval</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">14</h3>
                </div>
                <p class="text-xs font-medium text-primary mt-3 font-inter flex items-center">
                    Requires attention
                </p>
            </div>

            <!-- Stat Card 3: In Progress -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">In Progress</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">37</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 4 started this month
                </p>
            </div>

            <!-- Stat Card 4: Completed -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[11px] font-semibold text-slate-400 font-inter uppercase tracking-wide">Completed</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1">77</h3>
                </div>
                <p class="text-xs font-medium text-emerald-600 mt-3 font-inter flex items-center">
                    ↑ 8 completed this quarter
                </p>
            </div>

        </div>

        <!-- Middle Section Grid: Recent Renovations (Left 65%) & 3 Panels (Right 35%) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- Recent Renovation Requests Table Card (Spans 2 cols) -->
            <div class="lg:col-span-2 bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Recent Renovation Requests</h3>
                    <a href="<?= BASE_URL ?>requests" class="text-xs font-medium text-slate-400 hover:text-primary transition-colors font-inter flex items-center gap-1">
                        View all →
                    </a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs font-inter border-collapse min-w-[700px]">
                        <thead>
                            <tr class="bg-[#F7F4EE] text-slate-500 font-semibold uppercase tracking-wider text-[10px] border-b border-[#EAE5D9]">
                                <th scope="col" class="py-3 px-4 rounded-tl-lg whitespace-nowrap">Request ID</th>
                                <th scope="col" class="py-3 px-4 whitespace-nowrap">Church</th>
                                <th scope="col" class="py-3 px-4 whitespace-nowrap">Work Type</th>
                                <th scope="col" class="py-3 px-4 whitespace-nowrap">Submitted</th>
                                <th scope="col" class="py-3 px-4 whitespace-nowrap">Budget (LKR)</th>
                                <th scope="col" class="py-3 px-4 whitespace-nowrap">Progress</th>
                                <th scope="col" class="py-3 px-4 text-left whitespace-nowrap">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50/50 transition-colors group">
                                <td class="py-3 px-4 font-mono text-blue-600 font-medium whitespace-nowrap">#REN-2025-081</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="font-medium text-slate-900">St. Anthony's Church</div>
                                    <div class="text-[10px] text-slate-400 mt-0.5">Colombo Diocese</div>
                                </td>
                                <td class="py-3 px-4 whitespace-nowrap">Roof restoration</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">12 Jan 2025</td>
                                <td class="py-3 px-4 font-medium text-slate-700 whitespace-nowrap">4,200,000</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">72%</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="flex items-center justify-between">
                                        <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                            In Progress
                                        </span>
                                        <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-blue-600 hover:underline font-medium text-[11px] ml-4 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View →</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50/50 transition-colors group">
                                <td class="py-3 px-4 font-mono text-blue-600 font-medium whitespace-nowrap">#REN-2025-079</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="font-medium text-slate-900">St. Mary's Cathedral</div>
                                    <div class="text-[10px] text-slate-400 mt-0.5">Kandy Diocese</div>
                                </td>
                                <td class="py-3 px-4 whitespace-nowrap">Interior renovation</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">05 Jan 2025</td>
                                <td class="py-3 px-4 font-medium text-slate-700 whitespace-nowrap">8,750,000</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">100%</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="flex items-center justify-between">
                                        <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#2563EB]"></span>
                                            Completed
                                        </span>
                                        <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-blue-600 hover:underline font-medium text-[11px] ml-4 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View →</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-slate-50/50 transition-colors group">
                                <td class="py-3 px-4 font-mono text-blue-600 font-medium whitespace-nowrap">#REN-2024-076</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="font-medium text-slate-900">Holy Trinity Church</div>
                                    <div class="text-[10px] text-slate-400 mt-0.5">Galle Diocese</div>
                                </td>
                                <td class="py-3 px-4 whitespace-nowrap">Bell tower repair</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">28 Dec 2024</td>
                                <td class="py-3 px-4 font-medium text-slate-700 whitespace-nowrap">1,500,000</td>
                                <td class="py-3 px-4 text-slate-400 whitespace-nowrap">—</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="flex items-center justify-between">
                                        <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                            Pending
                                        </span>
                                        <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-blue-600 hover:underline font-medium text-[11px] ml-4 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View →</a>
                                    </div>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-slate-50/50 transition-colors group">
                                <td class="py-3 px-4 font-mono text-blue-600 font-medium whitespace-nowrap">#REN-2024-074</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="font-medium text-slate-900">Sacred Heart Church</div>
                                    <div class="text-[10px] text-slate-400 mt-0.5">Jaffna Diocese</div>
                                </td>
                                <td class="py-3 px-4 whitespace-nowrap">Facade restoration</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">20 Dec 2024</td>
                                <td class="py-3 px-4 font-medium text-slate-700 whitespace-nowrap">3,300,000</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">45%</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="flex items-center justify-between">
                                        <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                            In Progress
                                        </span>
                                        <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-blue-600 hover:underline font-medium text-[11px] ml-4 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View →</a>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Row 5 -->
                            <tr class="hover:bg-slate-50/50 transition-colors group">
                                <td class="py-3 px-4 font-mono text-blue-600 font-medium whitespace-nowrap">#REN-2024-071</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="font-medium text-slate-900">St. Peter's Church</div>
                                    <div class="text-[10px] text-slate-400 mt-0.5">Matara Diocese</div>
                                </td>
                                <td class="py-3 px-4 whitespace-nowrap">Electrical upgrade</td>
                                <td class="py-3 px-4 text-slate-500 whitespace-nowrap">14 Dec 2024</td>
                                <td class="py-3 px-4 font-medium text-slate-700 whitespace-nowrap">980,000</td>
                                <td class="py-3 px-4 text-slate-400 whitespace-nowrap">—</td>
                                <td class="py-3 px-4 whitespace-nowrap">
                                    <div class="flex items-center justify-between">
                                        <span class="bg-[#FEE2E2] text-[#991B1B] text-[11px] px-2 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#EF4444]"></span>
                                            Rejected
                                        </span>
                                        <a href="<?= BASE_URL ?>requests/REN-2026-001" class="text-blue-600 hover:underline font-medium text-[11px] ml-4 opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">View →</a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="flex items-center justify-end pt-4 border-t border-slate-100">
                    <nav class="flex items-center gap-1" aria-label="Pagination">
                        <button class="px-2.5 py-1.5 rounded-md border border-slate-200 text-slate-400 hover:bg-slate-50 text-xs font-medium">‹</button>
                        <button class="px-3 py-1.5 rounded-md bg-secondary text-white text-xs font-medium border border-secondary">1</button>
                        <button class="px-3 py-1.5 rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-medium">2</button>
                        <button class="px-3 py-1.5 rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-medium">3</button>
                        <span class="px-2 py-1.5 text-slate-400 text-xs">...</span>
                        <button class="px-3 py-1.5 rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-medium">26</button>
                        <button class="px-2.5 py-1.5 rounded-md border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-medium">›</button>
                    </nav>
                </div>
            </div>

            <!-- Right Column Panels -->
            <div class="space-y-6">
                <!-- Status Distribution Donut Chart Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-6">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Status Distribution</h3>

                    <div class="flex items-center">
                        <!-- Donut Chart Segment Graphic -->
                        <div class="relative flex items-center justify-center w-28 h-28 shrink-0">
                            <svg class="w-28 h-28" style="transform: rotate(-90deg); transform-origin: center;" viewBox="0 0 36 36">
                                <!-- Track background -->
                                <circle cx="18" cy="18" r="15.9155" fill="none" stroke="#F1F5F9" stroke-width="4.5"/>
                                
                                <!-- Completed: 60% (Blue) -->
                                <circle cx="18" cy="18" r="15.9155" fill="none" stroke="#2563EB" stroke-width="4.5" stroke-dasharray="60 100" stroke-dashoffset="0" class="transition-all duration-500"/>
                                
                                <!-- In Progress: 15% (Gold/Amber) -->
                                <circle cx="18" cy="18" r="15.9155" fill="none" stroke="#D97706" stroke-width="4.5" stroke-dasharray="15 100" stroke-dashoffset="-60" class="transition-all duration-500"/>
                                
                                <!-- Pending: 9% (Crimson/Primary #4E0000) -->
                                <circle cx="18" cy="18" r="15.9155" fill="none" stroke="#4E0000" stroke-width="4.5" stroke-dasharray="9 100" stroke-dashoffset="-75" class="transition-all duration-500"/>
                            </svg>

                            <!-- Donut Center Label -->
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <span class="text-lg font-bold text-slate-900 font-heading leading-none">148</span>
                                <span class="text-[9px] text-slate-400 font-inter mt-0.5 tracking-wider">total</span>
                            </div>
                        </div>

                        <!-- Donut Chart Legend -->
                        <div class="ml-6 space-y-3 text-[11px] font-inter text-slate-600">
                            <div class="flex items-center space-x-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-blue-600 shrink-0"></span>
                                <span>Completed — 77 (60%)</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-600 shrink-0"></span>
                                <span>In Progress — 23 (15%)</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-primary shrink-0"></span>
                                <span>Pending — 13 (9%)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Quick Actions</h3>
                    
                    <div class="grid grid-cols-2 gap-3">
                        <button class="text-left p-3 border border-slate-100 hover:border-slate-300 rounded-lg hover:bg-slate-50 transition-colors group">
                            <div class="text-[11px] font-semibold text-slate-900 group-hover:text-primary transition-colors">Submit Request</div>
                            <div class="text-[10px] text-slate-400 mt-1">Record a new letter</div>
                        </button>
                        
                        <button class="text-left p-3 border border-slate-100 hover:border-slate-300 rounded-lg hover:bg-slate-50 transition-colors group">
                            <div class="text-[11px] font-semibold text-slate-900 group-hover:text-primary transition-colors">Review Approvals</div>
                            <div class="text-[10px] text-slate-400 mt-1">5 items pending</div>
                        </button>
                        
                        <button class="text-left p-3 border border-slate-100 hover:border-slate-300 rounded-lg hover:bg-slate-50 transition-colors group">
                            <div class="text-[11px] font-semibold text-slate-900 group-hover:text-primary transition-colors">Upload Photos</div>
                            <div class="text-[10px] text-slate-400 mt-1">Before & after</div>
                        </button>
                        
                        <button class="text-left p-3 border border-slate-100 hover:border-slate-300 rounded-lg hover:bg-slate-50 transition-colors group">
                            <div class="text-[11px] font-semibold text-slate-900 group-hover:text-primary transition-colors">Generate Report</div>
                            <div class="text-[10px] text-slate-400 mt-1">Progress summary</div>
                        </button>
                    </div>
                </div>

                <!-- Recent Activity Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-slate-900 font-heading">Recent Activity</h3>
                        <a href="#" class="text-xs font-medium text-blue-600 hover:underline font-inter">See all →</a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-blue-500 mt-1.5 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-inter"><span class="font-medium text-slate-900">#REN-2025-079</span> marked as completed by admin</p>
                                <p class="text-[10px] text-slate-400 mt-1">2 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-inter">New request <span class="font-medium text-slate-900">#REN-2025-081</span> submitted by Colombo Diocese</p>
                                <p class="text-[10px] text-slate-400 mt-1">5 hours ago</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-300 mt-1.5 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-inter">Photos uploaded for <span class="font-medium text-slate-900">#REN-2025-074</span> — 6 images</p>
                                <p class="text-[10px] text-slate-400 mt-1">Yesterday at 3:22 PM</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-primary mt-1.5 shrink-0"></div>
                            <div>
                                <p class="text-[11px] text-slate-700 font-inter"><span class="font-medium text-slate-900">#REN-2024-071</span> rejected — insufficient documentation</p>
                                <p class="text-[10px] text-slate-400 mt-1">Yesterday at 10:05 AM</p>
                            </div>
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
