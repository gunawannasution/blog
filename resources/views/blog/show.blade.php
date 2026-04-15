@extends('layouts.app')

@section('title', $post->meta['title'] ?? $post->title)

@section('meta_seo')
    <meta name="description" content="{{ $post->meta['desc'] ?? Str::limit(strip_tags($post->content), 150) }}">
    <link rel="canonical" href="{{ url()->current() }}">
@endsection

@section('content')

    @php
        $wa = '628xxxx';
        $msg = urlencode("Halo, saya baca artikel \"{$post->title}\" dan ingin konsultasi MikroTik.");
    @endphp

    {{-- READING PROGRESS --}}
    <div id="progress" class="fixed top-0 left-0 h-1 bg-blue-600 z-50" style="width:0%"></div>

    <article class="max-w-3xl mx-auto px-4 py-16">

        {{-- HEADER --}}
        <header class="mb-12">

            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight text-slate-900 mb-6">
                {{ $post->title }}
            </h1>

            <div class="flex items-center space-x-3 text-sm text-slate-500">
                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center font-bold text-blue-600">
                    A
                </div>
                <div>
                    <p class="text-slate-800 font-semibold">Administrator</p>
                    <p class="text-xs">
                        {{ $post->created_at?->format('d M Y') }} • 5 min read
                    </p>
                </div>
            </div>

        </header>

        {{-- FEATURE IMAGE --}}
        <img src="{{ asset('images/default-cover.jpg') }}" class="rounded-2xl mb-12 w-full">

        {{-- CONTENT WRAPPER --}}
        <div class="relative flex gap-10">

            {{-- TOC (DESKTOP) --}}
            <aside id="toc" class="hidden lg:block w-56 text-sm text-slate-400 sticky top-24 h-fit">
                <p class="font-semibold mb-3 text-slate-600">Daftar Isi</p>
                <ul id="toc-list" class="space-y-2"></ul>
            </aside>

            {{-- CONTENT --}}
            <div id="content"
                class="prose prose-lg max-w-none prose-slate
                   prose-headings:font-bold
                   prose-a:text-blue-600
                   prose-img:rounded-xl">

                {!! nl2br(e($post->content)) !!}

            </div>

        </div>

        {{-- CTA SOFT --}}
        <div class="mt-20 border-t pt-10">
            <div class="bg-slate-50 p-6 rounded-2xl text-center">
                <h3 class="font-semibold text-slate-900 mb-2">
                    Butuh bantuan setup MikroTik?
                </h3>
                <p class="text-sm text-slate-500 mb-4">
                    Konsultasi gratis • Bisa remote
                </p>
                <a href="https://wa.me/{{ $wa }}?text={{ $msg }}"
                    class="btn-primary px-6 py-3 rounded-full text-white text-sm font-semibold">
                    Chat WhatsApp
                </a>
            </div>
        </div>

    </article>

    {{-- SCRIPT: PROGRESS + TOC --}}
    <script>
        document.addEventListener("DOMContentLoaded", () => {

            // PROGRESS BAR
            const progress = document.getElementById('progress');
            window.addEventListener('scroll', () => {
                const total = document.body.scrollHeight - window.innerHeight;
                const progressWidth = (window.scrollY / total) * 100;
                progress.style.width = progressWidth + "%";
            });

            // TOC GENERATOR
            const content = document.getElementById('content');
            const tocList = document.getElementById('toc-list');

            const headings = content.querySelectorAll("h2, h3");

            headings.forEach((el, i) => {
                const id = "heading-" + i;
                el.setAttribute("id", id);

                const li = document.createElement("li");
                li.innerHTML = `<a href="#${id}" class="hover:text-blue-600">${el.innerText}</a>`;

                tocList.appendChild(li);
            });

        });
    </script>

@endsection
