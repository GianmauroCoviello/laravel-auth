@extends('layouts.admin')

@section('content')
<div class="container p-4">
    <div class="row ">
        <div class="col-12 ">
            <h1>Modifica progetto</h1>
            <hr>
        </div>
        <div class="col-12">
            @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
            @endif
            <form action="{{route('admin.projects.update', $project->id)}}" method="POST">
                {{-- token obbligatorio --}}
                @csrf
                @method('PUT')
                <div class="form-group mb-3 mt-5">
                    <label class="control-table">Titolo</label>
                    <input type="text" name="title" id="title" class="form-control"  value="{{ old('title') ?? $project->title}}">
                </div>
                
                <div class="form-group mb-3 ">
                    <label class="control-table">Content</label>
                    {{-- <input type="text" name="title" id="title" required> --}}
                    <textarea name="content" id="content"  class="form-control"  required> {{ old('content') ?? $project->content}}</textarea>
                </div>

                <button type="submit" class="btn btn-success mt-4">
                    Salva
                </button>
                {{-- messaggi di errore --}}
                


            </form>
        </div>
        <div class="col mt-3">
            <a href="{{route('admin.projects.index')}}" class="btn btn-primary">
                ritorna alla pagina precedente
            </a>
        </div>
    </div>
</div>

    
@endsection