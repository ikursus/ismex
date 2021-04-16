<a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">EDIT</a>
<a href="{{ route('profiles.show', $user->id) }}" class="btn btn-sm btn-warning">PROFILE</a>
<form method="POST" action="{{ route('users.destroy', $user->id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
</form>