@section('title', 'Edit Post')
@section('action', route('posts.create'))
@extends('layout')

@section('content')

<h1 class="title">Edit: {{ $post->title }}</h1>

<form method="post" action="{{ route('posts.update', $post) }}">

    @csrf
    @method('patch')
    @include('partials.errors')

    <div class="form-group">
        <label class="label">Title</label>
        <div class="control">
            <input type="text" name="title" value="{{ old('title') }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />
        </div>
    </div>

    <div class="form-group">
        <label class="label">Content</label>
        <div class="control">
            <textarea name="content" class="textarea" placeholder="Content" rows="10" cols="80" minlength="5" maxlength="2000" required rows="10">{{ old('content') }}</textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="label">Category</label>
        <div class="control">
            <div class="dropdown">
                <select name="category" required>
                    <option value="" disabled selected>Release Date</option>
                    <option value="2020 - 2010" {{ old('category') === '2020 - 2010' ? 'selected' : null }}>2020 - 2010</option>
                    <option value="2010 - 2000" {{ old('category') === '2010 - 2000' ? 'selected' : null }}>2010 - 2000</option>
                    <option value="2000 - 1990" {{ old('category') === '2000 - 1990' ? 'selected' : null }}>2000 - 1990</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="control">
            <button type="submit" class="btn btn-outline-dark">Publish</button>
        </div>
    </div>

</form>

@endsection