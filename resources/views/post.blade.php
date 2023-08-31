<x-template class="mx-20">
    <header class="flex items-center gap-8 mb-12">
        <img src="https://source.unsplash.com/400x300/?movie" alt="Cover Image"
            class="rounded-xl aspect-[4/3] h-80 bg-gray-100 object-cover">
        <div>
            <h2 class="text-5xl leading-tight font-bold mb-4 capitalize">
                {{ $post->title }}
            </h2>
            <p class="text-gray-600 mb-2">
                <span class="text-red-500 font-bold capitalize">{{ $post->category }}</span>
                <span class="mx-2">•</span>
                {{ \Carbon\Carbon::parse($post->updated_at)->diffForhumans() }}
            </p>
            <p class="text-gray-600">
                by <span class="capitalize">{{ $post->author }}</span>
            </p>
        </div>
    </header>

    <article class="mb-8 leading-10 tracking-wide">
        {!! nl2br($post->content) !!}
    </article>

    <section class="bg-gray-100 rounded-xl p-8 grid grid-cols-2">
        <div class="border-r border-gray-300 pr-8">
            <h3 class="text-2xl font-bold mb-6">Leave a Comment</h3>
            <form action="" method="POST">
                <div class="mb-6">
                    <label for="name" class="block font-bold mb-2">Name*</label>
                    <input type="text" class="w-full bg-transparent border border-gray-400 rounded-full px-5 py-3"
                        required>
                </div>

                <div class="mb-6">
                    <label for="email" class="block font-bold mb-2">Email</label>
                    <input type="email" class="w-full bg-transparent border border-gray-400 rounded-full px-5 py-3">
                </div>

                <div class="mb-6">
                    <label for="comment" class="block font-bold mb-2">Comment*</label>
                    <textarea name="comment" id="comment" class="w-full bg-transparent border border-gray-400 rounded-3xl px-5 py-3"
                        rows="5" required></textarea>
                </div>

                <button type="submit" class="bg-red-500 w-full px-5 py-3 rounded-full font-bold text-white">
                    Send Comment
                </button>
            </form>
        </div>
        <div class="pl-8">
            <h3 class="text-2xl font-bold mb-6">Comments</h3>
            @foreach ([1, 2, 3, 4, 5] as $a)
                <div class="mb-10">
                    <p class="flex gap-2 items-center mb-4">
                        <i class="fa-regular fa-circle-user"></i>
                        <a href="mailto:johndoe@mail.com" class="underline">John Doe</a>
                        <span class="text-gray-600">•</span>
                        <span class="text-gray-600">12 minutes ago</span>
                    </p>
                    <p class="leading-loose">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse tempore qui placeat aliquid
                        debitis? Dolor ducimus officia impedit, vero similique facere eum maiores quisquam sit ut sed at
                        iste nemo.
                    </p>
                </div>
            @endforeach
        </div>
    </section>
</x-template>
