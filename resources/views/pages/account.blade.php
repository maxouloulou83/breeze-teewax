<x-app-layout>

    @if (Route::has('login'))
        <div class="hidden fixed  px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/users') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Acceder à mon compte</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
{{--    <div class="min-h-full flex items-center justify-center bg-white py-12 px-4 sm:px-6 lg:px-8">--}}
{{--        <div class="">--}}
{{--                <button class="bg-gray-300 hover:bg-blue-dark text-black font-bold py-2 px-4 rounded">--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">log in</a>--}}
{{--                </button>--}}
{{--        </div>--}}

{{--        <div>{{ Auth::user()->name }}</div>--}}


{{--        <div class="">--}}
{{--            <button class="bg-gray-300 hover:bg-blue-dark text-black font-bold py-2 px-4 rounded">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">register</a>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    --}}
</x-app-layout>
