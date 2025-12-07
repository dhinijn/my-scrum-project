<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking at Joglo</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        * { font-family: "Montserrat", sans-serif; }
    </style>
</head>

<body class="min-h-screen">

    <!-- BACKGROUND FULL GAMBAR2 -->
    <div class="relative min-h-screen flex items-center justify-center
                bg-cover bg-center bg-no-repeat"
         style="background-image: url('{{ asset('images/homepage/gambar2.png') }}');">

        <!-- overlay -->
        <div class="absolute inset-0 bg-black/30"></div>

        <!-- KARTU PUTIH BESAR -->
        <div class="relative z-10 w-full max-w-6xl mx-4 md:mx-10
                    bg-[#FFF8F3] rounded-[40px] shadow-2xl
                    px-6 md:px-12 py-6 md:py-10">

            <!-- TOP BAR -->
            <div class="flex items-center justify-between mb-5 md:mb-8">
                <div class="flex items-center gap-4">
                    <a href="{{ route('book') }}"
                       class="w-9 h-9 flex items-center justify-center rounded-full
                              hover:bg-[#F1E1D4] text-[#4A2B1B] text-xl">
                        &larr;
                    </a>
                </div>

                <div class="flex items-center gap-3 text-[11px] md:text-sm font-semibold text-[#4A2B1B]">
                    <span>REGITA YOLANDA</span>
                    <span class="w-8 h-8 rounded-full bg-[#EBD7C7] flex items-center justify-center">
                        <i class="fa-regular fa-user"></i>
                    </span>
                </div>
            </div>

            <!-- STEP BAR -->
            <div class="mb-4 md:mb-6">
                <div class="flex items-center justify-center gap-8 text-xs md:text-sm font-semibold text-[#4A2B1B]">
                    <div class="flex items-center gap-2">
                        <span
                            class="w-4 h-4 rounded-full bg-[#D13A24] text-white flex items-center justify-center text-[10px]">
                            1
                        </span>
                        <span>Find a Table</span>
                    </div>

                    <div class="flex items-center gap-2 opacity-70">
                        <span
                            class="w-4 h-4 rounded-full border border-[#D13A24] text-[#D13A24]
                                   flex items-center justify-center text-[10px]">
                            2
                        </span>
                        <span>Add Your Detail</span>
                    </div>
                </div>

                <div class="mt-3 border-t border-[#E2D3C5]"></div>
            </div>

            <!-- JUDUL -->
            <div class="mb-4 md:mb-6">
                <h2 class="text-sm md:text-base font-semibold tracking-[0.3em] text-[#D13A24] uppercase">
                    BOOKING AT JOGLO
                </h2>
                <div class="mt-2 border-t border-[#E2D3C5]"></div>
            </div>

            <!-- FORM -->
            <form action="{{ route('book.detail.info') }}" method="GET">

                <!-- FORM TIME + PEOPLE -->
                <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-6 md:mb-8">

                    <!-- Time -->
                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <i class="fa-regular fa-clock text-[#4A2B1B]"></i>
                        <div
                            class="flex-1 min-w-[160px] border-b border-[#D0C0B4] flex items-center justify-between pb-1">
                            <input
                                type="time"
                                name="time"
                                value="18:30"
                                class="bg-transparent text-sm text-[#4A2B1B] focus:outline-none w-full"
                                required>
                            <i class="fa-solid fa-chevron-down text-[10px] text-[#4A2B1B]/70"></i>
                        </div>
                    </div>

                    <!-- Divider vertical (desktop) -->
                    <div class="hidden md:block h-10 w-px bg-[#E2D3C5]"></div>

                    <!-- People -->
                    <div class="flex items-center gap-3 w-full md:w-auto">
                        <i class="fa-regular fa-user text-[#4A2B1B]"></i>
                        <div
                            class="flex-1 min-w-[160px] border-b border-[#D0C0B4] flex items-center justify-between pb-1">
                            <select
                                name="people"
                                class="bg-transparent text-sm text-[#4A2B1B] focus:outline-none w-full"
                                required>
                                <option value="" disabled selected>Choose...</option>
                                <option value="2">2 People</option>
                                <option value="3">3 People</option>
                                <option value="4">4 People</option>
                                <option value="5">5 People</option>
                            </select>
                            <i class="fa-solid fa-chevron-down text-[10px] text-[#4A2B1B]/70"></i>
                        </div>
                    </div>
                </div>

                <!-- BUTTON FIND A TABLE -->
                <div class="flex justify-center mb-6 md:mb-8">
                    <button
                        type="submit"
                        class="px-10 py-3 rounded-full bg-[#7A3E22] hover:bg-[#9c5a33]
                                text-white font-semibold text-sm md:text-base">
                        FIND A TABLE
                    </button>
                </div>
            </form>

            <!-- CATEGORY BUTTONS -->
            <div class="space-y-3 md:space-y-4 text-xs md:text-sm font-semibold text-white">

                <!-- baris pertama: 4 button -->
                <div class="flex flex-wrap justify-center gap-3 md:gap-4">
                    <button class="px-6 py-2 bg-[#6A331C] hover:bg-[#8B4427] rounded-md">
                        OUTDOOR
                    </button>
                    <button class="px-6 py-2 bg-[#6A331C] hover:bg-[#8B4427] rounded-md">
                        INDOOR
                    </button>
                    <button class="px-6 py-2 bg-[#6A331C] hover:bg-[#8B4427] rounded-md">
                        MEETING ROOM
                    </button>
                    <button class="px-6 py-2 bg-[#6A331C] hover:bg-[#8B4427] rounded-md">
                        PRIVATE ROOM
                    </button>
                </div>

                <!-- baris kedua: 1 button di tengah -->
                <div class="flex justify-center">
                    <button class="px-8 py-2 bg-[#6A331C] hover:bg-[#8B4427] rounded-md">
                        WORKING SPACE
                    </button>
                </div>

            </div>

        </div> <!-- akhir kartu putih -->
    </div> <!-- akhir background -->

</body>
</html>
