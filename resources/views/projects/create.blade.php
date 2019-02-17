@extends('layout')


@section('content')
    <h1>Create a new project</h1>

    <form action="/projects" method="post">
        @csrf

        <div>
            <input type="text" placeholder="title" name="title">
        </div>

        <div>
            <textarea name="description" placeholder="Your description"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
@endsection



