<x-template class="mx-20">
    <header class="bg-gray-100 p-8 rounded-xl text-center mb-8">
        <h1 class="uppercase tracking-widest text-sm text-gray-600 mb-5">Welcome to {{ config('app.name') }}</h1>
        <h2 class="font-bold text-xl mb-2">
            Craft narratives ✍️ that ignite <span class="text-red-500">inspiration 💡</span>,
        </h2>
        <h2 class="font-bold text-xl">
            <span class="text-red-500"> knowledge 📕</span>, and <span class="text-red-500">entertainment 🎬</span>
        </h2>
    </header>

    <section class="flex gap-8 mb-12 group cursor-pointer">
        <img src="https://source.unsplash.com/400x300/?movie" alt="Cover Image"
            class="rounded-xl aspect-[4/3] h-80 bg-gray-100 object-cover">
        <div class="flex flex-col gap-4">
            <p class="text-gray-600">
                Netflix <span class="mx-2">•</span> 12 minutes ago
            </p>
            <h2 class="text-5xl leading-tight font-bold group-hover:underline">
                Where To Watch 'John Wick: Chapter 4'
            </h2>
            <p class="leading-relaxed text-gray-600">
                There's been a lot of talk about the upcoming John Wick: Chapter 4 movie, and we're here to tell you
                where you can watch it. The film is set to be released on May 27, 2022. It will star Keanu Reeves as
                John Wick and Laurence Fishburne as The...
            </p>
            <p class="text-gray-600">
                <span class="text-red-500 font-bold">Movies</span> <span class="mx-2">•</span> 4 min read
            </p>
        </div>
    </section>

    <section class="mb-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold">Latest News</h2>
            <p class="text-red-500 font-bold border-b-2 border-transparent hover:border-red-500 cursor-pointer">
                See all <i class="fa-solid fa-arrow-right ml-2"></i>
            </p>
        </div>
        <div class="grid gap-8 grid-cols-4">
            <x-card-item />
            <x-card-item />
            <x-card-item />
            <x-card-item />
        </div>
    </section>
</x-template>
