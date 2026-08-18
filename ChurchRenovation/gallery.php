<?php
/**
 * Renovation Gallery Page - Exact Visual Recreation matching Target Image
 * Department of Christian Religious Affairs
 * Church Renovation Information System
 */

$page_title = "Renovation Gallery";

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/sidebar.php';

// Renovation Gallery dataset matching target image records
$gallery_items = [
    [
        'id' => 'GAL-2026-001',
        'name' => "St. Anthony's Church",
        'diocese' => 'Colombo Diocese',
        'province' => 'Western Province',
        'city' => 'Colombo',
        'status' => 'Completed',
        'type' => 'Roof Restoration',
        'before_date' => '15 Jan 2026',
        'after_date' => '24 Oct 2026',
        'photographer' => 'Eng. Ruwan Fernando',
        'photos_count' => 18,
        'description' => 'ComprehensiveBefore and After photographic documentation of the slate roof timber structure replacement and stained glass restoration.'
    ],
    [
        'id' => 'GAL-2026-002',
        'name' => "St. Mary's Cathedral",
        'diocese' => 'Galle Diocese',
        'province' => 'Southern Province',
        'city' => 'Galle',
        'status' => 'In Progress',
        'type' => 'Interior Renovation',
        'before_date' => '02 Feb 2026',
        'after_date' => '18 May 2026',
        'photographer' => 'Arch. Anura Silva',
        'photos_count' => 24,
        'description' => 'Interior altar plaster preservation and historic ceiling painting rehabilitation visual progression.'
    ],
    [
        'id' => 'GAL-2026-003',
        'name' => 'Holy Trinity Church',
        'diocese' => 'Negombo Diocese',
        'province' => 'Western Province',
        'city' => 'Negombo',
        'status' => 'Completed',
        'type' => 'Bell Tower Repair',
        'before_date' => '10 Jan 2026',
        'after_date' => '12 Aug 2026',
        'photographer' => 'Eng. Samantha Perera',
        'photos_count' => 14,
        'description' => 'Bell tower masonry crack repair and bronze bell mounting mechanical refurbishment photography.'
    ],
    [
        'id' => 'GAL-2026-004',
        'name' => 'Sacred Heart Church',
        'diocese' => 'Kalutara Diocese',
        'province' => 'Western Province',
        'city' => 'Kalutara',
        'status' => 'Planned',
        'type' => 'Structural Preservation',
        'before_date' => '05 Dec 2025',
        'after_date' => 'Pending Start',
        'photographer' => 'Eng. Nimal Jayawardena',
        'photos_count' => 8,
        'description' => 'Baseline condition assessment gallery prior to foundation underpinning and damp-proof course installation.'
    ],
    [
        'id' => 'GAL-2026-005',
        'name' => "St. Sebastian's Church",
        'diocese' => 'Kandy Diocese',
        'province' => 'Central Province',
        'city' => 'Kandy',
        'status' => 'In Progress',
        'type' => 'Facade Restoration',
        'before_date' => '12 Apr 2026',
        'after_date' => '30 Jul 2026',
        'photographer' => 'Arch. Malini Wickramasinghe',
        'photos_count' => 20,
        'description' => 'Front stone facade laser cleaning and historic ornamental archway pointing visual log.'
    ],
    [
        'id' => 'GAL-2026-006',
        'name' => "St. Joseph's Shrine",
        'diocese' => 'Jaffna Diocese',
        'province' => 'Northern Province',
        'city' => 'Jaffna',
        'status' => 'Planned',
        'type' => 'Roof Restoration',
        'before_date' => '01 May 2026',
        'after_date' => 'Pending Start',
        'photographer' => 'Eng. K. Balasubramaniam',
        'photos_count' => 6,
        'description' => 'Pre-restoration inspection survey imagery documenting tile decay and timber beam termite infestation.'
    ]
];
?>

<!-- Main Content Container -->
<main class="flex-1 overflow-y-auto p-3.5 sm:p-6 lg:p-8 bg-[#FDFBF9]">
    <div class="max-w-[1600px] mx-auto space-y-6">
        
        <!-- Breadcrumb & Page Heading -->
        <div>
            <span class="text-xs font-normal text-slate-400 font-inter">Home / Renovation Gallery</span>
            <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-heading tracking-tight mt-0.5">Renovation Gallery</h2>
        </div>

        <!-- Filter Controls & View Toggle Bar -->
        <div class="space-y-2">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <div class="flex flex-wrap items-center gap-3 flex-1">
                    <!-- Search Field -->
                    <div class="relative flex-1 min-w-[240px]">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                        <input type="text" id="gallery-search-input" placeholder="Search name, or diocese…" class="w-full pl-9 pr-3 py-2 bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-800 placeholder:text-slate-400 focus:bg-white focus:outline-none focus:border-slate-300 transition-all shadow-xs">
                    </div>

                    <!-- All Types Dropdown -->
                    <div class="relative">
                        <select id="gallery-type-filter" class="appearance-none [background-image:none] bg-white border border-slate-200 rounded-lg text-xs font-inter text-slate-700 py-2 pl-3 pr-8 focus:outline-none focus:border-slate-300 cursor-pointer shadow-xs whitespace-nowrap">
                            <option value="">All types</option>
                            <option value="Roof Restoration">Roof Restoration</option>
                            <option value="Interior Renovation">Interior Renovation</option>
                            <option value="Bell Tower Repair">Bell Tower Repair</option>
                            <option value="Structural Preservation">Structural Preservation</option>
                            <option value="Facade Restoration">Facade Restoration</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-2.5 text-slate-400">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                        </div>
                    </div>

                    <!-- Reset Filter Button -->
                    <button id="gallery-reset-btn" class="border border-rose-200 text-rose-600 hover:bg-rose-50 px-3 py-2 rounded-lg text-xs font-medium font-inter inline-flex items-center gap-1 transition-colors cursor-pointer shadow-xs whitespace-nowrap">
                        Reset Filter
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                </div>

                <!-- Grid / List Toggle Buttons -->
                <div class="flex items-center gap-1 font-inter">
                    <button id="gallery-toggle-grid" class="bg-secondary text-white px-3 py-1.5 rounded-lg text-xs font-semibold inline-flex items-center gap-1.5 shadow-xs cursor-pointer transition-colors">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                        Grid
                    </button>
                    <button id="gallery-toggle-list" class="bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium inline-flex items-center gap-1.5 transition-colors cursor-pointer shadow-xs">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        List
                    </button>
                </div>
            </div>

            <!-- Records Count Subtext -->
            <div id="gallery-counter-text" class="text-right text-[11px] text-slate-400 font-inter">
                Showing <?= count(array_slice($gallery_items, 0, 4)) ?> of 12 records
            </div>
        </div>

        <!-- Renovation Gallery Cards Grid Container -->
        <div id="gallery-grid-view" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5 items-stretch">
            <?php foreach (array_slice($gallery_items, 0, 4) as $item): ?>
                <div class="gallery-card-item bg-white rounded-xl border border-slate-200/80 shadow-xs flex flex-col justify-between overflow-hidden group hover:border-slate-300 transition-all"
                     data-name="<?= e(strtolower($item['name'])) ?>"
                     data-diocese="<?= e(strtolower($item['diocese'])) ?>"
                     data-type="<?= e($item['type']) ?>">
                    <div>
                        <!-- Split Photo Header Area (Before / After Visual Container) -->
                        <div class="relative bg-[#F8FAFC] border-b border-slate-200/80 h-36 flex items-center overflow-hidden">
                            <!-- Background Subtle Grid Blueprint Pattern -->
                            <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:12px_12px] opacity-40"></div>
                            
                            <!-- Left Half (Before Photo Container) -->
                            <div class="relative flex-1 h-full border-r border-slate-200/60 p-3 flex flex-col justify-between items-start bg-slate-100/50">
                                <span class="bg-rose-50 border border-rose-200/70 text-rose-600 text-[10px] px-2 py-0.5 rounded-full font-medium font-inter z-10 shadow-2xs">
                                    Before
                                </span>
                                <div class="w-full flex items-center justify-center text-slate-300 group-hover:text-slate-400 transition-colors my-auto">
                                    <svg class="w-8 h-8 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Right Half (After Photo Container) -->
                            <div class="relative flex-1 h-full p-3 flex flex-col justify-between items-start bg-emerald-50/20">
                                <span class="bg-rose-50 border border-rose-200/70 text-rose-600 text-[10px] px-2 py-0.5 rounded-full font-medium font-inter z-10 shadow-2xs">
                                    After
                                </span>
                                <div class="w-full flex items-center justify-center text-slate-300 group-hover:text-emerald-500/50 transition-colors my-auto">
                                    <svg class="w-8 h-8 opacity-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Content Details -->
                        <div class="p-5 space-y-3 font-inter">
                            <div>
                                <h3 class="font-bold text-slate-900 font-heading text-sm group-hover:text-primary transition-colors"><?= e($item['name']) ?></h3>
                                <p class="text-[11px] text-slate-400 mt-0.5"><?= e($item['diocese']) ?></p>
                            </div>

                            <div>
                                <?php if ($item['status'] === 'Completed'): ?>
                                    <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                        Completed
                                    </span>
                                <?php elseif ($item['status'] === 'In Progress'): ?>
                                    <span class="bg-[#EFF6FF] text-[#1E40AF] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                                        In Progress
                                    </span>
                                <?php else: ?>
                                    <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                        Planned
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="p-5 pt-0">
                        <button onclick="openGalleryModal('<?= e($item['id']) ?>')" class="w-full bg-secondary hover:bg-secondary-dark text-white text-xs font-semibold py-2.5 px-4 rounded-lg inline-flex items-center justify-center transition-colors shadow-xs cursor-pointer">
                            View Full Details
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Gallery List View Table Container (Hidden by Default) -->
        <div id="gallery-list-view" class="bg-white rounded-xl border border-slate-200/80 shadow-xs overflow-hidden hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs font-inter border-collapse min-w-[850px]">
                    <thead>
                        <tr class="bg-[#F7F4EE] text-slate-500 font-semibold uppercase tracking-wider text-[10px] border-b border-[#EAE5D9]">
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Gallery ID</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Church & Diocese</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Renovation Type</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Status</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Initial Photo Date</th>
                            <th scope="col" class="py-3.5 px-5 whitespace-nowrap">Photos Count</th>
                            <th scope="col" class="py-3.5 px-5 text-right whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200/70">
                        <?php foreach ($gallery_items as $item): ?>
                            <tr class="gallery-list-row hover:bg-slate-50/70 transition-colors"
                                data-name="<?= e(strtolower($item['name'])) ?>"
                                data-diocese="<?= e(strtolower($item['diocese'])) ?>"
                                data-type="<?= e($item['type']) ?>">
                                <td class="py-3.5 px-5 font-mono text-slate-500 font-medium whitespace-nowrap">
                                    <?= e($item['id']) ?>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap">
                                    <div class="font-semibold text-slate-900 font-heading text-xs"><?= e($item['name']) ?></div>
                                    <div class="text-[11px] text-slate-400"><?= e($item['diocese']) ?></div>
                                </td>
                                <td class="py-3.5 px-5 text-slate-700 font-medium whitespace-nowrap">
                                    <?= e($item['type']) ?>
                                </td>
                                <td class="py-3.5 px-5 whitespace-nowrap">
                                    <?php if ($item['status'] === 'Completed'): ?>
                                        <span class="bg-[#ECFDF5] text-[#065F46] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#10B981]"></span>
                                            Completed
                                        </span>
                                    <?php elseif ($item['status'] === 'In Progress'): ?>
                                        <span class="bg-[#EFF6FF] text-[#1E40AF] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#3B82F6]"></span>
                                            In Progress
                                        </span>
                                    <?php else: ?>
                                        <span class="bg-[#FEF3C7] text-[#92400E] text-[11px] px-2.5 py-0.5 rounded-full font-medium inline-flex items-center gap-1.5 whitespace-nowrap">
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#D97706]"></span>
                                            Planned
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="py-3.5 px-5 text-slate-600 whitespace-nowrap">
                                    <?= e($item['before_date']) ?>
                                </td>
                                <td class="py-3.5 px-5 text-slate-700 font-medium whitespace-nowrap">
                                    <?= e($item['photos_count']) ?> Photos
                                </td>
                                <td class="py-3.5 px-5 text-right whitespace-nowrap">
                                    <button onclick="openGalleryModal('<?= e($item['id']) ?>')" class="bg-secondary hover:bg-secondary-dark text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition-colors shadow-2xs cursor-pointer">
                                        View Full Details
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</main>

<!-- Gallery Detail High-Res Modal Dialog -->
<div id="gallery-detail-modal" class="fixed inset-0 z-50 items-center justify-center bg-slate-950/60 backdrop-blur-xs hidden p-4" aria-modal="true" role="dialog">
    <div class="bg-white rounded-2xl border border-slate-200 shadow-2xl max-w-2xl w-full overflow-hidden flex flex-col max-h-[90vh] animate-in fade-in zoom-in duration-200">
        
        <!-- Modal Header -->
        <div class="px-6 py-4 bg-slate-50 border-b border-slate-200 flex items-center justify-between">
            <div>
                <span id="modal-gallery-id" class="text-[10px] font-mono text-slate-400 uppercase tracking-wider font-semibold">GAL-2026-001</span>
                <h3 id="modal-gallery-title" class="text-lg font-bold text-slate-900 font-heading">St. Anthony's Church</h3>
            </div>
            <button onclick="closeGalleryModal()" class="p-1.5 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-200/60 transition-colors cursor-pointer" aria-label="Close modal">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>

        <!-- Modal Body Content -->
        <div class="p-6 overflow-y-auto space-y-6 text-xs font-inter">
            
            <!-- Before & After Large Visual Comparison Frame -->
            <div>
                <div class="flex items-center justify-between mb-2">
                    <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide font-heading">Photographic Comparison Log</p>
                    <span id="modal-gallery-photos-count" class="bg-slate-100 text-slate-600 text-[10px] px-2 py-0.5 rounded-full font-medium">18 Photos Logged</span>
                </div>
                <div class="grid grid-cols-2 gap-3 h-52 rounded-xl overflow-hidden border border-slate-200">
                    <div class="bg-slate-100 p-4 flex flex-col justify-between items-start relative border-r border-slate-200">
                        <span class="bg-rose-50 border border-rose-200 text-rose-600 text-[10px] px-2 py-0.5 rounded-full font-medium">Before Renovation</span>
                        <div class="w-full text-center text-slate-400 text-xs my-auto font-medium">
                            Initial Site Survey Photo
                            <span id="modal-gallery-before-date" class="block text-[10px] text-slate-400 mt-0.5">15 Jan 2026</span>
                        </div>
                    </div>
                    <div class="bg-emerald-50/40 p-4 flex flex-col justify-between items-start relative">
                        <span class="bg-emerald-50 border border-emerald-200 text-emerald-700 text-[10px] px-2 py-0.5 rounded-full font-medium">After / Current State</span>
                        <div class="w-full text-center text-emerald-600 text-xs my-auto font-medium">
                            Restoration Completed Photo
                            <span id="modal-gallery-after-date" class="block text-[10px] text-emerald-600 mt-0.5">24 Oct 2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Specs Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 bg-slate-50/70 p-4 rounded-xl border border-slate-200/80">
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Diocese</span>
                    <p id="modal-gallery-diocese" class="font-medium text-slate-800 mt-0.5">Colombo Diocese</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Renovation Type</span>
                    <p id="modal-gallery-type" class="font-medium text-slate-800 mt-0.5">Roof Restoration</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Status</span>
                    <p id="modal-gallery-status" class="font-medium text-emerald-600 mt-0.5">Completed</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">City / Province</span>
                    <p id="modal-gallery-location" class="font-medium text-slate-800 mt-0.5">Colombo, Western Province</p>
                </div>
                <div>
                    <span class="text-[10px] font-semibold text-slate-400 uppercase">Logged By</span>
                    <p id="modal-gallery-photographer" class="font-medium text-slate-800 mt-0.5">Eng. Ruwan Fernando</p>
                </div>
            </div>

            <!-- Description -->
            <div>
                <p class="text-[11px] font-semibold text-slate-400 uppercase tracking-wide mb-1 font-heading">Photographic Survey Notes</p>
                <p id="modal-gallery-desc" class="text-slate-600 leading-relaxed">
                    Comprehensive Before and After photographic documentation of the slate roof timber structure replacement and stained glass restoration.
                </p>
            </div>

        </div>

        <!-- Modal Footer -->
        <div class="px-6 py-3.5 bg-slate-50 border-t border-slate-200 flex justify-end">
            <button onclick="closeGalleryModal()" class="bg-slate-200 hover:bg-slate-300 text-slate-700 px-4 py-2 rounded-lg font-medium text-xs transition-colors cursor-pointer">
                Close
            </button>
        </div>
    </div>
</div>

<!-- Client-side Interactive Scripting -->
<script>
    const galleryItemsData = <?= json_encode($gallery_items) ?>;

    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('gallery-search-input');
        const typeFilter = document.getElementById('gallery-type-filter');
        const resetBtn = document.getElementById('gallery-reset-btn');
        const gridViewBtn = document.getElementById('gallery-toggle-grid');
        const listViewBtn = document.getElementById('gallery-toggle-list');
        const gridContainer = document.getElementById('gallery-grid-view');
        const listContainer = document.getElementById('gallery-list-view');
        const recordsCounter = document.getElementById('gallery-counter-text');

        // View Switcher
        gridViewBtn.addEventListener('click', () => {
            gridContainer.classList.remove('hidden');
            listContainer.classList.add('hidden');

            gridViewBtn.className = "bg-secondary text-white px-3 py-1.5 rounded-lg text-xs font-semibold inline-flex items-center gap-1.5 shadow-xs cursor-pointer transition-colors";
            listViewBtn.className = "bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium inline-flex items-center gap-1.5 transition-colors cursor-pointer shadow-xs";
        });

        listViewBtn.addEventListener('click', () => {
            listContainer.classList.remove('hidden');
            gridContainer.classList.add('hidden');

            listViewBtn.className = "bg-secondary text-white px-3 py-1.5 rounded-lg text-xs font-semibold inline-flex items-center gap-1.5 shadow-xs cursor-pointer transition-colors";
            gridViewBtn.className = "bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium inline-flex items-center gap-1.5 transition-colors cursor-pointer shadow-xs";
        });

        // Filter and Search Logic
        function filterGallery() {
            const query = searchInput.value.toLowerCase().trim();
            const selectedType = typeFilter.value;

            let visibleCount = 0;

            const gridItems = document.querySelectorAll('.gallery-card-item');
            gridItems.forEach(item => {
                const name = item.getAttribute('data-name');
                const diocese = item.getAttribute('data-diocese');
                const type = item.getAttribute('data-type');

                const matchesQuery = !query || name.includes(query) || diocese.includes(query);
                const matchesType = !selectedType || type === selectedType;

                if (matchesQuery && matchesType) {
                    item.classList.remove('hidden');
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });

            const listRows = document.querySelectorAll('.gallery-list-row');
            listRows.forEach(row => {
                const name = row.getAttribute('data-name');
                const diocese = row.getAttribute('data-diocese');
                const type = row.getAttribute('data-type');

                const matchesQuery = !query || name.includes(query) || diocese.includes(query);
                const matchesType = !selectedType || type === selectedType;

                if (matchesQuery && matchesType) {
                    row.classList.remove('hidden');
                } else {
                    row.classList.add('hidden');
                }
            });

            recordsCounter.textContent = `Showing ${visibleCount} of ${gridItems.length} records`;
        }

        searchInput.addEventListener('input', filterGallery);
        typeFilter.addEventListener('change', filterGallery);

        resetBtn.addEventListener('click', () => {
            searchInput.value = '';
            typeFilter.value = '';
            filterGallery();
        });
    });

    // Modal Control Functions
    function openGalleryModal(id) {
        const item = galleryItemsData.find(g => g.id === id);
        if (!item) return;

        document.getElementById('modal-gallery-id').textContent = item.id;
        document.getElementById('modal-gallery-title').textContent = item.name;
        document.getElementById('modal-gallery-diocese').textContent = item.diocese;
        document.getElementById('modal-gallery-type').textContent = item.type;
        document.getElementById('modal-gallery-status').textContent = item.status;
        document.getElementById('modal-gallery-location').textContent = `${item.city}, ${item.province}`;
        document.getElementById('modal-gallery-photographer').textContent = item.photographer;
        document.getElementById('modal-gallery-before-date').textContent = item.before_date;
        document.getElementById('modal-gallery-after-date').textContent = item.after_date;
        document.getElementById('modal-gallery-photos-count').textContent = `${item.photos_count} Photos Logged`;
        document.getElementById('modal-gallery-desc').textContent = item.description;

        const modal = document.getElementById('gallery-detail-modal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeGalleryModal() {
        const modal = document.getElementById('gallery-detail-modal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }

    // Close modal on Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeGalleryModal();
        }
    });
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
