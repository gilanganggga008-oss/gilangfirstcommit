<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Login - Login Pemerintah</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .glass {
            backdrop-filter: blur(15px);
            background: rgba(255, 0, 0, 0.48);
            border: 1px solid rgba(9, 0, 0, 0);
        }
    </style>
</head>

<body class="min-h-screen bg-gradient-to-br from-red-950 via-red-700 to-red-500 flex justify-center items-center">

    <div class="w-full max-w-md p-6">

        <div class="glass rounded-3xl shadow-2xl overflow-hidden">

            <div class="text-center py-8">

                <div class="mx-auto w-24 h-24 rounded-full bg-white flex justify-center items-center shadow-xl">
                    <span class="material-symbols-outlined text-red-700 text-6xl">
                        account_circle
                    </span>
                </div>

                <h1 class="text-white text-3xl font-bold mt-5">
                    Login Pemerintah
                </h1>

                <p class="text-red-100 mt-2">
                    Sistem Informasi Terpadu
                </p>

            </div>

            <form method="POST" action="{{ route('login') }}" class="px-8 pb-8 space-y-5">

                @csrf

                <!-- Username -->
                <div>

                    <label for="username" class="text-white text-sm mb-2 block">
                        Username
                    </label>

                    <input
                        type="text"
                        id="username"
                        name="username"
                        value="{{ old('username') }}"
                        required
                        autofocus
                        placeholder="Masukkan Username"
                        class="w-full rounded-xl bg-white/80 px-4 py-3 outline-none border border-transparent focus:border-red-500 focus:ring-2 focus:ring-red-300 transition"
                    >

                    @error('username')
                        <p class="text-red-200 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <!-- Password -->
                <div>

                    <label for="password" class="text-white text-sm mb-2 block">
                        Password
                    </label>

                    <div class="relative">

                        <input
                            type="password"
                            id="password"
                            name="password"
                            required
                            placeholder="Masukkan Password"
                            class="w-full rounded-xl bg-white/80 px-4 py-3 pr-12 outline-none border border-transparent focus:border-red-500 focus:ring-2 focus:ring-red-300 transition"
                        >

                        <button
                            type="button"
                            onclick="togglePassword()"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-600 hover:text-red-700"
                        >
                            <span id="eye-open" class="material-symbols-outlined">
                                visibility
                            </span>

                            <span id="eye-close" class="material-symbols-outlined hidden">
                                visibility_off
                            </span>
                        </button>

                    </div>

                    @error('password')
                        <p class="text-red-200 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <!-- Tombol Login -->
                <button
                    type="submit"
                    class="w-full py-3 rounded-xl bg-red-700 hover:bg-red-800 text-white font-semibold transition duration-300 shadow-lg"
                >
                    MASUK
                </button>

            </form>

        </div>

        <div class="text-center mt-6 text-white text-sm">
            © {{ date('Y') }} Dinas Komunikasi dan Informatika
        </div>

    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const eyeOpen = document.getElementById('eye-open');
            const eyeClose = document.getElementById('eye-close');

            if (password.type === "password") {
                password.type = "text";
                eyeOpen.classList.add("hidden");
                eyeClose.classList.remove("hidden");
            } else {
                password.type = "password";
                eyeOpen.classList.remove("hidden");
                eyeClose.classList.add("hidden");
            }
        }
    </script>

</body>

</html>