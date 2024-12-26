<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Note</title>
</head>
<body>
    <h1>Create a New Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        <br><br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        <br><br>
        <button type="submit">Save Note</button>
    </form>
    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>
