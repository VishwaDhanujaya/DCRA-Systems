<?php
/**
 * Dashboard Overview - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Online Bungalow Booking System
 */

$page_title = "Dashboard Overview";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-4 sm:p-6 lg:p-8 bg-[#F8FAFC]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb, Page Heading & New Booking Button -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-medium text-slate-400 font-inter">Home / Booking Management</span>
                <h2 class="text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Booking Management</h2>
            </div>
            <div>
                <button class="bg-[#13273F] hover:bg-[#0D1C2E] text-white text-xs font-semibold px-4 py-2.5 rounded-lg shadow-sm transition-colors flex items-center gap-1.5 font-inter cursor-pointer">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    New Booking
                </button>
            </div>
        </div>

        <!-- 5 Stat Cards Row with Top Maroon Accent Bar -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
            
            <!-- Card 1: Total Reservations -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[110px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#4E0000]"></div>
                <div class="space-y-1">
                    <p class="text-xs font-medium text-slate-400 font-inter">Total Reservations</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading">7</h3>
                </div>
            </div>

            <!-- Card 2: Pending Approvals -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[110px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#4E0000]"></div>
                <div class="space-y-1">
                    <p class="text-xs font-medium text-slate-400 font-inter">Pending Approvals</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading">5</h3>
                </div>
            </div>

            <!-- Card 3: Payment Verifications -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[110px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#4E0000]"></div>
                <div class="space-y-1">
                    <p class="text-xs font-medium text-slate-400 font-inter">Payment Verifications</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading">3</h3>
                </div>
            </div>

            <!-- Card 4: Total Members -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[110px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#4E0000]"></div>
                <div class="space-y-1">
                    <p class="text-xs font-medium text-slate-400 font-inter">Total Members</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading">7</h3>
                </div>
            </div>

            <!-- Card 5: Active Resorts -->
            <div class="relative overflow-hidden bg-white rounded-xl p-5 border border-slate-200/80 shadow-xs flex flex-col justify-between min-h-[110px]">
                <div class="absolute top-0 inset-x-0 h-1 bg-[#4E0000]"></div>
                <div class="space-y-1">
                    <p class="text-xs font-medium text-slate-400 font-inter">Active Resorts</p>
                    <h3 class="text-3xl font-bold text-slate-900 font-heading">3</h3>
                </div>
            </div>

        </div>

        <!-- Filter Row -->
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pt-2">
            <!-- Search Box -->
            <div class="relative flex-1 max-w-2xl">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" placeholder="Search name, ID, or diocese..." class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-slate-300 focus:border-slate-300 transition-all h-9">
            </div>
            
            <!-- Dropdowns & Reset Filter -->
            <div class="flex flex-wrap items-center gap-3">
                <div class="relative">
                    <select class="appearance-none bg-[#F8FAFC] border border-slate-200 rounded-lg pl-3 pr-8 py-1.5 text-xs font-inter text-slate-600 focus:outline-none cursor-pointer h-9 min-w-[110px]">
                        <option>All resorts</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>
                
                <div class="relative">
                    <select class="appearance-none bg-[#F8FAFC] border border-slate-200 rounded-lg pl-3 pr-8 py-1.5 text-xs font-inter text-slate-600 focus:outline-none cursor-pointer h-9 min-w-[120px]">
                        <option>All statuses</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-slate-400">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </div>
                </div>

                <button class="border border-red-500/80 text-red-500 hover:bg-red-50 text-xs font-semibold px-4 py-1.5 rounded-lg transition-colors flex items-center justify-between gap-2 font-inter h-9 cursor-pointer">
                    <span>Reset Filter</span>
                    <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                </button>
            </div>
        </div>

        <!-- Recent Bookings Card -->
        <div class="bg-white rounded-2xl p-6 border border-slate-200/80 shadow-xs space-y-6">
            <h3 class="text-lg font-bold text-slate-900 font-heading">Recent Bookings</h3>

            <div class="overflow-x-auto -mx-6 sm:mx-0">
                <div class="inline-block min-w-full align-middle">
                    <table class="min-w-full text-left text-xs font-inter border-collapse">
                        <thead>
                            <tr class="bg-[#F5F2EB] text-[#8C8473] font-semibold">
                                <th scope="col" class="py-3 px-4 rounded-l-lg tracking-wider text-[10px]">NAME</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">ROOM</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">CHURCH</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">ROLE</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">CHECK IN</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">CHECK OUT</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">AMOUNT</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">PAYMENT</th>
                                <th scope="col" class="py-3 px-4 tracking-wider text-[10px]">STATUS</th>
                                <th scope="col" class="py-3 px-4 text-center rounded-r-lg tracking-wider text-[10px]">ACTION</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-semibold text-slate-800">Anthony Silva</td>
                                <td class="py-4 px-4 font-bold text-slate-900">TPH - R01</td>
                                <td class="py-4 px-4 text-slate-500">Holy Redeemer Church</td>
                                <td class="py-4 px-4">
                                    <div class="text-slate-800 font-medium">James Perera</div>
                                    <div class="text-slate-400 text-[10px] mt-0.5">Father</div>
                                </td>
                                <td class="py-4 px-4 text-slate-500">14 Mar 2026</td>
                                <td class="py-4 px-4 text-slate-500">16 Mar 2026</td>
                                <td class="py-4 px-4 font-semibold text-slate-800">LKR 13,200.00</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Due-Payment</span>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Confirmed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer" aria-label="View booking details">
                                        <svg class="w-3.5 h-3.5 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-semibold text-slate-800">Mary Colette</td>
                                <td class="py-4 px-4 font-bold text-slate-900">TPH - R02</td>
                                <td class="py-4 px-4 text-slate-500">Grace Evangelical Fellowship</td>
                                <td class="py-4 px-4">
                                    <div class="text-slate-800 font-medium">Mary Colette</div>
                                    <div class="text-slate-400 text-[10px] mt-0.5">Sister</div>
                                </td>
                                <td class="py-4 px-4 text-slate-500">08 Mar 2026</td>
                                <td class="py-4 px-4 text-slate-500">11 Mar 2026</td>
                                <td class="py-4 px-4 font-semibold text-slate-800">LKR 16,500.00</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Due-Payment</span>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEE2E2] text-[#991B1B] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Pending</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer" aria-label="View booking details">
                                        <svg class="w-3.5 h-3.5 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-semibold text-slate-800">James Perera</td>
                                <td class="py-4 px-4 font-bold text-slate-900">TPH - R03</td>
                                <td class="py-4 px-4 text-slate-500">St. Sebastian's Parish</td>
                                <td class="py-4 px-4">
                                    <div class="text-slate-800 font-medium">James Perera</div>
                                    <div class="text-slate-400 text-[10px] mt-0.5">Father</div>
                                </td>
                                <td class="py-4 px-4 text-slate-500">02 Mar 2026</td>
                                <td class="py-4 px-4 text-slate-500">18 Mar 2026</td>
                                <td class="py-4 px-4 font-semibold text-slate-800">LKR 16,500.00</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Due-Payment</span>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Confirmed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer" aria-label="View booking details">
                                        <svg class="w-3.5 h-3.5 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-semibold text-slate-800">Agnes Fernando</td>
                                <td class="py-4 px-4 font-bold text-slate-900">TPH - R04</td>
                                <td class="py-4 px-4 text-slate-500">Calvary Christian Centre</td>
                                <td class="py-4 px-4">
                                    <div class="text-slate-800 font-medium">James Perera</div>
                                    <div class="text-slate-400 text-[10px] mt-0.5">Father</div>
                                </td>
                                <td class="py-4 px-4 text-slate-500">25 Feb 2026</td>
                                <td class="py-4 px-4 text-slate-500">28 Feb 2026</td>
                                <td class="py-4 px-4 font-semibold text-slate-800">LKR 16,500.00</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Due-Payment</span>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEE2E2] text-[#991B1B] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Pending</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer" aria-label="View booking details">
                                        <svg class="w-3.5 h-3.5 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-semibold text-slate-800">Anthony Silva</td>
                                <td class="py-4 px-4 font-bold text-slate-900">TPH - R05</td>
                                <td class="py-4 px-4 text-slate-500">All Saints Cathedral</td>
                                <td class="py-4 px-4">
                                    <div class="text-slate-800 font-medium">James Perera</div>
                                    <div class="text-slate-400 text-[10px] mt-0.5">Father</div>
                                </td>
                                <td class="py-4 px-4 text-slate-500">20 Feb 2026</td>
                                <td class="py-4 px-4 text-slate-500">22 Feb 2026</td>
                                <td class="py-4 px-4 font-semibold text-slate-800">LKR 3,300.00</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Due-Payment</span>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Confirmed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer" aria-label="View booking details">
                                        <svg class="w-3.5 h-3.5 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="py-4 px-4 font-semibold text-slate-800">Mary Colette</td>
                                <td class="py-4 px-4 font-bold text-slate-900">TPH - R06</td>
                                <td class="py-4 px-4 text-slate-500">New Life Assembly</td>
                                <td class="py-4 px-4">
                                    <div class="text-slate-800 font-medium">Mary Colette</div>
                                    <div class="text-slate-400 text-[10px] mt-0.5">Sister</div>
                                </td>
                                <td class="py-4 px-4 text-slate-500">13 Feb 2026</td>
                                <td class="py-4 px-4 text-slate-500">15 Feb 2026</td>
                                <td class="py-4 px-4 font-semibold text-slate-800">LKR 3,300.00</td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Due-Payment</span>
                                </td>
                                <td class="py-4 px-4">
                                    <span class="bg-[#D1FAE5] text-[#065F46] text-[10px] px-2.5 py-1 rounded-md font-semibold tracking-wide">Confirmed</span>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <button class="inline-flex items-center justify-center p-1.5 rounded-lg border border-slate-200 hover:bg-slate-50 transition-colors cursor-pointer" aria-label="View booking details">
                                        <svg class="w-3.5 h-3.5 text-slate-400 hover:text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Table Footer Pagination / Showing Count -->
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-4 border-t border-slate-100">
                <span class="text-xs text-slate-500 font-inter">Showing <span class="font-semibold text-slate-700">1–6</span> of <span class="font-semibold text-slate-700">47</span> applications</span>
                
                <div class="flex items-center gap-1.5 font-inter">
                    <!-- Prev -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-50 transition-colors cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <!-- Active 1 -->
                    <button class="h-8 w-8 rounded-lg bg-[#13273F] text-white flex items-center justify-center text-xs font-bold shadow-xs cursor-pointer">
                        1
                    </button>
                    <!-- 2 -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors cursor-pointer">
                        2
                    </button>
                    <!-- 3 -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors cursor-pointer">
                        3
                    </button>
                    <!-- ... -->
                    <span class="px-1 text-xs text-slate-400 font-medium">...</span>
                    <!-- 8 -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-xs font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors cursor-pointer">
                        8
                    </button>
                    <!-- Next -->
                    <button class="h-8 w-8 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 hover:text-slate-600 hover:bg-slate-50 transition-colors cursor-pointer">
                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

        </div>

    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
