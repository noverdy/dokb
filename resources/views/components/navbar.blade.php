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
        {{-- <a href="#"><i class="fa-regular fa-bell"></i></a> --}}
        {{-- <i class="fa-solid fa-circle-user text-3xl"></i> --}}
        <a href="{{ route('login') }}">
            <i class="fa-solid fa-right-to-bracket text-2xl"></i>
        </a>
    </div>
</nav>
