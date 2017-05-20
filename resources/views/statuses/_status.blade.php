<li class="media" v-on:mouseover="onAppearButtonOver" v-on:mouseout="onAppearButtonOut">
    <button class="btn btn-danger" v-on:click="onDeleteStatus('{{ route('statuses.destroy', $status->id) }}', $event)">删除</button>
    <div class="media-left" >
        <a href="{{ route('users.show', $user->id )}}">
            <img class="media-object img-circle" src="{{ $user->gravatar(80) }}" alt="{{ $user->name }}">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading"><a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a></h4>
        <div class="timestamp">{{ $status->created_at->diffForHumans() }}</div>
        <div class="content" v-on:mouseover="onAppearButtonOver">{{ $status->content }}</div>
    </div>
</li>