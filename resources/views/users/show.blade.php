@extends('layouts.default')

@section('title', $user->name)

@section('content')
<div class="user_info">
    @include('shared.user_info', ['user' => $user])
</div>
<div class="row">
    <div class="col-md-offset-4 col-md-4">
        <div class="stats">
            @include('shared.stats', ['user' => $user])
        </div>
    </div>
</div>
@if (Auth::check())
    @include('users._follow_form')
@endif
<ol class="statuses col-md-8 col-md-offset-2">
    @foreach ($statuses as $status)
        @include('statuses._status')
    @endforeach
    {!! $statuses->render() !!}
</ol>
@stop