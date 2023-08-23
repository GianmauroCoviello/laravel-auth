@extends('layouts.admin')

@section('content')

    <div class="container p-4">
        <div class="row ">
            <div class="col-12 ">
            
                <h1>{{$project->title}}</h1>

                <p>{{$project->content}}</p>
            </div>
            <div class="col">
                <a href="{{route('admin.projects.index')}}" class="btn btn-primary">
                    ritorna alla pagina precedente
                </a>
            </div>
        </div>
    </div>

    
@endsection