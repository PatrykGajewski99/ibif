@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            @if(auth()->user()->privilege === "admin")
            <a href="{{ route('admin.dashboard',app()->getLocale()) }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
            <a href="{{ route('dashboard',app()->getLocale()) }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @endif
        @else
            <a href="{{ route('login',app()->getLocale()) }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register',app()->getLocale()) }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
        @endauth
    </div>
@endif
