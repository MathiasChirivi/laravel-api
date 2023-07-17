@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="d-flex mb-4">
        <div class="d-flex me-5">
            <img src="{{ asset("storage/". $project->image)}}" alt="">
        </div>
        <div>
            <div class="row justify-content-between">
                <h4 class="mb-4">Vista dettaglio Progetto</h4>
                <div class="mb-3"><strong>Titolo Progetto: </strong> {{  $project->title }}</div>
                <div class="mb-3"><strong>Tipo di Progetto</strong>: {{$project->tipe ? $project->tipe->name : "Senza Tipe"}} </div>
                <div class="d-flex">
                    <div class="mr-0"><strong>Programma Usato:</strong></div>
                    <ul class="d-flex gap-2 ps-2">
                        @foreach ($project->technologies as $technology)
                        <li class="list-unstyled">
                            {{$technology->name}}
                        </li>            
                        @endforeach
                    </ul>
                </div>
        <p><strong>Descrizione Progetto</strong>: {{  $project->description }}</p>
        <p><strong>Repository Github</strong>:  {{$project->repository }}</p>
    </div>
</div>
</div>
<div class="d-flex justify-content-between">
    <div>
        <a href="{{ route("admin.projects.edit",$project ) }}" class="btn btn-dark">Modifica il progetto</a>
    </div>
        <div>
            <form id="deleteForm" action="{{ route('admin.projects.destroy', $project) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Cancella il progetto">
            </form>
        </div>
    </div>
</div>

@endsection