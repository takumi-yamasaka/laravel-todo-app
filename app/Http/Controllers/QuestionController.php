<?php

namespace App\Http\Controllers;

use App\Models\Question; // ここを追加

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', ['questions' => $questions]);
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'question' => 'required',
            'choices' => 'required',
            'correct_answer_index' => 'required',
        ]);

        $question = new Question([
            'title' => $request->input('title'),
            'question' => $request->input('question'),
            'choices' => json_encode($request->input('choices')),
            'correct_answer_index' => $request->input('correct_answer_index'),
        ]);

        $question->save();

        return redirect()->route('questions.index')->with('success', '問題集が登録されました');
    }
    public function show($id)
    {
        $question = Question::find($id);
        return view('questions.show', ['question' => $question]);
    }

}
