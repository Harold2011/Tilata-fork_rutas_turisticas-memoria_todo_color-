<!-- Componente del menú (nav_landing.blade.php) -->
<nav>
    <ul class="md:flex items-center justify-between text-base text-white pt-4 md:pt-0 hidden md:flex" id="menu">
        <li><a class="md:p-4 py-3 px-0 block" href="{{ route('welcome') }}">Inicio</a></li>
        <li><a class="md:p-4 py-3 px-0 block" href="{{ route('gallery') }}">Galería</a></li>
        <li><a class="md:p-4 py-3 px-0 block" href="{{ route('indexLanding') }}">Talleres</a></li>
        <li><a class="md:p-4 py-3 px-0 block" href="{{ route('storeUser') }}">Tienda</a></li>
        <li><a class="md:p-4 py-3 px-0 block" href="{{ route('contacto.index') }}">Contáctenos</a></li>
        @auth
            <li><a class="md:p-4 py-3 px-0 block" href="{{ route('dashboard') }}">Regresar al panel</a></li>
            <li><a class="md:p-4 py-3 px-0 block" href="{{ route('viewCart') }}"><img src="{{ asset('storage/img/cart-shopping-solid.svg') }}" class="h-5"></a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="md:p-4 py-3 px-0 block bg-transparent text-white border-0">Cerrar sesión</button>
                </form>
            </li>
        @else
            <li><a class="md:p-4 py-3 px-0 block" href="{{ route('login') }}">Iniciar sesión</a></li>
        @endauth
    </ul>

    <!-- Menú desplegable para móviles -->
    <div class="md:hidden h-12">
        <button id="menu-toggle" class="text-white">
            <svg class="fill-current text-white"  width="20" height="20" >
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
        <ul id="mobile-menu" class="hidden flex-col relative z-10 bg-white bg-opacity-80 text-gray-800 space-y-2 mt-2 p-6" >
            <li><a class="p-4 block border-b-2 border-gray-600 hover:bg-gray-400" href="{{ route('welcome') }}">Inicio</a></li>
            <li><a class="p-4 block border-b-2 border-gray-600 hover:bg-gray-400" href="{{ route('gallery') }}">Galería</a></li>
            <li><a class="p-4 block border-b-2 border-gray-600 hover:bg-gray-400" href="{{ route('indexLanding') }}">Talleres</a></li>
            <li><a class="p-4 block border-b-2 border-gray-600 hover:bg-gray-400" href="{{ route('storeUser') }}">Tienda</a></li>
            <li><a class="p-4 block border-b-2 border-gray-600 hover:bg-gray-400" href="{{ route('contacto.index') }}">Contáctenos</a></li>
            @auth
                <li><a class="p-4 block border-b-2 border-gray-600 hover:bg-gray-400" href="{{ route('dashboard') }}">Regresar al panel</a></li>
                <li><a class="p-4 block border-b-2 border-gray-600 hover:bg-gray-400" href="{{ route('viewCart') }}"><img src="{{ asset('storage/img/cart-shopping-solid.svg') }}" class="h-5"></a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:bg-red-400 w-full text-left p-4 bg-transparent text-gray-800 border-0">Cerrar sesión</button>
                    </form>
                </li>
            @else
                <li><a class="p-4 block hover:bg-green-400" href="{{ route('login') }}">Iniciar sesión</a></li>
            @endauth
        </ul>
    </div>
</nav>
