<?php
// index.php
require_once 'config.php';

// 1. Sertakan Header
include 'header.php';

// 2. Sertakan Hero Section
include 'hero.php';

// 3. Sertakan Admin Dashboard Section
include 'admin.php';

// 4. Sertakan Catalog & About
include 'catalog.php';

// 5. Sertakan Fitur Lain (Crops, Kalkulator, Tracking)
include 'features.php';

// 6. Sertakan Retailers & Contact
include 'retailers.php';

// 7. Sertakan Modals & Cart Drawer
include 'modals.php';

// 8. Sertakan news section.php
include 'news.php';

// 9. Sertakan Footer
include 'footers.php';
?>

<!-- JAVASCRIPT LOGIC -->
<script>
  let products = [
    { id: 1, name: "Prevathon 50SC", category: "Insektisida", target: "Ulat Penggerek Batang & Leaf Folder", dose: "1-2 ml/L", doseVal: 1.0, sprayVol: 500, price: 125000, stock: 45, img: "images/prevaton.jpg", activeIngredient: "Klorantraniliprol 50 g/l", usage: "Semprotkan saat populasi ulat mulai terlihat.", safety: "Gunakan masker dan sarung tangan." },
    { id: 2, name: "Amistartop 325SC", category: "Fungisida", target: "Bercak Daun & Jamur Antraknosa", dose: "0.5-1 ml/L", doseVal: 0.5, sprayVol: 400, price: 165000, stock: 30, img: "images/amistar.jpg", activeIngredient: "Azoksistrobin 200g/l + Difenokonazol 125g/l", usage: "Aplikasi preventif sebelum gejala jamur meluas.", safety: "Jauhkan dari sumber air dan perikanan." },
    { id: 3, name: "Gramoxone 276SL", category: "Herbisida", target: "Gulma Daun Lebar & Rumput Sawah", dose: "2-3 L/Ha", doseVal: 2.5, sprayVol: 500, price: 85000, stock: 60, img: "images/gramaxone.jpg", activeIngredient: "Parakuat Diklorida 276 g/l", usage: "Semprotkan merata pada gulma yang sedang tumbuh aktif.", safety: "Sangat beracun, hindari kontak langsung dan tertelan." },
    { id: 4, name: "Gandasil D (Daun)", category: "Pupuk/Nutrisi", target: "Pertumbuhan Vegetatif & Daun Hijau", dose: "10-30 g/16L", doseVal: 1.2, sprayVol: 400, price: 35000, stock: 100, img: "images/g.jpg", activeIngredient: "N 20%, P2O5 15%, K2O 15% + Mikro", usage: "Larutkan dalam air lalu semprotkan ke daun tiap 7-10 hari.", safety: "Simpan di tempat kering dan tertutup rapat." },
    { id: 5, name: "Virtako 300SC", category: "Insektisida", target: "Wereng Coklat & Ulat Grayak", dose: "0.4 ml/L", doseVal: 0.4, sprayVol: 500, price: 180000, stock: 25, img: "images/v.jpg", activeIngredient: "Klorantraniliprol 100g/l + Tiametoksam 200g/l", usage: "Aplikasi sistemik cepat serap untuk pencegahan bertingkat.", safety: "Gunakan alat pelindung diri lengkap." },
    { id: 6, name: "Nativo 75WG", category: "Fungisida", target: "Penyakit Blast Padi & Antraknosa", dose: "100-150 g/Ha", doseVal: 0.15, sprayVol: 400, price: 95000, stock: 50, img: "images/n.jpg", activeIngredient: "Tebukonazol 50% + Trifloksistrobin 25%", usage: "Semprot pada fase bunting dan pembungaan.", safety: "Gunakan masker kain/respirator." },
    { id: 7, name: "TALSTAR 25 EC", category: "Insektisida", target: "Kutu Daun, Hama Thrips & Tungau", dose: "1-2 ml/L", doseVal: 1.0, sprayVol: 500, price: 110000, stock: 40, img: "images/t.jpg", activeIngredient: "Bifentrin 25 g/l", usage: "Semprotkan merata ke seluruh bagian tanaman yang terserang.", safety: "Jauhkan dari ternak dan jangkauan anak-anak." },
    { id: 8, name: "Roundup 486 SL", category: "Herbisida", target: "Gulma Berdaun Sempit & Alang-alang", dose: "3-4 L/Ha", doseVal: 3.5, sprayVol: 500, price: 105000, stock: 75, img: "images/r.jpg", activeIngredient: "Isopropilamina Glifosat 486 g/l", usage: "Semprotkan saat cuaca cerah tanpa hujan 4 jam setelahnya.", safety: "Hindari mengenai tanaman utama." },
    { id: 9, name: "Gandasil B (Buah)", category: "Pupuk/Nutrisi", target: "Pembungaan & Pembuahan Generatif", dose: "20-30 g/16L", doseVal: 1.5, sprayVol: 450, price: 38000, stock: 80, img: "images/gb.jpg", activeIngredient: "N 6%, P2O5 20%, K2O 30% + Mikro", usage: "Disemprotkan pada fase menjelang pembungaan.", safety: "Bila terkena mata, bilas dengan air bersih." },
    { id: 10, name: "Scor 250 EC", category: "Fungisida", target: "Bercak Kering Alternaria & Karat", dose: "0.5 ml/L", doseVal: 0.5, sprayVol: 400, price: 140000, stock: 35, img: "images/s.jpg", activeIngredient: "Difenokonazol 250 g/l", usage: "Aplikasi berkala 7-14 hari sekali sesuai tingkat serangan.", safety: "Gunakan pakaian lengan panjang saat aplikasi." },
    { id: 11, name: "Curacron 500 EC", category: "Insektisida", target: "Ulat Srikaya & Kutu Putih Cabai", dose: "1-1.5 ml/L", doseVal: 1.2, sprayVol: 500, price: 88000, stock: 55, img: "images/c.jpg", activeIngredient: "Profilofos 500 g/l", usage: "Semprot pada pagi/sore hari saat hama aktif.", safety: "Berbau tajam, gunakan masker kain pekat." },
    { id: 12, name: "Samite 135 EC", category: "Insektisida", target: "Tungau Merah & Akarisida Daun", dose: "1 ml/L", doseVal: 0.8, sprayVol: 450, price: 72000, stock: 40, img: "images/sa.jpg", activeIngredient: "Piridaben 135 g/l", usage: "Semprotkan secara merata di bawah permukaan daun.", safety: "Gunakan sarung tangan karet." },
    { id: 13, name: "Kocide 77 WP", category: "Fungisida", target: "Bakteri Blight & Jamur Embun", dose: "1.5-2 g/L", doseVal: 1.0, sprayVol: 400, price: 92000, stock: 30, img: "images/ko.jpg", activeIngredient: "Tembaga Hidroksida 77%", usage: "Campurkan dengan air bersih hingga terlarut sempurna.", safety: "Sangat korosif, bersihkan sprayer setelah digunakan." },
    { id: 14, name: "Lindomin 865 SL", category: "Herbisida", target: "Gulma Enceng Gondok & Daun Lebar", dose: "1-1.5 L/Ha", doseVal: 1.2, sprayVol: 500, price: 68000, stock: 50, img: "images/li.jpg", activeIngredient: "2,4-D Dimetil Amina 865 g/l", usage: "Gunakan pada gulma daun lebar di pertanaman padi.", safety: "Hindari kontak langsung dengan kulit." },
    { id: 15, name: "Regent 50 RED", category: "Insektisida", target: "Pelindung Benih & Hama Anai-Anai", dose: "2-4 ml/kg benih", doseVal: 0.6, sprayVol: 400, price: 115000, stock: 45, img: "images/re.jpg", activeIngredient: "Fipronil 50 g/l", usage: "Campurkan secara merata pada benih sebelum tanam.", safety: "Simpan dalam wadah asli bertutup rapat." },
    { id: 16, name: "MKP Pak Tani", category: "Pupuk/Nutrisi", target: "Penguat Akar, Bunga & Ketahanan", dose: "2-4 g/L", doseVal: 2.0, sprayVol: 400, price: 62000, stock: 90, img: "images/mpk.jpg", activeIngredient: "P2O5 52%, K2O 34%", usage: "Dapat dikocor atau disemprotkan langsung.", safety: "Tidak berbahaya bila digunakan sesuai anjuran." },
    { id: 17, name: "Antracol 70 WP", category: "Fungisida", target: "Bercak Daun & Pencegah Jamur Embun", dose: "2 g/L", doseVal: 1.5, sprayVol: 450, price: 82000, stock: 65, img: "images/an.jpg", activeIngredient: "Propineb 70%", usage: "Semprotkan merata sejak tanaman berumur muda.", safety: "Gunakan kacamata pelindung saat pengadukan." },
    { id: 18, name: "Dursban 200 EC", category: "Insektisida", target: "Ulat Tanah & Kutu Kebul", dose: "1.5-2 ml/L", doseVal: 1.5, sprayVol: 500, price: 78000, stock: 40, img: "images/ds.jpg", activeIngredient: "Klorpirifos 200 g/l", usage: "Siramkan atau semprot di sekitar pangkal batang.", safety: "Sangat berbahaya bagi organisme air." },
    { id: 19, name: "Ally Plus 77 WG", category: "Herbisida", target: "Gulma Paku-Pakuan & Teki Sawah", dose: "300-600 g/Ha", doseVal: 0.5, sprayVol: 400, price: 45000, stock: 85, img: "images/al.jpg", activeIngredient: "Etsulfuron-metil + Metsulfuron-metil + 2,4-D", usage: "Tabur/semprot saat gulma berdaun 2-4 lembar.", safety: "Bersihkan kaki dan tangan setelah penggunaan." },
    { id: 20, name: "KN3 Merah (Kalium Nitrat)", category: "Pupuk/Nutrisi", target: "Memperbesar Ukuran Buah & Umbi", dose: "2-5 g/L", doseVal: 2.5, sprayVol: 450, price: 58000, stock: 70, img: "images/kno.jpg", activeIngredient: "N 15%, K2O 14%", usage: "Aplikasi kocor/spray saat fase pembentukan buah.", safety: "Jauhkan dari bahan yang mudah terbakar." }
  ];

  let cart = [];
  let currentUser = null;
  let orders = [{ id: "ORD-9021", user: "Pak Izar", date: "2026-09-28", items: "Prevathon 50SC (x2)", total: 250000, status: "Dikirim", method: "QRIS" }];

  document.addEventListener("DOMContentLoaded", () => {
    if (window.lucide) lucide.createIcons();
    renderProducts(products);
    populateDoseCalculatorProducts();
    updateCartUI();
  });

  function renderProducts(items) {
    const grid = document.getElementById("productGrid");
    if (!grid) return;
    grid.innerHTML = "";

    if (items.length === 0) {
      grid.innerHTML = `<div class="col-span-full text-center py-8 text-gray-500 font-bold text-xs animate-fadeUp">Produk tidak ditemukan.</div>`;
      return;
    }

    items.forEach((p, index) => {
      grid.innerHTML += `
        <div class="glass-card bg-white rounded-2xl overflow-hidden shadow-sm product-card flex flex-col justify-between border border-cream-200 animate-fadeUp" style="animation-delay: ${index * 0.05}s">
          <div>
            <div class="h-44 overflow-hidden relative bg-gray-100 group cursor-pointer" onclick="showProductDetails(${p.id})">
              <img src="${p.img}" alt="${p.name}" class="w-full h-full object-cover" />
              <span class="absolute top-2 left-2 bg-leaf-700 text-white text-[9px] font-black uppercase px-2 py-0.5 rounded-md shadow">${p.category}</span>
            </div>
            <div class="p-4 space-y-2">
              <h3 class="font-bold text-sm text-gray-900 line-clamp-1 cursor-pointer hover:text-leaf-700 transition-colors" onclick="showProductDetails(${p.id})">${p.name}</h3>
              <p class="text-[11px] text-gray-500"><strong class="text-leaf-800">Target:</strong> ${p.target}</p>
              <p class="text-[11px] text-gray-500"><strong class="text-leaf-800">Dosis Rekomendasi:</strong> ${p.dose}</p>
              <div class="flex items-center justify-between pt-1">
                <span class="text-xs text-gray-500 font-medium">Stok: <span class="font-bold text-gray-800">${p.stock}</span></span>
                <span class="text-sm font-extrabold text-leaf-700">Rp ${p.price.toLocaleString('id-ID')}</span>
              </div>
            </div>
          </div>
          <div class="p-4 pt-0">
            <button onclick="addToCart(${p.id})" class="btn-animated w-full bg-cream-100 hover:bg-leaf-700 hover:text-white text-leaf-900 border border-cream-300 font-bold py-2 rounded-xl text-xs flex items-center justify-center gap-1.5 shadow-sm">
              <i data-lucide="plus" class="w-4 h-4"></i> Tambah Keranjang
            </button>
          </div>
        </div>
      `;
    });
    if (window.lucide) lucide.createIcons();
  }

  function filterCategory(cat, event) {
    document.querySelectorAll(".filter-tab").forEach(tab => {
      tab.classList.remove("active", "bg-leaf-700", "text-white");
      tab.classList.add("bg-white", "text-gray-700");
    });
    if (event && event.target) {
      event.target.classList.add("active", "bg-leaf-700", "text-white");
      event.target.classList.remove("bg-white", "text-gray-700");
    }

    if (cat === 'all') {
      renderProducts(products);
    } else {
      const filtered = products.filter(p => p.category === cat);
      renderProducts(filtered);
    }
  }

  function filterProducts() {
    const keyword = document.getElementById("searchKeyword").value.toLowerCase();
    const crop = document.getElementById("searchTanaman").value.toLowerCase();

    const filtered = products.filter(p => {
      const matchKeyword = p.name.toLowerCase().includes(keyword) || p.target.toLowerCase().includes(keyword) || p.category.toLowerCase().includes(keyword);
      const matchCrop = crop === "" || p.target.toLowerCase().includes(crop);
      return matchKeyword && matchCrop;
    });

    renderProducts(filtered);
  }

  // --- KERANJANG (CART DRAWER) ---
  function toggleCartDrawer(open) {
    const drawer = document.getElementById("cartDrawer");
    if (!drawer) return;
    if (open) {
      drawer.classList.remove("translate-x-full");
    } else {
      drawer.classList.add("translate-x-full");
    }
  }

  function addToCart(productId) {
    const product = products.find(p => p.id === productId);
    if (!product) return;
    const existing = cart.find(item => item.id === productId);

    if (existing) {
      if (existing.qty < product.stock) {
        existing.qty++;
        triggerNotification(`${product.name} ditambah di keranjang`, 'success');
      } else {
        triggerNotification("Stok batas maksimum telah tercapai.", 'warning');
      }
    } else {
      cart.push({ ...product, qty: 1 });
      triggerNotification(`${product.name} berhasil ditambahkan`, 'success');
    }

    updateCartUI();
    toggleCartDrawer(true);
  }

  function changeQty(productId, delta) {
    const item = cart.find(i => i.id === productId);
    if (!item) return;

    item.qty += delta;
    if (item.qty <= 0) {
      cart = cart.filter(i => i.id !== productId);
    }
    updateCartUI();
  }

  function updateCartUI() {
    const cartList = document.getElementById("cartItemsList");
    const cartCount = document.getElementById("cartCount");
    const cartTotal = document.getElementById("cartTotalPrice");

    if (!cartList || !cartCount || !cartTotal) return;

    const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
    const totalPrice = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);

    cartCount.innerText = totalItems;
    cartTotal.innerText = `Rp ${totalPrice.toLocaleString('id-ID')}`;

    if (cart.length === 0) {
      cartList.innerHTML = `<p class="text-center text-gray-400 text-xs py-10 animate-fadeUp">Keranjang belanja Anda masih kosong.</p>`;
      return;
    }

    cartList.innerHTML = "";
    cart.forEach(item => {
      cartList.innerHTML += `
        <div class="flex items-center justify-between py-2 animate-fadeUp">
          <div class="flex items-center gap-3">
            <img src="${item.img}" class="w-12 h-12 rounded-lg object-cover border" />
            <div>
              <h4 class="font-bold text-xs text-gray-800 line-clamp-1">${item.name}</h4>
              <span class="text-[11px] text-leaf-700 font-bold">Rp ${item.price.toLocaleString('id-ID')}</span>
            </div>
          </div>
          <div class="flex items-center gap-2 border border-cream-300 rounded-lg p-1 bg-cream-50">
            <button onclick="changeQty(${item.id}, -1)" class="w-5 h-5 bg-white hover:bg-gray-100 rounded flex items-center justify-center text-xs font-bold shadow-sm transition-all">-</button>
            <span class="text-xs font-bold text-gray-800">${item.qty}</span>
            <button onclick="changeQty(${item.id}, 1)" class="w-5 h-5 bg-white hover:bg-gray-100 rounded flex items-center justify-center text-xs font-bold shadow-sm transition-all">+</button>
          </div>
        </div>
      `;
    });
  }

  function checkoutOrderViaWA() {
    if (cart.length === 0) {
      triggerNotification("Keranjang belanja Anda kosong.", 'warning');
      return;
    }

    const name = document.getElementById("customerName").value.trim();
    const phone = document.getElementById("customerPhone").value.trim();
    const method = document.querySelector('input[name="payMethodRadio"]:checked')?.value;

    if (!name || !phone) {
      triggerNotification("Silakan lengkapi Informasi Pemesan terlebih dahulu.", 'warning');
      return;
    }

    let methodText = "";
    if (method === "qris") methodText = "QRIS (GoPay/OVO/ShopeePay/BCA Mobile)";
    else if (method === "bank_jago") methodText = "Bank Transfer Jago (100987828923 A.N: PUTRI ALYA MUKHBITA)";
    else methodText = "Bayar di Tempat (Tunai)";

    const itemsSummary = cart.map(c => `- ${c.name} (x${c.qty}) = Rp ${(c.price * c.qty).toLocaleString('id-ID')}`).join("\n");
    const totalAmount = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
    const orderId = "ORD-" + Math.floor(1000 + Math.random() * 9000);

    // Tampilkan ID Pesanan ke Modal Sukses
    const modalOrderIdEl = document.getElementById("modalOrderId");
    const orderSuccessModalEl = document.getElementById("orderSuccessModal");
    if (modalOrderIdEl && orderSuccessModalEl) {
      modalOrderIdEl.innerText = orderId;
      orderSuccessModalEl.classList.remove("hidden");
    }

    const message = `Halo Agrofarm, saya mau checkout pesanan:
  
*ID Pesanan:* ${orderId}
*Nama Pemesan:* ${name}
*No. Telepon/WA:* ${phone}

*Detail Pesanan:*
${itemsSummary}

*Total Pembayaran:* Rp ${totalAmount.toLocaleString('id-ID')}
*Metode Pembayaran:* ${methodText}

Mohon diproses, terima kasih!`;

    const encodedMessage = encodeURIComponent(message);
    window.open(`https://wa.me/6287744494131?text=${encodedMessage}`, '_blank');

    // Simpan pesanan ke array lokal agar langsung bisa dilacak
    orders.push({
      id: orderId,
      user: name,
      date: new Date().toISOString().split('T')[0],
      items: cart.map(c => `${c.name} (x${c.qty})`).join(", "),
      total: totalAmount,
      status: "Diproses",
      method: methodText
    });

    cart = [];
    updateCartUI();
    toggleCartDrawer(false);
    triggerNotification(`Pesanan ${orderId} berhasil dikirim ke WhatsApp!`, 'success');
  }

  // --- FUNGSI PELACAKAN PESANAN LOKAL (STABIL & TANPA ERROR SERVER) ---
  function trackOrder() {
    const inputId = document.getElementById("trackOrderIdInput").value.trim().toUpperCase();
    const resultDiv = document.getElementById("trackingResult");

    if (!inputId) {
      triggerNotification("Masukkan ID Pesanan terlebih dahulu.", "warning");
      return;
    }

    // Cari pesanan di dalam array lokal 'orders'
    const foundOrder = orders.find(o => o.id.toUpperCase() === inputId);

    if (!foundOrder) {
      resultDiv.classList.add("hidden");
      triggerNotification(`Pesanan dengan ID "${inputId}" tidak ditemukan.`, "error");
      return;
    }

    // Tampilkan data pesanan ke halaman
    document.getElementById("resTrackId").innerText = foundOrder.id;
    document.getElementById("resTrackUser").innerText = foundOrder.user;
    document.getElementById("resTrackDate").innerText = foundOrder.date || 'Hari Ini';
    document.getElementById("resTrackItems").innerText = foundOrder.items;
    document.getElementById("resTrackTotal").innerText = `Rp ${Number(foundOrder.total).toLocaleString('id-ID')}`;

    const statusBadge = document.getElementById("resTrackStatus");
    statusBadge.innerText = foundOrder.status;

    const stepShip = document.getElementById("stepShipping");
    const stepDeliv = document.getElementById("stepDelivered");

    if (foundOrder.status === 'Dikirim') {
      statusBadge.className = "px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800";
      stepShip.classList.remove("opacity-40");
      stepDeliv.classList.add("opacity-40");
    } else if (foundOrder.status === 'Selesai') {
      statusBadge.className = "px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800";
      stepShip.classList.remove("opacity-40");
      stepDeliv.classList.remove("opacity-40");
    } else {
      statusBadge.className = "px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800";
      stepShip.classList.add("opacity-40");
      stepDeliv.classList.add("opacity-40");
    }

    resultDiv.classList.remove("hidden");
    resultDiv.classList.add("animate-scaleUp");
    triggerNotification(`Pesanan ${foundOrder.id} berhasil ditemukan!`, "success");
  }

  // --- FUNGSI KONFIRMASI PESANAN DITERIMA OLEH PEMBELI ---
  function confirmOrderReceived() {
    const trackingIdEl = document.getElementById("resTrackId");
    if (!trackingIdEl) return;
    
    const currentId = trackingIdEl.innerText.trim();
    const order = orders.find(o => o.id.toUpperCase() === currentId.toUpperCase());

    if (!order) {
      triggerNotification("Data pesanan aktif tidak ditemukan.", "error");
      return;
    }

    if (order.status === 'Selesai') {
      triggerNotification("Pesanan ini sebelumnya sudah dikonfirmasi selesai.", "info");
      return;
    }

    // Ubah status pesanan menjadi Selesai
    order.status = 'Selesai';

    // Perbarui tampilan badge status dan tahapan kurir secara real-time di layar
    document.getElementById("resTrackStatus").innerText = 'Selesai';
    const statusBadge = document.getElementById("resTrackStatus");
    statusBadge.className = "px-3 py-1 rounded-full text-xs font-bold bg-blue-100 text-blue-800";

    document.getElementById("stepShipping").classList.remove("opacity-40");
    document.getElementById("stepDelivered").classList.remove("opacity-40");

    // Jika admin dashboard sedang terbuka, perbarui juga tabel admin secara otomatis
    if (typeof renderAdminTables === 'function') {
      renderAdminTables();
    }

    triggerNotification(`Pesanan ${order.id} berhasil dikonfirmasi selesai! Terima kasih.`, "success");
  }

  // --- DOSE CALCULATOR LOGIC ---
  function calculateDose() {
    const select = document.getElementById("calcProduct");
    if (!select) return;
    const prodId = parseInt(select.value);
    const prod = products.find(p => p.id === prodId) || products[0];

    const area = parseFloat(document.getElementById("calcArea").value) || 0;
    const tankCap = parseFloat(document.getElementById("calcTankCap").value) || 16;

    const dosePerHa = prod.doseVal;
    const sprayVolHa = prod.sprayVol;

    const totalQty = area * dosePerHa;
    const totalSprayVol = area * sprayVolHa;
    const totalTanks = totalSprayVol / tankCap;
    const dosePerTank = (dosePerHa / sprayVolHa) * tankCap;

    document.getElementById("resTotalQty").innerText = `${totalQty.toFixed(2)} L`;
    document.getElementById("resTotalTanks").innerText = `${totalTanks.toFixed(2)} Tanks`;
    document.getElementById("resDosePerTank").innerText = `${dosePerTank.toFixed(3)} L (${(dosePerTank * 1000).toFixed(0)} ml)`;
  }

  function populateDoseCalculatorProducts() {
    const select = document.getElementById("calcProduct");
    if (!select) return;
    select.innerHTML = "";

    products.forEach(p => {
      select.innerHTML += `<option value="${p.id}">${p.name} (${p.category})</option>`;
    });

    updateCalcDosageInfo();
  }

  function updateCalcDosageInfo() {
    const select = document.getElementById("calcProduct");
    if (!select) return;
    const prodId = parseInt(select.value);
    const prod = products.find(p => p.id === prodId);
    if (!prod) return;

    document.getElementById("calcDosageHa").value = `${prod.doseVal.toFixed(2)} L/Hectare`;
    document.getElementById("calcSprayVol").value = `${prod.sprayVol.toFixed(2)} L/Hectare`;
    calculateDose();
  }

  // --- AUTHENTICATION & MODAL ---
  function openAuthModal(mode = 'login') {
    document.getElementById("authModal").classList.remove("hidden");
    switchAuthTab(mode);
  }

  function closeAuthModal() {
    document.getElementById("authModal").classList.add("hidden");
  }

  function switchAuthTab(tab) {
    const loginForm = document.getElementById("loginForm");
    const regForm = document.getElementById("registerForm");
    const tabLogin = document.getElementById("tabLogin");
    const tabReg = document.getElementById("tabRegister");

    if (tab === 'login') {
      loginForm.classList.remove("hidden");
      regForm.classList.add("hidden");
      tabLogin.className = "w-1/2 py-2 text-xs font-bold border-b-2 border-leaf-700 text-leaf-800 transition-all";
      tabReg.className = "w-1/2 py-2 text-xs font-bold text-gray-400 hover:text-gray-700 transition-all";
    } else {
      loginForm.classList.add("hidden");
      regForm.classList.remove("hidden");
      tabReg.className = "w-1/2 py-2 text-xs font-bold border-b-2 border-leaf-700 text-leaf-800 transition-all";
      tabLogin.className = "w-1/2 py-2 text-xs font-bold text-gray-400 hover:text-gray-700 transition-all";
    }
  }

  function handleLogin(e) {
    e.preventDefault();
    const user = document.getElementById("loginUser").value.trim();

    if (user.toLowerCase() === "admin") {
      currentUser = { name: "Administrator Agro", role: "admin" };
    } else {
      currentUser = { name: user || "Pak Izar", role: "user" };
    }

    updateAuthUI();
    closeAuthModal();
    triggerNotification(`Selamat datang, ${currentUser.name}!`, 'success');
  }

  function handleRegister(e) {
    e.preventDefault();
    const name = document.getElementById("regName").value.trim();
    currentUser = { name: name || "Pelanggan Baru", role: "user" };

    updateAuthUI();
    closeAuthModal();
    triggerNotification("Akun Anda berhasil didaftarkan!", 'success');
  }

  function logout() {
    currentUser = null;
    updateAuthUI();
    triggerNotification("Anda telah keluar dari akun.", 'info');
  }

  function updateAuthUI() {
    const guestBtn = document.getElementById("guestAuthBtn");
    const userBtn = document.getElementById("userAuthBtn");
    const adminSection = document.getElementById("adminDashboardSection");

    if (currentUser) {
      guestBtn.classList.add("hidden");
      userBtn.classList.remove("hidden");
      document.getElementById("navUserName").innerText = currentUser.name;
      document.getElementById("navUserRole").innerText = currentUser.role === 'admin' ? 'Administrator' : 'Pelanggan';

      if (currentUser.role === 'admin') {
        adminSection.classList.remove("hidden");
        renderAdminTables();
      } else {
        adminSection.classList.add("hidden");
      }
    } else {
      guestBtn.classList.remove("hidden");
      userBtn.classList.add("hidden");
      adminSection.classList.add("hidden");
    }
  }

  // --- ADMIN PANEL CONTROLLER ---
  function renderAdminTables() {
    const orderBody = document.getElementById("adminOrdersTable");
    if (orderBody) {
      orderBody.innerHTML = "";
      orders.forEach((o, idx) => {
        orderBody.innerHTML += `
          <tr class="hover:bg-cream-50 font-medium transition-colors">
            <td class="p-3 font-bold text-gray-900">
              ${o.id}<br/>
              <span class="text-[10px] text-gray-500 font-normal">
                ${o.user} <span class="ml-1 bg-cream-300 text-leaf-900 font-extrabold px-1.5 py-0.5 rounded text-[9px] uppercase border border-cream-300">${o.method || 'Manual'}</span>
              </span>
            </td>
            <td class="p-3">${o.date}</td>
            <td class="p-3">${o.items}</td>
            <td class="p-3 font-bold text-leaf-800">Rp ${o.total.toLocaleString('id-ID')}</td>
            <td class="p-3">
              <span class="px-2 py-0.5 rounded text-[10px] font-bold ${o.status === 'Dikirim' ? 'bg-emerald-100 text-emerald-800' : 'bg-amber-100 text-amber-800'}">${o.status}</span>
            </td>
            <td class="p-3 text-center space-x-1">
              <button onclick="toggleOrderStatus(${idx})" class="btn-animated bg-leaf-700 text-white px-2 py-1 rounded text-[10px] font-bold">Ubah Status</button>
              <button onclick="deleteOrder(${idx})" class="btn-animated bg-red-600 text-white px-2 py-1 rounded text-[10px] font-bold">Hapus</button>
            </td>
          </tr>
        `;
      });
    }

    const prodBody = document.getElementById("adminProductsTable");
    if (prodBody) {
      prodBody.innerHTML = "";
      products.forEach((p) => {
        prodBody.innerHTML += `
          <tr class="hover:bg-cream-50 font-medium transition-colors">
            <td class="p-2"><img id="previewImg-${p.id}" src="${p.img}" class="w-10 h-10 object-cover rounded-lg border shadow-sm" /></td>
            <td class="p-2 font-bold text-gray-900">${p.name}</td>
            <td class="p-2"><input type="number" id="editPrice-${p.id}" value="${p.price}" class="w-24 border border-cream-300 rounded p-1 text-xs font-bold" /></td>
            <td class="p-2"><input type="number" id="editStock-${p.id}" value="${p.stock}" class="w-16 border border-cream-300 rounded p-1 text-xs font-bold" /></td>
            <td class="p-2 space-y-1">
              <input type="text" id="editImg-${p.id}" value="${p.img}" placeholder="URL Gambar..." class="w-full border border-cream-300 rounded p-1 text-[11px] text-gray-600 mb-1" />
              <input type="file" accept="image/*" onchange="handleFileUpload(event, ${p.id})" class="text-[10px] text-gray-500 block w-full file:mr-2 file:py-0.5 file:px-2 file:rounded-md file:border-0 file:text-[10px] file:font-bold file:bg-leaf-100 file:text-leaf-800 hover:file:bg-leaf-200" />
            </td>
            <td class="p-2 text-center">
              <button onclick="saveProductAdmin(${p.id})" class="btn-animated bg-emerald-600 text-white px-3 py-1 rounded text-[10px] font-bold shadow-sm">Simpan</button>
            </td>
          </tr>
        `;
      });
    }
  }

  function handleFileUpload(event, productId) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
      const base64Image = e.target.result;
      document.getElementById(`editImg-${productId}`).value = base64Image;
      document.getElementById(`previewImg-${productId}`).src = base64Image;
    };
    reader.readAsDataURL(file);
  }

  function toggleOrderStatus(idx) {
    orders[idx].status = orders[idx].status === 'Diproses' ? 'Dikirim' : 'Diproses';
    renderAdminTables();
  }

  function deleteOrder(idx) {
    if (confirm("Apakah Anda yakin ingin menghapus pesanan ini?")) {
      orders.splice(idx, 1);
      renderAdminTables();
    }
  }

  function saveProductAdmin(id) {
    const prod = products.find(p => p.id === id);
    if (!prod) return;

    prod.price = parseFloat(document.getElementById(`editPrice-${id}`).value) || prod.price;
    prod.stock = parseInt(document.getElementById(`editStock-${id}`).value) || prod.stock;
    prod.img = document.getElementById(`editImg-${id}`).value || prod.img;

    renderProducts(products);
    populateDoseCalculatorProducts();
    renderAdminTables();
    triggerNotification(`Data produk "${prod.name}" berhasil diperbarui!`, 'success');
  }

  // --- FITUR TAMBAHAN: SALIN ID PESANAN ---
  function copyOrderId() {
    const orderIdText = document.getElementById('modalOrderId').innerText;
    navigator.clipboard.writeText(orderIdText).then(() => {
      triggerNotification('ID Pesanan berhasil disalin!', 'success');
    });
  }

  // Toast Notification Animated
  function triggerNotification(message, type = "info") {
    const container = document.getElementById("notificationCenter");
    if (!container) return;

    const toast = document.createElement("div");
    const colors = {
      success: "bg-leaf-800 border-leaf-600 text-white",
      warning: "bg-amber-700 border-amber-500 text-white",
      error: "bg-red-800 border-red-600 text-white",
      info: "bg-leaf-900 border-leaf-700 text-white"
    };

    toast.className = `p-3.5 rounded-2xl shadow-2xl border text-xs font-bold transition-all duration-500 transform translate-y-4 opacity-0 flex items-center gap-2 pointer-events-auto ${colors[type] || colors.info}`;
    toast.innerHTML = `<i data-lucide="bell" class="w-4 h-4 animate-bounce"></i> <span>${message}</span>`;

    container.appendChild(toast);
    if (window.lucide) lucide.createIcons();

    setTimeout(() => {
      toast.classList.remove("translate-y-4", "opacity-0");
      toast.classList.add("translate-y-0", "opacity-100");
    }, 50);

    setTimeout(() => {
      toast.classList.remove("translate-y-0", "opacity-100");
      toast.classList.add("-translate-y-4", "opacity-0");
      setTimeout(() => toast.remove(), 500);
    }, 4000);
  }

  function togglePaymentDetails() {
    const selected = document.querySelector('input[name="payMethodRadio"]:checked')?.value;
    const qrisBox = document.getElementById("qrisDetail");
    const bankBox = document.getElementById("bankDetail");

    if (selected === "qris") {
      qrisBox.classList.remove("hidden");
      bankBox.classList.add("hidden");
    } else if (selected === "bank_jago") {
      qrisBox.classList.add("hidden");
      bankBox.classList.remove("hidden");
    } else {
      qrisBox.classList.add("hidden");
      bankBox.classList.add("hidden");
    }
  }

  function showProductDetails(productId) {
    const prod = products.find(p => p.id === productId);
    if (!prod) return;

    document.getElementById("detailName").innerText = prod.name;
    document.getElementById("detailCategory").innerText = prod.category;
    document.getElementById("detailPrice").innerText = `Rp ${prod.price.toLocaleString('id-ID')}`;
    document.getElementById("detailActive").innerText = prod.activeIngredient || "-";
    document.getElementById("detailTarget").innerText = prod.target;
    document.getElementById("detailDose").innerText = prod.dose;
    document.getElementById("detailUsage").innerText = prod.usage || "Gunakan sesuai aturan pakai pada kemasan.";
    document.getElementById("detailSafety").innerText = prod.safety || "Simpan di tempat yang aman dan jauh dari anak-anak.";

    document.getElementById("detailImg").src = prod.img;
    document.getElementById("productDetailModal").classList.remove("hidden");
  }
</script>
