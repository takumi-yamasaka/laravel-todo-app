<?php

namespace App\Http\Controllers;

use App\Models\Question; // ここを追加

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = Question::all();
        return view('questions.index');
    }
}
