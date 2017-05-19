<div>
    <form @submit.prevent="onEditSelfSubmit" action="{{ route('users.store') }}" method="post" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">编辑个人资料</h4>
            </div>
            <div class="modal-body">
                @include('shared.errors')
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">名称：</label>
                    <input type="text" name="name" v-model="name" class="form-control" value="{{ old('name') }}">
                </div>
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
                    <input type="password" name="password_confirmation" v-model="password" class="form-control" value="{{ old('password') }}">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary">确认</button>
            </div>
        </div>
    </form>
</div>