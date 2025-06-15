<?php

namespace App\Http\Controllers\Web;

use App\Models\Forum;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function index()
    {
        $questions = Forum::latest()->get();
        return view('app.forum', compact('questions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'question' => 'required|string',
            'is_anonim' => 'nullable|boolean'
        ]);

        Forum::create([
            'name' => $request->is_anonim ? 'ANONIM' : $request->name,
            'is_anonim' => $request->is_anonim ?? false,
            'question' => $request->question,
        ]);

        return redirect()->back()->with('success', 'Pertanyaan berhasil dikirim!');
    }
}
