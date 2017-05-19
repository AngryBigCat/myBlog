@extends('layouts.default')

@section('title', $user->name)

@section('content')
<div class="user_info">
    @include('shared.user_info', ['user' => $user])
</div>
<ol class="statuses col-md-8 col-md-offset-2">
    @foreach ($statuses as $status)
        @include('statuses._status')
    @endforeach
    {!! $statuses->render() !!}
</ol>
@stop