@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Création d'une nouvelle question</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{route("create.question.post")}}" method="post">
                            @csrf
                            <div class="row">
                                <label for="body">Question
                                    <input type="text" name="body" value="{{$question->body}}>
                                </label>
                            </div>

                            <div class="row">
                                <label for="clue">Indice
                                    <input type="text" name="clue" value="{{$question->body}}>
                                </label>
                            </div>

                            <div class="row">
                                <label for="difficulty">Difficulté
                                    <input type="text" name="difficulty" value="{{$question->body}}>
                                </label>
                            </div>

                            <div class="row">
                                <label for="solution">Solution
                                    <input type="text" name="solution" value="{{$question->body}}">
                                </label>
                            </div>

                            <div class="row">

                                <label for="answer1">Mauvaise réponse n°1
                                    <input type="text" name="answer1" value="{{$question->body}}>
                                </label>
                            </div>

                            <div class="row">

                                <label for="answer2">Mauvaise réponse n°2
                                    <input type="text" name="answer2" value="{{$question->body}}>
                                </label>
                            </div>

                            <div class="row">

                                <label for="answer3">Mauvaise réponse n°3
                                    <input type="text" name="answer3" value="{{$question->body}}>
                                </label>
                            </div>

                            <div class="row">

                                <input type="submit" value="Création" value="{{$question->body}}>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
