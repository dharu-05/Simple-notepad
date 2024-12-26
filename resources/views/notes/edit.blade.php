<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
</head>
<body>
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $note->title }}" required>
        <br><br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $note->content }}</textarea>
        <br><br>
        <button type="submit">Update Note</button>
    </form>
    <a href="{{ route('notes.index') }}">Back to Notes</a>
</body>
</html>
