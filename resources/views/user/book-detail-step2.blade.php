<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking at Joglo - Detail</title>

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
            <div class="flex items-center justify-between mb-5 md:mb-7">
                <div class="flex items-center gap-4">
                    {{-- balik ke step 1 (Find a Table) --}}
                    <a href="{{ route('book.detail') }}"
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
                    {{-- step 1 (icon hitam, teks biasa) --}}
                    <div class="flex items-center gap-2 opacity-80">
                        <i class="fa-regular fa-circle text-[10px]"></i>
                        <span>Find a Table</span>
                    </div>

                    {{-- step 2 (ikon merah, teks merah) --}}
                    <div class="flex items-center gap-2 text-[#D13A24]">
                        <i class="fa-solid fa-circle text-[10px]"></i>
                        <span>Add Your Detail</span>
                    </div>
                </div>

                <div class="mt-3 border-t border-[#E2D3C5]"></div>
            </div>

            <!-- JUDUL -->
            <div class="mb-6 md:mb-8">
                <h2 class="text-sm md:text-base font-semibold tracking-[0.3em] text-[#D13A24] uppercase italic">
                    BOOKING AT JOGLO
                </h2>
                <div class="mt-2 border-t border-[#E2D3C5]"></div>
            </div>

            <!-- FORM DETAIL -->
            <form class="max-w-xl mx-auto mt-2"
      action="{{ route('book.confirmed') }}"
      method="GET">
    {{-- kalau nanti mau simpan ke DB, ganti GET -> POST dan tambahin @csrf --}}

            <!-- NAME -->
            <div class="mb-8">
                <label class="block text-[11px] tracking-[0.18em] uppercase text-[#444] mb-1">
                    NAME
                </label>
                <input type="text" name="name"
                    class="w-full bg-transparent border-b border-[#CBB9AA] pb-1
                            focus:outline-none focus:border-[#7A3E22] text-sm text-[#333]"
                    required>
            </div>

            <!-- NO.TLP -->
            <div class="mb-8">
                <label class="block text-[11px] tracking-[0.18em] uppercase text-[#444] mb-1">
                    NO.TLP
                </label>
                <input type="text" name="phone"
                    class="w-full bg-transparent border-b border-[#CBB9AA] pb-1
                            focus:outline-none focus:border-[#7A3E22] text-sm text-[#333]"
                    required>
            </div>

            <!-- EMAIL -->
            <div class="mb-10">
                <label class="block text-[11px] tracking-[0.18em] uppercase text-[#444] mb-1">
                    EMAIL
                </label>
                <input type="email" name="email"
                    class="w-full bg-transparent border-b border-[#CBB9AA] pb-1
                            focus:outline-none focus:border-[#7A3E22] text-sm text-[#333]"
                    required>
            </div>

            <!-- BUTTON CONFIRM -->
            <div class="flex justify-center mt-4">
                <button type="submit"
                        class="px-14 py-3 rounded-full bg-[#7A3E22] hover:bg-[#9c5a33]
                            text-white font-semibold tracking-[0.18em] text-xs md:text-sm">
                    CONFIRM
                </button>
            </div>
        </form>


        </div>
    </div>

</body>
</html>
