<?php
/**
 * Certificates Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 */

$page_title = "Certificates";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div class="flex items-center justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Certificates</span>
                <h2 class="text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Certificates</h2>
            </div>
            <div>
                <span class="text-xs font-medium text-slate-450 font-inter text-slate-400">5 approved applications ready</span>
            </div>
        </div>

        <!-- Tabs Switcher -->
        <div class="flex items-center gap-2 bg-[#F1ECE4]/40 p-1 rounded-lg w-max border border-slate-200/50">
            <button type="button" class="bg-secondary text-white rounded-lg px-4 py-2 text-xs font-semibold shadow-2xs font-inter min-h-[44px] flex items-center transition-all duration-150">
                Identity certificate
            </button>
            <button type="button" class="text-slate-600 hover:text-slate-900 rounded-lg px-4 py-2 text-xs font-medium font-inter min-h-[44px] flex items-center transition-all duration-150">
                Passport letter
            </button>
        </div>

        <!-- Main Workspace Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            
            <!-- Left Column: Settings & Generation Details (lg:col-span-6) -->
            <div class="lg:col-span-6 xl:col-span-5 space-y-6">
                
                <!-- Card: Select Approved Application -->
                <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-4">
                    <h3 class="text-base font-bold text-slate-950 font-heading">Select Approved Application</h3>
                    <div>
                        <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">APPROVED APPLICATION</label>
                        <select class="w-full bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-600 focus:border-slate-350 focus:ring focus:ring-primary/10 transition-all py-2 pl-3 pr-8 cursor-pointer h-9">
                            <option>Choose an application</option>
                        </select>
                        <span class="block text-[10px] text-slate-400 font-inter mt-1.5">Only approved applications appear here.</span>
                    </div>
                </div>

                <!-- Card: Certificate Details Form -->
                <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-5">
                    <h3 class="text-base font-bold text-slate-950 font-heading">Certificate Details</h3>
                    
                    <div class="space-y-4">
                        <!-- Full Name -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">FULL NAME ON CERTIFICATE</label>
                            <input type="text" placeholder="Full name as it appears on the certificate" class="w-full rounded-lg border-slate-200 text-xs font-inter py-2 px-3 focus:ring-1 focus:ring-primary/20 focus:border-slate-350 transition-all h-9 text-slate-800 placeholder:text-slate-400">
                        </div>

                        <!-- Row: Role & Diocese -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">ROLE / TITLE</label>
                                <select class="w-full bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-600 focus:border-slate-350 focus:ring focus:ring-primary/10 transition-all py-2 pl-3 pr-8 cursor-pointer h-9">
                                    <option>Father</option>
                                    <option>Sister</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">DIOCESE</label>
                                <select class="w-full bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-600 focus:border-slate-350 focus:ring focus:ring-primary/10 transition-all py-2 pl-3 pr-8 cursor-pointer h-9">
                                    <option>Archdiocese of Colombo</option>
                                    <option>Diocese of Kandy</option>
                                    <option>Diocese of Galle</option>
                                    <option>Diocese of Jaffna</option>
                                </select>
                            </div>
                        </div>

                        <!-- Row: Issue Date & Valid Until -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">ISSUE DATE</label>
                                <input type="text" value="26 March 2026" class="w-full rounded-lg border-slate-200 text-xs font-inter py-2 px-3 focus:ring-1 focus:ring-primary/20 focus:border-slate-350 transition-all h-9 text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">VALID UNTIL</label>
                                <input type="text" value="25 March 2027" class="w-full rounded-lg border-slate-200 text-xs font-inter py-2 px-3 focus:ring-1 focus:ring-primary/20 focus:border-slate-350 transition-all h-9 text-slate-800">
                            </div>
                        </div>

                        <!-- Certificate Number -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">CERTIFICATE NUMBER</label>
                            <input type="text" value="CERT-2026-XXXX" disabled class="w-full rounded-lg border-slate-200 text-xs font-inter py-2 px-3 bg-slate-50 text-slate-400 cursor-not-allowed h-9">
                        </div>

                        <!-- Issuing Authority -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">ISSUING AUTHORITY</label>
                            <input type="text" value="Archdiocese of Colombo — Chancery Office" class="w-full rounded-lg border-slate-200 text-xs font-inter py-2 px-3 focus:ring-1 focus:ring-primary/20 focus:border-slate-350 transition-all h-9 text-slate-800">
                        </div>

                        <!-- Signatory -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">SIGNATORY</label>
                            <input type="text" value="Rev. Fr. Chancellor, Diocese Secretary" class="w-full rounded-lg border-slate-200 text-xs font-inter py-2 px-3 focus:ring-1 focus:ring-primary/20 focus:border-slate-350 transition-all h-9 text-slate-800">
                        </div>

                        <!-- Special Notes -->
                        <div>
                            <label class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider font-heading mb-1.5">SPECIAL NOTES (optional)</label>
                            <textarea rows="3" placeholder="Any additional remarks to appear on the certificate..." class="w-full rounded-lg border-slate-200 text-xs font-inter py-2 px-3 focus:ring-1 focus:ring-primary/20 focus:border-slate-350 transition-all text-slate-800 placeholder:text-slate-400"></textarea>
                        </div>
                    </div>

                    <!-- Buttons Footer -->
                    <div class="flex items-center justify-between border-t border-slate-100 pt-4 mt-6">
                        <button type="button" class="bg-secondary hover:bg-secondary-dark text-white font-medium text-xs px-6 py-2.5 rounded-lg shadow-xs transition-colors font-inter">
                            Generate certificate
                        </button>
                        <div class="flex items-center gap-2">
                            <button type="button" class="border border-slate-200 text-slate-700 hover:bg-slate-50 text-xs px-4 py-2.5 rounded-lg transition-colors font-inter shadow-3xs">Save draft</button>
                            <button type="button" class="border border-slate-200 text-slate-700 hover:bg-slate-50 text-xs px-4 py-2.5 rounded-lg transition-colors font-inter shadow-3xs">Clear</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Live Preview (lg:col-span-6) -->
            <div class="lg:col-span-6">
                
                <!-- Card: Live Preview -->
                <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-6 flex flex-col justify-between h-full">
                    <!-- Card Header -->
                    <div class="flex items-center justify-between">
                        <h3 class="text-base font-bold text-slate-950 font-heading">Live Preview</h3>
                        <span class="bg-[#FFFBEB] text-[#B45309] border border-[#FEF3C7] rounded-full text-[10px] px-2.5 py-0.5 font-semibold inline-flex items-center gap-1">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                            Draft
                        </span>
                    </div>

                    <!-- Certificate Canvas Sheet -->
                    <div class="border-[6px] border-double border-[#C5A059] p-4 sm:p-8 bg-[#FCFAF6] rounded-xl shadow-xs text-center space-y-6 relative overflow-hidden flex-1 flex flex-col justify-between min-w-[300px]">
                        
                        <!-- Certificate Header -->
                        <div class="space-y-1">
                            <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest font-inter">Department of Christian Religious Affairs</p>
                            <h1 class="text-xl sm:text-2xl font-bold text-primary font-heading tracking-tight mt-1">Certificate of Priesthood</h1>
                            <p class="text-[9px] font-semibold text-slate-405 uppercase tracking-widest font-inter">Identity Certification</p>
                        </div>

                        <!-- Certificate Divider Line -->
                        <div class="w-24 h-px bg-[#C5A059] mx-auto my-3"></div>

                        <!-- Certify Text Body -->
                        <div class="space-y-5 flex-1 flex flex-col justify-center my-6">
                            <p class="text-xs text-slate-400 font-inter italic">This is to certify that</p>
                            
                            <!-- Dash and Name -->
                            <div class="space-y-1">
                                <span class="block text-slate-300">—</span>
                                <span class="block text-base font-bold text-[#B89528] font-heading">Father · Archdiocese of Colombo</span>
                            </div>
                            
                            <p class="text-[11px] text-slate-600 leading-relaxed font-inter px-4 sm:px-6">
                                is a duly ordained and professed member of the Catholic Clergy, in good standing within the Diocese, recognised under canon law and authorised to perform all ecclesiastical functions pertaining to their sacred office.
                            </p>
                        </div>

                        <!-- Certificate Footer Data -->
                        <div class="grid grid-cols-3 gap-2 border-t border-slate-200/50 pt-5 mt-6 text-left items-end text-[10px] font-inter">
                            <!-- Issue Date -->
                            <div class="space-y-0.5">
                                <span class="block font-bold text-slate-700">26 March 2026</span>
                                <span class="block text-slate-400 text-[9px] uppercase tracking-wider">Issue date</span>
                            </div>

                            <!-- Signature Representation -->
                            <div class="text-center space-y-1">
                                <div class="h-4 border-b border-slate-300 w-20 mx-auto"></div>
                                <span class="block text-slate-400 text-[9px] uppercase tracking-wider">Authorized signatory</span>
                            </div>

                            <!-- Certificate Number -->
                            <div class="text-right space-y-0.5">
                                <span class="block font-bold text-slate-700">CERT-2026-XXXX</span>
                                <span class="block text-slate-400 text-[9px] uppercase tracking-wider">Certificate no.</span>
                            </div>
                        </div>

                        <!-- QR Code Block -->
                        <div class="flex flex-col items-center mt-6">
                            <!-- Clean QR Code Vector Representation -->
                            <svg class="w-14 h-14 text-slate-800" viewBox="0 0 100 100" fill="currentColor">
                                <path d="M0,0 h30 v30 h-30 z M10,10 h10 v10 h-10 z M70,0 h30 v30 h-30 z M80,10 h10 v10 h-10 z M0,70 h30 v30 h-30 z M10,80 h10 v10 h-10 z M40,40 h20 v20 h-20 z" />
                                <path d="M40,0 h10 v10 h-10 z M50,20 h10 v10 h-10 z M0,40 h10 v10 h-10 z M20,50 h10 v10 h-10 z M70,40 h10 v10 h-10 z M90,50 h10 v10 h-10 z M40,80 h10 v10 h-10 z M50,90 h10 v10 h-10 z M80,80 h20 v10 h-20 z" />
                            </svg>
                        </div>

                    </div>

                    <!-- Action buttons (below paper preview) -->
                    <div class="flex items-center gap-2 mt-4">
                        <button type="button" class="bg-secondary hover:bg-secondary-dark text-white font-medium text-xs px-4 py-2.5 rounded-lg flex-1 text-center shadow-xs transition-colors font-inter">Download PDF</button>
                        <button type="button" class="border border-slate-200 text-slate-700 hover:bg-slate-50 text-xs px-4 py-2.5 rounded-lg flex-1 text-center shadow-xs transition-colors font-inter">Print</button>
                        <button type="button" class="border border-slate-200 text-slate-700 hover:bg-slate-50 text-xs px-4 py-2.5 rounded-lg flex-1 text-center shadow-xs transition-colors font-inter">Send email</button>
                    </div>

                    <!-- Validity footer -->
                    <div class="text-[10px] text-slate-400 font-inter mt-2 flex items-center justify-between border-t border-slate-100 pt-3.5">
                        <div class="space-y-0.5">
                            <span class="block text-slate-400 uppercase tracking-wider text-[8px] font-semibold">Validity period</span>
                            <span class="block text-slate-500 font-medium">26 March 2026</span>
                        </div>
                        <div class="text-right space-y-0.5">
                            <span class="block text-emerald-600 font-semibold uppercase tracking-wider text-[8px]">12 months remaining</span>
                            <span class="block text-slate-500 font-medium">25 March 2027</span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Card: Recently Issued Certificates (Full Width Bottom) -->
        <div class="bg-white rounded-xl border border-slate-200/80 shadow-2xs p-6 space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold text-slate-900 font-heading">Recently Issued Certificates</h3>
                <div class="flex items-center gap-3">
                    <span class="text-xs font-medium text-slate-400 font-inter">6 certificates</span>
                    <button type="button" class="border border-slate-200 bg-white text-slate-600 hover:bg-slate-50 text-xs px-3.5 py-1.5 rounded-lg flex items-center gap-1.5 transition-colors font-inter shadow-3xs">
                        <!-- Export Tray SVG -->
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                        </svg>
                        Export
                    </button>
                </div>
            </div>

            <!-- Table Layout -->
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse">
                    <thead>
                        <tr class="bg-[#F6F3EC] text-slate-500 font-semibold border-b border-slate-200/60 uppercase text-[10px] tracking-wider">
                            <th scope="col" class="py-3 px-5 font-heading">Cert No.</th>
                            <th scope="col" class="py-3 px-5 font-heading">Name</th>
                            <th scope="col" class="py-3 px-5 font-heading">Role</th>
                            <th scope="col" class="py-3 px-5 font-heading">Type</th>
                            <th scope="col" class="py-3 px-5 font-heading">Diocese</th>
                            <th scope="col" class="py-3 px-5 font-heading">Issued</th>
                            <th scope="col" class="py-3 px-5 font-heading">Valid Until</th>
                            <th scope="col" class="py-3 px-5 font-heading">Status</th>
                            <th scope="col" class="py-3 px-5 text-right font-heading">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 text-slate-700">
                        
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-slate-500">CERT-2026-080</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Sr. Mary Colette</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF5FF] text-[#7E22CE] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#F3E8FF]/80">Sister</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Kandy</td>
                            <td class="py-3.5 px-5 text-slate-500">25 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-500">24 Mar 2027</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#ECFDF5] text-[#047857] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 border border-[#D1FAE5]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    Issued
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1.5">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">Download</button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-slate-500">CERT-2026-079</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Sr. Agnes Fernando</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF5FF] text-[#7E22CE] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#F3E8FF]/80">Sister</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Galle</td>
                            <td class="py-3.5 px-5 text-slate-500">23 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-500">22 Mar 2027</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#ECFDF5] text-[#047857] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 border border-[#D1FAE5]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    Issued
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1.5">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">Download</button>
                            </td>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-slate-500">CERT-2026-078</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Fr. Lucas Mendis</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Father</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF8F5] text-[#635543] text-[11px] px-2.5 py-0.5 rounded border border-[#EFEAE1] font-medium">Passport</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Kandy</td>
                            <td class="py-3.5 px-5 text-slate-500">20 Mar 2026</td>
                            <td class="py-3.5 px-5 text-slate-500">19 Mar 2027</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#ECFDF5] text-[#047857] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 border border-[#D1FAE5]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    Issued
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1.5">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">Download</button>
                            </td>
                        </tr>

                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-slate-500">CERT-2025-077</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Fr. Daniel Peris</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Father</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Colombo</td>
                            <td class="py-3.5 px-5 text-slate-500">01 Dec 2025</td>
                            <td class="py-3.5 px-5 text-slate-500">30 Nov 2026</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#ECFDF5] text-[#047857] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 border border-[#D1FAE5]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    Issued
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1.5">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">Download</button>
                            </td>
                        </tr>

                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-slate-500">CERT-2025-076</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Sr. Rosa Almeida</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF5FF] text-[#7E22CE] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#F3E8FF]/80">Sister</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#FAF8F5] text-[#635543] text-[11px] px-2.5 py-0.5 rounded border border-[#EFEAE1] font-medium">Passport</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Colombo</td>
                            <td class="py-3.5 px-5 text-slate-500">14 Nov 2025</td>
                            <td class="py-3.5 px-5 text-slate-500">13 Nov 2026</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#ECFDF5] text-[#047857] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 border border-[#D1FAE5]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    Issued
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1.5">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">Download</button>
                            </td>
                        </tr>

                        <!-- Row 6 -->
                        <tr class="hover:bg-slate-50/50 transition-colors">
                            <td class="py-3.5 px-5 font-mono text-slate-500">CERT-2025-075</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">Fr. Thomas Jayawardena</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Father</span>
                            </td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#EFF6FF] text-[#1D4ED8] text-[11px] px-2.5 py-0.5 rounded-md font-medium border border-[#DBEAFE]/80">Identity</span>
                            </td>
                            <td class="py-3.5 px-5 text-slate-500 font-medium">Galle</td>
                            <td class="py-3.5 px-5 text-slate-500">02 Oct 2025</td>
                            <td class="py-3.5 px-5 text-slate-500">01 Oct 2026</td>
                            <td class="py-3.5 px-5">
                                <span class="bg-[#ECFDF5] text-[#047857] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 border border-[#D1FAE5]">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                    Issued
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right space-x-1.5">
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">View</button>
                                <button type="button" class="border border-slate-200 bg-white text-slate-700 hover:bg-slate-50 text-[11px] px-3 py-1.5 rounded-lg transition-colors font-medium shadow-3xs">Download</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
