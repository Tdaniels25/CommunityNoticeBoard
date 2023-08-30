@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Software Projects</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Project</a>
        
        <div class="projects">
            @foreach ($projects as $project)
                <div class="project">
                    <h2>{{ $project['headline'] }}</h2>
                    <p class="author">Author: {{ $project['author_name'] }}</p>
                    <p>{{ $project['body_text'] }}</p>
                    <a href="#" class="btn btn-info">View Project</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
