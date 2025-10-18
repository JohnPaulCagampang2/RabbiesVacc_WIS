<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile | RabbiesVaccinationSystem</title>
  @vite('resources/css/app.css')
  <style>
    /* Main body styling - matching dashboard dark theme */
    body {
      background-color: #111827; /* gray-900 */
      color: #E5E7EB; /* gray-200 */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Top navigation bar */
    .top-nav {
      background-color: #1F2937; /* gray-800 */
      border-bottom: 1px solid #374151; /* gray-700 */
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    /* Main content area */
    .main-content {
      max-width: 1280px;
      margin: 0 auto;
      padding: 40px 24px;
    }

    /* Profile page header */
    .profile-header {
      margin-bottom: 30px;
    }

    .profile-title {
      font-size: 32px;
      font-weight: 700;
      color: #FB923C; /* orange-400 */
    }

    .profile-subtitle {
      color: #9CA3AF; /* gray-400 */
      font-size: 14px;
    }

    /* Grid layout for profile sections */
    .profile-grid {
      display: grid;
      grid-template-columns: 1fr 2fr;
      gap: 20px;
      margin-bottom: 20px;
    }

    /* Card styling for all sections */
    .card {
      background-color: #1F2937; /* gray-800 */
      border: 1px solid #374151; /* gray-700 */
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    /* Profile avatar section */
    .profile-avatar-section {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .profile-name {
      font-size: 20px;
      font-weight: 600;
      color: #E5E7EB; /* gray-200 */
    }

    .profile-badge {
      font-size: 12px;
      color: #FB923C; /* orange-400 */
      margin-bottom: 20px;
    }

    /* Large profile picture */
    .profile-picture {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      margin-bottom: 20px;
      object-fit: cover;
      border: 4px solid #374151; /* gray-700 */
      background-color: #F97316; /* orange-500 */
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 48px;
      font-weight: bold;
      color: white;
    }

    /* Bio and details section */
    .bio-section {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .section-title {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 15px;
      border-bottom: 1px solid #374151; /* gray-700 */
      padding-bottom: 10px;
      color: #FB923C; /* orange-400 */
    }

    /* Individual info items */
    .info-item {
      display: flex;
      flex-direction: column;
      gap: 5px;
    }

    .info-label {
      font-size: 12px;
      color: #9CA3AF; /* gray-400 */
    }

    .info-value {
      font-size: 14px;
      color: #E5E7EB; /* gray-200 */
    }

    /* Two column layout for bio items */
    .bio-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    /* Availability status badge */
    .availability-badge {
      display: inline-block;
      background-color: rgba(251, 146, 60, 0.2); /* orange-400 with opacity */
      color: #FB923C; /* orange-400 */
      padding: 5px 12px;
      border-radius: 15px;
      font-size: 12px;
      font-weight: 600;
    }

    .availability-badge.not-available {
      background-color: rgba(156, 163, 175, 0.2);
      color: #9CA3AF;
    }

    /* Tags section */
    .tags-container {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: 5px;
    }

    .tag {
      background-color: #374151; /* gray-700 */
      padding: 5px 12px;
      border-radius: 15px;
      font-size: 12px;
      color: #9CA3AF; /* gray-400 */
    }

    /* Status indicator dot */
    .status-dot {
      width: 8px;
      height: 8px;
      background-color: #FB923C; /* orange-400 */
      border-radius: 50%;
      display: inline-block;
      margin-right: 5px;
    }

    /* Responsive design */
    @media (max-width: 768px) {
      .profile-grid {
        grid-template-columns: 1fr;
      }

      .bio-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <!-- Header (matching dashboard) -->
  <header class="top-nav">
    <div class="max-w-7xl mx-auto flex justify-between items-center py-4 px-6">
      <!-- Logo and Brand -->
      <div class="flex items-center space-x-3">
        <img src="/images/logo.jpg" alt="Logo" class="w-10 h-10">
        <h1 class="text-xl font-bold text-orange-400">Rabbies Vaccination System</h1>
      </div>
      
      <!-- Navigation Links -->
      <nav class="hidden md:flex items-center space-x-6">
        <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-orange-400 transition">Dashboard</a>
        <a href="{{ route('profile') }}" class="text-orange-400 transition">Profile</a>
        <a href="{{route('reports')}}" class="text-gray-300 hover:text-orange-400 transition">Reports</a>
        <a href="{{route('settings')}}" class="text-gray-300 hover:text-orange-400 transition">Settings</a>
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

  <!-- Main content area -->
  <div class="main-content">
    <!-- Success message -->
    @if(session('success'))
      <div class="bg-green-500/20 border border-green-500 text-green-500 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
      </div>
    @endif

    <!-- Page header -->
    <div class="profile-header">
      <h1 class="profile-title">Profile</h1>
      <p class="profile-subtitle">View all your profile details here.</p>
    </div>

    <!-- Profile grid layout -->
    <div class="profile-grid">
      <!-- Left column: Avatar and name -->
      <div class="card profile-avatar-section">
        <h3 class="profile-name">{{ $user->name }}</h3>
        <p class="profile-badge">Premium User</p>
        
        @if($user->profile_picture)
          <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="profile-picture">
        @else
          <!-- Default avatar with user's initial -->
          <div class="profile-picture">
            {{ substr($user->name, 0, 1) }}
          </div>
        @endif
      </div>

      <!-- Right column: Bio and other details -->
      <div class="card bio-section">
        <h3 class="section-title">Bio & other details</h3>
        
        <!-- Grid layout for bio information -->
        <div class="bio-grid">
          <div class="info-item">
            <span class="info-label">Email</span>
            <span class="info-value">{{ $user->email }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">My Role</span>
            <span class="info-value">{{ $user->role ?? 'Not specified' }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">My Experience Level</span>
            <span class="info-value">{{ $user->experience_level ?? 'Not specified' }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">My 3 Favorite Artists</span>
            <span class="info-value">{{ $user->favorite_artists ?? 'Not specified' }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">My Favorite Music Genre</span>
            <span class="info-value">{{ $user->favorite_genre ?? 'Not specified' }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">My Instrument or Equipment I Use</span>
            <span class="info-value">{{ $user->equipment ?? 'Not specified' }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">My Preferred Music Mood</span>
            <span class="info-value">{{ $user->music_mood ?? 'Not specified' }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">Location</span>
            <span class="info-value">{{ $user->location ?? 'Not specified' }}</span>
          </div>

          <div class="info-item">
            <span class="info-label">Availability</span>
            @if($user->available_for_collaboration)
              <span class="availability-badge">● Available for Collaboration</span>
            @else
              <span class="availability-badge not-available">● Not Available</span>
            @endif
          </div>
        </div>

        <!-- Tags section -->
        @if($user->tags)
          <div class="info-item">
            <span class="info-label">Tags</span>
            <div class="tags-container">
              @foreach(explode(',', $user->tags) as $tag)
                <span class="tag">{{ trim($tag) }}</span>
              @endforeach
            </div>
          </div>
        @endif
      </div>
    </div>

    <!-- Helper-Worker section -->
    <div class="card">
      <h3 class="section-title">Helper-Worker</h3>
      <div style="color: #9CA3AF; padding: 20px 0;">
        Helper-Worker content will be displayed here.
      </div>
    </div>

  </div>

</body>
</html>