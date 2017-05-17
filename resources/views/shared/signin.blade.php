<div class="modal fade" id="signin" tabindex="-1">
    <form @submit="onSigninSubmit" action="{{ route('signin') }}" method="post" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">请登录</h4>
            </div>
            <div class="modal-body">
                @include('shared.errors')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">邮箱：</label>
                    <input type="text" name="email" v-model="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="password" name="password" v-model="password"  class="form-control" value="{{ old('password') }}">
                </div>
            </div>
            <div class="modal-footer">
                <label><input type="checkbox" name="remember"> 记住我</label>
                <button type="submit" class="btn btn-primary">登陆</button>
            </div>
        </div>
    </form>
</div>