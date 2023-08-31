<x-template :navigation="false">
    <main class="grid grid-cols-2 h-screen">
        <section class="px-40 pt-28">
            <div class="mb-8">
                <h1 class="font-bold mb-2 flex items-center">
                    <span class="text-3xl text-red-500">{{ config('app.name') }}</span>
                    <span class="mx-4">|</span>
                    <span class="text-3xl">Login</span>
                </h1>
                <h2 class="font-medium text-gray-600">See your growth and get consulting support!</h2>
            </div>

            <form action="{{ route('authenticate') }}" method="POST" class="mb-8">
                @csrf
                <div class="mb-6">
                    <label for="username" class="block mb-2 font-bold">Username*</label>
                    <input type="text" name="username" id="username" placeholder="Username" required
                        class="border-2 border-gray-300 rounded-full w-full px-5 py-3 outline-none focus:border-red-500">
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 font-bold">Password*</label>
                    <input type="password" name="password" id="password" placeholder="Password" required
                        class="border-2 border-gray-300 rounded-full w-full px-5 py-3 outline-none focus:border-red-500">
                </div>
                <div class="mb-6">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Remember Me</label>
                </div>

                <button class="bg-red-500 text-white font-bold w-full rounded-full py-3 mb-8">Login</button>

                @if ($errors->any())
                    <p
                        class="bg-red-200 p-4 rounded-xl border border-red-400 border-dashed text-center text-red-500 font-bold">
                        {{ $errors->first() }}
                    </p>
                @endif
            </form>

            <div class="flex items-center gap-2 text-xs text-gray-400">
                <p class="font-bold">{{ config('app.name') }}</p>
                <span>|</span>
                <p>Copyright &#169; {{ now()->year }}</p>
            </div>
        </section>
        <section class="bg-gray-100 bg-cover brightness-75"
            style="background-image: url('{{ asset('img/login-bg.jpeg') }}')">
        </section>
    </main>
</x-template>
