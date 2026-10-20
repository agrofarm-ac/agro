<?php
// components/catalog.php
?>
  <!-- About Section -->
   <section id="about" class="py-12 bg-white border-y border-cream-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div class="space-y-4 animate-fadeUp">
          <span class="text-leaf-700 text-xs font-extrabold uppercase tracking-widest">Tentang Kami</span>
          <h2 class="text-3xl font-black text-leaf-900">ABOUT AGROFARM</h2>
          <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
            AGROFARM adalah penyedia sains dan teknologi pertanian terdepan yang berdedikasi membantu para petani meningkatkan produktivitas dan kualitas hasil panen secara berkelanjutan.
          </p>
          <p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
            Kami menghadirkan produk perlindungan tanaman inovatif mulai dari insektisida, fungisida, herbisida, hingga nutrisi tanaman berkualitas tinggi yang didukung oleh teknologi formulasi tepat sasaran.
          </p>
        </div>
        <div class="relative rounded-2xl overflow-hidden shadow-xl border border-cream-200 h-64 md:h-80 group animate-scaleUp">
          <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?auto=format&fit=crop&w=1000&q=80" alt="About Agrofarm" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" />
          <div class="absolute inset-0 bg-gradient-to-t from-leaf-950/80 via-transparent to-transparent flex items-end p-6">
            <p class="text-white font-bold text-sm transform group-hover:translate-y-0 transition-transform duration-300">Menjaga Ketahanan Pangan Melalui Inovasi Pertanian Modern.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Products Catalog -->
  <section id="catalog" class="py-12 relative bg-cream-50/50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-6 gap-4">
        <div>
          <span class="text-leaf-700 text-xs font-extrabold uppercase tracking-widest">Daftar Produk Pertanian</span>
          <h2 class="text-2xl font-black text-leaf-900 mt-0.5">PRODUCTS CATALOG</h2>
        </div>
        <div class="flex flex-wrap gap-2" id="filterTabs">
          <button onclick="filterCategory('all', event)" class="filter-tab active btn-animated bg-leaf-700 text-white font-bold px-3 py-1.5 rounded-xl text-xs">Semua</button>
          <button onclick="filterCategory('Insektisida', event)" class="filter-tab btn-animated bg-white border border-cream-200 text-gray-700 font-semibold px-3 py-1.5 rounded-xl text-xs">Insektisida</button>
          <button onclick="filterCategory('Fungisida', event)" class="filter-tab btn-animated bg-white border border-cream-200 text-gray-700 font-semibold px-3 py-1.5 rounded-xl text-xs">Fungisida</button>
          <button onclick="filterCategory('Herbisida', event)" class="filter-tab btn-animated bg-white border border-cream-200 text-gray-700 font-semibold px-3 py-1.5 rounded-xl text-xs">Herbisida</button>
          <button onclick="filterCategory('Pupuk/Nutrisi', event)" class="filter-tab btn-animated bg-white border border-cream-200 text-gray-700 font-semibold px-3 py-1.5 rounded-xl text-xs">Pupuk/Nutrisi</button>
        </div>
      </div>
      <div id="productGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5"></div>
    </div>
  </section>
