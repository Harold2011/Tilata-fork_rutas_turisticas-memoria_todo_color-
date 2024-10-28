<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite('resources/css/app.css')
    <style>
        .background-image {
            background-image: url('{{ asset('storage/img/background.jpg') }}');
            background-size: cover; /* La imagen cubrirá toda la pantalla */
            background-position: center; /* La imagen estará centrada */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
            background-attachment: fixed; /* La imagen de fondo se mantendrá fija mientras se desplaza el contenido */
        }
        /* Superposición con color humo más fuerte */
        .overlay {
            background-color: rgba(50, 50, 50, 0.7); /* Gris oscuro con opacidad del 70% */
        }

    </style>
</head>
<body class="min-h-screen">
    <div class="relative w-full min-h-screen bg-shadow background-image overlay">
        <div class="content">
        <header class="lg:px-16 px-4 flex flex-wrap items-center py-4">
    <div class="flex-1 flex justify-between items-center">
        <a href="<?php echo e(route('welcome')); ?>" class="text-4xl font-extrabold text-white">
            <img src="{{ asset('storage/img/logo.png') }}" class="h-20 rounded-full">
        </a>
    </div>
    @include('components.nav_landing')
</header>

            
            <div class="flex flex-col items-center justify-center h-full text-center mt-10">
    <h1 class="text-4xl md:text-6xl font-mono text-white uppercase">Bienvenido a Tilata</h1>
    <div class="border-t-2 border-white w-96 my-4"></div>
    <p class="text-white text-xl mt-2 font-mono uppercase">Donde la aventura es crear vida.</p>
    <button id="arrowButton" class="mt-6 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
</div>

<div id="modal" class="relative bg-white bg-opacity-40 p-5 rounded-lg shadow-lg hidden w-full max-w-lg h-64 mt-4 mx-auto">
    <div class="flex h-full">
        <div class="w-1/2 flex flex-col items-center justify-start p-4">
            <h1 class="text-2xl mb-4 font-mono text-gray-900 text-center">Ubicanos</h1>
           <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6562726834222!2d-75.46230492590328!3d6.308808625622875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4425575e19a941%3A0x5f008a2ff7c03b16!2sVivero%20tilata!5e0!3m2!1ses!2sco!4v1729872086508!5m2!1ses!2sco" 
                width="100%" 
                height="150" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="w-1/2 flex flex-col items-center justify-start p-4">
            <h1 class="text-2xl mb-12 font-mono text-gray-900 text-center">Visítanos</h1>
            <ul class="flex space-x-4 text-2xl text-gray-700 items-center justify-center mt-6">
                <li class="px-1 bg-white/50 rounded-full">
                    <a href="https://www.facebook.com/yalvarti" target="_blank">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li class="px-1 bg-white/50 rounded-full">
                    <a href="https://www.instagram.com/viverotilata/?hl=es" target="_blank">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li class="px-1 bg-white/50 rounded-full">
                    <a href="https://api.whatsapp.com/send?phone=573125613686&text=Bienvenido%20al%20vivero%20TILAT%C3%81%20" target="_blank">
                        <ion-icon name="logo-whatsapp"></ion-icon>
                    </a>
                </li>
            </ul>
        </div>  
    </div>
</div>

<script>
    const arrowButton = document.getElementById('arrowButton');
    const modal = document.getElementById('modal');

    arrowButton.addEventListener('click', () => {
        modal.classList.toggle('hidden');
    });
</script>

            </div> 
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
