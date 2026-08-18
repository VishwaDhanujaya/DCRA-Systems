<?php
/**
 * Dashboard Overview - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Free of Charge Medical Letter Issuing System
 */

$page_title = "Dashboard Overview";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Dashboard Overview</h2>
            </div>
            <a href="<?= BASE_URL ?>new-medical-letter" class="bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold font-heading px-5 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 transition-all self-start sm:self-auto min-h-[40px] whitespace-nowrap cursor-pointer">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
                New Medical Letter
            </a>
        </div>

        <!-- 4 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
            
            <!-- Stat Card 1: Letters Issued -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">LETTERS ISSUED</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">24</h3>
                </div>
            </div>

            <!-- Stat Card 2: Searches Done -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">SEARCHES DONE</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">18</h3>
                </div>
            </div>

            <!-- Stat Card 3: This Month -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">THIS MONTH</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">312</h3>
                </div>
            </div>

            <!-- Stat Card 4: Pending Print -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs flex flex-col justify-between">
                <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>
                <div>
                    <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase font-heading">PENDING PRINT</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading mt-2">6</h3>
                </div>
            </div>

        </div>

        <!-- Middle Section Grid: Search & Preview (Left 2/3) & Recent Applications (Right 1/3) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- Left Column: Search & Letter Preview (Spans 2 cols) -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Search Applicant Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-2xs space-y-4">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Search Applicant</h3>
                    
                    <div class="space-y-2">
                        <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading">ENTER PASSPORT NUMBER TO RETRIEVE APPLICANT DETAILS</label>
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="text" id="passport-search" value="AB1234567" placeholder="Passport Number..." class="flex-1 rounded-lg border border-slate-200 text-xs font-mono py-2 px-3.5 focus:outline-none focus:border-slate-300 focus:ring-1 focus:ring-slate-300 transition-all text-slate-800 uppercase h-10 min-w-[200px]">
                            <div class="flex gap-2">
                                <button type="button" id="btn-search" class="bg-secondary hover:bg-secondary-dark text-white px-6 py-2.5 rounded-lg text-xs font-semibold font-heading shadow-xs transition-colors h-10 flex items-center justify-center cursor-pointer min-w-[90px]">
                                    Search
                                </button>
                                <button type="button" id="btn-clear" class="bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 px-6 py-2.5 rounded-lg text-xs font-semibold font-heading shadow-xs transition-colors h-10 flex items-center justify-center cursor-pointer min-w-[90px]">
                                    Clear
                                </button>
                            </div>
                        </div>
                        <p class="text-[11px] text-slate-400 font-inter mt-1.5">Data is retrieved from the Visa Recommendation System. Passport number is case-insensitive.</p>
                    </div>
                </div>

                <!-- Visa Letter Preview Card -->
                <div class="bg-white rounded-xl p-6 border border-slate-200/80 shadow-2xs space-y-4" id="preview-section-card">
                    <h3 class="text-lg font-bold text-slate-900 font-heading">Visa Letter Preview</h3>
                    
                    <!-- Printable Document Sheet Container (Grey Canvas Wrapper) -->
                    <div class="bg-slate-100 p-4 sm:p-8 rounded-xl flex justify-center items-center overflow-x-auto min-h-[600px]">
                        
                        <!-- Page A4 Sheet -->
                        <div id="letter-sheet" class="bg-white shadow-lg rounded-sm max-w-[640px] w-full min-h-[820px] text-slate-800 font-inter flex flex-col justify-between border border-slate-200 text-[11px] leading-relaxed relative overflow-hidden transition-all duration-200 p-0">
                            <div>
                                <!-- Dark Navy Top Header Banner -->
                                <div class="bg-[#102033] p-5 text-white flex items-center justify-between gap-4">
                                    
                                    <!-- Left: Emblem Image & Ministry Title -->
                                    <div class="flex items-center space-x-3">
                                        <img src="<?= BASE_URL ?>assets/images/emblem.png" alt="Sri Lanka State Emblem" class="w-10 h-12 object-contain flex-shrink-0">
                                        <div>
                                            <h2 class="font-bold text-xs sm:text-sm text-white font-heading leading-tight block">Ministry of Buddhasasana,</h2>
                                            <h2 class="font-bold text-xs sm:text-sm text-white font-heading leading-tight block">Religious and Cultural Affairs</h2>
                                            <p class="text-[9px] text-slate-300 font-normal mt-1 block">Department of Visa Recommendation Services</p>
                                            <p class="text-[8px] text-slate-400 font-normal mt-0.5 block">3rd Floor,No. 180,T.B. Jaya Mawatha,Colombo 10.</p>
                                        </div>
                                    </div>

                                    <!-- Right: Reference & Date -->
                                    <div class="text-right">
                                        <span id="letter-ref-code" class="font-mono font-bold text-[10px] text-accent-gold text-right block">VLS/REC/2634/2026</span>
                                        <span id="letter-date" class="text-[9px] text-slate-300 text-right block mt-0.5">30 March 2026</span>
                                        <span class="text-[8px] font-bold text-slate-400 tracking-wider uppercase text-right block mt-1">OFFICIAL DOCUMENT</span>
                                    </div>
                                </div>

                                <!-- Document Body Padding Container -->
                                <div class="p-6 sm:p-8 space-y-5">
                                    
                                    <!-- Subject Title Block -->
                                    <div class="space-y-0.5">
                                        <span class="text-[9px] font-bold text-slate-400 tracking-wider uppercase font-heading block">RE: RECOMMENDATION LETTER</span>
                                        <h3 class="text-xs sm:text-sm font-bold text-slate-900 font-heading block">Entry Visa Recommendation for</h3>
                                        <h4 id="letter-applicant-name-title" class="text-xs sm:text-sm font-bold text-amber-700 font-heading block mt-0.5">Fr. Anthony Silva</h4>
                                    </div>

                                    <!-- Applicant Metadata Box -->
                                    <div class="bg-[#F8FAFC] border border-slate-200/80 rounded-xl p-3 sm:p-4 grid grid-cols-1 sm:grid-cols-3 gap-4 text-[10px] font-inter">
                                        <div class="flex items-start space-x-3">
                                            <div id="letter-badge" class="w-9 h-9 bg-secondary text-white font-bold font-heading text-xs rounded-lg flex items-center justify-center shadow-xs flex-shrink-0 mt-0.5">
                                                PJ
                                            </div>
                                            <div class="min-w-0">
                                                <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">FULL NAME</span>
                                                <strong id="letter-full-name" class="font-bold text-slate-900 block text-[10px] mt-0.5 truncate">Fr. Anthony Silva</strong>
                                                <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">VISA TYPE</span>
                                                <strong id="letter-visa-type" class="font-semibold text-slate-700 block mt-0.5 truncate">Entry Visa</strong>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">PASSPORT NO.</span>
                                            <strong id="letter-passport-no" class="font-mono font-bold text-slate-900 block text-[10px] mt-0.5 truncate">GH2847391</strong>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">REFERENCE NO.</span>
                                            <strong id="letter-ref-no" class="font-mono font-semibold text-slate-700 block mt-0.5 truncate">VLS-2634</strong>
                                        </div>
                                        <div>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider">NATIONALITY</span>
                                            <strong id="letter-nationality" class="font-semibold text-slate-900 block text-[10px] mt-0.5 truncate">Sri Lankan</strong>
                                            <span class="text-[8px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">APPROVED DATE</span>
                                            <strong id="letter-approved-date" class="font-semibold text-slate-700 block mt-0.5 truncate">28 Mar 2026</strong>
                                        </div>
                                    </div>

                                    <!-- Body Text Content -->
                                    <div class="space-y-3 text-[10px] text-slate-700 font-inter leading-relaxed">
                                        <p class="font-semibold text-slate-900">To Whom It May Concern,</p>
                                        
                                        <p>
                                            of Sri Lanka, in support of the visa application submitted by <strong id="letter-body-salutation" class="text-slate-900">Mr. Anthony Silva</strong>, a citizen of Sri Lanka bearing Passport Number <strong id="letter-body-passport" class="font-mono text-slate-900">GH2847391</strong>.
                                        </p>
                                        
                                        <p>
                                            The applicant has applied for an <span id="letter-body-visatype-text">Entry Visa</span> for the purpose of religious study and pilgrimage within Sri Lanka. Having reviewed the application in accordance with the established procedures of the Ministry, we are pleased to Having reviewed the application in accordance with the established procedures of the Ministry, we are pleased to confirm that the applicant meets all requisite criteria and has been duly cleared at all stages of the approval process, including the Ministry of Defence security clearance.
                                        </p>
                                    </div>

                                    <!-- Sign-off Block -->
                                    <div class="pt-2 space-y-0.5">
                                        <p class="text-slate-700 font-normal">Yours faithfully,</p>
                                        <div class="h-8 border-b border-slate-200 w-36 my-1.5"></div>
                                        <p class="font-bold text-slate-900 font-heading">S. Amarasinghe</p>
                                        <p class="text-[9px] text-slate-600">Director General — Visa Recommendation Services</p>
                                        <p class="text-[8px] text-slate-400">Ministry of Buddhasasana, Religious and Cultural Affairs</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Light Blue Bottom Footer Banner -->
                            <div class="bg-[#F0F4F8] p-4 flex flex-col sm:flex-row items-center justify-between text-[8px] text-slate-500 rounded-b-sm border-t border-slate-200/60 gap-1">
                                <div>
                                    <p class="font-semibold text-slate-600">Ministry of Buddhasasana, Religious and Cultural Affairs · Sri Lanka</p>
                                    <p class="text-slate-400 mt-0.5">Tel: +94 11 269 4661 · Email: info@buddhasasana.gov.lk · Web: www.buddhasasana.gov.lk</p>
                                </div>
                                <div class="text-right whitespace-nowrap">
                                    <p class="font-mono text-slate-500" id="letter-footer-ref">Ref: VLS/REC/2634/2026</p>
                                    <p class="text-slate-400 mt-0.5" id="letter-footer-gen">Generated: 30 March 2026 · Page 1 of 1</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Action Bar below letter preview wrapper -->
                    <div class="pt-3 border-t border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <span id="preview-meta-line" class="text-[11px] font-medium text-slate-400 font-inter">
                            VLS-2634 · Anthony Silva · Entry Visa · 30 Mar 2026
                        </span>
                        <div class="flex items-center gap-2">
                            <button type="button" class="bg-[#13273F] hover:bg-[#0d1c2e] text-white px-5 py-2.5 rounded-lg text-xs font-semibold font-heading shadow-xs transition-all h-9 flex items-center justify-center cursor-pointer whitespace-nowrap">
                                Create Medical Letter
                            </button>
                            <button type="button" class="bg-white hover:bg-slate-50 border border-slate-200 text-slate-700 px-5 py-2.5 rounded-lg text-xs font-semibold font-heading shadow-xs transition-all h-9 flex items-center justify-center cursor-pointer whitespace-nowrap">
                                Download
                            </button>
                        </div>
                    </div>

                </div>

                <!-- Empty State Card (Hidden by default, used when Clear is clicked) -->
                <div id="preview-empty-state" class="hidden bg-slate-50 rounded-xl p-8 border border-dashed border-slate-300 text-center py-16 w-full max-w-[640px] mx-auto">
                    <svg class="mx-auto h-10 w-10 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h4 class="mt-4 text-sm font-semibold text-slate-900 font-heading">No Recommendation Letter Loaded</h4>
                    <p class="mt-1 text-xs text-slate-400 font-inter">Search by passport number or view a recent visa application to preview the letter.</p>
                </div>

            </div>

            <!-- Right Column: Recent Visa Applications Card -->
            <div class="bg-white rounded-xl p-5 border border-slate-200/80 shadow-2xs space-y-4">
                <h3 class="text-lg font-bold text-slate-900 font-heading">Recent Visa Applications</h3>
                
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs font-inter border-collapse">
                        <thead>
                            <tr class="bg-slate-50 text-slate-400 font-bold uppercase text-[9px] tracking-wider border-b border-slate-100">
                                <th scope="col" class="py-2.5 px-3">APP ID</th>
                                <th scope="col" class="py-2.5 px-3">VISA TYPE</th>
                                <th scope="col" class="py-2.5 px-3 text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            
                            <!-- Application VLS-2634 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3 px-3 font-mono font-medium text-slate-900">VLS-2634</td>
                                <td class="py-3 px-3">
                                    <span class="bg-[#E0F2FE] text-[#0284C7] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Entry Visa</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <button type="button" onclick="loadApplicant('VLS-2634')" title="View Recommendation Letter" class="p-1 text-slate-400 hover:text-secondary border border-slate-100 rounded hover:bg-white transition-colors cursor-pointer inline-flex items-center shadow-3xs min-w-[28px] min-h-[28px] justify-center">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Application VLS-2633 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3 px-3 font-mono font-medium text-slate-900">VLS-2633</td>
                                <td class="py-3 px-3">
                                    <span class="bg-[#FEF3C7] text-[#D97706] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Resident Visa</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <button type="button" onclick="loadApplicant('VLS-2633')" title="View Recommendation Letter" class="p-1 text-slate-400 hover:text-secondary border border-slate-100 rounded hover:bg-white transition-colors cursor-pointer inline-flex items-center shadow-3xs min-w-[28px] min-h-[28px] justify-center">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Application VLS-2632 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3 px-3 font-mono font-medium text-slate-900">VLS-2632</td>
                                <td class="py-3 px-3">
                                    <span class="bg-[#CCFBF1] text-[#0F766E] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Visa Extension</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <button type="button" onclick="loadApplicant('VLS-2632')" title="View Recommendation Letter" class="p-1 text-slate-400 hover:text-secondary border border-slate-100 rounded hover:bg-white transition-colors cursor-pointer inline-flex items-center shadow-3xs min-w-[28px] min-h-[28px] justify-center">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Application VLS-2631 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3 px-3 font-mono font-medium text-slate-900">VLS-2631</td>
                                <td class="py-3 px-3">
                                    <span class="bg-[#E0F2FE] text-[#0284C7] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Entry Visa</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <button type="button" onclick="loadApplicant('VLS-2631')" title="View Recommendation Letter" class="p-1 text-slate-400 hover:text-secondary border border-slate-100 rounded hover:bg-white transition-colors cursor-pointer inline-flex items-center shadow-3xs min-w-[28px] min-h-[28px] justify-center">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Application VLS-2630 -->
                            <tr class="hover:bg-slate-50/80 transition-colors">
                                <td class="py-3 px-3 font-mono font-medium text-slate-900">VLS-2630</td>
                                <td class="py-3 px-3">
                                    <span class="bg-[#FEF3C7] text-[#D97706] text-[10px] px-2 py-0.5 rounded font-semibold whitespace-nowrap">Resident Visa</span>
                                </td>
                                <td class="py-3 px-3 text-center">
                                    <button type="button" onclick="loadApplicant('VLS-2630')" title="View Recommendation Letter" class="p-1 text-slate-400 hover:text-secondary border border-slate-100 rounded hover:bg-white transition-colors cursor-pointer inline-flex items-center shadow-3xs min-w-[28px] min-h-[28px] justify-center">
                                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>
</main>

<!-- Client-side Interactive Dataset & JS Logic -->
<script>
// Mock dataset containing visa recommendation records
const applicantsData = {
    'VLS-2634': {
        id: 'VLS-2634',
        passport: 'GH2847391',
        name: 'Fr. Anthony Silva',
        nationality: 'Sri Lankan',
        visa_type: 'Entry Visa',
        approved_date: '28 Mar 2026',
        letter_date: '30 March 2026',
        ref_no: 'VLS/REC/2634/2026',
        initials: 'PJ',
        salutation: 'Mr. Anthony Silva'
    },
    'VLS-2633': {
        id: 'VLS-2633',
        passport: 'AB1234567',
        name: 'Sr. Mary Colette',
        nationality: 'Sri Lankan',
        visa_type: 'Resident Visa',
        approved_date: '25 Mar 2026',
        letter_date: '27 March 2026',
        ref_no: 'VLS/REC/2633/2026',
        initials: 'MC',
        salutation: 'Ms. Mary Colette'
    },
    'VLS-2632': {
        id: 'VLS-2632',
        passport: 'EF9876543',
        name: 'Fr. James Perera',
        nationality: 'Sri Lankan',
        visa_type: 'Visa Extension',
        approved_date: '24 Mar 2026',
        letter_date: '26 March 2026',
        ref_no: 'VLS/REC/2632/2026',
        initials: 'JP',
        salutation: 'Mr. James Perera'
    },
    'VLS-2631': {
        id: 'VLS-2631',
        passport: 'GH4739281',
        name: 'Sr. Agnes Fernando',
        nationality: 'Sri Lankan',
        visa_type: 'Entry Visa',
        approved_date: '22 Mar 2026',
        letter_date: '24 March 2026',
        ref_no: 'VLS/REC/2631/2026',
        initials: 'AF',
        salutation: 'Ms. Agnes Fernando'
    },
    'VLS-2630': {
        id: 'VLS-2630',
        passport: 'XY1122334',
        name: 'Fr. Joseph Perera',
        nationality: 'Sri Lankan',
        visa_type: 'Resident Visa',
        approved_date: '20 Mar 2026',
        letter_date: '22 March 2026',
        ref_no: 'VLS/REC/2630/2026',
        initials: 'JP',
        salutation: 'Mr. Joseph Perera'
    }
};

// Elements
const passportSearchInput = document.getElementById('passport-search');
const btnSearch = document.getElementById('btn-search');
const btnClear = document.getElementById('btn-clear');
const letterSheet = document.getElementById('letter-sheet');
const previewEmptyState = document.getElementById('preview-empty-state');

// Letter specific fields
const letterRefCode = document.getElementById('letter-ref-code');
const letterDate = document.getElementById('letter-date');
const letterApplicantNameTitle = document.getElementById('letter-applicant-name-title');
const letterBadge = document.getElementById('letter-badge');
const letterFullName = document.getElementById('letter-full-name');
const letterVisaType = document.getElementById('letter-visa-type');
const letterPassportNo = document.getElementById('letter-passport-no');
const letterRefNo = document.getElementById('letter-ref-no');
const letterNationality = document.getElementById('letter-nationality');
const letterApprovedDate = document.getElementById('letter-approved-date');
const letterBodySalutation = document.getElementById('letter-body-salutation');
const letterBodyPassport = document.getElementById('letter-body-passport');
const letterBodyVisaTypeText = document.getElementById('letter-body-visatype-text');
const letterFooterRef = document.getElementById('letter-footer-ref');
const letterFooterGen = document.getElementById('letter-footer-gen');
const previewMetaLine = document.getElementById('preview-meta-line');
const previewSectionCard = document.getElementById('preview-section-card');

// Load applicant data into preview letter
function updatePreview(data) {
    if (!data) return;
    
    // Toggle containers
    letterSheet.classList.remove('hidden');
    previewEmptyState.classList.add('hidden');
    
    // Update contents
    letterRefCode.textContent = data.ref_no;
    letterDate.textContent = data.letter_date;
    letterApplicantNameTitle.textContent = data.name;
    
    letterBadge.textContent = data.initials;
    letterFullName.textContent = data.name;
    letterVisaType.textContent = data.visa_type;
    letterPassportNo.textContent = data.passport;
    letterRefNo.textContent = data.id;
    letterNationality.textContent = data.nationality;
    letterApprovedDate.textContent = data.approved_date;
    
    letterBodySalutation.textContent = data.salutation;
    letterBodyPassport.textContent = data.passport;
    letterBodyVisaTypeText.textContent = data.visa_type;
    
    letterFooterRef.textContent = `Ref: ${data.ref_no}`;
    letterFooterGen.textContent = `Generated: ${data.letter_date} · Page 1 of 1`;
    
    previewMetaLine.textContent = `${data.id} · ${data.name.replace(/^(Fr\.|Sr\.)\s+/i, '')} · ${data.visa_type} · ${data.approved_date}`;
}

// Load applicant by ID (called from recent applications table)
window.loadApplicant = function(id) {
    const data = applicantsData[id];
    if (data) {
        // Set search box input to the applicant's passport
        passportSearchInput.value = data.passport;
        updatePreview(data);
    }
};

// Search by passport number (triggered on search click or Enter key)
function searchPassport() {
    const query = passportSearchInput.value.trim().toUpperCase();
    if (!query) return;
    
    // Find record by matching passport (case-insensitive)
    let found = null;
    for (const id in applicantsData) {
        if (applicantsData[id].passport.toUpperCase() === query) {
            found = applicantsData[id];
            break;
        }
    }
    
    if (found) {
        updatePreview(found);
    } else {
        // Fallback or warning toast:
        alert(`No visa recommendation letter found for passport: ${query}`);
    }
}

// Clear search input and hide preview
function clearSearch() {
    passportSearchInput.value = '';
    letterSheet.classList.add('hidden');
    previewEmptyState.classList.remove('hidden');
    previewMetaLine.textContent = '—';
}

// Event Listeners
btnSearch.addEventListener('click', searchPassport);
btnClear.addEventListener('click', clearSearch);
passportSearchInput.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
        searchPassport();
    }
});

// Initial Load State: Pre-populate search field with AB1234567, but display Fr. Anthony Silva's letter VLS-2634
document.addEventListener('DOMContentLoaded', () => {
    // AB1234567 is the passport of Sr. Mary Colette (VLS-2633),
    // but the screenshot displays Fr. Anthony Silva's letter (VLS-2634) with input prefilled as AB1234567.
    // We will initialize exactly like this to match the reference image.
    passportSearchInput.value = 'AB1234567';
    updatePreview(applicantsData['VLS-2634']);
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
