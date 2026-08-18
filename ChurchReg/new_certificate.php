<?php
/**
 * Issue New Certificate - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "Issue New Certificate";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Title & Top Action Buttons -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter"><a href="<?= BASE_URL ?>dashboard" class="hover:text-slate-600 transition-colors">Home</a> / New Certificate</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">New Certificate</h2>
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

        <!-- Form Card: Issue New Certificate -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-2xs space-y-6">
            <h3 class="text-base font-bold text-slate-900 font-heading">Issue New Certificate</h3>
            
            <form class="space-y-5 text-xs font-inter">
                <!-- 3 Columns Row 1 -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Application Reference <span class="text-red-500">*</span></label>
                        <input type="text" value="VLS-2634" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all font-medium">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Certificate Type <span class="text-red-500">*</span></label>
                        <select class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-850 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            <option>New Registration</option>
                            <option>Renewal</option>
                            <option>Amendment</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Church / Organisation Name <span class="text-red-500">*</span></label>
                        <input type="text" value="Calvary Christian Centre" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all font-medium">
                    </div>
                </div>

                <!-- 3 Columns Row 2 -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">District <span class="text-red-500">*</span></label>
                        <input type="text" value="Kandy District" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all font-medium">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Denomination <span class="text-red-500">*</span></label>
                        <input type="text" value="Christian" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all font-medium">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Date of Issue <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <input type="text" value="30 March 2026" class="w-full pl-3.5 pr-10 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-850 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3 Columns Row 3 -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Expiry Date <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <input type="text" value="30 March 2027" class="w-full pl-3.5 pr-10 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-850 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none text-slate-400">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Issuing Officer <span class="text-red-500">*</span></label>
                        <input type="text" value="S. Kumara" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all font-medium">
                    </div>
                    <div>
                        <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Authorised Signatory <span class="text-red-500">*</span></label>
                        <input type="text" value="Director General, DCRA" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all font-medium">
                    </div>
                </div>

                <!-- Full Width Remarks -->
                <div>
                    <label class="block text-[11px] font-bold text-slate-400 uppercase tracking-wider mb-2">Remarks / Notes <span class="text-red-500">*</span></label>
                    <textarea rows="3" class="w-full px-3.5 py-2.5 bg-slate-50/50 border border-slate-200 rounded-xl text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all font-medium">Application verified and all required documents (Land Deed, NIC Copy, and Authorization Letter) are found to be valid. Approved for issuance.</textarea>
                </div>

                <!-- Checkbox Banner -->
                <div class="bg-[#F0F4F8] border border-slate-200 rounded-xl p-3.5 flex items-center gap-2.5">
                    <input type="checkbox" checked id="send_notifications" class="w-4 h-4 text-[#13273F] border-slate-300 rounded focus:ring-primary/20 cursor-pointer">
                    <label for="send_notifications" class="text-xs font-semibold text-slate-700 cursor-pointer">
                        Send SMS and email notification to the applicant upon certificate issuance
                    </label>
                </div>
            </form>
        </div>

        <!-- Certificate Preview & Actions Section -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-2xs space-y-6">
            
            <!-- Header with Title & Action Buttons -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <h3 class="text-base font-bold text-slate-900 font-heading">Certificate Preview</h3>
                <div class="flex items-center gap-3">
                    <button class="px-5 py-2.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold rounded-xl shadow-2xs transition-colors font-heading cursor-pointer">
                        Issue Certificate
                    </button>
                    <a href="<?= BASE_URL ?>certificates" class="px-5 py-2.5 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold rounded-xl border border-slate-200 shadow-2xs transition-colors font-heading text-center">
                        Cancel
                    </a>
                </div>
            </div>

            <!-- Certificate Canvas Container -->
            <div class="bg-slate-100/60 p-4 sm:p-8 rounded-2xl flex items-center justify-center border border-slate-200/50">
                
                <!-- The Official Certificate Document -->
                <div class="w-full max-w-[800px] bg-white rounded-xl shadow-md border border-slate-200 overflow-hidden font-inter">
                    
                    <!-- Navy Blue Top Header Banner -->
                    <div class="bg-[#13273F] p-5 sm:p-6 text-white flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-slate-800">
                        <!-- Left Side: Logo & Institution Name -->
                        <div class="flex items-center gap-4">
                            <img src="<?= BASE_URL ?>assets/images/emblem.png" alt="Sri Lanka National Emblem" class="w-10 h-auto object-contain flex-shrink-0">
                            <div>
                                <h4 class="text-sm font-bold tracking-wide font-heading uppercase text-white">Department of Christian Religious Affairs</h4>
                                <p class="text-[10px] text-slate-350 mt-0.5">3rd Floor, No. 180, T.B. Jayah Mawatha, Colombo 10.</p>
                            </div>
                        </div>

                        <!-- Right Side: Official Doc Labels -->
                        <div class="sm:text-right text-xs">
                            <div class="font-mono text-[#D4AF37] font-semibold text-[11px]">VLS/REC/2634/2026</div>
                            <div class="text-[10px] text-slate-350 mt-0.5">30 March 2026</div>
                            <div class="text-[9px] uppercase tracking-widest font-bold text-slate-400 mt-1">OFFICIAL DOCUMENT</div>
                        </div>
                    </div>

                    <!-- White Body Content -->
                    <div class="p-8 sm:p-12 text-center space-y-6 relative">
                        
                        <!-- Watermark Cross/Seal in background -->
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-[0.03]">
                            <svg class="w-64 h-64 text-black" fill="currentColor" viewBox="0 0 24 24"><path d="M19 10.5h-5.5V5c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v5.5H5c-.83 0-1.5.67-1.5 1.5s.67 1.5 1.5 1.5h5.5V19c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5v-5.5H19c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5z"/></svg>
                        </div>

                        <!-- Top text -->
                        <div class="space-y-1">
                            <p class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Democratic Socialist Republic of Sri Lanka</p>
                            <h2 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight font-heading">Certificate of Registration</h2>
                            <p class="text-[10px] uppercase tracking-wider font-semibold text-slate-500">Department of Christian Religious Affairs</p>
                        </div>

                        <!-- Center Cross Seal (Gold Accent) -->
                        <div class="flex justify-center py-2">
                            <div class="w-12 h-12 rounded-full bg-[#FAF7F0] border border-[#D4AF37]/40 flex items-center justify-center text-[#D4AF37] shadow-xs">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </div>

                        <!-- Registered Organization Details -->
                        <div class="space-y-1.5">
                            <h3 class="text-base sm:text-lg font-bold text-[#13273F] tracking-wide font-heading uppercase">Calvary Christian Centre</h3>
                            <p class="text-[10px] uppercase font-bold tracking-wider text-slate-400">New Registration · Kandy District, Sri Lanka</p>
                        </div>

                        <!-- Separation line -->
                        <div class="max-w-xs mx-auto border-t border-slate-200"></div>

                        <!-- Footer Details Grid -->
                        <div class="flex items-center justify-between text-left text-[11px] pt-4 font-inter">
                            <div>
                                <span class="block text-[9px] uppercase tracking-wider font-bold text-slate-400">Certificate Number</span>
                                <span class="font-mono font-bold text-slate-800">CERT-2634</span>
                            </div>
                            <div class="text-right">
                                <span class="block text-[9px] uppercase tracking-wider font-bold text-slate-400">Valid Until</span>
                                <span class="font-bold text-slate-850">30 March 2027</span>
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
