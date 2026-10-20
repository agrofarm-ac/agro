<?php
// components/hero.php
?>
 <section id="hero" class="relative pt-36 pb-12 md:pt-40 md:pb-16 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 animate-fadeUp">
      <div class="text-center max-w-3xl mx-auto space-y-4">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-leaf-100 border border-leaf-500/20 text-leaf-800 text-xs font-bold uppercase tracking-widest shadow-sm animate-floatSlow">
          <i data-lucide="sparkles" class="w-4 h-4 text-leaf-600 animate-spin"></i>
          <span>Toko Obat & Nutrisi Pertanian Modern</span>
        </div>

        <h1 class="text-3xl sm:text-5xl font-black tracking-tight text-leaf-900 leading-tight">
          Panen Melimpah, Bebas Hama <br class="hidden sm:inline" /><span class="text-leaf-600 transition-colors duration-500 hover:text-leaf-500">Solusi Tepat Pertanian Anda</span>
        </h1>

        <p class="text-gray-600 text-xs sm:text-sm max-w-2xl mx-auto font-medium leading-relaxed">
          Solusi perlindungan tanaman terpadu, kalkulator dosis akurat, serta kemudahan transaksi dan penjadwalan pengiriman obat pertanian langsung ke lokasi Anda.
        </p>
      </div>

      <!-- Quick Search Form -->
      <div class="mt-8 max-w-4xl mx-auto glass-card rounded-2xl p-4 shadow-2xl border-leaf-600/20 hover:border-leaf-600/40 transition-all duration-300">
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
          <div class="bg-white p-2.5 rounded-xl border border-cream-200 focus-within:border-leaf-600 transition-colors">
            <label class="block text-[10px] font-bold text-leaf-800 uppercase tracking-wider mb-1 flex items-center gap-1">
              <i data-lucide="search" class="w-3.5 h-3.5 text-leaf-600"></i> Cari Obat / Hama
            </label>
            <input type="text" id="searchKeyword" onkeyup="filterProducts()" placeholder="Contoh: Prevathon, Ulat..." class="w-full bg-transparent text-gray-800 font-medium focus:outline-none placeholder-gray-400 text-xs" />
          </div>

          <div class="bg-white p-2.5 rounded-xl border border-cream-200 focus-within:border-leaf-600 transition-colors">
            <label class="block text-[10px] font-bold text-leaf-800 uppercase tracking-wider mb-1 flex items-center gap-1">
              <i data-lucide="leaf" class="w-3.5 h-3.5 text-leaf-600"></i> Jenis Tanaman
            </label>
            <input type="text" id="searchTanaman" onkeyup="filterProducts()" placeholder="Contoh: Padi, Cabai..." class="w-full bg-transparent text-gray-800 font-medium focus:outline-none placeholder-gray-400 text-xs" />
          </div>

          <div class="flex items-end">
            <button onclick="filterProducts()" class="btn-animated w-full h-[42px] bg-leaf-700 hover:bg-leaf-800 text-cream-50 font-bold rounded-xl shadow-md flex items-center justify-center gap-2 text-xs">
              <i data-lucide="filter" class="w-4 h-4"></i>
              <span>Cari Produk</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
