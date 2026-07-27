<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | WebPedimentos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans text-gray-800 flex flex-col min-h-screen relative bg-slate-900">

    <img src="{{ asset('css/Fondo.jpg') }}" alt="Fondo" class="fixed inset-0 w-full h-full object-cover z-0">
    <div class="fixed inset-0 bg-black/50 z-0"></div>

    <header class="bg-slate-900/80 backdrop-blur-md text-white shadow-md relative z-10 border-b border-slate-700/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a href="/" class="text-xl font-bold tracking-wide">S.E.P.A.</a>
            <a href="{{ route('login') }}" class="text-sm font-medium text-gray-300 hover:text-white transition">
                ¿Ya tienes cuenta? Iniciar sesión
            </a>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center px-4 py-12 relative z-10">
        <div class="max-w-md w-full bg-white/95 backdrop-blur-md p-8 rounded-2xl shadow-2xl border border-white/20 space-y-6">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-slate-900">Crear Cuenta</h2>
                <p class="text-sm text-gray-600 mt-1">Regístrate para comenzar a gestionar tus pedimentos</p>
            </div>

            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre Completo</label>
                    <input type="text" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Nombre de Usuario</label>
                    <input type="text" name="username" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                    <input type="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" name="password" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 text-sm">
                </div>

                <button type="submit" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-md transition">
                    Registrarse
                </button>
            </form>
        </div>
    </main>

    <!-- Botón flotante de Soporte Técnico -->
<a href="{{ route('soporte') }}" 
title="Soporte Técnico"
class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-110 border border-white/20">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M12 18h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
</a>

    <footer class="bg-slate-900/80 backdrop-blur-md text-gray-400 py-4 text-center text-sm border-t border-slate-800 relative z-10">
        <p>&copy; {{ date('Y') }} WebPedimentos. Todos los derechos reservados.</p>
    </footer>

</body>
</html>