<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function create()
    {
        return view('app.forms.formRecipe');
    }

    public function store(Request $request)
    {
        // Validasi input form
        $request->validate([
            'title' => 'required|string|max:255',
            'ingredients' => 'required|string',
            'tools' => 'required|string',
            'steps' => 'required|string',
            'image' => 'nullable|image|max:20000',
        ]);

        // Default: tidak ada gambar
        $imagePath = null;

        // Jika user mengunggah gambar
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            // Pastikan gambar valid
            if ($image->isValid()) {
                // Simpan ke storage/app/public/recipes
                $path = $image->store('recipes', 'public');

                // Ubah path agar bisa diakses via URL /storage/recipes/xxx.jpg
                $imagePath = str_replace('public/', 'storage/', $path);
            } else {
                return back()->withErrors(['image' => 'Gagal upload: file tidak valid'])->withInput();
            }
        }

        // Simpan data ke database
        Recipe::create([
            'title' => $request->title,
            'ingredients' => $request->ingredients,
            'tools' => $request->tools,
            'steps' => $request->steps,
            'image' => $imagePath,
            'user_id' => Auth::id(),
        ]);

        // Redirect ke halaman resep
        return redirect()->route('recipes.index')->with('success', 'Resep berhasil disimpan.');
    }


    public function index()
    {
        $recipes = Recipe::latest()->get();
        return view('app.recipe', compact('recipes'));
    }

    public function ayamPanggang()
    {
        return view('app.forms.recipe_ayam_panggang');
    }

    public function saladQuinoa()
    {
        return view('app.forms.recipe_salad_quinoa');
    }

    public function ikanSalmon()
    {
        return view('app.forms.recipe_ikan_salmon');
    }

    public function supSayuran()
    {
        return view('app.forms.recipe_sup_sayuran');
    }

    public function rotiBijiBijian()
    {
        return view('app.forms.recipe_roti_biji_bijian');
    }
}
