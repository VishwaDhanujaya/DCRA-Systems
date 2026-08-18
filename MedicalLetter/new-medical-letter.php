<?php
/**
 * New Medical Letter Creation Page - Refined Compact Proportional UI Layout
 * Department of Christian Religious Affairs / Ministry of Health
 * Priesthood Identity / Passport Certification System
 */

$page_title = "New Medical Letter";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumbs & Page Heading -->
        <div>
            <span class="text-xs font-normal text-slate-400 font-inter">Home / New Medical Letter</span>
            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">New Medical Letter</h2>
        </div>

        <!-- TOP SECTION: VISA RECOMMENDATION WORKFLOW (Always Visible) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- TOP LEFT COLUMN (2/3 width): Search + Visa Letter Preview -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- CARD 1: Search Applicant -->
                <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                    <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Search Applicant</h3>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-2 font-heading">
                            ENTER PASSPORT NUMBER TO RETRIEVE APPLICANT DETAILS
                        </label>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="text" id="passport-search-input" value="AB1234567" placeholder="Enter passport number..." class="flex-1 px-4 py-2.5 bg-slate-50 border border-slate-200 rounded-lg text-sm font-inter text-slate-800 focus:bg-white focus:outline-none focus:border-slate-300 focus:ring-1 focus:ring-slate-300 transition-all uppercase font-semibold h-11">
                            <div class="flex gap-2">
                                <button type="button" id="btn-search-applicant" class="bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-bold font-heading px-6 py-2.5 rounded-lg shadow-xs transition-all h-11 min-w-[90px] cursor-pointer flex items-center justify-center">
                                    Search
                                </button>
                                <button type="button" id="btn-clear-applicant" class="border border-slate-200 hover:bg-slate-50 text-slate-600 text-xs font-bold font-heading px-6 py-2.5 rounded-lg transition-all h-11 min-w-[90px] cursor-pointer flex items-center justify-center">
                                    Clear
                                </button>
                            </div>
                        </div>
                        <p class="text-[11px] text-slate-400 font-inter mt-2">
                            Data is retrieved from the Visa Recommendation System. Passport number is case-insensitive.
                        </p>
                    </div>
                </div>

                <!-- CARD 2: Visa Letter Preview Canvas -->
                <div id="visa-letter-preview-card" class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Visa Letter Preview</h3>
                    </div>

                    <!-- Document Canvas Sheet Backdrop Container -->
                    <div class="bg-[#EBECEE] p-4 sm:p-8 rounded-2xl flex justify-center items-center overflow-x-auto border border-slate-200/60">
                        <div id="letter-sheet" class="bg-white shadow-md rounded-none max-w-[580px] w-full min-h-[760px] text-slate-800 font-inter flex flex-col justify-between border border-slate-200/80 text-[11px] leading-relaxed relative overflow-hidden transition-all duration-200 p-0">
                            
                            <div>
                                <!-- Dark Navy Top Banner -->
                                <div class="bg-[#102033] p-5 text-white flex items-center justify-between gap-4">
                                    
                                    <!-- Left: Emblem & Ministry Title -->
                                    <div class="flex items-center space-x-3">
                                        <img src="<?= BASE_URL ?>assets/images/emblem.png" alt="Sri Lanka State Emblem" class="w-10 h-12 object-contain flex-shrink-0">
                                        <div class="text-left">
                                            <h2 class="font-bold text-xs sm:text-sm text-white font-heading leading-tight block">Ministry of Buddhasasana,</h2>
                                            <h2 class="font-bold text-xs sm:text-sm text-white font-heading leading-tight block">Religious and Cultural Affairs</h2>
                                            <p class="text-[9px] text-slate-300 font-normal mt-1 block">Department of Visa Recommendation Services</p>
                                            <p class="text-[8px] text-slate-400 font-normal mt-0.5 block">3rd Floor,No. 180,T.B. Jaya Mawatha,Colombo 10.</p>
                                        </div>
                                    </div>

                                    <!-- Right: Document Reference & Date -->
                                    <div class="text-right">
                                        <span id="letter-visa-doc-ref" class="font-mono font-bold text-[10px] text-[#D4AF37] text-right block">VLS/REC/2634/2026</span>
                                        <span id="letter-visa-doc-date" class="text-[9px] text-slate-300 text-right block mt-0.5">30 March 2026</span>
                                        <span class="text-[8px] text-slate-400 tracking-wider uppercase text-right block mt-1">OFFICIAL DOCUMENT</span>
                                    </div>
                                </div>

                                <!-- Document Body Content -->
                                <div class="p-6 sm:p-8 space-y-5">
                                    
                                    <!-- Subject Title -->
                                    <div class="space-y-0.5 text-left">
                                        <span class="text-[9px] font-bold text-slate-400 tracking-wider uppercase font-heading block">RE: RECOMMENDATION LETTER</span>
                                        <h3 class="text-xs sm:text-sm font-bold text-slate-900 font-heading block">Entry Visa Recommendation for</h3>
                                        <h4 class="text-sm sm:text-base font-bold text-[#C5A059] font-heading block" id="letter-visa-subject-name">Fr. Anthony Silva</h4>
                                    </div>

                                    <!-- Metadata Summary Box -->
                                    <div class="bg-[#F8FAFC] border border-slate-200/80 rounded-xl p-3 sm:p-4 grid grid-cols-1 sm:grid-cols-3 gap-4 text-[10px] font-inter text-left">
                                        <div class="flex items-start space-x-3">
                                            <div id="letter-visa-initials" class="w-9 h-9 bg-[#102033] text-white font-bold font-heading text-xs rounded-lg flex items-center justify-center shadow-xs flex-shrink-0 mt-0.5">
                                                PJ
                                            </div>
                                            <div class="min-w-0">
                                                <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">FULL NAME</span>
                                                <strong id="letter-visa-fullname" class="font-bold text-slate-900 block text-[10px] mt-0.5 truncate">Fr. Anthony Silva</strong>
                                                <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">VISA TYPE</span>
                                                <strong id="letter-visa-type-tag" class="font-semibold text-slate-700 block mt-0.5 truncate">Entry Visa</strong>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">PASSPORT NO.</span>
                                            <strong id="letter-visa-passport" class="font-mono font-bold text-slate-900 block text-[10px] mt-0.5 truncate">GH2847391</strong>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">REFERENCE NO.</span>
                                            <strong id="letter-visa-ref" class="font-mono font-semibold text-slate-700 block mt-0.5 truncate">VLS-2634</strong>
                                        </div>
                                        <div>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">NATIONALITY</span>
                                            <strong id="letter-visa-nationality" class="font-semibold text-slate-900 block text-[10px] mt-0.5 truncate">Sri Lankan</strong>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">APPROVED DATE</span>
                                            <strong id="letter-visa-approved-date" class="font-semibold text-slate-700 block mt-0.5 truncate">28 Mar 2026</strong>
                                        </div>
                                    </div>

                                    <!-- Body Paragraphs -->
                                    <div class="space-y-3 text-[10px] text-slate-700 font-inter leading-relaxed text-left" id="letter-visa-body">
                                        <p class="font-semibold text-slate-900">To Whom It May Concern,</p>
                                        <p>
                                            of Sri Lanka, in support of the visa application submitted by Mr. Anthony Silva, a citizen of Sri Lanka bearing Passport Number GH2847391.
                                        </p>
                                        <p>
                                            The applicant has applied for an Entry Visa for the purpose of religious study and pilgrimage within Sri Lanka. Having reviewed the application in accordance with the established procedures of the Ministry, we are pleased to confirm that the applicant meets all requisite criteria and has been duly cleared at all stages of the approval process, including the Ministry of Defence security clearance.
                                        </p>
                                    </div>

                                    <!-- Sign-off Block -->
                                    <div class="pt-4 space-y-0.5 text-left">
                                        <p class="text-slate-700 font-normal">Yours faithfully,</p>
                                        <div class="h-px bg-slate-800 w-44 my-4"></div>
                                        <p class="font-bold text-slate-900 font-heading">S. Amarasinghe</p>
                                        <p class="text-[9px] text-slate-500">Director General &mdash; Visa Recommendation Services</p>
                                        <p class="text-[8px] text-slate-400">Ministry of Buddhasasana, Religious and Cultural Affairs</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Banner -->
                            <div class="bg-[#F8FAFC] p-4 flex flex-col sm:flex-row items-center justify-between text-[8px] text-slate-400 border-t border-slate-200/60 gap-1 mt-auto">
                                <div class="text-left">
                                    <p class="font-normal text-slate-400">Ministry of Buddhasasana, Religious and Cultural Affairs &middot; Sri Lanka</p>
                                    <p class="text-slate-400 mt-0.5">Tel: +94 11 269 4661 &middot; Email: info@buddhasasana.gov.lk &middot; Web: www.buddhasasana.gov.lk</p>
                                </div>
                                <div class="text-right whitespace-nowrap">
                                    <p class="font-mono text-slate-400" id="letter-visa-meta-footer">Ref : VLS/REC/2634/2026</p>
                                    <p class="text-slate-400 mt-0.5">Generated: 30 March 2026 &middot; Page 1 of 1</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Meta text & Actions below Visa Letter -->
                    <div class="space-y-3 pt-3 border-t border-slate-100">
                        <p id="visa-meta-desc" class="text-xs text-slate-500 font-mono">VLS-2634 &middot; Anthony Silva &middot; Entry Visa &middot; 30 Mar 2026</p>
                        <div class="flex items-center gap-3">
                            <button type="button" id="btn-create-medical-letter" class="bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-bold font-heading px-5 py-2.5 rounded-lg transition-colors cursor-pointer shadow-xs">
                                Create Medical Letter
                            </button>
                            <button type="button" class="border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-5 py-2.5 rounded-lg transition-colors cursor-pointer">
                                Download
                            </button>
                        </div>
                    </div>

                </div>

            </div>

            <!-- TOP RIGHT COLUMN (1/3 width): Select Application (Visa DB) + Visa Letter Type -->
            <div class="lg:col-span-1 space-y-6">
                
                <!-- CARD 1: Select Application (Visa DB) -->
                <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                    <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Select Application</h3>
                    
                    <div id="visa-db-empty" class="text-center py-6 text-slate-400 text-xs font-inter hidden">
                        No applicant selected. Enter a passport number to search.
                    </div>

                    <div id="visa-db-details" class="space-y-4">
                        <!-- Top Header Pill card -->
                        <div class="flex items-center gap-3 p-3 bg-slate-50/80 rounded-lg border border-slate-200/60">
                            <div class="w-9 h-9 rounded-full bg-[#102033] text-white font-bold font-heading flex items-center justify-center text-xs shadow-3xs flex-shrink-0" id="visa-db-badge">
                                AS
                            </div>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-slate-900 font-inter text-xs sm:text-sm block truncate" id="visa-db-name">Fr. Anthony Silva</span>
                                    <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                                <span class="text-[10px] text-slate-400 block font-mono font-semibold truncate" id="visa-db-subtitle">VLS-2634 &middot; Entry Visa &middot; Sri Lankan</span>
                            </div>
                        </div>

                        <!-- Key Value Grid -->
                        <div class="grid grid-cols-2 gap-3 text-[10px] font-inter">
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">FULL NAME</span>
                                <span class="font-bold text-slate-800 block mt-0.5 truncate" id="visa-db-fullname">Anthony Silva</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">NATIONALITY</span>
                                <span class="font-semibold text-slate-700 block mt-0.5 truncate" id="visa-db-nationality">Sri Lankan</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">PASSPORT NO.</span>
                                <span class="font-bold font-mono text-slate-900 uppercase block mt-0.5 truncate" id="visa-db-passport">GH2847391</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">VISA TYPE</span>
                                <span class="font-semibold text-slate-700 block mt-0.5 truncate" id="visa-db-type">Entry Visa</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">APP. REF</span>
                                <span class="font-semibold font-mono text-slate-500 block mt-0.5 truncate" id="visa-db-ref">VLS-2634</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">APPROVED DATE</span>
                                <span class="font-semibold text-slate-700 block mt-0.5 truncate" id="visa-db-approved-date">28 Mar 2026</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2: Visa Letter Type Selection -->
                <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                    <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Visa Letter Type</h3>
                    
                    <div class="space-y-3">
                        
                        <!-- Radio 1: Entry Visa Letter -->
                        <label class="visa-type-card relative flex items-start p-3.5 border border-[#D4AF37] bg-amber-50/20 rounded-lg hover:bg-slate-50/50 cursor-pointer transition-all duration-200">
                            <div class="flex items-center h-5">
                                <input type="radio" name="visa-letter-type" value="Entry Visa" checked class="h-4 w-4 text-[#C5A059] border-slate-300 focus:ring-[#C5A059] cursor-pointer">
                            </div>
                            <div class="ml-3 text-xs">
                                <span class="font-bold text-slate-800 block font-heading">Entry Visa Letter</span>
                                <span class="text-[11px] text-slate-400 font-inter mt-0.5 block leading-normal">Single/multiple entry recommendation for religious visit</span>
                            </div>
                        </label>

                        <!-- Radio 2: Resident Visa Letter -->
                        <label class="visa-type-card relative flex items-start p-3.5 border border-slate-200 rounded-lg hover:bg-slate-50/50 cursor-pointer transition-all duration-200">
                            <div class="flex items-center h-5">
                                <input type="radio" name="visa-letter-type" value="Resident Visa" class="h-4 w-4 text-[#C5A059] border-slate-300 focus:ring-[#C5A059] cursor-pointer">
                            </div>
                            <div class="ml-3 text-xs">
                                <span class="font-bold text-slate-800 block font-heading">Resident Visa Letter</span>
                                <span class="text-[11px] text-slate-400 font-inter mt-0.5 block leading-normal">Long-term residency recommendation and clearance</span>
                            </div>
                        </label>

                        <!-- Radio 3: Visa Extension Letter -->
                        <label class="visa-type-card relative flex items-start p-3.5 border border-slate-200 rounded-lg hover:bg-slate-50/50 cursor-pointer transition-all duration-200">
                            <div class="flex items-center h-5">
                                <input type="radio" name="visa-letter-type" value="Visa Extension" class="h-4 w-4 text-[#C5A059] border-slate-300 focus:ring-[#C5A059] cursor-pointer">
                            </div>
                            <div class="ml-3 text-xs">
                                <span class="font-bold text-slate-800 block font-heading">Visa Extension Letter</span>
                                <span class="text-[11px] text-slate-400 font-inter mt-0.5 block leading-normal">Extension approval with revised duration and conditions</span>
                            </div>
                        </label>

                    </div>
                </div>

            </div>

        </div>

        <!-- LOWER SECTION: MEDICAL LETTER WORKFLOW (Reveals directly next to Medical Letter Preview on 'Create Medical Letter') -->
        <div id="medical-letter-section" class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start pt-2 hidden">
            
            <!-- LOWER LEFT COLUMN (2/3 width): Medical Letter Preview Canvas & Controls -->
            <div class="lg:col-span-2 space-y-6">
                
                <div id="medical-letter-preview-card" class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                        <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Medical Letter Preview</h3>
                        <span class="bg-[#DCFCE7] text-[#15803D] border border-green-200 text-[10px] px-2.5 py-0.5 rounded-full font-semibold flex items-center gap-1.5">
                            Ready to Issue
                        </span>
                    </div>

                    <!-- Document Canvas Sheet Backdrop Container -->
                    <div class="bg-[#EBECEE] p-4 sm:p-8 rounded-2xl flex justify-center items-center overflow-x-auto border border-slate-200/60">
                        <div id="medical-letter-sheet" class="bg-white shadow-md rounded-none max-w-[580px] w-full min-h-[760px] text-slate-800 font-inter flex flex-col justify-between border border-slate-200/80 text-[11px] leading-relaxed relative overflow-hidden transition-all duration-200 p-0">
                            
                            <div>
                                <!-- Dark Navy Top Banner -->
                                <div class="bg-[#102033] p-5 text-white flex items-center justify-between gap-4">
                                    
                                    <!-- Left: Emblem & Ministry Title -->
                                    <div class="flex items-center space-x-3">
                                        <img src="<?= BASE_URL ?>assets/images/emblem.png" alt="Sri Lanka State Emblem" class="w-10 h-12 object-contain flex-shrink-0">
                                        <div class="text-left">
                                            <h2 class="font-bold text-xs sm:text-sm text-white font-heading leading-tight block">Ministry of Health</h2>
                                            <p class="text-[9px] text-slate-300 font-normal mt-1 block">Democratic Socialist Republic of Sri Lanka</p>
                                            <p class="text-[8px] text-slate-400 font-normal mt-0.5 block">Medical Letter Issuing Unit &middot; Health Services Division &middot; Colombo 10</p>
                                        </div>
                                    </div>

                                    <!-- Right: Document Reference & Details -->
                                    <div class="text-right">
                                        <span id="letter-med-doc-ref" class="font-mono font-bold text-[10px] text-[#D4AF37] text-right block">REF NO: ML-2024-0043</span>
                                        <span id="letter-med-doc-date" class="text-[9px] text-slate-300 text-right block mt-0.5">Date: 06 April 2026</span>
                                        <p class="text-[8px] text-slate-400 mt-1 block">Tel: +94 11 2 695 112<br>Email: mlu@health.gov.lk</p>
                                    </div>
                                </div>

                                <!-- Document Body Content -->
                                <div class="p-6 sm:p-8 space-y-5">
                                    
                                    <!-- Subject Title -->
                                    <div class="space-y-0.5 text-left">
                                        <span class="text-[9px] font-bold text-slate-400 tracking-wider uppercase font-heading block">RE: MEDICAL STATEMENT</span>
                                        <h3 class="text-xs sm:text-sm font-bold text-slate-900 font-heading block">Medical Letter for</h3>
                                        <h4 class="text-sm sm:text-base font-bold text-[#C5A059] font-heading block" id="letter-med-subject-name">Fr. Anthony Silva</h4>
                                    </div>

                                    <!-- Metadata Summary Box -->
                                    <div class="bg-[#F8FAFC] border border-slate-200/80 rounded-xl p-3 sm:p-4 grid grid-cols-1 sm:grid-cols-3 gap-4 text-[10px] font-inter text-left">
                                        <div class="flex items-start space-x-3">
                                            <div id="letter-med-initials" class="w-9 h-9 bg-[#102033] text-white font-bold font-heading text-xs rounded-lg flex items-center justify-center shadow-xs flex-shrink-0 mt-0.5">
                                                PJ
                                            </div>
                                            <div class="min-w-0">
                                                <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">FULL NAME</span>
                                                <strong id="letter-med-fullname" class="font-bold text-slate-900 block text-[10px] mt-0.5 truncate">Fr. Anthony Silva</strong>
                                                <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">VISA TYPE</span>
                                                <strong id="letter-med-type-tag" class="font-semibold text-slate-700 block mt-0.5 truncate">Entry Visa</strong>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">PASSPORT NO.</span>
                                            <strong id="letter-med-passport" class="font-mono font-bold text-slate-900 block text-[10px] mt-0.5 truncate">GH2847391</strong>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">REFERENCE NO.</span>
                                            <strong id="letter-med-ref" class="font-mono font-semibold text-slate-700 block mt-0.5 truncate">VLS-2634</strong>
                                        </div>
                                        <div>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">NATIONALITY</span>
                                            <strong id="letter-med-nationality" class="font-semibold text-slate-900 block text-[10px] mt-0.5 truncate">Sri Lankan</strong>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">APPROVED DATE</span>
                                            <strong id="letter-med-approved-date" class="font-semibold text-slate-700 block mt-0.5 truncate">28 Mar 2026</strong>
                                        </div>
                                    </div>

                                    <!-- Body Paragraphs -->
                                    <div class="space-y-3 text-[10px] text-slate-700 font-inter leading-relaxed text-left" id="letter-med-body">
                                        <p class="font-semibold text-slate-900">To Whom It May Concern,</p>
                                        <p>
                                            This is to certify that <strong class="font-bold text-slate-900" id="letter-med-body-fullname">John Doe</strong>, holder of Passport No. <strong class="font-bold text-slate-900 font-mono" id="letter-med-body-passport">AB123456</strong> (Nationality: <span id="letter-med-body-nationality">British</span>, Date of Birth: <span id="letter-med-body-dob">14 March 1985</span>), is a duly registered applicant under the Visa Recommendation System of the Democratic Socialist Republic of Sri Lanka and is fully entitled to <strong class="font-bold text-slate-900">free-of-charge medical services</strong> as stipulated under the applicable bilateral health regulations.
                                        </p>
                                        <p>
                                            The applicant holds a <span id="letter-med-body-type-desc">Resident Visa</span> with reference number <strong class="font-bold text-slate-900 font-mono" id="letter-med-body-visaref">VR-2024-08842</strong>, which has been verified and confirmed as valid by this office. This letter is issued for the express purpose of facilitating unrestricted access to medical treatment at all designated government health institutions throughout Sri Lanka, without any charge levied against the bearer.
                                        </p>
                                        <p>
                                            This letter is valid for a period of: three (3) months<br>
                                            From the date of issue &mdash; until: <strong class="font-bold text-slate-950" id="letter-med-body-expiry">06 July 2026</strong>
                                        </p>
                                    </div>

                                    <!-- Sign-off Block -->
                                    <div class="pt-4 space-y-0.5 text-left">
                                        <p class="text-slate-700 font-normal">Yours faithfully,</p>
                                        <div class="h-px bg-slate-800 w-44 my-4"></div>
                                        <p class="font-bold text-slate-900 font-heading">S. Amarasinghe</p>
                                        <p class="text-[9px] text-slate-500">Director General &mdash; Visa Recommendation Services</p>
                                        <p class="text-[8px] text-slate-400">Ministry of Buddhasasana, Religious and Cultural Affairs</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Banner -->
                            <div class="bg-[#F8FAFC] p-4 flex flex-col sm:flex-row items-center justify-between text-[8px] text-slate-400 border-t border-slate-200/60 gap-1 mt-auto">
                                <div class="text-left">
                                    <p class="font-normal text-slate-400">Ministry of Buddhasasana, Religious and Cultural Affairs &middot; Sri Lanka</p>
                                    <p class="text-slate-400 mt-0.5">Tel: +94 11 269 4661 &middot; Email: info@buddhasasana.gov.lk &middot; Web: www.buddhasasana.gov.lk</p>
                                </div>
                                <div class="text-right whitespace-nowrap">
                                    <p class="font-mono text-slate-400" id="letter-med-meta-footer">Ref : VLS/REC/2634/2026</p>
                                    <p class="text-slate-400 mt-0.5">Generated: 30 March 2026 &middot; Page 1 of 1</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Action Buttons below Medical Letter (5 Equal Grid Buttons) -->
                    <div class="grid grid-cols-2 sm:grid-cols-5 gap-2.5 pt-3 border-t border-slate-100">
                        <button type="button" class="border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-3 py-2 rounded-lg transition-colors cursor-pointer text-center w-full">
                            Generate PDF
                        </button>
                        <button type="button" class="border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-3 py-2 rounded-lg transition-colors cursor-pointer text-center w-full">
                            Download
                        </button>
                        <button type="button" class="border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-3 py-2 rounded-lg transition-colors cursor-pointer text-center w-full">
                            Send Email
                        </button>
                        <button type="button" class="border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-3 py-2 rounded-lg transition-colors cursor-pointer text-center w-full">
                            Print
                        </button>
                        <button type="button" class="border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold px-3 py-2 rounded-lg transition-colors cursor-pointer text-center w-full">
                            Share Link
                        </button>
                    </div>

                </div>

            </div>

            <!-- LOWER RIGHT COLUMN (1/3 width): Select Application (Medical DB), Document Checklist, Activity Log -->
            <div class="lg:col-span-1 space-y-6">
                
                <!-- CARD 1: Select Application (Medical DB) -->
                <div id="med-db-card" class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                    <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Select Application</h3>
                    
                    <div id="med-db-details" class="space-y-4">
                        <!-- Top Header Pill card -->
                        <div class="flex items-center gap-3 p-3 bg-slate-50/80 rounded-lg border border-slate-200/60">
                            <div class="w-9 h-9 rounded-full bg-[#102033] text-white font-bold font-heading flex items-center justify-center text-xs shadow-3xs flex-shrink-0" id="med-db-badge">
                                AS
                            </div>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between">
                                    <span class="font-bold text-slate-900 font-inter text-xs sm:text-sm block truncate" id="med-db-name">Fr. Anthony Silva</span>
                                    <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                                <span class="text-[10px] text-slate-400 block font-mono font-semibold truncate" id="med-db-subtitle">VLS-2634 &middot; Entry Visa &middot; Sri Lankan</span>
                            </div>
                        </div>

                        <!-- Key Value Grid -->
                        <div class="grid grid-cols-2 gap-3 text-[10px] font-inter">
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">FULL NAME</span>
                                <span class="font-bold text-slate-800 block mt-0.5 truncate" id="med-db-fullname">Anthony Silva</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">NATIONALITY</span>
                                <span class="font-semibold text-slate-700 block mt-0.5 truncate" id="med-db-nationality">Sri Lankan</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">DATE OF BIRTH</span>
                                <span class="font-semibold text-slate-700 block mt-0.5 truncate" id="med-db-dob">14 Mar 1985</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">PASSPORT NO.</span>
                                <span class="font-bold font-mono text-slate-900 uppercase block mt-0.5 truncate" id="med-db-passport">GH2847391</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">VISA TYPE</span>
                                <span class="font-semibold text-slate-700 block mt-0.5 truncate" id="med-db-type">Entry Visa</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">VISA REF</span>
                                <span class="font-semibold font-mono text-slate-500 block mt-0.5 truncate" id="med-db-visaref">VR-2024-08842</span>
                            </div>
                            <div class="border border-slate-200/80 bg-slate-50/20 p-2.5 rounded-lg col-span-2">
                                <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider block font-heading">VALID UNTIL</span>
                                <span class="font-semibold text-slate-800 block mt-0.5" id="med-db-valid">06 Jul 2026</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2: Document Checklist (Compact Proportional Design) -->
                <div id="checklist-card" class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                    <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Document Checklist</h3>
                    
                    <div class="relative pl-1 font-inter space-y-4">
                        
                        <!-- Step 1 -->
                        <div class="relative flex items-start gap-3">
                            <div class="absolute left-[11px] top-[24px] bottom-[-16px] w-[2px] bg-[#2A7255]"></div>
                            <div class="w-6 h-6 rounded-full bg-[#2A7255] text-white font-bold text-[10px] flex items-center justify-center flex-shrink-0 z-10 relative shadow-3xs" id="checklist-step-1-badge">
                                1
                            </div>
                            <div class="flex-1 min-w-0 pt-0.5 space-y-0.5">
                                <h4 class="font-bold text-slate-800 text-xs leading-tight">Passport Verified</h4>
                                <p class="text-[11px] text-slate-400 font-normal">Matched with Visa DB</p>
                                <div class="pt-0.5">
                                    <span class="inline-block text-[10px] font-bold px-2 py-0.5 bg-[#E6F4ED] text-[#236B4E] rounded" id="checklist-step-1-status">Completed</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative flex items-start gap-3">
                            <div class="absolute left-[11px] top-[24px] bottom-[-16px] w-[2px] bg-[#2A7255]"></div>
                            <div class="w-6 h-6 rounded-full bg-[#2A7255] text-white font-bold text-[10px] flex items-center justify-center flex-shrink-0 z-10 relative shadow-3xs" id="checklist-step-2-badge">
                                2
                            </div>
                            <div class="flex-1 min-w-0 pt-0.5 space-y-0.5">
                                <h4 class="font-bold text-slate-800 text-xs leading-tight">Visa Status Active</h4>
                                <p class="text-[11px] text-slate-400 font-normal" id="checklist-step-2-subtitle">Resident &ndash; VR-2024-08842</p>
                                <div class="pt-0.5">
                                    <span class="inline-block text-[10px] font-bold px-2 py-0.5 bg-[#E6F4ED] text-[#236B4E] rounded" id="checklist-step-2-status">Completed</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative flex items-start gap-3">
                            <div class="absolute left-[11px] top-[24px] bottom-[-16px] w-[2px] bg-[#2A7255]"></div>
                            <div class="w-6 h-6 rounded-full bg-[#2A7255] text-white font-bold text-[10px] flex items-center justify-center flex-shrink-0 z-10 relative shadow-3xs" id="checklist-step-3-badge">
                                3
                            </div>
                            <div class="flex-1 min-w-0 pt-0.5 space-y-0.5">
                                <h4 class="font-bold text-slate-800 text-xs leading-tight">Reference Generated</h4>
                                <p class="text-[11px] text-slate-400 font-normal" id="checklist-step-3-subtitle">ML-2024-0043</p>
                                <div class="pt-0.5">
                                    <span class="inline-block text-[10px] font-bold px-2 py-0.5 bg-[#E6F4ED] text-[#236B4E] rounded" id="checklist-step-3-status">Completed</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="relative flex items-start gap-3">
                            <div class="absolute left-[11px] top-[24px] bottom-[-16px] w-[2px] bg-slate-200"></div>
                            <div class="w-6 h-6 rounded-full bg-[#2A7255] text-white font-bold text-[10px] flex items-center justify-center flex-shrink-0 z-10 relative shadow-3xs" id="checklist-step-4-badge">
                                4
                            </div>
                            <div class="flex-1 min-w-0 pt-0.5 space-y-0.5">
                                <h4 class="font-bold text-slate-800 text-xs leading-tight">Letter Drafted</h4>
                                <p class="text-[11px] text-slate-400 font-normal">System auto-generated</p>
                                <div class="pt-0.5">
                                    <span class="inline-block text-[10px] font-bold px-2 py-0.5 bg-[#E6F4ED] text-[#236B4E] rounded" id="checklist-step-4-status">Completed</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="relative flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-[#C59B3F] text-white font-bold text-[10px] flex items-center justify-center flex-shrink-0 z-10 relative shadow-3xs" id="checklist-step-5-badge">
                                5
                            </div>
                            <div class="flex-1 min-w-0 pt-0.5 space-y-0.5">
                                <h4 class="font-bold text-slate-800 text-xs leading-tight">Print / Download</h4>
                                <p class="text-[11px] text-slate-400 font-normal">Pending action</p>
                                <div class="pt-0.5">
                                    <span class="inline-block text-[10px] font-bold px-2 py-0.5 bg-[#FDF5E6] text-[#C59B3F] rounded" id="checklist-step-5-status">In Progress</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- CARD 3: Activity Log (Compact Proportional Design) -->
                <div id="activity-log-card" class="bg-white rounded-xl border border-slate-200/80 shadow-2xs overflow-hidden font-inter">
                    <div class="p-5 border-b border-slate-100">
                        <h3 class="text-sm font-bold text-slate-800 font-heading tracking-wide uppercase">Activity Log</h3>
                    </div>
                    
                    <div class="divide-y divide-slate-100 text-xs" id="activity-log-container">
                        
                        <div class="p-4 sm:p-5">
                            <p class="font-bold text-slate-800 text-xs sm:text-sm">Letter preview opened</p>
                            <p class="text-[11px] text-slate-400 mt-0.5">Today &mdash; 14:32:08</p>
                        </div>

                        <div class="p-4 sm:p-5">
                            <p class="font-bold text-slate-800 text-xs sm:text-sm">Letter generated &mdash; ML-2024-0043</p>
                            <p class="text-[11px] text-slate-400 mt-0.5">Today &mdash; 14:31:55</p>
                        </div>

                        <div class="p-4 sm:p-5">
                            <p class="font-bold text-slate-800 text-xs sm:text-sm">Applicant record retrieved</p>
                            <p class="text-[11px] text-slate-400 mt-0.5">Today &mdash; 14:31:40</p>
                        </div>

                        <div class="p-4 sm:p-5">
                            <p class="font-bold text-slate-800 text-xs sm:text-sm">Passport search &mdash; AB123456</p>
                            <p class="text-[11px] text-slate-400 mt-0.5">Today &mdash; 14:31:33</p>
                        </div>

                        <div class="p-4 sm:p-5">
                            <p class="font-bold text-slate-800 text-xs sm:text-sm">Session started</p>
                            <p class="text-[11px] text-slate-400 mt-0.5">Today &mdash; 14:28:00</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<!-- Interactive Dynamic JS Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    
    // Database Repository of Applicants
    const applicantsDb = {
        "AB1234567": {
            "name": "Fr. Anthony Silva",
            "rawName": "Anthony Silva",
            "passport": "GH2847391",
            "searchPassport": "AB1234567",
            "nationality": "Sri Lankan",
            "dob": "14 Mar 1985",
            "visaType": "Entry Visa",
            "visaRef": "VLS-2634",
            "approvedDate": "28 Mar 2026",
            "validUntil": "06 Jul 2026",
            "medicalRef": "ML-2024-0043",
            "healthRef": "VR-2024-08842",
            "docInitials": "PJ",
            "cardInitials": "AS"
        },
        "GH2847391": {
            "name": "Fr. Anthony Silva",
            "rawName": "Anthony Silva",
            "passport": "GH2847391",
            "searchPassport": "GH2847391",
            "nationality": "Sri Lankan",
            "dob": "14 Mar 1985",
            "visaType": "Entry Visa",
            "visaRef": "VLS-2634",
            "approvedDate": "28 Mar 2026",
            "validUntil": "06 Jul 2026",
            "medicalRef": "ML-2024-0043",
            "healthRef": "VR-2024-08842",
            "docInitials": "PJ",
            "cardInitials": "AS"
        },
        "AB123456": {
            "name": "John Doe",
            "rawName": "John Doe",
            "passport": "AB123456",
            "searchPassport": "AB123456",
            "nationality": "British",
            "dob": "14 Mar 1985",
            "visaType": "Resident Visa",
            "visaRef": "VLS-2632",
            "approvedDate": "26 Mar 2026",
            "validUntil": "06 Jul 2026",
            "medicalRef": "ML-2024-0041",
            "healthRef": "VR-2024-08842",
            "docInitials": "JD",
            "cardInitials": "JD"
        }
    };

    // DOM References
    const passportInput = document.getElementById('passport-search-input');
    const btnSearch = document.getElementById('btn-search-applicant');
    const btnClear = document.getElementById('btn-clear-applicant');
    const btnCreateMed = document.getElementById('btn-create-medical-letter');

    const medicalLetterSection = document.getElementById('medical-letter-section');
    const visaRadioButtons = document.getElementsByName('visa-letter-type');
    const logContainer = document.getElementById('activity-log-container');

    let activeApplicant = applicantsDb["AB1234567"];

    // Add entry to Activity Log
    function addLog(actionText) {
        const timeNow = new Date();
        const hrs = String(timeNow.getHours()).padStart(2, '0');
        const mins = String(timeNow.getMinutes()).padStart(2, '0');
        const secs = String(timeNow.getSeconds()).padStart(2, '0');
        
        const logHtml = `
            <div class="p-4 sm:p-5">
                <p class="font-bold text-slate-800 text-xs sm:text-sm">${actionText}</p>
                <p class="text-[11px] text-slate-400 mt-0.5">Today &mdash; ${hrs}:${mins}:${secs}</p>
            </div>
        `;
        logContainer.insertAdjacentHTML('afterbegin', logHtml);
    }

    // Set Checklist item visual state
    function setChecklist(stepNum, statusText, statusType = 'pending') {
        const badge = document.getElementById(`checklist-step-${stepNum}-badge`);
        const statusSpan = document.getElementById(`checklist-step-${stepNum}-status`);
        if (!badge || !statusSpan) return;

        badge.className = 'w-6 h-6 rounded-full font-bold text-[10px] text-white flex items-center justify-center flex-shrink-0 z-10 relative shadow-3xs';
        statusSpan.className = 'inline-block text-[10px] font-bold px-2 py-0.5 rounded';

        if (statusType === 'completed') {
            badge.classList.add('bg-[#2A7255]');
            statusSpan.classList.add('bg-[#E6F4ED]', 'text-[#236B4E]');
            statusSpan.textContent = 'Completed';
        } else if (statusType === 'progress') {
            badge.classList.add('bg-[#C59B3F]');
            statusSpan.classList.add('bg-[#FDF5E6]', 'text-[#C59B3F]');
            statusSpan.textContent = 'In Progress';
        } else {
            badge.classList.add('bg-slate-300');
            statusSpan.classList.add('bg-slate-100', 'text-slate-500');
            statusSpan.textContent = 'Pending';
        }
    }

    // Radio style sync
    function syncRadioStyles() {
        visaRadioButtons.forEach(r => {
            const label = r.closest('.visa-type-card');
            if (label) {
                if (r.checked) {
                    label.className = 'visa-type-card relative flex items-start p-3.5 border border-[#D4AF37] bg-amber-50/20 rounded-lg hover:bg-slate-50/50 cursor-pointer transition-all duration-200';
                } else {
                    label.className = 'visa-type-card relative flex items-start p-3.5 border border-slate-200 rounded-lg hover:bg-slate-50/50 cursor-pointer transition-all duration-200';
                }
            }
        });
    }

    // Search action
    function searchApplicant() {
        const query = passportInput.value.trim().toUpperCase();
        if (!query) return;

        const applicant = applicantsDb[query] || applicantsDb["AB1234567"];
        if (applicant) {
            activeApplicant = applicant;
            
            // Update Visa Letter Preview
            document.getElementById('letter-visa-doc-ref').textContent = `VLS/REC/${applicant.visaRef.split('-')[1]}/2026`;
            document.getElementById('letter-visa-subject-name').textContent = applicant.name;
            document.getElementById('letter-visa-fullname').textContent = applicant.name;
            document.getElementById('letter-visa-passport').textContent = applicant.passport;
            document.getElementById('letter-visa-nationality').textContent = applicant.nationality;
            document.getElementById('letter-visa-ref').textContent = applicant.visaRef;
            document.getElementById('letter-visa-approved-date').textContent = applicant.approvedDate;
            document.getElementById('letter-visa-meta-footer').textContent = `Ref : VLS/REC/${applicant.visaRef.split('-')[1]}/2026`;
            document.getElementById('visa-meta-desc').textContent = `${applicant.visaRef} · ${applicant.rawName} · ${applicant.visaType} · 30 Mar 2026`;
            document.getElementById('letter-visa-initials').textContent = applicant.docInitials;

            // Update Medical Letter Preview
            document.getElementById('letter-med-doc-ref').textContent = `REF NO: ${applicant.medicalRef}`;
            document.getElementById('letter-med-subject-name').textContent = applicant.name;
            document.getElementById('letter-med-fullname').textContent = applicant.name;
            document.getElementById('letter-med-passport').textContent = applicant.passport;
            document.getElementById('letter-med-nationality').textContent = applicant.nationality;
            document.getElementById('letter-med-ref').textContent = applicant.visaRef;
            document.getElementById('letter-med-approved-date').textContent = applicant.approvedDate;
            document.getElementById('letter-med-body-fullname').textContent = applicant.rawName;
            document.getElementById('letter-med-body-passport').textContent = applicant.passport;
            document.getElementById('letter-med-body-nationality').textContent = applicant.nationality;
            document.getElementById('letter-med-body-dob').textContent = applicant.dob;
            document.getElementById('letter-med-body-visaref').textContent = applicant.healthRef;
            document.getElementById('letter-med-body-expiry').textContent = applicant.validUntil;
            document.getElementById('letter-med-initials').textContent = applicant.docInitials;

            // Update Visa DB card
            document.getElementById('visa-db-badge').textContent = applicant.cardInitials;
            document.getElementById('visa-db-name').textContent = applicant.name;
            document.getElementById('visa-db-subtitle').textContent = `${applicant.visaRef} · ${applicant.visaType} · ${applicant.nationality}`;
            document.getElementById('visa-db-fullname').textContent = applicant.rawName;
            document.getElementById('visa-db-nationality').textContent = applicant.nationality;
            document.getElementById('visa-db-passport').textContent = applicant.passport;
            document.getElementById('visa-db-type').textContent = applicant.visaType;
            document.getElementById('visa-db-ref').textContent = applicant.visaRef;
            document.getElementById('visa-db-approved-date').textContent = applicant.approvedDate;

            // Update Medical DB card
            document.getElementById('med-db-badge').textContent = applicant.cardInitials;
            document.getElementById('med-db-name').textContent = applicant.name;
            document.getElementById('med-db-subtitle').textContent = `${applicant.visaRef} · ${applicant.visaType} · ${applicant.nationality}`;
            document.getElementById('med-db-fullname').textContent = applicant.rawName;
            document.getElementById('med-db-nationality').textContent = applicant.nationality;
            document.getElementById('med-db-dob').textContent = applicant.dob;
            document.getElementById('med-db-passport').textContent = applicant.passport;
            document.getElementById('med-db-type').textContent = applicant.visaType;
            document.getElementById('med-db-visaref').textContent = applicant.healthRef;
            document.getElementById('med-db-valid').textContent = applicant.validUntil;

            // Update Subtitles in Checklist
            document.getElementById('checklist-step-2-subtitle').textContent = `Resident \u2013 ${applicant.healthRef}`;
            document.getElementById('checklist-step-3-subtitle').textContent = applicant.medicalRef;
        }
    }

    // Create Medical Letter action
    if (btnCreateMed) {
        btnCreateMed.addEventListener('click', () => {
            medicalLetterSection.classList.remove('hidden');
            medicalLetterSection.scrollIntoView({ behavior: 'smooth' });
            addLog(`Letter generated &mdash; ${activeApplicant ? activeApplicant.medicalRef : 'ML-2024-0043'}`);
        });
    }

    // Event Bindings
    btnSearch.addEventListener('click', () => {
        addLog(`Passport search &mdash; ${passportInput.value.trim()}`);
        searchApplicant();
    });

    btnClear.addEventListener('click', () => {
        passportInput.value = '';
        medicalLetterSection.classList.add('hidden');
    });

    passportInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            searchApplicant();
        }
    });

    visaRadioButtons.forEach(radio => {
        radio.addEventListener('change', () => {
            syncRadioStyles();
            if (activeApplicant) {
                addLog(`Visa type selected &mdash; ${radio.value}`);
            }
        });
    });

    syncRadioStyles();
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
