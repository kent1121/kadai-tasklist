@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <div class="col-sm-2">
                <h3>ユーザー</h3>
                <p>{{ Auth::user()->name }}</p>
            </div>
            <div class="col-sm-10">
                <h3>タスク一覧</h3>
                {!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'btn btn-primary mb-3']) !!}
                @if (count($tasks) > 0)
                    @include('tasks.index', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasklist!</h1>
                {!! link_to_route('signup.get', '新規ユーザー登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection