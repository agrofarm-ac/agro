<?php
// components/header.php
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AGROFARM — Toko Obat & Nutrisi Pertanian Modern</title>
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
  
  <!-- Google Fonts: Plus Jakarta Sans -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Plus Jakarta Sans', 'sans-serif'],
          },
          colors: {
            cream: {
              50: '#FAF8F5',
              100: '#F5F0E6',
              200: '#EBE1D0',
              300: '#DECFAF',
            },
            leaf: {
              50: '#F0FDF4',
              100: '#DCFCE7',
              500: '#22C55E',
              600: '#16A34A',
              700: '#15803D',
              800: '#166534',
              900: '#14532D',
              950: '#052e16',
            }
          },
          keyframes: {
            fadeInUp: {
              '0%': { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            scaleIn: {
              '0%': { opacity: '0', transform: 'scale(0.92)' },
              '100%': { opacity: '1', transform: 'scale(1)' },
            },
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-6px)' },
            },
            shimmer: {
              '100%': { transform: 'translateX(100%)' }
            }
          },
          animation: {
            fadeUp: 'fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards',
            scaleUp: 'scaleIn 0.3s cubic-bezier(0.16, 1, 0.3, 1) forwards',
            floatSlow: 'float 4s ease-in-out infinite',
          }
        }
      }
    }
  </script>

  <style>
    body {
      background-color: #FAF8F5;
      color: #1F2937;
      font-family: 'Plus Jakarta Sans', sans-serif;
      overflow-x: hidden;
    }
    
    .glass-card {
      background: rgba(255, 255, 255, 0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border: 1px solid rgba(22, 101, 52, 0.12);
    }
    
    .glass-nav {
      background: rgba(250, 248, 245, 0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(22, 101, 52, 0.1);
    }

    /* Animation & Transitions for Cards */
    .product-card {
      transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
    }
    .product-card:hover {
      transform: translateY(-8px) scale(1.01);
      box-shadow: 0 20px 30px -10px rgba(22, 101, 52, 0.2);
    }

    /* Button Ripple Animation Effect */
    .btn-animated {
      transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .btn-animated:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 15px -3px rgba(22, 101, 52, 0.3);
    }
    .btn-animated:active {
      transform: translateY(1px) scale(0.98);
    }

    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #FAF8F5; }
    ::-webkit-scrollbar-thumb { background: #16A34A; border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: #15803D; }
  </style>
</head>
<body class="antialiased selection:bg-leaf-500 selection:text-white">

  <!-- Toast Container Notifikasi -->
  <div id="notificationCenter" class="fixed top-24 right-4 z-50 space-y-2 max-w-sm w-full pointer-events-none"></div>
  
  <!-- ================= NAVBAR ================= -->
  <nav class="fixed top-0 left-0 right-0 z-40 glass-nav transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between gap-4">
      
      <!-- Brand Logo -->
      <a href="#" class="flex items-center gap-3 group shrink-0">
        <div class="w-11 h-11 rounded-2xl bg-leaf-700 text-cream-50 flex items-center justify-center font-extrabold text-xl shadow-md group-hover:rotate-12 group-hover:scale-110 transition-all duration-300">
          <i data-lucide="sprout" class="w-6 h-6 animate-pulse"></i>
        </div>
        <div>
          <span class="text-xl sm:text-2xl font-black tracking-wider text-leaf-900">AGRO<span class="text-leaf-600">FARM</span></span>
          <span class="block text-[9px] sm:text-[10px] tracking-widest text-leaf-800 uppercase font-semibold">Solusi Pertanian Modern</span>
        </div>
      </a>

      <!-- Navigation Bar Menus -->
      <div class="hidden xl:flex items-center gap-5 text-xs font-bold uppercase text-gray-700 tracking-wider">
        <a href="#about" class="hover:text-leaf-700 transition-all hover:scale-105">About</a>
        <a href="#catalog" class="hover:text-leaf-700 transition-all hover:scale-105">Products</a>
        <a href="#crops" class="hover:text-leaf-700 transition-all hover:scale-105">Crops</a>
        <a href="#pests-diseases" class="hover:text-leaf-700 transition-all hover:scale-105">Pests & Diseases</a>
        <a href="#dose-calculator" class="hover:text-leaf-700 transition-all hover:scale-105 text-red-600 font-extrabold animate-pulse">Dose Calculator</a>
        <a href="#tracking-section" class="hover:text-leaf-700 transition-all hover:scale-105 text-emerald-700 font-extrabold">Track order</a>
        <a href="#retailers" class="hover:text-leaf-700 transition-all hover:scale-105">Nearest Retailers</a>
        <a href="#news" class="hover:text-leaf-700 transition-all hover:scale-105">News</a>
        <a href="#contact" class="hover:text-leaf-700 transition-all hover:scale-105">Contact</a>
      </div>

      <!-- Actions / User Auth Status -->
      <div class="flex items-center gap-2 sm:gap-3 shrink-0">
        <!-- Guest View -->
        <div id="guestAuthBtn" class="flex items-center gap-2">
          <button onclick="openAuthModal('login')" class="btn-animated bg-cream-100 hover:bg-cream-200 border border-cream-300 text-leaf-900 font-bold px-3 py-2 rounded-xl text-xs">
            Masuk
          </button>
          <button onclick="openAuthModal('register')" class="btn-animated bg-leaf-700 hover:bg-leaf-800 text-white font-bold px-3 py-2 rounded-xl text-xs shadow-md">
            Daftar
          </button>
        </div>

        <!-- Logged User/Admin View -->
        <div id="userAuthBtn" class="hidden flex items-center gap-3">
          <div class="text-right hidden sm:block">
            <span id="navUserName" class="block text-xs font-bold text-gray-900">Pak Izar</span>
            <span id="navUserRole" class="block text-[10px] font-semibold text-leaf-700 uppercase">Pelanggan</span>
          </div>
          <button onclick="logout()" class="p-2 text-red-600 hover:bg-red-50 rounded-xl transition-all hover:rotate-12" title="Logout">
            <i data-lucide="log-out" class="w-5 h-5"></i>
          </button>
        </div>

        <!-- Cart Trigger -->
        <button id="cartNavTrigger" onclick="toggleCartDrawer(true)" class="btn-animated relative bg-leaf-100 border border-leaf-300 hover:bg-leaf-200 text-leaf-900 font-bold px-3.5 py-2 rounded-xl shadow-sm flex items-center gap-2 group">
          <i data-lucide="shopping-bag" class="w-4 h-4 text-leaf-700 group-hover:bounce"></i>
          <span class="hidden sm:inline text-xs font-bold">Keranjang</span>
          <span id="cartCount" class="bg-leaf-700 text-white text-[10px] font-black px-1.5 py-0.5 rounded-full animate-pulse">0</span>
        </button>
      </div>

    </div>
    
    <!-- Sub-menu Mobile -->
    <div class="xl:hidden flex items-center justify-start gap-4 px-4 py-2 bg-cream-100 border-t border-cream-200 text-[11px] font-bold text-gray-700 overflow-x-auto whitespace-nowrap">
      <a href="#about" class="hover:text-leaf-700">About</a>
      <a href="#catalog" class="hover:text-leaf-700">Products</a>
      <a href="#crops" class="hover:text-leaf-700">Crops</a>
      <a href="#pests-diseases" class="hover:text-leaf-700">Pests & Diseases</a>
      <a href="#dose-calculator" class="text-red-600 font-extrabold">Dose Calculator</a>
      <a href="#tracking-section" class="text-emerald-700 font-extrabold">Track order</a>
      <a href="#retailers" class="hover:text-leaf-700">Nearest Retailers</a>
      <a href="#news" class="hover:text-leaf-700">News</a>
      <a href="#contact" class="hover:text-leaf-700">Contact</a>
    </div>
  </nav>
