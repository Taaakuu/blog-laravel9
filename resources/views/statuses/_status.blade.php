<li class="d-flex mt-4 mb-4">
    <a class="flex-shrink-0" href="{{ route('users.show', $user->id) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
    </a>
    <div class="flex-grow-1 ms-3">
        <h5 class="mt-0 mb-1">{{ $user->name }} <small>/ {{ $status->created_at->diffForHumans() }}</small></h5>
        {{ $status->content }}
    </div>
</li>
