@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Liste des questions</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{route("create.question")}}" class="btn btn-xs btn-primary" dark>ADD New question</a>

                        <table>
                            <thead>
                            <tr>
                                <th>Question</th>
                                <th>Difficulty</th>
                                <th>id_topic</th>
                                <th>answers</th>
                                <th>Edition</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach(\App\Models\Question::all() as $question)

                                <tr>
                                    <td>{{$question->body}}</td>
                                    <td>{{$question->difficulty}}</td>
                                    <td>{{$question->id_topic}}</td>
                                    <td>
                                        <ul>
                                            @foreach($question->answers as $answer)
                                                <li @if( $answer->is_correct) style="color: green" @endif>{{$answer->body}}   </li>
                                            @endforeach
                                        </ul>

                                    <td><a href="{{route("update.question",['question'=> $answer->id])}}"
                                           class="btn btn-xs btn-primary">modifier</a></td>
                                    <td><a href="" class="btn btn-xs btn-danger">supprimer</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
