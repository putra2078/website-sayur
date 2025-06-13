@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="bg-green-500 text-white p-4 flex items-center">
        <a href="/setting">
        <button class="mr-4">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button></a>
        <h1 class="text-lg font-semibold">Pembayaran</h1>
    </div>

    <div class="p-4 space-y-6">
        <!-- Payment Info Card -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <div class="space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-gray-700 font-medium">Metode Pembayaran</span>
                    <span class="text-gray-500">QRIS by ShopeePay</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-700 font-medium">Kode Pesanan</span>
                    <span class="text-blue-600 font-mono">F120625012</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-700 font-medium">Batas Pembayaran</span>
                    <span class="text-gray-500 text-sm">13 Jun 2025 14:45</span>
                </div>
            </div>
        </div>

        <!-- QR Code Section -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-800 mb-4 text-center">Kode QR</h3>
            
            <!-- QR Code Display -->
            <div class="flex justify-center mb-6">
                <div class="bg-white p-4 border-2 border-gray-200 rounded-lg">
                    <!-- QR Code Placeholder - In real app, generate actual QR code -->
                    <div class="w-48 h-48 bg-white flex items-center justify-center border">
                        <svg class="w-full h-full" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <!-- QR Code Pattern -->
                            <rect x="0" y="0" width="200" height="200" fill="white"/>
                            
                            <!-- Corner squares -->
                            <rect x="10" y="10" width="60" height="60" fill="black"/>
                            <rect x="20" y="20" width="40" height="40" fill="white"/>
                            <rect x="30" y="30" width="20" height="20" fill="black"/>
                            
                            <rect x="130" y="10" width="60" height="60" fill="black"/>
                            <rect x="140" y="20" width="40" height="40" fill="white"/>
                            <rect x="150" y="30" width="20" height="20" fill="black"/>
                            
                            <rect x="10" y="130" width="60" height="60" fill="black"/>
                            <rect x="20" y="140" width="40" height="40" fill="white"/>
                            <rect x="30" y="150" width="20" height="20" fill="black"/>
                            
                            <!-- Random QR pattern -->
                            <rect x="90" y="20" width="10" height="10" fill="black"/>
                            <rect x="110" y="20" width="10" height="10" fill="black"/>
                            <rect x="80" y="30" width="10" height="10" fill="black"/>
                            <rect x="100" y="30" width="10" height="10" fill="black"/>
                            <rect x="120" y="30" width="10" height="10" fill="black"/>
                            
                            <rect x="10" y="80" width="10" height="10" fill="black"/>
                            <rect x="30" y="80" width="10" height="10" fill="black"/>
                            <rect x="50" y="80" width="10" height="10" fill="black"/>
                            <rect x="70" y="80" width="10" height="10" fill="black"/>
                            
                            <rect x="90" y="50" width="10" height="10" fill="black"/>
                            <rect x="110" y="50" width="10" height="10" fill="black"/>
                            <rect x="130" y="50" width="10" height="10" fill="black"/>
                            <rect x="150" y="50" width="10" height="10" fill="black"/>
                            <rect x="170" y="50" width="10" height="10" fill="black"/>
                            
                            <rect x="20" y="100" width="10" height="10" fill="black"/>
                            <rect x="40" y="100" width="10" height="10" fill="black"/>
                            <rect x="60" y="100" width="10" height="10" fill="black"/>
                            <rect x="80" y="100" width="10" height="10" fill="black"/>
                            <rect x="100" y="100" width="10" height="10" fill="black"/>
                            <rect x="120" y="100" width="10" height="10" fill="black"/>
                            <rect x="140" y="100" width="10" height="10" fill="black"/>
                            <rect x="160" y="100" width="10" height="10" fill="black"/>
                            <rect x="180" y="100" width="10" height="10" fill="black"/>
                            
                            <!-- More pattern -->
                            <rect x="80" y="130" width="10" height="10" fill="black"/>
                            <rect x="100" y="130" width="10" height="10" fill="black"/>
                            <rect x="120" y="130" width="10" height="10" fill="black"/>
                            <rect x="140" y="130" width="10" height="10" fill="black"/>
                            <rect x="160" y="130" width="10" height="10" fill="black"/>
                            <rect x="180" y="130" width="10" height="10" fill="black"/>
                            
                            <rect x="90" y="150" width="10" height="10" fill="black"/>
                            <rect x="110" y="150" width="10" height="10" fill="black"/>
                            <rect x="130" y="150" width="10" height="10" fill="black"/>
                            <rect x="150" y="150" width="10" height="10" fill="black"/>
                            <rect x="170" y="150" width="10" height="10" fill="black"/>
                            
                            <rect x="80" y="170" width="10" height="10" fill="black"/>
                            <rect x="100" y="170" width="10" height="10" fill="black"/>
                            <rect x="120" y="170" width="10" height="10" fill="black"/>
                            <rect x="140" y="170" width="10" height="10" fill="black"/>
                            <rect x="160" y="170" width="10" height="10" fill="black"/>
                            <rect x="180" y="170" width="10" height="10" fill="black"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Payment Instructions -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-800 mb-4">Cara Pembayaran :</h3>
            
            <div class="mb-4">
                <h4 class="font-medium text-gray-700 mb-3">Pembayaran via QRIS (ShopeePay)</h4>
                <ol class="space-y-2 text-sm text-gray-600">
                    <li class="flex">
                        <span class="mr-2 text-gray-400">1.</span>
                        <span>Masuk ke aplikasi dompet digital yang sudah mendukung QRIS</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">2.</span>
                        <span>Pilih/Scan QR Code yang tersedia</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">3.</span>
                        <span>Akan muncul detail transaksi, pastikan data transaksi sudah sesuai</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">4.</span>
                        <span>Selesaikan proses pembayaran Anda</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">5.</span>
                        <span>Transaksi selesai, Anda akan mendapat notifikasi pembayaran Anda</span>
                    </li>
                </ol>
            </div>

            <div class="mb-4">
                <h4 class="font-medium text-gray-700 mb-3">Pembayaran via QRIS (Mobile)</h4>
                <ol class="space-y-2 text-sm text-gray-600">
                    <li class="flex">
                        <span class="mr-2 text-gray-400">1.</span>
                        <span>Download QR Code pada invoice</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">2.</span>
                        <span>Masuk ke aplikasi dompet digital yang sudah mendukung QRIS</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">3.</span>
                        <span>Upload QR Code yang sudah di download tadi</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">4.</span>
                        <span>Akan muncul detail transaksi, pastikan data transaksi sudah sesuai</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">5.</span>
                        <span>Selesaikan proses pembayaran Anda</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">6.</span>
                        <span>Transaksi selesai, dengan bukti pembayaran Anda</span>
                    </li>
                </ol>
            </div>

            <!-- Check Status Button -->
            <button class="w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-3 px-4 rounded-lg transition-colors">
                Cek Status Pembayaran
            </button>
        </div>

        <!-- Order Details -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-800 mb-4">Detail Pesanan</h3>
            
            <div class="space-y-3">
                <div>
                    <h4 class="font-medium text-gray-700 mb-2">Produk</h4>
                    <div class="flex justify-between items-start">
                        <div>
                            <p class="text-gray-600 text-sm">Test Produk Jagi</p>
                        </div>
                        <span class="font-semibold">Rp. 40.000</span>
                    </div>
                </div>

                <hr class="border-gray-200">

                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Sub Total</span>
                        <span class="font-semibold">Rp. 40.000</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Biaya Pengiriman</span>
                        <span class="font-semibold">Rp. 15.000</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Biaya Admin</span>
                        <span class="font-semibold">Rp. 1.050</span>
                    </div>
                </div>

                <hr class="border-gray-200">

                <div class="flex justify-between items-center pt-2">
                    <span class="font-semibold text-red-500">TOTAL</span>
                    <span class="font-bold text-red-500 text-lg">Rp. 56.050</span>
                </div>
            </div>
        </div>

        <!-- Shipping Details -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-800 mb-4">Detail Pengiriman</h3>
            
            <div class="space-y-3">
                <div class="flex justify-between">
                    <span class="text-gray-600">Jenis Pengiriman</span>
                    <span class="font-semibold">Rp. 15.000</span>
                </div>
                <div>
                    <span class="text-gray-600">Reguler</span>
                </div>
                
                <div class="mt-4">
                    <h4 class="font-medium text-gray-700 mb-2">Alamat Pengiriman</h4>
                    <div class="text-sm text-gray-600 space-y-1">
                        <p class="font-medium">sofan</p>
                        <p>085547474546</p>
                        <p>Bojongherang, 43216, Cianjur, Cianjur, West Java, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection