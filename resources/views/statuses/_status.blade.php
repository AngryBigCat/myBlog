<li class="media">
    <div class="media-left">
        <a href="{{ route('users.show', $user->id )}}">
            <img class="media-object img-circle" src="{{ $user->gravatar(80) }}" alt="{{ $user->name }}">
        </a>
    </div>
    <div class="media-body">
        <h4 class="media-heading"><a href="{{ route('users.show', $user->id )}}">{{ $user->name }}</a></h4>
        <div class="timestamp">{{ $status->created_at->diffForHumans() }}</div>
        <div class="content">{{ $status->content }}</div>
    </div>
</li>