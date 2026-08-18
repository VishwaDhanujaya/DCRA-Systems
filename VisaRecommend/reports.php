<?php
/**
 * System Reports & Analytics Dashboard Page - Exact Visual & Layout Recreation
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */

$page_title = "Reports";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Sample Monthly Clustered Bar Data
$monthly_data = [
    ['month' => 'Jan', 'entry' => 35, 'resident' => 60, 'extension' => 45],
    ['month' => 'Feb', 'entry' => 20, 'resident' => 85, 'extension' => 55],
    ['month' => 'Mar', 'entry' => 25, 'resident' => 65, 'extension' => 18],
    ['month' => 'Apr', 'entry' => 32, 'resident' => 58, 'extension' => 22],
    ['month' => 'May', 'entry' => 18, 'resident' => 65, 'extension' => 70],
    ['month' => 'Jun', 'entry' => 24, 'resident' => 85, 'extension' => 90],
    ['month' => 'Jul', 'entry' => 35, 'resident' => 58, 'extension' => 48],
    ['month' => 'Aug', 'entry' => 42, 'resident' => 65, 'extension' => 15],
    ['month' => 'Sep', 'entry' => 22, 'resident' => 58, 'extension' => 28],
    ['month' => 'Oct', 'entry' => 35, 'resident' => 85, 'extension' => 50],
    ['month' => 'Nov', 'entry' => 20, 'resident' => 58, 'extension' => 35],
    ['month' => 'Dec', 'entry' => 30, 'resident' => 65, 'extension' => 52]
];

// Funnel Data
$funnel = [
    ['stage' => 'Applications Recv.', 'count' => '1,284', 'percentage' => '100%'],
    ['stage' => 'Department Cleared', 'count' => '1,190', 'percentage' => '92.6%'],
    ['stage' => 'Buddhasasana Done', 'count' => '1,060', 'percentage' => '82.5%'],
    ['stage' => 'MOD Cleared', 'count' => '890', 'percentage' => '69.3%'],
    ['stage' => 'Final Approved', 'count' => '780', 'percentage' => '60.7%'],
    ['stage' => 'Letters Issued', 'count' => '219', 'percentage' => '17.0%']
];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Reports</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Reports</h2>
            </div>
            <button type="button" id="top-export-btn" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 transition-all self-start sm:self-auto min-h-[40px] whitespace-nowrap cursor-pointer">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                Export
            </button>
        </div>

        <!-- Filter Toolbar Row -->
        <div class="flex flex-col md:flex-row md:items-center gap-3 bg-white p-3.5 rounded-xl border border-slate-200/80 shadow-2xs">
            <div class="flex items-center gap-2 text-xs font-inter text-slate-500">
                <span>From</span>
                <input type="text" value="01 Jan 2025" class="bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 text-xs text-slate-800 w-28 focus:outline-none focus:border-slate-300">
            </div>

            <div class="flex items-center gap-2 text-xs font-inter text-slate-500">
                <span>To</span>
                <input type="text" value="31 Dec 2025" class="bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 text-xs text-slate-800 w-28 focus:outline-none focus:border-slate-300">
            </div>

            <div class="flex items-center flex-wrap gap-2.5 md:ml-auto">
                <div class="relative">
                    <select class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 pr-7 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option>All types ▾</option>
                        <option>Entry Visa</option>
                        <option>Resident Visa</option>
                        <option>Visa Extension</option>
                    </select>
                </div>

                <div class="relative">
                    <select class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 pr-7 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option>All dioceses ▾</option>
                        <option>Colombo</option>
                        <option>Kandy</option>
                        <option>Jaffna</option>
                        <option>Galle</option>
                    </select>
                </div>

                <div class="relative">
                    <select class="appearance-none bg-slate-50 border border-slate-200 rounded-lg px-3 py-1.5 pr-7 text-xs font-medium text-slate-600 focus:outline-none focus:border-slate-300 cursor-pointer">
                        <option>All stages ▾</option>
                        <option>Department</option>
                        <option>Buddhasasana</option>
                        <option>MOD</option>
                        <option>Final Approval</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- 5 Summary Metric Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            
            <!-- Card 1: Total Applications -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Total Applications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">1,284</h3>
                </div>
            </div>

            <!-- Card 2: Letters Issued -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Letters Issued</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">219</h3>
                </div>
            </div>

            <!-- Card 3: Avg Processing Time -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Avg Processing Time</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">4.2d</h3>
                </div>
            </div>

            <!-- Card 4: Rejected / Returned -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Rejected / Returned</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">38</h3>
                </div>
            </div>

            <!-- Card 5: Approval Rate -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-xs font-medium text-slate-400 font-inter">Approval Rate</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-1.5">95.4%</h3>
                </div>
            </div>

        </div>

        <!-- Middle Grid (Left 8 Cols, Right 4 Cols) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            
            <!-- LEFT (8 Cols): Applications by Type Clustered Bar Chart Card -->
            <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200/90 p-6 shadow-2xs space-y-6">
                <div>
                    <h3 class="font-bold text-slate-900 font-heading text-lg">Applications by Type</h3>
                    <p class="text-slate-400 text-xs font-inter mt-1">Monthly project completions & budget spend · 01 Jan 2026 – 31 Mar 2026</p>
                </div>

                <!-- Legend -->
                <div class="flex items-center space-x-6 text-xs font-inter">
                    <div class="flex items-center space-x-2">
                        <span class="w-3 h-3 rounded-xs bg-[#13273F]"></span>
                        <span class="text-slate-600 font-medium">Entry Visa</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="w-3 h-3 rounded-xs bg-[#4E0000]"></span>
                        <span class="text-slate-600 font-medium">Resident Visa</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="w-3 h-3 rounded-xs bg-[#CBD5E1]"></span>
                        <span class="text-slate-600 font-medium">Extension</span>
                    </div>
                </div>

                <!-- Clustered Bar Chart Visual Canvas -->
                <div class="relative pt-6 pb-2 min-h-[300px] flex flex-col justify-between border-t border-slate-100">
                    <!-- Background Horizontal Grid Lines -->
                    <div class="absolute inset-0 flex flex-col justify-between pointer-events-none py-6">
                        <div class="border-b border-slate-100 w-full"></div>
                        <div class="border-b border-slate-100 w-full"></div>
                        <div class="border-b border-slate-100 w-full"></div>
                        <div class="border-b border-slate-100 w-full"></div>
                    </div>

                    <!-- 12 Month Bar Columns -->
                    <div class="relative z-10 grid grid-cols-12 gap-2 h-64 items-end">
                        <?php foreach ($monthly_data as $data): ?>
                        <div class="flex flex-col items-center h-full justify-end group">
                            <!-- 3 Clustered Bars -->
                            <div class="flex items-end space-x-1 h-full w-full justify-center">
                                <div class="w-2.5 sm:w-3 bg-[#13273F] rounded-t-xs transition-all group-hover:opacity-80" style="height: <?= $data['entry'] ?>%;"></div>
                                <div class="w-2.5 sm:w-3 bg-[#4E0000] rounded-t-xs transition-all group-hover:opacity-80" style="height: <?= $data['resident'] ?>%;"></div>
                                <div class="w-2.5 sm:w-3 bg-[#CBD5E1] rounded-t-xs transition-all group-hover:opacity-80" style="height: <?= $data['extension'] ?>%;"></div>
                            </div>
                            <span class="text-[11px] font-medium text-slate-400 font-inter mt-3"><?= e($data['month']) ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- RIGHT (4 Cols): Approval Status & Type Summary Cards -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Card 1: Approval Status Donut Chart -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-6 shadow-2xs space-y-4">
                    <h3 class="font-bold text-slate-900 font-heading text-base">Approval Status</h3>
                    
                    <div class="flex items-center justify-between gap-4 py-1">
                        <!-- SVG Donut Circle -->
                        <div class="relative w-28 h-28 flex items-center justify-center flex-shrink-0">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 36 36">
                                <path class="text-slate-200" stroke-width="4" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                                <path class="text-secondary" stroke-width="4" stroke-dasharray="25, 100" stroke-linecap="round" stroke="currentColor" fill="none" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                            </svg>
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <span class="font-bold text-slate-900 font-heading text-lg leading-none">1,284</span>
                                <span class="text-[10px] text-slate-400 font-inter mt-0.5">Total</span>
                            </div>
                        </div>

                        <!-- Breakdown List -->
                        <div class="flex-1 space-y-1.5 text-xs font-inter min-w-0">
                            <div class="flex items-center justify-between border-b border-slate-100 pb-1">
                                <span class="text-slate-500 truncate">Approved/Issued</span>
                                <strong class="font-bold text-slate-900 font-mono ml-2">219</strong>
                            </div>
                            <div class="flex items-center justify-between border-b border-slate-100 pb-1">
                                <span class="text-slate-500 truncate">Pending Review</span>
                                <strong class="font-bold text-slate-900 font-mono ml-2">47</strong>
                            </div>
                            <div class="flex items-center justify-between border-b border-slate-100 pb-1">
                                <span class="text-slate-500 truncate">MOD/Security</span>
                                <strong class="font-bold text-slate-900 font-mono ml-2">35</strong>
                            </div>
                            <div class="flex items-center justify-between border-b border-slate-100 pb-1">
                                <span class="text-slate-500 truncate">Rejected</span>
                                <strong class="font-bold text-rose-600 font-mono ml-2">38</strong>
                            </div>
                            <div class="flex items-center justify-between pt-0.5">
                                <span class="text-slate-500 truncate">In Progress</span>
                                <strong class="font-bold text-slate-900 font-mono ml-2">945</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Type Summary Breakdown -->
                <div class="bg-white rounded-2xl border border-slate-200/90 p-5 shadow-2xs space-y-3">
                    <h3 class="font-bold text-slate-900 font-heading text-base">Type Summary</h3>
                    
                    <div class="space-y-2.5 text-xs font-inter">
                        <div class="border-b border-slate-100 pb-2.5 space-y-1">
                            <h4 class="font-bold text-slate-900 font-heading">Entry Visa</h4>
                            <div class="flex items-center justify-between text-slate-500 text-[11px]">
                                <span>Apps: <strong class="text-slate-800">521</strong></span>
                                <span>Issued: <strong class="text-slate-800">98</strong></span>
                                <span>Rate: <strong class="text-slate-800">19%</strong></span>
                            </div>
                        </div>

                        <div class="border-b border-slate-100 pb-2.5 space-y-1">
                            <h4 class="font-bold text-slate-900 font-heading">Resident Visa</h4>
                            <div class="flex items-center justify-between text-slate-500 text-[11px]">
                                <span>Apps: <strong class="text-slate-800">489</strong></span>
                                <span>Issued: <strong class="text-slate-800">84</strong></span>
                                <span>Rate: <strong class="text-slate-800">17%</strong></span>
                            </div>
                        </div>

                        <div class="pt-0.5 space-y-1">
                            <h4 class="font-bold text-slate-900 font-heading">Extension</h4>
                            <div class="flex items-center justify-between text-slate-500 text-[11px]">
                                <span>Apps: <strong class="text-slate-800">274</strong></span>
                                <span>Issued: <strong class="text-slate-800">37</strong></span>
                                <span>Rate: <strong class="text-slate-800">14%</strong></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Approval Stage Funnel Progress Card -->
        <div class="bg-white rounded-2xl border border-slate-200/90 p-6 shadow-2xs space-y-4">
            <h3 class="font-bold text-slate-900 font-heading text-lg mb-2">Approval Stage Funnel</h3>
            
            <div class="space-y-3 font-inter text-xs">
                <?php foreach ($funnel as $item): ?>
                <div class="flex items-center gap-4">
                    <span class="w-40 sm:w-48 font-semibold text-slate-700 truncate"><?= e($item['stage']) ?></span>
                    <div class="flex-1 bg-slate-100 rounded-full h-4 overflow-hidden">
                        <div class="bg-secondary h-full rounded-full transition-all duration-300" style="width: <?= $item['percentage'] ?>;"></div>
                    </div>
                    <span class="w-16 text-right font-mono font-bold text-slate-900"><?= e($item['count']) ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Export Full Report Package Bottom Banner Box -->
        <div class="bg-[#EFEFEF] border border-slate-200/80 rounded-2xl p-5 sm:p-6 flex flex-col sm:flex-row sm:items-center justify-between gap-4 shadow-2xs">
            <div>
                <h3 class="font-bold text-slate-900 font-heading text-base sm:text-lg">Export Full Report Package</h3>
                <p class="text-slate-500 text-xs font-inter mt-1">FY 2025–2026 · All visa types · 1,284 records · Compiled 30 March 2026</p>
            </div>
            
            <div class="flex items-center flex-wrap gap-2.5 flex-shrink-0">
                <button type="button" class="export-report-btn bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-semibold text-xs py-2 px-4 rounded-xl shadow-2xs transition-all cursor-pointer" data-type="PDF">
                    PDF Report
                </button>
                <button type="button" class="export-report-btn bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-semibold text-xs py-2 px-4 rounded-xl shadow-2xs transition-all cursor-pointer" data-type="Excel">
                    Excel (.xlsx)
                </button>
                <button type="button" class="export-report-btn bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 font-semibold text-xs py-2 px-4 rounded-xl shadow-2xs transition-all cursor-pointer" data-type="Print">
                    Print
                </button>
            </div>
        </div>

    </div>
</main>

<!-- Interactive Client-side Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Export buttons handler
    document.querySelectorAll('.export-report-btn, #top-export-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const type = btn.getAttribute('data-type') || 'CSV';
            if (type === 'Print') {
                window.print();
            } else {
                alert(`Generating and downloading full ${type} report package...`);
            }
        });
    });
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
