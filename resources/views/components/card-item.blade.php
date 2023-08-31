<a href="{{ route('posts.show', $post->slug) }}" class="group hover:cursor-pointer">
    <img src="https://source.unsplash.com/300x300/?beach&sig={{ $key }}" alt="Image"
        class="aspect-square bg-gray-100 w-full rounded-xl mb-4">
    <p class="text-gray-600 text-sm mb-2">
        Netflix <span class="mx-2">•</span> {{ \Carbon\Carbon::parse($post->updated_at)->diffForhumans() }}
    </p>
    <h2 class="text-lg leading-normal font-bold group-hover:underline mb-4 capitalize">
        {{ $post->title }}
    </h2>
    <p class="text-sm leading-relaxed text-gray-600 mb-4">
        {{ substr($post->content, 0, 70) }}...
    </p>
    <p class="text-sm text-gray-600">
        <span class="text-red-500 font-bold capitalize">{{ $post->category }}</span>
        <span class="mx-2">•</span>
        {{ $post->reading_time }} min read
    </p>
</a>
