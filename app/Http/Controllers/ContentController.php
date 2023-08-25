<?php

namespace App\Http\Controllers;

use App\Models\QuestionAnswer;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return view('index', ['content' => QuestionAnswer::paginate(10)]);
    }

    public function create()
    {
        return view('admin.creation-form');
    }

    public function store(Request $request)
    {
        QuestionAnswer::create([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        return redirect()->to('admin');
    }

    public function show($id)
    {
        return view('admin.question-answer', ['content' => QuestionAnswer::whereId($id)->first()]);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        QuestionAnswer::whereId($id)->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        return redirect()->to('admin');
    }

    public function destroy($id)
    {
        QuestionAnswer::whereId($id)->delete();
        return redirect()->to('admin');
    }
}
