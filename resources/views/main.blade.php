@extends('layouts.app')

@section('title', "MainPage")


@section('content')
<h1>Quiz App</h1>
<ul class="quiz-list-group">
    @foreach ($quizzes as $quiz)
    <li class="quiz-list-group-item">
        {{ $quiz['name'] }}
        <span class="float-right"> Status: {{ $quiz['status'] }}</span>
        <img src="{{ $quiz['image'] }}" alt="image" class="img-fluid img-thumbnail rounded" />
    </li>
    @endforeach
</ul>
<footer>
    <div class="mt-4">
        <h2>Subscribe to Us</h2>
        <form action="{{ route('subscribe') }}" method="POST">
            @csrf
            <div>
                <label for="eamil">Email:</label>
                <input type="Email" name="email" , id="email" , class="form-control" , required />
            </div>
            <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
    </div>
</footer>

@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@endpush

@push('js')
<script src="{{ asset(' js/app.js') }}"></script>
@endpush