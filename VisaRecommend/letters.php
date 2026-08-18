<?php
/**
 * Recommendation Letter Generator Page - Exact Visual & Layout Recreation
 * Department of Christian Religious Affairs
 * Visa Recommendation Letter Management System
 */

$page_title = "Generate Recommendation Letter";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Sample Approved Applications Dataset
$applications = [
    [
        'id' => 'VLS-2634',
        'passport' => 'GH2847391',
        'name' => 'Fr. Anthony Silva',
        'short_name' => 'Anthony Silva',
        'initials' => 'AS',
        'nationality' => 'Sri Lankan',
        'country_flag' => '🇰🇷 South Korea',
        'visa_type' => 'Entry Visa',
        'ref_no' => 'VLS/REC/2634/2026',
        'approved_date' => '28 Mar 2026',
        'church' => "St. Anthony's Church, Colombo"
    ],
    [
        'id' => 'VLS-2635',
        'passport' => 'TK8374920',
        'name' => 'Sr. Mary Colette',
        'short_name' => 'Mary Colette',
        'initials' => 'MC',
        'nationality' => 'Sri Lankan',
        'country_flag' => '🇱🇰 Sri Lanka',
        'visa_type' => 'Visa Extension',
        'ref_no' => 'VLS/REC/2635/2026',
        'approved_date' => '27 Mar 2026',
        'church' => 'Holy Family Convent, Jaffna'
    ],
    [
        'id' => 'VLS-2636',
        'passport' => 'TK8374921',
        'name' => 'Fr. James Perera',
        'short_name' => 'James Perera',
        'initials' => 'JP',
        'nationality' => 'Sri Lankan',
        'country_flag' => '🇱🇰 Sri Lanka',
        'visa_type' => 'Resident Visa',
        'ref_no' => 'VLS/REC/2636/2026',
        'approved_date' => '25 Mar 2026',
        'church' => "St. Joseph's College, Kandy"
    ]
];

$selected = $applications[0];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & Top Action Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Recommendation Letter</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Generate Recommendation Letter</h2>
            </div>
            <button type="button" id="export-top-btn" class="bg-white border border-slate-200 hover:bg-slate-50 text-slate-700 text-xs font-semibold font-heading px-4 py-2.5 rounded-lg shadow-2xs flex items-center justify-center gap-1.5 transition-all self-start sm:self-auto min-h-[40px] whitespace-nowrap cursor-pointer">
                <svg class="w-4 h-4 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                </svg>
                Export
            </button>
        </div>

        <!-- Main 2-Column Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            
            <!-- LEFT CONTROL PANEL (4 Cols on Desktop) -->
            <div class="lg:col-span-4 space-y-5">
                
                <!-- Section 1: Select Application Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <h3 class="font-bold text-slate-900 font-heading text-base">Select Application</h3>
                    
                    <!-- Application Select Dropdown Box with Avatar -->
                    <div class="relative bg-slate-50/90 border border-slate-200/80 rounded-xl p-3 flex items-center justify-between cursor-pointer hover:bg-slate-100/50 transition-colors">
                        <div class="flex items-center space-x-3 min-w-0 flex-1">
                            <div id="select-avatar" class="w-9 h-9 rounded-lg bg-secondary text-white font-bold text-xs font-heading flex items-center justify-center flex-shrink-0 shadow-2xs">
                                <?= e($selected['initials']) ?>
                            </div>
                            <div class="min-w-0 flex-1">
                                <h4 id="select-name" class="font-bold text-slate-900 text-xs font-heading truncate"><?= e($selected['name']) ?></h4>
                                <p id="select-subtext" class="text-slate-400 text-[11px] font-inter truncate mt-0.5">
                                    <?= e($selected['id']) ?> · <?= e($selected['visa_type']) ?> · <?= e($selected['nationality']) ?>
                                </p>
                            </div>
                        </div>
                        <select id="application-select" class="absolute inset-0 opacity-0 w-full h-full cursor-pointer">
                            <?php foreach ($applications as $app): ?>
                                <option value="<?= e($app['id']) ?>">
                                    <?= e($app['name']) ?> (<?= e($app['id']) ?>)
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <span class="text-slate-400 text-xs pl-2 flex-shrink-0">▾</span>
                    </div>

                    <!-- 6 Details Metadata Grid (2 Columns x 3 Rows) -->
                    <div class="grid grid-cols-2 gap-2.5 pt-1">
                        <div class="bg-slate-50/80 p-3 rounded-xl border border-slate-200/70">
                            <span class="text-[10px] font-bold text-slate-400 uppercase font-heading block tracking-wider">FULL NAME</span>
                            <strong id="meta-name" class="text-xs font-bold text-slate-900 font-inter mt-1 block truncate"><?= e($selected['short_name']) ?></strong>
                        </div>
                        <div class="bg-slate-50/80 p-3 rounded-xl border border-slate-200/70">
                            <span class="text-[10px] font-bold text-slate-400 uppercase font-heading block tracking-wider">NATIONALITY</span>
                            <strong id="meta-nationality" class="text-xs font-bold text-slate-900 font-inter mt-1 block truncate"><?= e($selected['country_flag']) ?></strong>
                        </div>
                        <div class="bg-slate-50/80 p-3 rounded-xl border border-slate-200/70">
                            <span class="text-[10px] font-bold text-slate-400 uppercase font-heading block tracking-wider">PASSPORT NO.</span>
                            <strong id="meta-passport" class="text-xs font-bold font-mono text-slate-900 font-inter mt-1 block truncate"><?= e($selected['passport']) ?></strong>
                        </div>
                        <div class="bg-slate-50/80 p-3 rounded-xl border border-slate-200/70">
                            <span class="text-[10px] font-bold text-slate-400 uppercase font-heading block tracking-wider">VISA TYPE</span>
                            <strong id="meta-visatype" class="text-xs font-bold text-slate-900 font-inter mt-1 block truncate"><?= e($selected['visa_type']) ?></strong>
                        </div>
                        <div class="bg-slate-50/80 p-3 rounded-xl border border-slate-200/70">
                            <span class="text-[10px] font-bold text-slate-400 uppercase font-heading block tracking-wider">APP. REF</span>
                            <strong id="meta-ref" class="text-xs font-bold font-mono text-slate-900 font-inter mt-1 block truncate"><?= e($selected['id']) ?></strong>
                        </div>
                        <div class="bg-slate-50/80 p-3 rounded-xl border border-slate-200/70">
                            <span class="text-[10px] font-bold text-slate-400 uppercase font-heading block tracking-wider">APPROVED DATE</span>
                            <strong id="meta-date" class="text-xs font-bold text-slate-900 font-inter mt-1 block truncate"><?= e($selected['approved_date']) ?></strong>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Letter Type Options Card -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-3">
                    <h3 class="font-bold text-slate-900 font-heading text-base mb-3">Letter Type</h3>
                    
                    <!-- Radio Option 1: Entry Visa Letter (Selected) -->
                    <label class="letter-type-card bg-amber-50/50 border-2 border-amber-500/80 rounded-xl p-3.5 flex items-start gap-3 cursor-pointer transition-all block">
                        <input type="radio" name="letter_type" value="entry" checked class="sr-only">
                        <div class="radio-indicator w-4 h-4 rounded-full border-2 border-amber-600 bg-amber-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-white"></div>
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 text-xs font-heading block">Entry Visa Letter</span>
                            <span class="text-[11px] text-slate-500 font-inter mt-0.5 block leading-snug">Single/multiple entry recommendation for religious visit</span>
                        </div>
                    </label>

                    <!-- Radio Option 2: Resident Visa Letter -->
                    <label class="letter-type-card bg-slate-50/50 border border-slate-200 rounded-xl p-3.5 flex items-start gap-3 cursor-pointer hover:bg-slate-100/50 transition-all block">
                        <input type="radio" name="letter_type" value="resident" class="sr-only">
                        <div class="radio-indicator w-4 h-4 rounded-full border border-slate-300 bg-white flex items-center justify-center flex-shrink-0 mt-0.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-transparent"></div>
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 text-xs font-heading block">Resident Visa Letter</span>
                            <span class="text-[11px] text-slate-500 font-inter mt-0.5 block leading-snug">Long-term residency recommendation and clearance</span>
                        </div>
                    </label>

                    <!-- Radio Option 3: Visa Extension Letter -->
                    <label class="letter-type-card bg-slate-50/50 border border-slate-200 rounded-xl p-3.5 flex items-start gap-3 cursor-pointer hover:bg-slate-100/50 transition-all block">
                        <input type="radio" name="letter_type" value="extension" class="sr-only">
                        <div class="radio-indicator w-4 h-4 rounded-full border border-slate-300 bg-white flex items-center justify-center flex-shrink-0 mt-0.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-transparent"></div>
                        </div>
                        <div>
                            <span class="font-bold text-slate-900 text-xs font-heading block">Visa Extension Letter</span>
                            <span class="text-[11px] text-slate-500 font-inter mt-0.5 block leading-snug">Extension approval with revised duration and conditions</span>
                        </div>
                    </label>
                </div>

                <!-- Section 3: Letter Options Toggle Switch Card (6 Rows) -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <h3 class="font-bold text-slate-900 font-heading text-base mb-3">Letter Options</h3>
                    
                    <!-- Row 1: ON -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-xs text-slate-800 font-heading block">Official Letterhead</span>
                            <span class="text-[11px] text-slate-400 font-inter block mt-0.5">Include ministry seal and header</span>
                        </div>
                        <button type="button" class="toggle-switch w-9 h-5 rounded-full bg-emerald-600 p-0.5 transition-colors relative flex items-center cursor-pointer" data-target="header-banner">
                            <span class="w-4 h-4 rounded-full bg-white shadow-xs transform translate-x-4 transition-transform"></span>
                        </button>
                    </div>

                    <!-- Row 2: ON -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-xs text-slate-800 font-heading block">Official Letterhead</span>
                            <span class="text-[11px] text-slate-400 font-inter block mt-0.5">Include ministry seal and header</span>
                        </div>
                        <button type="button" class="toggle-switch w-9 h-5 rounded-full bg-emerald-600 p-0.5 transition-colors relative flex items-center cursor-pointer" data-target="ref-block">
                            <span class="w-4 h-4 rounded-full bg-white shadow-xs transform translate-x-4 transition-transform"></span>
                        </button>
                    </div>

                    <!-- Row 3: ON -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-xs text-slate-800 font-heading block">Official Letterhead</span>
                            <span class="text-[11px] text-slate-400 font-inter block mt-0.5">Include ministry seal and header</span>
                        </div>
                        <button type="button" class="toggle-switch w-9 h-5 rounded-full bg-emerald-600 p-0.5 transition-colors relative flex items-center cursor-pointer" data-target="meta-box">
                            <span class="w-4 h-4 rounded-full bg-white shadow-xs transform translate-x-4 transition-transform"></span>
                        </button>
                    </div>

                    <!-- Row 4: OFF -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-xs text-slate-800 font-heading block">Official Letterhead</span>
                            <span class="text-[11px] text-slate-400 font-inter block mt-0.5">Include ministry seal and header</span>
                        </div>
                        <button type="button" class="toggle-switch w-9 h-5 rounded-full bg-slate-200 p-0.5 transition-colors relative flex items-center cursor-pointer" data-target="watermark">
                            <span class="w-4 h-4 rounded-full bg-white shadow-xs transform translate-x-0 transition-transform"></span>
                        </button>
                    </div>

                    <!-- Row 5: OFF -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-xs text-slate-800 font-heading block">Official Letterhead</span>
                            <span class="text-[11px] text-slate-400 font-inter block mt-0.5">Include ministry seal and header</span>
                        </div>
                        <button type="button" class="toggle-switch w-9 h-5 rounded-full bg-slate-200 p-0.5 transition-colors relative flex items-center cursor-pointer" data-target="security-qr">
                            <span class="w-4 h-4 rounded-full bg-white shadow-xs transform translate-x-0 transition-transform"></span>
                        </button>
                    </div>

                    <!-- Row 6: ON -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="font-bold text-xs text-slate-800 font-heading block">Official Letterhead</span>
                            <span class="text-[11px] text-slate-400 font-inter block mt-0.5">Include ministry seal and header</span>
                        </div>
                        <button type="button" class="toggle-switch w-9 h-5 rounded-full bg-emerald-600 p-0.5 transition-colors relative flex items-center cursor-pointer" data-target="footer-banner">
                            <span class="w-4 h-4 rounded-full bg-white shadow-xs transform translate-x-4 transition-transform"></span>
                        </button>
                    </div>

                </div>

            </div>

            <!-- RIGHT LETTER PREVIEW PANEL (8 Cols on Desktop) -->
            <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200/90 shadow-2xs overflow-hidden flex flex-col">
                
                <!-- Preview Panel Header Bar with Zoom Controls -->
                <div class="p-4 sm:p-5 border-b border-slate-200/80 bg-white flex items-center justify-between">
                    <h3 class="font-bold text-slate-900 font-heading text-base">Letter Preview</h3>
                    
                    <!-- Zoom & Viewport Toolbar -->
                    <div class="flex items-center space-x-1.5">
                        <button type="button" id="zoom-in" title="Zoom In" class="w-7 h-7 bg-slate-100 hover:bg-slate-200 rounded-lg text-slate-600 font-semibold text-xs flex items-center justify-center transition-colors cursor-pointer">
                            ＋
                        </button>
                        <button type="button" id="zoom-out" title="Zoom Out" class="w-7 h-7 bg-slate-100 hover:bg-slate-200 rounded-lg text-slate-600 font-semibold text-xs flex items-center justify-center transition-colors cursor-pointer">
                            －
                        </button>
                        <button type="button" id="zoom-reset" title="Full Screen View" class="w-7 h-7 bg-slate-100 hover:bg-slate-200 rounded-lg text-slate-600 font-semibold text-xs flex items-center justify-center transition-colors cursor-pointer">
                            ⛶
                        </button>
                    </div>
                </div>

                <!-- Preview Area Wrapper Canvas -->
                <div class="bg-[#EFEFEF] p-4 sm:p-8 flex justify-center items-center overflow-x-auto min-h-[820px]">
                    
                    <!-- Printable A4 Document Sheet (Exact Image Match) -->
                    <div id="paper-sheet" class="bg-white shadow-2xl rounded-sm max-w-[700px] w-full min-h-[960px] text-slate-800 font-inter flex flex-col justify-between border border-slate-200 text-xs leading-relaxed relative overflow-hidden transition-transform duration-200">
                        
                        <div>
                            <!-- Dark Navy Top Header Banner -->
                            <div id="header-banner-elem" class="bg-[#102033] p-6 sm:p-7 text-white flex items-center justify-between gap-4">
                                
                                <!-- Left: Emblem Image & Ministry Title -->
                                <div class="flex items-center space-x-3.5">
                                    <img src="<?= BASE_URL ?>assets/images/emblem.png" alt="Sri Lanka State Emblem" class="w-12 h-14 object-contain flex-shrink-0">
                                    <div>
                                        <h2 class="font-bold text-sm sm:text-base text-white font-heading leading-tight block">Ministry of Buddhasasana,</h2>
                                        <h2 class="font-bold text-sm sm:text-base text-white font-heading leading-tight block">Religious and Cultural Affairs</h2>
                                        <p class="text-[11px] text-slate-300 font-normal mt-1 block">Department of Visa Recommendation Services</p>
                                        <p class="text-[10px] text-slate-400 font-normal mt-0.5 block">3rd Floor,No. 180,T.B. Jaya Mawatha,Colombo 10.</p>
                                    </div>
                                </div>

                                <!-- Right: Reference & Date -->
                                <div class="text-right" id="ref-block-elem">
                                    <span id="preview-ref-code" class="font-mono font-bold text-xs text-amber-400 text-right block">VLS/REC/2634/2026</span>
                                    <span class="text-xs text-slate-300 text-right block mt-0.5">30 March 2026</span>
                                    <span class="text-[9px] font-bold text-slate-400 tracking-widest uppercase text-right block mt-1">OFFICIAL DOCUMENT</span>
                                </div>
                            </div>

                            <!-- Document Body Padding Container -->
                            <div class="p-6 sm:p-10 space-y-6">
                                
                                <!-- Subject Title Block -->
                                <div class="space-y-1">
                                    <span class="text-[10px] font-bold text-slate-400 tracking-widest uppercase font-heading block">RE: RECOMMENDATION LETTER</span>
                                    <h3 id="preview-letter-title" class="text-base sm:text-lg font-bold text-slate-900 font-heading block">Entry Visa Recommendation for</h3>
                                    <h4 id="preview-applicant-title" class="text-base sm:text-lg font-bold text-amber-700 font-heading block mt-0.5"><?= e($selected['name']) ?></h4>
                                </div>

                                <!-- Applicant Metadata Box (Exact Matching Screenshot Box with PJ Avatar) -->
                                <div id="meta-box-elem" class="bg-[#F8FAFC] border border-slate-200/80 rounded-2xl p-4 sm:p-5 grid grid-cols-1 sm:grid-cols-3 gap-4 text-xs font-inter">
                                    <div class="flex items-start space-x-3">
                                        <div class="w-11 h-11 bg-[#13273F] text-white font-bold font-heading text-sm rounded-xl flex items-center justify-center shadow-xs flex-shrink-0 mt-0.5">
                                            PJ
                                        </div>
                                        <div class="min-w-0">
                                            <span class="text-[10px] text-slate-400 font-bold block uppercase tracking-wider">FULL NAME</span>
                                            <strong id="preview-doc-name" class="font-bold text-slate-900 block text-xs mt-0.5 truncate"><?= e($selected['name']) ?></strong>
                                            <span class="text-[10px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">VISA TYPE</span>
                                            <strong id="preview-doc-visatype" class="font-semibold text-slate-700 block mt-0.5 truncate"><?= e($selected['visa_type']) ?></strong>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-slate-400 font-bold block uppercase tracking-wider">PASSPORT NO.</span>
                                        <strong id="preview-doc-passport" class="font-mono font-bold text-slate-900 block text-xs mt-0.5 truncate"><?= e($selected['passport']) ?></strong>
                                        <span class="text-[10px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">REFERENCE NO.</span>
                                        <strong id="preview-doc-ref" class="font-mono font-semibold text-slate-700 block mt-0.5 truncate"><?= e($selected['id']) ?></strong>
                                    </div>
                                    <div>
                                        <span class="text-[10px] text-slate-400 font-bold block uppercase tracking-wider">NATIONALITY</span>
                                        <strong id="preview-doc-nationality" class="font-semibold text-slate-900 block text-xs mt-0.5 truncate"><?= e($selected['nationality']) ?></strong>
                                        <span class="text-[10px] text-slate-400 font-bold block uppercase tracking-wider mt-2.5">APPROVED DATE</span>
                                        <strong id="preview-doc-date" class="font-semibold text-slate-700 block mt-0.5 truncate"><?= e($selected['approved_date']) ?></strong>
                                    </div>
                                </div>

                                <!-- Body Text Content -->
                                <div class="space-y-4 text-xs text-slate-700 font-inter leading-relaxed">
                                    <p class="font-semibold text-slate-900 text-xs sm:text-sm">To Whom It May Concern,</p>
                                    
                                    <p id="preview-body-p1">
                                        of Sri Lanka, in support of the visa application submitted by <strong id="body-name-span" class="text-slate-900">Mr. Anthony Silva</strong>, a citizen of Sri Lanka bearing Passport Number <strong id="body-passport-span" class="font-mono text-slate-900"><?= e($selected['passport']) ?></strong>.
                                    </p>
                                    
                                    <p id="preview-body-p2">
                                        The applicant has applied for an Entry Visa for the purpose of religious study and pilgrimage within Sri Lanka. Having reviewed the application in accordance with the established procedures of the Ministry, we are pleased to Having reviewed the application in accordance with the established procedures of the Ministry, we are pleased to confirm that the applicant meets all requisite criteria and has been duly cleared at all stages of the approval process, including the Ministry of Defence security clearance.
                                    </p>
                                </div>

                                <!-- Sign-off Block -->
                                <div class="pt-4 space-y-1">
                                    <p class="text-slate-700 font-normal text-xs">Yours faithfully,</p>
                                    <div class="h-10 border-b border-slate-300 w-44 my-2"></div>
                                    <p class="font-bold text-slate-900 text-xs sm:text-sm font-heading">S. Amarasinghe</p>
                                    <p class="text-[11px] text-slate-600">Director General — Visa Recommendation Services</p>
                                    <p class="text-[10px] text-slate-400">Ministry of Buddhasasana, Religious and Cultural Affairs</p>
                                </div>
                            </div>

                        </div>

                        <!-- Light Blue Bottom Footer Banner -->
                        <div id="footer-banner-elem" class="bg-[#F0F4F8] p-5 flex flex-col sm:flex-row items-center justify-between text-[10px] text-slate-500 rounded-b-sm border-t border-slate-200/60 gap-2">
                            <div>
                                <p class="font-semibold text-slate-600">Ministry of Buddhasasana, Religious and Cultural Affairs · Sri Lanka</p>
                                <p class="text-slate-400 mt-0.5">Tel: +94 11 269 4661 · Email: info@buddhasasana.gov.lk · Web: www.buddhasasana.gov.lk</p>
                            </div>
                            <div class="text-right whitespace-nowrap">
                                <p class="font-mono text-slate-500">Ref: VLS/REC/2634/2026</p>
                                <p class="text-slate-400 mt-0.5">Generated: 30 March 2026 · Page 1 of 1</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Export & Distribute Action Bar -->
                <div class="p-4 bg-slate-50 border-t border-slate-200/80 space-y-3">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-1 text-xs">
                        <span class="font-bold text-slate-800 font-heading">Export & Distribute</span>
                        <span id="export-summary-text" class="text-[11px] font-medium text-slate-400 font-inter">
                            <?= e($selected['id']) ?> · <?= e($selected['short_name']) ?> · <?= e($selected['visa_type']) ?> · 30 Mar 2026
                        </span>
                    </div>

                    <!-- 5 Action Buttons Row -->
                    <div class="grid grid-cols-2 sm:grid-cols-5 gap-2">
                        <button type="button" id="btn-pdf" class="bg-white border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs py-2 px-3 rounded-lg text-center shadow-2xs transition-all cursor-pointer">
                            Generate PDF
                        </button>
                        <button type="button" id="btn-download" class="bg-white border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs py-2 px-3 rounded-lg text-center shadow-2xs transition-all cursor-pointer">
                            Download
                        </button>
                        <button type="button" id="btn-email" class="bg-white border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs py-2 px-3 rounded-lg text-center shadow-2xs transition-all cursor-pointer">
                            Send Email
                        </button>
                        <button type="button" id="btn-print" class="bg-white border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs py-2 px-3 rounded-lg text-center shadow-2xs transition-all cursor-pointer">
                            Print
                        </button>
                        <button type="button" id="btn-share" class="bg-white border border-slate-200 hover:bg-slate-100 text-slate-700 font-semibold text-xs py-2 px-3 rounded-lg text-center shadow-2xs transition-all cursor-pointer col-span-2 sm:col-span-1">
                            Share Link
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<!-- Interactive Client-side Script -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    // Dataset of Applications
    const applicationsData = <?= json_encode($applications, JSON_PRETTY_PRINT) ?>;

    const selectEl = document.getElementById('application-select');
    const paperSheet = document.getElementById('paper-sheet');

    // UI elements to update on selection
    const selectAvatar = document.getElementById('select-avatar');
    const selectName = document.getElementById('select-name');
    const selectSubtext = document.getElementById('select-subtext');

    const metaName = document.getElementById('meta-name');
    const metaNationality = document.getElementById('meta-nationality');
    const metaPassport = document.getElementById('meta-passport');
    const metaVisaType = document.getElementById('meta-visatype');
    const metaRef = document.getElementById('meta-ref');
    const metaDate = document.getElementById('meta-date');

    const previewApplicantTitle = document.getElementById('preview-applicant-title');
    const previewDocName = document.getElementById('preview-doc-name');
    const previewDocVisatype = document.getElementById('preview-doc-visatype');
    const previewDocPassport = document.getElementById('preview-doc-passport');
    const previewDocRef = document.getElementById('preview-doc-ref');
    const previewDocNationality = document.getElementById('preview-doc-nationality');
    const previewDocDate = document.getElementById('preview-doc-date');

    const bodyNameSpan = document.getElementById('body-name-span');
    const bodyPassportSpan = document.getElementById('body-passport-span');
    const exportSummaryText = document.getElementById('export-summary-text');

    // Handle Application Selection Change
    if (selectEl) {
        selectEl.addEventListener('change', (e) => {
            const selectedId = e.target.value;
            const app = applicationsData.find(a => a.id === selectedId) || applicationsData[0];

            if (selectAvatar) selectAvatar.textContent = app.initials;
            if (selectName) selectName.textContent = app.name;
            if (selectSubtext) selectSubtext.textContent = `${app.id} · ${app.visa_type} · ${app.nationality}`;

            if (metaName) metaName.textContent = app.short_name;
            if (metaNationality) metaNationality.textContent = app.country_flag;
            if (metaPassport) metaPassport.textContent = app.passport;
            if (metaVisaType) metaVisaType.textContent = app.visa_type;
            if (metaRef) metaRef.textContent = app.id;
            if (metaDate) metaDate.textContent = app.approved_date;

            if (previewApplicantTitle) previewApplicantTitle.textContent = app.name;
            if (previewDocName) previewDocName.textContent = app.name;
            if (previewDocVisatype) previewDocVisatype.textContent = app.visa_type;
            if (previewDocPassport) previewDocPassport.textContent = app.passport;
            if (previewDocRef) previewDocRef.textContent = app.id;
            if (previewDocNationality) previewDocNationality.textContent = app.nationality;
            if (previewDocDate) previewDocDate.textContent = app.approved_date;

            if (bodyNameSpan) bodyNameSpan.textContent = `Mr. ${app.short_name}`;
            if (bodyPassportSpan) bodyPassportSpan.textContent = app.passport;
            if (exportSummaryText) exportSummaryText.textContent = `${app.id} · ${app.short_name} · ${app.visa_type} · 30 Mar 2026`;
        });
    }

    // Letter Type Radio Options Handler
    const letterTypeCards = document.querySelectorAll('.letter-type-card');
    const previewLetterTitle = document.getElementById('preview-letter-title');
    const previewBodyP2 = document.getElementById('preview-body-p2');

    letterTypeCards.forEach(card => {
        card.addEventListener('click', () => {
            const radio = card.querySelector('input[type="radio"]');
            if (!radio) return;

            // Reset all cards styling
            letterTypeCards.forEach(c => {
                c.className = 'letter-type-card bg-slate-50/50 border border-slate-200 rounded-xl p-3.5 flex items-start gap-3 cursor-pointer hover:bg-slate-100/50 transition-all block';
                const dot = c.querySelector('.radio-indicator');
                if (dot) {
                    dot.className = 'radio-indicator w-4 h-4 rounded-full border border-slate-300 bg-white flex items-center justify-center flex-shrink-0 mt-0.5';
                    const inner = dot.querySelector('div');
                    if (inner) inner.className = 'w-1.5 h-1.5 rounded-full bg-transparent';
                }
            });

            // Set active card styling
            card.className = 'letter-type-card bg-amber-50/50 border-2 border-amber-500/80 rounded-xl p-3.5 flex items-start gap-3 cursor-pointer transition-all block';
            const dot = card.querySelector('.radio-indicator');
            if (dot) {
                dot.className = 'radio-indicator w-4 h-4 rounded-full border-2 border-amber-600 bg-amber-600 flex items-center justify-center flex-shrink-0 mt-0.5';
                const inner = dot.querySelector('div');
                if (inner) inner.className = 'w-1.5 h-1.5 rounded-full bg-white';
            }

            radio.checked = true;

            // Update Preview Document Title & Paragraph
            if (radio.value === 'entry') {
                if (previewLetterTitle) previewLetterTitle.textContent = 'Entry Visa Recommendation for';
                if (previewBodyP2) previewBodyP2.textContent = 'The applicant has applied for an Entry Visa for the purpose of religious study and pilgrimage within Sri Lanka. Having reviewed the application in accordance with the established procedures of the Ministry, we are pleased to Having reviewed the application in accordance with the established procedures of the Ministry, we are pleased to confirm that the applicant meets all requisite criteria and has been duly cleared at all stages of the approval process, including the Ministry of Defence security clearance.';
            } else if (radio.value === 'resident') {
                if (previewLetterTitle) previewLetterTitle.textContent = 'Resident Visa Clearance for';
                if (previewBodyP2) previewBodyP2.textContent = 'The applicant has requested long-term residency in Sri Lanka for dedicated religious ministry and educational service. Following thorough verification across all security and ministry databases, the Department formally recommends the issuance of a Resident Visa for the designated duration.';
            } else if (radio.value === 'extension') {
                if (previewLetterTitle) previewLetterTitle.textContent = 'Visa Extension Approval for';
                if (previewBodyP2) previewBodyP2.textContent = 'The applicant has submitted a request for an extension of their existing visa status. Based on updated institutional sponsorship and compliance clearance, the Ministry grants approval for an extended stay under the standard terms and regulatory guidelines.';
            }
        });
    });

    // Toggle Switches Handler (Letter Options)
    document.querySelectorAll('.toggle-switch').forEach(btn => {
        btn.addEventListener('click', () => {
            const targetId = btn.getAttribute('data-target');
            const targetElem = document.getElementById(`${targetId}-elem`);
            const circle = btn.querySelector('span');

            const isON = btn.classList.contains('bg-emerald-600');
            if (isON) {
                btn.classList.remove('bg-emerald-600');
                btn.classList.add('bg-slate-200');
                if (circle) {
                    circle.classList.remove('translate-x-4');
                    circle.classList.add('translate-x-0');
                }
                if (targetElem) targetElem.style.opacity = '0.25';
            } else {
                btn.classList.remove('bg-slate-200');
                btn.classList.add('bg-emerald-600');
                if (circle) {
                    circle.classList.remove('translate-x-0');
                    circle.classList.add('translate-x-4');
                }
                if (targetElem) targetElem.style.opacity = '1';
            }
        });
    });

    // Zoom Controls for Letter Preview Paper
    let currentZoom = 1;
    const zoomInBtn = document.getElementById('zoom-in');
    const zoomOutBtn = document.getElementById('zoom-out');
    const zoomResetBtn = document.getElementById('zoom-reset');

    if (zoomInBtn && paperSheet) {
        zoomInBtn.addEventListener('click', () => {
            if (currentZoom < 1.3) currentZoom += 0.08;
            paperSheet.style.transform = `scale(${currentZoom})`;
        });
    }

    if (zoomOutBtn && paperSheet) {
        zoomOutBtn.addEventListener('click', () => {
            if (currentZoom > 0.7) currentZoom -= 0.08;
            paperSheet.style.transform = `scale(${currentZoom})`;
        });
    }

    if (zoomResetBtn && paperSheet) {
        zoomResetBtn.addEventListener('click', () => {
            currentZoom = 1;
            paperSheet.style.transform = `scale(1)`;
        });
    }

    // Export & Action Buttons Trigger
    const actionButtons = [
        { id: 'btn-pdf', label: 'Generating official PDF document...' },
        { id: 'btn-download', label: 'Downloading recommendation letter...' },
        { id: 'btn-email', label: 'Preparing email dispatch to applicant...' },
        { id: 'btn-print', label: 'Opening system print dialogue...' },
        { id: 'btn-share', label: 'Security share link copied to clipboard!' },
        { id: 'export-top-btn', label: 'Exporting recommendation letter bundle...' }
    ];

    actionButtons.forEach(action => {
        const btn = document.getElementById(action.id);
        if (btn) {
            btn.addEventListener('click', () => {
                if (action.id === 'btn-print') {
                    window.print();
                } else {
                    alert(action.label);
                }
            });
        }
    });
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
