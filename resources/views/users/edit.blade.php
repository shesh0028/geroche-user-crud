<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $user->email }}" required>
    </div>
    <div>
        <label for="password">Password (leave blank to keep current password):</label>
        <input type="password" name="password" id="password">
    </div>
    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
    </div>
    <button type="submit">Update User</button>
</form>