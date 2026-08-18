<?php
/**
 * Application Details Page - Exact Visual & Layout Recreation
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */

$page_title = "Application Details - VLS-2634";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Back Link -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Applications / Application Details</span>
                <div class="flex items-center gap-2 mt-0.5">
                    <a href="<?= BASE_URL ?>applications" class="text-slate-500 hover:text-primary transition-colors text-lg font-bold font-heading">
                        ‹
                    </a>
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight">Application Details</h2>
                </div>
            </div>
            
            <div class="text-left sm:text-right">
                <span class="text-xs font-medium text-slate-400 font-inter block">Fr. Anthony Silva</span>
                <h3 class="text-lg font-bold text-slate-900 font-mono tracking-tight">VLS-2634</h3>
            </div>
        </div>

        <!-- Main Workspace Grid (Left 8 Cols + Right 4 Cols) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            
            <!-- Left Column: Primary Cards (lg:col-span-8) -->
            <div class="lg:col-span-8 space-y-6">
                
                <!-- Card 1: Approval Progress Stepper -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-slate-200/80 shadow-xs space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Approval Progress</h3>
                        <span class="bg-[#FEF3C7] text-[#D97706] text-xs font-semibold px-3 py-1 rounded-md whitespace-nowrap">60% Complete</span>
                    </div>

                    <!-- Horizontal Progress Pipeline Graphic -->
                    <div class="overflow-x-auto pb-3 pt-2">
                        <div class="min-w-[650px] relative px-4">
                            
                            <!-- Progress Connecting Line -->
                            <div class="absolute top-4 left-10 right-10 h-0.5 bg-slate-200 z-0"></div>
                            <div class="absolute top-4 left-10 w-[60%] h-0.5 bg-emerald-500 z-0"></div>

                            <!-- Steps Container -->
                            <div class="flex items-center justify-between relative z-10">
                                
                                <!-- Step 1: Received -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-8 h-8 rounded-full bg-emerald-600 text-white text-xs font-bold font-heading flex items-center justify-center shadow-2xs">
                                        1
                                    </div>
                                    <span class="text-xs font-bold text-slate-900 font-heading mt-2 whitespace-nowrap">Received</span>
                                    <span class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">14 Mar</span>
                                    <span class="text-[10px] font-semibold text-emerald-600 font-inter mt-1 uppercase tracking-wider whitespace-nowrap">Done</span>
                                </div>

                                <!-- Step 2: Department Review -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-8 h-8 rounded-full bg-emerald-600 text-white text-xs font-bold font-heading flex items-center justify-center shadow-2xs">
                                        2
                                    </div>
                                    <span class="text-xs font-bold text-slate-900 font-heading mt-2 whitespace-nowrap">Department Review</span>
                                    <span class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">15 Mar</span>
                                    <span class="text-[10px] font-semibold text-emerald-600 font-inter mt-1 uppercase tracking-wider whitespace-nowrap">Done</span>
                                </div>

                                <!-- Step 3: Buddhasasana Ministry -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-8 h-8 rounded-full bg-emerald-600 text-white text-xs font-bold font-heading flex items-center justify-center shadow-2xs">
                                        3
                                    </div>
                                    <span class="text-xs font-bold text-slate-900 font-heading mt-2 whitespace-nowrap">Buddhasasana Ministry</span>
                                    <span class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">22 Mar</span>
                                    <span class="text-[10px] font-semibold text-emerald-600 font-inter mt-1 uppercase tracking-wider whitespace-nowrap">Done</span>
                                </div>

                                <!-- Step 4: MOD Clearance (Active) -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-8 h-8 rounded-full bg-amber-500 text-white text-xs font-bold font-heading flex items-center justify-center shadow-2xs ring-4 ring-amber-100">
                                        4
                                    </div>
                                    <span class="text-xs font-bold text-amber-700 font-heading mt-2 whitespace-nowrap">MOD Clearance</span>
                                    <span class="text-[11px] text-amber-600 font-inter mt-0.5 whitespace-nowrap">In progress</span>
                                    <span class="text-[10px] font-semibold text-amber-600 font-inter mt-1 uppercase tracking-wider whitespace-nowrap">Active</span>
                                </div>

                                <!-- Step 5: Final Approval -->
                                <div class="flex flex-col items-center text-center">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-500 text-xs font-bold font-heading flex items-center justify-center">
                                        5
                                    </div>
                                    <span class="text-xs font-bold text-slate-400 font-heading mt-2 whitespace-nowrap">Final Approval</span>
                                    <span class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Pending</span>
                                    <span class="text-[10px] font-semibold text-slate-400 font-inter mt-1 uppercase tracking-wider whitespace-nowrap">Waiting</span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Legend Footnote -->
                    <div class="flex items-center justify-center space-x-6 text-xs font-inter text-slate-500 pt-3 border-t border-slate-100">
                        <div class="flex items-center space-x-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-600"></span>
                            <span>Completed</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                            <span>In Progress</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span>
                            <span>Pending</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Applicant Information Form -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Applicant Information</h3>

                    <!-- Banner Header -->
                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200/70 flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 font-heading">Fr. Anthony Silva</h4>
                            <span class="text-xs text-slate-400 font-mono">VLS-2634</span>
                        </div>
                    </div>

                    <!-- Form Inputs Grid -->
                    <div class="space-y-4 font-inter text-xs">
                        
                        <!-- Row 1: Full Name -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">FULL NAME</label>
                            <input type="text" value="Anthony Silva" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                        </div>

                        <!-- Row 2: DOB, Gender, Passport -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">DATE OF BIRTH</label>
                                <input type="text" value="12 April 1988" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">GENDER</label>
                                <div class="relative">
                                    <select class="w-full appearance-none rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 pr-8 focus:outline-none focus:border-slate-300 transition-all text-slate-800 cursor-pointer">
                                        <option selected>Male</option>
                                        <option>Female</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">▾</div>
                                </div>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">PASSPORT NO.</label>
                                <input type="text" value="GH2847391" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-mono py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                        </div>

                        <!-- Row 3: Expiry, Nationality, Visa Type -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">PASSPORT EXPIRY</label>
                                <input type="text" value="09 Nov 2029" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">NATIONALITY</label>
                                <input type="text" value="Sri Lankan" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">VISA TYPE</label>
                                <div class="relative">
                                    <select class="w-full appearance-none rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 pr-8 focus:outline-none focus:border-slate-300 transition-all text-slate-800 cursor-pointer">
                                        <option selected>Entry Visa</option>
                                        <option>Resident Visa</option>
                                        <option>Visa Extension</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">▾</div>
                                </div>
                            </div>
                        </div>

                        <!-- Row 4: Purpose, Stay, Contact Email -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">PURPOSE OF VISIT</label>
                                <input type="text" value="Religious Study / Pilgrimage" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">INTENDED STAY</label>
                                <input type="text" value="30 Days" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">CONTACT EMAIL</label>
                                <input type="email" value="anthonysilva@gmail.com" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                        </div>

                        <!-- Row 5: Contact Number -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">CONTACT NUMBER</label>
                                <input type="text" value="+94 71 234 5678" class="w-full rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 focus:outline-none focus:border-slate-300 transition-all text-slate-800">
                            </div>
                        </div>

                        <!-- Edit Button -->
                        <div class="pt-2">
                            <button type="button" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-5 py-2 rounded-lg shadow-2xs transition-colors cursor-pointer whitespace-nowrap min-h-[38px]">
                                Edit
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Card 3: Approval Actions -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Approval Actions</h3>

                    <!-- Stage Banner -->
                    <div class="bg-slate-50 rounded-xl p-4 border border-slate-200/70 flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-bold text-slate-900 font-heading">MOD Clearance</h4>
                            <span class="text-xs text-slate-400 font-inter">Current Stage</span>
                        </div>
                        <span class="bg-[#FEF3C7] text-[#D97706] text-xs font-semibold px-3 py-1 rounded-md whitespace-nowrap">Awaiting MOD</span>
                    </div>

                    <!-- Select Stage Dropdown -->
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">UPDATE STAGE TO</label>
                        <div class="relative">
                            <select class="w-full appearance-none rounded-lg bg-white border border-slate-200 text-xs font-inter py-2 px-3 pr-8 focus:outline-none focus:border-slate-300 transition-all text-slate-800 cursor-pointer">
                                <option selected>MOD Clearance (Current)</option>
                                <option>Ministry Final Approval</option>
                                <option>Letter Issuance</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400 text-xs">▾</div>
                        </div>
                    </div>

                    <!-- 2 Main Decision Option Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        
                        <!-- Option 1: Approve Stage -->
                        <div class="bg-[#F0FDF4] border border-emerald-200 rounded-xl p-4 shadow-2xs cursor-pointer hover:border-emerald-300 transition-colors">
                            <h5 class="text-xs font-bold text-emerald-800 font-heading whitespace-nowrap">Approve Stage</h5>
                            <p class="text-[11px] text-emerald-700/80 font-inter mt-1 leading-snug">Mark current stage as cleared and advance to the next approval step.</p>
                        </div>

                        <!-- Option 2: Reject Application -->
                        <div class="bg-[#FEF2F2] border border-rose-200 rounded-xl p-4 shadow-2xs cursor-pointer hover:border-rose-300 transition-colors">
                            <h5 class="text-xs font-bold text-rose-800 font-heading whitespace-nowrap">Reject Application</h5>
                            <p class="text-[11px] text-rose-700/80 font-inter mt-1 leading-snug">Decline this application and notify the applicant with a reason.</p>
                        </div>

                    </div>

                    <!-- Bottom Action Buttons -->
                    <div class="flex items-center flex-wrap gap-2.5 pt-2">
                        <button type="button" class="bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-2xs transition-colors cursor-pointer whitespace-nowrap min-h-[40px]">
                            Return for Revision
                        </button>
                        <button type="button" class="bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-2xs transition-colors cursor-pointer whitespace-nowrap min-h-[40px]">
                            Place on Hold
                        </button>
                        <button type="button" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-5 py-2.5 rounded-lg shadow-sm transition-colors cursor-pointer whitespace-nowrap min-h-[40px]">
                            Issue Letter
                        </button>
                    </div>

                </div>

                <!-- Card 4: Communication & Notifications Log -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-slate-200/80 shadow-xs space-y-5">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Approval Actions</h3>

                    <!-- Top Summary Stats Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-slate-50/70 border border-slate-200/70 p-4 rounded-xl">
                            <h4 class="text-xl font-bold text-slate-900 font-heading">1</h4>
                            <p class="text-xs font-semibold text-slate-700 font-heading mt-0.5">SMS Sent</p>
                            <span class="text-[11px] text-slate-400 font-inter">Last: 22 Mar 2026</span>
                        </div>
                        <div class="bg-slate-50/70 border border-slate-200/70 p-4 rounded-xl">
                            <h4 class="text-xl font-bold text-slate-900 font-heading">1</h4>
                            <p class="text-xs font-semibold text-slate-700 font-heading mt-0.5">Emails Sent</p>
                            <span class="text-[11px] text-slate-400 font-inter">Last: 22 Mar 2026</span>
                        </div>
                    </div>

                    <!-- Log Items List -->
                    <div class="divide-y divide-slate-100 font-inter text-xs space-y-0">
                        
                        <!-- Log Item 1 -->
                        <div class="py-3.5 first:pt-0 space-y-1">
                            <div class="flex items-center justify-between">
                                <h5 class="font-bold text-slate-900 whitespace-nowrap">SMS – Application Received Confirmation</h5>
                                <span class="text-[11px] text-slate-400 whitespace-nowrap">14 Mar 09:10</span>
                            </div>
                            <p class="text-slate-500 text-[11px]">To: +82-10-3847-XXXX · "Your application VLS-2634 has been received…"</p>
                            <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/60 px-2 py-0.5 text-[10px] font-semibold rounded inline-block whitespace-nowrap mt-1">Delivered</span>
                        </div>

                        <!-- Log Item 2 -->
                        <div class="py-3.5 space-y-1">
                            <div class="flex items-center justify-between">
                                <h5 class="font-bold text-slate-900 whitespace-nowrap">Email – Application Acknowledgement</h5>
                                <span class="text-[11px] text-slate-400 whitespace-nowrap">14 Mar 09:11</span>
                            </div>
                            <p class="text-slate-500 text-[11px]">To: email@gmail.com · Ref: VLS-2634 · Full confirmation with details</p>
                            <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/60 px-2 py-0.5 text-[10px] font-semibold rounded inline-block whitespace-nowrap mt-1">Delivered</span>
                        </div>

                    </div>

                    <!-- Manual Notification Box -->
                    <div class="bg-slate-50/70 rounded-xl p-4 border border-slate-200/70 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <span class="text-xs text-slate-600 font-medium whitespace-nowrap">Send manual notification:</span>
                        <div class="flex items-center gap-2">
                            <button type="button" class="bg-white border border-slate-300 hover:bg-slate-100 text-slate-700 text-xs font-semibold px-3.5 py-1.5 rounded-lg shadow-2xs transition-colors cursor-pointer whitespace-nowrap min-h-[36px]">
                                Send SMS
                            </button>
                            <button type="button" class="bg-white border border-slate-300 hover:bg-slate-100 text-slate-700 text-xs font-semibold px-3.5 py-1.5 rounded-lg shadow-2xs transition-colors cursor-pointer whitespace-nowrap min-h-[36px]">
                                Send Email
                            </button>
                        </div>
                    </div>

                </div>

            </div>

            <!-- Right Column: Sidebar Cards (lg:col-span-4) -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Card 1: Application Summary -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Application Summary</h3>

                    <div class="divide-y divide-slate-100 text-xs font-inter">
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">Application ID</span>
                            <strong class="font-mono text-slate-900 font-bold">VLS-2634</strong>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">Visa Type</span>
                            <span class="font-semibold text-[#0284C7] inline-flex items-center gap-1">
                                ✈️ Entry Visa
                            </span>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">Current Stage</span>
                            <strong class="text-slate-900 font-semibold">MOD Clearance</strong>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">Status</span>
                            <span class="bg-[#E0F2FE] text-[#0369A1] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#0284C7]"></span>
                                MOD Review
                            </span>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">Submitted</span>
                            <span class="text-slate-800 font-medium">14 Mar 2026</span>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">Days Elapsed</span>
                            <strong class="text-amber-600 font-bold">16 days</strong>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">SLA Target</span>
                            <strong class="text-slate-900 font-semibold">21 days</strong>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">Assigned To</span>
                            <span class="text-slate-900 font-semibold">S. Amarasinghe</span>
                        </div>
                        <div class="py-2.5 flex items-center justify-between">
                            <span class="text-slate-400">DB Record</span>
                            <span class="font-mono text-slate-500 text-[11px]">ACC-2634-MDB</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Quick Actions -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Quick Actions</h3>

                    <div class="space-y-2 font-inter text-xs">
                        <button type="button" class="w-full bg-slate-50 hover:bg-slate-100 border border-slate-200/80 text-slate-700 font-medium p-3 rounded-xl flex items-center justify-between transition-colors cursor-pointer">
                            <span>Generate Recommendation Letter</span>
                            <span class="text-slate-400">→</span>
                        </button>
                        <button type="button" class="w-full bg-slate-50 hover:bg-slate-100 border border-slate-200/80 text-slate-700 font-medium p-3 rounded-xl flex items-center justify-between transition-colors cursor-pointer">
                            <span>Approve Current Stage</span>
                            <span class="text-slate-400">→</span>
                        </button>
                        <button type="button" class="w-full bg-slate-50 hover:bg-slate-100 border border-slate-200/80 text-slate-700 font-medium p-3 rounded-xl flex items-center justify-between transition-colors cursor-pointer">
                            <span>Send Notification</span>
                            <span class="text-slate-400">→</span>
                        </button>
                        <button type="button" class="w-full bg-slate-50 hover:bg-slate-100 border border-slate-200/80 text-slate-700 font-medium p-3 rounded-xl flex items-center justify-between transition-colors cursor-pointer">
                            <span>Open in Access DB</span>
                            <span class="text-slate-400">→</span>
                        </button>
                        <button type="button" class="w-full bg-slate-50 hover:bg-slate-100 border border-slate-200/80 text-slate-700 font-medium p-3 rounded-xl flex items-center justify-between transition-colors cursor-pointer">
                            <span>Print Application</span>
                            <span class="text-slate-400">→</span>
                        </button>
                        <button type="button" class="w-full bg-rose-50/50 hover:bg-rose-50 border border-rose-200 text-rose-600 font-semibold p-3 rounded-xl flex items-center justify-between transition-colors cursor-pointer">
                            <span>Reject Application</span>
                            <span class="text-rose-400">→</span>
                        </button>
                    </div>
                </div>

                <!-- Card 3: Activity Timeline Stepper -->
                <div class="bg-white rounded-xl p-5 sm:p-6 border border-slate-200/80 shadow-xs space-y-4">
                    <h3 class="text-base sm:text-lg font-bold text-slate-900 font-heading">Activity Timeline</h3>

                    <div class="relative pl-1 pt-1">
                        <!-- Stepper Line -->
                        <div class="absolute left-5 top-4 bottom-4 w-0.5 bg-slate-200 z-0"></div>

                        <div class="space-y-5 relative z-10">
                            
                            <!-- Step 1 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-emerald-600 text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                                    1
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Department Review</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Cleared by D. Perera · 15 Mar</p>
                                    <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/60 px-2 py-0.5 text-[10px] font-semibold rounded inline-block whitespace-nowrap mt-1">Completed</span>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-emerald-600 text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                                    2
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Buddhasasana Ministry</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Cleared · 22 Mar 2026</p>
                                    <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/60 px-2 py-0.5 text-[10px] font-semibold rounded inline-block whitespace-nowrap mt-1">Completed</span>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-amber-500 text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                                    3
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">MOD Clearance</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Security review in progress</p>
                                    <span class="bg-amber-50 text-amber-700 border border-amber-200/60 px-2 py-0.5 text-[10px] font-semibold rounded inline-block whitespace-nowrap mt-1">In Progress</span>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-500 text-xs font-bold font-heading flex items-center justify-center flex-shrink-0">
                                    4
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-700 font-heading whitespace-nowrap">Ministry Final Approval</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Awaiting MOD clearance</p>
                                    <span class="bg-slate-100 text-slate-500 border border-slate-200/60 px-2 py-0.5 text-[10px] font-semibold rounded inline-block whitespace-nowrap mt-1">Waiting</span>
                                </div>
                            </div>

                            <!-- Step 5 -->
                            <div class="flex items-start space-x-3.5">
                                <div class="w-8 h-8 rounded-full bg-slate-200 text-slate-500 text-xs font-bold font-heading flex items-center justify-center flex-shrink-0">
                                    5
                                </div>
                                <div class="pt-0.5">
                                    <h4 class="text-xs font-bold text-slate-700 font-heading whitespace-nowrap">Letter Issuance</h4>
                                    <p class="text-[11px] text-slate-400 font-inter mt-0.5 whitespace-nowrap">Recommendation letter generation</p>
                                    <span class="bg-slate-100 text-slate-500 border border-slate-200/60 px-2 py-0.5 text-[10px] font-semibold rounded inline-block whitespace-nowrap mt-1">Waiting</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/application-modal.php';
require_once __DIR__ . '/includes/footer.php';
?>
