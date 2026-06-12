<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Katalog Booth | eventboothrent.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
<div class="mx-auto flex min-h-screen max-w-7xl flex-col px-4 py-6 sm:px-6 lg:px-8">
    <header class="flex items-center justify-between border-b border-white/10 pb-5">
        <a href="/" class="text-xl font-semibold text-white">eventboothrent.com</a>
        <a href="/dashboard" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100">Dashboard customer</a>
    </header>

    <main class="mt-8 grid flex-1 gap-8 lg:grid-cols-[1fr_0.85fr]">
        <section class="space-y-6">
            <div>
                <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Katalog real-time</p>
                <h1 class="mt-3 text-3xl font-semibold text-white">Pilih paket booth yang siap dipesan</h1>
                <p class="mt-3 max-w-2xl text-slate-300">Halaman ini menampilkan data paket dari backend Laravel, termasuk jumlah stok, harga per hari, dan deskripsi paket yang bisa langsung dipakai untuk proses booking.</p>
            </div>
            <div class="grid gap-6 md:grid-cols-2">
                @foreach($packages as $package)
                    <article class="rounded-[28px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20">
                        <img src="{{ $package->photo ?? 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=900&q=80' }}" alt="{{ $package->name }}" class="h-40 w-full rounded-3xl object-cover">
                        <div class="mt-4 flex items-start justify-between gap-3">
                            <div>
                                <p class="text-xs uppercase tracking-[0.35em] text-amber-200/90">{{ $package->category }}</p>
                                <h2 class="mt-2 text-xl font-semibold text-white">{{ $package->name }}</h2>
                            </div>
                            <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-semibold text-emerald-100">Stok {{ $package->total_stock }}</span>
                        </div>
                        <p class="mt-3 text-sm text-slate-300">{{ $package->description }}</p>
                        <div class="mt-4 flex items-end justify-between border-t border-white/10 pt-4">
                            <div>
                                <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Harga / hari</p>
                                <p class="text-2xl font-semibold text-white">Rp {{ number_format($package->price_per_day, 0, ',', '.') }}</p>
                            </div>
                            <span class="rounded-full bg-white/8 px-3 py-1 text-xs text-slate-100">{{ $package->slug }}</span>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <aside class="rounded-[32px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20">
            <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Form booking</p>
            <h2 class="mt-3 text-2xl font-semibold text-white">Buat reservasi baru</h2>
            <p class="mt-3 text-sm text-slate-300">Form ini memproses data ke backend Laravel dan menghasilkan reservasi pending yang siap diverifikasi oleh admin.</p>

            <form action="{{ route('reservations.store') }}" method="POST" class="mt-6 space-y-4">
                @csrf
                <label class="block text-sm text-slate-200">Paket
                    <select name="package_id" class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" required>
                        @foreach($packages as $package)
                            <option value="{{ $package->id }}">{{ $package->name }} (Rp {{ number_format($package->price_per_day, 0, ',', '.') }})</option>
                        @endforeach
                    </select>
                </label>
                <div class="grid gap-4 sm:grid-cols-2">
                    <label class="block text-sm text-slate-200">Tanggal mulai
                        <input type="date" name="start_date" class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" required>
                    </label>
                    <label class="block text-sm text-slate-200">Tanggal selesai
                        <input type="date" name="end_date" class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" required>
                    </label>
                </div>
                <label class="block text-sm text-slate-200">Alamat pengiriman
                    <input type="text" name="delivery_address" class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" placeholder="Jl. Sudirman No. 1" required>
                </label>
                <label class="block text-sm text-slate-200">Jumlah booth
                    <input type="number" name="quantity" min="1" value="1" class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" required>
                </label>
                <label class="block text-sm text-slate-200">Catatan
                    <textarea name="notes" rows="4" class="mt-2 w-full rounded-2xl border border-white/10 bg-slate-900 px-4 py-3 text-slate-100 focus:border-amber-400 focus:outline-none" placeholder="Area depan, listrik tambahan, dll."></textarea>
                </label>
                <button type="submit" class="w-full rounded-full bg-gradient-to-r from-amber-400 via-orange-400 to-pink-500 px-5 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-amber-400/20">Simpan reservasi</button>
            </form>
        </aside>
    </main>
</div>
</body>
</html>
