@extends('layouts.admin')

@section('page-title', "Modifica: $project->title")

@section('content')
    <form method="POST" action="{{ route('admin.projects.update', ['project' => $project->slug]) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title"
                value="{{ old('title', $project->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror " id="link" name="link"
                value="{{ old('link', $project->link) }}">
            @error('link')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover url</label>
            <input type="text" class="form-control @error('cover_image') is-invalid @enderror " id="cover_image"
                name="cover_image" value="{{ old('cover_image', $project->cover_image) }}">
            @error('cover_image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Testo dell'articolo</label>
            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $project->content) }}</textarea>
            @error('content')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Salva</button>
        <button type="reset" class="btn btn-danger">Cancella</button>

    </form>
@endsection
