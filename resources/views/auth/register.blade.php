<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar | eventboothrent.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
    <div class="mx-auto flex min-h-screen max-w-6xl items-center px-4 py-10 sm:px-6 lg:px-8">
        <div class="grid w-full gap-8 lg:grid-cols-[1fr_0.9fr]">
            <section class="rounded-[32px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/30 lg:p-8">
                <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Daftar akun</p>
                <h1 class="mt-3 text-3xl font-semibold text-white">Buat akun penyewa booth untuk mulai booking</h1>
                <p class="mt-3 text-slate-300">Daftar sebagai customer untuk melihat katalog, mengisi reservasi, dan mengelola riwayat booking secara praktis.</p>
            </section>

            <section class="rounded-[32px] border border-white/10 bg-slate-900/95 p-6 shadow-2xl shadow-black/30 lg:p-8">
                <h2 class="text-2xl font-semibold text-white">Daftar</h2>
                <p class="mt-2 text-sm text-slate-300">Sudah punya akun? <a href="/login" class="text-amber-200 hover:text-white">Masuk di sini</a></p>

                <form method="POST" action="/register" class="mt-6 space-y-4">
                    @csrf
                    <label class="block text-sm text-slate-200">Nama lengkap
                        <input type="text" name="name" value="{{ old('name') }}" required class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-800 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" placeholder="Nama perusahaan / pemilik">
                    </label>
                    <label class="block text-sm text-slate-200">Email
                        <input type="email" name="email" value="{{ old('email') }}" required class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-800 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" placeholder="nama@contoh.com">
                    </label>
                    <label class="block text-sm text-slate-200">Nomor WhatsApp
                        <input type="text" name="phone" value="{{ old('phone') }}" class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-800 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" placeholder="0812xxxx">
                    </label>
                    <div class="grid gap-4 sm:grid-cols-2">
                        <label class="block text-sm text-slate-200">Password
                            <input type="password" name="password" required class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-800 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none">
                        </label>
                        <label class="block text-sm text-slate-200">Konfirmasi password
                            <input type="password" name="password_confirmation" required class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-800 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none">
                        </label>
                    </div>
                    @if($errors->any())
                        <p class="rounded-2xl border border-rose-400/30 bg-rose-400/10 p-3 text-sm text-rose-100">{{ $errors->first() }}</p>
                    @endif
                    <button type="submit" class="w-full rounded-full bg-gradient-to-r from-amber-400 via-orange-400 to-pink-500 px-5 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-amber-400/20">Daftar</button>
                </form>
            </section>
        </div>
    </div>
</body>
</html>
