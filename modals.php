<?php
// components/modals.php
?>
  <!-- Product Detail Modal -->
  <div id="productDetailModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm hidden transition-all duration-300">
    <div class="bg-white max-w-xl w-full rounded-2xl p-6 relative shadow-2xl space-y-4 max-h-[90vh] overflow-y-auto animate-scaleUp">
      <button onclick="document.getElementById('productDetailModal').classList.add('hidden')" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800 transition-colors">✕</button>

      <div class="flex flex-col sm:flex-row gap-4">
        <img id="detailImg" class="w-full sm:w-1/2 h-44 object-cover rounded-xl border shadow-sm" src="" alt="Produk" />
        <div class="space-y-1">
          <span id="detailCategory" class="text-[10px] font-bold bg-emerald-100 text-emerald-800 px-2 py-0.5 rounded uppercase">Kategori</span>
          <h3 id="detailName" class="text-lg font-black text-gray-900">Nama Produk</h3>
          <p id="detailPrice" class="text-base font-extrabold text-emerald-700">Rp 0</p>
          <p class="text-xs text-gray-600 pt-1"><strong>Bahan Aktif:</strong> <span id="detailActive"></span></p>
          <p class="text-xs text-gray-600"><strong>Target:</strong> <span id="detailTarget"></span></p>
        </div>
      </div>

      <div class="border-t pt-3 space-y-2 text-xs">
        <div class="bg-emerald-50 p-3 rounded-xl border border-emerald-200">
          <h4 class="font-bold text-emerald-900 mb-0.5">Petunjuk & Dosis Penggunaan:</h4>
          <p class="font-semibold text-emerald-800 mb-1">Dosis Anjuran: <span id="detailDose"></span></p>
          <p id="detailUsage" class="text-gray-700 leading-relaxed"></p>
        </div>

        <div class="bg-red-50 p-3 rounded-xl border border-red-200">
          <h4 class="font-bold text-red-900 mb-0.5">Efek Samping & Peringatan Keamanan:</h4>
          <p id="detailSafety" class="text-red-700 leading-relaxed"></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Auth Modal -->
  <div id="authModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm hidden transition-all duration-300">
    <div class="glass-card max-w-sm w-full rounded-2xl p-6 relative bg-white border border-cream-200 shadow-2xl space-y-4 animate-scaleUp">
      <button onclick="closeAuthModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-800">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>

      <div class="text-center">
        <div class="w-11 h-11 bg-leaf-100 text-leaf-800 rounded-2xl mx-auto flex items-center justify-center font-bold mb-2 animate-bounce">
          <i data-lucide="user-check" class="w-5 h-5"></i>
        </div>
        <h3 id="authModalTitle" class="text-lg font-bold text-gray-900">Masuk Akun</h3>
        <p id="authModalSub" class="text-xs text-gray-500">Silakan login untuk memproses pesanan</p>
      </div>

      <div class="flex border-b border-cream-200">
        <button id="tabLogin" onclick="switchAuthTab('login')" class="w-1/2 py-2 text-xs font-bold border-b-2 border-leaf-700 text-leaf-800 transition-all">Masuk</button>
        <button id="tabRegister" onclick="switchAuthTab('register')" class="w-1/2 py-2 text-xs font-bold text-gray-400 hover:text-gray-700 transition-all">Daftar Akun</button>
      </div>

      <form id="loginForm" onsubmit="handleLogin(event)" class="space-y-3">
        <div>
          <label class="block text-[11px] font-bold text-gray-700 mb-1">Username / Email</label>
          <input type="text" id="loginUser" required placeholder="admin / pelanggan" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-medium focus:outline-none focus:border-leaf-600 transition-colors" />
        </div>
        <div>
          <label class="block text-[11px] font-bold text-gray-700 mb-1">Password</label>
          <input type="password" id="loginPass" required placeholder="••••••••" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-medium focus:outline-none focus:border-leaf-600 transition-colors" />
        </div>
    
        <button type="submit" class="btn-animated w-full bg-leaf-700 hover:bg-leaf-800 text-white font-bold py-2.5 rounded-xl text-xs shadow-md">
          Masuk Sekarang
        </button>
      </form>

      <form id="registerForm" onsubmit="handleRegister(event)" class="space-y-3 hidden">
        <div>
          <label class="block text-[11px] font-bold text-gray-700 mb-1">Nama Lengkap</label>
          <input type="text" id="regName" required placeholder="Contoh: Pak Izar" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-medium focus:outline-none focus:border-leaf-600 transition-colors" />
        </div>
        <div>
          <label class="block text-[11px] font-bold text-gray-700 mb-1">Username / Email</label>
          <input type="text" id="regUser" required placeholder="izar_kaya" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-medium focus:outline-none focus:border-leaf-600 transition-colors" />
        </div>
        <div>
          <label class="block text-[11px] font-bold text-gray-700 mb-1">Password</label>
          <input type="password" id="regPass" required placeholder="••••••••" class="w-full bg-cream-50 border border-cream-300 rounded-xl px-3 py-2 text-xs font-medium focus:outline-none focus:border-leaf-600 transition-colors" />
        </div>
        <button type="submit" class="btn-animated w-full bg-leaf-700 hover:bg-leaf-800 text-white font-bold py-2.5 rounded-xl text-xs shadow-md">
          Daftar Akun Baru
        </button>
      </form>
    </div>
  </div>

  <!-- Modal Sukses Checkout & ID Pesanan -->
  <div id="orderSuccessModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm hidden transition-all duration-300">
    <div class="bg-white max-w-sm w-full rounded-2xl p-6 relative shadow-2xl space-y-4 text-center animate-scaleUp">
      <div class="w-12 h-12 bg-emerald-100 text-emerald-700 rounded-full flex items-center justify-center mx-auto font-bold text-xl">
        ✓
      </div>
      <h3 class="text-lg font-black text-gray-900">Pesanan Berhasil Dibuat!</h3>
      <p class="text-xs text-gray-600">Simpan <strong>ID Pesanan</strong> Anda di bawah ini untuk melacak status pengiriman secara mandiri:</p>
      
      <div class="bg-emerald-50 border border-emerald-200 p-3 rounded-xl flex items-center justify-between">
        <span id="modalOrderId" class="font-mono text-sm font-bold text-emerald-800 select-all">ORD-XXXX</span>
        <button onclick="copyOrderId()" class="bg-emerald-700 hover:bg-emerald-800 text-white text-[10px] font-bold px-2.5 py-1 rounded-lg transition-colors">Salin</button>
      </div>

      <div class="space-y-2 pt-2">
        <button onclick="document.getElementById('orderSuccessModal').classList.add('hidden')" class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-2 rounded-xl text-xs transition-colors">
          Tutup
        </button>
      </div>
    </div>
  </div>

  <!-- Cart Drawer -->
  <div id="cartDrawer" class="fixed inset-y-0 right-0 z-50 w-full max-w-md bg-white shadow-2xl transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    <div class="p-4 bg-leaf-900 text-white flex items-center justify-between">
      <div class="flex items-center gap-2">
        <i data-lucide="shopping-bag" class="w-5 h-5 text-leaf-300"></i>
        <h3 class="font-black text-sm uppercase tracking-wider">Keranjang Belanja</h3>
      </div>
      <button onclick="toggleCartDrawer(false)" class="p-1 hover:bg-leaf-800 rounded-lg text-cream-200 transition-colors">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>

    <div id="cartItemsList" class="flex-1 overflow-y-auto p-4 divide-y divide-cream-200 space-y-3">
       <!-- Rendered via JS -->
    </div>

    <!-- TAMPILAN CHECKOUT SESUAI GAMBAR ACUAN -->
    <div class="p-4 bg-gray-50 border-t border-gray-200 space-y-4 overflow-y-auto max-h-[60vh]">
      
      <!-- Total Pembayaran -->
      <div class="flex justify-between items-center text-sm font-bold text-gray-800 border-b pb-2">
        <span>Total:</span>
        <span id="cartTotalPrice" class="text-base font-black text-gray-900">Rp 0</span>
      </div>

      <!-- Informasi Pemesan -->
      <div class="space-y-2">
        <label class="block text-xs font-bold text-gray-700 flex items-center gap-1">
          <i data-lucide="user" class="w-3.5 h-3.5"></i> Informasi Pemesan:
        </label>
        <input type="text" id="customerName" placeholder="Nama Pemesan" class="w-full bg-white border border-gray-300 rounded-lg p-2 text-xs focus:outline-none focus:border-leaf-600 transition-colors" />
        <input type="text" id="customerPhone" placeholder="Nomor Telepon/WA (customer_phone)" class="w-full bg-white border border-gray-300 rounded-lg p-2 text-xs focus:outline-none focus:border-leaf-600 transition-colors" />
      </div>

      <!-- Pilih Metode Pembayaran -->
      <div class="space-y-2">
        <label class="block text-xs font-bold text-gray-700 flex items-center gap-1">
          <i data-lucide="wallet" class="w-3.5 h-3.5"></i> Pilih Metode Pembayaran:
        </label>

        <div class="space-y-2 text-xs text-gray-700">
          <!-- Option QRIS -->
          <label class="flex items-center gap-2 p-2 bg-white rounded-lg border border-gray-200 cursor-pointer hover:border-leaf-500 transition-all">
            <input type="radio" name="payMethodRadio" value="qris" checked onchange="togglePaymentDetails()" class="accent-leaf-700" />
            <span class="font-medium">QRIS (GoPay/OVO/ShopeePay/BCA Mobile)</span>
          </label>

          <!-- Detail Container untuk QRIS -->
          <div id="qrisDetail" class="p-3 bg-white border border-gray-200 rounded-xl text-center space-y-2 shadow-sm animate-scaleUp">
            <p class="text-[11px] font-bold text-gray-700">Scan QRIS Agrofarm:</p>
            <div class="bg-white p-2 border rounded-lg inline-block shadow-inner">
              <img src="images/yeyy.png" alt="QRIS Code" class="w-32 h-32 mx-auto hover:scale-105 transition-transform duration-300" />
            </div>
            <p class="text-[10px] text-gray-500 font-medium">Mendukung All m-Banking & E-Wallet</p>
          </div>

          <!-- Option Bank Transfer -->
          <label class="flex items-center gap-2 p-2 bg-white rounded-lg border border-gray-200 cursor-pointer hover:border-leaf-500 transition-all">
            <input type="radio" name="payMethodRadio" value="bank_jago" onchange="togglePaymentDetails()" class="accent-leaf-700" />
            <span class="font-medium">Bank Transfer Jago</span>
          </label>

          <!-- Detail Container untuk Bank Jago -->
          <div id="bankDetail" class="hidden p-3 bg-amber-50 border border-amber-200 rounded-xl space-y-1 text-xs animate-scaleUp">
            <p class="font-bold text-amber-900">Transfer ke Rekening Bank Jago:</p>
            <p class="text-gray-800"><strong>No. Rek:</strong> <span class="font-mono text-sm font-bold text-leaf-800 select-all">100987828923</span></p>
            <p class="text-gray-800"><strong>A.N:</strong> <span class="font-bold">PUTRI ALYA MUKHBITA</span></p>
            <p class="text-[10px] text-gray-500 italic mt-1">*Silakan transfer sesuai total nominal tagihan.</p>
          </div>

          <!-- Option COD -->
          <label class="flex items-center gap-2 p-2 bg-white rounded-lg border border-gray-200 cursor-pointer hover:border-leaf-500 transition-all">
            <input type="radio" name="payMethodRadio" value="cod" onchange="togglePaymentDetails()" class="accent-leaf-700" />
            <span class="font-medium">Bayar di Tempat (Tunai)</span>
          </label>
        </div>
      </div>

      <!-- Button Checkout -->
      <button onclick="checkoutOrderViaWA()" class="btn-animated w-full bg-[#826B7D] hover:bg-[#6c5767] text-white font-bold py-2.5 rounded-xl text-xs shadow-md flex items-center justify-center gap-2">
        <i data-lucide="message-square" class="w-4 h-4"></i>
        <span>Checkout via WhatsApp</span>
      </button>

    </div>
  </div>
