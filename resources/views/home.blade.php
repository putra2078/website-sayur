@extends('layouts.app')

@section('content')
    <div class="block px-20 pb-32">
        <div class="flex bg-green-500 w-xs h-fit p-10">
            <div class="col-12">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-bold text-white">Website Jual Sayuran</h1>
                    <a href="/setting" class="inline-block relative">
                        <button type="button" class="relative">
                            <img src="{{ asset('images/icon_shopping_cart.png') }}" alt="Logo" class="w-12 h-12 mr-2">
                            <!-- Badge notifikasi untuk jumlah item -->
                            <span id="cartBadge"
                                class="absolute -top-1 -right-1 bg-red-500 text-white text-xs font-bold rounded-full h-6 w-6 flex items-center justify-center hidden">0</span>
                        </button>
                    </a>
                </div>
                <h1 class="text-xl font-bold mb-2 text-white">Cek Pesanan</h1>
                <div class="relative mb-2">
                    <p class="text-md mb-2 text-white">Masukkan kode pesanan anda untuk melihat detail dan status pembelian
                    </p>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="w-5 h-5 text-white opacity-80" fill="none" stroke="currentColor" stroke-width="2"
                                viewBox="0 0 24 24">
                                <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"
                                    fill="none" />
                                <line x1="16.65" y1="16.65" x2="21" y2="21" stroke="currentColor"
                                    stroke-width="2" />
                            </svg>
                        </span>
                        <input type="text" placeholder="Kode Pesanan"
                            class="rounded-2xl bg-green-700 w-full h-12 pl-10 placeholder-white placeholder-opacity-100 text-white" />
                    </div>
                </div>
                <div>
                    <button class="bg-red-500 rounded-2xl w-full h-10">
                        <p class="text-white">CEK</p>
                    </button>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="mt-5">
                <h2 class="text-2xl font-semibold mb-4">Temukan berbagai macam sayur dan buah-buahan</h2>
                <div class="grid grid-flow-row grid-cols-4 gap-2">
                    <button class="bg-gray-300 w-full h-fit p-2 rounded-xl">
                        <p class="text-white text-sm">Semua</p>
                    </button>
                    <button class="bg-sky-300 w-full h-fit p-2 rounded-xl">
                        <p class="text-white text-sm">Buah-buahan</p>
                    </button>
                    <button class="bg-blue-200 w-full h-fit p-2 rounded-xl">
                        <p class="text-white text-sm">Daging</p>
                    </button>
                    <button class="bg-orange-300 w-full h-fit p-2 rounded-xl">
                        <p class="text-white text-sm">Sayuran</p>
                    </button>
                </div>
            </div>

            <div class="block ml-2 mr-2">
                <div class="max-w-3xl mx-auto bg-white rounded-xl space-y-4">
                    <!-- Card 1 -->
                    <div class="flex justify-between items-center border p-2 rounded-lg">
                        <div class="flex items-center gap-4">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvjPN8cI1QN064mlz5c0JCfVdkm0flnFwJ0A&s" alt="Mangga" class="w-14 h-14 rounded object-cover">
                            <div>
                                <h3 class="font-semibold">Mangga Arum Manis</h3>
                                <p class="text-sm text-gray-500">/1 Kilogram</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-gray-800">Rp. 25.000</p>
                            <div class="flex items-center justify-end mt-1 space-x-2">
                                <button class="bg-gray-200 px-2 py-1 rounded-full hover:bg-gray-300 transition-colors"
                                    onclick="decreaseQuantity(this)">-</button>
                                <span class="quantity-display min-w-[20px] text-center">0</span>
                                <button class="bg-gray-200 px-2 py-1 rounded-full hover:bg-gray-300 transition-colors"
                                    onclick="increaseQuantity(this, 25000)">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="flex justify-between items-center border p-2 rounded-lg">
                        <div class="flex items-center gap-4">
                            <img src="https://www.yesdok.com/visual/slideshow/tomat-article-1641484612.jpg?w=1200" alt="Tomat" class="w-14 h-14 rounded object-cover">
                            <div>
                                <h3 class="font-semibold">Tomat</h3>
                                <p class="text-sm text-gray-500">/1 Kilogram</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-gray-800">Rp. 35.000</p>
                            <div class="flex items-center justify-end mt-1 space-x-2">
                                <button class="bg-gray-200 px-2 py-1 rounded-full hover:bg-gray-300 transition-colors"
                                    onclick="decreaseQuantity(this)">-</button>
                                <span class="quantity-display min-w-[20px] text-center">0</span>
                                <button class="bg-gray-200 px-2 py-1 rounded-full hover:bg-gray-300 transition-colors"
                                    onclick="increaseQuantity(this, 35000)">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="flex justify-between items-center border p-2 rounded-lg">
                        <div class="flex items-center gap-4">
                            <img src="https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/02/18053252/sebenarnya-tomat-buah-atau-sayur-ketahui-faktanya-halodoc.jpg.webp" alt="Tomat" class="w-14 h-14 rounded object-cover">
                            <div>
                                <h3 class="font-semibold">Tomat</h3>
                                <p class="text-sm text-gray-500">/1 Bungkus</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <p class="font-bold text-gray-800">Rp. 10.000</p>
                            <div class="flex items-center justify-end mt-1 space-x-2">
                                <button class="bg-gray-200 px-2 py-1 rounded-full hover:bg-gray-300 transition-colors"
                                    onclick="decreaseQuantity(this)">-</button>
                                <span class="quantity-display min-w-[20px] text-center">0</span>
                                <button class="bg-gray-200 px-2 py-1 rounded-full hover:bg-gray-300 transition-colors"
                                    onclick="increaseQuantity(this, 10000)">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fixed Bottom Container for Total Price -->
    <div id="totalContainer"
        class="fixed bottom-4 left-1/2 transform -translate-x-1/2 w-11/12 max-w-md bg-white rounded-2xl shadow-2xl  p-4 transition-all duration-300 ease-in-out hidden">
        <div class="flex justify-between items-center mb-3">
            <div>
                <h3 class="text-lg font-semibold text-gray-800">Total Harga</h3>
                {{-- <span id="itemCount" class="text-sm text-red-500 font-medium">0 item</span> --}}
            </div>
            <div>
                <span id="itemCount" class="text-sm text-red-500 font-medium">0 item</span>
                <button onclick="clearCart()" class="text-red-500 hover:text-red-700 transition-colors">
                    <i class="fa-solid fa-trash-can w-5 h-5"></i>
                </button>
            </div>
        </div>

        <div class="mb-4">
            <p id="totalPrice" class="text-2xl font-bold text-blue-600">Rp 0</p>
        </div>

        <button onclick="processOrder()"
            class="w-full bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-4 rounded-2xl transition-colors duration-200">
            Pesan
        </button>
    </div>

    <script>
        let totalAmount = 0;
        let totalItems = 0;

        function increaseQuantity(button, price) {
            const quantitySpan = button.previousElementSibling;
            let currentQuantity = parseInt(quantitySpan.textContent);
            currentQuantity++;
            quantitySpan.textContent = currentQuantity;

            totalAmount += price;
            totalItems++;
            updateTotalContainer();
        }

        function decreaseQuantity(button) {
            const quantitySpan = button.nextElementSibling;
            let currentQuantity = parseInt(quantitySpan.textContent);

            if (currentQuantity > 0) {
                currentQuantity--;
                quantitySpan.textContent = currentQuantity;

                // Get price from the card
                const priceText = button.closest('.border').querySelector('.font-bold').textContent;
                const price = parseInt(priceText.replace(/[^\d]/g, ''));

                totalAmount -= price;
                totalItems--;
                updateTotalContainer();
            }
        }

        function updateTotalContainer() {
            const container = document.getElementById('totalContainer');
            const itemCount = document.getElementById('itemCount');
            const totalPrice = document.getElementById('totalPrice');
            const cartBadge = document.getElementById('cartBadge');

            if (totalItems > 0) {
                container.classList.remove('hidden');
                itemCount.textContent = totalItems + ' item' + (totalItems > 1 ? 's' : '');
                totalPrice.textContent = 'Rp ' + totalAmount.toLocaleString('id-ID');

                // Update cart badge
                cartBadge.textContent = totalItems;
                cartBadge.classList.remove('hidden');
            } else {
                container.classList.add('hidden');

                // Hide cart badge when no items
                cartBadge.classList.add('hidden');
            }
        }

        function clearCart() {
            // Reset all quantities to 0
            const quantityDisplays = document.querySelectorAll('.quantity-display');
            quantityDisplays.forEach(span => {
                span.textContent = '0';
            });

            totalAmount = 0;
            totalItems = 0;
            updateTotalContainer();
        }

        function processOrder() {
            if (totalItems > 0) {
                alert('Pesanan sebesar Rp ' + totalAmount.toLocaleString('id-ID') + ' sedang diproses!');
                // Redirect ke halaman checkout atau proses lebih lanjut
                // window.location.href = '/checkout';
            }
        }
    </script>
@endsection
