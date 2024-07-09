<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        @vite('resources/css/app.css')

       
    </head>
    <body class="bg-gray-800">
        <header class="p-5  bg-gray-400 shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                istagram fake!
                </h1>
                <nav class="flex gap items-center">
                    <a class="font-bold uppercase text-gray-600" href="#">Login</a>
                    <a class="font-bold uppercase text-gray-600" href="#">crear cuenta</a>
                </nav>
            </div>
            
        </header>
        <main class="container mx-auto mt-10">
            <h2 class=" font-black text-center text-3xl mb-10 text-gray-200" >
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <footer class=" text-center p-5 text-gray-200 font-bold uppercase">
            Instagram Fake! -todos los derechos recervados {{ now( )->year }}
        </footer>       
    </body>
</html>
