<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joglo Lontar Cafe</title>

    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        * {
            font-family: "Montserrat", sans-serif;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.45);
        }
    </style>

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>

<body class="bg-[#EDE0D4]">

    {{-- ======================= HEADER (NAVBAR + HERO JADI SATU) ======================= --}}
    <header class="relative w-full h-[520px] bg-cover bg-center"
        style="background-image: url('/image/homepage/gambar1.png');">

        {{-- Overlay gelap --}}
        <div class="absolute inset-0 overlay"></div>

        {{-- NAVBAR transparan di atas gambar --}}
        <nav class="absolute top-0 left-0 w-full px-10 py-5 flex items-center justify-between z-20">

            {{-- Logo --}}
            <div class="text-white text-xl font-bold tracking-wide">
                Joglo Lontar Café
            </div>

            {{-- Menu tengah --}}
            <ul class="hidden md:flex gap-8 text-white font-medium">
                <li><a href="#hero" class="hover:text-yellow-300">Home</a></li>
                <li><a href="#story" class="hover:text-yellow-300">Learn</a></li>
                <li><a href="#story" class="hover:text-yellow-300">About Us</a></li>
                <li><a href="#location" class="hover:text-yellow-300">Location</a></li>
                <li><a href="#review" class="hover:text-yellow-300">Review</a></li>
            </ul>

            {{-- Kanan: GET THE APP + icon2 --}}
            <div class="flex items-center gap-4 text-white">

                <button
                    class="bg-[#7A3E22] px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#9c5a33] transition">
                    GET THE APP
                </button>

                {{-- Search (belum fungsi, nanti bisa diarahkan ke page search) --}}
                <button class="text-lg hover:text-yellow-300">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

                {{-- Login --}}
                <a href="{{ route('login') }}" class="text-lg hover:text-yellow-300">
                    <i class="fa-regular fa-user"></i>
                </a>

                {{-- Cart / Product --}}
                <a href="{{ route('product') }}" class="text-lg hover:text-yellow-300">
                    <i class="fa-solid fa-bag-shopping"></i>
                </a>
            </div>
        </nav>

        {{-- HERO TEXT --}}
        <div id="hero" class="absolute inset-0 flex flex-col justify-center px-10 z-10 text-white max-w-xl mt-10">
            <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                Joglo Concept and Indonesian Heritage
            </h1>
            <p class="mt-3 text-sm md:text-base text-gray-200">
                Traditional Joglo is derived from the word “Tajug Loro”, a pyramid temple roof.
                Joglo Café provides the best Indonesian meals with a warm atmosphere.
            </p>

            <div class="mt-5">
                <button
                    class="bg-[#7A3E22] px-4 py-2 rounded-md text-sm font-semibold hover:bg-[#9c5a33] transition">
                    Get In Touch
                </button>
            </div>
        </div>
    </header>

    {{-- ======================= 3 MENU SECTION ======================= --}}
    <section class="bg-[#D6C0A4] py-16">
        <div class="max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-12 text-center">

            <div>
                <img src="/images/dinein.png" class="w-28 mx-auto" alt="Dine In">
                <p class="mt-4 font-semibold tracking-wide">DINE IN</p>
            </div>

            <div>
                <img src="/images/reservation.png" class="w-28 mx-auto" alt="Reservation">
                <p class="mt-4 font-semibold tracking-wide">RESERVATION</p>
            </div>

            <div>
                <img src="/images/takeaway.png" class="w-28 mx-auto" alt="Take Away">
                <p class="mt-4 font-semibold tracking-wide">TAKE AWAY</p>
            </div>

        </div>
    </section>

    {{-- ======================= OUR STORY ======================= --}}
    <section id="story" class="bg-[#C19D7F] py-16">
        <h2 class="text-center text-xl font-bold tracking-wide text-[#3E2C25]">OUR STORY</h2>

        <div class="max-w-3xl mx-auto mt-6">
            {{-- nanti bisa diisi teks / gambar video, sekarang placeholder box --}}
            <div class="bg-[#7B4F3F] h-[240px] rounded-xl"></div>
        </div>
    </section>

    {{-- ======================= BEST MENU ======================= --}}
    <section class="bg-[#F0E0D0] py-20">
        <h2 class="text-center text-lg font-semibold tracking-wide text-[#3E2C25]">
            JOGLO IS BEST MENU FOR YEARS
        </h2>

        <div class="mt-10 max-w-5xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-12">

            <div class="flex flex-col items-center">
                <img src="/images/nasigoreng.jpg" class="w-72 h-52 object-cover rounded-md" alt="Nasi Goreng Joglo">
                <p class="mt-4 font-semibold text-[#3E2C25]">
                    Nasi Goreng Joglo + Telur — 25k
                </p>
            </div>

            <div class="flex flex-col items-center">
                <img src="/images/wedanguwuh.jpg" class="w-72 h-52 object-cover rounded-md" alt="Wedang Uwuh">
                <p class="mt-4 font-semibold text-[#3E2C25]">
                    Wedang Uwuh — 10k
                </p>
            </div>

        </div>

        <div class="text-center mt-10">
            <button class="bg-[#7A3E22] px-6 py-2 rounded-lg text-white font-semibold hover:bg-[#9c5a33] transition">
                View More
            </button>
        </div>
    </section>

    {{-- ======================= FOOTER ======================= --}}
    <footer class="bg-[#3E2C25] text-white py-10 px-8 mt-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">

            <div>
                <h3 class="font-bold text-lg mb-3">Joglo Lontar Café</h3>
                <p class="text-sm">
                    The best Indonesian traditional café with Joglo concept, serving warm meals and heritage vibes.
                </p>
            </div>

            <div id="location">
                <h3 class="font-bold mb-3">Opening Hours</h3>
                <p class="text-sm">Mon – Fri : 10.00 – 22.00</p>
                <p class="text-sm">Sat – Sun : 08.00 – 23.00</p>
            </div>

            <div>
                <h3 class="font-bold mb-3">Contact Us</h3>
                <p class="text-sm">joglolontar@gmail.com</p>
                <p class="text-sm">+62 812-3456-789</p>
            </div>

            <div id="review">
                <h3 class="font-bold mb-3">Follow Us</h3>
                <p class="text-sm">@joglolontarcafe</p>
                <p class="text-sm">Instagram • TikTok • Facebook</p>
            </div>

        </div>

        <p class="text-center mt-10 text-xs text-gray-300">
            © 2025 Joglo Lontar Café. All Rights Reserved.
        </p>
    </footer>

</body>

</html>
