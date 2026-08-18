<?php
/**
 * View Church Registration Details - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "VLS-2634 - Holy Redeemer Church";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

$app_id = $_GET['id'] ?? 'VLS-2634';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Title & Top Action Bar -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Applications / <?= e($app_id) ?></span>
                <div class="flex items-center gap-3 mt-0.5">
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight"><?= e($app_id) ?> - Holy Redeemer Church</h2>
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-[#FEF3C7] text-[#92400E] border border-[#FDE68A]">
                        <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                        Dept. Review
                    </span>
                </div>
            </div>
            <div class="flex items-center space-x-2 self-start md:self-auto text-xs font-semibold font-heading">
                <button class="px-3.5 py-2 bg-white hover:bg-slate-50 text-slate-700 rounded-xl border border-slate-200 shadow-2xs transition-colors inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                    <span>Print</span>
                </button>
                <button class="px-3.5 py-2 bg-white hover:bg-slate-50 text-slate-700 rounded-xl border border-slate-200 shadow-2xs transition-colors inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 10.742l4.028-2.014m0 0a3 3 0 10-2.243-4.077L6.445 6.666a3 3 0 102.239 4.076zm0 0l4.028 2.014m0 0a3 3 0 102.243-4.077L13.555 12a3 3 0 10-2.239 4.076z"/></svg>
                    <span>Share</span>
                </button>
                <button class="px-4 py-2 bg-[#4E0000] hover:bg-[#3A0000] text-white rounded-xl shadow-2xs transition-colors inline-flex items-center gap-1.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    <span>Edit</span>
                </button>
            </div>
        </div>

        <!-- Meta Info Summary Row -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <!-- Left Info Panel -->
            <div class="md:col-span-2 bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex flex-col md:flex-row md:items-center justify-between gap-4">
                <div class="space-y-1 text-xs font-inter text-slate-500">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Holy Redeemer Church</h3>
                    <p class="font-medium text-slate-700">Colombo District &nbsp;·&nbsp; Roman Catholic</p>
                    <p>Filed: 06 Apr 2025 &nbsp;·&nbsp; <span class="text-[#D97706] font-semibold">8 days pending</span></p>
                </div>
            </div>

            <!-- Right Officer Assign Panel -->
            <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs flex items-center justify-between">
                <div class="flex items-center space-x-3.5">
                    <div class="w-10 h-10 rounded-full bg-secondary text-white text-xs font-bold font-heading flex items-center justify-center">
                        SK
                    </div>
                    <div class="text-xs font-inter">
                        <p class="text-slate-400 font-medium">Assigned Officer</p>
                        <p class="text-slate-900 font-bold text-sm mt-0.5">S. Kumara</p>
                    </div>
                </div>
                <button class="px-3 py-1.5 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold rounded-lg border border-slate-200 transition-colors font-heading">
                    Reassign
                </button>
            </div>

        </div>

        <!-- Approval Workflow Progress Stepper -->
        <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 border-b border-slate-100 pb-3">
                <h3 class="text-sm font-bold text-slate-900 font-heading">Approval Workflow Progress</h3>
                <span class="text-[11px] text-slate-400 font-inter">Last updated: 07 Apr 2025, 09:41 AM</span>
            </div>

            <!-- Stepper Container -->
            <div class="relative px-4 sm:px-12 py-4">
                
                <!-- Progress Line Track with Segments matching the workflow progress -->
                <div class="absolute top-[32px] left-[48px] right-[48px] flex items-center z-0">
                    <!-- Segment 1 (Step 1 to Step 2): Green -->
                    <div class="flex-1 h-[2.5px] bg-[#10B981]"></div>
                    <!-- Segment 2 (Step 2 to Step 3): Amber -->
                    <div class="flex-1 h-[2.5px] bg-[#D97706]"></div>
                    <!-- Segment 3 (Step 3 to Step 4): Gray -->
                    <div class="flex-1 h-[2.5px] bg-slate-200"></div>
                    <!-- Segment 4 (Step 4 to Step 5): Gray -->
                    <div class="flex-1 h-[2.5px] bg-slate-200"></div>
                    <!-- Segment 5 (Step 5 to Step 6): Gray -->
                    <div class="flex-1 h-[2.5px] bg-slate-200"></div>
                </div>

                <!-- 6 Steps -->
                <div class="relative z-10 flex items-start justify-between">
                    
                    <!-- Step 1: Application Submitted -->
                    <div class="flex flex-col items-center text-center w-24">
                        <div class="w-8 h-8 rounded-full bg-[#10B981] text-white flex items-center justify-center shadow-2xs font-semibold text-xs ring-4 ring-white">
                            ✓
                        </div>
                        <span class="text-[11px] font-bold text-[#166534] font-inter mt-3 leading-tight">Application<br>Submitted</span>
                        <span class="text-[9px] text-slate-400 font-medium mt-1">06 Apr 2025</span>
                    </div>

                    <!-- Step 2: Dept. Review -->
                    <div class="flex flex-col items-center text-center w-24">
                        <!-- Outer Soft Halo and Inner Solid Circle -->
                        <div class="relative w-8 h-8 flex items-center justify-center">
                            <div class="absolute -inset-1.5 rounded-full bg-[#D97706]/20"></div>
                            <div class="relative w-8 h-8 rounded-full bg-[#D97706] text-white flex items-center justify-center font-bold text-xs ring-4 ring-white">
                                2
                            </div>
                        </div>
                        <span class="text-[11px] font-bold text-[#B45309] font-inter mt-3 leading-tight">Dept. Review</span>
                        <span class="text-[9px] text-[#D97706] font-semibold mt-1">In Progress</span>
                    </div>

                    <!-- Step 3: Buddhasasana Ministry -->
                    <div class="flex flex-col items-center text-center w-24">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-bold text-xs ring-4 ring-white">
                            3
                        </div>
                        <span class="text-[11px] font-bold text-slate-500 font-inter mt-3 leading-tight">Buddhasasana<br>Ministry</span>
                        <span class="text-[9px] text-slate-400 font-medium mt-1">Awaiting</span>
                    </div>

                    <!-- Step 4: MOD Clearance -->
                    <div class="flex flex-col items-center text-center w-24">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-bold text-xs ring-4 ring-white">
                            4
                        </div>
                        <span class="text-[11px] font-bold text-slate-500 font-inter mt-3 leading-tight">MOD<br>Clearance</span>
                        <span class="text-[9px] text-slate-400 font-medium mt-1">Awaiting</span>
                    </div>

                    <!-- Step 5: Final Approval -->
                    <div class="flex flex-col items-center text-center w-24">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-bold text-xs ring-4 ring-white">
                            5
                        </div>
                        <span class="text-[11px] font-bold text-slate-500 font-inter mt-3 leading-tight">Final<br>Approval</span>
                        <span class="text-[9px] text-slate-400 font-medium mt-1">Awaiting</span>
                    </div>

                    <!-- Step 6: Certificate Issued -->
                    <div class="flex flex-col items-center text-center w-24">
                        <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 text-slate-400 flex items-center justify-center font-bold text-xs ring-4 ring-white">
                            6
                        </div>
                        <span class="text-[11px] font-bold text-slate-500 font-inter mt-3 leading-tight">Certificate<br>Issued</span>
                        <span class="text-[9px] text-slate-400 font-medium mt-1">Awaiting</span>
                    </div>

                </div>
            </div>
        </div>

        <!-- 2-Column Content Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- LEFT COLUMN: Details & Document List (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Church Details & Applicant Details Card -->
                <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-2xs space-y-8">
                    
                    <!-- 1. Church Details -->
                    <div class="space-y-4">
                        <h3 class="text-base font-bold text-slate-900 font-heading border-b border-slate-100 pb-2">1. Church Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3.5 gap-x-6 text-xs font-inter">
                            <div>
                                <p class="text-slate-400 font-medium">Church / Organisation Name</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">Holy Redeemer Church</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Denomination</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">Roman Catholic</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Sinhala Name</p>
                                <p class="text-slate-500 italic mt-1">Not provided</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Tamil Name</p>
                                <p class="text-slate-500 italic mt-1">Not provided</p>
                            </div>
                            <div class="md:col-span-2">
                                <p class="text-slate-400 font-medium">Street Address</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">No. 42, Holy Redeemer Lane, Dehiwala</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">City / Town</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">Dehiwala</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">District</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">Colombo</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Postal Code</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">10350</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Primary Phone</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">+94 11 276 4893</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Alternative Phone</p>
                                <p class="text-slate-500 italic mt-1">Not provided</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Email Address</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">holyredeemer@catholic.lk</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Website</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">www.holyredeemer.lk</p>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Applicant Details -->
                    <div class="space-y-4">
                        <h3 class="text-base font-bold text-slate-900 font-heading border-b border-slate-100 pb-2">2. Applicant Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-3.5 gap-x-6 text-xs font-inter">
                            <div>
                                <p class="text-slate-400 font-medium">Full Name</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">Rev. Fr. Joseph Anthony Fernando</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Designation / Role</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">Parish Priest</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">NIC Number</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">198512345678</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Date of Birth</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">15 March 1985</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Contact Number</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">+94 77 234 5678</p>
                            </div>
                            <div>
                                <p class="text-slate-400 font-medium">Email Address</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">fr.joseph@catholic.lk</p>
                            </div>
                            <div class="md:col-span-2">
                                <p class="text-slate-400 font-medium">Residential Address</p>
                                <p class="text-slate-800 font-bold mt-1 text-sm">Parish House, No. 42, Holy Redeemer Lane, Dehiwala, Colombo 10350</p>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Documents List -->
                    <div class="space-y-4">
                        <h3 class="text-base font-bold text-slate-900 font-heading border-b border-slate-100 pb-2">3. Document Upload</h3>
                        <div class="space-y-3">
                            
                            <!-- Doc 1 -->
                            <div class="p-4 bg-[#FAFDFB] border border-[#DCFCE7] rounded-2xl flex items-center justify-between text-xs font-inter shadow-2xs">
                                <div class="flex items-center space-x-3.5">
                                    <div class="w-10 h-10 rounded-xl bg-[#E8F5E9] text-[#2E7D32] flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800 text-xs font-inter">Land Deed / Property Ownership Certificate</p>
                                        <p class="text-[10px] text-slate-400 mt-1">PDF &nbsp;·&nbsp; 1.4 MB &nbsp;·&nbsp; Uploaded: 06 Apr 2025</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-1.5 flex-shrink-0">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-[#E8F5E9] text-[#2E7D32]">
                                        ✓ Received
                                    </span>
                                    <button class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-500 hover:text-slate-700 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        <span>Preview</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Doc 2 -->
                            <div class="p-4 bg-[#FAFDFB] border border-[#DCFCE7] rounded-2xl flex items-center justify-between text-xs font-inter shadow-2xs">
                                <div class="flex items-center space-x-3.5">
                                    <div class="w-10 h-10 rounded-xl bg-[#E8F5E9] text-[#2E7D32] flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800 text-xs font-inter">NIC Copy of Applicant</p>
                                        <p class="text-[10px] text-slate-400 mt-1">JPG &nbsp;·&nbsp; 840 KB &nbsp;·&nbsp; Uploaded: 06 Apr 2025</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-1.5 flex-shrink-0">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-[#E8F5E9] text-[#2E7D32]">
                                        ✓ Received
                                    </span>
                                    <button class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-500 hover:text-slate-700 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        <span>Preview</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Doc 3 -->
                            <div class="p-4 bg-[#FAFDFB] border border-[#DCFCE7] rounded-2xl flex items-center justify-between text-xs font-inter shadow-2xs">
                                <div class="flex items-center space-x-3.5">
                                    <div class="w-10 h-10 rounded-xl bg-[#E8F5E9] text-[#2E7D32] flex items-center justify-center flex-shrink-0">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-800 text-xs font-inter">Letter of Authorisation from Diocese</p>
                                        <p class="text-[10px] text-slate-400 mt-1">PDF &nbsp;·&nbsp; 620 KB &nbsp;·&nbsp; Uploaded: 06 Apr 2025</p>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-1.5 flex-shrink-0">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-[#E8F5E9] text-[#2E7D32]">
                                        ✓ Received
                                    </span>
                                    <button class="inline-flex items-center gap-1 text-[11px] font-semibold text-slate-500 hover:text-slate-700 transition-colors">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                        <span>Preview</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Activity & Audit Log Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <h3 class="text-base font-bold text-slate-900 font-heading">Activity & Audit Log</h3>
                    
                    <div class="relative pl-6 border-l border-slate-200 space-y-6 text-xs font-inter py-2">
                        
                        <!-- Timeline Item 1 -->
                        <div class="relative">
                            <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-amber-500 ring-4 ring-white"></span>
                            <div class="space-y-1.5">
                                <p class="font-bold text-slate-800 leading-snug">S. Kumara started department review</p>
                                <p class="text-slate-500 leading-relaxed text-[11px]">Application documents verified. All 3 documents confirmed received. Initial assessment underway.</p>
                                <div class="flex items-center space-x-2 mt-2">
                                    <span class="inline-flex items-center gap-1 text-[10px] text-slate-400">
                                        <svg class="w-3.5 h-3.5 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        <span>07 Apr 2025, 09:41 AM</span>
                                    </span>
                                    <span class="px-2 py-0.5 bg-blue-50 text-blue-700 rounded font-semibold text-[10px]">Officer Action</span>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Item 2 -->
                        <div class="relative">
                            <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-[#10B981] ring-4 ring-white"></span>
                            <div class="space-y-1.5">
                                <p class="font-bold text-slate-800 leading-snug">SMS notification sent to applicant</p>
                                <p class="text-slate-500 leading-relaxed text-[11px]">Automated SMS sent to +94 77 234 5678: "Your application VLS-2634 has been received and is under review."</p>
                                <div class="flex items-center space-x-2 mt-2">
                                    <span class="inline-flex items-center gap-1 text-[10px] text-slate-400">
                                        <svg class="w-3.5 h-3.5 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        <span>06 Apr 2025, 04:15 PM</span>
                                    </span>
                                    <span class="px-2 py-0.5 bg-green-50 text-green-700 rounded font-semibold text-[10px]">Automated</span>
                                </div>
                            </div>
                        </div>

                        <!-- Timeline Item 3 -->
                        <div class="relative">
                            <span class="absolute -left-[31px] top-1.5 w-2.5 h-2.5 rounded-full bg-[#10B981] ring-4 ring-white"></span>
                            <div class="space-y-1.5">
                                <p class="font-bold text-slate-800 leading-snug">Email acknowledgement sent</p>
                                <p class="text-slate-500 leading-relaxed text-[11px]">Confirmation email dispatched to holyredeemer@catholic.lk with application reference VLS-2634.</p>
                                <div class="flex items-center space-x-2 mt-2">
                                    <span class="inline-flex items-center gap-1 text-[10px] text-slate-400">
                                        <svg class="w-3.5 h-3.5 text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                        <span>06 Apr 2025, 04:14 PM</span>
                                    </span>
                                    <span class="px-2 py-0.5 bg-green-50 text-green-700 rounded font-semibold text-[10px]">Automated</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- RIGHT SIDEBAR COLUMN (Spans 1 col on lg) -->
            <div class="space-y-6">
                
                <!-- 1. Workflow Status Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <h3 class="text-xs font-bold text-slate-900 font-heading uppercase tracking-wider border-b border-slate-100 pb-2">Workflow Status</h3>
                    
                    <div class="space-y-3.5 text-xs font-inter">
                        
                        <!-- Step 1 -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-2">
                                <span class="w-2 h-2 rounded-full bg-[#206E56] mt-1.5 flex-shrink-0"></span>
                                <div>
                                    <p class="font-bold text-slate-800">Application Submitted</p>
                                    <p class="text-[10px] text-slate-400 mt-0.5">06 Apr 2025</p>
                                </div>
                            </div>
                            <span class="text-[#206E56] font-bold">Completed</span>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-2">
                                <span class="w-2 h-2 rounded-full bg-amber-500 mt-1.5 flex-shrink-0"></span>
                                <div>
                                    <p class="font-bold text-slate-800">Dept. Review</p>
                                    <p class="text-[10px] text-slate-400 mt-0.5">Started: 07 Apr 2025</p>
                                </div>
                            </div>
                            <span class="text-amber-500 font-bold">In Progress</span>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-2">
                                <span class="w-2 h-2 rounded-full bg-slate-300 mt-1.5 flex-shrink-0"></span>
                                <div>
                                    <p class="font-medium text-slate-600">Buddhasasana Ministry</p>
                                    <p class="text-[10px] text-slate-400 mt-0.5">Awaiting forwarding</p>
                                </div>
                            </div>
                            <span class="text-slate-400 font-medium">Pending</span>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-2">
                                <span class="w-2 h-2 rounded-full bg-slate-300 mt-1.5 flex-shrink-0"></span>
                                <div>
                                    <p class="font-medium text-slate-600">MOD Clearance</p>
                                </div>
                            </div>
                            <span class="text-slate-400 font-medium">Awaiting</span>
                        </div>

                        <!-- Step 5 -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-2">
                                <span class="w-2 h-2 rounded-full bg-slate-300 mt-1.5 flex-shrink-0"></span>
                                <div>
                                    <p class="font-medium text-slate-600">Final Approval</p>
                                </div>
                            </div>
                            <span class="text-slate-400 font-medium">Pending</span>
                        </div>

                        <!-- Step 6 -->
                        <div class="flex items-start justify-between">
                            <div class="flex items-start space-x-2">
                                <span class="w-2 h-2 rounded-full bg-slate-300 mt-1.5 flex-shrink-0"></span>
                                <div>
                                    <p class="font-medium text-slate-600">Certificate Issued</p>
                                </div>
                            </div>
                            <span class="text-slate-400 font-medium">Awaiting</span>
                        </div>

                    </div>
                </div>

                <!-- 2. Application Summary Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-3.5">
                    <h3 class="text-xs font-bold text-slate-900 font-heading uppercase tracking-wider border-b border-slate-100 pb-2">Application Summary</h3>
                    
                    <div class="divide-y divide-slate-100 text-xs font-inter">
                        <div class="py-2 flex items-center justify-between text-slate-700">
                            <span class="font-medium">App. ID</span>
                            <span class="font-bold text-slate-900"><?= e($app_id) ?></span>
                        </div>
                        <div class="py-2 flex items-center justify-between text-slate-700">
                            <span class="font-medium">Type</span>
                            <span class="font-semibold text-slate-800">New Registration</span>
                        </div>
                        <div class="py-2 flex items-center justify-between text-slate-700">
                            <span class="font-medium">District</span>
                            <span class="font-semibold text-slate-800">Colombo</span>
                        </div>
                        <div class="py-2 flex items-center justify-between text-slate-700">
                            <span class="font-medium">Denomination</span>
                            <span class="font-semibold text-slate-800">Roman Catholic</span>
                        </div>
                        <div class="py-2 flex items-center justify-between text-slate-700">
                            <span class="font-medium">Officer</span>
                            <span class="font-semibold text-slate-800 flex items-center gap-1.5">
                                <span class="w-5 h-5 rounded-full bg-secondary text-white text-[9px] font-bold flex items-center justify-center">SK</span>
                                S. Kumara
                            </span>
                        </div>
                        <div class="py-2 flex items-center justify-between text-slate-700">
                            <span class="font-medium">Documents</span>
                            <span class="font-bold text-[#206E56] flex items-center gap-1">3 / 3 <span class="text-sm">✓</span></span>
                        </div>
                        <div class="py-2 flex items-center justify-between text-slate-700">
                            <span class="font-medium">Source</span>
                            <span class="font-semibold text-slate-800">Online Portal</span>
                        </div>
                    </div>
                </div>

                <!-- 3. Notifications Sent Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-2">
                        <h3 class="text-xs font-bold text-slate-900 font-heading uppercase tracking-wider">Notifications Sent</h3>
                        <button class="px-2.5 py-1 bg-white hover:bg-slate-50 text-[#13273F] text-[10px] font-bold border border-slate-200 rounded-lg transition-colors font-heading">
                            Send New
                        </button>
                    </div>
                    
                    <div class="space-y-3 text-xs font-inter">
                        <!-- SMS -->
                        <div class="p-3 border border-slate-200 rounded-xl flex items-center justify-between shadow-2xs">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-[#E0F2FE] text-[#0369A1] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" /></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-slate-800 text-[11px] leading-tight">SMS — Application Received</p>
                                    <p class="text-[9px] text-slate-400 mt-0.5">06 Apr 2025, 4:15 PM</p>
                                </div>
                            </div>
                            <span class="text-[10px] font-bold text-[#1b5e20] bg-[#E8F5E9] px-2 py-0.5 rounded flex-shrink-0">Sent</span>
                        </div>
                        <!-- Email -->
                        <div class="p-3 border border-slate-200 rounded-xl flex items-center justify-between shadow-2xs">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 rounded-lg bg-[#F5F3FF] text-[#6D28D9] flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                                </div>
                                <div>
                                    <p class="font-bold text-slate-800 text-[11px] leading-tight">Email — Acknowledgement</p>
                                    <p class="text-[9px] text-slate-400 mt-0.5">06 Apr 2025, 4:14 PM</p>
                                </div>
                            </div>
                            <span class="text-[10px] font-bold text-[#1b5e20] bg-[#E8F5E9] px-2 py-0.5 rounded flex-shrink-0">Sent</span>
                        </div>
                    </div>
                </div>

                <!-- 4. Quick Actions Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-3">
                    <h3 class="text-xs font-bold text-slate-900 font-heading uppercase tracking-wider border-b border-slate-100 pb-2">Quick Actions</h3>
                    
                    <div class="space-y-2.5">
                        <button class="w-full py-2.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-bold rounded-xl transition-all font-heading text-center">
                            Forward to Min. of Buddhasasana
                        </button>
                        <button class="w-full py-2.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-bold rounded-xl transition-all font-heading text-center">
                            Forward to Min. of Defense
                        </button>
                        <button class="w-full py-2.5 bg-[#E8F5E9] hover:bg-[#C8E6C9] text-[#2E7D32] border border-[#C8E6C9] text-xs font-bold rounded-xl transition-all font-heading text-center">
                            Approve Application
                        </button>
                        <button class="w-full py-2.5 bg-[#FFF3E0] hover:bg-[#FFE0B2] text-[#EF6C00] border border-[#FFE0B2] text-xs font-bold rounded-xl transition-all font-heading text-center">
                            Request Additional Documents
                        </button>
                        <button class="w-full py-2.5 bg-[#FFEBEE] hover:bg-[#FFCDD2] text-[#C62828] border border-[#FFCDD2] text-xs font-bold rounded-xl transition-all font-heading text-center">
                            Reject Application
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
