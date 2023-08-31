<x-template :navigation="false">
    <main class="grid grid-cols-2 h-screen">
        <section class="px-40 py-32">
            <div class="mb-8">
                <h1 class="font-bold mb-2 flex items-center">
                    <span class="text-3xl text-red-500">{{ config('app.name') }}</span>
                    <span class="mx-4">|</span>
                    <span class="text-3xl">Login</span>
                </h1>
                <h2 class="font-medium text-gray-600">See your growth and get consulting support!</h2>
            </div>

            <form action="" method="POST" class="mb-8">
                <div class="mb-6">
                    <label for="username" class="block mb-2 font-bold">Username*</label>
                    <input type="text" name="username" id="username" placeholder="Username"
                        class="border-2 border-gray-300 rounded-full w-full px-5 py-3 outline-none focus:border-red-500">
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 font-bold">Password*</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="border-2 border-gray-300 rounded-full w-full px-5 py-3 outline-none focus:border-red-500">
                </div>
                <div class="mb-6">
                    <input type="checkbox" name="remember_me" id="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <button class="bg-red-500 text-white font-bold w-full rounded-full py-3">Login</button>
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
