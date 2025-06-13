<!-- resources/views/pilih-metode-pembayaran.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen w-full ml-16 mr-16">
        <!-- Header -->
        <div class="bg-green-600 px-4 py-4">
            <div class="flex items-center gap-3 text-white">
                <button onclick="history.back()" class="flex-shrink-0">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <h1 class="text-lg font-medium">Pilih Metode Pembayaran</h1>
            </div>
        </div>

        <!-- Payment Methods List -->
        <div class="py-2 ">
            <form id="paymentForm">
                <!-- OVO -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="https://pbs.twimg.com/media/EUbePLEU0AIpder.jpg" alt="ovo"
                            class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">OVO</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="ovo"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- QRIS -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="https://images.seeklogo.com/logo-png/39/1/quick-response-code-indonesia-standard-qris-logo-png_seeklogo-391791.png"
                            alt="qris" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">QRIS by Shopee Pay</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="qris"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>


                <!-- Continue Button (Optional) -->
                <div class="fixed bottom-0 left-0 right-0 p-4 bg-white border-t border-gray-200 max-w-2xl mx-auto">
                    <button id="continueBtn" disabled
                        class="w-full py-3 bg-gray-300 text-gray-500 rounded-full text-sm font-medium transition-colors duration-200 disabled:opacity-50">
                        Lanjutkan
                    </button>
                </div>
        </div>
    @endsection
