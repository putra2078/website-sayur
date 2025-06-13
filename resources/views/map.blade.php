<!-- resources/views/pilih-lokasi.blade.php -->
@extends('layouts.app')

@section('head')
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
            width: 100%;
            border-radius: 0;
        }

        .custom-marker {
            background-color: #e53e3e;
            width: 30px;
            height: 30px;
            border-radius: 50% 50% 50% 0;
            position: relative;
            transform: rotate(-45deg);
            border: 3px solid #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .custom-marker::after {
            content: '';
            width: 14px;
            height: 14px;
            background-color: #fff;
            position: absolute;
            border-radius: 50%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
        }
    </style>
@endsection

@section('content')
    <div class="bg-white min-h-screen w-full px-20">
        <!-- Header dengan Search Bar -->
        <div class="bg-green-600 px-4 py-3 relative">
            <div class="flex items-center gap-3 bg-green-500 text-white rounded-full px-4 py-2">
                <button onclick="history.back()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <div class="flex items-center gap-2 flex-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="M21 21l-4.35-4.35"></path>
                    </svg>
                    <input type="text" placeholder="Cari Lokasi..."
                        class="bg-transparent w-full focus:outline-none text-sm placeholder-green-200" id="searchInput" />
                </div>
            </div>

            <!-- Map Controls -->
            <div class="absolute right-4 top-16 bg-white rounded shadow-lg z-50">
                <button onclick="zoomIn()"
                    class="block w-8 h-8 text-gray-600 hover:bg-gray-100 border-b border-gray-200 flex items-center justify-center">
                    <span class="text-lg font-bold">+</span>
                </button>
                <button onclick="zoomOut()"
                    class="block w-8 h-8 text-gray-600 hover:bg-gray-100 flex items-center justify-center">
                    <span class="text-lg font-bold">−</span>
                </button>
            </div>
        </div>

        <!-- Peta -->
        <div id="map" class="relative">
            <!-- Leaflet Attribution akan muncul di sini -->
        </div>

        <!-- Info Lokasi -->
        <div class="p-4">
            <div class="flex items-center gap-3 mb-4">
                <div class="bg-green-600 rounded-full p-2 flex-shrink-0">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="flex-1">
                    <h3 class="font-medium text-gray-900">Pilih Lokasi</h3>
                    <p id="locationName" class="text-sm text-gray-500">Pilih Lokasi</p>
                </div>
            </div>

            <!-- Tombol Pilih Lokasi -->
            <button disabled id="selectLocationBtn"
                class="w-full py-3 bg-gray-300 text-gray-500 rounded-full text-sm font-medium transition-colors duration-200">
                Pilih lokasi ini
            </button>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        let map = L.map('map', {
            zoomControl: false, // Disable default zoom control
            attributionControl: true
        }).setView([-6.8222, 107.1424], 13); // Cianjur default

        // Add tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
            maxZoom: 19
        }).addTo(map);

        // Custom marker icon
        let customIcon = L.divIcon({
            className: 'custom-marker',
            iconSize: [30, 30],
            iconAnchor: [15, 30],
            popupAnchor: [0, -30]
        });

        // Add draggable marker
        let marker = L.marker([-6.8222, 107.1424], {
            draggable: true,
            icon: customIcon
        }).addTo(map);

        // Handle marker drag
        marker.on('dragend', function(e) {
            const {
                lat,
                lng
            } = marker.getLatLng();
            updateLocationInfo(lat, lng);
            enableSelectButton();
        });

        // Handle map clicks
        map.on('click', function(e) {
            const {
                lat,
                lng
            } = e.latlng;
            marker.setLatLng([lat, lng]);
            updateLocationInfo(lat, lng);
            enableSelectButton();
        });

        // Update location info
        function updateLocationInfo(lat, lng) {
            document.getElementById('locationName').innerText = `${lat.toFixed(5)}, ${lng.toFixed(5)}`;

            // Optional: Reverse geocoding to get address
            fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`)
                .then(response => response.json())
                .then(data => {
                    if (data.display_name) {
                        document.getElementById('locationName').innerText = data.display_name;
                    }
                })
                .catch(error => {
                    console.log('Reverse geocoding failed:', error);
                });
        }

        // Enable select button
        function enableSelectButton() {
            const btn = document.getElementById('selectLocationBtn');
            btn.disabled = false;
            btn.classList.remove('bg-gray-300', 'text-gray-500');
            btn.classList.add('bg-green-600', 'text-white', 'hover:bg-green-700');
        }

        // Zoom functions
        function zoomIn() {
            map.zoomIn();
        }

        function zoomOut() {
            map.zoomOut();
        }

        // Search functionality
        document.getElementById('searchInput').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const query = this.value;
                if (query.trim()) {
                    searchLocation(query);
                }
            }
        });

        // Search location function
        function searchLocation(query) {
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(query)}&limit=1`)
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        const {
                            lat,
                            lon,
                            display_name
                        } = data[0];
                        const newLat = parseFloat(lat);
                        const newLng = parseFloat(lon);

                        map.setView([newLat, newLng], 15);
                        marker.setLatLng([newLat, newLng]);

                        document.getElementById('locationName').innerText = display_name;
                        enableSelectButton();
                    } else {
                        alert('Lokasi tidak ditemukan');
                    }
                })
                .catch(error => {
                    console.error('Search failed:', error);
                    alert('Pencarian gagal');
                });
        }

        // Handle select location button
        document.getElementById('selectLocationBtn').addEventListener('click', function() {
            const {
                lat,
                lng
            } = marker.getLatLng();
            const locationName = document.getElementById('locationName').innerText;

            // You can customize this part based on your needs
            // For example, send data to server or parent window
            console.log('Selected location:', {
                lat,
                lng,
                name: locationName
            });

            // Example: If this is a modal or popup, you might want to close it
            // window.close() or trigger a callback
            alert(`Lokasi dipilih: ${locationName}`);
        });
    </script>
@endsection
