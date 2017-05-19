@extends('layouts.default')

@section('title', '所有用户')

@section('content')

    <div class="col-md-offset-2 col-md-8">
        <h1 class="text-center">所有用户</h1>
        <ul class="users" id="all-user-list">
            <transition name="slide-fade">
                <div class="alert alert-success" v-if="seen">@{{ message }}</div>
            </transition>
            @foreach ($users as $user)
                @include('users._users')
            @endforeach
        </ul>
        {!! $users->render() !!}
    </div>

@stop