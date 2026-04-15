<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">

    {{-- CRITICAL: prevent layout shift --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    {{-- PRIMARY SEO --}}
    <title>@yield('title', 'Jasa MikroTik Profesional | VPN, Load Balancing, Hotspot')</title>
    <meta name="description" content="@yield('meta_description', 'Jasa setting MikroTik profesional untuk kantor, ISP, VPN, firewall, dan optimasi jaringan. Konsultasi gratis & respon cepat.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- PERFORMANCE --}}
    <meta name="theme-color" content="#0f172a">

    {{-- OPEN GRAPH --}}
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/cover.webp') }}">

    {{-- TWITTER --}}
    <meta name="twitter:card" content="summary_large_image">

    {{-- FONT (OPTIMIZED) --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    {{-- VITE --}}
    @vite('resources/css/app.css')

    {{-- CRITICAL CSS (above the fold) --}}
    <style>
        body {
            margin: 0;
            font-family: Inter, sans-serif;
            background: #f8fafc;
            text-rendering: optimizeLegibility;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }

        .btn-primary {
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.25);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
        }
    </style>

    {{-- STRUCTURED DATA (ADVANCED) --}}
    @verbatim
        <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "MikroTik Pro",
      "image": "/images/cover.webp",
      "description": "Jasa setting MikroTik profesional",
      "areaServed": "Indonesia",
      "priceRange": "$$",
      "telephone": "+628xxxx",
      "openingHours": "Mo-Su 08:00-22:00"
    }
    </script>
    @endverbatim

</head>

<body class="text-slate-900 antialiased">

    {{-- TOP BAR --}}
    <div class="bg-slate-900 text-white text-[10px] text-center py-2 tracking-widest font-semibold">
        FAST RESPONSE • SUPPORT REMOTE • GARANSI KONFIGURASI
    </div>

    {{-- NAVBAR --}}
    <header class="glass sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 h-16 flex items-center justify-between">

            <a href="/" class="flex items-center space-x-2 font-bold">
                <div class="w-9 h-9 bg-blue-600 text-white rounded-lg flex items-center justify-center">M</div>
                <span>MikroTik Pro</span>
            </a>

            <nav class="hidden md:flex items-center space-x-8 text-sm">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/services" class="hover:text-blue-600">Services</a>
                <a href="/blog" class="hover:text-blue-600">Blog</a>
            </nav>

            @php
                $wa = '628xxxx';
                $msg = urlencode("Halo, saya butuh jasa MikroTik.\nKebutuhan: ");
            @endphp

            <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
                class="btn-primary text-white px-5 py-2 rounded-full text-sm font-semibold">
                Konsultasi
            </a>

        </div>
    </header>

    {{-- MAIN --}}
    <main class="relative">

        {{-- LIGHT EFFECT (LOW COST) --}}
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-2xl h-64 bg-blue-100 blur-[80px] opacity-50 pointer-events-none">
        </div>

        <div class="relative z-10">
            @yield('content')
        </div>

    </main>

    {{-- FLOATING CTA (HIGH CONVERSION) --}}
    <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
        class="fixed bottom-5 right-5 bg-green-500 text-white px-5 py-3 rounded-full shadow-lg text-sm font-semibold z-50">
        Chat WA
    </a>

    {{-- TRUST BAR --}}
    <div class="text-center text-xs text-slate-500 py-6">


        {{-- FOOTER --}}
        <footer class="bg-slate-900 text-white pt-16 pb-10">
            <div class="max-w-7xl mx-auto px-4">

                <div class="grid md:grid-cols-3 gap-10">

                    <div>
                        <h3 class="font-bold mb-3">MikroTik Pro</h3>
                        <p class="text-sm text-slate-400">
                            Spesialis jaringan MikroTik untuk bisnis, ISP, dan enterprise.
                        </p>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-3">Layanan</h4>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li><a href="/vpn-mikrotik">VPN</a></li>
                            <li><a href="/load-balancing">Load Balancing</a></li>
                            <li><a href="/hotspot">Hotspot</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-semibold mb-3">Kontak</h4>
                        <p class="text-sm text-slate-400">
                            WhatsApp: 08xxxxxxx<br>
                            Indonesia
                        </p>
                    </div>

                </div>

                <div class="mt-10 text-center text-xs text-slate-500">
                    © {{ date('Y') }} MikroTik Pro
                </div>

            </div>
        </footer>

</body>

</html>
