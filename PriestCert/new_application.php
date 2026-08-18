<?php
/**
 * New Application Form Page - Step 1
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 */

// Highlight the 'Applications' sidebar tab
$current_page = 'applications.php';
$page_title = "New Application";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Applications / New Application</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">New Application</h2>
            </div>
            <div>
                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-xs px-4 py-2 h-9 rounded-lg flex items-center justify-center gap-1.5 transition-colors font-medium shadow-3xs font-inter">
                    Save Draft
                </button>
            </div>
        </div>

        <!-- Wizard Stepper (Progress Tracker) -->
        <div class="py-6 max-w-5xl mx-auto overflow-x-auto">
            <div class="relative flex items-center justify-between w-full min-w-[480px] font-inter px-2">
                <!-- Connecting Line background -->
                <div class="absolute left-4 right-4 top-[15px] h-0.5 bg-slate-200" aria-hidden="true"></div>
                
                <!-- Step 1 (Active) -->
                <div class="relative flex flex-col items-center z-10">
                    <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-900 text-slate-900 flex items-center justify-center text-xs font-bold shadow-2xs">
                        1
                    </div>
                    <span class="text-[9px] sm:text-[10px] font-bold text-slate-900 uppercase tracking-wider text-center mt-2.5 whitespace-nowrap">Personal details</span>
                </div>

                <!-- Step 2 -->
                <div class="relative flex flex-col items-center z-10">
                    <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 text-slate-350 flex items-center justify-center text-xs font-semibold">
                        2
                    </div>
                    <span class="text-[9px] sm:text-[10px] font-medium text-slate-400 uppercase tracking-wider text-center mt-2.5 whitespace-nowrap">Church Information</span>
                </div>

                <!-- Step 3 -->
                <div class="relative flex flex-col items-center z-10">
                    <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 text-slate-350 flex items-center justify-center text-xs font-semibold">
                        3
                    </div>
                    <span class="text-[9px] sm:text-[10px] font-medium text-slate-400 uppercase tracking-wider text-center mt-2.5 whitespace-nowrap">Documents</span>
                </div>

                <!-- Step 4 -->
                <div class="relative flex flex-col items-center z-10">
                    <div class="w-8 h-8 rounded-full bg-white border-2 border-slate-200 text-slate-350 flex items-center justify-center text-xs font-semibold">
                        4
                    </div>
                    <span class="text-[9px] sm:text-[10px] font-medium text-slate-400 uppercase tracking-wider text-center mt-2.5 whitespace-nowrap">Review & submit</span>
                </div>
            </div>
        </div>

        <!-- Section Title Indicator -->
        <div class="flex items-center gap-3 pt-4">
            <div class="w-7 h-7 rounded-full bg-secondary text-white flex items-center justify-center text-xs font-bold font-heading">
                1
            </div>
            <div>
                <h3 class="text-base font-bold text-slate-900 font-heading">Personal Details</h3>
                <p class="text-xs text-slate-405 text-slate-400 font-inter mt-0.5">Applicant's identity and contact information</p>
            </div>
        </div>

        <!-- Grid Layout Workspace -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            
            <!-- Left Side: Forms (col-span-8) -->
            <div class="lg:col-span-8 space-y-6">
                
                <!-- Card 1: Personal Information Form -->
                <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-6">
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 font-heading">Personal Information</h4>
                        <p class="text-xs text-slate-400 font-inter mt-1">Enter details exactly as they appear on official documents.</p>
                    </div>

                    <!-- Fields Layout -->
                    <div class="space-y-4 font-inter text-xs">
                        
                        <!-- First Name & Last Name -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    First Name <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" placeholder="e.g. Anthony" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    Last Name <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" placeholder="e.g. Silva" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9">
                            </div>
                        </div>

                        <!-- Role / Title Switcher -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-2">
                                Role / Title <span class="text-rose-500">*</span>
                            </label>
                            
                            <!-- Custom horizontal selector pills -->
                            <div class="flex flex-wrap items-center gap-3">
                                <!-- Option Father (Selected) -->
                                <label class="flex items-center gap-2 border-2 border-secondary bg-white rounded-lg px-4 py-2.5 text-xs font-semibold text-slate-800 cursor-pointer shadow-3xs transition-all min-h-[44px]">
                                    <input type="radio" name="role_title" value="Father" checked class="text-secondary focus:ring-secondary w-4 h-4">
                                    Father
                                </label>
                                <!-- Option Sister -->
                                <label class="flex items-center gap-2 border border-slate-200 bg-white hover:bg-slate-50 rounded-lg px-4 py-2.5 text-xs font-medium text-slate-655 text-slate-500 cursor-pointer transition-all min-h-[44px]">
                                    <input type="radio" name="role_title" value="Sister" class="text-secondary focus:ring-secondary w-4 h-4">
                                    Sister
                                </label>
                                <!-- Option Brother -->
                                <label class="flex items-center gap-2 border border-slate-200 bg-white hover:bg-slate-50 rounded-lg px-4 py-2.5 text-xs font-medium text-slate-655 text-slate-500 cursor-pointer transition-all min-h-[44px]">
                                    <input type="radio" name="role_title" value="Brother" class="text-secondary focus:ring-secondary w-4 h-4">
                                    Brother
                                </label>
                                <!-- Option Deacon -->
                                <label class="flex items-center gap-2 border border-slate-200 bg-white hover:bg-slate-50 rounded-lg px-4 py-2.5 text-xs font-medium text-slate-655 text-slate-500 cursor-pointer transition-all min-h-[44px]">
                                    <input type="radio" name="role_title" value="Deacon" class="text-secondary focus:ring-secondary w-4 h-4">
                                    Deacon
                                </label>
                            </div>
                        </div>

                        <!-- Date of Birth & Gender -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    Date of Birth <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" placeholder="mm/dd/yyyy" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    Gender
                                </label>
                                <select class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-600 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9 cursor-pointer">
                                    <option>Select gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>

                        <!-- National ID & Passport Number -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    National ID Number <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" placeholder="e.g. 782640923V" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    Passport Number
                                </label>
                                <input type="text" placeholder="e.g. N1234567" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9">
                                <span class="text-[9px] text-slate-400 font-inter mt-1.5 block">Required for passport certification only</span>
                            </div>
                        </div>

                        <!-- Phone Number & Email Address -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    Phone Number
                                </label>
                                <input type="text" placeholder="+94 77 123 4567" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider mb-1.5">
                                    Email Address
                                </label>
                                <input type="email" placeholder="fr.silva@diocese.lk" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-lg text-slate-800 focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-slate-350 h-9">
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card 2: Certificate Type Requested Form -->
                <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-6">
                    <div>
                        <h4 class="text-sm font-bold text-slate-900 font-heading">Certificate Type Requested</h4>
                        <p class="text-xs text-slate-400 font-inter mt-1">Select all applicable certificate types for this application.</p>
                    </div>

                    <!-- Option list -->
                    <div class="space-y-3 font-inter text-xs">
                        
                        <!-- Option 1: Priesthood identity certificate (Checked) -->
                        <label class="flex items-start gap-3 p-4 border border-slate-200 rounded-lg bg-slate-50/50 cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" checked class="text-secondary focus:ring-secondary rounded w-4 h-4 mt-0.5">
                            <div>
                                <span class="block text-xs font-semibold text-slate-800">Priesthood identity certificate</span>
                                <span class="block text-[10px] text-slate-400 font-inter mt-0.5">Official identity document for use within the diocese and state institutions</span>
                            </div>
                        </label>

                        <!-- Option 2: Passport certification letter -->
                        <label class="flex items-start gap-3 p-4 border border-slate-200/60 rounded-lg bg-white cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" class="text-secondary focus:ring-secondary rounded w-4 h-4 mt-0.5">
                            <div>
                                <span class="block text-xs font-semibold text-slate-700">Passport certification letter</span>
                                <span class="block text-[10px] text-slate-400 font-inter mt-0.5">Letter confirming ecclesiastical status for passport and visa purposes</span>
                            </div>
                        </label>

                        <!-- Option 3: Both documents -->
                        <label class="flex items-start gap-3 p-4 border border-slate-200/60 rounded-lg bg-white cursor-pointer hover:bg-slate-50 transition-colors">
                            <input type="checkbox" class="text-secondary focus:ring-secondary rounded w-4 h-4 mt-0.5">
                            <div>
                                <span class="block text-xs font-semibold text-slate-700">Both documents</span>
                                <span class="block text-[10px] text-slate-400 font-inter mt-0.5">Issue identity certificate and passport letter together</span>
                            </div>
                        </label>

                    </div>
                </div>

                <!-- Footer Buttons -->
                <div class="flex items-center gap-3">
                    <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-xs px-5 py-2.5 rounded-lg transition-colors font-inter shadow-3xs font-medium">Cancel</button>
                    <button type="button" class="bg-secondary hover:bg-secondary-dark text-white font-medium text-xs px-5 py-2.5 rounded-lg shadow-xs transition-colors font-inter">Save & Continue</button>
                </div>

            </div>

            <!-- Right Side: Sidebar Widgets (col-span-4) -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Widget 1: Application Reference -->
                <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-5 space-y-4">
                    <div>
                        <span class="text-[9px] font-bold text-slate-400 uppercase tracking-widest block font-heading">APPLICATION REFERENCE</span>
                        <h4 class="text-lg font-bold text-slate-900 font-heading mt-1.5">APP-2026-0149</h4>
                        <span class="text-[10px] text-slate-400 font-inter mt-1 block">Auto-generated · 26 March 2026</span>
                    </div>
                    <div class="border-t border-slate-100 pt-3">
                        <p class="text-[10px] text-slate-400 font-inter leading-relaxed">
                            This reference tracks the application through the full approval workflow.
                        </p>
                    </div>
                </div>

                <!-- Widget 2: Guide Box (Navy background) -->
                <div class="bg-secondary text-white rounded-xl shadow-2xs p-6 space-y-5">
                    <h4 class="text-xs font-bold font-heading uppercase tracking-wider">Step 1 — Personal Details</h4>
                    
                    <ul class="space-y-4 text-[11px] font-inter text-slate-300">
                        <li class="flex items-start gap-2.5">
                            <span class="w-1.5 h-1.5 bg-[#D4AF37] rounded-full mt-1.5 shrink-0"></span>
                            <span>Fields marked with a red dot are required</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="w-1.5 h-1.5 bg-[#D4AF37] rounded-full mt-1.5 shrink-0"></span>
                            <span>Name must match official ecclesiastical records exactly</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="w-1.5 h-1.5 bg-[#D4AF37] rounded-full mt-1.5 shrink-0"></span>
                            <span>Passport number only needed for passport certification</span>
                        </li>
                        <li class="flex items-start gap-2.5">
                            <span class="w-1.5 h-1.5 bg-[#D4AF37] rounded-full mt-1.5 shrink-0"></span>
                            <span>National ID will be verified against the diocesan registry</span>
                        </li>
                    </ul>

                    <!-- Progress line bar -->
                    <div class="pt-2">
                        <div class="w-full bg-white/20 h-1 rounded-full overflow-hidden">
                            <div class="w-0 bg-[#D4AF37] h-full transition-all duration-300"></div>
                        </div>
                        <span class="text-[10px] text-slate-300 font-inter mt-2 block">0% complete</span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
