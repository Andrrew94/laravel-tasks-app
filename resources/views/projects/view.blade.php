@extends('layout')

@section('content')

    <h1>Project title {{ $project->title }}</h1>
    <div>
        {{ $project->description }}
    </div>
    <a href="/projects/{{ $project->id }}/edit">Edit project</a>

    @if ($project->tasks->count())
        <div>
            @foreach($project->tasks as $task)
                <div>
                    <form action="/tasks/{{ $task->id }}" method="POST" class="{{ $task->completed ? 'is-completed' : '' }}">
                        @csrf
                        @method('PATCH')

                        <label for="completed">
                            <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                        </label>
                        {{ $task->description }}
                    </form>
                </div>
            @endforeach
        </div>
    @endif

@endsection