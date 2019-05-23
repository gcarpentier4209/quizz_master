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

                        <form action="{{route("newquestion.post")}}" method="post">
                            @csrf
                            <div class="row">
                                <label for="question">Question
                                    <input type="text" name="question">
                                </label>
                            </div>
                            <div class="row">

                                <label for="goodanswer">Bonne réponse
                                    <input type="text" name="goodanswer">
                                </label>
                            </div>

                            <div class="row">

                                <label for="badanswer1">Mauvaise réponse n°1
                                    <input type="text" name="badanswer1">
                                </label>
                            </div>

                            <div class="row">

                                <label for="badanswer2">Mauvaise réponse n°2
                                    <input type="text" name="badanswer2">
                                </label>
                            </div>

                            <div class="row">

                                <label for="badanswer3">Mauvaise réponse n°3
                                    <input type="text" name="badanswer3">
                                </label>
                            </div>

                            <div class="row">

                                <input type="submit" value="Création">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
