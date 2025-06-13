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
        <div class="py-2">
            <form id="paymentForm">
                <!-- BCA Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iIzAwNEE5RiIvPgo8dGV4dCB4PSI1IiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxMiIgZm9udC13ZWlnaHQ9ImJvbGQiPkJDQTwvdGV4dD4KPC9zdmc+"
                            alt="BCA" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">BCA Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="bca_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- BNI Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iI0ZGNzAyMCIvPgo8dGV4dCB4PSI1IiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxMiIgZm9udC13ZWlnaHQ9ImJvbGQiPkJOSTwvdGV4dD4KPC9zdmc+"
                            alt="BNI" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">BNI Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="bni_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- BRI Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iIzAwNEE5RiIvPgo8dGV4dCB4PSI1IiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxMCIgZm9udC13ZWlnaHQ9ImJvbGQiPkJSSVZBPC90ZXh0Pgo8L3N2Zz4="
                            alt="BRIVA" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">BRI Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="bri_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- BSI Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iIzAwNzFCQyIvPgo8dGV4dCB4PSI3IiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxMiIgZm9udC13ZWlnaHQ9ImJvbGQiPkJTSTwvdGV4dD4KPC9zdmc+"
                            alt="BSI" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">BSI Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="bsi_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- CIMB Niaga Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iI0RDMjYyNiIvPgo8dGV4dCB4PSIzIiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSI5IiBmb250LXdlaWdodD0iYm9sZCI+Q0lNQjwvdGV4dD4KPC9zdmc+"
                            alt="CIMB" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">CIMB Niaga Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="cimb_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- Danamon Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iI0Y0N0MzQyIvPgo8dGV4dCB4PSI1IiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSI4IiBmb250LXdlaWdodD0iYm9sZCI+RGFuYW1vbjwvdGV4dD4KPC9zdmc+"
                            alt="Danamon" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">Danamon Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="danamon_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- Mandiri Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iI0ZGQjYwMCIvPgo8dGV4dCB4PSI0IiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSI5IiBmb250LXdlaWdodD0iYm9sZCI+TWFuZGlyaTwvdGV4dD4KPC9zdmc+"
                            alt="Mandiri" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">Mandiri Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="mandiri_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- Muamalat Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iIzAwNzE0NCIvPgo8dGV4dCB4PSIyIiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSI3IiBmb250LXdlaWdodD0iYm9sZCI+TXVhbWFsYXQ8L3RleHQ+Cjwvc3ZnPg=="
                            alt="Muamalat" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">Muamalat Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="muamalat_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- OCBC NISP Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iI0RDMjYyNiIvPgo8dGV4dCB4PSIzIiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSI4IiBmb250LXdlaWdodD0iYm9sZCI+T0NCQzwvdGV4dD4KPC9zdmc+"
                            alt="OCBC" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">OCBC NISP Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="ocbc_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- Other Bank Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-b border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iIzY2NjY2NiIvPgo8dGV4dCB4PSI0IiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSI4IiBmb250LXdlaWdodD0iYm9sZCI+T3RoZXI8L3RleHQ+Cjwvc3ZnPg=="
                            alt="Other Bank" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">Other Bank Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="other_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>

                <!-- Permata Virtual Account -->
                <div class="flex items-center justify-between px-2 py-4 border-gray-200 hover:bg-orange-200">
                    <div class="flex items-center gap-3">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHZpZXdCb3g9IjAgMCA0MCA0MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjQwIiBoZWlnaHQ9IjQwIiByeD0iOCIgZmlsbD0iIzAwNzE0NCIvPgo8dGV4dCB4PSIzIiB5PSIyNSIgZmlsbD0id2hpdGUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSI4IiBmb250LXdlaWdodD0iYm9sZCI+UGVybWF0YTwvdGV4dD4KPC9zdmc+"
                            alt="Permata" class="w-10 h-10 rounded-lg">
                        <div>
                            <h3 class="font-medium text-gray-900">Permata Virtual Account</h3>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="permata_va"
                        class="w-5 h-5 text-green-600 border-gray-300 focus:ring-green-500">
                </div>
            </form>
        </div>

        <!-- Continue Button (Optional) -->
        <div class="fixed bottom-0 left-0 right-0 p-4 bg-white border-t border-gray-200 max-w-2xl mx-auto">
            <button id="continueBtn" disabled
                class="w-full py-3 bg-gray-300 text-gray-500 rounded-full text-sm font-medium transition-colors duration-200 disabled:opacity-50">
                Lanjutkan
            </button>
        </div>
    </div>

    <script>
        // Handle payment method selection
        document.addEventListener('DOMContentLoaded', function() {
            const radioButtons = document.querySelectorAll('input[name="payment_method"]');
            const continueBtn = document.getElementById('continueBtn');

            radioButtons.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.checked) {
                        continueBtn.disabled = false;
                        continueBtn.classList.remove('bg-gray-300', 'text-gray-500');
                        continueBtn.classList.add('bg-green-600', 'text-white',
                            'hover:bg-green-700');
                    }
                });
            });

            continueBtn.addEventListener('click', function() {
                const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
                if (selectedMethod) {
                    console.log('Selected payment method:', selectedMethod.value);
                    // Handle form submission or redirect here
                    alert('Metode pembayaran dipilih: ' + selectedMethod.value);
                }
            });
        });
    </script>
@endsection
