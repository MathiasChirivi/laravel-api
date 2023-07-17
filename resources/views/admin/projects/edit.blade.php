@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h2>Modifica Il progetto</h2>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('admin.projects.update', $project) }}" class="needs-validation" enctype="multipart/form-data" >
            @csrf
            @method('PUT')


            <label for="name"><strong>Titolo</strong></label>
            <input class="form-control @error('title') is-invalid @enderror" id="title" type="text" value="{{old('title') ?? $project->title}}" name="title">
            @error("title") 
                <div class="invalid-feedback">Error: {{$message}}</div>
            @enderror

            <label for="name"><strong>Descrizione</strong></label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" type="text" name="description" cols="30" rows="4">{{old('description') ?? $project->description}}"</textarea>
            @error("description") 
                <div class="invalid-feedback">Error: {{$message}}</div>
            @enderror


            <label for="image">Aggiungi Immagine</label>
            <input type="file" name="image" id="image" class="form-control mb-4">

            <label for="name"><strong>Repository</strong></label>
            <input class="form-control @error('repository') is-invalid @enderror" id="repository" type="text" value="{{old('repository') ?? $project->repository}}" name="repository">
            @error("repository") 
                <div class="invalid-feedback">Error: {{$message}}</div>
            @enderror

            <label for="tipe_id"><strong>Type</strong></label>
            <select class="form-control mb-3" name="tipe_id" id="tipe_id">
                <option value="" selected>Seleziona il tipo</option>
                @foreach ($tipes as $tipe)
                    <option value="{{$tipe->id}}" {{ old('tipe_id', $project->tipe_id) == $tipe->id ? 'selected' : '' }}>
                        {{$tipe->name}}
                    </option>
                @endforeach
            </select>

            <h5 class="mb-3"><strong>Scegli la tecnologia che devi usare</strong></h5>
            @foreach ($technologies as $i => $technology)
            <div class="form-check">
                <input type="checkbox" value="{{$technology->id}}" name="technologies[]" id="technologies{{$i}}" class="form-check-input" 
                {{ in_array($technology->id, old('technologies', $project->technologies->pluck('id')->toArray())) ? 'checked' : '' }}>
                <label for="technologies{{$i}}" class="form-check-label"> {{$technology->name}} </label>
            </div>
            @endforeach

            <input class="form-control mt-4 btn btn-primary" type="submit" value="Crea Progetto">
        </form>
    </div>
</div>

@endsection