<x-template class="mx-20 h-screen flex flex-col" :navigation="false">
    <nav class="py-8 bg-white flex justify-between sticky top-0">
        <div class="flex items-center gap-8">
            <a href="{{ route('home') }}" class="text-3xl font-bold text-red-500">{{ config('app.name') }}</a>
            <span>|</span>
            <p class="text-gray-600">Create a new post</p>
        </div>
        <div class="flex items-center gap-8">
            <button type="submit" form="form" class="bg-red-500 text-white px-2 py-1 text-xs rounded-full">
                <span>Publish</span> <i class="fa-solid fa-paper-plane ml-0.5"></i>
            </button>
            @auth
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

    <main class="grow mb-16">
        <form id="form" action="{{ route('posts.store') }}" method="POST" class="flex h-full">
            @csrf
            <div class="border-r border-gray-300 pr-8 w-96">
                <h2 class="text-3xl font-semibold mb-12">Post Details</h2>

                <input type="text" name="title" placeholder="Title" required
                    class="border-b-2 border-gray-300 w-full p-2 text-lg outline-none mb-2 focus:border-red-500">
                <p class="text-sm mb-6 text-gray-600">
                    @error('title')
                        $message
                    @enderror
                </p>

                <input type="text" name="author" placeholder="Author" required
                    class="border-b-2 border-gray-300 w-full p-2 text-lg outline-none mb-2 focus:border-red-500">
                <p class="text-sm mb-6 text-gray-600">
                    @error('author')
                        $message
                    @enderror
                </p>

                <input type="text" name="category" placeholder="Category" required
                    class="border-b-2 border-gray-300 w-full p-2 text-lg outline-none mb-2 focus:border-red-500">
                <p class="text-sm mb-6 text-gray-600">
                    @error('category')
                        $message
                    @enderror
                </p>

                <input type="number" name="reading_time" placeholder="Reading Time" required
                    class="border-b-2 border-gray-300 w-full p-2 text-lg outline-none mb-2 focus:border-red-500">
                <p class="text-sm mb-6 text-gray-600">
                    @error('reading_time')
                        $message
                    @enderror
                </p>
            </div>

            <textarea class="ml-4 grow p-4 text-xl resize-none outline-none bg-gray-100 rounded-xl" name="content"
                placeholder="Tell your story..." required></textarea>
        </form>
    </main>
</x-template>
