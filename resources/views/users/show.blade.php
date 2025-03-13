<h1>User Details</h1>
<p>Name: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>
<a href="{{ route('users.edit', $user->id) }}">Edit</a>
<form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('users.index') }}">Back to Users List</a>