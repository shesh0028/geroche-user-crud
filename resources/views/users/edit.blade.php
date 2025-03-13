@extends('layouts.app')

@section('content')
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required><br>

        <label>Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required><br>

        <label>Password (Leave blank if not changing):</label>
        <input type="password" name="password"><br>

        <button type="submit">Update</button>
    </form>
@endsection
