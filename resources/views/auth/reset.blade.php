@extends('layouts.default')

@section('title', '更新密码')

@section('content')
    <form action="" method="post" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">更新密码</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">邮箱：</label>
                    <input type="text" name="email" v-model="email" class="form-control" value="{{ old('email') }}">
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