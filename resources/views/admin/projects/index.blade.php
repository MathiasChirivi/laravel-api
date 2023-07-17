@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($projects as $project)
        <div class="col-4">
            <div class="d-flex justify-content-center align-items-center card mt-3" style="height:40rem;">
                <img class="card-img-top" src="{{ asset("storage/".$project->image)}}" alt="">
                <div class="card-body h-25">
                    <h5 class="card-title"><strong>Nome del progetto:</strong> {{ $project->title }}</h5>
                    <p class="card-text"><strong>Nome repository:</strong> {{ $project->repository }}</p>
                    @if ($project->tipe)
                        <p><strong>Tipo di progetto</strong>: {{ $project->tipe->name }} </p>
                    @else
                        <p>Non esiste alcuno tipo per questo progetto</p>
                    @endif 
                    <div class="d-flex">
                        <p><strong>Tecnologia:</strong></p>
                        @forelse ($project->technologies as $technology)
                            <span class="ms-3"> {{$technology->name}} </span>
                        @empty
                            <span>Nessuno</span>
                        @endforelse
                    </div>
                </div>
                <a href="{{ route("admin.projects.show",$project ) }}" class="mb-4 btn btn-dark">View details</a>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection