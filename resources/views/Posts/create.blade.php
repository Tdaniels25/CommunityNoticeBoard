@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create New Project</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="headline">Headline</label>
                <input type="text" name="headline" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="author_name">Author Name</label>
                <input type="text" name="author_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="body_text">Body Text</label>
                <textarea name="body_text" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="g-recaptcha">reCAPTCHA</label>
                {!! no_captcha()->display() !!}
            </div>
            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
            <button type="submit" class="btn btn-primary">Create Project</button>
        </form>
    </div>
@endsection

{!! no_captcha()->script() !!}