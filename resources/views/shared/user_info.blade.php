<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="img-circle gravatar"/>
</a>
<h1 class="">{{ $user->name }}</h1>