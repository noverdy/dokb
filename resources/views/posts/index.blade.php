<x-template class="mx-20">
    <section class="mb-8">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-3xl font-bold">All News</h2>
            <p class="text-red-500 font-bold border-b-2 border-transparent hover:border-red-500 cursor-pointer">
                See all <i class="fa-solid fa-arrow-right ml-2"></i>
            </p>
        </div>
        <div class="grid gap-8 grid-cols-4">
            @foreach ($posts as $post)
                <x-card-item :key="$loop->iteration" :post="$post" />
            @endforeach
        </div>
    </section>
</x-template>
