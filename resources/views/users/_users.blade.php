<li>
    <img src="{{ $user->gravatar(80) }}" alt="{{ $user->name }}" class="img-circle"/>
    <a href="{{ route('users.show', $user->id)}}" class="username">{{ $user->name }}</a>
    @can('destroy', $user)
        <button @click="onDeleteUser('{{ route('users.destroy', $user->id) }}', $event)" type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
    @endcan
</li>