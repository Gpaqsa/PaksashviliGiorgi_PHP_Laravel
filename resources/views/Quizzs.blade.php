<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('quizzes.storeOrUpdate') }}" method="POST">
    @if ($quizId)
        <input type="hidden" name="quiz_id" value="{{ $quizId }}">
    @endif

    <input type="text" name="quiz_name" placeholder="Quiz Name" value="{{ $quiz->name ?? '' }}">
    <input type="text" name="quiz_description" placeholder="Quiz Description" value="{{ $quiz->description ?? '' }}">

    @foreach ($quizzes as $quiz)
    <tr>
        <td>
            <a href="{{ route('quizzes.show', $quiz->id) }}">{{ $quiz->name }}</a>
        </td>
        <td>
            <a href="{{ route('quizzes.edit', $quiz->id) }}">Edit</a>
        </td>
    </tr>
@endforeach

    <button type="submit">Save</button>
</form>

</body>
</html>
