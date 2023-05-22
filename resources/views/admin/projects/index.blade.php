@extends('layouts.admin')

@section('content')
    <div class="container d-flex">
        @foreach ($projects as $project)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ $project->cover_image }}" class="card-img-top p-3" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="{{ $project->link }}" class="btn btn-success">Vai</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
