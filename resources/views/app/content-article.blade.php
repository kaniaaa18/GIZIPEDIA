<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-md border border-gray-200">
    <h1 class="text-2xl font-bold text-red-700 mb-4">{{ $article->title }}</h1>

    {{-- Tampilkan PDF --}}
    @if ($article->content)
        <div class="aspect-w-16 aspect-h-9 mb-4" style="height: 600px;">
            <iframe src="{{ asset('storage/' . $article->content) }}" type="application/pdf" width="100%" height="100%" frameborder="0"></iframe>
        </div>
    @else
        <p class="text-gray-500">File PDF tidak tersedia.</p>
    @endif

    <a href="{{ route('app.content') }}" class="inline-block mt-4 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
        ← Kembali ke Daftar Artikel
    </a>
</div>
