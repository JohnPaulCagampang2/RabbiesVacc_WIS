<x-app-layout>
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h2 class="mb-4 text-center text-orange-600">🐾 Rabbies Vaccination Dashboard</h2>
            <p class="text-center">Welcome, {{ Auth::user()->name }}!</p>

            <div class="text-center mt-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
