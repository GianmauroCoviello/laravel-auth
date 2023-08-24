@extends('layouts.admin')

@section('content')

    <div class="container p-4">
        <div class="row ">
            <div class="col-12 ">
            
                <h1>{{$project->title}}</h1>
                <div class="content-image my-3">
                    <img src="{{asset('storage/' . $project->cover_image)}}" alt="">
                </div>
                
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