<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared.errors')
    {{ csrf_field() }}
    <textarea class="form-control" placeholder="说点新鲜事儿..." name="status_content">
    {{ old('content') }}
  </textarea>
    <button type="submit" class="btn btn-primary pull-right">发布</button>
</form>