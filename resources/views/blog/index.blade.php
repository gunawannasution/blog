@extends('layouts.app')

@section('title', 'Jasa Setting MikroTik Profesional | VPN, Load Balancing, Hotspot')
@section('meta_description', 'Jasa setting MikroTik profesional untuk kantor, ISP, VPN, firewall, dan hotspot.
    Konsultasi gratis & respon cepat.')

@section('content')

    @php
        $wa = '628xxxx';
        $msg = urlencode("Halo, saya butuh jasa MikroTik.\nKebutuhan: ");
    @endphp

    {{-- HERO --}}
    <section class="py-20 text-center">
        <div class="max-w-4xl mx-auto px-4">

            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-6">
                Jasa Setting MikroTik <br>
                Profesional & Terpercaya
            </h1>

            <p class="text-slate-500 mb-6 text-lg">
                Solusi jaringan stabil, aman, dan optimal untuk kantor, ISP, dan bisnis Anda.
            </p>

            {{-- TRUST MICRO --}}
            <div class="text-xs text-slate-400 mb-6">
                ✔ 100+ Client • ✔ Respon < 5 menit • ✔ Konsultasi Gratis </div>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
                            class="btn-primary px-8 py-4 rounded-full text-white font-semibold">
                            Konsultasi Gratis
                        </a>

                        <a href="#pricing" class="px-8 py-4 rounded-full border border-slate-300">
                            Lihat Harga
                        </a>
                    </div>

            </div>
    </section>

    {{-- TRUST --}}
    <section class="py-10 border-t">
        <div class="max-w-5xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-sm font-medium">
            <div>✔ 5+ Tahun Pengalaman</div>
            <div>✔ 100+ Client</div>
            <div>✔ Support Remote</div>
            <div>✔ Fast Response</div>
        </div>
    </section>

    {{-- SERVICES --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4">

            <h2 class="text-2xl md:text-3xl font-bold text-center mb-12">
                Layanan MikroTik
            </h2>

            <div class="grid md:grid-cols-3 gap-6">

                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="font-semibold mb-2">VPN MikroTik</h3>
                    <p class="text-sm text-slate-500">
                        PPTP, L2TP, WireGuard untuk koneksi aman.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="font-semibold mb-2">Load Balancing</h3>
                    <p class="text-sm text-slate-500">
                        Multi ISP stabil + failover otomatis.
                    </p>
                </div>

                <div class="bg-white p-6 rounded-xl shadow">
                    <h3 class="font-semibold mb-2">Hotspot</h3>
                    <p class="text-sm text-slate-500">
                        Voucher & manajemen user.
                    </p>
                </div>

            </div>

        </div>
    </section>

    {{-- BEFORE AFTER (POWERFUL) --}}
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4">

            <h2 class="text-2xl font-bold text-center mb-10">
                Sebelum vs Sesudah
            </h2>

            <div class="grid md:grid-cols-2 gap-6 text-sm">

                <div class="bg-red-50 p-6 rounded-xl">
                    ❌ Internet sering putus <br>
                    ❌ Tidak stabil <br>
                    ❌ Tidak aman
                </div>

                <div class="bg-green-50 p-6 rounded-xl">
                    ✅ Stabil 24/7 <br>
                    ✅ Load balancing optimal <br>
                    ✅ Security terjamin
                </div>

            </div>

        </div>
    </section>

    {{-- PRICING --}}
    <section id="pricing" class="py-20 bg-slate-50">
        <div class="max-w-6xl mx-auto px-4">

            <h2 class="text-3xl font-bold text-center mb-12">
                Paket Harga
            </h2>

            {{-- URGENCY --}}
            <div class="text-center text-red-500 text-sm mb-6">
                ⚠ Slot terbatas hari ini
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h3 class="font-semibold mb-2">Basic</h3>
                    <p class="text-2xl font-bold mb-4">Rp 500K</p>
                    <ul class="text-sm text-slate-500 space-y-2 mb-6">
                        <li>✔ Setup dasar</li>
                        <li>✔ NAT & DHCP</li>
                    </ul>
                    <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
                        class="btn-primary px-5 py-2 rounded-full text-white">
                        Mulai Sekarang
                    </a>
                </div>

                <div class="bg-white p-6 rounded-xl shadow-lg border-2 border-blue-600 text-center">
                    <h3 class="font-semibold mb-2">Pro</h3>
                    <p class="text-2xl font-bold mb-4">Rp 1.5JT</p>
                    <ul class="text-sm text-slate-500 space-y-2 mb-6">
                        <li>✔ VPN</li>
                        <li>✔ Load balancing</li>
                        <li>✔ Firewall</li>
                    </ul>
                    <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
                        class="btn-primary px-5 py-2 rounded-full text-white">
                        Paling Laris
                    </a>
                </div>

                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h3 class="font-semibold mb-2">Enterprise</h3>
                    <p class="text-2xl font-bold mb-4">Custom</p>
                    <ul class="text-sm text-slate-500 space-y-2 mb-6">
                        <li>✔ Full setup</li>
                        <li>✔ Monitoring</li>
                        <li>✔ Support</li>
                    </ul>
                    <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
                        class="btn-primary px-5 py-2 rounded-full text-white">
                        Konsultasi
                    </a>
                </div>

            </div>

        </div>
    </section>

    {{-- TESTIMONI --}}
    <section class="py-20">
        <div class="max-w-5xl mx-auto px-4 text-center">

            <h2 class="text-2xl font-bold mb-10">Testimoni Client</h2>

            <div class="grid md:grid-cols-2 gap-6 text-sm">

                <div class="p-6 bg-white rounded-xl shadow">
                    ⭐⭐⭐⭐⭐ <br>
                    "Jaringan jadi stabil, sangat recommended!"
                </div>

                <div class="p-6 bg-white rounded-xl shadow">
                    ⭐⭐⭐⭐⭐ <br>
                    "Respon cepat & profesional."
                </div>

            </div>

        </div>
    </section>

    {{-- FAQ (SEO BOOST) --}}
    <section class="py-20 bg-slate-50">
        <div class="max-w-3xl mx-auto px-4">

            <h2 class="text-xl font-bold text-center mb-6">FAQ</h2>

            <div class="space-y-4 text-sm text-slate-600">

                <div>
                    <strong>Apakah bisa remote?</strong><br>
                    Ya, semua konfigurasi bisa remote.
                </div>

                <div>
                    <strong>Berapa lama pengerjaan?</strong><br>
                    1–3 jam tergantung kebutuhan.
                </div>

                <div>
                    <strong>Apakah aman?</strong><br>
                    Menggunakan best practice MikroTik.
                </div>

            </div>

        </div>
    </section>

    {{-- FINAL CTA --}}
    <section class="py-20 bg-slate-900 text-white text-center">
        <h2 class="text-3xl font-bold mb-4">
            Siap Optimalkan Jaringan Anda?
        </h2>

        <p class="text-sm text-slate-400 mb-6">
            Konsultasi gratis • Respon cepat
        </p>

        <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
            class="bg-blue-600 px-8 py-4 rounded-full font-semibold">
            Hubungi Sekarang
        </a>
    </section>

@endsection
