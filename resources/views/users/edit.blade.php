@extends('layouts.default')

@section('content')
    <form action="{{ route('users.update', $user->id) }}" method="post" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">编辑个人资料</h4>
            </div>
            <div class="gravatar-box">
                <a href="http://gravatar.com/emails" target="_blank">
                    <img src="{{ $user->gravatar('100') }}" alt="{{ $user->name }}" class="img-circle"/>
                </a>
            </div>
            <div class="modal-body">
                @include('shared.errors')
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">名称：</label>
                    <input type="text" name="name" v-model="name" class="form-control" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="email">邮箱：</label>
                    <input type="text" name="email" v-model="email" class="form-control" value="{{ $user->email }}" disabled>
                </div>
                <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="password" name="password" v-model="password" class="form-control" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <label for="password">确认密码：</label>
                    <input type="password" name="password_confirmation" v-model="password" class="form-control" value="{{ old('password_confirmation') }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">确认</button>
            </div>
        </div>
    </form>
@stop