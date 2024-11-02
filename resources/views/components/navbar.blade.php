<nav class="fixed top-0 left-0 h-full w-[250px] p-3 shadow-md bg-white z-50">
    <div class="flex flex-col h-full">
        <!-- Logo Situs -->
        <div class="flex items-center mb-4">
            <img src="{{ asset('images/scholarship.png') }}" alt="" class="w-[40px] h-[40px] mr-4">
            <a class="text-xl font-bold uppercase" href="/">Pendaftaran Beasiswa</a>
        </div>

        <!-- Menu Navigasi di atas -->
        <div id="menu" class="flex flex-col space-y-3 mt-4">
            <!-- Link ke Beranda -->
            <a href="{{ route('beranda') }}" class="block whitespace-nowrap">
                <button class="{{ request()->routeIs('beranda') ? 'bg-blue-500 text-white' : 'text-gray-500 hover:bg-blue-500 hover:text-white' }} rounded px-2 py-1 font-medium w-full text-left">
                    Beranda
                </button>
            </a>

            <!-- Link ke Daftar Beasiswa -->
            <a href="{{ route('daftar') }}" class="block whitespace-nowrap">
                <button class="{{ request()->routeIs('daftar') ? 'bg-blue-500 text-white' : 'text-gray-500 hover:bg-blue-500 hover:text-white' }} rounded px-2 py-1 font-medium w-full text-left">
                    Daftar Beasiswa
                </button>
            </a>

            <!-- Link ke Hasil Pendaftaran -->
            <a href="{{ route('hasil') }}" class="block whitespace-nowrap">
                <button class="{{ request()->routeIs('hasil') ? 'bg-blue-500 text-white' : 'text-gray-500 hover:bg-blue-500 hover:text-white' }} rounded px-2 py-1 font-medium w-full text-left">
                    Hasil Pendaftaran
                </button>
            </a>

            <!-- Link ke Grafik -->
            <a href="{{ route('grafik') }}" class="block whitespace-nowrap">
                <button class="{{ request()->routeIs('grafik') ? 'bg-blue-500 text-white' : 'text-gray-500 hover:bg-blue-500 hover:text-white' }} rounded px-2 py-1 font-medium w-full text-left">
                    Grafik
                </button>
            </a>
        </div>
    </div>
</nav>

<!-- Script untuk toggle menu pada tampilan mobile -->
<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', function() {
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
</script>
