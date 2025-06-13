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
                    <span class="text-gray-500">Indomaret</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-700 font-medium">Kode Pesanan</span>
                    <span class="text-blue-600 font-mono">F120625010</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-700 font-medium">Batas Pembayaran</span>
                    <span class="text-gray-500 text-sm">13 Jun 2025 14:29</span>
                </div>
            </div>
        </div>

        <!-- Payment Instructions -->
        <div class="bg-white rounded-lg shadow-sm p-4">
            <h3 class="font-semibold text-gray-800 mb-4">Cara Pembayaran :</h3>
            
            <div class="mb-4">
                <h4 class="font-medium text-gray-700 mb-3">Pembayaran via INDOMARET</h4>
                <ol class="space-y-2 text-sm text-gray-600">
                    <li class="flex">
                        <span class="mr-2 text-gray-400">1.</span>
                        <span>Datang ke gerai Indomaret</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">2.</span>
                        <span>Sampaikan ke kasir ingin melakukan pembayaran aplikasi LinkAja</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">3.</span>
                        <span>Berikan kode bayar (F120625010) ke kasir</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">4.</span>
                        <span>Bayar sesuai jumlah yang diinfokan oleh kasir</span>
                    </li>
                    <li class="flex">
                        <span class="mr-2 text-gray-400">5.</span>
                        <span>Simpan struk bukti pembayaran Anda</span>
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
                            <p class="text-gray-500 text-xs">X1 Kilogram</p>
                        </div>
                        <span class="font-semibold">Rp. 20.000</span>
                    </div>
                </div>

                <hr class="border-gray-200">

                <div class="space-y-2">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Sub Total</span>
                        <span class="font-semibold">Rp. 20.000</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Biaya Pengiriman</span>
                        <span class="font-semibold">Rp. 15.000</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Biaya Admin</span>
                        <span class="font-semibold">Rp. 3.500</span>
                    </div>
                </div>

                <hr class="border-gray-200">

                <div class="flex justify-between items-center pt-2">
                    <span class="font-semibold text-red-500">TOTAL</span>
                    <span class="font-bold text-red-500 text-lg">Rp. 38.500</span>
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
                <div class="flex justify-between">
                    <span class="text-gray-600">Reguler</span>
                </div>
                
                <div class="mt-4">
                    <h4 class="font-medium text-gray-700 mb-2">Alamat Pengiriman</h4>
                    <div class="text-sm text-gray-600 space-y-1">
                        <p class="font-medium">sofan</p>
                        <p>085547474546</p>
                        <p>Bojongherang, 43216, Cianjur, Cianjur, West Java, Indonesia</p>
                        <p class="text-gray-500">default</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection