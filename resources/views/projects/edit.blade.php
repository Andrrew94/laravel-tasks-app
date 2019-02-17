@extends('layout')


@section('content')
    <h1>Edit a project</h1>

    <form action="/projects/{{ $project->id }}" method="post">
        @method('PATCH')
        @csrf

        <div>
            <input type="text" placeholder="title" name="title" value="{{ $project->title }}">
        </div>

        <div>
            <textarea name="description" placeholder="Your description">{{ $project->description }}</textarea>
        </div>

        <button type="submit">Submit</button>
    </form>

    <form method="post" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf

        <button type="submit">Delete</button>
    </form>
@endsection



