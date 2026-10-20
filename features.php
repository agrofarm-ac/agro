<?php
// components/features.php
?>
  <!-- Crops Section -->
  <section id="crops" class="py-12 bg-white border-t border-cream-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between mb-6">
        <div>
          <span class="text-leaf-700 text-xs font-extrabold uppercase tracking-widest">Komoditas Tanaman</span>
          <h2 class="text-2xl font-black text-leaf-900">CROPS / TANAMAN</h2>
        </div>
      </div>

      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="glass-card p-4 rounded-xl text-center border-cream-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group cursor-pointer">
          <i data-lucide="wheat" class="w-8 h-8 text-leaf-600 mx-auto mb-2 group-hover:scale-125 transition-transform duration-300"></i>
          <h3 class="font-bold text-xs text-gray-900">Padi (Rice)</h3>
          <p class="text-[10px] text-gray-500 mt-1">Perlindungan dari Sundep & Beluk</p>
        </div>
        <div class="glass-card p-4 rounded-xl text-center border-cream-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group cursor-pointer">
          <i data-lucide="apple" class="w-8 h-8 text-red-500 mx-auto mb-2 group-hover:scale-125 transition-transform duration-300"></i>
          <h3 class="font-bold text-xs text-gray-900">Apple / Buah</h3>
          <p class="text-[10px] text-gray-500 mt-1">Pengendalian Tungau & Jamur</p>
        </div>
        <div class="glass-card p-4 rounded-xl text-center border-cream-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group cursor-pointer">
          <i data-lucide="flame" class="w-8 h-8 text-orange-500 mx-auto mb-2 group-hover:scale-125 transition-transform duration-300"></i>
          <h3 class="font-bold text-xs text-gray-900">Cabai (Chili)</h3>
          <p class="text-[10px] text-gray-500 mt-1">Mencegah Daun Keriting & Antraknosa</p>
        </div>
        <div class="glass-card p-4 rounded-xl text-center border-cream-200 hover:shadow-lg transition-all duration-300 hover:-translate-y-2 group cursor-pointer">
          <i data-lucide="flower" class="w-8 h-8 text-amber-600 mx-auto mb-2 group-hover:scale-125 transition-transform duration-300"></i>
          <h3 class="font-bold text-xs text-gray-900">Bawang Merah</h3>
          <p class="text-[10px] text-gray-500 mt-1">Pengendalian Ulat & Bercak Daun</p>
        </div>
      </div>
    </div>
  </section>
  <!-- PESTS & DISEASES SECTION  -->
  <section id="pests-diseases" class="py-12 bg-cream-50/70 border-t border-cream-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="mb-6">
        <span class="text-leaf-700 text-xs font-extrabold uppercase tracking-widest">Identifikasi Gangguan</span>
        <h2 class="text-2xl font-black text-leaf-900">PESTS & DISEASES (HAMA & PENYAKIT)</h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white p-5 rounded-2xl border border-cream-200 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
          <span class="bg-red-100 text-red-700 font-bold text-[10px] px-2 py-0.5 rounded uppercase">Hama Utama</span>
          <h3 class="font-bold text-xs text-gray-900 mt-2">Ulat Penggerek Batang & Leaf Folder</h3>
          <p class="text-[11px] text-gray-600 mt-1">Merusak jaringan tanaman dari dalam. Solusi tepat: Insektisida Prevathon / Virtako.</p>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-cream-200 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
          <span class="bg-amber-100 text-amber-700 font-bold text-[10px] px-2 py-0.5 rounded uppercase">Penyakit Jamur</span>
          <h3 class="font-bold text-xs text-gray-900 mt-2">Bercak Daun & Jamur Antraknosa</h3>
          <p class="text-[11px] text-gray-600 mt-1">Menyebabkan buah membusuk dan daun menguning. Solusi tepat: Fungisida Amistartop / Nativo.</p>
        </div>

        <div class="bg-white p-5 rounded-2xl border border-cream-200 shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
          <span class="bg-purple-100 text-purple-700 font-bold text-[10px] px-2 py-0.5 rounded uppercase">Vektor Virus</span>
          <h3 class="font-bold text-xs text-gray-900 mt-2">Thrips & Tungau Merah</h3>
          <p class="text-[11px] text-gray-600 mt-1">Menghisap cairan daun pemicu keriting. Solusi tepat: Akarisida Samite.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Dose Calculator Section -->
 <section id="dose-calculator" class="py-12 bg-cream-100 border-t border-cream-200">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-xl mx-auto mb-8">
        <span class="text-red-600 text-xs font-extrabold uppercase tracking-widest">Fitur Dosis Tepat</span>
        <h2 class="text-2xl font-black text-leaf-900 mt-1">DOSE CALCULATOR</h2>
        <p class="text-xs text-gray-600 mt-1">Hitung kebutuhan dosis obat, volume semprot, dan perkiraan tangki untuk lahan Anda.</p>
      </div>

      <!-- Form Kalkulator Dosis -->
      <div class="glass-card bg-white p-6 rounded-2xl shadow-xl border-leaf-700/20 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <div>
            <label class="block text-xs font-bold text-gray-700 mb-1">Select Crop *</label>
            <select id="calcCrop" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-semibold focus:outline-none focus:border-leaf-600 transition-colors">
              <option value="Padi">Padi Sawah</option>
              <option value="Cabai">Cabai</option>
              <option value="Bawang">Bawang Merah</option>
              <option value="Jagung">Jagung</option>
              <option value="Apple">Apple / Apel</option>
              <option value="Tomat">Tomat</option>
            </select>
          </div>

          <div>
            <label class="block text-xs font-bold text-gray-700 mb-1">Select Product *</label>
            <select id="calcProduct" onchange="updateCalcDosageInfo()" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-semibold focus:outline-none focus:border-leaf-600 transition-colors">
              <!-- Dynamic -->
            </select>
          </div>

          <div>
            <label class="block text-xs font-bold text-gray-700 mb-1">Enter Area (Hectares) *</label>
            <input type="number" id="calcArea" value="2" min="0.1" step="0.1" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-bold focus:outline-none focus:border-leaf-600 transition-colors" />
          </div>

          <div>
            <label class="block text-xs font-bold text-gray-700 mb-1">Tank Capacity (Liters) *</label>
            <select id="calcTankCap" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-semibold focus:outline-none focus:border-leaf-600 transition-colors">
              <option value="16">16 Liters</option>
              <option value="15">15 Liters</option>
              <option value="20">20 Liters</option>
            </select>
          </div>

          <div>
            <label class="block text-xs font-bold text-gray-500 mb-1">Dosage (Per Hectare)</label>
            <input type="text" id="calcDosageHa" value="1.00 L/Hectare" readonly class="w-full bg-gray-100 border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-gray-600" />
          </div>

          <div>
            <label class="block text-xs font-bold text-gray-500 mb-1">Spray Volume (Per Hectare)</label>
            <input type="text" id="calcSprayVol" value="500.00 L/Hectare" readonly class="w-full bg-gray-100 border border-gray-200 rounded-xl px-3 py-2 text-xs font-bold text-gray-600" />
          </div>
        </div>

        <button onclick="calculateDose()" class="btn-animated bg-red-600 hover:bg-red-700 text-white font-extrabold px-6 py-2.5 rounded-xl text-xs uppercase tracking-wider shadow-md">
          CALCULATE
        </button>

        <!-- Output Hasil Kalkulasi -->
        <div id="calcResults" class="border-t border-cream-200 pt-6 space-y-3">
          <div class="flex justify-between items-center text-xs sm:text-sm font-bold border-b pb-2">
            <span class="text-gray-700">Total Quantity:</span>
            <span id="resTotalQty" class="text-leaf-800 text-base font-black">2.00 L</span>
          </div>

          <div class="flex justify-between items-center text-xs sm:text-sm font-bold border-b pb-2">
            <span class="text-gray-700">Total # Tank Load:</span>
            <span id="resTotalTanks" class="text-leaf-800 text-base font-black">62.50 Tanks</span>
          </div>

          <div class="flex justify-between items-center text-xs sm:text-sm font-bold border-b pb-2">
            <span class="text-gray-700">Dose / 16 L Tank Load:</span>
            <span id="resDosePerTank" class="text-leaf-800 text-base font-black">0.032 L (32 ml)</span>
          </div>

          <div class="pt-2 text-[11px] text-gray-500 space-y-1">
            <p class="font-bold text-gray-800">Product Application Guide:</p>
            <p>• Kindly read the product label carefully before use and follow the instructions.</p>
            <p>• Please do not use a product on crop(s) other than mentioned in the label.</p>
            <p>• Since the usage of this product is beyond our control, we do not give any assurance except the uniform quality of the product.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Live Tracking Section -->
  <section id="tracking-section" class="py-12 bg-white border-t border-cream-200">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
      <div class="text-center">
        <span class="text-emerald-700 text-xs font-extrabold uppercase tracking-widest">Cek Pengiriman</span>
        <h2 class="text-2xl font-black text-gray-900 mt-1">PELACAKAN PENGIRIMAN</h2>
        <p class="text-xs text-gray-600 mt-1">Lacak posisi dan status pengiriman produk pertanian Anda secara real-time menggunakan ID Pesanan.</p>
      </div>
      
      <div class="flex flex-col sm:flex-row gap-2 mt-4">
        <input type="text" id="trackOrderIdInput" placeholder="Masukkan ID Pesanan (Contoh: ORD-9021)" class="flex-1 bg-cream-50 border border-cream-300 rounded-xl px-4 py-2.5 text-xs font-bold uppercase focus:outline-none focus:border-leaf-600 transition-colors" />
        <button onclick="trackOrder()" class="btn-animated bg-emerald-700 hover:bg-emerald-800 text-white font-bold px-6 py-2.5 rounded-xl text-xs shadow-sm">Lacak Pesanan</button>
      </div>

      <div id="trackingResult" class="hidden p-5 border rounded-2xl bg-cream-50 space-y-3 shadow-sm border-cream-200 transition-all duration-300">
        <div class="flex justify-between items-center border-b border-cream-200 pb-2">
          <div>
            <span id="resTrackId" class="font-extrabold text-sm text-emerald-900">ORD-XXXX</span>
            <p class="text-xs text-gray-600 mt-0.5">Pemesan: <span id="resTrackUser" class="font-bold text-gray-800">-</span></p>
          </div>
          <span id="resTrackStatus" class="px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800">Status</span>
        </div>

        <div class="text-xs space-y-1 text-gray-700">
          <p><strong>Tanggal Pengiriman:</strong> <span id="resTrackDate">-</span></p>
          <p><strong>Item Produk:</strong> <span id="resTrackItems">-</span></p>
          <p><strong>Total Pembayaran:</strong> <span id="resTrackTotal" class="font-bold text-leaf-800">-</span></p>
        </div>

        <div class="pt-3 border-t border-cream-200 space-y-3 text-xs pl-2 border-l-2 border-emerald-600">
          <div>
            <h4 class="font-bold text-gray-800">Pesanan Diproses</h4>
            <p class="text-[10px] text-gray-500">Pembayaran berhasil dikonfirmasi & disiapkan</p>
          </div>
          <div id="stepShipping">
            <h4 class="font-bold text-gray-800">Dalam Pengiriman Kurir</h4>
            <p class="text-[10px] text-gray-500">Produk dalam perjalanan menuju lokasi Anda</p>
          </div>
          <div id="stepDelivered">
            <h4 class="font-bold text-gray-800">Pesanan Diterima</h4>
            <p class="text-[10px] text-gray-500">Barang telah sampai di lokasi tujuan</p>
          </div>
        </div>

        <!-- Tombol Konfirmasi Pesanan Diterima oleh Pembeli -->
        <div class="pt-3 border-t border-cream-200">
          <button onclick="confirmOrderReceived()" class="btn-animated w-full bg-emerald-700 hover:bg-emerald-800 text-white font-bold py-2 rounded-xl text-xs shadow-sm flex items-center justify-center gap-1.5">
            <i data-lucide="check-circle-2" class="w-4 h-4"></i> Konfirmasi: Pesanan Sudah Diterima
          </button>
        </div>
      </div>
    </div>
  </section>
