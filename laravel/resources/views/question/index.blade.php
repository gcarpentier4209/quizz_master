@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        EDIT QUESTIONS


                        <table>
                            <thead>
                            <tr>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Difficulty</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Models\Question::all() as $question)

                                <tr>
                                    <td>{{$question->body}}</td>
                                    <td>...</td>
                                    <td>{{$question->difficulty}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                        <a href="{{route("create.question")}}">New question</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
