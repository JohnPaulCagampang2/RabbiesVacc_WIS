<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Rabbies Vaccination System</title>
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
                <a href="{{ route('reports') }}" class="text-gray-300 hover:text-orange-400 transition">Reports</a>
                <a href="{{ route('settings') }}" class="text-orange-400 transition">Settings</a>
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
    <main class="max-w-4xl mx-auto py-12 px-6">
        <!-- Page Header -->
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-orange-400 mb-2">Account Settings</h2>
            <p class="text-gray-400">Manage your account settings and preferences.</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-500/20 border border-green-500 text-green-500 px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error Messages -->
        @if($errors->any())
            <div class="bg-red-500/20 border border-red-500 text-red-500 px-4 py-3 rounded-lg mb-6">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('settings.update') }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Personal Information Section -->
            <div class="bg-gray-800 border border-gray-700 rounded-xl p-6 mb-6">
                <h3 class="text-xl font-semibold text-orange-400 mb-6">Personal Information</h3>
                
                <div class="space-y-4">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            value="{{ old('name', $user->name) }}"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none"
                            required
                        >
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email', $user->email) }}"
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none"
                            required
                        >
                    </div>
                </div>
            </div>

            <!-- Change Password Section -->
            <div class="bg-gray-800 border border-gray-700 rounded-xl p-6 mb-6">
                <h3 class="text-xl font-semibold text-orange-400 mb-6">Change Password</h3>
                
                <div class="space-y-4">
                    <!-- Current Password -->
                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-300 mb-2">Current Password</label>
                        <input 
                            type="password" 
                            id="current_password" 
                            name="current_password" 
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none"
                            placeholder="Enter current password"
                        >
                        <p class="text-xs text-gray-500 mt-1">Leave blank if you don't want to change your password</p>
                    </div>

                    <!-- New Password -->
                    <div>
                        <label for="new_password" class="block text-sm font-medium text-gray-300 mb-2">New Password</label>
                        <input 
                            type="password" 
                            id="new_password" 
                            name="new_password" 
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none"
                            placeholder="Enter new password"
                        >
                        <p class="text-xs text-gray-500 mt-1">Minimum 8 characters</p>
                    </div>

                    <!-- Confirm New Password -->
                    <div>
                        <label for="new_password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm New Password</label>
                        <input 
                            type="password" 
                            id="new_password_confirmation" 
                            name="new_password_confirmation" 
                            class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-2 text-gray-200 focus:border-orange-400 focus:outline-none"
                            placeholder="Confirm new password"
                        >
                    </div>
                </div>
            </div>

            <!-- Preferences Section -->
            <div class="bg-gray-800 border border-gray-700 rounded-xl p-6 mb-6">
                <h3 class="text-xl font-semibold text-orange-400 mb-6">Preferences</h3>
                
                <div class="space-y-4">
                    <!-- Email Notifications -->
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-medium text-gray-300">Email Notifications</h4>
                            <p class="text-xs text-gray-500">Receive email updates about vaccination schedules</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-500"></div>
                        </label>
                    </div>

                    <!-- SMS Alerts -->
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-medium text-gray-300">SMS Alerts</h4>
                            <p class="text-xs text-gray-500">Get text messages for urgent notifications</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-500"></div>
                        </label>
                    </div>

                    <!-- Weekly Reports -->
                    <div class="flex items-center justify-between">
                        <div>
                            <h4 class="text-sm font-medium text-gray-300">Weekly Reports</h4>
                            <p class="text-xs text-gray-500">Receive weekly summary of vaccination activities</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer" checked>
                            <div class="w-11 h-6 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-500"></div>
                        </label>
                    </div>
                </div>
            </div>

            <!-- Save Button -->
            <div class="flex justify-end space-x-4">
                <a href="{{ route('dashboard') }}" class="px-6 py-3 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition">
                    Cancel
                </a>
                <button type="submit" class="px-6 py-3 bg-orange-500 hover:bg-orange-600 text-white rounded-lg transition">
                    Save Changes
                </button>
            </div>
        </form>

        <!-- Danger Zone -->
        <div class="bg-red-900/20 border border-red-500 rounded-xl p-6 mt-8">
            <h3 class="text-xl font-semibold text-red-500 mb-4">Danger Zone</h3>
            <p class="text-gray-400 mb-4">Once you delete your account, there is no going back. Please be certain.</p>
            <button class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition">
                Delete Account
            </button>
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