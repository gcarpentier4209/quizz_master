<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showAll()
    {
        $questions = Question::all();
        return view('question.index')->with(compact('questions'));
    }

    public function showCreate()
    {

        return view('question.create');
    }

    public function create(Request $request)
    {

        $question = new Question;


        $question->body = $request->input('body');
        $question->clue = $request->input("clue");
        $question->difficulty = $request->input("difficulty");

        $question->save();

        $question->answers()->saveMany([
            new Answer(['id_question'=> Question::all()->last(),'body' => $request->solution]),
            new Answer(['id_question'=> Question::all()->last(),'body' => $request->answer1]),
            new Answer(['id_question'=> Question::all()->last(),'body' => $request->answer2]),
            new Answer(['id_question'=> Question::all()->last(),'body' => $request->answer3]),
        ]);


        return redirect('/questions');

    }

    public function showOne($id)
    {
        $question = Question::where('id', $id)->first();

        return view('question.show')->with(compact('question'));
    }

    public function showUpddate($id)
    {
        $question = Question::where('id', $id)->first();
        return view('question.update')->with(compact('question'));
    }

    public function update(Request $request, $id)
    {
        $question = Question::where('id', $id)->first();
        $question->question = $request->get('question');
        $question->clue = $request->get("clue");
        $question->save();

        return redirect('/questions');


    }

    public function showDestroy($id)
    {
        $question = Question::where('id', $id)->first();
        return view('cv.destroy')->with(compact('question'));
    }


    public function destroy($id)
    {
        $question = Question::where('id', $id)->first();
        $question->delete();

        return redirect('/questions');
    }
}