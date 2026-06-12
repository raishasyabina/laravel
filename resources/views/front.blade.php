<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eventboothrent.com | Platform Penyewaan Booth Event</title>
    <meta name="description" content="Katalog booth event, cek stok real-time, pembayaran otomatis, dan invoice digital untuk penyewa booth.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 text-slate-100 antialiased selection:bg-amber-400 selection:text-slate-950">
    <div class="absolute inset-0 -z-10 overflow-hidden">
        <div class="absolute left-[-10%] top-0 h-72 w-72 rounded-full bg-amber-400/10 blur-3xl"></div>
        <div class="absolute right-[-8%] top-24 h-80 w-80 rounded-full bg-pink-400/10 blur-3xl"></div>
        <div class="absolute bottom-0 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-indigo-400/10 blur-3xl"></div>
    </div>

    <header class="sticky top-0 z-40 border-b border-white/10 bg-slate-950/90 backdrop-blur-xl">
        <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
            <a href="/" class="flex items-center gap-3 text-lg font-semibold tracking-wide text-white">
                <span class="inline-flex h-10 w-10 items-center justify-center rounded-2xl bg-gradient-to-br from-amber-400 via-orange-400 to-pink-500 text-slate-950 shadow-lg shadow-amber-400/20">E</span>
                <span>eventboothrent.com</span>
            </a>
            <div class="hidden items-center gap-6 text-sm text-slate-300 md:flex">
                <a href="#paket" class="transition hover:text-white">Paket</a>
                <a href="#fitur" class="transition hover:text-white">Fitur</a>
                <a href="#alur" class="transition hover:text-white">Alur</a>
                <a href="#kontak" class="transition hover:text-white">Kontak</a>
            </div>
            <div class="flex items-center gap-3">
                <a href="{{ route('catalog') }}" class="hidden rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-100 transition hover:border-amber-400/60 hover:bg-white/10 md:inline-flex">Lihat katalog</a>
                <a href="#cta" class="rounded-full bg-gradient-to-r from-amber-400 via-orange-400 to-pink-500 px-4 py-2 text-sm font-semibold text-slate-950 shadow-lg shadow-amber-400/20 transition hover:scale-[1.02]">Mulai Booking</a>
            </div>
        </nav>
    </header>

    <main class="mx-auto flex w-full max-w-7xl flex-col gap-16 px-4 pb-16 pt-8 sm:px-6 lg:px-8 lg:pt-12">
        <section class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 rounded-full border border-amber-400/30 bg-amber-400/10 px-3 py-1 text-sm text-amber-100 shadow-lg shadow-amber-400/10">
                    <span class="h-2 w-2 rounded-full bg-amber-300"></span>
                    Platform booth event modern untuk EO & penyewa
                </div>
                <div class="space-y-5">
                    <h1 class="max-w-xl text-4xl font-black tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Sewa booth, cek stok real-time, dan kelola pembayaran dari satu dashboard.
                    </h1>
                    <p class="max-w-xl text-lg text-slate-300 sm:text-xl">
                        eventboothrent.com membantu penyelenggara event menampilkan katalog booth, mengunci slot saat booking, memproses pembayaran otomatis, dan menghasilkan invoice digital instan.
                    </p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <a href="{{ route('catalog') }}" class="rounded-full bg-white px-5 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-white/5 transition hover:-translate-y-0.5 hover:bg-amber-100">Lihat katalog booth</a>
                    <a href="#fitur" class="rounded-full border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-white transition hover:border-amber-400/60 hover:bg-white/10">Jelajahi fitur</a>
                </div>
                <dl class="grid gap-4 sm:grid-cols-3">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-4 shadow-2xl shadow-black/20">
                        <dt class="text-sm text-slate-300">Slot tersedia</dt>
                        <dd class="mt-2 text-2xl font-bold text-white">120+</dd>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-4 shadow-2xl shadow-black/20">
                        <dt class="text-sm text-slate-300">Zona booth</dt>
                        <dd class="mt-2 text-2xl font-bold text-white">18 area</dd>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-4 shadow-2xl shadow-black/20">
                        <dt class="text-sm text-slate-300">Konfirmasi pembayaran</dt>
                        <dd class="mt-2 text-2xl font-bold text-white">&lt; 5 menit</dd>
                    </div>
                </dl>
            </div>

            <aside class="rounded-[32px] border border-white/10 bg-white/6 p-4 shadow-2xl shadow-black/30 backdrop-blur-xl lg:p-6">
                <div class="rounded-[28px] border border-white/10 bg-slate-900/95 p-5 sm:p-6">
                    <div class="flex items-start justify-between gap-4 border-b border-white/10 pb-5">
                        <div>
                            <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Dashboard Customer</p>
                            <h2 class="mt-3 text-2xl font-semibold text-white">Katalog & status real-time</h2>
                        </div>
                        <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-semibold text-emerald-200">Live</span>
                    </div>
                    <div class="mt-6 space-y-4">
                        <article class="rounded-3xl border border-white/10 bg-white/5 p-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="text-sm text-slate-300">Paket Premium</p>
                                    <h3 class="text-xl font-semibold text-white">Booth 3x3 Meter</h3>
                                </div>
                                <span class="rounded-full bg-emerald-400/10 px-3 py-1 text-xs font-semibold text-emerald-200">Tersedia</span>
                            </div>
                            <p class="mt-3 text-sm text-slate-300">Fasilitas lengkap, pencahayaan, dan akses listrik.</p>
                            <div class="mt-4 flex items-end justify-between">
                                <div>
                                    <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Harga / hari</p>
                                    <p class="text-2xl font-bold text-white">Rp 1.250.000</p>
                                </div>
                                <button class="rounded-full bg-gradient-to-r from-amber-400 via-orange-400 to-pink-500 px-4 py-2 text-sm font-semibold text-slate-950">Pesan sekarang</button>
                            </div>
                        </article>
                        <article class="rounded-3xl border border-white/10 bg-white/5 p-4">
                            <div class="flex items-center justify-between gap-3">
                                <div>
                                    <p class="text-sm text-slate-300">Paket Standar</p>
                                    <h3 class="text-xl font-semibold text-white">Booth 2x2 Meter</h3>
                                </div>
                                <span class="rounded-full bg-amber-400/10 px-3 py-1 text-xs font-semibold text-amber-100">Sisa 4 slot</span>
                            </div>
                            <p class="mt-3 text-sm text-slate-300">Cocok untuk UMKM dan merchant yang ingin visual menarik.</p>
                        </article>
                    </div>
                    <div class="mt-6 rounded-3xl border border-emerald-400/20 bg-emerald-400/8 p-4 text-sm text-emerald-50">
                        Midtrans Snap, notifikasi WhatsApp, dan invoice PDF otomatis siap digunakan untuk mendukung transaksi yang lebih cepat dan aman.
                    </div>
                </div>
            </aside>
        </section>

        <section id="paket" class="space-y-6">
            <div class="flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                <div>
                    <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Paket booth</p>
                    <h2 class="text-2xl font-semibold text-white sm:text-3xl">Pilihan paket yang menyesuaikan kebutuhan event</h2>
                </div>
                <p class="max-w-2xl text-slate-300">Dari booth entry hingga area premium, sistem kami menampilkan jenis paket, stok yang tersisa, dan estimasi biaya sewa per hari.</p>
            </div>
            <div class="grid gap-6 md:grid-cols-3">
                @php
                    $packages = [
                        ['name' => 'Starter', 'price' => 'Rp 5.000.000', 'tag' => 'Paling hemat', 'items' => ['1x1 meter', 'Spanduk standar', 'Akses listrik dasar'], 'accent' => 'from-slate-200 to-white'],
                        ['name' => 'Growth', 'price' => 'Rp 8.000.000', 'tag' => 'Paling laris', 'items' => ['2x2 meter', 'Meja + kursi', 'Pencahayaan LED'], 'accent' => 'from-amber-400 to-orange-400'],
                        ['name' => 'Premium', 'price' => 'Rp 12.000.000', 'tag' => 'Area strategis', 'items' => ['3x3 meter', 'Fasilitas premium', 'Lokasi depan pintu masuk'], 'accent' => 'from-pink-400 to-rose-400'],
                    ];
                @endphp

                @foreach ($packages as $package)
                    <article class="rounded-[28px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20 transition hover:-translate-y-1 hover:border-amber-400/40 hover:bg-white/8">
                        <div class="flex items-center justify-between gap-3">
                            <span class="rounded-full bg-white/8 px-3 py-1 text-xs uppercase tracking-[0.35em] text-slate-200">{{ $package['tag'] }}</span>
                            <span class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br {{ $package['accent'] }} text-slate-950 font-semibold">{{ substr($package['name'], 0, 1) }}</span>
                        </div>
                        <h3 class="mt-5 text-2xl font-semibold text-white">{{ $package['name'] }}</h3>
                        <p class="mt-3 text-sm text-slate-300">Paket fleksibel untuk event skala kecil, menengah, hingga brand activation.</p>
                        <ul class="mt-5 space-y-2 text-sm text-slate-200">
                            @foreach ($package['items'] as $item)
                                <li class="flex items-start gap-2"><span class="mt-1 text-amber-300">•</span> {{ $item }}</li>
                            @endforeach
                        </ul>
                        <div class="mt-6 flex items-end justify-between gap-3 border-t border-white/10 pt-5">
                            <div>
                                <p class="text-xs uppercase tracking-[0.35em] text-slate-400">Harga</p>
                                <p class="text-2xl font-semibold text-white">{{ $package['price'] }}</p>
                            </div>
                            <a href="#cta" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm font-semibold text-white transition hover:border-amber-400/60 hover:bg-white/10">Lihat detail</a>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="fitur" class="grid gap-6 lg:grid-cols-[1fr_0.9fr]">
            <article class="rounded-[32px] border border-white/10 bg-white/5 p-6 shadow-2xl shadow-black/20">
                <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Fitur utama</p>
                <h2 class="mt-3 text-2xl font-semibold text-white sm:text-3xl">Semua yang dibutuhkan untuk mengelola booth event lebih cepat</h2>
                <div class="mt-6 space-y-4 text-slate-200">
                    <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-4">
                        <h3 class="text-lg font-semibold text-white">Cek stok real-time</h3>
                        <p class="mt-2 text-sm text-slate-300">Sisa stok otomatis dihitung per tanggal event dan tombol “Tidak Tersedia” muncul saat slot habis.</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-4">
                        <h3 class="text-lg font-semibold text-white">Pembayaran & invoice otomatis</h3>
                        <p class="mt-2 text-sm text-slate-300">Integrasi Midtrans Snap, notifikasi WhatsApp, dan generation invoice PDF yang bisa diunduh langsung.</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-4">
                        <h3 class="text-lg font-semibold text-white">Dashboard admin terpusat</h3>
                        <p class="mt-2 text-sm text-slate-300">Owner dapat memantau booking, status pembayaran, dan data booth secara sinkron dari satu tempat.</p>
                    </div>
                </div>
            </article>

            <article class="rounded-[32px] border border-white/10 bg-gradient-to-br from-amber-400/10 via-white/5 to-pink-400/10 p-6 shadow-2xl shadow-black/20">
                <p class="text-sm uppercase tracking-[0.35em] text-amber-100">Untuk admin & customer</p>
                <h2 class="mt-3 text-2xl font-semibold text-white sm:text-3xl">Mudah dipakai untuk dua sisi pengguna</h2>
                <ul class="mt-6 space-y-4 text-slate-100">
                    <li class="rounded-3xl border border-white/10 bg-slate-950/70 p-4">Admin: CRUD paket booth, kelola stok, verifikasi transaksi, dan ringkasan pendapatan.</li>
                    <li class="rounded-3xl border border-white/10 bg-slate-950/70 p-4">Customer: lihat paket, pilih zona, cek ketersediaan, checkout, dan pantau status booking.</li>
                    <li class="rounded-3xl border border-white/10 bg-slate-950/70 p-4">Operasional: floating button WhatsApp, lock stok 15 menit, dan notifikasi pembayaran otomatis.</li>
                </ul>
            </article>
        </section>

        <section id="alur" class="space-y-6">
            <div>
                <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Flow booking</p>
                <h2 class="mt-3 text-2xl font-semibold text-white sm:text-3xl">Alur sewa booth yang singkat dan aman</h2>
            </div>
            <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-4">
                @php
                    $steps = [
                        ['num'=>'01','title'=>'Pilih paket', 'desc'=>'Lihat jenis booth, kapasitas, dan fasilitas yang sesuai kebutuhan event.'],
                        ['num'=>'02','title'=>'Cek ketersediaan', 'desc'=>'Sistem menampilkan slot yang masih aktif dan status real-time per tanggal.'],
                        ['num'=>'03','title'=>'Bayar online', 'desc'=>'Proses checkout dengan Midtrans Snap dan lock stok selama 15 menit.'],
                        ['num'=>'04','title'=>'Dapatkan invoice', 'desc'=>'Konfirmasi otomatis, invoice digital, dan notifikasi WhatsApp langsung ke customer.'],
                    ];
                @endphp

                @foreach ($steps as $step)
                    <article class="rounded-[28px] border border-white/10 bg-white/5 p-5 shadow-2xl shadow-black/20">
                        <span class="text-sm uppercase tracking-[0.35em] text-amber-200/90">{{ $step['num'] }}</span>
                        <h3 class="mt-4 text-xl font-semibold text-white">{{ $step['title'] }}</h3>
                        <p class="mt-3 text-sm text-slate-300">{{ $step['desc'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        <section id="cta" class="rounded-[32px] border border-white/10 bg-gradient-to-r from-slate-900 via-slate-900 to-slate-800 p-6 shadow-2xl shadow-black/30 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1fr_0.8fr] lg:items-center">
                <div>
                    <p class="text-sm uppercase tracking-[0.35em] text-amber-200/90">Siap menjual booth event?</p>
                    <h2 class="mt-3 text-2xl font-semibold text-white sm:text-3xl">Bangun pengalaman booking yang cepat, profesional, dan tanpa bentrok slot.</h2>
                    <p class="mt-4 max-w-2xl text-slate-300">Antarmuka publik ini siap dikembangkan menjadi halaman katalog, checkout, dan dashboard admin sesuai PRD yang telah disusun.</p>
                </div>
                <div class="rounded-[28px] border border-white/10 bg-white/5 p-5">
                    <ul class="space-y-3 text-sm text-slate-100">
                        <li class="flex items-start gap-3"><span class="mt-1 text-amber-300">✓</span> Real-time stock visibility</li>
                        <li class="flex items-start gap-3"><span class="mt-1 text-amber-300">✓</span> Midtrans payment flow</li>
                        <li class="flex items-start gap-3"><span class="mt-1 text-amber-300">✓</span> Digital invoice & WA notification</li>
                    </ul>
                    <div class="mt-5 flex flex-wrap gap-3">
                        <a href="/login" class="rounded-full bg-gradient-to-r from-amber-400 via-orange-400 to-pink-500 px-5 py-3 text-sm font-semibold text-slate-950 shadow-lg shadow-amber-400/20">Masuk / Daftar</a>
                        <a href="#top" class="rounded-full border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-white transition hover:border-amber-400/60 hover:bg-white/10">Kembali ke atas</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="kontak" class="border-t border-white/10 bg-slate-950/95">
        <div class="mx-auto flex max-w-7xl flex-col gap-3 px-4 py-6 text-sm text-slate-300 sm:px-6 lg:flex-row lg:items-center lg:justify-between lg:px-8">
            <p>© 2026 eventboothrent.com — Front end landing page berdasarkan PRD yang Anda buka.</p>
            <div class="flex items-center gap-4">
                <a href="#paket" class="transition hover:text-white">Paket</a>
                <a href="#fitur" class="transition hover:text-white">Fitur</a>
                <a href="#alur" class="transition hover:text-white">Alur</a>
            </div>
        </div>
    </footer>
</body>
</html>
