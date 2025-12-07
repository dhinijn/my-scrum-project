<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmed - Joglo</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');
        * { font-family: "Montserrat", sans-serif; }

        /* ANIMASI CARD HIJAU (POP IN) */
        @keyframes confirm-pop {
            0%   { transform: scale(0.8); opacity: 0; }
            60%  { transform: scale(1.04); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* ANIMASI CENTANG (ZOOM) */
        @keyframes tick-pop {
            0%   { transform: scale(0); opacity: 0; }
            60%  { transform: scale(1.2); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* ANIMASI TOMBOL ENJOY! (PELan NAPAS) */
        @keyframes pulse-enjoy {
            0%   { transform: translateY(0) scale(1); }
            50%  { transform: translateY(-2px) scale(1.03); }
            100% { transform: translateY(0) scale(1); }
        }

        .confirm-card {
            animation: confirm-pop 0.6s ease-out;
        }

        .tick-circle {
            animation: tick-pop 0.6s ease-out;
            animation-delay: 0.2s;
            animation-fill-mode: forwards;
            opacity: 0; /* biar bener-bener muncul dari 0 */
        }

        .enjoy-btn {
            animation: pulse-enjoy 1.4s ease-in-out infinite;
            animation-delay: 0.8s;
        }
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
            <div class="flex items-center justify-between mb-5 md:mb-7">
                <div class="flex items-center gap-4">
                    {{-- balik ke halaman book (kalau mau ubah ke step2 tinggal ganti routenya) --}}
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

            <!-- TITLE ATAS -->
            <div class="mb-6 md:mb-8">
                <h2 class="text-sm md:text-base font-semibold tracking-[0.3em] text-[#D13A24] uppercase italic">
                    BOOKING AT JOGLO
                </h2>
                <div class="mt-2 border-t border-[#E2D3C5]"></div>
            </div>

            <!-- BOX HIJAU CONFIRMED -->
            <div class="flex justify-center">
                <div class="confirm-card w-full max-w-2xl bg-[#39A54A] rounded-[40px] md:rounded-[48px]
                            py-10 md:py-16 px-6 md:px-10 flex flex-col items-center text-center">

                    <!-- TEXT BOOKING CONFIRMED -->
                    <div class="text-[#111111] font-semibold tracking-[0.25em] uppercase text-sm md:text-base">
                        <div>BOOKING</div>
                        <div class="mt-1">CONFIRMED</div>
                    </div>

                    <!-- ICON CENTANG -->
                    <div class="tick-circle mt-8 mb-8 w-20 h-20 md:w-24 md:h-24 rounded-full border-4 border-white
                                flex items-center justify-center text-white text-3xl">
                        <i class="fa-solid fa-check"></i>
                    </div>

                    <!-- TOMBOL ENJOY -->
                    <button
                        class="enjoy-btn bg-white text-[#39A54A] font-semibold tracking-[0.2em]
                               px-10 md:px-16 py-3 text-xs md:text-sm uppercase">
                        ENJOY !
                    </button>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
