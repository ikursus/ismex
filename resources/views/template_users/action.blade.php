<a href="{{ route('users.edit', $profile->user_id) }}" class="btn btn-sm btn-info">EDIT</a>
<a href="{{ route('profiles.show', $profile->user_id) }}" class="btn btn-sm btn-warning">PROFILE</a>
<form method="POST" action="{{ route('users.destroy', $profile->user_id) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
</form>