@extends('layout')

@section('content')
<h1>Create a New Projects</h1>

<form method="POST" action="/projects" style="margin-bottom: 1em;">
    {{ csrf_field() }}
    <div class="field">
        <label for="" class="label">Project Title</label>
        <div class="control">
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title">
        </div>
    </div>

    <div class="field">
        <label for="" class="label">Project Description</label>
        <div class="control">
            <textarea name="description" class="textarea"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create Project</button>
        </div>
    </div>

    @if ($errors->any())
    <div class="notification is-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>



@endsection