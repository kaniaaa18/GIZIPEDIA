<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

                <div class="p-6 text-right">
                    <a href="{{ url('/') }}"
                        class="inline-block bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700 transition">
                        Kembali ke Home
                    </a>
                </div>

                {{-- Riwayat Artikel --}}
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Riwayat Artikel yang Dibaca</h3>
                    <ul class="list-disc ml-5">
                        @foreach(Auth::user()->articleLogs()->with('article')->latest()->take(5)->get() as $log)
                            <li>
                                <a href="{{ route('app.content-article', $log->article->slug) }}"
                                    class="text-blue-600 hover:underline">
                                    {{ $log->article->title }}
                                </a>
                                <small class="text-gray-500">({{ $log->viewed_at?->diffForHumans() ?? '-' }})</small>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Riwayat Perhitungan --}}
                <div class="p-6">
                    <h3 class="text-lg font-semibold mb-2">Riwayat Perhitungan Kalkulator</h3>
                    <ul class="space-y-4">
                        @foreach(Auth::user()->calculationLogs()->latest()->take(5)->get() as $calc)
                            <li class="border p-4 rounded-md shadow-sm bg-gray-50">
                                <div class="mb-2">
                                    <strong class="block text-gray-700">Input:</strong>
                                    <ul class="ml-4 list-disc text-sm text-gray-800">
                                        <li>Jenis Kelamin: {{ $calc->input['gender'] ?? '-' }}</li>
                                        <li>Usia: {{ $calc->input['usia'] ?? '-' }} tahun</li>
                                        <li>Berat: {{ $calc->input['berat'] ?? '-' }} kg</li>
                                        <li>Tinggi: {{ $calc->input['tinggi'] ?? '-' }} cm</li>
                                        <li>Aktivitas: {{ ucfirst($calc->input['aktivitas'] ?? '-') }}</li>
                                    </ul>
                                </div>

                                <div class="mb-2">
                                    <strong class="block text-gray-700">Hasil:</strong>
                                    <ul class="ml-4 list-disc text-sm text-gray-800">
                                        <li>Kebutuhan Kalori: {{ $calc->result['kalori'] ?? '-' }} kkal</li>
                                        <li>BMI: {{ $calc->result['bmi'] ?? '-' }}
                                            ({{ $calc->result['kategoriBmi'] ?? '-' }})</li>
                                        <li>Karbohidrat: {{ $calc->result['karbo'] ?? '-' }} gram</li>
                                        <li>Protein: {{ $calc->result['protein'] ?? '-' }} gram</li>
                                        <li>Lemak: {{ $calc->result['lemak'] ?? '-' }} gram</li>
                                    </ul>
                                </div>

                                <small class="text-gray-500 block mt-1">
                                    Dihitung {{ $calc->calculated_at?->diffForHumans() ?? '-' }}
                                </small>
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- Riwayat Resep yang Ditambahkan --}}
                <div class="p-6 mt-6 border-t">
                    <h3 class="text-lg font-semibold mb-2">Riwayat Resep yang Ditambahkan</h3>
                    <ul class="space-y-4">
                        @foreach(Auth::user()->recipes()->latest()->take(5)->get() as $recipe)
                            <li class="border p-4 rounded-md shadow-sm bg-gray-50">
                                <div class="mb-2">
                                    <strong class="block text-gray-700">Judul:</strong>
                                    <p class="text-sm text-gray-800 ml-4">{{ $recipe->title }}</p>
                                </div>

                                <div class="mb-2">
                                    <strong class="block text-gray-700">Bahan:</strong>
                                    <ul class="ml-4 list-disc text-sm text-gray-800">
                                        @foreach(explode("\n", $recipe->ingredients) as $ingredient)
                                            <li>{{ trim($ingredient) }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="mb-2">
                                    <strong class="block text-gray-700">Alat:</strong>
                                    <ul class="ml-4 list-disc text-sm text-gray-800">
                                        @foreach(explode("\n", $recipe->tools) as $tool)
                                            <li>{{ trim($tool) }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="mb-2">
                                    <strong class="block text-gray-700">Langkah Pembuatan:</strong>
                                    <p class="text-sm text-gray-800 ml-4">
                                        {!! \Illuminate\Support\Str::limit(strip_tags($recipe->steps), 150) !!}
                                    </p>
                                </div>

                                <div class="flex justify-between items-center mt-2">
                                    <small class="text-gray-500">Ditambahkan
                                        {{ $recipe->created_at->diffForHumans() }}</small>
                                    <a href="{{ route('recipes.edit', $recipe->id) }}"
                                        class="text-blue-600 hover:underline text-sm">Edit</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>