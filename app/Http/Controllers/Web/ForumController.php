<?php

namespace App\Http\Controllers\Web;

use App\Models\Forum;
use App\Models\Comentars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    /**
     * Menampilkan semua pertanyaan forum beserta komentar (jawaban).
     */
    public function index()
    {
        // Menggunakan eager loading agar tidak N+1 query
        $questions = Forum::with('comentars')->latest()->get();

        return view('app.forum', compact('questions'));
    }

    /**
     * Menyimpan pertanyaan baru.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'question' => 'required|string',
            'is_anonim' => 'nullable|boolean',
        ]);

        Forum::create([
            'name' => $request->boolean('is_anonim') ? 'ANONIM' : $request->name,
            'is_anonim' => $request->boolean('is_anonim'),
            'question' => $request->question,
        ]);

        return redirect()->back()->with('success', 'Pertanyaan berhasil dikirim!');
    }

    /**
     * Menyimpan jawaban atas pertanyaan tertentu.
     */
    public function storeAnswer(Request $request, $questionId)
    {
        $request->validate([
            'answer' => 'required|string',
            'name' => 'nullable|string|max:255',
        ]);

        Comentars::create([
            'forum_id' => $questionId,
            'answer' => $request->answer,
            'name' => $request->has('is_anonim') ? null : $request->name,
            'is_anonim' => $request->has('is_anonim'),
        ]);

        return back()->with('success', 'Jawaban berhasil dikirim.');
    }

}
