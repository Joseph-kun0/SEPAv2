<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte Técnico | WebPedimentos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 flex flex-col min-h-screen relative bg-slate-900">

    <img src="{{ asset('css/Fondo.jpg') }}" alt="Fondo" class="fixed inset-0 w-full h-full object-cover z-0">
    <div class="fixed inset-0 bg-black/50 z-0"></div>

    <header class="bg-slate-900/80 backdrop-blur-md text-white shadow-md relative z-10 border-b border-slate-700/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="/" class="text-xl font-bold tracking-wide">S.E.P.A.</a>
            <a href="/" class="text-sm font-medium text-gray-300 hover:text-white transition">
                Volver al inicio
            </a>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center px-4 py-12 relative z-10">
        <div class="max-w-lg w-full bg-white/95 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-white/20 space-y-6">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-slate-900">Soporte Técnico</h2>
                <p class="text-sm text-gray-600 mt-1">¿Tienes dudas o problemas con la plataforma? Envíanos un mensaje.</p>
            </div>

            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" name="nombre" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Asunto</label>
                    <input type="text" name="asunto" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Mensaje</label>
                    <textarea name="mensaje" rows="4" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm"></textarea>
                </div>

                <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition">
                    Enviar Mensaje
                </button>
            </form>
        </div>
    </main>

    <footer class="bg-slate-900/80 backdrop-blur-md text-gray-400 py-4 text-center text-sm border-t border-slate-800 relative z-10">
        <p>&copy; {{ date('Y') }} WebPedimentos. Todos los derechos reservados.</p>
    </footer>

</body>
</html>