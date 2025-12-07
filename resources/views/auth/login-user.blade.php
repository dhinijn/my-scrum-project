<!doctype html>
<html class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        * { font-family: "Montserrat", sans-serif; }
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

    <!-- LEFT SIDE -->
    <div class="hidden md:block relative">
        <img src="{{ asset('images/homepage/gambar2.png') }}"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>

        <!-- Back ke pilih role -->
        <a href="{{ url('/login') }}"
           class="absolute top-6 left-6 text-white text-3xl font-bold z-20">
            &larr;
        </a>

        <div class="absolute inset-0 flex flex-col justify-center pl-16 z-10">
            <h1 class="text-4xl font-bold text-white max-w-md leading-tight">
                Selamat Datang di Joglo Lontar
            </h1>
            <p class="text-white mt-4 max-w-sm">
                Nikmati pengalaman kuliner dengan suasana tradisional khas Jogja.
            </p>
        </div>
    </div>

    <!-- RIGHT SIDE (LOGIN CARD) -->
    <div class="flex items-center justify-center bg-cafe-100 p-8 relative">

        <!-- Back (mobile) -->
        <a href="{{ url('/login') }}"
           class="absolute top-6 left-6 text-cafe-700 text-2xl font-bold md:hidden">
            &larr;
        </a>

        <div class="w-full max-w-md bg-white shadow-xl rounded-3xl p-10 border border-cafe-300">

            <h2 class="text-3xl font-bold text-cafe-700 mb-2 text-center">Login User</h2>
            <p class="text-gray-500 text-sm mb-8 text-center">
                Silakan masuk untuk melanjutkan
            </p>

            <form method="POST" action="{{ route('login.post') }}">
                @csrf
                <input type="hidden" name="role" value="user">

                <div class="mb-6">
                    <label class="block text-sm font-medium mb-2">Email</label>
                    <input type="email" name="email"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-cafe-500">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-medium mb-2">Password</label>
                    <input type="password" name="password"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:ring-2 focus:ring-cafe-500">
                </div>

                <button type="submit"
                        class="w-full bg-cafe-500 text-white py-3 rounded-xl font-semibold text-lg shadow-md hover:bg-cafe-700 transition-all">
                    Masuk
                </button>

                <p class="mt-4 text-sm text-center">
                    Belum punya akun?
                    <a href="{{ route('register.user') }}" class="text-cafe-700 font-semibold hover:underline">
                        Register
                    </a>
                </p>
            </form>

        </div>
    </div>
</div>

</body>
</html>
