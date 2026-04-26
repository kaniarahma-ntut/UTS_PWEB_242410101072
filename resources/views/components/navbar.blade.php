<nav class="bg-ken-dark/80 backdrop-blur-md sticky top-0 z-50 shadow-lg border-b border-ken-teal/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <div class="flex-shrink-0">
                <a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="flex items-center gap-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('ken.png') }}" alt="Logo Ken">
                    <span class="font-header font-semibold text-xl text-ken-light tracking-wide">Ken<span class="text-ken-teal">.</span></span>
                </a>
            </div>
            <div class="hidden md:block">
                <ul class="flex space-x-8">
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Dashboard</a></li>
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}#clips" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Clips</a></li>
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}#arts" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Arts</a></li>
                    <li><a href="{{ route('dashboard', ['username' => request()->query('username')]) }}#reviews" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Reviews</a></li>
                    <li><a href="{{ route('pengelolaan', ['username' => request()->query('username')]) }}" class="text-ken-light hover:text-ken-teal transition-colors font-medium">Pengelolaan</a></li>
                </ul>
            </div>
            <div class="flex items-center space-x-6">
                <a href="{{ route('profile', ['username' => request()->query('username')]) }}" class="text-ken-sand hover:text-white transition-colors font-medium flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                    Profile
                </a>
                <a href="{{ route('logout') }}" class="bg-ken-teal hover:bg-teal-500 text-ken-bg px-5 py-2 rounded-lg font-semibold transition-all shadow-xl">Logout</a>
            </div>
        </div>
    </div>
</nav>
