<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports | Rabbies Vaccination System</title>
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
                <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-orange-400 transition">Dashboard</a>
                <a href="{{ route('profile') }}" class="text-gray-300 hover:text-orange-400 transition">Profile</a>
                <a href="{{ route('reports') }}" class="text-orange-400 transition">Reports</a>
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

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-12 px-6">
        <!-- Page Header -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-orange-400 mb-2">Community Reports</h2>
            <p class="text-gray-400">View and manage rabies vaccination reports from the community.</p>
        </div>

        <!-- Filter Section -->
        <div class="bg-gray-800 border border-gray-700 rounded-xl p-6 mb-6">
            <h3 class="text-lg font-semibold text-orange-400 mb-4">Filter Reports</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Status</label>
                    <select class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none">
                        <option>All</option>
                        <option>Pending</option>
                        <option>Reviewed</option>
                        <option>Resolved</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Date From</label>
                    <input type="date" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm text-gray-400 mb-2">Date To</label>
                    <input type="date" class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none">
                </div>
                <div class="flex items-end">
                    <button class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition">
                        Apply Filter
                    </button>
                </div>
            </div>
        </div>

        <!-- Reports Table -->
        <div class="bg-gray-800 border border-gray-700 rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-700">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-orange-400">ID</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-orange-400">Reporter Name</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-orange-400">Dog Name</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-orange-400">Location</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-orange-400">Date Reported</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-orange-400">Status</th>
                            <th class="px-6 py-4 text-left text-sm font-semibold text-orange-400">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <!-- Sample Report Row 1 -->
                        <tr class="hover:bg-gray-750 transition">
                            <td class="px-6 py-4 text-sm">#001</td>
                            <td class="px-6 py-4 text-sm">Juan Dela Cruz</td>
                            <td class="px-6 py-4 text-sm">Brownie</td>
                            <td class="px-6 py-4 text-sm">Barangay 1, Bacolod</td>
                            <td class="px-6 py-4 text-sm">Oct 15, 2025</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-yellow-500/20 text-yellow-400 border border-yellow-500">
                                    Pending
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-400 hover:text-orange-300 transition">View</button>
                            </td>
                        </tr>

                        <!-- Sample Report Row 2 -->
                        <tr class="hover:bg-gray-750 transition">
                            <td class="px-6 py-4 text-sm">#002</td>
                            <td class="px-6 py-4 text-sm">Maria Santos</td>
                            <td class="px-6 py-4 text-sm">Max</td>
                            <td class="px-6 py-4 text-sm">Barangay 5, Bacolod</td>
                            <td class="px-6 py-4 text-sm">Oct 14, 2025</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-green-500/20 text-green-400 border border-green-500">
                                    Resolved
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-400 hover:text-orange-300 transition">View</button>
                            </td>
                        </tr>

                        <!-- Sample Report Row 3 -->
                        <tr class="hover:bg-gray-750 transition">
                            <td class="px-6 py-4 text-sm">#003</td>
                            <td class="px-6 py-4 text-sm">Pedro Garcia</td>
                            <td class="px-6 py-4 text-sm">Rocky</td>
                            <td class="px-6 py-4 text-sm">Barangay 8, Bacolod</td>
                            <td class="px-6 py-4 text-sm">Oct 12, 2025</td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-xs rounded-full bg-blue-500/20 text-blue-400 border border-blue-500">
                                    Reviewed
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <button class="text-orange-400 hover:text-orange-300 transition">View</button>
                            </td>
                        </tr>

                        <!-- Empty state (you can toggle this based on data) -->
                        <!-- <tr>
                            <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                                No reports found. All reports will appear here.
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-6 flex justify-between items-center">
            <p class="text-sm text-gray-400">Showing 1 to 3 of 12 reports</p>
            <div class="flex space-x-2">
                <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg transition">Previous</button>
                <button class="px-4 py-2 bg-orange-500 text-white rounded-lg">1</button>
                <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg transition">2</button>
                <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg transition">3</button>
                <button class="px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-lg transition">Next</button>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 text-gray-400 py-8 mt-12">
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