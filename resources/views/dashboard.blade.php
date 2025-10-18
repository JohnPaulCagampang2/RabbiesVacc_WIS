<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rabbies Vaccination Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-900 text-gray-200 font-sans">

    <!-- Header -->
    <header class="bg-gray-800 border-b border-gray-700 shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo and Brand -->
            <div class="flex items-center space-x-3">
                <img src="/images/logo.jpg" alt="Logo" class="w-10 h-10">
                <h1 class="text-xl font-bold text-orange-400">Rabbies Vaccination System</h1>
            </div>
            
            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ route('dashboard') }}" class="text-orange-400 transition">Dashboard</a>
                <a href="{{ route('profile') }}" class="text-gray-300 hover:text-orange-400 transition">Profile</a>
                <a href="{{ route('reports') }}" class="text-gray-300 hover:text-orange-400 transition">Reports</a>
                <a href="{{ route('settings') }}" class="text-gray-300 hover:text-orange-400 transition">Settings</a>
            </nav>

            <!-- User Section -->
            <div class="flex items-center space-x-4">
                <span class="text-gray-300">Welcome, <strong>{{ Auth::user()->name }}</strong></span>
                
                <!-- Profile Avatar Link -->
                <a href="{{ route('profile') }}" class="flex items-center space-x-2 hover:opacity-80 transition">
                    <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                </a>
                
                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-md transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Banner Section -->
    <section class="relative">
        <img src="/images/banner.jpg" alt="Dog Banner" class="w-full h-72 object-cover opacity-40">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900/80 to-gray-900/95 flex flex-col justify-center items-center text-center text-white">
            <h2 class="text-4xl font-bold mb-2 text-orange-400">Rabbies Vaccination Dashboard</h2>
            <p class="text-lg max-w-2xl text-gray-300">
                Monitor vaccination records, registered pets, and community reports efficiently.
            </p>
        </div>
    </section>

    <!-- Stats / Cards Section -->
    <section class="max-w-7xl mx-auto py-12 px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6 text-center shadow-md hover:shadow-orange-400/20 hover:scale-105 transition">
            <img src="/images/dog1.jpg" alt="Registered Dogs" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover border-2 border-orange-500">
            <h3 class="text-xl font-semibold text-orange-400">Registered Dogs</h3>
            <p class="text-2xl font-bold mt-2 text-white">245</p>
        </div>
        <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6 text-center shadow-md hover:shadow-orange-400/20 hover:scale-105 transition">
            <img src="/images/dog2.jpg" alt="Vaccinated" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover border-2 border-orange-500">
            <h3 class="text-xl font-semibold text-orange-400">Vaccinated</h3>
            <p class="text-2xl font-bold mt-2 text-white">198</p>
        </div>
        <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6 text-center shadow-md hover:shadow-orange-400/20 hover:scale-105 transition">
            <img src="/images/dog3.jpg" alt="Pending" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover border-2 border-orange-500">
            <h3 class="text-xl font-semibold text-orange-400">Pending</h3>
            <p class="text-2xl font-bold mt-2 text-white">47</p>
        </div>
        <div class="bg-gray-800 border border-gray-700 rounded-2xl p-6 text-center shadow-md hover:shadow-orange-400/20 hover:scale-105 transition">
            <img src="/images/dog4.jpg" alt="Reports" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover border-2 border-orange-500">
            <h3 class="text-xl font-semibold text-orange-400">Community Reports</h3>
            <p class="text-2xl font-bold mt-2 text-white">12</p>
        </div>
    </section>

    <!-- Info Section -->
    <section class="max-w-7xl mx-auto py-12 px-6 flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-1/2">
            <img src="/images/dog5.jpg" alt="Dogs" class="rounded-2xl shadow-lg border border-gray-700">
        </div>
        <div class="md:w-1/2 space-y-4">
            <h3 class="text-3xl font-bold text-orange-400">Protecting Our Furry Friends</h3>
            <p class="text-gray-300">
                Our system helps track vaccination schedules and ensures every dog receives timely rabies shots.
                Stay informed, stay safe — together, we can prevent rabies and keep our community healthy.
            </p>
            <a href="{{ route('reports') }}" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-medium px-6 py-3 rounded-md transition">
                View Reports
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 text-gray-400 py-8">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} Rabbies Vaccination System. All rights reserved.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:text-orange-400">Facebook</a>
                <a href="#" class="hover:text-orange-400">Instagram</a>
                <a href="#" class="hover:text-orange-400">Twitter</a>
            </div>
        </div>
    </footer>

</body>
</html>