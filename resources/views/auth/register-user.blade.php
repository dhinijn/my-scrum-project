<!doctype html>
<html class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        * {
            font-family: "Montserrat", sans-serif;
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cafe: {
                            100: '#F8F1E7',
                            300: '#D9C4A9',
                            500: '#B27A4C',
                            700: '#6E4B2E'
                        }
                    }
                }
            }
        }
    </script>
</head>

<body class="h-full">

    <div class="grid grid-cols-1 md:grid-cols-2 h-screen">

        <!-- LEFT SIDE (BACKGROUND RESTO) -->
        <div class="hidden md:block relative">
            <img src="/images/hero-bg.jpg"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50"></div>

            <div class="absolute inset-0 flex flex-col justify-center pl-16">
                <h1 class="text-4xl font-bold text-white max-w-md leading-tight">
                    Daftar Menjadi Pelanggan Joglo Lontar
                </h1>
                <p class="text-white mt-4 max-w-sm">
                    Buat akunmu dan nikmati pengalaman kuliner terbaik dengan nuansa tradisional Jogja.
                </p>
            </div>
        </div>


        <!-- RIGHT SIDE (REGISTER CARD) -->
        <div class="flex items-center justify-center bg-cafe-100 p-8">
            <div class="w-full max-w-md bg-white shadow-xl rounded-3xl p-10 border border-cafe-300">

                <h2 class="text-3xl font-bold text-cafe-700 mb-2 text-center">Register</h2>
                <p class="text-gray-500 text-sm mb-8 text-center">
                    Buat akun baru untuk melanjutkan
                </p>

                <!-- Form -->
                <form method="POST" action="{{ route('register.post') }}">
                    @csrf

                    {{-- ROLE USER --}}
                    <input type="hidden" name="role" value="user">

                    <!-- Full Name -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-2">Nama Lengkap</label>
                        <input type="text" name="name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-cafe-500"
                            required>
                    </div>

                    <!-- Email -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" name="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-cafe-500"
                            required>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-2">Password</label>
                        <input type="password" name="password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-cafe-500"
                            required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-2">Confirm Password</label>
                        <input type="password" name="password_confirmation"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-cafe-500"
                            required>
                    </div>

                    <!-- Button -->
                    <button type="submit"
                        class="w-full bg-cafe-500 text-white py-3 rounded-xl font-semibold text-lg shadow-md hover:bg-cafe-700 transition-all">
                        Buat Akun
                    </button>

                    <p class="mt-4 text-sm text-center">
                        Sudah punya akun?
                        <a href="{{ route('login.user') }}" class="text-cafe-700 font-semibold hover:underline">
                            Login
                        </a>
                    </p>
                </form>

            </div>
        </div>

    </div>

</body>

</html>
