<?php
/**
 * New Church Registration Form - Church Registration Management System
 * Department of Christian Religious Affairs
 */

$page_title = "New Church Registration";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Area -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Title & Back Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / Applications / New Church Registration</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">New Church Registration</h2>
            </div>
            <a href="<?= BASE_URL ?>applications" class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold px-4 py-2 rounded-xl border border-slate-200 shadow-2xs transition-colors font-heading self-start sm:self-auto">
                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                <span>Back</span>
            </a>
        </div>

        <!-- Form Multi-Step Progress Header Card -->
        <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs">
            <div class="relative flex items-center justify-between max-w-[1000px] mx-auto px-4">
                
                <!-- Connecting Line -->
                <div class="absolute top-[16px] left-[50px] right-[50px] h-[1.5px] bg-slate-200 z-0"></div>

                <!-- Step 1 -->
                <div class="relative z-10 flex items-center space-x-3 bg-white pr-4">
                    <div class="w-8 h-8 rounded-full bg-[#206E56] text-white flex items-center justify-center font-bold text-sm shadow-2xs">
                        1
                    </div>
                    <div class="text-left leading-tight hidden sm:block">
                        <p class="text-xs font-semibold text-slate-800 font-inter">Church Details</p>
                        <span class="text-[10px] font-medium text-[#206E56]">Inprogress</span>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative z-10 flex items-center space-x-3 bg-white px-4">
                    <div class="w-8 h-8 rounded-full bg-slate-100 border-2 border-slate-200 text-slate-400 flex items-center justify-center font-bold text-sm">
                        2
                    </div>
                    <div class="text-left leading-tight hidden sm:block">
                        <p class="text-xs font-semibold text-slate-400 font-inter">Applicant Details</p>
                        <span class="text-[10px] font-medium text-slate-400">Not Started</span>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative z-10 flex items-center space-x-3 bg-white px-4">
                    <div class="w-8 h-8 rounded-full bg-slate-100 border-2 border-slate-200 text-slate-400 flex items-center justify-center font-bold text-sm">
                        3
                    </div>
                    <div class="text-left leading-tight hidden sm:block">
                        <p class="text-xs font-semibold text-slate-400 font-inter">Documents</p>
                        <span class="text-[10px] font-medium text-slate-400">Not Started</span>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative z-10 flex items-center space-x-3 bg-white pl-4">
                    <div class="w-8 h-8 rounded-full bg-slate-100 border-2 border-slate-200 text-slate-400 flex items-center justify-center font-bold text-sm">
                        4
                    </div>
                    <div class="text-left leading-tight hidden sm:block">
                        <p class="text-xs font-semibold text-slate-400 font-inter">Review & Submit</p>
                        <span class="text-[10px] font-medium text-slate-400">Not Started</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- 2-Column Content Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            
            <!-- LEFT MAIN COLUMN: Form Fields Card (Spans 2 cols on lg) -->
            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-white rounded-2xl p-6 border border-slate-200/90 shadow-2xs space-y-8">
                    
                    <!-- Section 1: Church Details -->
                    <div class="space-y-6">
                        <h3 class="text-base font-bold text-slate-900 font-heading border-b border-slate-100 pb-3">1. Church Details</h3>
                        
                        <!-- Denomination Radio Cards Grid -->
                        <div class="space-y-2.5">
                            <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Denomination / Type <span class="text-red-500">*</span></label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                                
                                <!-- Roman Catholic (Active) -->
                                <label class="relative flex items-center px-4 py-3 bg-[#FAFBFD] border-2 border-[#13273F] rounded-xl cursor-pointer select-none text-xs font-semibold font-inter text-[#13273F]">
                                    <input type="radio" name="denomination" value="catholic" checked class="h-3.5 w-3.5 text-[#13273F] focus:ring-[#13273F] border-slate-300 mr-3">
                                    <span>Roman Catholic</span>
                                </label>

                                <!-- Protestant / Anglican -->
                                <label class="relative flex items-center px-4 py-3 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl cursor-pointer select-none text-xs font-semibold font-inter text-slate-700">
                                    <input type="radio" name="denomination" value="protestant" class="h-3.5 w-3.5 text-[#13273F] focus:ring-[#13273F] border-slate-300 mr-3">
                                    <span>Protestant / Anglican</span>
                                </label>

                                <!-- Pentecostal / Charismatic -->
                                <label class="relative flex items-center px-4 py-3 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl cursor-pointer select-none text-xs font-semibold font-inter text-slate-700">
                                    <input type="radio" name="denomination" value="pentecostal" class="h-3.5 w-3.5 text-[#13273F] focus:ring-[#13273F] border-slate-300 mr-3">
                                    <span>Pentecostal / Charismatic</span>
                                </label>

                                <!-- Evangelical / Baptist -->
                                <label class="relative flex items-center px-4 py-3 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl cursor-pointer select-none text-xs font-semibold font-inter text-slate-700">
                                    <input type="radio" name="denomination" value="evangelical" class="h-3.5 w-3.5 text-[#13273F] focus:ring-[#13273F] border-slate-300 mr-3">
                                    <span>Evangelical / Baptist</span>
                                </label>

                                <!-- Methodist / Presbyterian -->
                                <label class="relative flex items-center px-4 py-3 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl cursor-pointer select-none text-xs font-semibold font-inter text-slate-700">
                                    <input type="radio" name="denomination" value="methodist" class="h-3.5 w-3.5 text-[#13273F] focus:ring-[#13273F] border-slate-300 mr-3">
                                    <span>Methodist / Presbyterian</span>
                                </label>

                                <!-- Other Christian -->
                                <label class="relative flex items-center px-4 py-3 bg-white border border-slate-200 hover:bg-slate-50 rounded-xl cursor-pointer select-none text-xs font-semibold font-inter text-slate-700">
                                    <input type="radio" name="denomination" value="other" class="h-3.5 w-3.5 text-[#13273F] focus:ring-[#13273F] border-slate-300 mr-3">
                                    <span>Other Christian</span>
                                </label>

                            </div>
                        </div>

                        <!-- Organization Name -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Church / Organisation Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="e.g. St. Joseph's Catholic Church" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                        </div>

                        <!-- Sinhala & Tamil Names Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Sinhala Name (Optional)</label>
                                <input type="text" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Tamil Name (Optional)</label>
                                <input type="text" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                        </div>

                        <!-- Street Address -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Street Address / No. <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="e.g. number, street name" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                        </div>

                        <!-- City, District & Postal Code Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">City / Town <span class="text-red-500">*</span></label>
                                <input type="text" placeholder="e.g. colombo" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">District <span class="text-red-500">*</span></label>
                                <select class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                                    <option>Select district</option>
                                    <option>Colombo</option>
                                    <option>Gampaha</option>
                                    <option>Kandy</option>
                                    <option>Negombo</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Postal Code <span class="text-red-500">*</span></label>
                                <input type="text" placeholder="e.g. 11600" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                        </div>

                        <!-- Phone & Email Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Primary Phone <span class="text-red-500">*</span></label>
                                <input type="text" placeholder="+94 XXXXXXXXX" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Alternative Phone</label>
                                <input type="text" placeholder="+94 XXXXXXXXX" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" placeholder="email@gmail.com" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                        </div>

                    </div>

                    <!-- Section 2: Applicant Details -->
                    <div class="space-y-6 pt-4">
                        <h3 class="text-base font-bold text-slate-900 font-heading border-b border-slate-100 pb-3">2. Applicant Details</h3>
                        
                        <!-- Title & Full Name -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div class="space-y-2 md:col-span-1">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Title</label>
                                <input type="text" placeholder="REV." class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                            <div class="space-y-2 md:col-span-3">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Full Name</label>
                                <input type="text" placeholder="Joseph Anthony Fernando" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                        </div>

                        <!-- NIC & Date of Birth -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">NIC Number</label>
                                <input type="text" placeholder="123456789V" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Date of Birth</label>
                                <input type="text" placeholder="MM/DD/YYYY" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                        </div>

                        <!-- Role & Contact Number -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Designation / Role</label>
                                <select class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-600 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                                    <option>Select Role</option>
                                    <option>Chief Pastor</option>
                                    <option>Bishop</option>
                                    <option>Trustee Trustee</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Contact Number</label>
                                <input type="text" placeholder="+94 XXXXXXXXX" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" placeholder="email@gmail.com" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                        </div>

                        <!-- Residential Address -->
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-500 font-inter uppercase tracking-wider block">Residential Address <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="e.g. number, street name" class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-xl text-xs font-inter text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-slate-300 transition-all">
                        </div>

                        <!-- Declaration Checkbox Card -->
                        <div class="p-4 bg-[#F0F4F8]/60 border border-slate-200/60 rounded-xl flex items-start space-x-3">
                            <input type="checkbox" id="declare" class="h-4.5 w-4.5 rounded text-primary focus:ring-primary border-slate-300 mt-0.5">
                            <label for="declare" class="text-[11px] font-normal leading-relaxed text-slate-600 font-inter">
                                I, the undersigned, hereby declare that the information provided in this application is true and accurate to the best of my knowledge. I understand that providing false information is an offence under the applicable regulations.
                            </label>
                        </div>

                    </div>

                    <!-- Section 3: Document Upload -->
                    <div class="space-y-4 pt-4">
                        <h3 class="text-base font-bold text-slate-900 font-heading border-b border-slate-100 pb-3">3. Document Upload</h3>
                        
                        <!-- Drag & Drop Uploader Box -->
                        <div class="border-2 border-dashed border-slate-200 hover:border-slate-300 rounded-xl p-8 text-center bg-slate-50/40 hover:bg-slate-50/80 transition-all cursor-pointer">
                            <svg class="mx-auto h-8 w-8 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>
                            <p class="mt-2 text-xs font-semibold text-slate-700 font-inter">Click to upload or drag & drop</p>
                            <p class="mt-1 text-[10px] text-slate-400 font-inter">PDF, JPG or PNG · max 5 MB</p>
                        </div>
                    </div>

                </div>

                <!-- Form Bottom Actions Row -->
                <div class="flex items-center justify-between pt-2">
                    <div class="flex items-center space-x-3">
                        <a href="<?= BASE_URL ?>applications" class="px-5 py-2 bg-white hover:bg-slate-50 text-slate-600 text-xs font-semibold rounded-xl border border-slate-200 shadow-2xs transition-colors font-inter">
                            Cancel
                        </a>
                        <button class="px-5 py-2 bg-white hover:bg-slate-50 text-slate-700 text-xs font-semibold rounded-xl border border-slate-200 shadow-2xs transition-colors font-inter">
                            Save Draft
                        </button>
                    </div>
                    <button class="px-6 py-2.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold rounded-xl shadow-2xs transition-colors font-heading">
                        Submit Application
                    </button>
                </div>

            </div>

            <!-- RIGHT COLUMN: Sidebar Widgets (Spans 1 col on lg) -->
            <div class="space-y-6">
                
                <!-- Widget 1: Form Completion Status -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-5">
                    <div class="flex items-center justify-between">
                        <h4 class="text-xs font-bold text-slate-900 font-heading uppercase tracking-wider">Form Completion</h4>
                        <span class="text-xs font-bold text-slate-500 font-heading">65%</span>
                    </div>

                    <!-- Circular Progress Gauge SVG -->
                    <div class="relative w-24 h-24 mx-auto flex items-center justify-center">
                        <svg class="w-full h-full transform -rotate-90">
                            <!-- Background Circle -->
                            <circle cx="48" cy="48" r="38" stroke="#F1F5F9" stroke-width="7" fill="none" />
                            <!-- Progress Circle (Circumference ~238.7px) -->
                            <circle cx="48" cy="48" r="38" stroke="#13273F" stroke-width="7" fill="none" 
                                    stroke-dasharray="238.7" stroke-dashoffset="83.5" stroke-linecap="round" />
                        </svg>
                        <div class="absolute flex flex-col items-center">
                            <span class="text-xl font-bold text-slate-800 font-heading leading-none">65%</span>
                            <span class="text-[8px] text-slate-400 font-inter mt-0.5">fields completed</span>
                        </div>
                    </div>

                    <!-- Checklists below circular progress -->
                    <div class="space-y-2.5 text-xs font-inter pt-2 border-t border-slate-100">
                        <div class="flex items-center justify-between text-slate-700">
                            <span class="font-medium flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                Denomination selected
                            </span>
                            <span class="text-[#16A34A] font-bold">✓</span>
                        </div>
                        <div class="flex items-center justify-between text-slate-700">
                            <span class="font-medium flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#16A34A]"></span>
                                Church name entered
                            </span>
                            <span class="text-[#16A34A] font-bold">✓</span>
                        </div>
                        <div class="flex items-center justify-between text-slate-700">
                            <span class="font-medium flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                Address incomplete
                            </span>
                            <span class="text-amber-500 font-bold">–</span>
                        </div>
                        <div class="flex items-center justify-between text-slate-700">
                            <span class="font-medium flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span>
                                Email error to fix
                            </span>
                            <span class="text-red-600 font-bold">!</span>
                        </div>
                        <div class="flex items-center justify-between text-slate-700">
                            <span class="font-medium flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                                Applicant details
                            </span>
                            <span class="text-slate-400 font-bold">–</span>
                        </div>
                        <div class="flex items-center justify-between text-slate-700">
                            <span class="font-medium flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-slate-300"></span>
                                1 required document
                            </span>
                            <span class="text-slate-400 font-bold">–</span>
                        </div>
                    </div>
                </div>

                <!-- Widget 2: Approval Process Flow -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-4">
                    <h4 class="text-xs font-bold text-slate-900 font-heading uppercase tracking-wider border-b border-slate-100 pb-2">Approval Process</h4>
                    
                    <div class="space-y-4 text-xs font-inter">
                        
                        <!-- Step 1 -->
                        <div class="flex items-start space-x-2.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-[#206E56] mt-1.5"></div>
                            <div>
                                <p class="font-bold text-slate-800">Application Submitted</p>
                                <p class="text-[10px] text-slate-400">Received by CRMS system</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start space-x-2.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-300 mt-1.5"></div>
                            <div>
                                <p class="font-semibold text-slate-600">Department Review</p>
                                <p class="text-[10px] text-slate-400">Officers verify documents</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start space-x-2.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-300 mt-1.5"></div>
                            <div>
                                <p class="font-semibold text-slate-600">Buddhasasana Ministry</p>
                                <p class="text-[10px] text-slate-400">Ministry-level review</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start space-x-2.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-300 mt-1.5"></div>
                            <div>
                                <p class="font-semibold text-slate-600">MOD Security Clearance</p>
                                <p class="text-[10px] text-slate-400">Defence clearance check</p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="flex items-start space-x-2.5">
                            <div class="w-1.5 h-1.5 rounded-full bg-slate-300 mt-1.5"></div>
                            <div>
                                <p class="font-semibold text-slate-600">Certificate Issued</p>
                                <p class="text-[10px] text-slate-400">Official registration granted</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Widget 3: Quick Actions -->
                <div class="bg-white rounded-2xl p-5 border border-slate-200/90 shadow-2xs space-y-3">
                    <h4 class="text-xs font-bold text-slate-900 font-heading uppercase tracking-wider border-b border-slate-100 pb-2">Quick Actions</h4>
                    
                    <div class="space-y-2">
                        <button class="w-full py-2.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold rounded-xl shadow-2xs transition-colors font-heading text-center">
                            Forward to Min. of Buddhasasana
                        </button>
                        <button class="w-full py-2.5 bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold rounded-xl shadow-2xs transition-colors font-heading text-center">
                            Forward to Min. of Defense
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
