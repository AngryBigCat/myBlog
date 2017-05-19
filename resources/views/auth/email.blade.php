@extends('layouts.default')

@section('title', '密码重置')

@section('content')
    <form action="" method="post" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">密码重置</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="email">邮箱：</label>
                    <input type="text" name="email" v-model="email" class="form-control" value="{{ old('email') }}">
                </div>
            </div>
            <div class="modal-footer">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">确认</button>
                </div>
            </div>
        </div>
    </form>
@stop