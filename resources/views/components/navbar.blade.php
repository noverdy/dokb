<nav class="py-8 bg-white flex justify-between sticky top-0">
    <div class="flex items-center gap-8">
        <a href="{{ route('home') }}" class="text-3xl font-bold text-red-500">{{ config('app.name') }}</a>
        <span>|</span>
        <a href="#" class="font-medium">Stories</a>
        <a href="#" class="font-medium">Creator</a>
        <a href="#" class="font-medium">Community</a>
        <a href="#" class="font-medium">Subscribe</a>
    </div>
    <div class="flex items-center gap-8">
        @auth
            <a href="#" class="text-gray-600 hover:text-black">
                <span>Write</span> <i class="fa-regular fa-pen-to-square ml-2"></i>
            </a>
            <div class="relative group">
                <i class="fa-solid fa-circle-user text-3xl"></i>
                <div class="hidden group-hover:block absolute bg-white right-0 w-52 p-4 rounded-xl shadow">
                    <p class="border-b border-gray-300 pb-2 text-gray-600">Hello, {{ auth()->user()->name }}!</p>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="mt-2">Logout</button>
                    </form>
                </div>
            </div>
        @endauth

        @guest
            <a href="{{ route('login') }}">
                <i class="fa-solid fa-right-to-bracket text-2xl"></i>
            </a>
        @endguest
    </div>
</nav>
