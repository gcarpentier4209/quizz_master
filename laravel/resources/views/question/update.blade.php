@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Question</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                       UPDATE QUESTIONS ...


                        <table>
                            <thead>
                            <tr>
                                <th>Question</th>
                            </tr>
                            </thead>
                            <tbody>

{{--                            {{$question->body}}--}}

                            </tbody>
                        </table>


{{--                        <a href="{{route("create.question")}}">New question</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

