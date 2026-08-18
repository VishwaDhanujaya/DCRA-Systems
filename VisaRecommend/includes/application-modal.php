<?php
/**
 * Application View Slide-Over Drawer Component
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */
?>
<!-- Application Details Slide-Over Drawer & Overlay -->
<div id="application-drawer-overlay" class="fixed inset-0 bg-slate-950/60 backdrop-blur-xs z-50 transition-opacity duration-300 opacity-0 pointer-events-none" aria-hidden="true"></div>

<div id="application-drawer" class="fixed inset-y-0 right-0 w-full max-w-lg bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col" role="dialog" aria-modal="true" aria-labelledby="drawer-applicant-name">
    
    <!-- Drawer Sticky Header -->
    <div class="p-5 sm:p-6 border-b border-slate-200/80 bg-white relative">
        <div class="flex items-start justify-between gap-4">
            <div>
                <span id="drawer-visa-id" class="text-[11px] font-bold text-slate-400 tracking-widest uppercase font-heading block whitespace-nowrap">Entry Visa · VLS-2634</span>
                <h3 id="drawer-applicant-name" class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-1">Fr. Anthony Silva</h3>
                <p id="drawer-applicant-church" class="text-xs text-slate-500 font-inter mt-0.5">St. Anthony's Church • Colombo Diocese</p>
            </div>
            
            <button id="close-drawer-btn" type="button" aria-label="Close details" class="w-8 h-8 rounded-full bg-slate-100 hover:bg-slate-200 text-slate-500 flex items-center justify-center transition-colors flex-shrink-0 cursor-pointer">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Drawer Body Scrollable Content -->
    <div class="flex-1 overflow-y-auto p-5 sm:p-6 space-y-6 font-inter text-xs">
        
        <!-- Section 1: APPLICANT DETAILS -->
        <div class="space-y-3">
            <h4 class="text-[11px] font-bold text-slate-400 uppercase tracking-widest font-heading border-b border-slate-100 pb-2">APPLICANT DETAILS</h4>
            <div class="grid grid-cols-2 gap-x-4 gap-y-3 pt-1">
                <div>
                    <span class="text-[11px] text-slate-400 block">Full Name</span>
                    <strong id="drawer-detail-name" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">Fr. Anthony Silva</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Nationality</span>
                    <strong id="drawer-detail-nationality" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">Sri Lankan</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Passport No.</span>
                    <strong id="drawer-detail-passport" class="text-slate-900 font-semibold text-xs font-mono mt-0.5 block whitespace-nowrap">GH2847391</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Visa Type</span>
                    <strong id="drawer-detail-visatype" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">Entry Visa</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Submitted</span>
                    <strong id="drawer-detail-submitted" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">14 Mar 2026</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Current Status</span>
                    <strong id="drawer-detail-status" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">MOD Review</strong>
                </div>
            </div>
        </div>

        <!-- Section 2: APPROVAL PIPELINE -->
        <div class="space-y-3">
            <h4 class="text-[11px] font-bold text-slate-400 uppercase tracking-widest font-heading border-b border-slate-100 pb-2">APPROVAL PIPELINE</h4>
            
            <div class="relative pl-1 pt-1">
                <!-- Stepper Line -->
                <div class="absolute left-4 top-4 bottom-4 w-0.5 bg-slate-200 z-0"></div>

                <div class="space-y-5 relative z-10">
                    
                    <!-- Step 1 -->
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-7 h-7 rounded-full bg-emerald-600 text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                                1
                            </div>
                            <div class="pt-0.5">
                                <h5 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Department Review</h5>
                                <p class="text-[11px] text-slate-400 mt-0.5 whitespace-nowrap">Cleared by D. Perera · 15 Mar</p>
                            </div>
                        </div>
                        <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/60 px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap">Completed</span>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-7 h-7 rounded-full bg-emerald-600 text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                                2
                            </div>
                            <div class="pt-0.5">
                                <h5 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">Buddhasasana Ministry</h5>
                                <p class="text-[11px] text-slate-400 mt-0.5 whitespace-nowrap">Cleared · 22 Mar 2026</p>
                            </div>
                        </div>
                        <span class="bg-emerald-50 text-emerald-700 border border-emerald-200/60 px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap">Completed</span>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-7 h-7 rounded-full bg-amber-500 text-white text-xs font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                                3
                            </div>
                            <div class="pt-0.5">
                                <h5 class="text-xs font-bold text-slate-900 font-heading whitespace-nowrap">MOD Clearance</h5>
                                <p class="text-[11px] text-slate-400 mt-0.5 whitespace-nowrap">Security review in progress</p>
                            </div>
                        </div>
                        <span class="bg-amber-50 text-amber-700 border border-amber-200/60 px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap">In Progress</span>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-7 h-7 rounded-full bg-slate-200 text-slate-500 text-xs font-bold font-heading flex items-center justify-center flex-shrink-0">
                                4
                            </div>
                            <div class="pt-0.5">
                                <h5 class="text-xs font-bold text-slate-700 font-heading whitespace-nowrap">Ministry Final Approval</h5>
                                <p class="text-[11px] text-slate-400 mt-0.5 whitespace-nowrap">Awaiting MOD clearance</p>
                            </div>
                        </div>
                        <span class="bg-slate-100 text-slate-500 border border-slate-200/60 px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap">Waiting</span>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start justify-between gap-3">
                        <div class="flex items-start space-x-3">
                            <div class="w-7 h-7 rounded-full bg-slate-200 text-slate-500 text-xs font-bold font-heading flex items-center justify-center flex-shrink-0">
                                5
                            </div>
                            <div class="pt-0.5">
                                <h5 class="text-xs font-bold text-slate-700 font-heading whitespace-nowrap">Letter Issuance</h5>
                                <p class="text-[11px] text-slate-400 mt-0.5 whitespace-nowrap">Recommendation letter generation</p>
                            </div>
                        </div>
                        <span class="bg-slate-100 text-slate-500 border border-slate-200/60 px-2 py-0.5 text-[10px] font-semibold rounded-md whitespace-nowrap">Waiting</span>
                    </div>

                </div>
            </div>
        </div>

        <!-- Section 3: COMMUNICATION -->
        <div class="space-y-3">
            <h4 class="text-[11px] font-bold text-slate-400 uppercase tracking-widest font-heading border-b border-slate-100 pb-2">COMMUNICATION</h4>
            <div class="grid grid-cols-2 gap-x-4 gap-y-3 pt-1">
                <div>
                    <span class="text-[11px] text-slate-400 block">Email</span>
                    <strong id="drawer-comm-email" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">anthonysilva@email.com</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Phone / SMS</span>
                    <strong id="drawer-comm-phone" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">+94 71 234 5678</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Last Notified</span>
                    <strong id="drawer-comm-lastnotified" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">22 Mar 2026</strong>
                </div>
                <div>
                    <span class="text-[11px] text-slate-400 block">Notifications</span>
                    <strong id="drawer-comm-type" class="text-slate-900 font-semibold text-xs mt-0.5 block whitespace-nowrap">SMS + Email</strong>
                </div>
            </div>
        </div>

    </div>

    <!-- Drawer Footer Actions -->
    <div class="p-4 sm:p-5 border-t border-slate-200 bg-slate-50/70 flex items-center justify-end flex-wrap gap-2">
        <a id="drawer-fullpage-link" href="<?= BASE_URL ?>application-details?id=VLS-2634" class="bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs px-3.5 py-2.5 rounded-lg flex items-center justify-center gap-1.5 transition-colors whitespace-nowrap min-h-[40px] shadow-2xs">
            Full Page View ↗
        </a>
        <button id="close-drawer-bottom-btn" type="button" class="bg-white border border-slate-300 hover:bg-slate-100 text-slate-700 font-semibold text-xs px-4 py-2.5 rounded-lg flex-1 sm:flex-none justify-center whitespace-nowrap min-h-[40px] transition-colors cursor-pointer shadow-2xs">
            Close
        </button>
        <button type="button" class="bg-secondary hover:bg-secondary-dark text-white font-semibold text-xs px-4 py-2.5 rounded-lg flex-1 sm:flex-none justify-center whitespace-nowrap min-h-[40px] transition-colors cursor-pointer shadow-sm">
            Issue Letter
        </button>
        <button type="button" class="bg-primary hover:bg-primary-dark text-white font-semibold text-xs px-4 py-2.5 rounded-lg flex-1 sm:flex-none justify-center whitespace-nowrap min-h-[40px] transition-colors cursor-pointer shadow-sm">
            Notify
        </button>
    </div>

</div>
