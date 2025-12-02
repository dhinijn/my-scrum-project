<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Role Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        * {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body class="min-h-screen bg-[#F2E8DC] flex items-center justify-center">

    <div class="text-center px-4">

        {{-- TEKS ATAS --}}
        <h2 class="text-2xl font-bold text-white drop-shadow-md">
            Hi, minlo disini!
        </h2>

        <p class="text-white text-lg font-semibold mt-1 drop-shadow-md">
            Silahkan pilih sesuai role kalian
        </p>

        {{-- BUTTON WRAPPER --}}
        <div class="mt-10 w-full max-w-sm mx-auto flex flex-col gap-5">

            {{-- ADMIN --}}
            <a href="{{ route('login.admin') }}"
               class="w-full flex items-center justify-center gap-3
                      bg-[#6A2D16] hover:bg-[#8b3a1f] text-white
                      py-3 rounded-[999px] font-semibold text-lg shadow-md transition">
                <i class="fa-solid fa-shield-halved text-xl"></i>
                <span>Admin</span>
            </a>

            {{-- USER --}}
            <a href="{{ route('login.user') }}"
               class="w-full flex items-center justify-center gap-3
                      bg-[#6A2D16] hover:bg-[#8b3a1f] text-white
                      py-3 rounded-[999px] font-semibold text-lg shadow-md transition">
                <i class="fa-regular fa-user text-xl"></i>
                <span>User</span>
            </a>

        </div>
    </div>

</body>

</html>
