<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rabbies Vaccination Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#fffaf5] text-gray-800 font-sans">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center space-x-3">
                <img src="/images/logo.jpg" alt="Logo" class="w-10 h-10">
                <h1 class="text-xl font-bold text-orange-600">Rabbies Vaccination System</h1>
            </div>
            <div class="flex items-center space-x-4">
                <span class="text-gray-600">Welcome, <strong>{{ Auth::user()->name }}</strong></span>
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
        <img src="/images/banner.jpg" alt="Dog Banner" class="w-full h-72 object-cover">
        <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-center text-white">
            <h2 class="text-4xl font-bold mb-2">Rabbies Vaccination Dashboard</h2>
            <p class="text-lg max-w-2xl">Monitor vaccination records, registered pets, and community reports efficiently.</p>
        </div>
    </section>

    <!-- Stats / Cards Section -->
    <section class="max-w-7xl mx-auto py-12 px-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
            <img src="/images/dog1.jpg" alt="Registered Dogs" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover">
            <h3 class="text-xl font-semibold text-orange-600">Registered Dogs</h3>
            <p class="text-2xl font-bold mt-2">245</p>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
            <img src="/images/dog2.jpg" alt="Vaccinated" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover">
            <h3 class="text-xl font-semibold text-orange-600">Vaccinated</h3>
            <p class="text-2xl font-bold mt-2">198</p>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
            <img src="/images/dog3.jpg" alt="Pending" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover">
            <h3 class="text-xl font-semibold text-orange-600">Pending</h3>
            <p class="text-2xl font-bold mt-2">47</p>
        </div>
        <div class="bg-white shadow-lg rounded-2xl p-6 text-center hover:scale-105 transition">
            <img src="/images/dog4.jpg" alt="Reports" class="w-16 h-16 mx-auto mb-3 rounded-full object-cover">
            <h3 class="text-xl font-semibold text-orange-600">Community Reports</h3>
            <p class="text-2xl font-bold mt-2">12</p>
        </div>
    </section>

    <!-- Info Section -->
    <section class="max-w-7xl mx-auto py-12 px-6 flex flex-col md:flex-row items-center gap-8">
        <div class="md:w-1/2">
            <img src="/images/dog5.jpg" alt="Dogs" class="rounded-2xl shadow-md">
        </div>
        <div class="md:w-1/2 space-y-4">
            <h3 class="text-3xl font-bold text-orange-600">Protecting Our Furry Friends</h3>
            <p class="text-gray-600">
                Our system helps track vaccination schedules and ensures every dog receives timely rabies shots.
                Stay informed, stay safe — together, we can prevent rabies and keep our community healthy.
            </p>
            <a href="#" class="inline-block bg-orange-500 hover:bg-orange-600 text-white font-medium px-6 py-3 rounded-md transition">
                View Reports
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-8">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center">
            <p>&copy; {{ date('Y') }} Rabbies Vaccination System. All rights reserved.</p>
            <div class="flex space-x-4 mt-4 md:mt-0">
                <a href="#" class="hover:text-orange-500">Facebook</a>
                <a href="#" class="hover:text-orange-500">Instagram</a>
                <a href="#" class="hover:text-orange-500">Twitter</a>
            </div>
        </div>
    </footer>

</body>
</html>
