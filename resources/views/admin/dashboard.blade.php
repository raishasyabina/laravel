<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | eventboothrent.com</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased">
<div class="mx-auto flex min-h-screen max-w-7xl flex-col px-4 py-6 sm:px-6 lg:px-8">
    <header class="flex items-center justify-between border-b border-white/10 pb-5">
        <a href="/" class="text-xl font-semibold text-white">eventboothrent.com</a>
        <a href="{{ route('catalog') }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100">Lihat katalog</a>
    </header>

    <main class="mt-8 space-y-8">
        <section class="rounded-[32px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20">
            <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Admin dashboard</p>
            <h1 class="mt-3 text-3xl font-semibold text-white">Ringkasan operasional booth event</h1>
            <p class="mt-3 text-slate-300">Dashboard ini menampilkan statistik dasar dari backend Laravel untuk mendukung monitoring booking, paket, dan pendapatan.</p>
        </section>

        <section class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
            <article class="rounded-[28px] border border-white/10 bg-white/5 p-5 shadow-2xl shadow-black/20"><p class="text-xs uppercase tracking-[0.35em] text-slate-400">Paket</p><p class="mt-3 text-3xl font-semibold text-white">{{ $packages }}</p></article>
            <article class="rounded-[28px] border border-white/10 bg-white/5 p-5 shadow-2xl shadow-black/20"><p class="text-xs uppercase tracking-[0.35em] text-slate-400">Total reservasi</p><p class="mt-3 text-3xl font-semibold text-white">{{ $reservations }}</p></article>
            <article class="rounded-[28px] border border-white/10 bg-white/5 p-5 shadow-2xl shadow-black/20"><p class="text-xs uppercase tracking-[0.35em] text-slate-400">Pending</p><p class="mt-3 text-3xl font-semibold text-white">{{ $pending }}</p></article>
            <article class="rounded-[28px] border border-white/10 bg-white/5 p-5 shadow-2xl shadow-black/20"><p class="text-xs uppercase tracking-[0.35em] text-slate-400">Pendapatan</p><p class="mt-3 text-3xl font-semibold text-white">Rp {{ number_format($revenue, 0, ',', '.') }}</p></article>
        </section>

        <section class="rounded-[32px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20">
            <div class="flex items-end justify-between gap-3">
                <div>
                    <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Status pembayaran</p>
                    <h2 class="mt-2 text-2xl font-semibold text-white">Monitoring booking terbaru</h2>
                </div>
                <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-semibold text-emerald-100">{{ $paid }} paid</span>
            </div>
            <div class="mt-6 rounded-3xl border border-white/10 bg-slate-900/80 p-4 text-sm text-slate-200">Fitur ini bisa langsung dikembangkan menjadi tabel booking, status Midtrans, verifikasi invoice PDF, dan notifikasi WhatsApp sesuai PRD.</div>
        </section>
    </main>
</div>
</body>
</html>
