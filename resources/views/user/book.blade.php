<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Table - Joglo Lontar Cafe</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');

        body, input, select {
            font-family: "Poppins", sans-serif;
        }

        .title {
            font-family: "Fredoka One", cursive;
        }
    </style>
</head>

<body class="bg-[#C8A892]">

    <!-- ================= NAVBAR ================= -->
    <nav class="w-full flex items-center justify-between px-10 py-4 bg-[#3A2A20] text-white">

        <div class="text-[#FFA34C] text-xl font-bold tracking-wide">
            JOGLO LONTAR CAFE
        </div>

        <div class="flex items-center gap-10 text-sm font-semibold">

            <a href="/" class="hover:text-yellow-300">HOME</a>
            <a href="#learn" class="hover:text-yellow-300">LEARN</a>
            <a href="#about" class="hover:text-yellow-300">ABOUT US</a>
            <a href="#location" class="hover:text-yellow-300">LOCATION</a>
            <a href="#review" class="hover:text-yellow-300">REVIEW</a>

            <button class="bg-[#5C2E1A] px-4 py-2 rounded-full text-white hover:bg-[#75402A]">
                JOGLO TO GO
            </button>

            <button class="bg-[#D35426] px-4 py-2 rounded-full font-bold hover:bg-[#e36734]">
                BOOK A TABLE
            </button>

            <i class="fa-regular fa-user text-lg cursor-pointer"></i>
            <i class="fa-solid fa-bag-shopping text-lg cursor-pointer"></i>
        </div>

    </nav>

    <!-- ================= BACKGROUND SECTION ================= -->
    <section class="w-full h-auto relative">

        <img src="{{ asset('images/homepage/gambar2.png') }}"
             class="w-full h-[650px] object-cover brightness-90">

        <div class="absolute inset-0 bg-black/20"></div>

        <!-- TITLE -->
        <h1 class="absolute top-10 left-10 text-[70px] title text-[#F6D9C0] drop-shadow-lg">
            BOOK A TABLE
        </h1>

        <!-- FORM CONTAINER -->
        <div class="absolute top-52 left-1/2 -translate-x-1/2 w-[80%] max-w-4xl">

            <!-- FORM MULAI DI SINI -->
            <form action="{{ route('book.detail') }}" method="GET">

                <!-- DATE -->
                <label class="block text-[#E74C3C] font-bold text-lg mb-1">DATE</label>
                <div class="bg-white rounded-xl shadow-md flex items-center px-6 py-4 mb-10">
                    <input
                        type="date"
                        name="date"
                        class="flex-1 outline-none text-gray-600 text-lg"
                        required>
                    <i class="fa-regular fa-calendar text-xl text-gray-700"></i>
                </div>

                <div class="grid grid-cols-2 gap-8">

                    <!-- TIME -->
                    <div>
                        <label class="block text-[#E74C3C] font-bold text-lg mb-1">TIME</label>
                        <div class="bg-white rounded-xl shadow-md flex items-center px-6 py-4">
                            <input
                                type="time"
                                name="time"
                                class="flex-1 outline-none text-gray-600 text-lg"
                                required>
                            <i class="fa-regular fa-clock text-xl text-gray-700"></i>
                        </div>
                    </div>

                    <!-- PEOPLE -->
                    <div>
                        <label class="block text-[#E74C3C] font-bold text-lg mb-1">PEOPLE</label>
                        <div class="bg-white rounded-xl shadow-md flex items-center px-6 py-4">
                            <select
                                name="people"
                                class="flex-1 outline-none text-gray-600 text-lg"
                                required>
                                <option value="" disabled selected>Choose...</option>
                                <option value="1">1 Person</option>
                                <option value="2">2 People</option>
                                <option value="3">3 People</option>
                                <option value="4">4 People</option>
                                <option value="5+">5+ People</option>
                            </select>
                            <i class="fa-solid fa-user-group text-xl text-gray-700"></i>
                        </div>
                    </div>

                </div>

                <!-- BUTTON -->
                <div class="flex justify-center mt-12">
                    <button
                        type="submit"
                        class="bg-[#3A2117] text-white text-lg font-semibold px-16 py-4 rounded-3xl hover:bg-[#4d2f21]">
                        BOOK NOW
                    </button>
                </div>

            </form>
            <!-- FORM SELESAI -->

        </div>

    </section>

</body>
</html>
