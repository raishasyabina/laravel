<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Customer | eventboothrent.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
<div class="mx-auto flex min-h-screen max-w-7xl flex-col px-4 py-6 sm:px-6 lg:px-8">
    <header class="flex items-center justify-between border-b border-white/10 pb-5">
        <a href="/" class="text-xl font-semibold text-white">eventboothrent.com</a>
        <a href="{{ route('catalog') }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100">Kembali ke katalog</a>
    </header>

    <main class="mt-8 space-y-8">
        <section class="rounded-[32px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20">
            <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Customer dashboard</p>
            <h1 class="mt-3 text-3xl font-semibold text-white">Riwayat booking & status pembayaran</h1>
            <p class="mt-3 text-slate-300">Halaman ini menghubungkan data reservasi dari backend ke tampilan customer yang modern dan responsif.</p>
        </section>

        @if(session('success'))
            <div class="rounded-3xl border border-emerald-400/30 bg-emerald-400/10 p-4 text-emerald-50">{{ session('success') }}</div>
        @endif

        <section class="grid gap-6">
            @forelse($reservations as $reservation)
                <article class="rounded-[28px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20">
                    <div class="flex flex-wrap items-start justify-between gap-4">
                        <div>
                            <p class="text-xs uppercase tracking-[0.35em] text-amber-200/90">{{ $reservation->invoice_number }}</p>
                            <h2 class="mt-2 text-xl font-semibold text-white">{{ $reservation->items->first()?->package?->name ?? 'Paket booth' }}</h2>
                            <p class="mt-2 text-sm text-slate-300">Durasi: {{ $reservation->start_date->format('d M Y') }} - {{ $reservation->end_date->format('d M Y') }}</p>
                        </div>
                        <span class="rounded-full bg-amber-400/10 px-3 py-1 text-xs font-semibold text-amber-100">{{ ucfirst($reservation->status) }}</span>
                    </div>
                    <div class="mt-5 grid gap-4 md:grid-cols-3">
                        <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-4">
                            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Total</p>
                            <p class="mt-2 text-2xl font-semibold text-white">Rp {{ number_format($reservation->total_amount, 0, ',', '.') }}</p>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-4">
                            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Alamat</p>
                            <p class="mt-2 text-sm text-slate-200">{{ $reservation->delivery_address }}</p>
                        </div>
                        <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-4">
                            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Catatan</p>
                            <p class="mt-2 text-sm text-slate-200">{{ $reservation->notes ?: '-' }}</p>
                        </div>
                    </div>
                </article>
            @empty
                <article class="rounded-[28px] border border-dashed border-white/10 bg-white/5 p-6 text-slate-300">Belum ada reservasi. Mulai dari halaman katalog untuk membuat booking pertama.</article>
            @endforelse
        </section>
    </main>
</div>
</body>
</html>
