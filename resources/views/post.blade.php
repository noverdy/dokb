<x-template class="mx-20">
    <header class="flex items-center gap-8 mb-12">
        <img src="https://source.unsplash.com/400x300/?movie" alt="Cover Image"
            class="rounded-xl aspect-[4/3] h-80 bg-gray-100 object-cover">
        <div>
            <h2 class="text-5xl leading-tight font-bold mb-4">
                Where To Watch 'John Wick: Chapter 4'
            </h2>
            <p class="text-gray-600 mb-2">
                <span class="text-red-500 font-bold">Movies</span> <span class="mx-2">•</span> 12 minutes ago
            </p>
            <p class="text-gray-600">
                by Netflix
            </p>
        </div>
    </header>

    <article class="mb-8 leading-10 tracking-wide">
        The adrenaline-pumping world of John Wick is set to expand once again with the upcoming release of 'John Wick:
        Chapter 4'. After the immense success of the previous installments, fans of the hit action franchise are eagerly
        awaiting the next chapter in the saga of the legendary assassin. With the film's release just around the corner,
        it's time to uncover where you can catch all the heart-pounding action and intrigue.

        **The John Wick Phenomenon**

        Since its debut in 2014, the John Wick series has taken the action genre by storm. Keanu Reeves' portrayal of
        the titular character, a former hitman seeking vengeance for the loss of his loved ones, has garnered a massive
        fan following and critical acclaim. The franchise is renowned for its intense and meticulously choreographed
        fight sequences, intricate world-building, and a unique visual style. With each installment, the series has
        managed to up the ante, leaving audiences hungry for more.

        **Finding 'John Wick: Chapter 4'**

        As the excitement for 'John Wick: Chapter 4' reaches its peak, fans are eager to know where they can catch the
        latest installment of this high-octane franchise. Here are some of the main avenues to watch the film:

        1. **Theaters**: The most traditional and immersive way to experience 'John Wick: Chapter 4' is by catching it
        on the big screen. Theaters offer unparalleled visuals and audio quality, allowing you to fully immerse yourself
        in the action-packed world of John Wick. Check your local listings for showtimes and availability.

        2. **Streaming Platforms**: With the rise of streaming services, many viewers prefer the convenience of watching
        films from the comfort of their own homes. While 'John Wick: Chapter 4' might not be available for streaming
        immediately upon release, platforms like Netflix, Amazon Prime Video, Hulu, or HBO Max might acquire the
        streaming rights at a later date. Keep an eye on announcements from these services for updates.

        3. **Digital Rental/Purchase**: If you're not able to catch the film in theaters or on streaming platforms,
        digital rental or purchase options might be your best bet. Platforms like iTunes, Google Play Movies & TV, Vudu,
        and YouTube Movies often make new releases available for rental or purchase shortly after their theatrical run.

        4. **Physical Media**: For collectors and enthusiasts, owning a physical copy of 'John Wick: Chapter 4' might be
        the preferred option. DVDs, Blu-rays, and 4K Ultra HD discs usually come with bonus features like
        behind-the-scenes footage, interviews, and more, providing a deeper dive into the making of the film.

        **Mark Your Calendars**

        'John Wick: Chapter 4' is slated for release on [Release Date]. As the anticipation builds, consider planning
        ahead to secure your preferred method of watching. Whether you opt for the thrill of the cinema, the comfort of
        your living room, or the satisfaction of owning a physical copy, this latest installment promises to deliver the
        fast-paced, high-energy action that fans have come to expect from the franchise.

        In conclusion, 'John Wick: Chapter 4' is undoubtedly one of the most highly anticipated films of the year. With
        various options available for watching, from theaters to streaming platforms and digital copies, fans have the
        flexibility to choose the experience that best suits their preferences. So, gear up for another exhilarating
        adventure with everyone's favorite assassin, John Wick. Your ticket to action-packed entertainment awaits!
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

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
        <script>
            console.log(document.querySelector('article').innerHTML)
            document.querySelector('article').innerHTML = marked.parse(
                document.querySelector('article').innerHTML.split('\n').map(line => line.trim()).join('\n')
            )
        </script>
    @endpush
</x-template>
