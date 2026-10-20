<?php
// components/admin.php
?>
  <section id="adminDashboardSection" class="hidden py-10 bg-cream-100 border-b-2 border-leaf-700 transition-all duration-500">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 animate-fadeUp">
      
      <div class="bg-leaf-900 text-white p-6 rounded-2xl flex flex-col md:flex-row md:items-center justify-between gap-4 shadow-lg">
        <div>
          <span class="text-xs font-bold text-leaf-300 uppercase tracking-widest">Panel Kontrol Utama</span>
          <h2 class="text-2xl font-black text-white">Admin Dashboard Agrofarm</h2>
          <p class="text-xs text-cream-200 mt-1">Kelola stok produk, harga, unggah gambar lokal/URL, serta proses & hapus pesanan pelanggan.</p>
        </div>
        <div class="flex items-center gap-2">
          <span class="bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-xs font-bold px-3 py-1 rounded-full flex items-center gap-1">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span> Status: Admin Online
          </span>
        </div>
      </div>

      <!-- TABEL 1: KELOLA PESANAN -->
      <div class="glass-card p-6 rounded-2xl bg-white shadow-md space-y-4">
        <div class="flex items-center justify-between border-b pb-3">
          <h3 class="text-base font-bold text-gray-900 flex items-center gap-2">
            <i data-lucide="package-check" class="w-5 h-5 text-leaf-700"></i>
            Manajemen Transaksi Pesanan Pelanggan
          </h3>
          <span class="text-xs font-medium text-gray-500">Ubah status atau hapus transaksi</span>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-left text-xs border-collapse">
            <thead>
              <tr class="bg-cream-200 text-gray-800 uppercase font-bold">
                <th class="p-3">ID / Pemesan</th>
                <th class="p-3">Tanggal Kirim</th>
                <th class="p-3">Rincian Barang</th>
                <th class="p-3">Total</th>
                <th class="p-3">Status Pengiriman</th>
                <th class="p-3 text-center">Aksi (Admin)</th>
              </tr>
            </thead>
            <tbody id="adminOrdersTable" class="divide-y divide-cream-200">
              <!-- Rendered via JS -->
            </tbody>
          </table>
        </div>
      </div>

      <!-- TABEL 2: KELOLA STOK PRODUK -->
      <div class="glass-card p-6 rounded-2xl bg-white shadow-md space-y-4">
        <div class="flex items-center justify-between border-b pb-3">
          <h3 class="text-base font-bold text-gray-900 flex items-center gap-2">
            <i data-lucide="boxes" class="w-5 h-5 text-leaf-700"></i>
            Manajemen Stok, Harga & Gambar Produk
          </h3>
          <span class="text-xs font-medium text-gray-500">Edit produk atau upload gambar baru dari laptop/HP</span>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-left text-xs border-collapse">
            <thead>
              <tr class="bg-cream-200 text-gray-800 uppercase font-bold">
                <th class="p-3">Gambar</th>
                <th class="p-3">Nama Produk</th>
                <th class="p-3">Harga (Rp)</th>
                <th class="p-3">Stok</th>
                <th class="p-3">Ubah Gambar (File Lokal / URL)</th>
                <th class="p-3 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody id="adminProductsTable" class="divide-y divide-cream-200">
              <!-- Rendered via JS -->
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>
