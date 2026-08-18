<?php
/**
 * User Account & Profile Settings Page
 * Department of Christian Religious Affairs
 * Priesthood Identity / Passport Certification System
 */

$page_title = 'Account Settings';
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <span class="text-xs font-normal text-slate-400 font-inter">Home / System / Account Settings</span>
                <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Account Settings</h2>
            </div>
            
            <!-- Quick Header Save Button -->
            <div class="flex items-center gap-2">
                <button type="button" class="bg-[#4E0000] hover:bg-[#390000] text-white font-medium text-xs px-5 py-2 h-10 sm:h-9 min-h-[40px] rounded-lg flex items-center justify-center gap-2 shadow-xs transition-colors font-inter cursor-pointer">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                    </svg>
                    Save Settings
                </button>
            </div>
        </div>

        <!-- Main Workspace Grid (Left Settings Forms + Right Summary Sidebar) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            
            <!-- Left Column: Settings Configuration Cards (lg:col-span-8) -->
            <div class="lg:col-span-8 space-y-6">
                
                <!-- Card 1: Profile & Personal Information -->
                <div class="bg-[#F7F4EE] rounded-xl p-6 border border-[#EAE5D9] shadow-xs space-y-5 relative overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>

                    <div class="flex items-center justify-between border-b border-[#E3DCCE] pb-4">
                        <div>
                            <h3 class="text-base font-bold text-slate-950 font-heading">Profile Information</h3>
                            <p class="text-xs text-slate-500 font-inter mt-0.5">Manage your personal account details and official staff credentials.</p>
                        </div>
                        <span class="bg-[#F0EAE1] text-[#634E35] border border-[#DCD3C5] rounded-full text-[10px] px-2.5 py-0.5 font-bold uppercase tracking-wider font-heading">
                            Active Administrator
                        </span>
                    </div>

                    <!-- User Avatar Header Bar -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 p-4 rounded-xl bg-white/70 border border-[#E3DCCE]">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 rounded-full bg-primary text-white text-lg font-bold font-heading flex items-center justify-center flex-shrink-0 shadow-xs border-2 border-primary/20">
                                AD
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-slate-900 font-heading">Admin User</h4>
                                <p class="text-xs text-slate-500 font-inter">admin@christianaffairs.gov.lk · Head Office</p>
                            </div>
                        </div>

                        <button type="button" class="border border-[#E3DCCE] bg-white text-slate-700 hover:bg-slate-50 text-xs font-medium px-3.5 py-2 rounded-lg transition-colors font-inter min-h-[40px] shadow-3xs cursor-pointer">
                            Change Photo
                        </button>
                    </div>

                    <!-- Profile Inputs Grid -->
                    <div class="space-y-4 font-inter">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">FULL NAME <span class="text-rose-500">*</span></label>
                                <input type="text" value="Admin User" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">EMAIL ADDRESS <span class="text-rose-500">*</span></label>
                                <input type="email" value="admin@christianaffairs.gov.lk" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">OFFICIAL TELEPHONE</label>
                                <input type="text" value="+94 77 123 4567" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">DESIGNATION / TITLE</label>
                                <input type="text" value="Senior Systems Administrator" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                            </div>
                        </div>

                        <div>
                            <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">ASSIGNED HEADQUARTERS / DIOCESE</label>
                            <input type="text" value="Department Headquarters - Colombo 03" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                        </div>
                    </div>
                </div>

                <!-- Card 2: Security & Password -->
                <div class="bg-[#F7F4EE] rounded-xl p-6 border border-[#EAE5D9] shadow-xs space-y-5 relative overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>

                    <div class="flex items-center justify-between border-b border-[#E3DCCE] pb-4">
                        <div>
                            <h3 class="text-base font-bold text-slate-950 font-heading">Security & Password</h3>
                            <p class="text-xs text-slate-500 font-inter mt-0.5">Update your password and manage login authentication settings.</p>
                        </div>
                        <span class="bg-amber-50 text-amber-800 border border-amber-200/80 rounded-full text-[10px] px-2.5 py-0.5 font-bold uppercase tracking-wider font-heading">
                            Protected Route
                        </span>
                    </div>

                    <div class="space-y-4 font-inter">
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">CURRENT PASSWORD</label>
                                <input type="password" placeholder="••••••••" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">NEW PASSWORD</label>
                                <input type="password" placeholder="Enter new password" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                            </div>
                            <div>
                                <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-wider font-heading mb-1.5">CONFIRM NEW PASSWORD</label>
                                <input type="password" placeholder="Confirm new password" class="w-full rounded-lg bg-white border-[#E3DCCE] text-xs font-inter py-2 px-3 focus:bg-white focus:outline-none focus:ring-1 focus:ring-primary/20 focus:border-[#C5A059] transition-all h-10 sm:h-9 min-h-[44px] text-slate-800">
                            </div>
                        </div>

                        <!-- 2FA Toggle Switch -->
                        <label class="flex items-center justify-between p-4 border border-[#E3DCCE] rounded-xl bg-white/70 cursor-pointer min-h-[50px]">
                            <div>
                                <span class="block font-semibold text-slate-800 text-xs">Enable Two-Factor Authentication (2FA)</span>
                                <span class="block text-[10px] text-slate-500 mt-0.5">Receive a one-time verification code via mobile app</span>
                            </div>
                            <input type="checkbox" checked class="w-5 h-5 text-primary rounded focus:ring-primary cursor-pointer">
                        </label>
                    </div>
                </div>

                <!-- Card 3: Notification Preferences -->
                <div class="bg-[#F7F4EE] rounded-xl p-6 border border-[#EAE5D9] shadow-xs space-y-5 relative overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>

                    <div class="flex items-center justify-between border-b border-[#E3DCCE] pb-4">
                        <div>
                            <h3 class="text-base font-bold text-slate-950 font-heading">Notification Preferences</h3>
                            <p class="text-xs text-slate-500 font-inter mt-0.5">Choose which system updates and approval alerts you receive.</p>
                        </div>
                    </div>

                    <div class="space-y-3 font-inter text-xs">
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-primary rounded focus:ring-primary">
                            <span class="text-slate-700 font-medium">Send email alerts when new priesthood applications are submitted</span>
                        </label>

                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" checked class="w-4 h-4 text-primary rounded focus:ring-primary">
                            <span class="text-slate-700 font-medium">Send notifications for urgent verification and approval reviews</span>
                        </label>
                    </div>
                </div>

            </div>

            <!-- Right Column: Account Summary & Actions Sidebar (lg:col-span-4) -->
            <div class="lg:col-span-4 space-y-6">
                
                <!-- Account Overview Card -->
                <div class="bg-[#F7F4EE] rounded-xl p-6 border border-[#EAE5D9] shadow-xs space-y-4 relative overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-secondary"></div>

                    <div class="flex items-center justify-between border-b border-[#E3DCCE] pb-3">
                        <h3 class="text-sm font-bold text-slate-900 font-heading">Account Overview</h3>
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    </div>

                    <div class="space-y-3 font-inter text-xs">
                        <div class="flex items-center justify-between py-1 border-b border-[#E3DCCE]/60">
                            <span class="text-slate-500">Account Role</span>
                            <span class="font-bold text-primary font-heading">System Administrator</span>
                        </div>
                        <div class="flex items-center justify-between py-1 border-b border-[#E3DCCE]/60">
                            <span class="text-slate-500">Permission Level</span>
                            <span class="font-semibold text-slate-800 font-mono">Level 1 (Full Access)</span>
                        </div>
                        <div class="flex items-center justify-between py-1 border-b border-[#E3DCCE]/60">
                            <span class="text-slate-500">Last Login</span>
                            <span class="font-semibold text-slate-800 font-mono">Today, 10:45 AM</span>
                        </div>
                        <div class="flex items-center justify-between py-1">
                            <span class="text-slate-500">Active Session</span>
                            <span class="font-semibold text-emerald-600 inline-flex items-center gap-1 font-mono">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                </svg>
                                Verified (SSL)
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Form Action Controls Card -->
                <div class="bg-[#F7F4EE] rounded-xl p-6 border border-[#EAE5D9] shadow-xs space-y-4 relative overflow-hidden">
                    <div class="absolute top-0 inset-x-0 h-1 bg-primary"></div>

                    <h3 class="text-sm font-bold text-slate-900 font-heading">Save Changes</h3>
                    <div class="space-y-2.5 font-inter text-xs">
                        <button type="button" class="w-full bg-[#4E0000] hover:bg-[#390000] text-white font-medium py-3 px-4 rounded-lg flex items-center justify-center gap-2 shadow-xs transition-colors min-h-[44px] cursor-pointer">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            Save Settings
                        </button>

                        <button type="button" class="w-full border border-[#E3DCCE] bg-white hover:bg-slate-50 text-slate-700 font-medium py-2.5 px-4 rounded-lg flex items-center justify-center transition-colors min-h-[44px] cursor-pointer">
                            Reset Defaults
                        </button>
                    </div>
                </div>

            </div>

        </div>

    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
