<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
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
        $solution = new Answer;
        $answer1 = new Answer;
        $answer2 = new Answer;
        $answer3 = new Answer;

//        $post->comments()->saveMany([
//            new App\Comment(['message' => 'A new comment.']),
//            new App\Comment(['message' => 'Another comment.']),
//        ]);

        $question->question = $request->input('question');
        $question->clue = $request->input("clue");

        $question->save();

        $question->answers()->sync($request->get('answer'));

        return redirect('/questions');

    }

    public function show($id)
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