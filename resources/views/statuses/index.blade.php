@extends('layouts.default')

@section('title', $user->name)

@section('content')
    <div class="row">
        <div class="statuses-post col-md-6 col-md-offset-1">
            @include('statuses._status_form');
        </div>
        <div class="col-md-4">
            <section class="user_info">
                @include('shared.user_info')
            </section>
            <section class="stats">
                @include('shared.stats', ['user' => Auth::user()])
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-1">
            <h2>说说列表</h2>
            <hr>
            <ol class="statuses-box" id="statuses-box">
                @foreach($statuses as $status)
                        @include('statuses._status')
                @endforeach
            </ol>
        </div>
    </div>
@stop