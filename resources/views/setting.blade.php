@extends('layouts.app')

@section('content')
    <div class="w-full bg-white min-h-screen px-20">
        <!-- Header -->
        <div class="flex items-center mb-4 bg-green-600 px-4 py-3">
            <a href="/home" class="inline-block">
                <button class="text-white mr-2" type="button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
            </a>
            <h2 class="text-lg font-semibold text-white">Keranjang</h2>
        </div>

        <!-- Form Alamat Pengiriman -->
        <div class="space-y-3 mb-5">
            <h3 class="font-bold text-gray-800">Alamat Pengiriman</h3>

            <!-- Lokasi -->
            <div>
                <label class="block text-sm font-medium">Lokasi</label>
                <a href="/map" class="inline-block">
                    <button type="button"
                        class="bg-blue-100 text-blue-600 px-3 py-1 text-sm rounded mt-1 inline-flex items-center">
                        <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 2a6 6 0 00-6 6c0 4 6 10 6 10s6-6 6-10a6 6 0 00-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z" />
                        </svg>
                        Tambahkan Lokasi
                    </button></a>
            </div>

            <!-- Input Fields -->
            <div>
                <label class="block text-sm">Nama Penerima</label>
                <input type="text" placeholder="Cnth: Jibun"
                    class="w-full border-b rounded px-3 py-2 mt-1 text-sm focus:outline-none">
            </div>
            <div>
                <label class="block text-sm">Nomor Telepon</label>
                <input type="text" placeholder="Cnth: 081134567690"
                    class="w-full border-b rounded px-3 py-2 mt-1 text-sm focus:outline-none">
            </div>
            <div>
                <label class="block text-sm">Alamat Email</label>
                <input type="email" placeholder="Cnth: contoh@gmail.com"
                    class="w-full border-b rounded px-3 py-2 mt-1 text-sm focus:outline-none">
            </div>
            <div>
                <label class="block text-sm">Detail Lokasi</label>
                <input type="text" placeholder="Cnth: Depan masjid rumah warna biru"
                    class="w-full border-b rounded px-3 py-2 mt-1 text-sm focus:outline-none">
            </div>
        </div>

        <!-- Rangkuman Pesanan -->
        <div class="border-t pt-4 space-y-3">
            <div class="flex justify-between items-center">
                <h3 class="font-semibold">Rangkuman Pesanan</h3>
                <a href="/home">
                <button type="button" class="text-sm text-red-500 bg-red-100 px-2 py-1 rounded">Edit</button>
            </a>
            </div>

            <div class="text-sm space-y-1">
                <div class="flex justify-between">
                    <span>Sub Total</span>
                    <span>Rp. 0</span>
                </div>
                <div class="flex justify-between">
                    <span>Biaya Pengiriman</span>
                    <span>Rp. 15.000</span>
                </div>
                <div class="flex justify-between">
                    <span>Biaya Admin</span>
                    <span>Rp. 0</span>
                </div>
            </div>
        </div>

        <!-- Metode Pembayaran -->
        <div class="mt-6 space-y-4">
            <h3 class="font-semibold">Metode Pembayaran</h3>

            <!-- Convenience Store -->
            <div class="flex justify-between items-center border rounded px-4 py-3 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center gap-3">
                    <img src="https://img.icons8.com/color/48/000000/shop.png" class="w-6 h-6">
                    <span class="text-sm">Convenience Store</span>
                </div>
                <a href="/convenience" class="inline-block">
                    <span class="text-sm text-gray-400">Pilih Convenience Store Tujuan</span></a>
            </div>

            <!-- E-Wallet -->
            <div class="flex justify-between items-center border rounded px-4 py-3 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center gap-3">
                    <img src="https://img.icons8.com/fluency/48/wallet.png" class="w-6 h-6">
                    <span class="text-sm">E-Wallet</span>
                </div>
                <a href="/e-wallet" class="inline-block">
                    <span class="text-sm text-gray-400">Pilih E-Wallet Tujuan</span></a>
            </div>

            <!-- Virtual Account -->
            <div class="flex justify-between items-center border rounded px-4 py-3 cursor-pointer hover:bg-gray-50">
                <div class="flex items-center gap-3">
                    <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/external-bank-account-online-banking-flatart-icons-outline-flatarticons.png"
                        class="w-6 h-6">
                    <span class="text-sm">Virtual Account</span>
                </div>
                <a href="/virtual_account" class="inline-block">
                    <span class="text-sm text-gray-400">Pilih Virtual Account Tujuan</span>
                </a>
            </div>
        </div>

        <!-- Total Harga -->
        <div class="border-t mt-6 pt-4">
            <div class="flex justify-between text-lg font-bold mb-4">
                <span>Total Harga</span>
                <span>Rp. 15.000</span>
            </div>
            <a href="/pembayaran">
            <button class="w-full bg-gray-400 text-white font-semibold py-2 rounded">
                Pesan dan antar sekarang
            </button></a>
        </div>
    </div>
@endsection
