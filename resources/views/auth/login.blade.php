<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | eventboothrent.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    <div class="mx-auto flex min-h-screen max-w-6xl items-center px-4 py-10 sm:px-6 lg:px-8">
        <div class="grid w-full gap-8 lg:grid-cols-[1fr_0.9fr]">
            <section class="rounded-[32px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 lg:p-8">
                <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Autentikasi</p>
                <h1 class="mt-3 text-3xl font-semibold text-white">Masuk untuk lihat dashboard booth</h1>
                <p class="mt-3 text-slate-300">Gunakan akun customer atau admin. Setelah login Anda akan diarahkan ke dashboard yang sesuai.</p>
                <ul class="mt-6 space-y-3 text-sm text-slate-200">
                    <li>• Cek status reservasi dan pembayaran</li>
                    <li>• Lihat katalog booth yang sudah terhubung ke backend</li>
                    <li>• Akses dashboard admin untuk monitoring operasional</li>
                </ul>
            </section>

            <section class="rounded-[32px] border border-white/10 bg-slate-900/95 p-6 shadow-2xl shadow-black/30 lg:p-8">
                <h2 class="text-2xl font-semibold text-white">Masuk</h2>
                <p class="mt-2 text-sm text-slate-300">Belum punya akun? <a href="/register" class="text-amber-200 hover:text-white">Daftar sekarang</a></p>

                <form method="POST" action="/login" class="mt-6 space-y-4">
                    @csrf
                    <label class="block text-sm text-slate-200">Email
                        <input type="email" name="email" value="{{ old('email') }}" required class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-800 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" placeholder="nama@contoh.com">
                    </label>
                    <label class="block text-sm text-slate-200">Password
                        <input type="password" name="password" required class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-800 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" placeholder="Masukkan password">
                    </label>
                    <label class="flex items-center gap-2 text-sm text-slate-300">
                        <input type="checkbox" name="remember" class="rounded border-white/10 bg-slate-800 text-amber-400 focus:ring-amber-400">
                        Ingat saya
                    </label>
                    @if($errors->any())
                        <p class="rounded-2xl border border-rose-400/30 bg-rose-400/10 p-3 text-sm text-rose-100">{{ $errors->first() }}</p>
                    @endif
                    <button type="submit" class="w-full rounded-full bg-gradient-to-r from-amber-400 via-orange-400 to-pink-500 px-5 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-amber-400/20">Masuk</button>
                </form>
            </section>
        </div>
    </div>
</body>
</html>
