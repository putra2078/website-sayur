<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Ini langsung bisa dipakai, tanpa login -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('head')
    <title>Frontend Basic Test</title>
</head>

<body class="flex justify-center min-h-screen" style="max-width: 600px; margin: 0 auto; ">
    @yield('content')
</body>
@yield('scripts')
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

</html>
