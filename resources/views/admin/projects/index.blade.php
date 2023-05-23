@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.projects.create') }}" class="btn btn-warning m-3">Crea nuovo progetto</a>
    <div class="container d-flex flex-wrap p-0">
        @foreach ($projects as $project)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ $project->cover_image }}" class="card-img-top p-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->slug) }}">Vedi</a>
                    <a href="{{ $project->link }}" class="btn btn-success">Vai</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
