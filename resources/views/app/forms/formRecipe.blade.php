@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@php
    $isEdit = isset($recipe);
@endphp


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Resep Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 700px;
        }

        h2 {
            color: #D14D29;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #D14D29;
            color: #fff;
            border: none;
        }

        .btn-custom:hover {
            background-color: #b13f22;
        }

        .btn-secondary {
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Tambah Resep Baru</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ $isEdit ? route('recipes.update', $recipe->id) : route('recipe.store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @if(isset($recipe))
                @method('PUT')
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Judul Resep</label>
                <input type="text" name="title" id="title" class="form-control"
                    value="{{ old('title', $recipe->title ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="ingredients" class="form-label">Bahan-bahan</label>
                <textarea name="ingredients" id="ingredients" rows="4" class="form-control"
                    required>{{ old('ingredients', $recipe->ingredients ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="tools" class="form-label">Alat Memasak</label>
                <textarea name="tools" id="tools" rows="3" class="form-control"
                    required>{{ old('tools', $recipe->tools ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="steps" class="form-label">Cara Membuat</label>
                <textarea name="steps" id="steps" rows="4" class="form-control"
                    required>{{ old('steps', $recipe->steps ?? '') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto Masakan (Opsional)</label>
                @if($isEdit && $recipe->image)
                    <div class="mb-3">
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="Gambar Resep"
                            class="w-32 h-32 object-cover">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
            </div>

            <div class="d-flex justify-content-end">
                <a href="{{ route('recipe.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-custom">Simpan Resep</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>