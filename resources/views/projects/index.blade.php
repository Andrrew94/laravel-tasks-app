@extends('layout')


@section('content')
    <a href="/projects/create">Create new project</a>

    <h1>This is the projects page</h1>

    @foreach ($projects as $project)

        <ul>
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        </ul>

    @endforeach
@endsection
